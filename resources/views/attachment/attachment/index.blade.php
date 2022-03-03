@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('plugins/components/dropify/dist/css/dropify.min.css')}}">
<style type="text/css">
    .file_uploader .custom-file_attachment, .file_uploader .custom-file_image { display: none;}
.Attachment .attachment_textarea>textarea { background: transparent; border: 1px solid #c4c8c8; border-radius: 5px;}
</style>

@endpush
@section('content')
    <div class="container-fluid">

        <div class="row Attachment">
           <div class="col-md-12">
              @if(Auth::user()->hasRole('Manager') || Auth::user()->hasRole('company'))
              <h2>Add Attachment</h2>
                <form method="POST" action="{{ url('/attachment/attachment') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="attachment_upload">
                      <input type="file" id="input-file-now" name="attachment" class="dropify" required />
                    </div>
                   <div class="form-group">
                      <textarea class="form-control" name="description" rows="5" id="" placeholder="Discription"></textarea>
                    </div>
                   <div class="file_uploader form-inline">
                      {{--  <div class="custom-file_attachment">
                          <input type="file" class="custom-file-input" id="">
                          <i class="icon-paper-clip"></i>
                       </div>
                       <div class="custom-file_image">
                          <input type="file" class="custom-file-input" id="">
                          <i class="icon-camera"></i>
                       </div> --}}
                       <button type="submit" class="btn">Add Attachment</button>
                    </div>
                 </form>
              @endif   

                 <div class="white-box attachment_table">
                   <h2>Attachments</h2>
                   <table class="table table-bordered" id="attachment">
                     <thead>
                       <tr>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Due Date</th>
                         <th>Project Priority</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                      @foreach ($attachment as $key=>$element)
                          <tr @if($key > 4) class="showall" @endif>
                             <td>
                              <?php
                               $extantion = explode(".",$element->attachment);
                              ?>
                              @if($extantion[1] == 'pdf')
                               <i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i>
                              @elseif($extantion[1] == 'docx')
                                <i class="fa fa-file-word-o fa-lg" aria-hidden="true"></i>
                              @elseif($extantion[1] == 'png' || $extantion[1] == 'jpg')
                                <i class="fa fa-picture-o fa-lg" aria-hidden="true"></i>
                              @elseif($extantion[1] == 'mp4')
                                <i class="fa fa-video-camera fa-lg" aria-hidden="true"></i>
                              @else
                                <i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i>
                              @endif 
                               <span>{{ $element->Name }}</span>
                             </td>
                             <td>{{ $element->description }}</td>
                             <td>{{ $element->gettask->end_date }}</td>
                             <td>{{ $element->gettask->priority }}</td>
                             <td><i class="fa fa-download" aria-hidden="true"></i> <a href="{{ asset('website') }}/{{ $element->attachment }}" download>Download</a></td>
                          </tr>
                       @endforeach 
                     </tbody>
                   </table>
                   <div class="show_all_btn">
                     <button class="btn showall_btn">Show all</button>
                   </div>
                 </div>
           </div>
        </div>




    </div>

@endsection

@push('js')
    <script src="{{asset('plugins/components/toast-master/js/jquery.toast.js')}}"></script>

    <script src="{{asset('plugins/components/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <!-- end - This is for export functionality only -->
    <script type="text/javascript">
      $('.showall').hide();
      $(document).on('click','.showall_btn',function(){
        $(this).hide();
        $('.showall').show();
      });  
    </script>
    <script>
        $(document).ready(function () {

            @if(\Session::has('message'))
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '{{session()->get('message')}}',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            @endif
        })

        $(function () {
            $('#myTable').DataTable({
                'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1] /* 1st one, start by the right */
                }]
            });

        });
    </script>

@endpush
@push('js')
    <script src="{{asset('js/jasny-bootstrap.js')}}"></script>

    <script src="{{asset('plugins/components/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(function() {
            // Basic
            $('.dropify').dropify();
            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
  $("input[name='query']").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#attachment tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    </script>
@endpush
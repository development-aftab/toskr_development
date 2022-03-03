@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{asset('plugins/components/dropify/dist/css/dropify.min.css')}}">

@endpush

@section('content')
    <div class="container-fluid">

        <div class="row Attachment">
           <h2>Add Attachment</h2>
           <div class="col-md-12">
                 <form>
                    <div class="attachment_upload">
                      <input type="file" id="input-file-now" class="dropify" />
                    </div>
                   <div class="file_uploader form-inline">
                       <div class="custom-file_attachment">
                          <input type="file" class="custom-file-input" id="">
                          <i class="icon-paper-clip"></i>
                       </div>
                       <div class="custom-file_image">
                          <input type="file" class="custom-file-input" id="">
                          <i class="icon-camera"></i>
                       </div>
                       <button type="submit" class="btn ">Add Attachment</button>
                    </div>
                 </form>

                 <div class="white-box attachment_table">
                   <h2>Attachments</h2>
                   <table class="table table-bordered">
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
                       <tr>
                         <td>
                           <img src="">
                           <span>Lorem-Ipsum.pdf</span>
                         </td>
                         <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</td>
                         <td>26/08/2021</td>
                         <td>Hight</td>
                         <td><i class="fa fa-download" aria-hidden="true"></i> Download</td>
                       </tr>
                       <tr>
                         <td>
                           <img src="">
                           <span>Lorem-Ipsum.pdf</span>
                         </td>
                         <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</td>
                         <td>26/08/2021</td>
                         <td>Hight</td>
                         <td><i class="fa fa-download" aria-hidden="true"></i> Download</td>
                       </tr>
                       <tr>
                         <td>
                           <img src="">
                           <span>Lorem-Ipsum.pdf</span>
                         </td>
                         <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</td>
                         <td>26/08/2021</td>
                         <td>Hight</td>
                         <td><i class="fa fa-download" aria-hidden="true"></i> Download</td>
                       </tr>
                       <tr>
                         <td>
                           <img src="">
                           <span>Lorem-Ipsum.pdf</span>
                         </td>
                         <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</td>
                         <td>26/08/2021</td>
                         <td>Hight</td>
                         <td><i class="fa fa-download" aria-hidden="true"></i> Download</td>
                       </tr>
                       <tr>
                         <td>
                           <img src="">
                           <span>Lorem-Ipsum.pdf</span>
                         </td>
                         <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</td>
                         <td>26/08/2021</td>
                         <td>Hight</td>
                         <td><i class="fa fa-download" aria-hidden="true"></i> Download</td>
                       </tr>
                     </tbody>
                   </table>
                   <div class="show_all_btn">
                     <button class="btn">Show all</button>
                   </div>
                 </div>
           </div>
        </div>




    </div>
@endsection

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
    </script>
@endpush

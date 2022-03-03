@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
              <div class="white-box attachment_table">
                   <h2>Task Insight</h2>
                   <table class="table table-bordered">
                     <thead>
                       <tr>
                         <th>Name</th>
                        
                         <th>Description</th>
                         <th>Due Date</th>
                         
                         <th>Project Priority</th>
                         <th>status</th>
                       </tr>
                     </thead>
                     <tbody>
                        @foreach ($task as $element)
                           <tr>
                             <td>
                               {{ $element->project_name }}
                             </td>
                            
                             <td>{{ $element->description }}</td>
                             
                             <td>{{ $element->end_date }}</td>
                             <td>{{ $element->priority }}
                             <td>{{ $element->status }}
                           </tr>
                        @endforeach 
                     </tbody>
                   </table>
                   <div class="show_all_btn">
                     <button class="btn">Show all</button>
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

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
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">{{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'TaskDetailLog') }} </h3>
                    @can('view-'.str_slug('TaskDetail'))
                        <a class="btn btn-success pull-right" href="{{ url('/taskDetail/task-detail') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Activity Name</th><th>Process Status</th><th>Data Status</th><th>Note</th><th>Date</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasklog as $item)
                                <tr>
                                    <td>{{ $loop->iteration??$item->id }}</td>
                                    <td>{{ $item->activity_name }}</td><td>@if($item->process == '1') Preparation @endif @if($item->process == '2') Processing @endif @if($item->process == '3') Check Point @endif @if($item->process == '4') Delivering @endif</td>
                                    <td>@if(in_array('1',json_decode($item->status))) Data Collection  @endif @if(in_array('2',json_decode($item->status))) , Modeling @endif @if(in_array('3',json_decode($item->status))) , Investigation @endif</td>
                                    <td>{{ $item->note }}</td><td>{{ $item->created_at }}</td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $tasklog->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>
                </div>
            </div>
        </div>
       





    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script> 
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="{{asset('plugins/components/toast-master/js/jquery.toast.js')}}"></script>
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
            //  var table = $('#myTable').DataTable({
            //     'aoColumnDefs': [{
            //         'bSortable': false,
            //         'aTargets': [-1] 
            //     }],
            //     dom: 'Bfrtip',
            //     buttons: [
            //         // 'copy', 'csv', 'excel', 'pdf', 'print'
            //     {
            //     extend: 'copy',
            //         exportOptions: {
            //             columns: [ 0, 1, 2]
            //         }
            //     },
            //     {
            //     extend: 'csv',
            //         exportOptions: {
            //             columns: [ 0, 1, 2]
            //         }
            //     },
            //     {
            //     extend: 'excel',
            //         exportOptions: {
            //             columns: [ 0, 1, 2]
            //         }
            //     },
            //     {
            //     extend: 'pdf',
            //         exportOptions: {
            //             columns: [ 0, 1, 2]
            //         }
            //     },
            //     {
            //     extend: 'print',
            //         exportOptions: {
            //             columns: [ 0, 1, 2]
            //         }
            //     }

            //     ]
            // });
             $('#myTable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );

        });
    </script>

@endpush

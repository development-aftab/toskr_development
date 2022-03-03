@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
          <style type="text/css">
                .avatar {
                  vertical-align: middle;
                  width: 50px;
                  height: 50px;
                  border-radius: 50%;
                }
          </style>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">{{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', Session::get('request_type')) }}</h3>

                    @can('add-'.str_slug('Employee'))
                        <a class="btn btn-success pull-right" href="{{ url('/employee/employee/create') }}"><i
                                    class="icon-plus"></i> Add Member</a>
                    @endcan
                     <a class="btn btn-success pull-right" data-toggle="modal" data-target="#exampleModal" ><i
                                    class="icon-plus"></i> Invite Member </a>
                    <div class="clearfix"></div>
                    <hr>
                    <div id="exTab1"> 
                            <ul  class="nav nav-pills">
                                <li class="active"><a  href="#Managers_tab" data-toggle="tab">Managers</a></li>
                                <li><a href="#Employee_tab" data-toggle="tab">Employee</a></li>
                            </ul>
                            
                           
                                    <div class="table-responsive">
                                     <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="Managers_tab">    
                                        <table class="table" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th><th>Email</th><th>Phone</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($employee as $item)
                                              @if(!$item->hasRole('Manager')) @continue @endif
                                                <tr>
                                                    <td><img src="{{asset('storage')}}/uploads/users/{{ $item->profile->pic??'' }}" alt="Avatar" class="avatar"></td>
                                                    <td>{{ $item->name }}</td><td>{{ $item->email }}</td><td>{{ $item->profile->phone }}</td>
                                                    <td>
                                                        @can('view-'.str_slug('Employee'))
                                                            <a href="{{ url('/employee/employee/' . $item->id) }}"
                                                               title="View {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Employee') }}">
                                                                <button class="btn btn-info btn-sm">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                                </button>
                                                            </a>
                                                        @endcan

                                                        @can('edit-'.str_slug('Employee'))
                                                            <a href="{{ url('/employee/employee/' . $item->id . '/edit') }}"
                                                               title="Edit {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Employee') }}">
                                                                <button class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                                </button>
                                                            </a>
                                                        @endcan

                                                        @can('delete-'.str_slug('Employee'))
                                                            <form method="POST"
                                                                  action="{{ url('/employee/employee' . '/' . $item->id) }}"
                                                                  accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                        title="Delete {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Employee') }}"
                                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                                </button>
                                                            </form>
                                                        @endcan


                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                       </div>
                                    <div class="tab-pane" id="Employee_tab">
                                         <table class="table" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th><th>Email</th><th>Phone</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($employee as $item)
                                             @if(!$item->hasRole('employee')) @continue @endif
                                                <tr>
                                                    <td><img src="{{asset('storage')}}/uploads/users/{{ $item->profile->pic??'' }}" alt="Avatar" class="avatar"></td>
                                                    <td>{{ $item->name }}</td><td>{{ $item->email }}</td><td>{{ $item->profile->phone }}</td>
                                                    <td>
                                                        @can('view-'.str_slug('Employee'))
                                                            <a href="{{ url('/employee/employee/' . $item->id) }}"
                                                               title="View {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Employee') }}">
                                                                <button class="btn btn-info btn-sm">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                                </button>
                                                            </a>
                                                        @endcan

                                                        @can('edit-'.str_slug('Employee'))
                                                            <a href="{{ url('/employee/employee/' . $item->id . '/edit') }}"
                                                               title="Edit {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Employee') }}">
                                                                <button class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                                </button>
                                                            </a>
                                                        @endcan

                                                        @can('delete-'.str_slug('Employee'))
                                                            <form method="POST"
                                                                  action="{{ url('/employee/employee' . '/' . $item->id) }}"
                                                                  accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                        title="Delete {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Employee') }}"
                                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                                </button>
                                                            </form>
                                                        @endcan


                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
                                        <div class="pagination-wrapper"> {!! $employee->appends(['search' => Request::get('search')])->render() !!} </div>
                                    </div>
                              
                                
                           
                    </div>

                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INVITE BY EMAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" action="{{ route('invitatio_send') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
      <div class="modal-body">
                 {{ csrf_field() }}
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="member" value="5" id="manager" checked>
                  <label class="form-check-label" for="manager">
                   Manager
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="member" value="4" id="employee" >
                  <label class="form-check-label" for="employee">
                    Employee
                  </label>
                </div> 
                <div class="form-check">
                  <label class="form-label" for="employee">Email</label>
                  <input class="form-input" type="email" name="email" id="employee">
                  <input class="form-input" type="hidden" name="dep_id" value="{{ Session::get('request_id') }}">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SEND</button>
      </div>
    </form>   
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

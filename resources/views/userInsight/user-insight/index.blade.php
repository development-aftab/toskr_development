@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row user_insight">
            <div class="col-sm-12">
                <h2>Performance Dashboard</h2>
                <div class="white-box">
                    {{-- <h3 class="box-title pull-left">{{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'UserInsight') }}</h3>
                    @can('add-'.str_slug('UserInsight'))
                        <a class="btn btn-success pull-right" href="{{ url('/userInsight/user-insight/create') }}"><i
                                    class="icon-plus"></i> Add {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'UserInsight') }}</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User Id</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userinsight as $item)
                                <tr>
                                    <td>{{ $loop->iteration??$item->id }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>
                                        @can('view-'.str_slug('UserInsight'))
                                            <a href="{{ url('/userInsight/user-insight/' . $item->id) }}"
                                               title="View {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'UserInsight') }}">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                        @endcan

                                        @can('edit-'.str_slug('UserInsight'))
                                            <a href="{{ url('/userInsight/user-insight/' . $item->id . '/edit') }}"
                                               title="Edit {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'UserInsight') }}">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                        @endcan

                                        @can('delete-'.str_slug('UserInsight'))
                                            <form method="POST"
                                                  action="{{ url('/userInsight/user-insight' . '/' . $item->id) }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'UserInsight') }}"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        @endcan


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $userinsight->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div> --}}
                    <h3>User Insight</h3>
                    <table class="table" id="attachment">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                {{-- <th>Performnce</th> --}}
                                <th>Task Assigned</th>
                                <th>Task Completed</th>
                                {{-- <th>Critical Task</th> --}}
                                {{-- <th>On Time Deliver</th> --}}
                            </tr>
                        </thead>
                        <body>
                            @foreach ($users as $element)
                             @if($element->hasRole('employee'))
                                <tr>
                                    <td>
                                        <div class="profile">
                                           <div class="image">
                                              <img src="{{ asset('storage') }}/uploads/users/{{ $element->profile->pic??'' }}" class="img-fluid img-circle person-image">
                                           </div>
                                           <div class="desc">
                                              <h5>{{ $element->name }}</h5>
                                              <p>Team Member</p>
                                           </div>
                                        </div>
                                    </td>
                                    {{-- <td>
                                         <div class="star-rating">
                                            <span class="icon-star" data-rating="1"></span>
                                            <span class="icon-star" data-rating="2"></span>
                                            <span class="icon-star" data-rating="3"></span>
                                            <span class="icon-star" data-rating="4"></span>
                                            <span class="icon-star" data-rating="5"></span>
                                            <span class="" ><label>(Great)</label></span>
                                          </div>
                                    </td> --}}
                                    <td>{{ $element->assignedCount }} Task</td>
                                    <td><?php 
                                    $task = App\TaskAssigned::where('employee_id', $element->id)->pluck('task_id')->toArray(); 
                                    $completed = App\Task::whereIn('id',$task)->where('status','completed')->count();?>
                                        {{ $completed }} Task 
                                    </td>
                                    {{-- <td>10 Task</td> --}}
                                    {{-- <td>10 Task</td> --}}
                                </tr>
                             @endif   
                            @endforeach    
                        </body>
                    </table>

                    <div class="show_all_btn">
                        <button class="btn">Show All</button>
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
  $("input[name='query']").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#attachment tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    </script>

@endpush

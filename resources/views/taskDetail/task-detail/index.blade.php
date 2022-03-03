@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
          <style type="text/css">
            .file_uploader .custom-file_attachment, .file_uploader .custom-file_image { display: none;}
.Attachment .attachment_textarea>textarea { background: transparent; border: 1px solid #c4c8c8; border-radius: 5px;}
.periority_box>a {
    width: 100%;
    display: block;
    text-align: right;
    font-size: large;
}
.document_div{
  text-align: right;
}
@if($task_manager->employee_id == Auth::id())
  div#myModal form .select2-container {
      pointer-events: none;
  }
@endif

          </style>
@endpush

@section('content')
  <div class="container-fluid">

        <div class="row task_detail_screen">
           <h2>Task Detail</h2>
           <div class="col-md-5">
              <div class="white-box ui_ux_box">
                <div class="document_div">
                 <a href="{{ asset('website') }}/{{ $task->image??'' }}" download>Download Document<a>
                 </div>
                 <h4>{{ $task->project_name??'' }}</h4>

                 <p class="sub_heading">{{ $task->getCategoryDetail->name??'' }}</p>
                 <p>{{ $task->description??'' }}</p>
                 <h6>Progress</h6>
                 <div class="progress">
                    <div class="progress-bar progress-bar-danger" style="width:{{ $task->bar_link??'0' }}%;" role="progressbar">
                       <span class="sr-only">{{ $task->bar_link??'0' }}% Complete</span>
                    </div>
                 </div>
              </div>
              <div class="white-box periority_box">
                @if(Auth::user()->hasRole('Manager'))
                    {{-- <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit" aria-hidden="true"></i></a> --}}
                @else
                  @if($task_manager->employee_id == Auth::id())
                    <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit" aria-hidden="true"></i></a>
                  @endif
                @endif
                 <table class="table">
                    <tbody>
                       <tr>
                          <th>Created</th>
                          <td>{{ date("jS F, Y", strtotime($task->start_date)) }}</td>
                       </tr>
                       <tr>
                          <th>Deadline</th>
                          <td>{{ date("jS F, Y", strtotime($task->end_date)) }}</td>
                       </tr>
                       <tr>
                          <th>Priority</th>
                          <td>{{ $task->priority }}</td>
                       </tr>
                       <tr>
                          <th>Status</th>
                          <td>{{ $task->status }}</td>
                       </tr>

                    </tbody>
                 </table>
              </div>
              <div class="white-box Deliverables" style="display: none">
                 <h4>Deliverables</h4>
                 <table class="table">
                    <tbody>
                       <tr>
                          <td>
                             <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                          </td>
                          <td>
                             <h5>Jack Connor</h5>
                             <p>Yesterday</p>
                          </td>
                          <td>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                          </td>
                          <td>
                             <a href="#!">
                                <img src="">
                                <p>File name.pdf</p>
                             </a>
                          </td>
                       </tr>
                       <tr>
                          <td>
                             <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                          </td>
                          <td>
                             <h5>Jack Connor</h5>
                             <p>Yesterday</p>
                          </td>
                          <td>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                          </td>
                          <td>
                             <a href="#!">
                                <img src="">
                                <p>File name.pdf</p>
                             </a>
                          </td>
                       </tr>
                    </tbody>
                 </table>
              </div>
              <div class="white-box Assigned_Team">
                 <h4>Assigned Team</h4>
              @if($task_manager->employee_id == Auth::id())
                 <div class="document_div">
                    <a style="cursor: pointer;" data-toggle="modal" data-target="#co_worker">Add Co-Worker <i class="fa fa-edit" aria-hidden="true"></i></a>
                 </div>
              @endif
                 <div class="profile">
                    <div class="image">
                       <img src="{{asset('storage')}}/uploads/users/{{ $manager->profile->pic }}" class="img-fluid img-circle person-image">
                    </div>
                    <div class="desc">
                       <h5>{{ $manager->name }}</h5>
                       <a href="">{{ $manager->email }}</a>
                       <p>Manager</p>
                    </div>
                 </div>
                 <hr>
                 <div class="profiles row">
                  @foreach ($users as $element)
                    <div class="profile col-md-4">
                       <div class="image">
                          <img src="{{asset('storage')}}/uploads/users/{{ $element->profile->pic }}" class="img-fluid img-circle person-image">
                       </div>
                       <div class="desc">
                          <h5>{{ $element->name }}</h5>
                          <p>@if($element->id == $task_manager->employee_id) Task Owner @else Co-worker @endif</p>
                       </div>
                    </div>
                  @endforeach
                 </div>
              </div>
           </div>
           <div class="col-md-7">
              <div class="white-box activity_box">
                 <div class="row">
                    <div class="col-md-6">
                       <h4>Activity Update</h4>
                    </div>
                    <div class="col-md-6 search_form_col">
                       <form>
                         {{--  <div class="search_form">
                             <input type="text" placeholder="Search" name="">
                             <i class="fa fa-search" aria-hidden="true"></i>
                          </div> --}}
                       </form>
                    </div>
                 </div>

                  @if(Auth::user()->hasRole('employee') || Auth::user()->hasRole('company') || Auth::user()->hasRole('Manager'))
                      @if($task_manager->employee_id == Auth::id())
                        <?php
                           $required='';
                           $checked = '';
                        ?>
                      @else
                        <?php
                           $required='readonly';
                           $checked = 'disabled';
                        ?>
                      @endif
                  
                  @endif

                <form method="POST" action="{{ route('create_task_note') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                       <input type="hidden"  name="task_id" value="{{ $task->id }}">
                       @if($task_manager->employee_id == Auth::id())
                         <input type="hidden"  name="manager_id" value="{{ $manager_id }}">
                       @else
                         <input type="hidden"  name="manager_id" value="{{ Auth::id() }}">
                       @endif
                       {{-- <input type="text" class="form-control" id="" name="activity_name" placeholder="Activity Name"> --}}
                       <input type="text"  class="form-control" id="" name="activity_name" value="{{ $taskdetail->activity_name??'' }}" placeholder="Activity Name" {{ $required }}>
                    </div>
                    <div class="radio-list status_btns">
                       <div class="radio_buttons">
                            <input @if(isset($taskdetail) && $taskdetail->process == '1') checked @endif type="radio" name="process" value="1" {{ $checked }}>
                            <label>Preparation </label>
                        </div>
                        <div class="radio_buttons">
                            <input @if(isset($taskdetail) && $taskdetail->process == '2') checked @endif type="radio" name="process" value="2" {{ $checked }}>
                            <label>Processing </label>
                        </div>
                        <div class="radio_buttons">
                            <input @if(isset($taskdetail) && $taskdetail->process == '3') checked @endif type="radio" name="process" value="3" {{ $checked }}>
                            <label>Check Point </label>
                        </div>
                        <div class="radio_buttons">
                            <input @if(isset($taskdetail) && $taskdetail->process == '4') checked @endif type="radio" name="process" value="4" {{ $checked }}>
                            <label>Delivering </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input @if(isset($taskdetail) && in_array('1',json_decode($taskdetail->status))) checked @endif class="form-check-input" type="checkbox" id="" name="status[]" value="1" {{ $checked }}>
                       <label class="form-check-label" for="">Data Collection</label>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input @if(isset($taskdetail) && in_array('2',json_decode($taskdetail->status))) checked @endif class="form-check-input" type="checkbox" name="status[]" id="" value="2" {{ $checked }}>
                       <label class="form-check-label" for="">Modeling</label>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input @if(isset($taskdetail) && in_array('3',json_decode($taskdetail->status))) checked @endif class="form-check-input" type="checkbox" name="status[]" id="" value="3" {{ $checked }}>
                       <label class="form-check-label" for="">Investigation</label>
                    </div>
                    <div class="form-group">
                       <textarea class="form-control" id="" name="note" rows="4" placeholder="Note" {{ $required }}>{{ $taskdetail->note??'' }}</textarea>
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
                        @if(Auth::user()->hasRole('Manager'))
                           {{-- <button type="submit" class="btn ">Update</button> --}}
                           <a href="{{ route('task_log') }}/{{ $task->id }}" class="btn ">Activity Log</a>
                        @else
                            @if($task_manager->employee_id == Auth::id())
                              <button type="submit" class="btn ">Update</button>
                              <a href="{{ route('task_log') }}/{{ $task->id }}" class="btn ">Activity Log</a>
                            @endif
                        @endif
                    </div>
                 </form>
              </div>
          </div>
        </div>




    </div>


        <div id="myModal" class="modal fade Create_task_modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Task</h4>
      </div>
    <form method="POST" action="{{ url('/task/task/' . $task->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
      <div class="modal-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Project Name</label>
                    <input type="hidden" name="company_id" value="{{ Auth::user()->company_id }}">
                    @if($task_manager->employee_id == Auth::id())
                     <input type="hidden" name="manager_id" value="{{ $manager_id }}">
                    @else
                     <input type="hidden" name="manager_id" value="{{ Auth::id() }}">
                    @endif
                    <input class="form-control" name="project_name" placeholder="Project name here" type="text" id="project_name" value="{{ $task->project_name }}" >
              </div>
                <div class="row">
                  <div class="col col-lg-6">
                    <label for="Category" class="form-label">Task Category</label>
                     <select class="form-control" name="category" id="category">
                        <option selected disabled>Select Category</option>
                       @foreach($category as $element)
                         <option @if(isset($task) && $task->category == $element->id ) selected @endif value="{{ $element->id }}">{{ $element->name }}</option>
                       @endforeach
                     </select>
                  </div>
                  <div class="col col-lg-6">
                    <label for="image" class="form-label">Task Images & Document</label>
                     <div class="custom_file_upload" >
                      <input class="form-control" name="image" type="file" id="pic" value="">
                      <input class="form-control" name="oldimage" type="hidden" value="{{ $task->image }}">
                     </div>
                  </div>
                  <div class="col col-lg-6">
                    <label for="Start" class="form-label">Task Start Date</label>
                    <input class="form-control" name="start_date" type="date" value="{{ $task->start_date }}" id="start_date">
                  </div>
                  <div class="col col-lg-6">
                    <label for="End" class="form-label">Task End Date</label>
                    <input class="form-control" name="end_date" type="date" value="{{ $task->end_date }}" id="end_date"  >
                  </div>
                  <div class="col col-lg-6">
                    <label for="Assign" class="form-label">Task Assign Person</label>
                    <select class="form-control"   name="assign[]" id="Assign">
                      @foreach ($employee as $element)
                        @if($element->hasRole('employee'))
                         <option @if(in_array($element->id,$assidned)) selected @endif value="{{ $element->id }}">{{ $element->name }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="col col-lg-6">
                    <label for="Priority" class="form-label">Task Priority</label>
                    <select class="form-control" name="priority" id="priority">
                        <option @if(isset($task) && $task->priority == 'High' ) selected @endif  value="High">High</option>
                        <option @if(isset($task) && $task->priority == 'Medium' ) selected @endif  value="Medium">Medium</option>
                        <option @if(isset($task) && $task->priority == 'Low' ) selected @endif value="Low">Low</option>
                    </select>
                  </div>
                   <div class="col col-lg-6">
                    <label for="Priority" class="form-label">Task Status</label>
                    <select class="form-control" name="status" id="status">
                        <option @if(isset($task) && $task->status == 'assigned' ) selected @endif  value="assigned">Assigned</option>
                        <option @if(isset($task) && $task->status == 'inProgress' ) selected @endif  value="inProgress">in-Progress</option>
                        <option @if(isset($task) && $task->status == 'completed' ) selected @endif value="completed">Completed</option>
                    </select>
                  </div>
                  <div class="col col-lg-6">
                    <label for="Priority" class="form-label">Task Progress</label>
                    <select class="form-control" name="bar_link" id="progress">
                        <option @if(isset($task) && $task->bar_link == '10' ) selected @endif  value="10">10%</option>
                        <option @if(isset($task) && $task->bar_link == '20' ) selected @endif  value="20">20%</option>
                        <option @if(isset($task) && $task->bar_link == '30' ) selected @endif value="30">30%</option>
                        <option @if(isset($task) && $task->bar_link == '40' ) selected @endif value="40">40%</option>
                        <option @if(isset($task) && $task->bar_link == '50' ) selected @endif value="50">50%</option>
                        <option @if(isset($task) && $task->bar_link == '60' ) selected @endif value="60">60%</option>
                        <option @if(isset($task) && $task->bar_link == '70' ) selected @endif value="70">70%</option>
                        <option @if(isset($task) && $task->bar_link == '80' ) selected @endif value="80">80%</option>
                        <option @if(isset($task) && $task->bar_link == '90' ) selected @endif value="90">90%</option>
                        <option @if(isset($task) && $task->bar_link == '100' ) selected @endif value="100">100%</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                   <div class="col col-lg-12">
                    <label for="Priority" class="form-label">Description</label>
                    <textarea class="form-control" name="description" placeholder="Add any extra details about the request" id="description" value="">{{ $task->description }}</textarea>
                    {{-- <input type="text" class="form-control" id="Priority"> --}}
                  </div>
                </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
    </div>

  </div>
</div>
      <div id="co_worker" class="modal fade Create_task_modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Co Worker</h4>
      </div>
    <form method="POST" action="{{ route('request_to_coworker') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="task_id" value="{{  $task->id }}">
                        <input type="hidden" name="manager_id" value="{{ $manager_id??'' }}">
      <div class="modal-body">
            <div class="row">
                  <div class="col col-lg-12">
                    <label for="Category" class="form-label">Select Co Worker</label>
                    <select class="js-example-basic-multiple" name="user[]" multiple="multiple">
                      @foreach ($dep as $dep)
                      <optgroup label="{{ $dep->name }}" >
                        @foreach ($all_employee as $allemployee)
                          @if($dep->id == $allemployee->department_id && $allemployee->hasRole('employee') && $allemployee->id != $task_manager->employee_id)
                            @if(!in_array($allemployee->id, $coworker))
                             <option  value="{{ $allemployee->id }}">{{ $allemployee->name }}  &#160; &#160;  {{ $allemployee->email }}</option>
                            @endif
                          @endif
                        @endforeach
                      </optgroup>
                      @endforeach
                     </select>
                  </div>
            </div>

      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-primary">Request</button>
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


    </script>

@endpush
@push('js')
<script type="text/javascript">
    $(document).ready(function() {
    $('#Assign').select2();
});

    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endpush
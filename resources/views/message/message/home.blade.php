@extends('layouts.master')

@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>Chat App</title> --}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}" />
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
     {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <script>
        var base_url = '{{ url("/chat") }}';
    </script>
<style type="text/css">
            .vertical-tabs ul.nav.nav-tabs li {
            display: block;
            width: 100%;
            float: none;
        }

.search-btn-container {
    background: #fff;
    display: flex;
    justify-content: center;
    padding: 25px 40px 40px;
}

.chat-users {
    overflow: scroll;
    height: 655px;
}

.search-btn-container .tab-search-btn {background-color: #184153;color: #fff;padding: 10px 80px;}

.vertical-tabs.nav-detail {
    background-color: #8d9498;
}

.vertical-tabs ul.nav.nav-tabs li a {
    margin-right: 0;
    border: 0;
    background-color: #8d9498;
    color: #fff;
    padding: 15px 15px;
}

.vertical-tabs ul.nav.nav-tabs li a:hover {
    background-color: #52b842;
}


.tab-col {
    padding-right: 0 !important;
}

.content-col {
    padding: 0 !important;
}

.vertical-content .tab-content {
    margin-top: 0;
    height: 460px !important;
}

.vertical-content {
    border-left: 5px solid #184153;
    background: #fff;
    padding: 0px 0px 0px 15px;
    height: 760px !important;
    position: relative;

}
.search-btn-container .tab-search-btn:hover {
    color: #fff;
}



.text-bar-row .input-group {
    position: relative;
    display: inline-block;
    border-collapse: separate;
    width: 100%;
}
.text-bar-row {
    background: #184153;
}

.text-bar-row textarea {
    resize: none !important;
        padding-top: 10px;
}

.send-button img {
    width: 25px;
    background: transparent;
}

.send-button {
    background-color: transparent;
}

i.fas.fa-camera {
    padding: 7px 0;
    margin-top: 0;
    font-size: 25px;
}
.row.text-bar-row {
    width: 100%;
    position: absolute;
    left: 15px;
    bottom: 0;
}
.text-bar-row .icon-col {
    border-right: 1px solid #fff;
}
textarea.text_message_area::placeholder {
    color: #fff;
}
textarea.text_message_area {
    background: transparent;
    color: #fff;
    border: 0;
}

.vertical-content .tab-content>.active {
    display: block;
    overflow-y: scroll;
    height: 760px;
        padding-top: 30px;
}
.vertical-tabs ul.nav.nav-tabs li a.chat-box-toggle.actived {
    background: #184153;
}

.base_receive p,
.base_sent p {
    background: none !important;
    padding-left: 0;
    padding-right: 0;
    margin: 0;
    
    
}
.base_sent h5,
.base_receive h5{
    margin: 0 !important;
    text-transform: capitalize;
}


.messages.msg_receive.text-left.custom_position {
    display: block;
}



#get_all_users .avatar img.img-responsive {
    margin: 0 auto;
    border-radius: 100%;
}
.msg_container .col-md-1, .msg_container .col-md-11 {
    padding: 0;
    margin-bottom: 40px;
}

.scrollbar {
    margin-left: 0;
    float: left;
    width: 99%;
    background: none;
    overflow-y: scroll;
    margin-bottom: 25px;
    height: 760px;
    padding-left: 20px;
}

#chat-area
{
    text-align: center;
    width: 500px;
    margin: auto;
}

#style-1::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
    background-color: #fff;
}

#style-1::-webkit-scrollbar
{
    width: 0px;
    background-color: #F5F5F5;
}

#style-1::-webkit-scrollbar-thumb
{
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}

.vertical-content {
    padding: 0;
}

.row.text-bar-row {
    left: 14px !important;
}

.vertical-tabs.nav-detail {
    background-color: #B4B4B4;
}
.vertical-tabs ul.nav.nav-tabs li a {
    background-color: #B4B4B4;
}

.vertical-tabs ul.nav.nav-tabs li a {
    font-size: 20px;
}
.vertical-tabs ul.nav.nav-tabs li a.chat-box-toggle.actived {
    background: #184153 !important;
}


.vertical-tabs ul.nav.nav-tabs li a:hover {
    background-color: #184153;
}
navbar-header, .right-sidebar .rpanel-title {
    background: #184153 !important;
}
.base_sent p {
    background: none !important;
    margin-bottom: 0 !important;
    margin-top: : 0 !important;
}

.base_sent .col-md-11.col-xs-10, .base_sent .col-md-11.col-xs-1 {
    padding: 0 !important;
}
.modal-body{
        padding: 30px;
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.chat-users li { position: relative;}
.chat-users li button { position: absolute; top: 10px;  right: 10px; height: 40px; width: 40px; padding: 0; background: #ffffff8f; color: white;border: 0;  opacity: 0; transition: ease 500ms;}
.chat-users li button.delete_group {right: 65px;}
.chat-users li:hover button {opacity: 1; transition: ease 500ms;}
.msg_container .messagediv .messages>p, .msg_container .messagediv .messages>time { display: block;}
.msg_container .messagediv .messages button { height: 20px; width: 20px;  margin: 0 3px; background: transparent; border: 0; padding: 0; transition: ease 500ms;}
.msg_container .messagediv .messages>time { padding-bottom: 15px;}
.msg_container .messagediv .messages button:hover {  transform: scale(1.5); transition: ease 500ms;}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}" />
    <!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script>
        var base_url = '{{ url("/chat") }}';
    </script>
 @endpush  
@section('content')
<div class="container-fluid">
    <div class="row Chat_box">
       <div class="col-md-3 tab-col">
            <div class="search-btn-container">
                <!-- <a class="btn tab-search-btn" href="#">Search...</a> -->
                <h2>Chat</h2>
              @if(Auth::user()->hasRole('Manager'))
                {{-- <button type="button" class="btn btn-secondary" data-show='1' id="group_create" >CREATE GROUP</button>  --}}
              @endif
               @if($task_manager->employee_id == Auth::id())
                <button type="button" class="btn btn-secondary" data-show='1' id="group_create" >CREATE GROUP</button> 
                @endif
              <div class="Chat_group">
                <form  method="POST" action="{{ route('create_group') }}" accept-charset="UTF-8"  enctype="multipart/form-data">
                 {{ csrf_field() }}
                  @if($users->count() > 0)
                  <div class="group_header">
                    <div><button type="button" class="back_group_modal">Back</button></div>
                    <div>New Group</div>
                    <div><button class="Create">Create</button></div>
                  </div>
                  <div class="group_upload">
                    <div class="file_uploader">
                      <div class="custom-file_attachment">
                          <input type="file" name="image" class="custom-file-input" id="" required>
                          <i class="icon-camera"></i>
                       </div>
                    </div>
                    <div class="input_field">
                      <input type="text" class="form-control" name="group_name" placeholder="Group Name" required>
                    </div>
                  </div>
                  <div class="group_table">
                    <table class="table">
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>
                            <img src="{{asset('storage')}}/uploads/users/{{ $user->profile->pic??'' }}" class="avatar">
                          </td>
                          <td>{{ $user->name }}</td>
                          <td>
                            <div class="form-group form-check">
                              <input type="checkbox" name="user_id[]" type="checkbox" value="{{ $user->id }}" class="form-check-input checkboxes" id="" required>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                       @if($task_manager->employee_id == Auth::id())
                        <tr>
                          <td>
                            <img src="{{asset('storage')}}/uploads/users/{{ $manager->profile->pic??'' }}" class="avatar">
                          </td>
                          <td>{{ $manager->name }}</td>
                          <td>
                            <div class="form-group form-check">
                              <input type="checkbox" name="user_id[]" type="checkbox" value="{{ $manager->id }}" class="form-check-input checkboxes" id="" required>
                            </div>
                          </td>
                        </tr>
                       <input type="hidden" name="taskmanager" value="{{ $task_manager->employee_id }}">
                      @endif
                    </tbody>
                  </table>
                  </div>
                 @endif
                </form>
                
              </div>
              <div class="Chat_group_edit">
                <form  method="POST" action="{{ route('edit_group') }}" accept-charset="UTF-8"  enctype="multipart/form-data">
                 {{ csrf_field() }}
                  @if($users->count() > 0)
                  <div class="group_header">
                    <div><button type="button" class="back_group_modal">Back</button></div>
                    <div>Edit Group</div>
                    <div><button class="Create">Update</button></div>
                  </div>
                  <div class="group_upload">
                    <div class="file_uploader">
                      <div class="custom-file_attachment">
                          <input type="file" name="image" class="custom-file-input" id="">
                          <input type="hidden" name="oldimage" class="custom-file-input" id="oldimage" required>
                          <input type="hidden" name="id" id="groupid" class="custom-file-input" required>
                          <i class="icon-camera"></i>
                       </div>
                    </div>
                    <div class="input_field">
                      <input type="text" class="form-control" name="group_name" id="group_name" placeholder="Group Name" required>
                    </div>
                  </div>
                  <div class="group_table">
                    <table class="table">
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>
                            <img src="{{asset('storage')}}/uploads/users/{{ $user->profile->pic??'' }}" class="avatar">
                          </td>
                          <td>{{ $user->name }}</td>
                          <td>
                            <div class="form-group form-check">
                              <input type="checkbox" name="user_id[]" type="checkbox" value="{{ $user->id }}" class="form-check-input checkboxes members_group" id="" required>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  </div>
                 @endif
                </form>
                
              </div>
            </div>
            <div class="vertical-tabs nav-detail" >
             <ul class="nav nav-tabs chat-users" >
                @if(Auth::user()->hasRole('employee') || Auth::user()->hasRole('company'))
                  <li class="contacts" style="cursor: pointer;"><a class="chat-box-toggle" data-id="{{ $manager->id }}" data-user="{{ $manager->name }}" data-group="0"><img src="{{asset('storage')}}/uploads/users/{{ $manager->profile->pic??'' }}" class="avatar">Manager 
                         <?php   $Message_mes = App\MessageViewed::where('send_to',$manager->id)->where('receiver',Auth::id())->where('is_group',0)->where('task_id',Session::get('task_id'))->where('viewed',0)->count(); ?>
                         @if($Message_mes > 0)
                         <span  class="badge badge-xs badge-danger">{{ $Message_mes }}</span>
                         @endif
                  </a></li>
                @endif
                @if(Auth::user()->hasRole('Manager'))
                  <li class="contacts" style="cursor: pointer;"><a class="chat-box-toggle" data-id="{{ $company->id }}" data-user="{{ $company->name }}" data-group="0"><img src="{{asset('storage')}}/uploads/users/{{ $company->profile->pic??'' }}" class="avatar">Company  
                                 <?php   $Message_compay = App\MessageViewed::where('send_to',$company->id)->where('receiver',Auth::id())->where('is_group',0)->where('task_id',Session::get('task_id'))->where('viewed',0)->count(); ?>
                        @if($Message_compay >0)
                        <span  class="badge badge-xs badge-danger">{{ $Message_compay }}</span>
                        @endif
                        </a></li>
                @endif
                @if($users->count() > 0)
                    
                            @foreach($users as $user)
                                <li class="contacts" style="cursor: pointer;"><a class="chat-box-toggle" data-id="{{ $user->id }}" data-user="{{ $user->name }}" data-group="0"><img src="{{asset('storage')}}/uploads/users/{{ $user->profile->pic??'' }}" class="avatar">@if($task_manager->employee_id == $user->id) Task Owner @else {{ $user->name }} @endif
                                 <?php   $Message_user = App\MessageViewed::where('send_to',$user->id)->where('receiver',Auth::id())->where('is_group',0)->where('task_id',Session::get('task_id'))->where('viewed',0)->count(); ?>
                                @if($Message_user > 0)
                                <span  class="badge badge-xs badge-danger">{{ $Message_user }}</span>
                                @endif

                                </a></li>
                            @endforeach
                       
                @endif
                @if($groups->count() > 0)
                   
                    @foreach($groups as $group)
                    <?php
                      $get_user = App\GroupChat::where('group_id',$group->group_id)->first();
                      $manager_id = App\Task::where('id',Session::get('task_id'))->first();
                       $members = json_decode($get_user->members);
                       array_push($members,$manager_id->manager_id);
                      $users_id    = App\User::whereIn('id',$members)->get();
                       $user_name='';
                      foreach ($users_id as $key=>$element){
                        if($key == 0){
                            $space = ' ';
                        }else{
                            $space = ' , ';
                        }
                         $user_name .=$space.$element->name; 
                      }
                          
                      
                    ?>

                      @if(Auth::user()->hasRole('employee') && in_array(Auth::id(),json_decode($group->members)))
                        <li class="contacts" style="cursor: pointer;"><a class="chat-box-toggle" data-id="{{ $group->group_id }}" data-user="{{ $user_name }}" data-group="1"><img src="{{ asset('website') }}/{{ $group->image }}" class="avatar">{{ $group->name }} (group)
                                 <?php   $Message_group = App\MessageViewed::where('receiver',Auth::id())->where('is_group',1)->where('group_id',$group->group_id)->where('task_id',Session::get('task_id'))->where('viewed',0)->count(); ?>
                          @if($Message_group > 0)
                          <span  class="badge badge-xs badge-danger">{{ $Message_group }}</span>
                          @endif
                        </a></li>
                      @elseif(Auth::user()->hasRole('Manager') || Auth::user()->hasRole('company'))
                        <li class="contacts" style="cursor: pointer;"><a class="chat-box-toggle" data-id="{{ $group->group_id }}" data-user="{{ $user_name }}" data-group="1"><img src="{{ asset('website') }}/{{ $group->image }}" class="avatar">{{ $group->name }} (group) {{-- @if(Auth::user()->hasRole('Manager'))<button data-id="{{ $group->group_id }}" class="delete_group"><i  class="icon-trash"></i></button><button data-id="{{ $group->group_id }}" class="edit_group"><i class='far fa-edit'></i></button> @endif --}}
                                 <?php   $Message_group = App\MessageViewed::where('receiver',Auth::id())->where('is_group',1)->where('group_id',$group->group_id)->where('task_id',Session::get('task_id'))->where('viewed',0)->count(); ?>
                         @if($Message_group > 0)
                          <span  class="badge badge-xs badge-danger">{{ $Message_group }}</span>
                          @endif
                        </a></li>
                      @endif
                    @endforeach
                        
                @endif
             </ul>
            </div>
            
       </div>

       <div class="col-md-9 content-col">
            <div class="profile">
              <div class="image">
                <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
              </div>
              <div class="desc">
                <h5><span id="user-name"></span></h5>
              </div>
            </div>
           <div class="vertical-content">
               <div class="tab-content" id="chat-area">

                    <div class="scrollbar" id="style-1">
                    <div class="tab-pane active " id="tab">
                        <h2><span id="user-name"></span></h2>
                        <div id='get_all_users' class="get_all">
                   </div>
                   </div>
                   </div>
               </div>

               <div class="row text-bar-row" id="text_box_area">
                        {{-- <div class="col-md-1 icon-col d-none"> --}}
                            {{-- <i class="fas fa-camera"></i> --}}
                        {{-- </div> --}}
                        <div class="col-md-11" >
                            <div class="input-group">
                          {{--     <input type="text-area" class="form-control text_message_area" placeholder="Write Your Message" aria-label="" aria-describedby="button-addon2"> --}}
                            <textarea rows="1" class="form-control text_message_area"
                                placeholder="Write Your Message" id="message-line"></textarea>
                            </div>
                        </div>

                    <div class="col-md-1" style="background-color:white;border: 1px solid #184153; background: #184153">
                        <button class="btn btn-outline-secondary send-button" type="button" data-group="" id="message_submit_btn"><img
                                src="{{asset('website')}}/white_send.png"> </button>
                            
                        </div>
                       </div>
           </div>
       </div>
    </div>
    @include('message.message.chat-box')
    <input type="hidden" id="current_user" value="{{ \Auth::user()->id??'' }}" />
    <input type="hidden" id="pusher_app_key" value="{{ env('PUSHER_APP_KEY') }}" />
    <input type="hidden" id="pusher_cluster" value="{{ env('PUSHER_APP_CLUSTER') }}" />
   </div>
   <div id="chat-overlay" class="row"></div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Group</h4>
      </div>
      <form  method="POST" action="{{ route('create_group') }}" accept-charset="UTF-8"  enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-body">
       @if($users->count() > 0)
              <div class="form-group">
                <label for="exampleInputEmail1">Group Name</label>
                <input type="text" class="form-control" name="group_name">
              </div>
              <div class="form-group">
                @foreach($users as $user)
                   <div class="form-check">
                      <input class="form-check-input" name="user_id[]" type="checkbox" value="{{ $user->id }}" id="flexCheckDefault{{ $user->id }}">
                      <label class="form-check-label" for="flexCheckDefault{{ $user->id }}">
                        {{ $user->name }}
                      </label>
                   </div>
                @endforeach
             </div>          
           
                
            @endif
           
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
       </form>
    </div>

  </div>
</div>
    



@endsection
@push('js')
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script src="{{ asset('js/chat.js') }}"></script>
<script>
$('#text_box_area').hide();
    //get all messages
    function getallmessages(user_id,group){

        $.ajax({
                    type: 'POST',
                    url: "{{route('get_message_process')}}",
                    data: {
                        '_token'        :   '{{csrf_token()}}',
                        user_id         :   user_id,
                        group         :   group,
                    },
                    success: function(result) {
                        // alert(result);
                        $('#get_all_users').html('');
                        $('#get_all_users').html(result);
                        $('#message_submit_btn').attr('user-id',user_id);
                        $('.scrollbar').scrollTop($('.scrollbar')[0].scrollHeight);
                        messageCount()
                       
                        // $('#get_all_users').animate({ scrollTop: $('.msg_container:last').offset().top }, 'slow');
                       
                    },
                    error : function(error) {
                        console.log(error);
                    }
        });
        // if(interval){
        //     clearInterval(interval);
        // }
        // timer(user_id,group);       
    }
    // $(document).ready(){
    //     setTimeout(updateChat, 500);
    // }

    user_id = null;
    interval = null;
    $('.image').hide();
    $(document).on('click','.chat-box-toggle',function(){
        $(this).closest('li').find('.badge-danger').hide();
        image = $(this).closest('li').find('img').attr('src');
        $(this).closest('ul').find('a.actived').removeClass("actived");
        $(this).addClass("actived");
        var user_name   = $(this).attr('data-user');
         user_id     = $(this).attr('data-id'); 
         group     = $(this).attr('data-group');
         $('#message_submit_btn').attr('data-group',group)
         group
         if(group == 1){
            $('#user-name').html('Group Chat With: '+user_name);            
         }else{
            $('#user-name').html(user_name);
         }
         $('.person-image').attr('src',image);
         $('.image').show();
        $('#text_box_area').show();
        getallmessages(user_id,group);

    });


    @if(isset(request()->route()->parameters['id']))
        user_id = {{request()->route()->parameters['id']}}
        getallmessages(user_id);
         $('.chat-box-toggle[data-id='+user_id+']').addClass("actived");
         $('#text_box_area').show();
    @endif
    // function timer(user_id,group){
    //     if(user_id != null){
    //         interval = setInterval(function () {
    //            getallmessages(user_id,group);
    //        },9000);
    //     }
      
    // }

    //post message
    $(document).on('click','#group_create',function(){ 
        if($(this).attr('data-show') == '1'){
          $('.Chat_group').css('display','block');
          $(this).attr('data-show','0')
        }else{
          $('.Chat_group').css('display','none');
          $(this).attr('data-show','1')
        }
     });
    $(document).on('click','.back_group_modal',function(){ 
       $('.Chat_group').css('display','none');
     }); 
    $(document).on('click','.back_group_modal',function(){ 
       $('.Chat_group_edit').css('display','none');
     });

      $(document).on('click','#message_submit_btn',function(){
        var message = $('#message-line').val();
        var to_user_id = $(this).attr('user-id');
        var group = $(this).attr('data-group');
        
        console.log(message);
        $.ajax({
                    type: 'POST',
                    url: "{{route('send_message_process')}}",
                    data: {
                        '_token'        :   '{{csrf_token()}}',
                        to_user_id      :   to_user_id,
                        message         :   message, 
                        group           :   group,

                    },
                    success: function(result) {
                        console.log(result);
                        $('#message-line').val('');
                        $('#message-line').html('');
                        // setTimeout(getallmessages(to_user_id), 500);
                        getallmessages(to_user_id,group);
                   
                    },
                    error : function(error) {
                        // showSwal('OOPS',"Unable to Complete Request.",'error');
                    }
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        
          // if (!$.browser.webkit) {
          //     $('.chat-area').html('<p>Sorry! Non webkit users. :(</p>');
          // }
    });
      </script>

      <script type="text/javascript">
        $(document).ready(function(){
            var checkboxes = $('.checkboxes');
            checkboxes.change(function(){
                if($('.checkboxes:checked').length>0) {
                    checkboxes.removeAttr('required');
                } else {
                    checkboxes.attr('required', 'required');
                }
            });
        });

        function messageCount(){
          $.ajax({
            type: 'get',
            url: "{{route('get_message_count')}}",
            success: function(result) {
            console.log(result.count);
             $('#mess_count').html(parseInt(result.count));
            },
            error : function(error) {
                // showSwal('OOPS',"Unable to Complete Request.",'error');
            }
          }); 
        }
    $(document).on('click','.delete_group',function(){ 
         if (!confirm("Do you want to delete")){
           return false;
         }
         let id = $(this).attr('data-id');
         console.log(id);
         $.ajax({
                      type: 'get',
                      url: "{{route('delete_group')}}/"+id,
                      success: function(result) {
                        location.reload();
                      },
                      error : function(error) {
                      }
          });
    });
     $(document).on('click','.edit_group',function(){ 
       let id = $(this).attr('data-id');
        $('.Chat_group_edit').css('display','block');
      
       $.ajax({
                    type: 'get',
                    url: "{{route('group_detial')}}/"+id,
                    success: function(result) {
                      $('#group_name').val(result.data.name) 
                      $('#groupid').val(result.data.id)
                      $('#oldimage').val(result.data.image)
                      result.member.forEach(function(item) {
                          $('.members_group[value = '+item+']').prop('checked', true);
                      });
                      $('#editgroup').modal('show');
                    },
                    error : function(error) {
                    }
        });
    });   

  $("input[name='query']").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".contacts").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  }); 
  
      </script>

@endpush
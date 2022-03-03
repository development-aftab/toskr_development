<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use App\RewardShare;
use App\GroupChat;
use App\Permission;
use App\Task;
use App\MessageViewed;
use App\TaskAssigned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;
use Session;
use Storage;
class ChatboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id="")
    {
          
        if (!empty($id)) {
            Message::where('to_user_id',Auth::user()->id)->where('from_user_id',$id)->update(['viewed_by_receiver'=>1]);
        }
        $manager = [];
        $company = [];
        if (Auth::user()->hasRole('Manager')){
                $users = User::whereHas(
                    'getTaskAssigned', function($q){
                        $q->where('task_id', Session::get('task_id'));
                    }
                )->get();
                $company = User::where('id',Auth::user()->company_id)->first();
                $groups = GroupChat::where('admin_id',Session::get('task_id'))->get();
        }elseif(Auth::user()->hasRole('company')){
                $task = Task::where('id',Session::get('task_id'))->first();
                $users =User::whereHas(
                    'getTaskAssigned', function($q){
                        $q->where('task_id', Session::get('task_id'));
                    }
                )->get();
                $manager =User::where('id',$task->manager_id)->first();
                $groups = GroupChat::where('admin_id',Session::get('task_id'))->get();
        }elseif(Auth::user()->hasRole('employee')){
                $task = Task::where('id',Session::get('task_id'))->first();
                $users = User::where('id', '!=', Auth::user()->id)->whereHas(
                    'getTaskAssigned', function($q){
                        $q->where('task_id', Session::get('task_id'));
                    }
                )->get();
                $manager = User::where('id',$task->manager_id)->first();
                $groups = GroupChat::where('admin_id',Session::get('task_id'))->get();
               
        }
        $task_manager  = TaskAssigned::where('task_id',Session::get('task_id'))->where('task_manager',1)->first();
        return view('message.message.home',compact('users','groups','manager','company','task_manager'));
    }

    public function getMessageProcess(Request $request)
    {
       
        $from_user                  = Auth::user()->id;
        $to_user                    = $request->user_id;
        $group                      = $request->group;
        // $message_array              = Message::where('from_user_id', $from_user)->where('to_user_id',$to_user)->orwhere('from_user_id', $to_user )->orwhere('to_user_id', $from_user )->get();
        if($request->group == 0){
            $message_array              = Message::where(function($query) use ($request) {
                                            $query->where('task_id',Session::get('task_id'))->where('from_user_id', Auth::user()->id)->where('to_user_id', $request->user_id);
                                        })->orWhere(function ($query) use ($request) {
                                            $query->where('task_id',Session::get('task_id'))->where('from_user_id', $request->user_id)->where('to_user_id', Auth::user()->id);
                                        })->orderBy('created_at', 'ASC')->get();
            $message                    = (isset($message_array) || !empty($message_array)) ? $message_array : 'Falsey Value';
            MessageViewed::where('task_id',Session::get('task_id'))->where('send_to',$request->user_id)->where('receiver',Auth::user()->id)->where('is_group',0)->update(['viewed'=>'1']);

        }else{
            
            $message_array              = Message::where(function($query) use ($request) {
                                            $query->where('task_id',Session::get('task_id'))->where('from_user_id', Auth::user()->id)->where('to_user_id', $request->user_id);
                                        })->orWhere(function ($query) use ($request) {
                                            $query->where('task_id',Session::get('task_id'))->where('to_user_id', $request->user_id)->where('from_user_id', '!=', Auth::user()->id);
                                        })->orderBy('created_at', 'ASC')->get();
            $message                    = (isset($message_array) || !empty($message_array)) ? $message_array : 'Falsey Value';
            MessageViewed::where('task_id',Session::get('task_id'))->where('group_id',$request->user_id)->where('receiver',Auth::user()->id)->where('is_group',1)->update(['viewed'=>'1']);
        }
        $response                   = array(
                                        'message'               => $message,
                                        'to_user'               => $to_user,
                                        'from_user'             => $from_user,
                                        'message'               => $message
                                    );
         
        return view('website.ajax.get_all_users',compact('response'));
    }
    public function sendMessageProcess(Request $request)
    {
        $requestData['group_mes']       = (int)$request->group; 
        $requestData['task_id']         = Session::get('task_id');
        $requestData['content']         = $request->message;
        $requestData['to_user_id']      = $request->to_user_id;
        $requestData['from_user_id']    = Auth::user()->id;
        $requestData['viewed_by_receiver']    = 0;
        $messages                       = Message::create($requestData);
        if((int)$request->group == 1){
            $groupteam = GroupChat::where('group_id',$request->to_user_id)->first();
            $members = json_decode($groupteam->members);
            if(Auth::user()->hasRole('employee') || Auth::user()->hasRole('company')){
                $task = Task::where('id',Session::get('task_id'))->first();
                array_push($members,$task->manager_id);
            }
            if(Auth::user()->hasRole('employee') || Auth::user()->hasRole('Manager')){
                $company_id = Auth::user()->company_id;
                array_push($members,$company_id);
            }
            foreach ($members as $key => $value) {
                MessageViewed::create(['task_id'=>Session::get('task_id'),'send_to'=>Auth::user()->id,'receiver'=>$value,'is_group'=>$request->group,'viewed'=>'0','group_id'=>$request->to_user_id]);
            }
            return 1;
        }else{
            MessageViewed::create(['task_id'=>Session::get('task_id'),'send_to'=>Auth::user()->id,'receiver'=>$request->to_user_id,'is_group'=>$request->group,'viewed'=>'0']);
            return 1;
        }
    } 
    public function createGroup(Request $request)
    {
         $user = $request->user_id;
        if (isset($request->taskmanager)) {
           array_push($user,Auth::id());
        }else{
           $user = $request->user_id;
        }
     $image = Storage::disk('website')->put('groupimage',$request->image)??''; 
     $group =  GroupChat::create(['name'=>$request->group_name,'image'=>$image,'admin_id'=>Session::get('task_id'),'members'=>json_encode($user)]);
               GroupChat::where('id',$group->id)->update(['group_id'=>'1099022'.$group->id.'']);
               return back();
    }  
    // public function getUserNotifications()
    // {
    //  $notification = Message::where('to_user_id',Auth::user()->id)->where('viewed_by_receiver',0)->get();
    //  $count = Message::where('to_user_id',Auth::user()->id)->where('viewed_by_receiver',0)->count();
    //     return (string) view('website.ajax.user_notification',compact('notification','count'));
    // } 
    // public function getAdminRewardNotification()
    // {
    //   $notification = RewardShare::where('admin_id',Auth::user()->id)->where('admin_view',0)->get();
    //     return (string) view('dashboard.ajax.reward_noti_admin',compact('notification'));
    // }
    // public function getuserRewardNotification()
    // {
    //      if (Auth::user()->roleId == 3){
    //         $notification = RewardShare::where('user_to_id',Auth::user()->id)->where('user_view',0)->get();
    //          return (string) view('dashboard.ajax.reward_noti_admin',compact('notification'));
    //    }
    // }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Task;
use App\Profile;
use App\TaskCategory;
use App\Invitation;
use App\TaskDetail;
use App\TaskAssigned;
use App\MessageViewed;
use App\HomePage;
use App\Feature;
use App\HowItWork;
use App\TaskLog;
use App\Faq;
use App\SocialMedia;
use App\Information;
use App\Contact;
use App\GroupChat;
use App\Department;
use App\CoworkerRequest;
use View;
use Session;
use Mail;
use Storage;
use Illuminate\Support\Facades\Redirect;
class WebsiteController extends Controller
{
   public function __construct(){
        
        $information = Information::first();
        View::share('information', $information);
        $socialmedia = SocialMedia::get();
        View::share('SocialMedia', $socialmedia);
        
    }//end constructor.
    public function index(){
        $Homepage = HomePage::first();
        $feature = Feature::get();
         return view('website.index',compact('Homepage','feature'));
    }
    public function faq(){
         $faq = Faq::orderBy('id', 'DESC')->take(9)->get();
         return view('website.faq',compact('faq'));
    } 
    public function contactUs(){
         return view('website.contactus');
    } 
    public function acceptTask($id){
         $task = CoworkerRequest::where('id',$id)->first();
         CoworkerRequest::where('id',$id)->update(['status'=>1]);
         TaskAssigned::create(['task_id'=>$task->taski_id,'employee_id'=>Auth::id(),'task_manager'=>0]);
          return redirect()->back()->with('flash_message', 'Task Accepted!');
    } 
    public function rejectTask($id){
         CoworkerRequest::where('id',$id)->delete();
         return redirect()->back()->with('flash_message', 'Task Rejected!');
    } 
    public function features(){
         $feature = Feature::get();
         return view('website.features',compact('feature'));
    } 
    public function howItWorks(){
         $howit = HowItWork::get();
         return view('website.how_it_works',compact('howit'));
    } 
     public function dashboard($status=''){
          $task =[];
        
           Session::forget('side_show');
          $category = TaskCategory::where('company_id',Auth::user()->company_id)->get();
          $employee = User::where('company_id',Auth::user()->company_id)->where('department_id',Auth::user()->department_id)->get(); 
          if($status != ''){
            Session::put('task_status',$status);
            if(Auth::user()->hasRole('Manager')){
              $task = Task::where('manager_id',Auth::id())->where('status',$status)->get();
            }elseif(Auth::user()->hasRole('company')){
              $manager = User::where('company_id',Auth::id())->pluck('id')->toArray();
              $task = Task::whereIn('manager_id',$manager)->where('status',$status)->get();
            }elseif(Auth::user()->hasRole('employee')){
             // $task = Task::where('manager_id',Auth::id())->get();
              $task = Task::whereHas(
                      'getTaskAssigned', function($q){
                          $q->where('employee_id',Auth::id());
                      }
                  )->where('status',$status)->get();
            }
          }else{ 
            Session::put('task_status','0');
            if(Auth::user()->hasRole('Manager')){
             $task = Task::where('manager_id',Auth::id())->get();
            }elseif(Auth::user()->hasRole('company')){
              $manager = User::where('company_id',Auth::id())->pluck('id')->toArray();
              $task    = Task::whereIn('manager_id',$manager)->get();
            }elseif(Auth::user()->hasRole('employee')){
             // $task = Task::where('manager_id',Auth::id())->get();
              $task = Task::whereHas(
                      'getTaskAssigned', function($q){
                          $q->where('employee_id',Auth::id());
                      }
                  )->get();
            }
          }  
          return view('dashboard.index',compact('category','employee','task'));
    } 
    ///dont use in project.

    //dont use end.





    public function registerCompany(){
           return view('website.sign_up');
    }  
    public function loginProcess(Request $request){
        if(User::where('email',$request->email)->first()){
          if(User::where('email',$request->email)->first()->status != 2){
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                      return redirect()->route('dashboard');
            }else{
              return redirect()->back()->with('error_log', 'Password incorrect!');
            }
          }else{
              return redirect()->back()->with('error_log', 'Please wait for approval!');
          }
        }else{
              return redirect()->back()->with('error_log', 'Email incorrect!');
        }  
    }  
    public function deleteGroup($id){
        GroupChat::where('group_id',$id)->delete();
       return response()->json(['data'=>'Deleted']);   
    }
    public function registerEmployee($code){
          $invitation = Invitation::where('unique_code',$code)->first();
          if($invitation){
              Session::put('Employee_reg',1);
               $Homepage = HomePage::first();
               $feature = Feature::get();
           return view('website.index',compact('invitation','Homepage','feature'));
          }else{
            return redirect()->back()->with('error_log', 'This link is expired');
          }
    } 
    public function changeApproval($id,$status){
          User::where('id',$id)->update(['status'=>$status]);
          return redirect()->back()->with('flash_message', 'Updated!');
    }
    public function updatePersonal(Request $request){
           User::where('id',Auth::id())->update(['name'=>$request->name]);
           Profile::where('user_id',Auth::id())->update(['gender'=>$request->gender]);
          return redirect()->back()->with('flash_message', 'Updated!');
    }
    public function emailUpdate(Request $request){
          User::where('id',Auth::id())->update(['email'=>$request->email]);
          return response()->json(array('data'=>'update'));
    } 
    public function addressUpdate(Request $request){
          Profile::where('user_id',Auth::id())->update(['address'=>$request->address]);
          return response()->json(array('data'=>'update'));
    }
    public function dobUpdate(Request $request){
          Profile::where('user_id',Auth::id())->update(['dob'=>$request->dob]);
          return response()->json(array('data'=>'update'));
    } 
    public function phoneUpdate(Request $request){
          Profile::where('user_id',Auth::id())->update(['phone'=>$request->phone]);
          return response()->json(array('data'=>'update'));
    }
    public function updateContact(Request $request){
          User::where('id',Auth::id())->update(['email'=>$request->email]);
          Profile::where('user_id',Auth::id())->update(['phone'=>$request->phone,'skype'=>$request->skype]);
          return redirect()->back()->with('flash_message', 'Contact Updated!');
    }
    public function contactUsProcess(Request $request){
          Contact::create(['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,'message'=>$request->message,'state'=>$request->state]);
         
          return redirect()->back()->with('flash_message', 'Message Sent!');
    }
    public function updatePassword(Request $request){
       
      $credentials = ['email'=>Auth::user()->email,'password'=>$request->currentpassword];
      
      if(Auth::attempt($credentials)){
          User::where('id',Auth::id())->update(['password'=>bcrypt($request->password)]);
          return redirect()->back()->with('flash_message', 'Password Updated!');
      }else{
          return redirect()->back()->with('error_log', 'Current password not correct');
      }
    }
    public function taskDetial($id){
             Session::put('task_id',$id);
               $task = Task::where('id',Session::get('task_id'))->first();
               $taskdetail = TaskDetail::where('task_id',Session::get('task_id'))->where('manager_id',$task->manager_id)->first();
               $users = User::whereHas(
                    'getTaskAssigned', function($q){
                        $q->where('task_id', Session::get('task_id'));
                    }
                )->get();
                $manager = User::where('id',$task->manager_id)->first();
                $assidned  = TaskAssigned::where('task_id',Session::get('task_id'))->pluck('employee_id')->toArray();
                 $category = TaskCategory::where('company_id',Auth::user()->company_id)->get();
                 $employee = User::where('company_id',Auth::user()->company_id)->where('department_id',Auth::user()->department_id)->get();
           Session::put('side_show','33');
                  $task_manager  = TaskAssigned::where('task_id',Session::get('task_id'))->where('task_manager',1)->first();
                  $all_employee = User::where('company_id',Auth::user()->company_id)->get();
                 $dep = Department::where('company_id',Auth::user()->company_id)->get();
                  $manager_id = $task->manager_id;
                   $coworker = CoworkerRequest::where('taski_id',$task->id)->where('manager_id',$task->manager_id)->pluck('user_id')->toArray();
           return view('taskDetail.task-detail.index',compact('taskdetail','task','users','manager','category','employee','assidned','task_manager','dep','all_employee','manager_id','coworker'));
    }
    public function registerCompanyProcces(Request $request){
          $requestData = $request->all();
            extract($request->all());
                $this->validate($request,[
                    'name' => 'required',
                    'email' => 'unique:users,email',
                    'password' => 'required|min:6',
                ]);
                $image = Storage::disk('public')->put('uploads/users',$request->image??'');
           $user = User::create(['name'=>$name,'status'=>2,'email'=>$email,'password'=>bcrypt($password)]);
                Profile::create(['user_id'=>$user->id,'pic'=>str_replace('uploads/users','',$image)]);
                $user->roles()->attach([1 => ['role_id' =>3, 'user_id' => $user->id]]);
               return redirect()->back()->with('flash_message', 'Please wait for approval!');
      
    
    } 
    public function registerEmployeeProcces(Request $request){
          $requestData = $request->all();

            extract($request->all());
                $this->validate($request,[
                    'name' => 'required',
                    'email' => 'unique:users,email',
                    'password' => 'required|min:6',
                ]);
                $image = Storage::disk('public')->put('uploads/users',$request->image??'');
           $user = User::create(['name'=>$name,'email'=>$email,'password'=>bcrypt($password),'company_id'=>$company_id,'department_id'=>$department_id]);
                Profile::create(['user_id'=>$user->id,'pic'=>str_replace('uploads/users','',$image),'phone'=>$phone]);
                $user->roles()->attach([1 => ['role_id' =>$role_id, 'user_id' => $user->id]]);
                
                if(isset($unique_code)){
                   Invitation::where('unique_code',$unique_code)->delete();
                    $credentials = $request->only('email', 'password');
                    if(Auth::attempt($credentials))
                   {
                      Session::forget('Employee_reg');
                      return redirect()->route('dashboard');
                   }
                }else{
                   return redirect('employee/employee')->with('flash_message', 'Employee added!');
                }
    } 
    public function InvitatioSend(Request $request){
         $this->validate($request,[
                    'email' => 'unique:users,email',
                ]);
      $invite =  Invitation::create(['company_id'=>Auth::id(),'department_id'=>$request->dep_id,'role_id'=>$request->member,'email'=>$request->email,'status'=>'0']);
        
         $randoNo = mt_rand(10000000, 99999999);
      Invitation::where('id',$invite->id)->update(['url'=>'register_employee/'.$randoNo.'','unique_code'=>$randoNo]);
      try{
             
              $dataemployee         =  $request->toArray();
              $dataemployee['code'] = $randoNo;
              Mail::send('website.email.registration', ['dataemployee'=>$dataemployee],function($message)use($dataemployee,$request){
                  $message->to($dataemployee['email'],"jkj")->from(Auth::User()->email,"jhjhv")->subject("Registration details");
              });
        }catch(\Exception $e){
            return $e->getMessage();
        }//end try catch.     
          return redirect()->back()->with('flash_message', 'Invitation Sent!');
    }
    public function requestType($type,$id){
        Session::forget('request_type');
        Session::forget('request_id');
        Session::put('request_type',$type);
        return Session::put('request_id',$id);
    }//end requestType function.
    public function createTaskNote(Request $request){
      
        $matchThese = ['task_id'=>$request->task_id,'manager_id'=>$request->manager_id];
        TaskDetail::updateOrCreate($matchThese,['task_id'=>$request->task_id,'manager_id'=>$request->manager_id,'activity_name'=>$request->activity_name,'process'=>$request->process,'status'=>json_encode($request->status),'note'=>$request->note]);
               $task = Task::where('id',Session::get('task_id'))->first();
               $users = User::whereHas(
                    'getTaskAssigned', function($q){
                        $q->where('task_id', Session::get('task_id'));
                    }
                )->get();
                $manager = User::where('id',$task->manager_id)->first();
                $assidned  = TaskAssigned::where('task_id',Session::get('task_id'))->pluck('employee_id')->toArray();
                $category = TaskCategory::where('company_id',Auth::user()->company_id)->get();
                $employee = User::where('company_id',Auth::user()->company_id)->where('department_id',Auth::user()->department_id)->get();
                $taskdetail = TaskDetail::where('task_id',Session::get('task_id'))->where('manager_id',Auth::id())->first();
                TaskLog::create(['task_id'=>$request->task_id,'activity_name'=>$request->activity_name,'process'=>$request->process,'status'=>json_encode($request->status),'note'=>$request->note]);
              Session::put('side_show','33');
               return redirect()->back()->with('flash_message', 'Activity Updated!');
            // return view('taskDetail.task-detail.index', compact('taskdetail','task','users','manager','category','employee','assidned'));
    }//end requestType function.

    public function taskLog($id){
     $tasklog = TaskLog::where('task_id',$id)->paginate(10);
       return view('taskDetail.task-detail.tasklog',compact('tasklog'));
    }  
    public function getCoworkerRequest(Request $request){
      $requests =  CoworkerRequest::where('user_id',$request->id)->where('status',0)->get();
      return (string) view('website.ajax.get_co_worker_req',compact('requests'));
    } 
    public function myprofle(){
       return view('dashboard.myprofle');
    }
    public function requestToCoworker(Request $request){
      foreach ($request->user as $key => $value) {
        CoworkerRequest::create(['taski_id'=>$request->task_id,'manager_id'=>$request->manager_id,'user_id'=>$value,'status'=>0,'task_manager'=>Auth::id()]);
      }
       return redirect()->back()->with('flash_message', 'Co Workers Requested For This Task!');
    }
    public function Contact(){
       return view('dashboard.Contact');
    } 
    public function Notification(){
       return view('dashboard.Notification');
    } 
    public function Personal(){
       return view('dashboard.Personal');
    } 
    public function Security(){
       return view('dashboard.Security');
    } 
    public function userImageChange(Request $request){
       $image = Storage::disk('public')->put('uploads/users',$request->image??'');
      $oldimage = 'uploads/users'.$request->oldimage;
        Storage::disk('public')->delete($oldimage);
       Profile::where('user_id',Auth::id())->update(['pic'=>str_replace('uploads/users','',$image)]);
        return redirect()->back()->with('flash_message', 'Profile Image Updated!');
    } 
    public function getMessageCount(){
     $count = MessageViewed::where('receiver',Auth::id())->where('send_to', '!=', Auth::user()->id)->where('task_id',Session::get('task_id'))->where('viewed',0)->count();
     return response()->json(array('count'=>$count));
    }
     public function groupDetial($id){
      $group  = GroupChat::where('group_id',$id)->first();
      $member = json_decode($group->members);  
       return response()->json(['data'=>$group,'member'=>$member]);   
        
    }
    public function editGroup(Request $request){
      $member = json_encode($request->user_id); 
      if ($request->hasFile('image')) {
                $image =Storage::disk('website')->put('groupimage',$request->image)??'';
                Storage::disk('website')->delete($request->oldimage);
            }else{
                $image = $request->oldimage??"";
            }//end if else. 
      $group  = GroupChat::where('id',$request->id)->update(['members'=>$member,'name'=>$request->group_name,'image'=>$image]);
       return redirect()->back()->withSuccess('Group Updated');  
        
    }  
}

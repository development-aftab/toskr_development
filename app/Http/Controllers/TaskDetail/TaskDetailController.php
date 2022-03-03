<?php

namespace App\Http\Controllers\TaskDetail;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\TaskDetail;
use App\TaskCategory;
use App\Task;
use App\TaskAssigned;
use App\User;
use App\Department;
use App\CoworkerRequest;
use Illuminate\Http\Request;
use Session;
class TaskDetailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('taskdetail','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $taskdetail = TaskDetail::where('task_id', 'LIKE', "%$keyword%")
                ->orWhere('activity_name', 'LIKE', "%$keyword%")
                ->orWhere('process', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('note', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $task = Task::where('id',Session::get('task_id'))->first();
                $taskdetail = TaskDetail::where('task_id',Session::get('task_id'))->where('manager_id',$task->manager_id)->first();
                $users = User::whereHas(
                    'getTaskAssigned', function($q){
                        $q->where('task_id', Session::get('task_id'));
                    }
                )->get();
                $manager = User::where('id',$task->manager_id)->first();
                $assidned  = TaskAssigned::where('task_id',Session::get('task_id'))->where('task_manager',1)->pluck('employee_id')->toArray();
                $task_manager  = TaskAssigned::where('task_id',Session::get('task_id'))->where('task_manager',1)->first();

            }
                 $category = TaskCategory::where('company_id',Auth::user()->company_id)->get();
                 $employee = User::where('company_id',Auth::user()->company_id)->where('department_id',Auth::user()->department_id)->get();
                 $all_employee = User::where('company_id',Auth::user()->company_id)->get();
                 $dep = Department::where('company_id',Auth::user()->company_id)->get();
                 $dep = Department::where('company_id',Auth::user()->company_id)->get();
                 $manager_id = $task->manager_id;
                 $coworker = CoworkerRequest::where('taski_id',$task->id)->where('manager_id',$task->manager_id)->pluck('user_id')->toArray();
            
              Session::put('side_show','33');

            return view('taskDetail.task-detail.index', compact('taskdetail','task','users','manager','category','employee','assidned','all_employee','dep','task_manager','manager_id','coworker'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('taskdetail','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('taskDetail.task-detail.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('taskdetail','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            TaskDetail::create($requestData);
            return redirect('taskDetail/task-detail')->with('flash_message', 'TaskDetail added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('taskdetail','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $taskdetail = TaskDetail::findOrFail($id);
            return view('taskDetail.task-detail.show', compact('taskdetail'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('taskdetail','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $taskdetail = TaskDetail::findOrFail($id);
            return view('taskDetail.task-detail.edit', compact('taskdetail'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('taskdetail','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $taskdetail = TaskDetail::findOrFail($id);
             $taskdetail->update($requestData);

             return redirect('taskDetail/task-detail')->with('flash_message', 'TaskDetail updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('taskdetail','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            TaskDetail::destroy($id);

            return redirect('taskDetail/task-detail')->with('flash_message', 'TaskDetail deleted!');
        }
        return response(view('403'), 403);

    }
}

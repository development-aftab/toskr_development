<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Task;
use App\User;
use App\TaskCategory;
use App\TaskAssigned;
use Illuminate\Http\Request;
use Storage;

class TaskController extends Controller
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
        $model = str_slug('task','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $task = Task::where('project_name', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('start_date', 'LIKE', "%$keyword%")
                ->orWhere('end_date', 'LIKE', "%$keyword%")
                ->orWhere('assign_to', 'LIKE', "%$keyword%")
                ->orWhere('priority', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $task = Task::paginate($perPage);
            }

            return view('task.task.index', compact('task'));
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
        $model = str_slug('task','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
          $category = TaskCategory::where('company_id',Auth::user()->company_id)->get();
          $employee = User::where('company_id',Auth::user()->company_id)->where('department_id',Auth::user()->department_id)->get(); 
            return view('task.task.create',compact('employee','category'));
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
        $model = str_slug('task','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            $requestData['image']=Storage::disk('website')->put('taskimages',$request->image)??''; 
            $task = Task::create($requestData);
            foreach ($request->assign as $key => $value) {
                TaskAssigned::create(['task_id'=>$task->id,'employee_id'=>$value,'task_manager'=>1]);
            }
            return redirect('dashboard')->with('flash_message', 'Task added!');
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
        $model = str_slug('task','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $task = Task::findOrFail($id);
            return view('task.task.show', compact('task'));
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
        $model = str_slug('task','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $task = Task::findOrFail($id);
            return view('task.task.edit', compact('task'));
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
        $model = str_slug('task','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $task = Task::findOrFail($id);
            if ($request->hasFile('image')) {
                $requestData['image']=Storage::disk('website')->put('taskimages',$request->image)??'';
                Storage::disk('website')->delete($request->oldimage);
            }else{
                $requestData['image'] = $request->oldimage??"";
               
            }//end if else.
            if(isset($request->assign)){
                TaskAssigned::where('task_id',$id)->delete();
                foreach ($request->assign as $key => $value) {
                    TaskAssigned::create(['task_id'=>$id,'employee_id'=>$value,'task_manager'=>1]);
                }
            }    
            $task->update($requestData);

             return redirect('taskDetail/task-detail')->with('flash_message', 'Task updated!');
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
        $model = str_slug('task','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Task::destroy($id);

            return redirect('task/task')->with('flash_message', 'Task deleted!');
        }
        return response(view('403'), 403);

    }
}

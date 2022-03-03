<?php

namespace App\Http\Controllers\TaskAssigned;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\TaskAssigned;
use Illuminate\Http\Request;

class TaskAssignedController extends Controller
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
        $model = str_slug('taskassigned','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $taskassigned = TaskAssigned::where('task_id', 'LIKE', "%$keyword%")
                ->orWhere('employee_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $taskassigned = TaskAssigned::paginate($perPage);
            }

            return view('taskAssigned.task-assigned.index', compact('taskassigned'));
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
        $model = str_slug('taskassigned','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('taskAssigned.task-assigned.create');
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
        $model = str_slug('taskassigned','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            TaskAssigned::create($requestData);
            return redirect('taskAssigned/task-assigned')->with('flash_message', 'TaskAssigned added!');
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
        $model = str_slug('taskassigned','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $taskassigned = TaskAssigned::findOrFail($id);
            return view('taskAssigned.task-assigned.show', compact('taskassigned'));
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
        $model = str_slug('taskassigned','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $taskassigned = TaskAssigned::findOrFail($id);
            return view('taskAssigned.task-assigned.edit', compact('taskassigned'));
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
        $model = str_slug('taskassigned','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $taskassigned = TaskAssigned::findOrFail($id);
             $taskassigned->update($requestData);

             return redirect('taskAssigned/task-assigned')->with('flash_message', 'TaskAssigned updated!');
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
        $model = str_slug('taskassigned','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            TaskAssigned::destroy($id);

            return redirect('taskAssigned/task-assigned')->with('flash_message', 'TaskAssigned deleted!');
        }
        return response(view('403'), 403);

    }
}

<?php

namespace App\Http\Controllers\TaskLog;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\TaskLog;
use Illuminate\Http\Request;

class TaskLogController extends Controller
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
        $model = str_slug('tasklog','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $tasklog = TaskLog::where('task_id', 'LIKE', "%$keyword%")
                ->orWhere('activity_name', 'LIKE', "%$keyword%")
                ->orWhere('process', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('note', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $tasklog = TaskLog::paginate($perPage);
            }

            return view('taskLog.task-log.index', compact('tasklog'));
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
        $model = str_slug('tasklog','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('taskLog.task-log.create');
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
        $model = str_slug('tasklog','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            TaskLog::create($requestData);
            return redirect('taskLog/task-log')->with('flash_message', 'TaskLog added!');
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
        $model = str_slug('tasklog','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $tasklog = TaskLog::findOrFail($id);
            return view('taskLog.task-log.show', compact('tasklog'));
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
        $model = str_slug('tasklog','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $tasklog = TaskLog::findOrFail($id);
            return view('taskLog.task-log.edit', compact('tasklog'));
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
        $model = str_slug('tasklog','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $tasklog = TaskLog::findOrFail($id);
             $tasklog->update($requestData);

             return redirect('taskLog/task-log')->with('flash_message', 'TaskLog updated!');
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
        $model = str_slug('tasklog','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            TaskLog::destroy($id);

            return redirect('taskLog/task-log')->with('flash_message', 'TaskLog deleted!');
        }
        return response(view('403'), 403);

    }
}

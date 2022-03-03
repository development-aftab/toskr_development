<?php

namespace App\Http\Controllers\TaskInsight;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\TaskInsight;
use App\Task;
use App\User;
use Illuminate\Http\Request;

class TaskInsightController extends Controller
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
        $model = str_slug('taskinsight','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $taskinsight = TaskInsight::where('title', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $taskinsight = TaskInsight::paginate($perPage);
            }
             $task = Task::where('manager_id',Auth::id())->get();
            return view('taskInsight.task-insight.index', compact('taskinsight','task'));
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
        $model = str_slug('taskinsight','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('taskInsight.task-insight.create');
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
        $model = str_slug('taskinsight','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            TaskInsight::create($requestData);
            return redirect('taskInsight/task-insight')->with('flash_message', 'TaskInsight added!');
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
        $model = str_slug('taskinsight','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $taskinsight = TaskInsight::findOrFail($id);
            return view('taskInsight.task-insight.show', compact('taskinsight'));
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
        $model = str_slug('taskinsight','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $taskinsight = TaskInsight::findOrFail($id);
            return view('taskInsight.task-insight.edit', compact('taskinsight'));
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
        $model = str_slug('taskinsight','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $taskinsight = TaskInsight::findOrFail($id);
             $taskinsight->update($requestData);

             return redirect('taskInsight/task-insight')->with('flash_message', 'TaskInsight updated!');
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
        $model = str_slug('taskinsight','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            TaskInsight::destroy($id);

            return redirect('taskInsight/task-insight')->with('flash_message', 'TaskInsight deleted!');
        }
        return response(view('403'), 403);

    }
}

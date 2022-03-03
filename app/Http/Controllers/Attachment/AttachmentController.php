<?php

namespace App\Http\Controllers\Attachment;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Attachment;
use App\Task;
use Illuminate\Http\Request;
use Session;
use Storage;
class AttachmentController extends Controller
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
        $model = str_slug('attachment','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $attachment = Attachment::where('task_id', 'LIKE', "%$keyword%")
                ->orWhere('employee_id', 'LIKE', "%$keyword%")
                ->orWhere('Name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $attachment = Attachment::where('task_id',Session::get('task_id'))->orderBy('id', 'DESC')->get();
            }

            return view('attachment.attachment.index', compact('attachment'));
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
        $model = str_slug('attachment','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('attachment.attachment.create');
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
      
        $model = str_slug('attachment','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            if(Auth::user()->hasRole('company')){
               $company_id = Auth::id();
            }elseif(Auth::user()->hasRole('Manager') || Auth::user()->hasRole('employee')){
               $company_id = Auth::user()->company_id;
            } 
            $name = basename($request->file('attachment')->getClientOriginalName());
            $task = Task::where('id',Session::get('task_id'))->first();
            $requestData = $request->all();
            $attachment = Storage::disk('website')->put('taskattachment',$request->attachment)??''; 
            Attachment::create(['task_id'=>Session::get('task_id'),'employee_id'=>Auth::id(),'company_id'=>$company_id,'manager_id'=>$task->manager_id,'Name'=>$name,'attachment'=>$attachment,'description'=>$request->description]);
             $attachment = Attachment::where('task_id',Session::get('task_id'))->orderBy('id', 'DESC')->get();
              return redirect()->back()->with('flash_message', 'Attachment added!');
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
        $model = str_slug('attachment','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $attachment = Attachment::findOrFail($id);
            return view('attachment.attachment.show', compact('attachment'));
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
        $model = str_slug('attachment','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $attachment = Attachment::findOrFail($id);
            return view('attachment.attachment.edit', compact('attachment'));
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
        $model = str_slug('attachment','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $attachment = Attachment::findOrFail($id);
             $attachment->update($requestData);

             return redirect('attachment/attachment')->with('flash_message', 'Attachment updated!');
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
        $model = str_slug('attachment','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Attachment::destroy($id);

            return redirect('attachment/attachment')->with('flash_message', 'Attachment deleted!');
        }
        return response(view('403'), 403);

    }
}

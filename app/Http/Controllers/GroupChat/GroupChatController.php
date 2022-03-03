<?php

namespace App\Http\Controllers\GroupChat;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\GroupChat;
use Illuminate\Http\Request;

class GroupChatController extends Controller
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
        $model = str_slug('groupchat','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $groupchat = GroupChat::where('name', 'LIKE', "%$keyword%")
                ->orWhere('admin_id', 'LIKE', "%$keyword%")
                ->orWhere('members', 'LIKE', "%$keyword%")
                ->orWhere('group_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $groupchat = GroupChat::paginate($perPage);
            }

            return view('groupChat.group-chat.index', compact('groupchat'));
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
        $model = str_slug('groupchat','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('groupChat.group-chat.create');
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
        $model = str_slug('groupchat','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $group =  GroupChat::create(['name'=>$request->group_name,'admin_id'=>Session::get('task_id'),'members'=>json_encode($request->user_id)]);
              GroupChat::where('id',$group->id)->update(['group_id'=>'1099022'.$group->id.'']);
               return back();
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
        $model = str_slug('groupchat','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $groupchat = GroupChat::findOrFail($id);
            return view('groupChat.group-chat.show', compact('groupchat'));
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
        $model = str_slug('groupchat','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $groupchat = GroupChat::findOrFail($id);
            return view('groupChat.group-chat.edit', compact('groupchat'));
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
        $model = str_slug('groupchat','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $groupchat = GroupChat::findOrFail($id);
             $groupchat->update($requestData);

             return redirect('groupChat/group-chat')->with('flash_message', 'GroupChat updated!');
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
        $model = str_slug('groupchat','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            GroupChat::destroy($id);

            return redirect('groupChat/group-chat')->with('flash_message', 'GroupChat deleted!');
        }
        return response(view('403'), 403);

    }
}

<?php

namespace App\Http\Controllers\MessageViewed;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\MessageViewed;
use Illuminate\Http\Request;

class MessageViewedController extends Controller
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
        $model = str_slug('messageviewed','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $messageviewed = MessageViewed::where('task_id', 'LIKE', "%$keyword%")
                ->orWhere('send_to', 'LIKE', "%$keyword%")
                ->orWhere('receiver', 'LIKE', "%$keyword%")
                ->orWhere('viewed', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $messageviewed = MessageViewed::paginate($perPage);
            }

            return view('messageViewed.message-viewed.index', compact('messageviewed'));
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
        $model = str_slug('messageviewed','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('messageViewed.message-viewed.create');
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
        $model = str_slug('messageviewed','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            MessageViewed::create($requestData);
            return redirect('messageViewed/message-viewed')->with('flash_message', 'MessageViewed added!');
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
        $model = str_slug('messageviewed','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $messageviewed = MessageViewed::findOrFail($id);
            return view('messageViewed.message-viewed.show', compact('messageviewed'));
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
        $model = str_slug('messageviewed','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $messageviewed = MessageViewed::findOrFail($id);
            return view('messageViewed.message-viewed.edit', compact('messageviewed'));
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
        $model = str_slug('messageviewed','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $messageviewed = MessageViewed::findOrFail($id);
             $messageviewed->update($requestData);

             return redirect('messageViewed/message-viewed')->with('flash_message', 'MessageViewed updated!');
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
        $model = str_slug('messageviewed','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            MessageViewed::destroy($id);

            return redirect('messageViewed/message-viewed')->with('flash_message', 'MessageViewed deleted!');
        }
        return response(view('403'), 403);

    }
}

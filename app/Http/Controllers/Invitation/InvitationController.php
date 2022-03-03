<?php

namespace App\Http\Controllers\Invitation;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
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
        $model = str_slug('invitation','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $invitation = Invitation::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('department_id', 'LIKE', "%$keyword%")
                ->orWhere('role_id', 'LIKE', "%$keyword%")
                ->orWhere('url', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $invitation = Invitation::paginate($perPage);
            }

            return view('invitation.invitation.index', compact('invitation'));
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
        $model = str_slug('invitation','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('invitation.invitation.create');
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
        $model = str_slug('invitation','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            Invitation::create($requestData);
            return redirect('invitation/invitation')->with('flash_message', 'Invitation added!');
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
        $model = str_slug('invitation','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $invitation = Invitation::findOrFail($id);
            return view('invitation.invitation.show', compact('invitation'));
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
        $model = str_slug('invitation','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $invitation = Invitation::findOrFail($id);
            return view('invitation.invitation.edit', compact('invitation'));
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
        $model = str_slug('invitation','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $invitation = Invitation::findOrFail($id);
             $invitation->update($requestData);

             return redirect('invitation/invitation')->with('flash_message', 'Invitation updated!');
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
        $model = str_slug('invitation','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Invitation::destroy($id);

            return redirect('invitation/invitation')->with('flash_message', 'Invitation deleted!');
        }
        return response(view('403'), 403);

    }
}

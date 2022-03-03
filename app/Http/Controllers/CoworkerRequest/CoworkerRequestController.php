<?php

namespace App\Http\Controllers\CoworkerRequest;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\CoworkerRequest;
use Illuminate\Http\Request;

class CoworkerRequestController extends Controller
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
        $model = str_slug('coworkerrequest','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $coworkerrequest = CoworkerRequest::where('taski_id', 'LIKE', "%$keyword%")
                ->orWhere('manager_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $coworkerrequest = CoworkerRequest::paginate($perPage);
            }

            return view('coworkerRequest.coworker-request.index', compact('coworkerrequest'));
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
        $model = str_slug('coworkerrequest','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('coworkerRequest.coworker-request.create');
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
        $model = str_slug('coworkerrequest','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            CoworkerRequest::create($requestData);
            return redirect('coworkerRequest/coworker-request')->with('flash_message', 'CoworkerRequest added!');
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
        $model = str_slug('coworkerrequest','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $coworkerrequest = CoworkerRequest::findOrFail($id);
            return view('coworkerRequest.coworker-request.show', compact('coworkerrequest'));
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
        $model = str_slug('coworkerrequest','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $coworkerrequest = CoworkerRequest::findOrFail($id);
            return view('coworkerRequest.coworker-request.edit', compact('coworkerrequest'));
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
        $model = str_slug('coworkerrequest','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $coworkerrequest = CoworkerRequest::findOrFail($id);
             $coworkerrequest->update($requestData);

             return redirect('coworkerRequest/coworker-request')->with('flash_message', 'CoworkerRequest updated!');
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
        $model = str_slug('coworkerrequest','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            CoworkerRequest::destroy($id);

            return redirect('coworkerRequest/coworker-request')->with('flash_message', 'CoworkerRequest deleted!');
        }
        return response(view('403'), 403);

    }
}

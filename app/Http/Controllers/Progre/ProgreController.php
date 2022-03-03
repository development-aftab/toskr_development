<?php

namespace App\Http\Controllers\Progre;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Progre;
use Illuminate\Http\Request;

class ProgreController extends Controller
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
        $model = str_slug('progre','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $progre = Progre::where('title', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $progre = Progre::paginate($perPage);
            }

            return view('progre.progre.index', compact('progre'));
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
        $model = str_slug('progre','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('progre.progre.create');
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
        $model = str_slug('progre','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            Progre::create($requestData);
            return redirect('progre/progre')->with('flash_message', 'Progre added!');
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
        $model = str_slug('progre','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $progre = Progre::findOrFail($id);
            return view('progre.progre.show', compact('progre'));
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
        $model = str_slug('progre','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $progre = Progre::findOrFail($id);
            return view('progre.progre.edit', compact('progre'));
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
        $model = str_slug('progre','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $progre = Progre::findOrFail($id);
             $progre->update($requestData);

             return redirect('progre/progre')->with('flash_message', 'Progre updated!');
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
        $model = str_slug('progre','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Progre::destroy($id);

            return redirect('progre/progre')->with('flash_message', 'Progre deleted!');
        }
        return response(view('403'), 403);

    }
}

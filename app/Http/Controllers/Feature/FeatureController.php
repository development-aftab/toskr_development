<?php

namespace App\Http\Controllers\Feature;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Feature;
use Illuminate\Http\Request;
use Storage;
class FeatureController extends Controller
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
        $model = str_slug('feature','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $feature = Feature::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $feature = Feature::paginate($perPage);
            }

            return view('feature.feature.index', compact('feature'));
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
        $model = str_slug('feature','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('feature.feature.create');
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
        $model = str_slug('feature','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            $requestData['image']=Storage::disk('website')->put('features',$request->image)??'';
            Feature::create($requestData);
            return redirect('feature/feature')->with('flash_message', 'Feature added!');
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
        $model = str_slug('feature','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $feature = Feature::findOrFail($id);
            return view('feature.feature.show', compact('feature'));
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
        $model = str_slug('feature','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $feature = Feature::findOrFail($id);
            return view('feature.feature.edit', compact('feature'));
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
        $model = str_slug('feature','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $feature = Feature::findOrFail($id);
            if ($request->hasFile('image')) {
                $requestData['image']=Storage::disk('website')->put('features',$request->image)??'';
                Storage::disk('website')->delete($request->oldimage);
            }else{
                $requestData['image'] = $request->oldimage??"";
               
            }//end if else.
             $feature->update($requestData);

             return redirect('feature/feature')->with('flash_message', 'Feature updated!');
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
        $model = str_slug('feature','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Feature::destroy($id);

            return redirect('feature/feature')->with('flash_message', 'Feature deleted!');
        }
        return response(view('403'), 403);

    }
}

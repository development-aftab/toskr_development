<?php

namespace App\Http\Controllers\HowItWorks;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\HowItWork;
use Illuminate\Http\Request;
use Storage;
class HowItWorksController extends Controller
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
        $model = str_slug('howitworks','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $howitworks = HowItWork::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $howitworks = HowItWork::paginate($perPage);
            }

            return view('howItWorks.how-it-works.index', compact('howitworks'));
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
        $model = str_slug('howitworks','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('howItWorks.how-it-works.create');
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
        $model = str_slug('howitworks','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            $requestData['image']=Storage::disk('website')->put('howitwork',$request->image)??''; 
            HowItWork::create($requestData);
            return redirect('howItWorks/how-it-works')->with('flash_message', 'HowItWork added!');
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
        $model = str_slug('howitworks','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $howitwork = HowItWork::findOrFail($id);
            return view('howItWorks.how-it-works.show', compact('howitwork'));
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
        $model = str_slug('howitworks','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $howitwork = HowItWork::findOrFail($id);
            return view('howItWorks.how-it-works.edit', compact('howitwork'));
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
        $model = str_slug('howitworks','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $howitwork = HowItWork::findOrFail($id);
            if ($request->hasFile('image')) {
                $requestData['image']=Storage::disk('website')->put('howitwork',$request->image)??'';
                Storage::disk('website')->delete($request->oldimage);
            }else{
                $requestData['image'] = $request->oldimage??"";
               
            }//end if else.
             $howitwork->update($requestData);

             return redirect('howItWorks/how-it-works')->with('flash_message', 'HowItWork updated!');
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
        $model = str_slug('howitworks','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            HowItWork::destroy($id);

            return redirect('howItWorks/how-it-works')->with('flash_message', 'HowItWork deleted!');
        }
        return response(view('403'), 403);

    }
}

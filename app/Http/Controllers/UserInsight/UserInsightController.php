<?php

namespace App\Http\Controllers\UserInsight;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\UserInsight;
use App\User;
use Illuminate\Http\Request;

class UserInsightController extends Controller
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
        $model = str_slug('userinsight','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $userinsight = UserInsight::where('user_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $userinsight = UserInsight::paginate($perPage);
            }
            $users = User::where('id', '!=', Auth::user()->id)->where('department_id',Auth::user()->department_id)->where('company_id',Auth::user()->company_id)->get();
            return view('userInsight.user-insight.index', compact('userinsight','users'));
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
        $model = str_slug('userinsight','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('userInsight.user-insight.create');
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
        $model = str_slug('userinsight','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            UserInsight::create($requestData);
            return redirect('userInsight/user-insight')->with('flash_message', 'UserInsight added!');
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
        $model = str_slug('userinsight','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $userinsight = UserInsight::findOrFail($id);
            return view('userInsight.user-insight.show', compact('userinsight'));
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
        $model = str_slug('userinsight','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $userinsight = UserInsight::findOrFail($id);
            return view('userInsight.user-insight.edit', compact('userinsight'));
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
        $model = str_slug('userinsight','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $userinsight = UserInsight::findOrFail($id);
             $userinsight->update($requestData);

             return redirect('userInsight/user-insight')->with('flash_message', 'UserInsight updated!');
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
        $model = str_slug('userinsight','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            UserInsight::destroy($id);

            return redirect('userInsight/user-insight')->with('flash_message', 'UserInsight deleted!');
        }
        return response(view('403'), 403);

    }
}

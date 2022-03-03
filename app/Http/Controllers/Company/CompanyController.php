<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        $model = str_slug('company','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $company = User::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $company = User::paginate($perPage);
            }

            return view('company.company.index', compact('company'));
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
        $model = str_slug('company','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('company.company.create');
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
        return $request->all(); 
        $model = str_slug('company','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            extract($request->all());
                $this->validate($request,[
                    'name' => 'required',
                    'email' => 'unique:users,email',
                    'password' => 'required|min:6',
                ]);
            
           $user = User::create(['name'=>$name,'email'=>$email,'password'=>bcrypt($password)]);
                Profile::create(['user_id'=>$user->id]);
                $user->roles()->attach([1 => ['role_id' =>3, 'user_id' => $user->id]]);
               return redirect()->back()->with('flash_message', 'Please wait for approval!');
            // return redirect('company/company')->with('flash_message', 'Company added!');
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
        $model = str_slug('company','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $company = Company::findOrFail($id);
            return view('company.company.show', compact('company'));
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
        $model = str_slug('company','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $company = Company::findOrFail($id);
            return view('company.company.edit', compact('company'));
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
        $model = str_slug('company','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $company = Company::findOrFail($id);
             $company->update($requestData);

             return redirect('company/company')->with('flash_message', 'Company updated!');
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
        $model = str_slug('company','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Company::destroy($id);

            return redirect('company/company')->with('flash_message', 'Company deleted!');
        }
        return response(view('403'), 403);

    }
}

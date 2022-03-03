<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;
use App\Department;
use Illuminate\Http\Request;
use Session;
class EmployeeController extends Controller
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
        $model = str_slug('employee','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $employee = User::where('company_id',Auth::id())->where('department_id',Session::get('request_id'))->where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('gender', 'LIKE', "%$keyword%")
                ->orWhere('dob', 'LIKE', "%$keyword%")
                ->orWhere('pic', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $employee = User::where('company_id',Auth::id())->where('department_id',Session::get('request_id'))->paginate($perPage);
            }

            return view('employee.employee.index', compact('employee'));
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
        $model = str_slug('employee','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
             $department = Department::get();
            return view('employee.employee.create',compact('department'));
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
        $model = str_slug('employee','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            Employee::create($requestData);
            return redirect('employee/employee')->with('flash_message', 'Employee added!');
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
        $model = str_slug('employee','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $employee = Employee::findOrFail($id);
            return view('employee.employee.show', compact('employee'));
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
        $model = str_slug('employee','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $employee = Employee::findOrFail($id);
            $department = Department::get();
            return view('employee.employee.edit', compact('employee','department'));
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
        $model = str_slug('employee','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            
            $employee = Employee::findOrFail($id);
             $employee->update($requestData);

             return redirect('employee/employee')->with('flash_message', 'Employee updated!');
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
        $model = str_slug('employee','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Employee::destroy($id);

            return redirect('employee/employee')->with('flash_message', 'Employee deleted!');
        }
        return response(view('403'), 403);

    }
}

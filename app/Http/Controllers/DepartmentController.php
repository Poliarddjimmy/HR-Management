<?php

namespace HrManagement\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use HrManagement\User;
use HrManagement\department;

class DepartmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        $dept = department::all();
        return view('departments_liste', compact('dept'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $department = new department($input);
        if(Auth::user()->department()->save($department))
        {
            return back()->with('Success', 'Your Department has been created successfully');
        }
        else
        {
            return back()->with('Success', 'Error Process');
        }
    }

    public function show($id)
    {
        $dept = department::find($id);

        $count_user = ($dept->employee->count() * 100 )/($dept->employee_number);
        return view('department', compact('dept', 'count_user'));
    }
}

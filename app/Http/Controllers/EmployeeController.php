<?php

namespace HrManagement\Http\Controllers;

use Illuminate\Http\Request;
use HrManagement\employee;

class EmployeeController extends Controller
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
        $employee = employee::all();
        return view('employee_list', compact('employee'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $employee = employee::create($input);
        if($employee)
        {
            return back()->with('Success', 'The employee has been created successfully');
        }
        else
        {
            return back()->with('Success', 'Error Process');
        }
    }

    public function show($id)
    {
        $employee = employee::find($id);

        return view('employee', compact('employee'));
    }

    public function create()
    {
        return view('new_employee');
    }

}

<?php

namespace HrManagement\Http\Controllers;

use Illuminate\Http\Request;
use HrManagement\division;
use Auth;

class DivisionController extends Controller
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

        $division = division::create($input);
        if($division)
        {
            return back()->with('Success', 'Your Division has been created successfully');
        }
        else
        {
            return back()->with('Success', 'Error Process');
        }
    }

    public function show($id)
    {
        
    }
}

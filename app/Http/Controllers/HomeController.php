<?php

namespace HrManagement\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use HrManagement\User;
use HrManagement\department;

class HomeController extends Controller
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
        $employee = User::all();
        return view('home', compact('employee'));
    }

    public function welcome()
    {
        if(Auth::user()->id){
            return redirect ('home');
        }
        else{
            return view('welcome');
        }
    }
}

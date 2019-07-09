<?php

namespace HrManagement\Http\Controllers;

use Illuminate\Http\Request;
use HrManagement\position;

use auth;

class PositionController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        $position = new position($input);
        if(Auth::user()->position()->save($position))
        {
            return back()->with('Success', 'Your position has been created successfully');
        }
        else
        {
            return back()->with('Success', 'Error Process');
        }
    }
}

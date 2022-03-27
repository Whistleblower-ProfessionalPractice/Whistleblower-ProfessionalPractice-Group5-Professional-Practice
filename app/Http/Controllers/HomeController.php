<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\Department;
use Illuminate\Http\Request;

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
        return view('home');
    }
    public function complains()
    {
        $complains=Complain::orderBy('id','desc')->get();
        $departments = Department::get();
        $depId="";
        return view('complains',compact('complains','departments','depId'));
    }

    public function searchComplain(Request $request)
    {
        $dep = Department::find($request['branch']);
        $depId = $request['branch'];
        $complains=$dep->complains;
        $departments = Department::get();
        return view('complains',compact('complains','departments','depId'));
    }
}

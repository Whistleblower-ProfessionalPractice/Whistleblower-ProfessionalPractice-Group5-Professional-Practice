<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function addComplain(Request $request)
    {
        $complain = new Complain();
        $complain->name=$request['title'];
        $complain->description=$request['description'];
        $complain->currDate=date("Y-m-d");
        $complain->currDate=date("Y-m-d");
        $complain->department_id=$request["branch"];
        $complain->save();
        return back()->with('message',"Successfully Added!");
    }
}

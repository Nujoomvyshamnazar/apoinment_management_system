<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function getData(Request $request)
    {
        $data = "get Alldata";
        return view('index',['data'=>$data]);
    }
}

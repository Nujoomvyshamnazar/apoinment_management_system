<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class ProjectController extends Controller
{
    
    public function getData(Request $request)
    {
        $data = "get Alldata";
        return view('index',['data'=>$data]);
    }


    public function getAllDepartments(Request $request)
    {
        $departments = Department::all();
         
        return view("index",['departments'=>$departments]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Appointment;
use Illuminate\Support\Facades\Session;


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


    public function showAppointments(Request $request)
    {
        $department_id = $request->input('department_id');
        $appointments = Appointment::where('department_id',$department_id)->get();

        return view("appointments",['appointments'=>$appointments]);
    }


    public function confirmBooking(Request $request)
    {
       
    }
}

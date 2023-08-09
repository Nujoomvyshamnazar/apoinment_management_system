<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Appointment;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


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

        return \view("appointments",['appointments'=>$appointments]);
    }


    public function confirmBooking(Request $request)
    {
        $appointment_id = $request->input('appointment_id'); 
        $department_name = $request->input('department_name');
        $appointment_date = $request->input('appointment_date');

        $exists = Booking::where('appointment_id','=',$appointment_id)->exists();

        if($exists)
        {
        // tell user it has been booked by somebody else
           Session::flash('message','Appointment was Already Taken.');
           Session::flash('alert-class','alert-danger');
           return redirect('/');
        }
        else
        {
         //book this appointment

         $booking = new Booking;
         $booking->appointment_id = $appointment_id;
         $booking->department_name = $department_name;
         $booking->appointment_date = $appointment_date;
         $booking->username = Auth::user()->name;
         $booking->user_id = Auth::user()->id;
         $booking->save();

         // change status
         Appointment::where('id',$appointment_id)->update(['taken'=>1]);

         Session::flash('message','Appointment Booked Successfully.');
         Session::flash('alert-class','alert-success');
         return redirect('/');
        }

    }

    public function myBookings(Request $request)
    {
       $bookings = Booking::where('user_id',Auth::user()->id)->get();

       return \view('mybookings',['bookings'=>$bookings]);
    }


    public function cancelBooking(Request $request)
    {
        $booking_id = $request->input('booking_id');

        Booking::where('appointment_id',$booking_id)->delete();

        $statuschange = Appointment::where('id',$booking_id)->update(['taken'=>0]);

        Session::flash('message','Appointment Cancelled.');
        Session::flash('alert-class','alert-success');

        return redirect('/');
    }
}

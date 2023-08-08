@extends('layouts.main')


@section('content')
<div class="container-lg" style="margin: 0 auto">
    <div class="row">
<h2 class="text-center mt-2 mb-2" style="color: blueviolet">C & D Appointments</h2>
    </div>
    <div class="row ">

<table class="table table-bordered mt-4">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Department name</th>
          <th scope="col">Department Date</th>
          <th scope="col">Taken</th>
        </tr>
      </thead>
      <tbody>
        @foreach($appointments as $appointment)
        <tr>
          <th scope="row">{{ $appointment->id }}</th>
          <td>{{ $appointment->department_name }}</td>
          <td>{{ $appointment->appointment_date }}</td>
          
            @if($appointment->taken)
              <td>You cant book This</td>
            @else
            <td>
            <form method="POST" action={{ route('confirmbooking') }}>
                @csrf

            <input type="text" name="appointment_id" value="{{ $appointment->id}}"  style="display: none"/>
            <input type="text" name="department_name" value="{{ $appointment->department_name}}"  style="display: none"/>
            <input type="text" name="appointment_date" value="{{ $appointment->appointment_date}}"  style="display: none"/>
            <input type="submit" value="book" class="btn btn-success" />
            </form>
            </td>
            @endif

      
        </tr>
        @endforeach
       
     
      </tbody>
</table>
</div>
</div>

@endsection
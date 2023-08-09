@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin: 0 auto">
    <div class="row">
<h2 class="text-center mt-2 mb-2" style="color: blueviolet">My Bookings</h2>
    </div>
    <div class="row">
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Department name</th>
                  <th scope="col">Department Date</th>
              <!--    <th scope="col">Want to Cancel?</th>-->
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
      @foreach($bookings as $booking)
                <tr>
                <th scope="row">{{ $booking->id }}</th>
                <td>{{ $booking->department_name }}</td>
                <td>{{ $booking->appointment_date }}</td>
                <!--<td>Call to 9809036628</td>-->
                <td>
                <form method="POST" action={{ route('cancelbooking') }}>
                @csrf
                <input type="text" name="booking_id" value={{ $booking->appointment_id }}  style="display:none;" />
                <input type="submit" value="cancel" class="btn btn-danger"/>
                </form>
                </td>
                </tr>
      @endforeach

      
              </tbody>
        </table>
    </div>
</div>

@endsection
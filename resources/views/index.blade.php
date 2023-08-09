@extends('layouts.main')

@section('content')

<div class="container-lg">

<div class="row text-center mt-4 mb-4">
<h2 style="color: blue">C & D Hospitals,We Take care of You.</h2>
<h5>Best Doctors For Perfect treatment.</h5>
</div>
<div class="row text-center mt-4 mb-4">
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class','alert-info')}}">{{ Session::get('message')}}</p>
@endif
</div>

<div class="row mt-4  text-center">


@foreach ($departments as $department)
    

<!-- Card start-->
<div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 mb-4">
<div class="card" style="width: 100%;">
    <img src="{{ $department->image }}" style="width: 200px,margin:0 auto;">
<div class="card-body">
    <div class="card-title">
     <b>{{ $department->name}}</b>
    </div>
    <div class="card-text mb-4">
        {{ $department->description }}
    </div>
    <form method="post" action={{ route('showappointments') }} class="mt-5">
        @csrf
        <input type="text" name="department_id" value="{{ $department->id}}" style="display: none"/>
    <input type="submit" value="Show Appointment" class="btn btn-primary"/>
    </form>
</div>
</div>
</div>
<!-- card end here -->

@endforeach




</div>
</div>

@endsection


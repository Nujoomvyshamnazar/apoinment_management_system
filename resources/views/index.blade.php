@extends('layouts.main')

@section('content')

<div class="container-lg">
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
    <a href="#" class="btn btn-primary">Show Appointment</a>
</div>
</div>
</div>
<!-- card end here -->

@endforeach




</div>
</div>

@endsection


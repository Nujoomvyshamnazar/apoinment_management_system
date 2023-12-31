<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg  bg-primary " data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">C&D</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>

          @if (Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>

          @else


          <li class="nav-item">
            <a class="nav-link" href="/mybookings">My Bookings</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/dashboard">My Dashboard</a>
          </li>

         
        
          
          @endif
      
        </ul>
      
      </div>
    </div>
  </nav>

  <!-- Top Navigation end here-->
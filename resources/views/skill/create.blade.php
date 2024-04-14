@extends('layouts.homelayout')
@section('title','Skill')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Users</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Users</h6>
      </nav> -->
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar"> 
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        {{-- <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Log out</span>
              <form id="logout-form" action="{{ route('logout') }}"  method="POST" class="d-none"> --}}
                  @csrf
              </form>
            </a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
  
  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Skill Form - Laravel 10 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .container {
            max-width: 500px; /* Adjust container width */
            background-color: #fff; /* White background */
            border-radius: 10px; /* Rounded corners */
            padding: 30px; /* Add some padding */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Add shadow */
            margin-top: 50px; /* Add margin from top */
        }
        .form-group {
            margin-bottom: 20px; /* Add spacing between form elements */
        }
        .btn-back {
            margin-right: 10px; /* Add margin to the "Back" button */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center mb-4">
                <h2>Add Skill</h2>
            </div>
        </div>
    </div>

    @if(session('status'))
    <div class="alert alert-success mb-3">
        {{ session('status') }}
    </div>
    @endif

    <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Skill Name:</strong>
                    <input type="text" name="skillname" class="form-control" placeholder="Enter Skill Name">
                    @error('skillname')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Percentage:</strong>
                    <input type="number" name="percentage" class="form-control" placeholder="Enter Percentage">
                    @error('percentage')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 text-right">
                <a class="btn btn-danger btn-back" href="{{ route('skills.index')}}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

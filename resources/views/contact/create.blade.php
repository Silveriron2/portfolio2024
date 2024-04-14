@extends('layouts.homelayout')
@section('title','Contact')
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
    <title>Add Contacts Form - Laravel 10 CRUD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
          
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Add Contact</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('contacts.store') }}"> Back</a>
        </div>
    </div>
</div>
   
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
   
<form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Your Name:</strong>
                <input type="text" name="yourname" class="form-control" placeholder="YourName">
               @error('yourname')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email">
               @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                 <input type="number" name="phone" class="form-control" placeholder="Phone">
                @error('phone')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                 <input type="text" name="message" class="form-control" placeholder="Message">
                @error('message')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            <!-- </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                 <input type="email" name="Email" class="form-control" placeholder="Email">
                @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                 <input type="text" name="Phone" class="form-control" placeholder="Phone">
                @error('phone')
                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        </div>
         -->
        <div class="row">
            <div class="col-md-12 text-right">
            <a class="btn btn-danger btn-back" href="{{ route('contacts.index')}}">Back</a>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
</form>

</body>
</html>

  


  
@endsection
@section('script')


@endsection
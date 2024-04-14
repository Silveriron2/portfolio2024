@extends('layouts.homelayout')

@section('spinner')
@include('includes.spinnerInclude')
@endsection

@section('sidebar')
@include('includes.sidebarInclude')
@endsection

@section('navbar')
@include('includes.navbarInclude')
@endsection

@section('content')
<!-- <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page"></li>
        </ol>
        <h6 class="font-weight-bolder mb-0"></h6>
      </nav>
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
              {{-- </form>
            </a>
          </li>
          </li>
        </ul> --}}
      </div>
    </div>
  </nav>
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">people</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize"></p>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
          </div>
        </div>
      </div>
    </div>
  </div> 
</div> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a class="btn btn-primary col-2" href="{{ route('abouts.create') }}">Add About</a>
            </div>
            <div class="card">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>Zipcode</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($abouts as $about)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $about->name }}</td>
                                    <td>{{ $about->birthday }}</td>
                                    <td>{{ $about->address }}</td>
                                    <td>{{ $about->zipcode }}</td>
                                    <td>{{ $about->email }}</td>
                                    <td>{{ $about->phone }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-sm btn-primary" href="{{ route('abouts.edit',$about->id) }}">Edit</a>
                                            <form action="{{route('abouts.destroy', $about->id)}}" method="POST">
                                                @csrf
                                               
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- Your script goes here -->
@endsection
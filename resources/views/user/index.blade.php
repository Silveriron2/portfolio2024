<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create Users</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Role</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->role }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->password }}</td>
            @if(Auth::user()->role === 'admin')
            <td>
                <form action="{{ route('users.edit',$user->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    @endif
   
                    @csrf
                    @method('DELETE')
                    <button id="openModalBtn" class="btn btn-danger">Delete</button>
                    @endif
                </form>
            </td>
            @endif


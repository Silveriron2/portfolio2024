@extends('layouts.homelayout')

@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('educationals.create') }}"> Create Educational Yourself</a>
            </div>
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>SchoolName</th>
            <th>Year</th>
            <th>Address</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($educationals as $educational)
        <tr>
            <td>{{ $educational->id }}</td>
            <td>{{ $educational->schoolname }}</td>
            <td>{{ $educational->year }}</td>
            <td>{{ $educational->address }}</td>
            <td>{{ $educational->description }}</td>
            
           
            <td>
                <form action="{{ route('educationals.destroy',$educational->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('educationals.edit',$educational->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>

@endsection
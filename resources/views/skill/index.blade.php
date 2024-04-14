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
                <a class="btn btn-success" href="{{ route('skills.create') }}"> Create Skills</a>
            </div>
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>SkillName</th>
            <th>Percentage</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>{{ $skill->id }}</td>
            <td>{{ $skill->skillname }}</td>
            <td>{{ $skill->percentage }}</td>
           
           
            <td>
                <form action="{{ route('skills.destroy',$skill->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('skills.edit',$skill->id) }}">Edit</a>
   
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
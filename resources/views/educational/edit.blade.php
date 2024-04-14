<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

<div class="row">
    <div class="col-lg-12">
     <h2 class="float-left">Edit</h2>
    <a class="btn btn-primary float" href="{{ route('educationals.index') }}">Back</a>
    </div>
</div>

    @if(session('status'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif

    <form action="{{ route('educationals.update', $educational->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="schoolname">SchoolName:</label>
                    <input type="text" name="schoolname" value="{{ $educational->schoolname }}" class="form-control" placeholder="SchoolName">
                    @error('schoolname')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="number" name="year" value="{{ $educational->year }}" class="form-control" placeholder="Year">
                    @error('year')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" value="{{ $educational->address }}" class="form-control" placeholder="Address">
                    @error('address')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" value="{{ $educational->description }}" class="form-control" placeholder="Description">
                    @error('description')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
         <div class="row">
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary ml-">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
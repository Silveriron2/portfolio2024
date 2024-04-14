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
            <a class="btn btn-primary float-right" href="{{ route('skills.index') }}"> Back</a>
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

    <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">SkillName:</label>
                    <input type="text" name="skillname" value="{{ $skill->skillname }}" class="form-control" placeholder="SkillName">
                    @error('skillname')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="profile">Percentage:</label>
                    <input type="number" name="percentage" value="{{ $skill->perecentage }}" class="form-control" placeholder="Percentage">
                    @error('percentage')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
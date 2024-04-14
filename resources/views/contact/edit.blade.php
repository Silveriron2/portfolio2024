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
            <a class="btn btn-primary float-right" href="{{ route('contacts.index') }}"> Back</a>
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

    <form action="{{ route('contacts.update', $contacts->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="yourname">Your Name</label>
                    <input type="text" name="yourname" value="{{ $contact->yourname }}" class="form-control" placeholder="YourName">
                    @error('yourname')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ $contact->email }}" class="form-control" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone" value="{{ $contact->phone }}" class="form-control" placeholder="Phone">
                    @error('address')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="message">Message:</label>
                    <input type="text" name="message" value="{{ $contact->message }}" class="form-control" placeholder="Message">
                    @error('message')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
             </div>
        <!-- </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ $contact->email }}" class="form-control" placeholder="Email">
                        @error('email')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div> -->
        <!-- <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone_number" value="{{ $about->phone }}" class="form-control" placeholder="Phone">
                    @error('phone')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </div>
    </form>
</div> -->

</body>
</html>
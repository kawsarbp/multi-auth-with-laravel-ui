<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(session()->has('message'))
                <div class="alert alert-{{ session('type') }} text-center">{{ session('message') }}</div>
                @endif
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf
                <div class="card">
                    <h4 class="card-header">Admin Login Form</h4>
                    <div class="card-body">
                        <div class="my-3">
                            <label for="email">Email</label>
                            <input type="email" value="{{ old('email') }}" id="email" name="email" placeholder="Enter Your Email" class="form-control" >
                            @error('email') <span style="color:red;">{{ $message }}</span> @enderror
                        </div>
                        <div class="my-3">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter Your Password" class="form-control" >
                            @error('password') <span style="color:red;">{{ $message }}</span> @enderror
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn btn-outline-primary">Log In</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

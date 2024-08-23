<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="col-md-12">
        
            <div class="card">
                <div class="card-header">
                    <h4>Users
                        <a href="{{ url('user') }}" class="btn btn-danger float-end">Back</a>

                    </h4>

                </div>
                <div class="card-body">
<form action="{{ url('user/store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for=""> Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for=""> Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label for=""> Password</label>
        <input type="text" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label for=""> Role</label>
        <select class="form-select" name="role[]" aria-label="Default select example" multiple>
            <option selected>Open this select Role</option>
            @foreach ( $role as $role )
            <option value="{{ $role }}">{{ $role }}</option>
                
            @endforeach
           
          </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info"> Submit</button>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    
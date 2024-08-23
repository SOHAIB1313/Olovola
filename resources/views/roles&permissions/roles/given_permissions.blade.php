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
                    <h4>{{  $role->name}}
                        <a href="{{ url('role') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('role/givenPermission/'. $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @foreach ($permission as $perm)
    <div class="">
        <label>
            <input type="checkbox" name="permission[]" value="{{ $perm->name }}" />
        </label>
        {{ $perm->name }}
    </div>
@endforeach

                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-info"> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

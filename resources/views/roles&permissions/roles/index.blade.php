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
    @include('roles&permissions.links')
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Roles
                        <a href="{{ url('role/create') }}" class="btn btn-primary float-end">Add Role</a>

                    </h4>

                </div>
                <div class="card-body">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ( $data as $data )
        
   
    <tbody>
        <td>{{  $data->id}}</td>
        <td>{{  $data->name}}</td>
        <td>
<a href="{{ url('role/given/'.$data->id) }}" class="btn btn-info"> 
Add / Edit Role Premission
</a>
<a href="{{ url('role/edit/'.$data->id) }}" class="btn btn-info"> Edit</a>
<a href="{{ url('role/delete/'.$data->id) }}" class="btn btn-danger"> Remove</a>
        </td>
    </tbody>
    @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    
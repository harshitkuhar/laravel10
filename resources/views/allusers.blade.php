<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>All Users</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">All Users</h2>
                <a href="/add-user" class="btn btn-info my-2">Add New</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">City</th>
                        <th scope="col">View</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $id => $value )
                            <tr>
                                <th>{{$id + 1}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->age}}</td>
                                <td>{{$value->city}}</td>
                                <td><a href="{{ route('showsingleuser', $value->id) }}" class="btn btn-primary btn-sm">View User</a></td>
                                <td><a href="{{ route('getuserdata', $value->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                                <td><a href="{{ route('deleteuser', $value->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</body>
</html>

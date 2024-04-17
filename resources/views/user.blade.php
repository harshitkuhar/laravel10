@extends('layouts.mainlayout')

@section('title')
    Single User
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mt-5">Single User</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">City</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ( $singleuser as $id => $value )
                            <tr>
                                <th>{{$value->id}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->age}}</td>
                                <td>{{$value->city}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Single User</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mt-5">Single User</h2>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">City</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $singleuser as $id => $value )
                            <tr>
                                <th>{{$value->id}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->age}}</td>
                                <td>{{$value->city}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</body>
</html> --}}

@extends('layouts.mainlayout')

@section('title')
    All Users
@endsection

@section('content')
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
                                <td><a href="{{ route('deleteuser', $value->id) }}" onclick="deleteuser()" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $data->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // function deleteuser(){
        //     Swal.fire({
        //         title: "Are you sure?",
        //         text: "You want to delete this user!",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: "Yes, delete it!"
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             Swal.fire({
        //             title: "Deleted!",
        //             text: "User has been deleted.",
        //             icon: "success"
        //             });
        //         }
        //     });
        // }
    </script>
@endsection

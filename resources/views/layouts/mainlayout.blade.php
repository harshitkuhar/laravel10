<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title')</title>
</head>
<body>

    @yield('content')

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        @if( $message = Session::get('success') )
            Toast.fire({
                icon: "success",
                title: "{{ $message }}"
            });
        @endif

        @if( $message = Session::get('error') )
            Toast.fire({
                icon: "error",
                title: "{{ $message }}"
            });
        @endif

        @if( $message = Session::get('info') )
            Toast.fire({
                icon: "info",
                title: "{{ $message }}"
            });
        @endif

    </script>

    @yield('script')

</body>
</html>

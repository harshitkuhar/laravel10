<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    @include('header', ['name'=>'Harshit'])

    <h1>Hello from home page</h1>
    
    @include('footer')

    {{-- @php
        $user = "Harshit";
    @endphp
    
    {{$user}} --}}

    {{-- @php
        $names = ["Harshit", "Ravi Bhai", "Satyam"];
    @endphp

    <ul>
        @foreach ($names as $name)
            @if($loop->first)
                <li style="color:red;"> {{ "$name" }}</li>
            @else
            <li> {{ "$name" }}</li>
            @endif
            
        @endforeach
    </ul> --}}

</body>
</html>
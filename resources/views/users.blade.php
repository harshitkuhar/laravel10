<h1>Users Page</h1>

@foreach ($user as $key => $value)

    <h4>{{$key}}. {{ $value['name'] }} | {{ $value['city'] }}
        <a href="{{ route('viewUser', $key) }}">View User</a>
    </h4>
    
@endforeach
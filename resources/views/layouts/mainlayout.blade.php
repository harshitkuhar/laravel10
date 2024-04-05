<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Harshit</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <div class="sidebar">
        <h2>Sidebar</h2>
        @section('sidebar')
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        @show
    </div>
    @yield('content')
</div>

<footer>
    <p>Footer &copy; 2024</p>
</footer>

</body>
</html>

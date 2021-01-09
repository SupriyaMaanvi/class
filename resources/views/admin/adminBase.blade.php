<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href="" class="navbar-brand">Admin Pannel</a>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item"><a href="" class="nav-link">Logout</a></li>
                @endauth

                @guest
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                @endguest
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>
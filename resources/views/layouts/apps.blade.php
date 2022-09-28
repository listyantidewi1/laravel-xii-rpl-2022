<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
</head>
<body>
    <div style="background-color:rgb(41, 23, 23)">
        @yield('content')
    </div>
    <div style="background-color:yellow">
        @yield('footer')
    </div>
</body>
</html>

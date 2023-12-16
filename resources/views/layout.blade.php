<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Kino Order')</title>
</head>

<body>
    <h1>Title</h1>
    @include('partials.navigation')
    <hr>
    @yield('content')
    <hr>
</body>

</html>

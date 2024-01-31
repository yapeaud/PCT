<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('incs.link')
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    @include('incs.script')
</body>
</html>
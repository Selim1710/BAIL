<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAIL Website</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    @include('users.partials.header')
    @yield('content')
    @include('users.partials.footer')

    <script src="{{asset('js/website.js')}}"></script>
</body>
</html>
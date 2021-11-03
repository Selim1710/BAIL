<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAIL Website</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    @include('users.partials.header')
    <!-- Navbar Section Ends Here -->

    @yield('content')

    <!-- social Section Starts Here -->
    @include('users.partials.footer')
    <!-- footer Section Ends Here -->

</body>
</html>
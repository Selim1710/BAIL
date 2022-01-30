<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin login form</title>
  <link rel="stylesheet" href="{{ asset('css/admin_form.css') }}">
</head>

<body>
  <div class="myform">
    <div class="wrapperf">
      <!-- Message -->
      @if(session()->has('error'))
      <p style="background-color: red;width:100%;padding:2%;">{{ session()->get('error') }}</p>

      @endif
      @if(session()->has('message'))
      <p style="background-color: green;width:100%;padding:2%;">{{ session()->get('message') }}</p>
      @endif
      <br />
      <h2> Login </h2>
      <form action="{{ route('admin.do.login') }}" method="post" enctype="multipart/form-data">
        @csrf

        <h2>Name</h2>
        <div class="input-box">
          <input type="email" name="email" value="" placeholder="Enter Your Email" required>
        </div>
        <h2>Password</h2>
        <div class="input-box">
          <input type="password" name="password" value="" placeholder="Enter Your Password" required>
        </div>
        <div class="input-box button">
          <input type="Submit" value="Submit Now">
        </div>
      </form>
    </div>
  </div>
</body>

</html>
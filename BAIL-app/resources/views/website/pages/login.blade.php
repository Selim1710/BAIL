@extends('website.index')
@section('contents')
<section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">

              <form action="{{route('user.do.login')}}" method="post" >
                @csrf

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" required/>
                </div>


                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="{{ route('users.registration.create') }}" class="fw-bold text-body"><u>Register here</u></a></p>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
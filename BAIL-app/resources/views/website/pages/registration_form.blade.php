<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Bangladesh Auto Industries Limited</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/website/bootstrap.css') }}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{ url('css/website/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ url('css/website/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('css/website/responsive.css') }}" rel="stylesheet" />
  <!-- For User Profile -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <!-- message -->
                @if(session()->has('error'))
                <p class="alert alert-danger">{{ session()->get('error') }}</p>
                @endif
                @if(session()->has('message'))
                <p class="alert alert-success">{{ session()->get('message') }}</p>
                @endif
                
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                <form action="{{ route('users.registration.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                    <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" required />

                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" required />

                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" required />
                  </div>

                  <!-- <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" name="repeat_user_password" id="form3Example4cdg" class="form-control form-control-lg"required />
                </div> -->

                  <!-- <div class="form-check d-flex justify-content-center mb-5">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3cg"
                  />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> -->

                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route('users.login')}}" class="fw-bold text-body"><u>Login here</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


  <!-- jQery -->
  <script src="{{ url('js/website/jquery-3.4.1.min.js') }}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{ url('js/website/bootstrap.js') }}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="{{ url('js/website/custom.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->


</body>

</html>
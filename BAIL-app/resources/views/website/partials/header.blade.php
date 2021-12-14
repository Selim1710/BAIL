

<!-- <div class="hero_area">
  <div class="bg-box">
    <img src="images/Background.jpg" alt="..">
  </div> -->
  <!-- header section strats -->
  <header class="header_section bg-box">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <span>
            BAIL
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item active">
              <a  class="nav-link" href="{{route('website.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a  class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Accessories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <div class="user_option">
              <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary">Search</button>
              </div>
            </div>
            @if(auth()->user())
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.login') }}">Logout</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.login') }}">Login</a>
            </li>
            @endif

          </ul>
        </div>
      </nav>
    </div>
  </header>
<!-- </div> -->
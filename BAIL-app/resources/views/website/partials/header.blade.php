  <header class="header_section bg-box">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <span>
            BAIL
          </span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item">
              <a class="nav-link" href="{{route('website.index')}}">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('user.show.product') }}">Product</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('user.show.accessories') }}">Accessories</a>
            </li>

            <!-- product search starts here -->

            <form action="">
              <div class="user_option">
                <div class="input-group">
                  <input type="search" name="search" value="{{ $search }}" class="form-control rounded" placeholder="Enter Model or Name"/>
                  <!-- search icon -->
                  <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                  </button>
                  <!-- End Search icon -->
                </div>
              </div>
            </form>

            <!-- Product Search Ends Here -->

            @if(auth()->user())
            <li class="nav-item">
               <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('user.profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
              </a>
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
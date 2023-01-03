<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> dipto393@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/dipto.error.404" target="_blank"><span class="mai-logo-facebook-f"></span></a>
              {{-- <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a> --}}
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">One</span>-Health</a>

        <form action="{{url('/search')}}" method="GET">
          <div class="input-group input-navbar">
            <div id= "icon-addon1" class="input-group-prepend"  >
              <button  class="input-group-text mai-search"  role="button" type="submit"></button>
              {{-- <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span> --}}
            </div>
            <input value="{{Request::get('seearch')}}" type="text" name="search" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/doctor-list')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/allnews')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
           
@if(session()->get('login')!=true)

<li class="nav-item">
  <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
</li><br>
<li class="nav-item">
    <a class="btn btn-primary ml-lg-3" href="{{route('register')}}"> Register</a>
</li>
@else
<li class="nav-item">
<a class="btn btn-primary ml-lg-3" href="{{url('/user-appointment')}}"> Make Appointment</a>
</li>

{{-- <li class="nav-item">
  <a class="btn btn-primary ml-lg-3" href="{{route('logout')}}"> Logout</a>
</li> --}}
<li class="dropdown">
  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="halflings-icon white user"></i> {{Session::get('name')}}
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    
    <li class="nav-item">
      <a class="btn btn-primary ml-lg-3" href="{{route('profile')}}"> Profile</a>
    </li><br>
    <li class="nav-item">
      <a class="btn btn-primary ml-lg-3" href="{{route('logout')}}"> Logout</a>
    </li>
  </ul>
</li>

 @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
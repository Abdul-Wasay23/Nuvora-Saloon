<header class="header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="hdr_logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo" />
          </a>
        </div>
      </div>
      <div class="col-lg-7 md-none">
        <div class="nav stroke">
          <ul id="menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/aboutus') }}">About Us</a></li>
            <li class="dropdown-nav">
              <a href="{{ url('/services') }}">Services</a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/service-detail') }}">Service 1</a></li>
                <li><a href="{{ url('/service-detail') }}">Service 2</a></li>
                <li><a href="{{ url('/service-detail') }}">Service 3</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/pricing') }}">Pricing / Packages</a></li>
            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            <li><a href="{{ url('/team') }}">Our Team</a></li>
            <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-8 col-sm-6">
        <div class="hdr_btn">
          <div class="hamburger-menu">
            <button class="menu">
              <svg width="45" height="45" viewBox="0 0 100 100">
                <path class="line line1"
                  d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                </path>
                <path class="line line2" d="M 20,50 H 80"></path>
                <path class="line line3"
                  d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                </path>
              </svg>
            </button>
          </div>
          <a href="{{ url('/login') }}" class="login-icon"><i class="fa-solid fa-user"></i></a>
          <a href="{{ url('/appointment') }}" class="theme-btn">Appointment</a>
        </div>
      </div>
    </div>
  </div>
</header>

<nav class="hamburger-navigation" style="transition-delay: 0.2s">
  <div class="layer"></div>
  <div class="container">
    <ul class="nav-menu" style="transition-delay: 1.5s">
      <li class="home-drop"><a href="{{ url('/') }}">Home</a></li>
      <li class="home-drop"><a href="{{ url('/aboutus') }}">About Us</a></li>
      <li class="home-drop"><a href="{{ url('/services') }}">Services</a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('/service-detail') }}">Service 1</a></li>
          <li><a href="{{ url('/service-detail') }}">Service 2</a></li>
          <li><a href="{{ url('/service-detail') }}">Service 3</a></li>
        </ul>
      </li>
      <li class="home-drop"><a href="{{ url('/pricing') }}">Pricing / Packages</a></li>
      <li class="home-drop"><a href="{{ url('/gallery') }}">Gallery</a></li>
      <li class="home-drop"><a href="{{ url('/team') }}">Our Team</a></li>
      <li class="home-drop"><a href="{{ url('/contactus') }}">Contact Us</a></li>
    </ul>
  </div>
</nav>

<!doctype html>
<html lang="en">

<!-- Mirrored from yevgenysim.github.io/touche/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 16:38:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->

    <link rel="icon" type="image/png" sizes="32x32" href="assets/logo/AR.png">

    <meta name="theme-color" content="#ffffff">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/css/libs.bundle.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.bundle.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="../../fonts.gstatic.com/index.html">
    <link href="../../fonts.googleapis.com/css2a2ea.css?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&amp;family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet">

    <!-- Map -->
    <link rel='stylesheet' href='../../api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' />

    <!-- Title -->
    <title>Marian Alumni Association</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg navbar-togglable fixed-top">
      <div class="container">

        <!-- Navbar brand (mobile) -->
        <a class="navbar-brand d-lg-none" href="index-2.html"><img class="img-rounded" width="100px" src="{{asset('assets/logo/emblem.png')}}" alt="" srcset=""></a>

        <!-- Navbar toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="{{url('/')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="menu.html">Menu</a>
            </li>
          </ul>

          <!-- Navbar brand -->
          <a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="">
            <img class="img-rounded" width="100px" src="" alt="" srcset="">
          </a>

          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="{{route('news-and-events')}}">News & Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('gallary')}}">Gallery</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link " href="contact-us.html">Contact</a>
            </li> --}}
          </ul>

        </div>
      </div>
    </nav>

    <!-- WELCOME -->
    <header data-jarallax data-speed=".8" style="background-image: url(assets//logo/LOGO.jpg);">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">
        <div class="container my-auto">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Preheading -->
              {{-- <h6 class="text-xs text-white-75">
                <span class="text-primary">Café</span> / Restaurant
              </h6> --}}

              <!-- Heading -->
              <h5 class="display-5 text-white mb-4">
                Marian Girls Alumni Association
              </h5>

              <!-- Subheading -->
              <p class="text-center text-white-75 mb-7">
                CONNECT, EXPAND AND GIVE BACK
              </p>

              <!-- Button -->
              <a class="btn btn-outline-primary text-white text-primary-hover mb-7 mb-md-0" href="{{route('register')}}">
                Get started
              </a>

            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md">

              <!-- Social links -->
              <ul class="list-inline text-center text-md-start mb-3 my-md-5">
                <li class="list-inline-item">
                  <a class="text-white-75 text-primary-hover" href="#!">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item ms-5">
                  <a class="text-white-75 text-primary-hover" href="#!">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item ms-5">
                  <a class="text-white-75 text-primary-hover" href="#!">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-md">

              <!-- Address -->
              <p class="font-serif text-white-75 text-center text-md-end text-lg-end my-md-5">
                <i class="fas fa-map-marker-alt text-primary me-3"></i> HV9W+2MC, Bagamoyo
              </p>

            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- MAP -->
    <iframe style="height: 30rem;width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15858.804360770346!2d38.8966468!3d-6.4324296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf4ba1c893c1da4f!2sMarian%20Girls%20Secondary%20School!5e0!3m2!1sen!2stz!4v1637687246815!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    {{-- <section class="bg-light" data-map='{"center": [-118.244615, 34.052979], "zoom": 12}' style="height: 30rem;">
    </section> --}}

    <!-- FOOTER -->
    <footer class="py-7 py-md-9 bg-black">
      <div class="container px-4">
        <div class="row gx-7">
          <div class="col-sm-4">

            <!-- Heading -->
            <h5 class="text-xs text-primary">
              About Us
            </h5>

            <!-- Text -->
            <p class="mb-6">
              This website by launched by Marian Girls High School Alumni whose aim is to support Tanzania education to the young generation and celebrate every achievements associated with it.
            </p>

          </div>
          <div class="col-sm-4">

            <!-- Heading -->
            <h5 class="text-xs text-primary">
              Contact info
            </h5>

            <!-- List -->
            <ul class="list-unstyled mb-6">
              <li class="d-flex mb-2">
                <div class="fas fa-map-marker-alt me-3 mt-2 fs-sm"></div>
                HV9W+2MC, Bagamoyo
              </li>
              <li class="d-flex mb-2">
                <div class="fas fa-phone me-3 mt-2 fs-sm"></div>
                +255 753 782 188
              </li>
              <li class="d-flex">
                <div class="far fa-envelope me-3 mt-2 fs-sm"></div> <a href="mailto:admin@domain.com">mariamCommunity@gmail.com</a>
              </li>
            </ul>

          </div>
          <div class="col-sm-4">

            <!-- Heading -->
            <h5 class="text-xs text-primary">
              Associated By
            </h5>

            <!-- Text -->
            <div class="mb-3">
              {{-- <div class="">Fredrick <span class="text-primary">Shayo</span></div> --}}
              <div class=""><span class="text-primary">Dwight</span> Danda</div>
              <div class="font-serif text-xs">Developers</div>
            </div>

            <!-- Text -->
            {{-- <div class="mb-6">
              <div class="text-xs">Friday - Sunday</div>
              <div class="font-serif">12:00 AM - 03:00 AM</div>
            </div> --}}

          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <!-- Copyright -->
            <div class="d-flex align-items-center">
              <hr class="hr-sm me-3" style="height: 1px;" /> &copy; 2021 Marian Alumni Association. All rights reserved.
            </div>

          </div>
        </div>
      </div>
    </footer>


    <!--  -->
    <!-- TOAST -->
    <div class="toast position-fixed bottom-0 start-50 translate-middle-x mb-3 mb-md-5" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body mx-auto"></div>
      </div>
    </div>

    <!-- JAVASCRIPT -->
    <!-- Vendor JS -->
    <script src="assets/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.bundle.js"></script>

  </body>

</html>

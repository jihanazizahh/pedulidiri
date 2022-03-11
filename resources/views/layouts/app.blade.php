
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>GoHub | Free Traveling Template</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/asset/assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/asset/assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/asset/assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/asset/assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('admin/asset/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('admin/asset/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&amp;display=swap" rel="stylesheet">
    <link href="{{asset('admin/asset/assets/css/theme.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/asset/assets/css/user.css')}}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="light">
        <h1 class="text-primary m-0"><img class="me-3">Peduli Diri</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-center">
              <li class="nav-item"><a class="nav-link pl-3 me-3" href="/register">Register </a></li>
              <li class="nav-item"><a class="nav-link pl-3 me-3" href="/login">Login</a></li>
              <li class="nav-item"><a class="nav-link pl-3 me-3" href="/perjalanan">Perjalanan</a></li>
            </ul>
            <button class="btn btn-primary">Sign Up</button>
          </div>
        </div>
      </nav>

      <section class="py-7 py-lg-10" id="home">
          <div class="container">

          <div class="row align-items-center h-100 justify-content-center justify-content-lg-start">

        @yield('content')
          </div>
        </div>

        <!--/.bg-holder-->

        {{-- <div class="container">


        <div class="container">
    @yield('content')

        </div>
      </section>
      <section class="py-5">
        {{-- <div class="container" id="auto">
          <div class="row align-items-center">
            <div class="col-md-6 text-md-start">
              <h4 class="fs-2 fw-normal">Monitor your expenses</h4>
              <ul class="list-unstyled py-3">
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Specific access/rights by users
                </li>
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Physical and virtual Mastercards with adjestable payment limits
                </li>
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Dashboards to follow-up on your expenses
                </li>
              </ul>
            </div>
            <div class="col-md-6 mt-4 mt-md-0 text-start">
              <h4 class="fs-2 fw-normal">Make accounting easier</h4>
              <ul class="list-unstyled py-3">
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Unlimited history
                </li>
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>REad-only access for your accountant
                </li>
                <li class="mb-3 text-900"><span class="far fa-check-circle text-700 me-2"></span>Plug-and-play for accounting tools
                </li>
              </ul>
            </div>
          </div>
        </div> --}}
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->

        {{-- <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h2 class="fw-bold text-black">Ready to get started?</h2>
              <p>Get an guided demo with an OKR expert.</p>
            </div>
            <div class="col-lg-6 h-100">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Email Address" />
                <button class="btn btn-primary rounded-start-0 px-3" type="submit">Get Started</button>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0 bg-1000">
        <div class="container">
          {{-- <div class="row py-7">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="assets/img/icons/Logo2.png" height="51" alt="" /></a>
              <p class="text-light mt-4 mb-0">EU: +49 9999 0000</p>
              <p class="text-light mb-0">US: +00 4444 0000</p>
              <p class="text-light mt-5">info@gohub.ee</p>
              <div class="d-flex"><a href="#!"><img class="me-xl-3 me-1" src="assets/img/gallery/linkedin-line1.svg" alt="in" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="assets/img/gallery/facebook-line1.svg" alt="fb" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="assets/img/gallery/twitter-line1.svg" alt="twitter" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="assets/img/gallery/instagram-line1.svg" alt="instragram" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a>
              </div>
            </div>
            <div class="col-3 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold text-light font-sans-serif">About Us</h5>
              <ul class="list-unstyled text-light mb-md-4">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Newsroom</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Blog</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub API</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gift cards</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Career</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub driving jobs</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light font-sans-serif">Offerings</h5>
              <ul class="list-unstyled text-light mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Eats</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Business</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Guhub Freight</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Health</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light font-sans-serif"> Support</h5>
              <ul class="list-unstyled text-light mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Terminal Conditions</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Contact US</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Terms of Use</a></li>
              </ul>
            </div>
          </div> --}}
        </div>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-1000">

          {{-- <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-3">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">peduli diri</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                {{-- <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-info text-200" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                </p> --}}
              {{-- </div>
            </div>
          </div> --}}
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('admin/asset/vendors/popper/popper.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendors/anchorjs/anchor.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendors/is/is.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendors/lodash/lodash.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="{{asset('admin/asset/vendors/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('admin/asset/vendors/gsap/customEase.js')}}"></script>
    <script src="{{asset('admin/asset/vendors/gsap/scrollToPlugin.js')}}"></script>
    <!--script(src=`${CWD}vendors/gsap/drawSVGPlugin.js`)-->
    <script src="{{asset('admin/asset/assets/js/theme.js')}}"></script>

  </body>

</html>

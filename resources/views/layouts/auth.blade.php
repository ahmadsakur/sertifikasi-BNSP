<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <!DOCTYPE html>
 <html>
 
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
   <!-- Favicon -->
   <link rel="icon" href="{{asset('argon/img/brand/favicon.png')}}" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{ asset('argon/css/argon.css?v=1.1.0') }}" type="text/css">
 </head>
 
 <body class="bg-default">
   <!-- Navbar -->
   <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
     <div class="container">
       <a class="navbar-brand" href="/">
         <img src="{{ asset('argon/img/brand/white.png') }}">
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
         <div class="navbar-collapse-header">
           <div class="row">
             <div class="col-6 collapse-brand">
               <a href="#">
                 <img src="{{ asset('argon/img/brand/blue.png') }}">
               </a>
             </div>
             <div class="col-6 collapse-close">
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span></span>
                 <span></span>
               </button>
             </div>
           </div>
         </div>
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a href="/login" class="nav-link btn btn-success">
               <span class="nav-link-inner--text">Login</span>
             </a>
           </li>
           {{-- <li class="nav-item">
             <a href="/register" class="nav-link btn btn-success">
               <span class="nav-link-inner--text">Register</span>
             </a>
           </li> --}}
         </ul>
         <hr class="d-lg-none" />
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content">
       @yield('content')
   </div>
   <!-- Footer -->
   <footer class="py-5" id="footer-main">
     <div class="container">
       <div class="row align-items-center justify-content-xl-between">
         <div class="col-xl-6">
           <div class="copyright text-center text-xl-left text-muted">
             &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
           </div>
         </div>
         <div class="col-xl-6">
           <ul class="nav nav-footer justify-content-center justify-content-xl-end">
             <li class="nav-item">
               <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
             </li>
             <li class="nav-item">
               <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
             </li>
             <li class="nav-item">
               <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
             </li>
             <li class="nav-item">
               <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </footer>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{ asset('argon/vendor/jquery/dist/jquery.min.js') }}"></script>
   <script src="{{ asset('argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('argon/vendor/js-cookie/js.cookie.js') }}"></script>
   <script src="{{ asset('argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
   <script src="{{ asset('argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
   <!-- Argon JS -->
   <script src="argon/js/argon.js?v=1.1.0"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="argon/js/demo.min.js"></script>
   @stack('customscripts')
 </body>
 
 </html>
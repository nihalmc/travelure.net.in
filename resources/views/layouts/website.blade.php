<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TRAVELURE TOURS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


 <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/images/logo1.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{ asset('website/font/flaticon.css') }}"rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{ asset('website/css/plugin.css') }}" rel="stylesheet" type="text/css">


    <!--Font Awesome-->
    <link rel="stylesheet" href="{{ asset('website/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">

</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header -->
    <header>
        <div class="upper-head clearfix">
            <div class="container">
                <div class="contact-info">
                    <p><i class="flaticon-phone-call"></i> Phone: +91 - 495 4050407  /<a href="https://wa.me/917306341941" target="_blank" >  7306341941 </a>/ <i class="fa fa-whatsapp"></i> 96566636112 </p>
                    <p><i class="flaticon-mail"></i> Mail: travelure.tours@gmail.com</p>
                </div>
                <div class="login-btn pull-right">
                    <a href=""><i class="fa fa-user-plus"></i>Testimonials</a>
                 <a href="{{ route('website.careers') }}"><i class="fa fa-unlock-alt"></i>Careers</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Ends -->
    @include("partials.navbar")

    @yield('content')


  @include("partials.footer")

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="{{ asset('website/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/plugin.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>
    <script src="{{ asset('website/js/main-1.js') }}"></script>
    <script src="{{ asset('website/js/custom-countdown.js') }}"></script>
    <script src="{{ asset('website/js/preloader.js') }}"></script>
    @yield('script')
</body>
</html>

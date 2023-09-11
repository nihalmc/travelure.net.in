<!-- Navigation Bar -->
<div class="navigation">
    <div class="container">
        <div class="navigation-content">
            <div class="header_menu">
                <!-- start Navbar (Header) -->
                <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                    <div class="logo pull-left">
                        <a href="{{ route('website.index') }}"><img alt="Image" src="{{ asset('website/images/logo.png') }}"></a>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper pull-right">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li class="active">
                                <a href="{{ route('website.index') }}">Home </a>

                            </li>
                            <li>
                                <a href="{{ route('website.hotel') }}">HOTELS</a>


                            </li>
                            <li>
                                <a href="">TOUR PACKAGES <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="{{ route('website.Keralapkages') }}">KERALA TOUR PACKAGES</a></li>
                                    <li><a href="{{ route('website.ayurvedapkages') }}">AYURVEDA PACKAGES</a></li>
                                    <li><a href="{{ route('website.internationalpkages') }}">INTERNATIONAL PACKAGES</a></li>
                                    <li><a href="{{ route('website.houseboatspkages') }}">KERALA HOUSEBOATS</a></li>
                                    <li><a href="{{ route('website.studentspkages') }}">STUDENTS PACKAGES</a></li>
                                    <li><a href="{{ route('website.kalaripkages') }}">KALARI PACKAGES</a></li>


                                </ul>
                            </li>

                            <li>
                                <a href="#">Services<i class="fa fa-angle-down"></i></a>

                                <ul>
                                    <li><a href="{{ route('airline.on') }}">AIRLINE TICKETING</a></li>
                                    <li><a href="{{ route('starcruis.on') }}">STAR CRUISES</a></li>
                                    <li><a href="{{ route('visa.on') }}">VISA APPLICATION</a></li>
                                    <li><a href="{{ route('rentacar.on') }}">RENT A CAR</a></li>


                                </ul>

                            </li>





                            <li>
                                <a href="{{ url('/Contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div id="slicknav-mobile"></div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Navigation Bar Ends -->

 <!-- Footer -->
 <footer>
    <div class="footer-upper">
        <div class="container">
            <div class="newsletter text-center">
                <div class="section-title section-title-white text-center">
                    <h2>Newsletter Signup</h2>
                    <div class="section-icon section-icon-white">
                        <i class="flaticon-diamond"></i>
                    </div>
                    <p>Subscribe to our weekly newsletter to get updated on our latest deals</p>
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" placeholder="Enter your E-mail">
                        <a href="#"><span class="search_btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</span></a>
                    </div>
                </form>
            </div>
            <div class="footer-links">
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="footer-about footer-margin">
                            <div class="about-logo">
                                <img src="{{ asset('website/images/logowhite.png') }}" alt="Image">
                            </div>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>-->
                            <div class="about-location">
                                <ul>
                                    <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> 8/204, 1st Floor, JRS Building, <br>
                                    Opposite Bombay Hotel, Silk Street,<br> Kozhikode-673032</li>
                                    <li><i class="flaticon-phone-call"></i> +91 495 4050407</li>
                                    <li><a href="https://wa.me/917306341941" target="_blank"><i class="flaticon-phone-call"></i> +91 7306 341 941</a></li>
                                    <i class="fas fa-mobile-alt"></i>
                                    <li><i class="flaticon-mail"></i> travelure.tours@gmail.com</li>
                                </ul>
                            </div>
                            <div class="footer-social-links">
                                <ul>
                                    <li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="footer-links-list footer-margin">
                            <h3>Main Links</h3>
                            <ul>
                                <li><a href="{{ route('website.index') }}">Home </a></a></li>
                                <li><a href="{{ route('website.hotel') }}">Hotels</a></li>
                               <!-- <li><a href="gallery.html">Gallery</a></li>-->
                                <li><a href="{{ route('website.testimonials') }}">Testimonials</a></li>
                                <!--<li><a href="careers.html">Careers</a></li>-->
                                <li><a href="{{ url('/Contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="footer-links-list footer-margin">
                            <h3>TOUR PACKAGES</h3>
                            <ul>
                                    <li><a href="{{ route('website.Keralapkages') }}">Kerala Tour Packages</a></li>
                                    <li><a href="{{ route('website.ayurvedapkages') }}">Ayurveda packages</a></li>
                                    <li><a href="{{ route('website.internationalpkages') }}">International Packages</a></li>
                                    <li><a href="{{ route('website.houseboatspkages') }}">Kerala Houseboats</a></li>
                                    <li><a href="{{ route('website.studentspkages') }}">Students Packages</a></li>
                                    <li><a href="{{ route('website.kalaripkages') }}">Kalari Packages</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="footer-links-list footer-margin">

                                <h3>OUR SERVICES</h3>
                            <ul>
                                    <li><a href="{{ route('airline.on') }}">Airline Ticketing</a></li>
                                    <li><a href="{{ route('starcruis.on') }}">Star Cruises</a></li>
                                    <li><a href="{{ route('visa.on') }}">Visa aApplication</a></li>
                                    <li><a href="{{ route('rentacar.on') }}">Rent A Car</a></li>


                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="copyright-content">
                        <p>2019 <i class="fa fa-copyright" aria-hidden="true"></i>  Travelure Tours</p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="payment-content">
                        <ul>
                            <li>Powered by</li>
                            <li>
                                <a href="https://coperor.in/" target="_blank">Coperor</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Ends -->

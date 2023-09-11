
@extends('layouts.website')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                       <form method="POST" action="{{ route('contact.submit') }}" >
                        @csrf
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" id="Name" name="name" placeholder="Enter full name">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="abc@xyz.com">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Phone Number:</label>
                                    <input type="text" class="form-control" id="phnumber" name="phonenumber" placeholder="XXXX-XXXXXX">
                                </div>
                                <div class="textarea col-xs-12">
                                    <label>Message:</label>
                                    <textarea placeholder="Enter a messages" name="messages"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <a  class="btn-blue btn-red"> <input type="submit" value="Send Message" ></a>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-about footer-margin">

                        <h4>Travel With Us</h4>

                        <div class="about-logo">
                            <img src="{{ asset('website/images/logocont.png') }}" alt="Image">
                        </div>

                        <p></p>
                        <div class="contact-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> 8/204, 1st Floor, JRS Building, <br>
Silk Street, Kozhikode-673032</li>
                                <li><i class="flaticon-phone-call"></i> +91 495 4050407, +91 7306 341 941</li>
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
            </div>
        </div>
    </section>

    <div class="map">
        <div id="map" style="height: 350px; width: 100%;"></div>
    </div>
 <script src="{{ asset('website/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/plugin.js') }}"></script>
    <script src="{{ asset('website/js/map.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8&amp;callback=initMap" ></script>
    <script src="{{ asset('website/js/preloader.js') }}<"></script>

    @endsection

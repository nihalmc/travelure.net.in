
@extends('layouts.website')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{ $packages->hotelname }}</h2>

            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="main-content detail">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8">
                    <div class="detail-content content-wrapper">
                        <div class="detail-info">
                            <div class="detail-info-content clearfix">
                                <h2></h2>
                                <!--<p class="detail-info-price"><span class="bold">$659</span></p>-->
                                <div class="deal-rating">
                                House Boat Class:
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                   <!-- <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>-->
                                    | <i class="fa fa-map-marker" aria-hidden="true"></i> ALAPPUZHA
                                </div>

                            </div>
                        </div>
                        <div class="gallery detail-box">
                            <!-- Paradise Slider -->
                            <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <!-- 1st Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="0" class="active">
                                        <!-- 1st Indicator Image -->
                                        <img src="{{ asset('website/images/detailslider1.jpg') }}" alt="in_th_030_01_sm" />
                                    </li>
                                    <!-- 2nd Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="1">
                                        <!-- 2nd Indicator Image -->
                                        <img src="{{ asset('website/images/detailslider2.jpg') }}" alt="in_th_030_02_sm" />
                                    </li>
                                    <!-- 3rd Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="2">
                                        <!-- 3rd Indicator Image -->
                                        <img src="{{ asset('website/images/detailslider3.jpg') }}" alt="in_th_030_03_sm" />
                                    </li>
                                    <li data-target="#in_th_030" data-slide-to="3">
                                        <!-- 3rd Indicator Image -->
                                        <img src="{{ asset('website/images/detailslider4.jpg') }}" alt="in_th_030_03_sm" />
                                    </li>
                                </ol> <!-- /Indicators -->
                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First Slide -->
                                    <div class="item active">
                                        <!-- Slide Background -->
                                        <img src="{{ asset('website/images/detailslider1.jpg') }}" alt="in_th_030_01" />
                                    </div>
                                    <!-- End of Slide -->
                                    <!-- Second Slide -->
                                    <div class="item">
                                        <!-- Slide Background -->
                                        <img src="{{ asset('website/images/detailslider2.jpg') }}" alt="in_th_030_02" />
                                    </div>
                                    <!-- End of Slide -->
                                    <!-- Third Slide -->
                                    <div class="item">
                                        <!-- Slide Background -->
                                        <img src="{{ asset('website/images/detailslider3.jpg') }}" alt="in_th_030_03" />
                                    </div>
                                    <!-- End of Slide -->
                                    <div class="item">
                                        <!-- Slide Background -->
                                        <img src="{{ asset('website/images/detailslider4.jpg') }}" alt="in_th_030_03" />
                                    </div>
                                </div> <!-- End of Wrapper For Slides -->
                            </div> <!-- End Paradise Slider -->
                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>{{ $packages->hotelname }}</h3>
                            </div>
                            <div class="description-content">
                                <p>{{  strip_tags($packages->packagedetails, '<a><strong><em><u><s><br><div>') }}</p>
                                <table>
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <!--<tr>
                                            <td class="title">Departure</td>
                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> San Francisco International Airport</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Departure Time</td>
                                            <td><i class="fa fa-clock-o" aria-hidden="true"></i> Please arrive by 10:20 AM for a prompt departure at 10:50 AM</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Maximum travellers</td>
                                            <td><i class="fa fa-user-o" aria-hidden="true"></i> 23</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Languages</td>
                                            <td><i class="fa fa-file-audio-o" aria-hidden="true"></i> English, Thai, Malayt</td>
                                        </tr>-->

                                    </tbody>
                                </table>
                            </div>
                        </div>


                      <div class="top-attractions detail-box">
                            <div class="detail-title">
                                <h3>Hotels and Availabilities</h3>
                            </div>
                            <div class="top-attraction-content">
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="{{ asset('website/images/roomdat.jpg') }}" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Rooms and Details</h4>
                                          <!--  <ul>
                                               <li><i class="fa fa-check" aria-hidden="true"></i> Deluxe- (30 Nos)</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Standard Room- (6 Nos)</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Suite- (2 Nos)</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Ambience Rooms- (2 Nos)</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Elegance Rooms- (2 Nos)</li>
                                            </ul>-->
                                            {{  strip_tags($packages->roomdetails, '<a><strong><em><u><s><br><div>') }}
                                        </div>

                                    </div>
                                </div>
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="{{ asset('website/images/facility.jpg') }}" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Facilities</h4>
                                            {{  strip_tags($packages->facilities, '<a><strong><em><u><s><br><div>') }}
                                        </div>

                                    </div>
                                </div>


                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="{{ asset('website/images/exlude.jpg') }}" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Excludes</h4>
                                            {{  strip_tags($packages->excludes, '<a><strong><em><u><s><br><div>') }}

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comments-form detail-box">
                            <div class="detail-title">
                                <h3>For More Details</h3>
                            </div>
                            <form method="POST" action="Test/bookkeralahouseboatspackagesendmail">
                                <div class="row">

                                    <div class="col-xs-12">
                                        <div class="comment-btn">
                                            <a href="#" class="btn-blue btn-red">Call : +91 96560 70434</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="sidebar-sticky" class="col-md-4">
                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item sidebar-item-dark">
                            <div class="detail-title">
                                <h3>Book a Hoseboat</h3>
                            </div>
                            <form method="POST" action="{{ route('houseboatspkages.submit') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <input type="email" class="form-control" id="email1" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-xs-6 col-left-padding">
                                        <input type="number" class="form-control" id="phnumber1" name="phonenumber" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-xs-6">
                                    <p style="color:#FFF; font-size:12px;">Date </p>
                                        <input type="date" class="form-control" id="date" name="date">
                                    </div>
                                    <div class="form-group col-xs-6 col-left-padding">
                                    <p style="color:#FFF; font-size:12px;">No.People </p>
                                        <input type="number" class="form-control" id="phnumber" name="people" placeholder="No.of People">
                                    </div>

                                     <div class="form-group col-xs-12">


                                    <select style="width: 100%;" name="roomtype" id="toa">

<option value="No Preference">Room Type / Accommodation:</option>

                             <option value="No Preference">No Preference</option><option value="Deluxe">Deluxe</option><option value="Standard Room">Standard Room</option><option value="Suite">Suite</option><option value="Ambience Rooms">Ambience Rooms</option><option value="Elegance Rooms">Elegance Rooms</option></select>


                                    </div>

                                    <div class="textarea col-xs-12">
                                        <textarea placeholder="Message"name="messages"></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="comment-btn">
                                            <a  class="btn-blue btn-red"><input type="submit" value="Book Now" /></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-item">

                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>Any questions regarding houseboat booking and any difficulty in booking</p>
                                <p><i class="flaticon-phone-call"></i> +91 495 4010407</p>
                                <p><i class="flaticon-mail"></i> travelure.tours@gmail.com</p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Destination Ends -->
    @endsection

@extends('layouts.website')
@section('content')
    <!-- Breadcrumb -->

    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Hotels - Munnar, Kerala</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('website.hotel') }}">Hotels</a></li>

                    <li class="breadcrumb-item"><a href="{{ route('website.hotel2', $hotels->id) }}">Hotels-{!! $hotels->destination->name !!}</a></li>



                        <li class="breadcrumb-item active" aria-current="page">{!! $hotels->title !!}</li>
                    </ul>
                </nav>

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
                                <h2>{{ $hotels->title }}</h2>
                                <!--<p class="detail-info-price"><span class="bold">$659</span></p>-->
                                <div class="deal-rating">
                                Hotel Class:
                                {{ $hotels->title }}
                                   <!-- <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>-->
                                </div>
                            </div>
                        </div>
                        <div class="gallery detail-box">
                            <!-- Paradise Slider -->
                            <section class="contact">
                                <div class="container">
                                    <div class="row">
                                        @foreach ($galleries as $peops)
                                            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                                   data-image="{{ asset('storage/' .$peops->image) }}">
                                                    <img class="img-thumbnail"
                                                         src="{{ asset('storage/' .$peops->image) }}"
                                                         alt="Another alt text">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="image-gallery-title"></h4>
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3> {!! $hotels->title !!}</h3>
                            </div>
                            <div class="description-content">
                                <p>{!! $hotels->roomtype !!}</p>

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
                                            {!! $hotels->rooms_details !!}

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
                                            {!! $hotels->facilities !!}

                                        </div>

                                    </div>
                                </div>

                                  <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="{{ asset('website/images/location.jpg') }}" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Popular Places</h4>
                                            {!! $hotels->popularplaces !!}

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
                                            {!! $hotels->excludes !!}

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comments-form detail-box">
                            <div class="detail-title">
                                <h3>For More Details</h3>
                            </div>
                            <form>
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
                                <h3>Book a Hotel</h3>
                            </div>
                            <form method="POST" action="{{ route('hotels.submit') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <input type="text" class="form-control" id="Name1" placeholder="Name" name="name">
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" name="email" >
                                    </div>
                                    <div class="form-group col-xs-6 col-left-padding">
                                        <input type="number" class="form-control" id="phnumber1" placeholder="Phone Number" name="phonenumber">
                                    </div>
                                    <div class="form-group col-xs-6">
                                    <p style="color:#FFF; font-size:12px;">Check in </p>
                                        <input type="date" class="form-control" id="date1" name="indate">
                                    </div>
                                    <div class="form-group col-xs-6 col-left-padding">
                                    <p style="color:#FFF; font-size:12px;">Check out </p>
                                        <input type="date" class="form-control" id="date" name="outdate">
                                    </div>

                                     <div class="form-group col-xs-12">
                                    <

                                    <select style="width: 100%;"  id="roomtype" name="roomtype">

<option value="No Preference">Room Type / Accommodation:</option>

                             <option value="No Preference">No Preference</option><option value="Deluxe">Deluxe</option><option value="Standard Room">Standard Room</option><option value="Suite">Suite</option><option value="Ambience Rooms">Ambience Rooms</option><option value="Elegance Rooms">Elegance Rooms</option></select>


                                    </div>

                                    <div class="textarea col-xs-12">
                                        <textarea placeholder="Message"name="messages"></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="comment-btn">
                                            <a class="btn-blue btn-red"><input type="submit" value="Book Now" ></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-item">
                            <div class="detail-title">
                                <h3>Hotels - Munnar</h3>
                            </div>
                            <div class="sidebar-content sidebar-slider">
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/detailslider1.jpg') }}" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="#">Royal Caribbean Cruises</a></h4>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>

                                        </div>
                                         <p></p>
                                        <a href="#" class="btn-blue btn-red">Book Now</a>
                                    </div>
                                </div>
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/detailslider2.jpg') }}" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="#">Bahamas Royal Cruises</a></h4>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>

                                        </div>
                                        <p></p>
                                        <a href="#" class="btn-blue btn-red">Book Now</a>
                                    </div>
                                </div>
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/detailslider3.jpg') }}" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="#">Royal Caribbean Cruises</a></h4>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                        <p></p>
                                        <a href="#" class="btn-blue btn-red">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>Any questions regarding hotel booking and any difficulty in booking</p>
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

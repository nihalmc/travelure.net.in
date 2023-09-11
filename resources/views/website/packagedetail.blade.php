
@extends('layouts.website')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{ $keralapackages->name }}</h2>

            </div>
        </div>
        <div class="section-overlay"></div>
        <div class="tabs-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="tabs" class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#timeline">ITINERARY</a></li>
                            <li ><a data-toggle="tab" href="#description">PACKAGE DETAILS</a></li>
                            <li><a data-toggle="tab" href="#gallery">GALLERY</a></li>


                            <li><a data-toggle="tab" href="#hotels">ACCOMODATION</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BreadCrumb Ends -->


    <section class="main-content detail detail-tabs">
        <div class="container">
            <div class="main-content-inner">
                <div class="row">
                    <div id="content" class="col-md-8 ">
                        <div class="tab-content">

                        <div id="timeline" class="tab-pane fade in active">
                                <div class="detail-timeline detail-box">
                                    <div class="timeline-content">
                                        <ul class="timeline">
                                            <!-- Item 1 -->
                                            <li>
                                                <div class="direction-r">
                                                    {{ strip_tags($keralapackages->Itenarary) }}
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="description" class="tab-pane fade">

                                <div class="description detail-box">
                                    <div class="description-content">
                                       <!-- <p>Brazil’s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentina’s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories you’ll cherish for life.</p>-->
                                        <table>
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="title">DURATION</td>
                                                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $keralapackages->days }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Destinations</td>
                                                    <td><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $keralapackages->destination }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Plan / Class </td>
                                                    <td><i class="fa fa-user-o" aria-hidden="true"></i>{{ $keralapackages->class }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Tariff </td>
                                                    <td><i class="fa fa-file-audio-o" aria-hidden="true"></i> INR: Tariff on Request</td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Includes</td>
                                                    <td>
                                                        <ul>
                                                            <li>{{  strip_tags($keralapackages->includes) }}</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Excludes</td>
                                                    <td class="excludes">
                                                        <ul>
                                                            <li>{{  strip_tags($keralapackages->excludes) }}</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="gallery" class="tab-pane fade">
                                 <section class="contact">
        <div class="container">
            <div class="row">
                @foreach($packagegalleries as $peops)
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="{{ asset('storage/'.$peops->image) }}"
                       >
                        <img class="img-thumbnail"
                             src="{{ asset('storage/'.$peops->image) }}"
                             alt="Another alt text" width="350px" height="350px">
                    </a>
                </div>
                @endforeach




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
        </div>
    </section>


                            </div>


                            <div id="hotels" class="tab-pane fade">
                                <div class="top-attractions detail-box">
                                    <div class="detail-title">
                                        <h3>ACCOMODATION</h3>
                                    </div>
                                    <div class="top-attraction-content">
                                        <div class="att-item clearfix">
                                            <div class="att-image">
                                                <img src="{{ asset('storage/'.$keralapackages->image) }}" alt="Images" >
                                            </div>
                                            <div class="att-content">
                                                <div class="att-content-left">
                                                    <h4>{{ $keralapackages->accomodation->title }}</h4>
                                                    <ul>
                                                        <li><i class="fa fa-check" aria-hidden="true"></i>{{  strip_tags($keralapackages->accomodation->text) }}</li>
                                                       <!-- <li><i class="fa fa-check" aria-hidden="true"></i> Free Parking</li>
                                                        <li><i class="fa fa-check" aria-hidden="true"></i> Swimming Pool</li>-->
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                </div>
                            </div>

                        </div>


                        </div>
                    </div>

                    <div id="sidebar-sticky" class="col-md-4">
                        <aside class="detail-sidebar sidebar-wrapper">
                            <div class="sidebar-item sidebar-item-dark">
                                <div class="detail-title">
                                    <h3>Book this Package</h3>
                                </div>
                                <form method="POST" action="{{ route('Keralapkages.submit') }}" >
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <input type="text" class="form-control" id="name1" placeholder="Name"  name="name">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input type="email" class="form-control" id="Email1" placeholder="Email" name="email" >
                                        </div>
                                        <div class="form-group col-sm-6 col-left-padding">
                                            <input type="text" class="form-control" id="phnumber1" placeholder="Phone Number" name="phonenumber">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input type="date" class="form-control" id="date" name="date">
                                        </div>
                                        <div class="form-group col-sm-6 col-left-padding">
                                            <input type="number" class="form-control" id="phnumber" placeholder="No.of People" name="people">
                                        </div>
                                        <div class="textarea col-sm-12">
                                            <textarea placeholder="Message" name="messages"></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="comment-btn">
                                                <a class="btn-blue btn-red"><input type="submit" value="Book Now" ></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-item">
                                <div class="detail-title">
                                    <h3>Kerala Honeymoon Packages</h3>
                                </div>
                                <div class="sidebar-content sidebar-slider">
                                    <div class="sidebar-package">
                                        <div class="sidebar-package-image">
                                            <img src="{{ asset('website/images/detailslider1.jpg') }}" alt="Image">
                                        </div>
                                        <div class="destination-content sidebar-package-content">
                                            <h4><a href="">5 Days Honeymoon Package</a></h4>

                                            <p><i class="fa fa-calendar"></i> 4 Nights / 5 Days </p>
                                            <a href="Tour/packagedetail" class="btn-blue btn-red">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="sidebar-package">
                                        <div class="sidebar-package-image">
                                            <img src="{{ asset('website/images/detailslider2.jpg') }}" alt="Image">
                                        </div>
                                        <div class="destination-content sidebar-package-content">
                                            <h4><a href="#">5 Days Honeymoon Package</a></h4>

                                            <p><i class="fa fa-calendar"></i> 4 Nights / 5 Days </p>
                                            <a href="Tour/packagedetail" class="btn-blue btn-red">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="sidebar-package">
                                        <div class="sidebar-package-image">
                                            <img src="{{ asset('website/images/detailslider3.jpg') }}" alt="Image">
                                        </div>
                                        <div class="destination-content sidebar-package-content">
                                            <h4><a href="Tour/packagedetail">5 Days Honeymoon Package</a></h4>

                                            <p><i class="fa fa-calendar"></i> 4 Nights / 5 Days </p>
                                            <a href="Tour/packagedetail" class="btn-blue btn-red">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item sidebar-helpline">
                                <div class="sidebar-helpline-content">
                                    <h3>Any Questions?</h3>
                                    <p>Any questions regarding Package booking and any difficulty in booking</p>
                                    <p><i class="flaticon-phone-call"></i> +91 495 4010407</p>
                                    <p><i class="flaticon-mail"></i>  travelure.tours@gmail.com</p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection

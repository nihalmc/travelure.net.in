@extends('layouts.website')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Alappuzha Houseboats</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tour Packages</a></li>
                        <li class="breadcrumb-item"><a href="Tour/keralahouseboats">Kerala Houseboats</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Alappuzha Houseboats</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="destinations">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($packages as $peop)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="destination-outer">


                                <div class="destination-fw-item">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="destination-fw-image">
                                                <img src="{{ asset('storage/'.$peop->image) }}" alt="Image" width="261px" height="261px">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="destination-fw-desc fw-content">
                                                <h4><a href="{{ route('website.houseboatsdetail', $peop->id) }}"></a></h4>
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> </p>
                                                <p></p>
                                                <div class="destination-fw-content">
                                                    <p class="fw-info"><a href="{{ route('website.houseboatsdetail', $peop->id) }}<i class="fa fa-camera" aria-hidden="true"></i> Photos</a></p>
                                                    <p class="fw-info"><a href="{{ route('website.houseboatsdetail', $peop->id) }}"><i class="fa fa-bed" aria-hidden="true"></i> Rooms</a></p>


                                                    <p class="fw-info"><a href="tel:+919846043403" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i> Reservation
</a></p>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">

                                            <div class="deal-rating">
                                            <p>House Boat Class :</p>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <!--<span class="fa fa-star-o"></span>
                                                <span class="fa fa-star-o"></span>-->
                                            </div>
                                            <div class="fw-btns">
                                                <div class="fw-price"><p><a href="{{ route('website.houseboatsdetail', $peop->id) }}"><strong>View Details</strong></a></p></div>
                                                <div class="destination-btns">
                                                    <a href="{{ route('website.houseboatsdetail', $peop->id) }}" class="btn-blue btn-red" tabindex="0">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagination-content">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Destination Ends -->
    @endsection

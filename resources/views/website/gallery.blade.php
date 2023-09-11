
@extends('layouts.website')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>GALLERY</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="destinations destination-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('website/images/destination1.jpg') }}" alt="Image">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="Gallery/gallery2" class="btn-blue btn-red">View Photos</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="Gallery/gallery2">Munnar</a></h3>

                            <!--<p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('website/images/destination2.jpg') }}" alt="Image">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="Gallery/gallery2" class="btn-blue btn-red">View Photos</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="Gallery/gallery2">Thekkady</a></h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('website/images/destination3.jpg') }}" alt="Image">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="Gallery/gallery2" class="btn-blue btn-red">View Photos</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="Gallery/gallery2">Vagamon</a></h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('website/images/destination4.jpg') }}" alt="Image">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="Gallery/gallery2" class="btn-blue btn-red">View Photos</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="Gallery/gallery2">Kumarakom</a></h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('website/images/destination1.jpg') }}" alt="Image">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="Gallery/gallery2" class="btn-blue btn-red">View Photos</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="Gallery/gallery2">Munnar</a></h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('website/images/destination4.j') }}pg" alt="Image">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="Gallery/gallery2" class="btn-blue btn-red">View Photos</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="Gallery/gallery2">Kumarakom</a></h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('website/images/destination2.jpg') }}" alt="Image">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="Gallery/gallery2" class="btn-blue btn-red">View Photos</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="Gallery/gallery2">Thekkady</a></h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('website/images/destination3.jpg') }}" alt="Image">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="Gallery/gallery2" class="btn-blue btn-red">View Photos</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="Gallery/gallery2">Vagamon</a></h3>

                        </div>
                    </div>
                </div>
            </div>
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
    </section>
    <!-- Destination Ends -->

    @endsection

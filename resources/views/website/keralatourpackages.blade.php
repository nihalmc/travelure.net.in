@extends('layouts.website')
@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>KERALA TOUR PACKAGES</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tour Packages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kerala Tour Packages</li>
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
                @foreach($package_types as $cat)
                <div class="col-md-3 col-sm-6">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="{{ asset('storage/' . $cat->image) }}" alt="Image" width="261px" height="261px">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="{{ route('website.Keralapkages2', $cat->id) }}" class="btn-blue btn-red">Packages</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h5><a href="{{ route('website.Keralapkages2', $cat->id) }}">{{ $cat->package_type }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

    <!-- Destination Ends -->





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

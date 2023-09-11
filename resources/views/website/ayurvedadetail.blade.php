@extends('layouts.website')
@section('content')

<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>{{ $packages->name }}</h2>

        </div>
    </div>
    <div class="section-overlay"></div>
    <div class="tabs-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul id="tabs" class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#description">PACKAGE DETAILS</a></li>
                        <li><a data-toggle="tab" href="#timeline">TREATMENTS</a></li>
                        <li><a data-toggle="tab" href="#gallery">GALLERY</a></li>




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


                    <div id="description" class="tab-pane fade in active">

                            <div class="description detail-box">
                                <div class="description-content">
                                <h5>{!! $packages->PackageDetails !!}</p>


                                    <table>
                                        <thead>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="title">DURATION</td>
                                                <td><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $packages->days }}</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Destinations</td>
                                                <td><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $packages->destination }}</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Plan / Class </td>
                                                <td><i class="fa fa-user-o" aria-hidden="true"></i>{{ $packages->class }}</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Tariff </td>
                                                <td><i class="fa fa-file-audio-o" aria-hidden="true"></i> INR: Tariff on Request</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Includes</td>
                                                <td>
                                                    <ul>
                                                        <li><i class="fa fa-check" aria-hidden="true"></i>{!! $packages->includes !!}</li>
                                                        </ul></li>

                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="title">Excludes</td>
                                                <td class="excludes">
                                                    <ul>
                                                        <li><i class="fa fa-times" aria-hidden="true"></i>{!! $packages->excludes !!}</li>

                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    <div id="timeline" class="tab-pane fade">
                            <div class="detail-timeline detail-box">
                                <div class="timeline-content">
                                    <ul class="timeline">
                                        <!-- Item 1 -->
                                        <li>

                                            <div class="direction-r">

                                                {!! $packages->Treatment !!}
                                            </div>
                                        </li>

                                        <!-- Item 6 -->

                                        </li>


                                    </ul>
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
                    <img id="image-gallery-image" class="img-responsive col-md-12" src="{{ asset('website/') }}">
                </div>

            </div>
        </div>
    </div>

        </div>
    </div>
</section>
                        </div>
                        </div>




                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"></div>
                </div>

                <div id="content" class="col-md-8 content-mobile">
                    <div class="detail-content content-wrapper">
                        <div class="detail-info">
                            <div class="detail-info-content clearfix">



                            </div>
                        </div>
                        <div class="gallery detail-box">
                            <!-- Paradise Slider -->

                                <!-- Indicators -->


                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First Slide -->


                            </div> <!-- End Paradise Slider -->
                        </div>












                    </div>
                </div>

                <div id="sidebar-sticky" class="col-md-4">
                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item sidebar-item-dark">
                            <div class="detail-title">
                                <h3>Book this Package</h3>
                            </div>
                            <form method="POST" action="{{ route('ayurvedapkages.submit') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <input type="text" class="form-control" id="name1" placeholder="Name" name="name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" id="Email1" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group col-sm-6 col-left-padding">
                                        <input type="number" class="form-control" id="phnumber1" placeholder="Phone Number" name="phonenumber">
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
                                <h4>Ayurveda Packages in Kovalam</h4>
                            </div>
                            <div class="sidebar-content sidebar-slider">
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/detailslider1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="{{ route('website.ayurvedadetail',$packages->id) }}">5 Days Honeymoon Package</a></h4>


                                        <a href="{{ route('website.ayurvedadetail',$packages->id) }}" class="btn-blue btn-red">Book Now</a>
                                    </div>
                                </div>
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/detailslider2.jpg') }}" alt="Image">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="{{ route('website.ayurvedadetail',$packages->id) }}">5 Days Honeymoon Package</a></h4>


                                        <a href="{{ route('website.ayurvedadetail',$packages->id) }}" class="btn-blue btn-red">Book Now</a>
                                    </div>
                                </div>
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/detailslider3.jpg') }}" alt="Image">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="{{ route('website.ayurvedadetail',$packages->id) }}">5 Days Honeymoon Package</a></h4>


                                        <a href="{{ route('website.ayurvedadetail',$packages->id) }}" class="btn-blue btn-red">Book Now</a>
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

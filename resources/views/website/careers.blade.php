
@extends('layouts.website')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Careers</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}"">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Careers</li>
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
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="{{ route('Home.savecareers') }}" method="post" enctype="multipart/form-data">
                             @csrf
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Enter full name" name="name">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="abc@xyz.com" name="email">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Phone Number:</label>
                                    <input type="text" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" name="phonenumber">
                                </div>

                                 <div class="form-group col-xs-6">
                                    <label>Post Applying for:</label>
                                    <select name="travel" id="travel">
                    <option value="select">select</option>
                    <option value="Post 1">Post 1</option>
                    <option value="Post 1">Post 2</option>

                    </select>
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Resume:</label>
                                    <input name="Resume" type="file">
                                </div>

                                <div class="textarea col-xs-12">
                                    <label>Message:</label>
                                    <textarea placeholder="Enter a message"name="messages"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <a class="btn-blue btn-red"><input type="submit" value="Send" /></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-about footer-margin">
       @foreach ($career as $caree)
    {!! $caree->text!!}
     @endforeach

                        <div class="contact-location">
                            <ul>

                                <li><i class="flaticon-phone-call"></i> +91 495 4010407, +91 9847 593 913</li>
                                <li><i class="flaticon-mail"></i> travelure.tours@gmail.com</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Destination Ends -->
    @endsection

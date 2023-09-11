@extends('layouts.website')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Testimonials</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="item-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="item-wrapper">
                        @foreach ($homeslider as $homet)
                            <div class="author-profile">
                                <div class="profile-image">
                                    <img src="{{ asset('storage/' . $homet->image) }}" alt="Image">
                                </div>
                                <div class="profile-content">
                                    <h3>{{ $homet->name }} <span>{{ $homet->comment }}</span></h3>
                                    <p>{{ $homet->companyname }}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="comment-form">
                            <form action="{{ route('Home.savetestimonial') }}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <h3>Write a Review</h3>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="Name">Your Comment:</label>
                                        <textarea name="txtDescription"></textarea>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="Name">Name:</label>
                                        <input type="text" class="form-control" id="Name" name="name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>

                                    <div class="form-group col-xs-6">
                                    <label>Photo:</label>
                                    <input name="Resume" type="file">
                                </div>
                                    <div class="form-group col-sm-6">
                                        <label for="website">Company name & Post:</label>
                                        <input type="text" class="form-control" id="website" name="website">
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="comment-btn">

                                             <button type="submit" class="btn-blue btn-red"> Submit Comment  </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection

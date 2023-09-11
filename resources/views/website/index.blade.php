@extends('layouts.website')

@section('content')
<div class="trpart">

    <ul>
    <li><a href="#"><img src="{{ asset('website/images/logoKmob.jpg') }}"></a></li>
    <li><a href="#"><img src="{{ asset('website/images/logoK2mob.jpg') }}"></a></li>
    <li><a href="#"><img src="{{ asset('website/images/logoK3mob.jpg') }}"></a></li>

    </ul>

    </div>

    <!-- Banner -->
    <section id="home_banner">
        <!-- Paradise Slider -->
        <div id="kenburns_061" class="carousel slide ps_indicators_txt_icon ps_control_txt_icon kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
            <!-- Wrapper For Slides -->




            <div class="carousel-inner" role="listbox">

       @foreach ($homeslider as $home )

          @if ($home->order_number==1)

            <div class="item active">

               @else

                 <div class="item ">
              @endif


                  <!-- First Slide -->

                <!-- End of Slide -->

                <!-- Second Slide -->


                    <!-- Slide Background -->
                    <img src="{{ asset('storage/' . $home['image']) }}" alt="kenburns_061_01" />
                    <!-- Left Slide Text Layer -->
                    <div class="kenburns_061_slide" data-animation="animated fadeInRight">
                        <h2>{{ $home->title }}</h2>
                        <h1>{{ $home->title2 }}</h1>

                        <a href="{{ $home->link }}" class="btn-blue btn-red">View Our Tour</a>
                    </div><!-- /Left Slide Text Layer -->
                </div><!-- /item -->
                <!-- End of Slide -->
                @endforeach
                <!-- Third Slide -->
               <!-- /item -->
                <!-- End of Slide -->

            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#kenburns_061" role="button" data-slide="prev">
                <span>prev</span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#kenburns_061" role="button" data-slide="next">
                <span>next</span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- End Paradise Slider -->
    </section>
    <!-- Banner Ends -->

 <nav class="floating-menu">
        <ul class="main-menu">
            <li>
                <a href="#" class="ripple">
                   <img src="{{ asset('website/images/logoK.jpg') }}">
                </a>
            </li>
            <li>
                <a href="#" class="ripple">
                    <img src="{{ asset('website/images/logoK2.jpg') }}">
                </a>
            </li>

            <li>
                <a href="#" class="ripple">
                    <img src="{{ asset('website/images/logoK3.jpg') }}">
                </a>
            </li>
        </ul>
        <div class="menu-bg"></div>
    </nav>

    <!-- Search Box -->
    <div class="search-box clearfix">
        <div class="container">
            <div class="search-outer">
                <div class="search-content">
                    <form method="POST" action="{{ route('homes.submit') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="search-ad">
                                    <p>Find Your <span>Holiday</span></p>
                                    <i class="flaticon-sun-umbrella "></i>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="table_item">
                                    <div class="form-group">


                                        <select id="custom-select-1" class="selectpicker form-control" name="country" id="country" >
                                        <option value="0">Destination</option>

             <option value="Albania">Albania</option>

                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>

                                                                <option value="Antiqua">Antiqua</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>

                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>

                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>

                                                                <option value="Bosnia and herzegovina">Bosnia and Herzegovina </option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British virgin">British Virgin</option>
                                                                <option value="Brunei">Brunei</option>
                                                                <option value="Buenos aries">Buenos Aries</option>

                                                                <option value="Bulgaria">Bulgaria</option>

                                                                <option value="Burkina faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>

                                                                <option value="Cape verde island">Cape Verde Island</option>
                                                                <option value="Cayman islands">Cayman Islands</option>
                                                                <option value="Central african">Central African</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>

                                                                <option value="Christmas island">Christmas Island</option>
                                                                <option value="Cocos islands">Cocos Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Cook islands">Cook Islands</option>
                                                                <option value="Costa rica">Costa Rica</option>

                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>

                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican republic">Dominican Republic</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El salvador">El Salvador</option>
                                                                <option value="value">England, Great Britain, UK</option>

                                                                <option value="Equat. guinea">Equat. Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Faeroe island">Faeroe Island</option>
                                                                <option value="Falkland">Falkland</option>

                                                                <option value="Fiji islands">Fiji Islands</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French antilles">French Antilles</option>
                                                                <option value="French guiana">French Guiana</option>
                                                                <option value="Gabon republic">Gabon Republic</option>

                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia rep.">Georgia Rep.</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>

                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadaloupe">Guadaloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guinea">Guinea</option>

                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>

                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India" selected="">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran">Iran</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>

                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Ivory coast">Ivory Coast</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jordan">Jordan</option>

                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea North">Korea North</option>
                                                                <option value="Korea South">Korea South</option>
                                                                <option value="Kuwait">Kuwait</option>

                                                                <option value="Kyrgystan">Kyrgystan</option>
                                                                <option value="Laos">Laos</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>

                                                                <option value="Libya">Libya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia">Macedonia</option>

                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>

                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                 <option value="Malaysia">Malaysia</option>
                                                                <option value="Maracaibo">Maracaibo</option>
                                                                <option value="Marshall island">Marshall Island</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia">Micronesia</option>

                                                                <option value="Moldova">Moldova</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>

                                                                <option value="Myanmar (burma)">Myanmar (Burma)</option>
                                                                <option value="Naur">Naur</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands ant">Netherlands Ant</option>
                                                                <option value="Nevis">Nevis</option>

                                                                <option value="New zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk island">Norfolk Island</option>

                                                                <option value="Norway">Norway</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papau guinea new">Papau New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>

                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippenes">Philippenes</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>

                                                                <option value="Reunion island">Reunion Island</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russia">Russia</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saipan">Saipan</option>
                                                                <option value="San marino">San Marino</option>

                                                                <option value="Sao tome">Sao Tome</option>
                                                                <option value="Saudi arabia">Saudi Arabia</option>
                                                                <option value="Senegal republic">Senegal Republic</option>
                                                                <option value="Seychelles island">Seychelles Island</option>
                                                                <option value="Sierra leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>

                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South africa">South Africa</option>
                                                                <option value="Spain">Spain</option>

                                                                <option value="Sri lanka">Sri Lanka</option>
                                                                <option value="St. helena">St. Helena</option>
                                                                <option value="St. kitts">St. Kitts</option>
                                                                <option value="St. lucia">St. Lucia</option>
                                                                <option value="St. vincent">St. Vincent</option>
                                                                <option value="Sudan">Sudan</option>

                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syria">Syria</option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Tajikstan">Tajikstan</option>

                                                                <option value="Tanzania">Tanzania</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tonga islands">Tonga Islands</option>
                                                                <option value="Trinidad &amp; tobago">Trinidad &amp; Tobago </option>

                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks &amp; caicos">Turks &amp; Caicos</option>
                                                                <option value="Tuvalu">Tuvalu</option>

                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United arab emirates">United Arab Emirates </option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="United states">United States</option>

                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu republic">Vanuatu Republic</option>
                                                                <option value="Vatican city">Vatican City</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Vietnam">Vietnam</option>
                                                                <option value="Virgin islandsst. croix john">Virgin Islands St. Croix, St. John</option>
                                                                <option value="Wallis &amp; futuna">Wallis &amp; Futuna</option>
                                                                <option value="Western samoa">Western Samoa</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Yugoslavia">Yugoslavia</option>
                                                                <option value="Zaire">Zaire</option>

                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>



              </select>

                                        <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                    <div class="form-group  form-icon">


                                        <select id="custom-select-2" class="selectpicker form-control"  name="what" id="what">
                                        <option value="0">What?</option>
							<option value="Tour Packages">Tour Packages</option>
							<option value="Hotel Reservation">Hotel Reservation</option>
							<option value="Airline Ticketing">Airline Ticketing</option>
							<option value="Star Cruises">Star Cruises</option>
							<option value="Visa Application">Visa Application</option>
							<option value="Rent a Car">Rent a Car</option>

						</select>

                                        <i class="flaticon-sun-umbrella"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="table_item">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name">

                                            <i class="flaticon-add-user"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-icon">
                                        <div class='input-group'>
                                            <input type="email" class="form-control" id="email" placeholder="Enter Your E-mail" name="email">

                                            <i class="flaticon-mail"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="table_item table-item-slider">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <input type="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile" name="phonenumber">

                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                    </div>
                                    <div class="search">
                                        <a href="#" class="btn-blue btn-red"><input type="submit" value="SUBMIT" ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Box Ends -->

    <!-- Popular Packages -->
    <section class="popular-packages">
        <div class="container">
            <div class="section-title text-center">
                <h2>INTERNATIONAL TOUR PACKAGES</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Whether it’s your first international trip or you have travelled abroad multiple times, planning a holiday to a distant land is always a special feeling.</p>
            </div>
            <div class="row package-slider slider-button">
                @foreach($homeint as $homes)
                    <div class="col-sm-4">
                        <div class="package-item">
                            <div class="package-image">
                                <img src="{{ asset('storage/' .  $homes->image) }}" alt="Image">
                                <div class="package-price">
                                    <p><span>{{ $homes->name }}</span></p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h5><i class="flaticon-time"></i> {{ $homes->days }} | Tariff On Request</h5>
                                <div class="package-info">
                                    <a href="{{ route('website.internationalpkages2',$homes->id) }}" class="btn-blue btn-red">View more details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- Popular Packages Ends -->

    <!-- Deals -->
    <section class="deals">
        <div class="container">
            <div class="section-title section-title-white text-center">
                <h2>Kerala Holiday Packages</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Travelling abroad for a holiday is a great thing but there isn’t anything that beats the diversity of landscapes and cultures in Kerala. </p>
            </div>
            <div class="deals-outer">
                <div class="row deals-slider slider-button">
                    @foreach ($homekeralatypes as $homet)
                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="{{ asset('storage/' . $homet->image) }}" alt="Image">
                                </div>
                                <div class="deal-content">
                                    <h3>{{ $homet->package_type }}</h3>
                                    <p>{!! $homet->text !!}..</p>
                                    <a href="{{ route('website.Keralapkages2',$homet->id) }}" class="btn-blue btn-red">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach




                </div>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- Deals Ends -->

    <!--* bucket*-->

    <!--* End bucket*-->

    <!-- Top Destinations -->
    <section class="top-destinations">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Tourist Destinations in Kerala</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>-->
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4">
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{ asset('website/images/deal1.jpg') }}" alt="Image">
                        <div class="overlay">
                            <h2><a href="{{ route('website.hotel') }}">Kumarakom</a></h2>
                            <p>Plan Your Tour to Kumarakom With Us.</p>
                        </div>
                    </div>
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{ asset('website/images/deal2.jpg') }}" alt="Image">
                        <div class="overlay">
                            <h2><a href="{{ route('website.hotel') }}">Alappuzha
</a></h2>
                            <p>Plan Your Tour to Alappuzha With Us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <div class="top-destination-item destination-margin">
                        <img class="img-responsive" src="{{ asset('website/images/deal5.jpg') }}" alt="Image">
                        <div class="overlay overlay-full">
                            <h2><a href="{{ route('website.hotel') }}">Wayanad</a></h2>
                            <p>Plan Your Tour to Wayanad With Us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{ asset('website/images/deal3.jpg') }}" alt="Image">
                        <div class="overlay">
                            <h2><a href="{{ route('website.hotel') }}">Munnar</a></h2>
                            <p>Plan Your Tour to Munnar With Us.</p>
                        </div>
                    </div>
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{ asset('website/images/deal4.jpg') }}" alt="Image">
                        <div class="overlay">
                            <h2><a href="{{ route('website.hotel') }}">Thekkady</a></h2>
                            <p>Plan Your Tour to Thekkady With Us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Destination Ends -->

    <!-- Trip Ad -->
    <section class="trip-ad">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">

                    <div class="trip-ad-content">
                        <div class="ad-title">
                            <h2>Explore The <span>Travelure Tours</span></h2>
                        </div>
<p class="text-whit">
                        @foreach ($abouts as $about)
                       {!! $about->text !!}
                    @endforeach
                </p>
                        <div class="trip-ad-btn">
                            <a href="#" class="btn-blue btn-red">More About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="ad-price">
                        <div class="ad-price-inner">
                            <span>Starting at <span class="rate">Low Prices</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trip Ad Ends -->

    <!-- Deals On Sale -->

    <!-- Deals On Sale Ends -->





    <!-- Blog -->

    <!-- Blog Ends -->

    <!-- Trusted Partners -->
    <section class="trusted-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-4">
                    <div class="partners-title">
                        <h3>Our Travel <span>Partners</span></h3>
                    </div>
                </div>
                <div class="col-md-9 col-xs-8">
                    <ul class="partners-logo partners-slider">
                        <li><a href="#"><img src="{{ asset('website/images/partner1.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner2.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner3.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner4.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner5.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images//partner6.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner1.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner2.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner3.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner4.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner5.png') }}" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('website/images/partner6.png') }}" alt="Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Trusted Partners Ends -->
    @endsection
    {{-- {{ route('international.packagedetail', $homes->id) }} --}}

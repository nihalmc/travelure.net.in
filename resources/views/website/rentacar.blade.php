@extends('layouts.website')
@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>RENT A CAR</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Home">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Services</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Rent A Car</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="booking">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="booking-form booking-outer">

                        <form method="POST" action="{{ route('rentacar.submit') }}">
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

                                    <label>City of Rental:</label>

                                    <select name="from" id="from">

                                                                 <option value="Afganistan">Afganistan</option>
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
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
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
                                                                <option value="Wallis &amp; futuna">Wallis &amp; Futuna</option>
                                                                <option value="Western samoa">Western Samoa</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Yugoslavia">Yugoslavia</option>
                                                                <option value="Zaire">Zaire</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">

                                    <label>Type of Vehicle:</label>




                <select name="travel" id="travel" >
                    <option value="">Select a Vehicle</option>

<option value="Mercedes  Benz">Mercedes  Benz</option>
<option value="BMW">BMW</option>
<option value="Honda">Honda </option>
<option value="Toyota Camry">Toyota Camry</option>
 <option value="Toyota Alphard">Toyota Alphard</option>
 <option value="Toyota Estima">Toyota Estima</option>
<option value="Nissan X-trail">Nissan X-trail</option>
 <option value="Mitsubishi Triton">Mitsubishi Triton</option>
 <option value="Mitsubishi Storm">Mitsubishi Storm</option>
 <option value="Kia Pregio van">Kia Pregio van</option>
 <option value="Kia Carnival - Naza Ria MPV">Kia Carnival - Naza Ria MPV</option>
 <option value="Nissan Serena MPV">Nissan Serena MPV</option>
 <option value="Proton Perdana">Proton Perdana</option>
 <option value="Proton Waja">Proton Waja</option>
<option value="Proton Persona">Proton Persona</option>
 <option value="Proton Wira">Proton Wira</option>
 <option value="Perodua Kelisa">Perodua Kelisa</option>
  <option value="Others">Others</option>



               <!-- <option value="Mercedes Benz">Mercedes Benz</option>
                <option value="Honda City">Honda City</option>
                <option value="Sonata">Sonata</option>
                <option value="Mahindra Scorpio ">Mahindra Scorpio </option>
                <option value="Ford Ikon">Ford Ikon</option>
                <option value="Chevrolet Tavera">Chevrolet Tavera</option>

                <option value="Toyota Innova">Toyota Innova</option>
                <option value="Maruti Esteem">Maruti Esteem</option>
                <option value="Tata Indica">Tata Indica</option>
                <option value="Corolla">Corolla</option>
                <option value="Buses/AC Coaches">Buses/AC Coaches</option>
                <option value="Tempo Traveller ">Tempo Traveller </option>
-->



                    </select>

                                </div>

                                <div class="form-group col-xs-6">
                                    <label>Pick up Date:</label>
                                    <input type="date" class="form-control" id="arrival-date" name="ddate">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Return Date:</label>
                                    <input type="date" class="form-control" id="departure-date" name="rdate">
                                </div>
                                <div class="form-group col-xs-6">

                                        <label>
                                            <input type="checkbox" name="options[]" value="A/C">
                                            <span>A/C</span>
                                        </label>

                                </div>

                                 <div class="form-group col-xs-6">

                                        <label>
                                            <input type="checkbox" name="options[]" value="Non A/C">
                                            <span>Non A/C</span>
                                        </label>

                                </div>

                                <div class="form-group col-xs-6">

                                <div class="col-xs-12">

                                    <label>Pick up Time:</label>

                                    </div>

                                    <div class="col-xs-6">

                                    <select  id="accOnwardspickhrs_int_in_single" name="accOnwardspickhrs">
											<option value="hh">hh</option>
											<option value="00">00</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
										</select>

                                    </div>


                                    <div class="col-xs-6">

                                    <select  id="accOnwardspickupmin_int_in_single" name="accOnwardspickupmin">
											<option value="00">00</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
											<option value="32">32</option>
											<option value="33">33</option>
											<option value="34">34</option>
											<option value="35">35</option>
											<option value="36">36</option>
											<option value="37">37</option>
											<option value="38">38</option>
											<option value="39">39</option>
											<option value="40">40</option>
											<option value="41">41</option>
											<option value="42">42</option>
											<option value="43">43</option>
											<option value="44">44</option>
											<option value="45">45</option>
											<option value="46">46</option>
											<option value="47">47</option>
											<option value="48">48</option>
											<option value="49">49</option>
											<option value="50">50</option>
											<option value="51">51</option>
											<option value="52">52</option>
											<option value="53">53</option>
											<option value="54">54</option>
											<option value="55">55</option>
											<option value="56">56</option>
											<option value="57">57</option>
											<option value="58">58</option>
											<option value="59">59</option>
										</select>

                                    </div>




                                </div>


                                <div class="form-group col-xs-6 col-left-padding">

                                <div class="col-xs-12">

                                    <label>Return Time:</label>

                                    </div>

                                    <div class="col-xs-6">

                                    <select  id="accOnwardspickhrs_int_in_single" name="accOnwardspickhr">
											<option value="hh">hh</option>
											<option value="00">00</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
										</select>

                                    </div>


                                    <div class="col-xs-6">

                                    <select  id="accOnwardspickupmin_int_in_single" name="accOnwardspickupmi">
											<option value="00">00</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
											<option value="32">32</option>
											<option value="33">33</option>
											<option value="34">34</option>
											<option value="35">35</option>
											<option value="36">36</option>
											<option value="37">37</option>
											<option value="38">38</option>
											<option value="39">39</option>
											<option value="40">40</option>
											<option value="41">41</option>
											<option value="42">42</option>
											<option value="43">43</option>
											<option value="44">44</option>
											<option value="45">45</option>
											<option value="46">46</option>
											<option value="47">47</option>
											<option value="48">48</option>
											<option value="49">49</option>
											<option value="50">50</option>
											<option value="51">51</option>
											<option value="52">52</option>
											<option value="53">53</option>
											<option value="54">54</option>
											<option value="55">55</option>
											<option value="56">56</option>
											<option value="57">57</option>
											<option value="58">58</option>
											<option value="59">59</option>
										</select>

                                    </div>




                                </div>



                                <div class="form-group textarea col-xs-12">
                                    <label>Address:</label>
                                    <textarea placeholder="Enter a message" style="height:100px;"></textarea>
                                </div>

                                <div class="form-group col-xs-12">
                                    <label>No of Persons:</label>
                                    </div>

                                    <div class="form-group col-xs-12">

                                    <div class="form-group col-xs-6">
                                    <input type="number" class="form-control" id="phnumber1" placeholder="Adults">
                                    </div>
                                    <div class="form-group col-xs-6">
                                    <input type="number" class="form-control" id="phnumber1" placeholder="Child">
                                    </div>

                                </div>



                                <div class="textarea col-xs-12">
                                    <label>Message:</label>
                                    <textarea placeholder="Enter a message" name="messages"></textarea>
                                </div>
                                <!--<div class="col-xs-12">
                                    <div class="checkbox-outer">
                                        <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms and conditions.</a>
                                    </div>
                                </div>-->
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <a  class="btn-blue btn-red"><input type="submit" value="Book Now" /></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="sidebar-sticky" class="col-md-4">
                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item">
                            <div class="detail-title">
                                <h3>Popular Airlines</h3>
                            </div>
                            <div class="sidebar-content sidebar-slider">
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/airlineslider1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="#">Air India</a></h4>


                                    </div>
                                </div>
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/jetslider1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="#">Jet Airways</a></h4>

                                    </div>
                                </div>
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="{{ asset('website/images/airlineslider3.jpg') }}" alt="Image">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="#">IndiGo</a></h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>Any questions regarding Airline Ticket booking and any difficulty in booking</p>
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

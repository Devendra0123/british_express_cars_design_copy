<section class="booking-wrapper section-break booking-details" id="forminfosection" style="">
    <div class="container">
        <div class="quote-sys-wrapper">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="booking-info-wrapper">
                        <h2 class="sec-title-h2">Booking Details</h2>
                        <form method="post" class="" id="bookform" action="/booking/confirm">



                            <input type="hidden" name="rpickup" id="rpickup" value="">
                            <input type="hidden" name="rdropoff" id="rdropoff" value="">
                            <!-- <input type="hidden" name="selectedtype" id="selectedtype" value="single" />
                  <input type="hidden" name="car_type" id="car_type"  /> -->
                            <input type="hidden" name="pickup" id="pickup" value="Big Ben, London, UK">
                            <input type="hidden" name="pricetype" id="pricetype" value="">
                            <input type="hidden" name="urlview" id="urlview"
                                value="-list-big-ben-london-uk-stonehenge-salisbury-uk-list">
                            <input type="hidden" name="dropoff" id="dropoff" value="Stonehenge, Salisbury, UK">
                            <input type="hidden" name="car_type" id="car_type" value="1">
                            <div class="personal-details info-wrapper">
                                <h3 class="sec-title">Passengers Details </h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-12 control-label">Passenger Full Name:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="name" class="form-control" value=""
                                                        required="" aria-required="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-12 control-label">Email Address
                                                </label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="email" value="" class="form-control"
                                                        placeholder="" required="" aria-required="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-12 control-label">Contact Number
                                                    <span></span></label>
                                                <div class="col-sm-12">
                                                    <input type="tel" class="form-control" id="tel_phone"
                                                        name="full_number" required="" style="width: 100%;"
                                                        autocomplete="off" data-intl-tel-input-id="0"
                                                        placeholder="07400 123456">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="checkings"><input type="hidden" name="card_payment" id="card_payment"
                                        value="0">
                                    <input type="hidden" name="car_c" id="car_c" value="Saloon">
                                    <input type="hidden" name="car_image_c" id="car_image_c"
                                        value="https://www.britishexpresscars.co.uk/fleet/saloon.png">
                                    <input type="hidden" name="way_c" id="way_c" value="undefined">
                                    <input type="hidden" name="oneway" id="oneway" value="193">
                                    <input type="hidden" name="return" id="return" value="0">


                                    <input type="hidden" name="tot_c" id="tot_c" value="193">

                                    <input type="hidden" name="place_from_c" id="place_from_c" value="6">

                                    <input type="hidden" name="place_to_c" id="place_to_c" value="4">

                                    <input type="hidden" name="return_place_from_c" id="return_place_from_c" value="">

                                    <input type="hidden" name="return_place_to_c" id="return_place_to_c" value="">

                                    <input type="hidden" name="baby" id="baby" value="0">
                                    <input type="hidden" name="booster_" id="booster_" value="0">


                                    <input type="hidden" name="payment_type_c" id="payment_type_c" value="stripe">
                                    <input type="hidden" name="book_fee" id="book_fee" value="1">

                                    <div id="checkings">

                                        <hr>

                                        <h3 class="sec-title">Passengers</h3>

                                        <div class="row">

                                            <!--  -->

                                            <div class="col-md-6">

                                                <div class="form-group">

                                                    <label>No Of Passenger </label>

                                                    <select class="form-control" id="passengers" name="passengers">


                                                        <option value="1">1 </option>


                                                        <option value="2">2 </option>


                                                        <option value="3">3 </option>


                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-md-6 col-sm-6">

                                                <div class="form-group">

                                                    <label>Car Seat Required? </label>

                                                    <select class="form-control" id="booster" name="booster"
                                                        onchange="checkings()">


                                                        <option value="0" selected="">0</option>


                                                    </select>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- <hr/> -->


                                        <hr>

                                        <h3 class="sec-title">Luggage</h3>

                                        <div class="row">

                                            <div class="col-md-6 col-sm-6">

                                                <div class="form-group">

                                                    <label>Luggage</label>

                                                    <select class="form-control" id="baggages" name="baggages">


                                                        <option value="0">0 </option>


                                                        <option value="1">1 </option>


                                                        <option value="2">2 </option>


                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-md-6 col-sm-6">

                                                <div class="form-group">

                                                    <label>Hand Luggage</label>

                                                    <select class="form-control" id="hand_luggages"
                                                        name="hand_luggages">


                                                        <option value="0">0 </option>


                                                        <option value="1">1 </option>


                                                        <option value="2">2 </option>


                                                    </select>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <hr>
                                <h3 class="sec-title">Journey information</h3>
                                <!-- <div class="labeled">Pickup from: Dover Cruiseport </div> -->
                                <div class="info-wrapper">
                                    <div class="row">
                                        <input type="hidden" class="form-control" id="return_from" placeholder=""
                                            name="from_area" value="Big Ben, London, UK" required="">

                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="landingdate">Pickup Date *</label>
                                                <input type="" class="form-control datepicker hasDatepicker" id="date"
                                                    placeholder="Date" name="pickup_date" required="" min="" value=""
                                                    autocomplete="off" style="padding-left: 35px !important;"
                                                    onchange="timecheck()">
                                                <!-- <input type="text" class="form-control" id="datesss" placeholder="Date" name="pickup_datesss" required  min="2024-02-06" autocomplete="off" style="padding-left: 35px !important;" value="" disabled="disabled"> -->
                                                <span class="form-addons" style="top:35px;"> <i
                                                        class="fa fa-calendar"></i> </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="landingtime">Pickup Time *</label>
                                                <input type="" class="form-control timepicker ui-timepicker-input"
                                                    id="time" placeholder="Time" name="pick_minute" autocomplete="off"
                                                    required="" style="padding-left: 35px !important;" value=""
                                                    onchange="timecheck()">
                                                <span class="form-addons" style="top:35px;"> <i
                                                        class="fa fa-clock-o"></i> </span>
                                                <!-- <input type="text" class="form-control" id="timesss" placeholder="Time" name="pick_minutesss" autocomplete="off" required style="padding-left: 35px !important;" value="" disabled="disabled"> <span class="form-addons" style="top:35px;"> <i class="fa fa-clock-o"></i> </span></div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group" id="frominfoid1">
                                                <label for="frominfo1">Pick Up Address* </label>
                                                <input type="text" class="form-control" name="flight_from" required=""
                                                    value="" aria-required="true" id="flight_from"
                                                    placeholder="Full address with postcode">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group" id="frominfoid2" style="display: none;">
                                                <label for="frominfo2">Pickup Postcode *</label>
                                                <input type="text" class="form-control" id="from_address" placeholder=""
                                                    name="from_address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Drop Off Location</label>
                                                <input type="hidden" class="form-control" id="return_to" placeholder=""
                                                    name="to_area" value="Stonehenge, Salisbury, UK" required="">
                                                <input type="text" class="form-control" id="return_to_dummy"
                                                    placeholder="" name="return_to_dummy" disabled="disabled"
                                                    value="Stonehenge, Salisbury, UK">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" id="toinfo1_label">
                                                <label for="toinfo1">Dropoff Address *</label>
                                                <input type="text" class="form-control" name="to_address"
                                                    id="to_address" placeholder="Full address with postcode"
                                                    required="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="info-wrapper">
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <h3 class="sec-title">Special Requirements</h3>
                                                <div class="form-group">
                                                    <label>Is there anything else we need to know? </label>
                                                    <textarea class="form-control" name="message"
                                                        placeholder="Is there anything else we need to know?"
                                                        rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <h3 class="sec-title">Payment method</h3>
                                                <div class="form-group">

                                                    <div class="form-group">
                                                        <label>How would you like to pay? </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="col-md-4 col-xs-12 btn" for="danger-outlined"
                                                            style="background-color:#fff !important; text-transform:none !important; font-weight:bold; text-align: left;  ">
                                                            <input type="checkbox" value="stripe"
                                                                class="form-check-input" checked="" name="payment_type"
                                                                id="danger-outlined" autocomplete="off"
                                                                onclick="checkings()" required="">
                                                            Pay by card <span
                                                                style="border-left:1px solid #000;  color:#009;  font-weight:bold; padding-left:5px;"
                                                                id="card_total">£193</span></label>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6 col-sm-6">
                            <h2 class="sec-title">Discount Code</h2>
                            <div class="form-group">
                            <label>You have a discount code,enter Below
                            </label>
                            <input type="text" name="discount_coupon_no" class="form-control">
                            </div>
                          </div> -->
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="sec-title-h2">Confirm Booking </h2>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="accept_tc"
                                                    name="accept_terms_conditions" onchange="valueChanged()" required=""
                                                    aria-required="true">
                                                <label class="form-check-label" for="accept_tc"> Please check the box to
                                                    accept the <a href="../terms.php" target="_blank">terms and
                                                        conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" onclick="proceedToConfirm()" class="btn btn-custom"
                                                name="confirm_button"><strong>PROCEED TO
                                                    CONFIRM</strong>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="trip-details">
                        <h3 class="title">Booking Summary</h3>
                        <h5> Outbound Journey
                            <span class="pre-price" id="oneway_price">£193</span>
                            <!-- $onewayprice = $ccprice+$addprice+$p_extraprice+$d_extraprice; -->
                        </h5>
                        <div class="route-wrapper">
                            <h5>
                                <img src="../assets/images/pin.svg">
                                Pick up
                            </h5>
                            <p>
                                <!-- On  at  -->
                                <!-- <br> -->
                                Big Ben, London, UK
                            </p>
                        </div>
                        <div class="route-wrapper">
                            <h5><img src="../assets/images/pin.svg"> Drop Off </h5>
                            <p>Stonehenge, Salisbury, UK</p>
                        </div>


                        <div class="route-wrapper">
                            <h5><img src="../assets/images/map.svg">Est. Distance &amp;
                                Duration</h5>
                            <p>88 mile(s), 1 hour 51 mins</p>

                        </div>


                        <hr>
                        <div class="route-wrapper act-fare">
                            <h5 class="clearfix"><img src="../assets/images/taxi.svg">
                                Vehicle <span id="car_info">Saloon</span><a data-toggle="modal" data-target="#vehicle"
                                    onclick="backcar()" style="cursor:pointer">Edit</a>
                            </h5>
                            <figure class="selected-fleet">
                                <div id="carimage"><img src="../assets/images/saloon.png" class="img-responsive"
                                        alt="Saloon Car"></div>
                            </figure>
                            <div class="total">
                                <h3 class="clearfix" style="border-bottom:none: !important;"> Total<span
                                        id="total_price">£193</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
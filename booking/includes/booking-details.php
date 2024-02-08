<section class="booking-wrapper section-break booking-details" id="forminfosection" style="display: none;">
    <div class="container">
        <div class="quote-sys-wrapper">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="booking-info-wrapper">
                        <h2 class="sec-title-h2">Booking Details</h2>
                        <form method="post" class="" id="bookform" action="/booking/confirm">
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
                                <hr>
                                <div class="form-check r-input col-sm-6">
                                    <input type="checkbox" class="form-check-input" id="accept_tc1" name="check_return"
                                        value="return" onchange="valueC()" required="" aria-required="true"
                                        data-gtm-form-interact-field-id="0">
                                    <label class="form-check-label" for="accept_tc1"> Lead Passenger?</label>
                                </div>

                                <!-- Lead Passenger -->
                                <div style="margin-top: 30px">
                                    <h3 class="sec-title">Lead Passenger</h3>
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
                                </div>

                                <div id="checkings"><input type="hidden" name="card_payment" id="card_payment"
                                        value="0">

                                    <div id="checkings">

                                        <hr>
                                        <!-- Passenger Info -->
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
                                                        <option value="1">1 </option>
                                                        <option value="2">2 </option>
                                                        <option value="3">3 </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">


                                            <div class="col-md-4 col-sm-12">

                                                <div class="form-group">

                                                    <label for="exampleInputEmail1">1st Child Seat (Free) </label>

                                                    <select class="form-control" id="firstbaby" name="firstbaby"
                                                        required=""
                                                        oninvalid="this.setCustomValidity('Please Select 1st Child Seat')"
                                                        oninput="this.setCustomValidity('')">

                                                        <option value="">-- Select --</option>

                                                        <option value="Rear Facing" selected="">Rear Facing
                                                        </option>

                                                        <option value="Forward Facing">Forward
                                                            Facing</option>

                                                        <option value="Booster">Booster</option>

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="col-md-4 col-sm-12">

                                                <div class="form-group">

                                                    <label for="exampleInputEmail1">2nd Child Seat (Free) </label>

                                                    <select class="form-control" id="secondbaby" name="secondbaby"
                                                        required=""
                                                        oninvalid="this.setCustomValidity('Please Select 2nd Child Seat')"
                                                        oninput="this.setCustomValidity('')">

                                                        <option value="">-- Select --</option>

                                                        <option value="Rear Facing">Rear Facing
                                                        </option>

                                                        <option value="Forward Facing">Forward
                                                            Facing</option>

                                                        <option value="Booster" selected="">Booster</option>

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="col-md-4 col-sm-12">

                                                <div class="form-group">

                                                    <label for="exampleInputEmail1">3rd Child Seat (Free) </label>

                                                    <select class="form-control" id="thirdbaby" name="thirdbaby"
                                                        required=""
                                                        oninvalid="this.setCustomValidity('Please Select 3rd Child Seat')"
                                                        oninput="this.setCustomValidity('')">

                                                        <option value="">-- Select --</option>

                                                        <option value="Rear Facing">Rear Facing
                                                        </option>

                                                        <option value="Forward Facing">Forward
                                                            Facing</option>

                                                        <option value="Booster">Booster</option>

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

                                <div class="info-wrapper">
                                    <!-- One Way -->
                                    <div class="row">
                                        <input type="hidden" class="form-control" id="return_from" placeholder=""
                                            name="from_area" value="Big Ben, London, UK" required="">
                                        <!-- Flight landing date -->
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="landingdate">Flight Landing Date *</label>
                                                <input type="" class="form-control datepicker hasDatepicker" id="date"
                                                    placeholder="Date" name="pickup_date" required="" min="" value=""
                                                    autocomplete="off" style="padding-left: 35px !important;"
                                                    onchange="timecheck()">
                                                <span class="form-addons" style="top:35px;"> <i
                                                        class="fa fa-calendar"></i> </span>
                                            </div>
                                        </div>
                                        <!-- Flight landing time -->
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="landingtime">Flight Landing Time *</label>
                                                <input type="" class="form-control timepicker ui-timepicker-input"
                                                    id="time" placeholder="Time" name="pick_minute" autocomplete="off"
                                                    required="" style="padding-left: 35px !important;" value=""
                                                    onchange="timecheck()">
                                                <span class="form-addons" style="top:35px;"> <i
                                                        class="fa fa-clock-o"></i> </span>
                                            </div>
                                        </div>
                                        <!-- Flight Number -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group" id="frominfoid1">
                                                <label for="frominfo1">Flight Number* </label>
                                                <input type="text" class="form-control" name="flight_from" required=""
                                                    value="" aria-required="true" id="flight_from"
                                                    placeholder="Flight Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="after_landing_info">Pick Up Time After Landing? *</label>
                                                <div class="tooltip " style="text-align:center;"> <i
                                                        class="fa fa-info-circle fs-19" aria-hidden="true"></i>
                                                    <span class="tooltiptext p-3 border border-success">
                                                        <p class=""><span style="color:red;">Please Note:</span> UK and
                                                            EU Citizens the average
                                                            clearing time is around 45 to 60. For first &amp; business
                                                            class 30-40 minutes. Other
                                                            nationalities take around 60-70. For domestic flight 15
                                                            minutes.</p>
                                                        <p>We provide 30 minutes free waiting from requested pickup
                                                            time, any additional waiting
                                                            will be charged at £24.00 an hour plus car park. please
                                                            allow enough time for the
                                                            pickup.</p>
                                                    </span>
                                                </div>
                                                <select class="form-control" name="after_landing_time" required=""
                                                    aria-required="true">
                                                    <option value="">-- Select --
                                                    </option>
                                                    <option> 15 min after
                                                    </option>
                                                    <option> 30 min after
                                                    </option>
                                                    <option> 45 min after
                                                    </option>
                                                    <option> 60 min after
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Pick up address line -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group" id="frominfoid1">
                                                <label for="frominfo1">Pick Up Address line* </label>
                                                <input type="text" class="form-control" name="flight_from" required=""
                                                    value="" aria-required="true" id="flight_from"
                                                    placeholder="Address line">
                                            </div>
                                        </div>
                                        <!-- Drop off address line -->
                                        <div class="col-md-6">
                                            <div class="form-group" id="toinfo1_label">
                                                <label for="toinfo1">Drop off Address Line*</label>
                                                <input type="text" class="form-control" name="to_address"
                                                    id="to_address" placeholder="Full address with postcode"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <!-- Return -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="sec-title">Return Journey Information </h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <input type="hidden" class="form-control" id="return_from" placeholder=""
                                            name="from_area" value="Big Ben, London, UK" required="">
                                        <!-- Flight landing date -->
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="landingdate">Return Flight Landing Date *</label>
                                                <input type="" class="form-control datepicker hasDatepicker" id="date"
                                                    placeholder="Date" name="pickup_date" required="" min="" value=""
                                                    autocomplete="off" style="padding-left: 35px !important;"
                                                    onchange="timecheck()">
                                                <span class="form-addons" style="top:35px;"> <i
                                                        class="fa fa-calendar"></i> </span>
                                            </div>
                                        </div>
                                        <!-- Flight landing time -->
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="landingtime">Return Flight Landing Time *</label>
                                                <input type="" class="form-control timepicker ui-timepicker-input"
                                                    id="time" placeholder="Time" name="pick_minute" autocomplete="off"
                                                    required="" style="padding-left: 35px !important;" value=""
                                                    onchange="timecheck()">
                                                <span class="form-addons" style="top:35px;"> <i
                                                        class="fa fa-clock-o"></i> </span>
                                            </div>
                                        </div>
                                        <!-- Flight Number -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group" id="frominfoid1">
                                                <label for="frominfo1">Return Flight Number* </label>
                                                <input type="text" class="form-control" name="flight_from" required=""
                                                    value="" aria-required="true" id="flight_from"
                                                    placeholder="Flight Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="after_landing_info">Return Pick Up Time After Landing?
                                                    *</label>
                                                <div class="tooltip " style="text-align:center;"> <i
                                                        class="fa fa-info-circle fs-19" aria-hidden="true"></i>
                                                    <span class="tooltiptext p-3 border border-success">
                                                        <p class=""><span style="color:red;">Please Note:</span> UK and
                                                            EU Citizens the average
                                                            clearing time is around 45 to 60. For first &amp; business
                                                            class 30-40 minutes. Other
                                                            nationalities take around 60-70. For domestic flight 15
                                                            minutes.</p>
                                                        <p>We provide 30 minutes free waiting from requested pickup
                                                            time, any additional waiting
                                                            will be charged at £24.00 an hour plus car park. please
                                                            allow enough time for the
                                                            pickup.</p>
                                                    </span>
                                                </div>
                                                <select class="form-control" name="after_landing_time" required=""
                                                    aria-required="true">
                                                    <option value="">-- Select --
                                                    </option>
                                                    <option> 15 min after
                                                    </option>
                                                    <option> 30 min after
                                                    </option>
                                                    <option> 45 min after
                                                    </option>
                                                    <option> 60 min after
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Pick up address line -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group" id="frominfoid1">
                                                <label for="frominfo1">Return Pick Up Address line* </label>
                                                <input type="text" class="form-control" name="flight_from" required=""
                                                    value="" aria-required="true" id="flight_from"
                                                    placeholder="Address line">
                                            </div>
                                        </div>
                                        <!-- Drop off address line -->
                                        <div class="col-md-6">
                                            <div class="form-group" id="toinfo1_label">
                                                <label for="toinfo1">Return Drop off Address Line*</label>
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
                                                        <div class="col-md-4 col-xs-12 btn" for="danger-outlined"
                                                            style="background-color:#fff !important; text-transform:none !important; font-weight:bold; text-align: left;">
                                                            <input type="radio" value="stripe" class="form-check-input"
                                                                checked="" name="payment_type" id="danger-outlined"
                                                                autocomplete="off" onclick="checkings()" required=""
                                                                style="height: 16px;width: 16px; top: 0px;" />
                                                            <span style="margin-left: 20px;"> Pay by card</span>
                                                            <span
                                                                style="border-left:1px solid #000;  color:#009;  font-weight:bold; padding-left:5px;"
                                                                id="card_total">£210</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

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




<style type="text/css">
    input[type=radio] {
        appearance: none;
        background-color: #fff;
        width: 15px;
        height: 15px;
        border: 2px solid #ccc;
        border-radius: 2px;
        display: inline-grid;
        place-content: center;
    }

    input[type=radio]::before {
        content: "";
        width: 10px;
        height: 10px;
        transform: scale(0);
        transform-origin: bottom left;
        background-color: #fff;
        clip-path: polygon(13% 50%, 34% 66%, 81% 2%, 100% 18%, 39% 100%, 0 71%);
    }

    input[type=radio]:checked::before {
        transform: scale(1);
    }

    input[type=radio]:checked {
        background-color: #0075FF;
        border: 2px solid #0075FF;
    }

    /* ---------- */

    .intl-tel-input {
        width: 100%;
    }

    .tooltip {
        position: relative;
        display: inline-block;
        opacity: 1;
        font-size: 17px;

    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 320px;
        background-color: #fff;
        color: #000;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
        top: 100%;
        left: -101%;
        margin-left: -168px
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

    .meeting-point-heading {
        font-weight: 400;
        font-size: 24px;
        color: #4a5597;
    }

    .form-check-input {
        /* position: absolute; */
        margin-top: 13px;
        margin-left: -5px;
    }

    .grid {
        /* margin: 0 0 0px 20px; */
        margin: 0 0 0px 0px;
    }

    .form-background .form-check {
        margin-left:
            20px !important;
    }
</style>

<style>
    .meet-point {
        margin-top: 41px;
        font-size: 24px !important;
        font-weight: 600;
    }

    .form-check {
        left: 1px !important;
        margin-right: 10px;

    }

    .btn {
        margin-left: 0px !important;
    }

    .met-hr {
        width: 95%;
        margin: initial;
        padding-top: 14px;
    }

    #forminfosection {
        display: block;
    }

    #reservertitle {
        display: block;
    }

    #formentrysection {
        margin-bottom: 30px;
    }

    #paymentinfo {
        display: block;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef !important;
        opacity: 1;
    }

    .alert {
        padding: 0px 15px 5px 15px;
        border: 1px solid #dddddd;
    }

    .alert h5 {
        color: red;
        font-weight: 700;
    }
</style>
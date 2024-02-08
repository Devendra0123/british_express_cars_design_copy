<!DOCTYPE html>
<!-- saved from url=(0037)https://www.britishexpresscars.co.uk/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Fleet List</title>

    <meta name="title" content="London City Airport Transfers – British Express Cars ">

    <meta name="description"
        content="Licensed taxi transfers to and from London City Airport, our service available 24 hours a day, 7 days a week. Click here now to book your taxi">

    <meta name="keywords" content="airport taxi london, london city airport taxi, london city airport transfer">

    <!--<base href="https://www.britishexpresscars.co.uk/">-->
    <base href="." />

    <!-- <link rel="canonical" href="https://www.britishexpresscars.co.uk/" /> -->

    <link rel="stylesheet" href="../css/bootstrap.min.css" async="" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/css/intlTelInput.css">

    <link rel="stylesheet" href="../lib/font-awesome-4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="../css/slick-theme.css" async="" media="all" />

    <link rel="stylesheet" href="../css/slick.css" async="" media="all" />


    <link rel="stylesheet" href="../css/jquery-ui.css" async="" media="all" />

    <link rel="stylesheet" href="../css/jquery.timepicker.css" async="" media="all" />


    <link rel="stylesheet" href="../css/dashboard.css" async="" media="all" />
    <link rel="stylesheet" href="../css/fonts.css" async="" media="all" />

    <link rel="stylesheet" href="../css/style.css" async="" media="all" />

    <link rel="stylesheet" href="../css/responsive.css" async="" media="all" />

    <script src="../js/jquery.js"></script>
    <script src="../js/api.js" async="" defer=""></script>
    <script src="../js/intlTelInput.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/js/intlTelInput.min.js"></script>
</head>
<?php include "./includes/header2.php" ?>

<section class="booking-wrapper section-break" style="min-height: 80vh;">
    <div class="container">
        <div class="quote-sys-wrapper">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-background picker-container ">
                        <!-- Pickup date and time -->
                        <div>
                            <h3 style="text-transform: capitalize; color:#000; ">
                                Select pick up date and time
                            </h3>

                            <div class="date-time-wrapper">
                                <!-- Pickup date -->
                                <div class="form-field">
                                    <label for="landingdate">Pick Up Date *</label>
                                    <input type="" class="form-control datepicker hasDatepicker" id="date"
                                        placeholder="Date" name="pickup_date" required="" min="" value=""
                                        autocomplete="off" style="padding-left: 35px !important;"
                                        onchange="timecheck()">

                                    <span class="form-addons" style="top:35px;"> <i class="fa fa-calendar"></i> </span>
                                </div>
                                <!-- Pickup time -->
                                <div class="form-field">
                                    <label for="landingtime">Pick Up Time *</label>
                                    <input type="" class="form-control timepicker ui-timepicker-input" id="time"
                                        placeholder="Time" name="pick_minute" autocomplete="off" required=""
                                        style="padding-left: 35px !important;" value="" onchange="timecheck()">
                                    <span class="form-addons" style="top:35px;"> <i class="fa fa-clock-o"></i> </span>
                                </div>
                            </div>
                        </div>

                        <!-- Drop-off date and time -->
                        <div>
                            <h3 style="text-transform: capitalize; color: #e50914;">
                                Select drop off date and time
                            </h3>

                            <div class="date-time-wrapper">
                                <!-- drop off date -->
                                <div class="form-field">
                                    <label for="landingdate">Drop Off Date *</label>
                                    <input type="" class="form-control datepicker hasDatepicker" id="date"
                                        placeholder="Date" name="pickup_date" required="" min="" value=""
                                        autocomplete="off" style="padding-left: 35px !important;"
                                        onchange="timecheck()">
                                    <!-- <input type="text" class="form-control" id="datesss" placeholder="Date" name="pickup_datesss" required  min="2024-02-06" autocomplete="off" style="padding-left: 35px !important;" value="" disabled="disabled"> -->
                                    <span class="form-addons" style="top:35px;"> <i class="fa fa-calendar"></i> </span>
                                </div>
                                <!-- drop off time -->
                                <div class="form-field">
                                    <label for="landingtime">Drop Off Time *</label>
                                    <input type="" class="form-control timepicker ui-timepicker-input" id="time"
                                        placeholder="Time" name="pick_minute" autocomplete="off" required=""
                                        style="padding-left: 35px !important;" value="" onchange="timecheck()">
                                    <span class="form-addons" style="top:35px;"> <i class="fa fa-clock-o"></i> </span>
                                    <!-- <input type="text" class="form-control" id="timesss" placeholder="Time" name="pick_minutesss" autocomplete="off" required style="padding-left: 35px !important;" value="" disabled="disabled"> <span class="form-addons" style="top:35px;"> <i class="fa fa-clock-o"></i> </span></div> -->
                                </div>
                            </div>
                        </div>


                        <div class="frm mt-3 mb-3">
                            <a href="available-fleet.php">
                                <button name="" class="btn btn-danger">Next</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
<?php include "./includes/footer2.php" ?>

<style>
    .date-time-wrapper {
        display: flex;
        align-items: center;
        gap: 50px;
    }

    .picker-container {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .date-time-container {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
</style>

<script>
    $('#datetimepicker5').datetimepicker({
        use24hours: true,
        format: 'HH:mm'
    });
</script>
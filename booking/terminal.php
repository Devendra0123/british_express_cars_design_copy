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

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/js/intlTelInput.min.js"></script>
</head>
<?php include "./includes/header2.php" ?>


<section class="booking-wrapper section-break">
    <div class="container">
        <div class="quote-sys-wrapper">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-background ">

                        <div class="grid">
                            <div class="grid__item one-whole input">
                                <div class="form-check">
                                    <form action="pick-date-time.php" method="post">
                                        <input type="hidden" class="form-check-input" name="from" id="from"
                                            value="Gatwick Airport, LGW (LGW), Horley, Gatwick, UK">
                                        <input type="hidden" class="form-check-input" name="to" id="from"
                                            value="Heathrow Airport (LHR), Hounslow, UK">
                                        <h2 class="meet-point">Select Your Pick-up Terminal <br>
                                        </h2>
                                        <hr class="met-hr">
                                        <p>We've matched one or more of your locations with these possible terminal:</p>
                                        <p class="meeting-point-heading mt-3 mb-3">Gatwick Airport</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="from"
                                                id="flexRadioDefault2"
                                                value="North Terminal, Departures Road, Horley, Gatwick, UK">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Gatwick (North Terminal)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="from"
                                                id="flexRadioDefault3" value="South Terminal, Perimeter Road East, Horley, Gatwick, UK
">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Gatwick (South Terminal)
                                            </label>
                                        </div>

                                        <h2 class="meet-point">Select Your Drop-off Terminal <br>
                                        </h2>
                                        <hr class="met-hr">
                                        <p>We've matched one or more of your locations with these possible terminal:</p>
                                        <p class="meeting-point-heading mt-3 mb-3">Heathrow Airport</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="to"
                                                id="flexRadioDefault2"
                                                value="Terminal 2, Inner Ring East, Hounslow, UK">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Heathrow (Terminal 2)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="to"
                                                id="flexRadioDefault3"
                                                value="Terminal 3, Nelson Road, Longford, Hounslow, UK">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Heathrow (Terminal 3)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="to"
                                                id="flexRadioDefault4" value="Terminal 4, Nelson Road, Hounslow, UK">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Heathrow (Terminal 4)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="to"
                                                id="flexRadioDefault5"
                                                value="Terminal 5, Wallis Road, Longford, Hounslow, UK">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Heathrow (Terminal 5)
                                            </label>
                                        </div>


                                        <input type="hidden" class="form-check-input" name="returnfrom" id="from"
                                            value="Heathrow Airport (LHR), Hounslow, UK">
                                        <input type="hidden" class="form-check-input" name="returnto" id="from"
                                            value="Gatwick Airport, LGW (LGW), Horley, Gatwick, UK">
                                        <h2 class="meet-point" style="color: #e50914;">Select Your Return Pick-up
                                            Terminal<br>
                                        </h2>
                                        <hr class="met-hr">
                                        <p>We've matched one or more of your locations with these possible terminal:</p>
                                        <p class="meeting-point-heading mt-3 mb-3">Heathrow Airport</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="returnfrom"
                                                id="flexRadioDefault2"
                                                value="Terminal 2, Inner Ring East, Hounslow, UK">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Heathrow (Terminal 2)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="returnfrom"
                                                id="flexRadioDefault3"
                                                value="Terminal 3, Nelson Road, Longford, Hounslow, UK">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Heathrow (Terminal 3)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="returnfrom"
                                                id="flexRadioDefault4" value="Terminal 4, Nelson Road, Hounslow, UK">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Heathrow (Terminal 4)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="returnfrom"
                                                id="flexRadioDefault5"
                                                value="Terminal 5, Wallis Road, Longford, Hounslow, UK">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Heathrow (Terminal 5)
                                            </label>
                                        </div>

                                        <h2 class="meet-point" style="color: #e50914;">Select Your Return Drop-off
                                            Terminal <br>
                                        </h2>
                                        <hr class="met-hr">
                                        <p>We've matched one or more of your locations with these possible terminal:</p>
                                        <p class="meeting-point-heading mt-3 mb-3">Gatwick Airport</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="returnto"
                                                id="flexRadioDefault2"
                                                value="North Terminal, Departures Road, Horley, Gatwick, UK">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Gatwick (North Terminal)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="returnto"
                                                id="flexRadioDefault3"
                                                value="South Terminal, Perimeter Road East, Horley, Gatwick, UK">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Gatwick (South Terminal)
                                            </label>
                                        </div>


                                        <div class="frm mt-3 mb-3">
                                            <a href="pick-date-time.php">
                                                <button name="" class="btn btn-danger">Next</button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
<?php include "./includes/footer2.php" ?>

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
        position: absolute;
        margin-top: 13px;
        margin-left: -1.25rem;
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
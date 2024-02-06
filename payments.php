<!DOCTYPE html>
<!-- saved from url=(0037)https://www.britishexpresscars.co.uk/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Privacy Policy - British Express Cars</title>

    <meta name="title" content="Privacy Policy - British Express Cars">

    <meta name="description"
        content="You can get the information about the privacy policy. We provide licensed airport transfers services in london.">

    <meta name="keywords"
        content="london airport transportation, london airport transfer, travel london airport, airport transfers london, london airport transfers, gatwick transportation, london transfers, london heathrow transfers, heathrow airport transfer, airport transport, airp">

    <!--<base href="https://www.britishexpresscars.co.uk/">-->
    <base href="." />

    <!-- <link rel="canonical" href="https://www.britishexpresscars.co.uk/" /> -->

    <link rel="stylesheet" href="./css/bootstrap.min.css" async="" media="all" />

    <link rel="stylesheet" href="./lib/font-awesome-4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="./css/slick-theme.css" async="" media="all" />

    <link rel="stylesheet" href="./css/slick.css" async="" media="all" />


    <link rel="stylesheet" href="./css/jquery-ui.css" async="" media="all" />

    <link rel="stylesheet" href="./css/jquery.timepicker.css" async="" media="all" />


    <link rel="stylesheet" href="./css/dashboard.css" async="" media="all" />
    <link rel="stylesheet" href="./css/fonts.css" async="" media="all" />

    <link rel="stylesheet" href="./css/style.css" async="" media="all" />

    <link rel="stylesheet" href="./css/responsive.css" async="" media="all" />

    <script src="./js/jquery.js"></script>
    <script src="./js/api.js" async="" defer=""></script>

</head>
<?php include "./includes/header.php" ?>


<section class="booking-wrapper">

    <div class="container">

        <div class="quote-sys-wrapper quate">
            <div class="row">
                <div class="col-md-7 col-sm-8">
                    <div class="form-background-level" style="margin-bottom: 40px;">

                        <!--     <h1> Payment Infomation </h1>-->
                        <div class="container text-center">
                            <img src="./assets/images/stripe-card.png">
                            <!-- <h3 class="text-center mb-5">Server Integration</h3> -->
                            <!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
                            <br><br>


                            <!--button
        style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
        id="checkout-button-sku_FZztaGVr4KvTad"
        role="link"
        >
       Continue to Payment
        </button-->

                            <button
                                style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                                id="checkout-button-sku_FZztaGVr4KvTad" role="link">
                                Continue to Payment
                            </button>

                            <div id="error-message"></div>
                        </div>



                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

                        <script>
                            //  const stripe = Stripe('pk_test_51N6BntSClcaMFadzBBa8VneTuOClxU2YQLPik7ByzpdbDqA5CMinLOvNd67uDJHuRov0Bi3piZp633Ns7yBAxB5R00Ivu63f2I');
                            const stripe = Stripe('pk_live_0qSmEv4oxsK9B7K2VrKVAHs8');
                            //var stripe = Stripe('pk_test_yv1qeadXZPEbBXoUKprzTfVE'); -- old test --

                            //var CHECKOUT_SESSION_ID = "";
                            //var checkoutButton = document.getElementById('checkout-button-sku_FZztaGVr4KvTad');
                            //checkoutButton.addEventListener('click', function () {
                            //   stripe.redirectToCheckout({

                            //  sessionId: CHECKOUT_SESSION_ID
                            // }).then(function (result) {

                            //});
                            //});

                            $("#checkout-button-sku_FZztaGVr4KvTad").click(function () {
                                stripe.redirectToCheckout({
                                    sessionId: 'cs_live_a1YmJYQKCjvQO2zLH0MD8ccmIPwuyAFubFLHcKelAvcT9AjyUmKV3VAP1l'
                                }).then(function (result) { });
                            });

                        </script>


                    </div>
                </div>

                <div class="col-md-5 col-sm-4 col-xs-12">

                    <div class="trip-details">


                        <h3 class="title">Booking Summary</h3>

                        <h5> &nbsp; &nbsp; Outbound Journey <span class="pre-price" id="oneway_price">

                                £238</span></h5>

                        <div class="route-wrapper">

                            <h5>

                                <img src="./assets/images/pin.svg">

                                Pick up
                            </h5>

                            <p>
                                On 2024-02-08 at 00:15:00
                                <br>
                                Big Ben, London, UK
                            </p>

                        </div>

                        <div class="route-wrapper">

                            <h5><img src="./assets/images/pin.svg"> Drop Off </h5>

                            <p>Stonehenge, Salisbury, UK</p>

                        </div>
                        <div class="route-wrapper">
                            <h5><img src="./assets/images/map.svg">Estimate Distance
                                &amp; Duration</h5>
                            <p>88 mile(s),1 hour 51 mins</p>
                        </div>

                        <hr>

                        <div class="route-wrapper act-fare">

                            <h5 class="clearfix">
                                <img src="./assets/images/taxi.svg"> Vehicle <span id="car_info">Executive</span>
                            </h5>

                            <figure class="selected-fleet">

                                <img src="./assets/images/executive-saloon.png" class="img-responsive" alt="Saloon Car">

                            </figure>

                            <div class="total">

                                <h3 class="clearfix"> Total<span id="car_price">£238 </span>

                                </h3>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

</main>
<?php include "./includes/footer4.php" ?>
<footer>
    <section class="footer text-center">
        <div class="container">
            <div class="payment">
                <img src="../assets/images/payment.png" alt="payment" class="img-fluid" />
            </div>
        </div>
    </section>
</footer>
<!-- App Download Section -->
<?php include "./includes/app-download-section2.php" ?>


<div class="last-footer">
    <div class="container">
        <p style="text-align: center;">
            © 2024 Online Airport Transfer Ltd trading as British Express Cars
        </p>
    </div>
</div>

<script src="./js/bootstrap.min.js"></script>

<script src="./js/jquery.validate.min.js"></script>

<script src="./js/jquery-ui.min.js" type="text/javascript"></script>

<script src="./js/jquery.timepicker.min.js"></script>

<script src="./js/slick.js"></script>

<script src="./js/rangeslider.js"></script>

<!--Geo Location-->

<script src="./js/jquery.geocomplete.min.js"></script>

<script src="./js/global.js"></script>

<script src="./js/custom.js"></script>

<script src="./js/bootbox.min.js"></script>
<script src="./js/jquery.easy-autocomplete.min.js"></script>

<!-- CSS file -->

<link rel="stylesheet" href="./css/easy-autocomplete.min.css" />

<!-- Additional CSS Themes file - not required-->

<link rel="stylesheet" href="./css/easy-autocomplete.themes.min.css" />

<script>
    var url = $(location).attr('href').split("/");
    console.log(url, "sdfdsfsdfdsf")
    if (url[3] == "british-express") {
        $(".main-template").addClass("british-template");
        $(".main-template").removeClass("travel-template");
    }
    else {
        $(".main-template").removeClass("british-template");
        $(".main-template").addClass("travel-template");
    }

    var options = {
        url: function (phrase) {
            return "api.php?data=" + phrase + "&format=json";
        },

        getValue: "text",
    };

    $("#provider-remote4").easyAutocomplete(options);
    $("#provider-remote3").easyAutocomplete(options);
    $("#provider-remote2").easyAutocomplete(options);

    $("#provider-remote1").easyAutocomplete(options);
</script>
</body>

</html>
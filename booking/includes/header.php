
<body class="main-template">
  <div class="top_header no-padding">
    <!-- Container -->
    <div class="container">
      <div class="row">
        <ul class="col-md-4 col-sm-12 social no-bottom-margin">
          <li>
            <a href="https://www.facebook.com/britishexpresscars/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="https://www.twitter.com/britishexpcars" target="_blank"><i class="fa fa-twitter"
                aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/britishexpresscars" target="_blank"><i class="fa fa-instagram"
                aria-hidden="true"></i></a>
          </li>
          <!-- <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> -->
        </ul>
      </div>
    </div>
    <!-- Container /- -->
  </div>

  <div style="clear: both"></div>
  <header>
    <section class="top-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <a class="navbar-brand" href="index.php">
              <img src="./assets/images/logo.png" alt="logo" class="img-fluid" />
            </a>
          </div>
          <div class="col-md-6">
            <div class="bar">
              <img src="./assets/images/menu-button.png" />
            </div>
            <div class="top-menu">
              <ul>
                <li>
                  <a href="tel:02081111104">
                    <img src="./assets/images/telephone.svg" /> 020 8111
                    1104</a>
                </li>
                <li>
                  <a href="mailto:info@britishexpresscars.co.uk"><img
                      src="./assets/images/gmail.svg" />info@britishexpresscars.co.uk</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapsepp navs-wrap navbar-collapsepp" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="heathrow.php">Heathrow Airport Transfers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gatwick.php">Gatwick Airport Transfers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="stansted.php">Stansted Airport Transfers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="luton.php">Luton Airport Transfers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="city.php">City Airport Transfers</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="ft-template" id="quote-widget">
    <script>
      function checkformalert() {
        // $('#myModal').modal('show');

        var form = document.getElementById("point-to-points");

        var from = $("#provider-remote2").val();

        var to = $("#provider-remote1").val();
        // console.log(from);
        // console.log(to);

        if (from != "" && from.length > 3) {
        } else {
          /* alert("Please enter the pick-up location");*/
          form.from.focus();
          return false;
        }

        if (to != "" && to.length > 3) {
        } else {
          /*alert("Please enter the drop-off location"); */
          form.to.focus();
          return false;
        }

        $("#point-to-points").submit();
      }

      function valueC() {
        if ($("input[name='check_return']").is(":checked")) {
          fromv = $("#provider-remote2").val();
          tov = $("#provider-remote1").val();

          if (fromv == "" || tov == "") {
            alert("Kindly enter Pickup & Dropoff");
            $(".return-trip").hide(200);
            $("#provider-remote3").val("");
            $("#provider-remote4").val("");

            $("#accept_tc1").prop("checked", false);
          } else {
            $(".return-trip").show(200);
            $("#provider-remote3").val(tov);
            $("#provider-remote4").val(fromv);
          }

          // $("#point-to-points").submit();
        } else {
          $(".return-trip").hide(200);
          $("#provider-remote3").val("");
          $("#provider-remote4").val("");
        }
      }
    </script>
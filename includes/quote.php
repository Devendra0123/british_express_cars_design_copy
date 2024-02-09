<div class="banner-form">
  <div class="quote-widget" id="quote-widget">
    <form id="point-to-points" method="post" class="quote p-4" action="testurl.php">
      <h2>Get an instant quote</h2>
      <div class="form-field">
        <div style="display: flex; align-items: center; justify-content: space-between;">
          <label for="exampleInput">Pick-up</label>
          <div style="display: flex; justify-content: flex-end;">
            <div onclick="showViaPointField()"
              style="display: flex; justify-content: center; align-items: center; gap: 5px; cursor:pointer;"
              class="add-via-label">
              <i class="fa fa-plus" aria-hidden="true" style="font-size: 15px;"></i>
              <span style="font-size: 12px; font-weight: 800;">Add Via</span>
            </div>
          </div>
        </div>
        <div class="easy-autocomplete">
          <input id="provider-remote2" name="from" class="form-control" style=""
            placeholder="Enter airport, seaport, postcode" required="" autocomplete="off" />

        </div>
        <span class="form-addons">
          <i class="fa fa-map-marker"></i>
        </span>
      </div>
      <!-- Via point -->
      <div style="width: 100%;">
        <div class="form-field via-point-field" style="display: none;">
          <label for="exampleInput">Via point</label>

          <div style="">
            <div class="easy-autocomplete"
              style="position: relative;  display:flex; align-items: center; justify-content: between">
              <input name="via" class="form-control" style="" placeholder="Enter airport, seaport, postcode" required=""
                autocomplete="off" />

              <span onclick="hideViaPointFiled()" style="position: absolute; right: 10px; cursor: pointer">
                <i class="fa fa-times" aria-hidden="true" style="-webkit-text-stroke: 1px background-color;"></i>
              </span>
            </div>
            <span class="form-addons">
              <i class="fa fa-stop-circle-o fa-sm" aria-hidden="true" style="font-size: 16px;"></i>
            </span>
          </div>
        </div>
      </div>

      <div class="input_fields_wrap add_via form-field">
        <div class="row col-cstm"></div>
      </div>
      <div class="form-field">
        <label for="exampleInput">Drop-off</label>
        <div class="easy-autocomplete">

          <input id="provider-remote1" name="to" class="form-control" style=""
            placeholder="Enter airport, seaport, postcode" required="" autocomplete="off" />

        </div>
        <span class="form-addons">
          <i class="fa fa-map-marker"></i>
        </span>
      </div>

      <div class="col-sm-12">
        <div class="row">


          <div class="form-check r-input col-sm-6">

            <input type="checkbox" class="form-check-input" id="accept_tc1" name="check_return" value="return"
              onchange="valueC()" required="" aria-required="true" data-gtm-form-interact-field-id="0">
            <label class="form-check-label" for="accept_tc1"> Return Journey?</label>
          </div>

          <!-- Return Fields -->
          <div class=" col-cstm return-trip" style="display: none;">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12  col-cstm">
                <div class="form-field">
                  <div class="form-field">
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                      <label for="exampleInput">Pick-up</label>
                      <div style="display: flex; justify-content: flex-end;">
                        <div onclick="showReturnViaPointField()"
                          style="display: flex; justify-content: center; align-items: center; gap: 5px; cursor:pointer;"
                          class="add-return-via-label">
                          <i class="fa fa-plus" aria-hidden="true" style="font-size: 15px;color: black;"></i>
                          <span style="font-size: 12px; color: black; font-weight: 800;">Add Via</span>
                        </div>
                      </div>
                    </div>
                    <div class="easy-autocomplete" style="width: 100% !important;"><input id="provider-remote3"
                        name="returnfrom" class="form-control" style="" placeholder="Enter airport, seaport, postcode"
                        required="" autocomplete="off">
                      <div class="easy-autocomplete-container" id="eac-container-provider-remote3">
                        <ul></ul>
                      </div>
                    </div>
                    <span class="form-addons"> <i class="fa fa-map-marker"></i> </span>
                  </div>
                </div>
              </div>
              <!-- Via point -->
              <div class="col-md-12 col-sm-12 col-xs-12  col-cstm">
                <div class="form-field return-via-point-field" style="display: block;">
                  <label for="exampleInput">Via point</label>
                  <div style="">
                    <div class="easy-autocomplete"
                      style="position: relative; width: 100%; display:flex; align-items: center; justify-content: between">
                      <input name="return-via" class="form-control" style=""
                        placeholder="Enter airport, seaport, postcode" required="" autocomplete="off" />

                      <span onclick="hideReturnViaPointFiled()"
                        style="color: black; position: absolute; right: 10px; cursor: pointer">
                        <i class="fa fa-times" aria-hidden="true"
                          style="-webkit-text-stroke: 1px background-color;"></i>
                      </span>
                    </div>
                    <span class="form-addons">
                      <i class="fa fa-stop-circle-o fa-sm" aria-hidden="true" style="font-size: 16px;"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12  col-cstm">
                <div class="form-field">
                  <label for="exampleInput">Drop-off</label>
                  <div class="easy-autocomplete" style="width: 100%;"><input id="provider-remote4" name="returnto"
                      class="form-control" style="" placeholder="Enter airport, seaport, postcode" required=""
                      autocomplete="off">
                    <div class="easy-autocomplete-container" id="eac-container-provider-remote4">
                      <ul></ul>
                    </div>
                  </div><span class="form-addons"> <i class="fa fa-map-marker"></i> </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="/british-express/booking/terminal.php">
        <button class="btn main-banner-btn btn-block getquotebtn" type="button" name="book_now11">
          Get Quote
        </button>
      </a>
    </form>
  </div>
</div>

<script>

  $(".return-trip").hide(200);
  $(".via-point-field").hide(200);
  $(".return-via-point-field").hide(200);
  function handleGetQuote() {
    window.location.href = "/british-express/booking/available-fleet.php";
  }

  const addViaLabel = document.querySelector(".add-via-label");
  const addReturnViaLabel = document.querySelector(".add-return-via-label");

  const viaPointField = document.querySelector(".via-point-field");
  const returnViaPointField = document.querySelector(".return-via-point-field");

  function showViaPointField() {
    $(".via-point-field").show(200);
  }

  function hideViaPointFiled() {
    addViaLabel.style.display = "inline"
    $(".via-point-field").hide(200);
  }

  function showReturnViaPointField() {
    $(".return-via-point-field").show(200);
  }

  function hideReturnViaPointFiled() {
    addReturnViaLabel.style.display = "inline"
    $(".return-via-point-field").hide(200);
  }
</script>
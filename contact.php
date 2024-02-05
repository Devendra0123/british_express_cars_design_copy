<?php include "./includes/header.php" ?>

<div class="inner-sitemap">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://www.britishexpresscars.co.uk/"><i class="fa fa-home"> </i> Home</a></li>
                <li class="breadcrumb-item" aria-current="page"> &gt;&gt; Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<section class="contact-info section-break" style="padding: 10px 0 30px;">
  <div class="container">
    <!-- <h3>Contact us</h3> -->
    <h2 style="margin: 0;font-weight: bold;font-size: 22px;color: #e50914;">Contact us</h2>
    <div class="row">
      <div class="col-md-7">
        <!-- Default form contact -->
        <form onsubmit="return ajaxgo()">

          <h4>Send Us a Message</h4>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <label class="col-md-4">Name</label>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control" placeholder="Name" name="cname" id="cname" required="">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <label class="col-md-4">Email</label>
                <div class="form-group  col-md-8">
                  <input type="email" class="form-control" name="cemail" id="cemail" placeholder="Email" required="">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <label class="col-md-4">Phone/Mobile</label>
                <div class="form-group col-md-8">
                  <input type="number" class="form-control" name="cphone" id="cphone" placeholder="Phone" required="">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <label class="col-md-4">Message</label>
                <div class="form-group col-md-8">
                  <textarea class="form-control" rows="4" placeholder="" name="cmessage" id="cmessage"
                    required=""></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <label class="col-md-4"></label>
                <div class="form-group col-md-8">
                  <div class="g-recaptcha" data-sitekey="6Le7I7UZAAAAAMnKL-bcn0XvXDULCmNMatZQ45RI">
                    <div style="width: 304px; height: 78px;">
                      <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-8n8d11co5tjv"
                          frameborder="0" scrolling="no"
                          sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                          src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le7I7UZAAAAAMnKL-bcn0XvXDULCmNMatZQ45RI&amp;co=aHR0cHM6Ly93d3cuYnJpdGlzaGV4cHJlc3NjYXJzLmNvLnVrOjQ0Mw..&amp;hl=en&amp;v=MHBiAvbtvk5Wb2eTZHoP1dUd&amp;size=normal&amp;cb=or5mau6hbi5g"></iframe>
                      </div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                    </div><iframe style="display: none;"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <button type="submit" name="" class="pull-right btn btn-custom">Send Message</button>
            </div>
          </div>
        </form>
        <!-- Default form contact -->
      </div>
      <div class="col-md-5">
        <div class="contact-content text-left">
          <h4>Phone: <br>
            <p><a href="tel:+44 (0) 208 111 1104">UK: 0208 111 1104</a></p>
            <p><a href="tel:+44 (0) 208 111 1104">Int: +44 (0) 208 111 1104</a></p>
          </h4>
          <h4>Email: <br>
            <p><a href="mailto:info@britishexpresscars.co.uk">info@britishexpresscars.co.uk</a></p>
          </h4>
          <h4>Address: <br>
            <p>Office 12, 450 Bath Road,<br>
              Heathrow, United Kingdom, UB7 0EB</p>
          </h4>

          <!--                     -->
          <!--                    -->
        </div>
      </div>


    </div>
  </div>
</section>
<?php include "./includes/footer.php" ?>
<!-- START:: INCLUDING THE HEADER -->
<?php include('layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HEDAER IMAGE SECTION -->
<div class="header_img_wraper" style="background: url('assets/media/pic3.jpeg');">
  <div class="overlay">
    <div class="intro_text_wraper">
      <h1> <span>Service Name</span> </h1>
    </div>
  </div>
</div>
<!-- END:: HEDAER IMAGE SECTION -->

<!-- START:: SERVICE DETAILS SECTION -->
<div class="service_details">
  <div class="container">
    <div class="header_wraper">
      <h2> About Service </h2>
    </div>

    <div class="row justify-content-center py-5">
      <div class="col-12 col-md-5">
        <div class="service_img_wraper">
          <img src="assets/media/pic6.jpeg" alt="">
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="desc">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Sapiente doloribus dolorem velit, vero laborum ipsam obcaecati 
          error unde eius ratione distinctio? Maxime tenetur perspiciatis 
          velit consequatur accusamus aspernatur natus numquam. vero laborum 
          ipsam obcaecati error unde eius ratione distinctio? Maxime tenetur 
          perspiciatis velit consequatur accusamus aspernatur natus numquam.
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Sapiente doloribus dolorem velit.
        </div>
      </div>
    </div>

    <div class="row justify-content-center pt-5">
      <div class="header_wraper mb-4">
        <h2> Service Clients </h2>
      </div>

      <div id="clients" class="owl-carousel owl-theme col-11">

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/clients/partner-1.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/clients/partner-2.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/clients/partner-3.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/clients/partner-1.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/clients/partner-2.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/clients/partner-3.png" alt="client"> 
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- END:: SERVICE DETAILS SECTION -->

<!-- START:: CONTACT US SECTION -->
<div class="contact_us_sec">
  <div class="container">
    <div class="header_wraper mb-4">
      <h2> Book Now </h2>
    </div>

    <div class="alert_wraper">
      <div class="alert alert-success text-center col-12 col-md-6" role="alert">
        Your Service Booked Successfuly
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-12 col-md-6 p-0">
        <div class="form_wraper">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Full Name*" required>
              <span>
                <i class="fas fa-user-circle fa-2x"></i>
              </span>
            </div>

            <div class="invalid_wraber">
              <div class="form-group invalid">
                <input type="tele" class="form-control" placeholder="Your Phone Number*" required>
                <span>
                  <i class="fas fa-phone-square-alt fa-2x"></i>
                </span>
              </div>
              <p class="invalid_message"> Phone Number Can't Be Empty </p>
            </div>

            <div class="form-group mb-4">
              <textarea placeholder="Your Message"></textarea>
            </div>

            <div class="btn_box">
              <button> Submit </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END:: CONTACT US SECTION -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include('layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
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

    <div class="sec_desc_wraper">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Sapiente doloribus dolorem velit, vero laborum ipsam obcaecati 
      error unde eius ratione distinctio? Maxime tenetur perspiciatis 
      velit consequatur accusamus aspernatur natus numquam. vero laborum 
      ipsam obcaecati error unde eius ratione distinctio? Maxime tenetur 
      perspiciatis velit consequatur accusamus aspernatur natus numquam.
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Sapiente doloribus dolorem velit.
    </div>

    <div class="row justify-content-center py-5">
      <div class="col-10">
				<div id="slider" class="flexslider">
					<ul class="slides">
						<li>
              <iframe src="https://www.youtube.com/embed/xZPafUhm68s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</li>
						<li>
							<img src="assets/media/pic1.jpeg" />
						</li>
						<li>
							<img src="assets/media/pic2.jpeg" />
						</li>
						<li>
							<img src="assets/media/pic3.jpeg" />
						</li>
						<li>
							<img src="assets/media/pic4.jpeg" />
						</li>
						<li>
							<img src="assets/media/pic5.jpeg" />
						</li>
						<li>
							<img src="assets/media/pic6.jpeg" />
						</li>
					</ul>
				</div>

				<div id="carousel" class="flexslider">
					<ul class="slides">
						<li>
							<img class="min_img" src="https://i.ytimg.com/vi_webp/xZPafUhm68s/sddefault.webp" />
						</li>
						<li>
							<img class="min_img" src="assets/media/pic1.jpeg" />
						</li>
						<li>
							<img class="min_img" src="assets/media/pic2.jpeg" />
						</li>
						<li>
							<img class="min_img" src="assets/media/pic3.jpeg" />
						</li>
						<li>
							<img class="min_img" src="assets/media/pic4.jpeg" />
						</li>
						<li>
							<img class="min_img" src="assets/media/pic5.jpeg" />
						</li>
						<li>
							<img class="min_img" src="assets/media/pic6.jpeg" />
						</li>
					</ul>
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
      <h2> Get In Touch With Us </h2>
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

            <div class="form-group">
              <input type="tele" class="form-control" placeholder="Your Phone Number*" required>
              <span>
                <i class="fas fa-phone-square-alt fa-2x"></i>
              </span>
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
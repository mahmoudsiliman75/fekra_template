<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HOME SLIDER -->
<div id="home_slider" class="carousel slide carousel-fade" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#home_slider" data-slide-to="0" class="active"></li>
    <li data-target="#home_slider" data-slide-to="1"></li>
    <li data-target="#home_slider" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/media/slider/slide1.jpeg" class="d-block" alt="Slide 1">
      <div class="overlay">
        <div class="intro_text_wraper">
          <h1> Welcome To <span>Our Website</span> </h1>
          <h5> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non laudantium eum aliquam reiciendis. </h5>
        </div>
        
        <div class="btn_wraber mt-4">
          <a href="#"> Learn More </a>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets/media/slider/slide2.jpeg" class="d-block" alt="Slide 2">
      <div class="overlay">
        <div class="intro_text_wraper">
          <h1> Welcome To <span>Our Website</span> </h1>
          <h5> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non laudantium eum aliquam reiciendis. </h5>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets/media/slider/slide3.jpg" class="d-block" alt="Slide 3">
      <div class="overlay">
        <div class="intro_text_wraper">
          <h1> Welcome To <span>Our Website</span> </h1>
          <h5> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non laudantium eum aliquam reiciendis. </h5>
        </div>
      </div>
    </div>

  </div>

  <a class="carousel-control-prev" href="#home_slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#home_slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
<!-- END:: HOME SLIDER -->


<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
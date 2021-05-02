<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HOME SLIDER -->
<div id="home_slider" class="carousel slide carousel-fade" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#home_slider" data-slide-to="0" class="active"></li>
    <li data-target="#home_slider" data-slide-to="1"></li>
    <li data-target="#home_slider" data-slide-to="2"></li>
    <li data-target="#home_slider" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/media/slider1.jpeg" class="d-block" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider2.jpeg" class="d-block" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider3.jpeg" class="d-block" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider4.jpeg" class="d-block" alt="Slide 4">
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
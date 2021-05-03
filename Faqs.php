<!-- START:: INCLUDING THE HEADER -->
<?php include('layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HEDAER IMAGE SECTION -->
<div class="header_img_wraper" style="background: url('assets/media/pic3.jpeg');">
  <div class="overlay">
    <div class="intro_text_wraper">
      <h1>  <span> F . A . Q . S</span> </h1>
    </div>
  </div>
</div>
<!-- END:: HEDAER IMAGE SECTION -->

<!-- START:: MAIN FAQS SECTION -->
<div class="main_faqs">
  <div class="container">
    <div class="header_wraper">
      <h2> General Information </h2>
    </div>

    <div class="sec_desc_wraper">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
      Culpa enim praesentium minima sunt, eveniet ratione velit 
      similique omnis porro doloremque dolores? Aut accusantium 
      possimus voluptates nobis ullam? Amet, ipsa est.
    </div>

    <div class="row justify-content-center">
      <div class="col-10 col-md-6 my-3">
        <div class="video_wraper">
          <iframe src="https://www.youtube.com/embed/xZPafUhm68s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-12 col-md-6 my-3">
        <div class="faqs_wraper">
          <div class="accordion" id="faqs_accordion">

            <div class="card border mb-3">
              <div class="card-header" id="headingOne">
                <h4 class="mb-0">
                  <button class="btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-angle-double-right"></i>  
                    Question #1
                  </button>
                </h4>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqs_accordion">
                <div class="card-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                  Reprehenderit minima mollitia explicabo unde et illo illum. 
                  Quia vel, culpa sequi consequuntur neque illo porro facere 
                </div>
              </div>
            </div>

            <div class="card border mb-3">
              <div class="card-header" id="headingTwo">
                <h4 class="mb-0">
                  <button class="btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-angle-double-right"></i>
                    Question #2
                  </button>
                </h4>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqs_accordion">
                <div class="card-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                  Reprehenderit minima mollitia explicabo unde et illo illum. 
                  Quia vel, culpa sequi consequuntur neque illo porro facere 
                </div>
              </div>
            </div>

            <div class="card border mb-3">
              <div class="card-header" id="headingThree">
                <h4 class="mb-0">
                  <button class="btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fas fa-angle-double-right"></i>
                    Quesion #3
                  </button>
                </h4>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqs_accordion">
                <div class="card-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                  Reprehenderit minima mollitia explicabo unde et illo illum. 
                  Quia vel, culpa sequi consequuntur neque illo porro facere 
                </div>
              </div>
            </div>

            <div class="card border mb-3">
              <div class="card-header" id="headingFour">
                <h4 class="mb-0">
                  <button class="btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="fas fa-angle-double-right"></i>
                    Quesion #4
                  </button>
                </h4>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqs_accordion">
                <div class="card-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                  Reprehenderit minima mollitia explicabo unde et illo illum. 
                  Quia vel, culpa sequi consequuntur neque illo porro facere 
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END:: MAIN FAQS SECTION -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include('layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->
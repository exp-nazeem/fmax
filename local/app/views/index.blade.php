@extends('layouts.main') 
@section('content') 
     <!--  -->
    <div class="widget">
        <a href="<?php echo URL::to('/'); ?>/partner"><img src="assets/images/new.png"></a>
    </div>
    <!--  -->
    <!-- Slide -->
    <div class="swiper-container clearfix">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/images/slider-1.JPG" class="img-responsive img-rounded" alt="Responsive image" >
          <div class="swiper-dm">
            <div class="text-left">
              <h1 data-swiper-parallax="-200">MAXIMISING FIELD PRODUCTIVITY</h1>
              <div class="p-silde home"  data-swiper-parallax="-400">
                <p>Get real-time intelligence for quick and efficient decision-making</p>
              </div>
              <button type="button" class="btn btn-dm color1" data-swiper-parallax="-600" onclick="location.href='product'">Read More</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="assets/images/slider-2.JPG" class="img-responsive img-rounded" alt="Responsive image" >
          <div class="swiper-dm">
            <div class="text-left">
              <h1 class="h1-slide text-white" data-swiper-parallax="-200">SMARTER WAY TO CUSTOMER ENGAGEMENTS</h1>
              <div class="p-silde home" data-swiper-parallax="-400">
                <p>Improve field productivity and streamline field sales process</p>
              </div>
              <button type="button" class="btn btn-dm color1" data-swiper-parallax="-600" onclick="location.href='business'">Read More</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="assets/images/slider-3.JPG" class="img-responsive img-rounded" alt="Responsive image" >
          <div class="swiper-dm">
            <div class="text-left">
              <h1 class="h1-slide text-white" data-swiper-parallax="-200">CONNECTING LAST MILE TEAM</h1>
              <div class="p-silde home" data-swiper-parallax="-400">
                <p>Decongesting information exchange for better sales and operational visibility</p>
              </div>
              <button type="button" class="btn btn-dm color1" data-swiper-parallax="-600" onclick="location.href='casestudy'">Read More</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Pagination -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    
    
    <!-- Background Moble FM -->
    <div class="bg-mobile">
      <div class="container">
        <div class="row ">
          <div class="col-md-6 col-md-push-6 p-dm">
            <h1 class="h1-color-white">FieldMax<sup>®</sup> CPG</h1>
            <div class="home">
              <p>Perfecting your secondary sales and distribution</p></div>
              <div class="span">
                <span>FieldMax® CPG application meets the business requirements of the modern day sales organisation for effective sales execution and reporting.</span>
              </div>
              <button type="button" class="btn btn-dm color2" onclick="location.href='cpg'">Read More</button>
            </div>
            <div class="col-md-6 col-md-pull-6 text-center">
              <img src="assets/images/bg-fm.png" class="img-responsive img-rounded center-block" alt="Responsive image">
            </div>
          </div>
        </div>
      </div>
      <!-- Counting Scroll -->
      <div class="bg-counting">
        <div class="container">
          <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-md-3 box-couning">
              <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='15' data-delay='5' data-increment="10">0</div>
              
              <h3 class="couning-h3">Million Transactions</h3>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 box-couning">
              <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10000' data-delay='10' data-increment="50">0 +</div>
              <h3 class="couning-h3">Plus Users</h3>
              
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 box-couning">
              <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='165' data-delay='5' data-increment="5">0</div>
              <h3 class="couning-h3">Clients</h3>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 box-couning">
              <button class="color3" data-toggle="modal" data-target="#countries">
              <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='7' data-delay='5' data-increment="1">0</div>
              <h3 class="couning-h3">Countries</h3></button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="countries" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog modal-xlg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Countries</h4>
            </div>
            <div class="modal-body text-center">
              <img src="assets/images/map.svg" class="img-responsive" alt="Image" style="width: 100%;">
            </div>
            <!--  <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
          </div>
        </div>
      </div>
      <!-- Background Moble FM -->
      <div class="container"><br><br>
        <div class="row">
          <div class="col-md-6 p-dm text-left">
            <h1 class="h1-color-orc">FieldMax<sup>®</sup> Van Sales</h1>
            <div class="home">
              <p>Making real-time invoicing a reality</p>
            </div>
            <div class="span">
              <span>Managing the distributed sales team and intermediaries can become challenging at times. Learn how FieldMax® can help you stream line your field sales and invoicing.</span>
            </div>
            <button type="button" class="btn btn-dm color2" onclick="location.href='vansales'">Read More</button>
          </div>
          <div class="col-md-6 text-center">
            <img src="assets/images/bg-fm-r.png" class="img-responsive img-rounded center-block" alt="Responsive image">
          </div>
        </div>  <br><br>
      </div>
      <!-- NAVBAR CODE END -->
      <div class="bg-testimonials">
        <div class="container">
          <div class="row">
            <div class='col-md-offset-2 col-md-8 text-center'>
              <h2>Testimonials</h2>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-offset-2 col-md-8'>
              <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                  <?php
                      $i = 0;
                      foreach ($testimonials as $item) {
                  ?>
                  <li data-target="#quote-carousel" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0 ? 'active' : '') ?>"></li>
                  <?php
                      $i++;
                      }
                  ?>
                </ol>
                
                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">
                  <?php
                      $i = 0;
                      foreach ($testimonials as $item) {
                  ?>
                  <!-- Quote 1 -->
                  <div class="item <?php echo ($i == 0 ? 'active' : '') ?>">
                    <blockquote>
                      <div class="row">
                        
                        <div class="col-sm-12">
                          <div class="home1">
                            <p> <?php echo $item->testimonials ?></p></div>
                            <small><?php echo $item->customer_name ?><br>
                            <?php echo $item->customer_designation ?>
                            </small>
                          </div>
                        </div>
                      </blockquote>
                    </div>
                    <?php
                        $i++;
                        }
                    ?>
                  </div>

  
                      
                      <!-- Carousel Buttons Next/Prev -->
                      <a data-slide="prev" href="#quote-carousel" class="left carousel-control">
                        <img src="assets/images/left-arrow.svg">
                      </a>
                      <a data-slide="next" href="#quote-carousel" class="right carousel-control">
                        <img src="assets/images/right-arrow.svg">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Background Moble FM -->
            <div class="bg-mobile">
              <div class="container">
                <div class="row ">
                  
                  <div class="col-md-6 col-md-push-6 p-dm">
                    <h1 class="h1-color-white">FieldMax<sup>®</sup> Pharma</h1>
                    <div class="home">
                      <p>Digitising MR reporting</p>
                    </div>
                    <div class="span">
                      <span>FieldMax® Pharma solution ensures the freedom for the pharmaceutical sales force to engage in more productive sales engagements.</span>
                    </div>
                    <button type="button" class="btn btn-dm color2" onclick="location.href='pharma'">Read More</button>
                    
                  </div>
                  <div class="col-md-6 col-md-pull-6 text-center">
                    <img src="assets/images/bg-fm.png" class="img-responsive img-rounded center-block" alt="Responsive image">
                  </div>
                </div>
              </div>
            </div>
            <div class="logo-top">
              <div class="container">
                <div class="container text-center">
                  <ul class="slide">
                    <li><img src="assets/images/partners/1.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/2.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/3.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/4.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/5.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/6.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/7.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/8.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/9.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/10.jpg" alt="Image" style="max-width:100%;"></li>
                    <li><img src="assets/images/partners/11.jpg" alt="Image" style="max-width:100%;"></li>
                  </ul>
                </div>
              </div>
              
              </div><!--.container-->
              <div class="bg-video">
                <div class="container text-center">
                  <div class="row">
                    <div class="col-lg-4">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/UAqDi4msyY4" frameborder="0" allowfullscreen></iframe>
                      
                    </div>
                    <div class="col-lg-4">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/KH3q-bfiBgU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/K6ojd9en40U" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>

@endsection
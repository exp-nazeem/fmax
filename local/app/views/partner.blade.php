@extends('layouts.contact') 
@section('content') 
  <footer>
        <div class="background-006">
            <div class="container text-center">
                <div class="section-title center">
                    <br>
                    <h2 style="color: #fff;">Partners</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="container text-center">
            <div class="clearfix"></div>
            <div style="color: #6F6F6F;">
                <h2 style="color: white;"><strong style="color: #FEB121;">Excellent opportunity to become channel partners and Independent Sales Associate</strong></h2>
                <div class="text-justify">
                    <div class="white-p-s">
                        <ul class="about-lists">
                            <br>
                            <p><strong>

                        <div class="text-center">
                        <marquee behavior="scroll" scrollamount="1
" direction="up" height="60" width="auto"><li style="font-size: 30px;">Are you interested in a profitable business partnership </li><br><br><li style="font-size: 30px;">Would you like to become part of an exponential growth story</li></marquee></div>
                        
                        </strong></p>
                        </ul>
                        <br>
                        <p><strong>Join the FieldMax® partner programme. As an authorized sales partner get value added benefits and rewards through referrals. Grow your business through sales and service of cloud enabled solution. We shall provide you all the strategic and operational support necessary to ensure a mutually successful growth.</strong></p>
                        <br>
                        <p><strong>We are looking for capable partners to join our growth story. Your are qualified if you have flair in any of the following business domain:</strong></p>
                        <ul class="about-list">
                            <p><strong>
                     <li><span class="fa fa-dot-circle-o"></span> Business and management consulting</li>
               <li><span class="fa fa-dot-circle-o"></span> Digital marketing</li>
               <li><span class="fa fa-dot-circle-o"></span> Software resale</li>
               <li><span class="fa fa-dot-circle-o"></span> Auditing, legal and corporate service</li>
              </strong></p>
                            <p><strong>If interested, please share you details below. Our partner management team shall get in touch with you</strong></p>
                    </div>
                    <br>
                    <form  method="post" id="partnerform" class="form" role="form">

                    <div class="row">
                       <div class="col-xs-12 message" style="display:none">
                <strong>Thank you for writing to us! We will get back to you on this as soon as possible.</strong>
              </div><br><br>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="jobs" name="jobs" placeholder="Jobs Title" type="text" required />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="company" name="company" placeholder="Company Name" type="text" required autofocus />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="address" name="address" placeholder="Address" type="text" required />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="country" name="country" placeholder="Country" type="text" required />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="phone" name="phone" placeholder="Contact number" type="text" required />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="text" required />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="website" name="website" placeholder="Website" type="text" required />
                        </div>
                    </div>
                    <textarea class="form-control" id="message" name="message" placeholder="Brief description about your business" rows="5"></textarea>
                    <br />
                    <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <button type="button" id="partnersubmit" class="btn btn-dm color1 pull-right" data-swiper-parallax="-600" >Submit</button>
                        </div>
                    </div>
                  </form>

                </div>

            </div>
        </div>
   
        <div class="footer-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-justify">
                        <dl>
                            <dt>ABOUT US</dt>
                            <dd><a href="http://www.experionglobal.com/" target="blank" style="color: #00c0ff;">Experion Technologies</a> is a technology company focusing on mobile & web software solutions and application development & support services. Located in Technopark, Trivandrum, Experion provides solutions and services in the enterprise web and mobile technologies space since 2006</dd>
                        </dl>
                    </div>
                    <div class="col-md-3">
                        <dl>
                            <dt>Resources</dt>
                            <dd><a href="customer-stories.html">Customer stories</a></dd>
                            <dd><a href="assets/pdf/Experion Profile.pdf" target="_blank" onClick="window.open('assets/pdf/Experion_FieldMax Brochure 2013.pdf','_blank')">Downloads</a></dd>
                            <dd><a href="faq.html">FAQ</a></dd>
                            <!-- <dd><a href="contact.html">WRITE TO US</a></dd> -->
                            <br>
                            <!-- <div class="input-group"> <input type="text" class="form-control" placeholder="You have successfully subscribed"> <span class="input-group-btn"> <button class="btn btn-default" type="button"><i class="fa fa-paper-plane"></i></button> </span> </div>
          <strong>Thank you!</strong> You have successfully subscribed to our newsletter. -->
                        </dl>
                    </div>
                    <div class="col-md-3">
                        <dl>
                            <dt>Contact us</dt>
                            <address>
                                <!-- <abbr title="address">Address:  4th floor, Thejaswini, Technopark Rd, Technopark Campus, Thiruvananthapuram, Kerala 695581</abbr><br> -->
                                <abbr>Tel: +91 471 3047310</abbr>
                                <br>
                                <abbr>Mobile: 09539077835</abbr>
                                <br>
                                <abbr>E-Mail: </abbr><a href="">sales@fieldmax.in</a>
                            </address>
                            <a href="https://www.facebook.com/Fieldmax-Mobile-SFA-173811946035027/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                            <a href="https://twitter.com/FieldMax_SFA"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
                            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a>
                            <a href="https://www.youtube.com/user/experiontechnologies"><i id="social-em" class="fa fa-youtube-square fa-2x social"></i></a>
                            <a href="mailto:fieldmax@experionglobal.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
                        </dl>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/images/red100finalist.png" class="img-responsive" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

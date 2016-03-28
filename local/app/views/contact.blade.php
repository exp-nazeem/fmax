@extends('layouts.contact') 
@section('content') 

<footer>
        <div class="container"><br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

          <form id="contact" method="post" class="form" role="form">
            <div class="row">
              <div class="col-xs-12 message" style="display:none">
                <strong>Thank you</strong> for writing to us! We will get back to you on this as soon as possible.
              </div><br><br>
              <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
              </div>
              <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
              </div>
              <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="company" name="company" placeholder="Company" type="text" autofocus />
              </div>
              <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="phone" name="phone" placeholder="Phone Number" type="text" required />
              </div>
            </div>
            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea>
            <br />
          <div class="row">
          <div class="col-xs-6 col-md-6 form-group">
                  <div class="checkbox">
                      <label>
                        <input type="checkbox" name="newsletter" id="newsletter" checked="checked"> Subscribe Newsletter
                      </label>
                    </div>
              </div>

          <div class="col-xs-6 col-md-6 form-group">
          <button type="button" class="btn btn-dm color1 pull-right" data-swiper-parallax="-600" id="Feedback">Submit <i></i></button>
          </div>
          </div>
          </form>

         
          <br><br>
          <div class="row">
            <div class="col-md-3 dm-height">
              <address>
                <strong>INDIA</strong><br>
                Experion Technologies (I) Pvt Ltd<br>
                407, 4th Floor, Thejaswini, Technopark Campus,<br>
                Thiruvananthapuram, Kerala, India - 695 581<br>
                <i class="icon-envelope icon-white"></i> sales@fieldmax.in
              </address>
            </div>
            <div class="col-md-3 dm-height">
              <address>
                <strong>INDIA</strong><br>
                Experion Technologies (I) Pvt Ltd<br>
                802, 8th Floor, Lulu Cyber Tower 1, Infopark SEZ,<br>
                Kakkanad, Kochi – 682042<br>
                <i class="icon-envelope icon-white"></i> sales@fieldmax.in
              </address>
            </div>
            <div class="col-md-3 dm-height">
              <address>
                <strong>INDIA</strong><br>
                Experion Technologies (I) Pvt Ltd<br>
                Third Floor, Novel Tech Park, 46/4<br>
                GB Palya, Hosur Road, Bangalore<br>
                <i class="icon-envelope icon-white"></i> sales@fieldmax.in
              </address>
            </div>
            <div class="col-md-3 dm-height">
              <address>
                <strong>USA</strong> <br>
                Experion Technologies USA Inc.<br>
                15305, Dallas Parkway, Suite 300<br>
                Addison, Texas 75001<br>
                sales@fieldmax.in
              </address>
            </div>
            <div class="col-md-3 dm-height">
              <address>
                <strong>SWITZERLAND</strong><br>
                Experion Technologies Sàrl<br>
                19 Rue de la Coulouvronière,<br>
                1204 GENEVE, Suisse<br>
                sales@fieldmax.in
              </div>
              <div class="col-md-3 dm-height">
                <address>
                  <strong>GERMANY</strong><br>
                  EXPERION GmbH<br>
                  Poststr.15<br>
                  D-76669 Bad Schoenborn<br>
                  sales@fieldmax.in
                </address>
              </div>
              <div class="col-md-3 dm-height">
                <address>
                  <strong>NETHERLANDS</strong><br>
                  Experion Global p/a<br>
                  Ambachtsherenlaan 21<br>
                  3271 TM, Mijnsheerenland, Netherlands<br>
                  sales@fieldmax.in
                </address>
              </div>
              <div class="col-md-3 dm-height">
                <address>
                  <strong>DENMARK</strong><br>
                  Experion Technologies Private Limited<br>
                  Strandvejen 153, 2900 Hellerup<br>
                  Denmark<br>
                  sales@fieldmax.in
                </address>
              </div>
              <div class="col-md-3 dm-height">
                <address>
                  <strong>AUSTRALIA</strong><br>
                  Experion Technologies Australia<br>
                  Suite 5, 20 Cato Street<br>
                  Hawthorn East, Victoria 3123<br>
                  <i class="icon-envelope icon-white"></i> sales@fieldmax.in
                </address>
              </div>
            </div>
          </div>
        </footer>

@endsection

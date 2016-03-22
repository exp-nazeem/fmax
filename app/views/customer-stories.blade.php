@extends('layouts.main') 
@section('content')

        <br><br><br><br><br>
        
        
            <div class="container text-center">
                <div class="section-title center"><br>
                    <h2>Downloads</h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <form id="contact" method="post" class="form" role="form" action="downloads"><br><br>
                        <div class="row customer-stories-form">
                            <div class="col-md-6" style="text-align:left">
                                Please submit your following details to get the downloads .
                            </div><br><br>
                            
                            <div class="col-xs-4 col-md-4 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                            </div>
                            <div class="col-xs-4 col-md-4 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                            </div>
                            
                            <div class="col-xs-4 col-md-4 form-group">
                                <input class="form-control" id="phonenumber" name="phone" placeholder="Phone Number" type="number" />
                            </div>
                        </div><br><br>
                    
                        <div class="row">
                            
                            <div class="col-xs-12 form-group">
                                <button type="submit" class="btn btn-dm color1 " data-swiper-parallax="-600">Submit</button>
                            </div>
                        </div><br><br>
                    </form>
                </div>
                
            </div> 
@endsection
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
                    <div style="font-size: larger;color: #6F6F6F;">
                        <div class="text-justify">                            
                            <ul class="about-list">
                                <li><span class="fa fa-dot-circle-o"></span> <a href="assets/pdf/Experion_FieldMax Brochure 2013.pdf" target="_blank" style="color:blue"> FieldMax Brochure </a></li>
                                <li><span class="fa fa-dot-circle-o"></span> <a href="<?php echo URL::to('/'); ?>/case-study" style="color:blue"> Case Studies </a></li>
                            </ul>                            
                        </div>
                    </div>
                </div>
                
            </div> 
            <br><br><br><br><br><br><br>

@endsection
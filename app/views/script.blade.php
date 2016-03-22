                    
                    <!-- jQuery -->
                    <script src="<?php echo URL::to('/'); ?>/assets/libs/js/jquery.min.js"></script>
                    <!-- Bootstrap JavaScript -->
                    <script src="<?php echo URL::to('/'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
                    <script src="<?php echo URL::to('/'); ?>/assets/libs/js/swiper.jquery.min.js"></script>
                    <script src="<?php echo URL::to('/'); ?>/assets/libs/js/swiper.min.js"></script>
                    <script src="<?php echo URL::to('/'); ?>/assets/libs/js/jquery.ticker.min.js"></script>
                    <script src="<?php echo URL::to('/'); ?>/assets/libs/js/numscroller-1.0.js"></script>
                    <script>
                    $(document).ready(function() {
                    $('#Carousel').carousel({
                    interval: 5000
                    })
                    });
                    
                    var swiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    centeredSlides: true,
                    autoplay: 2500,
                    autoplayDisableOnInteraction: false,
                    effect: 'fade',
                    parallax: true,
                    speed: 1000,
                    autoHeight: true, //enable auto height
                    });
                    
                    //Plugin start
                    (function($)
                    {
                    var methods =
                    {
                    init : function( options )
                    {
                    return this.each(function()
                    {
                    var _this=$(this);
                    _this.data('marquee',options);
                    var _li=$('>li',_this);
                    
                    _this.wrap('<div class="slide_container"></div>')
                    .height(_this.height())
                    .hover(function(){if($(this).data('marquee').stop){$(this).stop(true,false);}},
                    function(){if($(this).data('marquee').stop){$(this).marquee('slide');}})
                    .parent()
                    .css({position:'relative',overflow:'hidden','height':$('>li',_this).height()})
                    .find('>ul')
                    .css({width:screen.width*1,position:'absolute'});
                    
                    for(var i=0;i<Math.ceil((screen.width*1)/_this.width());++i)
                    {
                    _this.append(_li.clone());
                    }
                    
                    _this.marquee('slide');});
                    },
                    
                    slide:function()
                    {
                    var $this=this;
                    $this.animate({'left':$('>li',$this).width()*-1},
                    $this.data('marquee').duration,
                    'swing',
                    function()
                    {
                    $this.css('left',0).append($('>li:first',$this));
                    $this.delay($this.data('marquee').delay).marquee('slide');
                    
                    }
                    );
                    
                    }
                    };
                    
                    $.fn.marquee = function(m)
                    {
                    var settings={
                    'delay':0,
                    'duration':1500,
                    'stop':true
                    };
                    
                    if(typeof m === 'object' || ! m)
                    {if(m){
                    $.extend( settings, m );
                    }
                    
                    return methods.init.apply( this, [settings] );
                    }
                    else
                    {
                    return methods[m].apply( this);
                    }
                    };
                    }
                    )( jQuery );
                    
                    //Plugin end
                    
                    //call
                    $(document).ready(
                    function(){$('.slide').marquee({delay:3000});}
                    );
                    $('.ticker').ticker();
                    $.fn.ticker.defaults = {
                    random:        false, // Whether to display ticker items in a random order
                    itemSpeed:     3000,  // The pause on each ticker item before being replaced
                    cursorSpeed:   50,    // Speed at which the characters are typed
                    pauseOnHover:  true,  // Whether to pause when the mouse hovers over the ticker
                    finishOnHover: true,  // Whether or not to complete the ticker item instantly when moused over
                    cursorOne:     '_',   // The symbol for the first part of the cursor
                    cursorTwo:     '-',   // The symbol for the second part of the cursor
                    fade:          true,  // Whether to fade between ticker items or not
                    fadeInSpeed:   600,   // Speed of the fade-in animation
                    fadeOutSpeed:  300    // Speed of the fade-out animation
                    };
                    
                    </script>
                    <script type="text/javascript">
                    
                    $(window).scroll(function() {
                    if ($(document).scrollTop() > 50) {
                    $('nav').addClass('shrink');
                    } else {
                    $('nav').removeClass('shrink');
                    }
                    });
                    </script>
                    <!-- Scrolling Nav JavaScript -->
                    <script src="<?php echo URL::to('/'); ?>/assets/libs/scrolling-nav/js/jquery.easing.min.js"></script>
                    <script src="<?php echo URL::to('/'); ?>/assets/libs/scrolling-nav/js/scrolling-nav.js"></script>
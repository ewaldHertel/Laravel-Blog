$(window).ready(function() {
     var wHeight = $(window).height();

     if(wHeight > 800){
         $('.welcome').css('min-height',800);
         $('.about-section').css('min-height',800);
         $('.project').css('min-height',800);
         $('.latest-blog').css('min-height',800);
         //document.getElementById("skills").innerHTML = wHeight;
     }else {
         $('.welcome').css('min-height', wHeight);
         $('.about-section').css('min-height', wHeight);
         $('.project').css('min-height', wHeight);
         $('.latest-blog').css('min-height', wHeight);
         $(window).resize(function () {
             $('.welcome').css('min-height', wHeight);
             $('.about-section').css('min-height', wHeight);
             $('.project').css('min-height', wHeight);
             $('.latest-blog').css('min-height', wHeight);
         });
     }

     /*---------------------------------------*/
     /*  JQUERY FOR PAGE SCROLLING FEATURE
      /*  requires jQuery Easing plugin
      /*---------------------------------------*/
     var pageScroll = function(){
         $('.page-scroll a').bind('click', function(e){
             e.preventDefault();

             var $anchor = $(this);

             //noinspection JSJQueryEfficiency
             var offset = $('body').attr('data-offset');

             if($('.navbar.navbar-fixed-top').hasClass('side-menu') && $(window).width() >= 992){
                 //noinspection JSJQueryEfficiency
                 $('body').data('offset', 1);
                 //noinspection JSJQueryEfficiency
                 offset = $('body').data('offset');
             }

             $('html, body').stop().animate({
                 scrollTop: $($anchor.attr('href')).offset().top - (offset - 1)
             }, 1500, 'easeInOutExpo');

             $('.navbar-rj-collapse').collapse('hide');
         });
     };
     function parallaxInit() {
         $('#welcome').parallax("50%", 0.2);
         $('#project').parallax("50%", 0.3);
     }

     $(window).bind("load", function() {
         parallaxInit()
     });

     /*---------------------------------------*/
     /*  STICKY NAVBAR
      /*---------------------------------------*/
     $('.navbar.navbar-fixed-top').sticky({topSpacing: 0});

     var stickySideMenu = function(){
         var navbar = $('.navbar.navbar-fixed-top.side-menu');

         if ($(window).width() >= 992) {
             navbar.unstick();
         }
         else
         {
             navbar.unstick();
             navbar.sticky({topSpacing: 0});
         }
     };

     pageScroll();
     stickySideMenu();

     //noinspection JSUnresolvedFunction
     $(window).smartresize(function(){
         pageScroll();
         stickySideMenu();
     });

     $('.navbar-trigger-open').click(function(e) {
         e.preventDefault();
         $('.navbar.side-menu').toggleClass('active');
         $('body.push.push-left').toggleClass('pushed-left');
         $('body.push.push-right').toggleClass('pushed-right');
     });

     $('.navbar-trigger-close').click(function(e) {
         e.preventDefault();
         $('.navbar.side-menu').toggleClass('active');
         $('body.push.push-left').toggleClass('pushed-left');
         $('body.push.push-right').toggleClass('pushed-right');
     });


    /*==========================
        Intro typer
    ============================*/
    var element = $(".element");

        $(function() {
            element.typed({
                strings: ["Ewald Hertel.", "Developer.", "Photographer.", "Biker."],
                typeSpeed: 100,
                loop: true,
            });
        });

 });




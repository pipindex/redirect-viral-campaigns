    $(document).ready(function() {
     
     // MENU ANIMATION
     $(function() {
    //Let's cache jquery object containing the header element
    var header = $("header");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 200) {
            header.removeClass('transparent-head').addClass("white-head");
        } else {
            header.removeClass("white-head").addClass('transparent-head');
        }

    });
    if ($('body').hasClass('course')){
            $('nav#nav').removeClass('transparent-head').addClass('white-head')
        }
});

     // Scroll animation 
      new WOW().init();

     // SLIDERS
    var homeslider = $("#home-carousel");
    var courseslider = $("#home-courses");  
    var testimonials =$("#testimonialslide");
    var coursetestimonials= $("#course-testimonialslide, #course-testimonialslide2")
    var commitslider=$("#commitslide")
    var budgetingslider=$("#budgetingslide")
    homeslider.owlCarousel({

    navigation:false,
    pagination: false,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    autoHeight : true
    });     
    // Custom Navigation 
     $(".nextslide").click(function(){
        homeslider.trigger('owl.next');
    })
    $(".prevslide").click(function(){
       homeslider.trigger('owl.prev');
    })

    // Courses Slider Homepage
    courseslider.owlCarousel({
    items : 4, //4 items above 1000px browser width
    itemsDesktop : [1000,4], //4 items between 1000px and 901px
    itemsDesktopSmall : [900,2], // 2 betweem 900px and 601px
    itemsTablet: [600,2], //2 items between 600 and 0
    itemsMobile : [480, 1] // You got the drill 
    });

    //Testimonial Slide
    testimonials.owlCarousel({
    navigation:false,
    pagination:false,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    autoHeight : true,
    autoPlay:false,
    addClassActive:true
    });
    // Course Testimonial Slide 
    coursetestimonials.owlCarousel({

    navigation:false,
    pagination: true,
    slideSpeed : 1000,
    paginationSpeed : 400,
    autoPlay:false,
    touchDrag:false,
    singleItem : true,
    autoHeight : true,
    });  
    // Commit Slide 
    commitslider.owlCarousel({
    
    navigation:false,
    pagination:true,
    slideSpeed : 5000,
    paginationSpeed : 500,
    singleItem : true,
    autoHeight : true,
    autoPlay:true,
    stopOnHover:true,
    addClassActive:true
    }); 
   // Budgetng Slide 
    budgetingslider.owlCarousel({
    
    navigation:true,
    pagination:true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    autoHeight : true,
    autoPlay:true,
    addClassActive:true
    });      


        var owl = $("#testimonialslide").data('owlCarousel');

    // Custom testimonial Slider
    $('.slide1').click(function(){
        owl.goTo(0)
    });
     $('.slide2').click(function(){
        owl.goTo(1)
    });
      $('.slide3').click(function(){
        owl.goTo(2)
    });
      $('.paginglink').click(function(){
       $(this).addClass('active').siblings('.paginglink').removeClass('active');
      })
    // Custom Navigation 
     $(".nextslide").click(function(){
        homeslider.trigger('owl.next');
    })
    $(".prevslide").click(function(){
       homeslider.trigger('owl.prev');
    })

    // sidr (mobile slide nav) //
    $('.btn-navbar, .respnav2').sidr({
    name: 'respNav',
    source: '.navbar-collapse',
    side: 'left',
    forceclick:true
    });
    $('ul.sidr-class-dropdown-menu').hide()
    $('a.sidr-class-dropdown-toggle').click(function(e) {
    $(this).toggleClass('active');
    $(this).next().slideToggle();
    e.preventDefault();
    e.stopPropagation()
    });
    // close sidr menu if clicked outside //
    $(document).bind("click", function () {
    $.sidr('close', 'respNav');
    }); 
    // close sidr via button//
    $('a.closenav').on('touchstart click', function(e){
    e.stopPropagation(); e.preventDefault();
    $.sidr('close', 'respNav');
    });
    // close sidr menu on resize
     $(window).resize(function () {
    $.sidr('close', 'respNav');

    });

     // Landing Pages clickable area //

     $(".landingdeal .relatedcourse").click(function() {
            window.location = $(this).find("a").attr("href"); 
            return false;
    });
     // Active class on calculators panel //
        $('.nutrition-calculators .panel').on('show.bs.collapse', function () {
         $(this).addClass('active');
    });

    $('.nutrition-calculators .panel').on('hide.bs.collapse', function () {
         $(this).removeClass('active');
    });
     // Select Box for Mobile (Voucher Redemption Indexes)//
     // Create the dropdown base
            //$('<select class="visible-xs redeemchoice" />').appendTo("body#en.default .flagcontact");

            // Create default option "Go to..."
            //$("<option />", {
            //   "selected": "selected",
             //  "value"   : "",
              // "text"    : "Voucher Redemption"
           // }).appendTo(".flagcontact select");

            // Populate dropdown with menu items
           // $("ul.redemptionselect li a").each(function() {
           //  var el = $(this);
           //  $("<option />", {
           //      "value"   : el.attr("href"),
             //    "text"    : el.text()
           //  }).appendTo(".flagcontact select");
           // });
           // $(".flagcontact select").change(function() {
          //   window.location = $(this).find("option:selected").val();
          //  });

    //  ReadMore Toggle
   
        $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("Read More")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Read More")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Read More")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Read More")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Read More")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("Read Less")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Read Less")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Read Less")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Read Less")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Read Less")
        });
                  $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Read More")
        });
                $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Read More")
        });
                $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Read More")
        });
                $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Read More")
        });
                $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Read More")
        }); 
               $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Read More")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Read Less")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Read Less")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Read Less")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Read Less")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Read Less")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Read Less")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Read Less")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Read Less")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Read Less")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Read Less")
        });                
    
    //Spanish 
            if($('body#es').length){
        $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("Más información")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Más información")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Más información")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Más información")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Más información")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("Menos información")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Menos información")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Menos información")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Menos información")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Menos información")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Más información")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Más información")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Más información")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Más información")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Más información")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Más información")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Más información")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Menos información")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Menos información")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Menos información")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Menos información")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Menos información")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Menos información")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Menos información")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Menos información")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Menos información")
        });   
        }   
        
        if($('body#pt').length){
              $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("Mais informações.")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Mais informação")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Mais informação")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Mais informação")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Mais informação")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("Menos informação")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Menos informação")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Menos informação")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Menos informação")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Menos informação")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Mais informação")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Mais informação")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Mais informação")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Mais informação")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Mais informação")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Mais informação")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Mais informação")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Menos información")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Menos informação")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Menos informação")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Menos informação")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Menos informação")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Menos informação")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Menos informação")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Menos informação")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Menos informação")
        });   
        }
        //French 
            if($('body#fr').length){
        $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("Plus")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Plus")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Plus")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Plus")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Plus")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("Moins")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Moins")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Moins")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Moins")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Moins")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Plus")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Plus")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Plus")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Plus")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Plus")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Plus")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Plus")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Moins")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Moins")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Moins")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Moins")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Moins")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Moins")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Moins")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Moins")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Moins")
        });   
        }             
             // German//
             if($('body#de').length){
        $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("Mehr")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Mehr")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Mehr")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Mehr")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Mehr")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("Weniger")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Weniger")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Weniger")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Weniger")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Weniger")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Mehr")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Mehr")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Mehr")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Mehr")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Mehr")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Mehr")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Mehr")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Weniger")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Weniger")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Weniger")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Weniger")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Weniger")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Weniger")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Weniger")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Weniger")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Weniger")
        });   
        }      
            // Japanese

            if($('body#jp').length){
        $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("もっと読む")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("もっと読む")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("もっと読む")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("もっと読む")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("もっと読む")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("閉じる")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("閉じる")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("閉じる")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("閉じる")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("閉じる")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("もっと読む")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("もっと読む")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("もっと読む")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("もっと読む")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("もっと読む")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("もっと読む")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("もっと読む")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("閉じる")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("閉じる")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("閉じる")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("閉じる")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("閉じる")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("閉じる")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("閉じる")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("閉じる")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("閉じる")
        });   
        }      
        //Portuguese
            if($('body#pt').length){
         $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("Mais informações.")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Mais informação")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Mais informação")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Mais informação")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Mais informação")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("Menos informação")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Menos informação")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Menos informação")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Menos informação")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Menos informação")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Mais informação")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Mais informação")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Mais informação")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Mais informação")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Mais informação")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Mais informação")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Mais informação")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Menos información")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Menos informação")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Menos informação")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Menos informação")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Menos informação")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Menos informação")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Menos informação")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Menos informação")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Menos informação")
        });   
        }   

        // Italian //
            if($('body#it').length){
        $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("Leggi di Più")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Leggi di Più")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Leggi di Più")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Leggi di Più")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Leggi di Più")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("Meno")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Meno")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Meno")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Meno")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Meno")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Leggi di Più")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Leggi di Più")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Leggi di Più")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Leggi di Più")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Leggi di Più")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Leggi di Più")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("Leggi di Più")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("Meno")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("Meno")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("Meno")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("Meno")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("Meno")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("Meno")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("Meno")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("Meno")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("Meno")
        }); 
            }
        // Arabic //
            if($('body#ar').length){
        $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("اقرأ المزيد")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("اقرأ المزيد")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("اقرأ المزيد")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("اقرأ المزيد")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("اقرأ المزيد")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("أقل")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("أقل")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("أقل")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("أقل")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("أقل")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("اقرأ المزيد")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("اقرأ المزيد")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("اقرأ المزيد")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("اقرأ المزيد")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("اقرأ المزيد")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("اقرأ المزيد")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("اقرأ المزيد")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("أقل")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("أقل")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("أقل")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("أقل")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("أقل")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("أقل")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("أقل")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("أقل")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("أقل")
        }); 
                

            }
        // Chinese //
            if($('body#cn').length){
        $('#morecontent').on('hidden.bs.collapse', function () {
             $('a.readmore').html("阅读更多")
        });
        $('#morecontent1').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("阅读更多")
        });
        $('#morecontent2').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("阅读更多")
        });
        $('#morecontent3').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("阅读更多")
        });
        $('#morecontent4').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("阅读更多")
        });
        $('#morecontent').on('shown.bs.collapse', function () {
             $('a.readmore').html("阅读更少")
        });
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("阅读更少")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("阅读更少")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("阅读更少")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("阅读更少")
        });
             $('#morecontent10').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("阅读更多")
        });
             $('#morecontent11').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("阅读更多")
        });
             $('#morecontent12').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("阅读更多")
        });
              $('#morecontent13').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("阅读更多")
        });
              $('#morecontent14').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("阅读更多")
        }); 
             $('#morecontent15').on('hidden.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("阅读更多")
        });        
         $('#morecontent1').on('shown.bs.collapse', function () {
             $('a[href="#morecontent1"]').html("阅读更多")
        });
          $('#morecontent2').on('shown.bs.collapse', function () {
             $('a[href="#morecontent2"]').html("阅读更少")
        });
           $('#morecontent3').on('shown.bs.collapse', function () {
             $('a[href="#morecontent3"]').html("阅读更少")
        });
            $('#morecontent4').on('shown.bs.collapse', function () {
             $('a[href="#morecontent4"]').html("阅读更少")
        });
            $('#morecontent10').on('shown.bs.collapse', function () {
             $('a[href="#morecontent10"]').html("阅读更少")
        });
            $('#morecontent11').on('shown.bs.collapse', function () {
             $('a[href="#morecontent11"]').html("阅读更少")
        });
            $('#morecontent12').on('shown.bs.collapse', function () {
             $('a[href="#morecontent12"]').html("阅读更少")
        });
            $('#morecontent13').on('shown.bs.collapse', function () {
             $('a[href="#morecontent13"]').html("阅读更少")
        });
                $('#morecontent14').on('shown.bs.collapse', function () {
             $('a[href="#morecontent14"]').html("阅读更少")
        });
                $('#morecontent15').on('shown.bs.collapse', function () {
             $('a[href="#morecontent15"]').html("阅读更少")
        }); 
            }


        //
        $('li a.sidr-class-btn:nth-child(2)').addClass('loginto');
        // Read More otification //
        $('#giftnotification').on('hidden.bs.collapse', function () {
             $('.giftnotice a.btn').html("Click Here");
        });
             $('#giftnotification').on('shown.bs.collapse', function () {
             $('.giftnotice a.btn').html("Got it - Thanks")
        });
            //Spanish
        $('body#es #giftnotification').on('hidden.bs.collapse', function () {
             $('body#es .giftnotice a.btn').html("Click Aqui");
        });
             $('body#es #giftnotification').on('shown.bs.collapse', function () {
             $('body#es .giftnotice a.btn').html("Entendido - Gracias")
        });   
            //German
        $('body#de #giftnotification').on('hidden.bs.collapse', function () {
             $('body#de .giftnotice a.btn').html("Bitte hier klicken");
        });
             $('body#de #giftnotification').on('shown.bs.collapse', function () {
             $('body#de .giftnotice a.btn').html("Verstanden - Danke")
        });  
            //French
        $('body#fr #giftnotification').on('hidden.bs.collapse', function () {
             $('body#fr .giftnotice a.btn').html("Cliquez ici");
        });
             $('body#fr #giftnotification').on('shown.bs.collapse', function () {
             $('body#fr .giftnotice a.btn').html("Compris - Merci")
        });                                     
   // Scroll to #
   $(function() {
        $('a.testimoniallink, a.schedules, a.graduates, a.innerlink, .faqlist a, a.cpdtext, a.available-courseslink').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top-133
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
        });
    }); 




            
         $('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });

        // Landing Page Form //

    // Change Behaviour of Landing Page Tabs on Mobile

        $('.tablanding .nav a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
        })  
    
    $('.tablanding a.tabscroll').on('click', function (e) {
        var href = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(href).offset().top
        }, 'slow');
        e.preventDefault();
    });
    /* Add nofollow to member logins links */

    $('body.lessonview a[href*=".pdf"]').attr('rel','nofollow');

    /* Member Login Contact Panel */
    
    $('#loginsupport.stickyform h5').on('click', function (){
        $('#loginsupport.stickyform').toggleClass("open")

    });


});// End document.ready


function validation(form) {
  
      
if(form.first_name.value == '') {

alert('Please enter your first name');
form.first_name.focus();
return false;
}


if(form.last_name.value == '') {

alert('Please enter your last name');
form.last_name.focus();
return false;
}

if(form.email.value == '') {

alert('Please enter your email address');
form.email.focus();
return false;
}

if(form.phone.value == '') {

alert('Please enter your phone number');
form.phone.focus();
return false;
}

if(form.country.value == 'select') {

alert('Please enter your country');
form.country.focus();
return false;
}

return true;
}
/* Sticky Sidebar */

$('#sidebar').affix({
      offset: {
        top: 100
      }
});
$('body').scrollspy({
    target: '#stickyleft', 
    offset:140
});




/*$('#bottomform').submit(function( event ) {
   var fname =$('#bottomfullname').val();
    var email =$('#bottomemail').val();
    var tel =$('#bottomtel_number').val();
    //alert(tel);
    var error='';
    console.log(fname+email+tel);
     var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(email==null || email==""||tel==null || tel==""){
        $( ".quicksignup" ).append( "<p>Please Fill all Fields</p>" );
        event.preventDefault();
        return false;
    }
    if( /\s/g.test(fname)==false){
        $( ".quicksignup" ).append( "<p>Please enter your full name</p>" );
         event.preventDefault();
        return false;
    }
     if(tel.trim() == ''){
        $( ".quicksignup" ).append( "<p>Please enter a phone number</p>" );
        event.preventDefault();
        return false;
    }
     if(re.test(email)==false){
        $( ".quicksignup" ).append( "<p>Please enter a email address</p>" );
        event.preventDefault();
        return false;
    }
    //event.preventDefault();
        return true;
    

});*/
 wow=new WOW().init();



//slider
$('.slidep').slick({
    infinite: true,

slidesToShow: 4,
slidesToScroll: 4,
autoplay: true,
dots:true,
autoplaySpeed: 2000,
responsive: [{
  breakpoint: 1200,
  settings: {
      
    
      slidesToShow: 3
  }
},
{
breakpoint: 640,
  settings: {
     
      slidesToShow: 3
  }
},

{
  breakpoint: 480,
  settings: {
      
      slidesToShow: 2
  }
}
]
});

$('.slidep1').slick({
  infinite: true,

slidesToShow: 4,
slidesToScroll: 4,
autoplay: true,
dots:true,
arrows:false,
autoplaySpeed: 2000,
responsive: [{
breakpoint: 1200,
settings: {
    
  
    slidesToShow: 3
}
},
{
breakpoint: 640,
settings: {
   
    slidesToShow: 3
}
},

{
breakpoint: 480,
settings: {
    
    slidesToShow: 2
}
}
]
});


$('.pcontainer').slick({
  infinite: true,

slidesToShow: 7,
slidesToScroll: 4,

dots:false,
arrows:true,
autoplaySpeed: 2000,
responsive: [{
breakpoint: 1200,
settings: {
    
  
    slidesToShow: 3
}
},
{
breakpoint: 640,
settings: {
   
    slidesToShow: 3
}
},

{
breakpoint: 480,
settings: {
    
    slidesToShow: 2
}
}
]
});


$('.testimonial-slider').slick({
  infinite: true,

slidesToShow: 3,
slidesToScroll: 1,
autoplay: true,
dots:true,
arrows:true,
autoplaySpeed: 2000,
centerMode:true,
dots:false,
responsive: [{
breakpoint: 1200,
settings: {
    
  
    slidesToShow: 2
}
},
{
breakpoint: 640,
settings: {
   
    slidesToShow: 1
}
},

{
breakpoint: 480,
settings: {
    
    slidesToShow: 1,
    centerMode:false
}
}
]
});



$('.quote-slide').slick({
         

    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    dots:true,
    autoplaySpeed: 2000,
  });

  //technical slider
  $('.technical-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    dots:false,
    autoplaySpeed: 2000,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
  ]
  });




//scroll function
$(window).scroll(function() {
  
    $(".navbar").css({"width":"100%","background":"white", "position":"fixed","top":"0","z-index":"6"});
    $(".navbar").attr({"data-wow-offset":"0","data-wow-delay":"200ms"});
    $( ".navbar" ).addClass( "animated fadeInDown" );
    $(".logo").css("padding-top","0px");
    var $a=$(window).scrollTop();
    if($a==0){

      $(".navbar").css({"width":"100%",
      "position":"relative"});
  
      $(".logo").css("padding-top","0px");

      $( ".navbar" ).removeClass( "animated fadeInDown" );
    }
  

  });

  $(".navbar.navbar-dark .navbar-toggler-icon").click(function(){
    if ($('.navbar').css('height') == '70px'){
      $(".navbar").css("height","auto");
    }
    else if ($('.navbar').css('height') == 'auto'){
      $(".navbar").css("height","70px");
    }
  });


    

 
const init = {
   
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        dots:false,
        autoplaySpeed: 2000,
  
        centerMode: true,
        responsive: [
        {
        breakpoint: 576,
          settings: {
             
              slidesToShow: 1
          }
        }
        ]
  };
  
  $(() => {
    const win = $(window);
    const slider = $(".client-slide");
  
    win.on("load resize", () => {
      if (win.width() < 992) {
        slider.not(".slick-initialized").slick(init);
      } else if (slider.hasClass("slick-initialized")) {
        window.location.reload(); 
        slider.slick("unslick");
      }
     
    });
  });
  
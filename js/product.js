
	
	




//-->

$(function(){


$('#home_banner_slider').slick({
		dots: false,
		dotsClass: 'banner-dots',
	   customPaging: function(slider, i) {
    return '<a href="#" data-role="none">' + (i + 1) + '</a>';
	},
		autoplay: false,
		arrows: true,
		prevArrow: '<span href="" data-role="none" class="slider_prev">Previous</span>',
		nextArrow: '<span href="" data-role="none" class="slider_next">Next</span>',
		infinite: true,
		speed: 1500,
		fade: true,
		cssEase: 'linear',
		pauseOnHover: false,
		//pauseOnDotsHover: true,
		slide: 'li',
		autoplaySpeed:8000
	});	










$('#home_banner_slider2').slick({
		dots: false,
		dotsClass: 'banner-dots',
	   customPaging: function(slider, i) {
    return '<a href="#" data-role="none">' + (i + 1) + '</a>';
	},
		autoplay: true,
		arrows: true,
		prevArrow: '<span href="" data-role="none" class="slider_prev">Previous</span>',
		nextArrow: '<span href="" data-role="none" class="slider_next">Next</span>',
		infinite: true,
		speed: 1500,
		fade: true,
		cssEase: 'linear',
		pauseOnHover: false,
		//pauseOnDotsHover: true,
		slide: 'li',
		autoplaySpeed:8000
});	






		




    $('.culture_slide').slick({
 		arrows: true,
		prevArrow: '<span href="" data-role="none" class="cat_prev">Previous</span>',
		nextArrow: '<span href="" data-role="none" class="cat_next">Next</span>',
	dots: false,
  slidesToShow: 1,
  centerMode: true,
  centerPadding: '454px',
    responsive: [
    {
      breakpoint: 1180,
      settings: {
      centerPadding: '314px',
		  slidesToShow: 1,
      }
    },
	{
      breakpoint: 800,
      settings: {
  centerMode: false,
  centerPadding: '0px',
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$('.culture_slide2').slick({
 		arrows: true,
		prevArrow: '<span href="" data-role="none" class="cat_prev2">Previous</span>',
		nextArrow: '<span href="" data-role="none" class="cat_next2">Next</span>',
	dots: false,
   slidesToShow: 1,
  slidesToScroll: 0,
  centerMode: true,
  centerPadding: '354px',
   responsive: [
    {
      breakpoint: 1180,
      settings: {
        centerPadding: '314px',
		slidesToShow: 1,
      }
    },
	{
      breakpoint: 800,
      settings: {
  centerMode: false,
  centerPadding: '0px',
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  
});

$('.news_slider').slick({
		dots: false,
		autoplay: false,
		arrows: true,
		prevArrow: '<span href="" data-role="none" class="slider_prev2">Previous</span>',
		nextArrow: '<span href="" data-role="none" class="slider_next2">Next</span>',
		infinite: true,
		speed:500,
		fade: false,
		cssEase: 'linear',
		pauseOnHover: false,
		slide: 'li',
		autoplaySpeed:5000,
		slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1080,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
	{
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 680,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
	});
	
$('.block3_features').slick({
		dots: false,
		autoplay: false,
		arrows: true,
		prevArrow: '<span href="" data-role="none" class="slider_prev_features">Previous</span>',
		nextArrow: '<span href="" data-role="none" class="slider_next_features">Next</span>',
		infinite: true,
		speed:500,
		fade: false,
		cssEase: 'linear',
		pauseOnHover: false,
		slide: 'li',
		autoplaySpeed:5000,
		slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1080,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
	{
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 680,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
	});
	
		
	$('.mobile_slider').slick({
		dots: false,
		autoplay: false,
		arrows: true,
		prevArrow: '<span href="" data-role="none" class="slider_prev">Previous</span>',
		nextArrow: '<span href="" data-role="none" class="slider_next">Next</span>',
		infinite: true,
		speed:500,
		fade: false,
		cssEase: 'linear',
		pauseOnHover: false,
		slide: 'li'


	});
	
$(".news_head_box h3").click(function(){
  if ( $(".news_head_box ul").is( ':visible' ) ) {
      $(".news_head_box ul").slideToggle( 600, function() {
          $(".news_bg").toggleClass('news-active');
          $(".news_block").toggleClass('active');
      });
  } else {
      $(".news_block").toggleClass('active');
      $(".news_bg").toggleClass('news-active');
      $(".news_head_box ul").slideToggle();
  }

});

$(".news-overlay, .news_head_box ul li").click(function(){
  $(".news_head_box ul").slideToggle( 600, function() {
      $(".news_bg").removeClass('news-active');
      $(".news_block").removeClass('active');
  });
});

})

$(function(){



$(window).scroll(function() {})
$('.product_srlink').hide();
$(window).scroll(function() {
   if($(window).scrollTop() > $(window).height()/3) {
      // alert("bottom!");
      $('.product_srlink').fadeIn();
   }else{
	   $('.product_srlink').fadeOut();
	   }
})

})



    // handle links with @href started with '#' only
//$(document).on('click', 'a[href^="#"]', function(e) {
	//alert(0);
	
	
	$(document).on('click', 'a.srlink', function(e) {
    // target element id
	$(".product_srlink ul li a").removeClass("active");
    var id = $(this).attr('href');
	$(this).addClass("active");
	

    
    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
		$(".product_srlink ul li").addClass('active');
		
    }
    
    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();
    
    // top position relative to the document
    var pos = $id.offset().top;
    
    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
	//$("a.srlink").removeClass("active");
});



			
			
$(function(){

$('.tab .tablinks').bind('click',function(){
setTimeout(function(){
		$('.culture_slide').slick('setPosition');
		$('.culture_slide2').slick('setPosition');
		},200)
})

})

		 
		 

	$(function(){
  
  $('li.dropdown > a').on('click',function(event){
    
    event.preventDefault()
    
    $(this).parent().find('ul').first().toggle(300);
    
    $(this).parent().siblings().find('ul').hide(200);
    
    //Hide menu when clicked outside
    $(this).parent().find('ul').mouseleave(function(){  
      var thisUI = $(this);
      $('html').click(function(){
        thisUI.hide();
        $('html').unbind('click');
      });
    });
    
    
  });
  

 
  
});		   
		


  
			   

		
		
		










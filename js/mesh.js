jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

  //* Plugin for translate on element reaching top of browser
  //* Sidr?
  //* Contact form
  //* Microinterations (css)

  //Slick slider
  //$(document).ready(function(){
      $('.carousel.home').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		autoplay:true,
		cssEase: 'linear',
		arrows:false,
		pauseOnHover: true,
		pauseOnFocus: true,
		pauseOnDots: true
      });

      var  tenants = $('.carousel.tenants');
      tenants.slick({
		dots: false,
		slidesToShow: 3,
		slidesToMove:1,
		//responsive:true,
		infinite: false,
		speed: 500,
		draggable:true,
		//fade: false,
		autoplay: false,
		cssEase: 'linear',
		arrows:true,
		//pauseOnHover: true,
		//pauseOnFocus: true,
		//pauseOnDots: true,
		variableWidth: true,
		swipeToSlide: true,
		swipe:true,
		//respondTo: 'slider',
		 responsive: [
		    {
		      breakpoint: 1200,
		      settings: {
		        arrows: true,
		        slidesToShow: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: true,
		        slidesToShow: 1
		      }
		    }
		  ]
      });

      // console.log(slick.currentTarget.slick);
      // $(window).on('load', function (slick){
      // 	console.log(slick.currentTarget.slick);
      // });
      
      tenants.on('load', function(slick) {
		tenants.slick('setPosition');
		   console.log(slick.currentTarget.slick);
		  var count = slick.currentTarget.slick.slideCount;
		  var show = slick.currentTarget.slick.options.slidesToShow;
		  console.log(count);
		  console.log(show);
		  if (show >= count) {
		    tenants.slick('unslick');
		  }

});

//$('body').css('display', 'none');

$('body').fadeIn(1000);

$(function(){
    $("body").delay(500).fadeIn(1000);
    $(window).on('beforeload', function(){
    	$("body").fadeIn(1000);
    });
    $(window).on('beforeunload', function(){
        $("body").fadeOut(1000);

    });
});

//Add animated class to property listings on landing pages on specific intervals
// var interval = setInterval(function(){
//     if($('.listing-row:not(.animated)').size() == 0){
//       clearInterval(interval);
//     }else{
//       $('.listing-row:not(.animated)').first().addClass('animated fadeInDown');
//     }
//   }, 1000);

$('.listing-row').each(function(i, el){
	console.log(i);
	i++;
	if(i > 1){
		window.setTimeout(function(){
		$(el).removeClass('hide').addClass('fadeInDown animated');
		}, 200 * i);
	}
	});
// $('a').click(function(event) {

// event.preventDefault();

// newLocation = this.href;

// $('body').fadeOut(1000, newpage);

// });



// function newpage() {

// window.location = newLocation;

// }

//});


  //     $('.carousel.tenants').slick({
		// dots: false,
		// slidesToShow: 4,
		// slidesToMove:1,
		// responsive:false,
		// infinite: true,
		// speed: 500,
		// //fade: false,
		// autoplay: false,
		// cssEase: 'linear',
		// arrows:true,
		// //pauseOnHover: true,
		// //pauseOnFocus: true,
		// //pauseOnDots: true,
		// variableWidth: true,
		// swipeToSlide: true,
		// swipe:true
  //     });
   // });

});

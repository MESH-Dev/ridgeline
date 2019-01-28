jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

  //* Plugin for translate on element reaching top of browser
  //* Sidr?
  //* Contact form
  //* Microinterations (css)

  //Slick slider
  //Get our svg for our arrow:
   //$directory = $dir;
    //$imgs = '/img/Ridgeline_Arrow.svg';
    //$arrow  = $directory+$imgs;
    $the_arrow = '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 183.2"><defs><style>.cls-1{fill:#4a9b2d;}</style></defs><title>Ridgeline_Arrow</title><path class="cls-1" d="M8.82,172c10-2.13,19.79-4.52,29.28-7.19,26.25-7.39,50.06-16.93,68.63-28.92,14-9.06,25.07-19.52,31.9-31.52a57.59,57.59,0,0,0,7.76-28.89V12.42a57.92,57.92,0,0,1-9.32,31.5c-6.9,10.93-17.36,20.54-30.38,28.94C85.82,86.32,58.33,96.68,28.23,104.38q-9.56,2.45-19.41,4.54Z"/><path class="cls-1" d="M291.18,172c-10-2.13-19.79-4.52-29.28-7.19-26.25-7.39-50.06-16.93-68.63-28.92-14-9.06-25.07-19.52-31.9-31.52a57.59,57.59,0,0,1-7.76-28.89V12.42a57.92,57.92,0,0,0,9.32,31.5c6.9,10.93,17.36,20.54,30.38,28.94,20.87,13.46,48.36,23.82,78.46,31.52q9.56,2.45,19.41,4.54Z"/></svg>'
    $arrow = $arrow_clean;
    //console.log($arrow);
    //$arrow_icon = file_get_contents($arrow);
    //$arrow_clean = str_replace(array("\r\n", "\r", "\n"), '',$arrow_icon);
function file_get_contents(filename) {
	fetch(filename).then((resp) => resp.text()).then(function(data) {
		console.log(data);
		return data;
	});
}



	// var $pointer = file_get_contents($arrow);
	// console.log($pointer);
	//.console.log(file_get_contents($arrow));

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
		nextArrow: '<button type="img" id="slick-pointer" class="slick-next appended">'+$arrow+'</button>',
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

//document.getElementById("slick-pointer").innerHTML = file_get_contents($arrow);

//$('body').css('display', 'none');

$('body').fadeIn(250);

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

$('a.pulser').on('mouseover',function(){
	$(this).addClass('pulse animated');
	$(this).on('mouseout', function(){
		$(this).removeClass('pulse');
	});
});

//Force divs in homepage grid to be square
//Setup variables to hold our sizes
var gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7, $wW, $lr_h;

//Grab the width of each element
function gi_resize(){
  gi2 = $('.grid-item-width2 ').width();
  gi3 = $('.grid-item-width3 ').width();
  //console.log(gi3);
  gi4 = $('.grid-item-width4 ').width();
  gi5 = $('.grid-item-width5 ').width();
  gi6 = $('.grid-item-width6 ').width();
  gi7 = $('.grid-item-width7 ').width();
  cp4 = $('.columns-4').width();
  cp5 = $('.columns-5').width();
  cp6 =  $('.columns-6.eq ').width();
  //console.log(cp6);
  //cp6_alt = $('.columns-6')
  cp7 = $('.columns-7.trip').width();
  $lr_h = $('.listing-row').height();
  console.log($lr_h);
  //$wW = $(window).width();


  //return gi2, gi3, gi4;
}
//Run the function above at document ready and on a window resize event
 $(document).ready(gi_resize(gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7, $wW, $lr_h));
 $(window).resize(gi_resize(gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7, $wW, $lr_h));

//Apply our widths to the height of selected elements either on load, or on resize
function _resize(){
  gi_resize(gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7, $wW, $lr_h);
   $(window).resize(gi_resize(gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7,$wW, $lr_h));

 //  console.log("Width 2: "+gi2);
	// console.log("Width 3: "+gi3);
	//  console.log("Width 4: "+gi4);
  $('.grid-item-width2').css({height: (gi2)});
  $('.grid-item-width2.nest').css({height: (gi2*2)});
  $('.grid-item-width2.nest .nested').css({height: gi2});
  $('.grid-item-width3').css({height: gi3});
  $('.grid-item-width4').css({height: gi4});
  $('.grid-item-width5').css({height: gi5})
  $('.grid-item-width6').css({height: (gi6*.5)});
  $('.width6-diamond').css({height: (gi6*0.4)});
  $('.columns-4.child-links').css({height:cp4});
  $('.columns-6.promo').css({height: (cp6*.5)});
  $('.columns-6.cpromo').css({height: (cp6*.66)});
  //console.log(cp6*.66);
  $('.columns-6 .width6-diamond').css({height: (cp6*0.4)});
  $('.columns-5.event-feed').css({height: (cp5)});
  $('.columns-7.trip').css({height: cp5});
  $('.grid-item-width6.nest').css({height: gi2});
  $('.grid-item-width6.nest .nested').css({height: gi2});
  $('.grid-item-width7').css({height: (gi5)});
  $('.sidebar-io').css({height:cp4});
  $('.listing-row .img').css({height:$lr_h});
  console.log($wW);
}

//Run the function on load & on resize
_resize();
$(window).resize(_resize);

$('.the-content').find('img').unwrap('p');

$l_clk=0;
$('.section-title-wrapper .trigger').each(function(){
      $(this).click(function(){
      $l_clk++;

      console.log('clicked');
      //$(this).closest('.row.show-listing').addClass('fast');
      if($l_clk == 1){
        $(this).css({'transform':'rotate(180deg)'});
        $(this).parent().parent().parent().find('.show-listing').slideDown(400);
      }else{
        $(this).css({'transform':'rotate(0)'});
        $(this).parent().parent().parent().find('.show-listing').slideUp(400);

        $l_clk = 0;
      }
    });
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

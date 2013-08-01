Modernizr.load({
 test: Modernizr.input.required && Modernizr.formvalidation,
 nope: 'http://localhost/gitxamp/js/vendor/jquery.animate-shadow-min.js',
   callback: function (url, result, key) {
   // alert(url);
  }
});
$('.thumbnail-cap').hcaptions({
  effect: "fade"
 
});
$('#pro').click(function(e) {
 var pWidth = jQuery(window).width();
	  var eWidth = $('.box').width();
	  var lefto =  parseInt((pWidth / 2) - (eWidth / 2)) + 'px';	
var $target = $(this).data('info');


$($target).appendTo(".box");
$($target).css({ 'overflow':'hidden', 'display': 'block',' padding':'2px' });        
	//$('.box').animate().css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px')

  $('.box').animate({"left":lefto},200);
  
//$(".collapse2").collapse();	

	
	e.preventDefault();
	
});

function centerMe(element) {
    //pass element name to be centered on screen
    var pWidth = jQuery(window).width();
    var pTop = jQuery(window).scrollTop()
    var eWidth = jQuery(element).width()
    jQuery(element).css('top', pTop + 100 + 'px')
    jQuery(element).css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px')
}
$('.btn-infvo').click(function(e) {
	 var pWidth = jQuery(window).width();
	  var eWidth = $('.box').width();
	  var lefto =  parseInt((pWidth / 2) - (eWidth / 2)) + 'px';
	//$('.box').animate().css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px')

  $('.box').animate({"left":lefto},200);
	e.preventDefault();
	
});

$(function menuswipe() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});




$('.tooltp').tooltip();
$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390}); 
// $(function(){
	//	$('.jumbotron').css({'height':($(window).height())+'px'});
	//	$(window).resize(function(){
	//	$('.jumbotron').css({'height':($(window).height())+'px'});
	//	});
//	});
 
 $('.coloranim').hover(
    function() {
      $(this).stop().animate({"opacity": "0.5","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "50");
    },
    function() {
      $(this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "50");
  }); 
   $('.pricemain').hover(
    function() {
   $(this).stop().animate({boxShadow: '0 0 20px rgb(223, 223, 223)'},0.2).animate({'margin-top': '-10px'}, 'normal');
	


    },
    function() {
		//$(this).animate({boxShadow: '0 0 0px'}, 200);
      $(this).stop().animate({'margin-top': '0'}, 'fast').animate({boxShadow: '0 0 0px rgb(223, 223, 223)'}, 'fast'); 
	
  });
$('.thumbnail').css('background-image', 'url(img/zoom.png)');  
$(".thumbnail").hover(
function() {
	$("img.thumb1").removeClass('loader');
$("img.thumb1", this).stop().animate({"opacity": "0.2","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "fast");


},
function() {
$("img.thumb1", this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "50");

});




if( !Modernizr.input.required && !Modernizr.formvalidation ){  
  //alert('no support');
};  
if(!Modernizr.csstransitions) { 
// Test if CSS transitions are supported
//alert('no support');
$('.pulse').hover(
    function() {
 $(this).stop().animate({'margin-top': '-10px'}, 'fast');
    },
    function() {
 $(this).stop().animate({'margin-top': '0'}, 'fast');
  });
 $(function() {

 	$(".thumbnail").hover(
function() {
$("img.thumb1", this).stop().animate({"opacity": "0.5","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "50");
//$("img.thumb2", this).stop().animate({"opacity": "0","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "50");
},
function() {
$("img.thumb1", this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "50");
//$("img.thumb2", this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "50");
});

//$(".desktop").css({ opacity: 0.0 }).animate( {opacity:1}, 1000);
//$("menu-arrowx").addClass(".ie10");
  	
        
    //moveCloud5();

});
    }
	


      //Do processing of click event here for every element except with id menu_content
$(window).resize(function() {
  //resize just happened, pixels changed
  $('#menu-arrowx').css("visibility", "hidden");
});

$("body").on("activate", function(e)
{
	
	
	$('#menu-arrowx').css("visibility", "visible");
  var $item = $(e.target);
  

    $(".seven li").toggleClass("bounce");
    $(".seven li").siblings().removeClass("bounce");


    if (e.originalEvent === undefined) {
       // alert('not human')
	   	$item.addClass('animated');
		$item.addClass('bounce');
		var $item2 =$item.offset().left + $item.width() / 2 - 35 - $('#navbar').offset().left;

//alert(e.target.id);
$("#menu-arrowx").animate({"left":$item2}, 100);

		
		
		
		
    } else {
       // alert(' human');
    }


	

   
});






$('body').on('activate', function (e) {
  var $item = $(e.target);

 
 



 
 





});








		
	  
		


/*---------  Screenshots Hover -------*/

$(document).ready(function(){

 $(function() {
      $('#slides').slidesjs({
        width: 960,
        height: 500,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });

$(".collapse").collapse();
$("img.b").hover(
function() {
$(this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "800");
},
function() {
$(this).stop().animate({"opacity": "0","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "fast");
});


function initialize() {
  var myLatlng = new google.maps.LatLng(59.32522, 18.07002);
  var mapOptions = {
	  scrollwheel: false,
	  scaleControl: false,
    zoom: 15,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);


});



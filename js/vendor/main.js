


$('.tooltp').tooltip();
$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390}); 
// $(function(){
	//	$('.jumbotron').css({'height':($(window).height())+'px'});
	//	$(window).resize(function(){
	//	$('.jumbotron').css({'height':($(window).height())+'px'});
	//	});
//	});
 $('.work .span4 img').hover(
    function() {
    $(this).stop().animate({'margin-top': '-10px'}, 'normal');
    },
    function() {
    $(this).stop().animate({'margin-top': '0'}, 'fast');
  });
$('.rightlink').hover(
    function() {
      $(this).stop().animate({"opacity": "0.5","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "50");
    },
    function() {
      $(this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "50");
  }); 
 $('.coloranim').hover(
    function() {
      $(this).stop().animate({"opacity": "0.5","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "50");
    },
    function() {
      $(this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "50");
  }); 
   $('.pricemain').hover(
    function() {
   $(this).stop().animate({boxShadow: '0 0 20px #646464'},100).animate({'margin-top': '-10px'}, 'normal');
	
//$(this).stop().animate({boxShadow: '0 0 30px'}, 200);
	 // box-shadow: , -20px 0 10px -10px rgba(0, 0, 0, .15);

    },
    function() {
		//$(this).animate({boxShadow: '0 0 0px'}, 200);
      $(this).stop().animate({'margin-top': '0'}, 'fast').animate({boxShadow: '0 0 0px #646464'}, 'fast'); 
	
  });
$('.thumbnail').css('background-image', 'url(img/zoom.png)');  
$(".thumbnail").hover(
function() {
	$("img.thumb1").removeClass('loader');
$("img.thumb1", this).stop().animate({"opacity": "0.4","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "slow");


},
function() {
$("img.thumb1", this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "50");

});

if(!Modernizr.csstransitions) { // Test if CSS transitions are supported

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

$(".desktop").css({ opacity: 0.0 }).animate( {opacity:1}, 1000);
//$("menu-arrowx").addClass(".ie10");
  	
        
    //moveCloud5();

});
    }
	
	

      //Do processing of click event here for every element except with id menu_content


$("body").on("activate", function(e)
{
	
	$('#menu-arrowx').css("visibility", "visible");
  var $item = $(e.target);
	
    if (e.originalEvent === undefined) {
       // alert('not human')
		
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







 $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
	  
 var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
	
    grabCursor: true,
    paginationClickable: true
  })
	  
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

		
	  
		



/*---------  Screenshots Hover -------*/

$(document).ready(function(){
$("img.b").hover(
function() {
$(this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "800");
},
function() {
$(this).stop().animate({"opacity": "0","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "fast");
});

});

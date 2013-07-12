$('.tooltp').tooltip()
 
 
 $('.uplinkten').hover(
    function() {
      $(this).stop().animate({'margin-top': '-10px'}, 'normal');
    },
    function() {
      $(this).stop().animate({'margin-top': '0'}, 'fast');
  });
$('.rightlink').hover(
    function() {
      $(this).stop().animate({'margin-right': '-10px'}, 'normal');
    },
    function() {
      $(this).stop().animate({'margin-right': '0'}, 'fast');
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
      $(this).stop().animate({'margin-top': '0'}, 'fast').animate({boxShadow: '0 0 10px #646464'}, 'fast'); 
	
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
		
		var $item2 =$item.offset().left + $item.width() / 2 - 40 - $('#navbar').offset().left;

//alert(e.target.id);
$("#menu-arrowx").animate({"left":$item2}, 100);
	
		
		
    } else {
       // alert(' human');
    }


	
	

   
});






$('body').on('activate', function (e) {
  var $item = $(e.target);

 
 



 
 





});







$("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
       
        namespace: "large-btns"
        
      });
$(function() {
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
		

		

$('.thumbnail').css('background-image', 'url(/init/img/zoom.png)');

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

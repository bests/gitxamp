<!DOCTYPE html>
<!--[if lt IE 10]> <html class="no-js ie oldie" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--><head>
        <meta charset="utf-8">
       
        <title>waka</title>
     
  
      <link type="text/css" rel="stylesheet" href="css/main.css" /> 
     
        <style>

	.exampleA {
			/* 
			 * Low-res is the original source, which is the default 
			 * Hi-res replaces the browser width, in this case '320px', with the request width
			 */
			font-family: 'image-set( url(-small|-small-2x) 2x high-bandwidth )';
			display:none;
		}


	</style>

     
       
       <link rel="apple-touch-icon" href="ico/apple-touch-icon.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
       <!--[if IE 7]>
    <link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->  

 
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="300">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
 
 
    

                  
     
<section id="overview" class="anchor">

<header>
                
       <div class="home">     <nav id="navbar">
		<ul class="seven nav">
       
			
			<li><a href="#overviewm">Home</a></li>
			<li><a href="#features">Features</a></li>
			<li><a href="#gallery">Gallery</a></li>
            <li><a href="#work">Love</a></li>
            <li><a href="#aboutus">About</a></li>
            <li><a href="#price">Pricing</a></li>
           <li><a href="#contact">Contact</a></li>
			
		</ul>
		
		<a href="#" id="pull"><img src="img/nav-icon@2x.png" width="32" height="32" ></a>
	</nav>              
 </div>  
  </header>
  
  
  <div class="test"></div> 
  
  
  
</section>


<section class="anchor">


<div id="features" class="titlebg"><h2>Features</h2>
      HTML5, built on Bootstrap, very fast.
       </div> 
       
     

 <div class="tick"></div> 
<article id="home_featuresm" class="features">  
  <div class="test"></div>
</article>
</section>



<section  class="anchor">
  
     
<div id="gallery" class="titlebg"><h2>Projects</h2>
      HTML5, built on Bootstrap, very fast.
       </div> 
<div class="tick"></div>
<article id="home_gallery" class="gallery">
  <div class="test"></div>
 
</article>
</section>


<section class="anchor">
  
     
<div id="work" class="titlebg"><h2>What we love..</h2>
      HTML5, built on Bootstrap, very fast.
       </div> 
<div class="tick"></div>
  <article id="home_features" class="work">
<div class="test"></div> 
        <!-- /container -->
</article>
</section>


<section class="anchor"> 
 
 
  
     
<div id="aboutus" class="titlebg"><h2>About us</h2>
      We are a small design company that simply love what we do..
       </div> 


<article id="aboutusl" class="aboutus">
       
 <div class="test"></div>
        
       
</article>
</section>



<section class="anchor">  
    
<div id="price" class="titlebg"><h2>Pricing</h2>
      HTML5, built on Bootstrap, very fast. 
         </div> 
         <div class="tick"></div> 
         
         
<article id="price_features" class="price">
       
      
        <div class="test"></div>
            
      
</article>
</section>




<section class="anchor">

    
     
<div id="contact" class="titlebg"><h2>Contact us</h2>
      HTML5, built on Bootstrap, very fast.
       </div> 
  
  
  
  <div class="tick"></div> 
<article id="home_contact" class="contact">


 <div class="test"></div> 
</article>
</section>


  
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>


 
 
<script type="text/javascript">

<?php foreach($jquery['methods'] as $method_name => $method_function): ?>
	jQuery.validator.addMethod("<?php echo $method_name; ?>", <?php echo $method_function; ?>);
<?php endforeach; ?>

$("#form").validate({

	submitHandler: function(form, e) {
		
		$('.submit').button('loading');
	$.ajax({
            url: "jquery.php",
            type: "POST",
            data: $("#form").serialize(),
            success: function(response) {
               if (response == 'true')
                {
					$('.alert-success').fadeIn(200).show();
					$('.submit').button('reset')
                     $.smoothScroll({
direction: 'top',
scrollTarget: '.alert'
  });
                }
               if (response == 'false')
                {$('.alert-error').fadeIn(200).show();
                   $('.submit').button('reset')
                }
			   if (response == 'falsex')
                {$('.mailrr').fadeIn(200).show();
                   $('.submit').button('reset')
                }
			   
			   },
            error: function() {
                alert('There has been an error, please alert us immediately');
            }
			   
			   
			   
			   
			   
			   
			   
			   
                      
        });
	},

	rules: <?php echo json_encode($jquery['rules']); ?>,
	messages: <?php echo json_encode($jquery['messages']); ?>

});

</script>
    </body>
</html>

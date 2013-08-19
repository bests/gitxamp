<!DOCTYPE html>
<!--[if lt IE 10]> <html class="no-js ie oldie" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--><head>
        <meta charset="utf-8">
       
        <title>waka</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
  
      <link type="text/css" rel="stylesheet" href="css/bootstrap.css" /> 
      <link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.css" /> 
      <link type="text/css" rel="stylesheet" href="css/main.css" /> 
      <link type="text/css" rel="stylesheet" href="css/fontello.css" /> 
       <link type="text/css" rel="stylesheet" href="css/colorbox.css" /> 
        <link type="text/css" rel="stylesheet" href="css/animate.css" /> 
        <link type="text/css" rel="stylesheet" href="css/retina.css" />  
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
	 
   <script type="text/javascript" src="js/vendor/modernizr2.js"></script>
  
   <script type="text/javascript" src="//cdn.jsdelivr.net/foresight.js/2.0.0/foresight.min.js"></script> 
 
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="300">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
 
 
    

                  
     
<section id="overview" class="anchor">

<header class="home"><nav id="navbar">
                
               
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

  </header>
  
  
  <div class="test"></div> 
  
  
  
</section>


<section id="features" class="anchor">


<div class="titlebg"><h2>Features</h2>
      HTML5, built on Bootstrap, very fast.
       </div> 
       
     

 <div class="tick"></div> 
<article id="home_features" class="features">  
 <div class="test"></div>
</article>
</section>



<section id="gallery" class="anchor">
  
     
<div class="titlebg"><h2>Projects</h2>
      HTML5, built on Bootstrap, very fast.
       </div> 

<article id="home_gallery" class="gallery">
  <div class="test"></div>
 
</article>
</section>


<section id="work" class="anchor">
  
     
<div class="titlebg"><h2>What we love..</h2>
      HTML5, built on Bootstrap, very fast.
       </div> 

  <article id="home_features" class="work">
  <div class="test"></div>
        <!-- /container -->
</article>
</section>


<section id="aboutus" class="anchor"> 
 
 
  
     
<div class="titlebg"><h2>About us</h2>
      We are a small design company that simply love what we do..
       </div> 

 <div class="tick"></div> 
<article id="aboutus" class="aboutus">
       
 <div class="test"></div>
        
       
</article>
</section>



<section id="price" class="anchor">  
     
<div class="titlebg"><h2>Pricing</h2>
      HTML5, built on Bootstrap, very fast.
         </div> 
         
         
         <div class="tick"></div> 
<article id="price_features" class="price">
       
      
        <div class="test"></div>
            
      
</article>
</section>




<section id="contact" class="anchor"><div class="contactbg">    
     
<div class="titlebg"><h2>Contact us</h2>
      HTML5, built on Bootstrap, very fast.
       </div> 
  </div>    <div class="tick"></div> 
<article id="home_contact" class="contact">


 <div id="map-canvas"></div>  

        <div class="container padding">
       
      <div class="row-fluid">
 <?php

include 'autoload.php';

use HybridLogic\Validation\Validator;
use HybridLogic\Validation\Rule;

$validator = new Validator();

$validator

	->set_label('name', 'your name')
	->add_filter('name', 'trim')
	->add_rule('name', new Rule\NotEmpty())
	->add_rule('name', new Rule\MinLength(5))
	->add_rule('name', new Rule\MaxLength(10))

	->add_filter('email', 'trim')
	->add_filter('email', 'strtolower')
	->add_rule('email', new Rule\NotEmpty())
	
	->add_rule('email', new Rule\Email())
	

;


if(isset($_POST['submit'])) {

	if($validator->is_valid($_POST)) {
		echo 'Sent';
	} else {
		echo '<p>Errors were encountered:</p><ul>';
		foreach($validator->get_errors() as $error) echo "<li>$error</li>";
		echo '</ul>';
	}

}


$jquery_validator = new HybridLogic\Validation\ClientSide\jQueryValidator($validator);
$jquery = $jquery_validator->generate();


?>     
    
            <div class="span9"> 
 <div class="alert alert-error alert-block hide">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <h4>Warning!</h4>
              <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
             <div class="alert alert-success alert-block hide">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <h4>Warning!</h4>
              <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>            
             <div class="alert alert-error alert-block hide mailrr">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <h4>Network!</h4>
              <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>   
            
<form action="#" class="form" id="form" method="post">
            <div class="row"><div class="span4"><label>Name</label>
  <input type="text" placeholder="Name" name="name" required></div>
 <div class="span4"><label>Email</label> <input type="email" name="email" placeholder="Email" required></div>
 <div class="span8"><label>Your message</label>
 <textarea rows="6" name="message" spellcheck="false" style=" white-space: pre-wrap; z-index: auto; position: relative; line-height: 20px; font-size: 14px; -webkit-transition: none; transition: none; overflow: auto; margin: 0px; height: 247px; background-position: initial initial !important; background-repeat: initial initial !important;"></textarea>
 </div>
  <div class="span8"><button type="submit" class="btn submit" name="submit" data-loading-text="Loading...">Sign in</button></div>
</div>
</form>
</div>   





<div class="span5">
<address>
  <strong>Twitter, Inc.</strong><br>
  795 Folsom Ave, Suite 600<br>
  San Francisco, CA 94107<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
 
<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>

<address>
  <strong>Twitter, Inc.</strong><br>
  795 Folsom Ave, Suite 600<br>
  San Francisco, CA 94107<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
 
<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>



</div>
             
            </div>
        
                
  
          
        </div> <!-- /container -->
</article>
</section>


    <div id="project1" class="pro" style="display:none">
         <div class="row-fluid">
  
              <div class="span4">
              
            
            
            
            
            
              <img src="img/fire@2x.jpg">
            
            
            
            
            
            
            
              </div>
              
              <div class="span5">
              
            
             <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            
            
            <a href="" class="btn btn-info">Get Started</a>
            
            
            
            
            
            
            
            
              </div>
              
              
              
              
              
              </div>
 
  </div>
<div id="responsive" class="boxy modal hide fade" tabindex="-1" data-width="760">
 <div class="row-fluid">
<div class="span4">
<img src="img/door@2x.jpg">
 </div>
<div class="span5">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
</div>
</div>
</div>
 
  
<div id="project3" class="pro" style="display:none">
<div class="row-fluid">
<div class="span4">
<img src="img/door@2x.jpg">
 </div>
<div class="span5">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
</div>
</div>
</div>

<div id="project4" class="pro" style="display:none">
<div class="row-fluid">
<div class="span4">
<img src="img/house@2x.jpg">
 </div>
<div class="span5">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
</div>
</div>
</div>                     
 
 
 <div id="project8" class="pro" style="display:none">
<div class="row-fluid">
<div class="span4">
<img src="img/skull@2x.jpg">
 </div>
<div class="span5">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
</div>
</div>
</div>      
 
 <div id="project7" class="pro" style="display:none">
<div class="row-fluid">
<div class="span4">
<img src="img/road@2x.jpg">
 </div>
<div class="span5">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
</div>
</div>
</div>           
 

 <div id="project5" class="pro" style="display:none">
<div class="row-fluid">
<div class="span4">
<img src="img/notes@2x.jpg">
 </div>
<div class="span5">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
</div>
</div>
</div>       
 
 <div id="project6" class="pro" style="display:none">
<div class="row-fluid">
<div class="span4">
<img src="img/pumpkin@2x.jpg">
 </div>
<div class="span5">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
</div>
</div>
</div>     
 
 
<div id="project2" class="pro" style="display:none">
<div class="row-fluid">
<div class="span4">
<img src="img/star@2x.jpg">
 </div>
<div class="span5">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

</div>
</div>

</div>  
 
<div id="ajax-modal" class="modal hide fade" tabindex="-1" style="display: none; margin-top: -128.5px;" aria-hidden="true"><div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3>Modal header</h3>
</div>
<div class="modal-body">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
		<li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab1"><p>This modal was loaded in via ajax</p></div>
		<div class="tab-pane" id="tab2"><p>This is some other tab content</p></div>
	</div>
	<button class="btn update">Update</button>
</div>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" class="btn">Close</button>
	<button type="button" class="btn btn-primary">Ok</button>
</div></div>
     
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="js/vendor/bootstrap-modalmanager.js"></script> 
<script src="js/vendor/bootstrap-modal.js"></script> 
 <script type="text/javascript" src="//cdn.jsdelivr.net/colorbox/1.4.4/jquery.colorbox-min.js"></script> 
 <script type="text/javascript" src="//cdn.jsdelivr.net/slidesjs/3.0.1/jquery.slides.min.js"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.js"></script>   
  <script src="js/vendor/jquery.hcaptions.js"></script> 
  <script src="js/vendor/jquery.smooth-scroll.min.js"></script> 
 <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
 <script src="js/vendor/main.js"></script>   
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.10.0/jquery.validate.js"></script>


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

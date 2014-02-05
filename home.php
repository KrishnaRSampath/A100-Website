

<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to A100</title>
	<link rel="stylesheet" type="text/css" href="foundation/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="foundation/icons/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/style.css">
	<script src="foundation/js/vendor/modernizr.js"></script>
</head>
<body>

<?php 
	require('header.php');

 ?>
 	<div data-magellan-destination='about' data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" class='large-12 small-12'id='about'>	
 		<img class='logos' data-stellar-horizontal-offset="-925" data-stellar-vertical-offset="-100"data-stellar-ratio="2" src="/a100/website/img/html5-64.png">
 		<img class='logos' data-stellar-horizontal-offset="-925" data-stellar-vertical-offset="-300"data-stellar-ratio="2" src="/a100/website/img/javascript.png">
 		<img class='logos' data-stellar-horizontal-offset="-825" data-stellar-vertical-offset="-200" data-stellar-ratio="2" src="/a100/website/img/css3-64.png">
 		<img class='logos' id='php-logo' data-stellar-horizontal-offset="-1025" data-stellar-vertical-offset="-200" data-stellar-ratio="2" src="/a100/website/img/php-logo.jpg">
 		<div id='about-heading'>
 		<h1><span>A</span>ccelerating Software Careers </h1>
 		<h2>from Zero to Startup-Ready</h2>
 		</div>
 		<p>We take our Apprentices and give them free trainings, to get them prepared for paid internships with local startup companies eager to work with new talent.</p>
	 		<!-- <img data-stellar-ratio="9" id='dots'src="/a100/website/img/dots.png"> -->
	 	<!-- <span>Something</span> -->
 	</div>
 	<div data-magellan-destination='students' data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" class='large-12 small-12'id='students'>	
 		
 		<!-- <img class='dots' data-stellar-ratio="7" src="/a100/website/img/dots.png"> -->
 		
	 		<!-- <img data-stellar-ratio="9" id='dots'src="/a100/website/img/dots.png"> -->
	 	
 	</div>
 	<div id='students-bar'>
 		<h1>Level Up Your Coding Skills</h1>
 		<p>We’ll train you in the top technologies sought after by startup companies, and the best practices of Agile software development methodology.
 				<br><a href="">Learn More</a></p> 

 	</div>
 	<video id='a100-vid' width="320" height="240" controls>
  <source src="/a100/website/vids/a100_vid.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
 	<!-- <div data-magellan-destination='students' data-stellar-background-ratio="0.5" style='top: 25px;' id='students'>
 		<span>Something</span>
 	</div>
 	<div data-magellan-destination='partners' data-stellar-background-ratio="0.5" id='partners'>
 		<span>Something</span>
 	</div>
	

 	<div data-magellan-destination='contact'id='contact'>		Contact
 	</div> -->

 	 <div data-magellan-destination='partners' data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" class='large-12 small-12'id='partners'>	
 		<!-- <div class='dots' data-stellar-ratio="4"></div> -->
 		<!-- <div class='dots' data-stellar-ratio="2"></div>
 		<div class='dots' data-stellar-horizontal-offset="-40" data-stellar-vertical-offset="-150"data-stellar-ratio="2"></div>
 		<img class='dots' data-stellar-ratio="7" src="/a100/website/img/dots.png"> -->	
 	</div>
 	<div id='partners-bar'>
 		<h1>Find talent for your startup</h1>
 		<p>The A100 Program is an exciting opportunity for your company to secure a well-trained software developer as an intern -- and possibly for full-time employment.<br><a href="">Learn More</a></p> 
 	</div>

 	<div data-magellan-destination='contact' data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" class='large-12 small-12'id='contact'>	
 		<br><br>
 		<h1>Connect with us...</h1>
 		<h4>Get the latest updates - we want to hear from you.</h4>
 		<br><br>
 		<div class="row">
		  <div class="small-12 medium-6 large-6 columns" id='soc-media'><a class="twitter-timeline" href="https://twitter.com/search?q=%23tech" data-widget-id="430524256246431744">Tweets about "#tech"</a>
		  </div>
		  <div class="small-12 medium-6 large-6 columns">
		  	<a href=""><img id='meetup-logo' src="/a100/website/img/meetup.png"></a>
		  	<a href=""><img src="/a100/website/img/facebook.png"></a>
		  	<br><br>
		  	<p>Email: info@indie-soft.com</p>
		    <p>760 Chapel Street 
		    	<br/> New Haven, CT 06510 
		    	<br/><a target='_blank' href="https://www.google.com/maps/preview/place/760+Chapel+St,+New+Haven,+CT+06510/@41.304616,-72.923485,17z/">Map it</a></p>
		  </div>
		  
		</div>
		
 	</div>

</body>
<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/fastclick.js"></script>
  <script src="foundation/js/foundation/foundation.js"></script>
  <script src="foundation/js/foundation/foundation.magellan.js"></script>
  <script src='jquery.stellar.js'></script>
  <!-- for twitter feed start -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <!-- for twitter feed end -->
  <script type="text/javascript">
  	$(document).ready(function(){
		$('a[href^="#"]').on('click',function (e) {
		    e.preventDefault();

		    var target = this.hash,
		    $target = $(target);

		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 400, 'swing', function () {
		        window.location.hash = target;
		    });
		});

		$.stellar();
		
	});

  		   $(document).foundation('magellan',{
  // specify the class used for active sections
  activeClass: 'active',
  // how many pixels until the magellan bar sticks, 0 = auto
  threshold: 100
});

  </script>

</html>

<!-- grid option 1 -->
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grid</title>
	<link rel="stylesheet" type="text/css" href="foundation/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="foundation/icons/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="foundation/js/vendor/modernizr.js"></script>
	  <script src='masonry/masonry.pkgd.js'></script>
</head>
<body id='grid-body'>
<?php 
	require('header2.php');
?>
	<div class='intro'>
		<h1>Want Hands-on Experience?</h1>
		<h2>A100 is the program for you!</h2>
	</div>
	<hr>
	<!-- <div class='item' id='timeline'>
			<h3>From application to Apprenticeship</h3>
			 
			  <h4><a href="#">See the A100 Timeline</a></h4>
	</div> -->
	<div id='grid-contain' class="js-masonry">
		<div class='item' id='for-you'>
			<h3>Passionate about web development?</h3> 
			 We are looking for people who have some background in web development to join and receive free training in HTML/CSS, Javascript, PHP, Agile Software Development and much more.
			 <h5><a href="#">Learn More about the program</a></h5>
		</div>
		<div class='item' id='cover-testimonial'>
			<img id='headshot' src="img/grid/headshot.jpg">
			My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
			<br>
			--Tim Scott, A100 Apprentice Fall 2013
			<br>
			<a href="#">Read more testimonials</a>
		</div>
		
		<div class='item' id='portfolio'>
			<ul class="example-orbit" data-orbit>
			  <li>
			    <img src="img/portfolio/love_mason.jpg" alt="slide 1" />
			  </li>
			  <li>
			    <img src="img/portfolio/harmonize.png" alt="slide 2" />
			  </li>
			  <li>
			    <img src="img/portfolio/vidence.jpg" alt="slide 3" />
			  </li>
			  <li>
			    <img src="img/portfolio/bulkshare.png" alt="slide 3" />
			  </li>
			</ul>
			<h4><a href="">Check out projects from past Apprentices</a></h4>
		</div>
		
		<!-- <div class='item' id='blank1'>

		</div> -->
		<div class='item' id='apply'>
			<h3>Ready to get started?</h3>
			 College juniors, seniors, or graduates are encouraged to apply as well as self-taught enthusiast who want to take their skills to a new level.
			  <h4><a href="#">Apply to A100 today!</a></h4>
		</div>
		<div class='item' id='learn'>
			<h4>We train our Apprentices in:</h4>
			<ul>
				<li><img src="img/html5-64.png"></li>
				<li><img src="img/css3-64.png"></li>
				<li><img src="img/javascript.png"></li>
				<li><img src="img/php-logo.jpg"></li>
				<li><img src="img/github.png"></li>
			</ul>
		</div>
		
	</div>
<script src='//code.jquery.com/jquery-1.10.2.min.js'></script>
<script src="foundation/js/vendor/fastclick.js"></script>
</body>


  <script src="foundation/js/foundation.min.js"></script>
 <script>
    $(document).foundation();
  </script>
   <script type="text/javascript">

 	 jQuery(window).on('load', function(){ 

 	 	var $ = jQuery;

 		var container = document.querySelector('#grid-contain');
		var msnry = new Masonry( container, {
		  // options
		  columnWidth: 10,
		  itemSelector: '.item',
		  
		});
		 		
	})

 	$(window).resize(function(){ 
 		var $ = jQuery;

 		var container = document.querySelector('#grid-contain');
		var msnry = new Masonry( container, {
		  // options
		  // columnWidth: 30%,
		  itemSelector: '.item',
		  
		});


 	});
 </script>

</html>





<!-- <html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grid</title>
	<link rel="stylesheet" type="text/css" href="foundation/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="foundation/icons/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/style.css">
	<script src="foundation/js/vendor/modernizr.js"></script>
</head>
<body id='grid-body'>
<?php 
	require('header.php');
?> -->
	<!-- <div id='grid-contain'> -->
		<!-- <div class='row' id='top-row'>
			<div class='item large-4 medium-4 small-12 column'>
				<div id='a'>
				Passionate about web development?
				<br>
				Are you hard working?
				<br>
				Do you want to learn new technologies?
				<br>
				Want hands-on experience?
				<br>
				A100 might be right for you!
				</div>
			</div>

			<div class='item large-6 medium-6 small-12 column'>
				<div id='c'>Title</div>
				<div id='d'>Subtitle</div>
				<div id='h'>Subtitle2</div>
			</div>
			<div class='item large-2 medium-2 small-12 column'>
				<div id='e'>Tall</div>
			</div>
		</div>
		<div class='row' >
			<div id='timeline' class='item large-12 medium-12 small-12 column tall none'>Timeline</div>
		</div>
		<div class='row' id='top_row'>
			<div class='item large-4 medium-4 small-12 column tall none'></div>
			<div class='item large-6 medium-6 small-12 column'>
				<div id='f'>Title</div>
				<div id='g'>Title</div>
				
			</div>
			<div class='item large-2 medium-2 small-12 column'></div>
		</div> -->
		
	<!-- </div> -->

<!-- </body>

<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/fastclick.js"></script>
  <script src="foundation/js/foundation/foundation.js"></script>
  <script src="foundation/js/foundation/foundation.magellan.js"></script>
    
   <script type="text/javascript">
 	$(document).ready(function(){

 	
 	})
 </script>

</html>
 -->


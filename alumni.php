<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meet Our Alumni</title>
	<link rel="stylesheet" type="text/css" href="foundation/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="booklet/booklet/jquery.booklet.latest.css">
	<link rel="stylesheet" type="text/css" href="foundation/icons/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="foundation/js/vendor/modernizr.js"></script>
</head>
<body>
<?php 
  require('header2.php');

 ?>

 <div class='intro' id='alumni-intro'>
	<h2>Meet Our Alumni</h2>
</div>
<hr>
<div class='row'>
	<div class='large-12 column alumni-testimonial-thumb'>
		<img src="img/grid/headshot.jpg">
		<p>My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
			<br>
			--Tim Scott, A100 Apprentice Fall 2013
		</p>
	</div>
	<div class='large-12 column alumni-testimonial-thumb'>
		<p>My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
			<br>
			--Tim Scott, A100 Apprentice Fall 2013
		</p>
		<img src="img/grid/headshot2.jpg">
	</div>
</div>
<div id='alumni-contain'>
	<div class='row long-row' id='alumni-portfolio'>
		<h3 class='large-4 column'>
			Our Apprentices come from different backgrounds and have a wide range of experience. Here are some highlights of what our Apprentices have accomplished during the program.
		</h3>
		<div class='large-8 column'>
		<h4>
		Click on an Apprentice to view their portfolio.
		</h4>
		<div id='alumni-portfolio-pics-contain' class=' row long-row'>
				<a href="#" data-reveal-id="modal-flipbook" data-reveal id='portfolio1'>
				<img class='alumni-portfolio-pics large-2 medium-4 small-6 column'src="img/grid/headshot.jpg">
				</a>
				<a href="#" data-reveal-id="modal-flipbook" data-reveal id='portfolio2'>
					<img class='alumni-portfolio-pics large-2 medium-4 small-6 column'src="img/grid/headshot1.jpg">
				</a>
				<a href="#" data-reveal-id="modal-flipbook" data-reveal id='portfolio3'>
					<img class='alumni-portfolio-pics large-2 medium-4 small-6 column'src="img/grid/headshot2.jpg">
				</a>
				<a href="#" data-reveal-id="modal-flipbook" data-reveal id='portfolio4'>
				<img class='alumni-portfolio-pics large-2 medium-4 small-6 column'src="img/grid/headshot3.jpg">
				</a>
				<a href="#" data-reveal-id="modal-flipbook" data-reveal id='portfolio5'>
					<img class='alumni-portfolio-pics large-2 medium-4 small-6 column'src="img/grid/headshot4.jpg">
				</a>
				<a href="#" data-reveal-id="modal-flipbook" data-reveal id='portfolio6'>
					<img class='alumni-portfolio-pics large-2 medium-4 small-6 column'src="img/grid/headshot5.jpg">
				</a>			
		</div>
		</div>	
	</div>
	<div id="modal-flipbook" class="reveal-modal" data-reveal>
			<div class="flipbook">
			    <div class='folio-page' id='folio-cover'> 
			    	<img id='folio-img' src="">
			    	<br>
			    	<h4 id='folio-name'></h4>
			    	<h5>
			    		<span id='folio-class'></span>
			    		<br>
						<span id='folio-email'></span>
			    	</h5>
			    	<p id='folio-desc'></p>	
			    </div> 
			    <div>
			    	<div id='folio-1'></div>
			    	<div ><a id='folio-1-link' target='_blank' href="">Check out the project</a></div>
			    </div>
			    <div>
			    	<img id='folio-1-img'src="">
			    </div>
			     <div>
			    	<div id='folio-2'></div>
			    	<div ><a id='folio-2-link' target='_blank' href="">Check out the project</a></div>
			    </div>
			    <div> 
			    	<img id='folio-2-img'src="">
			    </div>
			    <div id='folio-end'>
			    	<h3>Like what you see?</h3>
			    	<br>
			    	If you're interested in joining the A100 program fill out our <a href="apply.php">application form</a> today.
			    	<br>
			    	<br>
			    	If you're interested in hiring an Apprentice, <a href="partner-apply.php">join now</a> to be a partner company.
			    	<br><br>
			    	<img src="img/a100_logo_medium.png">
			    </div>
			</div>
			<a class="close-reveal-modal">&#215;</a>
	</div>
</div> <!-- alumni contain -->
<div class='row'>
	<div class='large-12 column alumni-testimonial-thumb'>
		<img src="img/grid/headshot3.jpg">
		<p>My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
			<br>
			--Tim Scott, A100 Apprentice Fall 2013
		</p>
	</div>
	<div class='large-12 column alumni-testimonial-thumb'>
		<p>My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
			<br>
			--Tim Scott, A100 Apprentice Fall 2013
		</p>
		<img src="img/grid/headshot4.jpg">
	</div>
</div>
<div class='row long-row apply-desc'>
	<div class='large-6 medium-6 column'>
		<p>Think you have what it takes to be an Apprentice?</p>
		<a class='button apply-button-small' href="apply.php">Apply <img src="img/a100_logo_small.png"> Now</a>
	</div> 
	<div class='large-6 medium-6 column' >
		<p>Are you a company interested in hiring an Apprentice?</p>
		<a class='button apply-button-small' href="partner-apply.php">Become an <img src="img/a100_logo_small.png"> Partner</a>
	</div>
</div>

<?php 
	require('footer.php');
 ?>




</body>
 
<script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
<script src="foundation/js/vendor/jquery.js"></script>
<script src='//code.jquery.com/ui/1.10.4/jquery-ui.js'></script>
<script src='booklet/booklet/jquery.easing.1.3.js'></script>
<script src='booklet/booklet/jquery.booklet.latest.min.js'></script>

<script src="foundation/js/vendor/fastclick.js"></script>
  <script src="foundation/js/foundation.min.js"></script>

  <script type="text/javascript">
	$(document).foundation();
	</script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#alumni-portfolio-pics-contain a').click(function(){
			$('#folio-name').html("")
			$('#folio-email').html("")
			$('#folio-desc').html("")
			$('#folio-img').attr('src', '')
			$('#folio-1').html('')
			$('#folio-1-link').attr('href', '')
			$('#folio-1-img').attr('src',"")
			$('#folio-2').html('')
			$('#folio-2-link').attr('href', '')
			$('#folio-2-img').attr('src',"")
			var portfolioId = $(this).attr('id');

			// for each portfolio find the id and add it to the modal
			switch(portfolioId){
				case 'portfolio1':
					$('#folio-name').html("Rick James");
					$('#folio-img').attr('src',"img/grid/headshot.jpg");
					$('#folio-email').html("rj123@gmail.com");
					$('#folio-desc').html("Rick James is a college graduate with a degree in CS from Yale. He has been programming for 6 years and is familiar with HTML/CSS, Javascript, PHP, and Python.");
					$('#folio-1').html("This is one of Rick's first projects - it is a site called IMDB. It is a place to search for movies, tv shows, and actors/actresses.")
					$('#folio-1-link').attr('href',"http://www.imdb.com");
					$('#folio-1-img').attr('src',"img/portfolio/imdb.png");
					$('#folio-2').html("This is a group project from Rick's time at the A100 program - it is a redesign of the A100 Website. He worked with Stephanie Miller and Jack Johnson on this project. He focused on the UI during the project.")
					$('#folio-2-link').attr('href',"http://a100.randomhaik.us");
					$('#folio-2-img').attr('src',"img/portfolio/a100.png");

				break;
				case 'portfolio2':
					$('#folio-name').html("Rick James");
					$('#folio-img').attr('src',"img/grid/headshot1.jpg");
					$('#folio-email').html("rj123@gmail.com");
					$('#folio-desc').html("Rick James is a college graduate with a degree in CS from Yale. He has been programming for 6 years and is familiar with HTML/CSS, Javascript, PHP, and Python.");
				break;
				case 'portfolio3':
					$('#folio-name').html("Rick James");
					$('#folio-img').attr('src',"img/grid/headshot2.jpg");
					$('#folio-email').html("rj123@gmail.com");
					$('#folio-desc').html("Rick James is a college graduate with a degree in CS from Yale. He has been programming for 6 years and is familiar with HTML/CSS, Javascript, PHP, and Python.");
				break;
				case 'portfolio4':
					$('#folio-name').html("Rick James");
					$('#folio-img').attr('src',"img/grid/headshot3.jpg");
					$('#folio-email').html("rj123@gmail.com");
					$('#folio-desc').html("Rick James is a college graduate with a degree in CS from Yale. He has been programming for 6 years and is familiar with HTML/CSS, Javascript, PHP, and Python.");
				break;
				case 'portfolio5':
					$('#folio-name').html("Rick James");
					$('#folio-img').attr('src',"img/grid/headshot4.jpg");
					$('#folio-email').html("rj123@gmail.com");
					$('#folio-desc').html("Rick James is a college graduate with a degree in CS from Yale. He has been programming for 6 years and is familiar with HTML/CSS, Javascript, PHP, and Python.");
				break;
				case 'portfolio6':
					$('#folio-name').html("Rick James");
					$('#folio-img').attr('src',"img/grid/headshot5.jpg");
					$('#folio-email').html("rj123@gmail.com");
					$('#folio-desc').html("Rick James is a college graduate with a degree in CS from Yale. He has been programming for 6 years and is familiar with HTML/CSS, Javascript, PHP, and Python.");
				break;
			}
		})

		// media query to adjust plugin depending on screen size on load

		// original keep
		// var mq = window.matchMedia( "(max-width: 1100px)" );
		// if (mq.matches) {
		// 	$('.flipbook').booklet('destroy');
		// 	$('.flipbook').css('width', 'auto');
		// 	$('.flipbook').css('height', 'auto');
		// }
		// else{
		// 	$('.flipbook').booklet({
		// 	closed: true,
		// 	autoCenter: true,
		// 	startingPage: 1,
		// 	width: '90%', 
		// 	height: 500,
		// 	tabs:  true,
	 //        tabWidth:  180,
	 //        tabHeight:  20
		// 	});
			
		// }



	}); //document.ready

	// media query to destroy plugin depending on screen size if screen is resized
	// original keep
	// $(window).resize(function(){
	// 	var md = window.matchMedia( "(max-width: 1100px)" );
	// 	if (md.matches) {
	// 		$('.flipbook').booklet('destroy');
	// 		$('.flipbook').css('width', 'auto');
	// 		$('.flipbook').css('height', 'auto');
	// 	}
	// 	else{
	// 		$('.flipbook').booklet({
	// 		closed: true,
	// 		autoCenter: true,
	// 		startingPage: 1,
	// 		width: '90%',
	// 		height: 500,
	// 		tabs:  true,
 //        	tabWidth:  180,
 //        	tabHeight:  20
	// 	});
		
	// 	}


	// }) //window.resize
	
	// when modal opens create booklet if size of page is big enough - otherwise don't
	$(document).on('open', '[data-reveal]', function () {
  		var mq = window.matchMedia( "(max-width: 1100px)" );
		if (mq.matches) {
			// $('.flipbook').booklet('destroy');
			$('.flipbook').css('width', 'auto');
			$('.flipbook').css('height', 'auto');
		}
		else{
			$('.flipbook').booklet({
			closed: true,
			autoCenter: true,
			startingPage: 1,
			width: '90%', 
			height: 500,
			tabs:  true,
	        tabWidth:  180,
	        tabHeight:  20,

			});
			
		}

		// media query to destroy plugin depending on screen size if screen is resized
		$(window).resize(function(){
			var md = window.matchMedia( "(max-width: 1100px)" );
			if (md.matches) {
				$('.flipbook').booklet('destroy');
				$('.flipbook').css('width', 'auto');
				$('.flipbook').css('height', 'auto');
			}
			else{
				$('.flipbook').booklet({
				closed: true,
				autoCenter: true,
				startingPage: 1,
				width: '90%',
				height: 500,
				tabs:  true,
	        	tabWidth:  180,
	        	tabHeight:  20
			});
			
			}


		})
	});



</script>

</html>
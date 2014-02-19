<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employers</title>
	<link rel="stylesheet" type="text/css" href="foundation/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="foundation/icons/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="foundation/js/vendor/modernizr.js"></script>
</head>
<body>
<?php 
  require('header2.php');

 ?>

<div class='intro' id='employer-intro'>
	<div class='se-intro-desc'>
		<h2>Great talent right in your backyard</h2>
		<div class='row long-row'>
			<div class='large-4 medium-4 column'>
				<img class='intro-icon' src="img/ct.gif">
				<h3>Local</h3>
				<p>
					A100 is commited to keeping Connecticut talent in Connecticut and that is why we are trying to connect our Apprentices with local startups. We want to see Connecticut's tech scene grow!
				</p>
			</div>
			<div class='large-4 medium-4 column'>
				<img class='intro-icon' src="img/cap.png">
				<h3>Well-trained</h3>
				<p>
					We train our Apprentices in skills that will allow them to hit the ground running. They create projects in PHP, Javascript, HTML 5/CSS 3 and learn in a real-world setting so they will be prepared to help your company on day one.
				</p>
			</div>
			<div class='large-4 medium-4 column'>
				<img class='intro-icon' src="img/low_risk.png">
				<h3>Low-Risk</h3>
				<p>
					A100 Apprentices 
				</p>
			</div>
		</div>
	</div>
</div>
<br><hr><br>
<div class='row long-row'>
	<div class='large-5 column student-learn-icons'>
			<ul>
				<li><img src="img/html5-64.png"></li>
				<li><img src="img/css3-64.png"></li>
				<li><img src="img/javascript.png"></li>
				<li><img src="img/php-logo.jpg"></li>
				<li><img src="img/github.png"></li>
			</ul> 
	</div>
	<div class='large-7 column student-learn'>
		<h2>Partnering with A100</h2>
		<p>A100 trains Apprentices in basic skills so you don't have to. </p>
		<h4><a href="alumni.php#alumni-portfolio">Check out projects from past Apprentices</a></h4>
	</div>
	<div class='large-3'></div>
</div>
<br><hr><br>
<div class='row long-row se-timeline'>
	<div class='large-12 column'>
		<h2>Become an A100 Partner Company and find your next great developer hire!"</h2>
		<ul>
			<li class='timeline-thumb' id='employer-timeline-join'>
				<img src="img/green_circle.png">
				Become a Partner Company
			</li>
			<li class='timeline-thumb' id='employer-timeline-evaluation'>
				<img src="img/grey_circle_medium.png">
				Evaluation <br><br><br>
			</li>
			<li class='timeline-thumb' id='employer-timeline-interview'>
				<img src="img/grey_circle_medium.png">
				Interview   <br><br><br>
			</li>
			<li class='timeline-thumb' id='employer-timeline-apprenticeship'>
				<img src="img/grey_circle_medium.png">
				Apprentice  <br><br><br>
			</li>
			<li class='timeline-thumb' id='employer-timeline-hiring'>
				<img src="img/grey_circle_medium.png">
				Hiring <br><br><br>
			</li>
			<li class='timeline-thumb' id='employer-timeline-win'>
				<img src="img/grey_circle_medium.png">
				Win <br><br><br>
			</li>
		</ul>
		<div class='timeline-description'>
			<h3 id='timeline-desc-headline'>Become a Partner Company</h3>
			<p id='timeline-para-headline'>kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj</p>	
		</div>
	</div>	
</div>

<div class='se-contain'>
		<div class='long-row row se-testimonial'>
			<div class='testimonial-thumb large-4 column'>
				<img src="img/grid/headshot.jpg">
				<p>
					My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
					<br>
					--Tim Scott, A100 Apprentice Fall 2013
				</p>	
			</div>
			<div class='testimonial-thumb large-4 column'>
				<img src="img/grid/headshot2.jpg">
				<p>
					My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
					<br>
					--Tim Scott, A100 Apprentice Fall 2013
				</p>
			</div>
			<div class='testimonial-thumb large-4 column'>
				<img src="img/grid/headshot3.jpg">
				<p>
					My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
					<br>
					--Tim Scott, A100 Apprentice Fall 2013
				</p>
			</div>
			<h4><a href="alumni.php#alumni-testimonial">Read More Testimonials</a></h4>
		</div>
</div> 
<hr>
<div class='row long-row apply-desc'>
	<div class='large-5 medium-5 column'>
		<h2>Ready to get started?</h2>
		<p>
			If your startup is interested in becoming an A100 Partner Company. 
		</p> 
	</div>
	<div class='large-7 medium-7 column' >
		<a class='button apply-button' href="#">Become an <img src="img/a100_logo_small.png"> Partner Today</a>
	</div> 
</div>


	


</div>
<?php 
	require('footer.php');
 ?>
</body>
 
<script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/fastclick.js"></script>
  <script src="foundation/js/foundation.min.js"></script>
  <script type="text/javascript">
	$(document).foundation();
	</script>
 <script type="text/javascript">
 		$(document).ready(function(){

 			$('.timeline-thumb img').hover(function(){
 				$('#employer-timeline-join img').attr('src', 'img/grey_circle_medium.png');
 				$(this).attr('src', 'img/green_circle.png');

 				var timelineId = $(this).parent().attr('id');

 				switch (timelineId)
				{
				case 'employer-timeline-join':
				  $('#timeline-desc-headline').html("Become a Partner Company");
				  $('#timeline-para-headline').html('kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj');
				  break;
				  case 'employer-timeline-evaluation':
				  $('#timeline-desc-headline').html("Evaluation");
				  $('#timeline-para-headline').html('kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj');
				  break;
				  case 'employer-timeline-interview':
				  $('#timeline-desc-headline').html("Interview");
				  $('#timeline-para-headline').html('kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj');
				  break;
				  case 'employer-timeline-apprenticeship':
				  $('#timeline-desc-headline').html("Apprentice");
				  $('#timeline-para-headline').html('kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj');
				  break;
				  case 'employer-timeline-hiring':
				  $('#timeline-desc-headline').html("Hiring");
				  $('#timeline-para-headline').html('kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj');
				  break;
				  case 'employer-timeline-win':
				  $('#timeline-desc-headline').html("Win");
				  $('#timeline-para-headline').html('kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj');
				  break;
				}



 				
 			}, function(){
 				$(this).attr('src', 'img/grey_circle_medium.png');
 				$('#timeline-desc-headline').html('');
 				$('#timeline-para-headline').html('');

 			})


 		})




 </script>


</html>








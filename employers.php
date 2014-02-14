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
	<h2>Great talent right in your backyard</h2>
	<div class='row long-row'>
		<div class='large-4 column'>
			<img src="img/ct.gif">
			<h3>Local</h3>
			<p>
				Current Junior or Seniors in Computer Science, EE, or other technical majors are encouraged to apply. A100 will teach you skills you don't learn in the classroom and give you practice in real-world development environments. 
			</p>
		</div>
		<div class='large-4 column'>
			<img src="img/cap.png">
			<h3>Well-trained</h3>
			<p>
				Do you have a technical degree but want some hands-on experience? A100 is a great opportunity to build upon your education and learn the skills start-up companies desire. 
			</p>
		</div>
		<div class='large-4 column'>
			<img src="img/low_risk.png">
			<h3>Low-Risk</h3>
			<p>
				You don't need a degree in Computer Science to be a part of A100. Self-taught developers are welcome to apply. Work on projects and build your portfolio while learning new skills and technologies. 
			</p>
		</div>
	</div>
	<div class='long-row row'>
	<div class='large-12 column student-learn'>
		<h3>We train our Apprentices in</h3>
		<ul>
			<li><img src="img/html5-64.png"></li>
			<li><img src="img/css3-64.png"></li>
			<li><img src="img/javascript.png"></li>
			<li><img src="img/php-logo.jpg"></li>
			<li><img src="img/github.png"></li>
		</ul> 
		<h4><a href="alumni.php#alumni-portfolio">Check out projects from past Apprentices</a></h4>
	</div>
</div>
</div>
<hr>

<div class='se-contain'>

<div class='row long-row' id='employer-timeline'>
	<div class='large-12 column'>
		<h2>Become an A100 Partner Company and find your next great developer hire!"</h2>
		<hr>
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
				Apprenticeship  <br><br><br>
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
		<div id='timeline-description'>
			<h3 id='timeline-desc-headline'>Become a Partner Company</h3>
			<p id='timeline-para-headline'>kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj</p>	
		</div>
	</div>	
</div>

<div class='row long-row se-testimonial'>
	<!-- <div class='large-12 column item2' id='employer-testimonial' > -->
		<div class='large-4 column testimonial-thumb '>
		<img  src="img/grid/headshot.jpg">
		<br>
			My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
			<br>
			--Tim Scott, A100 Apprentice Fall 2013
		</div>
		<div class='large-4 column testimonial-thumb'>
		<img src="img/grid/headshot2.jpg">
		<br>
			My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
			<br>
			--Tim Scott, A100 Apprentice Fall 2013
		</div>
		<div class='large-4 column testimonial-thumb'>
		<img  src="img/grid/headshot4.jpg">
		<br>
			My A100 experience was amazing. I learned so much about web development and they were all things I did not get in a traditional classroom. After the program I feel that I'm more rounded and prepared for a career in web development. 
			<br>
			--Tim Scott, A100 Apprentice Fall 2013
		</div>
		<a href="alumni.php#alumni-testimonial" class='right'>Read More Testimonials</a>
	<!-- </div>	 -->
</div>	
<div class='row long-row apply-desc'>
	<div class='large-5 column'>
		<h2>Ready to get started?</h2>
		<p>
			College juniors, seniors, or graduates are encouraged to apply as well as self-taught enthusiast who want to take their skills to a new level.
		</p> 
	</div>
	<div class='large-7 column' >
		<a class='button apply-button' href="#">Apply <img src="img/a100_logo_small.png"> Now</a>
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
				  $('#timeline-desc-headline').html("Apprenticeship");
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








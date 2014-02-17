<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Students</title>
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
<div class='intro' id='student-intro'>
	<div class='se-intro-desc'>
		<h2>Passionate web developers wanted:</h2>
		<div class='row long-row'>
			<div class='large-4 medium-4 column'>
				<img class='intro-icon' src="img/pencil.png">
				<h3>Students</h3>
				<p>
					Current Junior or Seniors in Computer Science, EE, or other technical majors are encouraged to apply. A100 will teach you skills you don't learn in the classroom and give you practice in real-world development environments. 
				</p>
			</div>
			<div class='large-4 medium-4 column'>
				<img class='intro-icon' src="img/cap.png">
				<h3>Graduates</h3>
				<p>
					Do you have a technical degree but want some hands-on experience? A100 is a great opportunity to build upon your education and learn the skills start-up companies desire. 
				</p>
			</div>
			<div class='large-4 medium-4 column'>
				<img class='intro-icon' src="img/computer.png">
				<h3>Enthusiasts</h3>
				<p>
					You don't need a degree in Computer Science to be a part of A100. Self-taught developers are welcome to apply. Work on projects and build your portfolio while learning new skills and technologies. 
				</p>
			</div>
		</div>
	</div>
	
</div>
<hr>
<div class='row long-row'>
	<div class='large-4 column student-learn-icons'>
			<ul>
				<li><img src="img/html5-64.png"></li>
				<li><img src="img/css3-64.png"></li>
				<li><img src="img/javascript.png"></li>
				<li><img src="img/php-logo.jpg"></li>
				<li><img src="img/github.png"></li>
			</ul> 
	</div>
	<div class='large-6 column student-learn'>
		<h2>What you will learn</h2>
		<p>A100 provides free training on skills that will prepare you for a job at local startup companies. You will create projects in a real-world setting, learn how to develop software with a team, and work within the agile software development methodology during the course of the program. </p>
		<h4><a href="alumni.php#alumni-portfolio">Check out projects from past Apprentices</a></h4>
	</div>
	<div class='large-2 column'></div>
</div>
<hr>
<div class='row long-row se-timeline'>
	<div class='large-12 column'>
		<h2>From application to start-up ready: Take a look at the A100 Timeline</h2>
		<ul>
			<li class='timeline-thumb' id='student-timeline-apply'>
				<img src="img/green_circle.png">
				Apply
			</li>
			<li class='timeline-thumb' id='student-timeline-training'>
				<img src="img/grey_circle_medium.png">
				Training
			</li>
			<li class='timeline-thumb' id='student-timeline-interview'>
				<img src="img/grey_circle_medium.png">
				Interview
			</li>
			<li class='timeline-thumb' id='student-timeline-apprenticeship'>
				<img src="img/grey_circle_medium.png">
				Apprenticeship
			</li>
			<li class='timeline-thumb' id='student-timeline-hiring'>
				<img src="img/grey_circle_medium.png">
				Hiring
			</li>
			<li class='timeline-thumb' id='student-timeline-win'>
				<img src="img/grey_circle_medium.png">
				Win
			</li>
		</ul>
		<div class='timeline-description '>
			<h3 id='timeline-desc-headline'>Apply</h3>
			<p id='timeline-para-headline'>Fill out the application form and you will be contacted by our Program Manager for an interview and a short coding test.</p>	
		</div>
	</div>	
</div>

<!-- <div class='row'>
	<br><br>
		<hr>
		<br><br>
	</div> -->
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
 				$('#student-timeline-apply img').attr('src', 'img/grey_circle_medium.png');
 				$(this).attr('src', 'img/green_circle.png');

 				var timelineId = $(this).parent().attr('id');

 				switch (timelineId)
				{
				case 'student-timeline-apply':
				  $('#timeline-desc-headline').html("Apply");
				  $('#timeline-para-headline').html('Fill out the application form and you will be contacted by our Program Manager for an interview and a short coding test.');
				  break;
				  case 'student-timeline-training':
				  $('#timeline-desc-headline').html("Training");
				  $('#timeline-para-headline').html('We have weekly training sessions and demos. You will complete projects during the 3 month program that will help you prepare to get an internship at a startup company');
				  break;
				  case 'student-timeline-interview':
				  $('#timeline-desc-headline').html("Interview");
				  $('#timeline-para-headline').html('At the end of the program we will connect you with local startups looking to hire interns. This will be your time to show what you have accomplished during the program.');
				  break;
				  case 'student-timeline-apprenticeship':
				  $('#timeline-desc-headline').html("Apprenticeship");
				  $('#timeline-para-headline').html('During this time you will be apprenticing at the startup.');
				  break;
				  case 'student-timeline-hiring':
				  $('#timeline-desc-headline').html("Hiring");
				  $('#timeline-para-headline').html('kasdasjdklasjdlasjdlasd asldkj asdlkjas dlkasjd aslkd aslkdj asdlkj');
				  break;
				  case 'student-timeline-win':
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








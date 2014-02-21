<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Apply</title>
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

<!-- <div class='intro' id='apply-intro'>
	<h1>Apply Now</h1>

</div> -->
<br><br><br><br>
<div class='row long-row apply-form-contain'>
	<h3>A100 Partner Company Application Form</h3>
	<h5>If you are looking for our Apprentice Application, please <a href="apply.php">click here.</a></h5>
	
	<p class='large-7'>The A100 Program is an exciting opportunity for your company to secure a well-trained new software developer as an intern – and possibly for full-time employment.</p>
	
	<p class='large-9'>  Independent Software works with students from local universities in Computer Science and related disciplines who are eager to find software development jobs at an exciting company. We train them in the technology and skills YOU want your developers to have and give them the opportunity to put together a portfolio of working software. Then, we match our Partner Companies with candidates to interview for internships.</p>

	<p class='large-7'>Please contact Program Manager Krishna Sampath at krishna@indie-soft.com with any of your company's specific needs that are not covered by this form.
		<br>
	We encourage you to fill it out 3 months ahead of your projected hiring date if possible, so we can prepare our trainings around your needs.
	</p>
	
	


<div>
	<dl class="tabs vertical" data-tab id='partner-apply-form-tabs'>
	  <dd class="active"><a href="#panel1">Company Information</a></dd>
	   <dd><a href="#panel2">Company Questionaire</a></dd>
	</dl>
	<div class="tabs-content vertical apply-form">
	  <div class="content active" id="panel1">
	  
	  	<form>
	  	<!-- <div class='row'>
	  		<div class='large-6 column'>
	  			<label> First Name
	  				<input>
	  			</label>
	  		</div>
	  		<div class='large-6 column'>
	  			<label> Last Name
	  				<input>
	  			</label>
	  		</div>
	  	</div>
	  	<br>
	  	<div class='row'>
	  		<div class='large-9 column'>
	  			<label> What cohort are you applying for?
	  				<select>
	  					<option>Winter Cohort</option>
	  					<option>Summer Cohort</option>
	  					<option>Later Cohort</option>
	  				</select>
	  			</label>	
	  		</div>
	  	</div>
	  	<div class='row'>
	  		<div class='large-12 column'>
	  			<label>Address
	  				<input>
	  			</label>
	  		</div>
	  	</div> -->
		<label>Company Name
			<input>
		</label>
		<label>Company Location
			<input>
		</label>
		<label>Company Contact Name
			<input>
		</label>
		<label>Contact Email
			<input>
		</label>
		<label>Contact Phone Number
			<input>
		</label>
		
	  </div>
	  <div class="content" id="panel2">
	    <p>Company Questionaire</p>
	    	<label>How many interns would you like to employ?
	    		<br>
	    		<select class='large-3'>
  					<option>1</option>
  					<option>2</option>
  					<option>3+</option>
	  			</select>
	    	</label>
	    	<label class='large-9'>With approximately how many members of your technical staff would the intern(s) be working?
	    		<br>
	    		<select class='large-3'>
  					<option>1</option>
  					<option>2</option>
  					<option>3+</option>
	  			</select>
	    	</label>
	    	<label class='large-9'>Who will be principally responsible for supervising the intern(s) technically?
	    		<br>
	    		<select class='large-12'>
  					<option>I myself will supervise the intern, but I am not a technical person.</option>
  					<option>I myself will supervise the intern, but I am not a technical person.</option>
  					<option>I have no technical staff at my company -- I need you to serve as technical supervisors.</option>
	  			</select>
	  			<label>Other: <input></label>
	    	</label>
	  </div>
	  <div class="content" id="panel3">
	    <p>Technical Experience</p>
	  </div>
	  <div class="content" id="panel4">
	    <p>Supporting Materials</p>
	  </div>
	  <div class="content" id="panel5">
	    <p>Submit & Review</p>
	    <input type='submit'>
	    </form>
	  </div>
	</div>
</div>

</div>
<hr class='white-hr'>



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

</script>



</html>
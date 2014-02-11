<?php 
	session_start();
	require("connection.php");
	
	$connect = new Database();
	$query = "SELECT * FROM a100_website.portfolio";
	$portfolio = $connect->fetch_all($query);
 ?>

<DOCTYPE html>
<html>
<head>
	<title>Portfolio Demo</title>
	
	<link rel="stylesheet" type="text/css" href="portfolio-style.css">

</head>
<body>


	<div id="scroller">
	  <div class="nav">
	    <a class="prev">&laquo;</a>
	    <a class="next">&raquo;</a>
	  </div>
	  

	 <!--  <a class="item" id='someone&something' href="#"><img src="http://i.imgur.com/5Mk3EfW.jpg" /></a>
	  <a class="item" id='someone1&something1'href="#"><img src="http://i.imgur.com/79aU67L.jpg" /></a>
	  <a class="item" id='someone2&something2' href="#"><img src="http://i.imgur.com/x3wSoFU.jpg" /></a>
	  <a class="item" id='someone3&something3' href="#"><img src="http://i.imgur.com/27fTqbA.jpg" /></a>
	  <a class="item" id='someone4&something4' href="#"><img src="http://i.imgur.com/RjdFV6n.jpg" /></a>
	  <a class="item" id='someone5&something5' href="#"><img src="http://i.imgur.com/6W8JOza.jpg" /></a>
	  <a class="item" id='someone6&something6' href="#"><img src="http://i.imgur.com/rwLY1JH.jpg" /></a> -->
<?php
	// assign values for each of the portfolio items
	foreach ($portfolio as $key => $value) {
		echo "<a class='item' id='". $value['id'] 
			."' desc='". $value['description']
			."' created='". $value['created_by']  
			."' name='". $value['name']  
			."' href='". $value['url'] 
			."' target='_blank'><img src='img/portfolio/"
			. $value['image_url'] 
			."'/></a><div class='small'></div>";
	}

?>
	</div>
	<div id='info'>
		<p>Project Name: <span id='folio_name'></span></p>
		<p>Created By: <span id='created_by'></span></p>
		<p>Description: <span id='desc'></span></p>
		<p><span id='url'></span></p>
	</div>
	
<script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
<script type="text/javascript" src='script.js'></script>

</body>
</html>
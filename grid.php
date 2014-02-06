
<!-- grid option 1 -->
<!-- <html>
<head>
	<title>Grid</title>
	<link rel="stylesheet" type="text/css" href="foundation/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="foundation/icons/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="foundation/css/style.css">
	<script src="foundation/js/vendor/modernizr.js"></script>
	  <script src='masonry/masonry.pkgd.js'></script>
</head>
<body id='grid-body'>
<?php 
	require('header.php');
?>
	<div id='grid-contain' class="js-masonry">
		<div class='item w25 h40'>25</div>
		<div class='item w30 h15'>30</div>
		<div class='item w15 h10'>15</div>
		<div class='item w20 h10'>20</div>
		<div class='item w40'>40</div>	
		<div class='item w25 h20'>251</div>
		<div class='item w30'>301</div>
		<div class='item w25 h10'>25</div>
		<div class='item w10 h30'>30</div>
		<div class='item w10 h30'>30</div>
		<div class='item w40 h25'>30</div>
	</div>

</body>

<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/fastclick.js"></script>
  <script src="foundation/js/foundation/foundation.js"></script>
  <script src="foundation/js/foundation/foundation.magellan.js"></script>
    
   <script type="text/javascript">
 	$(document).ready(function(){

 		// var columns    = 3,
        // setColumns = function() { columns = $( window ).width() > 640 ? 3 : $( window ).width() > 320 ? 2 : 1; };
        
     //    setColumns();
    	// $( window ).resize( setColumns );
 
 		var container = document.querySelector('#grid-contain');
		new Masonry( container, {
		  // columnWidth: function( containerWidth ) { return containerWidth / columns;,
		  	columnWidth: 30,
		  itemSelector: '.item',
		  gutter: 30,
		  containerStyle: null
		});
 		
 	})
 </script>

</html>
 -->




<html>
<head>
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
?>
	<div id='grid-contain'>
		<div class='row'>
			<div class='item large-4 medium-4 small-12 column'>
				<div id='a'>something</div>
				<div id='b'>something else</div>
			</div>
			<div class='item large-6 medium-6 small-12 column'>
				<div id='c'>Title</div>
				<div id='d'>Subtitle</div>
			</div>
			<div class='item large-2 medium-2 small-12 column'>
				<div id='e'>Title</div>
			</div>
		</div>
		<div class='row' id='top_row'>
			<div class='item large-4 medium-4 small-12 column tall none'></div>
			<div class='item large-6 medium-6 small-12 column'>
				<div id='f'>Title</div>
				<div id='g'>Title</div>
				
			</div>
			<div class='item large-2 medium-2 small-12 column'></div>
		</div>
		
	</div>

</body>

<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/fastclick.js"></script>
  <script src="foundation/js/foundation/foundation.js"></script>
  <script src="foundation/js/foundation/foundation.magellan.js"></script>
    
   <script type="text/javascript">
 	$(document).ready(function(){

 	
 	})
 </script>

</html>



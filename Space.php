<?php
include 'header.php';
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div id="wrapper">
<div class="dropdown">
		<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Planets of the Solar System
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="mercury.php">Mercury</a></li>
			<li><a href="venus.php">Venus</a></li>
			<li><a href="earth.php">Earth</a></li>
			<li><a href="mars.php">Mars</a></li>
			<li><a href="jupiter.php">Jupiter</a></li>
			<li><a href="saturn.php">Saturn</a></li>
			<li><a href="uranus.php">Uranus</a></li>
			<li><a href="neptune.php">Neptune</a></li>
			<li><a href="pluto.php">Pluto</a></li>
			<!-- <li class="disabled"><a href="#">Disabled</a></li>
			<li class="active"><a href="#">Active</a></li>
			<li><a href="#">Normal</li> -->
		</ul>
	</div>

<div>
<h1><?php echo(strftime("%B %d %Y, %X %Z". "<br>")); ?></h1>
</div>
<div id="space_content">
<p>This will have content about planets, stars, comets and other types of information related to planetary and galactical discoveries.</p>
<img src="images/space4.jpg" alt="space" height="400" width="350">
</div>
<h1>"The United States of Space Nigga!!!"(Dave Chappelle)...</h1>

</div>


<?php include 'footer.php' ?>
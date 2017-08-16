<?php 
include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Planets page</title>
	<style>
		.col-md-4{
			padding: 1.5em;
		}
		.col-md-4 a{
			text-decoration: none;
		}
	</style>
</head>
<body>
<div id="wrapper">
<div id="planets_content">
<h1>Planets of the Solar System.</h1>
<ul>
	<div class="col-md-4">
	<li><a href="mercury.php"><h1>Mercury</h1></a> <img src="images/mercury1.jpg" alt="mercuryprofile" height="200" width="200"></li>
	</div>
	<div class="col-md-4">
	<li><a href="venus.php"><h1>Venus</h1></a>  <img src="images/venus3.jpg" alt="venusprofile" height="200" width="200"></li>
	</div>
	<div class="col-md-4">
	<li><a href="earth.php"><h1>Earth</h1></a>  <img src="images/earth.jpg" alt="earthprofile" height="200" width="200"></li>
	</div>
	<div class="col-md-4">
	<li><a href="mars.php"><h1>Mars</h1></a>  <img src="images/mars.jpg" alt="marsprofile" height="200" width="200"></li>
	</div>
	<div class="col-md-4">
	<li><a href="jupiter.php"><h1>Jupiter</h1></a>  <img src="images/jupiter.jpg" alt="jupiterprofile" height="200" width="200"></li>
	</div>
	<div class="col-md-4">
	<li><a href="saturn.php"><h1>Saturn</h1></a>  <img src="images/saturn.jpg" alt="saturnprofile" height="200" width="200"></li>
	</div>
	<div class="col-md-4">
	<li><a href="Uranus.php"><h1>Uranus</h1></a>  <img src="images/uranus2.jpg" alt="uranusprofile" height="200" width="200"></li>
	</div>
	<div class="col-md-4">
	<li><a href="neptune.php"><h1>Neptune</h1></a>  <img src="images/Neptune.jpg" alt="neptuneprofile" height="200" width="200"></li>
	</div>
	<div class="col-md-4">
	<li><a href="pluto.php"><h1>Pluto</h1></a>  <img src="images/pluto.jpg" alt="plutoprofile" height="200" width="200"></li>
	</div>

</ul>


</div>

<?php include 'footer.php'; ?>
</div>
</body>
</html>






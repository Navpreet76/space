<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap example</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="list-group">
<a href="mercury.php" class="list-group-item">Mercury</a>
<a href="#" class="list-group-item">Second Item</a>
<a href="#" class="list-group-item">Third Item</a>
<a href="#" class="list-group-item">Fourth Item</a>
<br>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:90%">90%</div>
	</div>	
	<div class="dropdown">
		<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Planets of the Solar System
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="mercury.php">Mercury</li>
			<li><a href="venus.php">Venus</li>
			<li><a href="earth.php">Earth</li>
			<li><a href="mars.php">Mars</li>
			<li><a href="jupiter.php">Jupiter</li>
			<li><a href="saturn.php">Saturn</li>
			<li><a href="uranus.php">Uranus</li>
			<li><a href="neptune.php">Neptune</li>
			<li><a href="pluto.php">Pluto</li>
			<!-- <li class="disabled"><a href="#">Disabled</a></li>
			<li class="active"><a href="#">Active</a></li>
			<li><a href="#">Normal</li> -->
		</ul>
	</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Space page</title>
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<!-- <div id="wrapper">
	<div id="banner">
		<img src="images/space1.jpg" alt="space" width="1050" height="150">

	</div>
	<nav id="navigation">
		<ul id="nav">
			<li><a href="Index.php">Home</a></li>
			<li><a href="Shop.php">Shop</a></li>
			<li><a href="Space.php">Space</a></li>
			<li><a href="Company.php">About</a></li>
			<li><a href="exoplanets.php">Exoplanets</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="planets.php">Planets</a></li>
			
		</ul>
	</nav>
	<div id="timestamp"><li><?php
    date_default_timezone_set('Eastern Standard Time');
    echo $timestamp = date('H:i:s');?></li></div>
</div> -->
<div id="wrapper">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.google.com">Space</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="planets.php">Planets</a></li>
      <li><a href="galaxies.php">Galaxies</a></li>
      <li><a href="exoplanets.php">Exoplanets</a></li>
      <li><a href="stars.php">Stars</a></li>
      <li><a href="comets.php">Comets</a></li>
      <li><a href="blackholes.php">Black Holes</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="Supernova.php">Super Nova</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
</div>
</body>
</html>
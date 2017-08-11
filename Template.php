
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<div id="wrapper">
	<div id="banner">
		

	</div>
	<nav id="navigation">
		<ul id="nav">
			<li><a href="Index.php">Home</a></li>
			<li><a href="Shop.php">Shop</a></li>
			<li><a href="Space.php">Space</a></li>
			<li><a href="Company.php">About</a></li>
			<li><a href="Contact.php">Contact</a></li>
		</ul>
	</nav>

	<div id="content_area">
		
		<h1><?php echo(strftime("%B %d %Y, %X %Z". "<br>")); ?></h1>
	</div>
	<div id="sidebar">
		
	</div>
	<footer>
		<p>All Rights Reserved.</p>
	</footer>
</div>
</body>
</html>
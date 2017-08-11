<?php 
include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>AJAX with PHP</title>
<script>
	function showHint(str){
		if (str.length == 0){
			document.getElementById("txtHint").innerHTML = "";
			return;

		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200){
					document.getElementById("txtHint").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "gethint.php?q=" + str, true);
			xmlhttp.send();
		}
	}
</script>
<style>
	#ajax{
		background-color: #00FF7F;
		padding: 20px;
		font-style: italic;
		border: 2px solid black;
		border-radius: 10px;
		border-bottom: 10px solid black;
		
	}
</style>
</head>
<body>
<div id="wrapper">
<div id="ajax">
<h3>This is a demonstration of using AJAX with PHP</h3>
<p><b>Start Typing a name in the input field below:</b></p>
<form>
First Name: <input type="text" onkeyup="showHint(this.value)">	
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</div>
</div>
</body>
</html>
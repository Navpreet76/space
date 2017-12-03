<?php 
include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
</head>
<body>

<div class="wrapper">	
	<div class="col-md-4">
    	<div class="thumbnail">
      	<a href="/images/space1.jpg">
        <img src="/images/space1.jpg" alt="space1" style="width:90%; height: 450px"></a>
        <div class="caption">
          <p>To go where no ship has gone before!</p>
        </div>
      </a>
    </div>
  </div>
<!-- <div class="col-md-12">
	<h1>Space. The Final Frontier</h1>
	<h1 id="demo"></h1> -->
  <!-- <script>
    //Set the Date we are counting down to
    var countDownDate = new Date("Jan 1, 2018 00:00:00").getTime();

    //Update the count down every second
    var x = setInterval(function(){
      //Get Today's date and time
      var now = new Date().getTime();

      //Find the distance between now and count down date
      var distance = countDownDate - now;

      //Time Calculations for days, hours , minutes, seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      //Output the result in an element with id = "demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

      //If the count down is over, write some text
      if(distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Happy New Year!!!!!!! Welcome to 2018!!!!!!!!";
      }
    }, 1000)
  </script> -->
<!-- </div> -->
<div class="col-md-4">
    <div class="thumbnail">
      <a href="/images/space3.jpg">
        <img src="/images/space3.jpg" alt="space3" style="width:90%; height: 450px"></a>
        <div class="caption">
          <p>I dont know!!</p>
        </div>
      </a>
    </div>
  </div>
<div class="col-md-4">
    <div class="thumbnail">
      <a href="/images/space4.jpg">
        <img src="/images/space4.jpg" alt="space4" style="width:90%; height: 450px"></a>
        <div class="caption">
          <p>Hubble Picture of the Helix Nebula, a cosmic starlet.</p>
        </div>
      </a>
    </div>
  </div>
<div class="col-md-12">
	<h1>Space. The Final Frontier</h1>
	<p>Duke Nukem Frukem Ipsum Loren Whatnot fo shizzle my nizzle...</p>
</div>
  
<div class="col-md-12">
	<h1>Space. The Final Frontier</h1>
	<p>Duke Nukem Frukem Ipsum Loren Whatnot fo shizzle my nizzle...</p>
</div>



<?php include 'footer.php'; ?>
</div>

</body>
</html>






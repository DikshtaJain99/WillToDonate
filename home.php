<?php

session_start();
if(isset($_SESSION['username'])){
	echo "User logged in";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>WillToDonate</title>
	<link rel="stylesheet" type="text/css" href="home.css">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script></head>
<body>

		<div class="topnav">
			<a href="home.html"><img id="logo" src="logo.png"></a>
			<a href="#aboutus">About us</a>
		    <a href="#why">Why WillToDonate?</a>
		    <a href="#Volunteer">Volunteer for us</a>
		    <a href="#">FAQs</a>
		    <a href="#">Contact us</a>
		</div>


  		<div class="login_btn">
  			<svg id ="svg" width="100" height="100">
			    <circle cx="50" cy="50" r="40" stroke="white" stroke-width="2" fill="black"/>
			    <svg>
			    	<circle cx="50" cy="30" r="8" stroke="white" stroke-width="2"/>
			    </svg>
			    <svg>
			    	<rect x="37" y="40" rx="7" ry="8" width="25" height="30" style="fill:black;stroke:white;stroke-width:2;" />
			    </svg>
			</svg><br>
			<a href="login.html">LOGIN</a>
		</div>
		
	</div>
	<div id="container1">
		<br>
		<h1 style="text-align: left;">Spread happiness</h1>
		<h4>be the change you want to see!</h4><br>
		<button id="donate" action="donate.html">Donate</button>
	</div>
<!--
	<img id="bgimg" width="100%" height="40%" src="E:\Projects\Wiil_To_Donate\homeimage.jpeg" alt="bg">-->
	<div id="container2">
	    
	    <h2 id="aboutus">About Us</h2>
	    <hr>
	    <p>Looking at the poverty driven society of nowadays,we ,Computer Engineers from K.J.Somaiya College of Enginnering were inspired to create this website to connect people who have things to donate to people who are in need of them.</p>
	    <p>Our site provides a medium for donators and NGOs to connect so that the people who are in need can be provided things like clothes, food, shoes, stationary etc. in time.</p>
	    
	    <br>
	    <br>

	    <h2 id="why">Why to Donate through WillToDonate?</h2>
	    <hr>
	    <br><br>
	    
	    <div class="left">
	    	<iframe width="400" height="315" src="https://www.youtube.com/embed/LlNMw3hQcF4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    	<br>
	    </div>
	    <div class="right">
	    	<p>Though Donation is done without expecting anything in return, Our site displays a weekly list of top 10 Donators and also gives gift coupons to top donator.</p>
	    	<p>Your little time and your old things can bring a smile on someones face so why not do it?</p>
	    </div>
	    
	    
	    
	    <h3 id="Volunteer">Volunteer For us !</h3>
	    <hr>
	    <br><br>
		<p>Volunteers would have the work of organising the campaigns, if possible arranging for the pickup and deliveries of Donation from the Donator to NGO.</p>
		<p>Planning Fund Raising activities for emergency requirements should also be taken care of by the volunteers.</p>
	    <button class="Volunteer" onclick="window.location.href = 'volunteerform.html';">REGISTER</button><br><br>
	</div>

	<?php

session_start();
if(isset($_SESSION['username'])){
	echo "User logged in";
}


?>


</body>
</html>

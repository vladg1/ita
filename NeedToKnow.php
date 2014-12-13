<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Snow</title>
<link href="Snowcss.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="main">
	<div id="header">
		<div class="picture">
			<a href="Snow.php"><img src="images/Logo.jpg" alt="Snow"></a>
		</div>
		<div class="menu">
			<ul id="navmenu">
				<li><a href="Snow.php">Know Your Gear</a>
					<ul class="sub1">
						<li><a href="Boards.php">Boards</a></li>
						<li><a href="Bindings.php">Bindings</a></li>
						
						
					</ul>
				</li>
				<li><a href="Needtoknow.php">Snow fest</a>
					<ul class="sub1">
						<li><a href="Adventurecorner.php">Adventure Corner</a></li>
						<li><a href="Signup.php">Sign Up</a></li>
					</ul>
				</li>
				<li><a href="Learntoride.php">Learn To Ride</a></li>
				<li><a href="ContactUs.php">Contact Us</a></li>
			</ul>
		</div>
	</div>	
		<div id="body">
		<div id="rblock">

			<div class="bindtext">
		<b><font size="5" font color="DodgerBlue ">SnowFest event</font></b>
			
			<p style="text-align: center"><br>Snow fest is a snow competition taking place around the world.<br>
		<br>You can visit the official web site by clicking on the photo below<br>
		</p>
		</div>
		<div class="snowfest2">
		<a href="http://snowboard.nl/event/snowfest/" ><img style="border:5px solid black" id ="snowfest" src="images/image.jpg" alt="snowfest"></a><br>
		<center><em>(Click on the image to go to SnowFest event)</em></center>
		</div>
		<div>
		<div class="snowpic1">
			
		<img  src="images/04.jpg" style="border:5px solid black" width="320" height="440" >
		
		</div><br>
		<div class="snowpic2">
			<img src="images/09.jpg"style="border:5px solid black" width="320" height="440" >
		</div>
		
		</div>
			<div class="text12">
				
			<p> <font size="5" font color="DodgerBlue ">The Art of Flight movie</font></b><br><br>

				<center><em>Travis Rice, John Jackson and a host of other legendary snowboarders spent two years travelling to some of the most incredible wintersports locations in the world with their custom-made kit and groundbreaking filming equipment, and the result is Curt Morgan's stunning 80-minute feature film <font color="DodgerBlue "><q>The Art of Flight</font></q>
				</em></center><br><br>

				<center><iframe width="640" height="360" src="//www.youtube.com/embed/kh29_SERH0Y?rel=0&amp;showinfo=0" frameborder="4" allowfullscreen></iframe>
				</center>
				<br>
				<font color="DodgerBlue "><b>PRODUCER</font></b> : Red Bull Media House, Brain Farm, Quiksilver<br>
				<br>	
				<font color="DodgerBlue "><b>ATHLETES</font></b> : Travis Rice, John Jackson, Mark Landvik, Scotty Lago, Jake Blauvelt, Nicolas Mueller, Jeremy Jones, DCP and Pat Moore<br>
				<br>
				<font color="DodgerBlue "><b>LOCATIONS</font></b> : Chile, Alaskas Tordrillo Range, Patagonia, Wyomings Teton and Snake River Ranges, Aspen, and Canada incl. Revelstoke Nelson<br>
				<Br>
				<font color="DodgerBlue "><b>PREMIERES</font></b> : World premiere in New York, September 7th 2011 + tour calendar<br><br>
			</div>	
			</p>
		</div>
		<div id="mblock">
		
		<a href="https://www.facebook.com/pages/Snowboarding/107496599279538?ref=br_tf"><img id="b" src="images/facebook.jpg" alt="burton"></a>
		<a href="http://eur.burton.com/on/demandware.store/Sites-Burton_EU-Site/default/Home-Show"><img id="b" src="images/burton.jpg" alt="burton"></a>
		<a href="http://jonessnowboards.com/"><img id="b" src="images/Jones.jpg" alt="joanes"></a>

		<a href="https://twitter.com/SnowboardTour"><img id="b" src="images/twiter.jpg" alt="joanes"></a>
	</div>	
</div>
<div id="footer">
     <?php
    include 'Session.php';
    ?>

<p style="text-align: center"><?php
  $footertext =" &#169;VladCorp, Inc. All Rights Reserved.";
echo $footertext ?></p></div>
</div>
</div>
</body>
</html>
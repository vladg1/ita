<?php
$footertext = 'asd';
setcookie("footer", $footertext, time()+3600);
?>

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
	 	<b><font size="5" font color="DodgerBlue ">How to set up your snowboard bindings</font></b>
			
		<font size="4">	<br>
		
	
	<p><font size="4"> <br>
		<center><em>There are 3 key snowboard binding components<br></font><br></center></em>
	<ul type="circle">
	<li><b><font color="DodgerBlue ">Highback</b></font></li>This vertical plate rests against your Achilles tendon to
	give you control of your board's rear edge. Riders focused
	on speed want tall,stiff highbacks for enhanced control. Park 
        riders 	and novices usually prefer
	the turning ease found in a shorter, flexible highback.
	<li><b><font color="DodgerBlue ">Straps</b></font></b></li>These secure a boot in place. Simple is good.
	<li><b><font color="DodgerBlue">Baseplate</b></font></b></li>This padded platform features either a system 
	of bolts or discs to attach the plates to a board's bolt pattern or
	binding	interface. Adjustments can be made to attain your preferred
	stance.<br><br>
		
		
		</ul>
		</font>
		</p>
		</div>
		<div id="poza2">
			<img style="border:4px solid LightSeaGreen " width="500px" height="300px" src="images/parts.jpg" >
		</div>
		<center><em>(Snowboard binding components)</em></center>
		<div class="bindtext">
		<b><font size="4" font color="DodgerBlue ">How to set your Stance <font>Position</font> and <font>Width</font></font></b><br>
		
		<br>
		<font color="DodgerBlue ">First step</font> is to figure out whether you prefer riding with your left foot forward (<font color="DodgerBlue ">regular</font>) or your right leg forward (<font color="DodgerBlue ">goofy</font>). Have someone push you from behind and whichever foot you step out with is usually a good indication of what your front foot will be.<br><br>
		<div class="stancepoza">
			
		<img src="images/Binding-set-up.jpg" width="600" height="350" style="border:4px solid LightSeaGreen" >
		
		</div>
		<br>
		Snowboards usually have a pattern of holes known as insets embedded into the top sheet. This allows you to adjust the position of your bindings as you choose. Most boards will have a reference stance, which is the recommended (and often most centred) stance for that size board. Many riders will adjust their stances either forwards or backwards depending on the kind of riding that they want to be doing.
		<ul  type="circle">
			<li><font color="DodgerBlue "><b>Beginners:</li></b></font>
				<ul type="disc">
					<li>
						<font> a centred stance is usually best allowing you to switch between regular and goofy if you desire.</font>

					</li>
					<li><font>
						 a good stance width for learning is one that is roughly equivalent to your shoulder width or the distance from your knee to the ground.
					</font></li>
				</ul>
				<li>
					<font color="DodgerBlue "><b>Park and Freestyle</b></font>
					<ul type="disc">
						<li>
							<font>
								again a centred stance is best so that the nose and tail are the same length. This makes landing tricks more stable and allows you to ride switch easier.
							</font>
						</li>
						<li><font>
							generally wider stances are preferred. This improves stability and balance by lowering your centre of gravity slightly, which helps with landing jumps and spinning in the air.
						</font></li>
					</ul>
				</li>
				<li>
					<font color="DodgerBlue "><b>All-Mountain:</b></font>
					<ul type="disc">
						<li><font>
							 Snowboarders who like to ride around the whole mountain often set their stance back a few insert holes. This makes the nose slightly longer than the tail improving float in powder and allowing you to really load up and pressure the tail coming out of fast turns. Riding switch is still possible.
						</font></li>
						<li><font>
							generally wider stances are preferred. This improves stability and balance by lowering your centre of gravity slightly, which helps with landing jumps and spinning in the air.
						</font></li>
					</ul>
				</li>
				<li>
					<font color="DodgerBlue "><b>All-Mountain and Freeride</b></font>: generally a slightly narrower stance is best as this reduces pressure on the nose to improve float in powder. Also a narrower stance allows you more movement in your knees and hips allowing you to initiate and drive through turns more effectively.
				</li>
		</ul>

		</div>
	
		</div>
		<div id="mblock">
		
		<a href="https://www.facebook.com/pages/Snowboarding/107496599279538?ref=br_tf"><img id="b" src="images/facebook.jpg" alt="burton"></a>
		<a href="http://eur.burton.com/on/demandware.store/Sites-Burton_EU-Site/default/Home-Show"><img id="b" src="images/burton.jpg" alt="burton"></a>
		<a href="http://jonessnowboards.com/"><img id="b" src="images/Jones.jpg" alt="joanes"></a>

		<a href="https://twitter.com/SnowboardTour"><img id="b" src="images/twiter.jpg" alt="joanes"></a>
	</div>	
</div>
<div id="footer">
    
   
    
<p style="text-align: center"><?php
  $footertext =" &#169;VladCorp, Inc. All Rights Reserved.";
echo $footertext
        
        
        ?></p>
	</div>
</div>
</body>
</html>
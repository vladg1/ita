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
						<li><a href="Needtoknow.php">Need to know</a></li>
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
		<a href="http://snowboard.nl/event/snowfest/" ><img id ="snowfest" src="images/image.jpg" alt="snowfest"></a>
		<a><img id ="asta" src="images/img.jpg" alt="snowfest"></a>
		<a><img id ="aia" src="images/fig.jpg" alt="snowfest"></a>
		
		<p style="text-align: center"><br>Snow fest is a snow competition taking place around the world.<br>
		<br>Some of the best snow boarders will be present,suck as Travis Rice and many more!<br>
		<br>You can visit the official web site by clicking on the original Photo at the top of the page<br>
		</p>
		</div>
		<div id="mblock">
		
		<a href="https://www.facebook.com/pages/Snowboarding/107496599279538?ref=br_tf"><img id="b" src="images/facebook.jpg" alt="burton"></a>
		<a href="http://eur.burton.com/on/demandware.store/Sites-Burton_EU-Site/default/Home-Show"><img id="b" src="images/burton.jpg" alt="burton"></a>
		<a href="http://jonessnowboards.com/"><img id="b" src="images/Jones.jpg" alt="joanes"></a>

                <a href="https://twitter.com/SnowboardTour"><img id="b" src="images/twiter.jpg" alt="joanes"></a><br>
                   <p id="textalaign">
                            Welcome Vlad.This is the admin page,only available for the users.<br>
                            
                            
                        
                        <a id="textalaign" href="logout.php" >Click here to log out </a>
                        </p>
                
                
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
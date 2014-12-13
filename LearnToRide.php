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
				<li><a href="  Snow.php">Know Your Gear</a>
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
		<div class="ltrtext"> 
		<b><font size="5" font color="DodgerBlue ">Burton Snowboards Learn to Ride Program</font></b>
		<font size="4">	<br><br>
 		<p style="text-indent:3em;">Successfully learning to snowboard requires the right attitude, the right instruction, and the right equipment. Burton Snowboards specialized "Learn to Ride" (LTR) line of snowboards, boots and bindings makes it vastly easier to pick up the sport - check out this article to find out why!
 		Snowboarding is a fun, thrilling sport that is enjoyed
		every year by thousands of people around the world.Learning to snowboard can seem pretty daunting at first, but with a little preparation and a positive attitude, you'll be making turns down the mountain in no time!
		Much like the first day of school, being prepared for your first day of snowboarding can alleviate a lot of the anxiety and worries that go along with trying something new.
		</p>
		<br>
		<div class="ltrpoza">
		<a href="http://www.burton.com/default/learntoride"><img id="ltr1" style="border:4px solid DodgerBlue" src="images/LTR.jpg" width="700" height="150"></a>
</div>
		<br>
		 <dl>
		  <dt><b><font color="DodgerBlue ">What to Wear Snowboarding</dt></font></b>
		  <dd>Dress for success. The clothes make the man (or woman!). Look the part. All of these sayings can be applied to snowboarding - having the proper clothing will make your first days on snow more enjoyable and allow you to focus solely on learning to ride.
			</dd>
		  <dt><b><font color="DodgerBlue ">Snowboard Disciplines</dt></font></b>
		  <dd>Just like skiing, snowboarding can be divided into different disciplines - freestyle, all-mountain and racing. Each discipline requires slightly different equipment and technique. 
		Maximize your first few days on snow by deciding what type of snowboarding suits you best.
		</dd>
		   <dt><b><font color="DodgerBlue ">How to Choose a Snowboard</dt></font></b>
		  <dd>Once you've narrowed down your search for a new snowboard, pop in here to ensure you're on the right track - learn about the different types of boards, sizes, construction and more.
		</dd>
		   <dt><b><font color="DodgerBlue ">Before You Buy a Snowboard</dt></font></b>
		  <dd>Buying your first (or your fifth) snowboard is a big investment. Make sure you know what to look for and what to avoid before plunking down your hard earned cash on a new snowboard.
		</dd>
		   <dt><b><font color="DodgerBlue ">How to Fit Snowboard Boots</dt></font></b>
		  <dd>Regardless of whether you buy or rent snowboard boots, the proper fit is imperative. Ill-fitting boots will make learning to snowboard much more difficult than it should be, so see to it that you know how a snowboard boot should properly fit before you ever step foot on snow.
		</dd>
		</dl> 
		</p>
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
     <?php
    include 'Session.php';
    ?>

<p style="text-align: center"><?php
  $footertext =" &#169;VladCorp, Inc. All Rights Reserved.";
echo $footertext ?></p></div>
</div>
</body>
</html>
<?php
$footertext = 'asd';
setcookie("footer", $footertext, time()+3600);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Snow</title>
<link href="Snowcss.css" type="text/css" rel="stylesheet"/>
</head>0
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
		<b><font size="5" font color="DodgerBlue ">How to chose your snow board</font></b>
			<p><center><b><br>There are three main types of snowboard profile: <font color="DarkGreen  ">camber</font>,  <font color="DarkRed ">rocker</font>,  and<font color="MidnightBlue  "> flat.</font><br></center></b>
				<div id="un">
						<br><b><font color="DarkGreen  ">Camber</font><br></b>
					<p id="unu">
						<font color="LimeGreen"> This is the traditional profile for skis and snowboards. Camber is a slight upward curve in the middle of a ski or board, with the contact points - where an unweighted ski or board contacts the snow - close to the ends. Camber requires more precise turn initiation and offers superb precision with plenty of power on groomed terrain and harder snow. The rider's weight puts an even and concentrated pressure on the edge from tip to tail, resulting in increased edgehold and better "pop". Racers and high level park riders often prefer camber.</font>
					</p>
				</div>
				<div id="id"><img src="images/1.jpg" alt="Snow"></a></div>
				<div id="do">
						<br><b><font color="DarkRed ">Rocker</font><br></b>
					<p id="unu">
						<font color="FireBrick ">Rocker (also called reverse-camber) is just as it sounds – camber turned upside down. All skis and snowboards, rockered or cambered, when put on edge and weighted in a turn achieve reverse-camber. Cambered skis and boards produce more pressure on the snow at the tip and tail since they have to flex further to achieve this curve. The term rocker is borrowed from watersports where rocker is common. Rocker skis and snowboards offer superior float in the soft snow and increased ease of turn initiation with less chance of "catching" an edge. As skis in general get wider, rocker helps keep the new shapes maneuverable for a wider range of skiers. Wide ski and board shapes designed primarily for powder are often rockered.</font>
					</p>
				</div>
				<div id="id"><img src="images/2.jpg" alt="Snow"></a></div>
				<div id="tre">
						<br><b><font color="MidnightBlue  ">Flat</font><br></b>
					<p id="unu">
						<font color="MediumBlue ">Flat is often found between the tip and the tail of the ski/snowboard. Flat means flat – if you lay the ski or board on a table with no weight on it, there won’t be any space between the base and the table. Completely flat technology is more common with snowboards than with skis, and it is much more common to see skis that are almost flat underfoot with rocker in the tip and sometimes tail. Flat makes easy transitions, with better edge grip than rocker and better maneuverability than camber.</font>
					</p>
				</div>
				<div id="id"><img src="images/3.jpg" alt="Snow"></a></div>
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
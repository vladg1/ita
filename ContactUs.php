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
		<div id="formdiv">
		<form class="elegant-aero" method="post" action="ContactPHP.php">
                    <div>
                        <label>
                            <span>Your NickName :</span>
                               
                                <input type="text" name="nickname" placeholder="Other users will see it" required/>
                         </label>
                    </div>
                    <div>
                        <label>
                       <span> Your Email :</span>
                       <input type="email" name="cemail" placeholder="Valid Email Address" required/>
                       </label>
                    </div>
                    <div>
                        <label>
                            <span> Message :</span> 
                       <textarea name="message" placeholder="Leave us a happy comment (:"></textarea>
                       </label>
                    </div>
                
    
               
                    <button class="button" type="button" value="send">Send your message</button>
               
            </form>
		</div>
		<div id="caca2">
		<address>
                <p><br>Address: Boardwalk Empire Street<br>
		<br>Opening Hours: Mo-Sa 09.00 : 17.00<br>
                <br>               Su Closed<br>
		<br>E-mail address: Borders@snowmail.com<br>
		<br>Location: *see below*<br></p>
		</address>
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
echo $footertext ?></p>
	</div>
</div>
</body>
</html>


 <?php
 session_start();
$footertext = 'asd';
setcookie("footer", $footertext, time()+3600);


	
	//$dbhost = "athena01.fhict.local";
	//$password = "GCBKQ7ecdd";
	//$dbuser = "dbi302277"; 
	//$dbname = "dbi302277";

			$dbuser = "root";
			$dbpassword = "vlad";
			$dbhost = "localhost"; 
			$dbname = "blindsnow";
			$username = $_SESSION['username'];

			$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);
			$query = $conn->query("SELECT * FROM users WHERE user = '$username'")->fetch();

			$name = $query['firstName'];
			$email = $query['email'];
			$password = $query['password'];


?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<head>
<title>Snow</title>
<link href="Snowcss.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="main">
 <div id="time">
         
         <?php
            date_default_timezone_set("Europe/Amsterdam");
            echo "Todays time " . date("h:i:s a") . "<br>     date :  " . date("Y.m.d");
        
          ?>
    
    </div>
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
							<?php 
								echo "<li><a href=\"AdventurecornerPrivate.php\">More Adventure</a></li>";
							 ?>
						</ul>
				</li>
				<li><a href="Learntoride.php">Learn To Ride</a></li>
				<li><a href="ContactUs.php">Contact Us</a></li>
			</ul>
		</div>
	</div>	
		<div id="body">
		<div id="rblock">
		<div class="advtext">
				<font size="5"  font color="DeepSkyBlue" > <br><b>
				Welcome to <em>Your</em> Adventure Corner!
				</b><br></font>
				<font size="4"  font color="CornflowerBlue " > <br><b>
				<font color>Start</font>.<font>Share</font>.<font>Remember</font>.Take a moment out of your time to word out any experience you want to share with other winter sports enthusiasts <a href="SignUp.php">here.</a>
				</b><br></font>

		</div>
		<div class="logout">
				<?php 
					 echo 'Welcome ' . $_SESSION['username'] . '!' . '<br>  <a href="logout.php">LEAVE BITCH</a>';
				 ?>
				 <div class="fo">
				 <form action="" method="post">		
				 <br>
				 
						<label for='Name' >Name:</label>
						<input type='password' name='name' id='password' maxlength="40" value="<?php echo $name; ?>" /><br>

						 
						<label for='email' >Email:</label>
						<input type='password' name='Email' id='password' maxlength="50" value="<?php echo $email; ?>"/><br>

						<label for='password' >Pass:</label>
						<input type='password' name='password' id='password' maxlength="50" value="<?php echo $password; ?>"/>&nbsp&nbsp&nbsp&nbsp


						<input type='submit' name='edit' value='Edit' />

					</form>
					</div>
		</div>		
		<div class="elegant-aero2">
			<fieldset>
				 	 <legend>Your opinnion matters!</legend>
					 <textarea name="commentarea" rows="3" cols="90" placeholder="Leave us a happy comment (:"></textarea>
					 <input type="hidden" name="userid" value="1">
				</fieldset>
				 <input class="button" type="submit" name="comentubtton" value="Submit comment"></input>
				
		</div> 
		<div class="com">
			<fieldset>
				<legend>Read.Relate.Enjoy</legend>
			</fieldset>
		</div>

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
echo $footertext
        
        
        ?></p>
	</div>
</div>
</body>
</html>
<!-- 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $("input").click(function () {
                $(this).hide();
            });
        });
    </script> -->
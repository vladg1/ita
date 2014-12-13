<?php
$footertext = 'asd';
setcookie("footer", $footertext, time()+3600);
?>
<?php
session_start();
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Snow</title>
<link href="Snowcss.css" type="text/css" rel="stylesheet"/>



<?php
      
        if (ISSET($_GET['SignUp'])) {
            if ($_POST['nume'] == 'admin' && $_POST['parola'] == 'admin') {
                $_SESSION['loggedin'] = 1;
                echo '<script> window.location="another.php"; </script> ';
                exit;
            } else {
                echo "Please check the input data";
            }
        }
        ?>



</head>
<body>
<div id="main">
	<div id="header">
		<div class="picture">
			<a href="Snow.php"><img src="images/Logo.jpg" alt="Snow"></a>
		</div>
		<div class="menu">
			<ul id="navmenu">
				<li><a>Snow Gear</a>
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
		
                    <div id="cur" >
                        <p id="textalaign">
                            Welcome Vlad.This is the admin page,only available for the users.<br>
                            
                            
                        
                        <a id="textalaign" href="logout.php" >Click here to log out </a>
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
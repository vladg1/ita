

<head>
    <title>Snow</title>
    <link href="Snowcss.css" type="text/css" rel="stylesheet"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $("p").click(function () {
                $(this).hide();
            });
        });
    </script>
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


                <div id="mulfa">
                    <center><em>(Click to continue reading...)</center></em>
                    <p id="m" style="text-align: center"><font color="#483D8B">Snowboarding is more then just a sport. Snowboarding is the way to connect with the dormand nature and <font color ="#04B4AE">passion</font> is its core.
                        The early nineties represent one of the most important and exciting time in snowboarding. The boundaries of what could be done on a snowboard were seemingly reinvented
                        every year. Every season new tricks emerge,increased in both <font color ="#04B4AE">style</font> and <font color ="#04B4AE">originality</font>.Snowboarding was still in its infancy, and not yet embraced by the mainstream. Nobody
                        had turned it into a mass COMMODITY(yet).You could push the boundaries and evolve at your own pace.<font color ="#04B4AE">Everyone</font> was no <font color ="#04B4AE">one</font>,making <font color ="#04B4AE">something</font> out of <font color ="#04B4AE">nothing</font>. <br><br>	<br></font>

                    <left><img style="border:3px solid RoyalBlue ;" src="images/10.jpg" width="350" height="300" align="left"></left><br><br><br><br><br><br>
                    <img style="border:3px solid RoyalBlue ;" src="images/07.jpg" width="350" height="300" align="right">

                    <br>
                    </p>

                    <br>


                    <p><img style="border:3px solid RoyalBlue ;" src="images/03.jpg" width="500" height="350" align="middle">

                        <font color="04B4AE">


                        Blind Snow was developed with the sole purpose of aiding newcomers/newbies   to quickly/easily   get the hang of/become aquainted with/  winter sports. But being passionate only gets you halfway; you also need to bear/keep in mind the quality of your bindings and your snowboard (to ensure your safety). If you consider yourself a rookie ,go here to learn about Burton's LTR program.</font>
                    </p><br>

                    <br><p>Anyway/Without further ado, go ahead and surf the website : here you can learn about the upcomming SnowFest, register in order to leave a comment for the viewers or leave us feedback as a guest.</p><br>
                    <p>
                        <img src="images/11.jpg" style="border:5px inset RoyalBlue ;"  width="680" height="450" align="middle">
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
                $footertext = " &#169;VladCorp, Inc. All Rights Reserved.";
                echo $footertext
                ?></p></div>
    </div>
</div>
</body>
</html>


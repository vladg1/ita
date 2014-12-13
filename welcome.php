<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      


Welcome <?php echo $_POST["name"]; ?><br>
<?php

$name = $email = $message = "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
    $nameErr = "Your name is required";
  } else {
    $name = test_input($_POST["name"]);
  } 
    if (empty($_POST["email"])) {
    $emailErr = "Your e-mail is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
    $emailErr = "Invalid email format";
}
    
    

  if (empty($_POST["message"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["message"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


    </body>
</html>

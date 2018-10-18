<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message =$_POST["message"];

$msg ="

Name: $nameEmail: $email
Comments:
$message
";

$to= "audrey.davis14@gmail.com";
$subject = "Web Form";
$message = $msg;
$headers = "Web Form";
mail($to,$subject,$message,$headers);

?>



<!-- // define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }


  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  
}
?> -->
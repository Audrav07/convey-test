<?php
if(isset($_POST['submit'])){
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
echo "Mail Sent. Thanks you";
}
?>




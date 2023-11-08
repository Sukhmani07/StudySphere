<?php

$name = $_POST['name'];
$email = $_POST['email'];
$fieldofinterest= $_POST['fieldofinterest'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "abc@gmail.com";

mail($recipient, $fieldofinterest, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta hllp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
         
    <title>StudySphere</title>
    </head>
<body> 
    <div class="container">
        <h1>Thank you for contacting. We will get back to you ASAP.</h1>
         <p class="back">Go Back to the <a href="index.html">homepage</a>.</p>
         
        </div>
         
     
</body>
</html>

';


?>
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$story= $_POST['story'];

$to = "manub2333@gmail.com";
$subject = "Mail From kein urteil";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Story =" . $story;

$headers = "From: noreply@mannatb.lovestoblog.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$number= $_POST['number'];

$to = "fathimashifanak@gmail.com";
// $subject = "Mail From Rinshad";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Subject =" . $subject . "\r\n Number =" . $number;
$headers = "From: fathimashifanak@gmail.com" . "\r\n" .
"CC: fathimashifanak@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:../index.html");
?>


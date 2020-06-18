<?php

$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$name=$_REQUEST['name'];
$message=$_REQUEST['message'];

$sendingMessage="Email:'".$email."'                           Phone:'".$phone."'                           Name:'".$name."'                           Message:'".$message."'";

require("assets/PHPMailer-master/PHPMailerAutoload.php"); //or select the proper destination for this file if your page is in some
$mail = new PHPMailer();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->Username = "netparam.hrm@gmail.com"; //account with which you want to send mail. Or use this account. i don't care :-P
$mail->Password = "net@param01"; //this account's password.
$mail->setFrom("'"+$_REQUEST['email']+"'");
$mail->isSMTP();  // telling the class to use SMTP
$rec1="info@netparam.in"; //receiver. email addresses to which u want to send the mail.
$rec2="netparam.manojsharma@gmail.com";
/*$rec3="netparam.sonalmalhotra@gmail.com";
$rec4="netparam.lalitmatoliya@gmail.com";

$mail->AddAddress($rec3);
$mail->AddAddress($rec2);
$mail->AddAddress($rec4);*/

$mail->AddAddress($rec1);
//$mail->AddAddress($rec1,$rec2,$rec3);
$mail->Subject  = "Mail from Netparam Technologies Pvt. Ltd.";
$mail->Body     = $sendingMessage;
$mail->WordWrap = 500;
if(!$mail->Send()) {

echo 'Mailer error, Please Try Again Later.. '. $mail->ErrorInfo;
} else {
echo 'success';
}
?>
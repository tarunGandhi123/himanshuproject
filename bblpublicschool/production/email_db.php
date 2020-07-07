<?php

include("phpmysqlconnect.php");
ini_set('display_errors',0);
ini_set('display_startup_errors',0);
error_reporting(E_ALL);
require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
$v_email1 = $_POST['v_email'];
$v_subject1 = $_POST['v_subject'];
$V_attachment=basename($_FILES["v_attachment"]["name"]);
$v_content1 = $_POST['v_content'];
$mail = new PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->SMTPDebug = 0; //Alternative to above constant
$mail->isSMTP();  // tell the class to use SMTP
$mail->SMTPAuth   = true;
$mail->Port= 465;
$mail->SMTPSecure='ssl';
$mail->Username='bblpsfbd@gmail.com';
$mail->Password='Bblpublic123@';
$mail->setFrom('support@bblpublicschool.co.in',"BBl Public School");
$mail->addAddress($v_email1);
$mail->isHtml(true);
$mail->Subject=$v_subject1;
$mail->Body=$v_content1;
if(!$mail->send()){
echo $result="Something Went Wrong";

}
else{
  echo $result="message send successfully";
}
$targetDir = "uploads/";
//print_r($_POST);
$today = date("Y-m-d");
$time = date("H:i:s");
$fileName = basename($_FILES["v_attachment"]["name"]);
if(empty($fileName)){
$targetFilePath ="";
$v_email1 = $_POST['v_email'];
$v_subject1 = $_POST['v_subject'];
$V_attachment=basename( $_FILES["v_attachment"]["name"]);
$v_content1 = $_POST['v_content'];
$v_msg=$v_content1.$targetFilePath;
  $query_email = "insert into tbl_email(v_to, v_subject, v_message,v_attachment,d_date,d_time) values ('$v_email1', '$v_subject1','$v_content1','$targetFilePath','$today','$time')";
$execute_query_email = mysqli_query($db,$query_email);
if($execute_query_email=1){
}}
else{
$targetFilePath = $targetDir.$fileName;

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["v_attachment"]["name"], $targetFilePath)) {
  echo  $msg = "attachment uploaded successfully";
  }
  else{
  echo   $msg = "Failed to upload attachment";
}


}


?>

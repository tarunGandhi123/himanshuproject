<?php
include("phpmysqlconnect.php");
$targetDir = "uploads/";
//print_r($_POST);
$fileName = basename($_FILES["v_attachment"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$v_email1 = $_POST['v_email'];
$v_subject1 = $_POST['v_subject'];
$V_attachment=basename( $_FILES["v_attachment"]["name"]);
$v_content1 = $_POST['v_content'];

echo $query_email = "insert into tbl_email(v_to, v_subject, v_message,v_attachment) values ('$v_email1', '$v_subject1','$v_content1','$targetFilePath')";
$execute_query_email = mysqli_query($db,$query_email);
$move=move_uploaded_file($_FILES["v_attachment"]["name"], $targetFilePath);
if (move_uploaded_file($_FILES["v_attachment"]["name"], $targetFilePath)) {
  echo "1";
  echo  $msg = "attachment uploaded successfully";
  }else{
  echo   $msg = "Failed to upload attachment";
  }


//print_r($_POST);

?>

<?php
include("phpmysqlconnect.php");
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$V_user_email = $_POST["v_user_email"];
 $V_user_photo= $_FILES["v_user_photo"];

$V_password=$_POST['v_password'];
$v_confirm_password=$_POST['v_confirm_password'];
echo $v_password_md5 =md5($v_confirm_password);
if($V_password == $v_confirm_password)
{
  $targetDir = 'uploads/';
   $fileName = $_FILES["v_user_photo"]["name"];
  $targetFilePath = $targetDir.$fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  $target_file = $targetDir . basename($_FILES["v_user_photo"]["name"]);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");
  // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
      $image_base64 = base64_encode(file_get_contents($_FILES["v_user_photo"]["tmp_name"]) );
      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
      // Upload file
    if(move_uploaded_file($_FILES['v_user_photo']['tmp_name'],$targetDir.$fileName)){
$update_admin_details ="Update tbl_user_login set v_user_email='$V_user_email',v_user_password='$v_password_md5',v_user_photo='$target_file' where v_user_email='$V_user_email'";
$res_update_admin_details=mysqli_query($db,$update_admin_details);
}
}

}
else{
echo "<script>alert('Please enter same password as confirm password');</script>";
}
?>

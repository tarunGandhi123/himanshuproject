<?php
include("phpmysqlconnect.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$targetDir = 'uploads/';
$fileName = $_FILES["v_teacher_photograph"]["name"];
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$target_file = $targetDir . basename($_FILES["v_teacher_photograph"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");


// Check extension
  if( in_array($imageFileType,$extensions_arr) ){

    $image_base64 = base64_encode(file_get_contents($_FILES["v_teacher_photograph"]["tmp_name"]) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

    // Upload file

  if(move_uploaded_file($_FILES['v_teacher_photograph']['tmp_name'],$targetDir.$fileName)){
    // move_uploaded_file($_FILES["v_teacher_photograph"]["name"], $targetFilePath);
$V_teacher_photograph=basename( $_FILES["v_teacher_photograph"]["name"],".jpg");
$V_teacher_name1 = $_POST['v_teacher_name'];
$V_teacher_email1 = $_POST['v_teacher_email'];
$V_gender1 = $_POST['v_gender'];
$V_highest_qualifications1 = $_POST['v_highest_qualifications'];
$V_salary1 = $_POST['v_salary'];
$V_phone1 = $_POST['v_phone'];
$V_address1 = $_POST['v_address'];
$V_account_no1 = $_POST['v_account_no'];
$V_bank_name1 = $_POST['v_bank_name'];
$V_ifsc_code1 = $_POST['v_ifsc_code'];
$V_teacher_id1 = $V_teacher_name1.$V_phone1;
echo $query_add_teacher_details = "insert into tbl_teacher_record(v_teacher_id, v_teacher_photograph, v_teacher_name, v_teacher_email, v_gender, v_address,v_highest_qualifications, v_salary, v_phone, v_account_no, v_bank_name, v_ifsc_code,i_status) values ('$V_teacher_id1', '$targetFilePath', '$V_teacher_name1','$V_teacher_email1', '$V_gender1','$V_address1', '$V_highest_qualifications1','$V_salary1', '$V_phone1', '$V_account_no1','$V_bank_name1','$V_ifsc_code1',1)"; //Insert Query
$result_query_add_teacher_details= mysqli_query($db,$query_add_teacher_details);
echo "Successfully Insert Teacher";
}
//
else{
echo   $msg = "Failed to upload image and Cannot submit data";
}
}
else {
echo "Invalid Extension";
}
 ?>

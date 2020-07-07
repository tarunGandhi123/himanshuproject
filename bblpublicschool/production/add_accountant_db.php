<?php
include("phpmysqlconnect.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$targetDir = 'uploads/';
 $fileName = $_FILES["v_accountant_photograph"]["name"];
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$target_file = $targetDir . basename($_FILES["v_accountant_photograph"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");


// Check extension
  if( in_array($imageFileType,$extensions_arr) ){

    $image_base64 = base64_encode(file_get_contents($_FILES["v_accountant_photograph"]["tmp_name"]) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

    // Upload file
  if(move_uploaded_file($_FILES['v_accountant_photograph']['tmp_name'],$targetDir.$fileName)){

    $v_accountant_photograph=basename( $_FILES["v_accountant_photograph"]["name"],".jpg");
    $V_accountant_name1 = $_POST['v_accountant_name'];
    $V_accountant_email1 = $_POST['v_accountant_email'];
    $V_gender1 = $_POST['v_gender'];
    $V_highest_qualifications1 = $_POST['v_highest_qualifications'];
    $V_salary1 = $_POST['v_salary'];
    $V_phone1 = $_POST['v_phone'];
    $V_address1 = $_POST['v_address'];
    $V_account_no1 = $_POST['v_account_no'];
    $V_bank_name1 = $_POST['v_bank_name'];
    $V_ifsc_code1 = $_POST['v_ifsc_code'];
    $V_accountant_id1 = $V_accountant_name1.$V_phone1;
    $V_accountant_id1_md5=md5($V_accountant_id1);
 $query_add_accountant_details = "insert into tbl_accountant_record(v_accountant_id, v_accountant_photograph, v_accountant_name, v_accountant_email, v_gender, v_address,v_highest_qualifications, v_salary, v_phone, v_account_no, v_bank_name, v_ifsc_code,i_status) values ('$V_accountant_id1', '$targetFilePath', '$V_accountant_name1','$V_accountant_email1', '$V_gender1','$V_address1', '$V_highest_qualifications1','$V_salary1', '$V_phone1', '$V_account_no1','$V_bank_name1','$V_ifsc_code1',1)"; //Insert Q
    $result_query_add_accountant_details= mysqli_query($db,$query_add_accountant_details);

   $query_add_accountant_user_login= "insert into tbl_user_login(v_user_email,v_user_password,v_user_department,v_user_name)values('$V_accountant_email1','$V_accountant_id1_md5','Accountant','$V_accountant_name1')";
    $res_query_add_accountant_user_login=mysqli_query($db,$query_add_accountant_user_login);
    echo "Successfully Insert Accountant";


}
//

}
else {
  echo "Invalid Extension";
}
 ?>

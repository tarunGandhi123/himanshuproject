<?php
include("phpmysqlconnect.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$targetDir = 'uploads/';
$V_photo_student_photograph = $_FILES["V_photo_student_photograph"]["name"];

$V_photo_father_photograph = $_FILES["V_photo_father_photograph"]["name"];

$V_photo_mother_photograph = $_FILES["V_photo_mother_photograph"]["name"];

$P_birth_certificate_student = $_FILES["P_birth_certificate_student"]["name"];

$V_student_adhaar = $_FILES["V_student_adhaar"]["name"];

$V_father_adhaar = $_FILES["V_father_adhaar"]["name"];

$V_mother_adhaar = $_FILES["V_mother_adhaar"]["name"];

$targetFilePath_photo_student_photograph = $targetDir.$V_photo_student_photograph;

$targetFilePath_photo_father_photograph = $targetDir.$V_photo_father_photograph;

$targetFilePath_photo_mother_photograph = $targetDir.$V_photo_mother_photograph;

$targetFilePath_birth_certificate_student = $targetDir.$P_birth_certificate_student;

$targetFilePath_student_adhaar = $targetDir.$V_student_adhaar;
$targetFilePath_father_adhaar = $targetDir.$V_father_adhaar;
$targetFilePath_mother_adhaar = $targetDir.$V_mother_adhaar;

$targetFilePath_father_adhaar = $targetDir.$V_photo_student_photograph;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

$target_file_photo_student = $targetDir . basename($_FILES["V_photo_student_photograph"]["name"]);
$target_file_photo_father = $targetDir . basename($_FILES["V_photo_father_photograph"]["name"]);
$target_file_photo_mother = $targetDir . basename($_FILES["V_photo_mother_photograph"]["name"]);
$target_file_birth_certificate_student = $targetDir . basename($_FILES["P_birth_certificate_student"]["name"]);
$target_file_student_adhaar = $targetDir . basename($_FILES["V_student_adhaar"]["name"]);
$target_file_father_adhaar = $targetDir . basename($_FILES["V_father_adhaar"]["name"]);
$target_file_mother_adhaar = $targetDir . basename($_FILES["V_mother_adhaar"]["name"]);
'$target_file_photo_father','$target_file_photo_mother','$target_file_birth_certificate_student','$target_file_student_adhaar','$target_file_father_adhaar','$target_file_mother_adhaar'
// Select file type
$imageFileType_photo_student = strtolower(pathinfo($target_file_photo_student,PATHINFO_EXTENSION));
$imageFileType_photo_father = strtolower(pathinfo($target_file_photo_father,PATHINFO_EXTENSION));
$imageFileType_photo_mother = strtolower(pathinfo($target_file_photo_mother,PATHINFO_EXTENSION));
$imageFileType_birth_certificate_student = strtolower(pathinfo($target_file_birth_certificate_student,PATHINFO_EXTENSION));
$imageFileType_student_adhaar = strtolower(pathinfo($target_file_student_adhaar,PATHINFO_EXTENSION));
$imageFileType_father_adhaar = strtolower(pathinfo($target_file_father_adhaar,PATHINFO_EXTENSION));
$imageFileType_mother_adhaar = strtolower(pathinfo($target_file_mother_adhaar,PATHINFO_EXTENSION));
// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");


// Check extension
  if( in_array($imageFileType_photo_student,$extensions_arr) )
  {
    $image_base64_student_photo = base64_encode(file_get_contents($_FILES["V_photo_student_photograph"]["tmp_name"]) );
    $image = 'data:image/'.$imageFileType_photo_student.';base64,'.$image_base64_student_photo;
  if( in_array($imageFileType_photo_father,$extensions_arr) )
    {
      $image_base64_father_photo = base64_encode(file_get_contents($_FILES["V_photo_father_photograph"]["tmp_name"]) );
      $image = 'data:image/'.$imageFileType_photo_father.';base64,'.$image_base64_father_photo;
  if( in_array($imageFileType_photo_mother,$extensions_arr) )
        {
          $image_base64_mother_photo = base64_encode(file_get_contents($_FILES["V_photo_mother_photograph"]["tmp_name"]) );
          $image = 'data:image/'.$imageFileType_photo_mother.';base64,'.$image_base64_mother_photo;
  if( in_array($imageFileType_birth_certificate_student,$extensions_arr) )
        {
          $image_base64_birth_certificate_student = base64_encode(file_get_contents($_FILES["P_birth_certificate_student"]["tmp_name"]) );
          $image = 'data:image/'.$imageFileType_birth_certificate_student.';base64,'.$image_base64_birth_certificate_student;
  if( in_array($imageFileType_student_adhaar,$extensions_arr) )
            {
          $image_base64_student_adhaar = base64_encode(file_get_contents($_FILES["V_student_adhaar"]["tmp_name"]) );
          $image = 'data:image/'.$imageFileType_student_adhaar.';base64,'.$image_base64_student_adhaar;
  if( in_array($imageFileType_student_adhaar,$extensions_arr) )
            {
          $image_base64_father_adhaar = base64_encode(file_get_contents($_FILES["V_father_adhaar"]["tmp_name"]) );
          $image = 'data:image/'.$imageFileType_father_adhaar.';base64,'.$image_base64_father_adhaar;
  if( in_array($imageFileType_student_adhaar,$extensions_arr) )
            {
          $image_base64_mother_adhaar = base64_encode(file_get_contents($_FILES["V_mother_adhaar"]["tmp_name"]) );
          $image = 'data:image/'.$imageFileType_mother_adhaar.';base64,'.$image_base64_mother_adhaar;


    // Upload file student photo
  if(move_uploaded_file($_FILES["V_photo_student_photograph"]["tmp_name"],$targetDir.$V_photo_student_photograph)){
    if(move_uploaded_file($_FILES["V_photo_father_photograph"]["tmp_name"],$targetDir.$V_photo_father_photograph)){
    if(move_uploaded_file($_FILES["V_photo_mother_photograph"]["tmp_name"],$targetDir.$V_photo_mother_photograph)){
      if(move_uploaded_file($_FILES["P_birth_certificate_student"]["tmp_name"],$targetDir.$P_birth_certificate_student)){
        if(move_uploaded_file($_FILES["V_student_adhaar"]["tmp_name"],$targetDir.$V_student_adhaar)){
          if(move_uploaded_file($_FILES["V_father_adhaar"]["tmp_name"],$targetDir.$V_father_adhaar)){
            if(move_uploaded_file($_FILES["V_mother_adhaar"]["tmp_name"],$targetDir.$V_mother_adhaar)){
$v_class = $_POST['v_class'];
$d_date_of_birth_student = $_POST['d_date_of_birth_student'];
$v_name_of_student = $_POST['v_name_of_student'];
$v_student_enroilment = $_POST['v_student_enroilment'];
$d_date_of_admission = $_POST['d_date_of_admission'];
$v_gender = $_POST['v_gender'];
$v_nationality = $_POST['v_nationality'];
$v_religion = $_POST['v_religion'];
$v_current_address = $_POST['v_current_address'];
$v_district = $_POST['v_district'];
$v_state = $_POST['v_state'];
$v_pincode = $_POST['v_pincode'];
$v_father_name = $_POST['v_father_name'];
$v_father_highest_qualification = $_POST['v_father_highest_qualification'];
$v_father_occupation = $_POST['v_father_occupation'];
$v_father_mobile = $_POST['v_father_mobile'];
$v_father_email = $_POST['v_father_email'];
$v_mother_name = $_POST['v_mother_name'];
$v_mother_highest_qualification = $_POST['v_mother_highest_qualification'];
$v_mother_occupation = $_POST['v_mother_occupation'];
$v_mother_mobile = $_POST['v_mother_mobile'];
$v_mother_email = $_POST['v_mother_email'];
 $query_add_student_details = "insert into tbl_student_record(v_class, d_date_of_birth_student, v_name_of_student, v_student_enroilment, d_date_of_admission, v_gender,v_nationality, v_religion, v_current_address,v_district,v_state,v_pincode,v_father_name,v_father_highest_qualification,v_father_occupation,v_father_mobile,v_father_email,v_mother_name,v_mother_highest_qualification,v_mother_occupation,v_mother_mobile,v_mother_email,v_photo_student_photograph,v_photo_father_photograph,v_photo_mother_photograph,p_birth_certificate_student,v_student_adhaar, v_father_adhaar,v_mother_adhaar,i_status) values
'$v_class',$d_date_of_birth_student,'$v_name_of_student','$v_student_enroilment',$d_date_of_admission,'$v_gender','$v_nationality','$v_religion','$v_current_address','$v_district',$v_state,'$v_pincode','$v_father_name','$v_father_highest_qualification','$v_father_occupation','$v_father_mobile','$v_father_email','$v_mother_name','$v_mother_highest_qualification','$v_mother_occupation','$v_mother_mobile','$v_mother_email','$target_file_photo_student','$target_file_photo_father','$target_file_photo_mother','$target_file_birth_certificate_student','$target_file_student_adhaar','$target_file_father_adhaar','$target_file_mother_adhaar'
,1)"; //Insert Query
$result_query_add_student_details= mysqli_query($db,$query_add_student_details);
 $query_add_student_details_student_class_table = "insert into $v_class(v_class, d_date_of_birth_student, v_name_of_student, v_student_enroilment, d_date_of_admission, v_gender,v_nationality, v_religion, v_current_address,v_district,v_state,v_pincode,v_father_name,v_father_highest_qualification,v_father_occupation,v_father_mobile,v_father_email,v_mother_name,v_mother_highest_qualification,v_mother_occupation,v_mother_mobile,v_mother_email,v_photo_student_photograph,v_photo_father_photograph,v_photo_mother_photograph,p_birth_certificate_student,v_student_adhaar, v_father_adhaar,v_mother_adhaar,i_status) values
'$v_class',$d_date_of_birth_student,'$v_name_of_student','$v_student_enroilment',$d_date_of_admission,'$v_gender','$v_nationality','$v_religion','$v_current_address','$v_district',$v_state,'$v_pincode','$v_father_name','$v_father_highest_qualification','$v_father_occupation','$v_father_mobile','$v_father_email','$v_mother_name','$v_mother_highest_qualification','$v_mother_occupation','$v_mother_mobile','$v_mother_email','$target_file_photo_student','$target_file_photo_father','$target_file_photo_mother','$target_file_birth_certificate_student','$target_file_student_adhaar','$target_file_father_adhaar','$target_file_mother_adhaar'
,1)"; //Insert Query

$result_query_add_student_details_student_class_table= mysqli_query($db,$query_add_student_details_student_class_table);
$v_month = date('m');
$day = date('d');

$year = date('Y');
  $today = $year . '-' . $v_month . '-' . $day;
if($v_month==04)
{
echo $v_total_fees=$res_ow_res_select_fees_data['v_total_fees'];
$total_pending_fees=$v_total_fees+$v_pending_fees;
echo $update_tbl_student_record_v_pending_fees="update tbl_student_record set v_pending_fees='$total_pending_fees' where v_class='$v_class'";
$res_update_tbl_student_record_v_pending_fees=mysqli_query($db,$update_tbl_student_record_v_pending_fees);
}
else {
  // code...
  echo $v_tution_fees=$res_ow_res_select_fees_data['v_tution_fees'];
$v_exam_fees=$res_ow_res_select_fees_data['v_exam_fees'];
  $total_pending_fees=$v_tution_fees+$v_pending_fees+$v_exam_fees  ;
  echo $update_tbl_student_record_v_pending_fees="update tbl_student_record set v_pending_fees='$total_pending_fees' where v_class='$v_class' AND v_st";
  $res_update_tbl_student_record_v_pending_fees=mysqli_query($db,$update_tbl_student_record_v_pending_fees);
  echo $update_tbl_student_record_v_pending_fees_class_wise="update $v_class set v_pending_fees='$total_pending_fees' where v_class='$v_class'";
  $res_update_tbl_student_record_v_pending_fees_class_wise=mysqli_query($db,$update_tbl_student_record_v_pending_fees_class_wise);

}
echo"<script> alert('Successfully Insert Student');</script>"
header("Location: add_student.php");
}}}}}}}
//
else{
echo   $msg = "Failed to upload image and Cannot submit data";
}
}}}}}}}
else {
echo "Invalid Extension";
}
 ?>

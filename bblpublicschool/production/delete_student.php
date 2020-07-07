<?php
include "phpmysqlconnect.php";
if(isset($_GET["id"]) && !empty($_GET["id"])){
  echo $id = $_GET["id"];
    echo  $select_class_name = "select * from tbl_student_record where v_student_enroilment = '$id'";
      $res_select_class_name = mysqli_query($db,$select_class_name);
      $row_res_select_class_name = mysqli_num_rows($res_select_class_name);
      $data_row_res_select_class_name = mysqli_fetch_array($res_select_class_name);
      echo $v_class_name = $data_row_res_select_class_name['v_class'];
echo $update_records_student_to_alumni = "update tbl_student_record set i_status = 0 where v_student_enroilment = '$id'";
$exec_update_records_student_to_alumni = mysqli_query($db,$update_records_student_to_alumni);
if($exec_update_records_student_to_alumni ==1){
  $update_records_student_to_alumni = "update $v_class_name set i_status = 0 where v_student_enroilment = '$id'";
  $exec_update_records_student_to_alumni = mysqli_query($db,$update_records_student_to_alumni);
echo "<script>alert('Deleted Successfully')</script>";
header("Location: manage_students.php");
}
}

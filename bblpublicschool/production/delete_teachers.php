<?php
include "phpmysqlconnect.php";
if(isset($_GET["id"]) && !empty($_GET["id"])){
      $id = $_GET["id"];
$delete_records_teacher = "update tbl_teacher_record set i_status = 0 where i_sno = $id";
$exec_delete_records_teacher = mysqli_query($db,$delete_records_teacher);
if($exec_delete_records_teacher ==1){

echo "<script>alert('Deleted Successfully')</script>";
header("Location: manage_teachers.php");

}
}

<?php
include "phpmysqlconnect.php";
if(isset($_GET["id"]) && !empty($_GET["id"])){
      $id = $_GET["id"];
$delete_records_accountant = "update tbl_accountant_record set i_status = 0 where i_sno = $id";
$exec_delete_records_accountant = mysqli_query($db,$delete_records_accountant);
if($exec_delete_records_accountant ==1){

echo "<script>alert('Deleted Successfully')</script>";
header("Location: manage_accountant.php");

}
}

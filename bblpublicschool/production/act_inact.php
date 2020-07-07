<?php
include "phpmysqlconnect.php";
echo $id_category=$_GET['id'];
$select_fees_status = "select i_status as current_fees_status from tbl_fee_categories where i_sno=$id_category";
$res_select_fees_status = mysqli_query($db,$select_fees_status);
$row_res_select_fees_status = mysqli_num_rows($select_fees_status);
$data_res_select_fees_status = mysqli_fetch_array($res_select_fees_status);
echo $data_res_select_fees_status['current_fees_status'];
if($data_res_select_fees_status['current_fees_status']==1){
$update_status="update tbl_fee_categories set i_status =0 where i_sno =$id_category";
$res_update_status = mysqli_query($db,$update_status);
header("Location:fees_categories.php");

}
else {
  $update_status="update tbl_fee_categories set i_status =1 where i_sno =$id_category";
  $res_update_status = mysqli_query($db,$update_status);
  header("Location:fees_categories.php");
}
?>

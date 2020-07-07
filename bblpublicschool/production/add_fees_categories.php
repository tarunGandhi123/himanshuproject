<?php
include "phpmysqlconnect.php";

if(isset($_GET['v_fees_categories'])){

echo $v_fees_categories = $_GET['v_fees_categories'];

echo $v_field_name = "v_".$_GET['v_fees_categories']."_fees";
$query_inser_fees_category ="insert into tbl_fee_categories(v_fees_categories,i_status,v_field_name)values('$v_fees_categories',1,'$v_field_name')";
$res_query_inser_fees_category= mysqli_query($db,$query_inser_fees_category);





}

 ?>

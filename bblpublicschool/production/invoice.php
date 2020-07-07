<?php

include "phpmysqlconnect.php";
$i_invoice_id =$_POST['i_invoice_id'];

$v_student_enroilment_no = $_POST['v_student_enroilment_no'];
$v_student_name =$_POST['v_student_name'];
$v_student_father_name =$_POST['v_student_father_name'];
$v_father_mobile =$_POST['v_father_mobile'];
$v_total_fees =$_POST['v_total_fees'];
$v_fees_paid =$_POST['v_fees_paid'];
$v_fine =$_POST['v_fine'];
$v_pending_fees =$_POST['v_pending_fees'];
$fees_month =$_POST['v_fees_month'];
$d_date =$_POST['d_date'];
$v_order_id =$_POST['v_order_id'];
echo $v_total_pending_fees = $v_pending_fees + $v_total_fees+$v_fine;
echo $v_class =$_POST['v_class'];
echo  $due_fees = $v_total_pending_fees - $v_fees_paid;

  echo $query_insert_invoice_details = "insert into tbl_fee_invoice(i_invoice_id,v_student_name,v_student_enroilment_no,v_class,v_student_father_name,v_father_mobile,v_total_fees,v_fees_paid,v_fees_paid_month,v_pending_fees,v_late_fees,d_date,v_order_id)values($i_invoice_id,'$v_student_name','$v_student_enroilment_no','$v_class','$v_student_father_name','$v_father_mobile','$v_total_pending_fees','$v_fees_paid','$fees_month','$due_fees','$v_fine','$d_date','$v_order_id')";
 $exec_query_insert_invoice_details=mysqli_query($db,$query_insert_invoice_details);
 if($exec_query_insert_invoice_details ==1)
{
echo $query_insert_into_class_details = "update  $v_class set v_pending_fees='$due_fees' where v_student_enroilment = '$v_student_enroilment_no'";
$exec_query_insert_into_class_details=mysqli_query($db,$query_insert_into_class_details);
if($exec_query_insert_into_class_details ==1)
{
echo  $query_update_into_class_details = "update tbl_student_record set v_pending_fees='$due_fees' where v_student_enroilment = '$v_student_enroilment_no'";
  $exec_query_update_into_class_details=mysqli_query($db,$query_update_into_class_details);
  if($exec_query_update_into_class_details ==1)
  {
header('Location: fees_report.php');
}
}
}
else {
echo "Contact to Support";
}








?>

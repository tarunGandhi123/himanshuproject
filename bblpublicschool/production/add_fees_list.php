<?php
  include "phpmysqlconnect.php";
   $v_class_name = $_POST['v_class'];
    $v_tution_fees = $_POST['v_tution_fees'];
     $v_Admission_fees = $_POST['v_Admission_fees'];
   $v_Exam_fees =$_POST['v_Exam_fees'];
if(isset($v_class_name))
{
  $check_exist_tbl = "select * from tbl_fees_list where v_class ='$v_class_name'";
  $exec_check_exist_tbl= mysqli_query($db,$check_exist_tbl);
 $row_exec_check_exist_tbl = mysqli_num_rows($exec_check_exist_tbl);
if($row_exec_check_exist_tbl>0)
{
   //echo ".....";
 $v_tution_fees = $_POST['v_tution_fees'];
 $v_Admission_fees = $_POST['v_Admission_fees'];
 $v_Exam_fees =$_POST['v_Exam_fees'];
  if(!empty($v_tution_fees) && !empty($v_Exam_fees) && !empty($v_Admission_fees))
  {
    //echo "Hi";
     $v_tution_fees = $_POST['v_tution_fees'];
     $v_Admission_fees = $_POST['v_Admission_fees'];
     $v_Exam_fees =$_POST['v_Exam_fees'];
     $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
     $update_query_add_fees_details = "update tbl_fees_list set v_tution_fees='$v_tution_fees',v_Admission_fees = '$v_Admission_fees',v_exam_fees='$v_Exam_fees',v_total_fees ='$v_total_fees' where v_class= '$v_class_name'";
   $execute_update_query_add_fees_details = mysqli_query($db,$update_query_add_fees_details);
   if($execute_update_query_add_fees_details==1){
  echo  "<script>alert('Successfully Update Fees')</script>";
 echo "<script>window.location.replace('fees_list.php');</script>";

   }
  }
  else if(empty($v_tution_fees) && empty($v_Exam_fees) && empty($v_Admission_fees))
  {
  //  echo "Tarun";
       $v_tution_fees=0;
      $v_Admission_fees=0;
      $v_Exam_fees=0;
       $v_class_name = $_POST['v_class'];
      $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
     $update_query_add_fees_details = "update tbl_fees_list set v_tution_fees='$v_tution_fees',v_Admission_fees = '$v_Admission_fees',v_exam_fees='$v_Exam_fees',v_total_fees ='$v_total_fees'  where v_class= '$v_class_name'";
   $execute_update_query_add_fees_details = mysqli_query($db,$update_query_add_fees_details);
 if($execute_update_query_add_fees_details == 1){
    echo  "<script>alert('Successfully Update Fees')</script>";
echo "<script>window.location.replace('fees_list.php');</script>";
  }
}
      else if(!empty($v_tution_fees) && !empty($v_Exam_fees) && empty($v_Admission_fees))
  {
  //  echo "gandhi";
     $v_tution_fees= $_POST['v_tution_fees'];
     $v_Admission_fees=0;
      $v_Exam_fees=$_POST['v_Exam_fees'];
       $v_class_name = $_POST['v_class'];
      $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
       $update_query_add_fees_details = "update tbl_fees_list set v_tution_fees='$v_tution_fees',v_Admission_fees = '$v_Admission_fees',v_exam_fees='$v_Exam_fees',v_total_fees ='$v_total_fees'  where v_class= '$v_class_name'";
   $execute_update_query_add_fees_details = mysqli_query($db,$update_query_add_fees_details);
 if($execute_update_query_add_fees_details == 1){
     echo  "<script>alert('Successfully Update Fees')</script>";
 echo "<script>window.location.replace('fees_list.php');</script>";
  }
}
     else if(empty($v_tution_fees) && !empty($v_Exam_fees) && !empty($v_Admission_fees))
  {
  //  echo "tarungandghu";
      $v_tution_fees= 0;
      $v_Admission_fees=$_POST['v_Admission_fees'];
      $v_Exam_fees=$_POST['v_Exam_fees'];
       $v_class_name = $_POST['v_class'];
      $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
       $update_query_add_fees_details = "update tbl_fees_list set v_tution_fees='$v_tution_fees',v_Admission_fees = '$v_Admission_fees',v_exam_fees='$v_Exam_fees',v_total_fees ='$v_total_fees'  where v_class= '$v_class_name'";
   $execute_update_query_add_fees_details = mysqli_query($db,$update_query_add_fees_details);
 if($execute_update_query_add_fees_details == 1){
    echo  "<script>alert('Successfully Update Fees')</script>";
 echo "<script>window.location.replace('fees_list.php');</script>";
  }
}
     else if(!empty($v_tution_fees) && empty($v_Exam_fees) && !empty($v_Admission_fees))
  {
  //  echo "gandhiTarun";
     $v_tution_fees= $_POST['v_tution_fees'];
      $v_Admission_fees=$_POST['v_Admission_fees'];
      $v_Exam_fees=0;
       $v_class_name = $_POST['v_class'];
     $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
     $update_query_add_fees_details = "update tbl_fees_list set v_tution_fees='$v_tution_fees',v_Admission_fees = '$v_Admission_fees',v_exam_fees='$v_Exam_fees',v_total_fees ='$v_total_fees'  where v_class= '$v_class_name'";
   $execute_update_query_add_fees_details = mysqli_query($db,$update_query_add_fees_details);
 if($execute_update_query_add_fees_details == 1){
    echo  "<script>alert('Successfully Update Fees')</script>";
  echo "<script>window.location.replace('fees_list.php');</script>";
  }
}
else if(!empty($v_tution_fees) && empty($v_Exam_fees) && empty($v_Admission_fees))
  {
    //echo "golu";
     $v_tution_fees= $_POST['v_tution_fees'];
      $v_Admission_fees=0;
      $v_Exam_fees=0;
       $v_class_name = $_POST['v_class'];
      $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
       $update_query_add_fees_details = "update tbl_fees_list set v_tution_fees='$v_tution_fees',v_Admission_fees = '$v_Admission_fees',v_exam_fees='$v_Exam_fees',v_total_fees ='$v_total_fees'  where v_class= '$v_class_name'";
   $execute_update_query_add_fees_details = mysqli_query($db,$update_query_add_fees_details);
 if($execute_update_query_add_fees_details == 1){
   echo "<script>window.location.replace('fees_list.php');</script>";
    echo  "<script>alert('Successfully Update Fees')</script>";
  }
}
else if(empty($v_tution_fees) && !empty($v_Exam_fees) && empty($v_Admission_fees))
  {
    //echo ":priyanka";
       $v_tution_fees= 0;
      $v_Admission_fees=0;
      $v_Exam_fees=$_POST['v_Exam_fees'];
     $v_class_name = $_POST['v_class'];
      $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
       $update_query_add_fees_details = "update tbl_fees_list set v_tution_fees='$v_tution_fees',v_Admission_fees = '$v_Admission_fees',v_exam_fees='$v_Exam_fees',v_total_fees ='$v_total_fees'  where v_class= '$v_class_name'";
   $execute_update_query_add_fees_details = mysqli_query($db,$update_query_add_fees_details);
 if($execute_update_query_add_fees_details == 1){
    echo  "<script>alert('Successfully Update Fees')</script>";
 echo "<script>window.location.replace('fees_list.php');</script>";
  }
}
else if(empty($v_tution_fees) && empty($v_Exam_fees) && !empty($v_Admission_fees))
  {
    //echo "semicolon";
      $v_tution_fees= 0;
       $v_Admission_fees=$_POST['v_Admission_fees'];
      $v_Exam_fees=0;
       $v_class_name = $_POST['v_class'];
      $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
       $update_query_add_fees_details = "update tbl_fees_list set v_tution_fees='$v_tution_fees',v_Admission_fees = '$v_Admission_fees',v_exam_fees='$v_Exam_fees',v_total_fees ='$v_total_fees'  where v_class= '$v_class_name'";
   $execute_update_query_add_fees_details = mysqli_query($db,$update_query_add_fees_details);
 if($execute_update_query_add_fees_details == 1){
     echo  "<script>alert('Successfully Update Fees')</script>";
echo "<script>window.location.replace('fees_list.php');</script>";
  }
}

}
else {
    //echo "pglet";
   $v_tution_fees = $_POST['v_tution_fees'];
     $v_Admission_fees = $_POST['v_Admission_fees'];
       $v_Exam_fees =$_POST['v_Exam_fees'];
      $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
       $insert_query_add_fees_details = "insert into tbl_fees_list(v_class,v_Admission_fees,v_tution_fees,v_exam_fees,v_total_fees,i_status)values('$v_class_name','$v_Admission_fees','$v_tution_fees','$v_Exam_fees','$v_total_fees',1)";
       $execute_insert_query_add_fees_details = mysqli_query($db,$insert_query_add_fees_details);
   if($execute_insert_query_add_fees_details==1)
   {
    echo  "<script>alert('Successfully Added Fees')</script>";
  echo "<script>window.location.replace('fees_list.php');</script>";
   }

  else
  {

     $v_tution_fees=0;
      $v_Admission_fees=0;
      $v_Exam_fees=0;
       $v_class_name = $_POST['v_class'];
      $v_total_fees = $v_tution_fees + $v_Admission_fees +$v_Exam_fees;
       $insert_query_add_fees_details = "insert into tbl_fees_list(v_class,v_Admission_fees,v_tution_fees,v_exam_fees,v_total_fees,i_status)values('$v_class_name','$v_Admission_fees','$v_tution_fees','$v_Exam_fees','$v_total_fees',1)";
   $execute_insert_query_add_fees_details = mysqli_query($db,$insert_query_add_fees_details);
   if($execute_insert_query_add_fees_details == 1){

    echo  "<script>alert('Successfully Added Fees')</script>";
   echo "<script>window.location.replace('fees_list.php');</script>";
  }
  }
}
}

?>

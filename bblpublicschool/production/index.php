<?php
include ("phpmysqlconnect.php");

if(isset($_POST["login"]))
{
     if(empty($_POST["v_user_email"]) && empty($_POST["v_user_email"]))
     {
          echo '<script>alert("Both Fields are required")</script>';
     }
     else
     {
          $v_user_email = $_POST['v_user_email'];
         $v_user_password = $_POST['v_user_password'];
          $v_user_password_md5 = md5($v_user_password);
          $query = "SELECT * FROM tbl_user_login WHERE v_user_email = '$v_user_email' AND v_user_password = '$v_user_password_md5'";
          $result = mysqli_query($db, $query);
          if(mysqli_num_rows($result) > 0)
          {
            if($row=mysqli_fetch_array($result))
            {
               session_start();
               $_SESSION['user_name'] = $row['v_user_name'];
               $_SESSION['user_photo'] = $row['v_user_photo'];
               $_SESSION['v_user_email'] = $row['v_user_email'];
               $_SESSION['v_user_password'] = $row['v_user_password'];
             echo  $v_month = date('m');
               $day = date('d');

               $year = date('Y');
                 $today = $year . '-' . $v_month . '-' . $day;

 $select_tbl_fees_added_to_all_record="Select * from tbl_fees_added_to_all_record where v_month='$v_month' and v_year='$year'";
$res_select_tbl_fees_added_to_all_record=mysqli_query($db,$select_tbl_fees_added_to_all_record);
$row_res_select_tbl_fees_added_to_all_record=mysqli_num_rows($res_select_tbl_fees_added_to_all_record);
if($row_res_select_tbl_fees_added_to_all_record>0)
{
 header("location:home.php");
}
else {

 $insert_select_tbl_fees_added_to_all_record="insert into tbl_fees_added_to_all_record (d_date,v_month,v_year)values('$today','$v_month','$year')";
$exec_insert_select_tbl_fees_added_to_all_record=mysqli_query($db,$insert_select_tbl_fees_added_to_all_record);
 $select_student_record="Select * from tbl_student_record";
 $exec_select_student_record=mysqli_query($db,$select_student_record);
 $row_exec_select_student_record=mysqli_num_rows($exec_select_student_record);
if($row_exec_select_student_record>0)
{
while($res_row_exec_select_student_record=mysqli_fetch_assoc($exec_select_student_record))
{
 $v_student_enroilment=$res_row_exec_select_student_record['v_student_enroilment'];
  $v_pending_fees=$res_row_exec_select_student_record['v_pending_fees'];
 $v_father_mobile=$res_row_exec_select_student_record['v_father_mobile'];
 $v_class=$res_row_exec_select_student_record['v_class'];
 $v_name_of_student=$res_row_exec_select_student_record['v_name_of_student'];
$select_fees_data="select * from tbl_fees_list where v_class='$v_class'";
$res_select_fees_data=mysqli_query($db,$select_fees_data);
$row_res_select_fees_data=mysqli_num_rows($res_select_fees_data);
if($row_res_select_fees_data>0)
{
  while($res_ow_res_select_fees_data=mysqli_fetch_assoc($res_select_fees_data))
{
  if($v_month==04)
  {
echo $v_total_fees=$res_ow_res_select_fees_data['v_total_fees'];
$total_pending_fees=$v_total_fees+$v_pending_fees;
echo $update_tbl_student_record_v_pending_fees="update tbl_student_record set v_pending_fees='$total_pending_fees' where v_class='$v_class' and v_father_mobile ='$v_father_mobile'";
$res_update_tbl_student_record_v_pending_fees=mysqli_query($db,$update_tbl_student_record_v_pending_fees);
echo $update_tbl_student_record_v_pending_fees_class_wise="update $v_class set v_pending_fees='$total_pending_fees' where v_class='$v_class'";
$res_update_tbl_student_record_v_pending_fees_class_wise=mysqli_query($db,$update_tbl_student_record_v_pending_fees_class_wise);

	header("location:home.php");
  }

  else {
    // code...
    echo $v_tution_fees=$res_ow_res_select_fees_data['v_tution_fees'];
$v_exam_fees=$res_ow_res_select_fees_data['v_exam_fees'];
    $total_pending_fees=$v_tution_fees+$v_pending_fees;
    echo $update_tbl_student_record_v_pending_fees="update tbl_student_record set v_pending_fees='$total_pending_fees' where v_class='$v_class' and v_father_mobile ='$v_father_mobile'";
    $res_update_tbl_student_record_v_pending_fees=mysqli_query($db,$update_tbl_student_record_v_pending_fees);
    echo $update_tbl_student_record_v_pending_fees_class_wise="update $v_class set v_pending_fees='$total_pending_fees' where v_class='$v_class'and v_father_mobile ='$v_father_mobile'";
    $res_update_tbl_student_record_v_pending_fees_class_wise=mysqli_query($db,$update_tbl_student_record_v_pending_fees_class_wise);

	header("location:home.php");
  }
}
}
}
}
          }
        }
      }
          else
          {
               echo '<script>alert("Wrong User Details")</script>';
          }
     }
}



 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BBl Crm </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username"  name= "v_user_email"required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="v_user_password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit"  name="login" value="Login"></input>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> BBl Public School!</h1>
                  <p>©2019 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>

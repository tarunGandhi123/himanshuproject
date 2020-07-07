<?php
include "phpmysqlconnect.php";
include "header.php";
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Student Fees Record <small></small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage Fees<small>Of Students</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

<?php
if(isset($_POST['fee_invoice_submit']))
{
    $month = date('m');
    $day = date('d');

    $year = date('Y');
      $today = $year . '-' . $month . '-' . $day;
    $v_father_mobile=$_POST['v_father_mobile'];
    $v_fees_paid_month=$_POST['v_fees_paid_month'];
    $v_fees_paid_year=$_POST['v_fees_paid_year'];
 $query_get_all_data_student = "select * from tbl_student_record where v_father_mobile ='$v_father_mobile'";
$res_query_get_all_data_student = mysqli_query($db,$query_get_all_data_student);
 $num_rows_res_query_get_all_data_student = mysqli_num_rows($res_query_get_all_data_student);
if($num_rows_res_query_get_all_data_student>0)
{
?>


<table id="datatable-buttons" class="table table-striped table-bordered">
  <thead>
    <tr>

      <th>Student Enroilment</th>
      <th>Admission No</th>
      <th>Student Name</th>
<!--     // <th>Date of Admission</th>/-->
        <th>Class</th>
        <th>Father Name</th>

     <th>Pending fees</th>

    <th>Action</th>
      <th>Address</th>


    </tr>
  </thead>



  <tbody>
    <?php
   while($fetch_res_query_get_all_data_student = mysqli_fetch_assoc($res_query_get_all_data_student)){
$v_class = $fetch_res_query_get_all_data_student['v_class'];
 $query_select_class_table_field_name= "Select v_class_table_name from tbl_classes where v_class_table_name = '$v_class'";
$exec_query_select_class_table_field_name= mysqli_query($db,$query_select_class_table_field_name);
$num_rows_res_query_get_all_data_student=mysqli_num_rows($exec_query_select_class_table_field_name);
   $select_fees_data="Select * from tbl_student_record where v_father_mobile='$v_father_mobile'AND v_class='$v_class' order by v_pending_fees";
    $exec_select_fees_data=mysqli_query($db,$select_fees_data);
    $num_exec_select_fees_data =mysqli_num_rows($exec_select_fees_data);
  $res_num_exec_select_fees_data=mysqli_fetch_assoc($exec_select_fees_data);

        $v_pending_fees=$res_num_exec_select_fees_data['v_pending_fees'];





$total_fees= $v_pending_fees;

     ?>

    <tr>

      <td><?php echo $fetch_res_query_get_all_data_student['v_student_enroilment'];  ?></td>
      <td><?php echo $fetch_res_query_get_all_data_student['v_admission_no'];  ?></td>
      <td><?php echo $fetch_res_query_get_all_data_student['v_name_of_student'];  ?></td>
      <td><?php echo $fetch_res_query_get_all_data_student['v_class'];  ?></td>
      <td><?php echo $fetch_res_query_get_all_data_student['v_father_name']; ?></td>


              <td><?php echo $v_pending_fees ?></td>

         <?php
          echo "<td>";
       ?>
         <a style='margin-right: 15px;' href='fees_detail.php?v_father_mobile=<?php echo $v_father_mobile ?>&v_student_enroilment=<?php echo $fetch_res_query_get_all_data_student['v_student_enroilment'] ?>&v_admission_no=<?php echo $fetch_res_query_get_all_data_student['v_admission_no'] ?>&v_name_of_student=<?php echo $fetch_res_query_get_all_data_student['v_name_of_student'] ?>&v_pending_fees=<?php echo $v_pending_fees?>&v_address=<?php echo $fetch_res_query_get_all_data_student['v_current_address'];?>&class=<?php echo $fetch_res_query_get_all_data_student['v_class']; ?>&v_father_name=<?php echo $fetch_res_query_get_all_data_student['v_father_name']; ?>&v_fees_paid_month=<?php echo $v_fees_paid_month; ?>&v_fees_paid_year=<?php echo $v_fees_paid_year; ?>' title='Invoice' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
        <?php
        echo "</td>";

          ?>
        <td><?php echo $fetch_res_query_get_all_data_student['v_current_address'];  ?></td>
    </tr>
    <?php
  }

    ?>

  </tbody>
</table>

<?php
}}
else {
	echo "data not found";
}
?>
</div>
</div>
</div>


</div>



</div>
</div>




<?php
include "footer.php";
?>

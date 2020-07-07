<?php
include "header.php";
include "phpmysqlconnect.php";
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Pending Fees <small>Lists</small></h3>
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

        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
        <form id="view_student" name="view_student" action=""  method="POST">
        <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">

      <label for="class">Select Class:</label>

      <?php

      $query_select_all_class = "select * from tbl_classes";
      $res_query_select_all_class = mysqli_query($db,$query_select_all_class);
        $row_res_qry_select_all_classes = mysqli_num_rows($res_query_select_all_class);
      if($row_res_qry_select_all_classes>0)
      {
      ?>
      <select id="class" name= "v_class" class="form-control" required>
      <option value="">Choose..</option>
      <?php
          while($fetch_row_res_qry_select_all_classes = mysqli_fetch_array($res_query_select_all_class)) {
       ?>

             <option name="v_class" id="v_class" value="<?php echo $fetch_row_res_qry_select_all_classes['v_class_table_name']?>"><?php echo $fetch_row_res_qry_select_all_classes['v_class']?></option>
             <?php
           }
         }
             ?>  </select>


             <input type="submit" name="view_stu" name="View">

      </div>
</div>
</form>
      </div>
      <div class="x_content">
        <?php

        if(isset($_POST['view_stu'])){
         $class_tbl_name = $_POST['v_class'];
          $select_student_class = "select * from  tbl_student_record where v_class = '$class_tbl_name' and v_pending_fees!=0";
          $res_select_student_class = mysqli_query($db,$select_student_class);
          $res_num_rows= mysqli_num_rows($res_select_student_class);
        if($res_num_rows>0)
        {
            ?>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
                <td>Sno</td>
                <td>Student Name</td>
                <td>Enroilment No</td>
                <td>Father's Name</td>
                <td>Mobile No</td>
                <td>Pending Fees</td>
                <td>Deposit Fees</td>
            </tr>

          </thead>


          <tbody>
            <?php
            while($row_res_num_rows = mysqli_fetch_assoc($res_select_student_class))
                {
             ?>

            <tr>
              <td><?php echo $row_res_num_rows['i_sno']; ?></td>
              <td><?php echo $row_res_num_rows['v_name_of_student']; ?></td>
              <td><?php echo $row_res_num_rows['v_student_enroilment']; ?></td>
              <td><?php echo $row_res_num_rows['v_father_name']; ?></td>
              <td><?php echo $row_res_num_rows['v_father_mobile']; ?></td>
              <td><?php echo $row_res_num_rows['v_pending_fees']; ?></td>
             <td><a href="fees_invoice.php"><span class='glyphicon glyphicon-pencil'></span></a></td>

          </tr>
            <?php
          }
            ?>

          </tbody>
        </table>
        <?php
}
else
	echo "<script>alert('Data Not Found');</script>";
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

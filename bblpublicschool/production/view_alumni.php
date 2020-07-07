<?php
include "header.php";
include "phpmysqlconnect.php";
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> <small>Alumni</small></h3>
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
        <h2>Alumni<small>Users</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
        <form id="view_student" name="view_student" action=""  method="POST">
        <div class="row">
      <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">

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
           </div>
             <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
             <label for="class">Select Session:</label>

             <?php

             $query_select_all_session = "select * from tbl_session";
             $res_query_select_all_session = mysqli_query($db,$query_select_all_session);
               $row_res_qry_select_all_session = mysqli_num_rows($res_query_select_all_session);
             if($row_res_qry_select_all_session>0)
             {
             ?>
             <select id="v_session_year" name= "v_session_year" class="form-control" required>
             <option value="">Choose..</option>
             <?php
                 while($fetch_row_res_qry_select_all_session = mysqli_fetch_array($res_query_select_all_session)) {
              ?>

                    <option name="v_session_year" id="v_session_year" value="<?php echo $fetch_row_res_qry_select_all_session['v_session_year']?>"><?php echo $fetch_row_res_qry_select_all_session['v_session_year']?></option>
                    <?php
                  }
                }
                    ?>  </select>





      </div>
    </br></br><hr>
       <input type="submit" name="view_stu" name="View">
</div>
</form>
      </div>
      <div class="x_content">
        <?php

        if(isset($_POST['view_stu'])){
         $class_tbl_name = $_POST['v_class'];
         $v_session = $_POST['v_session_year'];
          $select_student_class = "select * from  $class_tbl_name where i_status=0 AND v_session_year='$v_session'";
          $res_select_student_class = mysqli_query($db,$select_student_class);
          $res_num_rows= mysqli_num_rows($res_select_student_class);
        if($res_num_rows>0)
        {
            ?>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Sno</th>
              <th>Class</th>
              <th>Date Of Birth Of Student</th>
              <th>Name OF Student</th>
              <th>Student Enroilment</th>
              <th>Date Of Admission</th>
              <th>Gender</th>
              <th>Nationality</th>
              <th>Religion</th>
              <th>Current Address</th>
              <th>District</th>
              <th>State</th>
              <th>Pin Code</th>
              <th>Father's Name</th>
              <th>Father Highest Qualifications</th>
              <th>Father Occupation</th>
              <th>Father Mobile</th>
              <th>Father Email</th>
              <th>Mother's Name</th>
              <th>Mother Highest Qualifications</th>
              <th>Mother Occupation</th>
              <th>Mother Mobile</th>
              <th>Mother Email</th>
              <th>Student Photo</th>
              <th>Mother Photo</th>
              <th>Father Photo</th>
              <th>Student Birth Certificate Photo</th>
              <th>Student Adhaar</th>
              <th>Father Adhaar</th>
              <th>Mother Adhaar</th>
            </tr>

          </thead>


          <tbody>
            <?php
            while($row_res_num_rows = mysqli_fetch_assoc($res_select_student_class))
                {
             ?>

            <tr>

                          <td><?php echo $row_res_num_rows['i_sno'];?></td>
                          <td><?php echo $row_res_num_rows['v_class'];?></td>
                          <td><?php echo $row_res_num_rows['d_date_of_birth_student'];?></td>
                          <td><?php echo $row_res_num_rows['v_name_of_student'];?></td>
                          <td><?php echo $row_res_num_rows['v_student_enroilment'];?></td>
                          <td><?php echo $row_res_num_rows['d_date_of_admission'];?></td>
                          <td><?php echo $row_res_num_rows['v_gender'];?></td>
                          <td><?php echo $row_res_num_rows['v_nationality'];?></td>
                          <td><?php echo $row_res_num_rows['v_religion'];?></td>
                          <td><?php echo $row_res_num_rows['v_current_address'];?></td>
                          <td><?php echo $row_res_num_rows['v_district'];?></td>
                          <td><?php echo $row_res_num_rows['v_state'];?></td>
                          <td><?php echo $row_res_num_rows['v_pincode'];?></td>
                          <td><?php echo $row_res_num_rows['v_father_name'];?></td>
                          <td><?php echo $row_res_num_rows['v_father_highest_qualification'];?></td>
                          <td><?php echo $row_res_num_rows['v_father_occupation'];?></td>
                          <td><?php echo $row_res_num_rows['v_father_mobile'];?></td>
                          <td><?php echo $row_res_num_rows['v_father_email'];?></td>
                          <td><?php echo $row_res_num_rows['v_mother_name'];?></td>
                          <td><?php echo $row_res_num_rows['v_mother_highest_qualification'];?></td>
                          <th><?php echo $row_res_num_rows['v_mother_occupation'];?></th>
                          <td><?php echo $row_res_num_rows['v_mother_mobile'];?></td>
                          <td><?php echo $row_res_num_rows['v_mother_email'];?></td>
                          <div class=onloadedmetadata="row"><td><img src="<?php echo $row_res_num_rows['v_photo_student_photograph'];?>"  style="width:200px;height:200px"></td>
                          <td><img src="<?php echo $row_res_num_rows['v_photo_father_photograph'];?>"  style="width:200px;height:200px"></td>
                          <td><img src="<?php echo $row_res_num_rows['v_photo_mother_photograph'];?>"  style="width:200px;height:200px"></td>
                        </div>  <td><img src="<?php echo $row_res_num_rows['p_birth_certificate_student'];?>"  style="width:200px;height:200px"></td>
                          <td><img src="<?php echo $row_res_num_rows['v_student_adhaar'];?>"  style="width:200px;height:200px"></td>
                          <td><img src="<?php echo $row_res_num_rows['v_father_adhaar'];?>"  style="width:200px;height:200px"></td>
                          <td><img src="<?php echo $row_res_num_rows['v_mother_adhaar'];?>"  style="width:200px;height:200px"></td>

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

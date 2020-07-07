<?php
include "header.php";
include "phpmysqlconnect.php";
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Accountant <small></small></h3>
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
        <h2>Manage Accountant<small>Users</small></h2>
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

        $qry_select_all_accountant = "select * from tbl_accountant_record where i_status=1";
        $res_qry_select_all_accountant= mysqli_query($db,$qry_select_all_accountant);
        $res_num_rows=mysqli_num_rows($res_qry_select_all_accountant);
        if($res_num_rows>0){
            ?>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Sno</th>
              <th>Name</th>
              <th>Accountant Photograph</th>
              <th>Accountant Id</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Qualifiacation</th>
              <th>Action</th>
              <th>Salary</th>
              <th>Phone No</th>
              <th>Address</th>
              <th>Account No</th>
              <th>Bank Name</th>
              <th>IFSC CODE</th>
            </tr>
          </thead>


          <tbody>
            <?php
            while($row_res_qry_select_all_accountant = mysqli_fetch_assoc($res_qry_select_all_accountant))
            {

             ?>

            <tr>
              <td><?php echo $row_res_qry_select_all_accountant['i_sno'];?></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_accountant_name'];  ?>
              </td>
              <td><a href="<?php echo $row_res_qry_select_all_accountant['v_accountant_photograph'];  ?>"><img src="<?php echo $row_res_qry_select_all_accountant['v_accountant_photograph'];  ?>"  style="width:200px;height:200px"></a></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_accountant_id'];  ?></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_accountant_email'];  ?></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_gender'];  ?></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_highest_qualifications'];  ?></td>
              <?php
                  echo "<td>";
                  echo "<a style='margin-right: 15px;' href='update_accountant.php?id=". $row_res_qry_select_all_accountant['i_sno'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                  echo "<a style='margin-right: 15px;' href='delete_accountant.php?id=". $row_res_qry_select_all_accountant['i_sno'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                  echo "</td>";
                  ?>
              <td><?php echo $row_res_qry_select_all_accountant['v_salary'];  ?></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_phone'];  ?></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_address'];  ?></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_account_no'];  ?></td>
              <td><?php echo $row_res_qry_select_all_accountant['v_bank_name'];  ?> </td>
              <td><?php echo $row_res_qry_select_all_accountant['v_ifsc_code'];  ?></td>
            </tr>
            <?php
          }

            ?>

          </tbody>
        </table>
        <?php
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

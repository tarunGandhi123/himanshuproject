<?php
include "header.php";
include "phpmysqlconnect.php";
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Classes <small></small></h3>
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
        <h2>Manage Classes</h2>
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

        $qry_select_all_classes = "select * from tbl_classes";
        $res_qry_select_all_classes = mysqli_query($db,$qry_select_all_classes);
        $res_num_rows=mysqli_num_rows($res_qry_select_all_classes);
        if($res_num_rows>0){


        ?>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>S.no</th>
              <th>Class</th>
              <th>Class Table Name</th>


            </tr>
          </thead>
          <tbody>


          <?php
          while($row_res_qry_select_all_classes = mysqli_fetch_assoc($res_qry_select_all_classes))
          {

           ?>
            <tr>
              <td><?php echo $row_res_qry_select_all_classes['I_sno'];  ?></td>
              <td><?php echo $row_res_qry_select_all_classes['v_class'];  ?></td>
              <td><?php echo $row_res_qry_select_all_classes['v_class_table_name'];?></td>
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

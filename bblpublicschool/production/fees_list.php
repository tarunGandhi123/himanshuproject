<?php
include "header.php";
include "phpmysqlconnect.php";
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Fees List <small></small></h3>
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
        <h2>Manage Fees List</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a href="add_fee_list.php"><Button>Add Fees List</button></a>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
            <?php
         $select_fees_list = "select * from  tbl_fees_list ";
          $res_select_fees_list = mysqli_query($db,$select_fees_list);
          $res_num_rows= mysqli_num_rows($res_select_fees_list);
        if($res_num_rows>0)
        {


            ?>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
               <th>Sno</th>
              <th>Class</th>
                <th>Tution Fees</th>
                <th>Exam Fees</th>
                    <th>Admission_fees</th>
                <th>Total Fees</th>
                </tr>
          </thead>


          <tbody>
                        <?php
            while($row_res_select_fees_list = mysqli_fetch_assoc($res_select_fees_list))
            {
              $vclass= $row_res_select_fees_list['v_class'];
               $select_class_name = "select v_class from tbl_classes where v_class_table_name ='$vclass'";
              $res_select_class_name = mysqli_query($db,$select_class_name);
              $row_res_select_class_name = mysqli_num_rows($res_select_class_name);
              if($row_res_select_class_name>0){

            while($row_res_select_class_name = mysqli_fetch_assoc($res_select_class_name))

                {
             ?>

            <tr>

              <td><?php echo $row_res_select_fees_list['i_sno']; ?></td>
              <td><?php echo $row_res_select_class_name['v_class']; ?></td>
              <td><?php echo $row_res_select_fees_list['v_tution_fees']; ?></td>
              <td><?php echo $row_res_select_fees_list['v_exam_fees']; ?></td>
              <td><?php echo $row_res_select_fees_list['v_Admission_fees']; ?></td>
              <td><?php echo $row_res_select_fees_list['v_total_fees']; ?></td>

                  </tr>
                       <?php
          }
        }
      }
}


else{
  echo "Data not Found";
     }
            ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>



  </div>
</div>




<?php
include "footer.php";
?>

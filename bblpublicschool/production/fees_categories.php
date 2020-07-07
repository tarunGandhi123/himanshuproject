<?php
include "header.php";
include "phpmysqlconnect.php";
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Fees Categories <small></small></h3>
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
        <h2>Manage Fees Category</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a href="add_fees_category.php"><Button>Add Fees Category</button></a>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php

        $qry_select_all_fees_categories = "select * from tbl_fee_categories";
        $res_qry_select_all_fees_categories= mysqli_query($db,$qry_select_all_fees_categories);
        $res_num_rows=mysqli_num_rows($res_qry_select_all_fees_categories);
        if($res_num_rows>0){
            ?>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>S.No</th>
                <th>Fees Categories</th>
                <th>Status</th>

                </tr>
          </thead>


          <tbody>
                 <?php
            while($row_res_qry_select_all_fees_categories = mysqli_fetch_assoc($res_qry_select_all_fees_categories))
                   {

             ?>

            <tr>
              <td><?php echo $row_res_qry_select_all_fees_categories['i_sno']; ?></td>
              <td><?php echo $row_res_qry_select_all_fees_categories['v_fees_categories']; ?></td>
              <td><?php if($row_res_qry_select_all_fees_categories['i_status']==1)

{


echo "<a style='margin-right: 15px;' href='act_inact.php?id=". $row_res_qry_select_all_fees_categories['i_sno'] ."' title='Active' data-toggle='tooltip'><input type='submit' class='fee_status' id='active' name='active' value='Active'></a>";
               ?>
      <?php

      }
        else {

    echo" <a style='margin-right: 15px;' href='act_inact.php?id=". $row_res_qry_select_all_fees_categories['i_sno'] ."' title='Active' data-toggle='tooltip'><input type='submit' class='fee_status' name='inactive' id='inactive' value='InActive'></a>";

?>


<?php


}
?>
             </td>


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

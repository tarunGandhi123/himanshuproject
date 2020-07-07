<?php
include "header.php";
?>


<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Fees Report <small></small></h3>
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
        <h2>Fees Report<small>Class Wise</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><button href="fees_invoice.php"> Generate Invoice
          </button></li>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
   <!--    <div class="row">
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">

  <label for="heard">Select Class:</label>
  <select id="heard" class="form-control" required>
    <option value="">Choose..</option>
    <option value="press">Nursery</option>
    <option value="net">L.K.G</option>
    <option value="mouth">U.K.G</option>
    <option value="press">1st</option>
    <option value="net">2nd</option>
    <option value="mouth">Third</option>
    <option value="press">Fourth</option>
    <option value="net">Fifth</option>
    <option value="mouth">Sixth</option>
    <option value="press">Seventh</option>
    <option value="net">Eigth</option>
    <option value="mouth">Ninth</option>
    <option value="press">Tenth</option>
    <option value="net">+1</option>
    <option value="mouth">+2</option>
  </select>



</div>

<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">

    <label for="heard">Select Session:</label>
    <select id="heard" class="form-control" required>
      <option value="">Choose..</option>
      <option value="press">2011-2012</option>
      <option value="net">2012-2013</option>
      <option value="mouth">2013-2014</option>
      <option value="press">2014-2015</option>
      <option value="net">2015-2016</option>
      <option value="mouth">2016-2017</option>
      <option value="press">2017-2018</option>
      <option value="net">2018-2019</option>
      <option value="mouth">2019-2020</option>

    </select>



  </div>


    <div class="col-md-3">
      <div id="reportrange" class="pull-right" style="background: #fff;display:block; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
        <span>December 30, 2018 - November 28, 2019</span> <b class="caret"></b>
      </div>
    </div>

        </div>
   -->
      <div class="x_content">
    <?php
    include "phpmysqlconnect.php";

       $qry_select_all_invoice = "select * from tbl_fee_invoice";
        $res_qry_select_all_invoice = mysqli_query($db,$qry_select_all_invoice);
        $res_num_rows=mysqli_num_rows($res_qry_select_all_invoice);
        if($res_num_rows>0){
            ?>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Invoice id</th>
              <th>Student Name</th>
              <th>Student Enroilment</th>
              <th>Class</th>
              <th>Father Name</th>
              <th>Father Mobile</th>
              <th>Total Fess </th>
              <th>Fess  Paid</th>
              <th>Pending Fess </th>
              <th>date</th>
              <th>Order Id </th>
              <th>Fees Paid month </th>
            </tr>
          </thead>


          <tbody>
                <?php
            while($row_res_qry_select_all_invoice = mysqli_fetch_assoc($res_qry_select_all_invoice))
            {
        $total_fees=$row_res_qry_select_all_invoice['v_fees_paid']+$row_res_qry_select_all_invoice['v_pending_fees'];
             ?>
            <tr>

              <td><?php echo $row_res_qry_select_all_invoice['i_invoice_id'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_student_name'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_student_enroilment_no'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_class'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_student_father_name'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_father_mobile'];  ?></td>
              <td><?php echo $total_fees ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_fees_paid'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_pending_fees'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['d_date'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_order_id'];  ?></td>
              <td><?php echo $row_res_qry_select_all_invoice['v_fees_paid_month'];  ?></td>
            </tr>
            <?php
          }

            ?>

          </tbody>
        </table>
        <?php
}
else {



  echo "Data not found";
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

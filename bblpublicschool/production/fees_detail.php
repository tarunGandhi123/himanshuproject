
                          <?php
     include "header.php";
                            include "phpmysqlconnect.php";
                  $v_father_mobile=$_GET['v_father_mobile'];
     if (empty($_GET['v_father_mobile']))
                            {
                              header('Location: fees_invoice.php');
                              exit;
                            }
else
                        {
                                 ?>
<div class="right_col" role="main">
               <div class="row">
          <div class="x_panel">
            <div class="x_title">
              <h2>Invoice Form </h2>
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


                            $v_father_mobile=$_GET['v_father_mobile'];
                            $v_father_name=$_GET['v_father_name'];
                                $v_student_enroilment=$_GET['v_student_enroilment'];
                            $v_admission_no=$_GET['v_admission_no'];
                            $v_name_of_student=$_GET['v_name_of_student'];

                            $v_pending_fees=$_GET['v_pending_fees'];

                                $v_address=$_GET['v_address'];
                            $class=$_GET['class'];
                            $total_fees_to_be_paid=$v_pending_fees;
      $query_select_last_invoice_id = "SELECT max(i_invoice_id)  as last_invoice_id FROM tbl_fee_invoice";
                          $res_query_select_last_invoice_id = mysqli_query($db,$query_select_last_invoice_id);
                          $row_res_query_select_last_invoice_id = mysqli_fetch_array($res_query_select_last_invoice_id);
                          $last_invoice_id = $row_res_query_select_last_invoice_id['last_invoice_id'];
                          $v_fees_paid_month = $_GET['v_fees_paid_month'];
                          $v_fees_paid_year = $_GET['v_fees_paid_year'];
                           $invoice_id = $last_invoice_id +1;
                             $order_id = $invoice_id.$v_student_enroilment;
                          ?>

                    <section class="content invoice">


                      <form id="invoice_page" name="invoice_page" method="POST" action="invoice_form.php">
                      <!-- title row -->
                      <input type = "hidden" name="v_father_mobile" id="v_father_mobile" value= "<?php echo $v_father_mobile ?>">
                      <input type = "hidden" name="v_father_name" id="v_father_name" value= "<?php echo $v_father_name ?>">

                      <input type = "hidden" name="v_student_enroilment" id="v_student_enroilment" value= "<?php echo $v_student_enroilment ?>">
                      <input type = "hidden" name="v_admission_no" id="v_admission_no" value= "<?php echo $v_admission_no ?>">
                       <input type = "hidden" name="v_name_of_student" id="v_name_of_student" value= "<?php echo $v_name_of_student ?>">
                        <input type = "hidden" name="v_pending_fees" id="v_pending_fees" value= "<?php echo $v_pending_fees ?>">
                      <input type = "hidden" name="v_address" id="v_address" value= "<?php echo $v_address ?>">
                      <input type = "hidden" name="class" id="class" value= "<?php echo $class ?>">
                      <input type = "hidden" name="total_fees_to_be_paid" id="total_fees_to_be_paid" value= "<?php echo $total_fees_to_be_paid ?>">
                      <input type = "hidden" name="invoice_id" id="invoice_id" value= "<?php echo $invoice_id ?>">
                          <input type = "hidden" name="order_id" id="order_id" value= "<?php echo $order_id ?>">
                          <input type = "hidden" name="v_fees_paid_month" id="v_fees_paid_month" value= "<?php echo $v_fees_paid_month ?>">
                          <input type = "hidden" name="v_fees_paid_year" id="v_fees_paid_year" value= "<?php echo $v_fees_paid_year ?>">
                                            <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                            <i class="fa fa-globe"></i> Invoice.
                       <small class="pull-right">
</small>
                                          <small class="pull-right">

</small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                    </br></br></br>

                      <!-- /.row -->
                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                          <tr>
                               <th>Addimission no</th>
                                <th>Student Name</th>
<!--                                <th>Father Name</th>-->

                                <th>Pending Fees</th>

                                <th>Total Fees to be Paid</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                            <td><?php echo $v_admission_no; ?></td>
                                <td><?php echo $v_name_of_student; ?></td>


                                  <td><?php echo $v_pending_fees;?></td>

                                  <td><?php echo $total_fees_to_be_paid;?></td>


                              </tr>

                              </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->

                        <!-- /.col -->
                        <div class="col-xs-6">

                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:25%" >Enter the Amount:</th>
                                    <th style=""> <input type="text" name="enter_the_amount" id="enter_the_amount"></th>

                                </tr>



                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
        <br />        <br />        <br />

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">

                        <div class="col-xs-12">

                          <input type="submit" name="invoice" value="Generate" id="invoice">

                        </div>
                      </div>
                    </form>
                    </section>
                  </div>
                 <?php
}
                  ?>

</div>
</div>
</div>

                  <?php
                    include "footer.php";
                  ?>

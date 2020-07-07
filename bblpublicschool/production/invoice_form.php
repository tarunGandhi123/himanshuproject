                          <?php
                    include "header.php";
                            include "phpmysqlconnect.php";

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
                        if($_POST['invoice'])

                        {
                            $v_father_mobile=$_POST['v_father_mobile'];
                                $v_student_enroilment=$_POST['v_student_enroilment'];
                            $v_admission_no=$_POST['v_admission_no'];
                            $v_name_of_student=$_POST['v_name_of_student'];

                            $v_pending_fees=$_POST['v_pending_fees'];
                            $v_address=$_POST['v_address'];
                            $class=$_POST['class'];
                            $total_fees_to_be_paid=$_POST['total_fees_to_be_paid'];
                            $invoice_id = $_POST['invoice_id'];
                            $order_id = $_POST['order_id'];
                            $enter_the_amount = $_POST['enter_the_amount'];
                            $v_father_name = $_POST['v_father_name'];
                            $v_fees_paid_month = $_POST['v_fees_paid_month'];
                            $v_fees_paid_year = $_POST['v_fees_paid_year'];
                             $due_fees=$total_fees_to_be_paid-$enter_the_amount;

                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');
                            $today = $year . '-' . $month . '-' . $day;

 echo $query_insert_fees_invoice="insert into tbl_fee_invoice(i_invoice_id,v_student_name,v_admission_no,v_student_enroilment_no,v_address,v_class,v_student_father_name,v_father_mobile,v_fees_paid,v_fees_paid_month,v_fees_paid_year,v_pending_fees,v_late_fees,d_date,v_order_id)
values($invoice_id,'$v_name_of_student','$v_admission_no','$v_student_enroilment','$v_address','$class','$v_father_name','$v_father_mobile','$enter_the_amount','$v_fees_paid_month','$v_fees_paid_year','$due_fees','$v_fine','$today','$order_id')";
                            $execute_query_insert_fees_invoice=mysqli_query($db,$query_insert_fees_invoice);
                            if($execute_query_insert_fees_invoice==1)
                            {
 echo $query_update_fees_student_record="update tbl_student_record set v_pending_fees='$due_fees' where v_admission_no='$v_admission_no'";
$exec_query_update_fees_student_record=mysqli_query($db,$query_update_fees_student_record);
                          ?>

                    <section class="content invoice">



                      <!-- title row -->

                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                            <i class="fa fa-globe"></i> Invoice.
                       <small class="pull-right">
                         <?php echo $today ?>
</small>

                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                    </br></br></br>
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                                          <strong>Bbl Public School</strong>
                                          <br>Faridabad
                                          <br>Haryana , india
                                          <br>Phone: 0184-123-9876
                                          <br>Email: bblpublicschool.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                                          <strong><?php echo $v_name_of_student;?></strong>
                                          <br><?php echo $v_address;?>



                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice ID:</b> <?php echo $invoice_id?>
                          <br>
                          <br>
                          <b>Order ID:</b> <?php echo $order_id?>
                          <br>

                          <br>
                          <b>Enroilment  No:</b> <?php echo $v_student_enroilment?>
                        </div>
                        <!-- /.col -->
                      </div>
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

                                <th> Fees to be Paid</th>
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
                        <div class="col-xs-12">

                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Fees Paid:</th>
                                  <td><?php echo $enter_the_amount ?></td>
                                  <th style="width:50%">Due Balance:</th>
                                  <td><?php echo $due_fees ?></td>
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
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        </div>
                      </div>
                    </section>
                  </div>
                 <?php

                                }
                            }

                  ?>

</div>
</div>
</div>

                  <?php
                    include "footer.php";
                  ?>

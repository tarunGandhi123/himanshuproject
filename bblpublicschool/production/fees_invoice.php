<?php
include "header.php";
?>


<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Fees Invoice <small></small></h3>
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





            <div class="clearfix"></div>

        <br />
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
            <form method="POST" action="generate_fees_invoice.php" >
            <div class="x_content">
            <label for="Enroilment"> Phone No * :</label>
                <input type="text" id="v_father_mobile" class="form-control" name="v_father_mobile" required />
                  <label for="Enroilment"> Month * :</label>
                <input type="text" id="v_fees_paid_month" class="form-control" name="v_fees_paid_month" required />
                      <label for="Enroilment"> Year * :</label>
                <input type="text" id="v_fees_paid_year" class="form-control" name="v_fees_paid_year" required />
                
                <br/>

        <input type="submit" name="fee_invoice_submit" id="fee_invoice_submit">

            </div>
          </form>
          </div>


          </div>



        </div>


        <!-- /page content -->
<br/>
<br/><br/>
<br/>


    </div>
  </div>


</div>



  </div>
</div>





<?php
include "footer.php";
 ?>

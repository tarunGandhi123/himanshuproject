<?php
include "phpmysqlconnect.php";
include "header.php";

$month = date('m');
$day = date('d');
$year = date('Y');
  $today = $day . '-' . $month . '-' . $year;
 ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
              <div class="count">
                <?php
                $query_count_total_students ="select count(v_student_enroilment) as total_students from tbl_student_record";
                 $res_query_count_total_students = mysqli_query($db,$query_count_total_students);
                 $row_res_query_count_total_students = mysqli_fetch_array($res_query_count_total_students);
              print_r($row_res_query_count_total_students['total_students']);

              ?>

            </div>
                  </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i>  Date</span>
              <div class="count"> <?php echo $today?></div>
              <span class="count_bottom"><i class="green">
<?php
echo date('l', strtotime($today));?></span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Messages Spent</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>30000</i> Remaining</span>
            </div>

          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Fees <small>Report</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2018 - November 28, 2019</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>


                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>To Do List <small>Sample tasks</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="">
                    <ul class="to_do">
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Create email address for new intern</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Create email address for new intern</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End to do list -->

          </div>
          <br />


        </div>
        <!-- /page content -->

      <?php
          include "footer.php";

        ?>

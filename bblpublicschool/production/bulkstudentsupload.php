<?php
include("header.php");
include "phpmysqlconnect.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
 ?>
 <div class="right_col" role="main">
 <div class="">
     <div class="page-title">
       <div class="title_left">
           <h3>Bulk Student Upload</h3>
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
     <div class="x_content">
         <div class="x_panel">
           <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">

                                   <!-- Form Name -->


                                   <div class="row">
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                         <label for="Class">Select Class * :</label>
                                         <?php
                                          $query_select_all_class = "select * from tbl_classes";
                                          $res_query_select_all_class = mysqli_query($db,$query_select_all_class);
                                           $row_res_qry_select_all_classes = mysqli_num_rows($res_query_select_all_class);
                                          if($row_res_qry_select_all_classes>0)
                                          {


                                         ?>

                                          <select class="form-control" name="v_class" id="v_class">
                                                <option>Choose option</option>
                                            <?php
                                                while($fetch_row_res_qry_select_all_classes = mysqli_fetch_array($res_query_select_all_class)) {
                                             ?>

                                                   <option name="v_class" id="v_class" value="<?php echo $fetch_row_res_qry_select_all_classes['v_class_table_name']?>"><?php echo $fetch_row_res_qry_select_all_classes['v_class']?></option>
                                                   <?php
                                                 }
                                               }
                                                   ?>


                                                 </select>

                                   </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                     <label for="filebutton">Select File *</label>
                                         <input type="file" name="file" id="file" class="form-control">
                                          </div>
                                      </div>

                                   <!-- Button -->
                                   <br>
                                   <div class="form-group">
                                       <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                                       <div class="col-md-4">
                                           <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                                       </div>
                                   </div>

                           </form>
     </div>
     </div>
     </div>
     </div>
</div>

<?php
include "footer.php";
 ?>

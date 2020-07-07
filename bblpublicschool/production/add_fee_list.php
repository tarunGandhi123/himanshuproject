<?php
include "header.php";
include "phpmysqlconnect.php";
 ?>
 <div class="right_col" role="main">
 <!-- page content -->
   <div class="">
     <div class="page-title">
       <div class="title_left">
         <h3>Add Fees List</h3>
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
<div class="col-sm-6">
 <div class="x_panel">
   <div class="x_title">
     <h2>Add Fee</h2>
     <ul class="nav navbar-right panel_toolbox">
       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
       </li>

       <li><a class="close-link"><i class="fa fa-close"></i></a>
       </li>
     </ul>
     <div class="clearfix"></div>
   </div>
   <div class="x_content">

     <!-- start form for validation -->
     <form id="fee_list" name="fee_list"  method="POST" action="add_fees_list.php">

       <label for="Class"> Class * :</label>
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
<?php
$query_select_fees_categories ="select * from tbl_fee_categories where i_status= 1";
$res_query_select_fees_categories = mysqli_query($db,$query_select_fees_categories);
   $row_res_query_select_fees_categories = mysqli_num_rows($res_query_select_fees_categories);
while($fetch_row_res_query_select_fees_categories = mysqli_fetch_array($res_query_select_fees_categories)) {


?>

  <label for="fees"><?php echo $fetch_row_res_query_select_fees_categories['v_fees_categories']; ?> Fees:</label>
       <input type="text" id="<?php echo $fetch_row_res_query_select_fees_categories['v_field_name'];?>" class="form-control" name="<?php echo $fetch_row_res_query_select_fees_categories['v_field_name'];?>" required />


<?php

}
?>

     <br/>
         <input type="submit" name="add_fees_list" id="add_fees_list">

     </form>
     <!-- end form for validations -->

   </div>
 </div>

</div>
</div>

</div>
</div>

<?php
include "footer.php";
 ?>

<?php

include "header.php";

 ?>
 <div class="right_col" role="main">
 <!-- page content -->
   <div class="">
     <div class="page-title">
       <div class="title_left">
         <h3>Add Fees Category</h3>
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

 <div class="x_panel">
   <div class="x_title">
     <h2>Fee Category Form</h2>
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
     <form id="fees_categories" method="GET" action="">
       <div class="col-sm-4"
       <label for="Fee Category"> Fee Category * :</label>
       <input type="text" id="v_fees_categories" class="form-control" name="v_fees_categories" required />
            <br/>
           <input type="submit" name="add_fees_categories"  id="add_fees_categories" class="btn btn-primary" value="submit">
</div>
     </form>
     <!-- end form for validations -->

   </div>
 </div>


</div>

</div>
</div>

<?php
include "footer.php";
 ?>

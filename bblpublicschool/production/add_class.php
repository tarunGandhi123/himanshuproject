<?php
include("header.php");
 ?>
 <div class="right_col" role="main">
 <div class="">
     <div class="page-title">
       <div class="title_left">
           <h3>Add Class</h3>
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
<form name="add_class" id="add_class" method="POST">
         <label for="class_name"> Class Name * :</label>
        <input type="text" id="v_class_name" name="v_class_name" required />

     <input type="submit" name="add_class_db" id="add_class_db" value="submit" >
             </form>.
     </div>
     </div>
     </div>
     </div>
</div>

<?php
include "footer.php";
 ?>

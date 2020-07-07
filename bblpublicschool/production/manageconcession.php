<?php
include("header.php");
 ?>
 <div class="right_col" role="main">
 <div class="">
     <div class="page-title">
       <div class="title_left">
           <h3>Concession Fees</h3>
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
<form name="concession_fees" id="concession_fees" method="POST">
         <label for="class_name"> Concession * :</label>
        <input type="text" id="v_concession_fees" name="v_concession_fees" required />

     <input type="submit" name="v_concessions" id="v_concessions" value="submit" >
             </form>.
     </div>
     </div>
     </div>
     </div>
</div>

<?php
include "footer.php";
 ?>

<?php

include "header.php";

 ?>
 <!-- page content -->
 <div class="right_col" role="main">
   <div class="">
     <div class="page-title">
       <div class="title_left">
         <h3>Add Teachers</h3>
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
     <h2>Registration Form </h2>
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
     <form id="teacher_registration"  method="POST" action=""  enctype="multipart/form-data" data-parsley-validate>

<Label for="profile">Profile Pic *:</label>
  <div id="profile-container" style="width: 150px;height: 150px;overflow:hidden;  border-radius: 50%;">
<image id="profile_pic"  style="cursor: pointer;" />
</div>
         <input id="v_teacher_photograph" type="file" name="v_teacher_photograph" id="v_teacher_photograph" required>

       <label for="fullname"> Name * :</label>
       <input type="text" id="v_teacher_name" class="form-control" name="v_teacher_name" required />

       <label for="email">Email * :</label>
       <input type="email" id="v_teacher_email" class="form-control" name="v_teacher_email" data-parsley-trigger="change" required />

       <label>Gender *:</label>
       <p>
         M:
         <input type="radio" class="flat" name="v_gender" id="genderM" value="M" checked="" required /> F:
         <input type="radio" class="flat" name="v_gender" id="genderF" value="F" />
       </p>

       <label for="Qualification">Qualification * :</label>
       <input type="text" id="v_highest_qualifications" class="form-control" name="v_highest_qualifications" data-parsley-trigger="change" required />


       <label for="Salary">Salary * :</label>
       <input type="text" id="v_salary" class="form-control" name="v_salary" data-parsley-trigger="change" required />

       <label for="Phone">Phone No * :</label>
       <input type="text" id="v_phone" class="form-control" name="v_phone" data-parsley-trigger="change" required />


           <label for="Address">Address (20 chars min, 100 max) :</label>
           <textarea id="v_address" required="required" class="form-control" name="v_address" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
             data-parsley-validation-threshold="10"></textarea>


             <h1>Account Details</h1>

          <label for="Account">Account No :</label>
          <input type="text" id="v_account_no" class="form-control" name="v_account_no" data-parsley-trigger="change" required />
          <label for="Bank_Name">Bank Name:</label>
          <input type="text" id="v_bank_name" class="form-control" name="v_bank_name" data-parsley-trigger="change" required />
          <label for="Ifsc_Code">Ifsc Code:</label>
          <input type="text" id="v_ifsc_code" class="form-control" name="v_ifsc_code" data-parsley-trigger="change" required />


     <br/>
     <input type="submit" name="add_teacher" id="add_teacher_db" value="submit">


     </form>
     <span id="result"></span>
     <!-- end form for validations -->

   </div>
 </div>


</div>

</div>
</div>

<?php
include "footer.php";
 ?>

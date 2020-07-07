<?php

include "header.php";
include "phpmysqlconnect.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

 ?>
 <!-- page content -->
 <div class="right_col" role="main">
   <div class="">
     <div class="page-title">
       <div class="title_left">
         <h3>Add Student</h3>
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
     <form name="add_student_registration" action="add_student_db.php" id="add_student_registration" method="POST" enctype="multipart/form-data" >
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
      <label for="Class">Class * :</label>
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
     <label for="Date of Admission"> Date Of Admission * :</label>
     <input type="date" id="d_date_of_admission" class="form-control" name="d_date_of_admission" required />
   </div>
   </div>
   <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
   <label for="Student Name"> Name Of Applicant * :</label>
       <input type="text" id="v_name_of_student" class="form-control" name="v_name_of_student" required />
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Dob"> Date Of Birth * :</label>
           <input type="date" id="d_date_of_birth_student" class="form-control" name="d_date_of_birth_student" required />
</div>
         </div>
         <div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
           <label for="fullname"> Gender * :</label>

           <select class="form-control" name="v_gender" id="v_gender" >
             <option >Choose option</option>
             <option value="M" name="v_gender">Male</option>
             <option value= "F" name="v_gender">Female</option>
             <option value="O" name="v_gender">Others</option>
           </select>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
           <label for="fullname"> Session * :</label>
           <?php
            $query_select_all_session = "select * from tbl_session";
            $res_query_select_all_session = mysqli_query($db,$query_select_all_session);
             $row_res_qry_select_all_session = mysqli_num_rows($res_query_select_all_session);
            if($row_res_qry_select_all_session>0)
            {


           ?>
           <select class="form-control" name="v_session" id="v_session" >
             <option >Choose option</option>
             <?php
                 while($fetch_row_res_qry_select_all_session = mysqli_fetch_array($res_query_select_all_session)) {
              ?>

                    <option name="v_session_year" id="v_session_year" value="<?php echo $fetch_row_res_qry_select_all_session['v_session_year']?>"><?php echo $fetch_row_res_qry_select_all_session['v_session_year']?></option>
                    <?php
                  }
                }
                    ?>
           </select>
</div>
<div class="col-md-4 col-sm-8 col-xs-12">
       <label for="Nationality">Nationality  * :</label>
       <input type="text" id="v_nationality" class="form-control" name="v_nationality" required />
     </div>
     <div class="col-md-4 col-sm-8 col-xs-12">
            <label for="Admission No">Admission No  * :</label>
            <input type="text" id="v_admission_no" class="form-control" name="v_admission_no" required />
          </div>
          <div class="col-md-4 col-sm-8 col-xs-12">
                 <label for="Admission No">Concession  * :</label>
                 <?php
                  $query_select_all_concesession = "select * from tbl_concession_fees order by i_sno Asc";
                  $res_query_select_all_concesession = mysqli_query($db,$query_select_all_concesession);
                   $row_res_query_select_all_concesession = mysqli_num_rows($res_query_select_all_concesession);
                  if($row_res_query_select_all_concesession>0)
                  {


                 ?>
                 <select class="form-control" name="v_consessions" id="v_concesessions" >
                   <option >Choose option</option>
                   <?php
                       while($fetch_row_res_query_select_all_concesession = mysqli_fetch_array($res_query_select_all_concesession)) {
                    ?>

                          <option name="v_concessionfee" id="v_concessionfee" value="<?php echo $fetch_row_res_query_select_all_concesession['v_concession_fees']?>"><?php echo $fetch_row_res_query_select_all_concesession['v_concession_fees']?></option>
                          <?php
                        }
                      }
                          ?>
                 </select>
               </div>
   </div>
     <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Religion">Religion  * :</label>
       <input type="text" id="v_religion" class="form-control" name="v_religion" required />
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Current Address">Current Address  * :</label>
       <input type="text" id="v_current_address" class="form-control" name="v_current_address" required />
     </div>
     </div>
     <div class="row">
       <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="District">District  * :</label>
       <input type="text" id="v_district" class="form-control" name="v_district" required />
     </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="State">State  * :</label>
       <input type="text" id="v_state" class="form-control" name="v_state" required />
     </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Pincode">Pincode  * :</label>
       <input type="text" id="v_pincode" class="form-control" name="v_pincode" required />
     </div>
     </div>
       <h1>Father Details</h1>
       <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Father Name"> Name * :</label>
       <input type="text" id="v_father_name" class="form-control" name="v_father_name" required />
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Highest Qualification"> Highest Qualification * :</label>
       <input type="text" id="v_father_highest_qualification" class="form-control" name="v_father_highest_qualification" required />
     </div>
   </div>
   <div class="row">
     <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Occupation"> Occupation * :</label>
       <input type="text" id="v_father_occupation" class="form-control" name="v_father_occupation" required />
     </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Mobile No"> Mobile No * :</label>
       <input type="text" id="v_father_mobile" class="form-control" name="v_father_mobile" required />
     </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Email">Email * :</label>
       <input type="email" id="v_father_email" class="form-control" name="v_father_email" data-parsley-trigger="change" required />
</div>
</div>


       <h1>Mother Details</h1>
       <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Mother Name"> Name * :</label>
       <input type="text" id="v_mother_name" class="form-control" name="v_mother_name" required />
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Mother Highest Qualification"> Highest Qualification * :</label>
       <input type="text" id="v_mother_highest_qualification" class="form-control" name="v_mother_highest_qualification" required />
     </div>
   </div>
   <div class="row">
     <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Mother Occupation"> Occupation * :</label>
       <input type="text" id="v_mother_occupation" class="form-control" name="v_mother_occupation" required />
     </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Mother Mobile no"> Mobile No * :</label>
       <input type="text" id="v_mother_mobile" class="form-control" name="v_mother_mobile" required />
     </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Mother Email">Email * :</label>
       <input type="email" id="v_mother_email" class="form-control" name="v_mother_email" data-parsley-trigger="change" required />
</div>
</div>
</br>
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
           <Label for="Student Photo Upload">Student Photo Upload *:</label>
           <input type=file name="v_photo_student_photograph" id="v_photo_student_photograph">
         </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
           <Label for="Father Photo Upload">Father Photo Upload *:</label>
           <input type=file name="v_photo_father_photograph" id="v_photo_father_photograph">
         </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
           <Label for="Mother Photo Upload">Mother Photo Upload *:</label>
           <input type=file name="v_photo_mother_photograph" id="v_photo_mother_photograph">
         </div>

     <div class="col-md-3 col-sm-6 col-xs-12">
           <Label for="Student Birth Certificate ">Student Birth Certificate *:</label>
           <input type=file name="p_birth_certificate_student" id="p_birth_certificate_student">
         </div>
       </div>
     </br>
       <div class="row">
         <div class="col-md-4 col-sm-6 col-xs-12">
              <label for="Adhaar Card">Student Adaahr Card * :</label>
            <input type="file" id="v_student_adhaar"  name="v_student_adhaar"  style="border:none" />
          </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
            <label for="Father Adhaar">Father Adhaar :</label>
            <input type="file" id="v_father_adhaar"  name="v_father_adhaar"  style="border:none"/>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <label for="Mother Adhaar">Mother Adhaar* :</label>
            <input type="file" id="v_mother_adhaar"  name="v_mother_adhaar"   style="border:none" />
          </div>
        </div>
</br>

              <input type="submit" name="add_student" id="add_student" value="submit">

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

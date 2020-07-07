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
         <h3>Update Student</h3>
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
     <?php

     if(isset($_GET["id"]) && !empty($_GET["id"])){
       $id = $_GET["id"];
      echo $select_student_data = "select * from tbl_student_record where v_student_enroilment='$id'";
     $exec_select_student_data = mysqli_query($db,$select_student_data);
     $res_exec_select_student_data = mysqli_fetch_array($exec_select_student_data);
      $v_class =$res_exec_select_student_data['v_class'];
        $v_admission_no =$res_exec_select_student_data['v_admission_no'];
      $d_date_of_birth_student =$res_exec_select_student_data['d_date_of_birth_student'];
      $v_name_of_student =$res_exec_select_student_data['v_name_of_student'];
      $v_student_enroilment =$res_exec_select_student_data['v_student_enroilment'];
      $d_date_of_admission =$res_exec_select_student_data['d_date_of_admission'];
      $v_pending_fees =$res_exec_select_student_data['v_pending_fees'];
      $v_gender =$res_exec_select_student_data['v_gender'];
      $v_nationality =$res_exec_select_student_data['v_nationality'];
      $v_religion =$res_exec_select_student_data['v_religion'];
      $v_current_address =$res_exec_select_student_data['v_current_address'];
      $v_district =$res_exec_select_student_data['v_district'];
      $v_state =$res_exec_select_student_data['v_state'];
      $v_pincode =$res_exec_select_student_data['v_pincode'];
      $v_father_name =$res_exec_select_student_data['v_father_name'];
      $v_father_highest_qualification =$res_exec_select_student_data['v_father_highest_qualification'];
      $v_father_occupation =$res_exec_select_student_data['v_father_occupation'];
      $v_father_mobile =$res_exec_select_student_data['v_father_mobile'];
      $v_father_email =$res_exec_select_student_data['v_father_email'];
      $v_mother_name =$res_exec_select_student_data['v_mother_name'];
      $v_mother_highest_qualification =$res_exec_select_student_data['v_mother_highest_qualification'];
      $v_mother_occupation =$res_exec_select_student_data['v_mother_occupation'];
      $v_mother_mobile =$res_exec_select_student_data['v_mother_mobile'];
      $v_mother_email =$res_exec_select_student_data['v_mother_email'];
      $v_photo_student_photograph =$res_exec_select_student_data['v_photo_student_photograph'];
      $v_photo_father_photograph =$res_exec_select_student_data['v_photo_father_photograph'];
      $v_photo_mother_photograph =$res_exec_select_student_data['v_photo_mother_photograph'];
      $p_birth_certificate_student =$res_exec_select_student_data['p_birth_certificate_student'];
      $v_student_adhaar =$res_exec_select_student_data['v_student_adhaar'];
      $v_father_adhaar =$res_exec_select_student_data['v_father_adhaar'];
      $v_mother_adhaar =$res_exec_select_student_data['v_mother_adhaar'];
     }
     else{
     echo "Data no Found";
     }

     ?>

     <!-- start form for validation -->
     <form name="add_student_registration" action="add_student_db.php" id="add_student_registration" method="POST" enctype="multipart/form-data" >
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
      <label for="Class">Class * :</label>
      <?php
       $query_select_all_class = "select * from tbl_classes order by v_class_table_name = '$v_class' desc";
       $res_query_select_all_class = mysqli_query($db,$query_select_all_class);
        $row_res_qry_select_all_classes = mysqli_num_rows($res_query_select_all_class);
       if($row_res_qry_select_all_classes>0)
       {


      ?>

       <select class="form-control" name="v_class" id="v_class">

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
     <input type="date" id="d_date_of_admission" class="form-control" value="<?php echo $d_date_of_admission;?>" name="d_date_of_admission" required />
   </div>
   </div>
   <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
   <label for="Student Name"> Name Of Applicant * :</label>
       <input type="text" id="v_name_of_student" class="form-control" value="<?php echo $v_name_of_student;?>" name="v_name_of_student" required />
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Dob"> Date Of Birth * :</label>
           <input type="date" id="d_date_of_birth_student" class="form-control"value="<?php echo $d_date_of_birth_student;?>" name="d_date_of_birth_student" required />
</div>
         </div>
         <div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
           <label for="fullname"> Gender * :</label>
           <input type="text" id="v_gender" class="form-control" value="<?php echo $v_gender;?>" name="v_gender" readonly />

</div>
<div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Nationality">Nationality  * :</label>
       <input type="text" id="v_nationality" class="form-control" value="<?php echo $v_nationality;?>" name="v_nationality" required />
     </div>
   </div>
     <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Religion">Religion  * :</label>
       <input type="text" id="v_religion" class="form-control" value="<?php echo $v_religion;?>" name="v_religion" required />
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Current Address">Current Address  * :</label>
       <input type="text" id="v_current_address" class="form-control" value="<?php echo $v_current_address;?>" name="v_current_address" required />
     </div>
     </div>
     <div class="row">
       <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="District">District  * :</label>
       <input type="text" id="v_district" class="form-control" value="<?php echo $v_district;?>" name="v_district" required />
     </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="State">State  * :</label>
       <input type="text" id="v_state" class="form-control"value="<?php echo $v_state;?>"  name="v_state" required />
     </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Pincode">Pincode  * :</label>
       <input type="text" id="v_pincode" class="form-control" value="<?php echo $v_pincode;?>" name="v_pincode" required />
     </div>
     </div>
       <label for="Emroilment No">Enroilment No * :</label>
       <input type="text" id="v_student_enroilment" class="form-control" value="<?php echo $v_student_enroilment;?>" name="v_student_enroilment" required />


       <h1>Father Details</h1>
       <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Father Name"> Name * :</label>
       <input type="text" id="v_father_name" class="form-control" value="<?php echo $v_father_name;?>" name="v_father_name" required />
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Highest Qualification"> Highest Qualification * :</label>
       <input type="text" id="v_father_highest_qualification" value="<?php echo $v_father_highest_qualification;?>" class="form-control" name="v_father_highest_qualification" required />
     </div>
   </div>
   <div class="row">
     <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Occupation"> Occupation * :</label>
       <input type="text" id="v_father_occupation" class="form-control"  value="<?php echo $v_father_occupation;?>" name="v_father_occupation" required />
     </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Mobile No"> Mobile No * :</label>
       <input type="text" id="v_father_mobile" class="form-control" value="<?php echo $v_father_mobile;?>" name="v_father_mobile" required />
     </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Email">Email * :</label>
       <input type="email" id="v_father_email" class="form-control"value="<?php echo $v_father_email;?>"  name="v_father_email" data-parsley-trigger="change" required />
</div>
</div>


       <h1>Mother Details</h1>
       <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Mother Name"> Name * :</label>
       <input type="text" id="v_mother_name" class="form-control" value="<?php echo $v_mother_name;?>" name="v_mother_name" required />
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
       <label for="Mother Highest Qualification"> Highest Qualification * :</label>
       <input type="text" id="v_mother_highest_qualification" class="form-control" value="<?php echo $v_mother_highest_qualification;?>" name="v_mother_highest_qualification" required />
     </div>
   </div>
   <div class="row">
     <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Mother Occupation"> Occupation * :</label>
       <input type="text" id="v_mother_occupation" class="form-control"value="<?php echo $v_mother_occupation;?>"  name="v_mother_occupation" required />
     </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Mother Mobile no"> Mobile No * :</label>
       <input type="text" id="v_mother_mobile" class="form-control" value="<?php echo $v_mother_mobile;?>" name="v_mother_mobile" required />
     </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
       <label for="Mother Email">Email * :</label>
       <input type="email" id="v_mother_email" class="form-control" value="<?php echo $v_mother_email;?>" name="v_mother_email" data-parsley-trigger="change" required />
</div>
</div>
</br>
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
           <Label for="Student Photo Upload">Student Photo Upload *:</label>
             <img src="<?php echo $v_photo_student_photograph;?>"style="width:200px;height:200px">
           <input type=file name="v_photo_student_photograph" id="v_photo_student_photograph">

         </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
           <Label for="Father Photo Upload">Father Photo Upload *:</label>
               <img src="<?php echo $v_photo_father_photograph;?>"style="width:200px;height:200px">
           <input type=file name="v_photo_father_photograph" id="v_photo_father_photograph">
         </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
           <Label for="Mother Photo Upload">Mother Photo Upload *:</label>
               <img src="<?php echo $v_photo_mother_photograph;?>"style="width:200px;height:200px">
           <input type=file name="v_photo_mother_photograph" id="v_photo_mother_photograph">
         </div>

     <div class="col-md-3 col-sm-6 col-xs-12">
           <Label for="Student Birth Certificate ">Student Birth Certificate *:</label>
               <img src="<?php echo $p_birth_certificate_student;?>"style="width:200px;height:200px">
           <input type=file name="p_birth_certificate_student" id="p_birth_certificate_student">
         </div>
       </div>
     </br>
       <div class="row">
         <div class="col-md-4 col-sm-6 col-xs-12">
              <label for="Adhaar Card">Student Adaahr Card * :</label>
                <img src="<?php echo $v_student_adhaar;?>"style="width:200px;height:200px">
            <input type="file" id="v_student_adhaar"  name="v_student_adhaar"  style="border:none" />
          </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
            <label for="Father Adhaar">Father Adhaar :</label>
              <img src="<?php echo $v_father_adhaar;?>"style="width:200px;height:200px">
            <input type="file" id="v_father_adhaar"  name="v_father_adhaar"  style="border:none"/>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <label for="Mother Adhaar">Mother Adhaar* :</label>
              <img src="<?php echo $v_mother_adhaar;?>"style="width:200px;height:200px">
            <input type="file" id="v_mother_adhaar"  name="v_mother_adhaar"   style="border:none" />
          </div>
        </div>
</br>

              <input type="submit" name="update_student" id="update_student" value="submit">

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

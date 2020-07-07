<?php
include "phpmysqlconnect.php";
include "header.php";
 ?>
 <!-- page content -->
 <div class="right_col" role="main">
   <div class="">
     <div class="page-title">
       <div class="title_left">
         <h3>Add Accountanat</h3>
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
 $select_accountant_data = "select * from tbl_accountant_record where i_sno=$id";
$exec_select_accountant_data = mysqli_query($db,$select_accountant_data);
$res_exec_select_accountnat_data = mysqli_fetch_array($exec_select_accountant_data);
$v_accountant_name= $res_exec_select_accountnat_data['v_accountant_name'];
 $v_accountant_photograph =$res_exec_select_accountnat_data['v_accountant_photograph'];
$v_accountant_email= $res_exec_select_accountnat_data['v_accountant_email'];
$v_gender =$res_exec_select_accountnat_data['v_gender'];
$v_highest_qualifications= $res_exec_select_accountnat_data['v_highest_qualifications'];
$v_salary =$res_exec_select_accountnat_data['v_salary'];
$v_phone= $res_exec_select_accountnat_data['v_phone'];
$v_address =$res_exec_select_accountnat_data['v_address'];
$v_account_no =$res_exec_select_accountnat_data['v_account_no'];
$v_bank_name= $res_exec_select_accountnat_data['v_bank_name'];
$v_ifsc_code =$res_exec_select_accountnat_data['v_ifsc_code'];
}
else{
echo "Data no Found";
}
if(isset($_POST['update']))
{

  error_reporting(E_ALL);
  $targetDir = 'uploads/';
   $fileName = $_FILES["v_accountant_photograph"]["name"];
  $targetFilePath = $targetDir.$fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  $target_file = $targetDir . basename($_FILES["v_accountant_photograph"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");


  // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

      $image_base64 = base64_encode(file_get_contents($_FILES["v_accountant_photograph"]["tmp_name"]) );
      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

      // Upload file
    move_uploaded_file($_FILES['v_accountant_photograph']['tmp_name'],$targetDir.$fileName);
  }

      $v_accountant_photograph=basename($_FILES["v_accountant_photograph"]["name"],".jpg");
      $V_accountant_name1 = $_POST['v_accountant_name'];
      $V_accountant_email1 = $_POST['v_accountant_email'];
      $V_gender1 = $_POST['v_gender'];
      $V_highest_qualifications1 = $_POST['v_highest_qualifications'];
      $V_salary1 = $_POST['v_salary'];
      $V_phone1 = $_POST['v_phone'];
      $V_address1 = $_POST['v_address'];
      $V_account_no1 = $_POST['v_account_no'];
      $V_bank_name1 = $_POST['v_bank_name'];
      $V_ifsc_code1 = $_POST['v_ifsc_code'];
      $V_accountant_id1 = $V_accountant_name1.$V_phone1;
      $V_accountant_id1_md5=md5($V_accountant_id1);
      if(!empty($v_accountant_photograph)){
echo $update_accountant_record = "update tbl_accountant_record  set v_accountant_id='$V_accountant_id1', v_accountant_photograph ='$v_accountant_photograph',
v_accountant_name = '$V_accountant_name1',
v_accountant_email = '$V_accountant_email1',
v_gender = '$V_gender1',
v_salary = '$V_salary1',
v_phone='$V_phone1',
v_address = '$V_address1',
v_account_no = '$V_account_no1',
v_bank_name = '$V_bank_name1',
v_ifsc_code = '$V_ifsc_code1',
i_status = 1 where i_sno = $id;

";
$exec_update_accountant_record= mysqli_query($db,$update_accountant_record);
if($exec_update_accountant_record == 1){
echo "<script>alert('Successfully update')</script>";

      echo "<script>window.location.replace('manage_accountant.php');</script>";
}
else
{
echo "<script>alert('Cannot Update')</script>";
}
}
else{
echo  $update_accountant_record = "update tbl_accountant_record  set v_accountant_id='$V_accountant_id1',
  v_accountant_name = '$V_accountant_name1',
  v_accountant_email = '$V_accountant_email1',
  v_gender = '$V_gender1',
  v_salary = '$V_salary1',
  v_phone='$V_phone1',
  v_address = '$V_address1',
  v_account_no = '$V_account_no1',
  v_bank_name = '$V_bank_name1',
  v_ifsc_code = '$V_ifsc_code1',
  i_status = 1 where i_sno = $id;
  ";
  $exec_update_accountant_record= mysqli_query($db,$update_accountant_record);
  if($exec_update_accountant_record == 1){
  echo "<script>alert('Successfully update')</script>";

        echo "<script>window.location.replace('manage_accountant.php');</script>";
  }
  else
  {
  echo "<script>alert('Cannot Update')</script>";
  }

}
}


?>
     <!-- start form for validation -->
     <form id="Update_accountant_registration"   name= "Update_accountant_registration" method="POST" action=""  enctype="multipart/form-data" data-parsley-validate>

<Label for="profile">Profile Pic *:</label>
  <div id="profile-container" style="width: 150px;height: 150px;overflow:hidden;  border-radius: 50%;">
    <img src=" <?php echo $v_accountant_photograph;?>" style="width:150px;height:200px;">
<image id="profile_pic"  style="cursor: pointer;" />
</div>
         <input id="v_accountant_photograph" type="file" name="v_accountant_photograph" id="v_accountnat_photograph">

       <label for="fullname"> Name * :</label>
       <input type="text" id="v_accountant_name" class="form-control" name="v_accountant_name" value="<?php echo $v_accountant_name;?>" required />

       <label for="email">Email * :</label>
       <input type="email" id="v_accountant_email" class="form-control" name="v_accountant_email"value="<?php echo $v_accountant_email;?>" data-parsley-trigger="change" required />

       <label>Gender *:</label>
       <p>
         <?php
         if($v_gender == 'M')
         {
         ?>
         M:
         <input type="radio" class="flat" name="v_gender" id="genderM" value="M" checked="" required />      F:
          <input type="radio" class="flat" name="v_gender" id="genderF" value="F" />
        <?php
      }
        else {
        ?>

           M:
          <input type="radio" class="flat" name="v_gender" id="genderM" value="M"  required />
F:
         <input type="radio" class="flat" name="v_gender" id="genderF" value="F" checked="" />
         <?php
       }
       ?>
       </p>

       <label for="Qualification">Qualification * :</label>
       <input type="text" id="v_highest_qualifications" class="form-control"value="<?php echo $v_highest_qualifications;?>" name="v_highest_qualifications" data-parsley-trigger="change" required />


       <label for="Salary">Salary * :</label>
       <input type="text" id="v_salary" class="form-control" name="v_salary"  value="<?php echo $v_salary;?>"data-parsley-trigger="change" required />

       <label for="Phone">Phone No * :</label>
       <input type="text" id="v_phone" class="form-control" value="<?php echo $v_phone;?>" name="v_phone" data-parsley-trigger="change" required />


           <label for="Address">Address (20 chars min, 100 max) :</label>
           <textarea id="v_address" required="required" class="form-control" value="<?php echo $v_address?>" name="v_address" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
             data-parsley-validation-threshold="10"placeholder ="<?php echo $v_address?>"></textarea>
             <h1>Account Details</h1>

          <label for="Account">Account No :</label>
          <input type="text" id="v_account_no" class="form-control"value="<?php echo $v_account_no;?>" name="v_account_no" data-parsley-trigger="change" required />
          <label for="Bank_Name">Bank Name:</label>
          <input type="text" id="v_bank_name" class="form-control"value="<?php echo $v_bank_name;?>" name="v_bank_name" data-parsley-trigger="change" required />
          <label for="Ifsc_Code">Ifsc Code:</label>
          <input type="text" id="v_ifsc_code" class="form-control" value="<?php echo $v_ifsc_code;?>" name="v_ifsc_code" data-parsley-trigger="change" required />


     <br/>
     <input type="submit" name="update" id="update" value="Update">


     </form>

     <span id="result">
     </span>
     <!-- end form for validations -->
   </div>
 </div>


</div>

</div>
</div>

<?php
include "footer.php";
 ?>

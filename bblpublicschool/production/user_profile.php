<?php
    include "header.php";
include "phpmysqlconnect.php";

$v_user_name = $_SESSION['user_name'];
$v_user_photo = $_SESSION['user_photo'];
$v_user_email =  $_SESSION['v_user_email'];
$v_user_password = $_SESSION['v_user_password'];
if(empty($v_user_name) ){
echo "<script type='text/javascript'>alert('Login First');</script>";
header("Location: index.php");
}

 ?>
 <div class="right_col" role="main">
 <div class="">
     <div class="page-title">
       <div class="title_left">
           <h3>User Profile</h3>
       </div>
         </div>
    <div class="clearfix"></div>
     <div class="row">
     <div class="x_content">
         <div class="x_panel">

<form class="form-horizontal"  name="user_profile" method="POST" id="user_profile" enctype="multipart/form-data">
                    <div class="panel-body">
                      <h2 class="mgbt-xs-20"> Profile: <span class="font-semibold"><?php echo $v_user_name?></span> </h2>
                      <br>
                      <div class="row">
                        <div class="col-sm-9 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15"> <img alt="user image"  src="<?php echo $v_user_photo?>" style="width:20%;height:20%;"> </div>
                              <div class="form-img-action text-center mgbt-xs-20"> <input type="file" name="v_user_photo" value="UploadImage"> </div>
                              <br>
                              <div>

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">Account Setting</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="email" name="v_user_email" value="<?php echo $v_user_email?>" readonly>
                                </div>
                                <!-- col-xs-12 -->

                              </div>
                              <!-- row -->
                            </div>
                            <!-- col-sm-10 -->
                          </div>


                          <div class="form-group">
                            <label class="col-sm-3 control-label">Change Password</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" class="width-40"name="v_password" placeholder="Please Enter Your password">
                                </div>
                                <!-- col-xs-12 -->
                              </div>
                              <!-- row -->
                            </div>
                            <!-- col-sm-10 -->
                          </div>
                          <!-- form-group -->

                          <div class="form-group">
                            <label class="col-sm-3 control-label">Confirm Password</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="password" class="width-40" name="v_confirm_password" placeholder="Please Enter Your Password to Confirm">
                                </div>
                                <!-- col-xs-12 -->
                              </div>
                              <!-- row -->
                            </div>
                            <!-- col-sm-10 -->
                          </div>
                          <!-- form-group -->




                        </div>
                        <!-- col-sm-12 -->
                      </div>
                      <!-- row -->

                    </div>
                    <!-- panel-body -->
                    <div class="pd-20">
                        <input type="submit" name="user_profile_update" id="user_profile_update" value="update">
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

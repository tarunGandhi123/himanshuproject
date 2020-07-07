<?php

include("phpmysqlconnect.php");
$v_class_name = $_POST['V_class_name'];
 $v_class= strtolower($v_class_name);
$tbl_prefix= 'tbl_class_';
 $v_class_table_name = $tbl_prefix.$v_class;
  $create_table_class = "Create table $v_class_table_name(
  `i_sno` int(11) NOT NULL AUTO_INCREMENT primary key,
  `v_class` varchar(20) NOT NULL,
  `d_date_of_birth_student` date NOT NULL,
  `v_name_of_student` varchar(200) NOT NULL,
  `v_student_enroilment` varchar(20) NOT NULL unique,
  `d_date_of_admission` date NOT NULL,
  `v_gender` varchar(200) NOT NULL,
  `v_nationality` varchar(200) NOT NULL,
  `v_religion` varchar(200) NOT NULL,
  `v_current_address` varchar(500) NOT NULL,
  `v_district` varchar(200) NOT NULL,
  `v_pending_fees` varchar(500) NULL,
  `i_status` int(11)  default 1,
  `v_state` varchar(200) NOT NULL,
  `v_pincode` varchar(200) NOT NULL,
  `v_father_name` varchar(200) NOT NULL,
  `v_father_highest_qualification` varchar(200) NOT NULL,
  `v_father_occupation` varchar(200) NOT NULL,
  `v_father_mobile` varchar(200) NOT NULL,
  `v_father_email` varchar(200) NOT NULL,
  `v_mother_name` varchar(500) NOT NULL,
  `v_mother_highest_qualification` varchar(500) NOT NULL,
  `v_mother_occupation` varchar(500) NOT NULL,
  `v_mother_mobile` varchar(500) NOT NULL,
  `v_mother_email` varchar(500) NOT NULL,
  `v_photo_student_photograph` varchar(500)  NULL,
  `v_photo_father_photograph` varchar(500)  NULL,
  `v_photo_mother_photograph` varchar(500)  NULL,
  `p_birth_certificate_student` varchar(500)  NULL,
  `v_student_adhaar` varchar(200)  NULL,
  `v_father_adhaar` varchar(200)  NULL,
  `v_mother_adhaar` varchar(200)  NULL,
  `v_session_year` varchar(200)  NULL,
  `v_admission_no` varchar(20) NOT NULL unique
)";
 $exec_create_table_class = mysqli_query($db,$create_table_class);
if($exec_create_table_class==1){

   $qry_inserT_tbl_class_name= "insert into tbl_classes(v_class,v_class_table_name) values('$v_class_name','$v_class_table_name')";
    $res_qry_inserT_tbl_class_name = mysqli_query($db,$qry_inserT_tbl_class_name);

        echo "Class Successfully Created";
}
else{
    echo "Class ALREADY EXIST";
}

//

//print_r($_POST);



?>

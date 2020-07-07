<?php

include("phpmysqlconnect.php");
$v_class_name = $_POST['V_class_name'];
$tbl_prefix= 'tbl_class_';
 $tbl_name = $tbl_prefix.$v_class_name;
 $create_table_class = "Create table $tbl_name(
  `i_sno` int(11) NOT NULL,
  `v_class` varchar(20) NOT NULL,
  `d_date_of_birth_student` date NOT NULL,
  `v_name_of_student` varchar(200) NOT NULL,
  `v_student_enroilment` int(11) NOT NULL,
  `d_date_of_admission` date NOT NULL,
  `v_gender` varchar(200) NOT NULL,
  `v_nationality` varchar(200) NOT NULL,
  `v_religion` varchar(200) NOT NULL,
  `v_current_address` varchar(500) NOT NULL,
  `v_district` varchar(200) NOT NULL,
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
  `p_student_photograph` varchar(500) NOT NULL,
  `u_father_photograph` varchar(500) NOT NULL,
  `u_mother_photograph` varchar(500) NOT NULL,
  `p_birth_certificate_student` varchar(500) NOT NULL,
  `v_student_adhaar` varchar(200) NOT NULL,
  `v_father_adhaar` varchar(200) NOT NULL,
  `v_mother_adhaar` varchar(200) NOT NULL  
)";
echo $exec_create_table_class = mysqli_query($db,$create_table_class);
if($exec_create_table_class==1){
    
    echo "Class Successfully Created";
}
else{
    
    echo "Class ALREADY EXIST";
}

//

//print_r($_POST);



?>
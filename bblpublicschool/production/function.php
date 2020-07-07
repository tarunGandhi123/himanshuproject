
<?php
include("phpmysqlconnect.php");
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');
require_once('vendor/SpreadsheetReader_XLSX.php');
if (isset($_POST["Import"]))
{
   $v_class_name=$_POST['v_class'];


  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        $Reader = new SpreadsheetReader($targetPath);

        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {

          $Reader->ChangeSheet($i);
            $count=0;
            foreach ($Reader as $Row)


            {

                 if($count==0){




                }

                else{

                $d_date_of_admission = "";
                if(isset($Row[1])) {
                    $d_date_of_admission = mysqli_real_escape_string($db,$Row[1]);
                }

                $v_name_of_student = "";
                if(isset($Row[2])) {
                    $v_name_of_student = mysqli_real_escape_string($db,$Row[2]);
                }
                 $d_date_of_birth_student = "";
                if(isset($Row[3])) {
                    $d_date_of_birth_student = mysqli_real_escape_string($db,$Row[3]);
                }

                 $v_gender = "";
                if(isset($Row[4])) {
                    $v_gender = mysqli_real_escape_string($db,$Row[4]);
                }
                $v_session_year = "";
               if(isset($Row[5])) {
                   $v_session_year = mysqli_real_escape_string($db,$Row[5]);
               }
               $v_nationality = "";
              if(isset($Row[6])) {
                  $v_nationality = mysqli_real_escape_string($db,$Row[6]);
              }
              $v_admission_no = "";
             if(isset($Row[7])) {
                 $v_admission_no = mysqli_real_escape_string($db,$Row[7]);
             }
             $v_religion = "";
            if(isset($Row[8])) {
                $v_religion = mysqli_real_escape_string($db,$Row[8]);
            }
            $v_current_address = "";
           if(isset($Row[9])) {
               $v_current_address = mysqli_real_escape_string($db,$Row[9]);
           }
           $v_gender = "";
          if(isset($Row[10])) {
              $v_gender = mysqli_real_escape_string($db,$Row[10]);
          }
          $v_district = "";
         if(isset($Row[11])) {
             $v_district = mysqli_real_escape_string($db,$Row[11]);
         }
         $v_state = "";
        if(isset($Row[12])) {
            $v_state = mysqli_real_escape_string($db,$Row[12]);
        }
        $v_pincode = "";
       if(isset($Row[13])) {
           $v_pincode = mysqli_real_escape_string($db,$Row[13]);
       }
       $v_father_name = "";
      if(isset($Row[14])) {
          $v_father_name = mysqli_real_escape_string($db,$Row[14]);
      }
      $v_father_highest_qualification = "";
     if(isset($Row[15])) {
         $v_father_highest_qualification = mysqli_real_escape_string($db,$Row[15]);
     }
     $v_father_occupation = "";
    if(isset($Row[16])) {
        $v_father_occupation = mysqli_real_escape_string($db,$Row[16]);
    }
    $v_father_mobile = "";
   if(isset($Row[17])) {
       $v_father_mobile = mysqli_real_escape_string($db,$Row[17]);
   }
   $v_father_email = "";
  if(isset($Row[18])) {
      $v_father_email = mysqli_real_escape_string($db,$Row[18]);
  }
  $v_mother_highest_qualification = "";
 if(isset($Row[19])) {
     $v_mother_highest_qualification = mysqli_real_escape_string($db,$Row[19]);
 }
 $v_mother_occupation = "";
if(isset($Row[20])) {
    $v_mother_occupation = mysqli_real_escape_string($db,$Row[20]);
}
$v_mother_mobile= "";
if(isset($Row[21])) {
   $v_mother_mobile = mysqli_real_escape_string($db,$Row[21]);
}
$v_mother_email = "";
if(isset($Row[22])) {
   $v_mother_email = mysqli_real_escape_string($db,$Row[22]);
}




                if (!empty($v_class_name) || !empty($d_date_of_admission) || !empty($v_name_of_student) || !empty($d_date_of_birth_student) || !empty($v_gender) || !empty($v_session_year) || !empty($v_nationality) || !empty($v_admission_no) || !empty($v_religion) || !empty($v_current_address)|| !empty($v_district)
                || !empty($v_state)   || !empty($v_pincode) || !empty($v_father_name)|| !empty($v_father_highest_qualification) || !empty($v_father_mobile) || !empty($v_father_email)|| !empty($v_mother_name) || !empty($v_mother_highest_qualification) || !empty($v_mother_occupation) || !empty($v_mother_mobile)  || !empty($v_mother_email)) {
          echo  $query =        "INSERT into tbl_student_record(v_class,d_date_of_admission,v_name_of_student,d_date_of_birth_student,v_gender,v_session_year,v_nationality,v_admission_no,v_religion,v_current_address,v_district,v_state,
                    v_pincode,v_father_name, v_father_highest_qualification,v_father_occupation,v_father_mobile,v_father_email,v_mother_name,v_mother_highest_qualification, v_mother_occupation,v_mother_mobile,v_mother_email,v_pending_fees,
                    v_student_enroilment,i_status) values ('$v_class_name',$d_date_of_admission,'$v_name_of_student');
                        -- $result = mysqli_query($db, $query);

                    if (!empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }
             $count++;
         }
  }
}
  else
  {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

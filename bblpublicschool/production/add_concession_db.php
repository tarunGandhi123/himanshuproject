<?php

include("phpmysqlconnect.php");
 $V_concession_fees = $_POST['V_concession_fees'];
  $sql_insert_consession = "insert into tbl_concession_fees(v_concession_fees)values('$V_concession_fees')";
 $res_sql_insert_consession = mysqli_query($db,$sql_insert_consession);
 echo "Submitted successfully";
?>

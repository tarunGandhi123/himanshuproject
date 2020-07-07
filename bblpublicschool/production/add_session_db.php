<?php

include("phpmysqlconnect.php");
$v_session_year = $_POST['V_session_year'];

 echo $sql_insert_session = "insert into tbl_session(v_session_year)values('$v_session_year')";
echo $res_sql_insert_session = mysqli_query($db,$sql_insert_session);
?>

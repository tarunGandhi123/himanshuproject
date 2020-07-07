<script>
$(document).ready(function(){
$("#add_teacher_db").click(function(){
var V_teacher_id = $("#v_teacher_id").val();
var V_teacher_photograph = $("#v_teacher_photograph").val();
alert(V_teacher_photograph);
var V_teacher_name = $("#v_teacher_name").val();
var V_teacher_email = $("#v_teacher_email").val();
var V_gender = $("#v_gender").val();
var V_highest_qualifications = $("#v_highest_qualifications").val();
var V_salary = $("#v_salary").val();
var V_phone = $("#v_phone").val();
var V_address = $("#V_address").val();
var V_account_no = $("#v_account_no").val();
var V_bank_name = $("#v_bank_name").val();
var V_ifsc_code = $("#v_ifsc_code").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'V_teacher_id1='+ V_teacher_id + '&V_teacher_photograph1='+ V_teacher_photograph + '&V_teacher_name1='+ V_teacher_name + '&V_teacher_email1='+ V_teacher_email + '&V_gender1='+ V_gender + '&V_highest_qualifications1='+ V_highest_qualifications + '&V_salary1='+ V_salary + '&V_phone1='+ V_phone + '&V_address1='+ V_address + '&V_account_no1='+ V_account_no + '&V_bank_name1='+ V_bank_name+ '&V_ifsc_code!='+ V_ifsc_code;
alert(datastring);

if(V_teacher_id==''||V_teacher_photograph==''||V_teacher_name==''||V_teacher_email==''||V_gender==''||V_highest_qualifications==''||V_salary==''||V_phone==''||V_address==''||V_account_no==''||V_bank_name==''||V_ifsc_code=='')
{
alert("Please Fill All Fields");
}
else
{
  alert(dataString);
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "add_teachers_db.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});
</script>

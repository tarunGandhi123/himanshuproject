<!-- footer content -->
<footer>
  <div class="pull-right">
BBl Public School
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- Datatables -->


    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script><!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>


$(document).ready(function () {

    $("#add_accountant_db").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#accountant_registration')[0];

		// Create an FormData object
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "add_accountant_db.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
              alert(response);
              location.reload(true);
            },
        });
    });
});
$(document).ready(function () {

    $("#user_profile_update").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#user_profile')[0];

		// Create an FormData object
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "update_user_profile.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
              alert(response);
              location.reload(true);
            },
        });
    });
});
// $(document).ready(function () {
//
//     $("#v_father_mobile").change(function (event) {
//
//         //stop submit the form, we will post it manually.
//         event.preventDefault();
//
//         // Get form
//         var V_father_mobile = $('#v_father_mobile').val();
//         alert(V_father_mobile);
//
//         // Create an FormData object
//
//         $.ajax({
//             type: "POST",
//             dataType:"text",
//             url: "generate_fees_invoice.php",
//             data: {v_father_mobile: V_father_mobile} ,
//             success: function (response) {
//                 $('#fees_invoice').html(response);
//             },
//         });
//     });
// });
$(document).ready(function () {

    $("#add_fees_categories").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var V_fees_categories = $('#v_fees_categories').val();
        alert(V_fees_categories);

		// Create an FormData object

        $.ajax({
            type: "GET",
            url: "add_fees_categories.php",
            data: {v_fees_categories: V_fees_categories} ,
            success: function (response) {
              alert(response);
              location.reload(true);
            },
        });
    });
});

//
// $(document).ready(function () {
//
//     $("#add_student").click(function (event) {
//
//         //stop submit the form, we will post it manually.
//         event.preventDefault();
//
//         // Get form
//         var v_photo_student_photograph  = $('#v_photo_student_photograph')[0];
//         alert(v_photo_student_photograph);
//         var v_photo_father_photograph = $('#v_photo_father_photograph')[0];
//         var v_photo_mother_photograph = $('#v_photo_mother_photograph')[0];
//         var p_birth_certificate_student  = $('#p_birth_certificate_student')[0];
//         var v_student_adhaar = $('#v_student_adhaar')[0];
//         var v_father_adhaar = $('#v_father_adhaar')[0];
//         var v_mother_adhaar = $('#v_mother_adhaar')[0];
//         var v_class = $("#v_class").val();
//         var d_date_of_birth_student = $("#d_date_of_birth_student").val();
//         var v_name_of_student = $("#v_name_of_student").val();
//         var v_student_enroilment = $("#v_student_enroilment").val();
//         var d_date_of_admission = $("#d_date_of_admission").val();
//         var v_gender = $("#v_gender").val();
//         var v_nationality = $("#v_nationality").val();
//         var v_religion = $("#v_religion").val();
//         var v_current_address = $("#v_current_address").val();
//         var v_state = $("#v_state").val();
//         var v_pincode = $("#v_pincode").val();
//         var v_father_name = $("#v_father_name").val();
//         var v_father_highest_qualification = $("#v_father_highest_qualification").val();
//         var v_father_occupation = $("#v_father_occupation").val();
//         var v_father_mobile = $("#v_father_mobile").val();
//         var v_father_email = $("#v_father_email").val();
//         var v_mother_name = $("#v_mother_name").val();
//         var	v_mother_highest_qualification = $("#v_mother_highest_qualification").val();
//         var v_mother_occupation = $("#v_mother_occupation").val();
//         var v_mother_mobile = $("#v_mother_mobile").val();
//         var v_mother_email = $("#v_mother_email").val();
//         var dataString =  'V_class='+ v_class + '&D_date_of_birth_student='+ d_date_of_birth_student + '&V_name_of_student='+ v_name_of_student + '&V_student_enroilment='+ v_student_enroilment + '&D_date_of_admission='+ d_date_of_admission + '&V_gender='+ v_gender + '&V_nationality='+ v_nationality + '&V_religion='+ v_religion + '&V_current_address='+ v_current_address + '&V_state='+ v_state + '&V_pincode='+ v_pincode+ '&V_father_name='+ v_father_name+ '&V_father_highest_qualification='+ v_father_highest_qualification + '&V_father_occupation='+ v_father_occupation+
//         '&V_father_mobile='+ v_father_mobile + '&V_father_email='+ v_father_email + '&V_mother_name='+ v_mother_name + '&V_mother_highest_qualification='+ v_mother_highest_qualification+ '&V_mother_occupation='+ v_mother_occupation+ '&V_mother_mobile='+ v_mother_mobile+ '&V_mother_email='+ v_mother_email+ '&V_photo_student_photograph='+ v_photo_student_photograph + '&V_photo_father_photograph='+ v_photo_father_photograph + '&V_photo_mother_photograph='+ v_photo_mother_photograph + '&P_birth_certificate_student='+ p_birth_certificate_student + '&V_student_adhaar='+ v_student_adhaar + '&V_father_adhaar='+ v_father_adhaar + '&V_mother_adhaar='+ v_mother_adhaar;
//
//
//         $.ajax({
//             type: "GET",
//             enctype: 'multipart/form-data',
//             url: "add_student_db.php",
//             data: dataString,
//             processData: false,
//             contentType: false,
//             cache: false,
//             success: function (response) {
//               alert(response);
//               location.reload(true);
//             },
//         });
//     });
// });
$(document).ready(function () {

    $("#add_teacher_db").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#teacher_registration')[0];

		// Create an FormData object
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "add_teachers_db.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
              alert(response);
              location.reload(true);
            },
        });
    });
});
$(document).ready(function () {

$("#add_class_db").click(function (event) {

    //stop submit the form, we will post it manually.
    event.preventDefault();

    // Get form
     var v_class_name1 = $('#v_class_name').val();

//       alert(v_class_name1);
// Create an FormData object

// disabled the submit button
    $.ajax({
        type: "POST",
        url: "add_class_db.php",
        data: {V_class_name: v_class_name1},
        success: function (response) {
        alert(response);
        location.reload(true);
       resetForm('add_class');
        },

    });
});
});
$(document).ready(function () {

$("#add_session_db").click(function (event) {

    //stop submit the form, we will post it manually.
    event.preventDefault();

    // Get form
     var v_session_year1 = $('#v_session_year').val();
     alert(v_session_year1);
//       alert(v_class_name1);
// Create an FormData object

// disabled the submit button
    $.ajax({
        type: "POST",
        url: "add_session_db.php",
        data: {V_session_year: v_session_year1},
        success: function (response) {
        alert(response);
        location.reload(true);
       resetForm('add_session');
        },

    });
});
});

$(document).ready(function () {

  $("#v_concessions").click(function (event) {
    event.preventDefault();
    var v_concession_fees1 = $('#v_concession_fees').val();

    $.ajax({
      type: "POST",
      url: "add_concession_db.php",
      data: {V_concession_fees: v_concession_fees1},
      success: function (response) {
        alert(response);
        location.reload(true);
        resetForm('concession_fees');
      },

    });
  });
});
$(document).ready(function () {

$("#send_email").click(function (event) {

    //stop submit the form, we will post it manually.
    event.preventDefault();

    // Get form
    var form = $('#v_send_email')[0];

// Create an FormData object
    var data = new FormData(form);


// disabled the submit button
 //   $("#add_teacher_db").prop("disabled", true);

    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "email_db.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        success: function (response) {
           alert(response);
			location.reload();
        },
    });
});
});
$(document).ready(function () {
    $("#v_send_sms").click(function (event) {

    //stop submit the form, we will post it manually.
    event.preventDefault();

    // Get form
    var form = $('#v_send_sms');

// Create an FormData object
    var data = new FormData(form);


// disabled the submit button
 //   $("#add_teacher_db").prop("disabled", true);

    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "sms_db.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        success: function (response) {
          alert(response);
        },
    });
});
});
</script>

<script>
$("#profile_pic").click(function(e) {
    $("#image").click();
});
function previewProfileImage( uploader ) {
    //ensure a file was selected
    if (uploader.files && uploader.files[0]) {
        var imageFile = uploader.files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
            //set the image data as source
            $('#profile_pic').attr('src', e.target.result);
        }
        reader.readAsDataURL( imageFile );
    }
}

$("#image").change(function(){
    previewProfileImage( this );
});
$(document).ready(function(){
    $('.fee_status').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'act_inact.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});
</script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Datatables -->

<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>

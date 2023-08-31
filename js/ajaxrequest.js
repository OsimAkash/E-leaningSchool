$(document).ready(function ()  {
  // Ajax call form Already Exists Email Verification
  $("#stuemail").on("keypress blur", function(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuemail = $("#stuemail").val(); 

$.ajax({
  url: "Student/addstudent.php",
  method: "POST",
  data: {
    checkemail: "checkemail",
    stuemail: "stuemail",

  },

  success:function (data) {
    // console.log(data);
    if(data != 0) {
      $("#statusMsg2").html(
        '<small  style="color:red;">  Email Id All Ready Used !</small>'
      );
      $("#singup").attr("disabled", true);
    }  
    else if (data == 0 && reg.test(stuemail) ) {
      $("#statusMsg2").html(
        '<small  style="color:green;"> There You Go!</small>'
        );
        $("#singup").attr("disabled", false);
        
      } else if (!reg.test(stuemail)) {
        
        $("#statusMsg2").html(
          '<small  style="color:red;">  Please Enter Valid Email e.g. example@gmail.com !</small>'
        );
        $("#singup").attr("disabled", false);
      } if (stuemail == "") {
        $("#statusMsg2").html(
          '<small  style="color:red;"> Please Enter Your Email !</small>'
          );
      }
      
  }, 

});

  });
});




function addStu() {
  var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var stuname = $("#stuname").val();
  var stuemail = $("#stuemail").val();
  var stupassword = $("#stupassword").val();

  //Check Form Fields on Form Submission

  // Check if the student name is empty.
  if (stuname.trim() == "") {
    $("#statusMsg1").html(
      '<small style="color:red; " > Please Enter Your Name !</small>'
    );
    $("#stuname").focus();
    return false;
  }

  // Check if the student email is empty.
  else if (stuemail.trim() == "") {
    $("#statusMsg2").html(
      '<small  style="color:red;"> Please Enter Your Email !</small>'
    );
    $("#stuemail").focus();
    return false;
  } else if (stuemail.trim() != "" && !reg.test(stuemail)) {
    $("#statusMsg2").html(
      '<small  style="color:red;"> Please Enter Valid Email e.g. example@gmail.com !</small>'
    );
    $("#stuemail").focus();
    return false;
  }

  // Check if the student password is empty.
  else if (stupassword.trim() == "") {
    $("#statusMsg3").html(
      '<small  style="color:red;"> Please  Enter Your Password !</small>'
    );
    $("#stupassword").focus();
    return false;
  } else {
    // Send an AJAX request to the server to register the student.
    // Make the AJAX request.
    $.ajax({
      url: "Student/addstudent.php",
      method: "POST",
      dataType: "json",
      data: {
        stusingup: "stusingup",
        stuname: stuname,
        stuemail: stuemail,
        stupassword: stupassword,
      },
      success: function (data) {
        console.log(data);
        // Check the response from the server.
        if (data == "OK") {
          // The student was successfully registered.
          $("#successMsg").html(
            "<span class = 'alert alert-success '> Registrations Successful !</span>"
          );
          clearStuRegField();
        } else if (data == "Failed") {
          // The student was not registered successfully.
          $("#successMsg").html(
            "<span class = ' alert alert-danger' > Unable to Register !</span>"
          );
        }
      },
    });
   }
}
// Empty All Fields

function clearStuRegField() {
  $("#stuRegForm").trigger("reset");
  $("#statusMsg1").html("");
  $("#statusMsg2").html("");
  $("#statusMsg3").html("");
}
 
// Ajax Call for Student Login verifications 

function checkStuLogin (){

  var stuLogEmail = $("#stuLogEmail").val();
  var stuLogpassword = $("#stuLogpassword").val();

  $.ajax({
    url: "Student/addstudent.php",
    method: "POST",
    data: {
      checkLogemail : "checkLogemail ",
      stuLogEmail: stuLogEmail,
      stuLogpassword: stuLogpassword,
    },
    success:function(data) {
      // console.log(data);
      
      if(data == 0) {
      $("#statusLogMsg").html('<small class = "alert alert-danger"> Invalid Email Id or Password !  </small>');
      } else if (data == 1){
      $("#statusLogMsg").html('<div class="spinner-border text-primary" role="status"> <span class="visually-hidden">Loading...</span> </div>'
      );

      setTimeout(() => {
        window.location.href = "index.php";
      }, 1000);

      }
      },
  });
}

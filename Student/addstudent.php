
<?php


if (!isset ($_SESSION)) {
    session_start();
}


include_once('../dbconnection.php');

// Cheking Already Registratered

if(isset($_POST['checkemail']) && isset ($_POST['stuemail'])) {
$stuemail    = $_POST['stuemail'];
$sql         = "SELECT stu_email FROM student WHERE stu_email ='
$stuemail.'";
$result      = $conn->query($sql);
$row         = $result->num_rows;
echo json_encode($row);

}



// Insert Student

if (isset($_POST ['stusingup'] ) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupassword'])) {

    $stuname     = $_POST['stuname'];
    $stuemail    = $_POST['stuemail'];
    $stupassword = $_POST['stupassword'];



    $sql = "INSERT INTO student ( stu_name, stu_email, stu_password  ) VALUE 
    ( '$stuname', '$stuemail', '$stupassword')";


    
    if($conn->query($sql) == TRUE) {
        echo  json_encode ("Ok");
    } else {
        echo json_encode ("Failed");
    }

}


// Student Login Verification 
if(!isset($_SESSION['is_login'])) {
if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogpassword'])){
    $stuLogEmail = $_POST['stuLogEmail'];
    $stuLogpassword = $_POST['stuLogpassword'];

    $sql = "SELECT  stu_email, stu_password  FROM student WHERE stu_email =  '".$stuLogEmail. "' AND stu_password=  '" .$stuLogpassword."'";

   $result = $conn->query($sql);

   $row = $result->num_rows;


   if ($row === 1) {
       $_SESSION ['is_login'] = true;
       $_SESSION ['stuLogEmail'] = $stuLogEmail;
       
       echo json_encode($row);
   } else if($row === 0) {
    echo json_encode($row);
   }

}
}
?>
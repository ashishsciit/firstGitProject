<?php session_start(); ?>
<html>
    <head>
        <title></title>
    </head>
<body>

<?php
//include 'config.php';
include 'fetch_id.php';

//mysqli_close($link);
    
//Perform database query
if(isset($_REQUEST['submit'])){
$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mob_no = mysqli_real_escape_string($link, $_REQUEST['mob_no']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$postal = mysqli_real_escape_string($link, $_REQUEST['postal']);
$admin_user = $_SESSION['admin_id'];
$doj = mysqli_real_escape_string($link, $_REQUEST['doj']);
$acc_no = mysqli_real_escape_string($link, $_REQUEST['acc_no']);
$dept = mysqli_real_escape_string($link, $_REQUEST['dept']);
$desig = mysqli_real_escape_string($link, $_REQUEST['desig']);
$anol = mysqli_real_escape_string($link, $_REQUEST['anol']);
$ctc = mysqli_real_escape_string($link, $_REQUEST['ctc']);
$basic = mysqli_real_escape_string($link, $_REQUEST['y_basic']);
$hr = mysqli_real_escape_string($link, $_REQUEST['y_hr']);
$pf = mysqli_real_escape_string($link, $_REQUEST['y_pf']);
$med = mysqli_real_escape_string($link, $_REQUEST['y_med']);
$trav = mysqli_real_escape_string($link, $_REQUEST['y_trav']);

$sql = "INSERT INTO employees (full_name, dob, email, mobile_no, gender, address, city, state, postal, admin_user, doj, acc_no, department, designation, leaves_alloted, ctc, basic, hr, pf, medical, travel) 
        VALUES('$fullname', '$dob', '$email', '$mob_no', '$gender', '$address', '$city', '$state', '$postal', '$admin_user', '$doj', '$acc_no',  '$dept', '$desig', '$anol', '$ctc', '$basic', '$hr', '$pf', '$med', '$trav')";

if (mysqli_query($link, $sql)) {
    header("location: employee.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
}

mysqli_close($link);
?>
</body>
</html>
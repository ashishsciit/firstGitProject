<?php
session_start();
include 'config.php';
$empid = $_GET['id'];
$sql = "DELETE FROM employees WHERE empid = $empid";
if (mysqli_query($link, $sql)) {
    header("Location:employee.php");
}else{
    echo "Error while deletion!" . mysqli_error($link);
}
mysqli_close($link);
?>
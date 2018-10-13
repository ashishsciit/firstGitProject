<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mapd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];
$query = "SELECT id FROM users where username = '$username'";
$resultb = mysqli_query($conn, $query);
//$resulta = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultb) > 0) {
    // output data of each row
    while($ret = mysqli_fetch_assoc($resultb)) {
        //echo "empid: " . $row["empid"]. " - Name: " . $row["full_name"]. " " . $row["email"]. "<br>";
        //echo $row["id"];
        $_SESSION['admin_id'] = $ret['id'];
        $admin_user = $_SESSION['admin_id'];
        echo $_SESSION['admin_id'];
    }
}else{}

$sql = "SELECT * FROM employees where admin_user = '$admin_user'";
$resulta = mysqli_query($conn, $sql);

if (mysqli_num_rows($resulta) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($resulta)) {
        echo "empid: " . $row["empid"]. " - Name: " . $row["full_name"]. " " . $row["email"]. "<br>";
        //echo $row["id"];
        //$_SESSION['admin_id'] = $row['passwords'];
        //echo $_SESSION['admin_id'];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
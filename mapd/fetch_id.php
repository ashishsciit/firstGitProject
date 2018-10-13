<?php
include 'config.php';
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];
$sql = "SELECT id FROM users where username = '$username'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
        //echo $row["id"];
        $_SESSION['admin_id'] = $row['id'];
        //echo $_SESSION['admin_id'];
    }
} else {
    //echo "0 results";
}
//mysqli_close($link);
?>
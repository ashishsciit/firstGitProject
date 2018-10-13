<?php
session_start();
include 'fetch_id.php';
echo $_SESSION['admin_id'];
?>
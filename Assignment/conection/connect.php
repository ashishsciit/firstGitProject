<?php
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE ^ E_STRICT);
mysql_connect("localhost","root","") or die("No Connection");
mysql_select_db("assignment") or die("No Database name");
?>
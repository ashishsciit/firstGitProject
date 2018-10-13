Note:

1. To run this project on the server, the server must have php 5.6 or less version only.

2. The project will not run on servers having php 5.7 or more, because in this we used php 5.6.




Instructions to Setup:

1. First of all goto phpmyadmin and create new database as "assignment" as mentioned in connection/connect.php DB configurartion file in line 4

mysql_select_db("assignment") or die("No Database name");

2. Then change DB servername, username and password according to your server configuration as mentioned in connection/connect.php DB configurartion file in line 3

mysql_connect("localhost","root","") or die("No Connection");
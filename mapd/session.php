<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($db,"SELECT id FROM `users` WHERE username = 'ashish' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
    //$_SESSION['id'] = $row['id'];
    
    //echo $_SESSION['username'];
    echo $login_session;
   
   /*if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }*/
?>

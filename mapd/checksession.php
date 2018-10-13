<?php session_start(); ?>
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1><?php echo htmlspecialchars($_SESSION['admin_id']); ?></h1>
    </body>
</html>
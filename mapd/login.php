<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(isset($_SESSION['username']) || !empty($_SESSION['username'])){
  header("location: dashboard.php");
  exit;
}
?>
<?php
// Include config file
require_once 'config.php';
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;
                            //$_SESSION['id'] = $row['id'];
                            header("location: dashboard.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
    @import "bourbon";
        body {
            background-image: url(image/bg-11.jpg)!important;	
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-color: blueviolet;
        }

        .wrapper {	
            margin-top: 80px;
          margin-bottom: 80px;
        }

        .form-signin {
          max-width: 380px;
          padding: 15px 35px 45px;
          margin: 0 auto;
          background-color: #fff;
          border: 1px solid rgba(0,0,0,0.1);  

          .form-signin-heading{
              margin-bottom: 30px;
            }


            .form-control {
              position: relative;
              font-size: 16px;
              height: auto;
              padding: 10px;
                @include box-sizing(border-box);

                &:focus {
                  z-index: 2;
                }
            }

            input[type="text"] {
              margin-bottom: -1px;
              border-bottom-left-radius: 0;
              border-bottom-right-radius: 0;
            }

            input[type="password"] {
              margin-bottom: 20px;
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            }
        }
    </style>

    <link rel="stylesheet" href="css/bootstrap-fonts.css">
    <link rel="stylesheet" href="css/glyphicon.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!--<div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">-->
    <div class="wrapper">
        <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2 class="form-signin-heading">Please login</h2>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <!--<label>Username</label>-->
                <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <!--<label>Password</label>-->
                <input type="password" name="password" class="form-control" placeholder="Password" required="" autofocus="">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
            </div>
            <!--<p>Don't have an account? <a href="admin_register.php">Sign up now</a>.</p>-->
        </form>
    </div> 
    <!--</div>
    <div class="col"></div>
    </div>
    </div>-->
</body>
</html>
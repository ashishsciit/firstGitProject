<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.4/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.4/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<style>
    .form-control-inline {
    min-width: 0;
    width: auto;
    display: inline;
    }
</style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        MAPD SOLUTIONS
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./employee.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Employees</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./run_payroll.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Run Payroll</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./salary_payment.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Salary Payment</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./report.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Report</p>
                        </a>
                    </li>
                    <!--<li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Reports</p>
                        </a>
                    </li>!-->
       <!--             <li>
                       <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>!-->
                <!--    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>!-->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> User </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <!--<li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>!-->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                                </a>
                            </li>
                            <!--<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>!-->
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!--Start of content-->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add new <a href="employee.php"><button type="button" class="btn">View Employees</button></a></h4>
                                </div>
                                <div class="card-body">

                                    <!--Tabbed layout-->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="home" aria-selected="true">Personal Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#official" role="tab" aria-controls="profile" aria-selected="false">Official Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#leave" role="tab" aria-controls="profile" aria-selected="false">Leave and Salary Details</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="home-tab">
                                            
                                    <!--Form start-->
                                    <form action="add_empdb.php" method="post">
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input type="text" id="datepicker" class="form-control" placeholder="Date of Birth" name="dob">
                                                    <script>
                                                        $('#datepicker').datepicker({
                                                            uiLibrary: 'bootstrap4'
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Mobile No.</label>
                                                    <input type="text" class="form-control" placeholder="Mabile No." name="mob_no">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <input type="text" class="form-control" placeholder="Gender" name="gender">
                                                    <!--<select class="form-control">
                                                        <option>Select</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Generals</option>
                                                    </select>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Flat/Block/Street/Area" name="address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" name="city">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" placeholder="State" name="state">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code" name="postal">
                                                </div>
                                            </div>
                                        </div>
                                       <!-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!--<button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Submit</button>-->
                                        <!--<div class="clearfix"></div>-->
                                    <!--</form>-->
                                    </div>
                                        <div class="tab-pane fade" id="official" role="tabpanel" aria-labelledby="profile-tab">
                                             <!--Form start-->
                                    <!--<form action="add_empdb.php" method="post">-->
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Date of Join</label>
                                                    <input type="text" id="datepicker" class="form-control" placeholder="Date of Join" name="doj">
                                                    <script>
                                                        $('#datepicker').datepicker({
                                                            uiLibrary: 'bootstrap4'
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Bank Acc No.</label>
                                                    <input type="text" class="form-control" placeholder="Enter your Bank Acc No." name="acc_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <input type="text" class="form-control" placeholder="Department" name="dept">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control" placeholder="Designation" name="desig">
                                                </div>
                                            </div>
                                        </div>
                                       <!-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!--<button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Submit</button>-->
                                        <!--<div class="clearfix"></div>-->
                                    <!--</form>-->
                                        </div>
                                        <div class="tab-pane fade" id="leave" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Leaves to be Allotted per month</label>
                                                    <input type="number" min="1" max="2" class="form-control" placeholder="No. of Leaves/Month" name="anol">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>CTC (Annual)</label>
                                                    <input type="number" class="form-control" placeholder="Enter Annual CTC" id="ctc" name="ctc">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1 pt-4" style="margin-top:3px;">
                                                <input class="btn btn-light pull-right" type="button" onClick="calc();" name="sal_calc" value="Calulate">
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                        <div class="row">
                                            <table class="table" border="0">
                                              <thead class="thead-light">
                                                <tr>
                                                  <th scope="col">Pay Components</th>
                                                  <th scope="col">Monthly</th>
                                                  <th scope="col" style="width:183px;">Annually</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row">Basic</th>
                                                  <td>
                                                    <div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="m_basic" name="m_basic">
                                                    </div>
                                                  </td>
                                                  <td><div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="y_basic" name="y_basic">
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">House Rent</th>
                                                  <td>
                                                    <div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="m_hr" name="m_hr">
                                                    </div>
                                                  </td>
                                                  <td><div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="y_hr" name="y_hr">
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">PF</th>
                                                    <td>
                                                    <div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="m_pf" name="m_pf">
                                                    </div>
                                                  </td>
                                                  <td><div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="y_pf" name="y_pf">
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Medical</th>
                                                    <td>
                                                    <div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="m_med" name="m_med">
                                                    </div>
                                                  </td>
                                                    <td><div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="y_med" name="y_med">
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Travel</th>
                                                    <td>
                                                    <div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="m_trav" name="m_trav">
                                                    </div>
                                                  </td>
                                                  <td>
                                                    <div class="form-group" style="min-width:0; width:160px;">
                                                        <input type="text" class="form-control" id="y_trav" name="y_trav">
                                                    </div>  
                                                </td>
                                                </tr>
                                              </tbody>
                                            </table>    
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Submit</button>
                                        <div class="clearfix"></div>
                                    </form>
                                        </div>
                                    </div>
                                <!--end if Tabbed layout-->
                                </div>
                            </div>
                        </div>
                    <!--    <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="...">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "Lamborghini Mercy
                                        <br> Your chick she so thirsty
                                        <br> I'm in that two seat Lambo"
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>!-->
                    </div>
                </div>
            </div>
            <!--End of Content-->
            <!--Start of Footer-->
            <footer class="footer">
                <div class="container">
                    <nav>
                       <!-- <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>!-->
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">MAPD Solutions</a>, made with bootstrap 4 for a payroll project
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<script>
    function calc(){
        var ctc = parseFloat(document.getElementById('ctc').value);
        var basic = document.getElementById('y_basic');
        basic.value = ctc*1/2;
        var bas = basic.value;
        var hr =  document.getElementById('y_hr')
        hr.value = bas*1/2;
        var pf = document.getElementById('y_pf');
        pf.value = bas*12/100;
        var med = document.getElementById('y_med');
        med.value = bas*19/100;
        var trav = document.getElementById('y_trav');
        trav.value = bas*19/100;
        document.getElementById('m_basic').value = bas/12;
        document.getElementById('m_hr').value = hr.value/12;
        document.getElementById('m_pf').value = pf.value/12;
        document.getElementById('m_med').value = med.value/12;
        document.getElementById('m_trav').value = trav.value/12;
    }
</script>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
</html>
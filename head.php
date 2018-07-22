<!DOCTYPE html>
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
?>

<html lang="en"><head>
    <title>Helping Hand</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=0.8, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="2/bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="2/mdb.css" rel="stylesheet">
    <link rel="shortcut icon" href="2/100.jpg" type="image/x-icon" />
    <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body class="fixed-sn navy-blue-skin">
    
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed custom-scrollbar" style="transform: translateX(-100%);">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="waves-light waves-effect waves-light aqua-gradient">
                        <a href="#"><h4 style="text-align: center; padding-top: 4%; color: white;">
                            <?php  if ($isTouch = empty($logged)) {
                            echo ' ';
                            }
                            elseif ($logged== "in"){
                            echo  $_SESSION['teamname'];
                            }
                        ?></h4></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group md-form mt-0 pt-1 waves-light waves-effect waves-light">
                            ___________________________
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li><a href="Student.php" class="waves-effect">For Student</a>
                            </li>
                            <li><a href="Volunteer.php" class="waves-effect">For Volunteer</a>
                            </li>
                            <li><a href="NGO.php" class="waves-effect">For NGO</a>
                            </li>
                            
                        </ul>
                        
                    </div>
                <!--</li>
                <li>
                    <p>_____________________________</p>
                </li>
               <!-- <li>
                    <a href="leaderboard.php" class=" waves-effect arrow-r"><i class="fa fa-github-alt" >
                        
                    </i> Leaderboard</i></a>
                    
                </li>--><li>
                <p>_____________________________</p>
            </li>
           
    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact us<i class="fa fa-angle-down rotate-icon"></i></a>
    <div class="collapsible-body">
        <ul class="list-unstyled">

            <!-- <li><div style="padding-top: 1%;">&nbsp&nbsp Vraj Patel</div>
            <li><a href="tel:8905948042" class="waves-effect">+918905948042</a>
        </li>
        <li><div style="padding-top: 1%;">&nbsp&nbsp Smit Patel</div>
        <li><a href="tel:8153895063" class="waves-effect">+919408599538</a> -->
            <li><div style="padding-top: 1%;">&nbsp&nbsp Patel Vraj</div>
            <li><a href="tel:9375131548" class="waves-effect">+919375131548</a>
        </li>
        <li><div style="padding-top: 1%;">&nbsp&nbsp  Patel Namrata</div>
        <li><a href="tel:9375131548" class="waves-effect">+919375131548</a>
        <li><div style="padding-top: 1%;">&nbsp&nbsp  Patel Smit</div>
        <li><a href="tel:9375131548" class="waves-effect">+919375131548</a>
            <li><div style="padding-top: 1%;">&nbsp&nbsp  Nimavat Pinakin</div>
                 <li><a href="tel:9375131548" class="waves-effect">+919375131548</a>
                <li><div style="padding-top: 1%;">&nbsp&nbsp  Goswami Krishna</div>
                     <li><a href="tel:9375131548" class="waves-effect">+919375131548</a>
    </li>
    
</ul>
</div>
</li>
<li>
<p>_____________________________</p>
</li>
</ul>
</li>
<!--/. Side navigation links -->
</ul>
<ul>
    <a href="first_stu.php" style="color: white;">Field select</a>
</ul>
<ul>
    <a href="choicefilling.php" style="color: white;">Who are you?</a>
</ul>
<ul>
    <a href="about_us.php" style="color: white;">About us</a>
</ul>
<ul>
    <a href="join_us.php" style="color: white;">Join us</a>
</ul>
<div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->
<!-- Navbar -->
<nav class="navbar fixed-top navbar-toggleable-md blue-gradient navbar-expand-lg scrolling-navbar double-nav">
<!-- SideNav slide-out button -->
<div class="float-left">
<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
</div>
<!-- Breadcrumb-->
<div class="breadcrumb-dn mr-auto">
<p><a href="index.php">Helping Hand</a></p>
</div>
<ul class="nav navbar-nav nav-flex-icons ml-auto">
<li class="nav-item">
<?php  if ($isTouch = empty($logged)) {
echo ' ';
}
elseif ($logged== "in"){
echo ' <a class="nav-link waves-effect waves-light" href="redirect.php"><i class="fa fa-angle-right"></i> <span class="clearfix d-none d-sm-inline-block">Home</span></a>';
}
?>
</li>
<li class="nav-item">
<a class="nav-link waves-effect waves-light" href="feedback.php"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Feedback</span></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle waves-effect waves-light" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Account
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
<?php  if ($logged== "in") {
echo '<a class="dropdown-item waves-effect waves-light" href="logout.php">Logout</a>';
}
else{
echo' <a class="dropdown-item waves-effect waves-light" href="login.php">Login</a>
<a class="dropdown-item waves-effect waves-light" href="register.php">Register</a>';
}
?>
<!-- /.Navbar -->
</header>
</body>
</html>
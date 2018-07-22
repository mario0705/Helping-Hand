<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();

$status=$_SESSION['type'];
if (login_check($mysqli) == true) {
  if ($status != "volunteer") {
                     # code...
    header('Location: redirect.php');
          }
}
else {
  # code...
  header('Location: redirect.php');
}
?>
<?php
include("head.php")
?>
<!--Main layout-->
<main>
<body>
<form>
<!-- Card -->
</center>
	<div class="col-md-6 row">
        <div class="card float-left" style="width: 50%;">
            <div class="card-body">
               	<form class="form-inline mr-auto">
	    			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"><br>
    				<button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search</button>
				</form> 
            </div>
        </div>
        <!--/.Card-->
    </div><br>
    <!--Grid column-->
    <div class="col-md-6 row">
        <!--Card-->
        <div class="card" style="width: 80%">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Upload link</h3>
            </div>
        </div>
            <div class="card-body mx-4">
               <div class="btn-group">
    				<button class="btn btn-cyan btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        				Select field
    				</button>
    				<div class="dropdown-menu">
        				<a class="dropdown-item" href="#">Computer Science</a>
        				<a class="dropdown-item" href="#">Mathematics</a>
        				<a class="dropdown-item" href="#">Physics</a>
        				<a class="dropdown-item" href="#">Chemistry</a>
        				<a class="dropdown-item" href="#">Biology</a>
        				<a class="dropdown-item" href="#">Accounts</a>
        				<a class="dropdown-item" href="#">History</a>
        				<a class="dropdown-item" href="#">English</a>
        				<a class="dropdown-item" href="#">Management</a>
        				<a class="dropdown-item" href="#">Finance</a>
        				<a class="dropdown-item" href="#">Electronics</a>
    				</div>
				</div>
               <input type="text" placeholder="Add link...">&nbsp;<button style="cursor: pointer;" class="btn btn-cyan">Upload link</button>
            </div>
        </div>
        <!--/.Card-->
    </div>
    <!--Grid column-->
    <!--Grid column-->
    
    <!--Grid column-->
<br><br>
<center>
<div class="card" style="width: 80%">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Questions for you</h3>
            </div>
        </div>
            <div class="card-body mx-4">
               
            </div>
        </div></center><br><br>
<center>
<div class="card" style="width: 80%">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Uploaded link</h3>
            </div>
        </div>
            <div class="card-body mx-4">
               
            </div>
        </div></center>
</form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
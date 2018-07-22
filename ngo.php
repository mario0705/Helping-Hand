<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$status=$_SESSION['type'];
if (login_check($mysqli) == true) {
  if ($status != "ngo") {
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
<form method="post" action="includes/process_request.php">
 
<!-- Card -->

<div class="card" style="width: 50%;">
	<div class="header peach-gradient">
		<div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Request for Volunteering</h3>
        </div>
    </div>
    <div class="card-body">
        <!-- Default input -->
        <div class="row">
        	<div class="col-md-6">
		<label for="date" class="">Enter date:</label>
		<input type="text" id="date" class="form-control" name="date" placeholder="DD/MM/YY" style="width: 8em;">
		</div>
		<div class="col-md-6">
		<div class="btn-group">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Subject</button>

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
		</div>
	</div>
		  <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class=""><label for="name" class="">From</label>
                            <input type="text" id="name" name="from" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class=""><label for="email" class="">Till</label>
                            <input type="text" id="email" name="till" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
		<div class="form-group">
    	<label for="address">Enter address:</label>
    	<textarea class="form-control rounded-0" id="address" name="address" rows="3" placeholder="Address..."></textarea>
		</div>
		<div class="md-form">
  			<button style="cursor: pointer;" type="Submit" class="btn btn-cyan">Submit</button>
        </div>
    </div>

</div>
</form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
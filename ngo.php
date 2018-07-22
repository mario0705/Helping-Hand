<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$status=$_SESSION['type'];
// if (login_check($mysqli) == true) {
//   if ($status != "ngo") {
//                      # code...
//     header('Location: redirect.php');
               
               
// }

// }
// else {
//   # code...
//   header('Location: redirect.php');
// }
?>
<?php
include("head.php")
?>
<!--Main layout-->
<main>

<body>
<form>
 
<!-- Card -->
 
<div class="card" style="width: 50%;">
	<div class="header peach-gradient">
		<div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Set time and date</h3>
        </div>
    </div>
    <div class="card-body">
        <!-- Default input -->
		<label for="date" class="">Enter date:</label>
		<input type="text" id="date" class="form-control" placeholder="DD/MM/YY" style="width: 8em;">
		<br>
		<label for="time" class="">Enter time(24 hr format):</label>
		<input type="text" id="time" class="form-control" placeholder="HH/MM" style="width: 8em;">
		<br>
		<div class="form-group">
    	<label for="address">Enter address:</label>
    	<textarea class="form-control rounded-0" id="address" rows="3" placeholder="Address..."></textarea>
		</div>
		<div class="md-form">
  			<button style="cursor: pointer;" class="btn btn-cyan">Submit</button>
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
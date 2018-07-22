<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
$stmt = $mysqli->prepare("SELECT round FROM round WHERE id ='0'");
$stmt->execute();
$stmt->bind_result($round);
$stmt->fetch();
?>
<?php
include("head.php")
?>
<!--Main layout-->
<main>
<body>
<form>
  
  <br>
  <!-- Card -->
<div class="card" style="width: 40em;">

  

  <!-- Card content -->
  <!-- <div class="card-body">
  	 <center>
    <input type="text" placeholder="Add link...">&nbsp;<button style="cursor: pointer;" class="btn btn-cyan">Upload link</button>
  </center>
  

  </div> -->

</div>
<!-- Card -->
<div class="row">

    <!--Grid column-->
    <div class="col-md-6">

        <!--Card-->
        <div class="card" style="width: 80%">
          <div class="header peach-gradient">

            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Upload material</h3>
            </div>

        </div>
            <div class="card-body mx-4">
                <!--Name-->
              

            <div class="md-form">
  				<input type="text" placeholder="Add link...">&nbsp;<button style="cursor: pointer;" class="btn btn-cyan">Upload link</button>
            </div>


            <!--Grid row-->
            
            </div>

        </div>
        <!--/.Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6">
        <!--Card-->
        <div class="card float-right" style="width: 50%;">
            <div class="card-body">
               <form class="form-inline mr-auto">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"><br><br><br>
    <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search</button>
</form> 
            </div>
        </div>
        <!--/.Card-->
    </div>
    <!--Grid column-->
</div><br><br>
<center>
<div class="card" style="width: 75%;">
	<div class="header peach-gradient">
		<div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Questions for you</h3>
        </div>
    </div>
    <div class="card-body">
        
    </div>

</div></center>
<br><br>
<center>
<div class="card" style="width: 50%;">
	<div class="header peach-gradient">
		<div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Uploaded material</h3>
        </div>
    </div>
    <!--Card content-->
    <div class="card-body">
        <!--Title-->
       
    </div>
</div>
</center>
<br><br>
</form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
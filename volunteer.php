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
  <center>
    <input type="text" placeholder="search" />&nbsp;<button style="background-color: white; border: none; cursor: pointer;"><i class="fas fa-search" style="font-size: 1.3em"></i></button>
  </center>
  <br><br><br>
  <!-- Card -->
<center><div class="card" style="width: 40em;">

  

  <!-- Card content -->
  <div class="card-body">
  	 <center>
    <input type="text" placeholder="Add link...">&nbsp;<button style="cursor: pointer;" class="btn btn-cyan">Upload link</button>
  </center>
    <!-- Button -->
    <!-- <a href="#" class="btn btn-cyan">Button</a> -->

  </div>

</div>
<!-- Card -->
</center>
 
</form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include("head.php")

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

?>
<!--Main layout-->
<main>
<body>
<!-- Card -->
<center>
<div class="card w-50">
  <!-- Card content -->
  <div class="card-body">
    <form>
      <!-- Title -->
      <h4 class="card-title"><a>Name:</a></h4>
      <!-- Button -->
      Date of birth:<br>
      Contact:<br>
      Alternate number:<br>
      Address:<br>
      City:<br>
      State:<br>
      Pincode:<br>
      Gender:<br>
      Email:<br>
      Tasks completed:<br>
    </form>
  </div>
</div>
<!-- Card -->
</center>
<br><br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
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
<form>
<!-- Card -->
<center>
  <div class="card w-25">
    <!-- Card content -->
    <div class="card-body"><i class="fas fa-ribbon" style="font-size: 1.5em;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="form-check-input with-gap" name="ngo1" type="radio" id="ngo">
      <label class="form-check-label" for="ngo">NGO</label>
    </div>
  </div>
</center>
</br></br>
<!-- Card -->
<center>
  <div class="card w-25">
    <!-- Card content -->
    <div class="card-body"><i class="fa fa-user-graduate" style="font-size: 1.5em;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="form-check-input with-gap" name="ngo1" type="radio" id="student">
      <label class="form-check-label" for="student">Student</label>
    </div>
  </div>
</center>
</br></br>
<!-- Card -->
<center>
  <div class="card w-25">
    <!-- Card content -->
    <div class="card-body"><i class="fas fa-chalkboard-teacher" style="font-size: 1.5em;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="form-check-input with-gap" name="ngo1" type="radio" id="volunteer">
      <label class="form-check-label" for="volunteer">Volunteer</label>
    </div>
  </div>
</center>
</br>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-grey btn-primary z-depth-1a">Next</button></center>
</form>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
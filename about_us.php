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
<!-- Card -->

<div class="card">
  <!-- Card content -->
  <div class="card-body">
    Our location:<br><br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5496.162932605572!2d-80.97772852690593!3d46.46689430127114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3dbf6e0eaec08bc0!2sClassroom+Building!5e0!3m2!1sen!2sca!4v1530859047031" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<!-- Card -->
<br><br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
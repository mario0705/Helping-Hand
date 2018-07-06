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
    <form>
      <!-- Title -->
      <p align="center">Select the interested fields:</p>
      
    </form>
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
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
  <center>
    <input type="text" placeholder="search" />&nbsp;<button style="background-color: white; border: none; cursor: pointer;"><i class="fas fa-search" style="font-size: 1.3em"></i></button>
  </center>
  <br><br><br>

  <div class="form-group">
    <label for="exampleFormControlTextarea2">Ask questions.....</label>
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" value="placeholder"></textarea>
    <button type="button" class="btn btn-grey btn-primary z-depth-1a" style="position: absolute; top: 24em; left: 87em;">Submit</button>
</div>
</form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
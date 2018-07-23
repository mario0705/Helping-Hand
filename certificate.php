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

<!-- <div style="background-image: url(assets/image/logo.png); background-size: 50em; background-repeat: no-repeat; z-index: 10; opacity: 0.5; color: black;"> -->
<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878;">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b>$student.getFullName()</b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the required task</i></span> <br/><br/>
       <span style="font-size:30px">$course.getName()</span> <br/><br/><br>
       <img src="assets/image/logo.png" height="25%">
        <!-- <span style="font-size:20px">with score of <b>$grade.getPoints()%</b></span> <br/><br/><br/><br/> -->
       <!-- <span style="font-size:25px"><i>dated</i></span><br>
      #set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), "MMMM dd, yyyy"))
      <span style="font-size:30px">$dt</span> -->
</div>
</div><br>
<button style="cursor: pointer;" type="submit" class="btn btn-cyan">Print</button>
<!-- </div> -->
</form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
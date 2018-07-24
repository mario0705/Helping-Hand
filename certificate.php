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
include("head.php");
$name=$_SESSION['volunteer'];
$jobs=$_SESSION['jobs'];
?>
<!--Main layout-->
<main>
<body onload="myFunction()">
	<script>
function myFunction() {
    window.print();
}
</script>
<form>
<!-- Card -->
<style type="text/css" media="print">
  @page { 
    size: landscape;
  margin: 0; 
     }
  

</style>
<center>
<div  style="background-image: url(assets/image/logo1.jpg); background-repeat: no-repeat; background-color: rgba(0,0,0,0); width:800px; height:600px;  background-opacity: 0.2;
    filter: alpha(opacity=20);">
<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878;">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
	
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><b>This is to certify that</b></span>
       <br><br>
       <span style="font-size:30px"><b><?php echo $name; ?></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the required task</i></span> <br/><br/>
       <span style="font-size:30px"><?php echo $jobs; ?></span> <br/><br/><br>
</div>
</div>

</div>
</center>
<!-- </div> -->
</form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
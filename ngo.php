<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$status=$_SESSION['type'];
if (login_check($mysqli) == true) {
  if ($status != "ngo") {
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
<div class="card">
<!-- Card content -->
  <div class="card-body">
  	 <div class="form-group">
    <label for="exampleFormControlTextarea2">Ask questions.....</label>
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Question...."></textarea>
    <button type="button" style="background-color: white;"><i class="far fa-comment-alt"></i></button>
    <input type="text" placeholder="comments..." id="1">
    <button type="button" class="btn btn-grey btn-primary z-depth-1a">Submit</button>
	</div>
    <!-- Button -->
    <a href="#" class="btn btn-primary" style="position: relative; left: 75em;">Post</a>

  </div>

</div>
<!-- Card -->
 
</form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->
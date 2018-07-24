<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'psl-config.php';

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

if (isset($_POST['id'])){
	
	 $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
	// echo $id;

	      $insert_stmt = $mysqli->prepare("UPDATE requests SET flag='2' WHERE id='$id'");
			$insert_stmt->execute();
         $insert_stmt->close();
        
$sql = "SELECT volunteer from requests WHERE id='$id'";
                mysqli_select_db($mysqli,'secure_login');
                $retval = mysqli_query($mysqli,$sql);
             	$row =mysqli_fetch_array($retval , MYSQLI_BOTH);
				$volunteer=$row['volunteer'];
        $stmt = $mysqli->prepare(" UPDATE volunteer SET jobs = jobs + 1  WHERE volunteer='$volunteer'");
        $stmt->execute();
     
header('Location: ../ngo.php');
      
}
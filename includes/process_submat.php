<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'psl-config.php';


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

if (isset($_POST['link'],$_POST['materialdesc'],$_POST['subject'])){
	$volunteer=$_SESSION['volunteer'];
	 $link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);
   $materialdesc = filter_input(INPUT_POST, 'materialdesc', FILTER_SANITIZE_STRING);
   $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
	 

	      $insert_stmt = $mysqli->prepare("INSERT INTO material SET link='$link', materialdesc='$materialdesc', subject='$subject', volunteer='$volunteer'");
			$insert_stmt->execute();
         $insert_stmt->close();
      
header('Location: ../volunteer.php');
      
}
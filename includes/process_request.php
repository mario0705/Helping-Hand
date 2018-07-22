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

if (isset($_POST['date'], $_POST['subject'],$_POST['from'],$_POST['till'],$_POST['address']))
{
	$ngoname=$_SESSION['ngoname'];
	 $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
	  $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
	   $from = filter_input(INPUT_POST, 'from', FILTER_SANITIZE_STRING);
	    $till = filter_input(INPUT_POST, 'till', FILTER_SANITIZE_STRING);
	     $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);


	      $insert_stmt = $mysqli->prepare("INSERT into requests SET date='$date', subject='$subject', from1 ='$from' ,till ='$till', address='$address', ngoname='$ngoname'");
        $insert_stmt->execute();

        header('Location: ../ngo.php');


}
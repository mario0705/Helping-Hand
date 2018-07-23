<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'psl-config.php';

sec_session_start();
$status=$_SESSION['type'];
if (login_check($mysqli) == true) {
  if ($status != "student") {
                     # code...
    header('Location: redirect.php');
               
               
}

}
else {
  # code...
  header('Location: redirect.php');
}

if (isset($_POST['subject'],$_POST['question'])){
	
	 $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
   $question = filter_input(INPUT_POST, 'question', FILTER_SANITIZE_STRING);
	// echo $id;
   $student=$_SESSION['teamname'];

	  //     $insert_stmt = $mysqli->prepare("UPDATE requests SET flag='2' WHERE id='$id'");
			// $insert_stmt->execute();
   //       $insert_stmt->close();
        
                $insert_stmt = $mysqli->prepare("INSERT INTO question set question='$question',subject='$subject', student='$student'");
      $insert_stmt->execute();
         $insert_stmt->close();
     
header('Location: ../student.php');
      
}
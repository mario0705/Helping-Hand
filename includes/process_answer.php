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

if (isset($_POST['answer'],$_POST['id'])){
	
	 $answer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_STRING);
   $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
	
   $volunteer=$_SESSION['volunteer'];

	 $flag="1";
        
                $insert_stmt = $mysqli->prepare("INSERT INTO answer set answer='$answer',qid='$id', volunteer='$volunteer' ");
      $insert_stmt->execute();
         $insert_stmt->close();
          $insert_stmt = $mysqli->prepare("UPDATE question set flag='$flag' where id='$id'");
      $insert_stmt->execute();
         $insert_stmt->close();
     
header('Location: ../forum.php');
      
}
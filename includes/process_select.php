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
 
   if (isset($_POST['id'],$_POST['cancel'])){
    
     $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
     
        $volunteer="not alloted";
          $insert_stmt = $mysqli->prepare("UPDATE requests SET flag='0', volunteer='$volunteer' WHERE id='$id'");
            $insert_stmt->execute();
         $insert_stmt->close();
       
header('Location: ../volunteer.php');

      
}
                                            
elseif (isset($_POST['id'])){
	
	 $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
	 echo $id;
	 	$volunteer=$_SESSION['volunteer'];
	      $insert_stmt = $mysqli->prepare("UPDATE requests SET flag='1', volunteer='$volunteer' WHERE id='$id'");
			$insert_stmt->execute();
         $insert_stmt->close();
       

header('Location: ../volunteer.php');
      
}
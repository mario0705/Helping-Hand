<?php
include 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
         $status=$_SESSION['type'];
         echo $status;
       if ($status == "volunteer") {
       //  # code...
       header('Location: volunteer.php');
        }
        else if ($status == "ngo") {
        # code...
        header('Location: ngo.php');
        }
        else if ($status == "student") {
        # code...
        header('Location: student.php');
        }
       else{
        header('Location: login.php');

       }        ?>
        
    </body>
</html>
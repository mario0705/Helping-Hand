<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_GET['email'], $_GET['p'])) {
    $email = $_GET['email'];
    $password = $_GET['p']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
                $stmt = $mysqli->prepare("SELECT round FROM round WHERE id ='0'");
                $stmt->execute();
                $stmt->bind_result($round);
                 $data=$round[0];
                 if ($data) {
                    echo $data;
                     # code...
                 }
                 
        
    } else {
        // Login failed 
       // header('Location: ../index.php?error=1');
    }
} else {
    // The correct GET variables were not sent to this page. 
    echo 'Invalid Request';
}

?>
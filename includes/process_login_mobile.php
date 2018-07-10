<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
                $stmt = $mysqli->prepare("select teamname , email,mobile, gender, age from members where teamname= $teamname");

                $stmt-> bind_result($token2,$token3,$token4,$token5,$token6,$token7);

            while ( $stmt-> fetch() ) {
               $user["name"] = $token2;
               $user["email"] = $token3;
               
               $user["gender"] = $token6;
               $user["age"] = $token7;
            }

                 $response["error"] = FALSE;
        $response["user"]["name"] = $token2;
        $response["user"]["email"] = $token3;
        $response["user"]["age"] = $token7;
        $response["user"]["gender"] = $token6;
        echo json_encode($response);
        
        
    } else {
        // Login failed 
        header('Location: ../index.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}

?>
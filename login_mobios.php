<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $password = hash('sha512', $pass);
    // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        $stmt = $mysqli->prepare("SELECT teamname, email, gender, age FROM members WHERE email = '$email'");
        if ($stmt->execute()) {
            $stmt-> bind_result($token2,$token3,$token6,$token7);

            while ( $stmt-> fetch() ) {
               $user["name"] = $token2;
               $user["email"] = $token3;
               
               $user["gender"] = $token6;
               $user["age"] = $token7;
            }

            $stmt->close();
        // use is found
        $response["error"] = FALSE;
        $response["name"] = $user["name"];
        $response["email"] = $user["email"];
        $response["age"] = $user["age"];
        $response["gender"] = $user["gender"];
         echo json_encode($response);
       
    } else {
        // user is not found with the credentials
        $response["error"] = TRUE;
        $response["error_msg"] = "Login credentials are wrong. Please try again!";
        echo json_encode($response);
    }
        
    } else {
        // Login failed 
        $response["error"] = TRUE;
        $response["error_msg"] = "Login credentials are wrong. Please try again!";
        echo json_encode($response);
    }
} else {
    // The correct POST variables were not sent to this page. 
    $response["error"] = TRUE;
        $response["error_msg"] = "Login credentials are wrong. Please try again!";
        echo json_encode($response);
}

?>
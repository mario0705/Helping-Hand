<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $password = hash('sha512', $pass);
    echo "<script type='text/javascript'>alert('$password');</script>";
    // The hashed password.
 
    if (login($email, $password, $mysqli) == false) {
        $stmt = $mysqli->prepare("SELECT ngoname, coordinator, phoneno, address FROM ngo WHERE email = '$email'");
        if ($stmt->execute()) {
            $stmt-> bind_result($token2,$token3,$token6,$token7);

            while ( $stmt-> fetch() ) {
               $user["ngoname"] = $token2;
               $user["coordinator"] = $token3;
               
               $user["phoneno"] = $token6;
               $user["address"] = $token7;
            }
$user["email"]= $email;
            $stmt->close();
        // use is found
        $response["error"] = FALSE;
        $response["user"]["name"] = $user["ngoname"];
        $response["user"]["email"] = $user["email"];
        $response["user"]["mobile"] = $user["phoneno"];
        $response["user"]["address"] = $user["address"];
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
<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
 
$error_msg = "";
 
if (isset($_POST['uname'], $_POST['email'], $_POST['p'],$_POST['mobile'])) {
    // Sanitize and validate the data passed in
    $uname = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
 
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

    $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
     
    // uname validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
    $prep_stmt = "SELECT id FROM accounts WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
   // check existing email  
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">A user with this email address already exists.</p>';
                        $stmt->close();
        }
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';
                $stmt->close();
    }
 
    // check existing uname
    $prep_stmt = "SELECT id FROM accounts WHERE uname = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $uname);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                        // A user with this uname already exists
                        $error_msg .= '<p class="error">A user with this uname already exists</p>';
                        $stmt->close();
                }
        } else {
                $error_msg .= '<p class="error">Database error line 55</p>';
                $stmt->close();
        }

         

         $prep_stmt = "SELECT id FROM accounts WHERE mobile = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $mobile);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                        // A user with this uname already exists
                        $error_msg .= '<p class="error">A user with this mobile already exists</p>';
                        $stmt->close();
                }
        } else {
                $error_msg .= '<p class="error">Database error line 55</p>';
                $stmt->close();
        }
 
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.
 
    if (empty($error_msg)) {
 
        // Create hashed password using the password_hash function.
        // This function salts it with a random salt and can be verified with
        // the password_verify function.
        $password = password_hash($password, PASSWORD_BCRYPT);

        //UPDATE `accounts` SET uname='vraj', email= 'vraj.vup@gmail.com', password ='asdASD', levels= '2' WHERE mobile = '?';
 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT into accounts SET uname='$uname', email='$email', password ='$password' ,mobile ='$mobile'")) {
            // Execute the prepared query.
            if ( $insert_stmt->execute()) {
                
                
                header('Location: ./instruction.php');
            }

            else {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
        
    }
}
?>
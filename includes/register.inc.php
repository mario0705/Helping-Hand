<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
 
$error_msg = "";
 
if (isset($_POST['teamname'], $_POST['email'], $_POST['p'],$_POST['mobile'],$_POST['age'],$_POST['gender'])) {
    // Sanitize and validate the data passed in
    $teamname = filter_input(INPUT_POST, 'teamname', FILTER_SANITIZE_STRING);
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
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
     $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    // teamname validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
    $prep_stmt = "SELECT id FROM members WHERE email = ? LIMIT 1";
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
 
    // check existing teamname
    $prep_stmt = "SELECT id FROM members WHERE teamname = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $teamname);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                        // A user with this teamname already exists
                        $error_msg .= '<p class="error">A user with this teamname already exists</p>';
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

        //UPDATE `members` SET teamname='vraj', email= 'vraj.vup@gmail.com', password ='asdASD', levels= '2' WHERE mobile = '?';
 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT into members SET teamname='$teamname', email='$email', password ='$password' ,mobile ='$mobile', age='$age', gender='$gender'")) {
            // Execute the prepared query.
            if ( $insert_stmt->execute()) {
                
                $insert_stmt1 = $mysqli->prepare("UPDATE members SET flag='0' WHERE teamname = '$teamname' ");
                $insert_stmt1->execute();
                header('Location: ./instruction.php');
            }

            else {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
        
    }
}
elseif (isset($_POST['ngoname'], $_POST['coordinator'], $_POST['email'],$_POST['mobile'],$_POST['address'],$_POST['p'])) {
    // Sanitize and validate the data passed in
    $ngoname = filter_input(INPUT_POST, 'ngoname', FILTER_SANITIZE_STRING);
    $coordinator=filter_input(INPUT_POST, 'coordinator', FILTER_SANITIZE_STRING);
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

    $phone = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
     $gender = filter_input(INPUT_POST, 'coordinator', FILTER_SANITIZE_STRING);
    // teamname validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
    $prep_stmt = "SELECT id FROM ngo WHERE email = ? LIMIT 1";
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
 
    // check existing teamname
    $prep_stmt = "SELECT id FROM ngo WHERE ngoname = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $ngoname);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                        // A user with this teamname already exists
                        $error_msg .= '<p class="error">A user with this teamname already exists</p>';
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

        //UPDATE `members` SET teamname='vraj', email= 'vraj.vup@gmail.com', password ='asdASD', levels= '2' WHERE mobile = '?';
 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT into ngo SET ngoname='$ngoname', email='$email', pwd ='$password' ,phoneno ='$phone', Address='$address', coordinator='$coordinator'")) {
            // Execute the prepared query.
            if ( $insert_stmt->execute()) {
                
                $insert_stmt1 = $mysqli->prepare("UPDATE ngo SET flag='0' WHERE ngoname = '$ngoname' ");
                $insert_stmt1->execute();
                header('Location: ./instruction.php');
            }

            else {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
        
    }
}
?>
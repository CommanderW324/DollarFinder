<?php
    
    $conn = mysqli_connect("localhost", "root", "", "DollarFinder");
    $email = mysqli_real_escape_string($conn, $_POST['forgotemail']);
    $mailid = "teamnaik36@gmail.com";
    $hash = md5(rand(0,10000));
    if(mysqli_connect_errno()) {
        echo "Failed to Connect: " . mysqli_connect_error();
    }
    $query = "update users set reset_hash ='$hash' where email = '$email'";
    $sql = mysqli_query($conn, $query);
    
    if($sql) {
        $to = $email;
        $subject = 'Reset Password';
        $content = 'Please click the following link to reset your password :
        localhost/DollarFinder/resetpassword.php?email=' . $email . '&hash=' .$hash;
        $headers ='From:'. $mailid . "\r\n" .
        'Reply-To:' . $mailid . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $success = mail($to, $subject, $content, $headers);
        if($success) {
            
            echo "The link to reset password is in your email !";
            header("refresh=5;url=localhost/DollarFinder/login.php");
            
        } else {
            
            echo "Failed please try again!";
            header("refresh=5;url=localhost/DollarFinder/login.php");
        }
    } else {
        echo "Try again to home !";
    }
?>
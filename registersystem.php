<?php 
    
    error_reporting(-1);
    ini_set('display_errors', 'On');    
    set_error_handler("var_dump");
    $conn = mysqli_connect("localhost", "root", "", "DollarFinder");
    $username =  mysqli_real_escape_string($conn,$_POST['regusername']);
    $password = password_hash( mysqli_real_escape_string($conn, $_POST['regpassword']), PASSWORD_DEFAULT);
    $email =  mysqli_real_escape_string($conn, $_POST['regemail']);
    $hash = md5(rand(0,10000));
    $activated = 0;
    if(mysqli_connect_errno()) {
        echo "Failed to Connect: " . mysqli_connect_error();
    }
    $insertQuery = "insert into users (username, password, email, hash, activated) values ('$username', '$password', '$email', '$hash', '$activated')";
    
    $sql = mysqli_query($conn, $insertQuery);
    if($sql) {
        $to = $email;
        $subject = 'Activating Dollar Finder';
        $content = 'Please click the following link to activate your account :
        localhost/DollarFinder/verification.php?username=' . $username . '&hash='. $hash;
        $headers ='From: masterpokemon43@gmail.com' . "\r\n" .
        'Reply-To: masterpokemon43@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $success = mail($to, $subject, $content, $headers);
        if($success) {
            
            echo "Your Account has been successfully created please activate it throught the link in the email, You will be redirected to home page! ";
            header( "refresh:5;url=index.php" );
        } else {
            
            echo "Failed please try again! You will be redirected to home page";
            header( "refresh:5;url=index.php" );
        }

    } else {
        header("location: index.php"); 
    }
?>
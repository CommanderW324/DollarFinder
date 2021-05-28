<?php 
    $username = $_POST['regusername'];
    $password = password_hash($_POST['regpassword'], PASSWORD_DEFAULT);
    $email = $_POST['regemail'];
    
    $conn = mysqli_connect("localhost", "root", "", "DollarFinder");

    if(mysqli_connect_errno()) {
        echo "Failed to Connect: " . mysqli_connect_error();
    }
    $insertQuery = "insert into users (username, password, email) values ('$username', '$password', '$email')";
    
    $sql = mysqli_query($conn, $insertQuery);
    if($sql) {
        header("location: index.html");
    } else {
        header("location: index.html"); 
    }
?>
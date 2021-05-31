<?php 
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "DollarFinder");
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['resetpassword']);
    $newPass = password_hash($newPassword, PASSWORD_DEFAULT);

    if(mysqli_connect_errno()) {
        echo "Failed to Connect: " . mysqli_connect_error();
    }
    $query = "select * from users where email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $update = "update users set password = '$newPass' where id=". $row['id'];
    $sql = mysqli_query($conn, $update);
    $delete = "update users set hash=Null where id=".$row['id'];
    echo "Successfull !";
    header("refresh:5;url=index.php");
    

?>
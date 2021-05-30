<?php 
    $username = $_GET['username'];
    $hash = $_GET['hash'];
    $conn = mysqli_connect("localhost", "root", "", "DollarFinder");

    if(mysqli_connect_errno()) {
        echo "Failed to Connect: " . mysqli_connect_error();
    }
    $query = "select * from users where username = '$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($hash == $row['hash']) {
        $update = "update users set activated = 1 where id =". $row['id'];
        $sql = mysqli_query($conn, $update);
        echo "Successfull !";
    } else {
        echo "Wrong activation link, please go back !";
    }

?>
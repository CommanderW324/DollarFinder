<?php 
    session_start();
    $username = $_POST['loginusername'];
    $password = $_POST['loginpassword'];
    $conn = mysqli_connect('localhost', 'root', '', 'DollarFinder');
    if(mysqli_connect_errno()) {
        echo "Failed to Connect: " . mysqli_connect_error();
    }
    $query = "select * from users";
    $sql = mysqli_query($conn, $query);


    if($sql == false) {
        echo "Failed Database";
    } else {
        $userFound = false;
        while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            if($username == $row['username']) {
                $userFound = true;
                if(password_verify($password, $row['password'])) {
                    if($row['activated'] == 1) {
                        $_SESSION['id'] = "logged";
                        $_SESSION['usern'] = $row['username'];
                        header("location:index.php");
                    }
                } else {
                    echo "incorrect Password!";
                }
            }
        }
        if($userFound == false) {
            echo "No such user Found";
        }
    }

?>
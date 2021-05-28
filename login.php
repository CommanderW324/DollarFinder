<?php 
    $username = $_POST['loginusername'];
    $password = $_POST['loginpassword'];
    $conn = mysqli_connect('localhost', 'root', '', 'DollarFinder');
    if(mysqli_connect_errno()) {
        echo "Failed to Connect: " . mysqli_connect_error();
    }
    $query = "select username, password from users";
    $sql = mysqli_query($conn, $query);

    if($sql == false) {
        echo "Failed Database";
    } else {
        $userFound = false;
        while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            if($username == $row['username']) {
                $userFound = true;
                if(password_verify($password, $row['password'])) {
                    
                    header("location: Dollar.php");
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
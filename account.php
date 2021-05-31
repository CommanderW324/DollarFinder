<?php
    session_start();
    if(isset($_SESSION['id']) == FALSE) {
        echo "Not logged in";
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$FINDER</title>
    <meta name="description" content="Welcome to $FINDER. Find the best deals and save your Dollars" />
    <link rel="stylesheet" href="indexstyles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="icon" href="images/favicon.png" type="image/png" />
</head>

<body>
    <header>
        <?php
            include("phpcomp/navigation.php"); 
      ?>
    </header>

    <main>
        <a href="logout.php">
            Logout
        </a>
        <?php
            echo "Username : " . $_SESSION['usern'];
        ?>
    </main>
    <?php
            include("phpcomp/footer.php"); 
      ?>
</body>
<?php
            include("script2.php"); 
      ?>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<p class="logo">$FINDER</p>
      <nav>
        <ul class="nav-bar-list">
          <li><a href="index.php" class="nav-link curr-page">Home</a></li>
          <li><a href="about.php" class="nav-link other-page">About</a></li>
        </ul>
        <div class="account-background">
            <?php 
                if(isset($_SESSION['id'])) {   
                echo '<a href="account.php" class="nav-link other-page"
                    ><img class="account-icon" src="account.png" alt="Account"
                /></a>';
                } else {
                    echo '<a href="login.php" class="nav-link other-page"
                    ><img class="account-icon" src="account.png" alt="Account"
                /></a>';
                }
            ?>
        </div>
      </nav>

</body>
</html>

<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$FINDER</title>
    <meta
      name="description"
      content="Welcome to $FINDER. Find the best deals and save your Dollars"
    />
    <link rel="stylesheet" href="indexstyles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200&display=swap"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="icon" href="favicon.png" type="image/png" />
  </head>
  <body>
    <header>
      <?php
            include("navigation.php"); 
      ?>
    </header>
    
    <main>
    <?php
      if(isset($_SESSION['id'])) {
        echo "<h1> Welcome Back, " . $_SESSION['usern'];
      }
    ?>
    </main>
    <footer></footer>
  </body>
</html>
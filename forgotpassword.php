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
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="icon" href="favicon.png" type="image/png" />
  </head>
  <body>
    <header>
     <?php 
        include("phpcomp/navigation.php");
     ?>
    <main>
      <div class="form-container">
        <div class="form-selection">
          <span class="form-selector login-selector" onclick="login()"
            >Enter your Email </span
          >
          <hr class="indicator" id="login-register-indicator"/>
        </div>
        <form
          id="login-form-id"
          class="form login-form"
          action="forgotpasswordsystem.php"
          method="post"
        >
          <input
            type="text"
            name="forgotemail"
            placeholder="&#xf0e0;   Email"
            class="form-text-field email-field"
          />
          <br />
          <input type="submit" value="Send Reset" class="form-submit" />
        </form>
        
      </div>
    </main>
    <footer></footer>
    <script src="login.js"></script>
  </body>
</html>
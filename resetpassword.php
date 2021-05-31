

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
        include("navigation.php");
     ?>
    </header>
    <main>
      <div class="form-container">
        <div class="form-selection">
          <span class="form-selector login-selector" onclick="login()"
            >Enter your new password </span
          >
          <hr class="indicator" id="login-register-indicator"/>
        </div>
        <?php
          session_start();
          $conn = mysqli_connect("localhost", "root", "", "DollarFinder");
          $email = mysqli_real_escape_string($conn, $_GET['email']);
          $hash = $_GET['hash'];
          

          if(mysqli_connect_errno()) {
              echo "Failed to Connect: " . mysqli_connect_error();
          }
          $query = "select * from users where email = '$email'";
          $result = mysqli_query($conn, $query);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          if($hash == $row['reset_hash']) {
              echo "<form action='resetpasswordsystem.php' method='post' id='login-form-id'
              class='form login-form'> <input type ='password' name='resetpassword' placeholder='&#xf023;   Password'
              class='form-text-field password-field'> <input type ='text' value = '$email'class='form-text-field email-field' name = 'email' readonly >
              <input type ='submit' value= 'submit' class='form-submit'> </form>";
          } else {
              echo "Wrong reset link, please go back !";
          }

      ?>
        
      </div>
    </main>
    <footer></footer>
    <script src="login.js"></script>
  </body>
</html>

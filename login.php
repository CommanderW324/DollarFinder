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
    <meta name="description" content="Welcome to $FINDER. Find the best deals and save your Dollars" />
    <link rel="stylesheet" href="indexstyles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200&display=swap" rel="stylesheet"
        type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
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
        <div class="form-container">
            <div class="form-selection">
                <span class="form-selector login-selector" onclick="login()">Login</span>
                <span class="form-selector register-selector" onclick="register()">Register</span>
                <hr class="indicator" id="login-register-indicator" />
            </div>
            <form id="login-form-id" class="form login-form" action="loginsystem.php" method="post">
                <input type="text" name="loginusername" placeholder="&#xf0e0;   Email"
                    class="form-text-field email-field" />
                <br />
                <input type="password" name="loginpassword" placeholder="&#xf023;   Password"
                    class="form-text-field password-field" />
                <br />
                <input type="submit" value="Login" class="form-submit" />
            </form>
            <a href="#" id="forgot-password-id" class="forgot-password">Forgot password?</i></a>
            <form id="register-form-id" class="form register-form" action="registersystem.php" method="post">
                <input type="text" name="regemail" placeholder="&#xf0e0;   Email" class="form-text-field email-field" />
                <br />
                <input type="password" name="regpassword" placeholder="&#xf023;   Password"
                    class="form-text-field password-field" />
                <br />
                <input type="text" name="regusername" placeholder="&#xf2c2;   Username"
                    class="form-text-field username-field" />
                <br />
                <input type="submit" value="Register" class="form-submit" />
            </form>
        </div>
    </main>
    <?php
            include("phpcomp/footer.php"); 
      ?>
    <script src="login.js"></script>
</body>
<?php
            include("script2.php"); 
      ?>

</html>
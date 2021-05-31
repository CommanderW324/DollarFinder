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
        <p class="logo">$FINDER</p>
        <nav>
            <ul class="nav-bar-list">
                <li><a href="#" class="nav-link curr-page">Home</a></li>
                <li><a href="about.html" class="nav-link other-page">About</a></li>
            </ul>
            <div class="account-background">
                <a href="login.html" class="nav-link other-page"><img class="account-icon" src="account.png"
                        alt="Account" /></a>
            </div>
            <?php 
            echo "You have created an account. Now just activate it through the link in the email to start using DollarFinder !";
        ?>
        </nav>
    </header>
    <main>

    </main>
    <?php
            include("phpcomp/footer.php"); 
      ?>
</body>

</html>
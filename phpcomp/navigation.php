<p class="logo">$FINDER</p>
<nav>
    <ul class="nav-bar-list">
        <li><a href="index.php" class="nav-link other-page">Home</a></li>
        <li><a href="about.php" class="nav-link other-page">About</a></li>
    </ul>
    <div class="account-background">
        <?php 
                if(isset($_SESSION['id'])) {   
                echo '<a href="account.php" class="nav-link other-page"
                    ><img id="account-icon" class="" src="images/account.png" alt="Account"
                /></a>';
                } else {
                    echo '<a href="login.php" class="nav-link other-page"
                    ><img id="account-icon" class="" src="images/account.png" alt="Account"
                /></a>';
                }
            ?>
    </div>
</nav>
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
      <h2 class="about-heading poster-heading">Proposal Poster</h2>
      <img src="2399.png" alt="Dollar Finder Proposal" class="poster-img" />
      <h2 class="about-heading video-heading">Proposal Video</h2>
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/Z7pfjg0NKnU"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        class="proposal-video"
      ></iframe>
    </main>
    <footer></footer>
  </body>
</html>
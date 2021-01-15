<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Detox</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">    <script src="https://kit.fontawesome.com/6b09912149.js" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
    <meta property="og:image" content="/images/ADprofile.jpg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="artistdetox.co.uk"/>
    <meta property="og:title" content="Artist Detox" />
    <meta property="og:description" content="Artist Detox Live every Friday 8-10pm with Ricardo" />

</head>
<body>

    <?php session_start(); ?>
    <nav>
        <div class="navBar">
            <h1>Artist Detox</h1>
            <i class="fas fa-bars navButton" id="navBtn" onclick="navAppear()"></i>
        </div>
        <ul>
            <div class="navContent" id="navC">
                <li class="navLinks"><a href="/index.php">Home</a></li>
                <li class="navLinks"><a href="listenlive.php">Listen Live</a></li>
                <!-- <li class="navLinks"><a href="">Archive</a></li>
                <li class="navLinks"><a href="">Blog</a></li>
                <li class="navLinks"><a href="">Interviews</a></li>
                <li class="navLinks"><a href="">The Playlist</a></li> -->
                <div class="socials">
                <li class="navLinks"><a href="https://www.instagram.com/artistdetox/"><i class="fab fa-instagram"></i></a></li>
                <li class="navLinks"><a href="https://www.spreaker.com/show/artist-detox"><i class="fab fa-spotify"></i></a></li>
            </div>
            </div>
        </ul>
    </nav>
</body>
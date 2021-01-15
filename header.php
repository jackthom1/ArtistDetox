<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Detox - <?php if (!empty(PAGE_TITLE)) {
                                echo PAGE_TITLE;
                            } else {
                                echo "";
                            }; ?></title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b09912149.js" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <meta property="og:image" content="/images/ADprofile.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="artistdetox.co.uk" />
    <meta property="og:title" content="Artist Detox" />
    <meta property="og:description" content="Artist Detox Live every Friday 8-10pm with Ricardo" />
    <link rel="icon" href="./images/ADprofile.jpg" type="image/gif" sizes="16x16">


</head>

<body>

    <?php session_start(); ?>
    <nav>
        <div class="navBar">
            <a href="./index.php">
                <h1>Artist Detox</h1>
            </a>
            <i class="fas fa-bars navButton" id="navBtn" onclick="navAppear()"></i>
        </div>
        <marquee behaviour="scroll" direction="left" class="reviewsBar">
                <span>
                    <i class="fas fa-star"></i> I've been listening to Artist Deotox's all day while i'm doing coursework. But my f*** jaw
                    dropped when I saw TOM MISCH!!   
                </span>
                <span><i class="fas fa-star"></i> I Love it so much! Your just so good!! x   
                <span><i class="fas fa-star"></i> If your not listening to one of the best young radio presenters in Torbay, then what are you doing?!
                    He's bringing you a show every other Friday night and tonights live show is repping new artists!   
                </span>

        </marquee>
        <ul>
            <div class="navContent" id="navC">
                <li class="navLinks"><a href="./index.php">Home</a></li>
                <li class="navLinks"><a href="./listenlive.php">Listen Live</a></li>
                <li class="navLinks"><a href="./audiobiopics.php">Audiobiopics</a></li>
                <li class="navLinks"><a href="./mixes.php">Mixes</a></li>
                <li class="navLinks"><a href="./archive.php">Archive</a></li>
                <!--<li class="navLinks"><a href="">The Playlist</a></li> -->
                <div class="socials">
                    <li class="navLinks"><a href="https://www.instagram.com/artistdetox/" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li class="navLinks"><a href="https://open.spotify.com/playlist/3zGRmClObpf52iqwklMMnI?si=CvTTIDKJS7-Og_B2mYyEiQ" aria-label="Spotify"><i class="fab fa-spotify"></i></a></li>
                </div>
            </div>
        </ul>
    </nav>
</body>
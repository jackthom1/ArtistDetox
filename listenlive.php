<?php

define("PAGE_TITLE", "Listen Live");
include("./header.php");
?>

<div class="liveContainer">
    <div class="titleSection liveTitle">
        <h1>Listen Live On <span> Friday <br>8-10PM </span></h1>
    </div>
    <div class="liveContent">
        <script async src="https://widget.spreaker.com/widgets.js"></script>
        <a class="spreaker-player" href="https://www.spreaker.com/show/artist-detox" data-resource="show_id=2786348" data-width="80%" data-height="350px" data-theme="dark" data-playlist="show" data-playlist-continuous="false" data-autoplay="false" data-live-autoplay="true" data-chapters-image="true" data-episode-image-position="right" data-hide-logo="true" data-hide-likes="false" data-hide-comments="false" data-hide-sharing="false" data-hide-download="true">Listen to "Artist Detox" on Spreaker.</a>
    </div>
</div>

<div class="commentSection">
    <h2 style="align-self: flex-start; padding-left: 20px;">Comments</h2>
    <div class="comment">
        <?php
        $con = new mysqli("sql113.epizy.com", "epiz_27180315", "1VM6YSDiQLV5");
        //$con = new mysqli("localhost", "root", "");
        if ($con->connect_error) {
            die("Connection Error..." . $con->connect_error);
        };
        $sql = "SELECT * FROM `epiz_27180315_blog`.`comments` ORDER BY `commentDate` DESC LIMIT 25";
        $results = $con->query($sql);
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                echo "<p class='commentResult'>" . $row["comment"] . "</p>";
            }
        }

        ?>
    </div>
    <div class="makeComment">
    <!-- <iframe name="submitForm" style="display: none"></iframe> -->
        <form action="comment.php" method="POST" target="submitForm">
            <input type="text" name="comment" class="commentBox" placeholder="Comment:">
            <button type="submit" class="commentButton">Send</button>
        </form>
    </div>
</div>


</body>
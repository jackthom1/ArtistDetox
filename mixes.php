<?php 
define("PAGE_TITLE", "Mixes");
include("./header.php")  ?>

<div class="mixes">
    <div class="titleSection mixTitle">
        <h1>Mixes</h1>
        <h3>Listen Back to all my Mixes</h3>
    </div>
    <div class="audioContent">
    <?php 
               $con = new mysqli("sql113.epizy.com", "epiz_27180315", "1VM6YSDiQLV5");
            //    $con = new mysqli("localhost", "root", "");
               if ($con->connect_error){
                   die("Connection Error...".$con->connect_error);
                };
                $sql = "SELECT * FROM `epiz_27180315_blog`.`posts` WHERE `postCatagory`='mix' ORDER BY `postDate` DESC";
                $results = $con->query($sql);
                if ($results->num_rows > 0){
                    while($row = $results->fetch_assoc()) {                        
                        echo "<div class='showContent'>
                            <img src='". $row["postImage"]."' class='showImg' id='img1'>
                            <h3 class='showTitle'>". $row["postTitle"]."</h3>
                            <p>".$row["postContent"]."</p>
                            <button class='listenNowBtn' onclick='location.href=`". $row["postLink"]."`'>Listen Now</button>
                            </div>";  
                        }
                }
            ?>








</div>
</div>
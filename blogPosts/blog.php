<?php 
define("PAGE_TITLE", "Blog");
include("./header.php")

    function posts(){
        $con = new mysqli("sql113.epizy.com", "epiz_27180315", "1VM6YSDiQLV5");
        if ($con->connect_error){
            die("Connection Error...".$con->connect_error);
        }
        $sql = "SELECT `PostID`, `postDate`, `postTitle`, `postContent`, `postImage` FROM `epiz_27180315_blog`.`posts` WHERE  `PostID`>0 ORDER BY `PostDate` DESC;";
        $results = $con->query($sql);
        if ($results->num_rows > 0){
            while($row = $results->fetch_assoc()) {
                echo "<div class='posts'><img src='{$row["postImage"]}' class='postImg'><p class='title'>".$row["postTitle"]. " </p> <p class='dataReturn'>" . substr($row["postContent"],0, 100). "...  </p><button class='listenNowBtn' onclick='location.href=`./blogPosts/{$row["postTitle"]}.php`'>Read More</button></div>"; 
                }
            }
        }
    

?>

<body>
    <div class="blog">
        <?php posts() ?>
    </div>

</body>
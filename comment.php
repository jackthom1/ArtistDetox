<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = new mysqli("sql113.epizy.com", "epiz_27180315", "1VM6YSDiQLV5");
    //$con = new mysqli("localhost", "root", "");
    $comment = mysqli_real_escape_string($con, $_POST["comment"]);

    if ($con->connect_error) {
        die("connection Error..." . $con->connect_error);
    }
    $sql = "INSERT INTO `epiz_27180315_blog`.`comments` (`comment`) VALUES ('$comment');";
    if ($con->query($sql) !== TRUE) {
        echo "comment failed to post...";
    } else {
        header("Location: https://artistdetox.co.uk/listenlive.php");
        $con->close();
    }
}

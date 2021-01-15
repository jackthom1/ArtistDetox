<?php
    include("./header.php");

    if (!isset($_SESSION["username"])){
        $_SESSION['msg'] = "You have to login first";
        header("location: /login.php");
        exit;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $con = new mysqli("sql113.epizy.com", "epiz_27180315", "1VM6YSDiQLV5");
        // $con = new mysqli("localhost", "root", "");
        $postTitle = mysqli_real_escape_string($con, $_POST["title"]);
        $postContent = mysqli_real_escape_string($con, $_POST["content"]);
        $postLink = mysqli_real_escape_string($con, $_POST["listenLink"]);
        $postCatagory = mysqli_real_escape_string($con, $_POST["catagory"]);
        $allow = 1;

        if ($con->connect_error){
            die("connection Error...". $con->connect_error);
        }
    // CHECK FOR FILE UPLOAD
    if(is_uploaded_file($_FILES["imageUpload"]['tmp_name'])){
        $targetDIR = "images/blogImages/";
        $targetFile = $targetDIR . basename($_FILES["imageUpload"]["name"]);
        $imageType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
        while(file_exists($targetFile)){
            $num = rand(0, 50);
            $editTargetString = substr($targetFile,0,-4);
            $targetFile = $editTargetString . $num .".{$imageType}";     
        }  
        $image = $targetFile;           
        if($allow == 1){  
            if(move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$image)){
                echo "file uploaded succesfully";
            } else{
                $allow = 0;
                $_SESSION["postErr"] = "File Not Uploaded";
                // header('Location: /index.php');
                // exit;
            }
        }
    }else{
        echo "No File Present";
    }

    // if file present upload title and content to database 
    if($allow == 1){
        $sql = "INSERT INTO `epiz_27180315_blog`.`posts` (`postTitle`, `postContent`,`postLink`, `postCatagory`, `postImage` ) VALUES ('$postTitle', '$postContent', '$postLink', '$postCatagory', '$image');";
    }
    if($con->query($sql)===TRUE){
        echo "written to database";
    } else{
        echo "Error Writing To Database";
    }
    $con->close();
    }



?>



<body>
<div class="postForm">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title"> <br>
    <textarea class="inputBox" name="content" placeholder="Content"></textarea> <br>
    <input type="file" name="imageUpload" accept="image/*"> <br>
    <input type="text" name="listenLink" placeholder="Link"> <br>
    <select name="catagory">
        <option value="audiobiopic">Audiobiopic</option>
        <option value="mix">Mixes</option>
        <option value="show">Show</option>
    </select> <br>
    <button type="submit" class="listenNowBtn">Post</button>
</form>
</div>
</body>

<!-- $blogPageFile = fopen("./blogPosts/{$postTitle}.php", "w");
        $headContent = "<?php include('./blogHeader.php'); ?>";
        $blogContent = "<div class='blogPageConent'><div class='posts'><img src='..{$image}' class='postImg'><p class='title'>{$postTitle}</p> <p class='dataReturn'>{$postContent}</p></div></div>";
        fwrite($blogPageFile, $headContent);
        fwrite($blogPageFile, $blogContent); -->
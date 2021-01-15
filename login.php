<?php
    define("PAGE_TITLE", "Login");
    include("./header.php");

    if(isset($_SESSION['username'])){
        header("location: /index.php");
        exit;
    }

    

        if($_SERVER["REQUEST_METHOD"]== "POST"){
            
            $con = new mysqli("sql113.epizy.com", "epiz_27180315", "1VM6YSDiQLV5");

            $username = mysqli_real_escape_string($con, $_POST["username"]);
            $password = mysqli_real_escape_string($con, $_POST["password"]);

            if ($con->connect_error){
                die("connection Error...". $con->connect_error);
            }
            $sql = "SELECT `username`,`password` FROM `epiz_27180315_blog`.`users` WHERE `username`='$username'";
            $result = $con->query($sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    $hashedpword = $row["password"];
                }
            }else{
                echo "No Such username...";
            }
            $pass = password_verify($password, $hashedpword);
            if($pass){
                echo "login success";
                $_SESSION['username'] = "loginComplete";
                $_SESSION['name'] = $username;
                header('Location: /index.php');
                exit;
            } else {
                echo "Login Fail... incorrect Username or Password";
            }  
        }  



?>


<div class="login">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <p class="inputBox">Username: <input type="text" name="username"></p>  
            <p class="inputBox">Password: <input type="password" name="password"></p> 
            <button class="searchBtn" type="submit">Login</button>
        </form>
    </div>
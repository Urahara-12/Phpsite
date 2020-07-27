<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="styles.css">
    <body>
        <div class="header">
            <a href="index.php" style="text-decoration: none; color: white;"><h1><strong>Weeabo Website</strong></h1></a>
            
         </div>
        <div class="first">
        <nav>
            <li style="font-size: 150%;"><a href="index.php" style="text-decoration: none; color: red;">Home</a></li>
            <li style="font-size: 150%;"><a href="signup.php" style="text-decoration: none; color: red;"> Sign up</a></li>
            <li style="font-size: 150%;"><a href="login.php" style="text-decoration: none; color: red;">Login</a></li>
            <li style="font-size: 150%;"><a href="login.php" style="text-decoration: none; color: red;">Hub</a></li>
        </nav>
        </div>
        <div class="second">
            <div><h2 style="color: goldenrod;">Sign in</h2></div>
            <div><form action="loginresults.php" method="POST">
                <input type="text" class="input-box" placeholder="Username" style="width: 30%;" name="user_name"><br>
                <?php
                if(isset($name_error)){
                    echo $name_error;
                }
                ?></br>
                <input type="password" class="input-box" placeholder="Password" style="width: 30%;" name="user_password"><br>
                <?php
                if(isset($pass_error)){
                    echo $pass_error;
                }
                ?></br>
                <button type="submit" class="sign-in-btn">Sign in</button>
            </form></div>
        </div>
        <div class="footer"></div>
</head>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up</title>
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
        <div class="second" class="sign-up-form">
            <div><h2 style="color:silver">Join the virgins!</h2></div>
            <div><form action="signupresults.php" method="POST">
                <input type="text"  name="reg_name" class="input-box" placeholder="Username" style="width: 30%;"><br>
                <?php
                 if (isset($username_error)){
                    echo $username_error;
                }
                if (isset($len_error)){
                    echo $len_error;
                }?></br>
                <input type="email" name="reg_email"class="input-box" placeholder="Your email" style="width: 30%;"><br>
                <?php
                 if (isset($email_error)){
                    echo $email_error;
                }?></br>
                <input type="email" name="rep_email"class="input-box" placeholder="Repeat Email" style="width: 30%;"><br>
                <?php
                 if (isset($email_error)){
                    echo $email_error;
                }
                if(isset($ve_error)){
                    echo $ve_error;
                }?></br>
                <input type="password" name="reg_password" class="input-box" placeholder="Your Password" style="width: 30%;"><br>
                <?php
                 if (isset($password_error)){
                    echo $password_error;
                }?></br>
                <input type="password" name="rep_password"class="input-box" placeholder="Repeat Password" style="width: 30%;"><br>
                <?php
                 if (isset($password_error)){
                    echo $password_error;
                }
                if(isset($vp_error)){
                    echo $vp_error;
                }?></br>
                <p><span> <input type="checkbox"></span>I agree to the terms and services</p>
                <button type="submit" class="sign-up-btn">Sign up</button>
                <hr style="width: 450px;">
                OR<br>
                <button type="button">Login with Pornhub</button>
                <p>Do you already have an account ?<a href="login.php">Sign in</a></p>

            </form></div>
        </div>
        <div class="footer"></div>
</head>
</html>
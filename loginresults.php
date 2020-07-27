<?php
$username = $_POST['user_name'];
$password = $_POST['user_password'];

if(empty($username)){
    $name_error = 'Please enter your Username';
}
if(empty($password)){
    $pass_error = 'Please enter your Password';
}

include('login.php')

?>
<?php
$username= $_POST['reg_name'];
$email= $_POST['reg_email'];
$password= $_POST['reg_password'];
$validate_email= $_POST['rep_email'];
$valide_password = $_POST['rep_password'];

if(empty($username)){
    $username_error="Please enter a username";
}
else if(strlen($username)<5){
    $len_error = "Username must atleast be 5 charachters";
}
if(empty($password)){
    $password_error="Please enter a password";
}
else if($password != $valide_password){
    $vp_error = "Passwords must match";
}
if(empty($email)){
    $email_error="Please enter an email";
}
elseif($email != $validate_email){
    $ve_error="Emails must match";
}

include('signup.php')
?>
<?php
session_start();
include('exo-user.php');

$Nu= new User;
if($_POST['email']== $Nu->getemail() && ['password']== $Nu->getpassword()){
    session_start();
    $_SESSION['name']= $Nu-> getname();
    $_SESSION['firstname']= $Nu-> getfirstname();
    $_SESSION['email']= $Nu-> getemail();
    $_SESSION['password']= $Nu-> getpassword();
    header('Location: dashboard.php');
}
else{
    echo"ERROR";
}
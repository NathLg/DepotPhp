<?php
session_start();
include('exo-user.php');
if(isset($_SESSION['name'])){
    echo"Prenom :".$_SESSION['firstname'];
}

if(isset($_SESSION['firstname'])){
    echo"Nom :".$_SESSION['name'];
}
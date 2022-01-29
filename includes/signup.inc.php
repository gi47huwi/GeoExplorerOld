<?php

if(isset($_POST["submit"])){

    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dhb.inc.php';
    require_once 'functions.inc.php';
    

    if (emptyInputSignup($vorname,$nachname,$email,$pwd) !== false){
        header("location: ../index.php?error=emptyinput");
        exit();
    };


}else{
    header("location: ../index.php");
    exit();
}
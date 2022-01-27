<?php

function emptyInputSignup($vorname,$nachname,$email,$pwd){
    $result;
    if(empty($vorname)||empty($nachname)||empty($email)||empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
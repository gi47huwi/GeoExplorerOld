<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "exkursion";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());

}else{
    header("location: ../main.php");
}
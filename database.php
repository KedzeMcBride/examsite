<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName= "exam";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    die("something went wrong;");
}

?>
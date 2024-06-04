<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databass = "auth_1";

    $conn = new mysqli($servername,$username,$password,$databass, 3306);
    if(!$conn){
        echo ("connation error");
    }
?>


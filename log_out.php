<?php
include 'conn.php';
if(isset($_REQUEST['logout'])){
    session_start();
    session_unset();
    session_destroy();  
    header("Location: Login.php");
}
?>
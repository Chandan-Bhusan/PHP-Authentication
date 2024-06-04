<?php
if(isset($_POST['verify']))
    $OTP = $_POST['otp'];

    require "conn.php";

    $sql = "SELECT * FROM signup_data WHERE reset_token_hash = '$OTP'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    $data = mysqli_fetch_assoc($result);
    if($result){
        $storotp = $data ['reset_token_hash'];
    
         if($OTP == $storotp){
            header("Location: reset_pass.php");
        }
        else{ echo"Worng password";}
       
    }


?>
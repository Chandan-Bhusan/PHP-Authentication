<?php
    // isset($_POST['send']);
    $Email = $_POST['email'];
    session_start();
    $_SESSION['Email'] = $Email;

    $OTP = rand(1000,9999);
    $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

    include "conn.php";

    $sql = "UPDATE `signup_data`
        SET `reset_token_hash` = ?,
            `reset_token_expires_at` = ?
        WHERE Email = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss", $OTP, $expiry, $Email);

    $stmt->execute();
    $stmt->close();

    if($conn->affected_rows){
        $mail = require "Sendmail.php";

        $mail->setFrom("chandanbhusan8080@gmail.com");
        $mail->addAddress($Email);
        $mail->Subject = "dxdstzieinzknbiy";
        $mail->Body = <<<END
    
        Your OTP is $OTP.
    
        END;
    
        try {
    
            $mail->send();
    
        } catch (Exception $e) {
    
            echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    
        }
        header("Location: otp.php");
    }
    echo "Message sent, please check your inbox.";


   
    
    
?>

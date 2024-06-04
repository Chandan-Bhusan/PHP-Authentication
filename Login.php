<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="">
   
<style>
 body {
    font-family: Arial, sans-serif;
    background-color:rgba(77, 190, 177, 100);
    background: linear-gradient(321deg, rgba(131,58,180,1) 0%, rgba(77,190,177,1) 50%, rgba(252,176,69,1) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #f9f6f6eb;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    width: 300px;
    height: 350px;
    text-align: center;
}

.login-container h2 {
    margin-bottom: 20px;
}

.login-container label {
    display: block;
    margin-bottom: 8px;
    text-align: left;
}

.login-container input {
    width: 95%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 15px;
}

.login-container button {
    width: 102%;
    padding: 10px;
    background-color: #28a745;
    border: none;
    border-radius: 15px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

.login-container button:hover {
    background-color: #45a049;
}

.forgot-password {
    margin-top: 10px;
}

.forgot-password a {
    color: #007BFF;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}
.signup{
    justify-content:center;
    width: 100%;
    margin-top:10px;
}

</style>
</head>
<?php

    if(isset($_POST['Login'])){
        include 'conn.php';
        $Email = $_POST['email'];
        $Pass = $_POST['password'];

        $sql = "SELECT * FROM `signup_data` WHERE Email ='$Email'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");
        $numrow = mysqli_num_rows($result);

        if($numrow == 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($Pass, $row['Password'])){
                session_start();
                $_SESSION['Usename'] = $row['User'];
                $_SESSION['UserEmail'] = $Email;
                $_SESSION['Login'] = true;

                header("Location: Profile.php ");
            }
        }     
    }
    
?>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="Login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="Login">Login</button>
            
            <div class="forgot-password">
                <a href="forgetpsd.php">Forgot Password?</a>
            </div>
        </form>
        <div class="signup">
           <a href="Signup.php"><button id="signup">Signup</button></a>
        </div>
    </div>
</body>
</html>

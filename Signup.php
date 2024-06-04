<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

.signup-container {
    background-color: white;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    width: 300px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="email"],
input[type="password"],
input[type="user"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 15px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    border: none;
    border-radius: 15px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}
.login{
    margin-top:10px;
}

 
    </style>
</head>
<h3></h3>
<?php
        if(isset($_POST['signup'])){
            include 'conn.php';
            $User = $_POST['user'];
            $Email = $_POST['email1'];
            $Psssword = $_POST['password'];
            $cpass = $_POST['confirm-password'];
            $existSql = "SELECT * FROM `signup_data` WHERE Email = '$Email'";
            $result = mysqli_query($conn, $existSql);
            $numExistRows = mysqli_num_rows($result);

            if($numExistRows > 0){
                echo "<h3>email alrady exist</h3>";
            }
            else{
                if($Psssword == $cpass){
                    $hash = password_hash($cpass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `signup_data`(`User`, `Email`, `Password`) VALUES ('$User','$Email','$hash')";
                    $result = mysqli_query($conn, $sql);

                    if($result){
                        echo "<h3>Sucess</h3>";
                        header("Location: Login.php");
                        exit();
                    }
                }
            } 

        }
        
?>

<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="Signup.php" method="post">
            <div class="form-group">
                <label for="user">Username</label>
                <input type="user" id="user" name="user" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email1" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" name="signup">Sign Up</button>
        </form>
        <div class="login">
            <a href="Login.php"><button>Login</button></a>
        </div>
    </div>
</body>
</html>

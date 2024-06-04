<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color:rgba(77, 190, 177, 100);
    background: linear-gradient(321deg, rgba(131,58,180,1) 0%, rgba(77,190,177,1) 50%, rgba(252,176,69,1) 100%);
}

.container {
    background-color: #fff;
    padding: 20px 40px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.forgot-password-form {
    display: flex;
    flex-direction: column;
}

h2 {
    margin-bottom: 10px;
    color: #333;
}

p {
    margin-bottom: 20px;
    color: #666;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 15px;
}

button {
    padding: 10px 15px;
    border: none;
    border-radius: 15px;
    background-color: #5ebe38;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #368936;
}

</style>
</head>

<body>
    <div class="container">
        <form class="forgot-password-form" action="send_mail.php" method="post">
            <h2>Forgot Password</h2>
            <p>Please enter your email address to reset your password.</p>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name ="email" required>
            </div>
            <button name="send">Send</button>
        </form>
    </div>
</body>
</html>



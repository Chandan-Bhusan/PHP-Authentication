<?php
    include 'conn.php';
    session_start();
    if(!isset( $_SESSION ['UserEmail'])){
        $user= $_SESSION ['Usename'];
        header("Location : Login.php"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile View Page</title>
    <link rel="stylesheet" href="">
    <style>
 * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
} 

 body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color:rgba(77, 190, 177, 100);
    background: linear-gradient(321deg, rgba(131,58,180,1) 0%, rgba(77,190,177,1) 50%, rgba(252,176,69,1) 100%);
} 

.profile-container {
    width: 600px;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    padding: 20px;
}

.profile-container a{
}

.profile-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.profile-picture img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 20px;
}

.profile-info {
    flex-grow: 1;
}

.profile-info h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

.profile-info p {
    margin-bottom: 5px;
    color: #666;
}

.profile-details h2 {
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 20px;
}

.profile-details p,
.profile-details ul {
    margin-bottom: 10px;
    color: #333;
}

.profile-details ul {
    list-style: disc;
    padding-left: 20px;
}
.profile-details a{
    justify-content:End;
}

button {

    padding: 10px 16px;
    background-color: #28a745;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}
.edit_profile{
    position: left;
    justify: end;
}

#edit_btn > a{
    float: right;
}


    </style>
</head>
<body>
    <div class="profile-container">
        <!-- <div class="edit_profile" id="edit_btn"><a href="Forum.php"><button id ="edit">Edit</button></a></div> -->
        <div class="profile-header">
            <div class="profile-picture">
                <img src="image/user-profile-icon-free-vector.jpg" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h1><?php echo $_SESSION['Usename'];?></h1>
                <p>Email: <?php echo $_SESSION['UserEmail']; ?></p>
                <p>Location: New York, USA</p>
            </div>
        </div>
        <div class="profile-details">
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque feugiat, tortor ac pharetra fermentum, velit metus aliquam lectus, vel vestibulum nunc tortor quis mi.</p>
            
            <h2>Interests</h2>
            <ul>
                <li>Web Development</li>
                <li>Traveling</li>
                <li>Photography</li>
                <li>Reading</li>
            </ul>   
            <form action="log_out.php" method="post">
                <button name="logout">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>

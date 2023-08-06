<?php 
session_start();

if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == 'yes'){
    header('Location: /NCE-PROJECT/home.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        button{
            border-radius: 20px;
            height:150px; 
            background-image: linear-gradient(45deg, #000000 30%, #666666 30%, #666666 60%, #CCCCCC 60%, #CCCCCC 90%);
        }
    </style>
</head>
<body>
    <?php include_once('layout/header.php'); ?><br>
    <form action="home.php" method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <button type="submit">Login</button><br><br>
        Do not have account? 
        <a href="/NCE-PROJECT/signup.php">Sign Up</a>
    </form><br>
    <?php include_once('layout/footer.php'); ?>
</body>
</html>
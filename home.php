<?php 
session_start();
include('helper/database.php');
    // error_reporting(0);
if(isset($_SESSION['is_login']) || $_SESSION['is_login'] != 'yes'){
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin123'){
        $_SESSION['is_login'] = 'yes';
    }
    else{
        $_SESSION["is_login"] = '';
        session_destroy();
        header("Location: /NCE-PROJECT/index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
           table,
        tr,
        td {
            border: solid black 1px;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
  welcome to homepage.
    <table>
       <!--<tr>
            <td>1</td>
            <td>Sandipa Limbu</td>
            <td>Birjung</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Rebecca Limbu/td>
            <td>Kathmandu</td>
        </tr>-->
    </table>  
    <footer>
        <a href="/nce-project/logout.php "> CLICK TO LOGOUT</a>
        <?php include_once('layout/footer.php'); ?>
    </footer>
</body>
</html>
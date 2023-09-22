<?php
include './database/Database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./style/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <form action="" method="POST">
        
        <div class="admin">
            <img src="./images/logo.jpg">

            <div class="admin1">
                <h2>ADMIN PANEL</h2>
                <p>Control Panel Login</p>
            </div>

            <div class="admin2">
                <img src="./images/user_icon.png" >
                <input type="text" name="AdminName" id="username">
            </div>
           
            <div class="admin3">
                <img src="./images/password_icon.png">
                <input type="password" name="AdminPassword" id="pass">
            </div>
            
            <button type="submit" name="login">Login</button>
        </div>
    </form>

<?php
    if(isset($_POST['login'])){
        
       $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`=`$_POST[AdminName]` AND `ADMIN_PASSWORD`=`$_POST[AdminPassword]`";
       $result = mysqli_query($con,$query);
    }
?>

</body>
</html>
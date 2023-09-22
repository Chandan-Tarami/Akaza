<?php
session_start();
include './database/Database.php';
$database = new Database();
$user = false;


$anime_data = $database->get_anime_list();


if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "login") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $database->check_user($username, $password);
    }

    if ($_POST['submit'] == "register") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        if ($password !== $confirmPassword) {
            echo  "<script>alert('Error: Passwords do not match')</script>";
            
        }

        $registration_successful = $database->register_user($username, $email, $password);

        if ($registration_successful) {
            // Redirect to a success page or perform any other necessary actions
            echo "<script>alert('Registered')</script>";
            
        } else {
            // Handle registration error
            echo "<script>alert('Registration fail')</script>";
        }
    }

}

$_SESSION["user"]=$user;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akaza</title>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
</head>

<body>
    <section class="container" id="darkbox" ></section>
    <section class="container" id="darkbox_menu" onclick="openBar()"></section>
    <?php include './components/register.php';?>
    <?php include './components/login.php';?>
    <?php include './components/navbar.php';?>
    <?php include './components/option.php';?>
    

    <section class="video_section">
        <div class="video_left">
            <video src="./videos/Aka.mp4" loop autoplay muted ></video>
        </div>

        <div class="video_right">

            <div class="nav1">
                <h1> Top Anime </h1>
            </div>

            <div class="top_list">

            <div>
                <div class="top1">
                    <div class="num1">
                        1
                    </div>
                    <a href="video.php"><img src="./images/onepiece.jpg" ></a>
                    <div class="pag1">
                        <h2>One Piece</h2>
                    </div>
                    
                </div>


                <div class="top2">
                    <div class="num2">2</div>
                    <img src="./images/jujutsu.jpg" >
                    <div class="pag2">
                        <h2>Jujutsu Kaisen</h2>
                    </div>
                </div>


                <div class="top3">
                    <div class="num3">3</div>
                    <img src="./images/mashle.jpg" >
                    <div class="pag3">
                        <h2>Mashle</h2>
                    </div>
                </div>

                <div class="top4">
                    <div class="num4">4</div>
                    <img src="./images/demonslayer.jpg" >
                    <div class="pag4">
                        <h2>Demon Slayer</h2>
                    </div>
                </div>

                <div class="top5">
                    <div class="num5">5</div>
                    <img src="./images/hells.jpg" >
                    <div class="pag5">
                        <h2>Hell's Paradise</h2>
                    </div>
                </div>

            </div>
           
        </div>
        </div>

    </section>

    <section class="updated">
            <h1>Recently Updated</h1>
    </section>

    <?php include './components/body.php';?>
    
    <?php include './components/footer.php';?>

    <script src="./javascript/index.js"></script>

    

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <link rel="stylesheet" href="./style/video.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
</head>
<body>

    <section class="container" id="darkbox"></section>  
    <section class="container" id="darkbox_menu" onclick="openBar()"></section>
    <?php include './components/register.php';?>
    <?php include './components/login.php';?>
    <?php include './components/navbar.php';?>
    <?php include './components/option.php';?>

     <section class="video_section">
        <div class="video_left">
            <video src="./videos/video.mp4" controls ></video>
        </div>

        <div class="video_right">

            <div class="onepiece">
                <img src="./images/onepiece.jpg" >
            </div>   

            <h1>One Piece</h1>

            <p>Gold D Roger was known as the "Pirate King," the strongest and most infamous being to have sailed the Grand Line. The capture and execution of Roger by the World Government brought a change throughout the world. His last words before his death revealed the existence of the greatest treasure in the world, One Piece.</p>
            <p>Akaza is the best site to watch anime online.Even you can also  find Toei Animation anime on it.</p>  
        </div>

    </section>

    <section class="episodes">
        <div class="ep1">1</div>
        <div class="ep2">2</div>
    </section>

       
    <?php include './components/body.php';?>
    <?php include './components/footer.php';?>

    <script src="./javascript/index.js"></script>
    
</body>
</html>
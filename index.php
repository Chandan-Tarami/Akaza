<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akaza</title>
    <link rel="stylesheet" href="./style/index.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> -->
</head>

<body>
    <section class="container" id="darkbox"></section>
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
                <h1>Top Anime</h1>
            </div>

            <div class="top_list">

            <div>
                <div class="top1">
                    <div class="num1">
                        1
                    </div>
                    <img src="./images/onepiece.jpg" >
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

    <section class="anime1">
        <div class="anime_card"> 
            <div class="card_img">
                <img src="./images/demonslayer.jpg">
            </div>
            <div>
                <h1>Demon Slayer</h1>
            </div>
        </div>


        <div class="anime_card">
            <div class="card_img"> 
            <img src="./images/eminance.jpg">
            </div>
            <div>
                <h1>Eminance in Shadow</h1>
            </div>
        </div>


        <div class="anime_card">
            <div class="card_img"> 
            <img src="./images/haik.jpg" >
            </div>
            <div>
                <h1>Haikyuu</h1>
            </div>
        </div>


        <div class="anime_card ">
            <div class="card_img"> 
            <img src="./images/naruto.jpg">
            </div>
            <div>
                <h1>Naruto</h1>
            </div>
        </div>


        <div class="anime_card">
            <div class="card_img"> 
            <img src="./images/hells.jpg">
            </div>
            <div>
                <h1>Hell's Paradise</h1>
            </div>
        </div>
       
    

    
        <div class="anime_card"> 
            <div class="card_img">
                <img src="./images/mashle.jpg">
            </div>
            <div>
                <h1>Mashle</h1>
            </div>
        </div>


        <div class="anime_card">
            <div class="card_img"> 
            <img src="./images/mystar.jpg">
            </div>
            <div>
                <h1>MyStar</h1>
            </div>
        </div>


        <div class="anime_card">
            <div class="card_img"> 
            <img src="./images/jujutsu.jpg" >
            </div>
            <div>
                <h1>Jujutsu Kaisen</h1>
            </div>
        </div>


        <div class="anime_card ">
            <div class="card_img"> 
            <img src="./images/goul.jpg">
            </div>
            <div>
                <h1>Tokyo Goul</h1>
            </div>
        </div>


        <div class="anime_card">
            <div class="card_img"> 
            <img src="./images/onepiece.jpg">
            </div>
            <div>
                <h1>One Piece</h1>
            </div>
        </div>
    </section>

    <?php include './components/footer.php';?>

    <script src="./javascript/index.js"></script>

    

</body>
</html>
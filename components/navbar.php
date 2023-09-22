<section class="navbar">
        <div class="nav_left">
            <div class="menu" onclick="openBar()">
            <img src="./images/menu.png" >
            </div>

            <div class="logo">
               <a href="index.php"><img src="./images/logo.jpg" ></a>
                <a href="index.php">Akaza</a>
            </div>

            <div class="search">
                <input type="text" placeholder="Enter anime name">
                <div class="search_icon_box"><img src="./images/search.png" alt=""></div>
            </div>


        </div>
        
        <?php if ($user) { ?>
        <div class="nav_right"><?php echo $user; ?></div>
    <?php } else { ?>
        <div class="nav_right" onclick="openSignIn()">Sign in</div>
    <?php } ?>


    </section>
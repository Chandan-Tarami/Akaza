<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>  
    <section class="container" id="darkbox"></section>
    <section class="container" id="darkbox_menu" onclick="openBar()"></section>
    <?php include './components/register.php';?>
    <?php include './components/login.php';?>
    <?php include './components/navbar.php';?>
    <?php include './components/option.php';?>

    <section class="genre_list">

    <div class="genre1">
        <label for="">Choose Genre:</label>
        <select name=""  class="select">
            <option value="">Action</option>
            <option value="">Romantic</option>
            <option value="">Comedy</option>
            <option value="">Sport</option>
            <option value="">mystery</option>
        </select>

        <!-- <input type="submit" value="filter"> -->

        </div>
</section>

    <?php include './components/body.php';?>

    <?php include './components/footer.php';?>

    <script src="./javascript/index.js"></script>
    
</body>
</html>
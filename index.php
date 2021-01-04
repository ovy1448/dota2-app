<?php
    require "./inc/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f14220d294.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="background"></div>
    <header>
        <a href="http://localhost/dota2-app/index.php">
            <img id="home_button" src="home_button.png" alt="" >
        </a>
        <div id="user_login">
            <button id="user_button"><i class="fas fa-3x fa-user-circle"></i></button>
            <form action="" id="login_form">
                <input type="email" name="" id="" placeholder="E-Mail...">
                <input type="text" placeholder="Password...">
                <input type="text" placeholder="Password again...">
                <button type="submit">Login</button>
                <input type="button" id="register" value="Register">
                <div id="arrow" data-popper-arrow></div>
            </form>
        </div>
    </header>
    <div id="top_body">
        <div id="sidebar">
            <?php
                $sidebar = new Sidebar;
            ?>
        </div>
        <div id="search_div">
            <form action="index.php" method="GET" id="search_form">
                <button type="submit" name="search_button" id="search_button"><i class="fas fa-search fa-2x"></i></button>
                <input placeholder="Search..." type="text" name="search_input" id="search_input">
            </form> 
            <div id="search_result">
                <?php
                    $result = new Search; 
                ?> 
            </div>
        </div>
        <div id="right">
            
        </div>
    </div>
    <div id="upcoming_matches">
        <?php
            $upcoming_matches = new Matches;
        ?>
    </div>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="js/js.js"></script>
</body>
</html>


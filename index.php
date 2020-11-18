<?php
    include "./inc/autoloader.inc.php";
    include "./abstract/api.abstract.php";
    include "./abstract/search_alg.abstract.php";
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
    </header>
    <div id="main_body">
        <div id="sidebar">
            K
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
    </div>
    <script src="js/add_team.js"></script>
</body>
</html>


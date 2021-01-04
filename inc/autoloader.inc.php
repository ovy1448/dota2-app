<?php
spl_autoload_register(function ($className){
        if(file_exists('class/' . $className . ".class.php")){
            require('class/' . $className . ".class.php");
        } else {
            require('class/abstract/' . $className . ".abstract.php");
        }
    }
);

    
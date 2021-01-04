<?php

class Dbh {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "123456";
    private $db_name = "dota2-phpoop-app";

    protected function connect($sql){
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;";
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo->query($sql)->fetch();
        /* return $pdo; */
    }
}
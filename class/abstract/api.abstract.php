<?php

abstract class Api extends Dbh {
    
    public function call_api($get, $type, $search_value){
        /* $search_value = $search_value; */

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://api.pandascore.co/dota2/$get?$type=$search_value&token=pNYC60LVFy98S7O6XEDlQEZ6Nexsfz-uf6Mde4rvpCejRPqaQo0";
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);
        $result=json_decode($result, true);

        return $result;
    }

    public function get_search_text(){
        return $_GET['search_input'];
    }

    /* public function database($sql){
        return $this->connect($sql);
    } */
}
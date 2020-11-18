<?php

abstract class Api {
    
    public function call_api(){
        $search_value = $_GET['search_input'];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://api.pandascore.co/dota2/teams?search[slug]=$search_value&token=pNYC60LVFy98S7O6XEDlQEZ6Nexsfz-uf6Mde4rvpCejRPqaQo0";
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);
        $result=json_decode($result, true);

        return $result;
    }

    public function get_search_text(){
        return $_GET['search_input'];
    }
}
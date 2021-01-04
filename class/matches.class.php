<?php

class Matches extends Api {
    public function matches(){
        $array = array("natus", "og");
        foreach($array as $values){
            $result = $this->call_api("matches/upcoming", "search[slug]", $values);
            /* print_r($result); */
            foreach($result as $value){
                print_r($value['begin_at']);
                echo "<br>";
                print_r($value['name']);
                echo "<br><br>";
            };
        }
    }
}
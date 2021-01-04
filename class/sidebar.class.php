<?php

class Sidebar extends Api{
    public function sidebar(){
        $array = array("natus-vincere", "og");
        /* echo json_encode($array); */
        $sql = "SELECT * FROM users";
        $db = $this->connect($sql);
        echo $db['data']."<br>";
        print_r(json_decode($db['data'])) ;
        
        foreach($array as $values){
            $result = $this->call_api("teams", "filter[slug]", $values);
            /* print_r($result); */
            foreach($result as $value){
                echo 
                "
                <div class='sidebar_image_single'>
                    <div class='sidebar_image_div'>
                        <img src='$value[image_url]'>
                    </div>
                </div>
                ";
                
            };
            
        }
    }
}

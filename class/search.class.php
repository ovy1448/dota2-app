<?php
    class Search extends Search_Alg {
        public function search(){
            if(isset($_GET['search_button'])){
                $result = $this->search_alg($_GET['search_input']);

                foreach($result as &$value){
                    echo 
                    "<div class='search_single_result'>
                        <div class='search_image_div'>
                            <img src='$value[image_url]'>
                        </div>
                        <div class='search_single_text'>
                            <div class='search_text'>
                                $value[name]
                            </div>
                            <div class=''>
                                
                            </div>
                        </div>
                        <div class='search_add_btn_div'>
                            <button type='submit' onClick='addTeam(\"$value[slug]\")'><i class='fas fa-plus-circle fa-2x'></i></button>
                        </div>
                    </div>";
                }
                /* print_r($result); */
            }
        }
    }
?>

<?php

    abstract class Search_Alg extends Api{
        public function search_alg($get, $type, $search_value){
            $result = $this->call_api($get, $type, $search_value);
            $input = strtolower($this->get_search_text());
            $result_sort = [];

            foreach($result as $value){
                $value_lower = strtolower($value["name"]);
                similar_text($value_lower,$input, $perc);
                array_push($result_sort, $perc);
            }
            
            arsort($result_sort, SORT_NUMERIC);
            $ordered_array = array_replace($result_sort, $result);
            return $ordered_array;
        }
    }
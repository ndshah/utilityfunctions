<?php
public function generateUniqueUrl($str = "", $exists = false,$col = '', $table = ''){
    if($str!=''){
        $str = preg_replace('/\%/',' percentage',$str); 
        $str = preg_replace('/\@/',' at ',$str); 
        $str = preg_replace('/\&/',' and ',$str); 
        $str = preg_replace('/\s[\s]+/','-',$str);    // Strip off multiple spaces 
        $str = preg_replace('/[\s\W]+/','-',$str);    // Strip off spaces and non-alpha-numeric 
        $str = preg_replace('/^[\-]+/','',$str); // Strip off the starting hyphens 
        $str = preg_replace('/[\-]+$/','',$str); // // Strip off the ending hyphens 
        $str = strtolower($str); 
        $arr = explode('-',$str);
        $last = array_pop($arr);
        if($exists){                
            if(gettype($last)=='integer'){
                $last++;
            } else{
                $last = 1;
            }
            $str.= "-".$last;
        }
        if($table!='' && $col!=''){
          $result = mysql_query("select count(*) from ".$table." where `".$col."` = ".$str);
          $existing=mysql_num_rows($result);
        }
        if($existing>0){
            return generateUniqueUrl($str, true, $col, $table);
        } else{
            return $str;
        }
    }
}

// $url = generateUniqueUrl("My New Slug", false, "slug", "post");
// echo $url; // my-new-slug if there is no same key exists

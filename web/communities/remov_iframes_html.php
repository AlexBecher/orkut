<?php 
function strip_word_iframe($text) 
    { 
        $text = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|\*|--|\\\\)/"),"",$text);
        $text = str_replace("<iframe","<span",$text);
       $text = str_replace("</iframe>","</span>",$text);
        $text = str_replace("<IFRAME","<span",$text);
        $text = str_replace("autoplay","",$text);
        $text = str_replace("/logout.php","",$text);
        $text = str_replace("meta","label",$text);
       $text = str_replace("</IFRAME>","</span>",$text);
           return $text; 
    } 
?>
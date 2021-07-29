<?php

function strip_att_htmlN($string) 
    { 
	#Declaramos as palavras bloqueadas a serem verificadas
	$desenho = array( '@');
	#Será retornado o seguinte no lugar delas, caso ache alguma palavra bloqueada
	$substituir_pore = array('');
	#Rodando a string e procurando pelas palavras proibidas
	for($e=0;$e < sizeof($desenho); $e++) {
			$string = str_replace($desenho[$e], $substituir_pore[$e], $string);
			 
			
	}

	return $string;   
     }

if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

exit;
}else{


require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
  
require ('ad_lash_inj.php');
include_once ("sanitizeSql.php");
 

if (!empty($_POST['id'])&& ($_POST['title']!='') && ($_POST['img']!='') && ($_POST['description']!='')) {
$title = strip_att_htmlN(strip_tags(utf8_decode(strip_word_html($_POST['title']))));
$description = strip_att_htmlN(strip_tags(utf8_decode(strip_word_html($_POST['description']))));
$id = ((Sanitize::filter($_POST['id'])));
$cat= ((Sanitize::filter($_POST['cat'])));
$img= (utf8_decode(Sanitize::filter($_POST['img'])));
$url = <<<html
<a href="/communities/$id">
html
;
mysql_query(" INSERT INTO promoter (cat,type,ccuserid,img,description,timestamp,title,status,link,id) VALUES ('$cat','1','".CCUSERIDI."','$img','$description','".time()."','$title','2','$url','$id')");

 
 
};
  
  
}else{
exit;
}



}
?>
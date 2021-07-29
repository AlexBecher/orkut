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
 

if (!empty($_POST['cod'])&& ($_POST['note']!='')) {
$cod= ((Sanitize::filter($_POST['cod'])));
$note= ((Sanitize::filter($_POST['note'])));

$query_counter_starts_1 = mysql_query("select game_starcol_count  from game_star  where game_starcol_id_game='".mysql_real_escape_string($cod)."' and idgame_star_ccuserid='".CCUSERIDI."' limit 1 ")or die(mysql_error());
$rcon_count_starts22_fecht_1= mysql_num_rows($query_counter_starts_1);

if ($rcon_count_starts22_fecht_1 =='0'){
mysql_query(" INSERT INTO game_star (idgame_star_ccuserid,game_starcol_id_game,game_starcol_count) VALUES ('".CCUSERIDI."','$cod','$note')");

}else{

mysql_query("update game_star set game_starcol_count= '".$note."' where game_starcol_id_game='".mysql_real_escape_string($cod)."' and idgame_star_ccuserid='".CCUSERIDI."' limit 1  ");
}
 
};
  
  
}else{
exit;
}



}
?>
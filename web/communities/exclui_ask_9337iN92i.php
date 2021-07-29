<?php 

require("check_func_db.php");
      if (login_chekout()==true){
   sec_session_start();
   /*
    */

include_once ("sanitizeSql.php");


 if($_POST['cod']!='' and $_POST['cod']!=''){
$Aux_idorder = Sanitize::filter($_POST['cod']);


//verifica comunidade



//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='".$Aux_idorder."' and UserIdPro='".USERID_ID."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);

//moderador
$query17m = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='".$Aux_idorder."' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$rcont37m = mysql_num_rows($query17m);


if ($rcontqudsdsdcm!='0' or $rcont37m!='0'){

 

 //só os moderadores ou donos podem limpar lixerira
 
mysql_query("DELETE FROM  ask_forum   where ask_forum.idforum IN (select idforum from forum where IdCommunity='$Aux_idorder' and forum.idforum=ask_forum.idforum) and ask_forum.cod_delation='1'  order by ask_forum.idorder ASC  ")or die(mysql_error());
 
}; 
 };

}else{

exit;
}
?>

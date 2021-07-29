<?php 

require("check_func_db.php");
      if (login_chekout()==true){
   sec_session_start();
   /*
    */

include_once ("sanitizeSql.php");


 if($_POST['Id_m001']!='' and $_POST['idcom']!=''){
$Aux_idorder = Sanitize::filter($_POST['Id_m001']);
$rasfaf=Sanitize::filter($_POST['idcom']);
//dono da resposta
//verifica comunidade
$querycodf = mysql_query("SELECT IdCommunity FROM forum where (idforum='$rasfaf') limit 1 ")or die(mysql_error());;
$foto_del = mysql_fetch_object($querycodf);

$query17mp = mysql_query("SELECT UserId FROM ask_forum WHERE idforum='$rasfaf' and idorder='$Aux_idorder' and UserId='".USERID_ID."'  limit 1 ")or die(mysql_error());;
$rcont37mp = mysql_num_rows($query17mp);



//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='".$foto_del->IdCommunity."' and UserIdPro='".USERID_ID."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);

//moderador
$query17m = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='".$foto_del->IdCommunity."' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$rcont37m = mysql_num_rows($query17m);


if ($rcontqudsdsdcm!='0' or $rcont37m!='0' or $rcont37mp!='0'){

 
 //verifica se esta na lixeira 
$query_trash = mysql_query("SELECT cod_delation FROM ask_forum where (idforum='$rasfaf' and idorder='$Aux_idorder' and cod_delation='1') limit 1 ")or die(mysql_error());;
$row_trash= mysql_fetch_object($query_trash);
 
 if ($row_trash!='' and ($rcontqudsdsdcm!='0' or $rcont37m!='0')){
 //só os moderadores ou donos podem limpar lixerira
 mysql_query("DELETE FROM ask_forum where (idforum='$rasfaf' and idorder='$Aux_idorder' and cod_delation='1')limit 1 ");
 
 }else{
 
  //inclui na lixeira
  mysql_query("UPDATE  ask_forum SET  cod_delation='1' WHERE idforum='$rasfaf' and idorder='$Aux_idorder'  limit 1 ");
 }
}; 
 };

}else{

exit;
}
?>

<?php 
if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

exit;
}else{
require("phpmailer/class.phpmailer.php");
//notifica voc� quando um membro entra na sua comunidade.  
include_once ("sanitizeSql.php");
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

   
if($_POST['idcomm']!=''){
$aux_id_comm=Sanitize::filter($_POST['idcomm']);

//verifica se j� estou na comunidade
$querycod2323232 = mysql_query("SELECT UserId FROM list_community_user Where UserId='".USERID_ID."' and IdCommunity='$aux_id_comm' limit 1")or die(mysql_error());;
$rcount3483473 = mysql_num_rows($querycod2323232);
if ($rcount3483473=='0' or $rcount3483473==''){


mysql_query("INSERT INTO list_community_user (UserId,IdCommunity) values ('".USERID_ID."','$aux_id_comm')");

$query15 = mysql_query("SELECT FullName,UserName,UserId FROM users where UserId='".USERID_ID."' limit 1"); 
$mensagem15 = mysql_fetch_object($query15);
$msg="";
$email_send="";
$name_send="";
$name_prop="";
$ID_COMM="";
$ID_COMMOri="";

mysql_query("UPDATE community_users SET timestamp2='".time()."' where  IdCommunity='$aux_id_comm'  limit 1");



//verificar o proprietario da comunidade
$querycod = mysql_query("SELECT CommunityName,UserIdPro,IdOrder FROM community_users Where IdCommunity='$aux_id_comm' and notifications='0' limit 1")or die(mysql_error());;
      
$rcontquery2 = mysql_num_rows($querycod);
if ($rcontquery2!=''){
$mensagemcod = mysql_fetch_object($querycod);
$query154 = mysql_query("SELECT FullName,UserName,UserId FROM users where UserId='$mensagemcod->UserIdPro' limit 1"); 
 $mensagem154 = mysql_fetch_object($query154);


if ($mensagemcod->UserIdPro!=USERID_ID){ $msg="$mensagem15->FullName entrou na sua comunidade $mensagemcod->CommunityName ";}

if ($mensagemcod->UserIdPro!=USERID_ID){$ID_COMMOri=$mensagem15->UserId;$ID_COMM=$mensagem154->UserId;$name_send=$mensagem154->UserName;$name_prop=$mensagem15->UserName;};


$query3k = mysql_query("SELECT Noti4A,Noti4B FROM conf_notifica WHERE UserId='".$ID_COMM."' limit 1") or die(mysql_error());
$mensagem663k = mysql_fetch_object($query3k);               
$aux_ajjdhjjd=mysql_num_rows($query3k);

mysql_query("DELETE FROM list_community_user_invit WHERE  (UserId='".USERID_ID."' AND IdCommunity='$aux_id_comm') LIMIT 1");


if ($mensagem663k->Noti4B=='0' or $aux_ajjdhjjd==''){
//INCORPORAR ESTAS LINHA ONDE SER� REALIZADA A NOTIFICA��O
//CODIGOS DE NOTIFICA��O
/* 1 -> VIBE
 * 2 -> DEPOIMENTOS
 * 3 -> EVENTOS
 * 4 -> FOTOS
 * 5 -> VIDEOS
 * 6 -> COMUNIDADES
 * 7 -> AMIGOS
 * //CommandNoti -> IdOrders  
 * DEPOIMENTOS
 * EVENTOS
 * VIBES
 * FOTOS
 * COMUNIDADES
 * OUTROS AUX -> DIZ O QUE � ESTA NOTIFICA��O
 *///CODIGOS DE NOTIFICA��O
 //define as vari�veis para notifica��es
//$USERID_NOTIF //USU�RIO NOTIFICADO
//$USERID_ORIG //USU�RIO QUE NOTIFICOU
 //$COD_NOTI //CODIGOS DE NOTIFICA��O
//$COMMAND_NOTI //IdOrder da notifica��o
//define as vari�veis para notifica��es
 $USERID_NOTIF = "$ID_COMM";//USU�RIO NOTIFICADO
 $USERID_ORIG = "$ID_COMMOri";//USU�RIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICA��O
 $COMMAND_NOTI="$aux_id_comm";//COMMANDO DE NOTIFICA��O
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="5";//QUE TIPO DE NOTIFICA��O (COMENT�RIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5)
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD')");
};
}
//inseri no analytics das comunidades
/* codigos para analytics das comunidades
 * 1 -> entrou na comunidade
 * 2 -> saiu da comunidade
 * 
 * 
 */
//$queryVerify_comm= mysql_query("SELECT IdOrder FROM community_users Where IdCommunity='$aux_id_comm'  limit 1")or die(mysql_error());;
//$row_verify_comm= mysql_fetch_object($queryVerify_comm);
mysql_query("INSERT INTO analytics_communities (ccuserid,idcomm,timestamp,cod) values ('".CCUSERIDI."','$mensagemcod->IdOrder','".time()."','1')");


}else{

//deleta o usu�rio da lista
mysql_query("DELETE FROM list_community_user  where (UserId='".USERID_ID."' and IdCommunity='$aux_id_comm') limit 1");
//inseri no analytics das comunidades
/* codigos para analytics das comunidades
 * 1 -> entrou na comunidade
 * 2 -> saiu da comunidade
 * 
 * 
 */
$queryVerify_comm= mysql_query("SELECT IdOrder FROM community_users Where IdCommunity='$aux_id_comm'  limit 1")or die(mysql_error());;
$row_verify_comm= mysql_fetch_object($queryVerify_comm);
mysql_query("INSERT INTO analytics_communities (ccuserid,idcomm,timestamp,cod) values ('".CCUSERIDI."','$row_verify_comm->IdOrder','".time()."','2')");


}
  
};                  
   
}else{
exit;

}
};
?>

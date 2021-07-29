<?php 
include_once ("sanitizeSql.php");
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

//envia e-mail através da seleção da lista de amigos durante e após criação

if( isset( $_GET['cod'] ) ){
$aux_id=Sanitize::filter($_GET['id']);
$a = explode(',' , $_GET['cod']);

foreach( $a as $value ){
//verifica se já estou na comunidade
$querycod2323232 = mysql_query("SELECT UserId FROM list_community_user Where UserId='$value' and IdCommunity='$aux_id' limit 1")or die(mysql_error());;
$rcount3483473 = mysql_num_rows($querycod2323232);
if ($rcount3483473=='0' or $rcount3483473==''){

mysql_query("INSERT INTO list_community_user_invit (UserId,IdCommunity) values ('$value','$aux_id')");
};
//mysql_query(" INSERT INTO list_email_comm_user (UserId,IdCommunity) VALUES ('$value','$aux_id')");

//INCORPORAR ESTAS LINHA ONDE SERÁ REALIZADA A NOTIFICAÇÃO
//CODIGOS DE NOTIFICAÇÃO
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
 * OUTROS AUX -> DIZ O QUE É ESTA NOTIFICAÇÃO
 *///CODIGOS DE NOTIFICAÇÃO
 //define as variáveis para notificações
//$USERID_NOTIF //USUÁRIO NOTIFICADO
//$USERID_ORIG //USUÁRIO QUE NOTIFICOU
 //$COD_NOTI //CODIGOS DE NOTIFICAÇÃO
//$COMMAND_NOTI //IdOrder da notificação
//define as variáveis para notificações
 $USERID_NOTIF = "$value";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="$aux_id";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="5";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4,ADICIONOU ->5)
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX) VALUES ( '$USERID_NOTIF','".USERID_ID."','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD')");



}
//mysql_query(" INSERT INTO envia_email_community_list (UserId,IdCommunity,pagina,IdOrder) VALUES ('".USERID_ID."','$aux_id','1','null')");

}; 
   };

?>

<?php 
include_once ("sanitizeSql.php");
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

//envia e-mail atrav�s da sele��o da lista de amigos durante e ap�s cria��o

if( isset( $_GET['cod'] ) ){
$aux_id=Sanitize::filter($_GET['id']);
$a = explode(',' , $_GET['cod']);

foreach( $a as $value ){
//verifica se j� estou na comunidade
$querycod2323232 = mysql_query("SELECT UserId FROM list_community_user Where UserId='$value' and IdCommunity='$aux_id' limit 1")or die(mysql_error());;
$rcount3483473 = mysql_num_rows($querycod2323232);
if ($rcount3483473=='0' or $rcount3483473==''){

mysql_query("INSERT INTO list_community_user_invit (UserId,IdCommunity) values ('$value','$aux_id')");
};
//mysql_query(" INSERT INTO list_email_comm_user (UserId,IdCommunity) VALUES ('$value','$aux_id')");

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
 $USERID_NOTIF = "$value";//USU�RIO NOTIFICADO
 $USERID_ORIG = "";//USU�RIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICA��O
 $COMMAND_NOTI="$aux_id";//COMMANDO DE NOTIFICA��O
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="5";//QUE TIPO DE NOTIFICA��O (COMENT�RIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4,ADICIONOU ->5)
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX) VALUES ( '$USERID_NOTIF','".USERID_ID."','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD')");



}
//mysql_query(" INSERT INTO envia_email_community_list (UserId,IdCommunity,pagina,IdOrder) VALUES ('".USERID_ID."','$aux_id','1','null')");

}; 
   };

?>

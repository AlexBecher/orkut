<?php 
require("check_func_db.php");
 sec_session_start();
 
include_once ("sanitizeSql.php");
if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserPassword']) && (login_chekout()==true)) {
  sec_session_start();
  
if(!empty( $_POST['idcomm'])){
 
$aux_id=Sanitize::filter($_POST['idcomm']);
$value=Sanitize::filter($_POST['id']);
//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='$aux_id' and UserIdPro='".USERID_ID."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);

//moderador
$query17m = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$aux_id' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$rcont37m = mysql_num_rows($query17m);


if ($rcontqudsdsdcm!='' or $rcont37m!=''){
//verifica se j� est� banido
//usu�rio banido

    
    
    
$query17b = mysql_query("SELECT UserId FROM ban_user_commu  where IdCommunity='$aux_id' and UserId='".$value."' limit 1 ")or die(mysql_error());;
$rcont37b = mysql_num_rows($query17b);

if ($rcont37b==''){
    
//verifica se tenho pedido para aprova��o
    //verifica se j� estou na comunidade
    $querycod2323232 = mysql_query("SELECT ccuserid FROM communitie_list_join_request Where ccuserid='".$value."' and IdCommunity='$aux_id' limit 1")or die(mysql_error());;
    $rcount3483473 = mysql_num_rows($querycod2323232);
    if ($rcount3483473 >'0'){
        
        mysql_query("INSERT INTO  list_community_user (UserId,IdCommunity) VALUES ('$value','$aux_id')");
        mysql_query("DELETE  FROM communitie_list_join_request Where ccuserid='".$value."' and IdCommunity='$aux_id' limit 1");
        
        
        //verifica se j� estou na comunidade
       
        $querycod2323232 = mysql_query("SELECT UserId FROM list_community_user Where UserId='$value' and IdCommunity='$aux_id' limit 1")or die(mysql_error());;
        $rcount3483473 = mysql_num_rows($querycod2323232);
    
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
        
        
        
    
        
        
    }else{
    
    
mysql_query("DELETE  FROM list_community_user where UserId='$value' and IdCommunity='$aux_id' limit 1");
mysql_query(" INSERT INTO  ban_user_commu (UserId,IdCommunity) VALUES ('$value','$aux_id')");

    };
}else{
mysql_query("DELETE  FROM ban_user_commu where UserId='$value' and IdCommunity='$aux_id' limit 1");
mysql_query("INSERT INTO  list_community_user (UserId,IdCommunity) VALUES ('$value','$aux_id')");


}
};


}; 
}else{

exit;
}

?>

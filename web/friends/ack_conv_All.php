<?php 
require ("check_func_db.php");
 
 if (login_chekout()==false){
  sec_session_start();
 include_once ("sanitizeSql.php");
   
define ('OFFEMAIL',false);  
include("date.php");
 

                $UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
               
               
                
               

 mysql_query("DELETE  FROM notificacao_user  where  UserId='$UserId_Cokie'  and CodNoti='7' limit 50 ")or die(mysql_error());  
 
//verifica pedidos pendentes
 $query5 = mysql_query("SELECT UsConv,UsDest,UsAck,Idorder FROM usercomp  where (UsDest='$UserId_Cokie' and UsConv<>'' and UsAck='') order by Idorder DESC limit 50");
 $countPending = mysql_num_rows($query5);
 
 if ($countPending!='0'){

 while($mensagem5 = mysql_fetch_object($query5)){
 $UserConv_cod=$mensagem5->UsConv;
  if ($UserId_Cokie!='' and $UserConv_cod!='' and $mensagem5->Idorder!='0'){
  
 
 $UserAck_cod=$mensagem5->UsAck;
 //funcção para atualizar dados
     $query20=mysql_query("SELECT UserName,UserId,UserEmail,ccuserid FROM users WHERE UserId ='$UserConv_cod' and UserId<>'' limit 1");
	 $countPendingT = mysql_num_rows($query20);
	 if ($countPendingT!='0'){
     $mensagem20 = mysql_fetch_object($query20);
     $UserDest_nome=$mensagem20->UserName;
     $UserDest_email=$mensagem20->UserEmail;
      $UserDest_Id=$mensagem20->UserId;
      
     
        mysql_query("UPDATE usercomp SET UsAck='$UserId_Cokie'  where (Idorder='$mensagem5->Idorder' and UsAck='')limit 1 "); 
        $CodAtual="aceitou o pedido de amizade de";//atualização
         $MsgAtual=" "; //atualização
         $MSG="$UserName_cokie aceitou seu pedido de amizade";

    //inseri usuário na lista de amigos
   	$userid = CCUSERIDI;
	//$sql2 = ("select ccuserid from users where UserId='$UserId_conv' limit 1");
	//$query2 = mysql_query($sql2);
	//$res2 = mysql_fetch_array($query2);
	//$userid2 = $res2[0];
	$query3kdd = mysql_query("SELECT Idme FROM  friends_list  WHERE (Idme='$userid'  and Idfriend='$mensagem20->ccuserid') or (Idfriend='$userid'  and Idme='$mensagem20->ccuserid')  limit 1") or die(mysql_error());
    $aux_34uerir=mysql_num_rows($query3kdd);
    if (($aux_34uerir=='' or $aux_34uerir=='0')){
    mysql_query("INSERT friends_list (Idme,Idfriend)VALUES ('$userid','$mensagem20->ccuserid')");//minha lista
    mysql_query("INSERT friends_list (Idme,Idfriend)VALUES ('$mensagem20->ccuserid','$userid')");//lista de meu amigo
    //inseri usuário na lista de amigos
    };

    
    
$query3k = mysql_query("SELECT Noti5A,Noti5B FROM conf_notifica WHERE UserId='".$UserId_conv."' limit 1") or die(mysql_error());
$mensagem663k = mysql_fetch_object($query3k);               
$aux_ajjdhjjd=mysql_num_rows($query3k);

if ($mensagem663k->Noti5B=='0' or $aux_ajjdhjjd==''){
         
         
         
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
 $USERID_NOTIF = "$UserId_conv";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "$UserId_Cokie";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "7";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//codigo do post
 $nooso="no";//NO READ
 $AUX_COD="6";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5,ACEITOU->6)
 $CODAUX_9993="";//CHAMA UMA IDORDER ESPECÍFICA
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX,CODAUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD','$CODAUX_9993')");
};      
if ($aux_ajjdhjjd!='' and $mensagem663k->Noti5A=='0' && OFFEMAIL==true){

 //require_once 'send_atualiza.php';
         //  require_once 'envia_mail_ack_conv.php';
//fim de função para atualizar dados
};
	 }; };
  };
 };
}; 
?>

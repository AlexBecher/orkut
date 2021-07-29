<?

require("check_func_db.php");

 if (login_chekout()==true){
     if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){
         echo "Você não tem permissão para visualizar esse conteúdo! :p";
     }else{

     
     sec_session_start();
 include_once ("sanitizeSql.php");
  
define ('OFFEMAIL',true);    
 
include("date.php");
 

                $UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
               
  
  
  $fotothumb=$_SESSION['UserFotoPerfil'];
$option = isset($_POST['Id_m']) ? $_POST['Id_m'] : false;

if ($option) {
    $id_user_add = Sanitize::filter($_POST['Id_m']);
    

//Confirma convite do usuario
//verifica usuário bloqueado
	$userid = CCUSERIDI;
     $query5=mysql_query("SELECT UserEmail,UserName,UserId,token_senha,UserGen,ccuserid FROM users WHERE UserId ='".mysql_real_escape_string($id_user_add)."' limit 1");
	 $mensagem5 = mysql_fetch_object($query5);
     $UserDest_cod=$mensagem5->UserEmail;
     $UserDest_nome=$mensagem5->UserName;
     $UserDest_Id=$mensagem5->UserId;
     $UserDest_token=$mensagem5->token_senha;
      $userid2 = $mensagem5->ccuserid;
      $UserDestGen=$mensagem5->UserGen;
	
//verifica usuário bloqueado
$query848545 = mysql_query("SELECT block FROM friends_list WHERE (Idme='$userid' and Idfriend='$userid2' and block='2') or (Idfriend='$userid' and Idme='$userid2' and block='2') limit 1") or die(mysql_error());
$rTestar93454i = mysql_num_rows($query848545);

               //usuário na lista negra colocado por mim
               $query_black_list = mysql_query("SELECT Idfriend FROM black_list_friends  Where (Idme='$userid2' and  Idfriend='".CCUSERIDI."')or (Idfriend='$userid2' and  Idme='".CCUSERIDI."') Order by idorder DESC   limit 1 ");
               $row_black_list = mysql_num_rows($query_black_list);
if ($_POST['Id_m']!='' && $rTestar93454i=='0' && $row_black_list=='0'){

	
	
      
if($UserDestGen=='1'){

$pessoa="amiga";
}else{

$pessoa="amigo";
}
     $CodAtual="convidou";
     $MsgAtual="para fazer parte de sua rede de amigos no Orkuti. ";
     
      
      $Assunto="Pedido de amizade!";
      $MSG="$UserName_cokie  está  adicionando você como $pessoa no Orkuti. ";
//mysql_query(" INSERT INTO user_atual (timestamp,ccuserid,UserSalt,UserIdSalt,UserFotoSalt,UserSaltData,UserSaltPublic,CodAtul,Aux1) VALUES ( '".time()."','".CCUSERIDI."','$UserName_cokie','$UserId_Cokie','$UserFotoPerfil_Cokie','$datacompleta','publico','$CodAtual','$UserDest_Id')");
  
$query3k = mysql_query("SELECT Noti5A,Noti5B FROM conf_notifica WHERE UserId='".$UserDest_Id."' limit 1") or die(mysql_error());
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
 $USERID_NOTIF = "$UserDest_Id";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "$UserId_Cokie";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "7";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//codigo do post
 $nooso="no";//NO READ
 $AUX_COD="5";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5,ACEITOU->6)
 $CODAUX_9993="";//CHAMA UMA IDORDER ESPECÍFICA
//verifica se já tem convite para o membro convidado
   
   mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX,CODAUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD','$CODAUX_9993')");
  
};

$queryconv=mysql_query("SELECT UsConv FROM usercomp WHERE (UsConv ='$UserId_Cokie' and UsDest='$id_user_add' and UsAck='') limit 1 ");
$Count_conv = mysql_num_rows($queryconv);
if ($Count_conv=='0'){
 
   mysql_query("INSERT usercomp(UsConv,UsDest) VALUES ( '$UserId_Cokie','$id_user_add')");
    

};
  
};
    ;





}else{
    
    //  header("Location: /MainComSet/");
    // exit();
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    header("Location: /");
    exit();
}
     }
};
?>
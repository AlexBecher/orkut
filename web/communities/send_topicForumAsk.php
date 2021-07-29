<?php
if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

exit;
}else{
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
//INSERIR NOS ARQUIVOS COM POST E GET 
   $tokepass7 = "_ui";//nome no coookie
   $coockie_token_pass=$_COOKIE["$tokepass7"];//carrega cookie
   $namepage="comunity_load.php";
   $pagename="".sha1($namepage)."";
   
   $namepage2="coment_topic_forumN.php";
   $pagename2="".sha1($namepage2)."";
   
  
require ('ad_lash_inj.php');
include_once ("sanitizeSql.php");
 

$DISABLE_YOUTUBE=1;
function getTimeStamp() {
	return time();
}
$aux_0304=time();
$timout_e9="10000";
if (($aux_0304!='')){


include('date.php');
require ('guardian_tags.php');
sec_session_start();
$suiie='1';
$foto_img_salt=$_SESSION['foto_post_perfil94495495'];
                $UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
                 $UserMsg_Cokie =$_SESSION ['UserMsg'];
              
                


$idEvents=Sanitize::filter($_POST['idEventosUser']);
$IdOrderEventos=Sanitize::filter($_POST['IdOrderEventos']);
$id_post_enquet=Sanitize::filter($_POST['jjsioskkskaenque']);
$titlo_forum=sanitize($_POST['ti_03902oedue']);
$fotothumb=Sanitize::filter($_POST['foto39ur3r6i2ryy4']);

  
 //insert msgpost
if ($foto_img_salt!='' or  !empty($_POST['form_data'])){

		//não grava no post
 
$texto = ($_POST['form_data']);
  // match protocol://address/path/
   // $texto = ereg_replace("[a-zA-Z]+://([.]?[a-zA-Z0-9_/-])*", "<a href=\"\\0\" target="._blank.">\\0</a>", $texto);

  
    // match www.something
    
 $str =($_POST['form_data']);
 
//Regex
//$regex = "/youtu(be.com|.b)(\/v\/|\/watch\\?v=|e\/)(.{11})/";
 
//UPDATE - 22-11-2011
$regex = "#youtu(be.com|.b)(/embed/|/v/|/watch\\?v=|e/|/watch(.+)v=)(.{11})#";
 
preg_match_all($regex , $str, $matches);
 /*
if(!empty($matches[4]))
{
    $codigos_unicos = array();
    $quantidade_videos = count($matches[4]);
    foreach($matches[4] as $code)
    {
        if(!in_array($code,$codigos_unicos))
            array_push($codigos_unicos,$code);
 
    }
   

$video="https://www.youtube.com/v/$codigos_unicos[0]";    
$video7 ="https://www.youtube.com/watch?v=$codigos_unicos[0]";
require ('YouTubeClass.php');

$dados=new YouTube("".$video7."");
$dados_video=$dados->GetTags();
 $title=utf8_decode($dados_video['title']);
 $infor=utf8_decode($dados_video['description']);

$link_pp="";

}else{
    $aux_video="";
    $video="";
}
*/
if($video7){
$link_video_001="https://img.youtube.com/vi/".$codigos_unicos[0]."/0.jpg";


$url  = $link_video_001;
$imagem_001=md5(uniqid(time())) . ".jpg";
   $path = 'Videos_Screen_Users/'.$imagem_001.'';
 
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
   $data = curl_exec($ch);
 
   curl_close($ch);
 if ($data!=''){ 
   file_put_contents($path, $data);
}else{
$path="Videos_Screen_Users/old-338zss61_640.png";
}   
    
}else{
$link_video_001='';
}
  
    // match www.something
    
  

   // match www.something
  
//fim do codigo para inserir video no post
$querycod8383 = mysql_query("SELECT IdCommunity FROM forum Where idforum='$IdOrderEventos' limit 1")or die(mysql_error());
$mensagem33jweje = mysql_fetch_object($querycod8383);

mysql_query("UPDATE community_users SET timestamp2='".time()."' where  IdCommunity='$mensagem33jweje->IdCommunity'  limit 1");


$UserMsg=sanitize(utf8_decode($texto));

$usddjrespojdjask1=$_POST['uiw_927_521gsXX1'];
$usddjrespojdjask2=$_POST['uiw_927_521gsXX2'];
$usddjrespojdjask3=$_POST['uiw_927_521gsXX3'];  
//data para respostas das respostas dos tópcios 
/* 1° id_do forum 
 * 2° id_post
 * 3° ccuserid do dono da respostas
 * 
 */
//verifica postagens repetidas
 include('app/crip/cod_baseVal.php');
$aux_post_session =add_cod_transfer("$IdOrderEventos.$UserId_Cokie.$UserName_cokie.$fotothumb.$video.$path.$foto_img_salt.$UserMsg.$usddjrespojdjask3.$usddjrespojdjask2"); 
//verifica se tem sessão
if( ! isset( $_SESSION[ 'flod_detect_029' ] ) ) {
  session_register('flod_detect_029');
  $_SESSION[ 'flod_detect_029' ] = '299383';

}
if ($_SESSION[ 'flod_detect_029' ] <> $aux_post_session && $_SESSION[ 'flod_detect_029' ]<>''){
if (!empty($usddjrespojdjask1) && !empty($usddjrespojdjask2) && !empty($usddjrespojdjask3)){





 mysql_query(" INSERT INTO ask_forum (idforum,UserId,UserName,UserFotoThumb,timestamp,LinkVideo,PathVideo,ImgPost,ask_forum,ask_user_ask,id_ask) VALUES ('$IdOrderEventos','$UserId_Cokie','$UserName_cokie','$fotothumb','$aux_0304','$video','$path','$foto_img_salt','$UserMsg','$usddjrespojdjask3','$usddjrespojdjask2')");
//replica de respostas
 mysql_query("UPDATE forum SET lastactivi='$aux_0304' where  idforum='$IdOrderEventos' ");
  
//notifica o dono da conversa
$query55d3 = mysql_query("SELECT UserId FROM users where  ccuserid='$usddjrespojdjask3' limit 1")or die(mysql_error());
    $rcont37 = mysql_num_rows($query55d3);
if ($rcont37!='0'){
$mensagem = mysql_fetch_object($query55d3);
if ($mensagem->UserId!=$UserId_Cokie){
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
 $USERID_NOTIF = "$mensagem->UserId";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "$UserId_Cokie";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="$IdOrderEventos";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="8";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5,FORUM->6,ASK_FORUM->8)
 $CODAUX_9993="$usddjrespojdjask2";//CHAMA UMA IDORDER ESPECÍFICA
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX,CODAUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD','$CODAUX_9993')");
};
}; 
 
 

session_register('foto_post_perfil94495495'); 
$_SESSION['foto_post_perfil94495495']='';

$d[]=sha1(time());
       echo json_encode($d);
       

  
  
  
}else{
mysql_query(" INSERT INTO ask_forum (idforum,UserId,UserName,UserFotoThumb,timestamp,LinkVideo,PathVideo,ImgPost,ask_forum) VALUES ('$IdOrderEventos','$UserId_Cokie','$UserName_cokie','$fotothumb','$aux_0304','$video','$path','$foto_img_salt','$UserMsg')");

//up no topico
 mysql_query("UPDATE forum SET lastactivi='$aux_0304' where  idforum='$IdOrderEventos' ");
 
//envia notificações para o dono das comunidades que participaram do topico
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='$mensagem33jweje->IdCommunity' and UserIdPro<>'$UserId_Cokie' and notifications='0'  limit 1 ")or die(mysql_error());;
$rcont37b8938ye38r = mysql_num_rows($querycod);
if ($rcont37b8938ye38r!='0'){
$mensagemsdds = mysql_fetch_object($querycod);
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
 $USERID_NOTIF = "$mensagemsdds->UserIdPro";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "$UserId_Cokie";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="$IdOrderEventos";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="8";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5,FORUM->6,ASK_FORUM->8)
 $CODAUX_9993="$aux_0304";//CHAMA UMA IDORDER ESPECÍFICA
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX,CODAUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD','$CODAUX_9993')");

};
 
 
 // envia notificação para todos os membros da commm
//verifica conversas no forum

$query55d3 = mysql_query("SELECT UserId,COUNT(UserId) AS quant FROM ask_forum where  idforum='$IdOrderEventos' GROUP BY UserId ORDER BY quant DESC limit 100 ")or die(mysql_error());
    $rcont37 = mysql_num_rows($query55d3);
if ($rcont37!='0'){
while ($mensagem = mysql_fetch_object($query55d3)){
$query17 = mysql_query("SELECT UserId FROM list_community_user  where   IdCommunity='$mensagem33jweje->IdCommunity' and UserId='".$mensagem->UserId."' and ($aux_0304 - lastactivity < '86400') and notifications='0' limit 1 ")or die(mysql_error());;
$rcont3733 = mysql_num_rows($query17);


//usuário banido
$query17b = mysql_query("SELECT UserId FROM ban_user_commu  where IdCommunity='$mensagem33jweje->IdCommunity' and UserId='".$mensagem->UserId."' limit 1 ")or die(mysql_error());;
$rcont37b = mysql_num_rows($query17b);



//envia notificações para usuário que participaram dos topicos
if (($mensagem->UserId!=$UserId_Cokie) && ($rcont3733!='0' && $rcont37b=='0')){
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
 $USERID_NOTIF = "$mensagem->UserId";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "$UserId_Cokie";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="$IdOrderEventos";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="8";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5,FORUM->6,ASK_FORUM->8)
 $CODAUX_9993="$aux_0304";//CHAMA UMA IDORDER ESPECÍFICA
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX,CODAUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD','$CODAUX_9993')");

};

};

}; 
 

session_register('foto_post_perfil94495495'); 
$_SESSION['foto_post_perfil94495495']='';

$d[]=sha1(time());
       echo json_encode($d);
};
//antgi flood
 session_register('flod_detect_029');
 $_SESSION[ 'flod_detect_029' ] = $aux_post_session;
}else{

exit;
}       
};//

//NO FIM DA EXECUÇÃO COLOQUE ESTA LINHA
   $domain =$_SERVER['HTTP_HOST'];
   $tokepass7 = "_ui";//nome no coookie
   setcookie("$tokepass7", "" ,time() -3600,"/",$domain,false, true);//EXCLUE COOKIE
  
   };

}else{
exit;
}
}
?>
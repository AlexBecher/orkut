<?php
header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o


require("check_func_db.php");
header("Cache-Control: private, max-age=31536000, pre-check=31536000");
header("Last-Modified: ".gmdate("D, d M Y H:i:s", time() - 3600*24*365)." GMT");
header('Expires: '.gmdate("D, d M Y H:i:s", time() + 3600*1).' GMT');
include("recuper_videos_youtube.php");
//error_reporting(E_ALL);

/* Habilita a exibição de erros */
//ini_set("display_errors", 1);


//pega IP do client
function get_client_ip() {
     $ipaddress = '';
     if ($_SERVER['HTTP_CLIENT_IP'])
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
     else if($_SERVER['HTTP_X_FORWARDED_FOR'])
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
     else if($_SERVER['HTTP_X_FORWARDED'])
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
     else if($_SERVER['HTTP_FORWARDED_FOR'])
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
     else if($_SERVER['HTTP_FORWARDED'])
         $ipaddress = $_SERVER['HTTP_FORWARDED'];
     else if($_SERVER['REMOTE_ADDR'])
         $ipaddress = $_SERVER['REMOTE_ADDR'];
     else
         $ipaddress = 'UNKNOWN';

    $ip_first=explode( ',' , $ipaddress );

     return $ip_first[0];
}
 //pega IP do client  

include_once ("sanitizeSql.php");
 
$url_teste_default ="communities";

 if (login_chekout()==true){
 

 
     
     function anti_injection_n($sql)
     {
         
         $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$sql);
         $sql = trim($sql);
         $sql = strip_tags($sql);
         $sql = addslashes($sql);
         return $sql;
     }
     
     

$useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;

include("date.php");
include("lapse.php");
sec_session_start();
session_register('upllsi9939ii');
$_SESSION['upllsi9939ii']=time();

 session_register('qtd_aux');
 session_register('qtd_auxH');
   session_register('inicio_aux');
   session_register('inicio_auxH');
   session_register('qtd_aux2');
  session_register('inicio_aux2');
   session_register('inicio_aux3');
   session_register('inicio_aux_biblia');
    session_register('inicio_aux_teste');
    session_register('inicio_auxFotos');
     session_register('aux_atua_003');
     session_register('inicio_aux_atua');
          $_SESSION['qtd_aux2']=10;
   $_SESSION['inicio_aux2']=0;
    $_SESSION['inicio_aux3']=0;
    $_SESSION['inicio_aux_biblia']=0;
     $_SESSION['inicio_aux_teste']=0;
   $_SESSION['qtd_aux']=10;
   $_SESSION['inicio_aux']=0;
$_SESSION['inicio_auxH']=0;
      $_SESSION['inicio_auxFotos']=0;
   $_SESSION['aux_atua_003']=0;
   $inicio_aux=$_SESSION['inicio_aux'];
    $qtd_aux=$_SESSION['qtd_aux'];
    $inicio_aux2=$_SESSION['inicio_aux2'];
     $inicio_aux3=$_SESSION['inicio_aux3'];
     $inicio_auxB= $_SESSION['inicio_aux_biblia'];
     $inicio_auxT= $_SESSION['inicio_aux_teste'];
    $qtd_aux2=$_SESSION['qtd_aux2'];
    session_register('ContPost');
 $_SESSION['ContPost']="";
    
                                                     $UserName_cokie = $_SESSION['UserName'];
                                                     $UserId_Cokie = $_SESSION ['UserId'];
                                                    $UserName = $_SESSION['UserName'];
                                                     $UserId = $_SESSION ['UserId'];
                                                      $UserFotoPerfil_Cokie = $_SESSION ['UserFotoPerfil'];
                                                     $UserEmail=$_SESSION ['UserEmail'];

//edit topic

 
 if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

//exit;
}else{
if (!empty($_POST['form_data'])&& ($_POST['id_ff']!='') && !empty($_POST['edit_topic']) && $_POST['title']!='') {
require ('ad_lash_inj.php');
require ('guardian_tags.php');


//edita topico

$IdOrderEventos=Sanitize::filter($_POST['id_ff']);
$auuwdw98r8usduuue777 =$IdOrderEventos;
//sou dono da comunidade
$quey_my_comm = mysql_query("SELECT UserIdPro FROM community_users  where (IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserIdPro='".USERID_ID."')  limit 1")or die(mysql_error());;
$row_my_com88 = mysql_num_rows($quey_my_comm);//sou dono 
//moderador
$query_moderador_002 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$row_moderador03= mysql_num_rows($query_moderador_002);
// variavel para liberar topicos e interações	
 
if ($row_my_com88!='' || $row_moderador03!='' ){
$texto = ($_POST['form_data']);
 $foto_img_salt="";  
//detecta e incorpora videos
function autolink_video($string) {
 $hashtags= FALSE;  
 //"/^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/"
    preg_match_all("/http[s]?:\\/\\/www\\.youtube\\.com\\/watch\\?v=(\\w+)/", strip_tags($string), $matches);  
    if ($matches) {
        $hashtagsArray = array_count_values($matches[0]);
        $hashtags = array_keys($hashtagsArray);
    
    
for($e=0;$e < sizeof($hashtagsArray); $e++) {
$link=$hashtags[$e]; 
 $substituir_pore = '<iframe width="500" height="315" src="'.$link.'" frameborder="0" allowfullscreen></iframe>';;
 			$string = str_replace($hashtags[$e], $substituir_pore, $string);
$string = str_replace("youtube.com/watch?v=","youtube.com/embed/",$string);
$string = str_replace("youtube.com/v/","youtube.com/embed/",$string);
$string = str_replace("youtube-nocookie.com/v/","youtube.com/embed/",$string);
 			
			
	}
    };   
    return $string;
}
//detecta e incorpora videos 
 
$UserMsg=autolink_video(sanitize(($texto)));
//verifica postagens repetidas
 include('app/crip/cod_baseVal.php');
$aux_post_session =add_cod_transfer("$fotothumb.$UserMsg."); 
//verifica se tem sessão
if( ! isset( $_SESSION[ 'flod_detect_029' ] ) ) {
  session_register('flod_detect_029');
  $_SESSION[ 'flod_detect_029' ] = '299383';

}
if ($_SESSION[ 'flod_detect_029' ] <> $aux_post_session && $_SESSION[ 'flod_detect_029' ]<>''){

$titlo_forum=(mysql_real_escape_string(($_POST['title'])));

$cod_forum = Sanitize::filter($_POST['edit_topic']);
mysql_query("UPDATE community_users SET timestamp2='".time()."' where  IdCommunity='$IdOrderEventos'  limit 1");
$aux_0304 = time();
//mysql_query(" INSERT INTO forum (UserId,IdCommunity,nometopico,UserName,UserFotoThumb,timestamp,LinkVideo,PathVideo,ImgPost,ask_forum,lastactivi) VALUES ('$UserId_Cokie','$IdOrderEventos','$titlo_forum','$UserName_cokie','$fotothumb','$aux_0304','','','','$UserMsg','$aux_0304')");
mysql_query("UPDATE forum SET nometopico='".$titlo_forum."',ask_forum='$UserMsg'  where  IdCommunity='$IdOrderEventos' and idforum='$cod_forum'  limit 1");

// envia notificação para todos os membros da commm

$d[]=sha1(time());
      // echo json_encode($d);

//antgi flood
 session_register('flod_detect_029');
 $_SESSION[ 'flod_detect_029' ] = $aux_post_session;
}else{

//exit;
}
};       


//edita tópico
};
}                                                     
                                                     
//edit topic                                                     
                                           
    //new topic
 
 if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

//exit;
}else{
if (!empty($_POST['form_data'])&& ($_POST['id_ff']!='') && !empty($_POST['new'])&& $_POST['new']=='2883776' && $_POST['title']!='') {
require ('ad_lash_inj.php');
require ('guardian_tags.php');


//novo tópico 

$IdOrderEventos=Sanitize::filter($_POST['id_ff']);
$auuwdw98r8usduuue777 =$IdOrderEventos;
//sou dono da comunidade
$quey_my_comm = mysql_query("SELECT UserIdPro FROM community_users  where (IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserIdPro='".USERID_ID."')  limit 1")or die(mysql_error());;
$row_my_com88 = mysql_num_rows($quey_my_comm);//sou dono 
//sou membro
$query_member8383 = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
$row_members_003= mysql_num_rows($query_member8383);
//usuário banido
$query_baned_02 = mysql_query("SELECT UserId FROM ban_user_commu  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
$row_baned_003 = mysql_num_rows($query_baned_02);
//moderador
$query_moderador_002 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$row_moderador03= mysql_num_rows($query_moderador_002);
//topico liberado
$query_liberadoTopic = mysql_query("SELECT topic_open FROM community_users  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and topic_open<>'0'  limit 1 ")or die(mysql_error());;
$row_topicoNew= mysql_num_rows($query_liberadoTopic);
// variavel para liberar topicos e interações	


if ($row_my_com88!='' || ($row_members_003!='' || $row_moderador03!='' || $row_topicoNew!='' && ($row_members_003==''))){
$texto = ($_POST['form_data']);
 $foto_img_salt="";  
//detecta e incorpora videos
function autolink_video($string) {
 $hashtags= FALSE;  
 //"/^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/"
    preg_match_all("/http[s]?:\\/\\/www\\.youtube\\.com\\/watch\\?v=(\\w+)/", strip_tags($string), $matches);  
    if ($matches) {
        $hashtagsArray = array_count_values($matches[0]);
        $hashtags = array_keys($hashtagsArray);
    
    
for($e=0;$e < sizeof($hashtagsArray); $e++) {
$link=$hashtags[$e]; 
 $substituir_pore = '<iframe width="500" height="315" src="'.$link.'" frameborder="0" allowfullscreen></iframe>';;
 			$string = str_replace($hashtags[$e], $substituir_pore, $string);
$string = str_replace("youtube.com/watch?v=","youtube.com/embed/",$string);
$string = str_replace("youtube.com/v/","youtube.com/embed/",$string);
$string = str_replace("youtube-nocookie.com/v/","youtube.com/embed/",$string);
 			
			
	}
    };   
    return $string;
}
//detecta e incorpora videos 
 
$UserMsg=autolink_video(sanitize(($texto)));
//verifica postagens repetidas
 include('app/crip/cod_baseVal.php');
$aux_post_session =add_cod_transfer("$fotothumb.$UserMsg."); 
//verifica se tem sessão
if( ! isset( $_SESSION[ 'flod_detect_029' ] ) ) {
  session_register('flod_detect_029');
  $_SESSION[ 'flod_detect_029' ] = '299383';

}
if ($_SESSION[ 'flod_detect_029' ] <> $aux_post_session && $_SESSION[ 'flod_detect_029' ]<>''){

$titlo_forum=(mysql_real_escape_string(($_POST['title'])));

mysql_query("UPDATE community_users SET timestamp2='".time()."' where  IdCommunity='$IdOrderEventos'  limit 1");
$aux_0304 = time();
mysql_query(" INSERT INTO forum (UserId,IdCommunity,nometopico,UserName,UserFotoThumb,timestamp,LinkVideo,PathVideo,ImgPost,ask_forum,lastactivi) VALUES ('$UserId_Cokie','$IdOrderEventos','$titlo_forum','$UserName_cokie','$fotothumb','$aux_0304','','','','$UserMsg','$aux_0304')");
// envia notificação para todos os membros da commm
if ($row_my_com88!=''){ //verifica se sou dono da comunidade
// envia notificação para o dono da comunidade
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
 $USERID_NOTIF = "$mensagem33->UserIdPro";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "$UserId_Cokie";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="$IdOrderEventos";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="6";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5,FORUM->6)
 $CODAUX_9993="$titlo_forum";//CHAMA UMA IDORDER ESPECÍFICA
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX,CODAUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD','$CODAUX_9993')");
};
$d[]=sha1(time());
      // echo json_encode($d);

//antgi flood
 session_register('flod_detect_029');
 $_SESSION[ 'flod_detect_029' ] = $aux_post_session;
}else{

//exit;
}
};       


//novo tópico
};
}
 //new topic                                                            
 
 include_once ("transl8uu3j.php");
// carrega algumas variveis  
$query = mysql_query("SELECT FullName,Noti_profile,ccuserid,UserFotoThumb,UserPapelParede,UserNasc,UserId,UserCidade,UserFrase FROM users where ccuserid='".CCUSERIDI."' limit 1 ");
$mensagem433 = mysql_fetch_object($query);
$FullName=$mensagem433->FullName;  
$Noti_profile=$mensagem433->Noti_profile; 
$UserCidade=($mensagem433->UserCidade);
$useridc=($mensagem433->ccuserid);
$UserFotoThumb_Cokie=($mensagem433->UserFotoThumb);
$audii=$mensagem433->UserPapelParede;
   $user_frase=$mensagem433->UserFrase;
$datanascimento = implode("/", array_reverse(explode("-", $mensagem433->UserNasc)));;
$data_nasc = explode("/", $datanascimento);
$data = date("d/m/Y");
$data = explode("/", $data);
$data_mniver=$data_nasc[1];
$data_dniver=$data_nasc[0];
$date_mniver=$data[1];
$date_dniver=$data[0];
$aux_03883udhbee="";
 if ( $audii =='') {
$papel_card_user="cropImg.php?arquivo=bg_userthumb/bg_thumb_user.jpg&largura=175&altura=250"; }else{ $papel_card_user="cropImg.php?arquivo=bg_userthumb/$audii&largura=175&altura=250";}
  //carrega algumas variaveis
   
function getTimeStamp() {
	return time();
}
$aux_oomann="";


         

$useragent = $_SERVER['HTTP_USER_AGENT'];
 
  if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'IE';
  } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Opera';
  } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Firefox';
  } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Chrome';
  } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Safari';
  } else {
    // browser not recognized!
    $browser_version = 0;
    $browser= 'other';
  }
 
  if ($browser == 'Firefox' and $browser_version < '35' or $browser == 'Firefox' and $browser_version < '3.0'){
    header("Location: ../browser-inf.php?err=Could not initiate a safe session (ini_set)");
  }
  if ($browser == 'IE'){
  header("Location: ../browser-inf.php?err=Could not initiate a safe session (ini_set)");
  }


  function ocultaTexto($texto,$limite) {
if (strlen($texto) <= $limite){

return $texto ;

}

    $partes = str_split($texto, $limite);
    $saida  = <<<HTML
<text>%s..</text>

HTML;
    printf($saida, array_shift($partes), implode($partes));
}


$date_diario=date("m");
$Bro_diar="$browser $browser_version";
$dia_i=date('d');
$ano_i=date('y');

// mysql_query(" INSERT INTO analytics (acesso,UserId,ano,mes,dia,UserName,Data,Browser,Mode,IP) VALUES ('web','$UserId_Cokie','$ano_i','$date_diario','$dia_i','$UserName_cokie','$datacompleta','$Bro_diar','web','$vIP')");
//atualiza ultima tividade

//atualiza meu status no chat
mysql_query("update users set users.lastactivity = '".time()."' where users.ccuserid = '".$useridc."'");
//mysql_query("update cometchat_status set isdevice='0' where userid = '".$useridc."' limit 1");	



      //analytics
      if ($_SESSION['analytics']!=date('d') || empty($_SESSION['analytics'])){
      session_register('analytics');
      $_SESSION['analytics']=date('d');
      $mode="web";
      $useragent = $_SERVER['HTTP_USER_AGENT'];
 
     if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
     $browser_version=$matched[1];
     $browser = 'IE';
     } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
     $browser_version=$matched[1];
     $browser = 'Opera';
     } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
     $browser_version=$matched[1];
     $browser = 'Firefox';
     } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
     $browser_version=$matched[1];
     $browser = 'Chrome';
     } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
     $browser_version=$matched[1];
     $browser = 'Safari';
     } else {
    // browser not recognized!
    $browser_version = 0;
    $browser= 'other';
    }
    $date_diario=date("m");
    $Bro_diar="$browser $browser_version";
    $dia_i=date('d');
    $ano_i=date('y'); 
    $acess = "ac";    	
   // mysql_query(" INSERT INTO analytics2 (acess,ccuserid,ano,mes,dia,Data,Browser,Mode,IP) VALUES ('$acess','".$useridc."','$ano_i','$date_diario','$dia_i','".time()."','$Bro_diar','$mode','$vIP')");
      };
    //fim analytics
    //pageviews
  //  mysql_query("INSERT INTO page_views (dia,mes,tot,id) VALUES ('".date('d')."','".date('m')."','1','".date('d')."".date('m')."') ON DUPLICATE KEY UPDATE tot = tot+1");
   //  mysql_query("IF EXISTS (SELECT idorder FROM page_views WHERE dia='".date('d')."' and mes='".date('m')."' limit 1) UPDATE page_views SET tot=tot+1  WHERE dia='".date('d')."' and mes='".date('m')."' limit 1 ELSE    INSERT INTO page_views (dia,mes,tot) VALUES ('".date('d')."','".date('m')."','1')" );

    


  //atualiza uso de mais de 1 hora por dia
$query17922 = mysql_query("SELECT * FROM users_stamps_posts where cod_stamp='2' and iduser='".$UserId_Cokie."' limit 1 ")or die(mysql_error());;
$rcont379222 = mysql_num_rows($query17922);
 if ($rcont379222=='0'){
 
 mysql_query("update users set firstactivity = '".getTimeStamp()."' where UserId = '$UserId_Cokie' and (firstactivity='0')  limit 1");
 } else{
 mysql_query("update users set firstactivity = '0' where UserId = '$UserId_Cokie' and (firstactivity<>'0')  limit 1");
 }
 
 //atualiza uso de mais de 1 hora por dia
 

 
 //comunidades
 $aux_id_profile=anti_injection_n($_GET['id']);
//$aux_id_profile1=($aux_id_custon_profi[0]);
 //$aux_id_profile =  str_replace("?cmm=","",$aux_id_profile);
//$aux_id_profile1=$aux_id_profile;
if ($aux_id_profile!='' && is_numeric($aux_id_profile)){
    $querycod = mysql_query("SELECT * FROM community_users  where IdOrder='".mysql_real_escape_string($aux_id_profile)."' limit 1 ")or die(mysql_error());;


$rs284y824 = mysql_num_rows($querycod);
}else{
    
    $aux_id_profile_=anti_injection_n($_GET['cmm']);
    echo $_GET['cmm'];
    
    if ($aux_id_profile_!='' && is_numeric($aux_id_profile_)){
        header('Location: /communities/'.$aux_id_profile_);
        
    }else{
    
    header('Location: ../');
    };
}

//echo $aux_id_profile."teste";
 if ($rs284y824!=''){
     
$mensagemcod = mysql_fetch_object($querycod);
$auuwdw98r8usduuue777=$mensagemcod->IdCommunity; 
//variaveis para uso geral
//sou dono da comunidade
$quey_my_comm = mysql_query("SELECT UserIdPro FROM community_users  where (IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserIdPro='".USERID_ID."')  limit 1")or die(mysql_error());;
$row_my_com88 = mysql_num_rows($quey_my_comm);//sou dono 
//sou membro
$query_member8383 = mysql_query("SELECT IdOrder,notifications FROM list_community_user  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
$row_members_003= mysql_num_rows($query_member8383);
//usuário banido
$query_baned_02 = mysql_query("SELECT UserId FROM ban_user_commu  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
$row_baned_003 = mysql_num_rows($query_baned_02);
//moderador
$query_moderador_002 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$row_moderador03= mysql_num_rows($query_moderador_002);
//topico liberado
$query_liberadoTopic = mysql_query("SELECT topic_open FROM community_users  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and topic_open<>'0'  limit 1 ")or die(mysql_error());;
$row_topicoNew= mysql_num_rows($query_liberadoTopic);
//verifica se eu fui convidado para comunidade particular
$query17mc = mysql_query("SELECT UserId FROM list_community_user_invit  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
$rcont37mc = mysql_num_rows($query17mc);

$quey_join_request= mysql_query("SELECT ccuserid FROM communitie_list_join_request  where (IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and ccuserid='".USERID_ID."')  limit 1")or die(mysql_error());;
$row_join_request = mysql_num_rows($quey_join_request);
//j� fiz solicita��o de participa��o


// variavel para liberar topicos e interações
if ($row_my_com88==''){
if (($row_members_003!=''  || $row_moderador03!='' ) && $row_baned_003==''){

define('USERALLDENIEDCOMM2899','29982');//liberad acesso
}else{

define('USERALLDENIEDCOMM2899','29000');//acesso negado
}
}else{
define('USERALLDENIEDCOMM2899','29982');//liberad acesso

}
 // variavel para liberar topicos e interações
if ($row_my_com88==''){
if (($row_moderador03!='' || ($row_topicoNew!='' and $row_members_003!=''))){

define('USERALLDENIEDCOMMNEWTOPIC','29982');//criar topico liberado
}else{

define('USERALLDENIEDCOMMNEWTOPIC','29000');//criar topico liberado
}
}else{
define('USERALLDENIEDCOMMNEWTOPIC','29982');//criar topico liberado

}
 }else{
 $auuwdw98r8usduuue777='';
 
 }
 //$auuwdw98r8usduuue777;

 if ($rs284y824==''){
 
 }
 //comunidades
mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and CommandNoti='$mensagemcod->IdCommunity') ")or die(mysql_error());;
mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and CommandNoti='$mensagemcod->IdOrder') ")or die(mysql_error());; 
 
 //inicio memcache
//consulta quantos membros tem na comunidade
function mem_cach_count($auc_cod){

//consulta especfica com memcache
$query173 = mysql_query("SELECT count(IdOrder) AS TOT FROM list_community_user  where IdCommunity='$auc_cod' order by IdOrder ")or die(mysql_error());;

$rcont373 = mysql_fetch_object($query173);
return $rcont373->TOT;

};
//fim memcache


//FILTRO ANTI-FLOOD
if($_SESSION['last_session_request'] > (time() - 5)){
    if(empty($_SESSION['last_request_count'])){
        $_SESSION['last_request_count'] = 1;
    }elseif($_SESSION['last_request_count'] < 5){
        $_SESSION['last_request_count'] = $_SESSION['last_request_count'] + 1;
       //  mysql_query("INSERT INTO visitor_comu (idcom,ccuserid) VALUES ('$auc_cod','".CCUSERIDI."')");
        
    }elseif($_SESSION['last_request_count'] >= 5){
         //   header("location: /erro.php");
          //  exit;
         }
 }else{
    $_SESSION['last_request_count'] = 1;
 }
$_SESSION['last_session_request'] = time();
//FILTRO ANTI-FLOOD

//variáveis para verificar comunidade válidade

 $var_img=null;
 $var_about=null;
 $var_topicos=null;
 $var_ask=null;
 $var_members=null;
 $var_categ=null; 
if ($mensagemcod->CommunityImg!="" && $mensagemcod->category!='0'){
 $var_img=true;
 $var_about=true;
  $var_categ=true; 
 
};

if (mem_cach_count($mensagemcod->IdCommunity) >100  ) {
    $var_members= mem_cach_count($mensagemcod->IdCommunity);
  
};

$query55wewewewe = mysql_query("SELECT IdCommunity FROM forum where  IdCommunity='$mensagemcod->IdCommunity' limit 1 ")or die(mysql_error());
$rcont37kkw3545r4f45t = mysql_num_rows($query55wewewewe);
if ($rcont37kkw3545r4f45t!='0'){
$var_topicos=true;

};
$query55wewewewe21r3e32e = mysql_query("SELECT forum.IdCommunity,forum.idforum,ask_forum.idforum,ask_forum.timestamp FROM ask_forum left JOIN forum ON (forum.idforum=ask_forum.idforum) where (forum.IdCommunity='$mensagemcod->IdCommunity' and  '".time()."' - ask_forum.timestamp < 172800)  order by ask_forum.timestamp DESC limit 1 ")or die(mysql_error());;


$rcont37kkw3545r4f45tasasa = mysql_num_rows($query55wewewewe21r3e32e);
if ($rcont37kkw3545r4f45tasasa!='0'){
 
 $var_ask=true;
}; 

//echo "teste".$var_img."-".$var_about."-".$var_categ."-".$var_members."-".$var_ask."-".$var_topicos;
if ($var_img && $var_about && $var_categ && $var_members && $var_topicos && $var_ask  ){
    
   // echo "t2<br>";
 mysql_query(" UPDATE  community_users set verifi='1'  where IdCommunity='$mensagemcod->IdCommunity'  limit 1 ");
 //coloca comunidade como mais destaque
 
 //atribui um selo de comunidade verificada ao dono
 
 $q_seal_cmm= mysql_query("SELECT cod_stamp FROM users_stamps_posts where cod_stamp='74' and iduser='".$mensagemcod->UserIdPro."' limit 1 ")or die(mysql_error());;
 $rcont_seal_cmm = mysql_num_rows($q_seal_cmm);
 if ($rcont_seal_cmm=='0'){
     
 mysql_query("INSERT INTO users_stamps_posts (iduser,cod_stamp) values ('".$mensagemcod->UserIdPro."','74')");
 
 };
 //verifica se esta comunidade já está em destaque
 $Count_poll = mysql_query("SELECT order_comm FROM poll_comm_top where  order_comm = '$mensagemcod->IdOrder' order by Id_order DESC  limit 1 ")or die(mysql_error());
$a_counter_comm = mysql_num_rows($Count_poll);
if ($a_counter_comm == '' && $Count_memm > '500'){
 mysql_query("INSERT INTO poll_comm_top (ccuserid,order_comm) values ('$mensagem->ccuserid','$mensagemcod->IdOrder')");
}; 
}else{
mysql_query(" UPDATE  community_users set verifi='' where IdCommunity='$mensagemcod->IdCommunity'  limit 1 ");
//retira comunidade do destaque
mysql_query("DELETE  FROM poll_comm_top where order_comm='".$mensagemcod->IdOrder."'  limit 1");


}
mysql_query("UPDATE public_notificacoes SET noticomm='1' where (UserId='".USERID_ID."') limit 1");
//variáveis para verificar comunidade válidade  


//conta solicita��es para aprova��o
$queryJoinRes = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users where  EXISTS(SELECT ccuserid FROM communitie_list_join_request where communitie_list_join_request.ccuserid=users.ccuserid and communitie_list_join_request.IdCommunity='$mensagemcod->IdCommunity')   order by users.	lastactivity_last  DESC ")or die(mysql_error());;
$row_JOINT_Res = mysql_num_rows($queryJoinRes);


//flush de usu�rios que n�o existem
if ($mensagemcod->IdCommunity !=''){
mysql_query("DELETE FROM list_community_user WHERE NOT EXISTS (SELECT ccuserid FROM users WHERE users.ccuserid=list_community_user.UserId)and  IdCommunity='$mensagemcod->IdCommunity' order by list_community_user.UserId DESC ")or die(mysql_error());
};



//verifica se tenho problemas com imagem
$file_im9 = "bg_community_thumbs/".$UserFotoPerfil_Cokie;
$file_im9t = "bg_community/".$UserFotoPerfil_Cokie;
$newavatar= "person_whoman_larg.png";
if (!file_exists($file_im9t)){
    //existe foto principal
    //verifica se tem avatar
  //  mysql_query("UPDATE community_users SET CommunityImg='$newavatar' WHERE   UserIdPro='".CCUSERIDI."' and  IdCommunity='".$mensagemcod->IdCommunity."' limit 1");
    
    
};



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php echo  $mensagemcod->AboutComm ; ?>"/>
<meta name="keywords" content="orkut,
orkut login,
orkut entrar,
entrar no orkut,
orkut login entrar,
orkut entra,
www.orkut.com.br,
www.orkut,
login orkut,
orkuti,
orku,
orkut entrar agora,
orkt,
orkut.com,
okut,
www.orkut.com,
orkut fazer login,
orkute,
orkut login e senha,
entrar orkut,
entra no orkut,
orkut.com login,
orkut cadastro,
orkurt,
fazer orkut,
orkut entrar login,
criar orkut,
orkut inicio,
novo orkut,
orkut entrar conta,
orkut long,
orkur,
orkut.com.br,
orkult,
orcut,
okurt,
como entrar no orkut,
orkut.com.br login,
entrar no orkut agora,
orkuy,
orkut login novo,
login do orkut,
www orkut com br login,
orkut login entrar agora,
entrar no orkut login,
orkut novo,
otkut,
orkuty,
orkut logim,
orjut,
orut,
www orkut com br entrar,
entra orkut,
rkut,
novo orkut entrar,
orkut login entrar agora orkut,
orkut longin,
orkut loguin,
fazer um orkut,
orkut entrar pagina inicial,
site orkut,
orkit,
site do orkut,
orlut,
orkut.com entrar,
fazer orkut,
oukut,
orkutt,
oekut,
orkut orkut,
0rkut entrar,
prkut,
ourkut,
consegue,
okute,
login no orkut,
oorkut,
orkut.con,
orkut login pagina inicial,
fazer login orkut,
orcute,
orkut login entra,
orhut,
orkut entrar login e senha,
entrar orkut login,
orkute login,
orkut.com.br entrar,
orkut criar conta,
orktu,
orkut home,
ww.orkut,
entrar no meu orkut,
criar uma conta no orkut,
m.orkut,
iorkut,
loguin orkut,
login orkut entrar,
wwww.orkut.com br,
orkyt,
criar conta no orkut,
okkut,
orkut entrar senha,
orkut entrar já,
orkut loguim,
orkkut,
long orkut,
orkut entrar na minha conta,
orcuti,
orkuit,
www.orkut.con,
orkut acessar,
logim orkut,
acessar orkut,
orkutlogin,
entrar no,
orkut entrar direto,
or kut,
orkut entrar agora login,
orkut login entrar agora no orkut,
orkut l,
orkutr,
cadastrar no orkut,
0rkut entrar login,
orkut criar,
orkut log in,
wwworkut,
www.orkut.com login,
orkuti login,
fazer login no orkut,
orkut brasil,
longin orkut,
quero entrar no orkut,
orgute,
entrar no orkut novo,
orkut como entrar,
orkut meu orkut,
criar um orkut,
orkut login entrar conta,
orkui,
orkut.com.br login entrar,
entra na orkut,
orkut entra na minha conta,
www.orkut.com.r,
entar no orkut,
orkut.com login entrar,
www.orkut login,
ortkut,
orkut loing,
orkut entrar no orkut,
orkut login antigo,
orkut login page,
www.orkut.com.b,
entra no meu orkut,
orkut login entrar no orkut,
como acessar o orkut,
orkut google,
www google com br orkut,
orkut mobile,
www.orkut.com l,
orku t,
orkut longi,
entra orkut login,
orkut entra na sua conta,
orkut.cim,
orkut logi,
ww.orkut.com.br,
orkut.co,
ww.orkut.com.br entrar,
www orkut login entrar,
orkut.combr,
google orkut,
orkut pagina inicial,
orkut criar conta,
orkut.com.b,
entrar no orkut antigo,
entra no orkut agora,
orkut.c,
m.orkut.com,
otkuy,
orkut login entrar orkut login,
oprkut,
wwww.orkut,
entra no orkut login,
www.orkut.c,
orkut inicio fazer login,
entrar no orkut login e senha,
criar orkut agora,
orkut login e senha entrar,
orkut.com.br entra,
orkut logn,
site do orkut login,
www.orkut mail.com,
o rkut,
entrar orkut novo,
www.orkut.combr,
www.orkut.com login orkut,
acessar o orkut,
orkut login e senha orkut,
quero entrar no meu orkut,
como faço para entrar no orkut,
como fazer um orkut,
0rkut login,
www.orku,
orkut brasileiro,
wwworkut.com,
orkut login entrar senha,
pagina inicial do orkut,
orkut inicio entrar,
entrar em orkut,
orkut.com entra,
entrar orkut agora,
0rkut long,
login orkut.com.br,
orktut,
orkut longuin,
orkut fazer,
orkut loging,
orkut fazer login entrar,
www.okut.com.br,
orkut log,
como entrar orkut,
logar no orkut,
orkut site,
orku login,
entrar no orkut.com.br,
entrar no orkut direto,
oekur,
orkut fazer conta,
long do orkut,
orkut entrar inicio,
orguti,
orkut login agora,
wwworkut.com.br,
orkut login sign up,
orkutcom,
orkut login e senha entrar agora,
como entra no orkut,
orkut.xom,
orkut acessar minha conta,
orkut ligin,
ork ut,
site orkut login,
entra orkut agora,
como fazer orkut,
orkut inicio login,
oerkut,
www.orkurt.com.br,
entra no orkt,
orkut app,
orkutlogim,
cadastro orkut,
orkut login entrar na conta,
orkt login,
orkur login,
orkut cadastrar,
www.orkut.com.vr,
orkut cadastro conta,
orkut entrar na conta,
orekut,
como entrar no meu orkut,
cadastrar orkut,
fazer login do orkut,
orkut entrar com outra conta,
fazer orkut agora,
abrir orkut,
logim do orkut,
conta do orkut,
orkut account,
quero entrar na minha conta do orkut,
orkut novo login entrar,
www.orkut.co.br,
login orkut novo,
login do orkut entrar,
entrar no orkt,
meu orkut entra agora,
orkut login.com.br,
entrar no orkut.com,
como entrar no orkut agora,
entrar direto no orkut,
fazer long no orkut,
orkujt,
pagina do orkut,
www orkut com br entrar minha conta,
orkut brasil entrar,
orkut longim,
orkue,
orkut cadastre-se,
orkut entrar login agora,
logar orkut,
entra na pagina do orkut,
orkut.com inicio,
loguin do orkut,
orkuto,
orkut.vom,
site orkut entrar,
orkut antigo login,
orkut login entrar hotmail,
criar conta orkut,
acessar orkut login,
okurt login,
orkut longuim,
orkut mobile,
fazer longin no orkut,
entrar na minha conta do orkut,
orkut.com.br orkut,
orkut entrar no meu,
longin do orkut,
orkut fazer uma conta,
entra no orkut.com,
orkut br,
orkut.com.br fazer login,
cadastro no orkut,
como entrar no novo orkut,
www.orku.com,
www.orkt,
ww.orkut entrar,
orkut.com longin,
o kut,
emtra no orkut,
www com orkut,
0rkut entrar agora,
novo orkut login,
orkut.com.r,
www.orkut.com.brr,
entra no okut,
entrar na conta do orkut,
fazer orkute,
www.orku.com.br,
orkut fazer login agora,
entrar no orkute,
orkut brasileiro login,
orkult login,
orkut entrar no meu orkut login,
orkute entrar,
orkut.com entrar agora,
entrar no orku,
login para orkut,
orkut login.com,
or kut login,
www.orkut.cpm,
quero entrar no orkut agora,
entrarorkut,
orkut novo login,
www.orkt.com.br,
fazer um orkut agora,
www orkut com br main,
orkut meu,
www.okut,
www.orkut.cim,
criar conta orkut,
www.orkut.vom,
www.orkut.co,
ww.orkut.com,
login orkut antigo,
como acessar orkut,
criar login orkut,
www.orkutcom,
orkurte,
www.entrar no orkut,
orkut entrar minha conta,
www.orcut.com.br,
cadastrar-se no orkut,
orkut m,
orkt entra,
fazer login para entrar no orkut,
entra na minha conta do orkut,
www orkut conta com,
orkut main,
orkt entrar,
como fazer login no orkut,
login orkut brasil,
entrar no orkult,
okurt entrar,
orkut logon,
login de orkut,
emtrar no orkut,
www.orkut.com.brt,
orkulte,
loguim do orkut,
entra no orkut novo,
orkut.com.br longim,
orkut versão antiga,
or kut entrar,
orkut meu orkut login,
entrar no meu orkut login,
orkut login entrar orkut,
orkut.com.br entrar agora,
logi orkut,
orkut login entra na conta,
entra em orkut,
orkut entra na conta,
entrar okut,
orkurt entrar,
long no orkut,
orkut me cadastrar,
wwww.orkut.com,
entrar no orkut agora login,
entrar no orkurt,
okut.com.br,
www.orkut.c0m,
acesso orkut login,
orkut login entrar na minha conta,
entrar no o,
login orkut entrar agora,
m.orkut.com login,
entra no orkute,
entrar no orkut com outra conta,
orkut fazer login e senha,
entrar no okut,
www orkut entrar agora,
www.orkut.comm,
orkut online,
orkult entrar,
orkut como entrar na minha conta,
www orkut com meu orkut,
orkut logun,
fazer login orkut entrar,
www login orkut com br,
www.orkut.com.bt,
orkutentra,
logn orkut,
orkut online login,
orkut lgin,
fazer orkut novo,
orkut home page,
okut entrar,
orkut login entrar no orkut agora,
orkut fazer conta,
long orkut entrar,
orkut loin,
longi orkut,
orkut entra agora,
faser orkut,
login para entrar no orkut,
www.okurt,
conta orkut login,
orkut login em portugues,
entrar no orkut login agora,
orkut se cadastrar,
orkut cadastrar-se,
wwworkut.com.br entra,
antigo orkut,
www.orkut.com.in,
login orkut hotmail,
www.orkut login.com,
fazer orkut login,
acessar meu orkut,
como faço para entrar no meu orkut,
www.orkuti.com,
como fazer para entrar no orkut,
www.orkuti,
orkut antigo entrar,
como logar no orkut,
entrar orkut antigo,
como faço para acessar o orkut,
meu orkut entrar,
fazer uma conta no orkut,
orkut.coom,
www.orkute,
www.orkt.com,
fazer conta no orkut,
orkut app,
acesso orkut,
ww orkut login,
orkut meu orkut entrar,
orkut.comn,
como entro no orkut,
www.orkut login.com.br,
www.orkut.br,
orkut.cpm,
www.orkurt,
www.orkut.xom,
www.orkurt.com,
orkut fazer login novo,
www.orkuti.com.br,
entrar no meu orkut agora,
0rkut l0gin,
orkut acessar conta,
como criar um orkut,
conta orkut,
google orkut login entrar,
página do orkut,
como acessar meu orkut,
www.orkult,
criar um orkut agora,
orkut entrar no meu orkut,
orkut versão antiga login entrar,
pagina inicial orkut,
orkut não entra,
orkut.comm,
pagina orkut,
orkut br main,
orkut.om,
criar orkut login,
orkut como acessar,
acesso ao orkut,
fazer uma conta no orkut,
orkt.com,
entrar no orkuti,
acessar conta do orkut,
fazer conta no orkut,
cadastre-se no orkut,
okut.com,
se cadastrar no orkut,
quero acessar meu orkut,
www.okut.com,
entrar no orkut antigo login,
acessar orkut minha conta,
criar conta do orkut,
entrar no antigo orkut,
como abrir o orkut,
fazer login no orkut novo,
orku.com,
como entrar no antigo orkut,
orkut fazer uma conta,
entra no meu orkut agora,
orkut conta,
www.orkut.coom,
acessa o orkut,
www.orkut hotmail.com,
orkute.com,
minha conta do orkut,
login do orkut novo,
criar uma conta orkut,
inicio do orkut,
google login orkut,
orkut sign in login,
como faco para entrar no orkut,
como acessar minha conta do orkut,
google orkut login,
entrar orkut versão antiga,
quero entra no orkut,
como entrar na minha conta do orkut,
entrar no orkut fazer login,
sign in orkut,
orkut login hotmail,
orkut.ccom,
www google com br orkut login,
orkut login novo usuario,
eu quero entrar no orkut,
quero entrar no orkut antigo,
entrar no orkut pelo google,
orkut criar conta agora,
orkut login google,
orkut.conm,
orkut.coim,
como criar orkut,
abrir o orkut,
orkut.cm,
login orkut versão antiga,
www orkutlogin,
acessar minha conta do orkut,
www.orkute.com,
entrar meu orkut,
quero entrar no meu orkut agora,
wwww.google.com br orkut,
quero acessar o orkut,
www.orcut,
orkut.copm,
inicio orkut,
orku.com.br,
quero entra no meu orkut,
quero fazer um orkut,
orkut minha conta,
orkut antigo login entrar,
pagina de login do orkut,
wwworkut.combr,
orkut login e senha antigo,
orkurt.com,
ir para orkut,
www.orcut.com,
orkut.c0m,
como faço pra entrar no orkut,
o orkut login,
orkut novo 2012,
orcut.com,
fazer login orkut novo,
abrir orkut login,
www.orkutlogin.com,
abrir um orkut,
orkut login antiga versão,
orkut hotmail entrar,
wwworkut.com login,
o novo orkut,
link orkut,
orkut nao entra,
acessar o orkut login,
www.orkult.com.br,
orkut login mobile,
orkut login mobile,
pagina do orkut login,
fazer o login do orkut,
www.orkut.ccom,
conta no orkut,
entrar no meu perfil do orkut,
orkut.com log in,
meu orkut login,
orkut.ocm,
www.orgut,
acessar conta orkut,
entra no orkut antigo,
www orkut google com br,
orkut login entrar fazer login,
www.orkut.comn,
faser orkut,
entrar no orkut versão antiga,
www.orkute.com.br,
abrir orkut agora,
minha conta no orkut,
eu quero entrar no meu orkut,
orkut sing in,
entrar no meu orkut direto,
o meu orkut,
orkut google login,
como criar uma conta no orkut,
orkut email e senha,
fazer meu orkut,
abrir orkut google,
quero fazer login no orkut,
como acessar minha conta no orkut,
como entrar no orkut 2014,
0rkut antigo,
hotmail orkut entrar,
quero entrar no orkut e não consigo,
login e senha orkut,
orkut hotmail login,
quero entrar no meu orkut login,
orkut antigo login e senha,
google orkut entrar,
criar uma conta no orkut agora,
app e,
entra no meu orkut login,
www.okurt.com,
fazer login no orkut antigo,
conta google orkut,
entrar no orkut antigo agora,
login no orkut antigo,
abrir conta orkut,
orkut main home,
como entrar no orkut antigo 2012,
quero entra orkut,
login do orkut versão antiga,
acessar o meu orkut,
não consigo acessar meu orkut,
orkut account login,
www.orkult.com,
orkut login entrar rapido,
www orkut com br logout,
orkult.com,
entrar no orkut login antigo,
abrir meu orkut,
versão antiga do orkut,
fazer novo orkut,
contas do orkut,
criar conta no orkut agora,
criar conta no orkut agora,
site do orkut antigo,
www.orkut.com.bre,
fazer um orkut novo,
entra no meu orkut antigo,
pagina inicial do orkut login e senha,
como acessar o orkut antigo,
fazer orkut agora gratis,
abrir uma conta no orkut,
orkut antigo 2012,
pagina do orkut antigo,
orkut antigo como entrar,
fazer login do orkut velho,
orkut entrar pelo hotmail,
orkut email,
criar orkut novo,
entrar no orkut por outro site,
como fazer um orkut novo,
entrar orkut hotmail,
conta do google orkut,
html orkut,
criar novo orkut,
criar novo orkut,
nao consigo entrar no meu orkut,
quero entrar no meu orkut antigo,
criar meu orkut,
como acessar o antigo orkut,
entra no e,
criar um orkut novo,
criar um orkut novo,
hotmail orkut login,
fazer login no orkut velho,
como acessar o meu orkut,
hotmail.com entrar no orkut,
orkut entrar antigo,
fazer login orkut antigo,
abrir conta no orkut,
faça login para acessar o orkut,
entrar no orkut velho login,
entrar no orkut hotmail,
entra login,
não consigo entrar no meu orkut,
cria um orkut,
www orkut versão antiga,
entrar entrar entrar,
ver orkut antigo,
como eu faço para entrar no orkut,
quero acessar meu orkut antigo,
como faço pra entrar no meu orkut,
como eu entro no orkut,
wwww.hotmail.com.br entrar3,
entrar no orkut pelo hotmail,
criar conta google orkut,
long orkut velho,
quero entrar no orkut antigo como faço,
entrar no meu antigo orkut,
email do orkut,
email orkut,
pesquisa orkut,
como faço para acessar meu orkut,
como fazer para entrar no orkut antigo,
acessando o orkut,
google.com entrar,
fazer novo orkut,
fazer login orkut velho,
login orkut account,
quero entrar no meu orkut e não consigo,
fazer um novo orkut,
fazer um novo orkut,
quero ver meu orkut,
quero entrar no meu antigo orkut,
html para orkut,
como entrar no orkut com hotmail,
contas do google orkut,
" />
<link rel="image_src" href="/bg_community/<?php if ($mensagemcod->CommunityImg !=''){ echo $mensagemcod->CommunityImg;}else{ echo "iwu_poweo928C_093_large.jpg";};?>" />
<link rel="shortcut icon" href="/img/icon_001.png" />
<meta name="language" content="<?php echo IDIOMAUSER;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="index,follow"/>
<link type="text/css" rel="stylesheet" href="/css/Cx_sjjXXCwhhw55426677912367n123c3333n56_i.css?v=<? echo time(); ?>" />
<link type="text/css" rel="stylesheet" href="/css/css_XSz_UHG773h_1803233687NNNpc5.css?v=<? echo time(); ?>" />
<link type="text/css" rel="stylesheet" href="/css/CX_sj_mini_prom_0012.css" />
<link rel="stylesheet" href="/dist/css/lightbox.css">
<script type="text/javascript"  src="/dist/js/lightbox-plus-jquery.min.js"></script>
<link type="text/css" href="/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="/css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="/static/jquery1.5.2jquery.min.js"></script>
<script src="/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/static/jquery_comm_mini_2016_014.js?<?php echo time();?>"></script>
<script src="/js/jquery_comm_001.js?<?php echo time();?>" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery_clock.js"></script>
<script type="text/javascript" src="/js/jquery_tr_03287h.js"></script>
<script type="text/javascript" src="/static/jquery.form.js"></script>
<script type="text/javascript" src="/static/autoresize.jquery.js"></script>
<script type="text/javascript" src="/js/notifyN.js"></script>
<link rel="stylesheet" type="text/css" href="/css/spectrum.css">
<script type="text/javascript" src="/js/spectrum.js"></script>
<script type='text/javascript' src='/docs/toc.js'></script>
<script type='text/javascript' src='/docs/docs.js'></script>
<link type="text/css" href="/cometchat/cometchatcss.php" rel="stylesheet" charset="utf-8">
<title>Orkut - <?php echo $mensagemcod->CommunityName;?></title>
<script type="text/javascript">
$(function () {	$(".gePsdhhd").geocomplete({ details: "form" });});$(function() {   $("#datepicker").datepicker()});
var x_is_IJH726_K = "";
var ejfeueuuee94usgdsd="<?php echo $auuwdw98r8usduuue777?>";
var name_0e0ejnfvruuru4885j="<?php echo $UserName_cokie ?>";
var foto_kdfwrn34783985t58th35hhrfbn="<?php echo $UserFotoThumb_Cokie?>"
var id_odosngsfgnsfi959tjtern="<?php echo $UserId_Cokie?>";
var id_odosngsfgnsfi959tjchat="<?php echo $useridc?>";
var data_wt63hhehjhg5353773="<?php echo ("$portuguese_day,$dia de $portuguese_month");?>";
var aux_atua_variavel_controle_div="";var aux_conect=true;var aux_conect2=true;var aux_84r4urur88=false;var aux_menu_8uue8="";var aux_menu_8uue8C="";var aux_menu_8uue8rand="";var aux_show994kknwyye83pw=false;var aux_showdau84djakpekdh8="";var cod_aux_ministerial='';var paginaFotos=1;var obj_text_coment="";var sajddsd44 ='';$(document).ready(function(){	$('.animated').autoResize();	$(".scroll-pane").jScrollPane();  $(".scroll-pane .jspDrag").hide();    $(".scroll-pane").mouseenter(function () {    $(this).find(".jspDrag").stop(true, true).fadeIn("slow");   });  $(".scroll-pane").mouseleave(function () {    $(this).find(".jspDrag").stop(true, true).fadeOut("slow");   });});if (ejfeueuuee94usgdsd!=''){window.setTimeout('view_prof(ejfeueuuee94usgdsd);',5000);};	</script>
</head>
<body bgcolor="#dae5ee" class="iocover"  onclick=" hide_search_box();on_men003();"  >
<div id="popup2Geral"></div>
<div id="popupNav"><div id="centerNav"></div></div>
<div id="popupNavPubli"><div id="centerNavPubli"></div></div>
<div id="fundo" style=""></div><input type="hidden"id="Id_Aux"name="Id_Aux"value="<?php echo $UserId_Cokie?>"></input>
<input type="hidden"id="user_aux_0001"name="user_aux_0001"value="<?php echo $UserFotoThumb_Cokie ?>"></input>
<!-- new designer --> 
<!-- new barr -->
<div id="new_barr"  class="tems_3728ehe" >
<div class="_oiw8383 _oiw37uejw"><div class="_383uue"><a href="/" title=""><img class="L_3ehd" src="/img_news_2016/IMHud944783.png" /></a></div>
<div id="barr_contai_center" class="_oiw8383500">
<span class="Hn0939_PPOR445"   ><a class="em_or384urjererA" href="/"><?php echo INICIO3222;?></a> | <a class="em_or384urjererA" href="/"><?php echo IDIOMAPGHH;?></a></span>
<div class="_LKO7373uu">
<img class="boradsemquina3 botao_azul_ _iwe8e3ud tip_trigger _KHNbvSA" ttr="1" tree="<?php echo $UserId_Cokie?>" src="/img_news_2016/ic_account_box_white_48dp_1x.png"/>
<div class="estilodeboraesombra2 _eiuTool_938 _o_83u"><img class="_pwoUY_" src="/img_news_2016/ic_928deweweuwiw.png"/><div class="_owu655_o9"><span class="_9_outh_nc5" ><?php echo PROFILE;?></span></div></div>
<img class="boradsemquina3 botao_azul_ _iwe8e3ud tip_trigger _KHNbvSA" ttr="2" src="/img_news_2016/ic_group_work_white_48dp_1x.png"/>
<div class="estilodeboraesombra2 _eiuTool_938 _83iNMH3"><img class="_pwoUY_" src="/img_news_2016/ic_928deweweuwiw.png"/><div class="_owu655_o9"><span class="_9_outh_nc5" ><?php echo COMMUNITIESSS;?></span></div></div>
<img class="boradsemquina3 botao_azul_ _iwe8e3ud tip_trigger _KHNbvSA" ttr="3" src="/img_news_2016/ic_extension_white_48dp_1x.png"/>
<div class="estilodeboraesombra2 _eiuTool_938 _owii37CDF_"><img class="_pwoUY_" src="/img_news_2016/ic_928deweweuwiw.png"/><div class="_owu655_o9"><span class="_9_outh_nc5" ><?php echo THEMESS;?></span></div></div>
<img class="boradsemquina3 botao_azul_ _iwe8e3ud tip_trigger _KHNbvSAb" ttr="4"src="/img_news_2016/ic_widgets_white_48dp_1x.png"/>
<div class="estilodeboraesombra2 _eiuTool_938 Lpl_837Bgkw"><img class="_pwoUY_" src="/img_news_2016/ic_928deweweuwiw.png"/><div class="_owu655_o9"><span class="_9_outh_nc5" ><?php echo APLICATIONS;?></span></div></div>
<div class="clear"></div></div></div>
<div id="barr_contai_right"><span class="em_or384urjerer"><?php echo ($UserEmail);?> | <a class="em_or384urjererA" href="/logout.php"><?php echo SAIR73477437;?></a></span><div class="_lUYYGH3536"><img class="boradsemquina3 botao_azul_ _iwe8e3ud _pewoJHGF6737 men_icon_barr" src="/img_news_2016/ic_menu_white_48dp_1x.png" />
<div  class="estilodeboraesombra2 men_icon_barr" id="sub_men_main"><img class="_pLLJHtw53562"  src="/imagens_rsrc/point_29932inw2.png" /><ul class="ul_9393menu">
<a href="/
<?php echo NIKNAMME; ?>"><li class="_peiie737KJGFE6"><div class="radius_150px _pwwojJGFR536y_ieu"><img class="radius_150px _pI_jh765_2wr"  src="/cropImg.php?arquivo=profile_img/<?php echo $UserFotoPerfil_Cokie;?>&largura=100&altura=100"  /></div>
<div class="_32eBVA12_93"><span class="L_837VCZZS_WWXX"><?php echo ocultaTexto($UserName,25);?></span></div></li></a>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="jjuw7e77yejhe();"><?php echo NOTIFICACOES;?> <img src="/img_news_2016/ic_add_alert_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_expl()"><?php echo POLITICASDEPRIVACIDADE;?><img src="/img_news_2016/ic_date_range_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_sobre();"><?php echo SOBREOORKUTI;?><img src="/img_news_2016/ic_new_releases_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="up_passjdi8993();"><?php echo CONFIGURACOESGERAL;?><img src="/img_news_2016/ic_settings_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_terms();"><?php echo TERMOSDEUSO;?><img src="/img_news_2016/ic_assignment_late_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="up_passjdi8993HJJha()"><?php echo SUGESTAOOUCRITICA;?><img src="/img_news_2016/ic_live_help_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>   
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_team_2();"><?php echo ORKUTITEAM;?><img src="/img_news_2016/ic_assignment_ind_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>   
<a href="/
logout.php"><li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" ><?php echo SAIRGERAL;?><img src="/img_news_2016/ic_vertical_align_bottom_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li></a></ul></div>
<span class="_ow_oiwB_g363 noti_icon_barr"><img class="boradsemquina3 botao_azul_ _iwe8e3ud IC_owiJJh733" src="/img_news_2016/ic_notifications_active_white_48dp_1x.png"/>
<span class="b_owiB_02iei" id="load_djew898rrhjjw"></span></span><div class="estilodeboraesombra2" id="sub_mai_noti"><img class="_pLLJHtw53562" src="/imagens_rsrc/point_29932inw2.png" />
<div class="LJ663e3BNn_993" ><span class="Lkopq_5253h_ndbw520_"><?php echo NOTIFICACOES;?></span><img class="kj9_0_Xd"     src="/img/bell40_40.png"/></div><div id="vie_sodduonwnoti"class="Ol_XXY_028"></div><div class="clear"></div></div>
<span class="_ow_oiwB_g363 noti_icon_barrN"><img class="boradsemquina3 botao_azul_ _iwe8e3ud IC_owiJJh733" src="/img_news_2016/ic_supervisor_account_white_48dp_1x.png"/>
<span class="b_owiB_02iei" id="load_djew898rrhjjwn"></span></span><div class="estilodeboraesombra2" id="sub_mai_notin"><img class="_pLLJHtw53562" src="/imagens_rsrc/point_29932inw2.png" />
<div class="LJ663e3BNn_993" ><span class="Lkopq_5253h_ndbw520_"><?php echo NOTIFICACOESAMIZADES;?></span><img class="kj9_0_Xd"     src="/img/People-MSN40_40.png"/></div><div id="vie_sodduonwnotin"class="Ol_XXY_028"></div><div class="clear"></div></div>
<span class="_ow_oiwB_g363 noti_icon_barr3"><img class="boradsemquina3 botao_azul_ _iwe8e3ud IC_owiJJh733" src="/img_news_2016/ic_visibility_white_48dp_1x.png"/>
<span class="b_owiB_02iei" id="load_djew898rrhjjwss"></span></span><div class="estilodeboraesombra2" id="sub_mai_notifVisitor"><img class="_pLLJHtw53562" src="/imagens_rsrc/point_29932inw2.png" />
<div class="LJ663e3BNn_993" ><span class="Lkopq_5253h_ndbw520_"><?php echo VISITANTESPERFILMENU;?></span><img class="kj9_0_Xd"     src="/img/eye_inv.png"/></div><div id="vie_sodduonwnotie"class="Ol_XXY_028"></div><div class="clear"></div></div>
<div style="clear: both"></div></div> <div style="clear: both"></div></div><div style="clear: both"></div></div></div>
<!-- new barr -->         
          
<div  id="global_conatiner" class="cl_divs_2723y"><div id="main_container_communities"  class="cl_divs_2723y _oiw8383">
<!-- new designer -->
<div id="left_conatiner_new_profile" ><!-- card --> 
<div class="boradsemquina5 men sombra_padrao_bottom _kJNM8V_ks ui_mw_postoosm">
<div class='foto_us  _XZ_zx525tx'>
<div class="visualizar_newF554" id="visualizar_newF554"><img class="boradsemquina3 img_card-box-comm"src="<?php //verifica se imagem est fora do tamanho 
    $paperuu38="bg_community/$mensagemcod->CommunityImg";
    $imnfoC = getimagesize($paperuu38); $img_wC = $imnfoC[0]; $img_hC = $imnfoC[1];if (($img_wC < '155' or $img_hC < '155')){ ?>/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=155&altura=155;<?php  }else{ if (($img_wC > '155' or $img_hC > '155')){ ?>/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=155&altura=250;<?php }else{ if ($mensagemcod->CommunityImg !=''){ ?>/bg_community/<?php echo $mensagemcod->CommunityImg; }else{ echo "/bg_community/iwu_poweo928C_093_thumb.png";};};};?>"/></div>
<?php if($row_my_com88!=''){?><form id="form_new_img_us" method="post"  enctype="multipart/form-data" action="/up_load_imagem_new_communities.php">
<input type="hidden" id="nam_url_92" name="nam_url_92" value="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>">
<input type="hidden" id="nam_cod_comm93" name="nam_cod_comm93" value="<?php echo $mensagemcod->IdOrder;?>">
<label  class="O-wk928_bbvva6272"><?php echo ALETERARIMAGEM838I3JEJE;?><input id="imagemN" name="imagemN"  type="file"  class="foto"  /><img  src="/imagens_rsrc/icon-0383aSAQSaaAsas332398face.png" /></label>
</form><?php };?></div><!-- card -->
<div id="NH_NAME_83838"><label class="LO_523t23tLK" ><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></label></div>
<!-- gender --> 
<div id="gender_ii4834"><span class="HN_83i_BVXZ_Opow6y35">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.')." ".MEMBROSCASELOW;?>)</span> </div>
<!-- gender -->
<?php if ( USERID_ID=='1') { /*?><div class="men_new_90349e _kIJ736_ji_jgBBN" ><label class="" onclick="clean_923r37com('<?php echo $mensagemcod->IdCommunity;?>');">Excluir comunidade</label></div><?php */};?>
<div class="_kIJ736_ji_jgBBN3nn8">
<?php if ($row_moderador03!='' || $mensagemcod->UserIdPro==USERID_ID){?>
<!-- edit -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/UserBlue-edit.png" class="img_menu_83438" />
<label class="men_new99eje_normal"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/edit?&about=1"><?php echo EDITARCOMM83;?></a></label>
<div class="clear" ></div></div>
<!-- edit -->
<?php if ($mensagemcod->UserIdPro=="alexhhhhee"){

//verifica se tenho promoções
$querycodr20 = mysql_query("SELECT ccuserid FROM promoter where (ccuserid='".CCUSERIDI."' and promoter.id='$mensagemcod->IdOrder') order by promoter.idorder limit 1 ")or die(mysql_error());;
$rcont373wllele20 = mysql_num_rows($querycodr20);

?>
<!-- promova -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/brandingpromote3.png" class="img_menu_83438" />
<label class="men_new99eje_normal"><a href="/<?php if ($rcont373wllele20!=''){ echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/my_promote?&pag=1"><?php }else{ echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/help_promote?&pag=1"><?php } echo PROMOVACOMMM883;  ?></a></label>
<div class="clear" ></div></div>
<!-- promova -->
<?php };?>
<!-- lixeira -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/trash_mail.png" class="img_menu_83438" />
<label class="men_new99eje_normal"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/laystall?&pag=1"><?php echo LIXEIRACOMMM883;?></a></label>
<div class="clear" ></div></div>
<!-- lixeira --><?php };?>
<?php  
//fiz pedido para entrar na comunidade
if ($row_join_request > 0){
?>
<!-- aviso-->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >

<label   class="men_new99eje_normal">Aguardando aprova��o</label>
<div class="clear" ></div></div>
<!-- aviso -->

<?php 

}else{

?>
<?php 

if ($rcont37mc > '0' && $row_members_003==''  && $row_moderador03==''  && $row_baned_003=='' && $mensagemcod->UserIdPro!=USERID_ID){

?>

<!-- add -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/84iikjhrhjere.png" class="img_menu_83438" />
<label onclick="_Kjmn89_Bgaoo(this,'<?php echo $mensagemcod->IdCommunity; ?>','<?php echo MENSAGEM3884UEUUEEOOWEW383WAIT;?>','<?php echo "/".$url_teste_default."/".$mensagemcod->IdOrder ; ?>')"  class="men_new99eje_normal"><?php echo PARTICIPARCOM87;?></label>
<div class="clear" ></div></div>
<!-- add -->
<?php 
}else{

?>

<?php if (($row_members_003==''  && $row_moderador03==''  && $row_baned_003=='' && $mensagemcod->CommunityPrivacy=='2'  && $mensagemcod->UserIdPro!=USERID_ID)){?>
<!-- add -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/84iikjhrhjere.png" class="img_menu_83438" />
<label onclick=" window.location.href ='http://m.orkut.me/MainCommunityJoin/?cmm=<?php  echo $mensagemcod->IdCommunity;?>'"  class="men_new99eje_normal"><?php echo PARTICIPARCOM87;?></label>
<div class="clear" ></div></div>
<!-- add --><?php };
};
?>
<?php if ($row_members_003!=''  || $row_moderador03!=''  && ($mensagemcod->UserIdPro!=USERID_ID && $row_baned_003=='')){?>
<!-- del -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/838iijhhre.png" class="img_menu_83438" />
<label onclick="_Kjmn89_Bgaoo(this,'<?php echo $mensagemcod->IdCommunity; ?>','<?php echo MENSAGEM3884UEUUEEOOWEW383WAIT;?>','<?php echo "/".$url_teste_default."/".$mensagemcod->IdOrder ; ?>');" class="men_new99eje_normal"><?php echo DEIXARCOM837;?></label>
<div class="clear" ></div></div>
<!-- del --><?php };

};
?>
<?php if ($row_members_003==''  && $row_moderador03==''  && $row_baned_003=='' &&  $mensagemcod->UserIdPro!=USERID_ID){?>
<!-- delate -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/minus-button.png" class="img_menu_83438" />
<label class="men_new99eje_normal"><?php echo DENUNCIARCOM983;?></label>
<div class="clear" ></div></div>
<!-- delate --><?php };?>
<?php if ($row_members_003!='' || $mensagemcod->UserIdPro==USERID_ID){?>
<div class="men_new_90349e _kIJ736_ji_jgBBN" onclick="iu_ue847_xxfe('<?php echo USERID_ID ;?>','<?php echo $mensagemcod->IdCommunity;?>')"  >
<img id="ei4874yeheHGGRYyekk"  src="<?php if ($mensagemcod->UserIdPro==USERID_ID ){ if ($mensagemcod->notifications=='0'){echo "/img/bell_93834.png"; }else{echo "/img/bell_938345.png";}; }else{ if ($row_members_003!='') { $mensagem7848riewry98 = mysql_fetch_object($query_member8383);if ($mensagem7848riewry98->notifications=='0'){echo "/img/bell_93834.png"; }else{echo "/img/bell_938345.png";}; };};?>" /><label 
class="men_new99eje_normal "><?php echo NOTIFICACOESCOMUNIDADES323;?></label>
<img id="ei4874yeheHGGRYye" src="<?php if ($mensagemcod->UserIdPro==USERID_ID ){ if ($mensagemcod->notifications=='0'){echo "/img/on_38347iwuewewe.png"; }else{echo "/img/off49547urereui_94.png";}; }else{ if ($row_members_003!='') { if ($mensagem7848riewry98->notifications=='0'){echo "/img/on_38347iwuewewe.png"; }else{echo "/img/off49547urereui_94.png";}; };};?>" /></div>
<?php };?>                      
</div>
<div class="_kIJ736_ji_jgBBN3nn">
<!-- foruns -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/blue-documents-stack.png" class="img_menu_83438" />
<span class="men_new99eje_normal"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/forum?&pag=1"><?php echo FORUMCOM725;?></a></span>
<div class="clear" ></div></div>
<!-- foruns -->
<!-- membros -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/1469423524_group.png" class="img_menu_83438" />
<span class="men_new99eje_normal"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span>
<?php 
if ($row_JOINT_Res > 0 && ( $row_moderador03 > 0 || $mensagemcod->UserIdPro==USERID_ID)){
    
    echo <<<html
<span class="b_owiB_02iei" id="load_djew898rrhjjw"><span class="bolha_38eueure">$row_JOINT_Res</span></span>

html;

};
?>
<div class="clear" ></div></div>
<!-- membros -->
<?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?>
<!-- divulgar -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/oodj9e39je.png" class="img_menu_83438" />
<span onclick="share_comm('<?php echo $mensagemcod->IdCommunity;?>');" class="men_new99eje_normal"><?php echo DIVULGARCOMM888;?></span>
<div class="clear" ></div></div>
<!-- divulgar -->
<?php };?>
</div></div></div>
<?php
//verifica ajuda promova

if ($_GET['topic']=='help_promote' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 



?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo PROMOVACOMMM883;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/promote?&pag=1"><?php echo CRIARPROMOCOES0039;?></a></span></div> <div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/my_promote?&pag=1"><?php echo MINHASPROMOCOES03003;?></a></span></div><div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/help_promote?&pag=1"><?php echo SABERSOBREPROMOCOES99393;?></a></span></div><div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">

<style>
._3a3h>._34g8 {
    color: #1d2129;
    font-size: 39px;
    line-height: 54px;
    margin-bottom: 12px;
    margin-left: -3px;
}
._3m9 {
    font-family: 'Freight Sans', helvetica, arial, sans-serif !important;
    font-weight: normal !important;
    letter-spacing: normal;
    text-rendering: optimizelegibility;
}
h1 {
    font-size: 14px;
}
h1, h2, h3, h4, h5, h6 {
    color: #1d2129;
    font-size: 13px;
    margin: 0;
    padding: 0;
}

h1 {
    display: block;
    font-size: 2em;
    -webkit-margin-before: 0.67em;
    -webkit-margin-after: 0.67em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
}

._3a3g {
    letter-spacing: .01em;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    width: 1002px;
}


._3a3h {
    position: relative;
    z-index: 10;
}
._2vg3 {
    margin-left: auto;
    margin-right: auto;
    width: 810px;
}
._3a3g ._2qnn {
    vertical-align: top;
}
._3a3i {
    position: relative;
    text-align: center;
    z-index: 0;
}
._3-p2 ._3a3h>._38io {
    margin-bottom: 19px;
    width: 610px;
}
._3a3h>._38io {
    color: #90949c;
    font-size: 18px;
   
}
._3a3g {
    letter-spacing: .01em;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    width: 1002px;
}
._2qix {
    background: #4080ff;
    border: 0;
    color: #fff;
    cursor: pointer;
    text-align: center;
    transition: background 300ms;
}
._42ft {
    cursor: pointer;
    display: inline-block;
    text-decoration: none;
    white-space: nowrap;
}
a {
    color: #365899;
    cursor: pointer;
    text-decoration: none;
}
._7tn {
    border-radius: 4px;
    font-size: 17px;
    padding: 7px 26px 6px 26px;
}
._3ma {
    font-family: 'Freight Sans Bold', helvetica, arial, sans-serif !important;
    font-weight: bold !important;
    letter-spacing: normal;
    text-rendering: optimizelegibility;
}
._2qix:hover{background:#3b5998}
._029jj_ki28-99{margin-bottom:20px;};
._496_ {
    border-top: 1px solid #e5e5e5;
    letter-spacing: .01em;
    line-height: 1.3;
    padding-bottom: 54px;
    padding-top: 34px;
}
._496_>._34g8 {
    color: #4b4f56;
    font-size: 28px;
    line-height: 40px;
    margin-bottom: 9px;
    width: 455px;
}
._5m7- div._5m81._5m8g>div:nth-child(2n+1), ._5m7- div._5m81._5m8g>li:nth-child(2n+1) {
    margin-left: 0;
}
._5m7- ._5m8g>._5m8h, ._5m7- ._5m8g>div:first-child, ._5m7- ._5m8g>li:first-child {
    margin-left: 0;
}
._5m7- ._5m8g>div, ._5m7- ._5m8g>li {
    margin-left: 30px;
}
._5m7- ._5m81>div, ._5m7- ._5m81>li, ._5m7- ._5m8e>._5m82 {
    width: 370px;
}
._6e {
    vertical-align: top;
}
._6a {
    display: inline-block;
}
._496_ ._38io {
    color: #90949c;
    font-size: 17px;
    line-height: 26px;
    margin-bottom: 22px;
}
.j_k-928-NNB-pal{-moz-border-radius:20px;-webkit-border-radius:20px;border-radius:20px;}
._496_ {
    border-top: 1px solid #e5e5e5;
    letter-spacing: .01em;
    line-height: 1.3;
    padding-bottom: 54px;
    padding-top: 34px;
}
.l_0-2pjahqo{margin-bottom:50px;}
</style>
<div class="_3a3h _2vg3"><h1 class="_3m9 _34g8 _48z7"><?php echo  PROMOVASUACOMINU2882UDSHSJSD;?></h1></div>
<div class="_3a3i _2vg3" style="height: 322px"><img class="_2qnn img j_k-928-NNB-pal" src="/
img_src_promoter/bg_000192.jpg" alt=""></div>
<div class="_3a3h _2vg3 _029jj_ki28-99"><div class="_38io _3m9 _029jj_ki28-99"><?php echo  TEXTO00043994OROKRJRJUR;?> </div><a class="_42ft _2qix _7tn _3ma" role="button" href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/promote?&pag=1" id="u_0_c"><?php echo  CRIARPROMOCAO9902;?></a></div>
<div class="_496_ _2vg3"><h2 class="_3m9 _34g8"><?php echo  TEXTO00043994OROKRJRJUR2;?></h2><div class="_5m7-"><div class=" _5m81 _5m8g"><div class="_6a _6e"><div class="_38io"><div class="_38io _4971 _4971 _3m9"><?php echo  TEXTO00043994OROKRJRJUR23457;?> <span data-hover="tooltip" class="_5c65 _3m9" id="u_0_30" ><sup class="_5je4"></sup></span> <?php echo  TEXTO00043994OROKRJRJUR234578;?></div><div class="_38io _4971 _4971 _3m9"> <?php echo  TEXTO00043994OROKRJRJUR2345789;?></div></div></div><div class="_6a _6e _412s"><img class="_2qnn img" src="/
img_src_promoter/13178097_1217692971577204_944242697_n.gif" alt=""></div></div></div></div>
<div class="_496_ _2vg3"><h2 class="_3m9 _34g8"><?php echo  TEXTO00043994OROKRJRJUR23;?></h2><div class="_5m7-"><div class=" _5m81 _5m8g"><div class="_6a _6e _412s"><img class="_2qnn img" src="/
img_src_promoter/Ol839e.png" alt=""><label class="_42ft _2qix _7tn _3ma" onclick="ieki99_oIY();" ><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT;?></label></div><div class="_6a _6e"><div class="_38io"><div class="_38io _4971 _4971 _3m9"><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT0;?> <span data-hover="tooltip" class="_5c65 _3m9" id="Span1" ><sup class="_5je4"></sup></span> <?php echo  TEXTO00043994OROKRJRJUR2345789GHTT01;?> </div><div class="_38io _4971 _4971 _3m9"> <p><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT012;?></p><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT0123;?><p><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT01234;?> </p><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT012345;?><p><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT0123456;?> </p><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT01234567;?></div></div></div></div></div></div>
<div class="_496_ _2vg3"><h2 class="_3m9 _34g8"><?php echo  TEXTO00043994OROKRJRJUR234;?></h2><div class="_5m7-"><div class=" _5m81 _5m8g"><div class="_6a _6e"><div class="_38io"><div class="_38io _4971 _4971 _3m9"><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT012345678;?><span data-hover="tooltip" class="_5c65 _3m9"  ><sup class="_5je4"></sup></span> <?php echo  TEXTO00043994OROKRJRJUR2345789GHTT0123456789;?> </div><div class="_38io _4971 _4971 _3m9"> <?php echo  TEXTO00043994OROKRJRJUR2345789GHTT01234567890;?></div></div></div><div class="_6a _6e _412s"><img class="_2qnn img" src="/
img_src_promoter/pn02993.jpg" alt=""></div></div></div></div>
<div class="_496_ _2vg3"><h2 class="_3m9 _34g8"><?php echo  TEXTO00043994OROKRJRJUR2345;?></h2><div class="_5m7-"><div class=" _5m81 _5m8g"><div class="_6a _6e"><div class="_38io"><div class="_38io _4971 _4971 _3m9"><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT012345678901;?> <span data-hover="tooltip" class="_5c65 _3m9" id="Span3" ><sup class="_5je4"></sup></span> <?php echo  TEXTO00043994OROKRJRJUR2345789GHTT0123456789012;?></div><div class="_38io _4971 _4971 _3m9"><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT01234567890123;?></div></div></div><div class="_6a _6e _412s"><img class="_2qnn img" src="/
img_src_promoter/49o40r.jpg" alt=""></div></div></div></div>
<div class="_2vg3 l_0-2pjahqo"></div>
</div>
<div class="clear"></div></div>
</div>
<?php };?>
<?php
//verifica se a pgina  de minhas promoções

if ($_GET['topic']=='my_promote' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 


//verifica se tenho promoções
$querycodr2 = mysql_query("SELECT ccuserid FROM promoter where (ccuserid='".CCUSERIDI."' and promoter.id='$mensagemcod->IdOrder') order by promoter.idorder ")or die(mysql_error());;
$rcont373wllele2 = mysql_num_rows($querycodr2);

$total = $rcont373wllele2;


$auc_cod = $mensagemcod->IdCommunity;
//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);

include("func_rest_number.php");

?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo MINHASPROMOCOES03003;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/promote?&pag=1"><?php echo CRIARPROMOCOES0039;?></a></span></div> <div class="Kj889_csw63 _OO84IBOX_default"  >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/my_promote?&pag=1"><?php echo MINHASPROMOCOES03003;?></a></span></div><div  class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/help_promote?&pag=1"><?php echo SABERSOBREPROMOCOES99393;?></a></span></div><div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
//verifica se tem promoções nesta comunidade
$queryPromoter = mysql_query("SELECT type,ccuserid,img,description,timestamp,title,status,link,id,idorder FROM promoter  where (id='$mensagemcod->IdOrder') order by timestamp DESC ")or die(mysql_error());;
$row_promoter= mysql_num_rows($queryPromoter);

 ?>
<div class="_811mnN" >
<div class="_oopLKM01">
    <div class="box_002ooIO-0 _x4FcXc"><?php echo PROMOCOES89393IJE;?></div>
    <div class="box_002ooIO-0 _x4FcXc2"><?php echo INFORMACOES833JEHGA;?><i class="sp_zBd9lhZxYc_ lloepowpoei838382N" alt="" aria-controls="js_n" aria-haspopup="true" role="null"  aria-describedby="js_w"><div  class="ksiieoe838833ue2N boradsemquina3 box_001-jnzz12">
<img src="/img/k0399493.png" /><div><span><?php echo CLIQUES99393JJERR;?><br><?php 	echo  QUANDOSUAPROMOCAO939IJJE;?><br><?php echo DESCARTES9393IJE;?><br><?php echo QUANDOSUAPROMOCAOEDESCARTADA882;?></span></div></div></i></div>
    <div class="box_002ooIO-0 _x4FcXc2" ><?php echo PROMOVIDAPORU378982JJE;?><i class="sp_zBd9lhZxYc_ lloepowpoei838382N" alt="" aria-controls="js_n" aria-haspopup="true" role="null"  aria-describedby="js_w"><div  class="ksiieoe838833ue2N boradsemquina3 box_001-jnzz12">
<img src="/img/k0399493.png" /><div><span><?php echo PROMOVIDAE8383UJEE;?><br><?php echo QUANDOSEUSAMIGOSPROMOVEMSUA993J;?></span></div></div></i></div>
    <div class="box_002ooIO-0 _x4FcXc3"><?php echo ALCANCE939IOJKE;?><i class="sp_zBd9lhZxYc_ lloepowpoei838382N" alt="" aria-controls="js_n" aria-haspopup="true" role="null"  aria-describedby="js_w"><div  class="ksiieoe838833ue2N boradsemquina3 box_001-jnzz12">
<img src="/img/k0399493.png" /><div><span><?php echo ucfirst(ALCANCE939IOJKE);?><br><?php echo NUMERODEPESSOASQUEV383IE;?></span></div></div></i></div>
    <div style="clear: both"></div>
    </div>
<?php 
 if ($row_promoter!=''){
 while($row_promoter_fecht=mysql_fetch_object($queryPromoter)){
 
 //conta quantos cliques na promoção
$queryCount_Cliques = mysql_query("SELECT idclick FROM click_promoter  where (idclick_promoter='$row_promoter_fecht->idorder') order by idclick ASC")or die(mysql_error());;
$row_Count_Cliques= mysql_num_rows($queryCount_Cliques);
//conta descartes na promoção
$queryCount_Trashed = mysql_query("SELECT idtrashed FROM trashed_promoter  where (idtrashed_promoter='$row_promoter_fecht->idorder') order by idtrashed ASC")or die(mysql_error());;
$row_Count_Trashed= mysql_num_rows($queryCount_Trashed);
$div_id=time()."_".$row_promoter_fecht->idorder;
?>
<div class="_oopLKM02">
<div class="box_002ooIO-01 _jKb516VV">
<div class="_jKb516VV2" ><img src="/cropImg.php?arquivo=img_promoter/<?php echo $row_promoter_fecht->img;?>&largura=198&altura=119;"  /></div>
<div class="_6H-vxz2n" ><span><?php echo ocultaTexto($row_promoter_fecht->title,40);?></span></div>
<div class="_6H-vxz23n" ><span class="_029HG87"><?php echo $row_promoter_fecht->description;?></span></div></div>
<div class="box_002ooIO-01 _plKJII617"> <div class="_6H-vxz23n" ><span class="_029HG87"><?php echo CRIADAEM9292OOE." "; $aux373yur=date('d/m/Y',$row_promoter_fecht->timestamp);  echo  $aux373yur;?></span></div>
<div class="_6H-vxz23n" ><span  class="_029HG87"><?php  echo _rest_number($row_Count_Cliques);?> <?php echo strtolower(CLIQUES99393JJERR);?>  </span>
</div><div class="_6H-vxz23n" ><span class="_029HG87" ><?php  echo _rest_number($row_Count_Trashed);?> <?php echo strtolower(DESCARTES9393IJE);?> </span></div>
<div class="_6H-vxz23n" ><p></p><span id="span1<?php echo $div_id;?>"  class="_029HG87" ><p></p><?php if ($row_promoter_fecht->status=='1'){?><i class="_2o_u _1482"></i><?php echo INATIVA82882KKEE; };?>
<?php if ($row_promoter_fecht->status=='2'){?><i class="_2o_u _1484"></i><?php echo ATIVA88383IIEJJHEJEBBKEMRE; };?><?php if ($row_promoter_fecht->status=='3'){?><i class="_2o_u _1485"></i><?php echo DESATIVADA9393IDREJRE; };?></span>
<i class="sp_zBd9lhZxYc_ lloepowpoei838382N" alt="" aria-controls="js_n" aria-haspopup="true" role="null"  aria-describedby="js_w"><div  class="ksiieoe838833ue2N boradsemquina3 box_001-jnzz12">
<img src="/img/k0399493.png" /><div><span><?php echo STATUSDESUACAMPANHA333;?><br><?php echo ATIVA88383IIEJJHEJEBBKEMRE."-".ESTASENDOEXIBIDA53733J; ?><br><?php echo INATIVA82882KKEE."-".PROMOCAO939O3UUINATIVA; ?><br><?php echo DESATIVADA9393IDREJRE."-".PROMOCAOPARADA67773I3K3D;?></span></div></div></i></div><div class="L-9031Xxz"><?php if ($row_promoter_fecht->status=='2'){?><span class="box_001-jnzz14"><div class="_1xil _1b33"><div data-tooltip-content="" data-hover="tooltip" disabled="" value="true" class="_128j _128k _128m" role="checkbox" aria-checked="true" id="js_m"><div class="_128o" tabindex="-1" idcomm="<?php echo $mensagemcod->IdCommunity;?>" orderpro="<?php echo $row_promoter_fecht->idorder;?>" tgid="<?php echo $div_id;?>" text2io1="<?php echo ATIVARPROMOCAO992I2IWNNE;?>" text2io2="<?php echo PARARPROMOCAO93993IE;?>" text2io3="<?php echo strtolower(ATIVA88383IIEJJHEJEBBKEMRE)?>" text2io4="<?php echo strtolower(DESATIVADA9393IDREJRE)?>" vvstatus="<?php echo $row_promoter_fecht->status;?>"><div class="_128p"></div><span id="span2<?php echo $div_id;?>" class="box_001-jnzz13on"><?php echo PARARPROMOCAO93993IE;?></span><?php };?>
<?php if ($row_promoter_fecht->status=='3'){?><span class="box_001-jnzz14"><div class="_1xil _1b33"><div data-tooltip-content="" data-hover="tooltip" disabled="" value="true" class="_128j _128k _128m" role="checkbox" aria-checked="true" id="js_m"><div class="_128n" tabindex="-1" idcomm="<?php echo $mensagemcod->IdCommunity;?>" orderpro="<?php echo $row_promoter_fecht->idorder;?>" tgid="<?php echo $div_id;?>" text2io1="<?php echo ATIVARPROMOCAO992I2IWNNE;?>" text2io2="<?php echo PARARPROMOCAO93993IE;?>" text2io3="<?php echo strtolower(ATIVA88383IIEJJHEJEBBKEMRE)?>" text2io4="<?php echo strtolower(DESATIVADA9393IDREJRE)?>" vvstatus="<?php echo $row_promoter_fecht->status;?>"><div class="_128p"></div><span id="span2<?php echo $div_id;?>" class="box_001-jnzz13on"><?php echo ATIVARPROMOCAO992I2IWNNE;?></span><?php };?>
<?php if ($row_promoter_fecht->status=='1'){?><span class="box_001-jnzz14"><div class="_1xil _1b33"><div data-tooltip-content="" data-hover="tooltip" disabled="" value="true" class="_128j _128k _128m" role="checkbox" aria-checked="true" id="js_m"><div class="_128n" tabindex="-1" idcomm="<?php echo $mensagemcod->IdCommunity;?>" orderpro="<?php echo $row_promoter_fecht->idorder;?>" tgid="<?php echo $div_id;?>" text2io1="<?php echo ATIVARPROMOCAO992I2IWNNE;?>" text2io2="<?php echo PARARPROMOCAO93993IE;?>" text2io3="<?php echo strtolower(ATIVA88383IIEJJHEJEBBKEMRE)?>" text2io4="<?php echo strtolower(DESATIVADA9393IDREJRE)?>" vvstatus="<?php echo $row_promoter_fecht->status;?>"><div class="_128p"></div><span id="span2<?php echo $div_id;?>" class="box_001-jnzz13off"><?php echo PARARPROMOCAO93993IE;?></span><?php };?></div></div></div><div><div id="adsRFEditPauseTip"></div></div></span></div></div>
<div class="box_002ooIO-01 d-0122O-a" ><div class="d-0122O-a2">
        <?php 
                  $queryPromoter_user = mysql_query("SELECT users.UserName,users.NikName,users.ccuserid,friends_list.Idfriend,friends_list.Idme,promoted_by.id_promoted_by FROM users,friends_list force index(Idfriend) inner JOIN  promoted_by   ON (promoted_by.ccuserid=friends_list.Idfriend and promoted_by.id_promoted_by='".$row_promoter_fecht->idorder."')  where (users.ccuserid=friends_list.Idfriend and friends_list.Idme='".CCUSERIDI."' and friends_list.block<>'2')  Order by idpromoted_by ASC  ")or die(mysql_error()); 
                  $row_Promoter_user = mysql_num_rows($queryPromoter_user);
                  if ($row_Promoter_user!=''){
                  $aux_count=0;
                  while($row_Promoter_user_fecht= mysql_fetch_object($queryPromoter_user)){
                  
                  if ($aux_count < '15'){
                 
        ?>
            <a href="/<?php echo $row_Promoter_user_fecht->NikName;?>"><?php echo $row_Promoter_user_fecht->UserName.",";?></a>
            <?php 
                  }; $aux_count=$aux_count+1;};if ($aux_count> '15'){ echo "<b>".MORE93KJSHHY378711." "._rest_number($aux_count)."</b>";};
                  };
            ?>
</div><div class="L-9031Xxz"></div></div>
    <div class="box_002ooIO-01 pio_0o">
    <?php 
        //meus amigos viram
        $queryPromoter_views1 = mysql_query("SELECT users.ccuserid,friends_list.Idfriend,friends_list.Idme FROM users,friends_list left JOIN  view_promoter use index(ccuserid)  ON (view_promoter.ccuserid=friends_list.Idfriend) where (users.ccuserid=friends_list.Idfriend and friends_list.Idme='".CCUSERIDI."' and friends_list.block<>'2' and view_promoter.idview_promoter='$row_promoter_fecht->idorder')group by Idfriend   ")or die(mysql_error()); 
        $row_Promoter_views1 = mysql_num_rows($queryPromoter_views1);
        $lista_Promoter_views0 = array();
        while ($row_do_friends_by0 = mysql_fetch_object($queryPromoter_views1)){
        $lista_Promoter_views0[] = $row_do_friends_by0;
        
        };
        //amigos de meus amigos que  viram
        $count_row_do_friends_by0=0;
        $count_row_do_friends_by=0;
        $lista_Promoter_views = array();
         foreach ($lista_Promoter_views0 AS $row_do_friends_by20) { 
        // echo $row_do_friends_by20->Idfriend."<br>";
        $queryPromoter_viewsL0 = mysql_query("SELECT users.ccuserid,friends_list.Idfriend,friends_list.Idme FROM users,friends_list  left JOIN  view_promoter use index(ccuserid)  ON (view_promoter.ccuserid=friends_list.Idfriend) where (users.ccuserid=friends_list.Idfriend and friends_list.Idme='$row_do_friends_by20->Idfriend' and friends_list.block<>'2' and view_promoter.idview_promoter='$row_promoter_fecht->idorder')group by Idfriend   ")or die(mysql_error()); 
        $row_Promoter_viewsL0 = mysql_num_rows($queryPromoter_viewsL0);
     
       if ($row_Promoter_viewsL0 <>''){
       $count_row_do_friends_by0=$count_row_do_friends_by0+$row_Promoter_viewsL0;
      //amigos em 3 ° grau que vira
        
       // $row_do_friends_by = mysql_fetch_object($queryPromoter_viewsL0);
      //  $lista_Promoter_views[] = $row_do_friends_by;
        
       
       };
         };
        $row_Promoter_views2 = $count_row_do_friends_by0;
      
      
        //total de visualizações
        $queryPromoter_views4 = mysql_query("SELECT idview_promoter FROM view_promoter   where (idview_promoter='$row_promoter_fecht->idorder')  Order by idview ASC  ")or die(mysql_error()); 
        $row_Promoter_views4 = mysql_num_rows($queryPromoter_views4);
       if ($row_Promoter_views4!='0'){
$row_Promoter_views4=$row_Promoter_views4+1;
       };
        ?>
<div class="_6H-vxz23n" ><span class="_029HG87"><?php echo ($row_Promoter_views4)?> pessoas viram  </span></div>
<div class="box_001-jnzz">
<div class="box_001-jnzz0"><span  class="box_001-jnzz1"><?php echo ($row_Promoter_views1)?></span><span class="box_001-jnzz2"><?php echo ($row_Promoter_views2)?></span>
<span class="box_001-jnzz3"><?php echo ($row_Promoter_views4-($row_Promoter_views1+$row_Promoter_views2+$count_row_do_friends_by))?></span><span class="box_001-jnzz4">+<?php echo ($row_Promoter_views4-($row_Promoter_views1+$row_Promoter_views2+$count_row_do_friends_by))?></span></div>
<span class="_1ha4 box_001-jnzz5"><?php echo PROXIMO9292YHBFEE;?></span><img class="box_001-jnzz6" src="/img_communities/prom_98282kkd.png" /><span class="_1ha4 box_001-jnzz7"><?php echo DISTANTE9939J3JDG3;?></span><div class="box_001-jnzz8"><span><?php echo AMIGOSGREAL;?></span></div>
<div class="box_001-jnzz9"><span ><?php echo AMIGOSDEMEUSAMIGOS72;?></span></div>
<div class="box_001-jnzz10"><span ><?php echo AMIGOSDEMEUSAMIGOS724444;?></span></div>
</div><div class="box_001-jnzz11"></div></div>
<div style="clear:both"></div></div>
<?php 
 };
 
 };

?>

</div>

 <?php 
 
?>

</div><div class="clear"></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/my_promote";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
		
echo '</div>';
     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>
<?php
//verifica se a pgina  de promover

if ($_GET['topic']=='promote' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 




$total = '0';


$auc_cod = $mensagemcod->IdCommunity;
//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);



?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo PROMOVACOMMM883;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/promote?&pag=1"><?php echo CRIARPROMOCOES0039;?></a></span></div> <div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/my_promote?&pag=1"><?php echo MINHASPROMOCOES03003;?></a></span></div><div  class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/help_promote?&pag=1"><?php echo SABERSOBREPROMOCOES99393;?></a></span></div><div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
$query55d325 = mysql_query("SELECT ccuserid FROM pay_pall_stamp where ((status='3' or status='4') and ccuserid='".CCUSERIDI."'  and (itemId1='0001' or itemId1='0002' or  itemId1='0003' or  itemId1='0004'))  order by idorder ")or die(mysql_error());
$rcont3766 = mysql_num_rows($query55d325);
 if ($rcont3766!=''){
 ?>

<div class="_0oPh66-0p"><span ><b><?php echo CRIARPROMOCAO9902;?> </b><p><?php 	echo PROMOVAESTACOMUNIDADE922;?></p><br></span></div>
<div class="_9-oowlvg"><div class="_7-cnh_p"><span ><b><?php echo CRIAR72782UEJ;?></b></span></div>
<div class="_9-kjsV">
<div class="_6-aj_uwo"><div class="_0-Lmnas"><span><?php echo TIPODEPROMOCAO929883;?></span></div>
<div class="_1-oiN"><p><input class="text_painel_default_1 list_option" type="radio" name="type" value="2" checked="checked"  > <?php echo DIVULGACAODECOMUNIDADE773;?></p></div><div class="clear"></div></div>
<div class="_8-Njhsw"><span class="_8-Njhsw1"><?php echo TITULO993JJDGH;?></span><input readonly="true" type="text" id="text_8827hhebb" placeholder="<?php echo ocultaTexto($mensagemcod->CommunityName,30);?>" value="<?php echo ocultaTexto($mensagemcod->CommunityName,30);?>"  /><span class="_8-Njhsw2" ></span></div>
<div class="L-882X"><span class="L-882X1"><?php echo DESCRICAOIW0389JKJ;?></span><textarea id="Txe_01PLK-s" onkeyup="ismaxlength(this,70,'_01iwTYYBH1','<?php echo AINDARESTAM99IIE;?>','<?php echo LIMITEDECARACTERESEXEDIDO9393K;?>')" placeholder="<?php echo PARTICIPEDANOSSACOMUNIDADE883;?>"></textarea><span id="_01iwTYYBH1" class="L-882X2"><?php echo AINDARESTAM99IIE;?> 78</span></div></div>
<div class="_8-hCxwas"><div class="_8-hCxwasB"><span ><b><?php echo VISUALIZACAO838UI3J;?></b></span></div>
<div class="_38m0" onclick="$('._5yg9').hide(); $('._5yg8').removeClass('_5yg8').addClass('_5yg9'); $(this).next('._5yg9').slideDown(600);">
<!-- react-text: 1919 --><?php echo FEEDDEAMIGOSMOVEL9393;?><!-- /react-text --></div><div class="_5yg9">
<div class="radius_3px sombra_padrao_bottom _9-lKjn3"><div class="_9-lKjn31"><div  class="_9-lKjn312" ><div class="_9-lKjn3123" >
<div class="_9-lKjn31234" class="radius_3px" style="background-image:url('/cropImg.php?arquivo=profile_img/<?php echo $UserFotoPerfil_Cokie ; ?>&amp;largura=45&amp;altura=45');background-repeat:repeat;"></div></div>
<div class="_9P-l" ><div  class="_9P-l3"><b><?php echo ocultaTexto($UserName,20);?><br /><?php echo PROMOVEUISSO8383JKD;?></b></div> </div> <div class="clear"></div></div>
<div class="_9P-l34" ><div  class="_9P-l345 _982BVxZ"><img id="_o92IMG_0001" src="/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=250&altura=150;"  /></div><div class="_6H-vxz2" ><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></div><div class="_6H-vxz23 _ooplsh6637" ><?php ucfirst(DESCRICAOIW0389JKJ);?></div></div>
<div class="_uy-io82" ><div class="_uy-io823" ><div class="_9i-nb12" >2 <?php echo AMIGOSPROMOVERAMISSO3993;?></div>
<div class="_p01-2ls"><img src="/img_communities/event-promotion.png"  /></div></div><div class="clear"></div></div></div></div></div>

<div class="_38m0" onclick="$('._5yg9').hide(); $('._5yg8').removeClass('_5yg8').addClass('_5yg9'); $(this).next('._5yg9').slideDown(600);">
<!-- react-text: 1919 --><?php echo FEEDDEAMIGOS3883UJJDD;?><!-- /react-text --></div><div class="_5yg9">
<div class="radius_3px sombra_padrao_bottom _9-lKjn3"><div class="_01p-O" ><div class="_01p-O1" >
<div class="_01p-O12"><div class="_9-lKjn31234" class="radius_3px" style="background-image:url('/cropImg.php?arquivo=profile_img/<?php echo $UserFotoPerfil_Cokie ; ?>&amp;largura=45&amp;altura=45');background-repeat:repeat;"></div></div>
<div class="_9P-l" ><div  class="_9P-l3"><b><?php echo ocultaTexto($UserName,20);?><br /><?php echo PROMOVEUISSO8383JKD;?></b></div> </div> <div class="clear"></div></div>
<div class="_9P-l34" ><div  class="_9P-l345"><img id="_o92IMG_0002" src="/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=250&altura=150;"  /></div><div class="_6H-vxz2" ><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></div><div class="_6H-vxz23 _ooplsh6637" ><?php ucfirst(DESCRICAOIW0389JKJ);?></div></div>
<div class="_1Povgsd"><div class="_1Povgsd1"><div  class="_1Povgsd12">2 <?php echo AMIGOSPROMOVERAMISSO3993;?></div><div><label class="css_btn_class_bt_pro"><?php echo LEGALPROMOVA5627782J;?></label></div></div><div class="clear"></div></div>
</div></div></div>

<div class="_38m0" onclick="$('._5yg9').hide(); $('._5yg8').removeClass('_5yg8').addClass('_5yg9'); $(this).next('._5yg9').slideDown(600);" >
<!-- react-text: 1919 --><?php echo COLUNADIREITADESKTOP20028;?> <!-- /react-text --></div>
<div class="_5yg8"><div class="radius_3px sombra_padrao_bottom _9-lKjn3">
<div class="_01p-O"><div class="_i10_osk1"><?php echo PROMOCAO929IJJEE;?></div><div class="_9P-l34"><div class="_9P-l345"><img id="_o92IMG_0003" src="/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=250&altura=150;"/></div>
<div class="p_277-abz2c"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></div><div class="p_277-abz2ct _ooplsh6637"><?php ucfirst(DESCRICAOIW0389JKJ);?></div>
<img class="_073hdb_hsu" src="/img_communities/pk849kHGNs.png"/></div>
<div class="_1Povgsd"><div class="_81_oskk92" ><div class="_81_oskk921" style="background-image:url('/cropImg.php?arquivo=profile_img/<?php echo $UserFotoPerfil_Cokie ; ?>&largura=45&altura=60');background-repeat:repeat;"></div>
<div class="_0KjnFr"><?php echo ocultaTexto($UserName,9);?></div> </div>
<div class="l_981SA" ><div>2 <?php echo AMIGOSPROMOVERAMISSO3993;?></div><div><label class="css_btn_class_bt_pro"><?php echo PROMOVEUISSO8383JKD;?></label></div></div><div class="clear"></div></div></div></div></div>
</div></div><div class="clear"></div>
<div class="X-zI91"><div  class="X-zI912"><div class="X-zI913"><span class="X-zI914"><?php echo IMAGENS8282UEHDHW;?></span><p><span class="X-zI915"><?php echo VOCEPODEUSARIMAGEN828932;?></span></p></div><div class="_2npo _2npo3">
<label class="_2npv" for="AdsCFCreativeImagePanel0" role="button"><div class="_2rd9"><form id="form_new_img_us1" method="post"  enctype="multipart/form-data" action="/up_load_imagem_promoter_comm.php">
<input type="hidden" id="nam_url_92" name="nam_url_92" value="/<?php echo $url_teste_default."/".$aux_id_profile."/promote" ;?>">
<input type="hidden" id="nam_cod_comm93" name="nam_cod_comm93" value="<?php echo $mensagemcod->IdOrder;?>">
<input id="imagemN1" name="imagemN1"  type="file"  class="foto"  />
</form><div class="_3bwv _3bww"><div class="_3bwy"><div class="_3bwx"><div class="_5uvy"></div></div><div class="_3bwx"><div class="_5uvz"><?php echo ADCIONAIMAGEM2737UEWSEW;?></div></div></div></div></div></label></div>
<div class="_2npv5"></div><div id="_2npv56" class="_2npv56"><img id="_o92IMG_0004" src="<?php    $paperuu38="bg_community/$mensagemcod->CommunityImg";    $imnfoC = getimagesize($paperuu38); $img_wC = $imnfoC[0]; $img_hC = $imnfoC[1];?>/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=153&altura=98"/><span><?php echo $img_wC ."x".$img_hC ;?></span></div>
</div><div class="_4j35"><div class="_50f4" ><?php echo ESPECIFICACOESURECOMENDADAS93I;?></div><ul class="_4j34"><li><span class="_50f8g"><?php echo TAMANHODAIMAGEMRECOMENDADO922;?><div class=" _c24">600 x 222 pixels</div></span></li><li><span class="_50f8g"><?php echo PROPORCAODAIMAGEM773UEED;?>&nbsp;<span  display="inline" style="font-weight: bold; color: rgb(75, 79, 86);">8:3</span></span></li><li><span class="_50f8g"><?php echo PARAMAXIMISAR99393KE;?>&nbsp;<span display="inline" style="font-weight: bold; color: rgb(75, 79, 86);"><?php echo POCUOOUMENOSTEXTO9393I;?></span>&nbsp;</span></li></ul></div> &nbsp;<div class="clear"></div></div>
<div class="_6Vzxx"> <div id="Lk-28iw_vag2" class="radius_3px" style="border: 1px Solid #CCCC00; position: absolute;display:none; background-color: #fff1a6; text-align: center; padding: 5px 10px 5px 10px; width: auto; height: auto; right: 40%; top: -40px;"></div><label  onclick="window.location=/<?php echo $url_teste_default."/".$aux_id_profile; ?>" class="_6Vzxx1 radius_3px"><?php echo CANCELARGERAL;?></label><label onclick="_8i_j_CXD('<?php echo $mensagemcod->IdOrder;?>',this,'<?php echo $url_teste_default."/".$aux_id_profile."/my_promote?&pag=1" ;?>','<?php echo AGUARDE939I3JDH;?>','<?php echo CRIANDOPROMOCAO883UJDD;?>','<?php echo TEXTOMUITOCURTO2882;?>','<?php echo VOCEDEVEESCREVERUMADESCRICAO9292;?>','<?php echo COLOQUEUMAIMAGEM82872;?>','<?php echo $mensagemcod->category;?>');" class="_6Vzxx2 radius_3px"><?php echo CRIARPROMOCA52Y2JH;?></label><div class="clear"></div>
<div class="_4j350-n radius_3px" ><img  src="/img_communities/8iikrk030ppeorr22.png"/><div><span><?php echo SERA9292DNNDYASDHSD;?></b></span></p></div></div></div>
<?php 

 }else{
 
 

?>
<style>
._3a3h>._34g8 {
    color: #1d2129;
    font-size: 39px;
    line-height: 54px;
    margin-bottom: 12px;
    margin-left: -3px;
}
._3m9 {
    font-family: 'Freight Sans', helvetica, arial, sans-serif !important;
    font-weight: normal !important;
    letter-spacing: normal;
    text-rendering: optimizelegibility;
}
h1 {
    font-size: 14px;
}
h1, h2, h3, h4, h5, h6 {
    color: #1d2129;
    font-size: 13px;
    margin: 0;
    padding: 0;
}

h1 {
    display: block;
    font-size: 2em;
    -webkit-margin-before: 0.67em;
    -webkit-margin-after: 0.67em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
}

._3a3g {
    letter-spacing: .01em;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    width: 1002px;
}


._3a3h {
    position: relative;
    z-index: 10;
}
._2vg3 {
    margin-left: auto;
    margin-right: auto;
    width: 810px;
}
._3a3g ._2qnn {
    vertical-align: top;
}
._3a3i {
    position: relative;
    text-align: center;
    z-index: 0;
}
._3-p2 ._3a3h>._38io {
    margin-bottom: 19px;
    width: 610px;
}
._3a3h>._38io {
    color: #90949c;
    font-size: 18px;
   
}
._3a3g {
    letter-spacing: .01em;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    width: 1002px;
}
._2qix {
    background: #4080ff;
    border: 0;
    color: #fff;
    cursor: pointer;
    text-align: center;
    transition: background 300ms;
}
._42ft {
    cursor: pointer;
    display: inline-block;
    text-decoration: none;
    white-space: nowrap;
}
a {
    color: #365899;
    cursor: pointer;
    text-decoration: none;
}
._7tn {
    border-radius: 4px;
    font-size: 17px;
    padding: 7px 26px 6px 26px;
}
._3ma {
    font-family: 'Freight Sans Bold', helvetica, arial, sans-serif !important;
    font-weight: bold !important;
    letter-spacing: normal;
    text-rendering: optimizelegibility;
}
._2qix:hover{background:#3b5998}
._029jj_ki28-99{margin-bottom:20px;};
._496_ {
    border-top: 1px solid #e5e5e5;
    letter-spacing: .01em;
    line-height: 1.3;
    padding-bottom: 54px;
    padding-top: 34px;
}
._496_>._34g8 {
    color: #4b4f56;
    font-size: 28px;
    line-height: 40px;
    margin-bottom: 9px;
    width: 455px;
}
._5m7- div._5m81._5m8g>div:nth-child(2n+1), ._5m7- div._5m81._5m8g>li:nth-child(2n+1) {
    margin-left: 0;
}
._5m7- ._5m8g>._5m8h, ._5m7- ._5m8g>div:first-child, ._5m7- ._5m8g>li:first-child {
    margin-left: 0;
}
._5m7- ._5m8g>div, ._5m7- ._5m8g>li {
    margin-left: 30px;
}
._5m7- ._5m81>div, ._5m7- ._5m81>li, ._5m7- ._5m8e>._5m82 {
    width: 370px;
}
._6e {
    vertical-align: top;
}
._6a {
    display: inline-block;
}
._496_ ._38io {
    color: #90949c;
    font-size: 17px;
    line-height: 26px;
    margin-bottom: 22px;
}
.j_k-928-NNB-pal{-moz-border-radius:20px;-webkit-border-radius:20px;border-radius:20px;}
._496_ {
    border-top: 1px solid #e5e5e5;
    letter-spacing: .01em;
    line-height: 1.3;
    padding-bottom: 54px;
    padding-top: 34px;
}
.o_ksj-29_bahg293{margin-top:60px;}
</style>
<div class="_3a3i _2vg3" style="height: 322px">
<div class="_4j350-n radius_3px o_ksj-29_bahg293" ><img  src="/img_communities/8iikrk030ppeorr22.png"/><div><span><?php echo  TEXTOIEJRER8934IFJDFDLLFDKRJJUR8833;?></b></span></p></div></div>
<label class="_42ft _2qix _7tn _3ma o_ksj-29_bahg293" onclick="ieki99_oIY();" ><?php echo  TEXTO00043994OROKRJRJUR2345789GHTT;?></label>
</div>
<?php };?>
</div>
<input type="hidden" id="o_bbag617JHB" >
 <?php 

?>

</div><div class="clear"></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/promote";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
		
echo '</div>';
     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>
<?php
//verifica se a pgina da lixeira

if ($_GET['topic']=='laystall' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);
         


$inicio = 0;
$limite = 10	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 

//CONTA tpicos
$queryTOPICOS = mysql_query("SELECT ask_forum.idorder FROM ask_forum  INNER JOIN forum ON (IdCommunity='$mensagemcod->IdCommunity' and forum.idforum=ask_forum.idforum and ask_forum.cod_delation='1')   order by ask_forum.idorder ASC ")or die(mysql_error());
$row_TOPICOS = mysql_num_rows($queryTOPICOS);
$total = ceil($row_TOPICOS);

//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$mensagemcod->IdCommunity' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);
//verifica moderador 
$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$mensagemcod->IdCommunity' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
$auc_codcommet = $mensagemcod->IdCommunity;
//flush notificações
mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and CommandNoti='$auc_cod' and CommandNoti<>'') order by IdOrder DESC limit 100 ")or die(mysql_error());; 

//verifica se aocmunidade é privada 
if ($row_moderador03!='' || $mensagemcod->UserIdPro==USERID_ID){
?>
<input type="hidden"  value="<?php echo $auc_cod;?>"id="sjdjsadoiewe787474uuhr3555fefef">
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo LIXEIRACOMMM883 ?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/laystall?&pag=1"><?php echo  LIXEIRACOMMM883;?></a></span>
</div>
</div>


<div class="box-pagi-top-30" >
<div class="o-383s-spwi-2002n" >
<div style="position: relative; width: auto; height: 40px"><span onclick="$('.box_menu_op_commNN').toggle();" class="bottom_default_orkut_2"><?php  echo TEXTCOMUUNITIES939237887324;?></span><div  class="estilodeboraesombra24  box_menu_op_commNN">
<ul>
<li onclick="exclu_clea_8929kk('<?php echo $mensagemcod->IdCommunity;?>','<?php echo "/".$url_teste_default."/".$mensagemcod->IdOrder;?>')" class="men_new_90349e3 dhsjhdff775P" ><?php  echo TEXTCOMUUNITIES939237887323;?></li>
<li onclick="$('.box_menu_op_commNN').toggle();" class="men_new_90349e3 dhsjhdff775P"><?php  echo TEXTCOMUUNITIES93923788732;?></li></ul></div></div><div class="clear"></div></div>
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/laystall?&cod=".$_GET['cod']."";
   
    $prox1 = $pag + 1;
	$ant1 = $pag - 1;
	$ultima_pag1 = ceil($total / $limite);
	$penultima1 = $ultima_pag1 - 1;	
	$adjacentes1 = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao1 = '<a href="'.$url_m.'&pag='.$ant1.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag1 <= 5)
{
	for ($i=1; $i< $ultima_pag1+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag1 > 5)
{
	if ($pag < 1 + (2 * $adjacentes1))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes1); $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	elseif($pag > (2 * $adjacentes1) && $pag < $ultima_pag1 - 3)
	{
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes1; $i<= $pag + $adjacentes1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	else {
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $ultima_pag1 - (4 + (2 * adjacentes)); $i <= $ultima_pag1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox1 <= $ultima_pag1 && $ultima_pag1 > 2)
	{
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$prox1.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao1;
		
echo '</div>';
     ?>
</div>
<div class="line-main-box-default" ></div> 


<div class="bg_default_orkut2blue_orkut _o-o93i-2oieu">
 <?php 

$query55 = mysql_query("SELECT users.UserId,users.NikName,users.UserFotoThumb,users.UserName,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum,ask_forum.cod_delation,ask_forum.idforum FROM ask_forum INNER JOIN users ON (users.UserId=ask_forum.UserId and ask_forum.cod_delation='1') where ask_forum.idforum IN (select idforum from forum where IdCommunity='$mensagemcod->IdCommunity' and forum.idforum=ask_forum.idforum)  order by ask_forum.idorder ASC limit $inicio,$limite ")or die(mysql_error());
$rcont334 = mysql_num_rows($query55);
 if ($rcont334!='0'){
                while($mensagem = mysql_fetch_object($query55)) {
             
 ?>
 <!-- feed de respostas --> 
<div class="ui_mw_postoosm box-msg-ask-topic993" onmouseover="mouse_over_menu(this);" ><div class="box-039-mn-djeue"><label ><?php if ((time() - $mensagem->timestamp) < '432000'){  $aux373yur=date('Y-m-d H:i:s',$mensagem->timestamp);  echo  Datetodays($aux373yur);}else{echo  date('d/m/Y H:i:s',$mensagem->timestamp);}; ?></label><?php if (USERID_ID==$mensagem->UserId or $rcont373wllele!='' or $rcont373e!=''){ ?> <span onclick="exclu_ask_029(this,'<?php echo $mensagem->idorder; ?>','<?php echo $mensagem->idforum;?>');" class="bottom_default_orkut_2"><?php echo EXCLUIRTOPICOS3882992;?></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo EXCLUIRTOPICOS3882992;?></span><?php };?></div>
<div class="box-39-3ijf-JH-"><div class="box-399-eke-LK-sjd"><div class="box-3993kwk-lksn-ieo"><a href="/<?php echo ($mensagem->NikName) ?>"><img onclick="view_prof('<?php echo ($mensagem44->UserId) ?>');" src="/cropImg.php?arquivo=profile_img/<?php echo $mensagem->UserFotoThumb;?>&largura=70&altura=100"  class="box_img-0393-fhjs" /></a></div></div>
<div class="box-3939j-akgs-lp"> <a href="/<?php echo ($mensagem->NikName) ?>"><?php echo $mensagem->FullName;?></a>
<p><?php echo (sanitize_video($mensagem->ask_forum));?></p>
<div class="video_0393"><?  $aux=($mensagem->LinkVideo); if ($aux!='') { ?><iframe width="500" height="315" src="<?php echo $mensagem->LinkVideo;?>" frameborder="0" allowfullscreen></iframe><?php }?> </div></div><div class="clear"></div>
<div class="box_img-com-ask-3783"><?php if ($mensagem->ImgPost!='') {?><img src="/ask_forum_img/<?php echo $mensagem->ImgPost;?>"/><?php };?></div>
</div></div> 
<!-- feed de respostas -->                  
<?php  }?>
<?php };?>
</div><div class="clear"></div><div class="line-main-box-default_bottom" ></div>  
<?php if (USERID_ID!='' && $row_forum->closed=='0' && USERALLDENIEDCOMM2899=='29982') {?><div class="box-pagi-bottom-10" ><?php }else{?><div class="box-pagi-bottom-30" ><?php };?>
<?php 
   $url_m = "/".$url_teste_default."/".$aux_id_profile."/laystall?&cod=".$_GET['cod']."";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>
<?php }else{
    $text_929202jjje =ALERTADECOMUNIDADEPRIVADA8839922;
echo <<<html
<div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="box-ieie-399ekke-eolke" >
    <img src="/img_news_2016/magnifier_plus_icon-icons.com_67832.png"/><span>{$text_929202jjje}</span></div></div>

html;
};
};
?>
<?php
//verifica se a pgina do forum

if ($_GET['topic']=='topic' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);
         


$inicio = 0;
$limite = 10	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 

$auc_cod  = Sanitize::filter($_GET['cod']);

//CONTA tpicos
$queryTOPICOS = mysql_query("SELECT ask_forum.idorder FROM ask_forum,users where (users.UserId=ask_forum.UserId) and  ask_forum.idforum='$auc_cod' and ask_forum.cod_delation<>'1' order by ask_forum.idorder ASC  ")or die(mysql_error());;
$row_TOPICOS = mysql_num_rows($queryTOPICOS);
$total = ceil($row_TOPICOS);

//CONTA os ultimos tpicos
$queryTOPICOSlast = mysql_query("SELECT ask_forum.idorder FROM ask_forum,users where (users.UserId=ask_forum.UserId) and ( ask_forum.idforum='$auc_cod' and ('".time()."' - ask_forum.timestamp < '600')) order by ask_forum.timestamp DESC  ")or die(mysql_error());;
$row_TOPICOSLast = mysql_num_rows($queryTOPICOSlast);
session_register('k_iw38002932'); 
$_SESSION['k_iw38002932']=$row_TOPICOSLast;
//pega nome doi tpico
$queryForum = mysql_query("SELECT UserName,LinkVideo,ask_forum,idforum,UserId,fixed,closed,timestamp,lastactivi,nometopico,ImgPost FROM forum where  idforum='$auc_cod'  limit 1 ")or die(mysql_error());
$row_forum = mysql_fetch_object($queryForum);

//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$mensagemcod->IdCommunity' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);
//verifica moderador 
$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$mensagemcod->IdCommunity' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
$auc_codcommet = $mensagemcod->IdCommunity;
//flush notificações
mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and CommandNoti='$auc_cod' and CommandNoti<>'') order by IdOrder DESC limit 100 ")or die(mysql_error());; 

//verifica se aocmunidade é privada 
if ($mensagemcod->CommunityPrivacy=='2' || USERALLDENIEDCOMM2899=='29982' ){
?>
<input type="hidden"  value="<?php echo $auc_cod;?>"id="sjdjsadoiewe787474uuhr3555fefef">
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><h3 class="h3"><?php echo ocultaTexto($row_forum->nometopico,30) ?></h3>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/forum?&pag=1"><?php echo  FORUM9398873;?></a><font>&nbsp;>&nbsp;<?php echo ocultaTexto($row_forum->nometopico,30) ?></font></span>
</div>
</div>


<div class="box-pagi-top-30" >
<div class="o-383s-spwi-2002n" ><div class="o-383s-spwi-20023n" ><?php if($row_my_com88 !='' || $row_moderador03!='') {?><span  class="bottom_default_orkut_2"><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>/edit_topic?&cod=<?php echo $auc_cod; ?>"><?php echo  TOPICOEDIT9392392982842;?></a></span><?php };?><?php if ($row_forum->closed!='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOFECHADOALERT44);echo  str_replace('!','',$text);?></span><?php };?><?php if ($row_forum->fixed!='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOFIXASDOALERT33);echo  str_replace('!','',$text);?></span><?php };?><?php if ($row_forum->fixed=='0' && $row_forum->closed=='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOABERTOALERT3);echo  str_replace('!','',$text);?></span><?php };?></div><div class="clear"></div></div>
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/topic?&cod=".$_GET['cod']."";
   
    $prox1 = $pag + 1;
	$ant1 = $pag - 1;
	$ultima_pag1 = ceil($total / $limite);
	$penultima1 = $ultima_pag1 - 1;	
	$adjacentes1 = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao1 = '<a href="'.$url_m.'&pag='.$ant1.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag1 <= 5)
{
	for ($i=1; $i< $ultima_pag1+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag1 > 5)
{
	if ($pag < 1 + (2 * $adjacentes1))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes1); $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	elseif($pag > (2 * $adjacentes1) && $pag < $ultima_pag1 - 3)
	{
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes1; $i<= $pag + $adjacentes1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	else {
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $ultima_pag1 - (4 + (2 * adjacentes)); $i <= $ultima_pag1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox1 <= $ultima_pag1 && $ultima_pag1 > 2)
	{
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$prox1.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao1;
		
echo '</div>';
     ?>
</div>
<div class="line-main-box-default" ></div> 

<!-- titulo do tópico -->
<?php 
//variáveis
$queryVariaveisTopico= mysql_query("SELECT NikName,UserFotoThumb,FullName FROM users  where UserId='$row_forum->UserId' limit 1")or die(mysql_error());;
$row_count_userTopciadd= mysql_num_rows($queryVariaveisTopico);
if ($row_count_userTopciadd!=''){
$row_topic_var= mysql_fetch_object($queryVariaveisTopico);
?>
<div class="ui_mw_postoosm box-msg-ask-topic993" onmouseover="mouse_over_menu(this);" ><div class="box-039-mn-djeue"><label ><?php if ((time() - $row_forum->timestamp) < '432000'){  $aux373yur=date('Y-m-d H:i:s',$row_forum->timestamp);  echo  Datetodays($aux373yur);}else{echo  date('d/m/Y H:i:s',$row_forum->timestamp);}; ?></label></div>
<div class="box-39-3ijf-JH-"><div class="box-399-eke-LK-sjd"><div class="box-3993kwk-lksn-ieo"><a href="/<?php echo ($row_topic_var->NikName) ?>"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_topic_var->UserFotoThumb;?>&largura=70&altura=100"  class="box_img-0393-fhjs" /></a></div></div>
<div class="box-3939j-akgs-lp"> <a href="/<?php echo ($row_topic_var->NikName) ?>"><?php echo $row_topic_var->FullName;?></a>
<p><?php echo (($row_forum->ask_forum));?><?php if ($row_forum->ImgPost!='') {?><center><img src="/forum_img/<?php echo $row_forum->ImgPost;?>"/></center><?php };?></p>
<div class="video_0393"><?  $aux=($row_forum->LinkVideo); if ($aux!='') { ?><iframe width="500" height="315" src="<?php echo $row_forum->LinkVideo;?>" frameborder="0" allowfullscreen></iframe><?php }?> </div></div><div class="clear"></div>
</div></div> 
<?php };?>
<!-- titulo do tópico -->
<div class="bg_default_orkut2blue_orkut _o-o93i-2oieu">
 <?php 
// mysql_query("UPDATE ask_forum SET status_ask='' where  idforum='$auc_cod' and status_ask='1' ");

$query55 = mysql_query("SELECT users.UserId,users.NikName,users.UserFotoThumb,users.UserName,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum,ask_forum.cod_delation FROM ask_forum,users where (users.UserId=ask_forum.UserId) and  ask_forum.idforum='$auc_cod' and ask_forum.cod_delation<>'1'  order by ask_forum.idorder ASC limit $inicio,$limite ")or die(mysql_error());
$rcont334 = mysql_num_rows($query55);
 if ($rcont334!='0'){
                while($mensagem = mysql_fetch_object($query55)) {
             
 ?>
 <!-- feed de respostas --> 
<div class="ui_mw_postoosm ui_box_ok box-msg-ask-topic993" onmouseover="mouse_over_menu(this);" ><div class="box-039-mn-djeue"><label ><?php if ((time() - $mensagem->timestamp) < '432000'){  $aux373yur=date('Y-m-d H:i:s',$mensagem->timestamp);  echo  Datetodays($aux373yur);}else{echo  date('d/m/Y H:i:s',$mensagem->timestamp);}; ?></label><?php if (USERID_ID==$mensagem->UserId or $rcont373wllele!='' or $rcont373e!=''){ ?> <span onclick="exclu_ask_029(this,'<?php echo $mensagem->idorder; ?>','<?php echo $auc_cod;?>');" class="bottom_default_orkut_2"><?php echo EXCLUIRTOPICOS3882992;?></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo EXCLUIRTOPICOS3882992;?></span><?php };?></div>
<div class="box-39-3ijf-JH-"><div class="box-399-eke-LK-sjd"><div class="box-3993kwk-lksn-ieo"><a href="/<?php echo ($mensagem->NikName) ?>"><img onclick="view_prof('<?php echo ($mensagem44->UserId) ?>');" src="/cropImg.php?arquivo=profile_img/<?php echo $mensagem->UserFotoThumb;?>&largura=70&altura=100"  class="box_img-0393-fhjs" /></a></div></div>
<div class="box-3939j-akgs-lp"> <a href="/<?php echo ($mensagem->NikName) ?>"><?php echo $mensagem->FullName;?></a>
<p><?php echo (sanitize_video($mensagem->ask_forum));?></p>
<div class="video_0393"><?  $aux=($mensagem->LinkVideo); if ($aux!='') { ?><iframe width="500" height="315" src="<?php echo $mensagem->LinkVideo;?>" frameborder="0" allowfullscreen></iframe><?php }?> </div></div><div class="clear"></div>
<div class="box_img-com-ask-3783"><?php if ($mensagem->ImgPost!='') {?><img src="/ask_forum_img/<?php echo $mensagem->ImgPost;?>"/><?php };?></div>
<?php if (USERALLDENIEDCOMM2899=='29982'){?><div class="bg_default_orkut2blue_orkut _box_ask_reati_comm"> <label class="text-box-like-ask-comm-03" onclick="share_commPAsk('<?php echo $auc_cod;?>','<?php echo $mensagem->idorder; ?>','<?php ?>')"><?php echo COPRATILHARTOPICO373782III;?></label>
<?php if ($mensagem->ccuserid!=CCUSERIDI) {?><label class="text-box-like-ask-comm-03" >|</label><label class="text-box-like-ask-comm-03"  onclick="ask_commForumUs('<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagem->ccuserid;//id do dono da resposta?>','<?php echo $mensagem->UserName;//nome do dono da resposta?>')" ><?php echo RESPONDER388IEIDENB;?></label><?php };?>
<?php 
//verifica se eu gostei          
$query17b43fefrer = mysql_query("SELECT ccuserid FROM like_ask_forum where ccuserid='".CCUSERIDI."' and id_ask='$mensagem->idorder' limit 1 ")or die(mysql_error());;
$rcont37b895943ru4wew = mysql_num_rows($query17b43fefrer);
//conta quantos gostaram
$querycoddr4tkjr35ith4 = mysql_query("SELECT ccuserid FROM like_ask_forum where id_ask='$mensagem->idorder' ")or die(mysql_error());;
$rcont37b8938ye38rw3443 = mysql_num_rows($querycoddr4tkjr35ith4);
if ($rcont37b895943ru4wew=='0'){      
          
          ?><label class="text-box-like-ask-comm-03" >|</label><label onclick="like_28882ask(this,'<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagemd->ccuserid;//id do dono da resposta?>');" trrcall=""  class="text-box-like-ask-comm-03"><?php echo GOSTOU84884HHS;?></label>
          <?php }else{?><label onclick="like_28882ask(this,'<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagemd->ccuserid;//id do dono da resposta?>');" trrcall="23232"  class="text-box-like-ask-comm-03"><?php echo GOSTOU84884HHSfff;?></label>
          <?php }; if ($rcont37b8938ye38rw3443!='' or $rcont37b895943ru4wew!='') {?><img class="img-box-like-ask-comm39" src="/img/i383r3hiuere.png" /><label class="text-box-like-ask-comm-03" >(<?php echo $rcont37b8938ye38rw3443;?>)</label><?php };?></div><?php };?> </div></div> 
<!-- feed de respostas -->                  
<?php  }?>
<?php if (USERALLDENIEDCOMM2899=='29982'){?>
<!-- refresh asks -->
<input type="hidden"  id="iwO_GX_jsa62wj"value="<?php echo $auc_cod;?>">
<input type="hidden" id="iwO_GX_jsa62" value="<?php echo $auc_codcommet;?>">
<div id="mshJHasah_9qwqi_alqooOI"></div>
<!-- refresh asks -->
<?php  };};?>
</div><div class="clear"></div><div class="line-main-box-default_bottom" ></div>  
<?php if (USERID_ID!='' && $row_forum->closed=='0' && USERALLDENIEDCOMM2899=='29982') {?><div class="box-pagi-bottom-10" ><?php }else{?><div class="box-pagi-bottom-30" ><?php };?>
<?php 
   $url_m = "/".$url_teste_default."/".$aux_id_profile."/topic?&cod=".$_GET['cod']."";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>


<?php if (USERID_ID!='' && $row_forum->closed=='0' && USERALLDENIEDCOMM2899=='29982') {
$idioma_text =IDIOMACOMUII8388JJJJD;
$ENVIAR_99=ENVIAR98883JJE;
$text_textareabox=TEXTOBOXTEXAREAII992;
echo <<<html
<div class="o-okj-3883j-bbgga-s">
<div class="M-ksjjsh773_owp">
<link rel="stylesheet" type="text/css" href="/mervick-emojionearea-d1a852f/dist/emojionearea.css" media="screen">
<link rel="stylesheet" href="/Trumbowyg-master/dist/ui/trumbowyg.css">
<link rel="stylesheet" href="/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.css">
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<input type="hidden" name="uiw_927_521gsXX1" id="uiw_927_521gsXX1" value=""></input>
<input type="hidden" name="uiw_927_521gsXX2"  id="uiw_927_521gsXX2"value=""></input>
<input type="hidden" name="uiw_927_521gsXX3" id="uiw_927_521gsXX3" value=""></input>
<div  id="textarea_999" class="jqte-test" placeholder="$text_textareabox"></div>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/Trumbowyg-master/dist/trumbowygN.js"></script>
<script src="/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.js" ></script>
<script src="/Trumbowyg-master/plugins/upload/trumbowyg.upload.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Trumbowyg-master/dist/langs/$idioma_text.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/mervick-emojionearea-d1a852f/dist/emojionearea.js"></script>
<div id="subisaymsg_0"  class="subisaymsg">
<button type="submit"  onclick="CommTopicNvn('$auc_cod','$auc_codcommet','');" class="botao_azul _bot_02838-dofkd" title="Enviar..." >$ENVIAR_99</button>
<!-- novo painel de emojis -->
<div id="standalone" class="box_standalone" data-emoji-placeholder=":smiley:"></div><!-- novo painel de emojis -->
</div>
<script type="text/javascript">
$(document).ready(function() {   $("#standalone").emojioneArea({   standalone: true,   autocomplete: false,      events: {  emojibtn_click: function (button, event) { var img32843438743 = button.children().data("src");   $(".trumbowyg-editor").html($(".trumbowyg-editor").html()+"<img src='"+img32843438743+"' />");       }    }     });   }); 
</script><script>
$('.jqte-test').trumbowyg({    btnsAdd: ['foreColor'],         lang: '$idioma_text',        image: {        dropdown: ['insertImage', 'upload'],       ico: 'insertImage'      }         });
 var ujjeu7775rrruer84r484ru = "";
			var ujjeu7775rrruer84r484ru2 = "";
   		var r_0993XX_Uijkkshagte635=true;var key_738 = 'tYt63Hbj_p3_p053fN6_000';var val_039i_iiiUJ = '2887-66d4-a0fb-4d0d-22d6b2';if (localStorage.getItem(key_738)!=null){ 	if (localStorage.getItem(key_738) == "O_uye_0"){r_0993XX_Uijkkshagte635=false;}else{ r_0993XX_Uijkkshagte635=true;};}else{ if(id_odosngsfgnsfi959tjtern == val_039i_iiiUJ || id_odosngsfgnsfi959tjtern =="9a04-b322-67c0-a6d7-2267dc"){  localStorage.setItem(key_738,'O_uye_0');r_0993XX_Uijkkshagte635=false;};};//83773yy8883
   		
function CommTopicNvn(aux_333,qaueoo,aux_1){
$('.botao_azul').css({'opacity':0.1,'-moz-opacity':0.1,'-khtml-opacity':0.1});
$("#form_data").val($(".trumbowyg-editor").html());	var asj8s8sidsish=aux_333;var txte_enqujjsdj=$("#form_data").val();var txte_enqujjsdj444 = txte_enqujjsdj;ujjeu7775rrruer84r484ru = aux_333;ujjeu7775rrruer84r484ru2 = qaueoo;var auuq98q8=aux_333;
if (r_0993XX_Uijkkshagte635==true){   		
$.ajax({url:"/se_t_p_ask_9389.php",data:{"uiw_927_521gsXX1":$('#uiw_927_521gsXX1').val(),"uiw_927_521gsXX2":$('#uiw_927_521gsXX2').val(),"uiw_927_521gsXX3":$('#uiw_927_521gsXX3').val(),"id_ff":ujjeu7775rrruer84r484ru,"form_data":txte_enqujjsdj444},type:"POST",timeout:3000,contentType:"application/x-www-form-urlencoded; charset=utf-8",success:function(data){
var tsdurh9845h5hg5weo1 = Math.round(new Date().getTime() / 1000);var t734ry8484hfge3ye1 = "abhdgo" + tsdurh9845h5hg5weo1 + "";  $('#mshJHasah_9qwqi_alqooOI').append('<div style="display:none;background-color: #FFF4F4" id="'+t734ry8484hfge3ye1+'" ></div>');var urlr94554="/load_ask_299928.php?cod="+ujjeu7775rrruer84r484ru+"";
$("#"+t734ry8484hfge3ye1+"").load(urlr94554,function(){ $("#"+t734ry8484hfge3ye1+"").fadeIn('500',function(){ $(this).animate({ backgroundColor: "#FFFFFF" }, "30000");});});$(".trumbowyg-editor").html('');$('.botao_azul').css({'opacity':9.0,'-moz-opacity':9.0,'-khtml-opacity':9.0});}});};
};</script></div></div>

html;
?>

<!-- Post community inicio -->
 <?php ?>
</div>
</div>
<?php 

};
}else{
    $text_929202jjje =ALERTADECOMUNIDADEPRIVADA8839922;
echo <<<html
<div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="box-ieie-399ekke-eolke" >
    <img src="/img_news_2016/magnifier_plus_icon-icons.com_67832.png"/><span>{$text_929202jjje}</span></div></div>

html;
}
};
?>
<?php
//verifica se a pgina do forum

if ($_GET['topic']=='forum' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 


$queryForum = mysql_query("SELECT idforum,UserId,fixed,closed,timestamp,lastactivi,nometopico FROM forum where  IdCommunity='$mensagemcod->IdCommunity' order by fixed desc ,lastactivi DESC  limit $inicio,$limite ")or die(mysql_error());
$row_forum = mysql_num_rows($queryForum);

//CONTA tpicos
$queryTOPICOS = mysql_query("SELECT idforum FROM forum where  IdCommunity='$mensagemcod->IdCommunity' order by lastactivi DESC  ")or die(mysql_error());;
$row_TOPICOS = mysql_num_rows($queryTOPICOS);
$total = ceil($row_TOPICOS);

//verifica o adm
$auc_cod = $mensagemcod->IdCommunity;
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);
//verifica moderador 
$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
//permissao para qualquer usuario criar topicos
$add_topic_permiss=$mensagemcod->permiss_topic;

//verifica se aocmunidade é privada 
if ($mensagemcod->CommunityPrivacy=='2' || USERALLDENIEDCOMM2899=='29982' ){
?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><h3 class="h3"><?php echo FORUMCASEUP9939;?></h3>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/forum?&pag=1"><?php echo  FORUM9398873;?></a></span></div>
<input class="text_input_default_" placeholder="<?php echo PESQUISARTOPICOS883;?>" id="id_topic00" maxlength="100"
class="text_input_default_" accesskey="/" name="id_topic00" onkeyup="searcH_topic_comm('<?php echo $auc_cod;?>')"   type="text"   />
</div>

<div class="box-pagi-top-30" >
<div class="o-383s-spwi-2002n" ><div class="o-383s-spwi-20023n" ><?php if ($rcont373wllele!='' or $rcont373e!='' or $add_topic_permiss=='1') {?><span onclick="_opNew_83('<?php echo $mensagemcod->IdCommunity;?>')" class="bottom_default_orkut_2"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/new_topic?&new=1"><?php echo NOVOTPOICOI989393;?></a></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo NOVOTPOICOI989393;?></span><?php };?></div><div class="clear"></div></div>
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/forum";
     $url_m2 = "/".$url_teste_default."/".$aux_id_profile."/topic";
    $prox1 = $pag + 1;
	$ant1 = $pag - 1;
	$ultima_pag1 = ceil($total / $limite);
	$penultima1 = $ultima_pag1 - 1;	
	$adjacentes1 = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao1 = '<a href="'.$url_m.'?&pag='.$ant1.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag1 <= 5)
{
	for ($i=1; $i< $ultima_pag1+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao1 .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao1 .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag1 > 5)
{
	if ($pag < 1 + (2 * $adjacentes1))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes1); $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	elseif($pag > (2 * $adjacentes1) && $pag < $ultima_pag1 - 3)
	{
		$paginacao1 .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes1; $i<= $pag + $adjacentes1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	else {
		$paginacao1 .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag1 - (4 + (2 * adjacentes)); $i <= $ultima_pag1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox1 <= $ultima_pag1 && $ultima_pag1 > 2)
	{
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$prox1.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao1;
		
echo '</div>';
     ?>
</div>
<div class="line-main-box-default" ></div> 
<div class="bo-039ejje_kwo"><div class="bo-039ejje_kwo0Larger"> <span ><?php echo TOPICCOMM9393;?></span></div><div class="bo-039ejje_kwo1Larger"><span><?php echo AUTORTOPICO0039;?></span></div><div class="bo-039ejje_kwo1"><span><?php echo POSTAGENS93298I34;?></span></div><div class="bo-039ejje_kwo2"><span><?php echo ULTIMAPOSTAGENS7883;?></span></div><div class="clear"></div></div><div class="bg_default_orkut2 _o-o93i-2oieu">

<? 
if ($row_forum!='0'){
 while($row_topic = mysql_fetch_object($queryForum)) {
$query55d = mysql_query("SELECT idorder FROM ask_forum where  idforum='$row_topic->idforum' order by idorder DESC ")or die(mysql_error());
$rcont334d = mysql_num_rows($query55d);
$queryForum_user= mysql_query("SELECT users.UserId,users.FullName,users.NikName,forum.UserId FROM forum,users where (users.UserId=forum.UserId)and (forum.idforum='$row_topic->idforum' and  forum.IdCommunity='$mensagemcod->IdCommunity')   limit 1 ")or die(mysql_error());
$row_forum_user = mysql_fetch_object($queryForum_user);

 ?>
<div class="ui_mw_postoosm ui_mw_postoosm_n relative_box" onmouseover="mouse_over_menu(this);" ><label class="de_039930 label_box_op_menu_comm"><img class="de_0399301 l-oroiIMG-3984" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box_menu_op_comm">
<ul>
<?php if (USERID_ID==$row_topic->UserId or $mensagemcod->UserIdPro==USERID_ID or $rcont373e!=''){ ?><li class="men_new_90349e3 dhsjhdff775P" onclick="exclu_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>');"><?php echo EXCLUIRTOPICO8383;?></li><?php };?>
<?php if ($mensagemcod->UserIdPro==USERID_ID or $rcont373e!=''){ ?><?php if ($row_topic->fixed=='0') {?><li class="men_new_90349e3 dhsjhdff775P" onclick="fix_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>','<?php echo TOPICOFIXASDOALERT33;?>');"><?php echo FIXARTOPICO3883;?></li><?php }else{?>
<li class="men_new_90349e3 dhsjhdff775P" onclick="de_fix_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>','<?php echo TOPICODESAFIXADOALERT33;?>');"><?php echo DESAFIXARTOPICO388IE;?></li><?php };};?>
<?php if ($mensagemcod->UserIdPro==USERID_ID or $rcont373e!=''){ ?><?php if ($row_topic->closed=='0') {?><li   class="men_new_90349e3 dhsjhdff775P" onclick="close_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>','<?php echo TOPICOFECHADOALERT44;?>');"><?php echo FECHARTOPICO9993;?></li><?php }else{?>
<li class="men_new_90349e3 dhsjhdff775P" onclick="open_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>','<?php echo TOPICOABERTOALERT3;?>');"><?php echo ABRIRTOPICO939OI3;?></li><?php };};?>
<li  class="men_new_90349e3  jsooskkskPPdenunciaall" ><?php echo DENUNCIARTOPICO884;?> <input type="hidden" value="<?php echo $mensagemcod->IdCommunity; ?>"/><input type="hidden" value="<?php echo $url_m2."?&cod=".$row_topic->idforum."&pag=1";?>"/></li></ul></div>
<div class="box-93forum838"><div class="box-left-text-from774Large"><span><a href="<?php echo $url_m2."?&cod=".$row_topic->idforum."&pag=1";?>"><?php echo ($row_topic->nometopico);?></a></span></div>
<div class="box-center-text-from774Large"><span><a href="/<?php echo $row_forum_user->NikName; ?>"><?php echo ocultaTexto($row_forum_user->FullName,18);?></a></span></div><div class="box-right-text-from774Large"><span><?php echo  number_format($rcont334d,0,',','.');?></span></div>
<div class="box-left-time-999"><span><?php   if($row_topic->lastactivi!='0') { echo date('d/m/Y H:i:s',$row_topic->lastactivi);}else{ echo date('d/m/Y H:i:s',$row_topic->timestamp);};  ?></span></div> </div><div class="clear"></div></div>                       
<?php         }};?>

</div><div class="clear"></div><div class="line-main-box-default_bottom" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
        $url_m = "/".$url_teste_default."/".$aux_id_profile."/forum";
     $url_m2 = "/".$url_teste_default."/".$aux_id_profile."/topic";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>
<div class="clear"></div></div>
</div>
<?php 

}else{
    $text_929202jjje =ALERTADECOMUNIDADEPRIVADA8839922;
echo <<<html
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="box-ieie-399ekke-eolke" >
    <img src="/img_news_2016/magnifier_plus_icon-icons.com_67832.png"/><span>{$text_929202jjje}</span></div></div></div>

html;
}

};





?>
<!-- denunciados -->
<?php
//verifica se a pgina  de banidos

if ($_GET['topic']=='reported' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 



$auc_cod = $mensagemcod->IdCommunity;
//CONTA denunciados
$queryreported = mysql_query("select users.UserId,id_perfil ,count(idTo) AS idTo_od from blacklistD,users  where idTo<>'' and users.ccuserid=idTo group by idTo order by idTo_od DESC")or die(mysql_error());;
$row_reported = mysql_num_rows($queryreported);
$total = ceil($row_reported);


//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);



$query17 = mysql_query("select users.UserId,id_perfil ,count(idTo) AS idTo_od from blacklistD,users  where idTo<>'' and users.ccuserid=idTo group by idTo order by idTo_od DESC limit $inicio, $limite")or die(mysql_error());;

;
$rcont37 = mysql_num_rows($query17);

$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo "Denunciados";?> (<?php echo number_format($row_reported,0,',','.');?>)</span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?>  <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> <div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div> 
<?php if ($rcont373wllele!='' or $rcont373e!='') {?><div  class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div>

<?php };?>

<?php if (($rcont373wllele!='' or $rcont373e!='') && $aux_id_profile=='1654') {?><div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/reported?&pag=1">Denunciados</a></span></div><?php };?> <div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
	    $cidade_Name =($mensagemcomp2->UserCidade) ; 
   $estado_Name =($mensagemcomp2->UserEstado) ; 
   $pais_Name =($mensagemcomp2->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;
 
 ?>
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='' && CCUSERIDI=='18') {?><li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" <?php if ((CCUSERIDI=='18')){ ?> onclick="master_373yyeyo('<?php echo $mensagem->UserId;?>');" <?php };?>><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
</ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagem->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $mensagem->idTo_od." ->Denuncias."; ;?></span></div>  
 <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div class="clear"></div></div>
<?php };?><?php  if ($aux_osdj394h4hhn==false) {?><?php };?>
<?php  }else{?><div class="p_09-kJG42r"><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
<div class="J-03_wou266" ><div class="K-39_p24rw-i"><span> <?php echo  POXANAOTEMOS883." "; if($rcont373wllele!='' or $rcont373!='') { echo EMSUACOMUNIDADE673; }else{ echo NESTACOMUNIDADE373;};?></span></div>
<div class="K-sl_pow92873-92" onmouseout="javascript:this.style.background= ''"  onmouseover="javascript:this.style.background= '#EFEFEF'"><div>
</div><img  src="/img/7748yiuTTtrw_93904.png"><label class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS778383;?></label></div></div><?php };?>
</div><?php };?></div><div class="clear"></div><div class="line-main-box-default" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/reported";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>
<!-- denucnaidos -->

<?php
//verifica se a pgina  de banidos

if ($_GET['topic']=='banned' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 



$auc_cod = $mensagemcod->IdCommunity;
//CONTA banidos
$queryMODERA = mysql_query("SELECT ban_user_commu.IdOrder,users.UserId FROM ban_user_commu,users  where (users.UserId=ban_user_commu.UserId and IdCommunity='$auc_cod') order by ban_user_commu.IdOrder DESC ")or die(mysql_error());;
$row_moderators = mysql_num_rows($queryMODERA);
$total = ceil($row_moderators);

//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);


$query17 = mysql_query("SELECT ban_user_commu.IdOrder,users.UserId FROM ban_user_commu,users  where (users.UserId=ban_user_commu.UserId and IdCommunity='$auc_cod') order by ban_user_commu.IdOrder  DESC  limit $inicio, $limite")or die(mysql_error());;

;
$rcont37 = mysql_num_rows($query17);



$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);

?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo BANIDOSMEMBERSC00;?> (<?php echo number_format($row_moderators,0,',','.');?>)</span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS">
<div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div>
 <div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span>
</div> <?php if ($rcont373wllele!='' or $rcont373e!='') {?>
<div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div>
<div class="Kj889_csw63N _OO84IBOX_default" ><span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/join?&pag=1">Pedidos para aprova��o</a></span>
<?php 
if ($row_JOINT_Res > 0){
    
    echo <<<html
<span class="" id="load_djew898rrhjjw"><span class="bolha_38eueure">$row_JOINT_Res</span></span>

html;

};
?>
</div><?php };?> 
<?php if (($rcont373wllele!='' or $rcont373e!='')&& $aux_id_profile=='1654' ) {?>
<div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/reported?&pag=1">Denunciados</a></span></div><?php };?><div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
	    $cidade_Name =($mensagemcomp2->UserCidade) ; 
   $estado_Name =($mensagemcomp2->UserEstado) ; 
   $pais_Name =($mensagemcomp2->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;
 
 ?>
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?><li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $fotocomp2Id;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo VOLTARMEMBROCOMM;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<?php if ($rcont373wllele!='') {?><li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php }; };?></ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagem->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $aux_gender_n.",".$cidade_Name."-".$estado_Name.",".$pais_Name;?></span></div>  
 <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div class="clear"></div></div>
<?php };?><?php  if ($aux_osdj394h4hhn==false) {?><?php };?>
<?php  }else{?><div class="p_09-kJG42r"><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
<div class="J-03_wou266" ><div class="K-39_p24rw-i"><span> <?php echo  POXANAOTEMOS883." "; if($rcont373wllele!='' or $rcont373!='') { echo EMSUACOMUNIDADE673; }else{ echo NESTACOMUNIDADE373;};?></span></div>
<div class="K-sl_pow92873-92" onmouseout="javascript:this.style.background= ''"  onmouseover="javascript:this.style.background= '#EFEFEF'"><div>
</div><img  src="/img/7748yiuTTtrw_93904.png"><label class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS778383;?></label></div></div><?php };?>
</div><?php };?></div><div class="clear"></div><div class="line-main-box-default" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/banned";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>
<?php
//verifica se a pgina  de moderadores

if ($_GET['topic']=='moderators' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 


$auc_cod = $mensagemcod->IdCommunity;
//CONTA MODERADORES
$queryMODERA = mysql_query("SELECT manager_comm  FROM list_community_user  where IdCommunity='$auc_cod' and manager_comm<>'' order by IdOrder DESC ")or die(mysql_error());;
$row_moderators = mysql_num_rows($queryMODERA);
$total = ceil($row_moderators);

//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);


$query17 = mysql_query("SELECT UserId,manager_comm  FROM list_community_user  where IdCommunity='$auc_cod' and manager_comm<>'' order by IdOrder DESC  limit $inicio, $limite")or die(mysql_error());;

;
$rcont37 = mysql_num_rows($query17);



$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);

?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo MODERADORES0938JJ;?> (<?php echo number_format($row_moderators,0,',','.');?>)</span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS">
<div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div>
<div class="Kj889_csw63 _OO84IBOX_default"  >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div> 
<?php if ($rcont373wllele!='' or $rcont373e!='') {?>
<div  class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div>
<div  class="Kj889_csw63N _OO84IBOX_default" ><span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/join?&pag=1">Pedidos para aprova��o</a></span>
<?php 
if ($row_JOINT_Res > 0){
    
    echo <<<html
<span class="" id="load_djew898rrhjjw"><span class="bolha_38eueure">$row_JOINT_Res</span></span>

html;

};
?></div><?php };?>
<?php if (($rcont373wllele!='' or $rcont373e!='') && $aux_id_profile=='1654') {?><div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/reported?&pag=1">Denunciados</a></span></div><?php };?> <div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
	    $cidade_Name =($mensagemcomp2->UserCidade) ; 
   $estado_Name =($mensagemcomp2->UserEstado) ; 
   $pais_Name =($mensagemcomp2->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;
 
 ?>
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?> <li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo BANIRMEMBROS883;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php };?></ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagem->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $aux_gender_n.",".$cidade_Name."-".$estado_Name.",".$pais_Name;?></span></div>  
 <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div class="clear"></div></div>
<?php };?><?php  if ($aux_osdj394h4hhn==false) {?><?php };?>
<?php  }else{?><div class="p_09-kJG42r"><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
<div class="J-03_wou266" ><div class="K-39_p24rw-i"><span> <?php echo  POXANAOTEMOS883." "; if($rcont373wllele!='' or $rcont373!='') { echo EMSUACOMUNIDADE673; }else{ echo NESTACOMUNIDADE373;};?></span></div>
<div class="K-sl_pow92873-92" onmouseout="javascript:this.style.background= ''"  onmouseover="javascript:this.style.background= '#EFEFEF'"><div>
</div><img  src="/img/7748yiuTTtrw_93904.png"><label class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS778383;?></label></div></div><?php };?>
</div><?php };?></div><div class="clear"></div><div class="line-main-box-default" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/moderators";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
		
echo '</div>';
     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>

<?php
//verifica se a pgina  de membros

if ($_GET['topic']=='members' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 




$total = ceil(mem_cach_count($mensagemcod->IdCommunity));


$auc_cod = $mensagemcod->IdCommunity;
//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);


$query17 = mysql_query("SELECT UserId,manager_comm  FROM list_community_user  where IdCommunity='$auc_cod' order by IdOrder DESC  limit $inicio, $limite")or die(mysql_error());;

;
$rcont37 = mysql_num_rows($query17);


$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);

?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo MEMBROSUPCASE7;?> (<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS">
<div class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> 
<div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?>
<div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div>
<div class="Kj889_csw63N _OO84IBOX_default"  ><span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/join?&pag=1">Pedidos para aprova��o</a></span>
<?php 
if ($row_JOINT_Res > 0){
    
    echo <<<html
<span class="" id="load_djew898rrhjjw"><span class="bolha_38eueure">$row_JOINT_Res</span></span>

html;

};
?>
</div><?php };?>
<?php if (($rcont373wllele!='' or $rcont373e!='') && $aux_id_profile=='1654') {?><div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/reported?&pag=1">Denunciados</a></span></div><?php };?> <div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
	    $cidade_Name =($mensagemcomp2->UserCidade) ; 
   $estado_Name =($mensagemcomp2->UserEstado) ; 
   $pais_Name =($mensagemcomp2->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;
 
 ?>
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?> <li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo BANIRMEMBROS883;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php };?></ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagem->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $aux_gender_n.",".$cidade_Name."-".$estado_Name.",".$pais_Name;?></span></div>  
 <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div class="clear"></div></div>
<?php };?><?php  if ($aux_osdj394h4hhn==false) {?><?php };?>
<?php  }else{?><div class="p_09-kJG42r"><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
<div class="J-03_wou266" ><div class="K-39_p24rw-i"><span> <?php echo  POXANAOTEMOS883." "; if($rcont373wllele!='' or $rcont373!='') { echo EMSUACOMUNIDADE673; }else{ echo NESTACOMUNIDADE373;};?></span></div>
<div class="K-sl_pow92873-92" onmouseout="javascript:this.style.background= ''"  onmouseover="javascript:this.style.background= '#EFEFEF'"><div>
</div><img  src="/img/7748yiuTTtrw_93904.png"><label class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS778383;?></label></div></div><?php };?>
</div><?php };?></div><div class="clear"></div><div class="line-main-box-default" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/members";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
		
echo '</div>';
     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>


<!-- inicio join list -->

<?php
//verifica se a pgina  de banidos

if ($_GET['topic']=='join' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 



$auc_cod = $mensagemcod->IdCommunity;
//CONTA banidos
$queryMODERA = mysql_query("SELECT ban_user_commu.IdOrder,users.UserId FROM ban_user_commu,users  where (users.UserId=ban_user_commu.UserId and IdCommunity='$auc_cod') order by ban_user_commu.IdOrder DESC ")or die(mysql_error());;
$row_moderators = mysql_num_rows($queryMODERA);
$total = ceil($row_moderators);

//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);


$query17 = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users where  EXISTS(SELECT ccuserid FROM communitie_list_join_request where communitie_list_join_request.ccuserid=users.ccuserid and communitie_list_join_request.IdCommunity='$auc_cod')   order by users.	lastactivity_last  DESC  limit $inicio, $limite")or die(mysql_error());;

;
$rcont37 = mysql_num_rows($query17);



$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);

?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o">Pedidos para aprova��o (<?php echo number_format($row_moderators,0,',','.');?>)</span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?>  <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS">
<div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> 
<div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div> <?php if ($rcont373wllele!='' or $rcont373e!='') {?>
<div class="Kj889_csw63N _OO84IBOX_default"  ><span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div>
<div  class="Kj889_csw63 _OO84IBOX_default" ><span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/join?&pag=1">Pedidos para aprova��o</a></span>
<?php 
if ($row_JOINT_Res > 0){
    
    echo <<<html
<span class="" id="load_djew898rrhjjw"><span class="bolha_38eueure">$row_JOINT_Res</span></span>

html;

};
?>
</div><?php };?> 
<?php if (($rcont373wllele!='' or $rcont373e!='') && $aux_id_profile=='1654') {?><div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/reported?&pag=1">Denunciados</a></span></div><?php };?><div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
if ($rcont37!=''){

    while ($mensagemcomp2 = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
	    $cidade_Name =($mensagemcomp2->UserCidade) ; 
   $estado_Name =($mensagemcomp2->UserEstado) ; 
   $pais_Name =($mensagemcomp2->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;
 
 ?>
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?><li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $fotocomp2Id;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')">Rejeitar membro</li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" >Aprovar membro</li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<?php if ($rcont373wllele!='') {?><li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php }; };?></ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagemcomp2->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $aux_gender_n.",".$cidade_Name."-".$estado_Name.",".$pais_Name;?></span></div>  
 <?php if ($rcont373e){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div class="clear"></div></div>
<?php };?><?php  if ($aux_osdj394h4hhn==false) {?><?php };?>
<?php  }else{?><div class="p_09-kJG42r"><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
<div class="J-03_wou266" >
<div class="K-39_p24rw-i"><span>Nenhum pedido para aprova��o!<p><b>Aqui voc� ter� a lista de membros que solicitam para entrar em sua comunidade.</b></p></span>
</div>
</div><?php };?>
</div><?php };?></div><div class="clear"></div><div class="line-main-box-default" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/banned";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>
<!-- fim join list -->




<?php

//verifica se a pgina  principal

if ($_GET['topic']==''  && $aux_id_profile!=''){
//verifica o dono 
$queryADM = mysql_query("SELECT community_users.UserIdPro,users.UserId,users.NikName,users.UserName FROM community_users,users  where (community_users.IdCommunity='$mensagemcod->IdCommunity' and users.UserId=community_users.UserIdPro) limit 1")or die(mysql_error());;
$row_ADM= mysql_fetch_object($queryADM);
//verifica moderadores 
$moderadores="";
$queryModeradores = mysql_query("SELECT UserId FROM list_community_user where (IdCommunity='$mensagemcod->IdCommunity' and manager_comm='1')  order by IdOrder asc  ")or die(mysql_error());;
$row_moderadores= mysql_num_rows($queryModeradores);

?>
<div id="new_99edujebnnne_center_container" ><div class="center_painel_communities_default" id="center_container__9929">
<!-- about  -->
<div class="sombra_padrao_bottom lloepowpoei83838K center_painel_communities_default pn-about_box_com888">
<!-- nome-->
<div class="X-H6727"><h3 class="h3"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></h3><?php if ($mensagemcod->verifi=='1'){?><span class="text_88393jjsjjsspan" ><img class="lloepowpoei838382 box-img-299273773"  src="/img/Select8348343i_93943.png" ><div  class="ksiieoe838833ue2 boradsemquina3 box-939388kjah-ksj">
<img src="/img/k0399493.png" class="box-93kk_po-wej83" /><div class="ok-j3j-bbgs-pplls-s" ><span><?php echo COMUNIDADEVERIFICADA38839IEIE;?></span></div></div></span><?php };?>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<!-- nome-->
<div class="box-about-8392rjeeqq">
<!-- descrio -->
<div class="row_blue_001PBG cobox_padding_main_comm" >
<div class="col_left_profile_main">
<span class="text_painel_default_1" ><?php echo DESCRICAODSJJD333;?>:</span>
</div>
<!-- html -->
<div class="box-8883iihtmlk-99"><span class="box-text-about-comm8833" ><?php if ($mensagemcod->AboutComm!=''){ echo ocultaTexto(($mensagemcod->AboutComm),150);}else{ echo "<br><p>" ;};?></span>
<div class="K-jjoweu83883nnm-9o"><?php echo (sanitize_video($mensagemcod->detail));?></div>
<!-- html -->
<div class="clear_div_0"></div></div> 
</div>
<!-- descrio -->
<!-- idioma -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo IDIOMA828IWJJDJHSD;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php  echo  lang_trans_t2($mensagemcod->lang);?></span></div><div class="clear_div_0"></div> </div>
<!-- idioma -->
<!-- categoria -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo CATEGORIAIIEUU3883D;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php echo $mensagemcod783748347348387->text;?></a></span></div><div class="clear_div_0"></div> </div>
<!-- categoria -->
<!-- dono -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo DONODIIEIU2382JJDND;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><a href="/
<?php echo $row_ADM->NikName;?>" target='_blank'><?php  echo  ($row_ADM->UserName);?></a></span></div><div class="clear_div_0"></div> </div>
<!-- dono -->
<!-- moderadores -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo MODERADORES883J3HGDGBF;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php
if ($row_moderadores!=''){
while ($row_mod_002= mysql_fetch_object($queryModeradores)) {
$queryMo999 = mysql_query("SELECT NikName,UserName FROM users where UserId='$row_mod_002->UserId' limit 1")or die(mysql_error());;
$rowMo999 = mysql_fetch_object($queryMo999);
echo $moderadores =<<<html
<a href="/
$rowMo999->NikName" target='_blank'>$rowMo999->UserName</a><span class="text_painel_default_2">,</span>
html;
};
};
?></span></div><div class="clear_div_0"></div> </div>
<!-- moderadores -->
<!-- privacidade -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo TIPOCOMJERUU3838JE;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php if ($mensagemcod->CommunityPrivacy=='2')  { echo  PUBLICAFGDUE78738U3JH3;}else{ echo PRIVADAYWYU2377332UHEHJE;};?></span></div><div class="clear_div_0"></div> </div>
<!-- privacidade -->
<!-- local -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo LOCALJDJHD7373HHGTT;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php if ($mensagemcod->loc !='') { echo  ocultaTexto($mensagemcod->loc,25);}else{ echo ocultaTexto($mensagem->UserPais,25) ;};?></span></div><div class="clear_div_0"></div> </div>
<!-- local -->
<!-- criada em -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo CRIADAEMHHDFYH3773D;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php $aux373yur=date('d/m/Y',$mensagemcod->timestamp);  echo  ($aux373yur);?></span></div><div class="clear_div_0"></div> </div>
<!-- criada em -->
<!-- membros -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo MEMBROSCASELOW;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.')." ".MEMBROSCASELOW;?></span></div><div class="clear_div_0"></div> </div>
<!-- membros -->


</div>
      
                     
                     
                                    
                     
             
               
                 
</div>
<!-- about -->
<!-- forum -->
<?php 
//verifica se aocmunidade é privada 
if ($mensagemcod->CommunityPrivacy=='2' || USERALLDENIEDCOMM2899=='29982' ){
?>
<div id="k_o30-3eiennaj-akdk39" class="boradsemquina3 sombra_padrao_bottom lloepowpoei83838K center_painel_communities_default"><div class="header_main_pn"><span><?php echo FORUM9398873;?></span> </div>
<div class="bo-039ejje_kwo"><div class="bo-039ejje_kwo0"> <span ><?php echo TOPICCOMM9393;?></span></div><div class="bo-039ejje_kwo1"><span><?php echo POSTAGENS93298I34;?></span></div><div class="bo-039ejje_kwo2"><span><?php echo ULTIMAPOSTAGENS7883;?></span></div><div class="clear"></div></div><div class="bg_default_orkut2 _o-o93i-2oieu">
<?php 
$url_m = "/".$url_teste_default."/".$aux_id_profile."/topic";
$url_m2 = "/".$url_teste_default."/".$aux_id_profile."/forum";
$queryForum = mysql_query("SELECT idforum,UserId,fixed,closed,timestamp,lastactivi,nometopico FROM forum where  IdCommunity='$mensagemcod->IdCommunity' order by fixed desc ,lastactivi DESC  limit 12 ")or die(mysql_error());
$row_forum = mysql_num_rows($queryForum);
if ($row_forum!='0'){
//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$mensagemcod->IdCommunity' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);
//verifica moderador 
$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$mensagemcod->IdCommunity' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
//permissao para qualquer usuario criar topicos
$add_topic_permiss=$mensagemcod->permiss_topic;
 while($row_topic = mysql_fetch_object($queryForum)) {
$query55d = mysql_query("SELECT idorder FROM ask_forum where  idforum='$row_topic->idforum' order by idorder DESC ")or die(mysql_error());
$rcont334d = mysql_num_rows($query55d);
?>
<div class="ui_mw_postoosm ui_mw_postoosm_n" onmouseover="mouse_over_menu(this);" > <div class="box-93forum838"><div class="box-left-text-from774"><span><a href="<?php echo $url_m."?&cod=".$row_topic->idforum."&pag=1";?>"><?php echo ($row_topic->nometopico);?></a></span></div>
<div class="box-right-text-from774"><span><?php echo  number_format($rcont334d,0,',','.');?></span></div>
<div class="box-left-time-999"><span><?php   if($row_topic->lastactivi!='0') { echo date('d/m/Y H:i:s',$row_topic->lastactivi);}else{ echo date('d/m/Y H:i:s',$row_topic->timestamp);};  ?></span></div> </div><div class="clear"></div></div>                       
<?php         }};?></div><div style="clear: both"></div><div class="o-383s-spwi-2002" >
    <div class="o-383s-spwi-20023" ><?php if ($rcont373wllele!='' or $rcont373e!='' or $add_topic_permiss=='1') {?><span onclick="_opNew_83('<?php echo $mensagemcod->IdCommunity;?>')" class="bottom_default_orkut_2"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/new_topic?&new=1"><?php echo NOVOTPOICOI989393;?></a></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo NOVOTPOICOI989393;?></span><?php };?></div><div class="o-383s-spwi-200234"><span class="bottom_default_orkut_2"><a href="<?php echo $url_m2."?&pag=1";?>"><?php 	echo VERTODODOSTOPICOS9933;?></a></span></div><div class="clear"></div></div>
    </div>
    <?php }
    
    ?>
<!-- forum -->

</div>

<div id="right_main_container_profile">
<!-- ADS -->


<!-- membros -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" >
<div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<?php 
if ($row_JOINT_Res > 0  && ( $row_moderador03 > 0 || $mensagemcod->UserIdPro==USERID_ID)){
    
    echo <<<html
<span class="" id="load_djew898rrhjjw"><span class="bolha_38eueure">$row_JOINT_Res</span></span>

html;

};
?>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_name_7782->UserFotoThumb ;?>&largura=60&altura=60"/><label><?php echo ocultaTexto($row_name_7782->UserName,20); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
<!-- membros -->

<!-- comunidades relacionadas -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo COMUNIDADESRELACIONADA27772." &nbsp";?></span>
<div class="box-93okd-kmdn982-">
<?php 
$queryCommunities_relation= mysql_query(" SELECT  community_users.IdCommunity,community_users.CommunityImg,community_users.CommunityName,community_users.UserIdPro,community_users.IdOrder,communitie_relation.IdComm1,communitie_relation.IdComm2 FROM communitie_relation,community_users   where  (communitie_relation.IdComm1='$mensagemcod->IdOrder' and communitie_relation.IdComm2=community_users.IdOrder)order by rand() limit 6")or die(mysql_error());;
  $row_communities_relation = mysql_num_rows($queryCommunities_relation);

if ($row_communities_relation!=''){
while ($row_communities_rela = mysql_fetch_object($queryCommunities_relation)){
?>
<div  class="boradsemquina3 box-993ijjerje"><div class="box-pn-3993jdjje-ekke"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($row_communities_rela->CommunityImg !=''){ echo $row_communities_rela->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=60&altura=60"></div><label><a href="/<?php echo $url_teste_default;?>/<?php echo $row_communities_rela->IdComm2;?>"><?php echo ocultaTexto($row_communities_rela->CommunityName,8) ;?><br>(<?php echo number_format(mem_cach_count($row_communities_rela->IdCommunity),0,',','.');?>)</a></label></div>
<?php };};?>

<div style="clear: both;"></div></div>        
</div></div></div>
<!-- comunidades relacionadas -->
</div>


</div>



</div>
<?php };?>
<!-- edit topic -->
<?php

//verifica 

if ($_GET['topic']=='edit_topic' && $_GET['cod']!='0'  && $aux_id_profile!='' && ($row_my_com88 !='' || $row_moderador03!='')){

//verifica o dono 
$queryADM = mysql_query("SELECT community_users.UserIdPro,users.UserId,users.NikName,users.UserName FROM community_users,users  where (community_users.IdCommunity='$mensagemcod->IdCommunity' and users.UserId=community_users.UserIdPro) limit 1")or die(mysql_error());;
$row_ADM= mysql_fetch_object($queryADM);

$auc_cod =Sanitize::filter($_GET['cod']);
//pega dados do topico
$queryForum = mysql_query("SELECT UserName,LinkVideo,ask_forum,idforum,UserId,fixed,closed,timestamp,lastactivi,nometopico FROM forum where  idforum='$auc_cod'  limit 1 ")or die(mysql_error());
$row_forum = mysql_fetch_object($queryForum);

?>
<div id="new_99edujebnnne_center_container" ><div class="center_painel_communities_default" id="center_container__9929">
<!-- about  -->
<div class="sombra_padrao_bottom lloepowpoei83838K pn-about_box_com888New">
<!-- nome-->
<div class="X-H6727"><span class="text_menu-0o"><?php echo TOPICOEDIT9392392982842 ;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<!-- nome-->

<!-- box-pn-new-topic -->
<?php
$auc_codcommet =$mensagemcod->IdCommunity;
$cod_topic = $auc_cod;
$idioma_text =IDIOMACOMUII8388JJJJD;
$ENVIAR_99=ENVIAR98883JJE;
$text_textareabox=$row_forum->ask_forum;
$assunto_do_topico=$row_forum->nometopico;

echo <<<html
<div class="o-okj-3883j-bbgga-s">
<div class="M-ksjjsh773_owp">
<link rel="stylesheet" type="text/css" href="/mervick-emojionearea-d1a852f/dist/emojionearea.css" media="screen">
<link rel="stylesheet" href="/Trumbowyg-master/dist/ui/trumbowyg.css">
<link rel="stylesheet" href="/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.css">
<form id="ad_topic" name="ad_topic" method="post" action="/{$url_teste_default}/{$aux_id_profile}">
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<input type="hidden" name="id_ff"  value="$auc_codcommet"></input>
<input type="hidden" name="edit_topic"  value="$cod_topic"></input>
<input type="text" id="ti_03902oedue" name="title"value="$assunto_do_topico"/>
<div  id="textarea_999" class="jqte-test" >$text_textareabox</div>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/Trumbowyg-master/dist/trumbowygN.js"></script>
<script src="/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.js" ></script>
<script src="/Trumbowyg-master/plugins/upload/trumbowyg.upload.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Trumbowyg-master/dist/langs/$idioma_text.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/mervick-emojionearea-d1a852f/dist/emojionearea.js"></script>
<div id="subisaymsg_0"  class="subisaymsg">
<button type="button"  onmouseup="return CommTopicNvn();" class="botao_azul _bot_02838-dofkd" title="Enviar..." >$ENVIAR_99</button>
</form>
<!-- novo painel de emojis -->
<div id="standalone" class="box_standalone" data-emoji-placeholder=":smiley:"></div><!-- novo painel de emojis -->
</div>
<script type="text/javascript">
$(document).ready(function() {   $("#standalone").emojioneArea({   standalone: true,   autocomplete: false,      events: {  emojibtn_click: function (button, event) { var img32843438743 = button.children().data("src");   $(".trumbowyg-editor").html($(".trumbowyg-editor").html()+"<img src='"+img32843438743+"' />");       }    }     });   }); 
</script><script>
$('.jqte-test').trumbowyg({    btnsAdd: ['foreColor'],         lang: '$idioma_text',        image: {        dropdown: ['insertImage', 'upload'],       ico: 'insertImage'      }         });
 var ujjeu7775rrruer84r484ru = "";
			var ujjeu7775rrruer84r484ru2 = "";
function CommTopicNvn(){
 
$('.botao_azul').css({'opacity':0.1,'-moz-opacity':0.1,'-khtml-opacity':0.1});
$("#form_data").val($(".trumbowyg-editor").html());	
document.ad_topic.submit();
};</script></div></div>

html;

?>
<!-- box-pn-new-topic -->
</div>

</div>

<div id="right_main_container_profile">
<!-- membros -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_name_7782->UserFotoThumb ;?>&largura=60&altura=60"/><label><?php echo ocultaTexto($row_name_7782->UserName,20); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
<!-- membros -->

<!-- comunidades relacionadas -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo COMUNIDADESRELACIONADA27772." &nbsp";?></span>
<div class="box-93okd-kmdn982-">
<?php 
$queryCommunities_relation= mysql_query(" SELECT  community_users.IdCommunity,community_users.CommunityImg,community_users.CommunityName,community_users.UserIdPro,community_users.IdOrder,communitie_relation.IdComm1,communitie_relation.IdComm2 FROM communitie_relation,community_users   where  (communitie_relation.IdComm1='$mensagemcod->IdOrder' and communitie_relation.IdComm2=community_users.IdOrder)order by rand() limit 6")or die(mysql_error());;
  $row_communities_relation = mysql_num_rows($queryCommunities_relation);

if ($row_communities_relation!=''){
while ($row_communities_rela = mysql_fetch_object($queryCommunities_relation)){
?>
<div  class="boradsemquina3 box-993ijjerje"><div class="box-pn-3993jdjje-ekke"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($row_communities_rela->CommunityImg !=''){ echo $row_communities_rela->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=60&altura=60"></div><label><a href="/<?php echo $url_teste_default;?>/<?php echo $row_communities_rela->IdComm2;?>"><?php echo ocultaTexto($row_communities_rela->CommunityName,8) ;?><br>(<?php echo number_format(mem_cach_count($row_communities_rela->IdCommunity),0,',','.');?>)</a></label></div>
<?php };};?>

<div style="clear: both;"></div></div>        
</div></div></div>
<!-- comunidades relacionadas -->
</div>



</div>
<?php };?>
<!-- edit topic -->
<?php

//verifica se a pagina é add

if ($_GET['topic']=='new_topic' && $_GET['new']=='1'  && $aux_id_profile!='' && USERALLDENIEDCOMMNEWTOPIC == '29982'){

//verifica o dono 
$queryADM = mysql_query("SELECT community_users.UserIdPro,users.UserId,users.NikName,users.UserName FROM community_users,users  where (community_users.IdCommunity='$mensagemcod->IdCommunity' and users.UserId=community_users.UserIdPro) limit 1")or die(mysql_error());;
$row_ADM= mysql_fetch_object($queryADM);
//verifica moderadores 
$moderadores="";
$queryModeradores = mysql_query("SELECT UserId FROM list_community_user where (IdCommunity='$mensagemcod->IdCommunity' and manager_comm='1')  order by IdOrder asc  ")or die(mysql_error());;
$row_moderadores= mysql_num_rows($queryModeradores);

?>
<div id="new_99edujebnnne_center_container" ><div class="center_painel_communities_default" id="center_container__9929">
<!-- about  -->
<div class="sombra_padrao_bottom lloepowpoei83838K pn-about_box_com888New">
<!-- nome-->
<div class="X-H6727"><span class="text_menu-0o"><?php echo NOVOTPOICOI989393 ;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<!-- nome-->

<!-- box-pn-new-topic -->
<?php
$auc_codcommet =$mensagemcod->IdCommunity;
$idioma_text =IDIOMACOMUII8388JJJJD;
$ENVIAR_99=ENVIAR98883JJE;
$text_textareabox=TEXTOBOXTEXAREAII992MENSAGEM8892;
$assunto_do_topico=TITULODOTOPICO236367762;

echo <<<html
<div class="o-okj-3883j-bbgga-s">
<div class="M-ksjjsh773_owp">
<link rel="stylesheet" type="text/css" href="/mervick-emojionearea-d1a852f/dist/emojionearea.css" media="screen">
<link rel="stylesheet" href="/Trumbowyg-master/dist/ui/trumbowyg.css">
<link rel="stylesheet" href="/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.css">
<form id="ad_topic" name="ad_topic" method="post" action="/{$url_teste_default}/{$aux_id_profile}">
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<input type="hidden" name="id_ff"  value="$auc_codcommet"></input>
<input type="hidden" name="new"  value="2883776"></input>
<input type="text" id="ti_03902oedue" name="title"placeholder="$assunto_do_topico"/>
<div  id="textarea_999" class="jqte-test" placeholder="$text_textareabox"></div>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/Trumbowyg-master/dist/trumbowygN.js"></script>
<script src="/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.js" ></script>
<script src="/Trumbowyg-master/plugins/upload/trumbowyg.upload.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Trumbowyg-master/dist/langs/$idioma_text.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/mervick-emojionearea-d1a852f/dist/emojionearea.js"></script>
<div id="subisaymsg_0"  class="subisaymsg">
<button type="button"  onmouseup="return CommTopicNvn();" class="botao_azul _bot_02838-dofkd" title="Enviar..." >$ENVIAR_99</button>
</form>
<!-- novo painel de emojis -->
<div id="standalone" class="box_standalone" data-emoji-placeholder=":smiley:"></div><!-- novo painel de emojis -->
</div>
<script type="text/javascript">
$(document).ready(function() {   $("#standalone").emojioneArea({   standalone: true,   autocomplete: false,      events: {  emojibtn_click: function (button, event) { var img32843438743 = button.children().data("src");   $(".trumbowyg-editor").html($(".trumbowyg-editor").html()+"<img src='"+img32843438743+"' />");       }    }     });   }); 
</script><script>
$('.jqte-test').trumbowyg({    btnsAdd: ['foreColor'],         lang: '$idioma_text',        image: {        dropdown: ['insertImage', 'upload'],       ico: 'insertImage'      }         });
 var ujjeu7775rrruer84r484ru = "";
			var ujjeu7775rrruer84r484ru2 = "";
function CommTopicNvn(){
 
$('.botao_azul').css({'opacity':0.1,'-moz-opacity':0.1,'-khtml-opacity':0.1});
$("#form_data").val($(".trumbowyg-editor").html());	
document.ad_topic.submit();
};</script></div></div>

html;

?>
<!-- box-pn-new-topic -->
</div>

</div>

<div id="right_main_container_profile">
<!-- membros -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_name_7782->UserFotoThumb ;?>&largura=60&altura=60"/><label><?php echo ocultaTexto($row_name_7782->UserName,20); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
<!-- membros -->

<!-- comunidades relacionadas -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo COMUNIDADESRELACIONADA27772." &nbsp";?></span>
<div class="box-93okd-kmdn982-">
<?php 
$queryCommunities_relation= mysql_query(" SELECT  community_users.IdCommunity,community_users.CommunityImg,community_users.CommunityName,community_users.UserIdPro,community_users.IdOrder,communitie_relation.IdComm1,communitie_relation.IdComm2 FROM communitie_relation,community_users   where  (communitie_relation.IdComm1='$mensagemcod->IdOrder' and communitie_relation.IdComm2=community_users.IdOrder)order by rand() limit 6")or die(mysql_error());;
  $row_communities_relation = mysql_num_rows($queryCommunities_relation);

if ($row_communities_relation!=''){
while ($row_communities_rela = mysql_fetch_object($queryCommunities_relation)){
?>
<div  class="boradsemquina3 box-993ijjerje"><div class="box-pn-3993jdjje-ekke"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($row_communities_rela->CommunityImg !=''){ echo $row_communities_rela->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=60&altura=60"></div><label><a href="/<?php echo $url_teste_default;?>/<?php echo $row_communities_rela->IdComm2;?>"><?php echo ocultaTexto($row_communities_rela->CommunityName,8) ;?><br>(<?php echo number_format(mem_cach_count($row_communities_rela->IdCommunity),0,',','.');?>)</a></label></div>
<?php };};?>

<div style="clear: both;"></div></div>        
</div></div></div>
<!-- comunidades relacionadas -->
</div>



</div>
<?php };?>
<?php

//verifica se a pgina  principal

if ($_GET['topic']=='edit' && $_GET['about']=='1'  && $aux_id_profile!='' && $row_my_com88!=''){

//verifica o dono 
$queryADM = mysql_query("SELECT community_users.UserIdPro,users.UserId,users.NikName,users.UserName FROM community_users,users  where (community_users.IdCommunity='$mensagemcod->IdCommunity' and users.UserId=community_users.UserIdPro) limit 1")or die(mysql_error());;
$row_ADM= mysql_fetch_object($queryADM);

?>
<div id="new_99edujebnnne_center_container" ><div class="center_painel_communities_default" id="center_container__9929">
<!-- about  -->
<div class="sombra_padrao_bottom lloepowpoei83838K center_painel_communities_default pn-about_box_com888">
<!-- nome-->
<div class="X-H6727"><span class="text_menu-0o"><?php echo EDITARCOMUNIDADE83448384343;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<!-- nome-->
<div class="box-about-8392rjeeqq">
<!-- nome -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo NOMECOMUNIDADE3883JEHDEHE;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php echo ($mensagemcod->CommunityName);?></span></div><div class="clear_div_0"></div> </div>
<!-- nome -->
<!-- idioma -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo IDIOMA828IWJJDJHSD;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php  echo  lang_trans_t2($mensagemcod->lang);?></span></div><div class="clear_div_0"></div> </div>
<!-- idioma -->
<!-- categoria -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo CATEGORIAIIEUU3883D;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"> <select id="okoe308484eee4">

<option selected><?php echo $mensagemcod783748347348387->text;?></option>
    <?php $querycod83438492 = mysql_query("SELECT text FROM category_communities ")or die(mysql_error());;
while ($mensagemcod7837483473483872 = mysql_fetch_object($querycod83438492)) {?>
<option><?php echo $mensagemcod7837483473483872->text ;?> </option>
        <?php };?>
</select></span></div><div class="clear_div_0"></div> </div>
<!-- categoria -->
<!-- dono -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo DONODIIEIU2382JJDND;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><a href="/
<?php echo $row_ADM->NikName;?>" target='_blank'><?php  echo  ($row_ADM->UserName);?></a></span></div><div class="clear_div_0"></div> </div>
<!-- dono -->
<!-- privacidade -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo TIPOCOMJERUU3838JE;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2 "><p><input class="text_painel_default_1 list_option" type="radio" name="type" value="2"  <?php if ($mensagemcod->CommunityPrivacy=='2')  {?>checked="checked"<?php };?>"> <?php echo MESEGQUALQUERPESSOALPODEPARTICIPAR;?></p>
<p><input  class="text_painel_default_1 list_option"type="radio" name="type" value="1" <?php if ($mensagemcod->CommunityPrivacy!='2')  {?>checked="checked"<?php };?>"> <?php echo PRIVADAPRECISADECONVITEDODONO?></p></span></div><div class="clear_div_0"></div> </div>
<!-- privacidade -->
<!-- local -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo LOCALJDJHD7373HHGTT;?>:</span></div><div  class="col_right_profile_main">
<input class="input-text-com-3848jre-re" type="text"  id="local_comm-373hndd" name="local_comm-373hndd"placeholder="<?php echo LOCALJDJHD7373HHGTT;?>" value="<?php if ($mensagemcod->loc !='') { echo  ocultaTexto($mensagemcod->loc,25);}else{ echo ocultaTexto($mensagem->UserPais,25) ;};?>"/></div><div class="clear_div_0"></div> </div>
<!-- local -->
<!-- topicos -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo TOPICCOMM9393;?> :</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><p><input class="text_painel_default_1 list_option_n2" type="radio" name="topic" value="1"  <?php if ($mensagemcod->topic_open=='1')  {?>checked="checked"<?php };?>"> <?php echo TOPICOQUEMPODECRIAR35533;?></p>
<p><input class="text_painel_default_1 list_option_n2" type="radio" name="topic" value="0" <?php if ($mensagemcod->topic_open=='0')  {?>checked="checked"<?php };?>"> <?php echo TOPICOQUEMPODECRIAR3553333?></p></span></div><div class="clear_div_0"></div> </div>
<!-- topicos -->
<!-- descrio -->
<div class="row_blue_002 cobox_padding_main_comm" >
<div class="col_left_profile_main">
<span class="text_painel_default_1" ><?php echo DESCRICAODSJJD333;?>:</span>
</div></div>
<!-- html -->
<!-- box-edit-about -->
<?php
$auc_codcommet =$mensagemcod->IdCommunity;
$idioma_text =IDIOMACOMUII8388JJJJD;
$ENVIAR_99=SALVARPERFIL;
$text_textareabox=TEXTOBOXTEXAREAII992MENSAGEM8892;
$assunto_do_topico=TITULODOTOPICO236367762;
echo <<<html
<div class="o-okj-3883j-bbgga-s">
<div class="M-ksjjsh773_owp">
<link rel="stylesheet" type="text/css" href="/mervick-emojionearea-d1a852f/dist/emojionearea.css" media="screen">
<link rel="stylesheet" href="/Trumbowyg-master/dist/ui/trumbowyg.css">
<link rel="stylesheet" href="/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.css">
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<input type="hidden" name="uiw_927_521gsXX1" id="uiw_927_521gsXX1" value=""></input>
<input type="hidden" name="uiw_927_521gsXX2"  id="uiw_927_521gsXX2"value=""></input>
<input type="hidden" name="uiw_927_521gsXX3" id="uiw_927_521gsXX3" value=""></input>
<div  id="textarea_999" class="jqte-test" >{$mensagemcod->AboutComm}{$mensagemcod->detail}</div>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/Trumbowyg-master/dist/trumbowygN.js"></script>
<script src="/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.js" ></script>
<script src="/Trumbowyg-master/plugins/upload/trumbowyg.upload.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Trumbowyg-master/dist/langs/$idioma_text.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/mervick-emojionearea-d1a852f/dist/emojionearea.js"></script>
<div id="subisaymsg_0"  class="subisaymsg">
<button type="submit"  onclick="CommTopicNvn('','$auc_codcommet','2883776');" class="botao_azul _bot_02838-dofkd" title="Enviar..." >$ENVIAR_99</button>
<!-- novo painel de emojis -->
<div id="standalone" class="box_standalone" data-emoji-placeholder=":smiley:"></div><!-- novo painel de emojis -->
</div>
<script type="text/javascript">
$(document).ready(function() {   $("#standalone").emojioneArea({   standalone: true,   autocomplete: false,      events: {  emojibtn_click: function (button, event) { var img32843438743 = button.children().data("src");   $(".trumbowyg-editor").html($(".trumbowyg-editor").html()+"<img src='"+img32843438743+"' />");       }    }     });   }); 
</script><script>
$('.jqte-test').trumbowyg({    btnsAdd: ['foreColor'],         lang: '$idioma_text',        image: {        dropdown: ['insertImage', 'upload'],       ico: 'insertImage'      }         });
 var ujjeu7775rrruer84r484ru = "";
			var ujjeu7775rrruer84r484ru2 = "";
function CommTopicNvn(aux_333,qaueoo,aux_1){
$('.botao_azul').css({'opacity':0.1,'-moz-opacity':0.1,'-khtml-opacity':0.1});
$("#form_data").val($(".trumbowyg-editor").html());	var asj8s8sidsish=aux_333;var txte_enqujjsdj=$("#form_data").val();var txte_enqujjsdj444 = txte_enqujjsdj;ujjeu7775rrruer84r484ru = aux_333;ujjeu7775rrruer84r484ru2 = qaueoo;var auuq98q8=aux_333;
var val_9984884= $('.list_option:checked').val();var val_99848842=$('.list_option_n2:checked').val();
$.ajax({url:"/edit_d_comm_0.php",data:{"local":$("#local_comm-373hndd").val(),"cod":qaueoo,"type":val_9984884,"detail":txte_enqujjsdj444,"cat":$("#okoe308484eee4").val(),"topic":val_99848842},type:"POST",timeout:3000,contentType:"application/x-www-form-urlencoded; charset=utf-8",success:function(data){
window.location="/{$url_teste_default}/{$aux_id_profile}";$('.botao_azul').css({'opacity':9.0,'-moz-opacity':9.0,'-khtml-opacity':9.0});}});
};</script></div></div>

html;

?>
<!-- box-edit-about  -->



</div>
      
                     
                     
                                    
                     
             
               
                 
</div>
<!-- about -->


</div>

<div id="right_main_container_profile">
<!-- membros -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_name_7782->UserFotoThumb ;?>&largura=60&altura=60"/><label><?php echo ocultaTexto($row_name_7782->UserName,20); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
<!-- membros -->

<!-- comunidades relacionadas -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo COMUNIDADESRELACIONADA27772." &nbsp";?></span>
<div class="box-93okd-kmdn982-">
<?php 
$queryCommunities_relation= mysql_query(" SELECT  community_users.IdCommunity,community_users.CommunityImg,community_users.CommunityName,community_users.UserIdPro,community_users.IdOrder,communitie_relation.IdComm1,communitie_relation.IdComm2 FROM communitie_relation,community_users   where  (communitie_relation.IdComm1='$mensagemcod->IdOrder' and communitie_relation.IdComm2=community_users.IdOrder)order by rand() limit 6")or die(mysql_error());;
  $row_communities_relation = mysql_num_rows($queryCommunities_relation);

if ($row_communities_relation!=''){
while ($row_communities_rela = mysql_fetch_object($queryCommunities_relation)){
?>
<div  class="boradsemquina3 box-993ijjerje"><div class="box-pn-3993jdjje-ekke"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($row_communities_rela->CommunityImg !=''){ echo $row_communities_rela->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=60&altura=60"></div><label><a href="/<?php echo $url_teste_default;?>/<?php echo $row_communities_rela->IdComm2;?>"><?php echo ocultaTexto($row_communities_rela->CommunityName,8) ;?><br>(<?php echo number_format(mem_cach_count($row_communities_rela->IdCommunity),0,',','.');?>)</a></label></div>
<?php };};?>

<div style="clear: both;"></div></div>        
</div></div></div>
<!-- comunidades relacionadas -->
</div>


</div>



</div>
<?php };?>



</div>
<div id="fund_global_edit347473">
<div class="ks-cb633he-fdkmfmf-d"></div>
<div id="_lo86326VGF_11l" >
<div class="ju7ur-prkmfmmmbbd"><div class="estilodeboraesombra2 box-0320ej-ejjwiuu3-s">
<div  class="menu_comp user_foto_borda_superior box-woow-wuyy2772-eoioekkde" > <label ><label class="urjjdbbfjjd"><?php echo ALTERARFOTOGERAL;?></label></label></div><br /> 
<div class="Ol-kj-383-mn_baggag-0"><img src="/img_news_2016/ring-alt.gif"/></div>      
</div></div><!-- #center --></div></div> 
<iframe src="" name="sendpost" style="width:0px;height:0px;display:none;"></iframe>
<div id="sound_ooslks" style="display:none;"></div>
<div id="sjjskkdosuhjd"></div>

 <!-- end new designer -->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.15.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.15.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBbFmDpc0wgsCe-GXGgbZ25-5lrbXWbNJ4",
    authDomain: "i-14603.firebaseapp.com",
    databaseURL: "https://i-14603.firebaseio.com",
    projectId: "i-14603",
    storageBucket: "i-14603.appspot.com",
    messagingSenderId: "797047107831",
    appId: "1:797047107831:web:b0d90c8140bd1cc48223f2",
    measurementId: "G-QW1L7LZZG8"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
</body></html>
  
<?php }else{


 

 define('USERID_ID','0');
 
 
 
  
 $useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;


if (phpversion() >= '4.0.4pl1' && (strstr($useragent,'compatible') || strstr($useragent,'Gecko'))) {
	if (extension_loaded('zlib')) {
		ob_start('ob_gzhandler');
	} else {
		ob_start();
	}
} else {
	ob_start();
}
$useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;

include("date.php");
include("lapse.php");
sec_session_start();
 include_once ("transl8uu3j.php");
   
function getTimeStamp() {
	return time();
}
$aux_oomann="";


         

$useragent = $_SERVER['HTTP_USER_AGENT'];
 
  if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'IE';
  } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Opera';
  } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Firefox';
  } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Chrome';
  } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Safari';
  } else {
    // browser not recognized!
    $browser_version = 0;
    $browser= 'other';
  }
 
  if ($browser == 'Firefox' and $browser_version < '35' or $browser == 'Firefox' and $browser_version < '3.0'){
    header("Location: ../browser-inf.php?err=Could not initiate a safe session (ini_set)");
  }
  if ($browser == 'IE'){
  header("Location: ../browser-inf.php?err=Could not initiate a safe session (ini_set)");
  }


  function ocultaTexto($texto,$limite) {
if (strlen($texto) <= $limite){

return $texto ;

}

    $partes = str_split($texto, $limite);
    $saida  = <<<HTML
<text>%s..</text>

HTML;
    printf($saida, array_shift($partes), implode($partes));
}


$date_diario=date("m");
$Bro_diar="$browser $browser_version";
$dia_i=date('d');
$ano_i=date('y');
$vIP= get_client_ip();
  //pageviews
    mysql_query("INSERT INTO page_views (dia,mes,tot,id) VALUES ('".date('d')."','".date('m')."','1','".date('d')."".date('m')."') ON DUPLICATE KEY UPDATE tot = tot+1");
   //  mysql_query("IF EXISTS (SELECT idorder FROM page_views WHERE dia='".date('d')."' and mes='".date('m')."' limit 1) UPDATE page_views SET tot=tot+1  WHERE dia='".date('d')."' and mes='".date('m')."' limit 1 ELSE    INSERT INTO page_views (dia,mes,tot) VALUES ('".date('d')."','".date('m')."','1')" );

    

 //comunidades
$aux_id_profile=($aux_id_profile);
//$aux_id_profile1=($aux_id_custon_profi[0]);
//$aux_id_profile1=$aux_id_profile;
if ($aux_id_profile!='' && (is_numeric($aux_id_profile))){
    $querycod = mysql_query("SELECT * FROM community_users  where IdOrder='".mysql_real_escape_string($aux_id_profile)."' limit 1 ")or die(mysql_error());;


$rs284y824 = mysql_num_rows($querycod);
}else{
   // echo $rs284y824."teste";
    header('Location: ../');
    
}

//echo $rs284y824."teste";
 if ($rs284y824!=''){
$mensagemcod = mysql_fetch_object($querycod);
$auuwdw98r8usduuue777=$mensagemcod->IdCommunity; 
//variaveis para uso geral
//sou dono da comunidade
$quey_my_comm = mysql_query("SELECT UserIdPro FROM community_users  where (IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserIdPro='".USERID_ID."')  limit 1")or die(mysql_error());;
$row_my_com88 = mysql_num_rows($quey_my_comm);//sou dono 
//sou membro
$query_member8383 = mysql_query("SELECT IdOrder,notifications FROM list_community_user  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
$row_members_003= mysql_num_rows($query_member8383);
//usuário banido
$query_baned_02 = mysql_query("SELECT UserId FROM ban_user_commu  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
$row_baned_003 = mysql_num_rows($query_baned_02);
//moderador
$query_moderador_002 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$row_moderador03= mysql_num_rows($query_moderador_002);
//topico liberado
$query_liberadoTopic = mysql_query("SELECT topic_open FROM community_users  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and topic_open<>'0'  limit 1 ")or die(mysql_error());;
$row_topicoNew= mysql_num_rows($query_liberadoTopic);
//verifica se eu fui convidado para comunidade particular
$query17mc = mysql_query("SELECT UserId FROM list_community_user_invit  where IdCommunity='".mysql_real_escape_string($auuwdw98r8usduuue777)."' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
$rcont37mc = mysql_num_rows($query17mc);

// variavel para liberar topicos e interações
if ($row_my_com88==''){
if (($row_members_003!=''  || $row_moderador03!='' ) && $row_baned_003==''){

define('USERALLDENIEDCOMM2899','29982');//liberad acesso
}else{

define('USERALLDENIEDCOMM2899','29000');//acesso negado
}
}else{
define('USERALLDENIEDCOMM2899','29982');//liberad acesso

}
 // variavel para liberar topicos e interações
if ($row_my_com88==''){
if (($row_moderador03!='' || ($row_topicoNew!='' and $row_members_003!=''))){

define('USERALLDENIEDCOMMNEWTOPIC','29982');//criar topico liberado
}else{

define('USERALLDENIEDCOMMNEWTOPIC','29000');//criar topico liberado
}
}else{
define('USERALLDENIEDCOMMNEWTOPIC','29982');//criar topico liberado

}
 }else{
 $auuwdw98r8usduuue777='';
 
 }
 $auuwdw98r8usduuue777;

 if ($rs284y824==''){
 //header('Location: ../');
 }
 //comunidades
 
 //inicio memcache
//consulta quantos membros tem na comunidade
function mem_cach_count($auc_cod){
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$auc_cod; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta especfica com memcache
if ($query_mem==false){
$query173 = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$auc_cod' order by IdOrder ")or die(mysql_error());;
$rcont373 = mysql_num_rows($query173);
$var=$rcont373;

//$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 700);
return $rcont373;
}else{
return $query_mem;
}
};
//fim memcache


//FILTRO ANTI-FLOOD
if($_SESSION['last_session_request'] > (time() - 5)){
    if(empty($_SESSION['last_request_count'])){
        $_SESSION['last_request_count'] = 1;
    }elseif($_SESSION['last_request_count'] < 5){
        $_SESSION['last_request_count'] = $_SESSION['last_request_count'] + 1;
       //  mysql_query("INSERT INTO visitor_comu (idcom,ccuserid) VALUES ('$auc_cod','".CCUSERIDI."')");
        
    }elseif($_SESSION['last_request_count'] >= 5){
         //   header("location: /erro.php");
          //  exit;
         }
 }else{
    $_SESSION['last_request_count'] = 1;
 }
$_SESSION['last_session_request'] = time();
//FILTRO ANTI-FLOOD

//variáveis para verificar comunidade válidade

 $var_img=false;
 $var_about=false;
 $var_topicos=false;
 $var_ask=false;
 $var_members=false;
 $var_categ=false; 
if ($mensagemcod->AboutComm!='' && $mensagemcod->CommunityImg!='' && $mensagemcod->category!='0'){
 $var_img=true;
 $var_about=true;
  $var_categ=true; 
 
};

if (mem_cach_count($auc_cod) > '100') {
  $var_members=true;
  
};
$query55wewewewe = mysql_query("SELECT IdCommunity FROM forum where  IdCommunity='$mensagemcod->IdCommunity' limit 1 ")or die(mysql_error());
$rcont37kkw3545r4f45t = mysql_num_rows($query55wewewewe);
if ($rcont37kkw3545r4f45t!='0'){
$var_topicos=true;

};
$query55wewewewe21r3e32e = mysql_query("SELECT forum.IdCommunity,forum.idforum,ask_forum.idforum,ask_forum.timestamp FROM ask_forum left JOIN forum ON (forum.idforum=ask_forum.idforum) where (forum.IdCommunity='$mensagemcod->IdCommunity' and  '".time()."' - ask_forum.timestamp < 86400)  order by ask_forum.timestamp DESC limit 1 ")or die(mysql_error());;


$rcont37kkw3545r4f45tasasa = mysql_num_rows($query55wewewewe21r3e32e);
if ($rcont37kkw3545r4f45tasasa!='0'){
 
 $var_ask=true;
}; 
if ($var_img==true && $var_about==true && $var_categ==true && $var_members==true && $var_topicos==true && $var_ask==true  ){
 mysql_query(" UPDATE  community_users set verifi='1'  where IdCommunity='$mensagemcod->IdCommunity'  limit 1 ");
 //coloca comunidade como mais destaque
 //verifica se esta comunidade já está em destaque
 $Count_poll = mysql_query("SELECT order_comm FROM poll_comm_top where  order_comm = '$mensagemcod->IdOrder' order by Id_order DESC  limit 1 ")or die(mysql_error());
$a_counter_comm = mysql_num_rows($Count_poll);
if ($a_counter_comm == '' && $Count_memm > '500'){
 mysql_query("INSERT INTO poll_comm_top (ccuserid,order_comm) values ('$mensagem->ccuserid','$mensagemcod->IdOrder')");
}; 
}else{
mysql_query(" UPDATE  community_users set verifi='' where IdCommunity='$mensagemcod->IdCommunity'  limit 1 ");
//retira comunidade do destaque
mysql_query("DELETE  FROM poll_comm_top where order_comm='".$mensagemcod->IdOrder."'  limit 1");


}

//variáveis para verificar comunidade válidade  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php flush ();?>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php echo  $mensagemcod->CommunityName ; ?>"/>
<meta name="keywords" content="orkut,
orkut login,
orkut entrar,
entrar no orkut,
orkut login entrar,
orkut entra,
www.orkut.com.br,
www.orkut,
login orkut,
orkuti,
orku,
orkut entrar agora,
orkt,
orkut.com,
okut,
www.orkut.com,
orkut fazer login,
orkute,
orkut login e senha,
entrar orkut,
entra no orkut,
orkut.com login,
orkut cadastro,
orkurt,
fazer orkut,
orkut entrar login,
criar orkut,
orkut inicio,
novo orkut,
orkut entrar conta,
orkut long,
orkur,
orkut.com.br,
orkult,
orcut,
okurt,
como entrar no orkut,
orkut.com.br login,
entrar no orkut agora,
orkuy,
orkut login novo,
login do orkut,
www orkut com br login,
orkut login entrar agora,
entrar no orkut login,
orkut novo,
otkut,
orkuty,
orkut logim,
orjut,
orut,
www orkut com br entrar,
entra orkut,
rkut,
novo orkut entrar,
orkut login entrar agora orkut,
orkut longin,
orkut loguin,
fazer um orkut,
orkut entrar pagina inicial,
site orkut,
orkit,
site do orkut,
orlut,
orkut.com entrar,
fazer orkut,
oukut,
orkutt,
oekut,
orkut orkut,
0rkut entrar,
prkut,
ourkut,
consegue,
okute,
login no orkut,
oorkut,
orkut.con,
orkut login pagina inicial,
fazer login orkut,
orcute,
orkut login entra,
orhut,
orkut entrar login e senha,
entrar orkut login,
orkute login,
orkut.com.br entrar,
orkut criar conta,
orktu,
orkut home,
ww.orkut,
entrar no meu orkut,
criar uma conta no orkut,
m.orkut,
iorkut,
loguin orkut,
login orkut entrar,
wwww.orkut.com br,
orkyt,
criar conta no orkut,
okkut,
orkut entrar senha,
orkut entrar já,
orkut loguim,
orkkut,
long orkut,
orkut entrar na minha conta,
orcuti,
orkuit,
www.orkut.con,
orkut acessar,
logim orkut,
acessar orkut,
orkutlogin,
entrar no,
orkut entrar direto,
or kut,
orkut entrar agora login,
orkut login entrar agora no orkut,
orkut l,
orkutr,
cadastrar no orkut,
0rkut entrar login,
orkut criar,
orkut log in,
wwworkut,
www.orkut.com login,
orkuti login,
fazer login no orkut,
orkut brasil,
longin orkut,
quero entrar no orkut,
orgute,
entrar no orkut novo,
orkut como entrar,
orkut meu orkut,
criar um orkut,
orkut login entrar conta,
orkui,
orkut.com.br login entrar,
entra na orkut,
orkut entra na minha conta,
www.orkut.com.r,
entar no orkut,
orkut.com login entrar,
www.orkut login,
ortkut,
orkut loing,
orkut entrar no orkut,
orkut login antigo,
orkut login page,
www.orkut.com.b,
entra no meu orkut,
orkut login entrar no orkut,
como acessar o orkut,
orkut google,
www google com br orkut,
orkut mobile,
www.orkut.com l,
orku t,
orkut longi,
entra orkut login,
orkut entra na sua conta,
orkut.cim,
orkut logi,
ww.orkut.com.br,
orkut.co,
ww.orkut.com.br entrar,
www orkut login entrar,
orkut.combr,
google orkut,
orkut pagina inicial,
orkut criar conta,
orkut.com.b,
entrar no orkut antigo,
entra no orkut agora,
orkut.c,
m.orkut.com,
otkuy,
orkut login entrar orkut login,
oprkut,
wwww.orkut,
entra no orkut login,
www.orkut.c,
orkut inicio fazer login,
entrar no orkut login e senha,
criar orkut agora,
orkut login e senha entrar,
orkut.com.br entra,
orkut logn,
site do orkut login,
www.orkut mail.com,
o rkut,
entrar orkut novo,
www.orkut.combr,
www.orkut.com login orkut,
acessar o orkut,
orkut login e senha orkut,
quero entrar no meu orkut,
como faço para entrar no orkut,
como fazer um orkut,
0rkut login,
www.orku,
orkut brasileiro,
wwworkut.com,
orkut login entrar senha,
pagina inicial do orkut,
orkut inicio entrar,
entrar em orkut,
orkut.com entra,
entrar orkut agora,
0rkut long,
login orkut.com.br,
orktut,
orkut longuin,
orkut fazer,
orkut loging,
orkut fazer login entrar,
www.okut.com.br,
orkut log,
como entrar orkut,
logar no orkut,
orkut site,
orku login,
entrar no orkut.com.br,
entrar no orkut direto,
oekur,
orkut fazer conta,
long do orkut,
orkut entrar inicio,
orguti,
orkut login agora,
wwworkut.com.br,
orkut login sign up,
orkutcom,
orkut login e senha entrar agora,
como entra no orkut,
orkut.xom,
orkut acessar minha conta,
orkut ligin,
ork ut,
site orkut login,
entra orkut agora,
como fazer orkut,
orkut inicio login,
oerkut,
www.orkurt.com.br,
entra no orkt,
orkut app,
orkutlogim,
cadastro orkut,
orkut login entrar na conta,
orkt login,
orkur login,
orkut cadastrar,
www.orkut.com.vr,
orkut cadastro conta,
orkut entrar na conta,
orekut,
como entrar no meu orkut,
cadastrar orkut,
fazer login do orkut,
orkut entrar com outra conta,
fazer orkut agora,
abrir orkut,
logim do orkut,
conta do orkut,
orkut account,
quero entrar na minha conta do orkut,
orkut novo login entrar,
www.orkut.co.br,
login orkut novo,
login do orkut entrar,
entrar no orkt,
meu orkut entra agora,
orkut login.com.br,
entrar no orkut.com,
como entrar no orkut agora,
entrar direto no orkut,
fazer long no orkut,
orkujt,
pagina do orkut,
www orkut com br entrar minha conta,
orkut brasil entrar,
orkut longim,
orkue,
orkut cadastre-se,
orkut entrar login agora,
logar orkut,
entra na pagina do orkut,
orkut.com inicio,
loguin do orkut,
orkuto,
orkut.vom,
site orkut entrar,
orkut antigo login,
orkut login entrar hotmail,
criar conta orkut,
acessar orkut login,
okurt login,
orkut longuim,
orkut mobile,
fazer longin no orkut,
entrar na minha conta do orkut,
orkut.com.br orkut,
orkut entrar no meu,
longin do orkut,
orkut fazer uma conta,
entra no orkut.com,
orkut br,
orkut.com.br fazer login,
cadastro no orkut,
como entrar no novo orkut,
www.orku.com,
www.orkt,
ww.orkut entrar,
orkut.com longin,
o kut,
emtra no orkut,
www com orkut,
0rkut entrar agora,
novo orkut login,
orkut.com.r,
www.orkut.com.brr,
entra no okut,
entrar na conta do orkut,
fazer orkute,
www.orku.com.br,
orkut fazer login agora,
entrar no orkute,
orkut brasileiro login,
orkult login,
orkut entrar no meu orkut login,
orkute entrar,
orkut.com entrar agora,
entrar no orku,
login para orkut,
orkut login.com,
or kut login,
www.orkut.cpm,
quero entrar no orkut agora,
entrarorkut,
orkut novo login,
www.orkt.com.br,
fazer um orkut agora,
www orkut com br main,
orkut meu,
www.okut,
www.orkut.cim,
criar conta orkut,
www.orkut.vom,
www.orkut.co,
ww.orkut.com,
login orkut antigo,
como acessar orkut,
criar login orkut,
www.orkutcom,
orkurte,
www.entrar no orkut,
orkut entrar minha conta,
www.orcut.com.br,
cadastrar-se no orkut,
orkut m,
orkt entra,
fazer login para entrar no orkut,
entra na minha conta do orkut,
www orkut conta com,
orkut main,
orkt entrar,
como fazer login no orkut,
login orkut brasil,
entrar no orkult,
okurt entrar,
orkut logon,
login de orkut,
emtrar no orkut,
www.orkut.com.brt,
orkulte,
loguim do orkut,
entra no orkut novo,
orkut.com.br longim,
orkut versão antiga,
or kut entrar,
orkut meu orkut login,
entrar no meu orkut login,
orkut login entrar orkut,
orkut.com.br entrar agora,
logi orkut,
orkut login entra na conta,
entra em orkut,
orkut entra na conta,
entrar okut,
orkurt entrar,
long no orkut,
orkut me cadastrar,
wwww.orkut.com,
entrar no orkut agora login,
entrar no orkurt,
okut.com.br,
www.orkut.c0m,
acesso orkut login,
orkut login entrar na minha conta,
entrar no o,
login orkut entrar agora,
m.orkut.com login,
entra no orkute,
entrar no orkut com outra conta,
orkut fazer login e senha,
entrar no okut,
www orkut entrar agora,
www.orkut.comm,
orkut online,
orkult entrar,
orkut como entrar na minha conta,
www orkut com meu orkut,
orkut logun,
fazer login orkut entrar,
www login orkut com br,
www.orkut.com.bt,
orkutentra,
logn orkut,
orkut online login,
orkut lgin,
fazer orkut novo,
orkut home page,
okut entrar,
orkut login entrar no orkut agora,
orkut fazer conta,
long orkut entrar,
orkut loin,
longi orkut,
orkut entra agora,
faser orkut,
login para entrar no orkut,
www.okurt,
conta orkut login,
orkut login em portugues,
entrar no orkut login agora,
orkut se cadastrar,
orkut cadastrar-se,
wwworkut.com.br entra,
antigo orkut,
www.orkut.com.in,
login orkut hotmail,
www.orkut login.com,
fazer orkut login,
acessar meu orkut,
como faço para entrar no meu orkut,
www.orkuti.com,
como fazer para entrar no orkut,
www.orkuti,
orkut antigo entrar,
como logar no orkut,
entrar orkut antigo,
como faço para acessar o orkut,
meu orkut entrar,
fazer uma conta no orkut,
orkut.coom,
www.orkute,
www.orkt.com,
fazer conta no orkut,
orkut app,
acesso orkut,
ww orkut login,
orkut meu orkut entrar,
orkut.comn,
como entro no orkut,
www.orkut login.com.br,
www.orkut.br,
orkut.cpm,
www.orkurt,
www.orkut.xom,
www.orkurt.com,
orkut fazer login novo,
www.orkuti.com.br,
entrar no meu orkut agora,
0rkut l0gin,
orkut acessar conta,
como criar um orkut,
conta orkut,
google orkut login entrar,
página do orkut,
como acessar meu orkut,
www.orkult,
criar um orkut agora,
orkut entrar no meu orkut,
orkut versão antiga login entrar,
pagina inicial orkut,
orkut não entra,
orkut.comm,
pagina orkut,
orkut br main,
orkut.om,
criar orkut login,
orkut como acessar,
acesso ao orkut,
fazer uma conta no orkut,
orkt.com,
entrar no orkuti,
acessar conta do orkut,
fazer conta no orkut,
cadastre-se no orkut,
okut.com,
se cadastrar no orkut,
quero acessar meu orkut,
www.okut.com,
entrar no orkut antigo login,
acessar orkut minha conta,
criar conta do orkut,
entrar no antigo orkut,
como abrir o orkut,
fazer login no orkut novo,
orku.com,
como entrar no antigo orkut,
orkut fazer uma conta,
entra no meu orkut agora,
orkut conta,
www.orkut.coom,
acessa o orkut,
www.orkut hotmail.com,
orkute.com,
minha conta do orkut,
login do orkut novo,
criar uma conta orkut,
inicio do orkut,
google login orkut,
orkut sign in login,
como faco para entrar no orkut,
como acessar minha conta do orkut,
google orkut login,
entrar orkut versão antiga,
quero entra no orkut,
como entrar na minha conta do orkut,
entrar no orkut fazer login,
sign in orkut,
orkut login hotmail,
orkut.ccom,
www google com br orkut login,
orkut login novo usuario,
eu quero entrar no orkut,
quero entrar no orkut antigo,
entrar no orkut pelo google,
orkut criar conta agora,
orkut login google,
orkut.conm,
orkut.coim,
como criar orkut,
abrir o orkut,
orkut.cm,
login orkut versão antiga,
www orkutlogin,
acessar minha conta do orkut,
www.orkute.com,
entrar meu orkut,
quero entrar no meu orkut agora,
wwww.google.com br orkut,
quero acessar o orkut,
www.orcut,
orkut.copm,
inicio orkut,
orku.com.br,
quero entra no meu orkut,
quero fazer um orkut,
orkut minha conta,
orkut antigo login entrar,
pagina de login do orkut,
wwworkut.combr,
orkut login e senha antigo,
orkurt.com,
ir para orkut,
www.orcut.com,
orkut.c0m,
como faço pra entrar no orkut,
o orkut login,
orkut novo 2012,
orcut.com,
fazer login orkut novo,
abrir orkut login,
www.orkutlogin.com,
abrir um orkut,
orkut login antiga versão,
orkut hotmail entrar,
wwworkut.com login,
o novo orkut,
link orkut,
orkut nao entra,
acessar o orkut login,
www.orkult.com.br,
orkut login mobile,
orkut login mobile,
pagina do orkut login,
fazer o login do orkut,
www.orkut.ccom,
conta no orkut,
entrar no meu perfil do orkut,
orkut.com log in,
meu orkut login,
orkut.ocm,
www.orgut,
acessar conta orkut,
entra no orkut antigo,
www orkut google com br,
orkut login entrar fazer login,
www.orkut.comn,
faser orkut,
entrar no orkut versão antiga,
www.orkute.com.br,
abrir orkut agora,
minha conta no orkut,
eu quero entrar no meu orkut,
orkut sing in,
entrar no meu orkut direto,
o meu orkut,
orkut google login,
como criar uma conta no orkut,
orkut email e senha,
fazer meu orkut,
abrir orkut google,
quero fazer login no orkut,
como acessar minha conta no orkut,
como entrar no orkut 2014,
0rkut antigo,
hotmail orkut entrar,
quero entrar no orkut e não consigo,
login e senha orkut,
orkut hotmail login,
quero entrar no meu orkut login,
orkut antigo login e senha,
google orkut entrar,
criar uma conta no orkut agora,
app e,
entra no meu orkut login,
www.okurt.com,
fazer login no orkut antigo,
conta google orkut,
entrar no orkut antigo agora,
login no orkut antigo,
abrir conta orkut,
orkut main home,
como entrar no orkut antigo 2012,
quero entra orkut,
login do orkut versão antiga,
acessar o meu orkut,
não consigo acessar meu orkut,
orkut account login,
www.orkult.com,
orkut login entrar rapido,
www orkut com br logout,
orkult.com,
entrar no orkut login antigo,
abrir meu orkut,
versão antiga do orkut,
fazer novo orkut,
contas do orkut,
criar conta no orkut agora,
criar conta no orkut agora,
site do orkut antigo,
www.orkut.com.bre,
fazer um orkut novo,
entra no meu orkut antigo,
pagina inicial do orkut login e senha,
como acessar o orkut antigo,
fazer orkut agora gratis,
abrir uma conta no orkut,
orkut antigo 2012,
pagina do orkut antigo,
orkut antigo como entrar,
fazer login do orkut velho,
orkut entrar pelo hotmail,
orkut email,
criar orkut novo,
entrar no orkut por outro site,
como fazer um orkut novo,
entrar orkut hotmail,
conta do google orkut,
html orkut,
criar novo orkut,
criar novo orkut,
nao consigo entrar no meu orkut,
quero entrar no meu orkut antigo,
criar meu orkut,
como acessar o antigo orkut,
entra no e,
criar um orkut novo,
criar um orkut novo,
hotmail orkut login,
fazer login no orkut velho,
como acessar o meu orkut,
hotmail.com entrar no orkut,
orkut entrar antigo,
fazer login orkut antigo,
abrir conta no orkut,
faça login para acessar o orkut,
entrar no orkut velho login,
entrar no orkut hotmail,
entra login,
não consigo entrar no meu orkut,
cria um orkut,
www orkut versão antiga,
entrar entrar entrar,
ver orkut antigo,
como eu faço para entrar no orkut,
quero acessar meu orkut antigo,
como faço pra entrar no meu orkut,
como eu entro no orkut,
wwww.hotmail.com.br entrar3,
entrar no orkut pelo hotmail,
criar conta google orkut,
long orkut velho,
quero entrar no orkut antigo como faço,
entrar no meu antigo orkut,
email do orkut,
email orkut,
pesquisa orkut,
como faço para acessar meu orkut,
como fazer para entrar no orkut antigo,
acessando o orkut,
google.com entrar,
fazer novo orkut,
fazer login orkut velho,
login orkut account,
quero entrar no meu orkut e não consigo,
fazer um novo orkut,
fazer um novo orkut,
quero ver meu orkut,
quero entrar no meu antigo orkut,
html para orkut,
como entrar no orkut com hotmail,
contas do google orkut,
" />
<link rel="image_src" href="/
bg_community/<?php if ($mensagemcod->CommunityImg !=''){ echo $mensagemcod->CommunityImg;}else{ echo "iwu_poweo928C_093_large.jpg";};?>" />
<link rel="shortcut icon" href="/img/icon_001.png" />
<meta name="language" content="<?php echo IDIOMAUSER;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="index,follow"/>
<link type="text/css" rel="stylesheet" href="/css/Cx_sjjXXCwhhw55426677912367n123c3333n56.css" />
<link type="text/css" rel="stylesheet" href="/css/css_XSz_UHG773h_1803233687NNNpc3.css" />
<link rel="stylesheet" href="../dist/css/lightbox.css">
<script type="text/javascript"  src="../dist/js/lightbox-plus-jquery.min.js"></script>
<link type="text/css" href="/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="/css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="/static/jquery1.5.2jquery.min.js"></script>
<script src="/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/static/main_d_UUEJ_XVEvsgey38jlj_039n455c.php?<?php echo time();?>"></script>
<script src="/js/jquery_comm_001.js?<?php echo time();?>" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery_clock.js?<?php echo time();?>"></script>
<script type="text/javascript" src="js/jquery_tr_03287h.js"></script>
<script type="text/javascript" src="/static/jquery.form.js"></script>
<script type="text/javascript" src="/static/autoresize.jquery.js"></script>
<script type="text/javascript" src="/js/notifyN.js?<?php echo time();?>"></script>
<link rel="stylesheet" type="text/css" href="/css/spectrum.css">
<script type="text/javascript" src="/js/spectrum.js"></script>
<script type='text/javascript' src='/docs/toc.js'></script>
<script type='text/javascript' src='/docs/docs.js'></script>
<title>Orkut - <?php echo $mensagemcod->CommunityName;?></title>
<script type="text/javascript">
$(function () {	$(".gePsdhhd").geocomplete({ details: "form" });});$(function() {   $("#datepicker").datepicker()});
var x_is_IJH726_K = "<?php echo $_GET['_sub']?>";
var ejfeueuuee94usgdsd="<?php echo $auuwdw98r8usduuue777?>";
var name_0e0ejnfvruuru4885j="<?php echo $UserName_cokie ?>";
var foto_kdfwrn34783985t58th35hhrfbn="<?php echo $UserFotoThumb_Cokie?>"
var id_odosngsfgnsfi959tjtern="<?php echo $UserId_Cokie?>";
var id_odosngsfgnsfi959tjchat="<?php echo $useridc?>";
var data_wt63hhehjhg5353773="<?php echo ("$portuguese_day,$dia de $portuguese_month");?>";
var aux_atua_variavel_controle_div="";var aux_conect=true;var aux_conect2=true;var aux_84r4urur88=false;var aux_menu_8uue8="";var aux_menu_8uue8C="";var aux_menu_8uue8rand="";var aux_show994kknwyye83pw=false;var aux_showdau84djakpekdh8="";var cod_aux_ministerial='';var paginaFotos=1;var obj_text_coment="";var sajddsd44 ='';$(document).ready(function(){	$('.animated').autoResize();	$(".scroll-pane").jScrollPane();  $(".scroll-pane .jspDrag").hide();    $(".scroll-pane").mouseenter(function () {    $(this).find(".jspDrag").stop(true, true).fadeIn("slow");   });  $(".scroll-pane").mouseleave(function () {    $(this).find(".jspDrag").stop(true, true).fadeOut("slow");   });});if (ejfeueuuee94usgdsd!=''){window.setTimeout('view_prof(ejfeueuuee94usgdsd);',5000);};	</script>
</head>
<body bgcolor="#dae5ee" class="iocover"  onclick=" hide_search_box();on_men003();"  >
<div id="popup2Geral"></div>
<div id="popupNav"><div id="centerNav"></div></div>
<div id="popupNavPubli"><div id="centerNavPubli"></div></div>
<div id="fundo" style=""></div><input type="hidden"id="Id_Aux"name="Id_Aux"value="<?php echo $UserId_Cokie?>"></input>
<input type="hidden"id="user_aux_0001"name="user_aux_0001"value="<?php echo $UserFotoThumb_Cokie ?>"></input>
<!-- new designer --> 
<!-- new barr -->
<div id="new_barr"  class="tems_3728ehe" >
<div class="_oiw8383 _oiw37uejw"><div class="_383uue"><a href="/" title=""><img class="L_3ehd" src="/img_news_2016/IMHud944783.png" /></a></div>
<div id="barr_contai_center" class="_oiw8383500">
<span class="Hn0939_PPOR445"   ><a class="em_or384urjererA" href="/"><?php echo INICIO3222;?></a> | <a class="em_or384urjererA" href="/"><?php echo IDIOMAPGHH;?></a></span>
</div>
<div style="clear: both"></div></div></div>
<!-- new barr -->         
<div id="sub_m_i8euhomew488ru" class="_oiw8383"  ><div class="OOi83hdsggVC242 _oiw8383" ><div class="Kj_93348hfhVVFDMM" ><a onclick="window.location = '/'" href="javascript:void(0)" >
<img src="/img_news_2016/padrao_orkut_oficial_pink.png" class="men_icon_9938488hhhfb" /></a></div>
<div id="barr_contai_centerN" ><label class="boradsemquina3 botao_azul tems_3728ehe I_nnBV5536NMMUOwuew"  onclick="window.location = '/'" ><?php echo INICIO3222;?></label><label onclick="window.location = '/?_sub=1';" class="boradsemquina3 botao_azul tems_3728ehe I_nnBV5536NMMUOwuew" ttr="1" tree="<?php echo $UserId_Cokie?>"><?php echo PERFIL11;?></label><label  onclick="window.location = '/?_sub=2';" class="I_nnBV5536NMMUOwuew boradsemquina3 botao_azul tems_3728ehe " ttr="2" ><?php echo COMUNIDADES222;?></label><label onclick="window.location = '/?_sub=4';" class="boradsemquina3 botao_azul tems_3728ehe I_nnBV5536NMMUOwuew" ttr="4" ><?php echo APLICATIVOS3232;?></label><label onclick="window.location = '/?_sub=3';" class="boradsemquina3 botao_azul tems_3728ehe I_nnBV5536NMMUOwuew " ttr="3"  ><span class="KJ_877343BVFD332151" ><img src="/img_news_2016/dkfskfje8387473yhdhf.png"  class="_ooBGAA23HHGBLOI8837"  /></span><?php echo TEMAS2333;?></label></div>
</div><div style="clear: both;"></div></div>            
<div  id="global_conatiner" class="cl_divs_2723y"><div id="main_container_communities"  class="cl_divs_2723y _oiw8383">
<!-- new designer -->
<div id="left_conatiner_new_profile" ><!-- card --> 
<div class="boradsemquina5 men sombra_padrao_bottom _kJNM8V_ks ui_mw_postoosm">
<div class='foto_us  _XZ_zx525tx'>
<div class="visualizar_newF554" id="visualizar_newF554"><img class="boradsemquina3 img_card-box-comm"src="<?php //verifica se imagem est fora do tamanho 
    $paperuu38="bg_community/$mensagemcod->CommunityImg";
    $imnfoC = getimagesize($paperuu38); $img_wC = $imnfoC[0]; $img_hC = $imnfoC[1];if (($img_wC < '155' or $img_hC < '155')){ ?>/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=155&altura=155;<?php  }else{ if (($img_wC > '155' or $img_hC > '155')){ ?>/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=155&altura=250;<?php }else{ if ($mensagemcod->CommunityImg !=''){ ?>/bg_community/<?php echo $mensagemcod->CommunityImg; }else{ echo "/bg_community/iwu_poweo928C_093_thumb.png";};};};?>"/></div>
<?php if($row_my_com88!=''){?><form id="form_new_img_us" method="post"  enctype="multipart/form-data" action="/up_load_imagem_new_communities.php">
<input type="hidden" id="nam_url_92" name="nam_url_92" value="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>">
<input type="hidden" id="nam_cod_comm93" name="nam_cod_comm93" value="<?php echo $mensagemcod->IdOrder;?>">
<label  class="O-wk928_bbvva6272"><?php echo ALETERARIMAGEM838I3JEJE;?><input id="imagemN" name="imagemN"  type="file"  class="foto"  /><img  src="/imagens_rsrc/icon-0383aSAQSaaAsas332398face.png" /></label>
</form><?php };?></div><!-- card -->
<div id="NH_NAME_83838"><label class="LO_523t23tLK" ><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></label></div>
<!-- gender --> 
<div id="gender_ii4834"><span class="HN_83i_BVXZ_Opow6y35">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.')." ".MEMBROSCASELOW;?>)</span> </div>
<!-- gender -->
<?php if ( USERID_ID=='1') { /*?><div class="men_new_90349e _kIJ736_ji_jgBBN" ><label class="" onclick="clean_923r37com('<?php echo $mensagemcod->IdCommunity;?>');">Excluir comunidade</label></div><?php */};?>
<div class="_kIJ736_ji_jgBBN3nn8">
<?php if ($row_moderador03!='' || $mensagemcod->UserIdPro==USERID_ID){?>
<!-- edit -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/UserBlue-edit.png" class="img_menu_83438" />
<label class="men_new99eje_normal"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/edit?&about=1"><?php echo EDITARCOMM83;?></a></label>
<div class="clear" ></div></div>
<!-- edit --><?php };?>
<?php if ((($row_members_003==''  && $row_moderador03==''  && $row_baned_003=='' && $mensagemcod->CommunityPrivacy=='2'  && $mensagemcod->UserIdPro!=USERID_ID)|| ($rcont37mc > '0' && $row_members_003==''  && $row_moderador03==''  && $row_baned_003=='' && $mensagemcod->UserIdPro!=USERID_ID))&& USERID_ID!='0' ){?>
<!-- add -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/84iikjhrhjere.png" class="img_menu_83438" />
<label onclick="_Kjmn89_Bgaoo(this,'<?php echo $mensagemcod->IdCommunity; ?>','<?php echo MENSAGEM3884UEUUEEOOWEW383WAIT;?>','<?php echo "/".$url_teste_default."/".$mensagemcod->IdOrder ; ?>')"  class="men_new99eje_normal"><?php echo PARTICIPARCOM87;?></label>
<div class="clear" ></div></div>
<!-- add --><?php };?>
<?php if ($row_members_003!=''  || $row_moderador03!=''  && ($mensagemcod->UserIdPro!=USERID_ID && $row_baned_003=='')){?>
<!-- del -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/838iijhhre.png" class="img_menu_83438" />
<label onclick="_Kjmn89_Bgaoo(this,'<?php echo $mensagemcod->IdCommunity; ?>','<?php echo MENSAGEM3884UEUUEEOOWEW383WAIT;?>','<?php echo "/".$url_teste_default."/".$mensagemcod->IdOrder ; ?>');" class="men_new99eje_normal"><?php echo DEIXARCOM837;?></label>
<div class="clear" ></div></div>
<!-- del --><?php };?>
<?php if ($row_members_003==''  && $row_moderador03==''  && $row_baned_003=='' &&  $mensagemcod->UserIdPro!=USERID_ID){?>
<!-- delate -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/minus-button.png" class="img_menu_83438" />
<label class="men_new99eje_normal"><?php echo DENUNCIARCOM983;?></label>
<div class="clear" ></div></div>
<!-- delate --><?php };?>
<?php if ($row_members_003!='' || $mensagemcod->UserIdPro==USERID_ID){?>
<div class="men_new_90349e _kIJ736_ji_jgBBN" onclick="iu_ue847_xxfe('<?php echo USERID_ID ;?>','<?php echo $mensagemcod->IdCommunity;?>')"  >
<img id="ei4874yeheHGGRYyekk"  src="<?php if ($mensagemcod->UserIdPro==USERID_ID ){ if ($mensagemcod->notifications=='0'){echo "/img/bell_93834.png"; }else{echo "/img/bell_938345.png";}; }else{ if ($row_members_003!='') { $mensagem7848riewry98 = mysql_fetch_object($query_member8383);if ($mensagem7848riewry98->notifications=='0'){echo "/img/bell_93834.png"; }else{echo "/img/bell_938345.png";}; };};?>" /><label 
class="men_new99eje_normal "><?php echo NOTIFICACOESCOMUNIDADES323;?></label>
<img id="ei4874yeheHGGRYye" src="<?php if ($mensagemcod->UserIdPro==USERID_ID ){ if ($mensagemcod->notifications=='0'){echo "/img/on_38347iwuewewe.png"; }else{echo "/img/off49547urereui_94.png";}; }else{ if ($row_members_003!='') { if ($mensagem7848riewry98->notifications=='0'){echo "/img/on_38347iwuewewe.png"; }else{echo "/img/off49547urereui_94.png";}; };};?>" /></div>
<?php };?>                      
</div>
<div class="_kIJ736_ji_jgBBN3nn">
<!-- foruns -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/blue-documents-stack.png" class="img_menu_83438" />
<span class="men_new99eje_normal"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/forum?&pag=1"><?php echo FORUMCOM725;?></a></span>
<div class="clear" ></div></div>
<!-- foruns -->
<!-- membros -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/1469423524_group.png" class="img_menu_83438" />
<span class="men_new99eje_normal"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span>
<div class="clear" ></div></div>
<!-- membros -->
</div></div></div>
<?php
//verifica se a pgina do forum

if ($_GET['topic']=='topic' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);
         


$inicio = 0;
$limite = 10	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 

$auc_cod  = Sanitize::filter($_GET['cod']);

//CONTA tpicos
$queryTOPICOS = mysql_query("SELECT ask_forum.idorder FROM ask_forum,users where (users.UserId=ask_forum.UserId) and  ask_forum.idforum='$auc_cod' order by ask_forum.idorder ASC  ")or die(mysql_error());;
$row_TOPICOS = mysql_num_rows($queryTOPICOS);
$total = ceil($row_TOPICOS);

//CONTA os ultimos tpicos
$queryTOPICOSlast = mysql_query("SELECT ask_forum.idorder FROM ask_forum,users where (users.UserId=ask_forum.UserId) and ( ask_forum.idforum='$auc_cod' and ('".time()."' - ask_forum.timestamp < '600')) order by ask_forum.timestamp DESC  ")or die(mysql_error());;
$row_TOPICOSLast = mysql_num_rows($queryTOPICOSlast);
session_register('k_iw38002932'); 
$_SESSION['k_iw38002932']=$row_TOPICOSLast;
//pega nome doi tpico
$queryForum = mysql_query("SELECT UserName,LinkVideo,ask_forum,idforum,UserId,fixed,closed,timestamp,lastactivi,nometopico FROM forum where  idforum='$auc_cod'  limit 1 ")or die(mysql_error());
$row_forum = mysql_fetch_object($queryForum);

//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$mensagemcod->IdCommunity' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);
//verifica moderador 
$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$mensagemcod->IdCommunity' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
$auc_codcommet = $mensagemcod->IdCommunity;
//flush notificações
mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and CommandNoti='$auc_cod' and CommandNoti<>'') order by IdOrder DESC limit 100 ")or die(mysql_error());; 

//verifica se aocmunidade é privada 
if ($mensagemcod->CommunityPrivacy=='2' || USERALLDENIEDCOMM2899=='29982' ){
?>
<input type="hidden"  value="<?php echo $auc_cod;?>"id="sjdjsadoiewe787474uuhr3555fefef">
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><h3 class="h3"><?php echo ocultaTexto($row_forum->nometopico,30) ?></h3>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/forum?&pag=1"><?php echo  FORUM9398873;?></a><font>&nbsp;>&nbsp;<?php echo ocultaTexto($row_forum->nometopico,30) ?></font></span>
</div>
</div>


<div class="box-pagi-top-30" >
<div class="o-383s-spwi-2002n" ><div class="o-383s-spwi-20023n" ><?php if($row_my_com88 !='' && $row_moderador03!='') {?><span  class="bottom_default_orkut_2"><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>/topic=edit?&cod=<?php echo $auc_cod; ?>"><?php echo  TOPICOEDIT9392392982842;?></a></span><?php };?><?php if ($row_forum->closed!='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOFECHADOALERT44);echo  str_replace('!','',$text);?></span><?php };?><?php if ($row_forum->fixed!='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOFIXASDOALERT33);echo  str_replace('!','',$text);?></span><?php };?><?php if ($row_forum->fixed=='0' && $row_forum->closed=='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOABERTOALERT3);echo  str_replace('!','',$text);?></span><?php };?></div><div class="clear"></div></div>
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/topic?&cod=".$_GET['cod']."";
   
    $prox1 = $pag + 1;
	$ant1 = $pag - 1;
	$ultima_pag1 = ceil($total / $limite);
	$penultima1 = $ultima_pag1 - 1;	
	$adjacentes1 = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao1 = '<a href="'.$url_m.'&pag='.$ant1.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag1 <= 5)
{
	for ($i=1; $i< $ultima_pag1+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag1 > 5)
{
	if ($pag < 1 + (2 * $adjacentes1))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes1); $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	elseif($pag > (2 * $adjacentes1) && $pag < $ultima_pag1 - 3)
	{
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes1; $i<= $pag + $adjacentes1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	else {
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $ultima_pag1 - (4 + (2 * adjacentes)); $i <= $ultima_pag1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox1 <= $ultima_pag1 && $ultima_pag1 > 2)
	{
		$paginacao1 .= '<a href="'.$url_m.'&pag='.$prox1.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao1;
		
echo '</div>';
     ?>
</div>
<div class="line-main-box-default" ></div> 

<!-- titulo do tópico -->
<?php 
//variáveis
$queryVariaveisTopico= mysql_query("SELECT NikName,UserFotoThumb,FullName FROM users  where UserId='$row_forum->UserId' limit 1")or die(mysql_error());;
$row_count_userTopciadd= mysql_num_rows($queryVariaveisTopico);
if ($row_count_userTopciadd!=''){
$row_topic_var= mysql_fetch_object($queryVariaveisTopico);
?>
<div class="ui_mw_postoosm box-msg-ask-topic993" onmouseover="mouse_over_menu(this);" ><div class="box-039-mn-djeue"><label ><?php if ((time() - $row_forum->timestamp) < '432000'){  $aux373yur=date('Y-m-d H:i:s',$row_forum->timestamp);  echo  Datetodays($aux373yur);}else{echo  date('d/m/Y H:i:s',$row_forum->timestamp);}; ?></label></div>
<div class="box-39-3ijf-JH-"><div class="box-399-eke-LK-sjd"><div class="box-3993kwk-lksn-ieo"><a href="/<?php echo ($row_topic_var->NikName) ?>"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_topic_var->UserFotoThumb;?>&largura=70&altura=100"  class="box_img-0393-fhjs" /></a></div></div>
<div class="box-3939j-akgs-lp"> <a href="/<?php echo ($row_topic_var->NikName) ?>"><?php echo $row_topic_var->FullName;?></a>
<p><?php echo (($row_forum->ask_forum));?></p>
<div class="video_0393"><?  $aux=($row_forum->LinkVideo); if ($aux!='') { ?><iframe width="500" height="315" src="<?php echo $row_forum->LinkVideo;?>" frameborder="0" allowfullscreen></iframe><?php }?> </div></div><div class="clear"></div>
</div></div> 
<?php };?>
<!-- titulo do tópico -->
<div class="bg_default_orkut2blue_orkut _o-o93i-2oieu">
 <?php 
// mysql_query("UPDATE ask_forum SET status_ask='' where  idforum='$auc_cod' and status_ask='1' ");

$query55 = mysql_query("SELECT users.UserId,users.NikName,users.UserFotoThumb,users.UserName,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum FROM ask_forum,users where (users.UserId=ask_forum.UserId) and  ask_forum.idforum='$auc_cod'  order by ask_forum.idorder ASC limit $inicio,$limite ")or die(mysql_error());
$rcont334 = mysql_num_rows($query55);
 if ($rcont334!='0'){
                while($mensagem = mysql_fetch_object($query55)) {
             
 ?>
 <!-- feed de respostas --> 
<div class="ui_mw_postoosm box-msg-ask-topic993" onmouseover="mouse_over_menu(this);" ><div class="box-039-mn-djeue"><label ><?php if ((time() - $mensagem->timestamp) < '432000'){  $aux373yur=date('Y-m-d H:i:s',$mensagem->timestamp);  echo  Datetodays($aux373yur);}else{echo  date('d/m/Y H:i:s',$mensagem->timestamp);}; ?></label><?php if (USERID_ID==$mensagem->UserId or $rcont373wllele!='' or $rcont373e!=''){ ?> <span onclick="exclu_ask_029(this,'<?php echo $mensagem->idorder; ?>','<?php echo $auc_cod;?>');" class="bottom_default_orkut_2"><?php echo EXCLUIRTOPICOS3882992;?></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo EXCLUIRTOPICOS3882992;?></span><?php };?></div>
<div class="box-39-3ijf-JH-"><div class="box-399-eke-LK-sjd"><div class="box-3993kwk-lksn-ieo"><a href="/<?php echo ($mensagem->NikName) ?>"><img onclick="view_prof('<?php echo ($mensagem44->UserId) ?>');" src="/cropImg.php?arquivo=profile_img/<?php echo $mensagem->UserFotoThumb;?>&largura=70&altura=100"  class="box_img-0393-fhjs" /></a></div></div>
<div class="box-3939j-akgs-lp"> <a href="/<?php echo ($mensagem->NikName) ?>"><?php echo $mensagem->FullName;?></a>
<p><?php echo (sanitize_video($mensagem->ask_forum));?></p>
<div class="video_0393"><?  $aux=($mensagem->LinkVideo); if ($aux!='') { ?><iframe width="500" height="315" src="<?php echo $mensagem->LinkVideo;?>" frameborder="0" allowfullscreen></iframe><?php }?> </div></div><div class="clear"></div>
<div class="box_img-com-ask-3783"><?php if ($mensagem->ImgPost!='') {?><img src="/ask_forum_img/<?php echo $mensagem->ImgPost;?>"/><?php };?></div>
<?php if (USERALLDENIEDCOMM2899=='29982'){?><div class="bg_default_orkut2blue_orkut _box_ask_reati_comm"> <label class="text-box-like-ask-comm-03" onclick="share_commPAsk('<?php echo $auc_cod;?>','<?php echo $mensagem->idorder; ?>','<?php ?>')"><?php echo COPRATILHARTOPICO373782III;?></label>
<?php if ($mensagem->ccuserid!=CCUSERIDI) {?><label class="text-box-like-ask-comm-03" >|</label><label class="text-box-like-ask-comm-03"  onclick="ask_commForumUs('<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagem->ccuserid;//id do dono da resposta?>','<?php echo $mensagem->UserName;//nome do dono da resposta?>')" ><?php echo RESPONDER388IEIDENB;?></label><?php };?>
<?php 
//verifica se eu gostei          
$query17b43fefrer = mysql_query("SELECT ccuserid FROM like_ask_forum where ccuserid='".CCUSERIDI."' and id_ask='$mensagem->idorder' limit 1 ")or die(mysql_error());;
$rcont37b895943ru4wew = mysql_num_rows($query17b43fefrer);
//conta quantos gostaram
$querycoddr4tkjr35ith4 = mysql_query("SELECT ccuserid FROM like_ask_forum where id_ask='$mensagem->idorder' ")or die(mysql_error());;
$rcont37b8938ye38rw3443 = mysql_num_rows($querycoddr4tkjr35ith4);
if ($rcont37b895943ru4wew=='0'){      
          
          ?><label class="text-box-like-ask-comm-03" >|</label><label onclick="like_28882ask(this,'<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagemd->ccuserid;//id do dono da resposta?>');" trrcall=""  class="text-box-like-ask-comm-03"><?php echo GOSTOU84884HHS;?></label>
          <?php }else{?><label onclick="like_28882ask(this,'<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagemd->ccuserid;//id do dono da resposta?>');" trrcall="23232"  class="text-box-like-ask-comm-03"><?php echo GOSTOU84884HHSfff;?></label>
          <?php }; if ($rcont37b8938ye38rw3443!='' or $rcont37b895943ru4wew!='') {?><img class="img-box-like-ask-comm39" src="/img/i383r3hiuere.png" /><label class="text-box-like-ask-comm-03" >(<?php echo $rcont37b8938ye38rw3443;?>)</label><?php };?></div><?php };?> </div></div> 
<!-- feed de respostas -->                  
<?php  }?>
<?php if (USERALLDENIEDCOMM2899=='29982'){?>
<!-- refresh asks -->
<input type="hidden"  id="iwO_GX_jsa62wj"value="<?php echo $auc_cod;?>">
<input type="hidden" id="iwO_GX_jsa62" value="<?php echo $auc_codcommet;?>">
<div id="mshJHasah_9qwqi_alqooOI"></div>
<!-- refresh asks -->
<?php  };};?>
</div><div class="clear"></div><div class="line-main-box-default_bottom" ></div>  
<?php if (USERID_ID!='' && $row_forum->closed=='0' && USERALLDENIEDCOMM2899=='29982') {?><div class="box-pagi-bottom-10" ><?php }else{?><div class="box-pagi-bottom-30" ><?php };?>
<?php 
   $url_m = "/".$url_teste_default."/".$aux_id_profile."/topic?&cod=".$_GET['cod']."";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>


<?php if (USERID_ID!='' && $row_forum->closed=='0' && USERALLDENIEDCOMM2899=='29982') {
$idioma_text =IDIOMACOMUII8388JJJJD;
$ENVIAR_99=ENVIAR98883JJE;
$text_textareabox=TEXTOBOXTEXAREAII992;
echo <<<html
<div class="o-okj-3883j-bbgga-s">
<div class="M-ksjjsh773_owp">
<link rel="stylesheet" type="text/css" href="/mervick-emojionearea-d1a852f/dist/emojionearea.css" media="screen">
<link rel="stylesheet" href="/Trumbowyg-master/dist/ui/trumbowyg.css">
<link rel="stylesheet" href="/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.css">
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<input type="hidden" name="uiw_927_521gsXX1" id="uiw_927_521gsXX1" value=""></input>
<input type="hidden" name="uiw_927_521gsXX2"  id="uiw_927_521gsXX2"value=""></input>
<input type="hidden" name="uiw_927_521gsXX3" id="uiw_927_521gsXX3" value=""></input>
<div  id="textarea_999" class="jqte-test" placeholder="$text_textareabox"></div>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/Trumbowyg-master/dist/trumbowygN.js"></script>
<script src="/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.js" ></script>
<script src="/Trumbowyg-master/plugins/upload/trumbowyg.upload.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Trumbowyg-master/dist/langs/$idioma_text.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/mervick-emojionearea-d1a852f/dist/emojionearea.js"></script>
<div id="subisaymsg_0"  class="subisaymsg">
<button type="submit"  onclick="CommTopicNvn('$auc_cod','$auc_codcommet','');" class="botao_azul _bot_02838-dofkd" title="Enviar..." >$ENVIAR_99</button>
<!-- novo painel de emojis -->
<div id="standalone" class="box_standalone" data-emoji-placeholder=":smiley:"></div><!-- novo painel de emojis -->
</div>
<script type="text/javascript">
$(document).ready(function() {   $("#standalone").emojioneArea({   standalone: true,   autocomplete: false,      events: {  emojibtn_click: function (button, event) { var img32843438743 = button.children().data("src");   $(".trumbowyg-editor").html($(".trumbowyg-editor").html()+"<img src='"+img32843438743+"' />");       }    }     });   }); 
</script><script>
$('.jqte-test').trumbowyg({    btnsAdd: ['foreColor'],         lang: '$idioma_text',        image: {        dropdown: ['insertImage', 'upload'],       ico: 'insertImage'      }         });
 var ujjeu7775rrruer84r484ru = "";
			var ujjeu7775rrruer84r484ru2 = "";
   		var r_0993XX_Uijkkshagte635=true;var key_738 = 'tYt63Hbj_p3_p053fN6_000';var val_039i_iiiUJ = '2887-66d4-a0fb-4d0d-22d6b2';if (localStorage.getItem(key_738)!=null){ 	if (localStorage.getItem(key_738) == "O_uye_0"){r_0993XX_Uijkkshagte635=false;}else{ r_0993XX_Uijkkshagte635=true;};}else{ if(id_odosngsfgnsfi959tjtern == val_039i_iiiUJ || id_odosngsfgnsfi959tjtern =="9a04-b322-67c0-a6d7-2267dc"){  localStorage.setItem(key_738,'O_uye_0');r_0993XX_Uijkkshagte635=false;};};//83773yy8883
   		
function CommTopicNvn(aux_333,qaueoo,aux_1){
$('.botao_azul').css({'opacity':0.1,'-moz-opacity':0.1,'-khtml-opacity':0.1});
$("#form_data").val($(".trumbowyg-editor").html());	var asj8s8sidsish=aux_333;var txte_enqujjsdj=$("#form_data").val();var txte_enqujjsdj444 = txte_enqujjsdj;ujjeu7775rrruer84r484ru = aux_333;ujjeu7775rrruer84r484ru2 = qaueoo;var auuq98q8=aux_333;
if(r_0993XX_Uijkkshagte635==true){
   		$.ajax({url:"/se_t_p_ask_9389.php",data:{"uiw_927_521gsXX1":$('#uiw_927_521gsXX1').val(),"uiw_927_521gsXX2":$('#uiw_927_521gsXX2').val(),"uiw_927_521gsXX3":$('#uiw_927_521gsXX3').val(),"id_ff":ujjeu7775rrruer84r484ru,"form_data":txte_enqujjsdj444},type:"POST",timeout:3000,contentType:"application/x-www-form-urlencoded; charset=utf-8",success:function(data){
var tsdurh9845h5hg5weo1 = Math.round(new Date().getTime() / 1000);var t734ry8484hfge3ye1 = "abhdgo" + tsdurh9845h5hg5weo1 + "";  $('#mshJHasah_9qwqi_alqooOI').append('<div style="display:none;background-color: #FFF4F4" id="'+t734ry8484hfge3ye1+'" ></div>');var urlr94554="/load_ask_299928.php?cod="+ujjeu7775rrruer84r484ru+"";
$("#"+t734ry8484hfge3ye1+"").load(urlr94554,function(){ $("#"+t734ry8484hfge3ye1+"").fadeIn('500',function(){ $(this).animate({ backgroundColor: "#FFFFFF" }, "30000");});});$(".trumbowyg-editor").html('');$('.botao_azul').css({'opacity':9.0,'-moz-opacity':9.0,'-khtml-opacity':9.0});}});};
};</script></div></div>

html;
?>

<!-- Post community inicio -->
 <?php ?>
</div>
</div>
<?php 

};
}else{
    $text_929202jjje =ALERTADECOMUNIDADEPRIVADA8839922;
echo <<<html
<div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="box-ieie-399ekke-eolke" >
    <img src="/img_news_2016/magnifier_plus_icon-icons.com_67832.png"/><span>{$text_929202jjje}</span></div></div>

html;
}
};
?>
<?php
//verifica se a pgina do forum

if ($_GET['topic']=='forum' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 


$queryForum = mysql_query("SELECT idforum,UserId,fixed,closed,timestamp,lastactivi,nometopico FROM forum where  IdCommunity='$mensagemcod->IdCommunity' order by fixed desc ,lastactivi DESC  limit $inicio,$limite ")or die(mysql_error());
$row_forum = mysql_num_rows($queryForum);

//CONTA tpicos
$queryTOPICOS = mysql_query("SELECT idforum FROM forum where  IdCommunity='$mensagemcod->IdCommunity' order by lastactivi DESC  ")or die(mysql_error());;
$row_TOPICOS = mysql_num_rows($queryTOPICOS);
$total = ceil($row_TOPICOS);

//verifica o adm
$auc_cod = $mensagemcod->IdCommunity;
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);
//verifica moderador 
$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
//permissao para qualquer usuario criar topicos
$add_topic_permiss=$mensagemcod->permiss_topic;

//verifica se aocmunidade é privada 
if ($mensagemcod->CommunityPrivacy=='2' || USERALLDENIEDCOMM2899=='29982' ){
?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo FORUMCASEUP9939;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/forum?&pag=1"><?php echo  FORUM9398873;?></a></span></div>
<input class="text_input_default_" placeholder="<?php echo PESQUISARTOPICOS883;?>" id="id_topic00" maxlength="100"
class="text_input_default_" accesskey="/" name="id_topic00" onkeyup="searcH_topic_comm('<?php echo $auc_cod;?>')"   type="text"   />
</div>

<div class="box-pagi-top-30" >
<div class="o-383s-spwi-2002n" ><div class="o-383s-spwi-20023n" ><?php if ($rcont373wllele!='' or $rcont373e!='' or $add_topic_permiss=='1') {?><span onclick="_opNew_83('<?php echo $mensagemcod->IdCommunity;?>')" class="bottom_default_orkut_2"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/new_topic?&new=1"><?php echo NOVOTPOICOI989393;?></a></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo NOVOTPOICOI989393;?></span><?php };?></div><div class="clear"></div></div>
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/forum";
     $url_m2 = "/".$url_teste_default."/".$aux_id_profile."/topic";
    $prox1 = $pag + 1;
	$ant1 = $pag - 1;
	$ultima_pag1 = ceil($total / $limite);
	$penultima1 = $ultima_pag1 - 1;	
	$adjacentes1 = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao1 = '<a href="'.$url_m.'?&pag='.$ant1.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag1 <= 5)
{
	for ($i=1; $i< $ultima_pag1+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao1 .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao1 .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag1 > 5)
{
	if ($pag < 1 + (2 * $adjacentes1))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes1); $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	elseif($pag > (2 * $adjacentes1) && $pag < $ultima_pag1 - 3)
	{
		$paginacao1 .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes1; $i<= $pag + $adjacentes1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao1 .= '...';
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$penultima1.'">'.$penultima1.'</a>';
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$ultima_pag1.'">'.$ultima_pag1.'</a>';
	}
	else {
		$paginacao1 .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao1 .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag1 - (4 + (2 * adjacentes)); $i <= $ultima_pag1; $i++)
		{
			if ($i == $pag)
			{
				$paginacao1 .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao1 .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox1 <= $ultima_pag1 && $ultima_pag1 > 2)
	{
		$paginacao1 .= '<a href="'.$url_m.'?&pag='.$prox1.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao1;
		
echo '</div>';
     ?>
</div>
<div class="line-main-box-default" ></div> 
<div class="bo-039ejje_kwo"><div class="bo-039ejje_kwo0Larger"> <span ><?php echo TOPICCOMM9393;?></span></div><div class="bo-039ejje_kwo1Larger"><span><?php echo AUTORTOPICO0039;?></span></div><div class="bo-039ejje_kwo1"><span><?php echo POSTAGENS93298I34;?></span></div><div class="bo-039ejje_kwo2"><span><?php echo ULTIMAPOSTAGENS7883;?></span></div><div class="clear"></div></div><div class="bg_default_orkut2 _o-o93i-2oieu">

<? 
if ($row_forum!='0'){
 while($row_topic = mysql_fetch_object($queryForum)) {
$query55d = mysql_query("SELECT idorder FROM ask_forum where  idforum='$row_topic->idforum' order by idorder DESC ")or die(mysql_error());
$rcont334d = mysql_num_rows($query55d);
$queryForum_user= mysql_query("SELECT users.UserId,users.FullName,users.NikName,forum.UserId FROM forum,users where (users.UserId=forum.UserId)and (forum.idforum='$row_topic->idforum' and  forum.IdCommunity='$mensagemcod->IdCommunity')   limit 1 ")or die(mysql_error());
$row_forum_user = mysql_fetch_object($queryForum_user);

 ?>
<div class="ui_mw_postoosm ui_mw_postoosm_n relative_box" onmouseover="mouse_over_menu(this);" ><label class="de_039930 label_box_op_menu_comm"><img class="de_0399301 l-oroiIMG-3984" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box_menu_op_comm">
<ul>
<?php if (USERID_ID==$row_topic->UserId or $mensagemcod->UserIdPro==USERID_ID or $rcont373e!=''){ ?><li class="men_new_90349e3 dhsjhdff775P" onclick="exclu_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>');"><?php echo EXCLUIRTOPICO8383;?></li><?php };?>
<?php if ($mensagemcod->UserIdPro==USERID_ID or $rcont373e!=''){ ?><?php if ($row_topic->fixed=='0') {?><li class="men_new_90349e3 dhsjhdff775P" onclick="fix_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>','<?php echo TOPICOFIXASDOALERT33;?>');"><?php echo FIXARTOPICO3883;?></li><?php }else{?>
<li class="men_new_90349e3 dhsjhdff775P" onclick="de_fix_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>','<?php echo TOPICODESAFIXADOALERT33;?>');"><?php echo DESAFIXARTOPICO388IE;?></li><?php };};?>
<?php if ($mensagemcod->UserIdPro==USERID_ID or $rcont373e!=''){ ?><?php if ($row_topic->closed=='0') {?><li   class="men_new_90349e3 dhsjhdff775P" onclick="close_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>','<?php echo TOPICOFECHADOALERT44;?>');"><?php echo FECHARTOPICO9993;?></li><?php }else{?>
<li class="men_new_90349e3 dhsjhdff775P" onclick="open_forum_029(this,'<?php echo $row_topic->idforum; ?>','<?php echo $mensagemcod->IdCommunity;?>','<?php echo TOPICOABERTOALERT3;?>');"><?php echo ABRIRTOPICO939OI3;?></li><?php };};?>
<li  class="men_new_90349e3  jsooskkskPPdenunciaall" ><?php echo DENUNCIARTOPICO884;?> <input type="hidden" value="<?php echo $mensagemcod->IdCommunity; ?>"/><input type="hidden" value="<?php echo $url_m2."?&cod=".$row_topic->idforum."&pag=1";?>"/></li></ul></div>
<div class="box-93forum838"><div class="box-left-text-from774Large"><span><a href="<?php echo $url_m2."?&cod=".$row_topic->idforum."&pag=1";?>"><?php echo ($row_topic->nometopico);?></a></span></div>
<div class="box-center-text-from774Large"><span><a href="/<?php echo $row_forum_user->NikName; ?>"><?php echo ocultaTexto($row_forum_user->FullName,18);?></a></span></div><div class="box-right-text-from774Large"><span><?php echo  number_format($rcont334d,0,',','.');?></span></div>
<div class="box-left-time-999"><span><?php   if($row_topic->lastactivi!='0') { echo date('d/m/Y H:i:s',$row_topic->lastactivi);}else{ echo date('d/m/Y H:i:s',$row_topic->timestamp);};  ?></span></div> </div><div class="clear"></div></div>                       
<?php         }};?>

</div><div class="clear"></div><div class="line-main-box-default_bottom" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
        $url_m = "/".$url_teste_default."/".$aux_id_profile."/forum";
     $url_m2 = "/".$url_teste_default."/".$aux_id_profile."/topic";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>
<div class="clear"></div></div>
</div>
<?php 

}else{
    $text_929202jjje =ALERTADECOMUNIDADEPRIVADA8839922;
echo <<<html
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="box-ieie-399ekke-eolke" >
    <img src="/img_news_2016/magnifier_plus_icon-icons.com_67832.png"/><span>{$text_929202jjje}</span></div></div></div>

html;
}

};





?>
<?php
//verifica se a pgina  de banidos

if ($_GET['topic']=='banned' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 



$auc_cod = $mensagemcod->IdCommunity;
//CONTA banidos
$queryMODERA = mysql_query("SELECT ban_user_commu.IdOrder,users.UserId FROM ban_user_commu,users  where (users.UserId=ban_user_commu.UserId and IdCommunity='$auc_cod') order by ban_user_commu.IdOrder DESC ")or die(mysql_error());;
$row_moderators = mysql_num_rows($queryMODERA);
$total = ceil($row_moderators);

//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);


$query17 = mysql_query("SELECT ban_user_commu.IdOrder,users.UserId FROM ban_user_commu,users  where (users.UserId=ban_user_commu.UserId and IdCommunity='$auc_cod') order by ban_user_commu.IdOrder  DESC  limit $inicio, $limite")or die(mysql_error());;

;
$rcont37 = mysql_num_rows($query17);



$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);

?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo BANIDOSMEMBERSC00;?> (<?php echo number_format($row_moderators,0,',','.');?>)</span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> <div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div> <?php if ($rcont373wllele!='' or $rcont373e!='') {?><div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div><?php };?> <div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
	    $cidade_Name =($mensagemcomp2->UserCidade) ; 
   $estado_Name =($mensagemcomp2->UserEstado) ; 
   $pais_Name =($mensagemcomp2->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;
 
 ?>
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?><li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo VOLTARMEMBROCOMM;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<?php if ($rcont373wllele!='') {?><li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php }; };?></ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagem->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $aux_gender_n.",".$cidade_Name."-".$estado_Name.",".$pais_Name;?></span></div>  
 <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div class="clear"></div></div>
<?php };?><?php  if ($aux_osdj394h4hhn==false) {?><?php };?>
<?php  }else{?><div class="p_09-kJG42r"><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
<div class="J-03_wou266" ><div class="K-39_p24rw-i"><span> <?php echo  POXANAOTEMOS883." "; if($rcont373wllele!='' or $rcont373!='') { echo EMSUACOMUNIDADE673; }else{ echo NESTACOMUNIDADE373;};?></span></div>
<div class="K-sl_pow92873-92" onmouseout="javascript:this.style.background= ''"  onmouseover="javascript:this.style.background= '#EFEFEF'"><div>
</div><img  src="/img/7748yiuTTtrw_93904.png"><label class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS778383;?></label></div></div><?php };?>
</div><?php };?></div><div class="clear"></div><div class="line-main-box-default" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/banned";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
	echo '</div>';	

     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>
<?php
//verifica se a pgina  de moderadores

if ($_GET['topic']=='moderators' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 


$auc_cod = $mensagemcod->IdCommunity;
//CONTA MODERADORES
$queryMODERA = mysql_query("SELECT manager_comm  FROM list_community_user  where IdCommunity='$auc_cod' and manager_comm<>'' order by IdOrder DESC ")or die(mysql_error());;
$row_moderators = mysql_num_rows($queryMODERA);
$total = ceil($row_moderators);

//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);


$query17 = mysql_query("SELECT UserId,manager_comm  FROM list_community_user  where IdCommunity='$auc_cod' and manager_comm<>'' order by IdOrder DESC  limit $inicio, $limite")or die(mysql_error());;

;
$rcont37 = mysql_num_rows($query17);



$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);

?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo MODERADORES0938JJ;?> (<?php echo number_format($row_moderators,0,',','.');?>)</span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> <div class="Kj889_csw63 _OO84IBOX_default"  >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div> <?php if ($rcont373wllele!='' or $rcont373e!='') {?><div  class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div><?php };?> <div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
	    $cidade_Name =($mensagemcomp2->UserCidade) ; 
   $estado_Name =($mensagemcomp2->UserEstado) ; 
   $pais_Name =($mensagemcomp2->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;
 
 ?>
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?> <li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo BANIRMEMBROS883;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php };?></ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagem->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $aux_gender_n.",".$cidade_Name."-".$estado_Name.",".$pais_Name;?></span></div>  
 <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div class="clear"></div></div>
<?php };?><?php  if ($aux_osdj394h4hhn==false) {?><?php };?>
<?php  }else{?><div class="p_09-kJG42r"><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
<div class="J-03_wou266" ><div class="K-39_p24rw-i"><span> <?php echo  POXANAOTEMOS883." "; if($rcont373wllele!='' or $rcont373!='') { echo EMSUACOMUNIDADE673; }else{ echo NESTACOMUNIDADE373;};?></span></div>
<div class="K-sl_pow92873-92" onmouseout="javascript:this.style.background= ''"  onmouseover="javascript:this.style.background= '#EFEFEF'"><div>
</div><img  src="/img/7748yiuTTtrw_93904.png"><label class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS778383;?></label></div></div><?php };?>
</div><?php };?></div><div class="clear"></div><div class="line-main-box-default" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/moderators";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
		
echo '</div>';
     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>

<?php
//verifica se a pgina  de membros

if ($_GET['topic']=='members' && $aux_id_profile!=''){

$pag = Sanitize::filter($_GET['pag']);
$pag = filter_var($pag, FILTER_VALIDATE_INT);

$inicio = 0;
$limite = 12	;
$inicio = ($pag * $limite) - $limite;
if ($pag=='')
{
	$inicio = 0;
} 




$total = ceil(mem_cach_count($mensagemcod->IdCommunity));


$auc_cod = $mensagemcod->IdCommunity;
//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);


$query17 = mysql_query("SELECT UserId,manager_comm  FROM list_community_user  where IdCommunity='$auc_cod' order by IdOrder DESC  limit $inicio, $limite")or die(mysql_error());;

;
$rcont37 = mysql_num_rows($query17);


$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);

?>
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo MEMBROSUPCASE7;?> (<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> <div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div><?php if ($rcont373wllele!='' or $rcont373e!='') {?><div  class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div><?php };?> <div class="clear_div_0"></div></div>
<div id="lweo94ialfejjfeqjkol">
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserGen,UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName,UserPais,UserEstado,UserCidade  FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
	    $cidade_Name =($mensagemcomp2->UserCidade) ; 
   $estado_Name =($mensagemcomp2->UserEstado) ; 
   $pais_Name =($mensagemcomp2->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;
 
 ?>
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?> <li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $fotocomp2Id;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $fotocomp2Id;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo BANIRMEMBROS883;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $fotocomp2Id ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php };?></ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagem->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $aux_gender_n.",".$cidade_Name."-".$estado_Name.",".$pais_Name;?></span></div>  
 <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div class="clear"></div></div>
<?php };?><?php  if ($aux_osdj394h4hhn==false) {?><?php };?>
<?php  }else{?><div class="p_09-kJG42r"><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
<div class="J-03_wou266" ><div class="K-39_p24rw-i"><span> <?php echo  POXANAOTEMOS883." "; if($rcont373wllele!='' or $rcont373!='') { echo EMSUACOMUNIDADE673; }else{ echo NESTACOMUNIDADE373;};?></span></div>
<div class="K-sl_pow92873-92" onmouseout="javascript:this.style.background= ''"  onmouseover="javascript:this.style.background= '#EFEFEF'"><div>
</div><img  src="/img/7748yiuTTtrw_93904.png"><label class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS778383;?></label></div></div><?php };?>
</div><?php };?></div><div class="clear"></div><div class="line-main-box-default" ></div>  
<div class="box-pagi-bottom-30" >
<?php 
     $url_m = "/".$url_teste_default."/".$aux_id_profile."/members";
    $prox = $pag + 1;
	$ant = $pag - 1;
	$ultima_pag = ceil($total / $limite);
	$penultima = $ultima_pag - 1;	
	$adjacentes = 2;
	
	echo '<div class="paginacao">';
	
	if ($pag>1)
	{
		$paginacao = '<a href="'.$url_m.'?&pag='.$ant.'">'.ANTERIOR848IJDMD.'</a>';
	}
	
	
if ($ultima_pag <= 5)
{
	for ($i=1; $i< $ultima_pag+1; $i++)
	{
		if ($i == $pag)
		{
			$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
		} else {
			$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
		}
	}
} 

if ($ultima_pag > 5)
{
	if ($pag < 1 + (2 * $adjacentes))
	{
		for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
		$paginacao .= '...';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$penultima.'">'.$penultima.'</a>';
		$paginacao .= '<a href="'.$url_m.'?&pag='.$ultima_pag.'">'.$ultima_pag.'</a>';
	}
	else {
		$paginacao .= '<a href="'.$url_m.'?&pag=1">1</a>';				
		$paginacao .= '<a href="'.$url_m.'?&pag=1">2</a> ... ';	
		for ($i = $ultima_pag - (4 + (2 * adjacentes)); $i <= $ultima_pag; $i++)
		{
			if ($i == $pag)
			{
				$paginacao .= '<a class="atual" href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';				
			} else {
				$paginacao .= '<a href="'.$url_m.'?&pag='.$i.'">'.$i.'</a>';	
			}
		}
	}
}

	
	

	if ($prox <= $ultima_pag && $ultima_pag > 2)
	{
		$paginacao .= '<a href="'.$url_m.'?&pag='.$prox.'">'.PROXIMAHDHE883.'</a>';
	}
	
		echo $paginacao;
		
echo '</div>';
     ?>
</div>
<div class="clear"></div></div>
</div>
<?php };?>
<?php

//verifica se a pgina  principal

if ($_GET['topic']==''  && $aux_id_profile!=''){
//verifica o dono 
$queryADM = mysql_query("SELECT community_users.UserIdPro,users.UserId,users.NikName,users.UserName FROM community_users,users  where (community_users.IdCommunity='$mensagemcod->IdCommunity' and users.UserId=community_users.UserIdPro) limit 1")or die(mysql_error());;
$row_ADM= mysql_fetch_object($queryADM);
//verifica moderadores 
$moderadores="";
$queryModeradores = mysql_query("SELECT UserId FROM list_community_user where (IdCommunity='$mensagemcod->IdCommunity' and manager_comm='1')  order by IdOrder asc  ")or die(mysql_error());;
$row_moderadores= mysql_num_rows($queryModeradores);

?>
<div id="new_99edujebnnne_center_container" ><div class="center_painel_communities_default" id="center_container__9929">
<!-- about  -->
<div class="sombra_padrao_bottom lloepowpoei83838K center_painel_communities_default pn-about_box_com888">
<!-- nome-->
<div class="X-H6727"><span class="text_menu-0o"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></span><?php if ($mensagemcod->verifi=='1'){?><span class="text_88393jjsjjsspan" ><img class="lloepowpoei838382 box-img-299273773"  src="/img/Select8348343i_93943.png" ><div  class="ksiieoe838833ue2 boradsemquina3 box-939388kjah-ksj">
<img src="/img/k0399493.png" class="box-93kk_po-wej83" /><div class="ok-j3j-bbgs-pplls-s" ><span><?php echo COMUNIDADEVERIFICADA38839IEIE;?></span></div></div></span><?php };?>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<!-- nome-->
<div class="box-about-8392rjeeqq">
<!-- descrio -->
<div class="row_blue_001PBG cobox_padding_main_comm" >
<div class="col_left_profile_main">
<span class="text_painel_default_1" ><?php echo DESCRICAODSJJD333;?>:</span>
</div>
<!-- html -->
<div class="box-8883iihtmlk-99"><span class="box-text-about-comm8833" ><?php if ($mensagemcod->AboutComm!=''){ echo ocultaTexto(($mensagemcod->AboutComm),150);}else{ echo "<br><p>" ;};?></span>
<div class="K-jjoweu83883nnm-9o"><?php echo (sanitize_video($mensagemcod->detail));?></div>
<!-- html -->
<div class="clear_div_0"></div></div> 
</div>
<!-- descrio -->
<!-- idioma -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo IDIOMA828IWJJDJHSD;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php  echo  lang_trans_t2($mensagemcod->lang);?></span></div><div class="clear_div_0"></div> </div>
<!-- idioma -->
<!-- categoria -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo CATEGORIAIIEUU3883D;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php echo $mensagemcod783748347348387->text;?></a></span></div><div class="clear_div_0"></div> </div>
<!-- categoria -->
<!-- dono -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo DONODIIEIU2382JJDND;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><a href="/
<?php echo $row_ADM->NikName;?>" target='_blank'><?php  echo  ($row_ADM->UserName);?></a></span></div><div class="clear_div_0"></div> </div>
<!-- dono -->
<!-- moderadores -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo MODERADORES883J3HGDGBF;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php
if ($row_moderadores!=''){
while ($row_mod_002= mysql_fetch_object($queryModeradores)) {
$queryMo999 = mysql_query("SELECT NikName,UserName FROM users where UserId='$row_mod_002->UserId' limit 1")or die(mysql_error());;
$rowMo999 = mysql_fetch_object($queryMo999);
echo $moderadores =<<<html
<a href="/
$rowMo999->NikName" target='_blank'>$rowMo999->UserName</a><span class="text_painel_default_2">,</span>
html;
};
};
?></span></div><div class="clear_div_0"></div> </div>
<!-- moderadores -->
<!-- privacidade -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo TIPOCOMJERUU3838JE;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php if ($mensagemcod->CommunityPrivacy=='2')  { echo  PUBLICAFGDUE78738U3JH3;}else{ echo PRIVADAYWYU2377332UHEHJE;};?></span></div><div class="clear_div_0"></div> </div>
<!-- privacidade -->
<!-- local -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo LOCALJDJHD7373HHGTT;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php if ($mensagemcod->loc !='') { echo  ocultaTexto($mensagemcod->loc,25);}else{ echo ocultaTexto($mensagem->UserPais,25) ;};?></span></div><div class="clear_div_0"></div> </div>
<!-- local -->
<!-- criada em -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo CRIADAEMHHDFYH3773D;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php $aux373yur=date('d/m/Y',$mensagemcod->timestamp);  echo  ($aux373yur);?></span></div><div class="clear_div_0"></div> </div>
<!-- criada em -->
<!-- membros -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo MEMBROSCASELOW;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.')." ".MEMBROSCASELOW;?></span></div><div class="clear_div_0"></div> </div>
<!-- membros -->


</div>
      
                     
                     
                                    
                     
             
               
                 
</div>
<!-- about -->
<!-- forum -->
<?php 
//verifica se aocmunidade é privada 
if ($mensagemcod->CommunityPrivacy=='2' || USERALLDENIEDCOMM2899=='29982' ){
?>
<div id="k_o30-3eiennaj-akdk39" class="boradsemquina3 sombra_padrao_bottom lloepowpoei83838K center_painel_communities_default"><div class="header_main_pn"><span><?php echo FORUM9398873;?></span> </div>
<div class="bo-039ejje_kwo"><div class="bo-039ejje_kwo0"> <span ><?php echo TOPICCOMM9393;?></span></div><div class="bo-039ejje_kwo1"><span><?php echo POSTAGENS93298I34;?></span></div><div class="bo-039ejje_kwo2"><span><?php echo ULTIMAPOSTAGENS7883;?></span></div><div class="clear"></div></div><div class="bg_default_orkut2 _o-o93i-2oieu">
<?php 
$url_m = "/".$url_teste_default."/".$aux_id_profile."/topic";
$url_m2 = "/".$url_teste_default."/".$aux_id_profile."/forum";
$queryForum = mysql_query("SELECT idforum,UserId,fixed,closed,timestamp,lastactivi,nometopico FROM forum where  IdCommunity='$mensagemcod->IdCommunity' order by fixed desc ,lastactivi DESC  limit 12 ")or die(mysql_error());
$row_forum = mysql_num_rows($queryForum);
if ($row_forum!='0'){
//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$mensagemcod->IdCommunity' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);
//verifica moderador 
$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$mensagemcod->IdCommunity' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
//permissao para qualquer usuario criar topicos
$add_topic_permiss=$mensagemcod->permiss_topic;
 while($row_topic = mysql_fetch_object($queryForum)) {
$query55d = mysql_query("SELECT idorder FROM ask_forum where  idforum='$row_topic->idforum' order by idorder DESC ")or die(mysql_error());
$rcont334d = mysql_num_rows($query55d);
?> 
<div class="ui_mw_postoosm " onmouseover="mouse_over_menu(this);" > <div class="box-93forum838"><div class="box-left-text-from774"><span><a href="<?php echo $url_m."?&cod=".$row_topic->idforum."&pag=1";?>"><?php echo ($row_topic->nometopico);?></a></span></div>
<div class="box-right-text-from774"><span><?php echo  number_format($rcont334d,0,',','.');?></span></div>
<div class="box-left-time-999"><span><?php   if($row_topic->lastactivi!='0') { echo date('d/m/Y H:i:s',$row_topic->lastactivi);}else{ echo date('d/m/Y H:i:s',$row_topic->timestamp);};  ?></span></div> </div><div class="clear"></div></div>                       
<?php         }};?></div><div style="clear: both"></div><div class="o-383s-spwi-2002" >
    <div class="o-383s-spwi-20023" ><?php if ($rcont373wllele!='' or $rcont373e!='' or $add_topic_permiss=='1') {?><span onclick="_opNew_83('<?php echo $mensagemcod->IdCommunity;?>')" class="bottom_default_orkut_2"><a href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/new_topic?&new=1"><?php echo NOVOTPOICOI989393;?></a></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo NOVOTPOICOI989393;?></span><?php };?></div><div class="o-383s-spwi-200234"><span class="bottom_default_orkut_2"><a href="<?php echo $url_m2."?&pag=1";?>"><?php 	echo VERTODODOSTOPICOS9933;?></a></span></div><div class="clear"></div></div>
    </div>
    <?php }
    
    ?>
<!-- forum -->

</div>

<div id="right_main_container_profile">
<!-- membros -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_name_7782->UserFotoThumb ;?>&largura=60&altura=60"/><label><?php echo ocultaTexto($row_name_7782->UserName,20); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
<!-- membros -->

<!-- comunidades relacionadas -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo COMUNIDADESRELACIONADA27772." &nbsp";?></span>
<div class="box-93okd-kmdn982-">
<?php 
$queryCommunities_relation= mysql_query(" SELECT  community_users.IdCommunity,community_users.CommunityImg,community_users.CommunityName,community_users.UserIdPro,community_users.IdOrder,communitie_relation.IdComm1,communitie_relation.IdComm2 FROM communitie_relation,community_users   where  (communitie_relation.IdComm1='$mensagemcod->IdOrder' and communitie_relation.IdComm2=community_users.IdOrder)order by rand() limit 6")or die(mysql_error());;
  $row_communities_relation = mysql_num_rows($queryCommunities_relation);

if ($row_communities_relation!=''){
while ($row_communities_rela = mysql_fetch_object($queryCommunities_relation)){
?>
<div  class="boradsemquina3 box-993ijjerje"><div class="box-pn-3993jdjje-ekke"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($row_communities_rela->CommunityImg !=''){ echo $row_communities_rela->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=60&altura=60"></div><label><a href="/<?php echo $url_teste_default;?>/<?php echo $row_communities_rela->IdComm2;?>"><?php echo ocultaTexto($row_communities_rela->CommunityName,8) ;?><br>(<?php echo number_format(mem_cach_count($row_communities_rela->IdCommunity),0,',','.');?>)</a></label></div>
<?php };};?>

<div style="clear: both;"></div></div>        
</div></div></div>
<!-- comunidades relacionadas -->
</div>


</div>



</div>
<?php };?>
<?php

//verifica se a pagina é add

if ($_GET['topic']=='new_topic' && $_GET['new']=='1'  && $aux_id_profile!='' && USERALLDENIEDCOMMNEWTOPIC == '29982'){

//verifica o dono 
$queryADM = mysql_query("SELECT community_users.UserIdPro,users.UserId,users.NikName,users.UserName FROM community_users,users  where (community_users.IdCommunity='$mensagemcod->IdCommunity' and users.UserId=community_users.UserIdPro) limit 1")or die(mysql_error());;
$row_ADM= mysql_fetch_object($queryADM);
//verifica moderadores 
$moderadores="";
$queryModeradores = mysql_query("SELECT UserId FROM list_community_user where (IdCommunity='$mensagemcod->IdCommunity' and manager_comm='1')  order by IdOrder asc  ")or die(mysql_error());;
$row_moderadores= mysql_num_rows($queryModeradores);

?>
<div id="new_99edujebnnne_center_container" ><div class="center_painel_communities_default" id="center_container__9929">
<!-- about  -->
<div class="sombra_padrao_bottom lloepowpoei83838K pn-about_box_com888New">
<!-- nome-->
<div class="X-H6727"><span class="text_menu-0o"><?php echo NOVOTPOICOI989393 ;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<!-- nome-->

<!-- box-pn-new-topic -->
<?php
$auc_codcommet =$mensagemcod->IdCommunity;
$idioma_text =IDIOMACOMUII8388JJJJD;
$ENVIAR_99=ENVIAR98883JJE;
$text_textareabox=TEXTOBOXTEXAREAII992MENSAGEM8892;
$assunto_do_topico=TITULODOTOPICO236367762;

echo <<<html
<div class="o-okj-3883j-bbgga-s">
<div class="M-ksjjsh773_owp">
<link rel="stylesheet" type="text/css" href="/mervick-emojionearea-d1a852f/dist/emojionearea.css" media="screen">
<link rel="stylesheet" href="/Trumbowyg-master/dist/ui/trumbowyg.css">
<link rel="stylesheet" href="/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.css">
<form id="ad_topic" name="ad_topic" method="post" action="/{$url_teste_default}/{$aux_id_profile}">
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<input type="hidden" name="id_ff"  value="$auc_codcommet"></input>
<input type="hidden" name="new"  value="2883776"></input>
<input type="text" id="ti_03902oedue" name="title"placeholder="$assunto_do_topico"/>
<div  id="textarea_999" class="jqte-test" placeholder="$text_textareabox"></div>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/Trumbowyg-master/dist/trumbowygN.js"></script>
<script src="/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.js" ></script>
<script src="/Trumbowyg-master/plugins/upload/trumbowyg.upload.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Trumbowyg-master/dist/langs/$idioma_text.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/mervick-emojionearea-d1a852f/dist/emojionearea.js"></script>
<div id="subisaymsg_0"  class="subisaymsg">
<button type="button"  onmouseup="return CommTopicNvn();" class="botao_azul _bot_02838-dofkd" title="Enviar..." >$ENVIAR_99</button>
</form>
<!-- novo painel de emojis -->
<div id="standalone" class="box_standalone" data-emoji-placeholder=":smiley:"></div><!-- novo painel de emojis -->
</div>
<script type="text/javascript">
$(document).ready(function() {   $("#standalone").emojioneArea({   standalone: true,   autocomplete: false,      events: {  emojibtn_click: function (button, event) { var img32843438743 = button.children().data("src");   $(".trumbowyg-editor").html($(".trumbowyg-editor").html()+"<img src='"+img32843438743+"' />");       }    }     });   }); 
</script><script>
$('.jqte-test').trumbowyg({    btnsAdd: ['foreColor'],         lang: '$idioma_text',        image: {        dropdown: ['insertImage', 'upload'],       ico: 'insertImage'      }         });
 var ujjeu7775rrruer84r484ru = "";
			var ujjeu7775rrruer84r484ru2 = "";
function CommTopicNvn(){
 
$('.botao_azul').css({'opacity':0.1,'-moz-opacity':0.1,'-khtml-opacity':0.1});
$("#form_data").val($(".trumbowyg-editor").html());	
document.ad_topic.submit();
};</script></div></div>

html;

?>
<!-- box-pn-new-topic -->
</div>

</div>

<div id="right_main_container_profile">
<!-- membros -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_name_7782->UserFotoThumb ;?>&largura=60&altura=60"/><label><?php echo ocultaTexto($row_name_7782->UserName,20); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
<!-- membros -->

<!-- comunidades relacionadas -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo COMUNIDADESRELACIONADA27772." &nbsp";?></span>
<div class="box-93okd-kmdn982-">
<?php 
$queryCommunities_relation= mysql_query(" SELECT  community_users.IdCommunity,community_users.CommunityImg,community_users.CommunityName,community_users.UserIdPro,community_users.IdOrder,communitie_relation.IdComm1,communitie_relation.IdComm2 FROM communitie_relation,community_users   where  (communitie_relation.IdComm1='$mensagemcod->IdOrder' and communitie_relation.IdComm2=community_users.IdOrder)order by rand() limit 6")or die(mysql_error());;
  $row_communities_relation = mysql_num_rows($queryCommunities_relation);

if ($row_communities_relation!=''){
while ($row_communities_rela = mysql_fetch_object($queryCommunities_relation)){
?>
<div  class="boradsemquina3 box-993ijjerje"><div class="box-pn-3993jdjje-ekke"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($row_communities_rela->CommunityImg !=''){ echo $row_communities_rela->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=60&altura=60"></div><label><a href="/<?php echo $url_teste_default;?>/<?php echo $row_communities_rela->IdComm2;?>"><?php echo ocultaTexto($row_communities_rela->CommunityName,8) ;?><br>(<?php echo number_format(mem_cach_count($row_communities_rela->IdCommunity),0,',','.');?>)</a></label></div>
<?php };};?>

<div style="clear: both;"></div></div>        
</div></div></div>
<!-- comunidades relacionadas -->
</div>



</div>
<?php };?>
<?php

//verifica se a pgina  principal

if ($_GET['topic']=='edit' && $_GET['about']=='1'  && $aux_id_profile!='' && $row_my_com88!=''){

//verifica o dono 
$queryADM = mysql_query("SELECT community_users.UserIdPro,users.UserId,users.NikName,users.UserName FROM community_users,users  where (community_users.IdCommunity='$mensagemcod->IdCommunity' and users.UserId=community_users.UserIdPro) limit 1")or die(mysql_error());;
$row_ADM= mysql_fetch_object($queryADM);

?>
<div id="new_99edujebnnne_center_container" ><div class="center_painel_communities_default" id="center_container__9929">
<!-- about  -->
<div class="sombra_padrao_bottom lloepowpoei83838K center_painel_communities_default pn-about_box_com888">
<!-- nome-->
<div class="X-H6727"><span class="text_menu-0o"><?php echo EDITARCOMUNIDADE83448384343;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/CommunityList/?cat=<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<!-- nome-->
<div class="box-about-8392rjeeqq">
<!-- nome -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo NOMECOMUNIDADE3883JEHDEHE;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php echo ($mensagemcod->CommunityName);?></span></div><div class="clear_div_0"></div> </div>
<!-- nome -->
<!-- idioma -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo IDIOMA828IWJJDJHSD;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php  echo  lang_trans_t2($mensagemcod->lang);?></span></div><div class="clear_div_0"></div> </div>
<!-- idioma -->
<!-- categoria -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo CATEGORIAIIEUU3883D;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"> <select id="okoe308484eee4">

<option selected><?php echo $mensagemcod783748347348387->text;?></option>
    <?php $querycod83438492 = mysql_query("SELECT text FROM category_communities ")or die(mysql_error());;
while ($mensagemcod7837483473483872 = mysql_fetch_object($querycod83438492)) {?>
<option><?php echo $mensagemcod7837483473483872->text ;?> </option>
        <?php };?>
</select></span></div><div class="clear_div_0"></div> </div>
<!-- categoria -->
<!-- dono -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo DONODIIEIU2382JJDND;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><a href="/
<?php echo $row_ADM->NikName;?>" target='_blank'><?php  echo  ($row_ADM->UserName);?></a></span></div><div class="clear_div_0"></div> </div>
<!-- dono -->
<!-- privacidade -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo TIPOCOMJERUU3838JE;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2 "><p><input class="text_painel_default_1 list_option" type="radio" name="type" value="2"  <?php if ($mensagemcod->CommunityPrivacy=='2')  {?>checked="checked"<?php };?>"> <?php echo MESEGQUALQUERPESSOALPODEPARTICIPAR;?></p>
<p><input  class="text_painel_default_1 list_option"type="radio" name="type" value="1" <?php if ($mensagemcod->CommunityPrivacy!='2')  {?>checked="checked"<?php };?>"> <?php echo PRIVADAPRECISADECONVITEDODONO?></p></span></div><div class="clear_div_0"></div> </div>
<!-- privacidade -->
<!-- local -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo LOCALJDJHD7373HHGTT;?>:</span></div><div  class="col_right_profile_main">
<input class="input-text-com-3848jre-re" type="text"  id="local_comm-373hndd" name="local_comm-373hndd"placeholder="<?php echo LOCALJDJHD7373HHGTT;?>" value="<?php if ($mensagemcod->loc !='') { echo  ocultaTexto($mensagemcod->loc,25);}else{ echo ocultaTexto($mensagem->UserPais,25) ;};?>"/></div><div class="clear_div_0"></div> </div>
<!-- local -->
<!-- topicos -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo TOPICCOMM9393;?> :</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><p><input class="text_painel_default_1 list_option_n2" type="radio" name="topic" value="1"  <?php if ($mensagemcod->topic_open=='1')  {?>checked="checked"<?php };?>"> <?php echo TOPICOQUEMPODECRIAR35533;?></p>
<p><input class="text_painel_default_1 list_option_n2" type="radio" name="topic" value="0" <?php if ($mensagemcod->topic_open=='0')  {?>checked="checked"<?php };?>"> <?php echo TOPICOQUEMPODECRIAR3553333?></p></span></div><div class="clear_div_0"></div> </div>
<!-- topicos -->
<!-- descrio -->
<div class="row_blue_002 cobox_padding_main_comm" >
<div class="col_left_profile_main">
<span class="text_painel_default_1" ><?php echo DESCRICAODSJJD333;?>:</span>
</div></div>
<!-- html -->
<!-- box-edit-about -->
<?php
$auc_codcommet =$mensagemcod->IdCommunity;
$idioma_text =IDIOMACOMUII8388JJJJD;
$ENVIAR_99=SALVARPERFIL;
$text_textareabox=TEXTOBOXTEXAREAII992MENSAGEM8892;
$assunto_do_topico=TITULODOTOPICO236367762;
echo <<<html
<div class="o-okj-3883j-bbgga-s">
<div class="M-ksjjsh773_owp">
<link rel="stylesheet" type="text/css" href="/mervick-emojionearea-d1a852f/dist/emojionearea.css" media="screen">
<link rel="stylesheet" href="/Trumbowyg-master/dist/ui/trumbowyg.css">
<link rel="stylesheet" href="/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.css">
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<input type="hidden" name="uiw_927_521gsXX1" id="uiw_927_521gsXX1" value=""></input>
<input type="hidden" name="uiw_927_521gsXX2"  id="uiw_927_521gsXX2"value=""></input>
<input type="hidden" name="uiw_927_521gsXX3" id="uiw_927_521gsXX3" value=""></input>
<div  id="textarea_999" class="jqte-test" >{$mensagemcod->AboutComm}{$mensagemcod->detail}</div>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/Trumbowyg-master/dist/trumbowygN.js"></script>
<script src="/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.js" ></script>
<script src="/Trumbowyg-master/plugins/upload/trumbowyg.upload.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Trumbowyg-master/dist/langs/$idioma_text.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/mervick-emojionearea-d1a852f/dist/emojionearea.js"></script>
<div id="subisaymsg_0"  class="subisaymsg">
<button type="submit"  onclick="CommTopicNvn('','$auc_codcommet','2883776');" class="botao_azul _bot_02838-dofkd" title="Enviar..." >$ENVIAR_99</button>
<!-- novo painel de emojis -->
<div id="standalone" class="box_standalone" data-emoji-placeholder=":smiley:"></div><!-- novo painel de emojis -->
</div>
<script type="text/javascript">
$(document).ready(function() {   $("#standalone").emojioneArea({   standalone: true,   autocomplete: false,      events: {  emojibtn_click: function (button, event) { var img32843438743 = button.children().data("src");   $(".trumbowyg-editor").html($(".trumbowyg-editor").html()+"<img src='"+img32843438743+"' />");       }    }     });   }); 
</script><script>
$('.jqte-test').trumbowyg({    btnsAdd: ['foreColor'],         lang: '$idioma_text',        image: {        dropdown: ['insertImage', 'upload'],       ico: 'insertImage'      }         });
 var ujjeu7775rrruer84r484ru = "";
			var ujjeu7775rrruer84r484ru2 = "";
function CommTopicNvn(aux_333,qaueoo,aux_1){
$('.botao_azul').css({'opacity':0.1,'-moz-opacity':0.1,'-khtml-opacity':0.1});
$("#form_data").val($(".trumbowyg-editor").html());	var asj8s8sidsish=aux_333;var txte_enqujjsdj=$("#form_data").val();var txte_enqujjsdj444 = txte_enqujjsdj;ujjeu7775rrruer84r484ru = aux_333;ujjeu7775rrruer84r484ru2 = qaueoo;var auuq98q8=aux_333;
var val_9984884= $('.list_option:checked').val();var val_99848842=$('.list_option_n2:checked').val();
$.ajax({url:"/edit_d_comm_0.php",data:{"local":$("#local_comm-373hndd").val(),"cod":qaueoo,"type":val_9984884,"detail":txte_enqujjsdj444,"cat":$("#okoe308484eee4").val(),"topic":val_99848842},type:"POST",timeout:3000,contentType:"application/x-www-form-urlencoded; charset=utf-8",success:function(data){
window.location="/{$url_teste_default}/{$aux_id_profile}";$('.botao_azul').css({'opacity':9.0,'-moz-opacity':9.0,'-khtml-opacity':9.0});}});
};</script></div></div>

html;

?>
<!-- box-edit-about  -->



</div>
      
                     
                     
                                    
                     
             
               
                 
</div>
<!-- about -->


</div>

<div id="right_main_container_profile">
<!-- membros -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/cropImg.php?arquivo=profile_img/<?php echo $row_name_7782->UserFotoThumb ;?>&largura=60&altura=60"/><label><?php echo ocultaTexto($row_name_7782->UserName,20); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $aux_id_profile;?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
<!-- membros -->

<!-- comunidades relacionadas -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo COMUNIDADESRELACIONADA27772." &nbsp";?></span>
<div class="box-93okd-kmdn982-">
<?php 
$queryCommunities_relation= mysql_query(" SELECT  community_users.IdCommunity,community_users.CommunityImg,community_users.CommunityName,community_users.UserIdPro,community_users.IdOrder,communitie_relation.IdComm1,communitie_relation.IdComm2 FROM communitie_relation,community_users   where  (communitie_relation.IdComm1='$mensagemcod->IdOrder' and communitie_relation.IdComm2=community_users.IdOrder)order by rand() limit 6")or die(mysql_error());;
  $row_communities_relation = mysql_num_rows($queryCommunities_relation);

if ($row_communities_relation!=''){
while ($row_communities_rela = mysql_fetch_object($queryCommunities_relation)){
?>
<div  class="boradsemquina3 box-993ijjerje"><div class="box-pn-3993jdjje-ekke"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($row_communities_rela->CommunityImg !=''){ echo $row_communities_rela->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=60&altura=60"></div><label><a href="/<?php echo $url_teste_default;?>/<?php echo $row_communities_rela->IdComm2;?>"><?php echo ocultaTexto($row_communities_rela->CommunityName,8) ;?><br>(<?php echo number_format(mem_cach_count($row_communities_rela->IdCommunity),0,',','.');?>)</a></label></div>
<?php };};?>

<div style="clear: both;"></div></div>        
</div></div></div>
<!-- comunidades relacionadas -->
</div>


</div>



</div>
<?php };?>



</div>
<div id="fund_global_edit347473">
<div class="ks-cb633he-fdkmfmf-d"></div>
<div id="_lo86326VGF_11l" >
<div class="ju7ur-prkmfmmmbbd"><div class="estilodeboraesombra2 box-0320ej-ejjwiuu3-s">
<div  class="menu_comp user_foto_borda_superior box-woow-wuyy2772-eoioekkde" > <label ><label class="urjjdbbfjjd"><?php echo ALTERARFOTOGERAL;?></label></label></div><br /> 
<div class="Ol-kj-383-mn_baggag-0"><img src="/img_news_2016/ring-alt.gif"/></div>      
</div></div><!-- #center --></div></div> 
<iframe src="" name="sendpost" style="width:0px;height:0px;display:none;"></iframe>
<div id="sound_ooslks" style="display:none;"></div>
<div id="sjjskkdosuhjd"></div>

 <!-- end new designer -->
<?php include_once("analyticstracking.php") ?> 
</body></html>
  <?php };?>
<?php
require("../check_func_db.php");
header("Cache-Control: private, max-age=31536000, pre-check=31536000");
header("Last-Modified: ".gmdate("D, d M Y H:i:s", time() - 3600*24*365)." GMT");
header('Expires: '.gmdate("D, d M Y H:i:s", time() + 3600*1).' GMT');


include_once ("../sanitizeSql.php");
 

$auuwdw98r8usduuue777="";
                                          
$aux_cadastro_google=$_REQUEST['cad_google_0298736764982'] ;
 


 if (login_chekout()==true){
  
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

include("../date.php");
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
             
 
 include_once ("../transl8uu3j.php");
// carrega algumas variáveis  
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

        
 function anti_injection8uu($sql)
{

$sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$sql);
$sql = trim($sql);
$sql = strip_tags($sql);
$sql = addslashes($sql);
return $sql;
}
$url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
$aux_id_custon_profi=explode( '/' , $url );
$aux_id_profile=anti_injection8uu($aux_id_custon_profi[2]);
$aux_id_profile1=($aux_id_custon_profi[0]);
 if ($aux_id_profile!=''){
mysql_query(" INSERT INTO games_play (UserId,IdGame) VALUES ('".mysql_real_escape_string($UserId_Cokie)."','".mysql_real_escape_string($aux_id_profile)."')");
//atualiza jogos mais jogados
mysql_query("UPDATE info_games SET timestamp='".time()."' where cod='".mysql_real_escape_string($aux_id_profile)."' limit 1");

 };
 if ($rs284y824!=''){
$mensagemI = mysql_fetch_object($query17);
$auuwdw98r8usduuue777=$mensagemI->UserId; 
session_register('nik_name');
$_SESSION['nik_name']="";
 }else{
 $auuwdw98r8usduuue777='';
 
 }
 $auuwdw98r8usduuue777;
 header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
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
 
  if ($browser == 'Firefox' and $browser_version < '17.0' or $browser == 'Firefox' and $browser_version < '3.0'){
  echo "<meta http-equiv=\"refresh\" content=\"0; URL=browser-inf.php\">";
  }
  if ($browser == 'IE'){
  echo "<meta http-equiv=\"refresh\" content=\"0; URL=browser-inf.php\">";
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
$vIP= $_SERVER['HTTP_X_FORWARDED_FOR'];
// mysql_query(" INSERT INTO analytics (acesso,UserId,ano,mes,dia,UserName,Data,Browser,Mode,IP) VALUES ('web','$UserId_Cokie','$ano_i','$date_diario','$dia_i','$UserName_cokie','$datacompleta','$Bro_diar','web','$vIP')");
//atualiza ultima tividade

//atualiza meu status no chat
mysql_query("update users set users.lastactivity = '".time()."' where users.ccuserid = '".$useridc."'");
mysql_query("update cometchat_status set isdevice='0' where userid = '".$useridc."' limit 1");	



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
    mysql_query(" INSERT INTO analytics2 (acess,ccuserid,ano,mes,dia,Data,Browser,Mode,IP) VALUES ('$acess','".$useridc."','$ano_i','$date_diario','$dia_i','".time()."','$Bro_diar','$mode','$vIP')");
      };
    //fim analytics
    //pageviews
    $cod_communitie="$aux_id_profile";
      
    mysql_query("INSERT INTO page_views (dia,mes,tot,id) VALUES ('".date('d')."','".date('m')."','1','".date('d')."".date('m')."') ON DUPLICATE KEY UPDATE tot = tot+1");
   //  mysql_query("IF EXISTS (SELECT idorder FROM page_views WHERE dia='".date('d')."' and mes='".date('m')."' limit 1) UPDATE page_views SET tot=tot+1  WHERE dia='".date('d')."' and mes='".date('m')."' limit 1 ELSE    INSERT INTO page_views (dia,mes,tot) VALUES ('".date('d')."','".date('m')."','1')" );

    

//api plinga

    function list_game_029($cod){
    
    $ch = curl_init();
    //https://www.plinga.com/game/optout/'.$cod.'/5067/?referrer=https://orkut.me/games/play.php

curl_setopt($ch, CURLOPT_URL, 'https://play.plinga.de/user/sso/3530/'.$cod.'/?url=https://orkut.me/games/play.php&locale="pt-br"');

curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body 


// Params for sso - if you do not send these parameters user will see normal landing page.

$timestamp = time();

$apikey = 'kVHc3cWQYRtx';

$userMailAdresse = USEREMAIL;

$sig = md5 ( $apikey. $userMailAdresse.$timestamp);

$data = Array();


$data["timestamp"] = $timestamp;

$data["mail"] = $userMailAdresse;

$data["username"] = USERNAME_NAME."_orkuti";
$data["sig"] = $sig;
$data["secretkey"] = 'kVHc3cWQYRtx';

$data["target_element"]="id_oiiejj38877uje";

    $data['picture'] = "https://orkut.me/profile_thumbs/".USERFOTOTHUMB."";

if (USERGEN=='2'){
$data['gender'] = '1';
}else{
$data['gender'] = '2';

}
//lista de amigos

    	function getFriendsList($userid,$time) {
	
		$id_oodj=$userid;

	
		$sql = ("select users.UserEmail,users.ccuserid userid, users.UserName username, users.NikName link, users.UserFotoThumb avatar, cometchat_status.lastactivity lastactivity,  cometchat_status.status, cometchat_status.message, cometchat_status.isdevice,cometchat_status.lastseen lastseen, cometchat_status.lastseensetting lastseensetting from friends_list join users on friends_list.Idfriend = users.ccuserid left join   cometchat_status on users.ccuserid = cometchat_status.userid where (friends_list.Idme= '".mysqli_real_escape_string($id_oodj)."' and friends_list.block<>'2')and (((".mysqli_real_escape_string($time)."-".'172800'.") < cometchat_status.lastactivity) OR cometchat_status.isdevice = 1 ) order by cometchat_status.lastactivity DESC limit 10");
 
	
		return $sql;	
	}
	
	$sql = getFriendsList(CCUSERIDI,$timestamp);
	$query = mysql_query($sql);
	while ($chat = mysql_fetch_assoc($query)) {
 

 $xml .= "\n";
  $xml .= $chat['UserEmail'].",\n"; 
      $xml .= "\n";


	};
	//echo $xml;
	//lista de amigos

//$data["friends"] = 	$xml;	
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    // Pega o código de resposta HTTP
$resposta = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$result = curl_exec($ch);

curl_close($ch);
$result = json_decode($result, true);




  if ($resposta == '404') {
   $code = <<<htlm
   
   <div style="position: relative; width: 1000px; height: 500px; background-color: #000000">
<style>
.sprite_0023209 {
	background: url('/img_news_2016/sprite.png') no-repeat -576px -308px;
	width: 33px;
	height: 35px;position: absolute; top: 256px; 
left: 454px;
}
</style>
    <span style="font-family: arial, Helvetica, sans-serif; font-size: 50px; font-weight: bold; font-style: normal; font-variant: normal; color: #CCCCCC; position: absolute; top: 171px; left: 147px;">Servidores em manutenção!</span><div class="sprite_0023209"  ></div></div>

htlm;
   
  } else {
  $code = $result['code'];
  }
return  $code;


    };

//api plinga

//funções para decodificar url do jogo
function sel_game_data($cod){
$query_sel_game_data = mysql_query("select cod,link_url,cod_url,name,idorder from info_games where cod='".mysql_real_escape_string($cod)."' limit 1")or die(mysql_error());
$row_sel_game_data= mysql_fetch_object($query_sel_game_data);

return $row_sel_game_data;
};
mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and AUX='66' and CommandNoti='".mysql_real_escape_string($aux_id_profile)."') ")or die(mysql_error());;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <?php flush ();?>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content=""/>
<meta name="keywords" content="orkut,orkut com login,recado,meu orkut,site orkut,orkut com entrar,orkut com br login,orkut meu orkut,net celular,orkut buyukkokten,celular net,orkut chat,o orkut,scrap orkut,orkut büyükkökten,recados imagens,e mail orkut,imagens orkut,entrar na internet,orkut imagens,recados orkut,rede social orkut,www google com br orkut,orkut sign,recados do orkut,orkut redes sociais,orkut download,fazer orkut,pesquisar orkut,quero entrar no meu orkut,orkut entrar conta,mensagens orkut,abrir orkut,orkut o,quero entrar no orkut,orkut site,www orkut com login page,orkut entrar já,orkut entrar com outra conta,orkut entrar agora,orkut entrar senha,entrar no meu orkut,orkut google,orkut login 0,fazer orkut agora,baixar orkut,orkut com br brasil,www orkut com,google orkut,orkut entrar pagina inicial,orkut login e senha entrar agora,orkut com br entrar,orkut video,entrar no orkut agora,orkut images,orkut scraps,fazer um orkut,orkut login entrar agora orkut,www orkut com br entrar,www orkut com login orkut,orkut logo,orkut com,orkut com login entrar,www orkut,ww orkut com br,pessoas do orkut,orkut mail,www orkut com br,orkut login e senha entrar,orkut login entrar agora no orkut,orkut orkut,hotmail orkut entrar,orkut brasil,orkut login pagina inicial,pagina inicial do orkut,orkut pagina inicial,entrar orkut,orkut login entrar senha,orkut entrar login e senha,horkut,orkut comunidades,login no orkut,orkut com br,orkut login entrar agora,no orkut,fazer login orkut,como entrar no orkut,entrar no orkut login,orcute,orkut login 2011,orkut inicio,www orkut com entrar,orkut entrar login,comunidades do orkut,0rkut entrar,imagens para orkut,orkut com longin,okute,long orkut,orkut login novo,orcut,sobre o orkut,fazer orkut novo,comunidades orkut,orqut,okurt,orkut login entrar no orkut,www orkut com login,efetuar login orkut,orkut home,novo orkut,orkut br,login do orkut,entrar orkut login,orkut entrar na conta,orkut app,orkut com br login entrar,orckut,orkut fazer login,www orkut login,intranet,orkut fazer,orkut orkut orkut,orkut recados,fazer login no orkut,orkut novo login,orgut,não consigo acessar a internet,como entrar no modem da net,0rkut login,url orkut,orkut profile,okkut,www orkut entrar,download orkut,okut,orkut login entrar,oukt,orkt,meu orkut login,orkut login entrar conta,orukt,novo orkut entrar,entrar no meu orkut agora,oorkut,orkut mensagens,orkuit,orkur,orkyt,orkut login entrar hotmail,orkut online,entrar no orkut pelo hotmail,orkut tudo,sobre orkut,pagina orkut,como entrar no meu orkut,orkut login em portugues,como faço para entrar no orkut,orkut entrar direto,orlut,orkutt,orkuy,orktu,orkuty,orkut main,orkut logi,fazer orkut login,o rkut,orkut games,orkutr,oukut,oekut,baixar orkut para android,orkuyt,orkut entrar agora login,ortkut,horkt,orekut,baixar aplicativo do orkut,google orkut login,orkut entrar no orkut,ver orkut,orkut baixar,googleorkut,login orkut entrar,como faço para entrar no meu orkut,mensagens do orkut,criar orkut login,site orkut login,orkiut,entra na orkut,orkut login mobile,existe orkut,orkti,login orkut hotmail,abrir conta no orkut,quero entrar no meu orkut agora,login orkut novo,recados de orkut,orkut communities,ww orkut login,orkut t,orkuk,ww orkut,ww orkut com br login,fazer login do orkut,okrt,orjkut,entrar orkut novo,tudo para orkut,oerkut,entrar na net,eu quero entrar no meu orkut,orkul,novo orkut login,horcut,orkut hotmail login,entrar no orkut novo,entrar no orkut login e senha,orkug,oirkut,pagina inicial orkut,entra na pagina do orkut,orkui,entrar em orkut,ver meu orkut,internet entrar,nome do criador do orkut,orkut orkut login,entrar no orkut por outro site,fazer long no orkut,about orkut,orkut 2004,entrar no orkut direto,imagens de orkut,orcurt,abrir meu orkut,orkut como entrar,orkut com orkut com,recados para o orkut,como entrar no orkut velho,orkut abrir conta,entrar orkut conta hotmail,orkut entrar login agora,orktut,orkut brazil,orkut gratis,0rkut inicio,orkut login hotmail,orku login,acesso ao orkut,orkuti app,ookut,ortku,orkut com br entrar agora,aplicativo orkut,orkut hotmail entrar,www orkut com novo,login orkut 2010,login orkut 2012,inicio orkut,iorcute,orkut senha,orkut no google,logar no orkut,abrir orkut agora,fazer login no orkut velho,eu quero entrar no orkut,quero entrar no orkut agora,orkut face,entra orkut agora,orkut velho entrar,orkut acessar,orkut 3,entra orkut hotmail,entrar na conta do orkut,programa para entrar na internet,logo orkut,orkut l,orkut login entrar na conta,yorkute,quero ver meu orkut,orkut pesquisar,ocuti,fazer login orkut velho,entrar net,entrar no orkut velho,m orkut com login,horcute,orkut fazer login entrar,orkut velho login,google orkut login entrar,orquti,entrar no orkut pelo google,outlook entrar net,site orkut entrar,www google orkut com br,como fazer login no orkut,como entrar na net,orkut blog,como fazer para entrar no orkut,fotos para orkut,meu orkut entrar agora,logar orkut,criar um orkut,orkut br home,site para entrar no orkut,para orkut,orkut e,como faço para acessar o orkut,como faço para entrar no orkut velho,site do orkut login,orkut login google,orkut de,orkut login entrar no orkut agora,orkut google com,como eu faço para entrar no orkut,ww orkut com br entrar,como entrar orkut,fazer login do orkut velho,entra no orkut login agora,yorcute,abrir o orkut,orkut do google,acessar conta orkut,logim orkut com br,face login orkut,como entrar na web,como entrar no orkut pelo hotmail,orkut 2010,entra do orkut,orkut login entrar fazer login,www orkut br entrar,comunidade no orkut,orkut fazer login agora,google login orkut,acessando o orkut,orkut com entrar agora,como logar no orkut,orkuti entra,abrir orkut login,orkut 1,okurti,orkut como acessar,orkut no brasil,orkut acesso,entrar no login,long orkut velho,orkut 2,entrar orkut login hotmail,como entrar no novo orkut,entrar no novo orkut,comunidades de orkut,orkut a,www orkut com br login entrar,hotmail email entrar orkut,orkut com comunidades,yorkurt,desenhos orkut,entrar modem net,iocurt,criar orkut,como abrir o orkut,orkut hotmail fazer login,significado de orkut,orkut 2009,orkut brasileiro login,login do orkut entrar,conta orkut entrar," />
<link rel="image_src" href="" />
<link rel="shortcut icon" href="/img/icon_001.png" />
<meta name="language" content="<?php echo IDIOMAUSER;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="index,follow"/>
<link type="text/css" rel="stylesheet" href="/css/Cx_sjjXXCwhhw55426677912367n123c3333n56.css" />
<link type="text/css" rel="stylesheet" href="/css/css_XSz_UHG773h_1803233687NNNpc2.css" />
<link rel="stylesheet" href="../dist/css/lightbox.css">
<script type="text/javascript"  src="../dist/js/lightbox-plus-jquery.min.js"></script>
<link type="text/css" href="/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="/css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
<link type="text/css" href="/css/style_game_002.css" rel="Stylesheet" />
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="/static/jquery1.5.2jquery.min.js"></script>
<script src="/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/static/jquery_comm_mini_2016_012.js"></script>
<script type="text/javascript" src="/js/jquery_clock.js"></script>
<script type="text/javascript" src="js/jquery_tr_03287h.js"></script>
<script type="text/javascript" src="/static/jquery.form.js"></script>
<script type="text/javascript" src="/static/autoresize.jquery.js"></script>
<script type="text/javascript" src="/js/notifyN.js"></script>
<link rel="stylesheet" type="text/css" href="/css/spectrum.css">
<script type="text/javascript" src="/js/spectrum.js"></script>
<script type='text/javascript' src='/docs/toc.js'></script>
<script type='text/javascript' src='/docs/docs.js'></script>
<script type="text/javascript" src="/static/jquery_game_002.js"></script>
<script type="text/javascript" src="/js/jquery.slimscroll.min.js"></script>
<title> Orkut - <?php echo sel_game_data($aux_id_profile)->name;?></title>
<script type="text/javascript">
$(function () {	$(".gePsdhhd").geocomplete({ details: "form" });});$(function() {   $("#datepicker").datepicker()});
var x_is_IJH726_K = "<?php echo $_GET['_sub']?>";
var ejfeueuuee94usgdsd="<?php echo $auuwdw98r8usduuue777?>";
var name_0e0ejnfvruuru4885j="<?php echo $UserName_cokie ?>";
var foto_kdfwrn34783985t58th35hhrfbn="<?php echo $UserFotoThumb_Cokie?>"
var id_odosngsfgnsfi959tjtern="<?php echo $UserId_Cokie?>";
var id_odosngsfgnsfi959tjchat="<?php echo $useridc?>";
var id_odosngsfgnsfi959tjgamet="<?php echo $aux_id_profile?>";
var id_odosngsfgnsfi959tjgametcod="<?php echo sel_game_data($aux_id_profile)->idorder;?>";
var data_wt63hhehjhg5353773="<?php echo ("$portuguese_day,$dia de $portuguese_month");?>";
var aux_atua_variavel_controle_div="";var aux_conect=true;var aux_conect2=true;var aux_84r4urur88=false;var aux_menu_8uue8="";var aux_menu_8uue8C="";var aux_menu_8uue8rand="";var aux_show994kknwyye83pw=false;var aux_showdau84djakpekdh8="";var cod_aux_ministerial='';var paginaFotos=1;var obj_text_coment="";var sajddsd44 ='';$(document).ready(function(){	$('.animated').autoResize();	$(".scroll-pane").jScrollPane();  $(".scroll-pane .jspDrag").hide();    $(".scroll-pane").mouseenter(function () {    $(this).find(".jspDrag").stop(true, true).fadeIn("slow");   });  $(".scroll-pane").mouseleave(function () {    $(this).find(".jspDrag").stop(true, true).fadeOut("slow");   });});if (ejfeueuuee94usgdsd!=''){window.setTimeout('view_prof(ejfeueuuee94usgdsd);',5000);};	</script>
</head>
<body bgcolor="#dae5ee" class="iocover"  onclick=" hide_search_box();on_men003();;" onload="scan_g_388i_a();load_chat_init('<?php echo sel_game_data($aux_id_profile)->idorder;?>');"  >
<div id="popup2Geral"></div>
<div id="popupNav"><div id="centerNav"></div></div>
<div id="popupNavPubli"><div id="centerNavPubli"></div></div>
<div id="fundo" style=""></div><input type="hidden"id="Id_Aux"name="Id_Aux"value="<?php echo $UserId_Cokie?>"></input>
<input type="hidden"id="user_aux_0001"name="user_aux_0001"value="<?php echo $UserFotoThumb_Cokie ?>"></input>
<input type="hidden"id="name_game_929"name="name_game_929"value="<?php echo sel_game_data($aux_id_profile)->name;?>"></input>
<!-- new designer --> 
<!-- new barr -->
<div id="new_barr"  class="tems_3728ehe" >
<div class="_oiw8383 _oiw37uejw"><div class="_383uue"><a href="http://<?php echo str_replace("app.", "", $_SERVER["HTTP_HOST"]);?>" title=""><img class="L_3ehd" src="/img_news_2016/IMHud944783.png" /></a></div>
<div id="barr_contai_center" class="_oiw8383500">
<span class="Hn0939_PPOR445"   ><a class="em_or384urjererA" href="http://<?php echo str_replace("app.", "", $_SERVER["HTTP_HOST"]);;?>"><?php echo INICIO3222;?></a> | <a class="em_or384urjererA" href="/"><?php echo IDIOMAPGHH;?></a></span>
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
<a href="https://orkut.me/<?php echo NIKNAMME; ?>"><li class="_peiie737KJGFE6"><div class="radius_150px _pwwojJGFR536y_ieu"><img class="radius_150px _pI_jh765_2wr"  src="/cropImg.php?arquivo=profile_img/<?php echo $UserFotoPerfil_Cokie;?>&largura=100&altura=100"  /></div>
<div class="_32eBVA12_93"><span class="L_837VCZZS_WWXX"><?php echo ocultaTexto($UserName,25);?></span></div></li></a>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="jjuw7e77yejhe();"><?php echo NOTIFICACOES;?> <img src="/img_news_2016/ic_add_alert_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_expl()"><?php echo POLITICASDEPRIVACIDADE;?><img src="/img_news_2016/ic_date_range_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_sobre();"><?php echo SOBREOORKUTI;?><img src="/img_news_2016/ic_new_releases_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="up_passjdi8993();"><?php echo CONFIGURACOESGERAL;?><img src="/img_news_2016/ic_settings_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_terms();"><?php echo TERMOSDEUSO;?><img src="/img_news_2016/ic_assignment_late_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="up_passjdi8993HJJha()"><?php echo SUGESTAOOUCRITICA;?><img src="/img_news_2016/ic_live_help_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>   
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_team_2();"><?php echo ORKUTITEAM;?><img src="/img_news_2016/ic_assignment_ind_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>   
<a href="https://orkut.me/logout.php"><li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" ><?php echo SAIRGERAL;?><img src="/img_news_2016/ic_vertical_align_bottom_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li></a></ul></div>
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
   
<!-- main_container -->
<div id="global_conatiner" class="cl_divs_2723y" style=" background: ;">
<div class="container_center_game" >

            <div 
            
            style="position: relative;margin:0px auto; bothborder: 1px solid #CCCCCC;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px; background-color: #f8f8f8;width:auto; height:auto;">
            <div id="id_oiiejj38877uje"
            
            style="background: black;
    border-radius: 8px 8px 0 0;
    display: block;
    font-size: 0;
   
    overflow: hidden;
    position: relative;
    text-align: center;
   position: relative;margin:0px auto; display:;background: ;width:auto; height:auto;">
  <?php           
           if ($aux_id_profile!=''){

$game_sele=($aux_id_profile);;
$row_fecht_029=  sel_game_data($aux_id_profile);

if ($row_fecht_029->cod_url!='0'){

  print list_game_029($row_fecht_029->cod_url);
  
};
if ($row_fecht_029->cod_url=='0' && $row_fecht_029->link_url!=''){

 echo ($row_fecht_029->link_url);
  
};

   ?>
            
            
            </div>
            <div style="margin-top:0px;clear:both;border-top-style: solid; border-top-width: 1px;padding-top:0px; border-top-color: #efefef; ;position: relative; width:100%; min-height: 200px;">
   <!-- Shared -->
      <style>
      .css_btn_class_039 {
	padding: 10px 10px 10px 30px;background-color: #F4F4F4;border: 1px solid #F2F2F2;padding: 10px 10px 10px 30px; position: absolute;right:10px;top:10px; width:auto; height:auto; font-family: 'helvetica neue', helvetica, arial, 'lucida grande', sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080;
}.css_btn_class_039:hover {
	
border: 1px solid #F0F0F0;background-color: #F0F0F0;	padding: 10px 10px 10px 30px;position: absolute;right:10px;top:10px;width:auto; height:auto;  font-family: 'helvetica neue', helvetica, arial, 'lucida grande', sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080;
}
      </style>                            <span  onclick="view_list_invite_gammer('<?php echo $game_sele; ?>');" class="css_btn_class_039" >
                           <img class="" src="/img_news_2016/shared_983urj.png" 
                            
            style="position: absolute; width: 15px; height: 15px; top: 12px; left: 8px;"/><?php echo FEED002919392TEXT0012;?>
                                 
                        </span>
                        <!-- Shared -->         
            <?php 
 //lista os jogos
//ATUALIZA IMAGENS DOS GAMES 
$COD_GAME=$imganide9239;
$queryGAMES_IMG=mysql_query("SELECT img1,img2,img3,img4,info,name,cod,cat,type FROM info_games where cod='".mysql_real_escape_string($game_sele)."'  limit 1")or die(mysql_error());
$row_GAMESIMG=mysql_fetch_object($queryGAMES_IMG);
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$IMG_game = $row_GAMESIMG->img1;
$info = $row_GAMESIMG->info;
$name_game = $row_GAMESIMG->name;
$cod_game = $row_GAMESIMG->cod;
$categoria_game = $row_GAMESIMG->cat;
$type_game = $row_GAMESIMG->type;
//ATUALIZA IMAGENS DOS GAMES  
//CONTA JOGADORES
$querycOUNT_GAMERS = mysql_query("SELECT IdGame FROM games_play  where (IdGame='".$cod_game."')  ")or die(mysql_error());
$row_count_gamers = mysql_num_rows($querycOUNT_GAMERS);

 ?>
   <!-- jogos--> 
   <div   style=" position: relative;display:;position: relative; margin-top:10px;
    width:450px; margin-left:15px; background-color:; margin-bottom:10px;"><div style="float: left;position: relative; width: 200px;">
     <?php if ($type_game!='0'){?><img src="/games/ads_intro_label_new_en.png" style="position: absolute; top: -2px; right: -2px; z-index: 100" /> <?php };?>
       <a href="/games/play/<?php echo $cod_game;?>&time=<?php echo time();?>"><div style="position: relative; width: 200px;position: relative;
    text-align: center; height: 100px;
    border-radius: 3px;
    vertical-align: top;">
            <img src="/games/<?php echo $IMG_game?>" style="width: 200px;
    height: 100px;
    border-radius: 3px;
    vertical-align: top; position: relative;display:;" class="user_foto_borda_superior" />
            </div></a></div><div style="float: left;position: relative; width: 200px;margin-left:10px;">
            <div style="position: relative;left:0px; bottom: 0px; width: 200px; min-height: 50px;">
              <div style="padding-left:10px;margin:0px;
    padding-top: 5px;
       
    ">  
                 <a href="/games/play/<?php echo $cod_game;?>&time=<?php echo time();?>"><h1 class="lloepowpoei83838" 
                      style="font-family: arial, Helvetica, sans-serif; font-weight: bold; font-style: normal; font-variant: normal; text-transform: none; color: #636669;; position: relative;"><?php echo $name_game;?> 
              </h1></a></div>
                
                <div style="overflow: hidden;padding-left:10px;margin:0px;
    padding-top: 0px;
    color: #808080;  ;">

<?php 
//count starts

function count_start_93993($cods){
$query_counter_starts = mysql_query("select game_starcol_count ,count(game_starcol_count) AS count_093 from game_star  where game_starcol_id_game='".mysql_real_escape_string($cods)."'group by game_starcol_count order by count_093 DESC")or die(mysql_error());
$rcon_count_starts22_fecht= mysql_fetch_object($query_counter_starts);

return $rcon_count_starts22_fecht->game_starcol_count;
};
function count_start_93993_single($cods,$star){
$query_counter_starts = mysql_query("select game_starcol_count  from game_star  where game_starcol_id_game='".mysql_real_escape_string($cods)."' and game_starcol_count='".mysql_real_escape_string($star)."' order by game_starcol_order DESC")or die(mysql_error());
$rcon_count_starts22_fecht= mysql_num_rows($query_counter_starts);

return $rcon_count_starts22_fecht;
};

//counter %%
//  pela maior quantidade de notas repetidas *100/total de notas do jogo => porcentagem desta nota
function count_start_93993_percentage($cods,$star ){
//conta quantos votos tem este jogo
$query_counter_starts_1 = mysql_query("select game_starcol_count  from game_star  where game_starcol_id_game='".mysql_real_escape_string($cods)."'  order by game_starcol_order DESC")or die(mysql_error());
$rcon_count_starts22_fecht_1= mysql_num_rows($query_counter_starts_1);

$query_counter_starts = mysql_query("select game_starcol_count ,count(game_starcol_count) AS count_093 from game_star  where game_starcol_id_game='".mysql_real_escape_string($cods)."' and  game_starcol_count='".mysql_real_escape_string($star)."' group by game_starcol_count order by count_093 DESC")or die(mysql_error());
$rcon_count_starts22_fecht= mysql_fetch_object($query_counter_starts);

$result = round(($rcon_count_starts22_fecht->count_093 * 100)/$rcon_count_starts22_fecht_1,0);
return $result."%";
};

function check_voto_user ($cod){

$query_counter_starts_1_user = mysql_query("select game_starcol_count  from game_star  where game_starcol_id_game='".mysql_real_escape_string($cod)."' and idgame_star_ccuserid='".CCUSERIDI."' limit 1 ")or die(mysql_error());
$rcon_count_starts22_fecht_1_usersw= mysql_num_rows($query_counter_starts_1_user);

return $rcon_count_starts22_fecht_1_usersw;
}
?><div class="meter0">
<div class="meter mtr-2" onmouseover="$(this).value"  value="<?php echo count_start_93993($game_sele);?>"></div>
<div class="tt_w tt_default app_rate_tt tt_left " style="position: absolute; opacity: 1; top:10px; left: 120.094px;padding-bottom:15px; ; pointer-events: auto;"><div class="wrapped"><div class="tt_text"><div class="app_rate_stats_label" id="app_rate_label"><?php if (check_voto_user($game_sele)!='0') { echo "Você votou!";}else{ echo "Você ainda não votou!";} ;?>
<div class="app_rating_wrap"><span id="apps_ratings" class="fl_l" onmouseover="rateOver(this);" onmouseout="rateOut(this);">
  <span class="app_rate fl_l " onmouseover="showRate(10);" onclick="rateApp(1,'<?php echo $game_sele; ?>');"></span>
  <span class="app_rate fl_l " onmouseover="showRate(20);" onclick="rateApp(2 ,'<?php echo $game_sele; ?>');"></span>
  <span class="app_rate fl_l " onmouseover="showRate(30);" onclick="rateApp(3,'<?php echo $game_sele; ?>');"></span>
  <span class="app_rate fl_l " onmouseover="showRate(40);" onclick="rateApp(4,'<?php echo $game_sele; ?>');"></span>
  <span class="app_rate fl_l " onmouseover="showRate(50);" onclick="rateApp(5,'<?php echo $game_sele; ?>');"></span>
</span></div>
</div>


<div class="app_rate_stats_row clear_fix" id="apps_rate_row5">
  <div class="app_rate_stars fl_l ">
    <span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span>
  </div>
  <div class="app_rate_count fl_l">
    <div class="app_rate_bg" style="width:<?php echo count_start_93993_percentage($game_sele,'5');?>;"></div>
    <div class="app_rate_cnt"><?php echo count_start_93993_single($game_sele,'5');?></div>
  </div>
  <div class="app_rate_percent fl_l"><?php echo count_start_93993_percentage($game_sele,'5');?></div>
</div><div class="app_rate_stats_row clear_fix" id="apps_rate_row4">
  <div class="app_rate_stars fl_l ">
    <span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span>
  </div>
  <div class="app_rate_count fl_l">
    <div class="app_rate_bg" style="width:<?php echo count_start_93993_percentage($game_sele,'4');?>"></div>
    <div class="app_rate_cnt"><?php echo count_start_93993_single($game_sele,'4');?></div>
  </div>
  <div class="app_rate_percent fl_l"><?php echo count_start_93993_percentage($game_sele,'4');?></div>
</div><div class="app_rate_stats_row clear_fix" id="apps_rate_row3">
  <div class="app_rate_stars fl_l ">
    <span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span>
  </div>
  <div class="app_rate_count fl_l">
    <div class="app_rate_bg" style="width:<?php echo count_start_93993_percentage($game_sele,'3');?>"></div>
    <div class="app_rate_cnt"><?php echo count_start_93993_single($game_sele,'3');?></div>
  </div>
  <div class="app_rate_percent fl_l"><?php echo count_start_93993_percentage($game_sele,'3');?></div>
</div><div class="app_rate_stats_row clear_fix" id="apps_rate_row2">
  <div class="app_rate_stars fl_l my">
    <span class="app_rate stats fl_r"></span><span class="app_rate stats fl_r"></span>
  </div>
  <div class="app_rate_count fl_l">
    <div class="app_rate_bg" style="width: <?php echo count_start_93993_percentage($game_sele,'2');?>;"></div>
    <div class="app_rate_cnt"><?php echo count_start_93993_single($game_sele,'2');?></div>
  </div>
  <div class="app_rate_percent fl_l"><?php echo count_start_93993_percentage($game_sele,'2');?></div>
</div><div class="app_rate_stats_row clear_fix" id="apps_rate_row1">
  <div class="app_rate_stars fl_l ">
    <span class="app_rate stats fl_r"></span>
  </div>
  <div class="app_rate_count fl_l">
    <div class="app_rate_bg" style="width:<?php echo count_start_93993_percentage($game_sele,'1');?>"></div>
    <div class="app_rate_cnt"><?php echo count_start_93993_single($game_sele,'1');?></div>
  </div>
  <div class="app_rate_percent fl_l"><?php echo count_start_93993_percentage($game_sele,'1');?></div>
</div></div></div>




</div></div>
                    </div>
                    <div style="padding-top: 0px;margin-bottom:10px;padding-left:10px;margin:0px;
   ">
                    <span 
                    style="font-family: arial, Helvetica, sans-serif;  font-weight: normal; font-style: normal; font-variant: normal;     color: #939393;
    font-size: 12.5px; "><?php echo  number_format($row_count_gamers, 0, ',', '.')?> usuários</span></div></div></div>
         <div style="clear:both"></div></div> 

          <!-- jogos --> 
  <?php ?>
   <div style="clear:both"></div>     
 <div style="border-top-style: solid; border-top-width: 1px; border-top-color: #efefef; position: relative;padding-top:0px; width: auto; min-height: 100px; margin: 10px">
   <img onclick="before_827();" style="cursor:pointer;position:absolute;z-index:100;left:-10px;top:70px;" src="/img_news_2016/sfkdfo4839743ruifj.png">
      <img onclick="after_827();"  style="cursor:pointer;position:absolute;z-index:100;right:-10px;top:70px;" src="/img_news_2016/9eireue376u3y.png">

 <h2 style="
 background-color:;
 
    border-radius: 4px 4px 0 0;
    color: #97989b;
    font-size: 12px;
    font-weight: normal;
    height: 40px;
    line-height: 40px;
    margin-bottom: 0;
    padding-left: 0px;
    padding-right: 10px;
    text-transform: uppercase;">Jogos em destaque</h2>
     <div style=" position: relative;width: auto;overflow:hidden; min-height: 100px;margin-right: 20px; margin-left: 10px">
   
    <div id="ok_ow992HNGGB" style=" position: relative; width:3000px; min-height: 100px;left:0px; ">
 <?php 
 //lista os jogos
//ATUALIZA IMAGENS DOS GAMES 
//$COD_GAME=$imganide9239;
$queryGAMES_IMG_1=mysql_query("SELECT img1,img2,img3,img4,info,name,cod,cat,type FROM info_games where cod<>'".mysql_real_escape_string($game_sele)."' order by timestamp DESC limit 12 ")or die(mysql_error());
while ($row_GAMESIMG_1=mysql_fetch_object($queryGAMES_IMG_1)){
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$IMG_game_1 = $row_GAMESIMG_1->img1;
$info = $row_GAMESIMG_1->info;
$name_game = $row_GAMESIMG_1->name;
$cod_game = $row_GAMESIMG_1->cod;
$categoria_game = $row_GAMESIMG_1->cat;
$type_game = $row_GAMESIMG_1->type;
//ATUALIZA IMAGENS DOS GAMES  
//CONTA JOGADORES
$querycOUNT_GAMERS_1 = mysql_query("SELECT IdGame FROM games_play  where (IdGame='".$cod_game."')  ")or die(mysql_error());
$row_count_gamers = mysql_num_rows($querycOUNT_GAMERS_1);

 ?>
   <!-- jogos--> 
   <div   style=" position: relative;display:;position: relative;    background-color: #fff;
    border: 1px solid #e0e0e1 ;
    border-radius: 4px;
    display: block;
    width:140px; margin-left:15px; background-color:#FFFFFF; float: left;margin-bottom:10px;">
     <?php if ($type_game!='0'){?><img src="/games/ads_intro_label_new_en.png" style="position: absolute; top: -2px; right: -2px; z-index: 100" /> <?php };?>
       <a href="/games/play/<?php echo $cod_game;?>&time=<?php echo time();?>"><div style="position: relative; width: 140px;position: relative;
    text-align: center; height: 96px;
    border-radius: 3px;
    vertical-align: top;">
            <img src="/cropImg.php?arquivo=games/<?php echo $IMG_game_1?>&largura=140&altura=96" style="width: 140px;
    height: 96px;
   border-radius: 4px 4px 0 0;
    vertical-align: top; position: relative;display:;" class="user_foto_borda_superior" />
            </div></a>
            <div style="position: relative;left:0px; bottom: 0px; width: 140px; min-height: 50px">
              <div style="padding-left:10px;margin:0px;
    padding-top: 5px;
       
    ">  
                 <a href="/games/play/<?php echo $cod_game;?>&time=<?php echo time();?>"><span class="lloepowpoei83838" 
                      style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; text-transform: none; color: #42648b; position: relative;"><?php echo $name_game;?> 
                
                
                <div  class="ksiieoe838833ue boradsemquina3"
         
                    style="position: absolute; width: 268px; height:auto; top: 23px; left:5px; background-color: #555454; z-index: 101;display:;">
         <img src="/img/k0399493.png" 
             style="z-index: 102;position: absolute; top: -14px; left: 13px;" /><div 
                        
             style="width: 95%; height: 20px; margin: 5px; border-bottom-style: solid; border-bottom-width: 1px; z-index: 101; border-bottom-color: #666666; position: relative;">
                        <span style="position:absolute; z-index: 102;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; display: block;"><?php echo $name_game;?></span></div>
         <div style="width: 95%; margin: 5px; position: relative; display: block;">
                        <span style=" z-index: 102;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FBFBFB"><?php echo $info;?></span></div>
                        
                        </div></span></a></div>
              
                    <div style="padding-top: 0px;margin-bottom:10px;padding-left:10px;margin:0px;
   ">
                    <div class="meter mtr-2" value="<?php echo count_start_93993($cod_game);?>"></div></div></div>
        </div> 

          <!-- jogos --> 
  <?php };?>        
        
    
             <div style="clear:both"></div>
 </div>
 </div>
 </div>           
            
            
            </div></div>
           </div>
            <div id="page_foot"  style="position: relative; width: 270px; height: 20px; margin-top: 20px; margin-right: 0px; margin-bottom: 20px; right: 0px;"><label class="link_hover_foot" onclick="window.location='/'">Orkuti © 20<?php echo date('y')?> </label><label onclick="window.location='/about.php'" class="link_hover_foot"><?php echo SOBREPRINCIPAL;?> </label><label onclick="window.location='/terms.php'" class="link_hover_foot"><?php echo TERMOSPRINCIPAL; ?> </label><label onclick="window.location='/privacy.php'" class="link_hover_foot"><?php echo PRIVACIDADEPRINCIAPL;?></label></div>
            
           
            <!-- games9994 -->

            <div class="pm-header js-friends js-pm-toggle" data-status="online">
        <span class="pm sprite"></span>
    <span id="online_friends" class="js-friends-counter online-friends-counter">0</span>
    <span>online</span>
   
</div>
             <div class="presence-manager">
             <div id="chat_03993ii_II"></div>
             <div class="Lowi_929922">
                     <div style="padding: 0px; position: relative; width:auto;  top: 0px; left: 0px; height:auto;">
                         <textarea placeholder="<?php echo GAMESTEXT10029938101;?>" id="text_send_chat"  onKeyPress="send_post(event.keyCode)"style="border: 1px solid #60656C; margin: 5px; position: relative; width: 90%; height:auto; overflow: hidden; background-color: #666666; font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;"></textarea></div>
                     <div  id="load_92343ier"style="position: absolute; top: 23px; right: 5px; cursor: pointer; z-index: 100; width: 40px; height: 40px;display:none;"><img src="/imagens_rsrc/ajax-loader002.gif"/></div></div>
</div>
    </div> 
 <iframe src="" name="sendpost" style="width:0px;height:0px;display:none;"></iframe>
<div id="sound_ooslks" style="display:none;"></div>
<div id="sjjskkdosuhjd"></div>
<?php include_once("../analyticstracking.php") ?>
 <!-- end new designer -->

<!-- add -->

</body></html>
  
<?php } ;};
if(login_chekout()!=true){


?>
<?php
  
                                                   
 include_once ("../transl8uu3j.php");
   //pageviews
    mysql_query("INSERT INTO page_views (dia,mes,tot,id) VALUES ('".date('d')."','".date('m')."','1','".date('d')."".date('m')."') ON DUPLICATE KEY UPDATE tot = tot+1");
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html dir="ltr" xml:lang="pt-br" lang="pt-br"
    xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <?php flush ();?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="<?php echo DESCRIPTION;?>"/>
<meta name="keywords" content="amigos,mensagens,pessoas,orkut,rede,colegas,scraps,social,comunidades,escola,jovens,net,mundo,fotos,peoples,friends,network" />
<meta property="og:description" content="<?php echo DESCRIPTION;?>" /> 
<meta property="og:image" content="/bg/qet37237ue3u3434.png" />
<meta property="og:type" content="orkuti"/>
<meta name="viewport" content="width=device-width">
<meta property="og:url" content="https://orkuti.net" />
<link rel="image_src" href="/bg/qet37237ue3u3434.png" />
<link rel="shortcut icon" href="/img/icon_001.png" />
<meta name="language" content="<?php ECHO IDIOMAUSER;?>" />
<meta name="robots" content="index,follow"/>
<link type="text/css" rel="stylesheet" href="/css/style_299Nmsjlogin.css?<?php echo time();?>" />
<script type="text/javascript" src="/static/jquery1.5.2jquery.min.js"></script>
<script  type="text/javascript" src="/static/jquery_99309KjdsnNNogin.js?<?php echo time();?>" ></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript" src="/js/jquery_tr_03287h.js"></script>
<script type="text/javascript" src="/static/jquery.geocomplete.js"></script>
<script type="text/javascript" src="/static/jquery.form.js"></script>

<title>orkuti</title>

<script  type="text/javascript">
var aux_cafddg883kkdoig378g = "<?php echo $aux_cadastro_google; ?>";
$(document).ready(function () {
    if (aux_cafddg883kkdoig378g != '') { cad_google_27uwbsatwiiu(); };
   
});


</script>
</head>
<body onLoad="setBG88()">
<div id="container" > 
<div id="back_ground" >
	
 	<div id="fund_trans" style="width: 100%;display:none; height: 100%;; position:fixed;left:0px;top:0px; background-image: url('/imagens_rsrc/semi-transparent.png'); background-repeat: repeat"></div>
 	</div>
<div id="main_container" style="overflow-x:auto;">
     <div style="position: relative; width:90%; height:100% ; margin: 0px auto; top: 10px; "> 
     <span style="font-family: arial, Helvetica, sans-serif; font-size: 19px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 4px; text-shadow:#333333 1px 1px 1px; right: 10px;"><?php echo SEUSUARIO;?></span>
                <label onClick="window.location='https://orkut.me/'"  
            style="font-family: arial, Helvetica, sans-serif; font-size: 20px;z-index:300; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-color: #336699; border: 1px solid #336699; padding: 10px 30px 10px 30px; position: absolute; top:35px; width: auto; right: 10px;" 
        class="bot_log"><?php echo ENTRAR;?></label><form  action="javascript:func()" method="post"  id="login_form" name="login_form"   onSubmit="return validaForm_login()"><div class="estilodeboraesombra" id="men_log_02"
             
             style="display:none; border: 1px solid #CCCCCC; position: absolute; width: 250px;z-index:300; height:290px; top: 80px; right: 10px;  
"><div  style="background-color: #FFFFFF; position: absolute; width: 100%; height: 100%; z-index: 1;opacity: .4; filter:alpha(opacity=40);-moz-opacity: 0.4; -khtml-opacity: 0.4;"></div>
             <div style="z-index: 100; position: relative; width: auto; height: auto;"><input  
            type="text" 
            name="UserEmail_login" id="UserEmail_login" value="" class="radius_3px Email_login"tabindex="1"   placeholder="<?php echo PLACESEUEMAIL;?>"/><input  
            type="password" 
            
                    
                     name="password_login" id="password_login" value="" tabindex="1"  
                     placeholder="<?php echo PLACESUASENHA;?>" class="radius_3px pass_login"/><label onclick="send_senha();"
                     style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 117px; left: 5px;text-shadow:#333333 1px 1px 1px;"><?php echo ESQSUASENHA;?></label><input   
           id="Login_submit" name="Login_submit"  type="submit" value="<?php echo ENTRAR;?>" style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-color: #3366CC; border: 1px solid #336699; padding: 6px 15px 6px 15px; position: absolute; top:115px; width: auto; right: 14px;" 
        class="bot_login"/><input 
            type="checkbox"  id="persist_box"  name="persist_box"  class="" checked="checked"
            style=" position: absolute; top: 150px; left: 0px;display:none;" /><label 
            
            style="position: absolute; top: 150px; left: 20px;display:none; font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px;">Mantenha-me conectado</label><div 
                     
                     style="margin: 0px auto 0px auto; position: relative;text-shadow:#333333 1px 1px 1px; width: 95%; top: 170px; border-top-style: solid; border-top-width: 1px; border-top-color: #FFFFFF;">
                     <span style="font-family: arial, Helvetica, sans-serif; font-size: 19px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 20px; left: 5px; text-shadow:#333333 1px 1px 1px;"><?php echo  OUFACALOGINVIA;?>    </span><label  onclick="fblogin();" title="Login via facebook" 
            class="radius_2px"
                 
                 
                         style="font-family: arial, Helvetica, sans-serif; font-size: 25px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-color: #336699; border: 1px solid #336699; padding: 10px 20px 10px 20px; position: absolute; top: 50px; width: auto; left: 5px; cursor: pointer;" >f
          
          </label><label   
            class="radius_2px" onclick="window.location='https://accounts.google.com/o/oauth2/auth?state=%2Fprofile&amp;redirect_uri=https://orkut.me/callback.php&amp;response_type=code&amp;client_id=141621817913.apps.googleusercontent.com&amp;approval_prompt=force&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile'"
                 
                 
                 style="font-family: 'Times New Roman', Times, serif; font-size: 25px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-color: #CC3300; border: 1px solid #CC3300; padding: 10px 13px 10px 13px; position: absolute; top: 50px; width: auto; left: 70px; cursor: pointer;" >g+
          
          </label></div></div><div></div></div></form><div id="not_main" style="position: relative;width:300px; height: auto; margin: 0px auto;text-align:center;">
          
          
         <div 
            
                 style="background-color: #FFFFCC; border: 1px solid #AEAE00; vertical-align: middle; text-align: center; padding: 10px;   width: 279px; position:absolute; display:none;top:-8px; z-index: 200;" 
                 id="odjri99545iie" class="radius_3px">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333"><?php echo OPSSERROLOGIN;?></span></div><div 
            
            
                 style="background-color: #FFFFCC; border: 1px solid #AEAE00;vertical-align: middle; text-align: center; padding: 5px; position: absolute; z-index:200;top:-8px; display:none; width: 232px;" 
                 id="odjri99545i" class="radius_3px">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333"><?php echo CARREGANDOPERFIL;?></span></div><div 
            
            style="background-color: #FFFFCC; border: 1px solid #AEAE00;vertical-align: middle; text-align: center; padding: 5px; position: absolute; z-index:200;top:-8px; display:none ; width: 232px;" id="odjri99545ii" class="radius_3px">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333"><?php echo INICIANDOPERFIL;?></span></div> <div class="radius_3px"
            
            
            style="background-color: #FFE6E6; border: 1px solid #CC3300; vertical-align: middle; text-align: center; padding: 5px; position: absolute; top:-8px; display:none; z-index:200; width: 172px;" 
            id="div_email_log">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333"><?php echo EMAILINVALIDO;?></span></div>
        <div class="radius_3px"
            
            
            style="background-color: #FFE6E6; border: 1px solid #CC3300; vertical-align: middle; text-align: center; padding: 5px; position: absolute; top:-8px; display:none; z-index:200; width: 172px;" 
            id="div_senha_log">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333"><?php echo SENHAINVALIDA;?></span></div></div>
    <div id="main_men" style="position: relative;width:900px; height: 80px; margin: 0px auto;">
    	<div id="ree_senha" 
    
    style="width: 500px; height: 260px;z-index:500;display:none; position: relative; background-color: #FFFFFF;margin: 100px auto 0px auto; border: 1px solid #CCCCCC">
    <label id="titulo1" 
        style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333; position: absolute;top: 22px;
            left: 34px;"><?php echo RECUPERACAODESEUSDADOS;?></label><label 
        id="texto1" 
        style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute;
            top: 56px;
            left: 34px;"><?php echo DIGITESEUEMAILPARAREDEFINIR;?></label><label 
        id="texto2" 
        style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080; position: absolute;top: 85px;
            left: 34px;"><?php echo SEUENDERECODEEMAILDOORKUTI;?></label><input  
        title="Digite seu E-mail." id="UserEmail_" class="botao_radius_inset input_cad_efe" 
        name="UserEmail_" type="text" 
        style=" position: absolute; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #000000; padding-left: 10px;top: 116px;
            left: 34px;
            width: 257px;
            height: 35px;" />
	<label onclick="env_senha();"   id="Enviar" class="ol_bottom_on_blue"
        style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-color: #3366CC; border: 1px solid #336699; padding: 5px 10px 5px 10px; position: absolute;top: 188px;
            left: 32px;" ><?php echo ENVIARSENHA;?></label><label 
        id="texto4" 
        style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: absolute; top: 194px;
            left: 152px;"><?php echo OUGERAL;?></label><label  
        class="link_geral texto5" onclick="can_senha();" 
        style="font-family: arial, Helvetica, sans-serif; font-size: 13px;cursor:pointer; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute;top: 194px;
            left: 183px;"><?php echo CANCELARGERAL;?></label><label 
        id="texto3" 
        style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 231px;
            left: 149px;"><?php echo UMLINKSERAENVIADO;?></label><label class="load_senha" style="display:none;"><img 
        src='/imagens_rsrc/350difjnsnd.gif' 
        style="position: absolute; top: 191px; left: 255px;"></label></div>
        

        </div>
         <div id="com_832ukfwhe" class="boradsemquina3"  style="position: relative;margin:0px auto;display:;background-color:#FFFFFF; width: 780px">
<script type="text/javascript">
		function setaImagem(){
			
			var settings = {
				primeiraImg: function(){
					elemento = document.querySelector("#slider a:first-child");
					elemento.classList.add("ativo");
					this.legenda(elemento);
				},
				slide: function(){
					elemento = document.querySelector(".ativo");
					if(elemento.nextElementSibling){
						elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");
						settings.primeiraImg();
					}
				},
				proximo: function(){
					clearInterval(intervalo);
					elemento = document.querySelector(".ativo");
					
					if(elemento.nextElementSibling){
						elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");
						settings.primeiraImg();
					}
					intervalo = setInterval(settings.slide,4000);
				},
				anterior: function(){
					clearInterval(intervalo);
					elemento = document.querySelector(".ativo");
					
					if(elemento.previousElementSibling){
						elemento.previousElementSibling.classList.add("ativo");
						settings.legenda(elemento.previousElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");						
						elemento = document.querySelector("a:last-child");
						elemento.classList.add("ativo");
						this.legenda(elemento);
					}
					intervalo = setInterval(settings.slide,9000);
				},
				legenda: function(obj){
					var legenda = obj.querySelector("img").getAttribute("alt");
					document.querySelector("figcaption").innerHTML = legenda;
				}
			}
			//chama o slide
			settings.primeiraImg();
			//chama a legenda
			settings.legenda(elemento);
			//chama o slide à um determinado tempo
			var intervalo = setInterval(settings.slide,4000);
			document.querySelector(".next").addEventListener("click",settings.proximo,false);
			document.querySelector(".prev").addEventListener("click",settings.anterior,false);
		}
		window.addEventListener("load",setaImagem,false);

</script>
<style>
			.trs {-webkit-transition:all ease-out 0.5s;
			-moz-transition:all ease-out 0.5s;
			-o-transition:all ease-out 0.5s;
			-ms-transition:all ease-out 0.5s;
			transition:all ease-out 0.5s;}
		
		#slider {position: relative; z-index: 1;}
		#slider a { position: absolute; top: 0; left: 0; opacity: 0;filter:alpha(opacity=0);}
		.ativo {opacity: 1!important; filter:alpha(opacity=100)!important;}
		
		/*controladores*/
		.iu {background: #0190EE; cursor: pointer; opacity: 0;filter:alpha(opacity=0); position: absolute; bottom: 40%; width: 43px; height: 43px; z-index: 5;}
		.next {right: 10px;}
		.next:before,.next:after {left: 21px;}
		.next:before {
			-webkit-transform: rotate(-42deg);
			-moz-transform: rotate(-42deg);
			top: 5px;
		}
		.next:after {
			-webkit-transform: rotate(-132deg);
			-moz-transform: rotate(-132deg);
			top: 19px;
		}
		.next:before,.next:after,.prev:before,.prev:after {content: "";
			height: 20px;
			background: #fff;
			width: 1px;
			position: absolute;
		}
		.prev {left: 10px;}
		.prev:before,.prev:after {left: 18px;}
		.prev:before {
			-webkit-transform: rotate(42deg);
			-moz-transform: rotate(42deg);
			top: 5px;
		}
		.prev:after {
			-webkit-transform: rotate(132deg);
			-moz-transform: rotate(132deg);
			top: 19px;
		}
		figure:hover .iu {opacity: 0.76;filter:alpha(opacity=76);}
		figure {
			max-width: 780px;
			height: 354px;
			position: relative;
			overflow: hidden;
			margin: 0px auto;
		}
		figcaption {padding-left: 20px;color: #fff; font-family: "Kaushan Script","Lato","arial"; font-size: 22px; background: rgba(1, 144, 238, 0.66); width: 100%; position: absolute; bottom: 0; left: 0; line-height: 55px; height: 55px; z-index: 5}
	
	.ksiieoe838833ue{
visibility:hidden; 


}
.lloepowpoei83838:hover > .ksiieoe838833ue{
visibility:visible; 


}
	</style>

	<figure class="boradsemquina3 sombra_padrao_bottom">
		<span class="trs next iu"></span>
		<span class="trs prev iu"></span>

		
		<div id="slider" class="boradsemquina3">
		<?php 
//ATUALIZA IMAGENS DOS GAMES 
$COD_GAME=$imganide9239;
$queryGAMES_IMG=mysql_query("SELECT img1,img2,img3,img4,info,name,cod FROM info_games where banner='1' order by timestamp DESC ")or die(mysql_error());
while ($row_GAMESIMG=mysql_fetch_object($queryGAMES_IMG)){
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$IMG_game = $row_GAMESIMG->img4;
$info = $row_GAMESIMG->info;
$name_game = $row_GAMESIMG->name;
$cod_game = $row_GAMESIMG->cod;
//ATUALIZA IMAGENS DOS GAMES 
		
		?>
		<a href="/games/play/<?php echo $cod_game ;?>" class="trs"><img src="/games/<?php echo $IMG_game?>" alt="<?php echo $name_game;?>" /></a>
			
<?php };?>	
							</div>

		<figcaption></figcaption>
	</figure>

	<script type="text/javascript">
		</script>
   
  <div class="" 
    
     style=" border: 1px solid #C1C5CA; position: relative; width: 768px; height: auto; margin-top:0px;padding-left:10px;padding-bottom:20px; padding-top:30px; background-color:#F7F8F9;">
  
  
   <?php 
 //lista os jogos
//ATUALIZA IMAGENS DOS GAMES 
$COD_GAME=$imganide9239;
$queryGAMES_IMG=mysql_query("SELECT img1,img2,img3,img4,info,name,cod,cat,type FROM info_games  order by timestamp DESC ")or die(mysql_error());
while ($row_GAMESIMG=mysql_fetch_object($queryGAMES_IMG)){
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$IMG_game = $row_GAMESIMG->img1;
$info = $row_GAMESIMG->info;
$name_game = $row_GAMESIMG->name;
$cod_game = $row_GAMESIMG->cod;
$categoria_game = $row_GAMESIMG->cat;
$type_game = $row_GAMESIMG->type;
//ATUALIZA IMAGENS DOS GAMES  
//CONTA JOGADORES
$querycOUNT_GAMERS = mysql_query("SELECT IdGame FROM games_play  where (IdGame='".$cod_game."')  ")or die(mysql_error());
$row_count_gamers = mysql_num_rows($querycOUNT_GAMERS);

 ?>
   <!-- jogos--> 
   <div  class="boradsemquina3 sombra_padrao_bottom" style=" position: relative;display:; width: 200px; height: auto; margin-left:35px; background-color:#FFFFFF; float: left;margin-bottom:10px;">
        <div style="position: relative; width: 200px; height: 150px;">
            <img src="/games/<?php echo $IMG_game?>" style=" position: relative;display:; width: 200px;" class="user_foto_borda_superior" /><div style="position: absolute;left:0px; bottom: 0px; width: 200px; height: 50px">
                <?php if ($type_game!='0'){?><span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; background-color: #FF0000; padding:2px 3px 2px 3px; position: absolute; top: 1px; right: 5px;">Novo</span>
                <?php };?>
                <label class="lloepowpoei83838" style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; text-transform: none; color: #3366CC; position: absolute; top: 5px; left: 10px;"><?php echo $name_game;?> 
                
                
                <div  class="ksiieoe838833ue boradsemquina3"
         
                    style="position: absolute; width: 268px; height:auto; top: 23px; left:5px; background-color: #555454; z-index: 100;display:;">
         <img src="/img/k0399493.png" 
             style="z-index: 102;position: absolute; top: -14px; left: 13px;" /><div 
                        
             style="width: 95%; height: 20px; margin: 5px; border-bottom-style: solid; border-bottom-width: 1px; z-index: 101; border-bottom-color: #666666; position: relative;">
                        <span style="position:absolute; z-index: 102;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; display: block;"><?php echo $name_game;?></span></div>
         <div style="width: 95%; margin: 5px; position: relative; display: block;">
                        <span style=" z-index: 102;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FBFBFB"><?php echo $info;?></span></div>
                        
                        </div></label>
                
                
                <span 
                    style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 19px; left: 10px;"><?php echo $categoria_game;?></span><span 
                    style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 34px; left: 10px;"><?php echo $row_count_gamers?></span><a class="ol_bottom_on_blue"
                   href="<? echo $_SERVER["HTTP_HOST"]; ?>/games/play/<?php echo $cod_game;?>" style="text-decoration: none;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-color: #3366CC; padding: 5px 8px 5px 8px; position: absolute; cursor: pointer; top: 19px; left: 142px;">Jogar</a></div></div>
        </div> 
          <!-- jogos --> 
  <?php };?>        
    
             <div style="clear:both"></div>
              
                </div>
    
      
   
        
    
    </div>
 <div id="foot_main" 
            
            
        
        
         style="position:relative;width:100%; height: 30px;  z-index: 100; margin:40px  auto; text-align: center;">
 <span onclick="window.location='/about.php'" style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;cursor:pointer"><?php echo SOBREPRINCIPAL;?></span><span onclick="window.location='/terms.php'" style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal;cursor:pointer; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;"><?php echo TERMOSPRINCIPAL;?></span><span onclick="window.location='/privacy.php'" style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;cursor:pointer"><?php echo PRIVACIDADEPRINCIAPL;?></span><br></br>
         <span style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;cursor:pointer;"  class="pt" onclick="ChangeLangNew('pt-br','lo')">Português(Brasil)</span><span style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;cursor:pointer;display:;"  class="en" onclick="ChangeLangNew('en','lo')">English(US)</span>        
</div>   
         
         
         
        	</div>
</div>
</div>
<div id="fb-root"></div>
<script  type="text/javascript" src="/js/jquery.placeholder.js"></script>


 <script type="text/javascript">jQuery(function($){$('input[placeholder], textarea[placeholder]').placeholder();});
</script> 
<?php include_once("../analyticstracking.php") ?>
</body>
</html>
<?php 
};



?>
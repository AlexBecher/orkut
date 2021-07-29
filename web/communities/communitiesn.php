<?php

require("check_func_db.php");
header("Cache-Control: private, max-age=31536000, pre-check=31536000");
header("Last-Modified: ".gmdate("D, d M Y H:i:s", time() - 3600*24*365)." GMT");
header('Expires: '.gmdate("D, d M Y H:i:s", time() + 3600*1).' GMT');
include("recuper_videos_youtube.php");


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

 if (login_chekout()!=true){
 

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
$aux_id_profile=Sanitize::filter($_GET['id']);
//$aux_id_profile1=($aux_id_custon_profi[0]);
//$aux_id_profile1=$_GET['id'];
if ($aux_id_profile!='' && (is_numeric($aux_id_profile))){
$querycod = mysql_query("SELECT * FROM community_users  where IdOrder='".mysql_real_escape_string($aux_id_profile)."' limit 1 ")or die(mysql_error());;


$rs284y824 = mysql_num_rows($querycod);
};

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
 header('Location: ../');
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

$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 700);
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
<meta name="keywords" content="orkut, orkut2, orkut 2, orkut entrar, novo orkut, orkut novo, orkut login, orkuti, orkute, id profile, idprofile, Orkut login, Orkut login entrar, orkut entrar agora, Entrar no orkut, Okut, Orkut Account login, Orkut sign in ,Novo Orkut,Orkut,Orkuti,amigos,mensagens,pessoas,orkut,rede,colegas,scraps,social,comunidades,escola,jovens,net,mundo,fotos,peoples,friends,network" />
<link rel="image_src" href="http://orkut.one/bg_community/<?php if ($mensagemcod->CommunityImg !=''){ echo $mensagemcod->CommunityImg;}else{ echo "iwu_poweo928C_093_large.jpg";};?>" />
<link rel="shortcut icon" href="/img/icon_001.png" />
<meta name="language" content="<?php ECHO IDIOMAUSER;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="index,follow"/>
<link type="text/css" rel="stylesheet" href="/css/Cx_sjjXXCwhhw55426677912367n123c3333n56.css" />
<link type="text/css" rel="stylesheet" href="/css/css_XSz_UHG773h_1803233687NNNpc.css" />
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
<link type="text/css" href="/cometchat/cometchatcss.php" rel="stylesheet" charset="utf-8">
<script type="text/javascript" src="/cometchat/cometchatjs.php" charset="utf-8"></script>
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
<label class="men_new99eje_normal"><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/edit?&about=1"><?php echo EDITARCOMM83;?></a></label>
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
<span class="men_new99eje_normal"><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/forum?&pag=1"><?php echo FORUMCOM725;?></a></span>
<div class="clear" ></div></div>
<!-- foruns -->
<!-- membros -->   
<div class="men_new_90349e _kIJ736_ji_jgBBN" >
<img  src="/img_communities/1469423524_group.png" class="img_menu_83438" />
<span class="men_new99eje_normal"><a  href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span>
<div class="clear" ></div></div>
<!-- membros -->
</div></div></div>
<?php
//verifica se a pgina do forum

if ($_GET['topic']=='topic' && $_GET['id']!=''){

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
mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and CommandNoti='$auc_cod') ")or die(mysql_error());; 

//verifica se aocmunidade é privada 
if ($mensagemcod->CommunityPrivacy=='2' || USERALLDENIEDCOMM2899=='29982' ){
?>
<input type="hidden"  value="<?php echo $auc_cod;?>"id="sjdjsadoiewe787474uuhr3555fefef">
<div id="new_99edujebnnne_center_container" ><div class="sombra_padrao_bottom box_default_orkut-Main"  ><div class="X-H6727"><span class="text_menu-0o"><?php echo ocultaTexto($row_forum->nometopico,30) ?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/forum?&pag=1"><?php echo  FORUM9398873;?></a><font>&nbsp;>&nbsp;<?php echo ocultaTexto($row_forum->nometopico,30) ?></font></span>
</div>
</div>


<div class="box-pagi-top-30" >
<div class="o-383s-spwi-2002n" ><div class="o-383s-spwi-20023n" ><?php if ($row_forum->closed!='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOFECHADOALERT44);echo  str_replace('!','',$text);?></span><?php };?><?php if ($row_forum->fixed!='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOFIXASDOALERT33);echo  str_replace('!','',$text);?></span><?php };?><?php if ($row_forum->fixed=='0' && $row_forum->closed=='0') {?><span  class="bottom_default_orkut_2"><?php $text= strtolower(TOPICOABERTOALERT3);echo  str_replace('!','',$text);?></span><?php };?></div><div class="clear"></div></div>
<?php 
     $url_m = "/".$url_teste_default."/".$_GET['id']."/topic?&cod=".$_GET['cod']."";
   
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
<div class="box-3939j-akgs-lp"> <label class="box-3939j-akgs-lp6"><a href="/<?php echo ($row_topic_var->NikName) ?>"><?php echo $row_topic_var->FullName;?></a></label>
<div class="box-ask_h-3938kje"><?php echo (($row_forum->ask_forum));?></div>
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
<div class="box-3939j-akgs-lp"> <label class="box-3939j-akgs-lp6"><a href="/<?php echo ($mensagem->NikName) ?>"><?php echo $mensagem->FullName;?></a></label>
<div class="box-ask_h-3938kje"><?php echo (sanitize_video($mensagem->ask_forum));?></div>
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
   $url_m = "/".$url_teste_default."/".$_GET['id']."/topic?&cod=".$_GET['cod']."";
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
<script src="/Trumbowyg-master/dist/trumbowyg.js"></script>
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
function CommTopicNvn(aux_333,qaueoo,aux_1){
$('.botao_azul').css({'opacity':0.1,'-moz-opacity':0.1,'-khtml-opacity':0.1});
$("#form_data").val($(".trumbowyg-editor").html());	var asj8s8sidsish=aux_333;var txte_enqujjsdj=$("#form_data").val();var txte_enqujjsdj444 = txte_enqujjsdj;ujjeu7775rrruer84r484ru = aux_333;ujjeu7775rrruer84r484ru2 = qaueoo;var auuq98q8=aux_333;
$.ajax({url:"/se_t_p_ask_938.php",data:{"uiw_927_521gsXX1":$('#uiw_927_521gsXX1').val(),"uiw_927_521gsXX2":$('#uiw_927_521gsXX2').val(),"uiw_927_521gsXX3":$('#uiw_927_521gsXX3').val(),"id_ff":ujjeu7775rrruer84r484ru,"form_data":txte_enqujjsdj444},type:"POST",timeout:3000,contentType:"application/x-www-form-urlencoded; charset=utf-8",success:function(data){
var tsdurh9845h5hg5weo1 = Math.round(new Date().getTime() / 1000);var t734ry8484hfge3ye1 = "abhdgo" + tsdurh9845h5hg5weo1 + "";  $('#mshJHasah_9qwqi_alqooOI').append('<div style="display:none;background-color: #FFF4F4" id="'+t734ry8484hfge3ye1+'" ></div>');var urlr94554="/load_ask_299928.php?cod="+ujjeu7775rrruer84r484ru+"";
$("#"+t734ry8484hfge3ye1+"").load(urlr94554,function(){ $("#"+t734ry8484hfge3ye1+"").fadeIn('500',function(){ $(this).animate({ backgroundColor: "#FFFFFF" }, "30000");});});$(".trumbowyg-editor").html('');$('.botao_azul').css({'opacity':9.0,'-moz-opacity':9.0,'-khtml-opacity':9.0});}});
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

if ($_GET['topic']=='forum' && $_GET['id']!=''){

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
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/forum?&pag=1"><?php echo  FORUM9398873;?></a></span></div>
<input class="text_input_default_" placeholder="<?php echo PESQUISARTOPICOS883;?>" id="id_topic00" maxlength="100"
class="text_input_default_" accesskey="/" name="id_topic00" onkeyup="searcH_topic_comm('<?php echo $auc_cod;?>')"   type="text"   />
</div>

<div class="box-pagi-top-30" >
<div class="o-383s-spwi-2002n" ><div class="o-383s-spwi-20023n" ><?php if ($rcont373wllele!='' or $rcont373e!='' or $add_topic_permiss=='1') {?><span onclick="_opNew_83('<?php echo $mensagemcod->IdCommunity;?>')" class="bottom_default_orkut_2"><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/new_topic?&new=1"><?php echo NOVOTPOICOI989393;?></a></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo NOVOTPOICOI989393;?></span><?php };?></div><div class="clear"></div></div>
<?php 
     $url_m = "/".$url_teste_default."/".$_GET['id']."/forum";
     $url_m2 = "/".$url_teste_default."/".$_GET['id']."/topic";
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
<div class="ui_mw_postoosm relative_box" onmouseover="mouse_over_menu(this);" ><label class="de_039930 label_box_op_menu_comm"><img class="de_0399301 l-oroiIMG-3984" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
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
        $url_m = "/".$url_teste_default."/".$_GET['id']."/forum";
     $url_m2 = "/".$url_teste_default."/".$_GET['id']."/topic";
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

if ($_GET['topic']=='banned' && $_GET['id']!=''){

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
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> <div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div> <?php if ($rcont373wllele!='' or $rcont373e!='') {?><div  class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div><?php };?> <div class="clear_div_0"></div></div>
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
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?><li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo VOLTARMEMBROCOMM;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<?php if ($rcont373wllele!='') {?><li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $mensagem->UserId ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php }; };?></ul></div><?php };?>
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
     $url_m = "/".$url_teste_default."/".$_GET['id']."/banned";
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

if ($_GET['topic']=='moderators' && $_GET['id']!=''){

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
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> <div class="Kj889_csw63 _OO84IBOX_default"  >
<span class="jduieiijjwheblue" ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div> <?php if ($rcont373wllele!='' or $rcont373e!='') {?><div  class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div><?php };?> <div class="clear_div_0"></div></div>
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
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?> <li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo BANIRMEMBROS883;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $mensagem->UserId ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php };?></ul></div><?php };?>
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
     $url_m = "/".$url_teste_default."/".$_GET['id']."/moderators";
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

if ($_GET['topic']=='members' && $_GET['id']!=''){

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
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
<?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label     class="botton_cinza _okj-398" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')" ><?php echo CONVIDARMEMBROS938;?></label> <input placeholder="<?php echo PESQUISARMEMBROS938;?>" id="nome_test3" maxlength="100"
class="text_input_default_" accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommmN('<?php echo $auc_cod;?>')"   type="text"   /><div id="ser_user_test"></div><?php };?></div>
<div id="_09uhHGV2233ZXS"><div class="Kj889_csw63 _OO84IBOX_default" >
<span class="jduieiijjwheblue"  ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1"><?php echo MEMBROSCASELOW;?></a></span></div> <div class="Kj889_csw63N _OO84IBOX_default"  >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/moderators?&pag=1"><?php echo MODERADORESCOM883;?></a></span></div><?php if ($rcont373wllele!='' or $rcont373e!='') {?><div  class="Kj889_csw63N _OO84IBOX_default" >
<span class="greujjie999" ><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/banned?&pag=1"><?php echo MEMBROSBANIDOS44;?></a></span></div><?php };?> <div class="clear_div_0"></div></div>
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
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?> <li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo BANIRMEMBROS883;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $mensagem->UserId ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php };?></ul></div><?php };?>
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
     $url_m = "/".$url_teste_default."/".$_GET['id']."/members";
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

if ($_GET['topic']==''  && $_GET['id']!=''){
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
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849); echo $mensagemcod783748347348387->text;?></a><font>&nbsp;>&nbsp;</font><a href="/<?php echo $url_teste_default;?>/<?php echo $mensagemcod->IdOrder;?>"><?php echo ocultaTexto($mensagemcod->CommunityName,30);?></a></span></div>
</div>
<!-- nome-->
<div class="box-about-8392rjeeqq">
<!-- descrio -->
<div class="row_blue_001 cobox_padding_main_comm" >
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
<span class="text_painel_default_2"><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php echo $mensagemcod783748347348387->text;?></a></span></div><div class="clear_div_0"></div> </div>
<!-- categoria -->
<!-- dono -->
<div class="row_blue_002 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo DONODIIEIU2382JJDND;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><a href="https://orkuti.net/<?php echo $row_ADM->NikName;?>" target='_blank'><?php  echo  ($row_ADM->UserName);?></a></span></div><div class="clear_div_0"></div> </div>
<!-- dono -->
<!-- moderadores -->
<div class="row_blue_001 cobox_padding_main_comm" ><div class="col_left_profile_main"><span class="text_painel_default_1" ><?php echo MODERADORES883J3HGDGBF;?>:</span></div><div  class="col_right_profile_main">
<span class="text_painel_default_2"><?php
if ($row_moderadores!=''){
while ($row_mod_002= mysql_fetch_object($queryModeradores)) {
$queryMo999 = mysql_query("SELECT NikName,UserName FROM users where UserId='$row_mod_002->UserId' limit 1")or die(mysql_error());;
$rowMo999 = mysql_fetch_object($queryMo999);
echo $moderadores =<<<html
<a href="https://orkuti.net/$rowMo999->NikName" target='_blank'>$rowMo999->UserName</a><span class="text_painel_default_2">,</span>
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
$url_m = "/".$url_teste_default."/".$_GET['id']."/topic";
$url_m2 = "/".$url_teste_default."/".$_GET['id']."/forum";
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
<div class="ui_mw_postoosm" onmouseover="mouse_over_menu(this);" > <div class="box-93forum838"><div class="box-left-text-from774"><span><a href="<?php echo $url_m."?&cod=".$row_topic->idforum."&pag=1";?>"><?php echo ($row_topic->nometopico);?></a></span></div>
<div class="box-right-text-from774"><span><?php echo  number_format($rcont334d,0,',','.');?></span></div>
<div class="box-left-time-999"><span><?php   if($row_topic->lastactivi!='0') { echo date('d/m/Y H:i:s',$row_topic->lastactivi);}else{ echo date('d/m/Y H:i:s',$row_topic->timestamp);};  ?></span></div> </div><div class="clear"></div></div>                       
<?php         }};?></div><div style="clear: both"></div><div class="o-383s-spwi-2002" >
    <div class="o-383s-spwi-20023" ><?php if ($rcont373wllele!='' or $rcont373e!='' or $add_topic_permiss=='1') {?><span onclick="_opNew_83('<?php echo $mensagemcod->IdCommunity;?>')" class="bottom_default_orkut_2"><a href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/new_topic?&new=1"><?php echo NOVOTPOICOI989393;?></a></span><?php }else{?><span class="bottom_default_orkut_23"><?php echo NOVOTPOICOI989393;?></span><?php };?></div><div class="o-383s-spwi-200234"><span class="bottom_default_orkut_2"><a href="<?php echo $url_m2."?&pag=1";?>"><?php 	echo VERTODODOSTOPICOS9933;?></a></span></div><div class="clear"></div></div>
    </div>
    <?php }
    
    ?>
<!-- forum -->

</div>

<div id="right_main_container_profile">
<!-- membros -->
<div id="ioks9900" class="sombra_padrao_bottom box-right-pn-99933" ><div class="jd-box-99393-kksj" ><div class="jn_boxk399-uurjn">
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/profile_thumbs/<?php echo $row_name_7782->UserFotoThumb ;?>"/><label><?php echo ocultaTexto($row_name_7782->UserName,5); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
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

if ($_GET['topic']=='new_topic' && $_GET['new']=='1'  && $_GET['id']!='' && USERALLDENIEDCOMMNEWTOPIC == '29982'){

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
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
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
<form id="ad_topic" name="ad_topic" method="post" action="/{$url_teste_default}/{$_GET['id']}">
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<input type="hidden" name="id_ff"  value="$auc_codcommet"></input>
<input type="hidden" name="new"  value="2883776"></input>
<input type="text" id="ti_03902oedue" name="title"placeholder="$assunto_do_topico"/>
<div  id="textarea_999" class="jqte-test" placeholder="$text_textareabox"></div>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/Trumbowyg-master/dist/trumbowyg.js"></script>
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
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/profile_thumbs/<?php echo $row_name_7782->UserFotoThumb ;?>"/><label><?php echo ocultaTexto($row_name_7782->UserName,5); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
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

if ($_GET['topic']=='edit' && $_GET['about']=='1'  && $_GET['id']!='' && $row_my_com88!=''){

//verifica o dono 
$queryADM = mysql_query("SELECT community_users.UserIdPro,users.UserId,users.NikName,users.UserName FROM community_users,users  where (community_users.IdCommunity='$mensagemcod->IdCommunity' and users.UserId=community_users.UserIdPro) limit 1")or die(mysql_error());;
$row_ADM= mysql_fetch_object($queryADM);

?>
<div id="new_99edujebnnne_center_container" ><div class="center_painel_communities_default" id="center_container__9929">
<!-- about  -->
<div class="sombra_padrao_bottom lloepowpoei83838K center_painel_communities_default pn-about_box_com888">
<!-- nome-->
<div class="X-H6727"><span class="text_menu-0o"><?php echo EDITARCOMUNIDADE83448384343;?></span>
<div class="L-boxo-links-commm"><span class="l-3883_span_po393"><a href="/"><?php echo INICIO030939KLOIK;?></a><font>&nbsp;>&nbsp;</font><a href="/cmm/category/<?php echo $mensagemcod->category;?>"><?php $querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
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
<span class="text_painel_default_2"><a href="https://orkuti.net/<?php echo $row_ADM->NikName;?>" target='_blank'><?php  echo  ($row_ADM->UserName);?></a></span></div><div class="clear_div_0"></div> </div>
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
<script src="/Trumbowyg-master/dist/trumbowyg.js"></script>
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
window.location="/{$url_teste_default}/{$_GET['id']}";$('.botao_azul').css({'opacity':9.0,'-moz-opacity':9.0,'-khtml-opacity':9.0});}});
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
<span   class="text_colleft_nome position-box-left-10px-dic"><?php echo MEMBROSCASELOW." &nbsp";?><a  href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1">(<?php echo number_format(mem_cach_count($mensagemcod->IdCommunity),0,',','.');?>)</a></span>
<div class="box-93okd-kmdn982-">
<?php 
if ($mensagemcod->IdCommunity!='' && !empty($mensagemcod->IdCommunity)){
$queryCount_members_00 = mysql_query("SELECT UserId FROM list_community_user  where (list_community_user.IdCommunity='$mensagemcod->IdCommunity')  order by list_community_user.lastactivity DESC  limit 9")or die(mysql_error());;
while ($row_members_99283 = mysql_fetch_object($queryCount_members_00)){
$queryName_user= mysql_query("SELECT NikName,UserName,UserFotoThumb FROM users where UserId='$row_members_99283->UserId' limit 1")or die(mysql_error()); 
$row_name_7782 = mysql_fetch_object($queryName_user);
?>
 <a href="/<?php echo $row_name_7782->NikName ;?>"><div class="boradsemquina3 box-img-members-comm9"><img  src="/profile_thumbs/<?php echo $row_name_7782->UserFotoThumb ;?>"/><label><?php echo ocultaTexto($row_name_7782->UserName,5); ?></label></div> </a> <?php };};?><div style="clear: both;"></div></div>        
<span class="bottom_default_orkut_2 position-box-right-10px-top-10px-dic"><a  href="/<?php echo $url_teste_default;?>/<?php echo $_GET['id'];?>/members?&pag=1"><?php echo VERTODOSAMIGOS;?></a></span></div></div></div>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82196402-1', 'auto');
  ga('send', 'pageview');

</script>
 <!-- end new designer -->
 
</body></html>
  
<?php }
if(login_chekout()!=true){
//echo "<meta http-equiv=\"refresh\" content=\"0; URL=http://orkut.one/login.php\">";  
  }
?>
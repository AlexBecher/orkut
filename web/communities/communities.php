<?php
require("check_func_db.php");
      if (login_chekout()==true){
   sec_session_start();
   /*
    */


require ('ad_lash_inj.php');
function anti_injection8uu($sql)
{

$sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$sql);
$sql = trim($sql);
$sql = strip_tags($sql);
$sql = addslashes($sql);
return $sql;
}
$auuwdw98r8usduuue777="";

$aux_cadastro_google=$_REQUEST['cad_google_0298736764982'] ;
 
require 'facebook.php';

$facebook = new Facebook(array(
 'appId'  => '568507816593317',
  'secret' => 'def6e69168eb7b0b142063f844c1ec4e',

));

// See if there is a user from a cookie
$user = $facebook->getUser();

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
      $user = null;
  }
}






if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler");

else ob_start();

$useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;

include("date.php");


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
                
   
                



 
 include_once ("transl8uu3j.php");
// carrega algumas variáveis  
$query = mysql_query("SELECT FullName,Noti_profile,ccuserid,UserFotoThumb,UserPapelParede,UserNasc,UserId,UserCidade FROM users where UserId='$UserId_Cokie' limit 1");
$mensagem433 = mysql_fetch_object($query);
$FullName=$mensagem433->FullName;  
$Noti_profile=$mensagem433->Noti_profile; 
$Id_igreja=$mensagem433->IgrejaId;
$UserCidade=($mensagem433->UserCidade);
$useridc=($mensagem433->ccuserid);
$UserFotoThumb_Cokie=($mensagem433->UserFotoThumb);
$audii=$mensagem433->UserPapelParede;
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
//chat
function getTimeStamp() {
	return time();
} 
 
//echo $_GET['id']."<br>";
//echo $_GET['topic']."<br>";
$url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
$aux_id_custon_profi=explode( '/' , $url );
$aux_id_profile=anti_injection8uu($aux_id_custon_profi[1]);
$aux_id_profile1=($aux_id_custon_profi[0]);
//$aux_id_profile1=$_GET['id'];
if ($aux_id_profile!=''){
$querycod = mysql_query("SELECT * FROM community_users  where IdOrder='".mysql_real_escape_string($aux_id_profile)."' limit 1 ")or die(mysql_error());;


$rs284y824 = mysql_num_rows($querycod);
};

 if ($rs284y824!=''){
$mensagemcod = mysql_fetch_object($querycod);
$auuwdw98r8usduuue777=$mensagemcod->IdCommunity; 
 }else{
 $auuwdw98r8usduuue777='';
 
 }
 $auuwdw98r8usduuue777;

 if ($rs284y824==''){
 header('Location: ../login.php');
 }
 
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
 

$cod_communitie="/$mensagemcod->IdOrder";
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
<meta name="description" content="<?php echo DESCRIPTION;?>"/>
<meta property="og:title" content="orkuti" /> 
<meta name="keywords" content="amigos,mensagens,pessoas,orkut,rede,colegas,scraps,social,comunidades,escola,jovens,net,mundo,fotos,peoples,friends,network" />
<meta property="og:description" content="<?php echo DESCRIPTION;?>" /> 
<meta property="og:image" content="bg/qet37237ue3u3434.png" />
<meta property="og:type" content="orkuti"/>
<meta name="viewport" content="width=device-width">
<meta property="og:url" content="https://orkuti.net" />
<meta property="og:site_name" content="Orkuti" />
<link rel="image_src" href="/bg/qet37237ue3u3434.png" />
<link rel="shortcut icon" href="/img/icon_001.png" />
<meta name="language" content="<?php ECHO IDIOMAUSER;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="index,follow"/>
<link type="text/css" rel="stylesheet" href="/css/style_299Nmsjhome.css?<?php echo time();?>" />
<link type="text/css" href="/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="/css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="/static/jquery1.5.2jquery.min.js"></script>
<script src="/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery_main_877u79.js?<?php echo time();?>"></script>
<script type="text/javascript" src="/js/jquery_tr_03287h.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript" src="/static/jquery.geocomplete.js"></script>
<script type="text/javascript" src="/static/jquery.form.js"></script>
<link type="text/css" href="/cometchat/cometchatcss.php" rel="stylesheet" charset="utf-8">
<script type="text/javascript" src="/cometchat/cometchatjs.php" charset="utf-8"></script>

<title>orkuti-<?php echo $UserName_cokie?></title>
<script type="text/javascript">
$(function () {
	$(".gePsdhhd").geocomplete({ details: "form" });
	
});
$(function() {
    $("#datepicker").datepicker()
    
});

var ejfeueuuee94usgdsddcomm="<?php echo $auuwdw98r8usduuue777?>";
var name_0e0ejnfvruuru4885j="<?php echo $UserName_cokie ?>";
var foto_kdfwrn34783985t58th35hhrfbn="<?php echo $UserFotoThumb_Cokie?>"
var id_odosngsfgnsfi959tjtern="<?php echo $UserId_Cokie?>";
var id_odosngsfgnsfi959tjchat="<?php echo $useridc?>";
var data_wt63hhehjhg5353773="<?php echo ("$portuguese_day,$dia de $portuguese_month");?>";
var aux_atua_variavel_controle_div="";
var aux_conect=true;
var aux_conect2=true;
var aux_84r4urur88=false;
var aux_menu_8uue8="";
var aux_menu_8uue8C="";
var aux_menu_8uue8rand="";
var aux_show994kknwyye83pw=false;
var aux_showdau84djakpekdh8="";
var cod_aux_ministerial='';
var paginaFotos=1;
var obj_text_coment="";
$(document).ready(function(){
	$('.animated').autoResize();
	$(".scroll-pane").jScrollPane();
    $(".scroll-pane .jspDrag").hide();
    $(".scroll-pane").mouseenter(function () {
       $(this).find(".jspDrag").stop(true, true).fadeIn("slow");
    });
    $(".scroll-pane").mouseleave(function () {
       $(this).find(".jspDrag").stop(true, true).fadeOut("slow");
    }); 
});
	
	
	
	

</script>
</head>
<input type="hidden"  value="<?php echo $cod_communitie?>"id="sjdjsadoiewe787474uuhr">

<body onload="iq8ueuue9736t();" class="iocover" onFocus="getFocus();"onclick=" hide_search_box();on_men003();" bgcolor="#dae5ee" style="overflow-y:scroll">
 <div id="fb-root"></div>
 <div id="popup2Geral"></div>
 <div id="popupNav"><div id="centerNav"></div></div>
 <div id="popupNavPubli"><div id="centerNavPubli"></div></div>
 <div id="fundo" style=""></div><input type="hidden"id="Id_Aux"name="Id_Aux"value="<?php echo $UserId_Cokie?>"></input>
 <input type="hidden"id="user_aux_0001"name="user_aux_0001"value="<?php echo $UserFotoThumb_Cokie ?>"></input>
 <!-- new designer --> 
<!-- new barr -->  
<div id="new_barr"  class="tems_3728ehe"
    
        
        
        
        
        style="position: fixed; width: 100%; height: 50px; top: 0px; left: 0px; background-color: #95b9fb;  z-index: 200;">
        <div id="notificacao333333"
style="position: absolute;left:2%;top:0px;z-index:500;display:; width:300px; height: auto;  background-color: #333333"></div>
    <div style="position: relative; width: 980px; height: 50px; margin: 0px auto; top: 0px;">
        
        <div id="barr_contai_center" 
            
            style="position: relative; width: 600px; height: 50px; float: left;left:5px;   "><div id="okks3838hbaas" style="position: relative;display:none; width: 660px; height: 50px; float: left;left:5px;   ">
            <div style="position: relative;width: 660px; height: 50px;"><div      style="position: relative; width: 150px; height: 30px; top: 0px; left: 0px;  float: left; "><a onclick="call_uw7wye6366();" href="javascript:void(0)" title="Ir para a página inicial"><img src="/img_news_2016/padrao_orkut_oficial_pink.png"        style="position: absolute; top: px; left: 0px; cursor: pointer; " /></a></div><div id="barr_contai_center"      style="position: relative; width: auto; height: 30px; float: left;  ">  <a href="/" class="boradsemquina3 botao_azul tems_3728ehe"         style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; background-color: ; padding: 8px 10px 8px 10px; position: absolute; cursor: pointer; top: 8px; left: 0px;">Início</a><a href="javascript:void(0)" onclick="view_prof('<?php echo $UserId_Cokie?>');" class="boradsemquina3 botao_azul tems_3728ehe"       style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; background-color: ; padding: 8px 10px 8px 10px; position: absolute; cursor: pointer; top: 8px; left: 70px;">Perfil</a><label  onclick="call_uw7wye6366();com_ooeie937u3uj('<?php echo $UserId_Cokie?>');"class="boradsemquina3 botao_azul tems_3728ehe"        style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; background-color: ; padding: 8px 10px 8px 10px; position: absolute; cursor: pointer; top: 8px; left: 140px;">Comunidades</label><label  class="boradsemquina3 botao_azul tems_3728ehe" onclick="x8839ue();"         style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; background-color: ; padding: 8px 10px 8px 10px; position: absolute; cursor: pointer; top: 8px; left: 270px;">Temas </label></div> </div>
            </div>
            <div id="ser_memb_new" 
                
                
                
                style="border: 1px solid #FFFFFF; position: relative; height: 26px; width: 420px; margin-top: 11px; background-color: #FFFFFF;" 
                class="div_semquina">
                <input accesskey="/"id="busca_membro"name="busca_membro"onClick="clear_place();"
                    onkeyup="searcH_geral_people();" type="text" 
                    
                    
                    style="font-family: sans-serif; font-size: 14px;outline:none;border-style: none; font-weight: normal; font-style: normal; font-variant: normal; color: #336699; vertical-align: middle; text-align: left; background-color: #FFFFFF; padding-left: 5px; padding-right: 5px; position: relative; width: 370px; height: 25px; margin-left: 10px; display: block; text-decoration: none; " 
                    placeholder="<?php echo PLACEBUSCARPESSOASMEMBROS;?>" 
                    maxlength="300" /><img src="/img/lup_wdhwebjjJb.png" 
                
                    style="position: absolute; top: 3px; right: 5px; cursor: pointer; " /><div id="ser_user_people"
                
            style="position: absolute; width: 380px;display:none; left:0px;z-index:110; margin-bottom: 0px; top:26px;"></div></div></div>
        <div id="barr_contai_right" 
            
            
            
            style="position: relative; width: 380px; height: 50px; top: 0px; float: left; ">
            <div style="position: relative; float: left; width: 340px; height: 50px;">
             
           
                     <span class="sjdjeieUYYTTGH66ee" style="position: relative; margin-top: 10px; width: 30px; height: 30px; float: right; margin-right: 70px;">
            <img src="/img/bel_342232l.png" 
                
                style="position: absolute; cursor: pointer; " 
                class="sobre_icon_bar noti_icon_barr" /><div id="load_djew898rrhjjw" 
                style="position: absolute; top: 0px; left:-15px; "></div>
                         <div 
                
                style="border: 1px solid #CCCCCC; background-color: #FFFFFF; position: absolute; width:300px; height:auto; top: 50px;left:-139px; z-index: 103; display:none; " 
                class="estilodeboraesombra2" id="sub_mai_noti">
                <img src="/imagens_rsrc/point_29932inw2.png" 
                    style="position: absolute; left: 140px; top: -15px;" /><div style="position: relative; width: 300px; height:50px">
                      <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 15px; left: 15px;"><?php echo NOTIFICACOES;?></span><img 
                          src="/img/bell40_40.png" 
                          style="position: absolute; width: 20px; top: 10px; right: 15px"/></div><div id="vie_sodduonwnoti"class="" style="position: relative; width: 300px; max-height:450px;overflow-x:hidden;"></div><div style="clear:both"></div></div>
                      </span>
                      
                      <span class="sjdjeieUYYTTGH66ee" style="position: relative; margin-top: 10px; top: 0px; width: 30px; height: 30px; float: right; margin-right: 70px;"><img src="/img/9329er3ru23r7YYYHQW.png" 
                
                style="position: absolute; cursor: pointer;" 
                class="sobre_icon_bar noti_icon_barrN" /><div id="load_djew898rrhjjwn" 
                style="position: absolute; top: 0px; left: -15px;"></div>
                               <div 
                
                style="border: 1px solid #CCCCCC; background-color: #FFFFFF; position: absolute; width:300px; height:auto; top: 50px; left:-139px; z-index: 103; display:none; " 
                class="estilodeboraesombra2" id="sub_mai_notin">
                <img src="/imagens_rsrc/point_29932inw2.png" 
                    style="position: absolute; left: 140px; top: -15px;" /><div 
                    style="position: relative; width: 300px; height:50px">
                      <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 15px; left: 15px;"><?php echo NOTIFICACOESAMIZADES;?></span><img 
                          src="/img/People-MSN40_40.png" 
                          style="position: absolute; width: 20px; top: 10px; right: 15px"/></div><div id="vie_sodduonwnotin"class="" style="position: relative; width: 300px; max-height:450px;overflow-x:hidden;"></div><div style="clear:both"></div></div>
                      </span>
                       <span class="sjdjeieUYYTTGH66ee" style="position: relative; margin-top: 10px; width: 30px; height: 30px; float: right; margin-right: 70px;">
            <img src="/img/eye.png" 
                
                style="position: absolute; cursor: pointer; " 
                class="sobre_icon_bar noti_icon_barr3" /><div id="load_djew898rrhjjwss" 
                style="position: absolute; top: 0px; left: -15px; "></div>
                              <div 
                
                style="border: 1px solid #CCCCCC; background-color: #FFFFFF; position: absolute; width:300px; height:auto; top: 50px;left:-139px; z-index: 103; display:none; " 
                class="estilodeboraesombra2" id="sub_mai_notifVisitor">
                <img src="/imagens_rsrc/point_29932inw2.png" 
                    style="position: absolute; left: 140px; top: -15px;" /><div 
                    style="position: relative; width: 300px; height:50px">
                      <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 15px; left: 15px;">Quem viu meu perfil</span><img 
                          src="/img/eye_inv.png" 
                          style="position: absolute; width: 20px; top: 10px; right: 15px"/></div><div id="vie_sodduonwnotie"class="" style="position: relative; width: 300px; max-height:450px;overflow-x:hidden;"></div><div style="clear:both"></div></div>
                      </span>
                      </div>
            <div style="position: relative; float: left; width: 34px; top: 0px; left: 0px; height: 50px;">
                <span style="position: absolute; margin-top: 10px; margin-right: 0px; width: 30px; height: 30px;">
                <img src="/imagens_rsrc/men_euudej28833443.png" 
                
                style="position: absolute; cursor: pointer; " 
                class="sobre_icon_bar men_icon_barr" />
                <div 
                
                style="border: 1px solid #CCCCCC; background-color: #FFFFFF; position: absolute; width: auto; height: auto; top: 50px; z-index: 103; display:none; right:-30px;" 
                class="estilodeboraesombra2 men_icon_barr" id="sub_men_main">
                <img src="/imagens_rsrc/point_29932inw2.png" 
                    style="position: absolute; left: 140px; top: -15px;" /><ul 
                    
                     
                    style="margin: 10px 0px 0px 0px; width:190px; left:0px;position:relative; height: auto;">
                    <li class="men_new_90349e3 fon_fault_all" onclick="jjuw7e77yejhe();"
                        
                        
                        
                            
                            
                        
                        
                        style="  font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;  position: relative; width:180px; height: auto; text-align:left; list-style:none; padding-top: 5px; padding-bottom: 5px; padding-left:10px; display: block;"><?php echo NOTIFICACOES;?></li>
                    <li class="fon_fault_all men_new_90349e3" onclick="show_expl()"
                        
                        
                        
                            
                            
                        
                        
                        style="  font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;  position: relative; width:180px; height: auto; text-align: left; list-style:none; padding-top: 5px; padding-bottom: 5px; display: block;padding-left:10px;"><?php echo POLITICASDEPRIVACIDADE;?></li><li class="fon_fault_all men_new_90349e3" onclick="show_sobre();"
                        
                        
                        
                            
                            
                        
                        style="  font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;  position: relative; width:180px; height: auto; text-align:left; list-style:none; padding-top: 5px; padding-bottom: 5px; display: block;padding-left:10px;"><?php echo SOBREOORKUTI;?></li><li class="fon_fault_all men_new_90349e3" onclick="up_passjdi8993();"
                        
                        
                        
                            
                            
                        
                        style="  font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;  position: relative; width:180px; height: auto; text-align:left; list-style:none; padding-top: 5px; padding-bottom: 5px; display: block;padding-left:10px;"><?php echo CONFIGURACOESGERAL;?></li><li class="fon_fault_all men_new_90349e3" onclick="show_terms();"
                        
                        
                        
                            
                            
                        
                        style="  font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;  position: relative; width:180px; height: auto; text-align:left; list-style:none; padding-top: 5px; padding-bottom: 5px; display: block;padding-left:10px;"><?php echo TERMOSDEUSO;?></li><li class="fon_fault_all men_new_90349e3" onclick="up_passjdi8993HJJha()"
                        
                        
                        
                            
                            
                        
                        style="  font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;  position: relative; width:180px; height: auto; text-align:left; list-style:none; padding-top: 5px; padding-bottom: 5px; display: block;padding-left:10px;"><?php echo SUGESTAOOUCRITICA;?></li><a href="/logout.php"><li class="fon_fault_all men_new_90349e3" 
                        
                        
                        
                            
                            
                        
                        style="  font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;  position: relative; width:180px; height: auto; text-align:left; list-style:none; padding-top: 5px; padding-bottom: 5px; display: block;padding-left:10px;"><?php echo SAIRGERAL;?></li></a></ul></div>
                        
                       </span>
                 <div id="jjoidi8e8r8r8eeo" style="display:none"></div></div><div style="clear: both"></div>
                </div><div style="clear: both"></div></div>
    </div>
   <!-- new barr -->       
    <div id="global_conatiner" 
        
        
        style="position:relative; left: 0px; top: 0px; width: 100%;height:auto">
     
        
              <div id="main_container_communities" 
            
            style="position: relative; margin: 0px auto;display:none; width:970px; height:auto;zoom:1; clear: both;"></div>
    </div> 
 <iframe src="" name="sendpost" style="width:0px;height:0px;display:none;"></iframe>
<div id="sound_ooslks" style="display:none;"></div>
<div id="sjjskkdosuhjd"></div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65567517-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27https://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="https://www.histats.com" target="_blank" title="" ><script  type="text/javascript" >
try {Histats.start(1,3473147,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="https://www.histats.com" target="_blank"><img  src="https://sstatic1.histats.com/0.gif?3473147&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->
 <!-- end new designer -->
 <!-- upload de imagens  -->
<div id="popup2Upload"></div><div id="popupUpload"></div>
<!-- upload de imagens  -->
  <!-- compartilhar fotos -->       
        <div id="popup2"></div><div id="popup"><div id="center"><div id="box_comp_fotos_img"
style="border: 1px solid #E6E6E6; width: 500px; height: 500px;display:none;margin: 0% auto; background-color: #FFFFFF;"><div style="width: 480px; height: 480px; margin: 10px; position: relative;"><span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333"><?php echo COMPARTILHARGERAL;?></span><br/><input type="text"id="msg_img_box"value=""
placeholder="<?php echo PLACEESCREVAAQUISEUCOMENTARIO;?>"
style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; border: 1px solid #E6E6E6; width: 480px; height: 30px; margin-top: 10px; margin-bottom: 10px;"/><div id="box_img0002993"
style="border: 1px solid #E6E6E6; margin-top: 10px; margin-bottom: 10px; width: 480px; height: 300px; overflow: hidden;"></div><div style="width: 480px; height: 40px; border: 1px solid #E6E6E6"><select id="khsjjsh9288"style="border: 1px solid #FFFFFF; width: 200px; height: 20px; font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;"><option value="pessoal"><?php echo COMPARTILHARENTREOAMIGOS;?></option><option value="publico"><?php echo COMPARTILHARENTREOPUBLICO;?></option></select></div><label class="aijsoee55 ol_bottom_on_blue"style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; background-color: #0066FF; margin: 5px; padding: 5px; text-align: center; vertical-align: middle; position: absolute; top: 436px; left: 75px;"><?php echo COMPARTILHARGERAL;?></label><label class="botao_cinza"onclick="user_boxImg_out();"
style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; background-color: #F8F8F8; border: 1px solid #E6E6E6; margin: 5px; padding: 5px; text-align: center; vertical-align: middle; position: absolute; top: 435px; left: 163px;"><?php echo CANCELARGERAL;?></label></div></div><img onClick="user_boxImg_out();"class="okdiejjrj"style="position:relative;top:5px;left:-30px;"src="/imagens_rsrc/close_00998228322.png"><div id="show_imagem"
></div><div class="scroll-pane" id="show_coment00022"
><div id="img_0377466"style="margin: 20px 10px 10px 10px; width: 90%; height: 50px;"></div><div id="msg_09399884"></div></div></div><!--#center--></div>
<!-- compartilhar fotos --> 
<!-- IMG_post -->
<div id="popupImg"><div id="centerImg"><img onClick="user_boxImg_out();"class="okdiejjrj"style="position:relative;top:5px;z-index:600;left:-30px;"src="/imagens_rsrc/close_00998228322.png"><div id="show_imagemImg"
></div>
    <div id="show_coment00022Img"class="scroll-pane div_sombra_inter" style="background-color: #F7F7F7"
><div id="img_0377466Img"style="margin: 20px 10px 10px 10px; width: 90%; height: 50px;"></div>
        <div id="msg_09399884Img"
            style="width: auto;height: auto;margin: 10px none none none; border-style: solid; border-width: 1px; border-color: #E6E6E6; position: relative;"></div></div></div><!--#center--></div>

<!-- IMG_post -->
<div id="jdewuUUTRDGF7766ttt" style="display:none">
<div  class="boradsemquina3 sombra_padrao_bottom"
  
    style=" display:;width: 270px;position:relative; height:auto;; background-color: #FFFFFF;margin-top:0px; margin-bottom: 5px;padding-top:5px;">
    <div
        style="margin-left:10px; text-align: left; margin-bottom: 5px;">
        <span class="text_colleft_nome"><?php echo "PATROCINADO POR ORKUTI";?></span></div>
<div id="jdewuUUTRDGF7766" style="display:none"><div  onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm user_foto_borda_superior sombra_padrao_bottom"
    style="background-color: #FFFFFF;position: relative;margin-bottom:20px;clear:both; width: 500px; height: auto;"><div style="position: relative; width: 500px; height:auto"> 
    <div style="margin: 10px"><a  href="javascript:void(0);" >
    <img class="tooltipN user_foto" 
        src="/img/Orkut_Logo_266.png" 
        style="position:relative; max-width:50px;z-index:90; max-height:50px;clear: both; margin-right: 10px;" 
        ></a><span 
            style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #336699; position: absolute; top: 14px; left: 74px;">Publicidade patrocinanda pelo 
        <label style="cursor: pointer"><b>Orkuti</b></label></span></div>
        </div></div></div></div></div>

</body></html>
  
<?php }
if(login_chekout()!=true){

?> 
<?php



 $url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
$aux_id_custon_profi=explode( '/' , $url );
$aux_id_profile=($aux_id_custon_profi[1]);
$aux_id_profile1=($aux_id_custon_profi[0]);


$querycod = mysql_query("SELECT * FROM community_users  where IdOrder='".mysql_real_escape_string($aux_id_profile)."' limit 1 ")or die(mysql_error());;
$rcont375555wwo = mysql_num_rows($querycod);
if ($rcont375555wwo=='0'){
header('Location: ../login.php');
}else{

$mensagemcod = mysql_fetch_object($querycod);

$Count_mem = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$idcomm' order by IdOrder asc limit 501")or die(mysql_error());;
$Count_memm = mysql_num_rows($Count_mem);


if ($mensagemcod->CommunityPrivacy=='1'){$aux_img="lock.png"; $aux_privacy="Paricular";};
if ($mensagemcod->CommunityPrivacy=='2'){$aux_img="dyuue8je.png"; $aux_privacy="Pública";};
$query55kk = mysql_query("SELECT * FROM forum where  IdCommunity='$mensagemcod->IdCommunity'  ")or die(mysql_error());
$rcont334kkk = mysql_num_rows($query55kk);

 $query = mysql_query("SELECT UserFotoThumb,UserName,ccuserid FROM users  where  UserId='$mensagemcod->UserIdPro' limit 1 ");
 $mensagem = mysql_fetch_object($query);            
$url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
$aux_id_custon_profi=explode( '/' , $url );
$aux_id_profile=($aux_id_custon_profi[1]);


$cod_communitie="$aux_id_profile/$mensagemcod->IdOrder";
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
};

 //variáveis para verificar comunidade válidade
 $var_img=false;
 $var_about=false;
 $var_topicos=false;
 $var_ask=false;
 $var_members=false;
 $var_categ=false;  
include("date.php");
 include_once ("sanitizeSql.php");
 //language communities
    function lang_trans($string) {
	#Declaramos as palavras bloqueadas a serem verificadas
	$desenho = array(" ","pt-br","pt","Pt-br","br","en","en_us");

	#Será retornado o seguinte no lugar delas, caso ache alguma palavra bloqueada
	$substituir_pore = array("Português(Brasil)","Português(Brasil)","Português(Brasil)","Português(Brasil)","Português(Brasil)","Inglês","Inglês");

	#Rodando a string e procurando pelas palavras proibidas
	for($e=0;$e < sizeof($desenho); $e++) {
			$string = str_replace($desenho[$e], $substituir_pore[$e], $string);
			 
			
	}
if ($string==''){$string="Português(Brasil)";};
	#Feito a verificação, é retornada a string
	return ($string);
}
include("lapse.php");
 $aux_osdj394h4hhn=false;
$aux_cont_event=false;
$aux_cont_event2=false; 
 //LIMITAR TEXTOS                 
//LIMITAR TEXTOS                 
function LimiteFrase($string,$chars) {

if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars)."...";

}else{
return ($string);
};
};


 //LIMITAR TEXTOS                 

function ocultaTexto($texto, $limite = 8) {
if (strlen($texto) <= 8){

return $texto ;

}

    $partes = str_split($texto, $limite);
    $saida  = <<<HTML
<text>%s..</text>

HTML;
    printf($saida, array_shift($partes), implode($partes));
};

 

      
   

$query375555r = mysql_query("SELECT * FROM list_community_user  where IdCommunity='$mensagemcod->IdCommunity'")or die(mysql_error());;
$rcont375555 = mysql_num_rows($query375555r);
//usuário banido
//moderador
//verifica se eu fui convidado para comunidade particular


//
$query = mysql_query("SELECT UserFotoThumb,UserId,UserName,UserPais,NikName,ccuserid FROM users  where  UserId='$mensagemcod->UserIdPro' limit 1 ");
 $mensagem = mysql_fetch_object($query);
//mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and readNoti<>'yes') ")or die(mysql_error());; 

if ($mensagemcod->CommunityPrivacy=='1'){$aux_img="lock.png"; $aux_privacy="Particular";};
if ($mensagemcod->CommunityPrivacy=='2'){$aux_img="dyuue8je.png"; $aux_privacy="Pública";};
$query55kk = mysql_query("SELECT * FROM forum where  IdCommunity='$mensagemcod->IdCommunity'  ")or die(mysql_error());
$rcont334kkk = mysql_num_rows($query55kk);

             
$url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
$aux_id_custon_profi=explode( '/' , $url );
$aux_id_profile=($aux_id_custon_profi[1]);

$cod_communitie="$aux_id_profile/$mensagemcod->IdOrder";
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//visitantes da comunidade
 

//variáveis para verificar comunidade válidade
if ($mensagemcod->AboutComm!='' && $mensagemcod->CommunityImg!='' && $mensagemcod->category!='0'){
 $var_img=true;
 $var_about=true;
  $var_categ=true; 
 
};

if ($Count_memm > '100') {
  $var_members=true;
  
};  

$query55wewewewe = mysql_query("SELECT IdCommunity FROM forum where  IdCommunity='$mensagemcod->IdCommunity'  ")or die(mysql_error());
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

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o
              
 include_once ("transl8uu3j.php");
 //pageviews
    mysql_query("INSERT INTO page_views (dia,mes,tot,id) VALUES ('".date('d')."','".date('m')."','1','".date('d')."".date('m')."') ON DUPLICATE KEY UPDATE tot = tot+1");
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html dir="ltr" xml:lang="pt-br" lang="pt-br"
    xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta name="verification" content="497d987a11bdca7c89bff496ef40e45f" />
 <?php flush ();?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="<?php echo  $mensagemcod->AboutComm ; ?>"/>
<meta property="og:title" content="orkuti" /> 
<meta name="keywords" content="amigos,mensagens,pessoas,orkut,rede,colegas,scraps,social,comunidades,escola,jovens,net,mundo,fotos,peoples,friends,network" />
<meta property="og:description" content="<?php echo  $mensagemcod->AboutComm ; ?>" /> 
<meta property="og:image" content="/bg_community/<?php if ($mensagemcod->CommunityImg !=''){ echo $mensagemcod->CommunityImg;}else{ echo "iwu_poweo928C_093_large.jpg";};?>" />
<meta property="og:type" content="orkuti"/>
<meta name="viewport" content="width=device-width">
<meta property="og:url" content="https://orkuti.net" />
<meta property="og:site_name" content="Orkuti" />
<link rel="image_src" href="/bg_community/<?php if ($mensagemcod->CommunityImg !=''){ echo $mensagemcod->CommunityImg;}else{ echo "iwu_poweo928C_093_large.jpg";};?>" />
<link rel="shortcut icon" href="/img/icon_001.png" />
<meta name="language" content="<?php ECHO IDIOMAUSER;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="index,follow"/>
<link type="text/css" rel="stylesheet" href="/css/style_299Nmsjhome.css?<?php echo time();?>" />
<link type="text/css" href="/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="/css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="/static/jquery1.5.2jquery.min.js"></script>
<script src="/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery_main_877u792.js?<?php echo time();?>"></script>
<script type="text/javascript" src="/js/jquery_tr_03287h.js"></script>

<title>orkuti-<?php echo $mensagemcod->CommunityName;?></title>
<script type="text/javascript">
var isjjeuue77374y="<?php echo $mensagemcod->IdOrder;?>";
var eqweyfwoyfwfjekj88="<?php echo $mensagemcod->IdCommunity;?>";

function aefyfwryyw886(){
$('#com_832ukfwhe').fadeIn();

load_forum_93288(isjjeuue77374y,eqweyfwoyfwfjekj88);	
	
};
</script>
</head>
<input type="hidden"  value="<?php echo $cod_communitie?>"id="sjdjsadoiewe787474uuhr">
<body class="iocover" style="background-color: #0072ff; background-image:url(/tems_comm/<?php echo $mensagemcod->tems;?>)" >
<div id="container"  > 
<div id="back_ground" >
	
 	<div id="fund_trans" style="width: 100%;display:none; height: 100%;; position:fixed;left:0px;top:0px; background-image: url('/imagens_rsrc/semi-transparent.png'); background-repeat: repeat"></div>
 	</div>
<div id="main_container" style="overflow-x:auto;">
     <div style="position: relative; width:90%; height:100% ;margin: 0px auto; top: 10px; "> 
     <span style="font-family: arial, Helvetica, sans-serif; font-size: 19px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 4px; text-shadow:#333333 1px 1px 1px; right: 10px;"><?php echo SEUSUARIO;?></span>
                <label onClick="window.location='https://orkuti.net/'"  
            style="font-family: arial, Helvetica, sans-serif; font-size: 20px;z-index:300; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-color: #336699; border: 1px solid #336699; padding: 10px 30px 10px 30px; position: absolute; top:35px; width: auto; right: 10px;" 
        class="bot_log"><?php echo ENTRAR;?></label>
        
    
              <div id="main_container_communities" 
            
            style="position: relative; margin: 0px auto;display:; width:970px;padding-top:80px; min-height:600px;zoom:1; clear: both;">
              <label  style="font-family: 'open sans', arial, sans-serif; margin: 0px auto; line-height: 30px;cursor:pointer; font-size:34px; font-weight:normal; color: #FFFFFF; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; position: absolute; left: 0px; top:20px;text-shadow:#666666 1px 1px 1px;"><?php echo $mensagemcod->CommunityName;?></label>
  
            <!-- newpanel -->
<style>
#UserMsgForum{
position: relative;
  left: 0px; 
  top: 3px; 
  padding-top:5px;
  padding-left:5px;
  width: 468px;
   height: 59px;
overflow: hidden;
margin-left:0px;
font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 13px; 
  color: #333333;
   font-style: normal;
    font-variant: normal;
     letter-spacing: normal;
      orphans: 2;
      font-weight: normal;
       text-align: -webkit-auto;
        text-indent: 0px; 
        text-transform: none;
         white-space: normal; 
         widows: 2;
          word-spacing: 0px; 
          -webkit-text-size-adjust: auto; 
          -webkit-text-stroke-width: 0px; 
          background-color: rgb(255, 255, 255);
resize:none;
border: 1px solid #E6E6E6;

}
.enviar_1454
    {
        padding: 5px 12px;
            text-align:center;       
            -moz-border-radius:   2px 2px  2px 2px; 
            border-radius:  2px 2px  2px 2px;  
            height: auto;
            border: 1px solid #DFDFDF;
            background:#F2F2F2;
            font-family: sans-serif;
            font-size: 13px;
            font-weight: bold; 
            font-style: normal;
            font-variant: normal; 
            color: #666666;
            z-index:90;
            position:absolute;
   right:5px;  
 top: 3px;
 
           
 
 }
.enviar_1454:hover{

border: 1px solid #C8C8C8;
 cursor:pointer;cursor:hand;
   color: #333333;
  

}
 div.jHtmlArea { border: solid 1px #ccc; }
        
        .share_input{
font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 14px; 
  color: #666666;
   font-style: normal;
    font-variant: normal;
     letter-spacing: normal;
      orphans: 2;
      font-weight: normal;
       text-align: -webkit-auto;
        text-indent: 0px; 
        text-transform: none;
         white-space: normal; 
         widows: 2;
          word-spacing: 0px; 
          -webkit-text-size-adjust: auto; 
          -webkit-text-stroke-width: 0px; 
          background-color: rgb(255, 255, 255);
outline:none;
margin: 10px 5px 10px 10px;
  width:400px;
   border: 1px none #FFFFFF;
    
     min-height:43px;
max-height:400px;

}
.showpopover{

overflow: hidden; 
   
resize:none;
}
div.color-picker { border-left: 1px solid #000; border-top: 1px solid #000; position: absolute; left: 0px; top: 0px; padding: 0px; }
div.color-picker ul { list-style: none; padding: 0px; margin: 0px; float: left; }
div.color-picker ul li { display: block; width: 15px; height: 15px; border-right: 1px solid #000; border-bottom: 1px solid #000; margin: 0px; float: left; cursor: pointer; }
.ksiieoe838833ue{
visibility:hidden; 


}
.lloepowpoei83838:hover > .ksiieoe838833ue{
visibility:visible; 


}
.ksiieoe838833ue2{
visibility:hidden; 


}
.lloepowpoei838382:hover   + .ksiieoe838833ue2{
visibility:visible; 


}
/* The CSS */
select {
    padding:3px;
    margin: 0;
    border:1px solid #ccc;
    
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
   
}

/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

.oiue873474edithiden {position:relative;display:none;}
.oiue873474edithiden:after {
    content:'<>';
    font:11px "Consolas", monospace;
    color:#aaa;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
.oiue873474edithiden:before {
    content:'';
    right:5px; top:-2px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}
</style><div id="left_conatiner_new" 
                style="; position: relative; width:175px; height: auto; float: left">
                <!-- card -->
        <div id="ksiiofefwjkefjjrkfrjkfrf" class="boradsemquina3 sombra_padrao_bottom" 
     style="background-color: #333333; position: relative; width: 175px;margin-bottom: 10px;margin-top:10px; height: 273px;display:; top: 0px; left: 0px;">
     <div id="visualizar_new_capa" style="width: 100%; height: 100%" >
     <img  id="load_22" src="/imagens_rsrc/jKEcVPZFk-2.gif" 
       style="position: absolute; top: 100px; left:10px; display: none;">
    
       <img class="boradsemquina3"
            src="<?php  if ($mensagemcod->CommunityImg !=''){ ?>/cropImg.php?arquivo=bg_community/<?php echo $mensagemcod->CommunityImg;?>&largura=175&altura=273<?php }else{ echo "/bg_community/iwu_poweo928C_093_thumb.png";};?>" 
            
            style=" width:175px; height:273px; position: absolute; z-index: 100;" /></div>
            
       
           </div>
<!-- card -->   
                <div class="boradsemquina3 men sombra_padrao_bottom" 
                    
                    
                    
                    
                    style="position: relative; width: 100%; height:auto; margin-bottom: 10px;padding-top:5px; background-color: #FFFFFF;">
                     <div style="position: relative; width: 165px;z-index:101;margi-bottom:10px; height:auto; padding-right:5px; padding-left:5px; text-align: center;">
        <label onclick="call_pane_comm('<?php echo $mensagemcod->IdCommunity;?>','0');" style="font-family: arial, Helvetica, sans-serif;cursor:pointer; font-size: 16px; font-weight: bold; font-style: normal; font-variant: normal; color:#333333;word-wrap: break-word;"><?php echo $mensagemcod->CommunityName;?></label></div>
   
                 <div class="estilodeboraesombra2" onclick="refreshdiv_MsgPost(),view_post_load_9()"
                    
                    style="position: relative;  height: 25px; margin-bottom: 10px;display:none;">
                    <img  src="/img/chat.png" style="margin-left: 2px; top:3px;position: relative; float: left;" /><label class="men_new99eje_normal">Bate-papo</label><label id="lak_scrap" style="padding: 2px 4px 2px 4px;display:none; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; background-color: #B1CBE4; position: absolute; top: 3px; left: 115px;" 
                            class="radius_3px"></label><input id="lokshh_88399fjp" type="hidden"></input></div>
            
                           
                            <div class="men_new_90349e com_09ehhjwkahs"  onclick="show_tour_comm()" 
                    
                    style="position: relative;  height: 25px; margin-bottom: 10px;">
                    <img  src="/img/3fdfee.png" style="margin-left: 2px;top:3px; position: relative; float: left;" /><label 
                        class="men_new99eje_normal ">Tutorial</label></div>
                            <div class="men_new_90349e" onclick="view_members_ship('<?php echo $mensagemcod->IdCommunity;?>');"
                    
                    style="position: relative;  height: 25px; margin-bottom: 10px;">
                    <img  src="/img/swde9d9ediee.png" style="margin-left: 2px;top:3px; position: relative; float: left;" /><label 
                        class="men_new99eje_normal" >Membros</label></div>
                   </div>
                          <?php   
    $query375555r4 = mysql_query("SELECT * FROM list_community_user  where IdCommunity='$idcomm' and manager_comm='1' order by lastactivity DESC  ")or die(mysql_error());;
 
    $rcont37kkw = mysql_num_rows($query375555r4);
    if ($rcont37kkw!='0'){
    ?>
                                         <div  class="boradsemquina3 sombra_padrao_bottom" 
    style="position: relative; width: 175px; height:auto; background-color: #FFFFFF;"> 
    <div style="padding-top: 10px; padding-left: 10px"><span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:bold; font-style: normal; font-variant: normal; color: #808080;">Moderadores</span></div>
   
      
    <div></div>
 <div style="position: relative;margin-left:5px; clear: both; width:165px;margin-right:5px;"></div>
    
 <?php    
    while($mensagemcomp2euuwi4 = mysql_fetch_object($query375555r4)){
    $querycomp2rr = mysql_query("SELECT UserId,UserName,UserFotoThumb FROM users  where   UserId='$mensagemcomp2euuwi4->UserId' limit 1 ");
    $mensagemcomp2euuwi4kw = mysql_fetch_object($querycomp2rr);
    
    ?>
    <div style=" position: relative; width:100%; height: auto;  ">
   <div style="margin: 10px; position: relative; width: 50px; height: 50px; float: left; "><img onclick="view_prof('<?php echo $mensagemcomp2euuwi4kw->UserId ?>');" style=" position: relative; width:50px; height:50px;" src="/profile_thumbs/<?php echo $mensagemcomp2euuwi4kw->UserFotoThumb ?>" class="radius_150px"/>
    <?php  if(time()- $mensagemcomp2euuwi4->lastactivity < '120') { ;?>
     <img src="/img/green_8378473287_iweowu_2w.png" 
         style=" position:absolute;top:30px; right:-2px;"title="Online" /><?php };?>
    </div>
    <div style=" position: relative; width:100px; height: auto; float: left;  top: 0px; left: 0px; margin-top: 10px;">
        <label onclick="view_prof('<?php echo $mensagemcomp2euuwi4kw->UserId ?>');" style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #0066CC"><?php echo $mensagemcomp2euuwi4kw->UserName?></label><p>
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #333333;">Moderador</span>
        </p></div>
   
    <div style="clear: both"></div></div>
    <?php };?>
        
        <div style="margin: 10px; position: relative; width:168px; height: auto;  top: 0px; left: 0px;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #0066CC"><?php $aux373yur=date('Y-m-d H:i:s',$mensagemcod->timestamp);  echo  Datetodays($aux373yur);?>
        </span></div><div style="clear:both"></div></div><?php };?>
        
         </div>
  <!-- panel-center -->       
                     
    <div id="new_99edujebnnne" style="position: relative; display:;width:780px;margin-top:0px; min-height:500px; float: left; margin-left: 10px;">
                        <div id="edit_kqwdhu73u" 
                                style="position: relative; width:500px;margin-top:10px; height: 50px; background-color: #3366CC; display: none;">
                            <div style="margin: 5px">
                                <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 14px; left: 5px;">Você está editando sua comunidade ,<br>quando terminar clique em salvar.</span><label onclick="salv_03r982hhshhh('<?php echo $mensagemcod->IdCommunity;?>');"
                                    class="botao_cinza" 
                                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; text-align: center; vertical-align: middle; background-color: #F8F8F8; border: 1px solid #EAEAEA; padding: 5px 10px 5px 10px; position: absolute; right: 100px; top: 11px; cursor: pointer">Salvar</label><label onclick="canc_03r982hhshhh('<?php echo $mensagemcod->IdCommunity;?>');"
                                    class="botao_cinza" 
                                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; text-align: center; vertical-align: middle; background-color: #F8F8F8; border: 1px solid #EAEAEA; padding: 5px 10px 5px 10px; position: absolute; right: 10px; top: 11px; cursor: pointer">Cancelar</label></div></div>
<input id="id_9883uhejjehh" type="hidden" value="<?php echo $mensagemcod->IdOrder;?>">
<input id="id_9883uhejjehhidcomm" type="hidden" value="<?php echo $mensagemcod->IdCommunity;?>">

<div id="com_832ukfwhe"  style="position: relative;display: ; width: 780px">
  
        
    
    <div style="position: relative; width: 780px; height: auto; margin-top: 10px">
    <div id="members_ship_comm" style="position: relative; width: 500px; height: auto;display:none;"></div>
    <div id="col_left_com" 
        style="position: relative; width: 500px; height: auto; float: left; margin-right: 10px;">
        <!-- about --> 
    <div id="slid_show" class="user_foto_borda_superior"
        style=" background-color: #FFFFFF; position: relative;display:; width:500px; min-height:273px;">
        <div style="position:relative; width:480px ;padding-top:10px; height:auto;margin:0px 10px 10px 10px;   ">
        <div  class="lloepowpoei83838"style="position:relative;">
       
        
         <label id="ikkaosoas99329YYY" onclick="call_pane_comm('<?php echo $mensagemcod->IdCommunity;?>','0');	
			"
        
        
            
            
            
            
            style="text-shadow:#FFFFFF 1px 1px 1px;font-family: arial, Helvetica, sans-serif; font-size: 20px; font-weight: normal;cursor:pointer; font-style: normal; font-variant: normal; color: #666666; z-index: 101; position:relative; left:0px; 1px:;;"><?php echo LimiteFrase($mensagemcod->CommunityName,15);?> </label>
            
            
             <?php if ($mensagemcod->verifi=='1'){?><span style="position:absolute;width:20px;top:2px;cursor:pointer;z-index:100; "><img class="lloepowpoei838382" style="width:20px;" src="/img/Select8348343i_93943.png" ><div  class="ksiieoe838833ue2 boradsemquina3"
         
                    style="position: absolute; width:150px; height:auto;left:-10px; top:35px; background-color: #555454; z-index:99;display:;">
         <img src="/img/k0399493.png" 
             style="z-index: 102;position: absolute; top: -14px; left: 10px;" />
         <div style="width: 95%; margin: 5px; position: relative; display: block;">
                        <span style=" z-index: 102;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FBFBFB">Comunidade verificada</span></div>
                        
                        </div></span><?php };?><label id="sdksdieii23888"   
        
            
            
            
            
            
            
            style="border: 2px solid #FF0000; text-shadow:#666666 1px 1px 1px; font-family: arial, Helvetica, sans-serif; font-size: 40px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; z-index: 101; position:relative; left: 0px; 1px:; ; display:none ;" 
            contenteditable="true"><?php echo LimiteFrase($mensagemcod->CommunityName,25);?></label>
                    </div> <div style="position:relative;margin-top:10px;">
            <div style="position:relative;float:left;width:215px;min-height:50px;">
            <span class="8iuru499384ijfjej" style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #808080;">Criada em:<?php $aux373yur=date('d/m/Y',$mensagemcod->timestamp);  echo  ($aux373yur);?>
        </span><br> 
         <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #808080;">Tipo:
        <label class="oiue873474edithiden">
    <select id="okoe308484">
        <option selected><?php if ($mensagemcod->CommunityPrivacy=='2')  { echo  ("Público");}else{ echo "Privado";};?></option>
        <option>Privado</option>
         <option>Público</option>
    </select>
</label><span class="oiue873474editshow"><?php if ($mensagemcod->CommunityPrivacy=='2')  { echo  ("Público");}else{ echo "Privado";};?></span>
        </span>
        
         <br><span class="8iuru499384ijfjej" style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #808080;">Proprietário:<a style="color:#0066CC;text-decoration:none;" href="https://orkuti.net/<?php echo $mensagem->NikName;?>" target='_blank'><?php  echo  ($mensagem->UserName);?></a>
        </span><br><span class="8iuru499384ijfjej" style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #808080;"><?php 
        $query55wewewewe5555 = mysql_query("SELECT idcom FROM visitor_comu where  idcom='$mensagemcod->IdCommunity'  ")or die(mysql_error());
$rcont37kkw3545r4f45tssss = mysql_num_rows($query55wewewewe5555);
if($rcont37kkw3545r4f45tssss > '1'){ echo "($rcont37kkw3545r4f45tssss) visualizações";};
        ?></span></div><div style="position:relative;float:left;width:255px;min-height:50px;margin-left:10px;">
           <?php if ($mensagem->UserPais!='' or $mensagemcod->loc!='') {?> <span class="8iuru499384ijfjej" style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #808080;">Local:<?php if ($mensagemcod->loc !='') { echo  LimiteFrase($mensagemcod->loc,25);}else{ echo LimiteFrase($mensagem->UserPais,25) ;};?>
        </span><br><?php };?> 
       <span class="8iuru499384ijfjej" style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #808080;">Idioma:<?php  echo  lang_trans($mensagemcod->lang);?>
        </span><br>
       
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #808080;">Categoria:
        <?php $yueuecategdi="";?>
        <span class="oiue873474editshow"><?php 
$querycod8343849 = mysql_query("SELECT text FROM category_communities  where category='$mensagemcod->category'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849);
        if ($mensagemcod->category!='0') { echo  ($mensagemcod783748347348387->text);$yueuecategdi=$mensagemcod783748347348387->text;}else{ echo "outros" ;$yueuecategdi="outros";};?></span>
        <label class="oiue873474edithiden">
    <select id="okoe308484eee">
        <option selected><?php echo $yueuecategdi ;?> </option>
    <?php $querycod83438492 = mysql_query("SELECT text FROM category_communities ")or die(mysql_error());;
while ($mensagemcod7837483473483872 = mysql_fetch_object($querycod83438492)) {?>
        <option><?php echo $mensagemcod7837483473483872->text ;?> </option>
        <?php };?>
        
        
    </select>
</label>
        </span></div><div style="clear:both;"></div></div>
        <div class="lloepowpoei83838" style="margin-top:10px;padding-bottom:10px;border-top-style: solid; border-top-width: 1px; 
        border-top-color: #F0F0F0;position:relative;width:480px ;height: auto;">
        
        
        <div style="position:relative;margin-top:10px;">
        <!-- detail -->
        <?php if (($mensagemcod->AboutComm!='')){?>
   <div style="position: relative;background-color: #FFFFFF; width:480px; height: auto;word-wrap: break-word; " 
        id="ooskaksahhdshhdsd">
       <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: reltive"><?php echo LimiteFrase(nl2br($mensagemcod->AboutComm),150);?></span></div>
    <div style=" position: relative; width:480px; height: auto; word-wrap: break-word;  display: none;" 
        id="olksahdhh888ue">
       <span id="lsdiideuiYYHHH" style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: reltive;border: 2px solid #FF0000;" contenteditable="true"><?php echo LimiteFrase(nl2br($mensagemcod->AboutComm),150);?></span></div><?php };if (($mensagemcod->UserIdPro==USERID_ID) and ($mensagemcod->AboutComm=='')){?> 
       <div style="position: relative; width: 270px; height: 137px; top: 0px; left: 0px;" 
        id="write_abaout_00e">
        <textarea id="campo"  name="campo" class="edit_text_sobre"  placeholder="Escreva algo sobre sua comunidade..."
            onkeyup="mostrarResultado(this.value,200,'spcontando');contarCaracteres(this.value,200,'sprestante')" 
            style="background-color: #FFFFFF;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; border-style: none; position: relative; width:400px; height: 80px; margin-top: 15px; margin-left: 15px;"></textarea><br />
<span id="spcontando" 
            style="font-family:lucida grande,tahoma,verdana,arial,sans-serif; font-size: 11px; font-weight: normal; font-style: normal; font-variant: normal; color: #999999; position:absolute; top: 114px; left: 8px;" ></span><br />
<span id="sprestante"  
            style="font-family:lucida grande,tahoma,verdana,arial,sans-serif; font-size: 11px; font-weight: normal; font-style: normal; font-variant: normal; color: #999999; position:absolute; top: 97px; left: 8px;"></span>
        <label onclick="write_about_comm('<?php echo $mensagemcod->IdOrder?>','<?php echo $mensagemcod->IdCommunity;?>');" class="botton_cinza" 
            style="padding: 5px 7px 5px 7px; position: absolute; bottom:10px; right: 10px; vertical-align: middle; text-align: center;">Salvar</label><img 
            id="load_99348" src="/imagens_rsrc/o_VC7o1fZFp.gif" 
            style="position: absolute; top: 100px; left: 108px;display:none;"></img></div><?php };?>
        <!--  delati -->
        
        </div>
        <!-- html -->
        <?php if ($mensagemcod->detail!='') {?>
        <div class="oiue873474editshow2 lloepowpoei83838" style="position:relative;margin:10px auto;width:455px;overflow:hidden; max-height:400;word-wrap: break-word;">
                <span style="font-family: arial, Helvetica, sans-serif; word-wrap: break-word;font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333"><?php echo (($mensagemcod->detail));?></span></div>
        <?php }else{ ?>
        <div class="oiue873474editshow2" style="position: relative; margin: 10px auto; width: 455px; height: 200px; word-wrap: break-word; "><img style="width: 455px;" src="/img/ie8euIlsk.jpg">
       </div>
       <?php };?>
        
        <!-- html -->
        </div>
            </div>
  
           </div>
      <!-- about -->
      <?php if ($mensagemcod->dell_temp=='0') {?> 
        
<div id="load_post2" style=" background-color: #EFEFEF; position: absolute; width: 500px; height: 100%;  z-index: 100; display:none;"       class="transparencia"><img src="/imagens_rsrc/245.GIF"   style="position: absolute; top: 190px; left: 140px; z-index: 200;"/></div>

   <?php }else{?>
  <!-- exclusão -->
  <div style="border: 1px solid #a93333; position: relative; width:500px; height:80px; background-color: #FFFFFF; margin-top: 10px">
    <div style="position: relative; float: left; background-color: #a93333; top: 0px; left: 0px; height:80px; width: 66px;">
        <img src="/img/War844958ning.png" 
            style="position: absolute; width: 50px; height: 50px; top: 13px; left: 7px;"/></div>
    <div style="position: relative; float: left; margin: 10px; top: 0px; left: 0px; width:350px; height: 47px;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight:normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 16px; left: 0px;">Esta comunidade está programada para ser excluída em 10 dias</span><?php if ($rcont37m!='0' or $mensagemcod->UserIdPro==USERID_ID){?><label 
        id="ii934ydssdcgdcey4"  onclick="i98377yywgv('<?php echo $mensagemcod->IdCommunity;?>')"  style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; font-style: normal; font-variant: normal; color: #0066CC; position: absolute; cursor: pointer; right: 25px;bottom:-10px;">Cancelar exclusão?</label><?php };?></div></div> 
        <!-- exclusão --><?php }?>  
</div><div id="col_right_post" 
        style="position: relative; width: 270px; float: left">
        <div id="right_container_ncommmm"  style=" position:relative; width:270px; height:auto ; ">
        
        <!-- membros --><div id="kakaoslwwwa99i95t955tuuf"  style="position: relative; width:270px;display:; height:auto;margin-bottom:10px;">
        <div  class="boradsemquina3 sombra_padrao_bottom" 
    style=" position: relative; display:; margin-bottom:5px; background-color:#FFFFFF;  width:270px; max-height:300px">
<div style="position: relative; width: 270px; height:auto; ">
    <div style="position: relative; width:250px; height: auto;padding:10px;">
 <?php 
 

$query173djjd = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$mensagemcod->IdCommunity'  order by IdOrder asc ")or die(mysql_error());;
$rcont37p = mysql_num_rows($query173djjd);
if ($rcont37p!=''){


 
 
 ?>   
    
        <span   class="text_colleft_nome">Membros ( <?php echo $rcont37p;?> )</span><label onclick="view_members_ship('<?php echo $auc_cod;?>');"  
             style="position: absolute; right:10px;font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 12px; 
  color: #3366CC;
   font-style: normal;
    font-variant: normal;
     letter-spacing: normal;
      orphans: 2;
      font-weight: normal;
       text-align: -webkit-auto;
        text-indent: 0px; 
        text-transform: none;
         white-space: normal; 
         widows: 2;
          word-spacing: 0px; 
          -webkit-text-size-adjust: auto; 
          -webkit-text-stroke-width: 0px; 
          background-color: rgb(255, 255, 255);
cursor:pointer;


            ">Ver todos</label>
            <?php  $ueu88="10px";;?>
        <div style="position: relative; width:250px; margin-top:<?php echo $ueu88;?>; height: auto;">
        <?php
$query17 = mysql_query("SELECT UserId,lastactivity FROM list_community_user  where (IdCommunity='$mensagemcod->IdCommunity')  order by lastactivity DESC  limit 8 ")or die(mysql_error());;
        
        
 while ($mensagem = mysql_fetch_object($query17)){

 
         
$querycomp2 = mysql_query("SELECT UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName  FROM users  where   UserId='".$mensagem->UserId."' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	    
          
        
    
        
      
        ?>
        
            <div onclick="window.location='https://orkuti.net/<?php echo $mensagemcomp2->NikName ;?>';"style="position: relative; width:50px; height:90px; float: left; margin-right: 10px;">
                  <img src="/profile_thumbs/<?php echo $mensagemcomp2->UserFotoThumb ;?>"  style="width: 50px; height: 50px; position: relative" /><?php  if(time()- $mensagem->lastactivity < '120') { ;?><img src="/img/green_8378473287_iweowu_2w.png" style=" position:absolute;top:37px;right:0px;"title="Online" /><?php };?><label 
                    
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #336699; position: relative; top:4px; left: 0px;word-wrap: break-word;"><?php echo ocultaTexto($mensagemcomp2->UserName); ?></label></div>            
            <?php
        };?><div style="clear: both;"></div></div>
            </div>
            
        <?php };?>   
            </div>    
    </div>
        
        </div> 
         
         <!-- comunidades relacionadas --><div id="kakaoslwwwa99i95t955tuuf42"  style="position: relative; width:270px;display:; height:auto;">
         
         <div  class="boradsemquina3 sombra_padrao_bottom" 
    style=" position: relative; display:; margin-bottom:5px; background-color:#FFFFFF;  width:270px; max-height:300px">
<div style="position: relative; width: 270px; height:auto; ">
    <div style="position: relative; width:250px; height: auto;padding:10px;">


          <span class="text_colleft_nome">Comunidades relacionadas</span><label    
             style="position: absolute; right:0px;top:0px;display:none;font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 12px; 
  color: #3366CC;
   font-style: normal;
    font-variant: normal;
     letter-spacing: normal;
      orphans: 2;
      font-weight: normal;
       text-align: -webkit-auto;
        text-indent: 0px; 
        text-transform: none;
         white-space: normal; 
         widows: 2;
          word-spacing: 0px; 
          -webkit-text-size-adjust: auto; 
          -webkit-text-stroke-width: 0px; 
          background-color: rgb(255, 255, 255);
cursor:pointer;


            "></label>
            <?php 
              $querycodriie = mysql_query("SELECT category FROM community_users  where (IdCommunity='$mensagemcod->IdCommunity') limit 1")or die(mysql_error());;
           $mensagemcodfffuu8w8r4u = mysql_fetch_object($querycodriie);
            if ($mensagemcodfffuu8w8r4u->category!=''){
            ?>
             <div style="position: relative; width:250px; margin-top:10px; height: auto;">
   
               <?php 
               
         
           
$querycodddddfff = mysql_query("SELECT community_users.IdCommunity idomm,community_users.CommunityImg,community_users.CommunityName,community_users.UserIdPro , community_users.IdOrder FROM community_users where  (community_users.category='".$mensagemcodfffuu8w8r4u->category."'  and community_users.CommunityImg<>'' and community_users.IdCommunity<>'$auc_cod')  ORDER BY rand() limit 6")or die(mysql_error());;
  $rcontqudsdsdt = mysql_num_rows($querycodddddfff);
if ($rcontqudsdsdt!=''){
            
               
          
while ($mensagemcodfffuuu = mysql_fetch_object($querycodddddfff)){
 
           
           ?><a href="https://orkuti.net/communities/<?php echo $mensagemcodfffuuu->IdOrder;?>"><div 
              
              
               
               
               style="position: relative; width: 80px; height:100px; top: 0px; left: 0px; float: left; margin-right: 2px;">
              <div style="position: relative; width: 80px; height: 80px;"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($mensagemcodfffuuu->CommunityImg !=''){ echo $mensagemcodfffuuu->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=80&altura=80"></div><label 
                    
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #336699;word-wrap: break-word; position: relative; top:0px; left: 0px;"><?php echo ocultaTexto($mensagemcodfffuuu->CommunityName) ;?></label></div></a>
                    <?php ;};}else{ ?>
                    <div>
                    <span  style="position: relative;margin-top:5px;margin-bottom:5px;font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 12px; 
  color: #3366CC;
   font-style: normal;
    font-variant: normal;
     letter-spacing: normal;
      orphans: 2;
      font-weight: normal;
       text-align: -webkit-auto;
        text-indent: 0px; 
        text-transform: none;
         white-space: normal; 
         widows: 2;
          word-spacing: 0px; 
          -webkit-text-size-adjust: auto; 
          -webkit-text-stroke-width: 0px; 
          background-color: rgb(255, 255, 255);



            ">Ainda não encontramos uma comunidade relacionada! Aguarde...</span><br>
                    <img style="position: relative;margin:0px auto;" src="/img/392ur4uhryyeFRE.jpg">
                    </div>
                    
                    <?php };?></div><?php };?>
             
              <div style="clear: both"></div></div></div>
    </div>
         
         </div> 
        
   </div> 
  <div style="clear: both"></div></div>
  
   </div></div></div>
   
           
            
            
            <!-- newpanel -->
            
            </div>      

</div><div id="foot_main" 
            
            
        
        
         style="position:relative;width:100%; height: 30px;  z-index: 100; margin:40px  auto; text-align: center;">
 <span onclick="window.location='/about.php'" style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;cursor:pointer"><?php echo SOBREPRINCIPAL;?></span><span onclick="window.location='/terms.php'" style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal;cursor:pointer; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;"><?php echo TERMOSPRINCIPAL;?></span><span onclick="window.location='/privacy.php'" style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;cursor:pointer"><?php echo PRIVACIDADEPRINCIAPL;?></span><br></br>
         <span style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;cursor:pointer;"  class="pt" onclick="ChangeLangNew('pt-br','lo')">Português(Brasil)</span><span style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF;text-shadow:#333333 1px 1px 1px; margin-right: 20px;cursor:pointer;display:;"  class="en" onclick="ChangeLangNew('en','lo')">English(US)</span>        
</div>  </div></div>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65567517-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27https://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="https://www.histats.com" target="_blank" title="" ><script  type="text/javascript" >
try {Histats.start(1,3473147,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="https://www.histats.com" target="_blank"><img  src="https://sstatic1.histats.com/0.gif?3473147&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->
</body></html>
 
<?php
  }
?>
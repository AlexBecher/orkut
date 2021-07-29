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

//conta depoimentos
 $queryRRTT= mysql_query(" SELECT UserIdTest FROM testimonials  where  UserIdTest='".$UserId_Cokie."' ")or die(mysql_error()) ;
     $rsTT = mysql_num_rows($queryRRTT);
//conta lembretes
$queryRRTT2 = mysql_query("SELECT users.UserId,users.UserName,users.UserFotoPerfil,users.UserEstado,users.UserCidade,usercomp.UsConv,usercomp.UsDest,usercomp.UsAck FROM users,usercomp  Where (UsConv<>'' and UsDest='".$UserId_Cokie."' and UsAck='')and users.UserId=usercomp.UsConv order by usercomp.Idorder  ");
 $rsTT22 = mysql_num_rows($queryRRTT2);
         
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

    
//verifica se visitei nova home
$Var_home_new=false;
$sel=mysql_query("SELECT new_home FROM notify_data_user where ccuserid='".CCUSERIDI."' and new_home='1' limit 1 ")or die(mysql_error());
$aux_ajjdhjjd=mysql_num_rows($sel);
if ($aux_ajjdhjjd=='') {
$Var_home_new=true;

};

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xml:lang="pt-br" lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php flush ();?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Orkuti é uma rede social baseada na maior rede social de todos os tempos Orkut.Nossa idéia é resgatar os bons tempos do Orkut"/>
<meta property="og:title" content="orkuti" /> 
<meta name="keywords" content="orkut, orkut2, orkut 2, orkut entrar, novo orkut, orkut novo, orkut login, orkuti, orkute, id profile, idprofile, Orkut login, Orkut login entrar, Orkut entrar agora, Entrar no orku, orkut sign, Okut, Orkut Account login, Orkut sign in,mensagens,pessoas,orkut,rede,colegas,scraps,social,comunidades,escola,jovens,net,mundo,fotos,peoples,friends,network" />
<meta property="og:description" content="Orkuti é uma rede social baseada na maior rede social de todos os tempos Orkut.Nossa idéia é resgatar os bons tempos do Orkut" /> 
<meta property="og:image" content="bg/qet37237ue3u3434.png" />
<meta property="og:type" content="orkuti"/>
<meta property="og:url" content="https://orkuti.net" />
<meta property="og:site_name" content="Orkuti" />
<link rel="image_src" href="/bg/qet37237ue3u3434.png" />
<link rel="shortcut icon" href="/img/icon_001.png" />
<meta name="language" content="<?php ECHO IDIOMAUSER;?>" />
<meta name="robots" content="index,follow"/>
<link type="text/css" rel="stylesheet" href="/css/Cx_sjjXXCwhhw554.css" />
<link type="text/css" rel="stylesheet" href="/css/css_XSz_UHG773h_1803.css" />
<link type="text/css" rel="stylesheet" href="/css/style_20oeiprofne.css?<?php echo time();?>" />
<link rel="stylesheet" href="../dist/css/lightbox.css">
<script type="text/javascript"  src="../dist/js/lightbox-plus-jquery.min.js"></script>
<link type="text/css" href="/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="/css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="/static/jquery1.5.2jquery.min.js"></script>
<script src="/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery_main_877u791New.js?<?php echo time();?>"></script>
<script src="/js/jquery_prof_848us.js?<?php echo time();?>" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery_clock.js?<?php echo time();?>"></script>
<script type="text/javascript" src="/js/jquery_tr_03287h.js"></script>
<script type="text/javascript" src="/static/jquery.form.js"></script>
<script type="text/javascript" src="/static/autoresize.jquery.js"></script>
<script type="text/javascript" src="/js/notifyN.js?<?php echo time();?>"></script>
<link type="text/css" href="/cometchat/cometchatcss.php" rel="stylesheet" charset="utf-8">
<script type="text/javascript" src="/cometchat/cometchatjs.php" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="/css/spectrum.css">
<script type="text/javascript" src="/js/spectrum.js"></script>
<script type='text/javascript' src='/docs/toc.js'></script>
<script type='text/javascript' src='/docs/docs.js'></script>
<title>orkuti-<?php echo $UserName_cokie?></title>
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
<input type="hidden"  value="<?php echo $cod_communitie?>"id="sjdjsadoiewe787474uuhr">
<body bgcolor="#dae5ee" class="iocover" onload="iq8ueuue9736t();_883ieyyhsJK();" onFocus="getFocus();"onclick=" hide_search_box();on_men003();"  >
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
<div class="JU_ywhd"><input class="boradsemquina3 JUG_938ue" accesskey="/"id="busca_membro"name="busca_membro"onClick="clear_place();"    onkeyup="searcH_geral_people();" type="text" placeholder="<?php echo PLACEBUSCARPESSOASMEMBROS;?>"  maxlength="300" /><img class="lksHU765_oi"src="/img/lup_wdhwebjjJb.png" />
<div id="ser_user_people"></div></div><div class="_LKO7373uu">
<img class="boradsemquina3 botao_azul_ _iwe8e3ud tip_trigger _KHNbvSA" ttr="1" tree="<?php echo $UserId_Cokie?>" src="/img_news_2016/ic_account_box_white_48dp_1x.png"/>
<div class="estilodeboraesombra2 _eiuTool_938 _o_83u"><img class="_pwoUY_" src="/img_news_2016/ic_928deweweuwiw.png"/><div class="_owu655_o9"><span class="_9_outh_nc5" ><?php echo PROFILE;?></span></div></div>
<img class="boradsemquina3 botao_azul_ _iwe8e3ud tip_trigger _KHNbvSA" ttr="2" src="/img_news_2016/ic_group_work_white_48dp_1x.png"/>
<div class="estilodeboraesombra2 _eiuTool_938 _83iNMH3"><img class="_pwoUY_" src="/img_news_2016/ic_928deweweuwiw.png"/><div class="_owu655_o9"><span class="_9_outh_nc5" ><?php echo COMMUNITIESSS;?></span></div></div>
<img class="boradsemquina3 botao_azul_ _iwe8e3ud tip_trigger _KHNbvSA" ttr="3" src="/img_news_2016/ic_extension_white_48dp_1x.png"/>
<div class="estilodeboraesombra2 _eiuTool_938 _owii37CDF_"><img class="_pwoUY_" src="/img_news_2016/ic_928deweweuwiw.png"/><div class="_owu655_o9"><span class="_9_outh_nc5" ><?php echo THEMESS;?></span></div></div>
<img class="boradsemquina3 botao_azul_ _iwe8e3ud tip_trigger _KHNbvSAb" ttr="4"src="/img_news_2016/ic_widgets_white_48dp_1x.png"/>
<div class="estilodeboraesombra2 _eiuTool_938 Lpl_837Bgkw"><img class="_pwoUY_" src="/img_news_2016/ic_928deweweuwiw.png"/><div class="_owu655_o9"><span class="_9_outh_nc5" ><?php echo APLICATIONS;?></span></div></div>
<div class="clear"></div></div></div>
<div id="barr_contai_right"><div class="_lUYYGH3536"><img class="boradsemquina3 botao_azul_ _iwe8e3ud _pewoJHGF6737 men_icon_barr" src="/img_news_2016/ic_menu_white_48dp_1x.png" />
<div  class="estilodeboraesombra2 men_icon_barr" id="sub_men_main"><img class="_pLLJHtw53562"  src="/imagens_rsrc/point_29932inw2.png" /><ul class="ul_9393menu">
<a href="https://orkuti.net/<?php echo NIKNAMME; ?>"><li class="_peiie737KJGFE6"><div class="radius_150px _pwwojJGFR536y_ieu"><img class="radius_150px _pI_jh765_2wr"  src="/cropImg.php?arquivo=profile_img/<?php echo $UserFotoPerfil_Cokie;?>&largura=100&altura=100"  /></div>
<div class="_32eBVA12_93"><span class="L_837VCZZS_WWXX"><?php echo ocultaTexto($UserName,25);?></span></div></li></a>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="jjuw7e77yejhe();"><?php echo NOTIFICACOES;?> <img src="/img_news_2016/ic_add_alert_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_expl()"><?php echo POLITICASDEPRIVACIDADE;?><img src="/img_news_2016/ic_date_range_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_sobre();"><?php echo SOBREOORKUTI;?><img src="/img_news_2016/ic_new_releases_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="up_passjdi8993();"><?php echo CONFIGURACOESGERAL;?><img src="/img_news_2016/ic_settings_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_terms();"><?php echo TERMOSDEUSO;?><img src="/img_news_2016/ic_assignment_late_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="up_passjdi8993HJJha()"><?php echo SUGESTAOOUCRITICA;?><img src="/img_news_2016/ic_live_help_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>   
<li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="show_team_2();"><?php echo ORKUTITEAM;?><img src="/img_news_2016/ic_assignment_ind_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li>   
<a href="https://orkuti.net/logout.php"><li class="men_new_90349e3 fon_fault_all _ldsi373773ytehhn" onclick="jjuw7e77yejhe();"><?php echo SAIRGERAL;?><img src="/img_news_2016/ic_vertical_align_bottom_black_48dp_2x.png"  class="sobre_icon_bar _oepoHHF44253g"  /></li></a></ul></div>
<span class="_ow_oiwB_g363 noti_icon_barr"><img class="boradsemquina3 botao_azul_ _iwe8e3ud IC_owiJJh733" src="/img_news_2016/ic_notifications_active_white_48dp_1x.png"/>
<span class="b_owiB_02iei" id="load_djew898rrhjjw"></span></span><div class="estilodeboraesombra2" id="sub_mai_noti"><img class="_pLLJHtw53562" src="/imagens_rsrc/point_29932inw2.png" />
<div class="LJ663e3BNn_993" ><span class="Lkopq_5253h_ndbw520_"><?php echo NOTIFICACOES;?></span><img class="kj9_0_Xd"     src="/img/bell40_40.png"/></div><div id="vie_sodduonwnoti"class="Ol_XXY_028"></div><div style="clear:both"></div></div>
<span class="_ow_oiwB_g363 noti_icon_barrN"><img class="boradsemquina3 botao_azul_ _iwe8e3ud IC_owiJJh733" src="/img_news_2016/ic_supervisor_account_white_48dp_1x.png"/>
<span class="b_owiB_02iei" id="load_djew898rrhjjwn"></span></span><div class="estilodeboraesombra2" id="sub_mai_notin"><img class="_pLLJHtw53562" src="/imagens_rsrc/point_29932inw2.png" />
<div class="LJ663e3BNn_993" ><span class="Lkopq_5253h_ndbw520_"><?php echo NOTIFICACOESAMIZADES;?></span><img class="kj9_0_Xd"     src="/img/People-MSN40_40.png"/></div><div id="vie_sodduonwnotin"class="Ol_XXY_028"></div><div style="clear:both"></div></div>
<span class="_ow_oiwB_g363 noti_icon_barr3"><img class="boradsemquina3 botao_azul_ _iwe8e3ud IC_owiJJh733" src="/img_news_2016/ic_visibility_white_48dp_1x.png"/>
<span class="b_owiB_02iei" id="load_djew898rrhjjwss"></span></span><div class="estilodeboraesombra2" id="sub_mai_notifVisitor"><img class="_pLLJHtw53562" src="/imagens_rsrc/point_29932inw2.png" />
<div class="LJ663e3BNn_993" ><span class="Lkopq_5253h_ndbw520_"><?php echo VISITANTESPERFILMENU;?></span><img class="kj9_0_Xd"     src="/img/eye_inv.png"/></div><div id="vie_sodduonwnotie"class="Ol_XXY_028"></div><div style="clear:both"></div></div>
<div style="clear: both"></div></div> <div style="clear: both"></div></div><div style="clear: both"></div></div></div>
<!-- new barr -->           
<!-- main_container -->
<div id="global_conatiner" class="cl_divs_2723y">

   
            <table 
            style="position: relative; min-width: 975px; height: auto;border-collapse: collapse;
    border-spacing: 0;"><thead> 
	<tr>
	<td style="position: relative; width: 100%; height:100%;background-color: #000000;">
            <div 
            
            style="position: relative;margin:50px auto;  display:; max-width:100%; height:auto; ">
  <?php           
           if ($aux_id_profile!=''){

$game_sele=($aux_id_profile);;
//$game_sele=sanitize($_GET['codgame']);



if ($game_sele=='0101'){
?>
<input type="hidden"  value="Goodgame Empire"id="sjdjsadoiewe787474uuhr9888">

<iframe src="http://media.goodgamestudios.com/games/empire/" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800' ></iframe>
<?php };
if ($game_sele=='0105'){
?>
<input type="hidden"  value="Royal Story"id="sjdjsadoiewe787474uuhr9888">

<iframe src=' https://www.plinga.com/game/iframe/31/2039/?referrer=https://orkut.me/games/play.php&locale=pt-pt' frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800'></iframe>
<?php };
if ($game_sele=='0103'){
?>
<input type="hidden"  value="Fazenda Feliz"id="sjdjsadoiewe787474uuhr9888">

<iframe src=" https://www.plinga.com/game/iframe/2/2095/?referrer=https://orkut.me/games/play.php&locale=pt-pt"  frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800' ></iframe>
<?php }; if ($game_sele=='0110'){
?>
<input type="hidden"  value="Klondike"id="sjdjsadoiewe787474uuhr9888">

<iframe src='http://www.plinga.com/game/iframe/23/2095/?referrer=https://orkut.me/games/play.php&locale=pt-pt'  frameborder="0" marginheight="0" marginwidth="0" scrolling="no"width='100%' height='800' ></iframe>
<?php }
if ($game_sele=='0109'){
?>
<input type="hidden"  value="DreamFields"id="sjdjsadoiewe787474uuhr9888">

<iframe src=' https://www.plinga.com/game/iframe/16/2095/?referrer=https://orkut.me/games/play.php&locale=pt-pt' frameborder="0" marginheight="0" marginwidth="0" scrolling="no"width='100%' height='800'></iframe>
<?php };
if ($game_sele=='0106'){
?>
<input type="hidden"  value="Indy Cat"id="sjdjsadoiewe787474uuhr9888">

<iframe src=' https://www.plinga.com/game/iframe/29/2039/?referrer=https://orkut.me/games/play.php&locale=pt-pt' frameborder="0" marginheight="0" marginwidth="0" scrolling="no"width='100%' height='800'></iframe><?php };
if ($game_sele=='0111'){
?>
<input type="hidden"  value="Khan Wars"id="sjdjsadoiewe787474uuhr9888">

<iframe src=' https://www.plinga.com/game/iframe/20/5067/?referrer=https://orkut.me/games/play.php&locale='frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800'></iframe><?php };

if ($game_sele=='0102'){
?>
<input type="hidden"  value="Big Farm"id="sjdjsadoiewe787474uuhr9888">

<iframe src="http://media.goodgamestudios.com/games/ranch/" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800'></iframe>

<?php 
}; 
if ($game_sele=='0104'){
?>
<input type="hidden"  value="Goodgame Pooker"id="sjdjsadoiewe787474uuhr9888">

<iframe  src="http://media.goodgamestudios.com/games/poker/" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800'></iframe>
<?php 
}; if ($game_sele=='0107'){
?>
<input type="hidden"  value="Barbarians"id="sjdjsadoiewe787474uuhr9888">

<iframe src=' https://www.plinga.com/game/iframe/28/5067/?referrer=https://orkut.me/games/play.php&locale=' frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800'></iframe>
<?php 
}; 

 if ($game_sele=='0108'){
?>
<input type="hidden"  value="Bingo"id="sjdjsadoiewe787474uuhr9888">

<iframe src=' https://www.plinga.com/game/iframe/27/5067/?referrer=https://orkut.me/games/play.php&locale=' frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800'></iframe>
<?php 
}; 
if ($game_sele=='0113'){
?>
<input type="hidden"  value="Charm Farm"id="sjdjsadoiewe787474uuhr9888">

<iframe src=" https://www.plinga.com/game/iframe/37/5067/?referrer=https://orkut.me/games/play/0113&locale=pt-pt" allowfullscreen='true'  frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800' ></iframe>
<?php };
if ($game_sele=='0114'){
?>
<input type="hidden"  value="Knights and Brides"id="sjdjsadoiewe787474uuhr9888">

<iframe src=" https://www.plinga.com/game/iframe/30/5067/?referrer=https://orkut.me/games/play/0114&locale=pt-pt" allowfullscreen='true' frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800' ></iframe>
<?php };
if ($game_sele=='0115'){
?>
<input type="hidden"  value="Precisa de um Herói"id="sjdjsadoiewe787474uuhr9888">

<iframe src=" https://www.plinga.com/game/iframe/38/5067/?referrer=https://orkut.me/games/play/0115&locale=pt-pt" allowfullscreen='true'  frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width='100%' height='800' ></iframe>
<?php };           
           
           
           }; ?>
            
            
            <div style="clear: both" ></div>
            </div></td><td style="position: relative; width:100%; height: auto;vertical-align: top;">
            <div class="boradsemquina3 sombra_padrao_bottom" id="right_main_container84884" 
                      style="position:relative; margin-top:50px;width:270px; height:auto;background-color: #FFFFFF; margin-bottom: 5px;padding-top:5px; ">

  
    <div
        style="margin-left:10px; text-align: left; margin-bottom: 5px;">
        <span class="text_colleft_nome">Usuários jogando</span></div>
        <div id="uue343454u54u545" style="position: relative;background-color: #FFFFFF ;width:270px; min-height:80px;">
        
      
 </div><div id="oiee9348984xxx" style="position: relative;background-color: #FFFFFF ;width:270px;margin-top:10px; height:auto;"></div>
 <div id="oiee9348984xxx444" style="position: relative;background-color: #FFFFFF ;width:270px;margin-top:10px; height:auto;"></div>
 <div  style="position: relative;background-color: #FFFFFF ;width:270px;margin-top:10px; height:auto;">
 <!-- publicidades -->
 </div>
            </div>
            <div id="page_foot"  style="position: relative; width: 270px; height: 20px; margin-top: 20px; margin-right: 0px; margin-bottom: 20px; right: 0px;"><label class="link_hover_foot" onclick="window.location='/'">Orkuti © 20<?php echo date('y')?> </label><label onclick="window.location='/about.php'" class="link_hover_foot"><?php echo SOBREPRINCIPAL;?> </label><label onclick="window.location='/terms.php'" class="link_hover_foot"><?php echo TERMOSPRINCIPAL; ?> </label><label onclick="window.location='/privacy.php'" class="link_hover_foot"><?php echo PRIVACIDADEPRINCIAPL;?></label></div>
            
            </td>
	</tr>
  </thead></table>
            <!-- games9994 -->
    </div> 
 <iframe src="" name="sendpost" style="width:0px;height:0px;display:none;"></iframe>
<div id="sound_ooslks" style="display:none;"></div>
<div id="sjjskkdosuhjd"></div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65567517-2', 'auto');
  ga('send', 'pageview');

</script>
 <!-- end new designer -->

<!-- add -->

</body></html>
  
<?php }
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
                <label onClick="window.location='https://orkuti.net/'"  
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
            class="radius_2px" onclick="window.location='https://accounts.google.com/o/oauth2/auth?state=%2Fprofile&amp;redirect_uri=https://orkuti.net/callback.php&amp;response_type=code&amp;client_id=141621817913.apps.googleusercontent.com&amp;approval_prompt=force&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile'"
                 
                 
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
		<a href="https://orkut.me/games/play/<?php echo $cod_game ;?>" class="trs"><img src="/games/<?php echo $IMG_game?>" alt="<?php echo $name_game;?>" /></a>
			
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
                   href="https://orkut.me/games/play/<?php echo $cod_game;?>" style="text-decoration: none;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-color: #3366CC; padding: 5px 8px 5px 8px; position: absolute; cursor: pointer; top: 19px; left: 142px;">Jogar</a></div></div>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65567517-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
<?php 



};
?>
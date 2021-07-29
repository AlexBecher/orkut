
<?
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
 
include("date.php");
include("lapse.php");
 $aux_osdj394h4hhn=false;
   
include_once ("sanitizeSql.php");
  $count2=$_SESSION['k_iw38002932'] ;
$count_page='';

$response= array();
$response['read']='';
$response['cod']='';
$auc_cod=Sanitize::filter($_GET['cod']);
header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
//CONTA os ultimos t�picos
$queryTOPICOSlast = mysql_query("SELECT ask_forum.idorder FROM ask_forum,users where (users.UserId=ask_forum.UserId) and ( ask_forum.idforum='$auc_cod' and ('".time()."' - ask_forum.timestamp < '600')) order by ask_forum.timestamp DESC  ")or die(mysql_error());;
$row_TOPICOS = mysql_num_rows($queryTOPICOSlast);
       if ($row_TOPICOS!='0' && $row_TOPICOS > $count2){
       
 $count_page=$row_TOPICOS - $count2;     
 if ($count_page < '1' or $count_page=='' ){
 $count_page='1';
 }      
       sec_session_start();
session_register('k_iw38002932'); 
$_SESSION['k_iw38002932']=$row_TOPICOS;



$query55 = mysql_query("SELECT users.UserId,users.NikName,users.UserFotoThumb,users.UserName,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum FROM ask_forum,users where (users.UserId=ask_forum.UserId) and  ask_forum.idforum='$auc_cod' and ('".time()."' - ask_forum.timestamp < '600')  order by ask_forum.idorder DESC  limit $count_page ")or die(mysql_error());

$rcont334 = mysql_num_rows($query55);
       if ($rcont334!='0'){

       
       
 
        
                while($mensagem = mysql_fetch_object($query55)) {
                
 ?>
 <!-- feed de respostas --> 
<div class="ui_mw_postoosm box-msg-ask-topic993" onmouseover="mouse_over_menu(this);" ><div class="box-039-mn-djeue"><label ><?php if ((time() - $mensagem->timestamp) < '432000'){  $aux373yur=date('Y-m-d H:i:s',$mensagem->timestamp);  echo  Datetodays($aux373yur);}else{echo  date('d/m/Y H:i:s',$mensagem->timestamp);}; ?></label><?php if (USERID_ID==$mensagem->UserId ){ ?> <span onclick="exclu_ask_029(this,'<?php echo $mensagem->idorder; ?>','<?php echo $auc_cod;?>');" class="bottom_default_orkut_2">excluir</span><?php }else{?><span class="bottom_default_orkut_23">excluir</span><?php };?></div>
<div class="box-39-3ijf-JH-"><div class="box-399-eke-LK-sjd"><div class="box-3993kwk-lksn-ieo"><a href="/<?php echo ($mensagem->NikName) ?>"><img onclick="view_prof('<?php echo ($mensagem44->UserId) ?>');" src="/cropImg.php?arquivo=profile_img/<?php echo $mensagem->UserFotoThumb;?>&largura=70&altura=100"  class="box_img-0393-fhjs" /></a></div></div>
<div class="box-3939j-akgs-lp"> <label class="box-3939j-akgs-lp6"><a href="/<?php echo ($mensagem->NikName) ?>"><?php echo $mensagem->FullName;?></a></label>
<div class="box-ask_h-3938kje"><?php echo (($mensagem->ask_forum));?></div>
<div class="video_0393"><?  $aux=($mensagem->LinkVideo); if ($aux!='') { ?> <object><param name="movie" value="<?php echo($mensagem->LinkVideo) ?>"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed id="sounder_vide" class="v_show"  src="<?php echo($mensagem->LinkVideo) ?>" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" ></embed></object><?php }?> </div></div><div class="clear"></div>
<div class="box_img-com-ask-3783"><?php if ($mensagem->ImgPost!='') {?><img src="/ask_forum_img/<?php echo $mensagem->ImgPost;?>"/><?php };?></div>
<div class="bg_default_orkut2blue_orkut _box_ask_reati_comm"> <label class="text-box-like-ask-comm-03" onclick="share_commPAsk('<?php echo $auc_cod;?>','<?php echo $mensagem->idorder; ?>','<?php echo $mensagem->ImgPost;?>')">Compartilhar</label>
<?php if ($mensagem->ccuserid!=CCUSERIDI) {?><label class="text-box-like-ask-comm-03" >|</label><label class="text-box-like-ask-comm-03"  onclick="ask_commForumUs('<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagem->ccuserid;//id do dono da resposta?>','<?php echo $mensagem->UserName;//nome do dono da resposta?>')" >Responder</label><?php };?>
<?php 
//verifica se eu gostei          
$query17b43fefrer = mysql_query("SELECT ccuserid FROM like_ask_forum where ccuserid='".CCUSERIDI."' and id_ask='$mensagem->idorder' limit 1 ")or die(mysql_error());;
$rcont37b895943ru4wew = mysql_num_rows($query17b43fefrer);
//conta quantos gostaram
$querycoddr4tkjr35ith4 = mysql_query("SELECT ccuserid FROM like_ask_forum where id_ask='$mensagem->idorder' ")or die(mysql_error());;
$rcont37b8938ye38rw3443 = mysql_num_rows($querycoddr4tkjr35ith4);
if ($rcont37b895943ru4wew=='0'){      
          
          ?><label class="text-box-like-ask-comm-03" >|</label><label onclick="like_28882ask(this,'<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagemd->ccuserid;//id do dono da resposta?>');" trrcall=""  class="text-box-like-ask-comm-03">gostou?</label>
          <?php }else{?><label onclick="like_28882ask(this,'<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagemd->ccuserid;//id do dono da resposta?>');" trrcall="23232"  class="text-box-like-ask-comm-03">gostou(desfazer)</label>
          <?php }; if ($rcont37b8938ye38rw3443!='' or $rcont37b895943ru4wew!='') {?><img class="img-box-like-ask-comm39" src="/img/i383r3hiuere.png" /><label class="text-box-like-ask-comm-03" >(<?php echo $rcont37b8938ye38rw3443;?>)</label><?php };?></div> </div></div> 
<!-- feed de respostas -->             
       <?php 
                };
                };
       
       
       };
};
   
					?>
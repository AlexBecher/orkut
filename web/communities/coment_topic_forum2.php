<?php  
require("check_func_db.php");
   
   if (login_chekout()==true){
   sec_session_start();

 
include("date.php");
include("lapse.php");
 $aux_osdj394h4hhn=false;
  include_once ("sanitizeSql.php");
 
 //LIMITAR TEXTOS                 





 function LimiteFrase($string) {
$chars = 6;
if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars)."...";

}else{
return ($string);
};
};              

 $domain =$_SERVER['HTTP_HOST'];
   $namepage="comunity_load.php";
   $tokepass7=  "_ui";//nome no coookie
   $pagename="".sha1($namepage)."";
   setcookie("$tokepass7", $pagename ,time()+60*5,'/',$domain,false, true);//EXPIRA EM 1 MINUTOS
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o

            $qtd=10;
if ($_GET['page']!=''){


 $inicio_aux3=($_GET['page'] * $qtd)- $qtd;
}else{
$inicio_aux3=0;
}             
             

$auc_cod=Sanitize::filter($_GET['cod']);
$auc_codcommet=Sanitize::filter($_GET['cod_comm']);
mysql_query("DELETE FROM notificacao_user  Where (UserId='".USERID_ID."' and CommandNoti='$auc_cod') ")or die(mysql_error());; 
$query375555r43 = mysql_query("SELECT * FROM list_community_user  where IdCommunity='$auc_codcommet' and UserId='".USERID_ID."' and manager_comm='1' ")or die(mysql_error());;
 
    $rcont37kkw3 = mysql_num_rows($query375555r43);
$query375555r432 = mysql_query("SELECT * FROM community_users  where IdCommunity='$auc_codcommet' and UserIdPro='".USERID_ID."' limit 1  ")or die(mysql_error());;
 
    $rcont37kkw32 = mysql_num_rows($query375555r432);
    
?>
<style>

div.jHtmlArea { border: solid 1px #ccc; }
       
        .share_input{
font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 16px; 
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
  width:720px;
   border: 1px none #FFFFFF;
    
     min-height:43px;"

clear:both;resize:none;overflow-x:auto;max-height:300px;
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
.ioq_owk_83773_ow{
font-family: arial, Helvetica, sans-serif;
 font-size: 14px; font-weight:normal; font-style: normal;
  font-variant: normal; color: #3366CC; cursor: pointer; position:relative;
}


</style>
<div id="msg_podejw28384333"    class="ui_mw_postoosm user_foto_borda_superior sombra_padrao_bottom"
    style="position:relative; width: 778px; height: auto;display:;margin-bottom:20px; background-color:#FFFFFF;">
               <?php
               
$query554 = mysql_query("SELECT * FROM forum where  (IdCommunity='$auc_codcommet' and idforum='$auc_cod')  ")or die(mysql_error());
 $query55d = mysql_query("SELECT * FROM ask_forum where  idforum='$auc_cod' and abuse<>'abuse' ")or die(mysql_error());
   $rcont334d = mysql_num_rows($query55d);
   $rcont3344 = mysql_num_rows($query554);
   
sec_session_start();
session_register('k_iw38002932'); 
$_SESSION['k_iw38002932']=$rcont334d;

    if ($rcont3344!='0') {
       
             $mensagem4 = mysql_fetch_object($query554);
$query = mysql_query("SELECT UserFotoThumb,UserName,FullName FROM users  where  UserId='".$mensagem4->UserId."' ");
$mensagemde = mysql_fetch_object($query);
             
                 
           
               
               ?>
               
<div onmouseover="mouse_over_menu(this);" class="user_foto_borda_superior ui_mw_postoosm"
    
    
                   style="position: relative; width: 100%; height: auto;padding-top:10px;padding-bottom:10px; background-color: #FFFFFF;">
   <label class="de_039930"
         
        style="position: absolute; width: 19px; height: 22px; border: 1px solid #CCCCCC; background-color: #FFFFFF; top: -2px; z-index: 90; right: 20px;">
    <img class="de_0399301" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" 
        
        style="position: absolute; top: 2px; left: -1px; width: 18px; height: 18px;"/></label>
        <div  class="estilodeboraesombra24 vide_ooddldP" 
                    
                    
                    
                                        
                                        
                                        style="margin: 10px 0px 0px 0px; background-color: #FFFFFF; border: 1px solid #CCCCCC; position: absolute; width: 100px; min-height: 40px; z-index: 100; display:none; top: 8px; right: 20px;">
                    <ul style="margin: 10px 0px 0px 0px"><?php if ($rcont37kkw32==''){ ?>
                       <li  
                            class="men_new_90349e3  jsooskkskPPdenunciaall" 
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 100px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Denunciar <input type="hidden" value="<?php echo $auc_codcommet; ?>"/><input type="hidden" value="<?php echo $auc_cod ?>"/><input type="hidden" value="forum"/></li><?php };if ($rcont37kkw3!='' or $rcont37kkw32!='') {?>
                            
                             <li  
                            class="men_new_90349e3  jsooskkskPPdenunciaalle" 
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 100px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Editar <input type="hidden" value="<?php echo $auc_codcommet; ?>"/><input type="hidden" value="<?php echo $auc_cod ?>"/><input type="hidden" value="editforum"/></li><?php };?></ul></div>
                            
    <div>
        <div class="user_foto_borda_superior" 
            
            style="margin-top: -10px;padding:10px; position: relative; width:758px; height: auto; background-color: #f5f5f5; border-bottom-style: solid; border-bottom-width: 2px; border-bottom-color: #dddddd;">
        <div style="position: relative; width: 50px; height: 50px; float: left"><img onclick="view_prof('<?php echo $mensagem4->UserId ?>');" src="/profile_thumbs/<?php echo $mensagemde->UserFotoThumb;?>" style="width: 50px; height: 50px;" class="radius_150px"/></div>
        <div style="float: left; margin-left: 10px; position: relative;overflow:hidden; width: 683px; top: 0px; left: 0px;">
            <label style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word;  font-size: 22px; font-weight:normal; font-style: normal; font-variant: normal; color: #333333; cursor:pointer"><?php echo $mensagem4->nometopico;?></label><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;"><?php if ($rcont334d >'0'){ echo "$rcont334d respostas  - ";}; echo "criado "; $aux373yur=date('Y-m-d H:i:s',$mensagem4->timestamp);  echo  Datetodays($aux373yur); ?></span>
             </div><div style="clear: both"></div><p></div>
        <div style="padding: 5px; position: relative; width:100%;text-align: center; margin-top:5px;overflow-x:hidden;">
             <?php if ($mensagem4->ask_forum!=''){ ?>
             <span style="font-family: arial, Helvetica, sans-serif; word-wrap: break-word;font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666"><?php echo (($mensagem4->ask_forum));?></span><?php };?>
          
            <?php if ($mensagem4->ImgPost!='') {?><center>
            <img src="/forum_img/<?php echo $mensagem4->ImgPost;?>" 
                style="position: relative; max-width:700px;max-height:550px; top: 0px; left: 0px;"/></center><?php };?></div>
        </div>
        
        
          
        </div>
         <div style="position: relative; width: auto; height: 1px; margin-left: 5px; margin-right: 5px; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #F0F0F0"></div> 
                  
 <?php 
                };
     
               ?><div style="position: relative; width:778px;margin-top:10px; background-color: #FFFFFF;margin-bottom:0px;">
                     <div style="position: relative; width: 100%; height: 40px; top: 1px; left: 0px; padding-left: 10px;">
       <?php if ($rcont334d!=''){?>
                <label id="sdkii99994ii4"style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 14px; left: 83px;"></label>    
  
                   <label 
                    onclick="less_frokjwfufuftopic('<?php echo $auc_cod;?>','<?php echo $auc_codcommet;?>')" 
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; top: 10px; left: 10px;"><< voltar</label><span 
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: absolute; top: 10px; left: 73px;"><?php if($_GET['page']!='') { echo "página ".($_GET['page']);}else{echo "página 1";}?></span><label 
                    onclick="more_frokjwfufuftopic('<?php echo $auc_cod;?>','<?php echo $auc_codcommet;?>')" 
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; left: 180px; top: 10px;">mais respostas >></label><label onclick="last_frokjwfufuftopic('<?php echo $auc_cod;?>','<?php echo $auc_codcommet;?>','<?php echo ceil(($rcont334d)/$qtd)?>')" 
                       
                       style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; right:20px; top: 10px;">última resposta</label><?php };?></div> 
               
               
 <?php 
// mysql_query("UPDATE ask_forum SET status_ask='' where  idforum='$auc_cod' and status_ask='1' ");
 
 $query55 = mysql_query("SELECT * FROM ask_forum where  idforum='$auc_cod' and abuse<>'abuse' order by idorder ASC limit $inicio_aux3,$qtd ")or die(mysql_error());
   $rcont334 = mysql_num_rows($query55);
       if ($rcont334!='0'){
       
                while($mensagem = mysql_fetch_object($query55)) {
$query = mysql_query("SELECT UserFotoThumb,UserName,FullName,ccuserid FROM users  where  UserId='".$mensagem->UserId."' ");
$mensagemd = mysql_fetch_object($query);
                
 ?>
 <!-- feed de respostas -->              
<div class="ui_mw_postoosm" onmouseover="mouse_over_menu(this);" 
                         style="position: relative; width: 778px; ">
<label class="de_039930"
         
        style="position: absolute; width: 19px; height: 22px; border: 1px solid #CCCCCC; background-color: #FFFFFF; top: -2px; z-index: 90; right: 20px;">
    <img class="de_0399301" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" 
        
        style="position: absolute; top: 2px; left: -1px; width: 18px; height: 18px;"/></label>
        <div  class="estilodeboraesombra24 vide_ooddldP" 
                    
                    
                    
                                        
                                        
                                        style="margin: 10px 0px 0px 0px; background-color: #FFFFFF; border: 1px solid #CCCCCC; position: absolute; width: 110px; height: 70px; z-index: 100; display:none; top: 8px; right: 20px;">
                    <ul style="margin: 10px 0px 0px 0px"><?php if (USERID_ID==$mensagem4->UserId or USERID_ID==$mensagem->UserId  or $rcont37kkw3!='' or $rcont37kkw32!=''){ ?>
                        <li 
                            class="men_new_90349e3 dhsjhdff775P" onclick="exclu_ask_029(this,'<?php echo $mensagem->idorder; ?>','<?php echo $auc_cod;?>');"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 110px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Excluir resposta</li><?php };?><li  
                            class="men_new_90349e3  jsooskkskPPdenunciaall" 
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 110px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Denunciar abuso<input type="hidden" value="<?php echo $auc_cod ?>"/><input type="hidden" value="<?php echo $mensagem->idorder;?>"/><input type="hidden" value="coment_forum"/></li></ul></div>
    <div style="margin: 5px 0px 10px 0px; position: relative; min-height: 70px;">
        <div style="position: relative; width: 50px; height: 50px;margin-left:5px; float: left"><img onclick="view_prof('<?php echo $mensagem->UserId ?>');" src="/profile_thumbs/<?php echo $mensagemd->UserFotoThumb;?>" style="width: 50px; height: 50px;" class="radius_150px"/></div>
        <div style="float: left; margin-left: 10px; position: relative; width: 670px; overflow:hidden; top: 0px; left: 0px;">
            <label style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word;  font-size: 14px; font-weight:bold; font-style: normal; font-variant: normal; color: #3366CC"><?php echo $mensagemd->FullName;?></label><br />  
            <p><span style="font-family: arial, Helvetica, sans-serif; word-wrap: break-word;font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333"><?php echo (($mensagem->ask_forum));?></span></p>
             
             <div class="video" 
                            
                style="max-width:400px; height: auto; margin-bottom: 0px; position: relative; left: 0px; text-align: center;" ><?  $aux=($mensagem->LinkVideo); if ($aux!='') { ?>
     <div style="max-width:400px; height:auto;padding:10px;"></div><object  width="400px" height="400px"><param name="movie" value="<?php echo($mensagem->LinkVideo) ?>"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed id="sounder_vide" class="v_show"  src="<?php echo($mensagem->LinkVideo) ?>" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="400px" height="400px" ></embed></object>
                            
                     <?php }?> </div></div><div style="clear: both"></div>
                     <div style=" margin-top:5px;text-align: center; position: relative; max-width:778px;max-height:600px; top: 0px; left: 0px;">
        
                      <?php if ($mensagem->ImgPost!='') {?><p><img src="/ask_forum_img/<?php echo $mensagem->ImgPost;?>" style="position: relative; max-width: 500px;max-height:600px;"/></p><?php };?>
            </div>
          <div 
                                
                                
                                    
                                    
            style="position:relative; width:100%; height:20px; background-color:#FFFFFF">
                    
           <label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;"><?php  $aux373yur=date('Y-m-d H:i:s',$mensagem->timestamp);  echo  Datetodays($aux373yur); ?></label>       <label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;">|</label> <label onclick="share_commPAsk('<?php echo $auc_cod;?>','<?php echo $mensagem->idorder; ?>','<?php echo $mensagem->ImgPost;?>')" style="font-family: arial, Helvetica, sans-serif; cursor:pointer;font-size: 12px;position:relative; font-weight: normal; font-style: normal; font-variant: normal; text-transform: none; color: #336699;float:left; margin-left: 5px;">Compartilhar</label>
           <?php if ($mensagemd->ccuserid!=CCUSERIDI) {?><label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;">|</label>
          <label onclick="ask_commForumUs('<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagemd->ccuserid;//id do dono da resposta?>','<?php echo $mensagemd->UserName;//nome do dono da resposta?>')" style="font-family: arial, Helvetica, sans-serif; cursor:pointer;font-size: 12px;position:relative; font-weight: normal; font-style: normal; font-variant: normal; text-transform: none; color: #336699;float:left; margin-left: 5px;">Responder</label><?php };?>

          <?php 
//verifica se eu gostei          
$query17b43fefrer = mysql_query("SELECT ccuserid FROM like_ask_forum where ccuserid='".CCUSERIDI."' and id_ask='$mensagem->idorder' limit 1 ")or die(mysql_error());;
$rcont37b895943ru4wew = mysql_num_rows($query17b43fefrer);
//conta quantos gostaram
$querycoddr4tkjr35ith4 = mysql_query("SELECT ccuserid FROM like_ask_forum where id_ask='$mensagem->idorder' ")or die(mysql_error());;
$rcont37b8938ye38rw3443 = mysql_num_rows($querycoddr4tkjr35ith4);
          
          
    if ($rcont37b895943ru4wew=='0'){      
          
          ?><label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;">|</label>
          <label  class="odskkdnfjj4" style="font-family: arial, Helvetica, sans-serif; cursor:pointer;font-size: 12px;position:relative; font-weight: normal; font-style: normal; font-variant: normal; text-transform: none; color: #336699;float:left; margin-left: 5px;">gostou?</label><input type="hidden" value="<?php echo $auc_cod;//forum?>"/><input type="hidden" value="<?php echo $mensagem->idorder;//idorder da resposta ?>"/><input type="hidden" value="<?php echo $mensagemd->ccuserid;//id do dono da resposta?>"/>
          <?php }else{?>
          <label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;">|</label>
          <label  class="odskkdnfjj_cance4" style="font-family: arial, Helvetica, sans-serif; cursor:pointer;font-size: 12px;position:relative; font-weight: normal; font-style: normal; font-variant: normal; text-transform: none; color: #336699;float:left; margin-left: 5px;">gostou(desfazer)</label><input type="hidden" value="<?php echo $auc_cod;//forum?>"/><input type="hidden" value="<?php echo $mensagem->idorder;//idorder da resposta ?>"/><input type="hidden" value="<?php echo $mensagemd->ccuserid;//id do dono da resposta?>"/>
          <?php }; if ($rcont37b8938ye38rw3443!='' or $rcont37b895943ru4wew!='') {?><img src="/img/i383r3hiuere.png" 
        style="position:relative;float:left;top:-3px; margin-left: 5px;"/><label  style="font-family: arial, Helvetica, sans-serif; cursor:pointer;font-size: 12px;position:relative; font-weight: normal; font-style: normal; font-variant: normal; text-transform: none; color: #336699;float:left; margin-left: 5px;">(<?php echo $rcont37b8938ye38rw3443;?>)</label>
        <?php };?>
          <?php ?>
          </div>      
        
         <div style="position: relative; width: auto; height: 1px; margin-left: 5px; margin-right: 5px; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #F0F0F0"></div> 
        </div>
        
        </div> 
        
        <!-- feed de respostas -->                  
       <?php 
       
                };?>
                <!-- refresh asks -->
                <input type="hidden"  id="iwO_GX_jsa62wj"value="<?php echo $auc_cod;?>">
                <input type="hidden" id="iwO_GX_jsa62" value="<?php echo $auc_codcommet;?>">
                
                <div id="mshJHasah_9qwqi_alqooOI"></div>
                <!-- refresh asks --><?php 
                
       }else{
       
       ?>
      <div style="background-color: #333333; position: relative; width: 100%; height: 50px">
    <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; bottom: 10px; left: 25%;">Este tópico ainda está vazio! Escreva algo...</span></div> 
       <?php };?>        
        <div id="miiaoidoie883388" ></div>
        <div style="position: relative; width: 100%; height: 40px; top: 1px; left: 0px; padding-left: 10px;">
      <?php if ($rcont334!=''){?>
                <label id="sdkii99994ii4"style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 14px; left: 83px;"></label>    
  
                   <label 
                    onclick="less_frokjwfufuftopic('<?php echo $auc_cod;?>','<?php echo $auc_codcommet;?>')" 
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; top: 10px; left: 10px;"><< voltar</label><span 
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: absolute; top: 10px; left: 73px;"><?php if($_GET['page']!='') { echo "página ".($_GET['page']);}else{echo "página 1";}?></span><label 
                    onclick="more_frokjwfufuftopic('<?php echo $auc_cod;?>','<?php echo $auc_codcommet;?>')" 
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; left: 180px; top: 10px;">mais respostas >></label><label onclick="last_frokjwfufuftopic('<?php echo $auc_cod;?>','<?php echo $auc_codcommet;?>','<?php echo ceil(($rcont334d)/$qtd)?>')" 
                       
                       style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; right:20px; top: 10px;">última resposta</label><?php };?></div>       
               </div>
               
               
               <?php if (USERID_ID!='' && $mensagem4->closed=='0') {?>
                 <!-- Post community inicio -->
               <div style="position:relative;bottom:0px;  padding-top:; height: auto;">
                 <div   style="position: relative;margin-bottom:; width:auto;background-color: #FFFFFF;">
                    
  
        <div   style="position: relative; border: 1px solid #E6E6E6;width:auto; background-color: #F4F4F4;" class="">
<div style="position: relative; width:100%; margin-bottom:20px; height: auto"><input type="hidden" name="data_st" id="data_st" value="<?php echo time();?>"></input>
                        <input type="hidden" name="idEventosUser" id="idEventosUser" value="<?php echo USERID_ID;?>"></input>
                        <input type="hidden" name="IdOrderEventos" id="IdOrderEventos" value="<?php echo $auc_cod;?>"></input>
                         <input type="hidden" name="foto39ur3r6i2ryy4" id="foto39ur3r6i2ryy4" value="<?php echo USERFOTOTHUMB;?>"></input>
                          <input type="hidden" name="uiw_927_521gsXX1" id="uiw_927_521gsXX1" value=""></input>
         <input type="hidden" name="uiw_927_521gsXX2"  id="uiw_927_521gsXX2"value=""></input>
         <input type="hidden" name="uiw_927_521gsXX3" id="uiw_927_521gsXX3" value="">  </input>
        
&nbsp;<div 
        
        style="margin:0px 10px 10px 7px; background-color: #FFFFFF; border: 1px solid #EBEBEB; position: relative; width: 758px; height: auto; top: 0px; left: 0px;"><!-- novo textarea -->
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<div  contenteditable="true" data-toggle="popover" data-trigger="hover" id="paste-target" class="share_input">Escreva algo bem legal aqui, ou poste vídeos ou imagens...</div>
<textarea name="desc"  id="share_field" hidden="true" class="share_input showpopover" placeholder="Escreva aqui seu código html...">
<p>Escreva aqui seu código html...</p>
</textarea>

<!-- novo textarea -->

</div>
<!-- novo painel de emojis -->

<div id="po93238uiyqeue" style="display: none; " data-trigger="hover"  class="share_input" ></div>
<div id="jjdueiqxxxadd2562" style="position: relative; width: 100%; height: auto;display: none; background-color: #F4F4F4">
 <div class="" style="position: relative; width:auto; max-height:200px; overflow-x: hidden;margin-top: 15px; margin-bottom: 15px; margin-left: 15px;">                  
   
    <div style="position: relative; width: auto; height: auto; ">
      <img src="/whatsapp/new/21.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/22.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/23.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/24.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/25.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/26.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/27.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/28.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/29.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/30.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/31.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/32.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/33.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/34.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/35.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/36.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/37.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/38.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/39.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/40.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/41.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/42.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/43.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/44.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/45.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/46.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/47.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/48.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/49.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/50.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/51.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/52.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/53.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/55.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/56.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/57.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/58.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/59.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/60.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/61.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/62.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/63.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/64.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/65.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/66.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/67.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/68.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/69.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/70.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/711.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/>
            
            
            
           <img src="/whatsapp/new/72.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/73.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/74.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/75.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/76.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/77.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/78.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/79.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/80.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/81.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/82.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/83.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/84.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/85.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/86.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/87.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/88.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/89.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/90.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/91.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/92.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/93.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/94.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/95.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/>
            
            
            <img src="/whatsapp/new/96.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/97.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/98.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/99.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/100.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/101.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/102.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/103.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/104.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/105.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/106.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/107.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/108.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/109.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/110.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/112.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/113.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/114.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/115.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/116.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/117.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/118.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/119.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/120.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/>
            
            <img src="/whatsapp/new/121.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/122.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/123.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/124.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/125.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/126.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/127.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/128.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/129.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/130.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/131.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/132.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/133.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/134.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/135.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/136.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/137.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/138.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/139.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/140.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/141.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/142.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/143.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/144.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/>
            
             <img src="/whatsapp/new/145.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/146.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/147.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/148.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/149.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/150.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/151.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/152.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/153.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/154.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/155.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/><img src="/whatsapp/new/156.png" class="oqxccad2552443"
            style="position: relative; cursor: pointer; clear: left"/>
            <div 
            
            style="clear: both"></div></div></div></div>
<!-- novo painel de emojis -->
<div id="ijdkkdfdjsdf77dfnsearch"   style=" padding: 5px; width:425px; height: auto; margin-left: 10px; position:relative; display:none; background-color: #FDFEFF;"><input type="hidden" id="leav_serac" name="leav_serac" />
<div id="ijdkkdfdjsdf77dfnsearchN"  style="border: 1px solid #FFFFFF; width:425px; height: auto;  position:absolute; display:;z-index:800;left:0px;top:-10px; background-color: #FDFEFF;"></div></div>
<div id="add_img_post" style="width: 400px;margin: 10px 5px 8px 10px; height:auto; position: relative; display: none;">
<div id="foto_null" class="div_sombra_inter"  style="border: 3px solid #F8F8F8; width: 150px; height: 150px; position: relative; cursor:pointer;">
<img class="cr_al000"  src="/imagens_rsrc/cam_01.png"  style="position: absolute; top: 52px; left: 49px;z-index: 100;"/><img src="/imagens_rsrc/350difjnsnd.gif" style="position: absolute; top: 102px; left: 55px;"/></div></div>
<input type="hidden" id="link_iuaugfew67467gf" name="link_iuaugfew67467gf"></input><img id="load_8844urhhrfhhvb"  src='/imagens_rsrc/GsNJNwuI-UM.gif'      style="position: absolute; top: 42px; left: 432px; display:none;">
<div id="ijdkkdfdjsdf77dfn"  style="border: 1px dashed #FFFFFF; padding: 5px; width:465px; height: auto; margin: 10px; position: relative; display:none; background-color: #FDFEFF;"></div>
<div  
        style="border-left: 1px none #EBEBEB; border-right: 1px none #EBEBEB; border-top: 1px solid #EBEBEB; border-bottom: 1px none #EBEBEB; width:765px; height: 35px; bottom:0px; left:0px; position:relative; background-color: #F4F4F4; display:; "  
        class="subisaymsg">

<button type="submit" onClick="enviando1CommTopic('<?php echo $auc_cod;?>','<?php echo $auc_codcommet;?>');"class="botao_azul" style=" padding: 5px 12px;
            text-align:center;       
            -moz-border-radius:   2px 2px  2px 2px; 
            border-radius:  2px 2px  2px 2px;  
            height: auto;
            border: 1px solid #336699;
            background:#336699;
            font-family: sans-serif;
            font-size: 13px;
            font-weight: bold; 
            font-style: normal;
            font-variant: normal; 
            color: #FFFFFF;
           
            position:absolute;
   right:10px;  
 top: 3px;
 
   z-index: 100; cursor: pointer;"title="Enviar..." >Enviar</button>
<!-- novo painel de emojis -->
             <img src="/whatsapp/login-photo.png" class="iieir438384389xxxa lloepowpoei83838"
            
        style="position: absolute; cursor: pointer;  width: 30px; height: 30px; top: 5px; left: 20px;"/><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 70px; height: 39px; top: -56px; left:0px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 17px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Emojis</span></div>
        <!-- novo painel de emojis -->
        
        <div id="enable_html"  style="background-position: center center; position: absolute;z-index:400; width: 35px; height: 35px; background-image: url('/img/jewf43848ruew.png'); background-repeat: no-repeat; bottom: 0px; left: 133px;"   
                class="men_new_90349e34 lloepowpoei83838"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 100px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Inserir HTML</span></div></div>
            <div    style=" position: absolute; width: 35px; height: 35px;  bottom: 0px; left: 193px;"   
                class="djcwiijdjjs men_new_90349e34 lloepowpoei83838"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 100px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Cor do texto</span></div>
                <img style=" position: absolute;top:8px;left:8px; " id="color_icon" class="color_icon" data-toggle="tooltip"   src="/img/ii4ri4oqfw4wiirisd.png"    
                class="men_new_90349e34"><div id="color-picker" class="color-picker" 
    style="position: absolute; left:10px;top:30px;z-index:100;display:none; width:160px;">
       <img   src="/img/red3838383.png"    
                class="color-box" style="margin: 0px; float: left;color: #FF0000;display:block;"><img   src="/img/yel38r44i.png"    
                class="color-box" style="margin: 0px; float: left;color: #FFFF00;display:block"><img   src="/img/grue32093.png"    
                class="color-box" style="margin: 0px; float: left;color: #00FF00;display:block"><img   src="/img/blu3889348r4.png"    
                class="color-box" style="margin: 0px; float: left;color: #0000FF;display:block"><img   src="/img/pink284844.png"    
                class="color-box" style="margin: 0px; float: left;color: #FF00FF;display:block"><img   src="/img/geuu774.png"    
                class="color-box" style="margin: 0px; float: left;color: #C0C0C0;display:block"><img   src="/img/3i9i44derere.png"    
                class="color-box" style="margin: 0px; float: left;color: #996633;display:block"><img   src="/img/eid8348.png"    
                class="color-box" style="margin: 0px; float: left;color: #000000;display:block">
     
        <div style="clear: both;"></div></div></div><div  style=" position: absolute; width: 35px; height: 35px;  bottom: 0px; left: 223px;"   
                class="men_new_90349e34 lloepowpoei83838"><img style=" position: absolute;top:8px;left:8px; " id="bold_icon" class="bold_icon" data-toggle="tooltip"   src="/img/438dsjjfsf.png"    
                class="men_new_90349e34"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 70px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Negrito</span></div></div><div  style=" position: absolute; width: 35px; height: 35px;  bottom: 0px; left: 253px;"   
                class="men_new_90349e34 lloepowpoei83838"><img style=" position: absolute;top:8px;left:8px; "  id="italic_icon" class="italic_icon"data-toggle="tooltip"   src="/img/wieriwrrit34.png"    
                class="men_new_90349e34"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 65px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Itálico</span></div></div><div  style=" position: absolute; width: 35px; height: 35px;  bottom: 0px; left: 283px;"   
                class="men_new_90349e34 lloepowpoei83838"><img style=" position: absolute;top:8px;left:8px; " id="underline_icon" class="underline_icon" data-toggle="tooltip"   src="/img/k4r839rfjwjr.png"    
                class="men_new_90349e34"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 90px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Sublinhado</span></div></div></div></div></div>
<form id="form_send_post" method="post" enctype="multipart/form-data"    action="/uploadImageForumAsk.php" style="margin: 0px">
<div style="background-position: center center;; position: absolute; width: 35px; height: 35px; background-image: url('/img/fw4u43988482.png'); background-repeat: no-repeat;bottom:20px; left: 72px;"   class="men_new_90349e34 lloepowpoei83838"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 115px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Postar imagens</span></div><input id="foto"name="foto"class="foto" type="file"style="width:35px; height: 35px;position:absolute;; cursor:pointer;"/></div></form>
        
        
        
        
        <div style="clear:both;"></div></div>

</div><!--Post community fim--><?php };?></div>

<?php }else{
exit;

   }?>
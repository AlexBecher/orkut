<?php  
require("check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");   

   if (login_chekout()==true){
   sec_session_start();

include_once ("sanitizeSql.php");
 
include("date.php");
 
include("lapse.php");
 $aux_osdj394h4hhn=false;
 
 //LIMITAR TEXTOS                 
function LimiteFrase($string) {
$chars = 15;
if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars)."...";

}else{
return ($string);
};
};



               
$auc_cod=Sanitize::filter($_GET['cod']);

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o
//verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."') order by IdOrder DESC ")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);

//inicio memcache
//consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$auc_cod; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta específica com memcache

if ($query_mem==false){
$query173 = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$auc_cod' order by IdOrder ")or die(mysql_error());;
$rcont373 = mysql_num_rows($query173);
$var=$rcont373;
$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 400);

}else{
$rcont373=$query_mem;
}

//fim memcache
if (USERID_ID=='1'){
$query17 = mysql_query("SELECT UserId,manager_comm  FROM list_community_user  where IdCommunity='$auc_cod' order by IdOrder DESC  limit 12")or die(mysql_error());;
}else{

$query17 = mysql_query("SELECT UserId,manager_comm  FROM list_community_user  where IdCommunity='$auc_cod' order by rand()  limit 12")or die(mysql_error());;

}
;
$rcont37 = mysql_num_rows($query17);
$querycod = mysql_query("SELECT UserIdPro,IdCommunity FROM community_users  where IdCommunity='$auc_cod' ")or die(mysql_error());;
$mensagemcod = mysql_fetch_object($querycod);

$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);

?>
<style>
.ksiieoe838833ue3{
visibility:hidden; 


}
.lloepowpoei838383:hover + .ksiieoe838833ue3{
visibility:visible; 


}
</style>
<div id="m_owodwuhouwdw"   
                    
     style="border: 1px solid #C1C5CA; position:relative; width:778px; height: auto; display:; background-color: #FBFBFB;">
     <div style="position: relative; width: 760px; height: 40px; padding: 10px">
         <span style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666">Membros (<?php echo number_format($rcont373,0,',','.');?>)</span>
        <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label 
            class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')"
            
             style="vertical-align: middle; text-align: center; padding: 5px 9px 5px 9px; position: absolute; top:17px; left:369px;">Convidar membros</label> <input placeholder="Pesquisar membros" id="nome_test3" maxlength="100"
             accesskey="/" name="nome_test3" onkeyup="searcH_Membro_UserCommm('<?php echo $auc_cod;?>')"
                type="text" 
            
            
             
             style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; background-color: #F9F9F9; border: 1px solid #CCCCCC; padding-left: 10px; width: 235px; height: 30px; top: 10px; right: 10px;" />
           <div id="ser_user_test"
                
            
            
            
             
             
             style="position: absolute; width:235px; z-index:200; margin-bottom: 0px; top:36px; right: 10px;"></div><?php };?>

         </div>
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName  FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	    $nikename=($mensagemcomp2->NikName);
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  
$UserId_aux = ($mensagemcomp2->UserId) ;

if ($UserId_aux!=''){
 
/* */$query6 = mysql_query("SELECT Idorder FROM usercomp  Where (UsConv='".USERID_ID."' and UsDest='$UserId_aux') or UsConv='$UserId_aux' and UsDest='".USERID_ID."' limit 1");
$query7 = mysql_query("SELECT Idorder FROM usercomp  Where UsConv='".USERID_ID."' and UsAck='$UserId_aux' or UsAck='".USERID_ID."' and UsConv='$UserId_aux' limit 1");

$mensagem6 = mysql_fetch_object($query6);
$Aux2 = mysql_num_rows($query6);
$Aux7 = mysql_num_rows($query7);
};
	  

 ?>
 <div id="lweo94ialfejjfeqjkol">
 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm sombra_padrao_bottom"
    style="background-color: #FFFFFF;position: relative;margin-bottom:10px; width:250px; height:80px; margin-left: 6px;float:left;">
    <?php if (($mensagemcod->UserIdPro==USERID_ID)){ ?> <label class="de_039930"
         style="position: absolute; width: 19px; height: 22px; border: 1px solid #CCCCCC; background-color: #FFFFFF; top: -2px; left:220px; z-index: 90;">
    <img class="de_0399301" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" 
        
        style="position: absolute; top: 2px; left: -1px; width: 18px; height: 18px;"/></label>
        <div  class="estilodeboraesombra24 vide_ooddldP" 
                    
                    
                    
                                        
                                        
                                        
    style="margin: 10px 0px 0px 0px; background-color: #FFFFFF; border: 1px solid #CCCCCC; position: absolute; width: 150px; height:auto; z-index: 100; display:none; top: 8px; left:120px;">
                    <ul style="margin: 10px 0px 0px 0px">
                        <li 
                            class="men_new_90349e3 dhsjhdff775P" onclick="ecew84uewhyeh('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 150px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Excluir membro</li><li  
                            class="men_new_90349e3 dhsjhdff775P" onclick="ecew84uewhyehbann('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 150px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Banir membro</li><?php if ($mensagem->manager_comm=='0'){ ?><li  
                            class="men_new_90349e3 dhsjhdff775P" onclick="eei94imoderragdeu('<?php echo $mensagem->UserId ;?>','<?php echo USERID_ID;?>','<?php echo $mensagemcod->IdCommunity;?>')"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 150px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Tornar moderador</li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?><li  
                            class="men_new_90349e3 dhsjhdff775P" onclick="remeei94imoderragdeu('<?php echo $mensagem->UserId ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $mensagemcod->IdCommunity;?>')"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 150px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Remover moderador</li><?php };?></ul></div><?php };?>
     <div style="position: relative; width: 80px; height: 80px; float: left"><img onclick="view_prof('<?php echo $mensagem->UserId ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=80&altura=80"/></div>
     <div style="position: relative; width: 148px; height: 80px; float: left; margin-left: 10px; top: 0px; left: 0px; padding-top: 10px;">
         <a href="/<?php echo $nikename;?>" style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333; position: relativeword-wrap: break-word;"><?php echo LimiteFrase($fotocomp2Idnome);?></a></div>  
         
         
         
         
          <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383"  src="/img/download_manager.png" 
        
        style="position: absolute;bottom:5px;right:5px;"/><div class="boradsemquina3 ksiieoe838833ue3" style="background-color: #555454; position: absolute;z-index:3000; width:87px; height: 39px;;bottom:53px;right:-24px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Moderador</span></div> <?php };?>
         <div 
                
                
                style="position: absolute; left: 82px; bottom:0px; width: 100%; height: auto;">
            <div 
        style="position: relative; top: 2px; "><?php if (($Aux2!='')and ($mensagemcomp2->UserId!=USERID_ID )) {  if ($Aux7!='') {?><?php }else {?>       <div style="position: relative; width: 140px;padding-left:10px;"><img src="/imagens_rsrc/button_lonidsn39.png"/><span 
                        
                        style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #3366CC; position: absolute; top: 8px; left: 40px;">Solicitação enviada</span></div><?php };}; ?><?php if (($Aux2=='')and ($mensagemcomp2->UserId)!=USERID_ID) {?>
   <div style="position: relative; width: 140px;padding-left:10px;"><img  class="ad_083281" style="cursor:pointer;width: 30px; height:30px;" src="/imagens_rsrc/button_lonidsn38.png"/><input type="hidden" value="<?php echo ($mensagemcomp2->UserId) ?>"/><label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #3366CC; position: absolute; top: 8px; left: 42px;"><input type="hidden" value="<?php echo ($mensagemcomp2->UserId) ?>"/>Adicionar</label></div>                      
                        
                            <?php }; ?></div></div></div>
  </div>
          <?php };?>
 <?php  if ($aux_osdj394h4hhn==false) {?><div style="position: relative; width: 500px; height: 300px; ">
            <img src="/img/yDHWjtlL3ff.png" 
                style="position: absolute; top: 38px; left: 176px;"/><span 
                style="font-family: arial, Helvetica, sans-serif;text-shadow:#FFFFFF 1px 1px 1px, #999999 -1px -1px 1px; font-size: 28px; font-weight: bold; font-style: normal; font-variant: normal; color:#C0C0C0; position: absolute; top: 193px; left: 16px;">Desculpe , não encontramos nenhuma pessoa!</span></div><?php };?>
  
  
  <?php  }else{?><div style="position: relative; width:760px; height: 300px; "><?php if (($mensagemcod->UserIdPro==USERID_ID) or ($mensagemcod->CommunityPrivacy=='2')){?> 
         <div  style="margin:20px auto; position: relative; width: 250px; height:auto">
    <div style="position: relative; width: 250px; height: 30px"><span style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666">Poxa não tem membros <?php if($rcont373wllele!='' or $rcont373!='') { echo "em sua comunidade!"; }else{ echo "nesta comunidade!";};?></span></div>
   <div  onmouseout="javascript:this.style.background= ''" 
             onmouseover="javascript:this.style.background= '#EFEFEF'"   
  style="position: relative; width: 250px;height: 81px; top:15px; left: 0px;margin-bottom:5px;"> <div style="position: relative; float: left; width: 80px; height: 80px">
        </div><img style="position:absolute; top:10px; left: 0px;" src="/img/7748yiuTTtrw_93904.png">
    <label 
            class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')"
            style="vertical-align: middle; text-align: center; padding: 5px 9px 5px 9px; position: absolute; top:20px; left:80px;">Convidar membros</label></div>
            <div  onmouseout="javascript:this.style.background= ''" 
             onmouseover="javascript:this.style.background= '#EFEFEF'"   
  style="position: relative; width: 250px;height: 81px; top:5px; left: 0px;margin-bottom:5px;"> <div style="position: relative; float: left; width: 80px; height: 80px">
        </div><img style="position:absolute; top:10px; left: 0px;" src="/img/kew_kauU73_093.png">
    <label 
            class="botton_cinza" onclick="share_comm('<?php echo $auc_cod;?>');"
            style="vertical-align: middle; text-align: center; padding: 5px 9px 5px 9px; position: absolute; top:20px; left:80px;">Divulgue</label></div></div><?php };?>
            </div><?php };?><div style="clear:both"></div>  
    <div id="MsgPostMPPC"></div>
    </div> <div id="limit_pag" 
                  
                  
                  
                        
                           
    style=" width: 500px; height: 40px;  position: relative; left: 0px; bottom: 10px;margin-top:10px;">
    <label class="link_foote"  onclick="carregaMembersNew2('<?php echo $auc_cod;?>')" style="width: 100%"><center>
    <label id="mais_post" >
                      <span  class="boradsemquina3 button_criarCom" style="padding: 5px 9px 5px 9px; font-family: tahoma,verdana,arial,sans-serif; font-size: 14px;margin-top:10px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; background-color: #3366CC; position: relative; cursor: pointer; z-index: 100;" 
                      >Exibir  mais membros </span></label></center></label></div> <div id="load_1" 
                           style="width: 100%; height: 100%;margin-top:90px;"></div>  
                           
                           
                           <?php }else{
                           exit;
                           
                           
                           }?>     
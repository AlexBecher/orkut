<?php  
require("check_func_db.php");

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



               


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o


      $qtd=12;
if ($_GET['page']!=''){


 $inicio_aux3=($_GET['page'] * $qtd)- $qtd;
}else{
$inicio_aux3=0;
}         

$auc_cod=Sanitize::filter($_GET['cod']);
if (USERID_ID=='1'){

$query17 = mysql_query("SELECT UserId,manager_comm FROM list_community_user  where IdCommunity='$auc_cod' order by IdOrder DESC  limit $inicio_aux3,$qtd ")or die(mysql_error());;
}else{

$query17 = mysql_query("SELECT UserId,manager_comm FROM list_community_user  where IdCommunity='$auc_cod' ORDER BY rand() limit $inicio_aux3,$qtd ")or die(mysql_error());;

}
$rcont37 = mysql_num_rows($query17);
$querycod = mysql_query("SELECT UserIdPro,IdCommunity FROM community_users  where IdCommunity='$auc_cod' ")or die(mysql_error());;
$mensagemcod = mysql_fetch_object($querycod);


?>



                   <div id="m_owodwuhouwdw"   
                    
     style="border: 1px solid #C1C5CA; position:relative; width:778px; height: auto; display:; background-color: #FBFBFB;">
  
<? 
if ($rcont37!=''){

 while ($mensagem = mysql_fetch_object($query17)){

  $aux_osdj394h4hhn=true;  
$querycomp2 = mysql_query("SELECT UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName FROM users  where   UserId='$mensagem->UserId' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	 $fotocomp2=($mensagemcomp2->UserFotoPerfil);
	 $fotocomp2Id=($mensagemcomp2->UserId);
	  $fotocomp2Idnome=($mensagemcomp2->FullName);
	   $nikename=($mensagemcomp2->NikName);
$UserId_aux = ($mensagemcomp2->UserId) ;

if ($UserId_aux!=''){
 
/* */$query6 = mysql_query("SELECT Idorder FROM usercomp  Where (UsConv='".USERID_ID."' and UsDest='$UserId_aux') or UsConv='$UserId_aux' and UsDest='".USERID_ID."' ");
$query7 = mysql_query("SELECT Idorder FROM usercomp  Where UsConv='".USERID_ID."' and UsAck='$UserId_aux' or UsAck='".USERID_ID."' and UsConv='$UserId_aux' ");

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
                        
                            <?php }; ?></div></div>
        </div>
       
  </div>
  <?php };?>

  
  
  <?php  }else{?><div style="position: relative; width: 500px; height: 300px; ">
            <img src="/img/yDHWjtlL3ff.png" 
                style="position: absolute; top: 38px; left: 176px;"/><span 
                style="font-family: arial, Helvetica, sans-serif;text-shadow:#FFFFFF 1px 1px 1px, #999999 -1px -1px 1px; font-size: 28px; font-weight: bold; font-style: normal; font-variant: normal; color:#C0C0C0; position: absolute; top: 193px; left: 16px;">Desculpe , não encontramos nenhuma pessoa!</span></div><?php };?><div style="clear:both"></div>  
    </div>    <?php }else{
    
    exit;
    
    
    }?>     
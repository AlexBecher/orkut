<?php 
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

include_once ("sanitizeSql.php");

                 $UserId_Cokie =USERID_ID;
               
 	$userid2 = CCUSERIDI;
	
function LimiteFrase($string) {
$chars = 20;
if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars).".";

}else{
return ($string);
};
};

 $idGuet= utf8_decode($_GET['xc9iw00']);
$idGuetcomm=Sanitize::filter($_GET['idcomm']);
 

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
 


if ($idGuet!=''){
?>
  <?php 
 $text777 = mysql_real_escape_string(($idGuet));
 if (strlen($text777) > '4'){
$text=mysql_real_escape_string(($idGuet));
  
  $sql = ("select users.UserId idusers,users.UserFotoPerfil,users.FullName ,list_community_user.IdCommunity,list_community_user.UserId id ,list_community_user.manager_comm from users ,list_community_user where (users.FullName LIKE '$text%' and users.UserId=list_community_user.UserId) and (list_community_user.IdCommunity='$idGuetcomm') limit 4")or die(mysql_error());
	          
              $query = mysql_query($sql);
              while ($mensagem=mysql_fetch_object($query)){
	       
  	                    
$rcont37 = mysql_num_rows($query);
if ($rcont37!=''){
             
             
	 $fotocomp2=($mensagem->UserFotoPerfil);
	 $fotocomp2Id=($mensagem->UserId);
	  $fotocomp2Idnome=($mensagem->FullName);
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  	         

?>
<style>
.ksiieoe838833ue3{
visibility:hidden; 


}
.lloepowpoei838383:hover + .ksiieoe838833ue3{
visibility:visible; 


}
</style>
 <div   onmouseover="mouse_over_menu(this);javascript:this.style.background= '#EFEFEF'"  class="ui_mw_postoosm" onmouseout="javascript:this.style.background= '#FFFFFF'" 
               
    style=";position: relative;margin-bottom:0px;background-color: #FFFFFF; width:235px; height:auto; margin-left:0px;">
    <?php ?> <label class="de_039930"
         style="position: absolute; width: 19px; height: 22px; border: 1px solid #CCCCCC; background-color: #FFFFFF; top: -2px; left:220px; z-index: 90;">
    <img class="de_0399301" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" 
        
        style="position: absolute; top: 2px; left: -1px; width: 18px; height: 18px;"/></label>
        <div  class="estilodeboraesombra24 vide_ooddldP" 
                    
                    
                    
                                        
                                        
                                        
    style="margin: 10px 0px 0px 0px; background-color: #FFFFFF; border: 1px solid #CCCCCC; position: absolute; width: 150px; height:auto; z-index: 100; display:none; top: 8px; left:120px;">
                    <ul style="margin: 10px 0px 0px 0px">
                        <li 
                            class="men_new_90349e3 dhsjhdff775P" onclick="ecew84uewhyeh('<?php echo $mensagem->idusers ;?>','<?php echo $UserId_Cokie;?>','<?php echo $idGuetcomm;?>')"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 150px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Excluir membro</li><li  
                            class="men_new_90349e3 dhsjhdff775P" onclick="ecew84uewhyehbann('<?php echo $mensagem->idusers ;?>','<?php echo $UserId_Cokie;?>','<?php echo $idGuetcomm;?>')"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 150px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Banir membro</li><?php if ($mensagem->manager_comm=='0'){ ?><li  
                            class="men_new_90349e3 dhsjhdff775P" onclick="eei94imoderragdeu('<?php echo $mensagem->idusers ;?>','<?php echo $UserId_Cokie;?>','<?php echo $idGuetcomm;?>')"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 150px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Tornar moderador</li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?><li  
                            class="men_new_90349e3 dhsjhdff775P" onclick="remeei94imoderragdeu('<?php echo $mensagem->idusers ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $idGuetcomm;?>')"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 150px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Remover moderador</li><?php };?></ul></div><?php ?>
     <div style="position: relative; width: 80px; height: 80px; float: left"><img style="position: relative;" onclick="view_prof('<?php echo $mensagem->idusers ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=80&altura=80"/></div>
     <div style="position: relative; width: 135px; height: 70px; float: left; margin-left: 10px; top: 0px; left: 0px; padding-top: 10px;">
         <label onclick="view_prof('<?php echo $mensagem->UserId ;?>')" style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333; position: relative"><?php echo LimiteFrase($fotocomp2Idnome);?></label></div>
         <div style="clear: both"></div>  
         
         
         
         
          <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383"  src="/img/download_manager.png" 
        
        style="position: absolute;bottom:5px;right:5px;"/><div class="boradsemquina3 ksiieoe838833ue3" style="background-color: #555454; position: absolute;z-index:3000; width:87px; height: 39px;;bottom:53px;right:-24px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Moderador</span></div> <?php };?>
        
       </div>
 <?php };};;if ($rcont37=='33222'){?>
<span 
                style="font-family: arial, Helvetica, sans-serif;text-shadow:#FFFFFF 1px 1px 1px, #999999 -1px -1px 1px; font-size: 28px; font-weight: bold; font-style: normal; font-variant: normal; color:#C0C0C0; position: absolute; top:10px; left:10px;">Desculpe , n�o encontramos nenhum membro !</span><?php  
 
 
 }; ?> 
   
  
<?php };}; }else{
exit;

}?>
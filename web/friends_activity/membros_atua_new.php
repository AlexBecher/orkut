<?
require("check_func_db.php");
   
   if (login_chekout()==true){
   sec_session_start();
include("date.php");

$userid=CCUSERIDI;
 
if (CCUSERIDI==1654){
header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o

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
//flush
 mysql_query("DELETE FROM user_atual  Where ccuserid='".CCUSERIDI."' and   ('".time()."' - timestamp > '3600' or timestamp='0') ")or die(mysql_error());; 

$query554= mysql_query("select user_atual.UserMsgSalt,user_atual.UserFotoSalt,user_atual.UserSalt,user_atual.UserSaltData,user_atual.IdOrderSalt,user_atual.Aux1,user_atual.CodAtul,user_atual.UserIdSalt,user_atual.ccuserid,friends_list.Idme,friends_list.Idfriend,friends_list.block from user_atual,friends_list where (user_atual.ccuserid=friends_list.Idfriend and friends_list.Idme='".$userid."' and user_atual.ccuserid<>'0' and user_atual.ccuserid<>'0' and friends_list.block<>'2' and  ('".time()."' - user_atual.timestamp < '3600')) order by user_atual.IdOrder  desc limit 5") or die(mysql_error());
$rcont34 = mysql_num_rows($query554);
if ($rcont34!=''){

$query2333=mysql_query("SELECT user_atual.ccuserid,friends_list.Idme,friends_list.Idfriend,friends_list.block from user_atual,friends_list where (user_atual.ccuserid=friends_list.Idfriend and friends_list.Idme='".CCUSERIDI."' and user_atual.ccuserid<>'0' and user_atual.ccuserid<>'0' and friends_list.block<>'2'  and   ('".time()."' - timestamp < '86400' and  user_atual.timestamp<>'0')) order by user_atual.IdOrder  desc ");
$rcontquery2333 = mysql_num_rows($query2333);
session_register("count_actul");
$_SESSION["count_actul"]=$rcontquery2333; 
?>
<head>
	
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
		    $(document).ready(function () {
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
<style>
			/* Styles specific to this particular page */
			
			.sombra_01{
box-shadow: 0 2px 1px #C0C0C0; -moz-box-shadow: 0 2px 1px #C0C0C0; -webkit-box-shadow: 0 2px 1px #C0C0C0
}
		</style>

		
	
<div id="iedow7UYYRTTDGH" style="display:;">	

<div class="boradsemquina3 sombra_padrao_bottom"
 
                    
                    
                    
    style="border: ; display:;width: 270px;position:relative; height:auto; background-color: #FFFFFF; margin-bottom: 5px;">
    <div id="no_atua_show" class="estilodeboraesombra2"  style="background-color:#FFFFFF ; border: 1px solid #CCCCCC; position: absolute; width: 400px; min-height: 170px; z-index: 400; top:-20px; left: -420px;display:none;"></div>
    <div style="cursor: default;position:relative; width: 270px;height:auto;margin-bottom:5px;padding-bottom:5px; " > 
     <div
        style="margin-left:10px; text-align: left;padding-top:5px; margin-bottom:0px;">
    <span style="font-family:'helvetica neue', helvetica, arial, 'lucida grande', sans-serif;line-height:18px;font-size:12px;color:#999999;font-style:normal;font-variant:normal;letter-spacing:normal;orphans:2;font-weight:bold;text-align:-webkit-auto;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-size-adjust:auto;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);cursor:pointer;position:relative; ">ATUALIZAÇÕES DE SEUS AMIGOS</span></div>

  
    <div id="ac_atua_div" class="scroll-pane" style="position: relative; width:270px; min-height:170px; overflow-x: hidden; top: 0px; left: 0px;">                  
    <div style="cursor: default;position:relative; width: 270px;height:auto; " >                    
  
 
  <div id="inse_atua" ></div>            
                <?php 
                


while($mensagem2 = mysql_fetch_object($query554)) {


               ?><div <?php if ($mensagem2->IdOrderSalt!='0') {?> onclick="load_scrap_39282ui('<?php echo $mensagem2->IdOrderSalt ;?>')"<?php }else{?>onclick="view_prof('<?php echo $mensagem2->UserIdSalt ;?>')" <?php };?> onmouseout="javascript:this.style.background= ''"  
             onmouseover="javascript:this.style.background= '#F5F5F5'"  
    
    
                    style="border-bottom-style: inset; border-color: #EAEAEA; border-bottom-width: 1px; width: 270px; height:50px; padding-top: 5px; padding-bottom: 5px; position: relative; cursor: pointer;"><table class="vi_atua_data" onmouseout="limpar_timeoutA()" ><tr>               
                <td widht="50%" ><input type="hidden" value="<?php echo ($mensagem2->CodAtul)?>"></input><input type="hidden" value="<?php echo ($mensagem2->Aux1)?>"></input><input type="hidden" value="<?php echo ($mensagem2->IdOrderSalt)?>"></input><input type="hidden" value="<?php echo ($mensagem2->UserIdSalt)?>"></input><input type="hidden" value="<?php echo ($mensagem2->UserSaltData)?>"></input><input type="hidden" value="<?php echo ($mensagem2->UserSalt)?>"></input><input type="hidden" value="<?php echo ($mensagem2->UserFotoSalt)?>"></input><input type="hidden" value="<?php echo LimiteFrase(strip_tags($mensagem2->UserMsgSalt,50))?>"></input>
                   
               <img  src="/imagens_rsrc/LOOn0JtHNzb.gif" style="display:none;position: absolute; top: 11px; left: 145px;" 
                        class="load_atua_foto"/>
                <img class="radius_150px" onclick="view_prof('<?php echo ($mensagem2->UserId) ; ?>');"  src="/profile_thumbs/<?php echo ($mensagem2->UserFotoSalt)?>"title="<?php echo ($mensagem2->UserSalt)?>" style="margin-right:5px;width: 40px; height: 40px" />
                </td><td widht="50%" style="width: 210px"><span   onmouseout="limpar_timeout()" style="font-family: arial, Helvetica, sans-serif; font-size: 12px;position:relative; font-weight: bold; font-style: normal; font-variant: normal; color: #666666"><?php echo ($mensagem2->UserSalt)?><input type="hidden" value="<?php echo ($mensagem2->UserIdSalt) ; ?>"></span>
                <span style="word-wrap: break-word; font-family: arial, Helvetica, sans-serif;cursor:pointer; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080">&nbsp;<?php echo ($mensagem2->CodAtul)?>&nbsp;<?php  $UserId36=($mensagem2->Aux1); $query36 = mysql_query("SELECT UserId,UserName FROM users WHERE UserId='$UserId36' limit 1") ; $mensagem36 = mysql_fetch_object($query36); $UserName36=$mensagem36->UserName; echo "$UserName36 " ;?><?php echo LimiteFrase(strip_tags($mensagem2->UserMsgSalt,40))?></span>
                </td></tr></table></div>         
<? };
mysql_free_result ($query554);
mysql_free_result ($query2333);

?><div id="atua_mais"  "></div><div style="clear: both"></div>

<div id="limit_pag"  onclick="carregaAtuaMaisMais();"
                  
                  
                  
                        
                           
    
    
                    style="border: 1px solid #CCCCCC;display:none; width: 220px;height:30px; background-color: #F0F0F0; position: relative;margin-top:20px;margin-left:20px;text-align: center; ">
    <label class="link_foote"  onclick="carregaAtuaMaisMais();" style="width: 100%">
    <label id="mais_postA" >
                       <span style="font-family: tahoma,verdana,arial,sans-serif; font-size: 11px; font-weight: normal; font-style: normal; font-variant: normal; color: #336699; text-align: center;" 
                      >Exibir  mais atualizações </span></label><div id="load_1A" 
                           style="width: 100%; height: 100%"></div></div></div></div></div></div>
           
</div>
<input id="fjwuir743874yakkdlwoerou" type="hidden" value="<?php echo $rcont34;?>">

<?php };};};?>
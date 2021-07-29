<?
require("check_func_db.php");
   
   if (login_chekout()==true){
   sec_session_start();
include("date.php");
 include_once ("sanitizeSql.php");
   
$userid=CCUSERIDI;
 

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuação

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

$limit=Sanitize::filter($_GET['limit'])

 
?>

<div class="dijjfd884774hj" style="display:none; border-color: #EAEAEA; border-bottom-width: 1px;">
<div  style="min-height:50px;">
  <?php 
                

$query554= mysql_query("select user_atual.UserMsgSalt,user_atual.UserFotoSalt,user_atual.UserSalt,user_atual.UserSaltData,user_atual.IdOrderSalt,user_atual.Aux1,user_atual.CodAtul,user_atual.UserIdSalt,user_atual.ccuserid,friends_list.Idme,friends_list.Idfriend,friends_list.block from user_atual,friends_list where (user_atual.ccuserid=friends_list.Idfriend and friends_list.Idme='".$userid."' and user_atual.ccuserid<>'0' and user_atual.ccuserid<>'0' and friends_list.block<>'2' and  ('".time()."' - user_atual.timestamp < '3600')) order by user_atual.timestamp desc  $limit") or die(mysql_error());
$rcont34 = mysql_num_rows($query554);
if ($rcont34!=''){
while($mensagem2 = mysql_fetch_object($query554)) {


               ?> <div <?php if ($mensagem2->IdOrderSalt!='0') {?> onclick="load_scrap_39282ui('<?php echo $mensagem2->IdOrderSalt ;?>')"<?php }else{?>onclick="view_prof('<?php echo $mensagem2->UserIdSalt ;?>')" <?php };?> class="dijjfd884774hjN" style="display:none;"> <div onmouseout="javascript:this.style.background= ''" 
             onmouseover="javascript:this.style.background= '#F5F5F5'"  
    
    
                    style="border-bottom-style: inset; border-color: #EAEAEA; border-bottom-width: 1px; width: 270px; height:50px; padding-top: 5px; padding-bottom: 5px; position: relative; cursor: pointer;"><table class="vi_atua_data" onmouseout="limpar_timeoutA()" ><tr>               
                <td widht="50%" ><input type="hidden" value="<?php echo ($mensagem2->CodAtul)?>"></input><input type="hidden" value="<?php echo ($mensagem2->Aux1)?>"></input><input type="hidden" value="<?php echo ($mensagem2->IdOrderSalt)?>"></input><input type="hidden" value="<?php echo ($mensagem2->UserIdSalt)?>"></input><input type="hidden" value="<?php echo ($mensagem2->UserSaltData)?>"></input><input type="hidden" value="<?php echo ($mensagem2->UserSalt)?>"></input><input type="hidden" value="<?php echo ($mensagem2->UserFotoSalt)?>"></input><input type="hidden" value="<?php echo LimiteFrase(strip_tags($mensagem2->UserMsgSalt,50))?>"></input>
                   
               <img src="/imagens_rsrc/LOOn0JtHNzb.gif" style="display:none;position: absolute; top: 11px; left: 145px;" 
                        class="load_atua_foto"/>
                <img class="radius_150px" onclick="view_prof('<?php echo ($mensagem2->UserId) ; ?>');"  src="/profile_thumbs/<?php echo ($mensagem2->UserFotoSalt)?>"title="<?php echo ($mensagem2->UserSalt)?>" style="margin-right:5px;width: 40px; height: 40px" />
                </td><td widht="50%" style="width: 210px"><span   onmouseout="limpar_timeout()" style="font-family: arial, Helvetica, sans-serif; font-size: 12px;position:relative; font-weight: bold; font-style: normal; font-variant: normal; color: #666666"><?php echo ($mensagem2->UserSalt)?><input type="hidden" value="<?php echo ($mensagem2->UserIdSalt) ; ?>"></span>
                <span style="word-wrap: break-word; font-family: arial, Helvetica, sans-serif;cursor:pointer; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080">&nbsp;<?php echo ($mensagem2->CodAtul)?>&nbsp;<?php  $UserId36=($mensagem2->Aux1); $query36 = mysql_query("SELECT UserId,UserName FROM users WHERE UserId='$UserId36' limit 1") ; $mensagem36 = mysql_fetch_object($query36); $UserName36=$mensagem36->UserName; echo "$UserName36 " ?><?php echo LimiteFrase(strip_tags($mensagem2->UserMsgSalt,40))?></span>
                </td></tr></table></div></div><div style="clear: both"></div>         
<? };};
mysql_free_result ($query554);

?>              
                
                             
</div></div>
<?php };?>


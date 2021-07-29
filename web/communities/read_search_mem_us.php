<?php 
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

include_once ("sanitizeSql.php");

                 $UserId_Cokie =$_SESSION ['UserId'];
               
 	$userid2 = CCUSERIDI;
	

 $idGuet= utf8_decode($_GET['variavel']);
$idGuetcomm=Sanitize::filter($_GET['id']);
 

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
header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
 


if ($idGuet!=''){
?>
  <?php 
$text777 = mysql_real_escape_string(($idGuet));
 if (strlen($text777) > '4'){
$text=mysql_real_escape_string(($idGuet));


    $querycod6 = mysql_query("SELECT * FROM community_users Where ( CommunityName LIKE '%$text777%') or ( CommunityName LIKE '%$text777%' and UserIdPro='".$idGuetcomm."')  order by  IdOrder ASC limit 6")or die(mysql_error());;
 	          
    
$rcont37 = mysql_num_rows($querycod6);
if ($rcont37!=''){

 while ($mensagemcod = mysql_fetch_object($querycod6)){	  
$query17998 = mysql_query("SELECT UserId FROM list_community_user  where UserId='".$idGuetcomm."' and IdCommunity='".$mensagemcod->IdCommunity."'  order by IdOrder DESC limit 1 ")or die(mysql_error());;
$rcont37998 = mysql_num_rows($query17998);
 $aunx00='0'; 
if ($rcont37998!='0'  or $mensagemcod->UserIdPro==$idGuetcomm){
$aunx00='1';
?>
  <div  class="boradsemquina3 sombra_padrao_bottom" style=" position: relative; width: 250px; height: auto; margin-left: 5px; background-color:#FFFFFF; float: left;margin-bottom:10px;">
        <div style="position: relative; width: 250px; height: 80px;"><img src="bg_community_thumbs/<?php if ($mensagemcod->CommunityImg !=''){ echo $mensagemcod->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>"></div>
        <div style="position: relative; width: 230px; height: 100px; padding: 10px;margin-top:10px;">
            <label onclick="call_pane_comm('<?php echo $mensagemcod->IdCommunity;?>','0');" style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal;cursor:pointer; font-variant: normal; color: #666666"><?php echo LimiteFrase($mensagemcod->CommunityName,25)?></label><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080">Membros (<?php if ($rcont37 < '2') { echo "01"; }else{ echo $rcont37;}?>)</span><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"></span>
           <label class="botton_cinza"
                
                style=" padding: 5px 6px 5px 6px; position: absolute; top: 80px; left: 145px;">Participando</label></div>
                
                
                </div>
 <?php };};};if ($aunx00=='0'){
 }; ?> 
   
  
<?php };}; }else{
exit;

}?>
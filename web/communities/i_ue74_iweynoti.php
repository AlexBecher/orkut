<?php 
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

include_once ("sanitizeSql.php");
                 
 


 if($_POST['id']!='' and $_POST['com']!='' && $_POST['id']==USERID_ID){
$Aux_idorder = Sanitize::filter($_POST['id']);
$rasfaf=Sanitize::filter($_POST['com']);

//verifica se sou dono da comunidade

//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro,notifications FROM community_users  where IdCommunity='$rasfaf' and UserIdPro='".$Aux_idorder."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);

if ($rcontqudsdsdcm!='0'){
 $mensagem15 = mysql_fetch_object($querycod);
if ($mensagem15->notifications=='0'){ $ydusuu774774='1';}else{$ydusuu774774='0';};
 echo '1';
 mysql_query("UPDATE  community_users set notifications='$ydusuu774774' where IdCommunity='$rasfaf' and UserIdPro='".$Aux_idorder."' limit 1");

}else{

//moderador
$query17m = mysql_query("SELECT UserId,notifications FROM list_community_user  where IdCommunity='$rasfaf' and UserId='".$Aux_idorder."' limit 1 ")or die(mysql_error());;
$rcont37m = mysql_num_rows($query17m);


if ($rcontqudsdsdcm=='0' && $rcont37m!='0'){
 $mensagem15 = mysql_fetch_object($query17m);
if ($mensagem15->notifications=='0'){ $ydusuu774774='1';}else{$ydusuu774774='0';};

echo '2';
 mysql_query("UPDATE  list_community_user set notifications='$ydusuu774774' where IdCommunity='$rasfaf' and UserId='".$Aux_idorder."' limit 1 ");
}; 
 };
 };
}else{

exit;
}

?>

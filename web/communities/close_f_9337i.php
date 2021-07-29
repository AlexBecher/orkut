<?php 
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

include_once ("sanitizeSql.php");
                 
 


 if($_POST['Id_m001']!='' and $_POST['idcom']!=''){
$Aux_idorder = Sanitize::filter($_POST['Id_m001']);
$rasfaf=Sanitize::filter($_POST['idcom']);

//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='$rasfaf' and UserIdPro='".$_SESSION['UserId']."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);

//moderador
$query17m = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$rasfaf' and UserId='".$_SESSION['UserId']."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$rcont37m = mysql_num_rows($query17m);


if ($rcontqudsdsdcm!='0' or $rcont37m!='0'){


 mysql_query("UPDATE  forum set closed='1' where (IdCommunity='$rasfaf' and idforum='$Aux_idorder') ");
 //mysql_query("UPDATE FROM ask_forum where idforum='$Aux_idorder' ");
}; 
 };
}else{

exit;
}

?>

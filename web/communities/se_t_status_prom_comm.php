<?php
              

if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

exit;
}else{


require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
  
require ('ad_lash_inj.php');
include_once ("sanitizeSql.php");
 

if (!empty($_POST['id'])&& ($_POST['set']!='') && ($_POST['idcomm']!='')) {
$id = ((Sanitize::filter($_POST['id'])));
$cat= ((Sanitize::filter($_POST['set'])));
$idcomm= ((Sanitize::filter($_POST['idcomm'])));


//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='$idcomm' and UserIdPro='".USERID_ID."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);
if ($rcontqudsdsdcm!=''){

mysql_query(" UPDATE promoter SET status='$cat' where idorder='$id' and ccuserid='".CCUSERIDI."'  limit 1");

 
};
};
  
  
}else{
exit;
}



}
?>
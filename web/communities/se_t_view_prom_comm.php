<?php
              

if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

exit;
}else{


require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
  
require ('ad_lash_inj.php');
include_once ("sanitizeSql.php");
 

if (!empty($_POST['id'])&& ($_POST['cod']!='')) {
$id = ((Sanitize::filter($_POST['id'])));
$cod= ((Sanitize::filter($_POST['cod'])));


//verifica promoчуo
$querycod = mysql_query("SELECT idorder FROM promoter  where idorder='$id' and id='$cod' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);
if ($rcontqudsdsdcm!=''){


$querycod1 = mysql_query("SELECT idorder FROM promoter  where idorder='$id' and id='$cod' and ccuserid='".CCUSERIDI."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm1 = mysql_num_rows($querycod1);
if ($rcontqudsdsdcm1==''){

mysql_query("INSERT INTO view_promoter(ccuserid,idview_promoter,timestamp)values ('".CCUSERIDI."','$id','".time()."') ");
};
};
};
  
  
}else{
exit;
}



}
?>
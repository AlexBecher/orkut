<?php 
if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

exit;
}else{
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();


require ('ad_lash_inj.php'); 


if(!empty( $_POST['idcomm'] ) ){
$aux_id=strip_word_html($_POST['idcomm']);
$value=strip_word_html($_POST['id']);

//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='$aux_id' and UserIdPro='".USERID_ID."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);

//moderador
$query17m = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$aux_id' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$rcont37m = mysql_num_rows($query17m);

if ($rcontqudsdsdcm!='0' or $rcont37m!='0'){


mysql_query("UPDATE   list_community_user SET manager_comm='1' where (UserId='$value' and IdCommunity='$aux_id') limit 1");
//mysql_query(" INSERT INTO  ban_user_commu (UserId,IdCommunity) VALUES ('$value','$aux_id')");




}; 

};
}else{

echo "Ops! erro...";
}
};
?>

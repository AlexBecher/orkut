<?
include("date.php");

require ('ad_lash_inj.php');
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
               
if ($_POST['idOrder']!='') {             
$titulo = strip_word_html(utf8_decode($_POST['about']));
$idPropri= mysql_real_escape_string(strip_word_html($_POST['id']));
$id=mysql_real_escape_string(strip_word_html($_POST['idOrder']));

//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdOrder='$id' and UserIdPro='".$_SESSION['UserId']."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);
if ($rcontqudsdsdcm!='0' && $idPropri==$_SESSION['UserId']){

 
$itimesamp=((time()));	 
 	
 mysql_query("UPDATE community_users  SET  AboutComm='$titulo' where 	IdOrder='$id' and UserIdPro='$idPropri' ");
 
};
 
};
echo json_encode($resumo); 
}else{


}

?>
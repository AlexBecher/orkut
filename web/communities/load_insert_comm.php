<?
require("check_func_db.php");
if((login_chekout()==true)) {

    sec_session_start();

include_once ("sanitizeSql.php");


require ('ad_lash_inj.php');
include("date.php");


if (empty($_SESSION["X_i84ug"])){
session_register("X_i84ug");
$_SESSION["X_i84ug"]=time(); 

}else{

if (((time() - ($_SESSION["X_i84ug"])) > '50')){
session_register("X_i84ug");
$_SESSION["X_i84ug"]=time(); 

}
}

  if (($_SERVER['REQUEST_METHOD'] == 'POST' && (time() - ($_SESSION["X_i84ug"])) < '10')) {
              

if ($_POST['idComm']!='') {
             
$titulo = strip_word_html(utf8_decode($_POST['titulo']));
$type = Sanitize::filter(strip_word_html($_POST['type']));
$idPropri= Sanitize::filter(strip_word_html($_POST['id']));
$id=Sanitize::filter(strip_word_html($_POST['idComm']));
$cat=strip_word_html(utf8_decode($_POST['cat']));

$aux_id_commu=(sha1(uniqid(time())));;

 
$itimesamp=((time()));	
 	if ($titulo!='' && $idPropri==$_SESSION['UserId']){
$querycod8343849 = mysql_query("SELECT category FROM category_communities  where text='".mysql_real_escape_string($cat)."'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849);
 	
mysql_query(" INSERT INTO community_users  ( IdCommunity,UserIdPro,CommunityName,CommunityPrivacy,CommunityAux,timestamp,category) VALUES ('".$aux_id_commu."','".$_SESSION['UserId']."','$titulo','$type','','$itimesamp','".$mensagemcod783748347348387->category."')");
 //mysql_query(" INSERT INTO envia_email_evento ( IdUser,IdOrderEventos,pagina,IdOrder,tipo) VALUES ('$UserId_Cokie','$id_order','1','null','$tipo')");
echo $aux_id_commu;
 	};
 
};
  };
}else{
session_register("X_i84ug");
$_SESSION["X_i84ug"]=''; 

echo "Ops! erro...";
} 
?>
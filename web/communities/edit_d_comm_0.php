<?
require("check_func_db.php");
   
   if (login_chekout()==true){
   sec_session_start();

function getTimeStamp() {
	return time();
}
 include_once ("sanitizeSql.php");
require ('ad_lash_inj.php');

$aux_0304=getTimeStamp();
$timout_e9="1000";
$aux_type="";
include("date.php");
                $UserId_Cokie = $_SESSION['UserId'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION["UserName"];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION["UserEmail"];
                $UserIgreja_Cokie =$_SESSION ["UserIgreja"];
                
                

$cod=Sanitize::filter($_POST['cod']);
$detail=sanitize(utf8_decode($_POST['detail']));
$type=strip_word_html(utf8_decode($_POST['type']));
$cat=strip_word_html(utf8_decode($_POST['cat']));
$topic=strip_word_html(utf8_decode($_POST['topic']));

//verifica comunidade
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='$cod' and UserIdPro='".USERID_ID."' limit 1 ")or die(mysql_error());;
$rcontqudsdsdcm = mysql_num_rows($querycod);

//moderador
$query17m = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$cod' and UserId='".USERID_ID."'  and manager_comm='1' limit 1 ")or die(mysql_error());;
$rcont37m = mysql_num_rows($query17m);


if ($rcontqudsdsdcm!='0' or $rcont37m!='0'){

//determina topico para todos criarem ou somente moderador
if(isset($_POST['topic'])){
/*
 * cod topic
 * 0 -> somente donos e moderadores podem criar topicos
 * 1 -> todos podem criar topicos
 */	
	
mysql_query("UPDATE community_users SET topic_open='$topic' WHERE (IdCommunity='$cod' and UserIdPro='".USERID_ID."') limit 1");

};

if(!empty($cod) && $nomemm!=''){
	
	
 //mysql_query("UPDATE community_users SET CommunityName='$nomemm' WHERE (IdCommunity='$cod' and UserIdPro='".USERID_ID."')limit 1 ");

};
 if(!empty($cod) && $detail!=''){
	
	
mysql_query("UPDATE community_users SET detail='$detail',AboutComm='' WHERE (IdCommunity='$cod' and UserIdPro='".USERID_ID."') limit 1");

};

if(isset($_POST['type'])){
if ($type=='Público'){ $aux_type='2';};
if ($type=='Privado'){ $aux_type='1';};

	
mysql_query("UPDATE community_users SET CommunityPrivacy='$aux_type' WHERE (IdCommunity='$cod' and UserIdPro='".USERID_ID."') limit 1");

}; 
if(!empty($cat)){
$querycod8343849 = mysql_query("SELECT category FROM category_communities  where text='".mysql_real_escape_string($cat)."'  limit 1")or die(mysql_error());;
$mensagemcod783748347348387 = mysql_fetch_object($querycod8343849);

	
mysql_query("UPDATE community_users SET category='".$mensagemcod783748347348387->category."' WHERE (IdCommunity='$cod' and UserIdPro='".USERID_ID."') limit 1");

}; 
};     
}else{

echo "Ops! erro...";
} 
?>
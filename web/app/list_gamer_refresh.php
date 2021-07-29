<?

if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){

exit;
}else{
require("../check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");   

    if (login_chekout()==true){
    sec_session_start();
   
include("../lapse.php");

include_once ("../sanitizeSql.php");
                
  
$aux_oline=false;
$aux_oomann="";
$aux_count_friends="";


$response= array();
$response['read']='0';
$response['check']='1';
$response['count']='11';

$auudsud=Sanitize::filter($_POST['id']);	
if ($auudsud!=''){
$query375555r43 = mysql_query("SELECT idgame FROM game_activity  where idgame='$auudsud' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
 
    $rcont37kkw3 = mysql_num_rows($query375555r43);
if ($rcont37kkw3==''){

mysql_query(" INSERT INTO game_activity (UserId,idgame,lastactivity) VALUES ('".USERID_ID."','$auudsud','".time()."')");

}else{
	mysql_query("update game_activity  set lastactivity = '".time()."' where UserId = '".USERID_ID."' and idgame='$auudsud' ");
	//atualiza status me
	
};

$asyaysyuy=time();
$query375555r434 = mysql_query("SELECT game_activity.idgame FROM game_activity  where (idgame='$auudsud' and  ($asyaysyuy - lastactivity < 360)) order by lastactivity DESC   ")or die(mysql_error());;
 
 $response['count'] = mysql_num_rows($query375555r434)+9;
 
 };}
 
header('Content-type: application/json; charset=utf-8');

   			
    $d[]=$response;
      echo json_encode($d);
};
 
 ?>

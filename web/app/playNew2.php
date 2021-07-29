<?php 
require("../check_func_db.php");
   
    if (login_chekout()==true){
    sec_session_start();

    
    
      function list_game_029($cod){
    
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://play.plinga.de/user/sso/3530/'.$cod.'/?url=http://orkut.one/games/play.php&locale="pt-br"');

curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body 


// Params for sso - if you do not send these parameters user will see normal landing page.

$timestamp = time();

$apikey = 'kVHc3cWQYRtx';

$userMailAdresse = USEREMAIL;

$sig = md5 ( $apikey. $userMailAdresse.$timestamp);

$data = Array();


$data["timestamp"] = $timestamp;

$data["mail"] = $userMailAdresse;

$data["username"] = USERNAME_NAME;
$data["sig"] = $sig;
$data["secretkey"] = 'kVHc3cWQYRtx';

$data["target_element"]="id_oiiejj38877uje";

    $data['picture'] = "/profile_thumbs/".USERFOTOTHUMB."";

if (USERGEN=='2'){
$data['gender'] = '1';
}else{
$data['gender'] = '2';

}
//lista de amigos

    	function getFriendsList($userid,$time) {
	
		$id_oodj=$userid;

	
		$sql = ("select users.UserEmail,users.ccuserid userid, users.UserName username, users.NikName link, users.UserFotoThumb avatar, cometchat_status.lastactivity lastactivity,  cometchat_status.status, cometchat_status.message, cometchat_status.isdevice,cometchat_status.lastseen lastseen, cometchat_status.lastseensetting lastseensetting from friends_list join users on friends_list.Idfriend = users.ccuserid left join   cometchat_status on users.ccuserid = cometchat_status.userid where (friends_list.Idme= '".mysqli_real_escape_string($id_oodj)."' and friends_list.block<>'2')and (((".mysqli_real_escape_string($time)."-".'172800'.") < cometchat_status.lastactivity) OR cometchat_status.isdevice = 1 ) order by cometchat_status.lastactivity DESC limit 10");
 
	
		return $sql;	
	}
	
	$sql = getFriendsList(CCUSERIDI,$timestamp);
	$query = mysql_query($sql);
	while ($chat = mysql_fetch_assoc($query)) {
 

 $xml .= "\n";
  $xml .= $chat['UserEmail'].",\n"; 
      $xml .= "\n";


	};
	//echo $xml;
	//lista de amigos

//$data["friends"] = 	$xml;	
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$result = curl_exec($ch);

$result = json_decode($result, true);

    // Pega o código de resposta HTTP
$resposta = curl_getinfo($ch, CURLINFO_HTTP_CODE);


return  $resposta;


    };

//api plinga
echo  list_game_029('2');


    }?>
  
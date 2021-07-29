<?php
              

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        
        //exit script outputting json data
        $output = json_encode(
            array(
                'type' => 'error',
                'text' => 't.0'
            ));
        
        die($output);
    }
    

require("check_func_db.php");

function utf8tify($value)
{
    $encodings = ['UTF-8', 'ISO-8859-1', 'ASCII'];
    
    $stringEncoding =  mb_detect_encoding($value, $encodings, true);
    
    return mb_convert_encoding($value, 'UTF-8', $stringEncoding);
    
}
//quote

//verifica quotes
/*
 *
 * $str = 'before-str-after';
 if (preg_match('/before-(.*?)-after/', $str, $match) == 1) {
 echo $match[1];
 }
 *  olhar aqui https://stackoverflow.com/questions/5696412/how-to-get-a-substring-between-two-strings-in-php
 *
 */

//$fullstring = '[quote=alex alex nje]teste  dsjdsjdjs  dsjdj3993jje=[/quote]';
//$parsed = get_string_between($fullstring, '[quote]', '[/quote]');

//echo getQuotes($fullstring);
//use
/*
 * 
 * $crewinfo = json_decode(getQuotes(text long), true);

     echo  $crewinfo['texto'];
 * 
 */
function getQuotes($string){
    $call_back = array('texto' =>'','autor' =>'','status'=> 'T','all_text'=>'');
    $frase_all = "";
    $nomeAutor = "";
    $frase = "";
    $start_quote = "[quote=]";
    $matches = strstr($string,"[quote=");
    
    $matchesw = array_splice( ( explode( '[', $matches) ), 1 );
    if ($matchesw && $string) {
        
        
        $stringN = explode("=", $matchesw[0], 2); // separa tudo que estiver depois do sinal de =
        
        
        $string2 = explode("]", $stringN[1], 2); // depois do sinal de = separa tudo que tiver antes de ]
        
        $nomeAutor =  $string2[0];
        
        $start_quote ="[quote=$nomeAutor]";
        
        $stringN3 = explode("[/quote]", $matchesw[1], 2);//pega tudo deppois do [/quote]
        $a_ =  strpos($stringN3[0],"/quote]");
        $count_l += strlen("/quote]");
        $frase_all = substr($stringN3[0],$count_l);
        
        
        
        $frase =  get_string_between($string, $start_quote, '[/quote]');
        //transforma em array
        $call_back['all_text'] =$frase_all; 
        $call_back['status'] ='M'; 
        $call_back['texto'] = strip_tags($frase);
        $call_back['autor'] = strip_tags($nomeAutor);
        return  json_encode($call_back);
        
    }else{
        
        $call_back['all_text'] =$string;
        $call_back['status'] ='T';
        $call_back['texto'] = null;
        $call_back['autor'] = null;
        return  json_encode($call_back);
    }
    
    
}
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}


//quote



   if (login_chekout()==true){
   sec_session_start();
 // anti flood protection
if((empty($_SESSION['last_session_request2']) ||  (time() - $_SESSION['last_session_request2'] > 10)) && ($_SESSION['flood2'] < 10 || empty($_SESSION['flood2']))){
//regra para anti-flood2
//postagens consecutivas a cada 10 segundos superior a 10 vezes o sistema bloqueia por 1 minuto. 
  
require ('ad_lash_inj.php');
include_once ("sanitizeSql.php");
 

$DISABLE_YOUTUBE=1;
function getTimeStamp() {
	return time();
}
$aux_0304=time();
$timout_e9="10000";
if (($aux_0304!='')){


include('date.php');
require ('guardian_tags.php');
require ('remov_iframes_html.php');

sec_session_start();
$suiie='1';

                $UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
                 $UserMsg_Cokie =$_SESSION ['UserMsg'];
              
                
function sanitize_core2($text) {
	
	$text = htmlspecialchars($text, ENT_NOQUOTES);
	$text = str_replace("\n\r","\n",$text);
	$text = str_replace("\r\n","\n",$text);
	$text = str_replace("\n"," <br> ",$text);

	
	$text = trim($text);
	return $text;
}




$fotothumb=USERFOTOTHUMB;


//check $_POST vars are set, exit if any missing
if (!isset($_POST["data"])) {
    $output = json_encode(array('type' => 'error', 'text' => 'lks'));
    die($output);
}

//post via tópico para resposta
if(isset($_POST['data']))
{
    //echo $searcharray['id_ff'];
    parse_str($_POST['data'], $searcharray);
   // $searcharray['f1'];
 
    $IdOrderEventos=Sanitize::filter($searcharray['id_ff']);
    $auuwdw98r8usduuue777 =$IdOrderEventos;
		//não grava no post
 
  $texto = ($searcharray['mensagem']);
  
//verifica se tem quote  
 $html_ask=""; 
 $html_ask_msgs="";
  $crewinfo = json_decode(getQuotes($texto), true);
  
  if ($crewinfo['status']=="M"){
      //tem
  
      $html_ask="<p><b>".$crewinfo['autor'].":</b></p>
   <blockquote><p>".$crewinfo['texto']."</p>
   </blockquote><p>".$crewinfo['all_text']."</p>";
      $html_ask_msgs =$crewinfo['all_text'];
  }else{
      //não tem
      
      $html_ask = $crewinfo['all_text'];
      $html_ask_msgs =$crewinfo['all_text'];
  };
  $texto =  $html_ask;
 
  

  
 $foto_img_salt="";  
//detecta e incorpora videos
function autolink_video($string) {
 $hashtags= FALSE;  
 //"/^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/"
    preg_match_all("/http[s]?:\\/\\/www\\.youtube\\.com\\/watch\\?v=(\\w+)/", strip_tags($string), $matches);  
    if ($matches) {
        $hashtagsArray = array_count_values($matches[0]);
        $hashtags = array_keys($hashtagsArray);
    
    
for($e=0;$e < sizeof($hashtagsArray); $e++) {
$link=$hashtags[$e]; 
 $substituir_pore = '<iframe width="500" height="315" src="'.$link.'" frameborder="0" allowfullscreen></iframe>';;
 			$string = str_replace($hashtags[$e], $substituir_pore, $string);
$string = str_replace("youtube.com/watch?v=","youtube.com/embed/",$string);
$string = str_replace("youtube.com/v/","youtube.com/embed/",$string);
$string = str_replace("youtube-nocookie.com/v/","youtube.com/embed/",$string);
 			
			
	}
    };   
    return $string;
}
//detecta e incorpora videos 
 

$querycod8383 = mysql_query("SELECT IdCommunity FROM forum Where idforum='$IdOrderEventos' limit 1")or die(mysql_error());
$mensagem33jweje = mysql_fetch_object($querycod8383);

mysql_query("UPDATE community_users SET timestamp2='".time()."' where  IdCommunity='$mensagem33jweje->IdCommunity'  limit 1");
mysql_query("update list_community_user set lastactivity = '".time()."' where UserId = '".USERID_ID."' and IdCommunity='$mensagem33jweje->IdCommunity' limit 1");



$UserMsg=autolink_video(sanitize(utf8_decode(strip_word_iframe($texto))));

//$usddjrespojdjask1=$_POST['uiw_927_521gsXX1'];
//$usddjrespojdjask2=$_POST['uiw_927_521gsXX2'];
//$usddjrespojdjask3=$_POST['uiw_927_521gsXX3'];  
//data para respostas das respostas dos tópcios 
/* 1° id_do forum 
 * 2° id_post
 * 3° ccuserid do dono da respostas
 * 
 */
//verifica postagens repetidas
// include('app/crip/cod_baseVal.php');
//$aux_post_session =add_cod_transfer("$IdOrderEventos.$UserId_Cokie.$UserName_cokie.$fotothumb.$video.$path.$foto_img_salt.$UserMsg.$usddjrespojdjask3.$usddjrespojdjask2"); 

if ($texto){
mysql_query(" INSERT INTO ask_forum (idforum,UserId,UserName,UserFotoThumb,timestamp,LinkVideo,PathVideo,ImgPost,ask_forum) VALUES ('$IdOrderEventos','$UserId_Cokie','$UserName_cokie','$fotothumb','$aux_0304','','','$foto_img_salt','$UserMsg')");

//up no topico
 mysql_query("UPDATE forum SET lastactivi='$aux_0304' where  idforum='$IdOrderEventos' ");
 
//envia notificações para o dono das comunidades que participaram do topico
$querycod = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='$mensagem33jweje->IdCommunity' and UserIdPro<>'$UserId_Cokie' and notifications='0'  limit 1 ")or die(mysql_error());;
$rcont37b8938ye38r = mysql_num_rows($querycod);
if ($rcont37b8938ye38r!='0'){
$mensagemsdds = mysql_fetch_object($querycod);
//INCORPORAR ESTAS LINHA ONDE SERÁ REALIZADA A NOTIFICAÇÃO
//CODIGOS DE NOTIFICAÇÃO
/* 1 -> VIBE
 * 2 -> DEPOIMENTOS
 * 3 -> EVENTOS
 * 4 -> FOTOS
 * 5 -> VIDEOS
 * 6 -> COMUNIDADES
 * 7 -> AMIGOS
 * //CommandNoti -> IdOrders  
 * DEPOIMENTOS
 * EVENTOS
 * VIBES
 * FOTOS
 * COMUNIDADES
 * OUTROS AUX -> DIZ O QUE É ESTA NOTIFICAÇÃO
 *///CODIGOS DE NOTIFICAÇÃO
 //define as variáveis para notificações
//$USERID_NOTIF //USUÁRIO NOTIFICADO
//$USERID_ORIG //USUÁRIO QUE NOTIFICOU
 //$COD_NOTI //CODIGOS DE NOTIFICAÇÃO
//$COMMAND_NOTI //IdOrder da notificação
//define as variáveis para notificações
 $USERID_NOTIF = "$mensagemsdds->UserIdPro";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "$UserId_Cokie";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="$IdOrderEventos";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="8";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5,FORUM->6,ASK_FORUM->8)
 $CODAUX_9993="$aux_0304";//CHAMA UMA IDORDER ESPECÍFICA
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX,CODAUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD','$CODAUX_9993')");

};
 
 
 // envia notificação para todos os membros da commm
//verifica conversas no forum

$query55d3 = mysql_query("SELECT UserId,COUNT(UserId) AS quant FROM ask_forum where  idforum='$IdOrderEventos' GROUP BY UserId ORDER BY quant DESC limit 100 ")or die(mysql_error());
    $rcont37 = mysql_num_rows($query55d3);
if ($rcont37!='0'){
while ($mensagem = mysql_fetch_object($query55d3)){
$query17 = mysql_query("SELECT UserId FROM list_community_user  where   IdCommunity='$mensagem33jweje->IdCommunity' and UserId='".$mensagem->UserId."' and ($aux_0304 - lastactivity < '86400') and notifications='0' limit 1 ")or die(mysql_error());;
$rcont3733 = mysql_num_rows($query17);


//usuário banido
$query17b = mysql_query("SELECT UserId FROM ban_user_commu  where IdCommunity='$mensagem33jweje->IdCommunity' and UserId='".$mensagem->UserId."' limit 1 ")or die(mysql_error());;
$rcont37b = mysql_num_rows($query17b);



//envia notificações para usuário que participaram dos topicos
if (($mensagem->UserId!=$UserId_Cokie) && ($rcont3733!='0' && $rcont37b=='0')){
//INCORPORAR ESTAS LINHA ONDE SERÁ REALIZADA A NOTIFICAÇÃO
//CODIGOS DE NOTIFICAÇÃO
/* 1 -> VIBE
 * 2 -> DEPOIMENTOS
 * 3 -> EVENTOS
 * 4 -> FOTOS
 * 5 -> VIDEOS
 * 6 -> COMUNIDADES
 * 7 -> AMIGOS
 * //CommandNoti -> IdOrders  
 * DEPOIMENTOS
 * EVENTOS
 * VIBES
 * FOTOS
 * COMUNIDADES
 * OUTROS AUX -> DIZ O QUE É ESTA NOTIFICAÇÃO
 *///CODIGOS DE NOTIFICAÇÃO
 //define as variáveis para notificações
//$USERID_NOTIF //USUÁRIO NOTIFICADO
//$USERID_ORIG //USUÁRIO QUE NOTIFICOU
 //$COD_NOTI //CODIGOS DE NOTIFICAÇÃO
//$COMMAND_NOTI //IdOrder da notificação
//define as variáveis para notificações
 $USERID_NOTIF = "$mensagem->UserId";//USUÁRIO NOTIFICADO
 $USERID_ORIG = "$UserId_Cokie";//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = "6";//CODIGOS DE NOTIFICAÇÃO
 $COMMAND_NOTI="$IdOrderEventos";//COMMANDO DE NOTIFICAÇÃO
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="8";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4 ,ADICIONOU->5,FORUM->6,ASK_FORUM->8)
 $CODAUX_9993="$aux_0304";//CHAMA UMA IDORDER ESPECÍFICA
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX,CODAUX) VALUES ( '$USERID_NOTIF','$USERID_ORIG','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD','$CODAUX_9993')");

};

};

}; 
 

session_register('foto_post_perfil94495495'); 
$_SESSION['foto_post_perfil94495495']='';

$d[]=sha1(time());


//html form display msgs
//header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂƒÃ‚Â§ÃƒÂƒÃ‚Â£o
$nome_full = (USERFULL_NAME);
$foto_fo = USERFOTOTHUMB;
$nik_nameF= NIKNAMME;
$msg_p = html_entity_decode(htmlentities($html_ask_msgs, ENT_QUOTES, 'UTF-8'), ENT_QUOTES , 'ISO-8859-1');
$text_msgsg =  <<<html
<div class="topic loga">
 <div class="topic-header loga">
 <div class="avatar loga">
 <a href="/$nik_nameF">
 <img src="/cropImg.php?arquivo=profile_img/$foto_fo&largura=70&altura=70" class="img-scrapbook loga"> </a>
 </div>
  <div class="desc loga">
  <p class="name loga"> <a href="/$nik_nameF">$nome_full</a> </p>
  <p class="time loga">agora</p>
  </div>
  </div>
<div class="topic-body loga" style="overflow:hidden">
<p>$msg_p</p>
  </div>
</div>

html;

echo $text_msgsg;


};
       
};
//post via tópico para resposta

  
   };
$_SESSION['last_session_request2'] = time();
}else{
 $_SESSION['flood2']++; 
if ((time() - $_SESSION['last_session_request2']) > '60'){
$_SESSION['flood2']=0;  
 
}
exit;


}  
   //antiflood
}

    }
    
    

?>
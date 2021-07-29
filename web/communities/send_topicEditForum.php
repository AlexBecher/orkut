<?php
 require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();


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
$foto_img_salt=$_SESSION['foto_post_perfil94495495'];

$UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
                 $UserMsg_Cokie =$_SESSION ['UserMsg'];
              
                


$idEvents=Sanitize::filter($_POST['idEventosUser']);
$IdOrderEventos=Sanitize::filter($_POST['IdOrderEventos']);
$id_post_enquet=Sanitize::filter($_POST['jjsioskkskaenque']);
$titlo_forum=mysql_real_escape_string($_POST['ti_03902oedue']);
$fotothumb=($_POST['foto39ur3r6i2ryy4']);
//INSERIR NOS ARQUIVOS COM POST E GET 
   $tokepass7 = "_ui";//nome no coookie
   $coockie_token_pass=$_COOKIE["$tokepass7"];//carrega cookie
   $namepage="comunity_load.php";
   $pagename="".sha1($namepage)."";
   $cod_forum=$_POST['ti_03902oedued'];
  
 
 //insert msgpost
if (($foto_img_salt!='' and $titlo_forum!='') or ($_POST['form_data']!='' and $titlo_forum && $_POST['ti_03902oedued']!='')){

	//nใo grava no post
 
$texto =($_POST['form_data']);
  // match protocol://address/path/
  
    // match www.something
    
 $str =($_POST['form_data']);
 
//Regex
//$regex = "/youtu(be.com|.b)(\/v\/|\/watch\\?v=|e\/)(.{11})/";
 
//UPDATE - 22-11-2011
$regex = "#youtu(be.com|.b)(/embed/|/v/|/watch\\?v=|e/|/watch(.+)v=)(.{11})#";
 
preg_match_all($regex , $str, $matches);
/* 
if(!empty($matches[4]))
{
    $codigos_unicos = array();
    $quantidade_videos = count($matches[4]);
    foreach($matches[4] as $code)
    {
        if(!in_array($code,$codigos_unicos))
            array_push($codigos_unicos,$code);
 
    }
   

$video="https://www.youtube.com/v/$codigos_unicos[0]";    
$video7 ="https://www.youtube.com/watch?v=$codigos_unicos[0]";
require ('YouTubeClass.php');

$dados=new YouTube("".$video7."");
$dados_video=$dados->GetTags();
 $title=utf8_decode($dados_video['title']);
 $infor=utf8_decode($dados_video['description']);

$link_pp="";

}else{
    $aux_video="";
    $video="";
}
*/
if($video7){
$link_video_001="https://img.youtube.com/vi/".$codigos_unicos[0]."/0.jpg";


$url  = $link_video_001;
$imagem_001=md5(uniqid(time())) . ".jpg";
   $path = 'Videos_Screen_Users/'.$imagem_001.'';
 
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
   $data = curl_exec($ch);
 
   curl_close($ch);
 if ($data!=''){ 
   file_put_contents($path, $data);
}else{
$path="Videos_Screen_Users/old-338zss61_640.png";
}   
    
}else{
$link_video_001='';
}


//fim do codigo para inserir video no post


$UserMsg= mysql_real_escape_string($texto);
$querycodsdsds = mysql_query("SELECT UserIdPro FROM community_users  where IdCommunity='$IdOrderEventos' and UserIdPro='".USERID_ID."' limit 1 ")or die(mysql_error());;
 $rcont37kksssdsdw = mysql_num_rows($querycodsdsds);
$query375555ssssr4 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$IdOrderEventos' and UserId='".USERID_ID."' and manager_comm='1' limit 1 ")or die(mysql_error());;
 $rcont37kkwsdsds = mysql_num_rows($query375555ssssr4);
 
//s๓ edita se eu for o dono da comunidade ou moderardor
 if ($rcont37kkwsdsds!='' or $rcont37kksssdsdw!=''){  
if ($titlo_forum!=''){
// nome 
mysql_query(" UPDATE  forum set nometopico='$titlo_forum'  where idforum='$cod_forum'   limit 1");
};
if ($UserMsg!=''){
//ask
mysql_query(" UPDATE  forum set ask_forum='$UserMsg' where idforum='$cod_forum'  limit 1");
};
if ($foto_img_salt!=''){
//img   

mysql_query(" UPDATE  forum set ImgPost='$foto_img_salt' where idforum='$cod_forum'  limit 1");
};
if ($video!='' or $path!=''){
//video
mysql_query(" UPDATE  forum set LinkVideo='$video',PathVideo='$path'  where idforum='$cod_forum'  limit 1");
};

session_register('foto_post_perfil94495495'); 
$_SESSION['foto_post_perfil94495495']='';
 };
$d[]=sha1(time());
       echo json_encode($d);
       
};
//NO FIM DA EXECUวรO COLOQUE ESTA LINHA
   $domain =$_SERVER['HTTP_HOST'];
   $tokepass7 = "_ui";//nome no coookie
   setcookie("$tokepass7", "" ,time() -3600,"/",$domain,false, true);//EXCLUE COOKIE
  
  

}
}else{
exit;

}
?>
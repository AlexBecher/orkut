<?php 

  header('Access-Control-Allow-Origin: *');
// header('Content-Type: text/html; charset=ISO-8859-1');
/*
 ************************************************************************
 Copyright [2015] [Orkuti Brasil LTDA.]
 
 Desenvolvido por Alex Becher

 Função que recebe requisições de dados do APP para o WERServer
 
 ************************************************************************
 */
/*                                   ADVANCED                            */
define('KEY',					'E231B2C9BCC8474DA2E260B6C8CF60D3'   	 );
/*                                  VARIÁVEIS


                                                                 */
//////////////*MEMCAHED*/////////
define('MEMCACHED_HOST', 'localhost');
define('MEMCACHED_PORT', '11211');


//limite de nomes
function LimiteFrase($string,$chars) {

if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars)."...";

}else{
return ($string);
};
};
require_once "api/api.php";
require_once "crip/cod_baseVal.php";
include_once ("../sanitizeSql.php");

//Recebe solicitação de acesso via APP
$aux_04599j4=array();
$aux_04599j4['UserId']="";
$aux_04599j4['ccuserid']="";
$aux_04599j4['UserName']="";
$aux_04599j4['FullName']="";
$aux_04599j4['UserFotoPerfil']="";
if (!empty($_REQUEST['token']) && !empty($_REQUEST['key_public']) && $_REQUEST['key_public']='E231B2C9BCC8474DA2E260B6C8CF60D3'){
//decodifica dados

 //parse_str(get_cod_transfer($_POST['data']), $searcharray);
//verifica token de acesso ao servidor

$token_user=($_REQUEST['token']);
$queryL = mysql_query("SELECT ccuserid FROM app_login_user WHERE  token='".Sanitize::filter($token_user)."' and ccuserid<>'' limit 1") or die(mysql_error());
$rL = mysql_num_rows($queryL);

if ($rL!=''){
$response =(mysql_fetch_assoc($queryL));
$id_ccuserid=$response['ccuserid'];
//atualiza tempo de uso do usuário ao app
mysql_query("UPDATE  app_login_user Set timestamp='".time()."' Where token='".Sanitize::filter($token_user)."' and ccuserid<>'' limit 1 ")or die(mysql_error());; 

//seleciona dados do usuários para retornar
$sel=mysql_query("SELECT NikName,UserId,FullName,UserName,UserEmail,UserGen,UserFotoPerfil,UserCidade,UserEstado,UserPais,UserFotoThumb,ccuserid FROM users WHERE ccuserid='".Sanitize::filter($id_ccuserid)."'  limit 1") or die(mysql_error());

$r = mysql_num_rows($sel);
if ($r!=''){
               $res=mysql_fetch_assoc($sel);
               
$aux_04599j4['UserId']=$res['UserId'];
$aux_04599j4['ccuserid']=$res['ccuserid'];
$aux_04599j4['UserName']=(htmlentities($res['UserName'])); 
$aux_04599j4['FullName']=(htmlentities($res['FullName'])); 
$aux_04599j4['UserFotoPerfil']=$res['UserFotoPerfil'];


}
}
};

//log

  
//$dados_u = "token->".$_REQUEST['token']." cod->".$id_ccuserid." token->".$token_user."  time->".date("H:i:s")." \n";

//$name = 'log_acess2222.txt';
//$text = var_export($dados_u, true);
//$file = fopen($name, 'a');
//fwrite($file, $text);
//fclose($file); 
//header('Content-type: application/json; charset=utf-8');
//$d[]=array_map('htmlentities',$aux_04599j4);

    echo json_encode($aux_04599j4);


?>
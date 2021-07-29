<?php 
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

 include_once ("sanitizeSql.php");


 
$idcomm=Sanitize::filter($_GET['cod']);

if ($idcomm!=''){
   $domain =$_SERVER['HTTP_HOST'];
   $namepage="comunity_load.php";
   $tokepass7=  "_ui";//nome no coookie
   $pagename="".sha1($namepage)."";
   setcookie("$tokepass7", $pagename ,time()+60*60,'/',$domain,false, true);//EXPIRA EM 1 hora
      
   
$querycod = mysql_query("SELECT IdOrder FROM community_users  where IdCommunity='".mysql_real_escape_string($idcomm)."' limit 1 ")or die(mysql_error());;
$mensagemcod = mysql_fetch_object($querycod);
$url= "communities/$mensagemcod->IdOrder";


  header("Location: ../".$url."");
 }; }else{
 exit;
 
 }?>   
 
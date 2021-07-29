<?php 
require("check_func_db.php");
   
    if (login_chekout()==true){
    sec_session_start();
  
include("date.php");


function anti_injection($sql)
{

$sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$sql);
 $sql = mysql_real_escape_string($sql);
return $sql;
} 

                $UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
                $UserIgreja_Cokie =$_SESSION ['UserIgreja'];
                $UserMsg_Cokie =$_SESSION ['UserMsg'];
                $UserIgrejaSalt_Cokie =$_SESSION ['UserIgrejaSalt'];

               
  

$cod_comparti=anti_injection($_POST['cod']);


if (($cod_comparti)!=''){
$querycod = mysql_query("SELECT * FROM rock_in_rio  where ccuserid='".CCUSERIDI."' limit 1 ")or die(mysql_error());;
$rcont7738883oop1 = mysql_num_rows($querycod);
      

if (($rcont7738883oop1)!=''){

if ($cod_comparti=='1'){mysql_query("UPDATE rock_in_rio SET ack1='1'  WHERE ccuserid='".CCUSERIDI."' limit 1 ");};
if ($cod_comparti=='2'){mysql_query("UPDATE rock_in_rio SET ack2='1'  WHERE ccuserid='".CCUSERIDI."' limit 1 ");};
if ($cod_comparti=='3'){mysql_query("UPDATE rock_in_rio SET ack3='1'  WHERE ccuserid='".CCUSERIDI."' limit 1 ");};
if ($cod_comparti=='4'){mysql_query("UPDATE rock_in_rio SET ack4='1'  WHERE ccuserid='".CCUSERIDI."' limit 1 ");};
if ($cod_comparti=='5'){mysql_query("UPDATE rock_in_rio SET ack5='1'  WHERE ccuserid='".CCUSERIDI."' limit 1 ");};
if ($cod_comparti=='6'){mysql_query("UPDATE rock_in_rio SET ack6='1'  WHERE ccuserid='".CCUSERIDI."' limit 1 ");};
if ($cod_comparti=='7'){mysql_query("UPDATE rock_in_rio SET ack7='1'  WHERE ccuserid='".CCUSERIDI."' limit 1 ");};

}else{
mysql_query(" INSERT INTO rock_in_rio (ccuserid,ack1) VALUES ('".CCUSERIDI."','1')");

}

}	                 
                 
};

?>

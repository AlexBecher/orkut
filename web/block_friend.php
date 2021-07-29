<?php 
require ("check_func_db.php");

 if (login_chekout()==true){
  sec_session_start();
 include_once ("sanitizeSql.php");
   
 
include("date.php");
 

                $UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
               

               


$UserId_rcs=Sanitize::filter($_POST["UserId"]);
 
    mysql_query("DELETE  FROM usercomp    where ( UsDest='$UserId_Cokie' and  UsConv='$UserId_rcs' and UsDest<>'' and UsConv<>'')or ( UsDest='$UserId_rcs' and  UsConv='$UserId_Cokie' and UsDest<>'' and UsConv<>'') limit 2  ");  
  //deleta usuário na lista de amigos
   
	$userid = CCUSERIDI;
	$sql2 = ("select ccuserid from users where UserId='$UserId_rcs' limit 1");
	$query2 = mysql_query($sql2);
	$res2 = mysql_fetch_array($query2);
	$userid2 = $res2[0];
	//verifica se ja é amigos e se ja está bloqueado
	$query1123i = mysql_query("SELECT Idfriend FROM friends_list  Where (Idme='$userid' and Idfriend='$userid2')limit 1  ");
    $friendsssje = mysql_num_rows($query1123i);
              
	if ($friendsssje!=''){
	 mysql_query("DELETE  FROM friends_list    where (Idme='$userid' and Idfriend='$userid2' )or(Idfriend='$userid' and Idme='$userid2' ) limit 2  "); 
	 mysql_query("INSERT black_list_friends (Idme,Idfriend)VALUES ('".CCUSERIDI."','$userid2')");//lista negra
	}else{
     mysql_query("DELETE  FROM friends_list    where (Idme='$userid' and Idfriend='$userid2' )or(Idfriend='$userid' and Idme='$userid2' ) limit 2  "); 
	 mysql_query("INSERT black_list_friends (Idme,Idfriend)VALUES ('".CCUSERIDI."','$userid2')");//lista negra
	};
 
    if ($_POST['cod']!=''){
$idookoko00=$_POST['cod'];
 mysql_query("DELETE  FROM notificacao_user    where IdOrder='$idookoko00' ")or die(mysql_error());  
 
}  
};
 
?>

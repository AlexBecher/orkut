
<?
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

include_once ("sanitizeSql.php");
  

$auc_cod=Sanitize::filter($_POST['cod']);
$id=Sanitize::filter($_POST['id']);
$user=Sanitize::filter($_POST['ccuser']);


mysql_query("DELETE  FROM like_ask_forum where ccuserid='".CCUSERIDI."' and id_ask='$id' limit 1");

// mysql_query("INSERT INTO  like_ask_forum (ccuserid,id_ask,timestamp) VALUES ('".CCUSERIDI."','$id','".time()."') ");


   };

   
					?>
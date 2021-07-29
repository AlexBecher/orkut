
<?
require("check_func_db.php");

$teste_on=false;
   if (login_chekout()==true &&  $teste_on==false){

   sec_session_start();

include_once ("sanitizeSql.php");
  $count2=$_SESSION['k_iw38002932'] ;


$response= array();
$response['read']='0';
$response['check']='1';
$response['cod']='';
$auc_cod=Sanitize::filter($_POST['callback']);
//atualiza meu status na comunidade
$query55d3skdw8o3r3 = mysql_query("SELECT IdCommunity FROM forum where  idforum='$auc_cod' limit 1")or die(mysql_error());
$mensagem848485ue = mysql_fetch_object($query55d3skdw8o3r3);

mysql_query("UPDATE list_community_user SET lastactivity='".time()."' where IdCommunity='".$mensagem848485ue->IdCommunity."' and UserId='".USERID_ID."' limit 1 ");
mysql_query("UPDATE ask_forum SET status_ask='".time()."' where idforum='$auc_cod' and  UserId='".USERID_ID."'  order by idorder DESC limit 1 ");


//verifica se estou no topico
$query552 = mysql_query("SELECT idforum FROM ask_forum where  idforum='$auc_cod' and abuse<>'abuse' and UserId='".USERID_ID."' order by idorder ASC limit 1")or die(mysql_error());
$rcont3342 = mysql_num_rows($query552);
if ($rcont3342!=''){
//se eu estiver no topico com respostas ai conta as respostas do tópico
//CONTA os ultimos tópicos
$queryTOPICOSlast = mysql_query("SELECT ask_forum.idorder FROM ask_forum,users where (users.UserId=ask_forum.UserId) and ( ask_forum.idforum='$auc_cod' and ('".time()."' - ask_forum.timestamp < '600')) order by ask_forum.timestamp DESC  ")or die(mysql_error());;
$row_TOPICOSLast = mysql_num_rows($queryTOPICOSlast);
       if ($row_TOPICOSLast!='0' && $row_TOPICOSLast > $count2){
        
       
$response['read']='1';
$response['cod']=$auc_cod;       
       }
};
header('Content-type: application/json; charset=utf-8');

   			
    $d[]=$response;
      echo json_encode($d);  
   };

   
					?>
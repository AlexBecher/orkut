
<?
require("check_func_db.php");
$teste_on=false;
   if (login_chekout()==true &&  $teste_on==false){
   sec_session_start();

include_once ("sanitizeSql.php");
   $count2=$_SESSION['k_iw380029323'] ;
$count_page='';


 $aux_04599j=array();
 $aux_04599j['UserFotoThumb']="";
 $aux_04599j['FullName']="";
 $aux_04599j['ask_forum']="";
 $aux_04599j['notifica']='';
 $aux_04599j['check']='1';
  $aux_04599j['idforum']="";
   $aux_04599j['IdCommunity']="";

$auc_cod=Sanitize::filter($_POST['callback']);
$auc_codid=Sanitize::filter($_POST['id']);
//atualiza meu status na comunidade
if (!empty($auc_cod)){
$query55d3skdw8o3r3 = mysql_query("SELECT IdCommunity,nometopico FROM forum where  idforum='$auc_cod' and IdCommunity='$auc_codid' limit 1")or die(mysql_error());
$mensagem848485ue = mysql_fetch_object($query55d3skdw8o3r3);

//verifica se estou na comunidade
$querycod = mysql_query("SELECT IdCommunity FROM community_users  where IdCommunity='".$mensagem848485ue->IdCommunity."'  limit 1 ")or die(mysql_error());;
$mensagemcod = mysql_num_rows($querycod);

if ($mensagemcod!='') {
mysql_query("UPDATE list_community_user SET lastactivity='".time()."' where IdCommunity='".$mensagem848485ue->IdCommunity."' and UserId='".USERID_ID."' limit 1 ");


//verifica se estou no topico
$query552 = mysql_query("SELECT idforum FROM ask_forum where  idforum='$auc_cod' and abuse<>'abuse' and UserId='".USERID_ID."' order by idorder ASC limit 1")or die(mysql_error());
$rcont3342 = mysql_num_rows($query552);
if ($rcont3342!=''){


//se eu estiver no topico com respostas ai conta as respostas do tópico
$query55ds = mysql_query("SELECT idforum FROM ask_forum where  idforum='$auc_cod' and UserId<>'".USERID_ID."' and abuse<>'abuse' order by idorder DESC ")or die(mysql_error());
$rcont334sss = mysql_num_rows($query55ds);
       if ($rcont334sss!='0' && $rcont334sss > $count2){
       
 $count_page=$rcont334sss - $count2;     
 if ($count_page < '1' or $count_page=='' ){
 $count_page='1';
 }      
  sec_session_start();
session_register('k_iw380029323'); 
$_SESSION['k_iw380029323']=$rcont334sss;


$query55 = mysql_query("SELECT users.UserId,users.NikName,users.UserFotoThumb,users.UserName,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum FROM ask_forum FORCE INDEX (idorder),users where (users.UserId=ask_forum.UserId) and  (ask_forum.idforum='$auc_cod' and users.UserId<>'".USERID_ID."' and (".time()."- ask_forum.timestamp < 3600))  order by ask_forum.idorder DESC  limit $count_page")or die(mysql_error());

//$query55 = mysql_query("SELECT * FROM ask_forum where    idforum='$auc_cod' and UserId<>'".USERID_ID."' and abuse<>'abuse' and (".time()."- timestamp < 3600)  order by idorder DESC  limit $count_page")or die(mysql_error());
         $rcont334 = mysql_num_rows($query55);
       if ($rcont334!='0'){

       
$aux_04599j['notifica']=$rcont334;       
 
        
                while($mensagem = mysql_fetch_object($query55)) {
                

   $aux_04599j['UserFotoThumb']=$mensagem->UserFotoThumb;
 $aux_04599j['FullName']=$mensagem->FullName;
 $aux_04599j['ask_forum']=$mensagem848485ue->nometopico;
 $aux_04599j['idforum']=$auc_cod;
   $aux_04599j['IdCommunity']=$mensagem848485ue->IdCommunity;
                };
       };

                };

}; 

};
};
header('Content-type: application/json; charset=utf-8');

    $d[]=array_map('htmlentities',$aux_04599j);
       echo json_encode($d);
   };

   
					?>
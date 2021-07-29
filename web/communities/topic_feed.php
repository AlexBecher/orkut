
<style>


.panel-footer {
       padding: 10px 15px;
    background-color: #fff;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.panel-cmmfeed {
    box-shadow: none;
    border: none;
    margin: 0 0px 0px;
    border-radius: 5px;
    overflow: hidden;
    width: 500px;
}
.form-control{
width: 455px;

}
</style>
<?php  
$id_forum_;
$id_forum_COUNT;
$id_comm;
 require("check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");  
$teste88=false;   
$teste88_1=false; 
   if (login_chekout()==true){
       
     
  include("memcache_class.php"); 
  
/* TEMPOS PARA SCAN DO FEED PARA MENSAGENS NOVAS  */
define('TIMEFEEDATUL','86400');//10 DIAS
      
   
include("date.php");
include("lapse.php");
include("preg_replace_att.php");
include("func_rest_number.php");
include("recuper_videos_youtube.php");

//indica que o post superou tentativas de exibição 
 //LIMITAR TEXTOS                 

function ocultaTexto($texto, $limite = 400) {
if (strlen($texto) <= 400){

return $texto ;

}

    $partes = str_split($texto, $limite);
    $saida  = <<<HTML
<text>%s...</text>
<a href="javascript:void(0);" style="font-family: tahoma,verdana,arial,sans-serif;text-decoration:none;  font-size: 11px; font-weight: normal; font-style: normal; font-variant: normal; color: #3366CC" class="text_expander">Ver mais...</a>
<div style="display:none">%s</div>
HTML;
    printf($saida, array_shift($partes), implode($partes));
}


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

               
include_once ("transl8uu3j.php");
function sanitize_core2($text) {
    
   // $text = htmlspecialchars($text, ENT_NOQUOTES);
   // $text = str_replace("\n\r","\n",$text);
   // $text = str_replace("\r\n","\n",$text);
    //$text = str_replace("\n"," <br> ",$text);
    
    
    $text = strip_tags($text);
    return $text;
}

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o

 
 

                
 sec_session_start();                 

 
                $UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
                $UserMsg_Cokie =$_SESSION ['UserMsg'];
               session_register('ContPost_new');

               
function get_client_ip() {
     $ipaddress = '';
     if ($_SERVER['HTTP_CLIENT_IP'])
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
     else if($_SERVER['HTTP_X_FORWARDED_FOR'])
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
     else if($_SERVER['HTTP_X_FORWARDED'])
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
     else if($_SERVER['HTTP_FORWARDED_FOR'])
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
     else if($_SERVER['HTTP_FORWARDED'])
         $ipaddress = $_SERVER['HTTP_FORWARDED'];
     else if($_SERVER['REMOTE_ADDR'])
         $ipaddress = $_SERVER['REMOTE_ADDR'];
     else
         $ipaddress = 'UNKNOWN';
$ip_first=explode( ',' , $ipaddress );

     return $ip_first[0]; 
}

//echo get_client_ip();

include("incl/geoipcity.inc");
include("geoipregionvars.php");
//base de dados
$base = geoip_open("incl/GeoLiteCity.dat",GEOIP_STANDARD);
 
//pega um registro de localizacao baseado no IP do cliente (REMOTE_ADDR)
$vIP = get_client_ip(); 
$localizacao = geoip_record_by_addr($base,$vIP);
 
//fecha o arquivo (pra economizar memoria)
geoip_close($base);
 

?>

<!-- inicio -->

<?php 

//seleciona tópicos de comunidades que participo


//comunidades que participo
$queryMy = mysql_query("SELECT community_users.IdCommunity,community_users.CommunityImg,community_users.CommunityName  FROM community_users WHERE EXISTS(SELECT IdCommunity FROM list_community_user WHERE community_users.IdCommunity = list_community_user.IdCommunity and list_community_user.UserId='".USERID_ID."')  and community_users.CommunityPrivacy='2' ORDER BY community_users.timestamp2 DESC limit 2")or die(mysql_error());
$rowMy = mysql_num_rows($queryMy);
//ccomunidades que sou dono
$queryIn = mysql_query("SELECT IdCommunity,CommunityImg,CommunityName  FROM community_users  where UserIdPro='".USERID_ID."' and CommunityImg<>''  order by   timestamp2 DESC limit 2")or die(mysql_error());;
$rowIn = mysql_num_rows($queryIn);

//array comunidades
$lista_comunidades = array();
        
//SELECT users.NikName,users.UserFotoThumb,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum,ask_forum.cod_delation,ask_forum.idforum FROM ask_forum INNER JOIN users ON (users.UserId=ask_forum.UserId and ask_forum.cod_delation='0') where ask_forum.idforum IN (select idforum from forum where IdCommunity='60' and forum.idforum=ask_forum.idforum)  order by ask_forum.timestamp DESC limit 5 


if ($rowMy > '0'){
    while($row_Q1 = mysql_fetch_object($queryMy)){
        
        $lista_comunidades[] = $row_Q1;
        
    };
    
}
if ($rowIn > '0'){
    while($row_QIn = mysql_fetch_object($queryIn)){
        
        $lista_comunidades[] = $row_QIn;
        
    };
    
}

foreach ($lista_comunidades AS $list_) { 
    
    //SELECT * FROM `forum` WHERE IdCommunity='60' ORDER BY lastactivi DESC

    
    //SELECT getNameTopic(ask_forum.idforum) AS Name_F, users.NikName,users.UserFotoThumb,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum,ask_forum.cod_delation,ask_forum.idforum FROM ask_forum INNER JOIN users ON (users.UserId=ask_forum.UserId and ask_forum.cod_delation='0') where ask_forum.idforum IN (select idforum from forum where IdCommunity='".$list_->IdCommunity."' and forum.idforum=ask_forum.idforum)  order by ask_forum.timestamp DESC limit 5"
    
    
    $query55 = mysql_query("SELECT idforum,nometopico FROM  forum WHERE IdCommunity='".$list_->IdCommunity."' and closed='0' ORDER BY lastactivi DESC limit 1")or die(mysql_error());
    $rcont334 = mysql_num_rows($query55);
    if ($rcont334!='0'){
       
        while($queyForum = mysql_fetch_object($query55)) {
            
    
/*
 * $id_forum_;
   $id_comm;
 * s
 */  
         
            
?>

<div id="feed_o9o">
<div class="sombra_padrao_bottom " 
    style="border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius: 5px;position:relative;margin-bottom:10px;  padding-top:; position: relative; width: 500px; height:auto; ">

<div class="line-feed " 
    style="position:relative;margin-bottom:10px;  padding-top:; position: relative; width: 500px; height:auto; ">
<div class="loga">
<div class="panel panel-default panel-cmmfeed loga" data-id="19308"> 

<div class="panel-heading loga"> 
<div class="cmm-avatar loga"> 
<a href="https://orkut.me/communities/<?php echo ($list_->IdCommunity) ?>"> 
<img src="https://orkut.me/cropImg.php?arquivo=bg_community/<?php echo ($list_->CommunityImg) ?>&largura=155&altura=250;"> 
</a> 
</div> 
<div class="cmm-header loga"> 
<div class="cmm-nome loga"> 
<a href="https://orkut.me/communities/<?php echo ($list_->IdCommunity) ?>"> <?php echo ($list_->CommunityName) ?> </a>
 </div> 
 <div class="cmm-topico loga"> 
 <a href="https://orkut.me/communities/<?php echo ($list_->IdCommunity) ?>/topic?&cod=<?php echo ($queyForum->idforum) ?>&pag=1"> <?php echo ($queyForum->nometopico) ?></a> 
 </div> 
 </div> 
 </div>
 <div class="panel-body loga" style="overflow:hidden">

 
 <?php 
 
 //SELECT getNameTopic(ask_forum.idforum) AS Name_F, users.NikName,users.UserFotoThumb,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum,ask_forum.cod_delation,ask_forum.idforum FROM ask_forum INNER JOIN users ON (users.UserId=ask_forum.UserId and ask_forum.cod_delation='0') where ask_forum.idforum IN (select idforum from forum where IdCommunity='".$list_->IdCommunity."' and forum.idforum=ask_forum.idforum)  order by ask_forum.timestamp DESC limit 5"
 
 
 $queryASK = mysql_query("(SELECT  users.NikName,users.UserFotoThumb,users.FullName,users.ccuserid,ask_forum.idorder,ask_forum.LinkVideo,ask_forum.ImgPost,ask_forum.timestamp,ask_forum.ask_forum,ask_forum.cod_delation,ask_forum.idforum FROM ask_forum INNER JOIN users ON (users.UserId=ask_forum.UserId and ask_forum.cod_delation='0') where ask_forum.idforum='".$queyForum->idforum."'  order by ask_forum.timestamp DESC limit 5)ORDER BY idorder ASC ")or die(mysql_error());
 $rcon_ASK = mysql_num_rows($queryASK);
 if ($rcon_ASK!='0'){
     
     while($mensagem = mysql_fetch_object($queryASK)){
         $id_forum_COUNT =$id_forum_COUNT+1;
 
 ?>
  <!-- topic st -->
 <div class="topic loga"> 
 <div class="topic-header loga"> 
 <div class="avatar loga"> 
 <a href="/<?php echo ($mensagem->NikName) ?>"> 
 <img src="/cropImg.php?arquivo=profile_img/<?php echo $mensagem->UserFotoThumb;?>&largura=70&altura=70" class="img-scrapbook loga"> </a> 
 </div>
  <div class="desc loga"> 
  <p class="name loga"> <a href="/<?php echo ($mensagem->NikName) ?>"><?php echo $mensagem->FullName;?></a> </p> 
  <p class="time loga"><?php if ((time() - $mensagem->timestamp) < '432000'){  $aux373yur=date('Y-m-d H:i:s',$mensagem->timestamp);  echo  Datetodays($aux373yur);}else{echo  date('d/m/Y H:i:s',$mensagem->timestamp);}; ?></p> 
  </div> 
  </div> 
  
  
  
  <div class="topic-body loga" style="overflow:hidden"> 
   <?php  if ($rcon_ASK > 1 && $id_forum_COUNT==1 ) {?>
  <p class="no-margin loga"><strong><?php echo ($queyForum->nometopico) ?></strong></p> 
  <?php };?>
  <p><?php echo (sanitize_video($mensagem->ask_forum));?></p> 
  </div> 
  <div class="topic-more loga" style="display:none;"> 
  <a href="javascript:void(0)" class="btn-show-more">Mostrar mais...</a> 
  </div> 
  <div class="topic-bottom loga"> 
  <p class="no-margin mt-10 loga"> 
  <a href="javascript:void(0)" class="btn-resposta quote loga" data-text="<?php echo sanitize_core2($mensagem->ask_forum);?>" data-autor="<?php echo $mensagem->FullName;?>"><i class="fa fa-reply loga" aria-hidden="true"></i> Responder</a> </p> 
  </div> 
  </div> 
  <!-- topic ed -->
  
  
  <?php  if ($rcon_ASK > 1 && $id_forum_COUNT==1 ) {?>
 
  <!-- fisrt ask start -->
  <div class="more loga"> <span class="bullet loga"></span> <span class="bullet loga"></span> <span class="bullet loga"></span> 
  </div> 
<!-- fisrt ask end --> 

<?php


 };

?>
  <?php 
 };
 
 
        };
  
  ?>
  


</div> 

     <?php  if ($rcon_ASK > 1 && $id_forum_COUNT = $rcon_ASK) {?>
   <!-- end forum st -->  
   <div class="panel-footer loga"> 
   <div class="msgs alerta pd-5 mb-5" style="display:none;"></div> 
   <div class="resposta-btns loga"> <button type="button" class="btn-orkut-2 no-margin btn-resposta loga">responder</button> </div> 
   <div class="resposta loga" style="display:none;"> <form class="form-post-ajax loga"><input type="hidden" class="cmm" name="uiw_927_521gsXX1" value=""><input type="hidden" class="cmm" name="uiw_927_521gsXX2" value=""><input type="hidden" class="cmm" name="uiw_927_521gsXX3" value=""> <input type="hidden" class="cmm" name="id_ff" value="<?php echo $queyForum->idforum ;?>"> <textarea class="form-control mensagem" name="mensagem" placeholder="Digite a mensagem" rows="5"></textarea> <div class="md-separator mb-5 loga"></div> <button type="submit" class="btn-orkut-2 no-margin loga">enviar</button> <button type="button" class="btn-orkut-2 btn-cancel loga">cancelar</button> <div class="load" style="display:none;"> <i class="fa fa-spinner fa-pulse fa-fw loga"></i> </div> </form> </div> 
   </div>
    <!-- end forum end -->
   <?php 
   
   $id_forum_COUNT = 0;
  };
   ?> 
    
    
   </div> 
</div>

</div>

</div>

<!-- fim -->

<?php 

/* salva os IDs
 * $id_forum_;
 $id_comm;
 * s
 */  
$id_forum_ = $queyForum->idforum;
$id_comm = $list_->IdCommunity;

        };
    };
};
       };
   
?>
<?php 
require("check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");   


    if (login_chekout()==true){
    sec_session_start();
  include_once ("sanitizeSql.php");
    

 //LIMITAR TEXTOS                 

function ocultaTexto($texto, $limite = 5) {
if (strlen($texto) <= 5){

return $texto ;

}

    $partes = str_split($texto, $limite);
    $saida  = <<<HTML
<text>%s..</text>

HTML;
    printf($saida, array_shift($partes), implode($partes));
}

function LimiteFrase($string) {
$chars = 5;
if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars).".";

}else{
return ($string);
};
};


$auc_cod=Sanitize::filter($_GET['cod']);

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o

//verifica o adm
$querycodr = mysql_query("SELECT UserIdPro FROM community_users  where (IdCommunity='$auc_cod' and UserIdPro='".USERID_ID."')limit 1 ")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);

//verifica se esta comunidade é particular
//verifica o adm
$querycodrf = mysql_query("SELECT CommunityPrivacy FROM community_users  where (IdCommunity='$auc_cod' and CommunityPrivacy='2') limit 1 ")or die(mysql_error());;
$rcont373wllelessssssss = mysql_num_rows($querycodrf);

//
              
//inicio memcache
//consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$auc_cod; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta específica com memcache

if ($query_mem==false){
$query17355 = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$auc_cod' order by IdOrder ")or die(mysql_error());;
$rcont37p = mysql_num_rows($query17355);
$var=$rcont37p;
$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 400);

}else{
$rcont37p=$query_mem;
}

//fim memcache
//$rcont37p='1';
$query173 = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$auc_cod' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373 = mysql_num_rows($query173);



 if($rcont373wllelessssssss!='' or ($rcont373wllele!='' or  $rcont373!='' or $rcont37p!='')) {

?>
<div  class="boradsemquina3 sombra_padrao_bottom" 
    style=" position: relative; display:; margin-bottom:5px; background-color:#FFFFFF;  width:270px; max-height:300px">
<div style="position: relative; width: 270px; height:auto; ">
    <div style="position: relative; width:250px; height: auto;padding:10px;">
 <?php 
 

if ($rcont37p!=''){


 
 
 ?>   
    
        <span   class="text_colleft_nome">Membros ( <?php echo number_format($rcont37p,0,',','.');?> )</span><label onclick="view_members_ship('<?php echo $auc_cod;?>');"  
             style="position: absolute; right:10px;font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 12px; 
  color: #3366CC;
   font-style: normal;
    font-variant: normal;
     letter-spacing: normal;
      orphans: 2;
      font-weight: normal;
       text-align: -webkit-auto;
        text-indent: 0px; 
        text-transform: none;
         white-space: normal; 
         widows: 2;
          word-spacing: 0px; 
          -webkit-text-size-adjust: auto; 
          -webkit-text-stroke-width: 0px; 
          background-color: rgb(255, 255, 255);
cursor:pointer;


            ">Ver todos</label>
            <?php if ($rcont373wllele!='' or $rcont373!='') { $ueu88="60px";?><input placeholder="Buscar membros"id="nome_m888"maxlength="100"accesskey="/" name="nome_m888" onkeyup="searcH_Membro_UserCommmNew('<?php echo $auc_cod;?>')"
                type="text" 
            
            style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; background-color: #FFFFFF; border: 1px solid #EEEEEE; padding-left: 10px; width: 235px; height: 30px; top: 30px; left: 10px;" />
            <div id="ser_user_test_88"
                
            
            
            style="position: absolute; width:235px;background-color: #EFEFEF; left: 15px; z-index:110; margin-bottom: 0px; top:61px;"></div>
    <?php }else{ $ueu88="10px";};?>
        <div style="position: relative; width:250px; margin-top:<?php echo $ueu88;?>; height: auto;">
        <?php
$query17 = mysql_query("SELECT UserId,lastactivity FROM list_community_user  where (IdCommunity='$auc_cod')  order by lastactivity DESC  limit 8 ")or die(mysql_error());;
        
        
 while ($mensagem = mysql_fetch_object($query17)){

 
         
$querycomp2 = mysql_query("SELECT UserId,UserName,UserFotoThumb,FullName,UserFotoPerfil,NikName  FROM users  where   UserId='".$mensagem->UserId."' limit 1 ");
$mensagemcomp2 = mysql_fetch_object($querycomp2);
	    
          
        
    
        
      
        ?>
        
            <div onclick="view_prof('<?php echo $mensagemcomp2->UserId ;?>')"style="position: relative; width:50px; height:90px; float: left; margin-right: 10px;">
                  <img src="/profile_thumbs/<?php echo $mensagemcomp2->UserFotoThumb ;?>"  style="width: 50px; height: 50px; position: relative" /><?php  if(time()- $mensagem->lastactivity < '20') { ;?><img src="/img/green_8378473287_iweowu_2w.png" style=" position:absolute;top:37px;right:0px;"title="Online" /><?php };?>
         <a href="/<?php echo $mensagemcomp2->NikName;?>" style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333; position: relativeword-wrap: break-word;"><?php echo ocultaTexto($mensagemcomp2->UserName); ?></a></div>            
            <?php
        };?><div style="clear: both;"></div></div>
            </div>
            
        <?php }else{ ?> 
        
        <div  style="background-color: #FFFFFF; position: relative; width: 250px; height:auto">
    <div style="position: relative; width: 250px; height: 30px"><span class="text_colleft_nome">Poxa não tem membros <?php if($rcont373wllele!='' or $rcont373!='') { echo "em sua comunidade!"; }else{ echo "nesta comunidade!";};?></span></div>
   <div  onmouseout="javascript:this.style.background= ''" 
             onmouseover="javascript:this.style.background= '#EFEFEF'"   
  style="position: relative; width: 250px;height: 81px; top:15px; left: 0px;margin-bottom:5px;"> <div style="position: relative; float: left; width: 80px; height: 80px">
        </div><img style="position:absolute; top:10px; left: 0px;" src="/img/7748yiuTTtrw_93904.png">
    <label 
            class="botton_cinza" onclick="view_list_invite_comm('<?php echo $auc_cod;?>')"
            style="vertical-align: middle; text-align: center; padding: 5px 9px 5px 9px; position: absolute; top:20px; left:80px;">Convidar membros</label></div>
            <div  onmouseout="javascript:this.style.background= ''" 
             onmouseover="javascript:this.style.background= '#EFEFEF'"   
  style="position: relative; width: 250px;height: 81px; top:5px; left: 0px;margin-bottom:5px;"> <div style="position: relative; float: left; width: 80px; height: 80px">
        </div><img style="position:absolute; top:10px; left: 0px;" src="/img/kew_kauU73_093.png">
    <label 
            class="botton_cinza" onclick="share_comm('<?php echo $auc_cod;?>');"
            style="vertical-align: middle; text-align: center; padding: 5px 9px 5px 9px; position: absolute; top:20px; left:80px;">Divulgue</label></div></div>
    <?php };?>   
            </div>    
    </div>
   <?php }; }else{
   exit;
   
    };?>
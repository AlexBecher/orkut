<?php 
require("check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");   

      if (login_chekout()==true){
   sec_session_start();
   /*
    */


include("date.php");

include_once ("sanitizeSql.php");


               
                $idUseruNN9 =$_SESSION ['UserId'];
                
                 $inicio_aux3= $_SESSION['inicio_aux3']; 
                


//echo $_SESSION['inicio_aux3'];
 
            

if (!empty($inicio_aux3)){

$inicio_aux3=$inicio_aux3;
}else{

$inicio_aux3='2';
} 

                  
             

         function ocultaTexto($texto,$limite) {
if (strlen($texto) <= $limite){

return $texto ;

}

    $partes = str_split($texto, $limite);
    $saida  = <<<HTML
<text>%s..</text>

HTML;
    printf($saida, array_shift($partes), implode($partes));
}    


function LimiteFrase($string) {
$chars = 25;
if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars)."...";

}else{
return ($string);
};
};
include("transl8uu3j.php");
header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuação
$idUseruNN9=Sanitize::filter($_GET['id']);

?>
<div id="ioo9e94j4mdsasa"style="position: relative;display:none; width: 780px">
  <!-- colocar em um arquivo -->
      <!-- Comunidades Sugeridas -->       
         
     <div class="" 
    
     style=" border: 1px solid #C1C5CA; position: relative; width: 775px; height: auto; margin-top:0px;padding-left:5px; padding-top:10px; background-color:#d3d5d9;">
  
      <?php  
      $aux_privacy="2";
//conta inicio das comunidades

    $count_col=  mysql_num_rows(mysql_query("SELECT IdCommunity,IdOrder,CommunityImg,UserIdPro,CommunityName,AboutComm,CommunityPrivacy FROM community_users Where CommunityPrivacy='2' and UserIdPro<>'".$idUseruNN9."' and CommunityImg<>'' order by timestamp DESC  Limit 20 "));

if ($inicio_aux3 <= $count_col){

$querycod = mysql_query("SELECT IdCommunity,IdOrder,CommunityImg,UserIdPro,CommunityName,AboutComm,CommunityPrivacy FROM community_users Where CommunityPrivacy='2' and UserIdPro<>'".$idUseruNN9."' and CommunityImg<>'' order by timestamp DESC  Limit $inicio_aux3,8 ")or die(mysql_error());;
}else{
$querycod = mysql_query("SELECT IdCommunity,IdOrder,CommunityImg,UserIdPro,CommunityName,AboutComm,CommunityPrivacy FROM community_users Where CommunityPrivacy='2' and UserIdPro<>'".$idUseruNN9."' and CommunityImg<>'' order by timestamp DESC  Limit $count_col ")or die(mysql_error());;
}


      
$rcontquery2 = mysql_num_rows($querycod);
if ($rcontquery2!=''){
 while ($mensagemcod = mysql_fetch_object($querycod)){
 $auxjjj=$mensagemcod->IdCommunity;
      ?> 
       <?php 
///inicio memcache
//consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$mensagemcod->IdCommunity; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta específica com memcache
 if ($query_mem==false){             
$query17 = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$mensagemcod->IdCommunity'   ")or die(mysql_error());;
$rcont37 = mysql_num_rows($query17);
$var=$rcont37999;
$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 400);
    
}else{
$rcont37=$query_mem;
};
$query17kk = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$mensagemcod->IdCommunity' and UserId='".$idUseruNN9."'  ")or die(mysql_error());;
$rcont37kk = mysql_num_rows($query17kk);
 
if ($rcont37kk=='0'){
   $domain =$_SERVER['HTTP_HOST'];
   $namepage="comunity_load.php";
   $tokepass7=  "_ui";//nome no coookie
   $pagename="".sha1($namepage)."";
   setcookie("$tokepass7", $pagename ,time()+60*60,'/',$domain,false, true);//EXPIRA EM 1 hora
  
    
    ?>
        <style>
._42ft {
    cursor: pointer;
    display: inline-block;
    text-decoration: none;
    white-space: nowrap;
}
._2qix {
    background: #4080ff;
    border: 0;
    color: #fff;
    cursor: pointer;
    text-align: center;
    transition: background 300ms;
}
._7tn {
    border-radius: 4px;
    font-size: 14px;
    padding: 7px 26px 6px 26px;
}
._3ma {
    font-family: 'Freight Sans Bold', helvetica, arial, sans-serif !important;
    font-weight: bold !important;
    letter-spacing: normal;
    text-rendering: optimizelegibility; position: absolute; bottom: 10px; right: 5px;

}
._2qix:hover{background:#3b5998}
</style><div  class="boradsemquina3 sombra_padrao_bottom" 
                style=" position: relative; width:175px; height: auto; margin-left: 13px; background-color:#FFFFFF; float: left;margin-bottom:10px; margin-top: 50px;">
        <div style="position: relative; width:155px;margin:10px; height:250px;"><img src="/cropImg.php?arquivo=bg_community/<?php  echo $mensagemcod->CommunityImg; ?>&largura=155&altura=250"></div>
        <div style="position: relative; width:155px; height: 155px; padding: 10px; background-color: #EEEEEE;">
             <a href="/communities/<?php echo $mensagemcod->IdOrder;?>"><label  style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal;cursor:pointer; font-variant: normal; color: #666666"><?php echo ocultaTexto($mensagemcod->CommunityName,25);?></label></a><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo MEMBROSUPCASE7; ?> (<?php   echo number_format($rcont37,0,',','.');?>)</span><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo ocultaTexto($mensagemcod->AboutComm,35);?></span>
             <?php if (($mensagemcod->UserIdPro!=USERID_ID) and ($mensagemcod->CommunityPrivacy=='2') and ($rcont37kk=='')){?>
            <label class="_42ft _2qix _7tn _3ma _oppe39993irmmr"><?php echo PARTICIPAR ; ?><input type="hidden"  value="<?php echo $mensagemcod->IdCommunity;?>"></label>
                
             
             <?php }else{?> <label class="botton_cinza"
                
                
                 style=" padding: 5px 6px 5px 6px; position: absolute; bottom: 10px; right: 10px;"><?php echo PARTICIPANDO002992;?></label><?php };?></div></div> 
                
                
             <?php }; };?><div style="clear:both"></div><?php  };?>  
                </div>
      
    <!--Comunidades sugeridas-->      
  </div> 
  <?php }else{
  exit;
  
  }?> 
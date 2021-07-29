<?php 
require("check_func_db.php");
 header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");    
   if (login_chekout()==true){
   sec_session_start();
   
include("date.php");
  
include_once ("sanitizeSql.php");
$auc_cod=Sanitize::filter($_GET['cod']);

 //LIMITAR TEXTOS                 

function ocultaTexto($texto, $limite = 8) {
if (strlen($texto) <= 8){

return $texto ;

}

    $partes = str_split($texto, $limite);
    $saida  = <<<HTML
<text>%s..</text>

HTML;
    printf($saida, array_shift($partes), implode($partes));
}
 

function LimiteFrase($string) {
$chars = 10;
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


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o

 
?>
<div  class="boradsemquina3 sombra_padrao_bottom" 
    style=" position: relative; display:; margin-bottom:5px; background-color:#FFFFFF;  width:270px; max-height:300px">
<div style="position: relative; width: 270px; height:auto; ">
    <div style="position: relative; width:250px; height: auto;padding:10px;">


          <span class="text_colleft_nome">Comunidades relacionadas</span><label onclick="com_ooeie937u3uj('<?php  echo USERID_ID;?>');"   
             style="position: absolute; right:0px;top:0px;display:none;font-family: 'open sans', arial, sans-serif;
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


            ">Ver todas</label>
             <div style="position: relative; width:250px; margin-top:10px; height: auto;">
   
               <?php 
           $querycodriie = mysql_query("SELECT category FROM community_users  where (IdCommunity='$auc_cod')order by IdOrder limit 1")or die(mysql_error());;
           $mensagemcodfffuu8w8r4u = mysql_fetch_object($querycodriie);

$querycodddddfff = mysql_query("SELECT  IdCommunity,CommunityImg,CommunityName,UserIdPro,IdOrder FROM community_users   where  (category='".$mensagemcodfffuu8w8r4u->category."' and UserIdPro<>'".USERID_ID."' and CommunityImg<>'' and IdCommunity<>'$auc_cod')  ORDER BY rand() limit 6")or die(mysql_error());;
  $rcontqudsdsdt = mysql_num_rows($querycodddddfff);
 //$rcontqudsdsdt='';
if ($rcontqudsdsdt!=''){
            
               
          
while ($mensagemcodfffuuu = mysql_fetch_object($querycodddddfff)){
 
           
           ?> <a href="/communities/<?php echo $mensagemcodfffuuu->IdOrder;?>"><div onclick="call_pane_comm('<?php echo $mensagemcodfffuuu->IdCommunity;?>','0');"
              
              
               
               
               style="position: relative; width: 80px; height:100px; top: 0px; left: 0px; float: left; margin-right: 2px;">
              <div style="position: relative; width: 80px; height: 80px;"><img src="/cropImg.php?arquivo=bg_community_thumbs/<?php if ($mensagemcodfffuuu->CommunityImg !=''){ echo $mensagemcodfffuuu->CommunityImg;}else{ echo "bg_comm_1_thumb.jpg";};?>&largura=80&altura=80"></div><label 
                    
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #336699;word-wrap: break-word; position: relative; top:0px; left: 0px;"><?php echo ocultaTexto($mensagemcodfffuuu->CommunityName) ;?></label></div></a>
                    <?php ;};}else{ ?>
                    <div>
                    <span  style="position: relative;margin-top:5px;margin-bottom:5px;font-family: 'open sans', arial, sans-serif;
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



            ">Ainda n�o encontramos uma comunidade relacionada! Aguarde...</span><br>
                    <img style="position: relative;margin:0px auto;" src="/img/392ur4uhryyeFRE.jpg">
                    </div>
                    
                    <?php };?></div>
             
              <div style="clear: both"></div></div></div>
    </div>
   <?php }else{
   exit;
   
   }?>
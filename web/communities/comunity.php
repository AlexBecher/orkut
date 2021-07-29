<?php 
require("check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");   

      if (login_chekout()==true){
   sec_session_start();
   /*
    */

include("date.php");
 
include("lapse.php");
 $aux_osdj394h4hhn=false;
$aux_cont_event=false;
$aux_cont_event2=false; 
 //LIMITAR TEXTOS                 


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
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o
              



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
._3ma2 {
    font-family: 'Freight Sans Bold', helvetica, arial, sans-serif !important;
    font-weight: bold !important;
    letter-spacing: normal;
    text-rendering: optimizelegibility; position: absolute; bottom: 10px;left: 41px;

}
._2qix:hover{background:#3b5998}
</style>

<div id="com_832ukfwhe"  style="position: relative;display:none; width: 780px">
  <div id="slid_show" class="boradsemquina3 sombra_padrao_bottom"
        style=" background-color: #FFFFFF; position: relative;overflow:hidden; width: 780px; height:190px;">
        <img src="img/icon/djeue7848yee.png" style="width: 780px;"/><span 
        
        
            style="1px 1px 1px;font-family: arial, Helvetica, sans-serif; font-size: 40px;  font-weight: normal;   font-style: normal;   font-variant: normal;    color: #FFFFFF;   z-index:100; position: absolute; top: 33px; left: 41px;"><?php echo COMMUNITIESSS;?></span><span 
        
        
        
            
            style="font-family: arial, Helvetica, sans-serif; font-size: 20px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; z-index: 100; position: absolute; top:80px; left: 41px; 1px: ;"><?php echo CRFIARCOMUNIDADES998383TEXT1;?> </span>
    <label onclick="selec_commu_uei();" class="_42ft _2qix _7tn _3ma2"><?php echo CRFIARCOMUNIDADES998383;?></label></div>
    
    <div  class="boradsemquina3" style="position: relative; width: 780px; height: auto; margin-top: 20px;">
<?php 
$querycodeerr2 = mysql_query("SELECT IdOrder FROM community_users  where    UserIdPro='".USERID_ID."' order by  timestamp2 DESC ");
$rcontquery2err2 = mysql_num_rows($querycodeerr2);
if ($rcontquery2err2=='0'){


?>    
   <div class="" id="new_8374ujr"
            
            style="position: relative; background-color:#F9F9F9;width: 780px; height: auto;padding-bottom:20px;margin-bottom:20px;">
        <div style="position: relative; height: 50px">
    <span style="font-family: arial, Helvetica, sans-serif; font-size: 20px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: absolute; top: 13px; left: 138px;"><?php echo CRFIARCOMUNIDADES998383TEXT12;?></span></div>
    
    <div style="position: relative; width: 780px; height:170px;; clear: both;margin-bottom:20px;">
        <div style="position: relative; width: 100px; height: 150px; float: left; margin: 20px 20px 20px 200px; text-align: center;">
            <img src="img/uw7883uu3ye287io3j3r.jpg" class="radius_150px" 
                style="position: relative; width: 130px; height: 130px" /><span 
                
                
                style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 132px; left: 30px;"><?php echo CRFIARCOMUNIDADES998383TEXT123;?></span></div>
                <div style="position: relative; width: 100px; height: 150px; float: left; margin: 20px; text-align: center;"><img style="position: relative; width: 130px; height: 130px" src="img/sjd3uru3khjagjdfjejfh4yh44.jpg" class="radius_150px" /><span 
                
                        
                        
                        style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 131px; left: 39px;"><?php echo CRFIARCOMUNIDADES998383TEXT123PUBLICA;?></span></div>
                <div style="position: relative; width: 100px; height: 150px; float: left; margin: 20px; text-align: center;"><img style="position: relative; width: 130px; height: 130px" src="img/aee934y3hurgegreueerie.jpg" class="radius_150px" /><span 
                
                        
                        style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 132px; left: 9px; width: 108px;"><?php echo CRFIARCOMUNIDADES998383TEXT123DOSEUJEITO;?></span></div>
                </div>
                <?php 
                $query17kk888 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='54fd40372662fbc1a5059f960133d5ca' and UserId='".USERID_ID."' order by IdOrder limit 1 ")or die(mysql_error());;
$rcont37kk00099 = mysql_num_rows($query17kk888);
            $query17kk8884 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='c6009230eac85b4ba7476e8aca3a4800' and UserId='".USERID_ID."'order by IdOrder limit 1 ")or die(mysql_error());;
$rcont37kk000994 = mysql_num_rows($query17kk8884);
                
 if ($rcont37kk00099=='' or  $rcont37kk000994==''){ 
                ?>
                <div style="position: relative; width: 100%;">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 20px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: absolute; top: 0px; left: 210px;"><?php echo CRFIARCOMUNIDADES998383TEXT123DOSEUJEITOOUPARTICIPE;?></span>
             <?php
             
             
             $querycodsdhsfke = mysql_query("SELECT IdCommunity,IdOrder,CommunityImg,UserIdPro,CommunityName,AboutComm FROM community_users  where IdOrder='13570' limit 1")or die(mysql_error());;
             $mensagemcod93i = mysql_fetch_object($querycodsdhsfke);
///inicio memcache
//consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta='ofic1'; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta específica com memcache
 if ($query_mem==false){             
             $query1722 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$mensagemcod93i->IdCommunity' order by IdOrder  ")or die(mysql_error());;
            $rcont37999 = mysql_num_rows($query1722);
            $var=$rcont37999;
$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 400);
            
 }else{
            $rcont37999=$query_mem;
            
 };
                if ($rcont37kk00099==''){
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
        <div style="position: relative; width:155px;margin:10px; height:250px;"><img src="/cropImg.php?arquivo=bg_community/<?php  echo $mensagemcod93i->CommunityImg; ?>&largura=155&altura=250"></div>
        <div style="position: relative; width:155px; height: 155px; padding: 10px; background-color: #EEEEEE;">
             <a href="/communities/<?php echo $mensagemcod93i->IdOrder;?>"><label  style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal;cursor:pointer; font-variant: normal; color: #666666"><?php echo ocultaTexto($mensagemcod93i->CommunityName,25);?></label></a><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo MEMBROSUPCASE7; ?> (<?php   echo number_format($rcont37999,0,',','.');?>)</span><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo ocultaTexto($mensagemcod93i->AboutComm,35);?></span>
            
            <label class="_42ft _2qix _7tn _3ma _oppe39993irmmr"><?php echo PARTICIPAR ; ?><input type="hidden"  value="<?php echo $mensagemcod93i->IdCommunity;?>"></label>
                
             
            </div></div>  
              <?php 
              
             };
             
              
             $querycodsdhsfke3 = mysql_query("SELECT IdCommunity,IdOrder,CommunityImg,UserIdPro,CommunityName,AboutComm FROM community_users  where IdOrder='1120' limit 1")or die(mysql_error());;
             $mensagemcod93i3 = mysql_fetch_object($querycodsdhsfke3);
             ///inicio memcache
//consulta específica com memcache
 $memcache_obj2 = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta2='ofic2'; 
 $chave2 = "key".md5($consulta2);
 $query_mem2 = memcache_get($memcache_obj2,$chave2);
//consulta específica com memcache
 if ($query_mem2==false){  
             $query172233 = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$mensagemcod93i3->IdCommunity'   ")or die(mysql_error());;
             $rcont379993 = mysql_num_rows($query172233);
$var2=$rcont379993;
$memcache_obj2->set($chave2,$var2, MEMCACHE_COMPRESSED, 400);
             
 }else{
             $rcont379993=$query_mem2;
 };
              if ($rcont37kk000994==''){
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
        <div style="position: relative; width:155px;margin:10px; height:250px;"><img src="/cropImg.php?arquivo=bg_community/<?php  echo $mensagemcod93i3->CommunityImg; ?>&largura=155&altura=250"></div>
        <div style="position: relative; width:155px; height: 155px; padding: 10px; background-color: #EEEEEE;">
             <a href="/communities/<?php echo $mensagemcod93i3->IdOrder;?>"><label  style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal;cursor:pointer; font-variant: normal; color: #666666"><?php echo ocultaTexto($mensagemcod93i3->CommunityName,25);?></label></a><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo MEMBROSUPCASE7; ?> (<?php   echo number_format($rcont379993,0,',','.');?>)</span><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo ocultaTexto($mensagemcod93i3->AboutComm,35);?></span>
            
            <label class="_42ft _2qix _7tn _3ma _oppe39993irmmr"><?php echo PARTICIPAR ; ?><input type="hidden"  value="<?php echo $mensagemcod93i3->IdCommunity;?>"></label>
                
             
            </div></div> <?php };?><div style="clear:both;"></div>
</div><?php };?>
        </div> <?php };?></div>
        
        <!-- Comunidades em destaque-->       
        <div class="user_foto_borda_superior" style="background-color: #F9F9F9; border: 1px solid #C1C5CA; position: relative; width: 780px; height: 80px">
     <span style="font-family: arial, Helvetica, sans-serif; font-size: 17px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 30px; left: 10px;"><?php echo COMUNIDADESEMDESTQAQUE333;?></span>&nbsp;
     <img src="/img_news/website.png" 
                
                style="position: absolute; width: 70px; height:70px; top: 3px;  right:5px;" />
     </div>
     
     <div class="" 
    
     style=" border: 1px solid #C1C5CA; position: relative; width: 775px;margin-bottom:20px; height: auto; margin-top:0px;padding-left:5px; padding-top:10px; background-color:#d3d5d9;">
  
      <?php  
   
$query_destaque = mysql_query("SELECT poll_comm_top.order_comm,community_users.UserIdPro,community_users.IdCommunity,community_users.IdOrder,community_users.CommunityImg,community_users.CommunityPrivacy,community_users.CommunityName,community_users.AboutComm FROM community_users inner JOIN poll_comm_top ON (poll_comm_top.order_comm=community_users.IdOrder) where community_users.CommunityPrivacy='2'and community_users.category<>'22' and community_users.category<>'3'   order by  rand()  limit 12 ")or die(mysql_error());;
      
$count_dest = mysql_num_rows($query_destaque);
if ($count_dest!=''){
 while ($row_comm_dest = mysql_fetch_object($query_destaque)){
 $auxjjj=$row_comm_dest->IdCommunity;


      ?> 
       <?php 
       
//inicio memcache
//consulta específica com memcache
 $memcache_objp = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consultap=$row_comm_dest->IdCommunity; 
 $chavep = "key".md5($consultap);
 $query_memp23 = memcache_get($memcache_objp,$chavep);
//consulta específica com memcache

if ($query_memp23==false){ 
$count_list_user = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$row_comm_dest->IdCommunity' order by IdOrder DESC  ")or die(mysql_error());;
$c_row_lis = mysql_num_rows($count_list_user);
$varp=$c_row_lis;
$memcache_objp->set($chavep,$varp, MEMCACHE_COMPRESSED, 400);

}else{
$c_row_lis=$query_memp23;
};
$query_list_user_1 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$row_comm_dest->IdCommunity' and UserId='".USERID_ID."' order by IdOrder DESC limit 1")or die(mysql_error());;
$rows_list_user = mysql_num_rows($query_list_user_1);
 
    
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
        <div style="position: relative; width:155px;margin:10px; height:250px;"><img src="/cropImg.php?arquivo=bg_community/<?php  echo $row_comm_dest->CommunityImg; ?>&largura=155&altura=250"></div>
        <div style="position: relative; width:155px; height: 155px; padding: 10px; background-color: #EEEEEE;">
             <a href="/communities/<?php echo $row_comm_dest->IdOrder;?>"><label  style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal;cursor:pointer; font-variant: normal; color: #666666"><?php echo ocultaTexto($row_comm_dest->CommunityName,25);?></label></a><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo MEMBROSUPCASE7; ?> (<?php   echo number_format($c_row_lis,0,',','.');?>)</span><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo ocultaTexto($row_comm_dest->AboutComm,35);?></span>
             <?php if (($row_comm_dest->UserIdPro!=USERID_ID) and ($row_comm_dest->CommunityPrivacy=='2') and ($rows_list_user=='')){?>
            <label class="_42ft _2qix _7tn _3ma _oppe39993irmmr"><?php echo PARTICIPAR ; ?><input type="hidden"  value="<?php echo $row_comm_dest->IdCommunity;?>"></label>
                
             
             <?php }else{?> <label class="botton_cinza"
                
                
                 style=" padding: 5px 6px 5px 6px; position: absolute; bottom: 10px; right: 10px;"><?php echo PARTICIPANDO002992;?></label><?php };?></div></div> 
                
                
             <?php ;}/*minhas*/;?><?php  }?>
             
            
             
                <div style="clear:both"></div></div>
      
    <!-- comunidades em destaque --> 
        
         <?php 
$query174 = mysql_query("SELECT UserId FROM list_community_user  where UserId='".USERID_ID."'  limit 1 ")or die(mysql_error());;
$rcont374 = mysql_num_rows($query174);
         
   $rcontquery26 = mysql_num_rows($querycodeerr);
if ($rcontquery26!='' or $rcont374!=''){
     
     ?>   
 <!-- Minhas comunidades -->       
        <div class="user_foto_borda_superior" style="background-color: #F9F9F9; border: 1px solid #C1C5CA; position: relative; width: 780px; height: 80px">
     <span style="font-family: arial, Helvetica, sans-serif; font-size: 17px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 30px; left: 10px;"><?php echo SUASCOMUNIDADES9292;?></span>
     <label class="jewuie7773uy2jfdlf" onclick="view_prof33('<?php echo USERID_ID;?>');"   
             style="position: absolute;right:10px; top:30px;font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 15px; 
  color: #3366CC;
   font-style: bold;
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
         
cursor:pointer;


            "><?php echo VERTODASS;?></label>
     
     </div>
     
     <div class="" 
    
     style=" border: 1px solid #C1C5CA; position: relative; width: 775px;margin-bottom:20px; height: auto; margin-top:0px;padding-left:5px; padding-top:10px; background-color:#d3d5d9;">
  
      <?php  
      $aux_privacy="2";
$querycod = mysql_query("SELECT UserIdPro,IdCommunity,IdOrder,CommunityImg,CommunityPrivacy,CommunityName,AboutComm FROM community_users Where UserIdPro='".USERID_ID."'  order by  timestamp2 DESC limit 4 ")or die(mysql_error());;
      
$rcontquery2 = mysql_num_rows($querycod);
if ($rcontquery2!=''){
 while ($mensagemcod = mysql_fetch_object($querycod)){
 $auxjjj=$mensagemcod->IdCommunity;

if ($rcont3799!=''  or   $mensagemcod->UserIdPro==USERID_ID ){
      ?> 
       <?php 
       
//inicio memcache
//consulta específica com memcache
 $memcache_objp = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consultap=$mensagemcod->IdCommunity; 
 $chavep = "key".md5($consultap);
 $query_memp = memcache_get($memcache_objp,$chavep);
//consulta específica com memcache

if ($query_memp==false){ 
$query17 = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$mensagemcod->IdCommunity' order by IdOrder DESC  ")or die(mysql_error());;
$rcont37 = mysql_num_rows($query17);
$varp=$rcont37;
$memcache_objp->set($chavep,$varp, MEMCACHE_COMPRESSED, 400);

}else{
$rcont37=$query_memp;
};
$query17kk = mysql_query("SELECT UserId FROM list_community_user  where IdCommunity='$mensagemcod->IdCommunity' and UserId='".USERID_ID."' order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont37kk = mysql_num_rows($query17kk);
 
    
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
                
                
             <?php };}/*minhas*/;?><?php  }?>
             
 <?php  
      $aux_privacy="2";
      
       $query1ree = mysql_query("SELECT community_users.AboutComm,community_users.IdCommunity,community_users.IdOrder,community_users.CommunityImg,community_users.CommunityName,list_community_user.IdCommunity idcomm,list_community_user.UserId,list_community_user.IdOrder idorder FROM community_users,list_community_user  where (list_community_user.UserId='".USERID_ID."' and  community_users.IdCommunity=list_community_user.IdCommunity) order by list_community_user.IdOrder DESC limit 4 ")or die(mysql_error());
           $rcontqudsdsd = mysql_num_rows($query1ree);
if ($rcontqudsdsd!=''){
           
while ($mensagemcod = mysql_fetch_object($query1ree)){      
if ($mensagemcod->IdCommunity!=''){
 $auxjjj=$mensagemcod->IdCommunity;

      ?> 
       <?php 
       
//inicio memcache
//consulta específica com memcache
 $memcache_objp2 = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consultap2=$mensagemcod->IdCommunity; 
 $chavep2 = "key".md5($consultap2);
 $query_memp2 = memcache_get($memcache_objp2,$chavep2);
//consulta específica com memcache

if ($query_memp2==false){ 
$query17 = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$mensagemcod->IdCommunity'   ")or die(mysql_error());;
$rcont37 = mysql_num_rows($query17);
$varp2=$rcont373;
$memcache_objp2->set($chavep2,$varp2, MEMCACHE_COMPRESSED, 400);
}else{
$rcont37=$query_memp2;
};
$query17kk = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$mensagemcod->IdCommunity' and UserId='".USERID_ID."'  ")or die(mysql_error());;
$rcont37kk = mysql_num_rows($query17kk);

    
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
                
                
             <?php }/*minhas*/;?><?php  };};?>            
             
                <div style="clear:both"></div></div>
      
    <!--Minhas comunidades -->
    <?php };?>
  <div id="kpowefweofoiewhjjdd" class="user_foto_borda_superior" style="background-color: #F9F9F9;display:none; border: 1px solid #C1C5CA; position: relative; width: 780px; height: 80px">
     <span style="font-family: arial, Helvetica, sans-serif; font-size: 17px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 30px; left: 10px;"><?php echo COMUNIDADESSUGERIDAS99292; ?></span></div>
          
        <div id="load_99e8ueure"></div>
        <div id="limit_pag" 
                  
                  
                  
                        
                           
    
     style=" width: 780px; height: 90px;  position: relative; left: 0px; bottom: 10px;margin-top:10px;">
    <label class="link_foote"  onclick="carrega_mais6Comm('<?php echo USERID_ID;?>')" style="width: 100%"><center>
    <label id="mais_post" >
                       <span  class="boradsemquina3 button_criarCom" style="padding: 5px 9px 5px 9px; font-family: tahoma,verdana,arial,sans-serif; font-size: 14px;margin-top:10px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; background-color: #3366CC; position: relative; cursor: pointer; z-index: 100;" 
                      ><?php echo EXIBIRMAISCOMUNIDADES3;?></span></label></center><div id="load_1" 
                           
         style="margin: 20px auto; width:400px; height: 20px; position: relative;"></div></label></div>
                        
       
       <?php			          
                                           ?>
                          
      
    </div>
    
    <?php }else{
    exit;
    
    
      }?>
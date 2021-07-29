<?php 
require("check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");   

   if (login_chekout()==true){
   sec_session_start();
   
include("date.php");
 include_once ("sanitizeSql.php");
 
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
             $qtd=6;
if ($_GET['page']!=''){


 $inicio_aux3=($_GET['page'] * $qtd)- $qtd;
}else{
$inicio_aux3=0;
}                      


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o
              
$idUseruNN9c=Sanitize::filter($_GET['id']);
$sql33 =("SELECT UserName,UserGen FROM users Where UserId='".mysql_real_escape_string($idUseruNN9c)."' limit 1  ")or die(mysql_error());
$queryI33 = mysql_query($sql33);
$mensagemI33 = mysql_fetch_object($queryI33);
 $User_Name33 =($mensagemI33->UserName) ;

if($mensagemI33->UserGen=='2'){$genmaksk="dele";}else{$genmaksk="dela";};
if (USERID_ID==$idUseruNN9c){$name_post_svr="Suas comunidades";$frase5="Você";$frase="Você não tem mais recados";$frase2="Poxa , você ainda não tem nenhum recado?";}else{$name_post_svr="Comunidades de ".LimiteFrase($User_Name33,'15')."";$frase="".LimiteFrase($User_Name33,'15')." não tem mais recados";$frase2="Poxa , ".LimiteFrase($User_Name33,'15')." ainda não tem recados com você.";$frase5="".LimiteFrase($User_Name33,'15')."";};
 
?>


<div id="com_832ukfwhe"  style="position: relative;display:none; width: 820px">
    <div id="slid_show" class="boradsemquina3 sombra_padrao_bottom"
        style=" background-color: #FFFFFF; position: relative;overflow:hidden; width: 820px; height: 200px;">
        <img src="img/icon/djeue7848yee.png" style=""/><span 
        
        
            style="1px 1px 1px;font-family: arial, Helvetica, sans-serif; font-size: 40px;  font-weight: normal;   font-style: normal;   font-variant: normal;    color: #FFFFFF;   z-index:100; position: absolute; top: 33px; left: 41px;">Comunidades </span><span 
        
        
        
            
            style="font-family: arial, Helvetica, sans-serif; font-size: 20px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; z-index: 100; position: absolute; top:80px; left: 41px; 1px: ;">Convide seus amigos para participar ,<br /> aqui você revive os velhos tempos :) </span>
    <label onclick="selec_commu_uei();" class="boradsemquina3 button_criarCom" style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; background-color: #3366CC; text-align: center; vertical-align: middle; padding: 10px 15px 10px 15px; position: absolute; cursor: pointer;bottom:10px; left: 41px;">Criar comunidade</label></div>
    
    <div  class="boradsemquina3" style="position: relative; width: 820px; height: auto; margin-top: 20px;">

     <?php 
               
     
     $querycod6 = mysql_query("SELECT * FROM community_users force index(timestamp2) Where UserIdPro='".$idUseruNN9c."' and CommunityName<>'' order by  timestamp2 DESC limit $inicio_aux3,$qtd")or die(mysql_error());;
      
$rcontquery26 = mysql_num_rows($querycod6);
$query17998 = mysql_query("SELECT * FROM list_community_user  where UserId='".$idUseruNN9c."'  order by IdOrder DESC limit $inicio_aux3,$qtd ")or die(mysql_error());;
$rcont37998 = mysql_num_rows($query17998);
$totooslsdf=$rcontquery26+$rcont37998;
if ($totooslsdf!=''){
 //echo    "$rcontquery26,$rcont37998" ;
     ?>   
        <div class="user_foto_borda_superior" style="background-color: #F9F9F9; border: 1px solid #C1C5CA; position: relative; width: 820px; height: 80px">
        <input placeholder="Pesquisar suas comunidades" id="nome_test3" maxlength="100"
             accesskey="/" name="nome_test3" onkeyup="searcH_commmUser8('<?php echo $idUseruNN9c;?>')"
                type="text" 
            
            
             
             style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; background-color: #F9F9F9; border: 1px solid #CCCCCC; padding-left: 10px; width: 255px; height: 30px; top: 20px; right: 10px;" />
     <span style="font-family: arial, Helvetica, sans-serif; font-size: 17px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 30px; left: 10px;"><?php echo $name_post_svr;?></span></div>
     
     <div class="" 
    
     style=" border: 1px solid #C1C5CA; position: relative; width: 800px;margin-bottom:20px; height: auto; margin-top:0px;padding-left:20px; padding-top:10px; background-color:#d3d5d9;">
<!-- Minhas comunidades -->       
   
      <?php  
      $aux_privacy="2";
      
      if ($rcontquery26!=''){
      
 while ($mensagemcod = mysql_fetch_object($querycod6)){
  $auxjjj=$mensagemcod->IdCommunity;
$query1799 = mysql_query("SELECT * FROM list_community_user  where (IdCommunity='$auxjjj' and UserId='".$idUseruNN9c."' )  ")or die(mysql_error());;
$rcont3799 = mysql_num_rows($query1799);

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

$query17kk = mysql_query("SELECT IdOrder FROM list_community_user   where IdCommunity='$mensagemcod->IdCommunity' and UserId='".$idUseruNN9c."' ")or die(mysql_error());;
$rcont37kk = mysql_num_rows($query17kk);
 
    
    ?><div id="lweo94ialfejjfeqjkol33">
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
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080">Membros (<?php   echo number_format($rcont37,0,',','.');?>)</span><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo ocultaTexto($mensagemcod->AboutComm,35);?></span>
             <?php if (($mensagemcod->UserIdPro!=USERID_ID) and ($mensagemcod->CommunityPrivacy=='2') and ($rcont37kk=='')){?>
            <label class="_42ft _2qix _7tn _3ma _oppe39993irmmr">Participar<input type="hidden"  value="<?php echo $mensagemcod->IdCommunity;?>"></label>
                
             
             <?php }else{?> <label class="botton_cinza"
                
                
                 style=" padding: 5px 6px 5px 6px; position: absolute; bottom: 10px; right: 10px;">Participando</label><?php };?></div></div>  </div>
                
                
             
             
             
               <?php ;};};?><!--Minhas comunidades -->
  
  <!-- comunidades de amigos -->
   
      <?php  
      $aux_privacy="2";
      
      if ($rcont37998!=''){
 while ($mensagemcodf = mysql_fetch_object($query17998)){
 
  $auxjjj=$mensagemcodf->IdCommunity;
   $querycod6f = mysql_query("SELECT * FROM community_users Where IdCommunity='$auxjjj' and CommunityName<>'' limit 1 ")or die(mysql_error());;
    $mensagemcodp = mysql_fetch_object($querycod6f);
 $rcont334eere = mysql_num_rows($querycod6f);
    if ($rcont334eere!=''){

      ?> 
       <?php 
///inicio memcache
//consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$mensagemcodp->IdCommunity; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta específica com memcache
 if ($query_mem==false){             
$query17p = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$mensagemcodp->IdCommunity'   ")or die(mysql_error());;
$rcont37p = mysql_num_rows($query17p);
$var=$rcont37999;
$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 400);
    
}else{
$rcont37p=$query_mem;
};
$query17kkp = mysql_query("SELECT IdOrder FROM list_community_user  where IdCommunity='$mensagemcodp->IdCommunity' and UserId='".$idUseruNN9c."'  ")or die(mysql_error());;
$rcont37kk = mysql_num_rows($query17kkp);
 
    
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
        <div style="position: relative; width:155px;margin:10px; height:250px;"><img src="/cropImg.php?arquivo=bg_community/<?php  echo $mensagemcodp->CommunityImg; ?>&largura=155&altura=250"></div>
        <div style="position: relative; width:155px; height: 155px; padding: 10px; background-color: #EEEEEE;">
             <a href="/communities/<?php echo $mensagemcodp->IdOrder;?>"><label  style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal;cursor:pointer; font-variant: normal; color: #666666"><?php echo ocultaTexto($mensagemcodp->CommunityName,25);?></label></a><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080">Membros (<?php   echo number_format($rcont37p,0,',','.');?>)</span><br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080"><?php echo ocultaTexto($mensagemcodp->AboutComm,35);?></span>
             <?php if (($mensagemcodp->UserIdPro!=USERID_ID) and ($mensagemcodp->CommunityPrivacy=='2') and ($rcont37kk=='')){?>
            <label class="_42ft _2qix _7tn _3ma _oppe39993irmmr">Participar<input type="hidden"  value="<?php echo $mensagemcodp->IdCommunity;?>"></label>
                
             
             <?php }else{?> <label class="botton_cinza"
                
                
                 style=" padding: 5px 6px 5px 6px; position: absolute; bottom: 10px; right: 10px;">Participando</label><?php };?></div></div> 
                
                
             
             
             
               <?php ;};};};?>
  
  <!--  comunidades de amigos --> 
                <div style="clear:both"></div> 
                <div id="load_99e8ueure" style="display:none;"></div>
        <div id="limit_pag" 
                  
                  
                  
                        
                           
    
     style=" width: 820px; height: 90px;  position: relative; left: 0px; bottom: 10px;margin-top:10px;">
    <label class="link_foote"  onclick="load_comm_user7ryu4r('<?php echo $idUseruNN9c;?>')" style="width: 100%"><center>
    <label id="mais_post" >
                       <span  class="boradsemquina3 button_criarCom" style="padding: 5px 9px 5px 9px; font-family: tahoma,verdana,arial,sans-serif; font-size: 14px;margin-top:10px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; background-color: #3366CC; position: relative; cursor: pointer; z-index: 100;" 
                      >Exibir  mais comunidades </span></label></center><div id="load_1" 
                           
         style="margin: 20px auto; width:400px; height: 20px; position: relative;"></div></label></div></div>
      
     <?php }else{



?>    
    <div class="" id="new_8374ujr"
            
            style="position: relative; background-color:;width: 820px; height: auto;padding-bottom:20px;margin-bottom:20px;">
        <div style="position: relative; height: 50px">
    <span style="font-family: arial, Helvetica, sans-serif; font-size: 20px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: absolute; top: 13px; left: 138px;"><?php if($idUseruNN9c==USERID_ID){ echo "Você ainda não participa de nenhuma comunidade :(";}else{ echo "$User_Name33 ainda não participa de nenhuma comunidade :(";};?></span></div>
    <div style="position: relative; width: 820px; height:170px;; clear: both;margin-bottom:20px;">
        <div style="position: relative; width: 100px; height: 150px; float: left; margin: 20px 20px 20px 200px; text-align: center;">
            <img src="img/uw7883uu3ye287io3j3r.jpg" class="radius_150px" 
                style="position: relative; width: 130px; height: 130px" /><span 
                
                
                style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 132px; left: 30px;">Particular</span></div>
                <div style="position: relative; width: 100px; height: 150px; float: left; margin: 20px; text-align: center;"><img style="position: relative; width: 130px; height: 130px" src="img/sjd3uru3khjagjdfjejfh4yh44.jpg" class="radius_150px" /><span 
                
                        
                        
                        style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 131px; left: 39px;">Pública</span></div>
                <div style="position: relative; width: 100px; height: 150px; float: left; margin: 20px; text-align: center;"><img style="position: relative; width: 130px; height: 130px" src="img/aee934y3hurgegreueerie.jpg" class="radius_150px" /><span 
                
                        
                        style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 132px; left: 9px; width: 108px;">Do seu jeito</span></div>
                </div>
        </div>
        
        
        </div>
 <?php    }; ?>
      
    
    </div>
    
    <?php }else{
    exit;
    
    
}?>
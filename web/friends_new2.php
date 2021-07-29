<?php 
require("check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");      

    if (login_chekout()==true){
    sec_session_start();
  
include("date.php");
  
include("lapse.php");
 $aux_osdj394h4hhn=false;
 
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
//$aux_id_order_event=$_GET['idOrder'];

               
include_once ("transl8uu3j.php");

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o

?>
<div id="ioks9900" class="boradsemquina3 sombra_padrao_bottom" 
    style=" position: relative; ; margin-bottom:5px; background-color:#FFFFFF;  width:270px; max-height:300px">
<div style="position: relative; width: 270px; height:auto; ">
    <div style="position: relative; width:250px; height: auto;padding:10px;">
 <?php 
                  $userid = CCUSERIDI;
 ///inicio memcache
//consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$userid."friends_count"; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta específica com memcache
 if ($query_mem==false){                     
                  
              $query17p = mysql_query("SELECT ccuserid FROM users,friends_list  Where  (users.ccuserid=friends_list.Idfriend and Idme='".$userid."' and users.ccuserid<>'".$userid."' and friends_list.block<>'2') group by friends_list.Idfriend order by lastactivity DESC ")or die(mysql_error());
              //friends list
$rcont37p = mysql_num_rows($query17p);
$var=$rcont37p;
$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 200);
 }else{
 $rcont37p=$query_mem;
 };


$aux_cont="0";
if ($rcont37p!=''){

//consulta específica com memcache
 $memcache_obj2 = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta2=$userid."friends_8";; 
 $chave2 = "key".md5($consulta2);
 $query2 = memcache_get($memcache_obj2,$chave2);
 $lista_ = array();
 $result_='';
   if ($query2==false) {
  $query17p = mysql_query("SELECT users.lastactivity,users.ccuserid userid,users.UserId,users.ccuserid,users.UserFotoThumb,users.UserName,users.FullName,friends_list.Idme,friends_list.Idfriend,friends_list.block FROM users,friends_list  Where  (users.ccuserid=friends_list.Idfriend and Idme='".$userid."' and userid<>'".$userid."' and block<>'2') group by Idfriend order by users.lastactivity_last DESC ")or die(mysql_error());
   
 
 while($item = mysql_fetch_object($query17p)){
                         $lista_[] = $item;
                    };
   $var2=$lista_;
   $memcache_obj->set($chave2,$var2, MEMCACHE_COMPRESSED, 60);
   $result_=$lista_;
  }else{
  $result_=$query2;
  };
 
 
 ?>   
    
        <span   class="text_colleft_nome"><?php echo AMIGOSBANNER;?> ( <?php echo $rcont37p;?> )</span><label onclick="abrirPag4('<?php echo USERID_ID;?>');"  
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


            "><?php echo VERTODASS;?></label><input placeholder="<?php echo BUSCARAMIGOS;?>"id="nome_test"maxlength="100"accesskey="/" name="nome_test" onkeyup="searcH_Membro_User()"
                type="text" placeholder="Nome"
            
            style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; background-color: #FFFFFF; border: 1px solid #EEEEEE; padding-left: 10px; width: 235px; height: 30px; top: 30px; left: 10px;" />
            <div id="ser_user_test"
                
            
            
            style="position: absolute; width:235px; left: 2px; z-index:110; margin-bottom: 0px; top:61px;"></div>
    
       <div style="position: relative; width:auto;margin-left:0px; margin-top: 60px; height: auto;">
        <?php
        $auxsnd="";
           foreach ($result_ AS $mensagem) { 
       
        if ($auxsnd < '9' ){
        
      
        ?>
        
            <div class="boradsemquina3" onclick="view_prof('<?php echo $mensagem->UserId ;?>')"
            
            style="padding: 8px; position: relative; width:60px; max-height:90px; float: left; margin-right: 5px;margin-bottom: 5px; background-color: #f0f0f0; ">
                  <img  src="/cropImg.php?arquivo=profile_thumbs/<?php echo $mensagem->UserFotoThumb ;?>&largura=60&altura=60" style=" position: relative" /><label 
                    
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #336699; position: relative; top:4px; left: 0px;word-wrap: break-word;"><?php echo ocultaTexto($mensagem->UserName); ?></label></div> 
            <?php ;};$auxsnd=$auxsnd+1;
        }?><div style="clear: both;"></div></div>
            </div>
            
        <?php }else{ ?> 
        
        <div  style="background-color: #FFFFFF; position: relative; width: 250px; height:127px">
    <div style="position: relative; width: 250px; height: 30px"><span class="text_colleft_nome"><?php echo POXAVCNAOTEMAMIGO;?></span></div>
   <div onclick="abrirmembros();" onmouseout="javascript:this.style.background= ''" 
             onmouseover="javascript:this.style.background= '#EFEFEF'"   
  style="position: relative; width: 250px;height: 81px; top: 0px; left: 0px;margin-bottom:5px;"> <div style="position: relative; float: left; width: 80px; height: 80px">
        <img src="img/9ooiwe999.png" 
            style="position: absolute; top: 0px; left: 0px;"/></div>
    <label onclick="abrirmembros();" style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; cursor: pointer; top: 31px; left: 80px;">Encontrar amigos</label></div></div>
    <?php };?>   
            </div>    
    </div>
   <?php }else{
   exit;
   
    }?>
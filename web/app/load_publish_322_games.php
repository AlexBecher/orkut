<?php 
 require("check_func_db.php");
   
    if (login_chekout()==true){
    sec_session_start();
 
              
                $UserId_Cokie =$_SESSION ['UserId'];
             
include("date.php");
 include_once ("transl8uu3j.php");

include("lapse.php");
 $aux_osdj394h4hhn=false;
 
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



               


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o

//$auc_cod=mysql_real_escape_string($_GET['id']);


  //amigos que jogam
  $aunx_texto='';
  $axu_cont='';
//conta quanto jogam este jogo
//ATUALIZA IMAGENS DOS GAMES 
$queryGAMES_IMG=mysql_query("SELECT img1,img2,img3,img4,info,name,cod FROM info_games where publish='1' order by rand() limit 1 ")or die(mysql_error());
$row_GAMESIMG=mysql_fetch_object($queryGAMES_IMG);
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$IMG_game = $row_GAMESIMG->img2;
$info = $row_GAMESIMG->info;
$name_game = $row_GAMESIMG->name;
$cod_game = $row_GAMESIMG->cod;
//ATUALIZA IMAGENS DOS GAMES 


    //consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$cod_game; 
 $chave = "game".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
 if ($query_mem==false){
//consulta específica com memcache
//conta quantas pessoas já jogaram este jogo
$query17pp_2 = mysql_query("SELECT IdGame FROM games_play  where (IdGame='$cod_game' and IdGame<>'0') ")or die(mysql_error());
$rcont37pp2_2 = mysql_num_rows($query17pp_2);
$memcache_obj->set($chave,$rcont37pp2_2, MEMCACHE_COMPRESSED, 3600); 
 }else{
$rcont37pp2_2 = $query_mem; 
 
 }

 // $query17p = mysql_query("SELECT Idfriend FROM friends_list  Where (Idme='".CCUSERIDI."' and block<>'2')  group by Idfriend order by rand() limit 1 ");
   //           $rcont37p = mysql_num_rows($query17p);
              //friends list
$rcont37p='0';             
$aux_cont='0'; 
if ($rcont37p!='0' && $rcont37ppd!='0'){

$aux99='0';
$mensagemBox7 = mysql_fetch_object($query17p); 
 $aux99=$aux99+1;
           
 $sql = ("select UserId,UserName from users where ccuserid='".$mensagemBox7->Idfriend."' order by ccuserid ASC limit 1")or die(mysql_error());
	          $query = mysql_query($sql);
	          $res = mysql_fetch_array($query);
	          $userid = $res[0];
	          $usename3= $res[1];
	       
 //conta se este amigos jogou este jogo
$query17pp = mysql_query("SELECT IdGame FROM games_play  where (UserId='".$userid."' and IdGame='$cod_game' and IdGame<>'0') limit 1  ")or die(mysql_error());
$rcont37pp2 = mysql_num_rows($query17pp);
$aux_contp="0";
if ($rcont37pp2!='0'){

if ($rcont37pp2!='0'){
$aujs=ocultaTexto($usename3);if ($aux99 > '0') { ","; };
$aunx_texto="<b>$aujs</b> e mais ".number_format($rcont37pp2_2,0,',','.')." pessoas já jogaram.";
};
}else{
$var = $rcont37pp2_2;
 
 $aunx_texto=number_format($var,0,',','.')." pessoas já jogaram.";


}
 

 
}else{
$var = $rcont37pp2_2;
 $aunx_texto=number_format($var,0,',','.')." pessoas já jogaram.";
}

?>
<style>
.ksiieoe838833ue{
visibility:hidden; 


}
.lloepowpoei83838:hover > .ksiieoe838833ue{
visibility:visible; 


};
.sombra_01{
box-shadow: 0 2px 1px #C0C0C0; -moz-box-shadow: 0 2px 1px #C0C0C0; -webkit-box-shadow: 0 2px 1px #C0C0C0;
}
</style>
    
    <!-- game -->
    <?php ?>
    <div        style="margin-left:10px; text-align: left;padding-top:5px; margin-bottom: 0px;">    <span style="font-family:'helvetica neue', helvetica, arial, 'lucida grande', sans-serif;line-height:18px;font-size:12px;color:#999999;font-style:normal;font-variant:normal;letter-spacing:normal;orphans:2;font-weight:bold;text-align:-webkit-auto;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-size-adjust:auto;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);cursor:pointer;position:relative; "><?php echo JOIGOSSUGERIDOS;?></span></div>    <a href="https://orkuti.net/games/play/<?php echo $cod_game; ?>&time=<?php echo time();?>" target="_blank">  
 <div style="margin: 5px 10px 0px 10px; position: relative; width: 250px; height: auto; background-color:; top: 0px; left: 0px; ">        <a href="https://orkuti.net/games/play/<?php echo $cod_game;?>&time=<?php echo time();?>"  target="_blank"><img src="games/<?php echo $IMG_game; ?>" alt="<?php echo $IMG_game;?>" style="position: relative;margin-bottom:10px; width: 250px; "/><label                                                                                             style="font-family: arial, Helvetica, sans-serif;cursor:pointer; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #598cbe; position: relative; left: 0px; bottom: 10px; "><?php echo $name_game;?><br /></label></a>        </div></a>
<div style="margin: 0px 10px 0px 10px; position: relative; bottom: 10px; width: 250px; ">
     <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666"><?php echo ocultaTexto($info,150);?></span></div>
    
   <div style="border-style:solid none none none;margin:0px 10px 5px 10px;display:; border-width: 1px; border-color: #EAEAEA; position: relative; width:250px; "></div>
  <?php ?>
    <!-- game -->
    
  
        

 <?php  }else{
    
    exit;
    }?>
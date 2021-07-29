<?php 
require("../check_func_db.php");
   
    if (login_chekout()==true){
    sec_session_start();

include("../lapse.php");
include_once ("../sanitizeSql.php");

 

$auudsud=Sanitize::filter($_GET['id']);	



               


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
              

$query17pp = mysql_query("SELECT IdGame FROM games_play  where (UserId='".USERID_ID."' and IdGame<>'$auudsud' and IdGame<>'0')GROUP BY IdGame order by rand() limit 3    ")or die(mysql_error());
$rcont37pp = mysql_num_rows($query17pp);
$aux_contp="0";
if ($rcont37pp!='0'){


?>


<div  
          
          
        style="position: relative; width:260px;padding-left:10px; height:auto; background-color: #FFFFFF; "">
    <div style="position: relative;margin-left:0px; text-align: left; margin-bottom: 5px;" ><span class="text_colleft_nome" >Seus jogos</span></div> 
       <?php 




  while ($mensagemgame = mysql_fetch_object($query17pp)){               
 $imga8834u4=""; 
$imganide9239=$mensagemgame->IdGame;

//ATUALIZA IMAGENS DOS GAMES 
$COD_GAME=$imganide9239;
$queryGAMES_IMG=mysql_query("SELECT img1,img2,img3,img4,info FROM info_games where cod='".$COD_GAME."' order by idorder ASC limit 1")or die(mysql_error());
$row_GAMESIMG=mysql_fetch_object($queryGAMES_IMG);
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$imga8834u4 = $row_GAMESIMG->img1;
$info = $row_GAMESIMG->info;
//ATUALIZA IMAGENS DOS GAMES 
/*
if ($imganide9239=='101'){$imga8834u4="8382873.jpg";};
if ($imganide9239=='102'){$imga8834u4="883ieuieur.jpg";};
if ($imganide9239=='103'){$imga8834u4="6482_DOL__CW02_250x150_png_fz.png";};
if ($imganide9239=='104'){$imga8834u4="i8495848.jpg";};
if ($imganide9239=='105'){$imga8834u4="partner_game_logo.png";};
if ($imganide9239=='106'){$imga8834u4="partner_game_logo2.png";};
if ($imganide9239=='107'){$imga8834u4="partner_game_logo3.png";};
if ($imganide9239=='108'){$imga8834u4="44urhhej45454fdfdhjfrere.jpg";};
if ($imganide9239=='109'){$imga8834u4="6483_DFD__CW02_250x150_png_fz.png";};
if ($imganide9239=='110'){$imga8834u4="6479_CW02_KDK_Orkuti_250x150_jh.png";};
if ($imganide9239=='111'){$imga8834u4="partner_game_logo3434.png";};
if ($imganide9239=='113'){$imga8834u4="6284_CHF_Orkuti_250x150_png_fz.png";};
if ($imganide9239=='114'){$imga8834u4="6480_KNB_Orkuti_250x150_jh.png";};
if ($imganide9239=='115'){$imga8834u4="6286_NAH_Orkuti_250x150_png_fz.png";};
*/
  ?><a href="/games/play/<?php echo $imganide9239;?>" style="text-decoration: none;">
   <div class="boradsemquina3"  
        style=" position: relative; width: 80px; height: auto; background-color:#E4E4E4; float: left;margin-bottom:10px;margin-left:2px;">
        <div style="position: relative; width: 80px; height: 80px;">
            <img class="boradsemquina3" src="/cropImg.php?arquivo=games/<?php echo $imga8834u4;?>&largura=80&altura=80" 
                style="width: 80px; position: relative; height: 80px" /></div>
        </div></a>      
             <?php }; ?><div style="clear:both"></div> 
                
      
    
        
    
    </div><?php };};?>
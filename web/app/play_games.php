<?php 
require("check_func_db.php");

   if (login_chekout()==true){
   


include("date.php");
 
include("lapse.php");
 $aux_osdj394h4hhn=false;
$aux_cont_event=false;
$aux_cont_event2=false; 
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



               


// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
include_once ("transl8uu3j.php");
header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
              



?>

<div  id="com_832ukfwhe"  class="boradsemquina3"  style="position: relative;display:; width: 780px;margin-bottom:30px;">

<style>
			.trs {-webkit-transition:all ease-out 0.5s;
			-moz-transition:all ease-out 0.5s;
			-o-transition:all ease-out 0.5s;
			-ms-transition:all ease-out 0.5s;
			transition:all ease-out 0.5s;}
		
		#slider {position: relative; z-index: 1;}
		#slider a { position: absolute; top: 0; left: 0; opacity: 0;filter:alpha(opacity=0);}
		.ativo {opacity: 1!important; filter:alpha(opacity=100)!important;}
		
		/*controladores*/
		.iu {background: #0190EE; cursor: pointer; opacity: 0;filter:alpha(opacity=0); position: absolute; bottom: 40%; width: 43px; height: 43px; z-index: 5;}
		.next {right: 10px;}
		.next:before,.next:after {left: 21px;}
		.next:before {
			-webkit-transform: rotate(-42deg);
			-moz-transform: rotate(-42deg);
			top: 5px;
		}
		.next:after {
			-webkit-transform: rotate(-132deg);
			-moz-transform: rotate(-132deg);
			top: 19px;
		}
		.next:before,.next:after,.prev:before,.prev:after {content: "";
			height: 20px;
			background: #fff;
			width: 1px;
			position: absolute;
		}
		.prev {left: 10px;}
		.prev:before,.prev:after {left: 18px;}
		.prev:before {
			-webkit-transform: rotate(42deg);
			-moz-transform: rotate(42deg);
			top: 5px;
		}
		.prev:after {
			-webkit-transform: rotate(132deg);
			-moz-transform: rotate(132deg);
			top: 19px;
		}
		figure:hover .iu {opacity: 0.76;filter:alpha(opacity=76);}
		figure {
			max-width: 780px;
			height: 300px;
			position: relative;
			overflow: hidden;
			margin: 0px auto;
		}
	figcaption {   display: block;
    background: #fafbfc;width:760px;
    padding-left:20px;
    padding-top:6px;
    height: 54px;
    line-height: 54px;
    border-bottom: 1px solid #e7e8ec;
    border-radius: 2px 2px 0 0;
    font-size: 16px;
    outline: none;
    color: #000;
    font-size: inherit;
    font-weight: inherit;
    color: inherit;    font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
   color: #333333; font-size: 18px; font-weight: normal; font-style: normal; font-variant: normal; z-index: 5}
		
	.ksiieoe838833ue{
visibility:hidden; 


}
.lloepowpoei83838:hover > .ksiieoe838833ue{
visibility:visible; 


}
	</style>

	<figure class="boradsemquina3">
		<span class="trs next iu"></span>
		<span class="trs prev iu"></span>
		
				<div id="slider" class="boradsemquina3">
		<?php 
//ATUALIZA IMAGENS DOS GAMES 
$COD_GAME=$imganide9239;
$queryGAMES_IMG=mysql_query("SELECT img1,img2,img3,img4,info,name,cod FROM info_games where banner='1' order by timestamp DESC ")or die(mysql_error());
while ($row_GAMESIMG=mysql_fetch_object($queryGAMES_IMG)){
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$IMG_game = $row_GAMESIMG->img4;
$info = $row_GAMESIMG->info;
$name_game = $row_GAMESIMG->name;
$cod_game = $row_GAMESIMG->cod;
//ATUALIZA IMAGENS DOS GAMES 
		
		?>
		<a href="https://orkuti.net/games/play/<?php echo $cod_game ;?>" class="trs"><img src="games/<?php echo $IMG_game?>" alt="<?php echo $name_game;?>" /></a>
			
<?php };?>			
				
					
							</div>
	
		
	</figure>
		</div>
<div  class="boradsemquina3"  style="position: relative;display:; width: 780px;background: #FFFFFF;border: 1px solid #C1C5CA;">


    
<figcaption></figcaption> 
   <div class="" 
    
     style="  position: relative; width: 700px; height: auto; margin-top:0px;padding-left:55px;padding-bottom:20px; padding-top:30px; background-color:#FFFFFF;">
       <style>
.meter[value="0"] {
    background-position: left 0px;
}
.meter[value="1"] {
    background-position: left -20px;
}
.meter[value="2"] {
    background-position: left -40px;
}
.meter[value="3"] {
    background-position: left -60px;
}
.meter[value="4"] {
    background-position: left -80px;
}
.meter[value="5"] {
    background-position: left -100px;
}
.mtr-2 {
    background-image: url(/img_news_2016/sp-meter-large.png);
    margin-right: 0;
    width: 74px;
}
.meter {
    background: url(/img_news_2016/sp-meter-large.png) no-repeat scroll left 0;
    cursor: help;
    display: inline-block;
    vertical-align: middle;
    height: 13px;
    overflow: hidden;
    text-indent: -9999px;
    vertical-align: baseline;
    width: 74px;
}
</style>
 <?php 
 //count starts

function count_start_93993($cods){
$query_counter_starts = mysql_query("select game_starcol_count ,count(game_starcol_count) AS count_093 from game_star  where game_starcol_id_game='".mysql_real_escape_string($cods)."'group by game_starcol_count order by count_093 DESC")or die(mysql_error());
$rcon_count_starts22_fecht= mysql_fetch_object($query_counter_starts);

return $rcon_count_starts22_fecht->game_starcol_count;
};
 //lista os jogos
//ATUALIZA IMAGENS DOS GAMES 
$COD_GAME=$imganide9239;
$queryGAMES_IMG=mysql_query("SELECT img1,img2,img3,img4,info,name,cod,cat,type FROM info_games  order by timestamp DESC ")or die(mysql_error());
while ($row_GAMESIMG=mysql_fetch_object($queryGAMES_IMG)){
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$IMG_game = $row_GAMESIMG->img1;
$info = $row_GAMESIMG->info;
$name_game = $row_GAMESIMG->name;
$cod_game = $row_GAMESIMG->cod;
$categoria_game = $row_GAMESIMG->cat;
$type_game = $row_GAMESIMG->type;
//ATUALIZA IMAGENS DOS GAMES  
//CONTA JOGADORES
$querycOUNT_GAMERS = mysql_query("SELECT IdGame FROM games_play  where (IdGame='".$cod_game."')  ")or die(mysql_error());
$row_count_gamers = mysql_num_rows($querycOUNT_GAMERS);

 ?>
   <!-- jogos--> 
   <div   style=" position: relative;display:;position: relative;
    width:200px; margin-left:15px; background-color:#FFFFFF; float: left;margin-bottom:10px;">
     <?php if ($type_game!='0'){?><img src="/games/ads_intro_label_new_en.png" style="position: absolute; top: -2px; right: -2px; z-index: 100" /> <?php };?>
       <a href="https://orkuti.net/games/play/<?php echo $cod_game;?>&time=<?php echo time();?>"><div style="position: relative; width: 200px;position: relative;
    text-align: center; height: 100px;
    border-radius: 3px;
    vertical-align: top;">
            <img src="/games/<?php echo $IMG_game?>" style="width: 200px;
    height: 100px;
    border-radius: 3px;
    vertical-align: top; position: relative;display:;" class="user_foto_borda_superior" />
            </div></a>
            <div style="position: relative;left:0px; bottom: 0px; width: 200px; min-height: 50px">
              <div style="padding-left:10px;margin:0px;
    padding-top: 5px;
       
    ">  
                 <a href="https://orkuti.net/games/play/<?php echo $cod_game;?>&time=<?php echo time();?>"><span class="lloepowpoei83838" 
                      style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; text-transform: none; color: #42648b; position: relative;"><?php echo $name_game;?> 
                
                
                <div  class="ksiieoe838833ue boradsemquina3"
         
                    style="position: absolute; width: 268px; height:auto; top: 23px; left:5px; background-color: #555454; z-index: 101;display:;">
         <img src="/img/k0399493.png" 
             style="z-index: 102;position: absolute; top: -14px; left: 13px;" /><div 
                        
             style="width: 95%; height: 20px; margin: 5px; border-bottom-style: solid; border-bottom-width: 1px; z-index: 101; border-bottom-color: #666666; position: relative;">
                        <span style="position:absolute; z-index: 102;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; display: block;"><?php echo $name_game;?></span></div>
         <div style="width: 95%; margin: 5px; position: relative; display: block;">
                        <span style=" z-index: 102;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FBFBFB"><?php echo $info;?></span></div>
                        
                        </div></span></a></div>
                
                <div style="overflow: hidden;padding-left:10px;margin:0px;
    padding-top: 0px;
    color: #808080;  ;">
               <div class="meter mtr-2" value="<?php echo count_start_93993($cod_game);?>"></div>
                    </div>
                    <div style="padding-top: 0px;margin-bottom:10px;padding-left:10px;margin:0px;
   ">
                    <span 
                    style="font-family: arial, Helvetica, sans-serif;  font-weight: normal; font-style: normal; font-variant: normal;     color: #939393;
    font-size: 12.5px; "><?php echo  number_format($row_count_gamers, 0, ',', '.')?> usu�rios</span></div></div>
        </div> 
          <!-- jogos --> 
  <?php };?>        
        
    
             <div style="clear:both"></div>
              
                </div>
    
        
    
    </div>

<?php }else{
exit;

   }?>
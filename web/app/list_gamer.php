
<?
require("../check_func_db.php");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 11 Apr 2010 00:00:00 GMT");   

    if (login_chekout()==true){
    sec_session_start();
   
include("../lapse.php");

include_once ("../sanitizeSql.php");
 if($_SESSION['UserId']!='' && $_GET['id']!='') {
                    $UserId_Cokie = $_SESSION ['UserId'];
               
  
$aux_oline=false;
$aux_oomann="";
$aux_count_friends="";
 header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
$response= array();
$messages = array();

 

$auudsud=Sanitize::filter($_GET['id']);	

$query375555r43 = mysql_query("SELECT idgame FROM game_activity  where idgame='$auudsud' and UserId='".mysql_real_escape_string($UserId_Cokie)."' limit 1 ")or die(mysql_error());;
 
    $rcont37kkw3 = mysql_num_rows($query375555r43);
if ($rcont37kkw3==''){

mysql_query(" INSERT INTO game_activity (UserId,idgame,lastactivity) VALUES ('".mysql_real_escape_string($UserId_Cokie)."','$auudsud','".time()."')");

}else{
	mysql_query("update game_activity  set lastactivity = '".time()."' where UserId = '".mysql_real_escape_string($UserId_Cokie)."' and idgame='$auudsud' ");
	//atualiza status me
	
};
           


$call_cod_chat=Sanitize::filter($_GET['id']);


function LimiteFrase($string) {
$chars = 15;
if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars)."...";

}else{
return ($string);
};
};
///inicio memcache
//consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$call_cod_chat; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta específica com memcache
 if ($query_mem==false){        
$query17p3234 = mysql_query("SELECT IdGame FROM games_play  where (IdGame='$call_cod_chat')  ")or die(mysql_error());
$query17p3234 = mysql_num_rows($query17p3234);
$var=$query17p3234;
$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 400);

 }else{
 
 $query17p3234=$query_mem;
 }
?>
<head>
	
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>

		<script type="text/javascript" id="sourcecode">
		 $(document).ready(function(){
             $(".scroll-pane").jScrollPane();
               $(".scroll-pane .jspDrag").hide();
               $(".scroll-pane").mouseenter(function () {
                  $(this).find(".jspDrag").stop(true, true).fadeIn("slow");
               });
               $(".scroll-pane").mouseleave(function () {
                  $(this).find(".jspDrag").stop(true, true).fadeOut("slow");
               });
              
        });

		 
		</script>
		</head>
			
		<div class="scroll-pane"  style=" width: 265px;max-height:200px;position:relative; overflow-x:hidden; " >
	<div style="position: relative;margin-top:10px; width:257px; height: auto">
	
<?
$asyaysyuy=time();
$query375555r434 = mysql_query("SELECT game_activity.idgame,game_activity.UserId ,game_activity.lastactivity ,users.UserId,users.UserName,users.UserFotoThumb FROM users,game_activity  where (game_activity.idgame='$call_cod_chat' and  ($asyaysyuy - game_activity.lastactivity < 3600)) and (game_activity.UserId=users.UserId) order by game_activity.lastactivity DESC   ")or die(mysql_error());;
 
   $aux_count_friends = mysql_num_rows($query375555r434);
if ($aux_count_friends!='0'){
while ($mensagem44_936610 = mysql_fetch_object($query375555r434)){ 


       							$aux_status_chat="/orkuti_chat_001/img/on_chat_01.png";$aux_oomann="Disponível";
						
					
					

					
					
							
					
			
		 	
	// end get  list user
	
if (is_file("../profile_thumbs/".$mensagem44_936610->UserFotoThumb)){       
       							
					
?><div onmouseout="javascript:this.style.background= ''" 
             onmouseover="javascript:this.style.background= '#F5F5F5'"  
     style="position:relative; width: 257px; height: auto;  cursor: pointer;clear: both; ";>
     <div  style="position:relative;padding: 3px;position: relative;width:257px; border-style: none; height: 35px">

                <img  src="/profile_thumbs/<?php echo $mensagem44_936610->UserFotoThumb ; ?>" title="<?php echo $mensagem44_936610->UserName;?>"
                   class="img_menu_mobile_chat" 
                    style="position: relative; width: 30px; height: 30px; float: left" /><label  
                    class="text_white_line_menu_tools" 
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: relative; float: left; margin-top: 8px; margin-left: 5px;"><?php echo LimiteFrase($mensagem44_936610->UserName);?>  </label><img 
                    src="<?php echo $aux_status_chat ;?>" 
                    style="position: absolute; max-height: 12px;display:none; right: 18%; top: 11px;" /></div><div style="clear:both;"></div></div>
 
   

<?php

};
};
}if ($aux_count_friends==''){
 ?>

<div style="position:relative;padding: 3px;position: relative;width:257px; border-style: none; height: 35px">

   <span 
                style="font-family: arial, Helvetica, sans-serif;text-shadow:#FFFFFF 1px 1px 1px, #999999 -1px -1px 1px; font-size: 15px; font-weight: bold; font-style: normal; font-variant: normal; color:#C0C0C0; position: absolute; top: 30px; left: 15px;">Nenhum jogador online!</span></div>
<?php };
 
?>
</div>

</div>
<div style="width:100%;height:40px; position: relative; display: block;"><span 
                    
        style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight:normal; font-style: normal; font-variant: normal; color: #999999; position: absolute; top:5px; left: 10px;"> <?php if ($query17p3234 == '1') { echo "$query17p3234 jogou este jogo";}else{ echo "$query17p3234 pessoas jogaram este jogo" ;};?><br><?php if ($aux_count_friends > '1'){ echo "$aux_count_friends usuários jogando";};?></span>
                    </div>  
<?php

 
 };}?>

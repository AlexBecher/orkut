<?php  

 require("check_func_db.php");
   
   if (login_chekout()==true){
   sec_session_start();
  
 include("date.php");

include("lapse.php");
 $aux_osdj394h4hhn=false;
  include_once ("sanitizeSql.php");
 
 //LIMITAR TEXTOS                 





 function LimiteFrase($string) {
$chars = 6;
if (strlen($string) > $chars) {
while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
$chars++;
};
return substr($string,0,$chars)."...";

}else{
return ($string);
};
};              

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o

            
$auc_cod=Sanitize::filter($_GET['cod']);
if (!empty($auc_cod)){

$query55 = mysql_query("SELECT * FROM ask_forum where  idorder='$auc_cod' order by idorder ASC limit 1 ")or die(mysql_error());
   $rcont334 = mysql_num_rows($query55);
       if ($rcont334!='0'){
       
                while($mensagem = mysql_fetch_object($query55)) {
$query = mysql_query("SELECT UserFotoThumb,UserName,FullName,ccuserid FROM users  where  UserId='".$mensagem->UserId."' ");
$mensagemd = mysql_fetch_object($query);
                
 ?>
 <!-- feed de respostas -->              
<div   style="position:relative; onmouseover="mouse_over_menu(this);" width: 100%; background-color:#333333">
        
    <div style="margin: 5px 0px 10px 0px; position: relative; min-height: 70px;">
        <div style="position: relative; width: 50px; height: 50px;margin-left:5px; float: left"><img onclick="view_prof('<?php echo $mensagem->UserId ?>');" src="/profile_thumbs/<?php echo $mensagemd->UserFotoThumb;?>" style="width: 50px; height: 50px;" class="radius_150px"/></div>
        <div style="float: left; margin-left: 10px; position: relative;overflow:hidden; width:670px;overflow-x:hidden; top: 0px; left: 0px;">
            <label style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word;  font-size: 14px; font-weight:bold; font-style: normal; font-variant: normal; color: #FFFFFF"><?php echo $mensagemd->FullName;?></label><br />  <p><span style="font-family: arial, Helvetica, sans-serif; word-wrap: break-word;font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF"><?php echo (($mensagem->ask_forum));?></span></p>
             <div class="video" 
                            style="max-width:200px; height: auto; margin-bottom: 0px; position: relative; left: 0px; text-align: center;" ><?  $aux=($mensagem->LinkVideo); if ($aux!='') { ?>
     <div style="max-width:200px; height:auto;padding:10px;"></div><object  width="200px" height="200px"><param name="movie" value="<?php echo($mensagem->LinkVideo) ?>"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed id="sounder_vide" class="v_show"  src="<?php echo($mensagem->LinkVideo) ?>" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="200px" height="200px" ></embed></object>
                            
                     <?php }?> </div> <div style=" margin-top:5px;text-align: center; position: relative; max-width:778px;max-height:600px; top: 0px; left: 0px;">
        
                      <?php if ($mensagem->ImgPost!='') {?><p><img src="/ask_forum_img/<?php echo $mensagem->ImgPost;?>" style="position: relative;max-width: 500px;max-height:600px;"/></p><?php };?>
            </div></div><div style="clear: both"></div>
                
        
                </div>
        
        </div> 
        
        <!-- feed de respostas -->                  
       <?php 
                };
                };
};
                };?>
    

<?
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
 
include("date.php");
include("lapse.php");
 $aux_osdj394h4hhn=false;
   
include_once ("sanitizeSql.php");
  $count2=$_SESSION['k_iw38002932'] ;
$count_page='';

$response= array();
$response['read']='';
$response['cod']='';
$auc_cod=Sanitize::filter($_GET['cod']);
header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o

//se eu estiver no topico com respostas ai conta as respostas do t�pico
$query55ds = mysql_query("SELECT idforum FROM ask_forum where  idforum='$auc_cod' and abuse<>'abuse' order by idorder DESC ")or die(mysql_error());
$rcont334sss = mysql_num_rows($query55ds);
       if ($rcont334sss!='0' && $rcont334sss > $count2){
       
 $count_page=$rcont334sss - $count2;     
 if ($count_page < '1' or $count_page=='' ){
 $count_page='1';
 }      
       sec_session_start();
session_register('k_iw38002932'); 
$_SESSION['k_iw38002932']=$rcont334sss;



$query55 = mysql_query("SELECT * FROM ask_forum where    idforum='$auc_cod' and abuse<>'abuse' and (".time()."- timestamp < 3600)  order by idorder DESC  limit $count_page")or die(mysql_error());
         $rcont334 = mysql_num_rows($query55);
       if ($rcont334!='0'){

       
       
 
        
                while($mensagem = mysql_fetch_object($query55)) {
$query = mysql_query("SELECT UserFotoThumb,UserName,FullName,ccuserid FROM users  where  UserId='".$mensagem->UserId."' ");
$mensagemd = mysql_fetch_object($query);
                
 ?>
 <!-- feed de respostas -->  
 <style>
 .owiqr_ooewiITDFCV_0{
background-color: #FFF4F4; 
 }
 
 </style>            
<div class="ui_mw_postoosm" onmouseover="mouse_over_menu(this);" 
    style="position: relative; width: 778px;  ">

 
    <div style="margin: 5px 0px 10px 0px; position: relative; min-height: 70px;">
        <div style="position: relative; width: 50px; height: 50px;margin-left:5px; float: left"><img onclick="view_prof('<?php echo $mensagem->UserId ?>');" src="/profile_thumbs/<?php echo $mensagemd->UserFotoThumb;?>" style="width: 50px; height: 50px;" class="radius_150px"/></div>
        <div style="float: left; margin-left: 10px; position: relative;; width: 670px; top: 0px; left: 0px;overflow-x:hidden;">
            <label style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word;  font-size: 14px; font-weight:bold; font-style: normal; font-variant: normal; color: #3366CC"><?php echo $mensagemd->FullName;?></label><br />  <p><span style="font-family: arial, Helvetica, sans-serif; word-wrap: break-word;font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333"><?php echo (($mensagem->ask_forum));?></span></p>
             <div class="video" 
                            style="max-width:400px; height: auto; margin-bottom: 0px; position: relative; left: 0px;text-align: center;" ><?  $aux=($mensagem->LinkVideo); if ($aux!='') { ?>
     <div style="max-width:400px; height:auto;padding:10px;"></div><object  width="400px" height="400px"><param name="movie" value="<?php echo($mensagem->LinkVideo) ?>"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed id="sounder_vide" class="v_show"  src="<?php echo($mensagem->LinkVideo) ?>" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="400px" height="400px" ></embed></object>
                            
                     <?php }?> </div></div><div style="clear: both"></div><div style=" margin-top:5px;text-align: center; position: relative; max-width:778px;max-height:600px; top: 0px; left: 0px;">
        
                      <?php if ($mensagem->ImgPost!='') {?><p><img src="/ask_forum_img/<?php echo $mensagem->ImgPost;?>" style="position: relative;  max-width: 500px;max-height:600px;"/></p><?php };?>
            </div>
          <div 
                                
                                
                                    
                                    style="position:relative; width:100%; height:20px; ">
                    
           <label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;"><?php  $aux373yur=date('Y-m-d H:i:s',$mensagem->timestamp);  echo  Datetodays($aux373yur); ?></label>       <label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;">|</label> <label onclick="share_commPAsk('<?php echo $auc_cod;?>','<?php echo $mensagem->idorder; ?>','<?php echo $mensagem->ImgPost;?>')" style="font-family: arial, Helvetica, sans-serif; cursor:pointer;font-size: 12px;position:relative; font-weight: normal; font-style: normal; font-variant: normal; text-transform: none; color: #336699;float:left; margin-left: 5px;">Compartilhar</label>
           <?php if ($mensagemd->ccuserid!=CCUSERIDI) {?><label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;">|</label>
          <label onclick="ask_commForumUs('<?php echo $auc_cod;//forum?>','<?php echo $mensagem->idorder;//idorder da resposta ?>','<?php echo $mensagemd->ccuserid;//id do dono da resposta?>','<?php echo $mensagemd->UserName;//nome do dono da resposta?>')" style="font-family: arial, Helvetica, sans-serif; cursor:pointer;font-size: 12px;position:relative; font-weight: normal; font-style: normal; font-variant: normal; text-transform: none; color: #336699;float:left; margin-left: 5px;">Responder</label><?php };?>
          <label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666;position:relative; float: left; margin-left: 5px;">|</label>
          <label  class="odskkdnfjj4" style="font-family: arial, Helvetica, sans-serif; cursor:pointer;font-size: 12px;position:relative; font-weight: normal; font-style: normal; font-variant: normal; text-transform: none; color: #336699;float:left; margin-left: 5px;">gostou?</label><input type="hidden" value="<?php echo $auc_cod;//forum?>"/><input type="hidden" value="<?php echo $mensagem->idorder;//idorder da resposta ?>"/><input type="hidden" value="<?php echo $mensagemd->ccuserid;//id do dono da resposta?>"/>
         
          </div>      
        
         <div style="position: relative; width: auto; height: 1px; margin-left: 5px; margin-right: 5px; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #F0F0F0"></div> 
        </div>
        
        </div> 
        
        <!-- feed de respostas -->                  
       <?php 
                };
                };
       
       
       };
};
   
					?>
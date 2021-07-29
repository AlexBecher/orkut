<?php 
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

include("date.php");
 include_once ("sanitizeSql.php");
 
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

function sel_game_data($cod){
$query_sel_game_data = mysql_query("select cod,link_url,cod_url,name from info_games where cod='".mysql_real_escape_string($cod)."' limit 1")or die(mysql_error());
$row_sel_game_data= mysql_fetch_object($query_sel_game_data);

return $row_sel_game_data;
};
$aux_id_order_event=Sanitize::filter($_GET['idOrder']);
$aux_text=sel_game_data($aux_id_order_event)->name;
               

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
 include_once ("transl8uu3j.php");
?>
<div id="invite_ii99e9" class="boradsemquina3 sombra_padrao_bottom" 
    style="border: 1px solid #EFEFEF; position: relative; display:; margin: 0px auto; background-color:#FFFFFF; z-index:100; width: 500px; height:auto">
    <div style="background-color: #F3F3F3; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #EBEBEB; position: relative; width: 500px; height: 60px">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333; position: absolute; top: 22px; left: 7px;"><?php echo GAMESTEXT10029938." ".ocultaTexto($aux_text,10);?> </span><label onclick="check_input_event_list();"
            style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #336699; position: absolute; right: 10px; top: 20px;cursor:pointer;"><?php echo GAMESTEXT100299382;?></label></div>
    <div id="list_friends" style="background-color: #FFFFFF; position: relative; width: 500px; min-height:240px; ">
        <div style="padding: 10px; position: relative; width: 500px; height: auto; top: 0px; left: 0px;">
 <?php 
            $userid = CCUSERIDI;
              $query44C = mysql_query("SELECT users.UserFotoThumb,users.UserId,users.UserName FROM users ,friends_list  Where  (users.ccuserid=friends_list.Idfriend and Idme='".$userid."' and users.ccuserid<>'".$userid."' and friends_list.block<>'2') order by lastactivity DESC limit 18 ")or die(mysql_error());
              //friends list
         
$rcont334C = mysql_num_rows($query44C);
        
   if ($rcont334C!='0') {
    while ($mensagem = mysql_fetch_object($query44C)){               
 

     
  
 
 
 ?>       
        
            <div class="list_left_friends" 
                
                style="position: relative; width: 150px; height: auto; float: left; margin-right: 10px; margin-bottom: 10px;">
        <table style="width: 150px"><tr><td   >
        <input style=""class="list_friends_invite_ev" type="checkbox" value="<?php echo $mensagem->UserId; ?>" /></td><td><img 
                src="/profile_thumbs/<?php echo $mensagem->UserFotoThumb ;?>" 
                style="position: relative; width: 25px; height: 25px; ;"/></td><td><span 
                
                    style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080;"><?php echo ocultaTexto($mensagem->UserName,6); ?></span></td>
 
       
</tr></table>
 
       
        </div>
        
        <?php };}?>
         <div id="list_view_commu"></div> 
            <div style="clear: both"></div></div></div>
            <div style="position: relative;margin-top:5px; width: 500px; height: auto;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #808080; position: relative; left: 10px; to: 5px; margin-top: 0px; margin-bottom: 5px;"><?php echo GAMESTEXT100299383;?></span>
        <input onclick="$('#view_uradfd00').hide();" id="nome_comm" maxlength="100"
            accesskey="/" name="nome_comm" onkeyup="searcH_Membro_Commu3()"
                type="text" placeholder="<?php echo GAMESTEXT1002993810;?>"
            
                
            
                    style="border: 1px solid #CCCCCC; height: 40px; width: 400px; position: relative; padding-left: 10px; font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; margin-top: 10px; margin-left: 10px;" />
            <div id="view_uradfd00"
                
            style="position: absolute; width: 400px;z-index:101; height: auto; left: 10px; display:none; bottom: -14px;"></div>
           
            </div> 
            <div style=" position: relative;background-color:#FFFFFF;width:500px; height: 50px;">
    <div style="border-top: 1px solid #EBEBEB;position: relative;margin-top:5px; margin-right: 10px; margin-left: 10px; width: 480px; height: 43px; top: 0px; left: 0px;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #999999; position: absolute; top: 13px; left: 4px;"><?php echo GAMESTEXT100299384?></span><label 
            onclick="close_view_list_invite_comm()"; 
            style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 12px; right: 134px;"><?php echo GAMESTEXT100299380;?></label><label class="sal_invite button_salvarlist boradsemquina3" onclick="sal_check_list_gammer('<?php echo $aux_id_order_event;?>')"
            style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; text-transform: none; color: #FFFFFF; text-align: center; vertical-align: middle; background-color: #0066CC; padding: 5px 10px 5px 10px; position: absolute; cursor: pointer; top: 7px; right: 20px;"><?php echo GAMESTEXT100299389;?></label></div></div></div>
            <?php }else{
            echo "232323";
            
            
            }?>       
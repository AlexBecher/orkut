<?php  
 require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

include_once ("sanitizeSql.php");

include("date.php");
include("lapse.php");
 $aux_osdj394h4hhn=false;
 
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

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o

              

$auc_cod=Sanitize::filter($_GET['cod']);
$querycod = mysql_query("SELECT * FROM community_users  where IdCommunity='$auc_cod' limit 1 ")or die(mysql_error());;
$mensagemcod = mysql_fetch_object($querycod);

}else{

exit;
}
?>

<div id="ijd88ewelhgvjwhve" style="position: relative; width: 500px;margin:0px auto; height: 450px; background-color: #FFFFFF;">
    <div style="background-color: #F7F7F7; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #F3F3F3;position: relative; width: 500px; height: 400px">
        <div style="position: relative; width: 500px; height: 40px">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 17px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 10px; left: 10px;">Compartilhar esta comunidade</span></div> <div style="margin: 10px; position: relative; width: 50px; height:300px; float: left; "><img src="/profile_thumbs/<?php echo USERFOTOTHUMB;?>" class="radius_150px"/></div>
    <div style="border: 1px solid #E9E9E9; margin: 10px; background-color: #FFFFFF; position: relative; width: 400px; height: 100px; float: left;  top: 0px; left: 0px;">
        <textarea id="msg_comp_comm"  name="msg_comp_comm" class="edit_text_sobre"  placeholder="Escreva algo sobre sua comunidade..."
            
            
            style="background-color: #FFFFFF;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; border-style: none; position: relative; width: 367px; height: 80px; margin-top: 15px; margin-left: 15px; top: 0px; left: 0px;"></textarea></div>
    <div style="margin: 10px; position: relative; width:auto; height: 155; float: left;  top: 0px; left: 0px;">          <div 
             
            style=" background:url('/imagens_rsrc/bgDescription4.png') repeat-x left top;    height:52%;    position:absolute;    bottom:3px;   left:0px;    width:100%;    display:;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold;text-shadow:#666666 1px 1px 1px; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 34px; left: 21px;"><?php echo $mensagemcod->CommunityName;?></span></div><img src="/bg_community_thumbs/<?php if ($mensagemcod->CommunityImg !=''){ echo $mensagemcod->CommunityImg;}else{ echo "iwu_poweo928C_093_large.jpg";};?>"></div></div>
        
        <label onclick="share_ack_comm('<?php echo $mensagemcod->IdCommunity;?>');" style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; vertical-align: middle; background-color: #49A604; padding: 6px 9px 6px 9px; position: absolute; cursor: pointer; top: 410px; left: 21px;">Compartilhar</label><label onclick="close_share()"
        style="border: 1px solid #F5F5F5; font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #666666; text-align: center; vertical-align: middle; background-color: #F9F9F9; padding: 6px 9px 6px 9px; position: absolute; cursor: pointer; top: 410px; left: 153px;">Cancelar</label>
        </div>
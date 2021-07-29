
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

  $domain =$_SERVER['HTTP_HOST'];
   $namepage="comunity_load.php";
   $tokepass7=  "_ui";//nome no coookie
   $pagename="".sha1($namepage)."";
   setcookie("$tokepass7", $pagename ,time()+60*60,'/',$domain,false, true);//EXPIRA EM 1 hora
   
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o


             $qtd=10;
if ($_GET['page']!=''){


 $inicio_aux3=($_GET['page'] * $qtd)- $qtd;
}else{
$inicio_aux3=0;
}             

$auc_cod=Sanitize::filter($_GET['cod']);
$auc_codcommet=Sanitize::filter($_GET['cod_comm']);
$query55 = mysql_query("SELECT * FROM forum where  IdCommunity='$auc_codcommet' order by fixed desc ,lastactivi DESC  limit $inicio_aux3,$qtd  ")or die(mysql_error());
$querycod = mysql_query("SELECT * FROM community_users  where IdCommunity='$auc_codcommet' ")or die(mysql_error());;
$mensagemcod = mysql_fetch_object($querycod);
$query375555r4 = mysql_query("SELECT * FROM list_community_user  where IdCommunity='$auc_codcommet' and UserId='".USERID_ID."' and manager_comm='1' limit 1 ")or die(mysql_error());;
 
    $rcont37kkw = mysql_num_rows($query375555r4);
  $query375555r433 = mysql_query("SELECT * FROM list_community_user  where IdCommunity='$auc_codcommet' and UserId='".USERID_ID."' limit 1 ")or die(mysql_error());;
 
    $rcont37kkwssss = mysql_num_rows($query375555r433);
?>

<head>

<style>
#UserMsgForum{
position: relative;
  left: 0px; 
  top: 3px; 
  padding-top:5px;
  padding-left:5px;
  width: 468px;
   height: 59px;
overflow: hidden;
margin-left:0px;
font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 13px; 
  color: #333333;
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
resize:none;
border: 1px solid #E6E6E6;

}
.enviar_1454
    {
        padding: 5px 12px;
            text-align:center;       
            -moz-border-radius:   2px 2px  2px 2px; 
            border-radius:  2px 2px  2px 2px;  
            height: auto;
            border: 1px solid #DFDFDF;
            background:#F2F2F2;
            font-family: sans-serif;
            font-size: 13px;
            font-weight: bold; 
            font-style: normal;
            font-variant: normal; 
            color: #666666;
            z-index:90;
            position:absolute;
   right:5px;  
 top: 3px;
 
           
 
 }
.enviar_1454:hover{

border: 1px solid #C8C8C8;
 cursor:pointer;cursor:hand;
   color: #333333;
  

}
 div.jHtmlArea { border: solid 1px #ccc; }
        
        .share_input{
font-family: 'open sans', arial, sans-serif;
  line-height: 18px; 
  font-size: 14px; 
  color: #666666;
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
outline:none;
margin: 10px 5px 10px 10px;
  width:400px;
   border: 1px none #FFFFFF;
    
     min-height:43px;"


}
.showpopover{

overflow: hidden; 
   
resize:none;
}
div.color-picker { border-left: 1px solid #000; border-top: 1px solid #000; position: absolute; left: 0px; top: 0px; padding: 0px; }
div.color-picker ul { list-style: none; padding: 0px; margin: 0px; float: left; }
div.color-picker ul li { display: block; width: 15px; height: 15px; border-right: 1px solid #000; border-bottom: 1px solid #000; margin: 0px; float: left; cursor: pointer; }
.ksiieoe838833ue{
visibility:hidden; 


}
.lloepowpoei83838:hover > .ksiieoe838833ue{
visibility:visible; 


}
.ksiieoe838833ue2{
visibility:hidden; 


}
.ui_mw_postoosm :hover > .lloepowpoei838382 > .ksiieoe838833ue2{
visibility:visible; 


}
</style></head>
                   <div id="kkooeu9988" class="boradsemquina3"
                    style="position:relative; width: 500px; height: auto;display:;,margin-bottom:20px; ">
                    <div id="euu88f48UUYY" class="user_foto_borda_superior" style="background-color: #e85858; position: relative; width: 500px; top: 0px; left: 0px; min-height:120px;">
    <span style="font-family: arial, Helvetica, sans-serif; font-size: 22px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 26px; left: 20px;">Fórum</span>
  <?php if ($mensagemcod->UserIdPro==USERID_ID or $rcont37kkw!='') {?>  
    <span 
        
        style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 50px; left: 20px;">Crie tópicos diversos e chame<br />
seus amigos para participarem!</span>
<?php }else{?>

 <span 
        
        style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight: normal; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 50px; left: 20px;">Responda aos tópicos , participe<br />
com seus amigos , use sua imaginação!</span>
<?php };?>
<?php if ($mensagemcod->UserIdPro==USERID_ID or $rcont37kkw!='' or (($mensagemcod->IdOrder!='13570' && $mensagemcod->IdOrder!='1') && $rcont37kkwssss!='' && $mensagemcod->CommunityPrivacy=='2')){?><label class="botao_cinza boradsemquina3 koi8884663tg" 
        style="padding: 5px 10px 5px 10px; font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; vertical-align: middle; text-align: center; background-color: #F8F8F8; position: absolute; cursor: pointer; top:65px; right:15px;">Criar tópico</label><?php };?></div>
       
    <div id="kdoewo794924" style="position: relative;display:none; width: 500px; min-height:250px; background-color: #F4F4F4; top: 0px; padding-bottom:15px;left: 0px;margin-bottom:30px;">
     <div style="position: relative; width: 500px; height: 50px; background-color: #e85858; ">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 14px; left: 27px;">Crie seu tópico aqui</span></div>
    
        <div style="position: relative; margin: 10px; padding-top: 10px; height: auto;margin-bottom:20px;">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666">Título do tópico</span>
          <div   style="position: relative;margin-bottom: 10px; width:auto;">
         <form id="form_post" enctype="multipart/form-data" method="post"  action="/send_topicForum.php" target="sendpost" 
                       ">   
            <input 
                type="text" id="ti_03902oedue" name="ti_03902oedue"placeholder="Escreva um título bacana para seu fórum :)"
                
                
                
                style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; background-color: #FFFFFF; border: 1px solid #E6E6E6; padding-left: 10px; position: relative; width: 468px; height: 40px; left: 0px; margin-top:5px; margin-bottom: 10px;"/><span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666">Assunto</span>
                
                
                <!-- Post community inicio -->
  
        <div   style="position: relative; border: 1px solid #E6E6E6;width:auto; background-color: #FFFFFF;" class="">
<div style="position: relative; width: 478px; height: auto"><input type="hidden" name="data_st" id="data_st" value="<?php echo time();?>"></input>
                        <input type="hidden" name="idEventosUser" id="idEventosUser" value="<?php echo USERID_ID;?>"></input>
                        <input type="hidden" name="IdOrderEventos" id="IdOrderEventos" value="<?php echo $auc_codcommet;?>"></input>
                         <input type="hidden" name="foto39ur3r6i2ryy4" id="foto39ur3r6i2ryy4" value="<?php echo USERFOTOTHUMB;?>"></input>
&nbsp;
<!-- novo textarea -->
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " />
<div  contenteditable="true" data-toggle="popover" data-trigger="hover" id="paste-target" class="share_input">Escreva algo bem legal aqui, ou poste vídeos ou imagens...tamanho de 488 x 488</div>
<textarea name="desc"  id="share_field" hidden="true" class="share_input showpopover" placeholder="Escreva aqui seu código html...">
<p>Escreva aqui seu código html...</p>
</textarea>

<!-- novo textarea -->


<div id="ijdkkdfdjsdf77dfnsearch"   style=" padding: 5px; width:425px; height: auto; margin-left: 10px; position:relative; display:none; background-color: #FDFEFF;"><input type="hidden" id="leav_serac" name="leav_serac" />
<div id="ijdkkdfdjsdf77dfnsearchN"  style="border: 1px solid #FFFFFF; width:425px; height: auto;  position:absolute; display:;z-index:800;left:0px;top:-10px; background-color: #FDFEFF;"></div></div>
<div id="add_img_post" style="width: 400px;margin: 10px 5px 8px 10px; height:auto; position: relative; display: none;">
<div id="foto_null" class="div_sombra_inter"  style="border: 3px solid #F8F8F8; width: 150px; height: 150px; position: relative; cursor:pointer;">
<img class="cr_al000"  src="/imagens_rsrc/cam_01.png"  style="position: absolute; top: 52px; left: 49px;"/><img src="/imagens_rsrc/350difjnsnd.gif" style="position: absolute; top: 102px; left: 55px;"/></div></div>
<input type="hidden" id="link_iuaugfew67467gf" name="link_iuaugfew67467gf"></input><img id="load_8844urhhrfhhvb"  src='/imagens_rsrc/GsNJNwuI-UM.gif'      style="position: absolute; top: 42px; left: 432px; display:none;">
<div id="ijdkkdfdjsdf77dfn"  style="border: 1px dashed #FFFFFF; padding: 5px; width:465px; height: auto; margin: 10px; position: relative; display:none; background-color: #FDFEFF;"></div>
<div  
        style="border-width: 1px;border-style: solid none none none; border-color: #EBEBEB; width: 478px; height: 35px; bottom:0px;left:0px;position:relative; background-color: #F8F8F8; border-top-style: solid; display:; "  
        class="subisaymsg">
<label class="kkjhHHYRe_oi"
            style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; right:95px; bottom: 10px; cursor: pointer; position: absolute;">Cancelar</label>
<button type="submit" onClick="enviando1CommForum('<?php echo $auc_codcommet;?>');"class="enviar_1454"title="Enviar..." >Publicar</button>

</div></div></div></form>
<form id="form_send_post" method="post" enctype="multipart/form-data"    action="/uploadImageForum.php" style="margin: 0px">
<div style="background-position: center center; position: absolute; width: 35px; height: 35px; background-image: url('/img/fw4u43988482.png'); background-repeat: no-repeat; bottom: 0px; left: 72px;"   class="men_new_90349e34 lloepowpoei83838"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 115px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Postar imagens</span></div><input id="foto"name="foto"class="foto" type="file"style="width:35px; height: 35px;position:absolute;; cursor:pointer;"/></div></form>      
              <div id="enable_html"  style="background-position: center center; position: absolute; width: 35px; height: 35px; background-image: url('/img/jewf43848ruew.png'); background-repeat: no-repeat; bottom: 0px; left: 133px;"   
                class="men_new_90349e34 lloepowpoei83838"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 100px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Inserir HTML</span></div></div>
            <div    style=" position: absolute; width: 35px; height: 35px;  bottom: 0px; left: 193px;"   
                class="djcwiijdjjs men_new_90349e34 lloepowpoei83838"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 100px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Cor do texto</span></div>
                <img style=" position: absolute;top:8px;left:8px; " id="color_icon" class="color_icon" data-toggle="tooltip"   src="/img/ii4ri4oqfw4wiirisd.png"    
                class="men_new_90349e34"><div id="color-picker" class="color-picker" 
    style="position: absolute; left:10px;top:30px;z-index:100;display:none; width:160px;">
       <img   src="/img/red3838383.png"    
                class="color-box" style="margin: 0px; float: left;color: #FF0000;display:block;"><img   src="/img/yel38r44i.png"    
                class="color-box" style="margin: 0px; float: left;color: #FFFF00;display:block"><img   src="/img/grue32093.png"    
                class="color-box" style="margin: 0px; float: left;color: #00FF00;display:block"><img   src="/img/blu3889348r4.png"    
                class="color-box" style="margin: 0px; float: left;color: #0000FF;display:block"><img   src="/img/pink284844.png"    
                class="color-box" style="margin: 0px; float: left;color: #FF00FF;display:block"><img   src="/img/geuu774.png"    
                class="color-box" style="margin: 0px; float: left;color: #C0C0C0;display:block"><img   src="/img/3i9i44derere.png"    
                class="color-box" style="margin: 0px; float: left;color: #996633;display:block"><img   src="/img/eid8348.png"    
                class="color-box" style="margin: 0px; float: left;color: #000000;display:block">
     
        <div style="clear: both;"></div></div></div><div  style=" position: absolute; width: 35px; height: 35px;  bottom: 0px; left: 223px;"   
                class="men_new_90349e34 lloepowpoei83838"><img style=" position: absolute;top:8px;left:8px; " id="bold_icon" class="bold_icon" data-toggle="tooltip"   src="/img/438dsjjfsf.png"    
                class="men_new_90349e34"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 70px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Negrito</span></div></div><div  style=" position: absolute; width: 35px; height: 35px;  bottom: 0px; left: 253px;"   
                class="men_new_90349e34 lloepowpoei83838"><img style=" position: absolute;top:8px;left:8px; "  id="italic_icon" class="italic_icon"data-toggle="tooltip"   src="/img/wieriwrrit34.png"    
                class="men_new_90349e34"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 65px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Itálico</span></div></div><div  style=" position: absolute; width: 35px; height: 35px;  bottom: 0px; left: 283px;"   
                class="men_new_90349e34 lloepowpoei83838"><img style=" position: absolute;top:8px;left:8px; " id="underline_icon" class="underline_icon" data-toggle="tooltip"   src="/img/k4r839rfjwjr.png"    
                class="men_new_90349e34"><div class="boradsemquina3 ksiieoe838833ue" style="background-color: #555454; position: absolute; width: 90px; height: 39px; top: -56px; left:-20px;">
    <img src="/img/oopeiYTHG883.png" 
        style="position: absolute; top: 33px; left: 37px;"/><span 
        
        
        style="color: #FFFFFF; font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; position: absolute; top: 11px; left: 8px;">Sublinhado</span></div></div><div style="clear:both;"></div></div>

<!--Post community fim--></div>
               <div style="clear:both"></div> </div> <div   style="position:relative; width: 500px; height:10px; background-color: #FFFFFF;"></div> <div id="msg_podejw28384"    class="ui_mw_postoosm user_foto_borda_superior sombra_padrao_bottom"
    style="position:relative; width: 500px; height: auto;display:;margin-bottom:20px; background-color: #FFFFFF;">
               <?php

$rcont334 = mysql_num_rows($query55);
       if ($rcont334!='0'){
       
                while($mensagem = mysql_fetch_object($query55)) {
  
$query55d = mysql_query("SELECT idorder FROM ask_forum where  idforum='$mensagem->idforum' order by idorder DESC ")or die(mysql_error());
   $rcont334d = mysql_num_rows($query55d);
                
$query = mysql_query("SELECT UserFotoThumb,UserName FROM users  where  UserId='".$mensagem->UserId."' ");
$mensagemd = mysql_fetch_object($query);
   
               
               ?>
             
<div class="ui_mw_postoosm" onmouseover="mouse_over_menu(this);" 
                           style="position: relative; width: 500px; top: 0px; left: 0px;">

 <label class="de_039930"
         style="position: absolute; width: 19px; height: 22px; border: 1px solid #CCCCCC; background-color: #FFFFFF; top: -2px; left: 460px; z-index: 90;">
    <img class="de_0399301" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" 
        
        style="position: absolute; top: 2px; left: -1px; width: 18px; height: 18px;"/></label>
        <div  class="estilodeboraesombra24 vide_ooddldP" 
                    
                    
                    
                                        
                                        
                                        style="margin: 10px 0px 0px 0px; background-color: #FFFFFF; border: 1px solid #CCCCCC; position: absolute; width: 100px; min-height: 40px; z-index: 100; display:none; top: 8px; left: 380px;">
                    <ul style="padding-bottom:5px;margin: 10px 0px 0px 0px"><?php if (USERID_ID==$mensagem->UserId or $mensagemcod->UserIdPro==USERID_ID or $rcont37kkw!=''){ ?>
                        <li 
                            class="men_new_90349e3 dhsjhdff775P" onclick="exclu_forum_029(this,'<?php echo $mensagem->idforum; ?>','<?php echo $auc_codcommet;?>');"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 100px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Excluir tópico</li>
                             <?php if ($mensagem->fixed=='0') {?><li 
                            class="men_new_90349e3 dhsjhdff775P" onclick="fix_forum_029(this,'<?php echo $mensagem->idforum; ?>','<?php echo $auc_codcommet;?>');"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 100px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Fixar tópico</li><?php }else{ ?><li 
                            class="men_new_90349e3 dhsjhdff775P" onclick="de_fix_forum_029(this,'<?php echo $mensagem->idforum; ?>','<?php echo $auc_codcommet;?>');"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 100px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Dexafixar tópico</li><?php };?>
                             <?php if ($mensagem->closed=='0') {?><li 
                            class="men_new_90349e3 dhsjhdff775P" onclick="close_forum_029(this,'<?php echo $mensagem->idforum; ?>','<?php echo $auc_codcommet;?>');"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 100px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Fechar tópico</li><?php }else{ ?><li 
                            class="men_new_90349e3 dhsjhdff775P" onclick="open_forum_029(this,'<?php echo $mensagem->idforum; ?>','<?php echo $auc_codcommet;?>');"
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 100px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Abrir tópico</li><?php };};   if ($mensagemcod->UserIdPro!=USERID_ID and  $rcont37kkw=='') {?><li  
                            class="men_new_90349e3  jsooskkskPPdenunciaall" 
                        
                        
                        
                            
                            
                            style=" font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333;  position: relative; width: 100px; height: auto; text-align: center;list-style:none; padding-top: 3px; padding-bottom: 3px;">Denunciar <input type="hidden" value="<?php echo $auc_codcommet; ?>"/><input type="hidden" value="<?php echo $mensagem->idforum ?>"/><input type="hidden" value="forum"/></li><?php };?></ul></div>
                            <?php if ($mensagem->closed!='0') {?><img class="lloepowpoei838382" src="/img/page_table_close.png" 
        
        style="position: absolute; top: 0px; right:50px; z-index:99; "/><div  class="ksiieoe838833ue2 boradsemquina3"
         
                    style="position: absolute; width:100px; height:auto; top: 40px; right:15px; background-color: #555454; z-index:99;display:;">
         <img src="/img/k0399493.png" 
             style="z-index: 102;position: absolute; top: -14px; left: 40px;" />
         <div style="width: 95%; margin: 5px; position: relative; display: block;">
                        <span style=" z-index: 102;font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #FBFBFB">Tópico fechado</span></div>
                        
                        </div><?php };?>
                        <?php if ($mensagem->fixed=='1') {?><span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #CC0000; position: absolute; right: 100px; top: 0px">
<img  src="/img/icon_fixed33_ip.png" 
        
        style="position: absolute; top: -3px; right:74px; z-index:99; "/>Tópico fixo</span>
                        <?php };?>
    <div style="margin: 0px 10px 10px 10px; position: relative; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #EEEEEE; min-height: 70px; padding-top: 25px;">
        <div style="position: relative; width: 50px; height: 50px; float: left"><img onclick="view_prof('<?php echo $mensagem->UserId ?>');" src="/profile_thumbs/<?php echo $mensagemd->UserFotoThumb;?>" style="width: 50px; height: 50px;" class="radius_150px"/></div>
        <div style="float: left; margin-left: 10px; position: relative;overflow:hidden; width:341px; top: 0px; left: 0px;">
            <label onclick="load_forum_topics('<?php echo $mensagem->idforum?>','<?php echo $auc_codcommet;?>');" style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word;  font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #0077dd;cursor:pointer"><?php echo LimiteFrase($mensagem->nometopico,50);?></label><br />
            <label onclick="view_prof('<?php echo $mensagem->UserId ?>');" 
                style="font-family: arial, Helvetica, sans-serif;word-wrap: break-word;  font-size: 13px; font-weight:normal; font-style: normal; font-variant: normal; color: #0077dd;cursor:pointer; position:relative"><?php echo LimiteFrase($mensagemd->UserName,15);?> </label>
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666"><?php echo date('d/m/Y H:i:s',$mensagem->timestamp)." | ";  if ($rcont334d >'0'){ echo "$rcont334d Respostas  <br>";};if($mensagem->lastactivi!='0') { $aux373yur=date('Y-m-d H:i:s',$mensagem->lastactivi);}else{$aux373yur=date('Y-m-d H:i:s',$mensagem->timestamp);};  echo "Última resposta ".Datetodays($aux373yur); ?></span></div>
        <div style="clear: both"></div></div></div>                       
 <?php 
                };
       }else{
       
       ?>
   <div style="background-color: #e85858; position: relative"><img src="/img/ewjro48398_iwewy_0843.png"/>
   </div>    
       
       <?php  };
       
$query55f = mysql_query("SELECT * FROM forum where  IdCommunity='$auc_codcommet'  ")or die(mysql_error());
   $rcont334f = mysql_num_rows($query55f);
       
               ?>
              <?php if ($rcont334!=''){?> 
               
               <div style="position: relative; width: 100%; height: 40px; top: 1px; left: 0px; padding-left: 10px;">
      
                <label id="sdkii99994ii4"style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 14px; left: 83px;"></label>    
  
                   <label 
                    onclick="less_frokjwfufuf('<?php echo $auc_codcommet;?>')" 
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; top: 10px; left: 10px;"><< voltar</label><span 
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; position: absolute; top: 10px; left: 73px;"><?php if($_GET['page']!='') { echo "página ".($_GET['page']);}else{echo "página 1";}?></span><label 
                    onclick="more_frokjwfufuf('<?php echo $auc_codcommet;?>')" 
                    
                    style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; left: 140px; top: 10px;">mais tópicos >></label><label onclick="last_frokjwfufuf('<?php echo $auc_codcommet;?>','<?php echo ceil(($rcont334f)/$qtd)?>')" 
                       
                       style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight:normal; font-style: normal; font-variant: normal; color: #3366CC; cursor: pointer; position: absolute; right:20px; top: 10px;">último tópico</label></div>
               </div></div> 
               <?php };?>
               <?php }else {
               
               exit;
               }?>        
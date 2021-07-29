
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
$query55 = mysql_query("SELECT * FROM forum where  IdCommunity='$auc_codcommet' order by lastactivi desc limit $inicio_aux3,$qtd  ")or die(mysql_error());
$querycod = mysql_query("SELECT * FROM community_users  where IdCommunity='$auc_codcommet' ")or die(mysql_error());;
$mensagemcod = mysql_fetch_object($querycod);
$query375555r4 = mysql_query("SELECT * FROM list_community_user  where IdCommunity='$auc_codcommet' and UserId='".USERID_ID."' and manager_comm='1' ")or die(mysql_error());;
 
    $rcont37kkw = mysql_num_rows($query375555r4);
    
    $query554 = mysql_query("SELECT * FROM forum where  (IdCommunity='$auc_codcommet' and idforum='$auc_cod')  ")or die(mysql_error());
        
             $mensagem4 = mysql_fetch_object($query554);
    
  
?>

<head>

<style>
#UserMsgForum{
position: relative;
  left: 0px; 
  top: 3px; 
  padding-top:5px;
  padding-left:5px;
  width: 740px;
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
          background-color:#FFFFEC;
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
        
        .share_input1{
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
          background-color: #FFFFEC;
outline:none;
margin: 10px 5px 10px 10px;
 width:720px;
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

</style></head>
                   <div id="kkooeu9988" class="boradsemquina3"
                    style="position:relative; width: 778px; height: auto;display:;,margin-bottom:20px; ">
    <div style="position: relative; width: 778px; height: 50px; background-color: #1bbc9b; border-bottom-style: dashed; border-bottom-width: 1px; border-bottom-color: #666666;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 14px; left: 27px;">Seu tópico está em modo de edição</span></div>
                   
    <div id="kdoewo794924" 
        style="position: relative;display:; width: 778px; min-height:250px; background-color: #FFFFFF; top: 0px; padding-bottom:15px;left: 0px;margin-bottom:30px;">
        <div style="position: relative; margin:0px 10px 10px 10px; padding-top: 10px; height: auto;margin-bottom:20px;">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666">Título do tópico</span>
          <div   style="position: relative;margin-bottom: 10px; width:auto;">
         <form id="form_post" enctype="multipart/form-data" method="post"  
              action="/send_topicEditForum.php" target="sendpost">     <input 
                type="hidden" id="ti_03902oedued" name="ti_03902oedued"
             value="<?php echo $auc_cod;?>" >
            <input 
                type="text" id="ti_03902oedue" name="ti_03902oedue"
              placeholder="<?php echo $mensagem4->nometopico;?>" value="<?php echo $mensagem4->nometopico;?>"
                
                
                
                
              
              style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #333333; background-color: #FFFFEC; border: 1px solid #F0F0F0; padding-left: 10px; position: relative; width: 750px; height: 40px; left: 0px; margin-top:5px; margin-bottom: 10px;"/><span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666">Assunto</span>
                
                
                <!-- Post community inicio -->
  
        <div   style="position: relative; width:auto;  background-color: #FFFFEC; border: 1px solid #F0F0F0; class="">
<div style="position: relative; width: 750px; height: auto"><input type="hidden" name="data_st" id="data_st" value="<?php echo time();?>"></input>
                        <input type="hidden" name="idEventosUser" id="idEventosUser" value="<?php echo USERID_ID;?>"></input>
                        <input type="hidden" name="IdOrderEventos" id="IdOrderEventos" value="<?php echo $auc_codcommet;?>"></input>
                         <input type="hidden" name="foto39ur3r6i2ryy4" id="foto39ur3r6i2ryy4" value="<?php echo USERFOTOTHUMB;?>"></input>
&nbsp;
<!-- novo textarea -->
<input name="form_data" type="hidden" id="form_data" data-formid="post_answer" data-uid="" data-formtype="normal" data-answertoid="0" data-erase_on_first_click="1" data-sanitizeHTML="1 " value=" " />
<div  contenteditable="true" data-toggle="popover" data-trigger="hover" 
        id="paste-target" class="share_input1" ><span style="font-family: arial, Helvetica, sans-serif; word-wrap: break-word;font-size: 15px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666"><?php echo (($mensagem4->ask_forum));?></span></div>
<textarea name="desc"  id="share_field" hidden="true" 
        class="share_input1 showpopover" placeholder="Escreva aqui seu código html...">
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
        style="border-width: 1px;border-style: solid none none none; border-color: #EBEBEB; width: 750px; height: 35px; bottom:0px;left:0px;position:relative; background-color: #F8F8F8; border-top-style: solid; display:; "  
        class="subisaymsg">
<label onclick="load_forum_topics('<?php echo $auc_cod;?>','<?php echo $auc_codcommet;?>');"
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
               <div style="clear:both"></div> </div>
              </div> 
               
               <?php }else {
               
               exit;
               }?>        
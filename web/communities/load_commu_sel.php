<?php 
 require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
   
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o
              
$aux_id_commu=(md5(uniqid(time())));;

?>
<?php 

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o
              


?>
<style>
/* The CSS */
select {
    padding:3px;
    margin: 0;
    border:1px solid #ccc;
    
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
   
}

/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

.oiue873474edithiden {position:relative;display:;}
.oiue873474edithiden:after {
    content:'<>';
    font:11px "Consolas", monospace;
    color:#aaa;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
.oiue873474edithiden:before {
    content:'';
    right:5px; top:-2px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}

</style>
<div id="kdiie994iik44" style="display:none;"><div class="estilodeboraesombra2" style="background-color: #FFFFFF; width: 600px; position: relative; height: 300px;margin:0px auto;">
    <img src="/imagens_rsrc/350.gif"   
        style="position: absolute; top: 152px; left: 273px;" /></div></div><input type="hidden" id="id_commnsxw83y" value="<?php echo $aux_id_commu;?>">
<div id="ijdja88iiskh"  class="boradsemquina3 sombra_padrao_bottom" style="background-color: #FFFFFF; position: relative; width: 600px;display:;margin:0px auto; height: auto">
    <div  class="user_foto_borda_superior"style="background-color: #F0F0F0; position: relative; width: 600px; height: 50px">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 16px; font-weight:bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 15px; left: 15px;">
        Crie uma comunidade bem legal e convide seus amigos </span>
        </div>
    <div style="margin: 10px; position: relative; width: 580px; height: auto; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #EBEBEB;">
        <div style="position: relative; width: 100%; height: 45px; margin-bottom: 10px;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 11px; left: 0px;">Nome</span><input onclick="check_name_commUp();" id="nome_community" type="text" name="nome_community" placeholder="por exemplo:Novo Orkuti"
            
                style="border: 1px solid #CCCCCC; height: 40px; width: 500px; position: absolute; padding-left: 10px; font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; left: 70px; top: 0px;" /><span id="check_name"
                style="font-family: arial, Helvetica, sans-serif;display:none; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; vertical-align: middle; background-color: #CC0000; padding: 6px 10px 6px 10px; position: absolute; top: 44px; left: 72px;z-index:105;">Você precisa digitar um nome!</span></div><div style="position: relative; width: 100%; height: 45px; margin-bottom: 10px;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 11px; left: 0px;">Membros</span><input onclick="$('#view_uradfd00').hide();" id="nome_comm" maxlength="100"accesskey="/" name="nome_comm" onkeyup="searcH_Membro_Commu()"
                type="text" placeholder="Quem você deseja adicionar?"
            
                style="border: 1px solid #CCCCCC; height: 40px; width: 500px; position: absolute; padding-left: 10px; font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; left: 70px; top: 0px;" /><div id="view_uradfd00"
                style="position: absolute; width: 400px;z-index:101; height: auto; top: 41px; left: 73px;display:none"></div></div><div id="list_view_commu"style="position: relative; width: 500px; height: auto; padding-left: 10px"></div></div>
    <div style="position: relative; width: 600px; height: 339px; top: 0px; left: 0px;">
        <div style="margin: 10px; position: relative; float: left; border-right-style: solid; border-right-width: 1px; border-right-color: #EAEAEA; width: 100px; height: 150px">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 10px; left: 8px;">Privacidade</span></div>
        <div style="position: relative; float: left; margin: 10px; width: 443px; height: 146px; top: 0px; left: 0px;">
            <div style="border-bottom: 1px solid #EAEAEA; position: relative; width: 428px; height: 55px; top: 0px; left: 0px;"><table style="width: 150px"><tr><td   ><input style="" id="sel_priva_commP" type="checkbox" value="1" /></td><td><img 
                src="img/lock.png" 
                style="position: relative; width: 20px; height: 20px; ;"/></td><td><span 
                
                    
                        style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #808080;">Privado</span></td>
 
       
</tr></table><span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 29px; left: 4px;">Somente membros convidados por você podem participar e postar algo.</span></div>
<div style="border-bottom: 1px solid #EAEAEA; position: relative; width: 428px; height: 55px; top: 0px; left: 0px;"><table style="width: 150px"><tr><td   ><input style=""id="sel_priva_commPu" type="checkbox" value="2" /></td><td><img 
                src="img/aswde3e3e.png" 
                style="position: relative; width: 20px; height: 20px; ;"/></td><td><span 
                
                    
                        style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #808080;">Público</span></td>
 
       
</tr></table><span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 29px; left: 4px;">Qualquer pessoa  poderá participar e postar algo sem ser adicionado.</span></div></div>
<div style="clear: both; position: relative; top: 0px; left: 0px;"></div>
      <div style="margin: 10px; position: relative; float: left; border-right-style: solid; border-right-width: 1px; border-right-color: #EAEAEA; width: 100px; height: 70px">
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 10px; left: 8px;">Categoria</span></div>
        <div style="position: relative; float: left; margin: 10px; width: 443px; height: 80px; top: 0px; left: 0px;"> 
       
        <label class="oiue873474edithiden">
    <select id="okoe308484eee4">
        <option selected>Categoria</option>
    <?php $querycod83438492 = mysql_query("SELECT text FROM category_communities ")or die(mysql_error());;
while ($mensagemcod7837483473483872 = mysql_fetch_object($querycod83438492)) {?>
        <option><?php echo $mensagemcod7837483473483872->text ;?> </option>
        <?php };?>
        
        
    </select>
</label><span id="check_cat673"
                
                style="font-family: arial, Helvetica, sans-serif;display:none; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; vertical-align: middle; background-color: #CC0000; padding: 6px 10px 6px 10px; position: absolute; top: 25px; left: 85px; z-index:105; bottom: 28px;">Você precisa escolher uma categoria!</span>
            <div style="border-bottom: 1px solid #EAEAEA; position: relative; width: 428px; height: 55px; top: 0px; left: 0px;"><span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; top: 29px; left: 4px;">Você precisa escolher uma categoria para sua comunidade.</span></div>
</div>
        <label onclick="hide_commu_uei();" 
            
            
            style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; position: absolute; left: 363px; bottom: 15px;">Cancelar</label><label 
            onclick="check_name_comm();insert_communit_iew8()"  class="boradsemquina3 button_criarCom"
            
            
            
            
            style="font-family: arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; text-align: center; vertical-align: middle; background-color: #0066CC; padding: 5px 10px 5px 10px; position: absolute; bottom: 10px; right: 10px;">Criar comunidade</label></div></div><?php }else{ exit;};?>
<?
require("check_func_db.php");
   
   if (login_chekout()==true){
   sec_session_start();
  
include("date.php");

                   
 $UserId_Cokie =$_SESSION ['UserId'];

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuação
$qtd=9;

 $inicio_aux3=($_GET['page'] * $qtd)- $qtd;
?>
<div id="ooiere77465DFDEE" style="position: relative; width: 500px; min-height:30px;"></div>  
<?
//friends list
             $query17p = mysql_query("SELECT Idfriend FROM black_list_friends  Where (Idme='".CCUSERIDI."' and Idfriend<>'')    order by idorder DESC limit $inicio_aux3,9 ");
              $rcont37p = mysql_num_rows($query17p);
              //friends list
             
$aux_cont='0'; 
if ($rcont37p!='0'){



 while ($mensagemBox7 = mysql_fetch_object($query17p)){               
 
$query = mysql_query("SELECT UserName,UserId,SubName,UserCidade,UserEstado,UserFotoPerfil FROM users  where  ccuserid='$mensagemBox7->Idfriend' limit 1");
$rcont= mysql_num_rows($query);
if ($rcont!=''){
$mensagem = mysql_fetch_object($query);
 $UserId_aux = ($mensagem->UserId) ;

  ?>
  <div class="sombra_padrao_bottom user_foto_borda_superior"  onMouseOut="hide_showoo();"  style="position: relative;border: 1px solid #EBEBEB;margin-left:10px;margin-bottom:10px; width: 150px; height: 300px; float: left;"><div style="width:150px; height:150px;overflow:hidden; ">
       <img class="user_foto_borda_superior objOsjj993uueb over_foto_user" onclick="view_prof('<?php echo ($mensagem->UserId) ?>');" src="/cropImg.php?arquivo=profile_img/<?php echo($mensagem->UserFotoPerfil) ?>&largura=150&altura=150"
         title="<?php echo($mensagem->UserName) ?>" style="position: relative;"/></div><div class="shadow_iseuujdj"  
             
            style=" background:url('/imagens_rsrc/bgDescription4.png') repeat-x left top;    height:30%;    position:absolute;    bottom:150px;   left:0px;    width:100%;    display:;"><label onclick="view_prof('<?php echo ($mensagem->UserId) ?>');"
            style="padding: 5px 20px 5px 20px; font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 60px; left: 13px; vertical-align: middle; text-align: center;">Visualizar perfil</label></div><div 
            style="padding: 5px; position: relative; width: 140px; height: 143px; top: 0px; left: 0px;">
            <label class="iosdkkdnns focus_text_12_blue" onmouseout="limpar_timeout()" style="word-wrap: break-word;" ><?php echo($mensagem->UserName) ?>&nbsp;<?php echo($mensagem->SubName) ?><input type="hidden" value="<?php echo ($mensagem->UserId) ; ?>"><div class="show_user" 
    
    
                            style="width: 370px; height: 178px; border: 1px solid #CCCCCC; position: absolute;z-index:300; top: 22px; left: 45px;display:none;background-color:#FFFFFF; ">
   </div></label><br />
            <br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080;word-wrap: break-word;"><?php echo($mensagem->UserCidade);if ($mensagem->UserEstado !=''){ ?>-<?php echo($mensagem->UserEstado); };?></span></div>
            
             <div 
        style="position:absolute; bottom: 10px; "> <div class="koosuUTTF6677" style="position: relative; width: 140px;padding-left:10px;"><img style="position:relative;top:0px;left:0px;" src="/img/434898uewje.png"/><label style="font-family: arial, Helvetica, sans-serif; font-size: 12px;cursor:pointer; font-weight: normal; font-style: normal; font-variant: normal; color: #3366CC; position: absolute; top: 3px; left:32px;">Desbloquear</label><input type="hidden" value="<?php echo ($mensagem->UserId) ?>"/></div>                      
                        
                            <?php }; ?></div>
            </div>
<?
                   
};}else{
?>
<div style="position: relative; width: 500px; height: 300px; ">
            <img src="/img/yDHWjtlL3ff.png" 
                style="position: absolute; top: 38px; left: 176px;"/><span 
                style="font-family: arial, Helvetica, sans-serif;text-shadow:#FFFFFF 1px 1px 1px, #999999 -1px -1px 1px; font-size: 28px; font-weight: bold; font-style: normal; font-variant: normal; color:#C0C0C0; position: absolute; top: 193px; left: 100px;">Você não possui amigos bloqueados</span></div>
<?php 


};}
 else{

exit;
   }?>
   <div style="clear:both"></div>
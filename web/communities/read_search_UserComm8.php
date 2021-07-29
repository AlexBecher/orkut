<?php 
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();
 include_once ("transl8uu3j.php");
include_once ("sanitizeSql.php");

                 $UserId_Cokie =$_SESSION ['UserId'];
               
 	$userid2 = CCUSERIDI;
	

 $idGuet= utf8_decode($_POST['data']);
$idGuetcomm=Sanitize::filter($_POST['idcomm']);
 
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


header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
 


if ($idGuet!=''){
?>
  <?php 
$text777 = mysql_real_escape_string(($idGuet));
 if (strlen($text777) > '3'){
$text=mysql_real_escape_string(($idGuet));

 
  $sql = ("select users.UserGen,users.UserPais,users.UserEstado,users.NikName,users.UserCidade,users.UserFotoPerfil,users.UserId idusers,users.UserFotoPerfil,users.FullName ,list_community_user.IdCommunity,list_community_user.UserId id ,list_community_user.manager_comm from users ,list_community_user where (users.UserId=list_community_user.UserId and users.FullName LIKE '$text%') and (list_community_user.IdCommunity='$idGuetcomm')order By users.FullName DESC limit 9")or die(mysql_error());

  //verifica o adm
$querycodr = mysql_query("SELECT IdOrder FROM community_users  where (IdCommunity='$idGuetcomm' and UserIdPro='".USERID_ID."') order by IdOrder DESC limit 1")or die(mysql_error());;
$rcont373wllele = mysql_num_rows($querycodr);



$query173e = mysql_query("SELECT UserId FROM list_community_user  where (IdCommunity='$idGuetcomm' and UserId='".USERID_ID."' and manager_comm <>'0')  order by IdOrder asc limit 1 ")or die(mysql_error());;
$rcont373e = mysql_num_rows($query173e);
  
  $query = mysql_query($sql);
              while ($mensagem=mysql_fetch_object($query)){
	       
  	                    
  
	        
$rcont37 = mysql_num_rows($query);
if ($rcont37!=''){
             
             
	 $fotocomp2=($mensagem->UserFotoPerfil);
	 $fotocomp2Id=($mensagem->idusers);
	  $fotocomp2Idnome=($mensagem->FullName);
	    $nikename=($mensagem->NikName);
	    $cidade_Name =($mensagem->UserCidade) ; 
   $estado_Name =($mensagem->UserEstado) ; 
   $pais_Name =($mensagem->UserPais) ; 
    $gen_Name =($mensagemcomp2->UserGen) ;
               if ($gen_Name=='2'){$aux_gender_n=GENDERPROFILEMEN;  }else{ $aux_gender_n=GENDERPROFILEWOMAN;    }
$aux09954itjjr=$aux09954itjjr+1;
	  
$aux_id_div_0043="div".time().$aux09954itjjr;	  
	  	         

?>

 <div   onmouseover="mouse_over_menu(this);"  class="ui_mw_postoosm bg_default_orkut border_box_users_comm box_div_9990_comm">
 <?php if ($rcont373wllele!='' or $rcont373e!='') {?> <label class="de_039930 _box_admin_09-"><img class="de_0399301 _o-0wuhdnm8" src="/imagens_rsrc/sdnansd7w4hrjjdqesssswy2.png" /></label>
<div  class="estilodeboraesombra24 vide_ooddldP box-admin-user-comm" ><ul><?php if ($rcont373wllele!='') {?><li   class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyeh('<?php echo $mensagem->idusers ;?>','<?php echo USERID_ID;?>','<?php echo $idGuetcomm;?>')"><?php echo EXCLUIRMEMBROS88;?></li><?php };?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="ecew84uewhyehbann('<?php echo $mensagem->idusers ;?>','<?php echo USERID_ID;?>','<?php echo $idGuetcomm;?>')" ><?php echo BANIRMEMBROS883;?></li><?php if ($mensagem->manager_comm=='0'){ ?>
<li class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="eei94imoderragdeu('<?php echo $mensagem->idusers ;?>','<?php echo USERID_ID;?>','<?php echo $idGuetcomm;?>')"><?php echo TORNARMODERADOR838;?></li><?php };?> <?php if ($mensagem->manager_comm=='1'){ ?>
<li  class="men_new_90349e3 dhsjhdff775P o-ul-box-0399-user-comm" onclick="remeei94imoderragdeu('<?php echo $mensagem->idusers ;?>','<?php echo $aux_id_div_0043;?>','<?php echo $idGuetcomm;?>')" ><?php echo REMOVERMODERARDOR893;?></li><?php };?></ul></div><?php };?>
<div class="box-default-img-user-commm-left"><img onclick="view_prof('<?php echo $mensagem->idusers ;?>')" src="/cropImg.php?arquivo=profile_img/<?php echo $fotocomp2;?>&largura=60&altura=60"/></div>
<div class="box-default-name-user-comm-right"><a href="/<?php echo $nikename;?>" ><?php echo ocultaTexto($fotocomp2Idnome,25);?></a><br><span class="name-text-user-9938" ><?php echo $aux_gender_n.",".$cidade_Name."-".$estado_Name.",".$pais_Name;?></span></div>  
 <?php if ($mensagem->manager_comm=='1'){ ?><img id="<?php echo $aux_id_div_0043;?>" class="lloepowpoei838383 o-text6-3-e-2-9"  src="/img/download_manager.png"/><div class="boradsemquina3 ksiieoe838833ue3 o-O-NBF-38e_9" ><img src="/img/oopeiYTHG883.png" class="L-nhN-93i-w"/><span class="p-039o3-OLK-o_"><?php  echo MODERADOR73883;?></span></div> <?php };?>
<div style="clear:both"></div></div>
 <?php };};;if ($rcont37=='33222'){?>
<div style="position: relative; width:760px; height: 300px; ">
<img src="/img/yDHWjtlL3ff.png" 
                style="position: absolute; top: 38px; left: 300px;"/><span 
                style="font-family: arial, Helvetica, sans-serif;text-shadow:#FFFFFF 1px 1px 1px, #999999 -1px -1px 1px; font-size: 28px; font-weight: bold; font-style: normal; font-variant: normal; color:#C0C0C0; position: absolute; top: 193px; left: 90px;">Desculpe , n�o encontramos nenhum membro !</span></div><?php  
 
 
 }; ?> 
   
  
<?php };}; }else{
exit;

}?>
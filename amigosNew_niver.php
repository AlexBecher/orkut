<?
require ("check_func_db.php");

 if (login_chekout()==true){
  sec_session_start();
 include_once ("sanitizeSql.php");
   
 
include("date.php");
 

                $UserEmail = $_SESSION['UserEmail'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION['UserName'];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION['UserEmail'];
                $UserId_Cokie =$_SESSION ['UserId'];
               
header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃƒÂ§ÃƒÂ£o





    




$idUseruNN9=Sanitize::filter($_GET['id']);
 $date = date("Y-m-d");
list($anoatual, $mesatual, $diaatual) = explode("-", $date);
 
 
 //friends list
              $sql = ("select ccuserid,UserFotoThumb from users where UserId='$idUseruNN9' limit 1 ")or die(mysql_error());
	          $query = mysql_query($sql);
	          $res = mysql_fetch_array($query);
	          $userid = $res[0];
             $Igreja_fotothumb= $res[1];
//$query55= mysql_query("select userssalt.* ,friends_list.* from userssalt,friends_list where ((userssalt.ccuserid=friends_list.Idfriend or userssalt.ccuserid=friends_list.Idme) and (friends_list.Idme='".$userid."' and SatusDenuncia!='Mensagem denunciada'  and UserIdSalt<>'' and UserSaltProfile='' and UserSaltPublic='publico' and ccuserid<>'0' and friends_list.block<>'2'))or(ccuserid='".$userid."' and friends_list.Idme='' and SatusDenuncia!='Mensagem denunciada'  and UserIdSalt<>'' and UserSaltProfile='' and UserSaltPublic='publico' and ccuserid<>'0')  group by userssalt.timestamp desc limit 4") or die(mysql_error());
              $query17p = mysql_query("SELECT Idfriend FROM friends_list  Where (Idme='$userid' and block<>'2')  ")or die(mysql_error());
              $rcont37 = mysql_num_rows($query17p);
              if ($rcont37!=''){
              while ($mensagem1 = mysql_fetch_object($query17p)){
              
              //friends list


 	
             $query3 = mysql_query("SELECT ccuserid,UserId,UserName,UserNasc,UserFotoThumb FROM users where ccuserid='".$mensagem1->Idfriend."' and Date_Format(NOW(), '%m') = Date_Format(UserNasc, '%m') and (MONTH(UserNasc) = MONTH(CURDATE())   and (MONTH(UserNasc)!='0'))")or die(mysql_error());
             if (mysql_num_rows($query3)!='0') {
             $rcont378u8eoee=$rcont378u8eoee+1;
             ;
             }
              };
              
              };
	


 







?>



                
 <div id="membros_amigos2" class="boradsemquina3 sombra_padrao_bottom"
    
     style="border: 1px solid #D6D6D6; height: auto; background-color: #F4F4F4; display:none; width: 500px;">
     <div class="user_foto_borda_superior" 
         
         style="position: relative; width:500px; height: 100px; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #D6D6D6; background-color: #F7F7F7; margin-bottom:15px;  background-image: url('img/848uyeu_i3762.png');">
         <br>
</div>
 <span style=" font-family:arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; text-align: center; position: absolute; top: 131px; left: 20px;">( <?php echo $rcont378u8eoee;?> ) Amigos aniversariando este mês ;)</span>            
             <div style="position: relative; width: 500px; height: auto; margin-top: 50px;">
<?
$query17p9 = mysql_query("SELECT Idfriend FROM friends_list  Where (Idme='$userid' and block<>'2') order by rand()  ")or die(mysql_error());
              $rcont379 = mysql_num_rows($query17p9);
              if ($rcont379!=''){
              while ($mensagem19 = mysql_fetch_object($query17p9)){
              
              //friends list


 	
             $query32 = mysql_query("SELECT ccuserid,UserId,UserName,UserNasc,UserFotoThumb,SubName FROM users where ccuserid='$mensagem19->Idfriend' and Date_Format(NOW(), '%m') = Date_Format(UserNasc, '%m') and (MONTH(UserNasc) = MONTH(CURDATE())   and (MONTH(UserNasc)!='0'))")or die(mysql_error());
          if (mysql_num_rows($query32)!='0') {
    $aunc0nt=$aunc0nt+1;        
$linha = mysql_fetch_array($query32);
list($ano, $mes, $dia) = explode("-", $linha['UserNasc']);

$datanascimento = implode("/", array_reverse(explode("-", $linha['UserNasc'])));
$data_niver=$datanascimento -("month");



?>
  <div class="sombra_padrao_bottom user_foto_borda_superior"  onMouseOut="hide_showoo();"  style="position: relative;border: 1px solid #EBEBEB;margin-left:10px;margin-bottom:10px; width: 150px; height: 300px; float:left; background-color: #FFFFFF; "><div style="width:150px; height:150px;overflow:hidden; ">
       <img class="user_foto_borda_superior objOsjj993uueb over_foto_user" onclick="view_prof('<?php echo ($linha['UserId']) ?>');" src="/cropImg.php?arquivo=profile_img/<?php echo($linha['UserFotoThumb']) ?>&largura=150&altura=150"
         title="<?php echo($linha['UserName']) ?>" style="position: relative;"/></div><div class="shadow_iseuujdj"  
             
            style=" background:url('/imagens_rsrc/bgDescription4.png') repeat-x left top;    height:30%;    position:absolute;    bottom:150px;   left:0px;    width:100%;    display:;"><label onclick="view_prof('<?php echo ($linha['UserId']) ?>');"
            style="padding: 5px 20px 5px 20px; font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 60px; left: 13px; vertical-align: middle; text-align: center;">Visualizar perfil</label></div><div 
            style="padding: 5px; position: relative; width: 150px; height: 143px; top: 0px; left: 0px;">
            <label class="iosdkkdnns focus_text_12_blue" onmouseout="limpar_timeout()"  ><?php echo($linha['UserName']) ?>&nbsp;<?php echo($linha['SubName']) ?><input type="hidden" value="<?php echo ($linha['UserId']) ; ?>"><div class="show_user" 
    
    
                            style="width: 370px; height: 178px; border: 1px solid #CCCCCC; position: absolute;z-index:300; top: 22px; left: 45px;display:none;background-color:#FFFFFF; ">
   </div></label><br />
            <br /><span style="font-family: lucida grande,tahoma,verdana,arial,sans-serif; font-size: 11px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080">&nbsp;<?php if  ($diaatual > $dia) {?>Fez aniversário este mês dia <?php }?><?php  if  ($diaatual < $dia) {?>Faz aniversário dia <?php }?><?php  if ($diaatual == $dia){ ?><b>Faz aniversário hoje</b> <?php } echo $data_niver;  ?></span></div>
            
            </div>
  
<?php
};     

              };};
?></div><div style="clear:both"></div>
 </div>             


            
<?php };?>

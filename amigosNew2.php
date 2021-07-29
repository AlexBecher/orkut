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
               



                
                
                  


 	$userid3 = CCUSERIDI;
                   
            



                  
             

    



header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuação
$idUseruNN9=Sanitize::filter($_GET['id']);
$qtd=9;

 $inicio_aux3=($_GET['page'] * $qtd)- $qtd;
 //friends list
              $sql = ("select ccuserid,UserName from users where UserId='".$idUseruNN9."' limit 1 ")or die(mysql_error());
	          $querye = mysql_query($sql);
	          $res = mysql_fetch_array($querye);
	          $userid = $res[0];
 $User_Name33 =$res[1] ;
 
             
?>



                
 <div style="position: relative; width: 500px; height: auto">
<?
//friends list
              $query17p = mysql_query("SELECT Idfriend FROM friends_list force index(Idme,Idfriend,block) Where (Idme='$userid' and block<>'2')   group by Idfriend  order by idorder DESC limit $inicio_aux3,9  ");
              $rcont37p = mysql_num_rows($query17p);
              //friends list
             
$aux_cont='0'; 
if ($rcont37p!='0'){



 while ($mensagemBox7 = mysql_fetch_object($query17p)){               
 
$query = mysql_query("SELECT UserName,UserId,SubName,UserCidade,UserEstado,UserFotoPerfil,NikName,ccuserid FROM users  where  ccuserid='$mensagemBox7->Idfriend' limit 1 ");
$rcont= mysql_num_rows($query);
if ($rcont!='0'){
$mensagem = mysql_fetch_object($query);
 $UserId_aux = ($mensagem->UserId) ;
/* */$query6 = mysql_query("SELECT * FROM usercomp   Where (UsConv='$UserId_Cokie' and UsDest='$UserId_aux') or UsConv='$UserId_aux' and UsDest='$UserId_Cokie' limit 1 ");
$query7 = mysql_query("SELECT * FROM usercomp  Where UsConv='$UserId_Cokie' and UsAck='$UserId_aux' or UsAck='$UserId_Cokie' and UsConv='$UserId_aux' limit 1");
$query848545 = mysql_query("SELECT block FROM friends_list WHERE (Idme='$userid3' and Idfriend='$mensagemBox7->Idfriend' and block='2') or (Idfriend='$userid3' and Idme='$mensagemBox7->Idfriend' and block='2') limit 1") or die(mysql_error());
$rTestar93454i = mysql_num_rows($query848545);


$Aux2 = mysql_num_rows($query6);
$Aux7 = mysql_num_rows($query7);



 //usuário na lista negra colocado por mim
               $query_black_list = mysql_query("SELECT Idfriend FROM black_list_friends  Where (Idme='".$mensagem->ccuserid."' and  Idfriend='".CCUSERIDI."')or (Idfriend='".$mensagem->ccuserid."' and  Idme='".CCUSERIDI."') Order by idorder DESC   limit 1 ");
               $row_black_list = mysql_num_rows($query_black_list);

if ($rTestar93454i=='0' && $row_black_list=='0'){

  ?>
   <div class="sombra_padrao_bottom user_foto_borda_superior"  onMouseOut="hide_showoo();"  style="position: relative;border: 1px solid #EBEBEB;margin-left:10px;margin-bottom:10px; width: 150px; height: 300px; float: left;"><div style="width:150px; height:150px;overflow:hidden; ">
       <img class="user_foto_borda_superior objOsjj993uueb over_foto_user" onclick="view_prof('<?php echo ($mensagem->UserId) ?>');" src="/cropImg.php?arquivo=profile_img/<?php echo($mensagem->UserFotoPerfil) ?>&largura=150&altura=150"
         title="<?php echo($mensagem->UserName) ?>" style="position: relative;"/></div><div class="shadow_iseuujdj"  
             
            style=" background:url('/imagens_rsrc/bgDescription4.png') repeat-x left top;    height:30%;    position:absolute;    bottom:150px;   left:0px;    width:100%;    display:;"><label onclick="view_prof('<?php echo ($mensagem->UserId) ?>');"
            style="padding: 5px 20px 5px 20px; font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: absolute; top: 60px; left: 13px; vertical-align: middle; text-align: center;">Visualizar perfil</label></div><div 
            style="padding: 5px; position: relative; width: 140px; height: 143px; top: 0px; left: 0px;">
              <a class="text_post_titulo_blue" href="/<?php echo $mensagem->NikName; ?>" onmouseover="Kjs653llakOi('<?php echo $mensagem->ccuserid;?>',this)" onmouseout="Kjs653llakOio();" target="_blank"><label class=""  style="word-wrap: break-word;" ><?php echo($mensagem->UserName) ?>&nbsp;<?php echo($mensagem->SubName) ?><input type="hidden" value="<?php echo ($mensagem->UserId) ; ?>"></label></a><br />

            <br />
            <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080;word-wrap: break-word;"><?php echo($mensagem->UserCidade);if ($mensagem->UserEstado !=''){ ?>-<?php echo($mensagem->UserEstado); };?></span></div>
            <div 
        style="position:absolute; bottom: 10px; "><?php if (($Aux2!='')and ($mensagem->UserId!=$UserId_Cokie )) {  if ($Aux7!='') {?><?php }else {?>       <div style="position: relative; width: 140px;padding-left:10px;"><img src="imagens_rsrc/button_lonidsn39.png"/><span 
                        
                        style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #3366CC; position: absolute; top: 8px; left: 40px;">Solicitação enviada</span></div><?php };}; ?><?php if (($Aux2=='')and ($mensagem->UserId)!=$UserId_Cokie) {?>
   <div style="position: relative; width: 140px;padding-left:10px;"><img  class="ad_083281" style="cursor:pointer;width: 30px; height:30px;" src="imagens_rsrc/button_lonidsn38.png"/><input type="hidden" value="<?php echo ($mensagem->UserId) ?>"/><label style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #3366CC; position: absolute; top: 8px; left: 42px;"><input type="hidden" value="<?php echo ($mensagem->UserId) ?>"/>Adicionar</label></div>                      
                        
                            <?php }; ?></div>
            </div>
<?php };
};
};

}else{
?> <div style="position: relative; width: 500px; height: 300px; ">
            <img src="/img/yDHWjtlL3ff.png" 
                style="position: absolute; top: 38px; left: 176px;"/><span 
                style="font-family: arial, Helvetica, sans-serif;text-shadow:#FFFFFF 1px 1px 1px, #999999 -1px -1px 1px; font-size: 28px; font-weight: bold; font-style: normal; font-variant: normal; color:#C0C0C0; position: absolute; top: 193px; left: 16px;">Não tem amigos :(</span></div>
                <?php }?>
</div><div style="clear:both"></div>
            


            

<?php };?>
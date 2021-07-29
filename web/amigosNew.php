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
 //friends list
              $sql = ("select ccuserid,UserName from users where UserId='".$idUseruNN9."' limit 1")or die(mysql_error());
	          $query = mysql_query($sql);
	          $res = mysql_fetch_array($query);
	          $userid = $res[0];
 $User_Name33 =$res[1] ;
 
 //friends list
  ///inicio memcache
//consulta específica com memcache
 $memcache_obj = memcache_connect(MEMCACHED_HOST, MEMCACHED_PORT);
 $consulta=$userid."friends_count"; 
 $chave = "key".md5($consulta);
 $query_mem = memcache_get($memcache_obj,$chave);
//consulta específica com memcache
 if ($query_mem==false){                     
                  
              $query17p = mysql_query("SELECT ccuserid FROM users ,friends_list  Where  (users.ccuserid=friends_list.Idfriend and Idme='".$userid."' and users.ccuserid<>'".$userid."' and friends_list.block<>'2') order by lastactivity DESC ")or die(mysql_error());
              //friends list
$rcont37p4 = mysql_num_rows($query17p);
$var=$rcont37p4;
$memcache_obj->set($chave,$var, MEMCACHE_COMPRESSED, 200);
 }else{
 $rcont37p4=$query_mem;
 };

 
            
              //friends list
              if ($idUseruNN9==$UserId_Cokie){
 //conta lembretes
$queryRRTT2 = mysql_query("SELECT users.ccuserid FROM users ,usercomp Where (usercomp.UsConv<>'' and usercomp.UsDest='".$UserId_Cokie."' and usercomp.UsAck='')and (users.UserId=usercomp.UsConv) order by users.ccuserid DESC  ");
 $rsTT22 = mysql_num_rows($queryRRTT2);
 
              //friends list
              $query17p = mysql_query("SELECT Idfriend FROM black_list_friends  Where (Idme='".$userid."' and Idfriend<>'')   order by idorder DESC  ");
              $rcont37p44 = mysql_num_rows($query17p);
             
              //friends list
              };             
?>



 <style>
 .sow_8424738{
 
  background-color: #FFFFFF;  border-right-style: solid; border-right-width: 1px; border-right-color: #D6D6D6;border-top-style: solid; border-top-width: 1px;padding-top:3px; border-top-color: #D6D6D6; text-align: center; vertical-align: middle;
 }
.sow_84247385{ 
cursor: pointer; background-color: #639cf1; vertical-align: middle;padding-top:3px; text-align: center;
} 
.jiu3483yewgjhdsjdns{

font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #808080; position: relative;
}
.jiu3483yewgjhdsjdnsB{

font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; position: relative;
}
 </style>               
 <div id="membros_amigos2" class="boradsemquina3 sombra_padrao_bottom"
    style="border: 1px solid #D6D6D6; min-height:800px; background-color: #FFFFFF; display:none; width: 500px;">
     <div class="user_foto_borda_superior" 
         style="position: relative; width: 490px; height: 100px; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #D6D6D6; background-color: #F7F7F7; padding-top: 10px;margin-bottom:15px; padding-left: 10px;">
         <span style=" font-family:arial, Helvetica, sans-serif;font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #333333; text-align: center; position: absolute; top: 22px; left: 51px;">Amigos <?php if ($idUseruNN9!=$UserId_Cokie){ echo "de $User_Name33";};?></span>
         <span style=" font-family:arial, Helvetica, sans-serif;font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #999999; text-align: center; position: absolute; top: 53px; left: 10px;">Compartilhe coisas boas com seus amigos.</span><br>
        
         
<?php if ($idUseruNN9==$UserId_Cokie){?><label class="botton_cinza" onclick="abrirmembros();"
             
             
             style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; text-transform: none; color: #666666; vertical-align: middle; text-align: center; padding: 5px 10px 5px 10px; position: absolute; background-color: #FBFBFB; right: 10px; top: 40px;">Encontrar + Amigos</label><?php };?><img 
             src="img/users.png" style="position: absolute; top: 14px; left: 10px;"/><div 
             style="position: absolute; width: 490px; height: 25px; bottom: -1px; left: 0px">
             
             <div onclick="abrirPag4('<?php echo $idUseruNN9;?>');"  class="sow_8424738" style="position: absolute; width:150px; height: 22px; bottom: 0px; left: 0px;"  >
                 <span class="jiu3483yewgjhdsjdns" >Amigos (<?php echo $rcont37p4?>)</span></div>
 <?php if ($idUseruNN9!=$UserId_Cokie){?>                
             <div class="sow_84247385" style="position: absolute;display:none; width: 200px; height: 22px; bottom: 0px;  left: 152px;">
             <span class="jiu3483yewgjhdsjdnsB" >Amigos em comum (100)</span></div>
             <?php }else{?>    
             <div onclick="lem_09q83rP('<?php echo $idUseruNN9;?>');" class="sow_84247385" style="position: absolute; width: 150px; height: 22px; bottom: 0px;  left: 152px;">
             <span class="jiu3483yewgjhdsjdnsB" >Lembretes (<?php echo $rsTT22;?>)</span></div>
             
             <div onclick="bloq_09q83rP('<?php echo $idUseruNN9;?>');" class="sow_84247385" style="position: absolute;display:; width: 150px; height: 22px; bottom: 0px; left: 303px; ">
             <span class="jiu3483yewgjhdsjdnsB">Bloqueados (<?php echo $rcont37p44;?>)</span></div>
             <?php };?>
             </div></div>
    
           <div id="kiOOJjds98_oos" style="position: relative; width: 500px; height:50px;background-color: #FFFFFF;"><input placeholder="Buscar amigos"id="nome_test"maxlength="100"accesskey="/" name="nome_test" onkeyup="searcH_Membro_UserFri('<?php echo $userid;?>')"
                type="text" placeholder="Nome"
            
            style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; background-color: #FFFFFF; border: 1px solid #EEEEEE; padding-left: 10px; width: 235px; height: 30px; top:10px; left: 10px;" />
               </div> 
                <div id="kiOOJjds98_oos7" style="position: relative;display:none; width: 500px; height:50px;background-color: #FFFFFF;"><input placeholder="Buscar pessoas bloqueadas"id="nome_teste"maxlength="100"accesskey="/" name="nome_teste" onkeyup="searcH_Membro_UserFriB('<?php echo $userid;?>')"
                type="text" placeholder="Nome"
            
            style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666; position: absolute; background-color: #FFFFFF; border: 1px solid #EEEEEE; padding-left: 10px; width: 235px; height: 30px; top:10px; left: 10px;" />
               </div>
             <div id="oi99488uerehjjhehjjw" style="position: relative; width: 500px;margin-top:10px; height: auto">
             <div id="ooiere77465DFDEE" style="position: relative; width: 500px; min-height:30px;"></div>  
<?
if ($inicio_aux3==''){$inicio_aux3='1';};   

//friends list
              $query17p = mysql_query("SELECT Idfriend FROM friends_list force index(Idme,Idfriend,block) Where (Idme='$userid' and block<>'2')  group by  Idfriend order by Idfriend DESC limit 9 ");
              $rcont37p = mysql_num_rows($query17p);
              //friends list
             
$aux_cont='0'; 
if ($rcont37p!='0'){



 while ($mensagemBox7 = mysql_fetch_object($query17p)){               
 
$query = mysql_query("SELECT UserName,UserId,SubName,UserCidade,UserEstado,UserFotoPerfil,NikName,ccuserid FROM users  where  ccuserid='$mensagemBox7->Idfriend' limit 1");
$rcont= mysql_num_rows($query);
if ($rcont!=''){
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

?></div><div style="clear:both"></div>
 <div id="MsgPostM4"></div><div id="limit_pag" 
                  
                  
                  
                        
         style="border: 1px solid #CCCCCC; width: 450px; height: 40px; background-color: #F4F4F4; position: relative; left: 25px; top:5px;"><center><label class="link_foote"  onclick="carrega_mais('<?php echo $idUseruNN9;?>')"><label id="mais_post1"><span style="font-family: tahoma; font-size: 11px; font-weight: normal; font-style: normal; font-variant: normal; color: #336699" 
                      >Mais</span></label><div id="load_1"></div></label></center></div><br><?php }else{?>
                      <div style="position: relative; width: 500px; height: 300px; ">
            <img src="/img/yDHWjtlL3ff.png" 
                style="position: absolute; top: 38px; left: 176px;"/><span 
                style="font-family: arial, Helvetica, sans-serif;text-shadow:#FFFFFF 1px 1px 1px, #999999 -1px -1px 1px; font-size: 28px; font-weight: bold; font-style: normal; font-variant: normal; color:#C0C0C0; position: absolute; top: 193px; left: 16px;">Não tem amigos :(</span></div>
                <?php }?></div>             


            
<?php };?>

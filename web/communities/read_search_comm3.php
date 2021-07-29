<?php 

require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

include_once ("sanitizeSql.php");
                 
  $UserId_Cokie =$_SESSION ['UserId'];
               
  $userid2 = CCUSERIDI;

 $idGuet= utf8_decode($_GET['variavel']);


header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
 



?>
<head>
	
<link type="text/css" href="/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>

		<script type="text/javascript" id="sourcecode">
		    $(document).ready(function () {
		        $(".scroll-pane").jScrollPane();
		        $(".scroll-pane .jspDrag").hide();
		        $(".scroll-pane").mouseenter(function () {
		            $(this).find(".jspDrag").stop(true, true).fadeIn("slow");
		        });
		        $(".scroll-pane").mouseleave(function () {
		            $(this).find(".jspDrag").stop(true, true).fadeOut("slow");
		        });

		    });

		 
		</script>
	

	</head>
<div class="scroll-pane sombra_padrao_bottom"  
                    
    style="border-style: none solid solid solid; border-width: 1px;border-color: #EAEAEA;  max-height:300px; width:348px;padding-top:5px; overflow-x:hidden; position:relative;  background-color: #FFFFFF; ">
  <?php 
  
//friends list
  $text = mysql_real_escape_string(Sanitize::filter($idGuet));
              $sql = ("select users.FullName ,users.UserFotoThumb ,users.UserCidade,users.ccuserid,users.UserId,friends_list.Idme,friends_list.Idfriend,friends_list.block from users,friends_list where (FullName LIKE '$text%'  and  Idme='$userid2' and block<>'2' and Idfriend=ccuserid)group by Idfriend  limit 5")or die(mysql_error());
	          
              $query = mysql_query($sql);
              while ($mensagemBox=mysql_fetch_object($query)){
	         
	         
$rcont37 = mysql_num_rows($query);
if ($rcont37!=''){
  ?>

<div onclick="select_write_commmu3('<?php echo $mensagemBox->UserId?>','<?php echo $mensagemBox->UserName?>','<?php echo $mensagemBox->UserFotoThumb;?>');" class="sjjjjduu" id="Membros_" onmouseout="javascript:this.style.background= ''" 
             onmouseover="javascript:this.style.background= '#EFEFEF'"  
        style="border-style: none none none none; border-width: 1px;margin-bottom:5px; border-color: #EAEAEA; width:348px; height:auto; "><label  >

<img src="/profile_thumbs/<?php echo $mensagemBox->UserFotoThumb;?>" 
        style="max-width:35px;max-height:35px; float: left;margin-left:5px;" 
        title="<?php echo $mensagemBox->UserName?>"  ><div 
        
        
        
        style="float: left; position: relative; top: 0px; left: 0px; width: 252px; height: 35px; margin-left: 5px;">

<span style="font-family: tahoma, arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; color: #666666; font-style: normal; font-variant: normal; margin-left: 5px; "><?php echo $mensagemBox->FullName;?></span><br>
        <span style="font-family: tahoma, arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal; color: #808080; font-style: normal; font-variant: normal; margin-left: 5px; "><?php echo $mensagemBox->UserIgreja;?></span><br></div>
    <div style="clear: both"></div>
</label></div>

 <?php };};if ($rcont37==''){?>
 <div                 
            
        style="position: relative; width: 348px; background-color: #F9F9F9; border-top-style: solid; border-top-width: 1px; border-top-color: #E6E6E6; height: 50px;">
    <span style="font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; font-style: normal; font-variant: normal; color: #808080; position: absolute; top: 15px; left: 65px;">N�o encontramos nenhum amigo :(</span></div><?php  
 
 
 }; ?> 
    </div>
  
<?php }else{
exit;


}?>
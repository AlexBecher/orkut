<?
require("check_func_db2.php");
   
   if (login_chekout()==true){
   sec_session_start();

include("date.php");
                $UserId_Cokie = $_SESSION['UserId'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION["UserName"];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION["UserEmail"];
                $UserIgreja_Cokie =$_SESSION ["UserIgreja"];
                
                

header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o
$taghnsm=$_POST['osddsjjju888'];
$arquivo = isset($_FILES["imagem_capa"]) ? $_FILES["imagem_capa"] : FALSE;
$max_image_x = 500;
$max_image_y = 500;
$diretorio = 'bg_community/';  //diretório onde esão as imagens
$diretorio_thumb = 'bg_community_thumbs/';  //diretório onde esão as imagens

if($arquivo)
{
	
        $tamanho = getimagesize($arquivo["tmp_name"]);
        $tamnho_X = $tamanho[0]; 
         $tamnho_Y = $tamanho[1]; 
if(($tamnho_X > 1000 )or ($tamnho_Y > 768)){
   	
     echo "<label  style='font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-image: url(/imagens_rsrc/semi-transparent2.png); background-repeat: repeat; padding: 5px; position: absolute; bottom: 120px; right: 10px;cursor:pointer;'>Esta imagem é muito grande!Você deve usar uma imagem de 400 x 400px no máximo!</<label><img  id='load_22' style='position: absolute; top: 147px; left: 359px; display: none;' src='/imagens_rsrc/jKEcVPZFk-2.gif'><div  style=' background:transparent url(/imagens_rsrc/bgDescription4.png) repeat-x top left;    height:35%;    position:absolute;    bottom:0px;   left:0px;    width:100%;    display:;'></div>";
}else{       
         
       
if(($tamnho_X < 275 )or ($tamnho_Y < 180)){
   	
     echo "<label  style='font-family: arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; font-style: normal; font-variant: normal; color: #FFFFFF; vertical-align: middle; text-align: center; background-image: url(/imagens_rsrc/semi-transparent2.png); background-repeat: repeat; padding: 5px; position: absolute; bottom: 120px; right: 10px;cursor:pointer;'>Esta imagem é muito pequena!Você deve usar uma imagem de 400 x 400px no mínimo!</<label><img  id='load_22' style='position: absolute; top: 147px; left: 359px; display: none;' src='/imagens_rsrc/jKEcVPZFk-2.gif'><div  style=' background:transparent url(/imagens_rsrc/bgDescription4.png) repeat-x top left;    height:35%;    position:absolute;    bottom:0px;   left:0px;    width:100%;    display:;'></div>";
}else{       
   

        ini_set ("max_execution_time", 3600); // uma hora
        require_once "functionsUpload.php";
        $err = FALSE;
        if(is_uploaded_file($arquivo['tmp_name']))
        {
                if(verifica_image($arquivo))
                {
                        $tamanho = getimagesize($arquivo["tmp_name"]);
                          
      
   
                        $dimensiona = verifica_dimensao_image($arquivo, $max_image_x, $max_image_y);
                        if($dimensiona != '')
                        {
                                if($dimensiona == 'altura')
                                {
                                                $auxImage = $max_image_x;
                                                $max_image_x = $max_image_y;
                                                $max_image_y = $auxImage;
                                }
                        }
                        else
                        {
                                $max_image_x = $tamanho[0];
                                $max_image_y = $tamanho[1];
                        }
                        
                        $nome_foto  = (md5(uniqid(time())) . "." . verifica_extensao_image($arquivo));// nome único para foto
                        $extensao = strtolower(verifica_extensao_image($arquivo));
                        $endFoto = $diretorio . $nome_foto;
                        if(reduz_imagem($arquivo['tmp_name'], $max_image_x, $max_image_y, $endFoto, $extensao))
                        {
                         
    
	  require_once "crop_img_comm.php";
	 // require_once "crop_img_comm_large.php";
	  
      mysql_query("UPDATE community_users  SET  CommunityImg='$nome_foto' where 	IdCommunity='$taghnsm' and UserIdPro='$UserId_Cokie' ");
 
                             	
                        	
                             echo "<img  id='load_22' style='position: absolute; top:50px; left: 50px; display: none;' src='/imagens_rsrc/jKEcVPZFk-2.gif'><img style='position: relative; width: auto; height:auto' src='/cropImg.php?arquivo=bg_community/".$nome_foto."&largura=175&altura=273' id='backgr' ><div  style=' background:transparent url(/imagens_rsrc/bgDescription4.png) repeat-x top left;    height:35%;    position:absolute;    bottom:0px;   left:0px;    width:100%;    display:;'></div>";
                        }  
                }
                
        }
}
}
   }
        

   
   }else{
   exit;
   
   }      


?>
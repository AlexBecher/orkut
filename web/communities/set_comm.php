<?
if ( $_SERVER['REQUEST_METHOD'] <> "POST" or ($_SERVER['HTTP_REFERER'])==null){
    echo "Você não tem permissão para visualizar esse conteúdo! :p";
}else{
require("check_func_db.php");
require_once "functionsUpload.php";
if((login_chekout()==true)) {

    sec_session_start();

include_once ("sanitizeSql.php");


require ('ad_lash_inj.php');
include("date.php");


if (empty($_SESSION["X_i84ug"])){
session_register("X_i84ug");
$_SESSION["X_i84ug"]=time(); 

}else{

if (((time() - ($_SESSION["X_i84ug"])) > '50')){
session_register("X_i84ug");
$_SESSION["X_i84ug"]=time(); 

}
}

  if (($_SERVER['REQUEST_METHOD'] == 'POST' && (time() - ($_SESSION["X_i84ug"])) < '1')) {
              
      $option = isset($_POST['nome']) ? $_POST['nome'] : false;
      
      if ($option) {
 
//imagem inicio
          $arquivo = isset($_FILES["imagem"]) ? $_FILES["imagem"] : FALSE;
          $max_image_x = 155;
          $max_image_y = 155;
          $max_thumb_x = 90;
          $max_thumb_y = 90;
          $diretorio = 'bg_community/';  //diretório onde esão as imagens
          $diretorioT = 'bg_community_thumbs/';  //diretório onde esão as thumbs
          if ($arquivo){
      
              $tamanho = getimagesize($arquivo["tmp_name"]);
              $tamnho_X = $tamanho[0];
              $tamnho_Y = $tamanho[1];
              
              ini_set ("max_execution_time", 60); // uma hora
             
              $err = FALSE;
              if(is_uploaded_file($arquivo['tmp_name']))
              {
                  if(verifica_image($arquivo))
                  {
                      $tamanho = getimagesize($arquivo["tmp_name"]);
                      $dimensiona = verifica_dimensao_image($arquivo, $max_image_x, $max_image_y);
                      if($dimensiona != '')
                      {
                          if($dimensiona == '1048')
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
                      
                      $nome_foto  = $cod_comm."_".(md5(uniqid(time())) . "." . verifica_extensao_image($arquivo));// nome único para foto
                      $extensao = strtolower(verifica_extensao_image($arquivo));
                      $endFoto = $diretorio . $nome_foto;
                      
                      if(reduz_imagem($arquivo['tmp_name'], $max_image_x, $max_image_y, $endFoto, $extensao))
                      
                      {
                          
                          
                      }
                      }
                      
              }
          }
//imagem fim          
          
          
          
          
          
$titulo = strip_word_html(($_POST['nome']));//nome
$type = Sanitize::filter(strip_word_html($_POST['tipo']));//tipo 0 = publica e 1 =privada
$cat=strip_word_html(utf8_decode($_POST['id_categoria']));//categoria
$idioma=strip_word_html(($_POST['idioma']));//idioma
$privacidade=strip_word_html(utf8_decode($_POST['mensagens']));//0 = qualquer um, 1= só dono e moredarador privacidade de criar topicos
$local=strip_word_html(($_POST['cidade']));//local da comunidade
$pais=strip_word_html(($_POST['pais']));//pais da comunidade
$descricao=strip_word_html(($_POST['descricao']));//descrição da comunidade


    
    if (file_exists($endFoto)) {
        
        $nome_foto = $nome_foto;
        
    }else{
        $nome_foto = "ol_orkut_.png";
}
//$aux_id_commu=(sha1(uniqid(time())));;

 
$itimesamp=((time()));	
 	if ($titulo!=''){
 	
 	    $query = (" INSERT INTO community_users  (AboutComm,loc,topic_open,lang,IdCommunity,UserIdPro,CommunityName,CommunityPrivacy,CommunityAux,timestamp,category,CommunityImg) VALUES ('".Sanitize::filter($descricao)."','".Sanitize::filter($local)."','".Sanitize::filter($privacidade)."','".Sanitize::filter($idioma)."','','".CCUSERIDI."','$titulo','$type','','$itimesamp','".Sanitize::filter($cat)."','".Sanitize::filter($nome_foto)."')");
 //mysql_query(" INSERT INTO envia_email_evento ( IdUser,IdOrderEventos,pagina,IdOrder,tipo) VALUES ('$UserId_Cokie','$id_order','1','null','$tipo')");

mysql_query($query); 

// Get last insert id 
$lastid = mysql_insert_id();


if ($query){

	 mysql_query("UPDATE community_users SET IdCommunity='".$lastid."' where UserIdPro='".CCUSERIDI."' and IdOrder='".$lastid."' limit 1"); 
}

//echo $lastid;
//echo   $_POST['data']."/communities/".$lastid;
//$url = $_POST['data']."/communities/".$lastid;
header("Location: /communities/".$lastid);
exit();
 	};
 
      }else{
          
        //  header("Location: /MainComSet/");
         // exit();
          $_SESSION['postdata'] = $_POST;
          unset($_POST);
          header("Location: /MainComSet/");
          exit();
          ;
      }
  }else{
      
      $_SESSION['postdata'] = $_POST;
      unset($_POST);
      header("Location: /MainComSet/");
      exit();
  }
}else{
session_register("X_i84ug");
$_SESSION["X_i84ug"]=''; 

echo "Ops! erro...";
}

};
?>
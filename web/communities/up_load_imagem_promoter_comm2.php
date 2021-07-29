<?
require("check_func_db.php");
   
    if (login_chekout()==true){
    sec_session_start();

 include_once ("transl8uu3j.php");
include("date.php");
                $UserId_Cokie = $_SESSION['UserId'];
                $UserPassword = $_SESSION['UserPassword'];
                $UserName_cokie = $_SESSION["UserName"];
                $UserFotoPerfil_Cokie= $_SESSION['UserFotoPerfil'];
                $UserEmail_Cokie = $_SESSION["UserEmail"];
                $UserIgreja_Cokie =$_SESSION ["UserIgreja"];
                
 $url_comm = $_POST['nam_url_92'] ;
 $cod_comm = $_POST['nam_cod_comm93'] ;              
 $foto_text =ALETERARIMAGEM838I3JEJE;
 $cancelar_text = CANCELARPP00;  
 $recortar_text = RECORTARPPP;  
 $nick_name = NIKNAMME;
 $text0_uoppp = UPLOADDEIMAGEMPERFILERRO;
 header("Content-type: text/html; charset=iso-8859-1"); // corrigir acentuaÃ§Ã£o

$arquivo = isset($_FILES["imagemN1"]) ? $_FILES["imagemN1"] : FALSE;
$max_image_x = 600;
$max_image_y = 222;
$max_thumb_x = 90;
$max_thumb_y = 90;
$diretorio = 'img_promoter_tmp/';  //diretório onde esão as imagens
//$diretorioT = 'bg_community_thumbs/';  //diretório onde esão as thumbs
if($arquivo)
{
        $tamanho = getimagesize($arquivo["tmp_name"]);
         $tamnho_X = $tamanho[0]; 
         $tamnho_Y = $tamanho[1]; 
        
        if(($tamnho_Y < 150)){
   	
     echo <<<html
     
<div id="popup_comp_003993"  >
    
	<div id="pop_ueu74774" style="margin: 6% auto;height: auto; width:520px;"  ><div class="estilodeboraesombra2" 
            style="background: #FFFFFF; height: auto; width:520px; position: absolute; margin: 0 auto; z-index: 500; ">
   <div 
        class="menu_comp user_foto_borda_superior" 
        
            
            
            style="border-style: none none solid none; border-color: #CCCCCC; height: 50px; width: 100%; background-color: #EFEFEF; border-bottom-width: 1px; position: relative;"> <img class="close_002" onclick="$('#popup_comp_003993').hide();;" src="/imagens_rsrc/suuw83hjdjjdd.png" 
           style="position: absolute; top: 10px;  height: 21px; right: 10px;"    />
       <label ><label class="urjjdbbfjjd" 
                style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666;  position: absolute; top: 16px; left: 10px;">$foto_text</label></label></div><br /> 
                
<div  style="position: relative; width: 100%; height:220px; padding: 10px">
    <div style='position: absolute; width: 155px; height: auto; text-align: justify; top: 97px; left: 152px;'><label style='font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666; '  >$text0_uoppp</label></div></div>      
                
                <div style="width: 100%; border-top-style: solid; border-top-width: 1px;margin-top:10px;padding-top:12px; border-color: #CCCCCC">
              
			
  
    <label onclick="window.location ='$url_comm';"
        
             class="ind_salvar_004 ol_bottom_on_silver">&nbsp;$cancelar_text&nbsp;</label></br>
    <div style="height: 20px"></div></div></div>
			</div>  <!-- #center --> 
</div> 
  
html;
                     
   	
   }else{
        ini_set ("max_execution_time", 1000); // uma hora
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
                        	
                   	
   echo    <<<html
   
  <script src="/js/jquery.min.js" type="text/javascript"></script>
 <script type="text/javascript" src="/static/jquery1.5.2jquery.min.js"></script>
<script src="/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
    <script src="/js/jquery.Jcrop.js" type="text/javascript"></script>
  
    <link rel="stylesheet" href="/css/jquery.Jcrop.css" type="text/css" />
    <script type="text/javascript">
    jQuery(function($){
    	var jcrop_api, boundx, boundy;
        
        $('#target_0993kknnnd').Jcrop({
        	 setSelect: [0, 0, 250, 150],
             minSize: [250, 150],
              onChange: updatePreview,
          onSelect: updatePreview
          
        },function(){
          // Use the API to get the real image size
          var bounds = this.getBounds();
          boundx = bounds[0];
          boundy = bounds[1];
          // Store the API in the jcrop_api variable
          jcrop_api = this;
        });
                
        

  
    
      function updatePreview(c)
      {
        if (parseInt(c.w) > 0)
        {
          var rx = 250 / c.w;
          var ry = 150/ c.h;

          $('#preview').css({
            width: Math.round(ry * boundx) + 'px',
            height: Math.round(rx * boundy) + 'px',
            marginLeft: '-' + Math.round(rx * c.x) + 'px',
            marginTop: '-' + Math.round(ry * c.y) + 'px'
          });
                $('#x').val(c.x);
				$('#y').val(c.y);
				$('#w').val(c.w);
				$('#h').val(c.h);
        }
      };

  
    });
    function send_xyCrop()
			{
				
				var x_1 = $('#x').val();
				var y_1 = $('#y').val();
				var h_1 = $('#h').val();
				var w_1 = $('#w').val();
				var name_foto = $('#name_foto').val();
				var cod_comm = $('#nam_cod_3673').val();				
				
				$.post('/crop_pp_promoter_c.php',{x:x_1,w:w_1,h:h_1,y:y_1,name:name_foto,cod:cod_comm},function(){
                
             $('#popup_comp_003993').hide(); $("#fund_global_edit347473").hide();
             $('#_o92IMG_0001').attr("src","/cropImg.php?arquivo=img_promoter/"+name_foto+"&largura=250&altura=150"); 
             $('#_o92IMG_0002').attr("src","/cropImg.php?arquivo=img_promoter/"+name_foto+"&largura=250&altura=150");
             $('#_o92IMG_0003').attr("src","/cropImg.php?arquivo=img_promoter/"+name_foto+"&largura=250&altura=150");
            // $('#_o92IMG_0004').attr("src","/cropImg.php?arquivo=img_promoter/"+name_foto+"&largura=153&altura=98");
            $("#_2npv56").html(' <label style=" width:17px;height:17px;background-image:url("/img_communities/CSY2V5z3AKJ.png");background-repeat:no-repeat;background-position: -90px -342px; position: absolute; z-index: 100; cursor: pointer; right: 0px; top: 0px;" ><form id="form_new_img_us2" method="post"  enctype="multipart/form-data" action="/up_load_imagem_promoter_comm2.php"><input id="imagemN2" name="imagemN2"  type="file"  class="foto"  style="position: absolute; width: 17px; height: 17px"  /></form></label><img id="_o92IMG_0004" src="/cropImg.php?arquivo=img_promoter/'+name_foto+'&largura=153&altura=98" />')
             $("#o_bbag617JHB").val(""+name_foto+"");$("#_lo86326VGF_11l").html(""); $("#fund_global_edit347473").hide();
             
             
                });
			};
  </script>

<div id="popup_comp_003993"  >
    
	<div id="pop_ueu74774" style="margin: 6% auto;height: auto; width:520px;"  ><div class="estilodeboraesombra2" 
            style="background: #FFFFFF; height: auto; width:520px; position: absolute; margin: 0 auto; z-index: 500; ">
   <div 
        class="menu_comp user_foto_borda_superior" 
        
            
            
            style="border-style: none none solid none; border-color: #CCCCCC; height: 50px; width: 100%; background-color: #EFEFEF; border-bottom-width: 1px; position: relative;"> <img class="close_002" onclick="$('#popup_comp_003993').hide();;" src="/imagens_rsrc/suuw83hjdjjdd.png" 
           style="position: absolute; top: 10px;  height: 21px; right: 10px;"    />
       <label ><label class="urjjdbbfjjd" 
                style="font-family: arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; font-style: normal; font-variant: normal; color: #666666;  position: absolute; top: 16px; left: 10px;">$foto_text</label></label></div><br /> 
                
<div  style="position: relative; width: 100%; height:470px; padding: 10px">
    <div id="_lloKJHG627_BB" 
        
        style="position: relative; width: 450px; height:255px;overflow:auto; margin-left: 20px;">
    <img id="target_0993kknnnd" src="/img_promoter_tmp/$nome_foto" 
            style="position: relative;"/></div>
    <div style="border: 2px solid #C0C0C0; position: relative; width:250px; max-height:150px; overflow: hidden; margin-top: 40px; margin-left: 20px;">
    <img src="/img_promoter_tmp/$nome_foto" style="position: relative;" id="preview" alt="Preview" class="jcrop-preview"/></div></div>      
                
                <div style="width: 100%; border-top-style: solid; border-top-width: 1px;margin-top:10px;padding-top:12px; border-color: #CCCCCC">
              
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input type="hidden" id="name_foto" name="name_foto" value="$nome_foto" />
			<input type="hidden" id="nam_cod_3673" name="nam_cod_3673" value="$cod_comm" />
		<label onclick="send_xyCrop();" class="ind_salvar_003 ol_bottom_on_blue2">&nbsp;$recortar_text&nbsp;</label>
  
    <label onclick="window.location ='$url_comm';"
        
             class="ind_salvar_004 ol_bottom_on_silver">&nbsp;$cancelar_text&nbsp;</label></br>
    <div style="height: 20px"></div></div></div>
			</div>  <!-- #center --> 
</div> 
 
  

html;
  

   
                             
                            
                        }  
                }
   }
        }
};
?>
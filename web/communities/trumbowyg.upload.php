<?php
 require("check_func_db.php");
   
   if (login_chekout()==true){
/* ===========================================================
 * trumbowyg.upload.php
 * Upload plugin for Trumbowyg
 * http://alex-d.github.com/Trumbowyg
 * ===========================================================
 * Author : Alexandre Demode (Alex-D)
 *          Twitter : @AlexandreDemode
 *          Website : alex-d.fr
 * ===========================================================
 * /!\ This file was make just for tests. Do not use it in
 *     production because it is not secure.
 */



/**
 * Upload directory
 */
   //gera ID para imagens
    function getSerial( $cod = null ){
    //padrão 02ad-3af4-2c52-92a2-14d717
    $a = hash( 'crc32' , (uniqid(rand(), true)) );
    $b = hash( 'crc32' , sprintf( '%s%s' , ( $cod ) , ( $a ) ) );
    $c = sscanf( sprintf( '%s%s' , $a , $b ) , '%4s%4s%4s%4s' );
    $d = 1;

    for ( $i = 0 ; $i < 4 ; $i++ )
        for ( $j = 0 ; $j < 4 ; $d += pow( ord( $c[ $i ]{ $j } ) , $i ) , $j++ );

    $c[ 4 ] = $d;

    return vsprintf( '%s-%s-%s-%s-%05x' , $c );
}
//gera ID
define("UPLOADDIR", "ask_forum_img/");
$max_image_x = 1024;
$max_image_y = 1024;


// Detect if it is an AJAX request
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $file = array_shift($_FILES);
    
     ini_set ("max_execution_time", 600); // 10 minutos
      require_once "functionsUploadC.php";
  if(verifica_image($file))
                {
                        $tamanho = getimagesize($file["tmp_name"]);
                        $dimensiona = verifica_dimensao_image($file, $max_image_x, $max_image_y);
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
                        
                        $nome_foto  = CCUSERIDI."_".((getSerial(time())) . "." . verifica_extensao_image($file));// nome único para foto
                        $extensao = strtolower(verifica_extensao_image($file));
                        $endFoto = UPLOADDIR . $nome_foto;
                        if(reduz_imagem($file['tmp_name'], $max_image_x, $max_image_y, $endFoto, $extensao))
                        {
                        $endFoto_1 = "/".$endFoto;
                               $data = array(
            'success' => true,
            'file'    => $endFoto_1,
        );
                        }else {
        $error = true;
        $data = array(
            'message' => 'uploadError',
        );
    } 
                         
                }else {
        $error = true;
        $data = array(
            'message' => 'uploadError',
        );
    } 
      
      
      
      
      

} else {
    $data = array(
        'message' => 'uploadNotAjax',
        'formData' => $_POST
    );
}


   };
echo json_encode($data);
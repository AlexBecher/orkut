<?php 
// include da classe m2brimagem
include('WideImage/m2brimagem.class.php');
// instancia objeto m2brimagem
$oImg = new m2brimagem();
// define diretórios
$diretorio = 'bg_community/';  //diretório onde esão as imagens
$diretorio_large = 'bg_community/';  //diretório onde esão as imagens
$diretorio_thumb = 'bg_community_thumbs/';  //diretório onde esão as imagens
// varre diretório com as imagens originais

	$arquivo=$nome_foto;
		// "carrega" arquivo
		$oImg->carrega($diretorio.$arquivo);
		$valida = $oImg->valida();
		if ($valida == 'OK') {
			// redimensiona
			$oImg->redimensiona(250,96,'crop');
			// salva no diretório das miniaturas
			$oImg->grava($diretorio_thumb.$arquivo,100); 
			
				
		
			
		}; 
	
	


?>
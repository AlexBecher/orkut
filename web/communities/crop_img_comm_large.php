<?php 
// include da classe m2brimagem
include('WideImage/m2brimagem.class.php');
// instancia objeto m2brimagem
$oImg = new m2brimagem();
// define diret�rios
$diretorio = 'bg_community_large/';
$dir_thumbs = 'bg_community/';
// varre diret�rio com as imagens originais

	$arquivo=$nome_foto;
		// "carrega" arquivo
		$oImg->carrega($diretorio.$arquivo);
		$valida = $oImg->valida();
		if ($valida == 'OK') {
			// redimensiona
			$oImg->redimensiona(175,273,'crop');
			// salva no diret�rio das miniaturas
			$oImg->grava($dir_thumbs.$arquivo,100); 
			
		} 
	
	


?>
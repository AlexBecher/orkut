<?php 
include_once ("sanitizeSql.php");
require("check_func_db.php");

   if (login_chekout()==true){
   sec_session_start();

//envia e-mail através da seleção da lista de amigos durante e após criação
        function ocultaTexto($texto,$limite) {
if (strlen($texto) <= $limite){

return $texto ;

}

    $partes = str_split($texto, $limite);
    $saida  = <<<HTML
<text>%s..</text>

HTML;
    printf($saida, array_shift($partes), implode($partes));
}
if( isset( $_GET['cod'] ) ){
$aux_id=Sanitize::filter($_GET['id']);
$a = explode(',' , $_GET['cod']);

foreach( $a as $value ){
//pega dados do jogo
//ATUALIZA IMAGENS DOS GAMES 
$COD_GAME=$imganide9239;
$queryGAMES_IMG=mysql_query("SELECT img1,img2,img3,img4,info,name,cod,cat,type FROM info_games where cod='".Sanitize::filter($aux_id)."' limit 1 ")or die(mysql_error());
$row_GAMESIMG=mysql_fetch_object($queryGAMES_IMG);
//TAMANHO DAS IMAGENS
//img1 tamanho 200 x 100
//img2 tamanho 250 x 150
//img3 tamanho 270 x 180
//img4 tamanho 780 x 300
$IMG_game = $row_GAMESIMG->img1;
$info = $row_GAMESIMG->info;
$name_game = $row_GAMESIMG->name;
$cod_game = $row_GAMESIMG->cod;
$categoria_game = $row_GAMESIMG->cat;
$type_game = $row_GAMESIMG->type;
$name_invite =ocultaTexto(USERNAME_NAME,10);
//monta HTML
 $url_102="https://orkuti.net";
$html_div = <<<html

 <a href="$url_102/games/play/$aux_id"><div 
    
      
     
     style="padding: 0px; position: relative; width:100%; height: auto; background-color: #FDFDFD;  margin-top: 5px; margin-bottom: 5px;"><div style="position: relative;  float: left; width: 70px; height: 50px; margin-right: 10px"><img style="position: relative; width: 70px; height: 50px;" src="/cropImg.php?arquivo=games/{$IMG_game}&largura=70&altura=50"></div>
    <div style="position: relative; width: 170px; height: 50px; float: left; top: 0px; left: 0px; padding-top: 5px;">
        <span style="font-family: arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; font-style: normal; font-variant: normal; color: #666666"><b>{$name_invite}</b> convidou você para jogar {$name_game}</span></div></div></a>
html;
//ATUALIZA IMAGENS DOS GAMES  
//INCORPORAR ESTAS LINHA ONDE SERÁ REALIZADA A NOTIFICAÇÃO
//CODIGOS DE NOTIFICAÇÃO
/* 1 -> VIBE
 * 2 -> DEPOIMENTOS
 * 3 -> EVENTOS
 * 4 -> FOTOS
 * 5 -> VIDEOS
 * 6 -> COMUNIDADES
 * 7 -> AMIGOS
 * //CommandNoti -> IdOrders  
 * DEPOIMENTOS
 * EVENTOS
 * VIBES
 * FOTOS
 * COMUNIDADES
 * OUTROS AUX -> DIZ O QUE É ESTA NOTIFICAÇÃO
 *///CODIGOS DE NOTIFICAÇÃO
 //define as variáveis para notificações
//$USERID_NOTIF //USUÁRIO NOTIFICADO
//$USERID_ORIG //USUÁRIO QUE NOTIFICOU
 //$COD_NOTI //CODIGOS DE NOTIFICAÇÃO
//$COMMAND_NOTI //IdOrder da notificação
//define as variáveis para notificações
 $USERID_NOTIF = "$value";//USUÁRIO NOTIFICADO
 $USERID_ORIG = USERID_ID;//USUÁRIO QUE NOTIFICOU
 $COD_NOTI = $html_div;//CODIGOS DE NOTIFICAÇÃO jogos
 $COMMAND_NOTI=$aux_id;//game
 $tudsjsdmsds=time();//TIMESTAMP
 $nooso="no";//NO READ
 $AUX_COD="66";//QUE TIPO DE NOTIFICAÇÃO (COMENTÁRIO->1, ESCREVEU->2, POSTOU->3, GOSTOU->4,ADICIONOU ->5)
 mysql_query("INSERT INTO notificacao_user (UserId,UserIdOrig,IdOrder,CodNoti,CommandNoti,timestamp,readNoti,AUX) VALUES ( '$USERID_NOTIF','".USERID_ID."','null','$COD_NOTI','$COMMAND_NOTI','$tudsjsdmsds','$nooso','$AUX_COD')");



}
//mysql_query(" INSERT INTO envia_email_community_list (UserId,IdCommunity,pagina,IdOrder) VALUES ('".USERID_ID."','$aux_id','1','null')");

}; 
   };

?>

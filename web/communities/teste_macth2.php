<?php 


//verifica quotes
/*
 * 
 * $str = 'before-str-after';
if (preg_match('/before-(.*?)-after/', $str, $match) == 1) {
    echo $match[1];
}
 *  olhar aqui https://stackoverflow.com/questions/5696412/how-to-get-a-substring-between-two-strings-in-php
 * 
 */

$fullstring = '<p style="border-width: 15px 15px 15px 15px;border-style: dashed dotted;background:#00BFFF;background-image:url(https://3.bp.blogspot.com/-_ac2chudHgc/WqU1CX-lsoI/AAAAAAAAVXA/HL_OXeDRX8oS0HwqoNuksjI60fs5wn8kQCLcBGAs/s1600/barrinhar2bar.gif);width:400px;margin: auto;padding:0px;text-align:center;-moz-border-radius:7px;-webkit-border-radius:7px; border-radius:7px;max-width:400px;"><strong><br><embed src="https://www.youtube-nocookie.com/v/3l68p2tcskg?&amp;=1" fs="1&amp;hl=pt_BR&amp;" =1"="" style="width:400px;height:250px"><a href="https://orkuti.net/communities/66" "=""><img src="https://lh3.ggpht.com/-KYgdv7Bt18o/Vb66LxizXDI/AAAAAAAASrA/dbj6DA3T0-c/s400-Ic42/image.png2222.gif"><img src="https://lh3.ggpht.com/-SPFtscDQX44/VfBehwQpp0I/AAAAAAAATBw/QeDla7rYaH0/s400-Ic42/a..gif"><img src="https://lh3.ggpht.com/-SPFtscDQX44/VfBehwQpp0I/AAAAAAAATBw/QeDla7rYaH0/s400-Ic42/a..gif"><img src="https://lh3.ggpht.com/-aFkTYbQxOOs/VejfzgPzWlI/AAAAAAAAS3o/A2xiWouUDXU/s400-Ic42/20141121-eu-te-amo.jpeg"><img src="https://lh3.ggpht.com/-SPFtscDQX44/VfBehwQpp0I/AAAAAAAATBw/QeDla7rYaH0/s400-Ic42/a..gif"><img src="https://lh3.ggpht.com/-SPFtscDQX44/VfBehwQpp0I/AAAAAAAATBw/QeDla7rYaH0/s400-Ic42/a..gif"><img src="https://lh3.ggpht.com/-SPFtscDQX44/VfBehwQpp0I/AAAAAAAATBw/QeDla7rYaH0/s400-Ic42/a..gif"><img src="https://lh3.ggpht.com/-SPFtscDQX44/VfBehwQpp0I/AAAAAAAATBw/QeDla7rYaH0/s400-Ic42/a..gif"><img src="https://lh3.ggpht.com/-SPFtscDQX44/VfBehwQpp0I/AAAAAAAATBw/QeDla7rYaH0/s400-Ic42/a..gif"><img src="https://lh3.ggpht.com/-SPFtscDQX44/VfBehwQpp0I/AAAAAAAATBw/QeDla7rYaH0/s400-Ic42/a..gif"><img src="https://lh3.ggpht.com/-KYgdv7Bt18o/Vb66LxizXDI/AAAAAAAASrA/dbj6DA3T0-c/s400-Ic42/image.png2222.gif"><img src="https://lh3.ggpht.com/-O5wAPlXjefo/VfHLfTy_rhI/AAAAAAAATIo/fq3xXqT-Zf8/s400-Ic42/gatos%252520fofos.jpg"><img src="https://lh3.ggpht.com/-KYgdv7Bt18o/Vb66LxizXDI/AAAAAAAASrA/dbj6DA3T0-c/s400-Ic42/image.png2222.gif"></a></strong></p>';
$fullstring2 = '<b></b>hhdggd d3883rirker rkekkr<a>';
//$parsed = get_string_between($fullstring, '[quote]', '[/quote]');
// load HTML into a new DOMDocument
$doc = DOMDocument::loadHTML($fullstring);
//$c =0;
foreach($doc->getElementsByTagName('p') as $image){
    if ($c>0) continue;
    foreach(array('max-width', 'style') as $attribute_to_remove){
     //   echo $attribute_to_remove;
       
        if($attribute_to_remove=='style'){
            if(!$image->hasAttribute($attribute_to_remove)){
               // $image->setAttribute($attribute_to_remove,'auto');
                
              
                
            }}
            if($attribute_to_remove=='max-width'){
                if(!$image->hasAttribute($attribute_to_remove)){
                    $image->setAttribute($attribute_to_remove,'100%');
                    
                }}
                //$c = $c+1;
    }
}
echo $doc->saveHTML();
//echo  str_replace('/max-width:[\"\'][0-9]+[\"\']/', 'max-width:"auto"',$fullstring);
//$crewinfo = json_decode(getQuotes($fullstring2), true);


function getUrls($string)
{
    $regex = '/https?\:\/\/[^\" ]+/i';
    preg_match_all($regex, $string, $matches);
    return ($matches[0]);
}
$urls = getUrls($fullstring);
//echo $urls[0];
//echo  getQuotes($fullstring);
function getQuotes($string){
    $call_back = array('texto' =>'','autor' =>'','status'=> 'T','all_text'=>'');
    $frase_all = "";
    $nomeAutor = "";
    $frase = "";
    $start_quote = "[quote=]";
    $matches = strstr($string,"[quote=");
    echo  array_splice( ( explode( '/', $matches) ), 1 )[1];
    $matchesw = array_splice( ( explode( '/', $matches) ), 1 );
    if ($matchesw && $string) {
         
        
        $stringN = explode("/", $matchesw[0], 2); // separa tudo que estiver depois do sinal de =
     
        
        $string2 = explode("/", $stringN[1], 2); // depois do sinal de = separa tudo que tiver antes de ]
        
        $stringN3 = explode("/whatsapp/", $matchesw[1], 2);//pega tudo deppois do [/quote]
        $a_ =  strpos($stringN3[0],"/");
        $count_l += strlen("/whatsapp/");
        $frase_all = substr($stringN3[0],$count_l);
    
        
        //echo $string3[0];
        
        $nomeAutor =  $string2[0];
        
         $start_quote ="[quote=$nomeAutor]";
       
    
      
         $frase =  get_string_between($string, $start_quote, '[/quote]');
         //transforma em array
         $call_back['all_text'] =$frase_all; 
         $call_back['status'] ='M'; 
         $call_back['texto'] = strip_tags($frase);
         $call_back['autor'] = strip_tags($nomeAutor);
         return  json_encode($call_back);
        
    }else{
        $call_back['all_text'] =$string; 
        $call_back['status'] ='T'; 
        $call_back['texto'] = null;
        $call_back['autor'] = null;
        return  json_encode($call_back);
    }
    
    
}
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

?>
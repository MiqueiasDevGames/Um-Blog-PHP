<?php
$myArray = array(
        'title' => $_GET['titulo'],
        'descricao' => $_GET['descricao'],
        'imagem' => $_GET['img'],
        'link' => $_GET['link'],
        'autor' => $_GET['autor'],
        );
        
        
$dados_json = json_encode($myArray);

$urlAmigavel = create_link($_GET['titulo']);

if(!file_exists('posts/'.$urlAmigavel.'.json')){

$fp = fopen('posts/'.$urlAmigavel.'.json', "x");

$escreve = fwrite($fp, $dados_json);

fclose($fp);

echo json_encode('success');

}
else{

echo json_encode('exists');

}

function create_link($title) {
  $title = strtolower($title);
  $title = str_replace('&','and', $title);
  $title = str_replace(';', '-', $title);
  $title = str_replace(':', '-', $title);
  $title = str_replace(',', '-', $title);
  $title = str_replace('–', '-', $title);
  $title = str_replace('/', '-', $title);
  $title = str_replace(' - ', '-', $title);
  $title = str_replace('"', '-', $title);
  $title = str_replace(' ', '-', $title);
  
  return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$title);

  
 }

?>
<?php
$string = $_GET['busca'];

chdir('posts/');
$arquivo = glob('*.json');

// Por cada ficheiro
foreach ($arquivo as $file) {

    // Ver se encontramos a string para fazer algo
    if (strpos($file, $string) !== false) {  
        
        
        $link = str_replace('.json', '', $file);
        
        echo '<a href="http://livros.mywebcommunity.org/book/'.$link.'">'.$link.'</a> <br>';
    }
}

?>
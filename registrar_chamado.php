<?php

$titulo = str_replace("#", "-", $_POST['titulo']);
$categoria = str_replace("#", "-", $_POST['categoria']);
$descricao = str_replace("#", "-", $_POST['descricao']);

// abrir arquivo para armazenamento
$arquivo = fopen("bd.txt", "a");


// texto para armazenameto
$text = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// escrevendo o texto
fwrite($arquivo, $text);

// Fechando o arquivo com as informações
fclose($arquivo);

// redirecionar para abrir chamado
header('Location: abrir_chamado.php');

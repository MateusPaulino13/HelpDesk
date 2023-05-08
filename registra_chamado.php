<?php

session_start();
//Montando o texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
//Abrindo o arquivo
$arquivo = fopen('bd.txt', 'a');

//Escrevendo texto no arquivo
fwrite($arquivo, $texto);

//Fechando o arquivo
fclose($arquivo);

//echo $texto;
header('Location: abrir_chamado.php');

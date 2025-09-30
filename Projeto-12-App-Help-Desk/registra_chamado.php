<?php

session_start();

// Trabalhando na montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

//implode('#', $_POST);

$texto = $_SESSION['id']. '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// Abrindo o arquivo
$arquivo = fopen('../../App-Help-Desk/arquivo.hd', 'a');

// Escrevendo o texto
fwrite($arquivo, $texto);

// Fechando o texto

fclose($arquivo);

// echo $texto;
header('Location: abrir_chamado.php');
?>

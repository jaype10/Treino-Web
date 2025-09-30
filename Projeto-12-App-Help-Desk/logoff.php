<?php
session_start();

/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Remover índices do array de sessão
unset($_SESSION['x']); //para remover o índice se apenas existir

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Destroi a variável de sessão 
session_destroy(); 
// Forçar um redirecionamento
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/
session_destroy(); 
header('Location: index.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-POO</title>
</head>
<body>
    <h1>Exercício-POO</h1>
    <hr>
<h1>Livro</h1>
<?php
require_once "src/Livro.php";

$livro = new Livro;


$livro->setTitulo("Senhor dos anéis");
$livro->setAutor("j.r.r Tolkien");
$livro->setPaginas(1200);

?>
<h2><?=$livro->getTitulo()?></h2>
<h3><?=$livro->getAutor()?></h3>
<h3><?=$livro->getPaginas()?></h3>

</body>
</html>

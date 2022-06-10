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
require_once "src/Tecnico.php";
require_once "src/Didatico.php";
require_once "src/Programacao.php";


$tecnico = new Tecnico;
$tecnico->setFormato(['tecnico']);
$tecnico->setPaginas(1200);
$tecnico->setAutor("J.R.R Tolkien");
$tecnico->setTitulo("O hobbit");

 $didatico = new Didatico;
 $programacao = new Programacao;




//$didatico->setNivel(['básico','intermediário','avançado']);
?>
<pre><?=var_dump($tecnico,)?></pre>

<h3><?=$tecnico->getAutor()?></h3>
<h3><?=$tecnico->getFormato()?></h3>
<h3><?=$tecnico->getPaginas()?></h3>
<h3><?=$tecnico->getTitulo()?></h3>

</body>
</html>

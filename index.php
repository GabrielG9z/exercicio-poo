<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-POO-3</title>
</head>
<body>
    <h1>Exercício-POO-3</h1>
    <hr>
<h1>Livro</h1>
<?php
require_once "src/Tecnico.php";
require_once "src/Didatico.php";
require_once "src/Programacao.php";


$tecnico = new Tecnico;
$didatico = new Didatico;
$programacao = new Programacao;



$didatico->setTitulo("Html5 e css3");
$didatico->setAutor("Pedro álvares cabral");
$didatico->setDisciplina('Código');

$programacao->setTitulo("python");
$programacao->setAutor("Thiago dos Santos");
$programacao->setPaginas(350);





//$didatico->setNivel(['básico','intermediário','avançado']);
?>



<hr>
<p>Titulo: <b><?=$didatico->formataTitulo($didatico->getTitulo())?></b><p>
<h3>Autor:<?=$didatico->getAutor()?></h3>
<h3>disciplina: <?=$didatico->getDisciplina()?></h3>


<hr>

<p >Titulo:<?=$programacao->formataTitulo($programacao->getTitulo())?></p>
<h3>Autor: <?=$programacao->getAutor()?></h3>
<h3>Qtd.Páginas: <?=$programacao->getPaginas()?></h3>

</body>
</html>

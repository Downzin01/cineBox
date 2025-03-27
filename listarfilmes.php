<?php
require './classes/Filmes.php';
require './classes/Generos.php';

$titulo = '';
include './includes/header.php';

$filme = new Filmes();
$dadosFilmes = $filme->exibirListaFilmes();

$genero = new Generos();
$dadosGeneros = $genero->consultarListaGeneros();

include './includes/filmes_filtro.php';
include './includes/footer.php';
<?php
    require './classes/Filmes.php';
    require './classes/Generos.php';

    $titulo = 'CineBox - Início';
    include './includes/header.php';
    include './includes/banner.php';
    
    $filmes = new Filmes();
    $dadosFilmes = $filmes->exibirListaFilmes(8);

    $genero = new Generos();
    $dadosGeneros = $genero->consultarListaGeneros();

    include './includes/filme_lista.php';

    include './includes/footer.php';
<?php
    require './classes/Filmes.php';
    require './classes/Generos.php';

    $titulo = 'CineBox - Detalhes do Filme';
    include './includes/header.php';

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $filmes = new Filmes();
        $generos = new Generos();
        
        $dados = $filmes->consultarFilmeByIdFilme($_GET['id']);
        $dadosGeneros = $generos->consultarGeneroByIdFilme($_GET['id']);

        include './includes/filme_detalhe.php';
    } else {
        header('location:index.php');
    }

    include './includes/footer.php';
?>
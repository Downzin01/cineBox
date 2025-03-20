<?php
    $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
    $user = 'root';
    $password = '';
    
    $banco = new PDO($dsn, $user, $password);
    $consulta = "SELECT * FROM tb_filmes";

    $dados = $banco->query($consulta)->fetchAll();
?>

<?php foreach ($dados as $filme) : ?>
    <div class="row desc-filme">
        <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
            <img src="./assets/img/poster/<?= $filme['poster']; ?>" alt="" class="desc-foto">
        </div>

        <div class="col-12 col-lg-8 col-sm-12 col-md-12 mt-3">
            <h3 class="title"><?= $filme['nome']; ?></h3>
            <p class="desc-descricao"><?= $filme['descricao']; ?></p>
        </div>

        <div class="col-12 col-lg-2 col-sm-12 col-md-12 desc-btn p-3">
            <a href="#" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Editar
            </a>
            <a href="#" class="btn btn-danger">
                <i class="bi bi-trash-fill"></i>
                Excluir
            </a>
        </div>
    </div>
<?php endforeach; ?>
<div class="col-lg-<?= isset($qntd) ? $qntd : 3 ?> col-md-6 col-sm-12">
    <a href="./includes/filmes_detalhe.php?id_filme=<?= $value['id'] ?>">
        <figure>
            <img src="./assets/img/poster/<?= $value['poster'] ?>" alt="Poster Avatar o caminho da água"
                class="foto-produto">
            <figcaption>
                <h4><?= $value['nome'] ?></h4>
                <span class="preco">R$ <?= number_format($value['valor_ingresso'], 2, ',', '.') ?></span>
                <p class="descricao"><?= $value['descricao'] ?></p>
            </figcaption>
            <span class="genero">
                <?php foreach ($generosFilmes as $value2) { ?>
            
                    <label style="background-color: #<?= $value2['cor'] ?>;"><?= $value2['nome'] ?></label>

                <?php } ?>
            </span>
        </figure>
    </a>
</div>

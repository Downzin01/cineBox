<div class="col col-3">
    <figure>
        <img src="./assets/img/poster/<?= $value['poster'] ?>" alt="Poster Avatar o caminho da água"
            class="foto-produto">
        <figcaption>
            <h4><?= $value['nome'] ?></h4>
            <span class="preco">R$ <?= number_format($value['valor_ingresso'], 2, ',', '.') ?></span>
            <p class="descricao"><?= $value['descricao'] ?></p>
        </figcaption>
        <span class="genero">
            <label style="background-color: #070373;">Fantasia</label>
            <label style="background-color: #580259;">Drama</label>
            <label style="background-color: #D966BA;">Ficção</label>
        </span>
    </figure>
</div>
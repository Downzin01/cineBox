<?php 
    class Generos {
        public $conexaoBanco;

        public function __construct() {
            $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
            $user = 'root';
            $password = '';

            $this->conexaoBanco = new PDO($dsn, $user, $password);

        }
        public function consultarListaGeneros() {
            
            $scriptSQL = 'SELECT * FROM tb_generos';

            return $this->conexaoBanco->query($scriptSQL)->fetchAll();
        }


        public function consultarGeneroByIdFilme($id_filme) {
            $scriptSQL = "SELECT * FROM tb_generos INNER JOIN tb_filme_genero ON tb_filme_genero.genero_id = tb_generos.id WHERE tb_filme_genero.filme_id = {$id_filme}";

            return $this->conexaoBanco->query($scriptSQL)->fetchAll();
        }
    }
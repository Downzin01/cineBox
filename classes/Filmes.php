<?php
    class Filmes {
        public $conexaoBanco;

        public function __construct() {
            $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
            $user = 'root';
            $password = '';

            $this->conexaoBanco = new PDO($dsn, $user, $password);
        }
        public function exibirListaFilmes($limite = '') {
            

            $auxScriptSQL = '';

            if (!empty($limite)) {
                $auxScriptSQL = " ORDER BY RAND() LIMIT {$limite}";
            }

            $scriptSQL = 'SELECT * FROM tb_filmes' . $auxScriptSQL;

            return $this->conexaoBanco->query($scriptSQL)->fetchAll();
        }



        public function consultarFilmeByIdFilme($id_filme) {
            $scriptSQL = "SELECT * FROM tb_filmes WHERE id = {$id_filme}";

            return $this->conexaoBanco->query($scriptSQL)->fetch();
        }
    }
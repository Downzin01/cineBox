<?php 

class Filmes {
    public function exibirListaFilmes($limite = '') {
        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $auxScriptSQL = '';

        $db = new PDO($dsn, $user, $password);

        if (!empty($limite)) {
            $auxScriptSQL = " ORDER BY RAND() LIMIT {$limite}";
        }

        $scriptSQL = 'SELECT * FROM tb_filmes' . $auxScriptSQL;

        return $db->query($scriptSQL)->fetchAll();
    }
}
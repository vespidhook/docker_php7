<h1>Lista de Usuários</h1>

<?php
    $pdo = new PDO('mysql:dbname=meudb;host=db', 'bruno', '1234');

    $sql = $pdo->query("SELECT * FROM usuarios");

    if($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $usuario) {
            echo $usuario['nome'] . '<br>';
        }
    }
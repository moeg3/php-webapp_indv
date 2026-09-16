<?php
    // DB接続
    $dsn = 'mysql:dbname=my_database;host=db;charset=utf8mb4';
    $user = 'root';
    $password = getenv('MYSQL_ROOT_PASSWORD') ?: 'root';

    //PDOとはPHP Data Objectsの略称で、データベースへの接続機能を提供するクラスライブラリ
    $pdo = new PDO(
        $dsn,
        $user,
        $password,
        [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]
    );
?>
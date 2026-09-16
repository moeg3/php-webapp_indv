<?php
require_once __DIR__ . '/m6_db_connect.php';

// userテーブルの作成
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name CHAR(32) NOT NULL,
    password TEXT NOT NULL
    )";

$pdo->exec($sql);
echo 'users table created';

// recordsテーブルの作成
$sql = "CREATE TABLE IF NOT EXISTS records
    (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id,
    date DATE,
    amount INT,
    store_name CHAR(32),
    memo TEXT NOT NULL,
    image_path TEXT NOT NULL,
    satisfaction TEXT NOT NULL
    )";
$stmt = $pdo->query($sql);
?>
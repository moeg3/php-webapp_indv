<?php
    require_once '/var/www/includes/m6_db_connect.php';
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userName = trim($_POST['user_name'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if($userName === '') {
            $errors['userName'] = 'ユーザーネームを入力してください<br />';
            echo $errors['userName'];
        }
        if($password === '') {
            $errors['password'] = 'パスワードを入力してください<br />';
            echo $errors['password'];
        }
        // データベースに接続
        if ($errors === []) {
            // パスワードの暗号化
            $psw_hashed = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (user_name, password)
                    VALUES (:userName, :psw_hashed)";   //プレースホルダー
            $stmt = $pdo->prepare($sql);

            // プレースホルダーに変数を充てる
            $stmt->bindParam(':userName', $userName, PDO::PARAM_STR);
            $stmt->bindParam(':psw_hashed', $psw_hashed, PDO::PARAM_STR);

            // 実行
            $stmt->execute();
            echo 'テーブルにユーザー情報を追加しました！';
        }
    }
?>

<!-- ユーザー登録処理画面 -->
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>そもそも家計簿</title>
        <link rel="stylesheet" href="m6_style.css">
    </head>
    <body>
        <h1>初回ユーザー登録</h1>

        <form action="" method="post">
            <p>ユーザーネーム</p>
            <input name="user_name" type="text">
            <p>パスワード</p>
            <input name="password" type="password">

            <br />
            <input name="submit" type="submit" value="登録">
        </form>
    </body>
</html>
<?php

$id = $_GET['id'];

// 接続処理
require_once('funcs.php');
$pdo = db_conn();

// 対応するidのデータを取得 
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// 処理後
if ($status === false) {
    sql_error($stmt);
} else {
    $result = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
        h1{
            font-size: 24px;
            color: white;
        }

    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <h1>ブックマークアプリ</h1>
            </div>
        </nav>
    </header>

    <form method="post" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>書籍の新規登録</legend>
                <label>書籍名：<input type="text" name="bookName" value="<?= h($result['bookName'])?>"></label><br>
                <label>書籍URL：<textArea name="bookURL" rows="1" cols="40"><?= h($result['bookURL'])?></textArea></label><br>
                <label>書籍コメント：<textArea name="bookComment" rows="4" cols="40"><?= h($result['bookComment'])?></textArea></label><br>
                <input type="hidden" name="id" value="<?= h($result['id'])?>">
                <div>
                    <input type="submit" value="更新">
                </div>
                
            </fieldset>
        </div>
    </form>

    <div class="wire_area">
        <button class="lead-wire" onclick="location.href='./select.php'">書籍一覧をみる</button>
    </div>

</body>

</html>
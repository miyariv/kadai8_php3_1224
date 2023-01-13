<?php
require_once('funcs.php');
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table;");
$status = $stmt->execute();

$view="";
if ($status==false) {
    sql_error($stmt);

}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    // stftの部分で、1行取得して、それをresultに配列として格納している。中身がなくなったら終了。
    $bookName = h($result['bookName']);
    $bookURL = h($result['bookURL']);
    $bookComment = h($result['bookComment']);
    $id = h($result['id']);

    $view .= "
        <tr>
            <td>{$result['id']}</td>
            <td>{$bookName}</td>
            <td>{$bookURL}</td>
            <td>{$bookComment}</td>
            <td>{$result['date']}</td>
            <td><a href='detail.php?id={$id}'> 編集 </td>
            <td><a href='delete.php?id={$id}'> 削除 </td>
        </tr>";
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ブックマークされた書籍一覧</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    div{
        padding: 10px;
        font-size: 16px;
    }
    h1{
        font-size: 24px;
        color: white;
    }

    table{
        border-collapse: collapse;
    }
    th,
    td {
        border: 1px solid #333;
        padding: 5px 10px;
    }
    thead,
    tfoot {
        background-color: #333;
        color: #fff;
    }
    th[scope="col"] {
        background-color: #696969;
        color: #fff;
    }
    th[scope="row"] {
        background-color: #d7d9f2;
    }

    </style>
</head>
<body id="main">

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
        <h1>ブックマークアプリ</h1>
    </div>
  </nav>
</header>

<div>
    <div class>
        <table>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">書籍名</th>
            <th scope="col">書籍URL</th>
            <th scope="col">書籍コメント</th>
            <th scope="col">登録日時</th>
            <th scope="col">編集</th>
            <th scope="col">削除</th>
        </tr>
        <?= $view ?>
        </table>
    </div>
    <div class="wire_area">
        <button class="lead-wire" onclick="location.href='./index.php'">書籍を追加登録する</button>
    </div>
</div>
</body>
</html>

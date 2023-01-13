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
        p.message{
            font-size: 16px;
        }
        button{
            margin: 0 10px;
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
    <div class="jumbotron">
        <p class="message">書籍が登録されました。</p>
    </div>
    <div class="wire_area">
        <button class="lead-wire" onclick="location.href='./index.php'">書籍を追加登録</button>
        <button class="lead-wire" onclick="location.href='./select.php'">書籍一覧をみる</button>
    </div>

    </body>

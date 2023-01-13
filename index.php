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

    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>書籍の新規登録</legend>
                <label>書籍名：<input type="text" name="bookName"></label><br>
                <label>書籍URL：<textArea name="bookURL" rows="1" cols="40"></textArea></label><br>
                <label>書籍コメント：<textArea name="bookComment" rows="4" cols="40"></textArea></label><br>
                <div>
                    <input type="submit" value="送信">
                </div>
                
            </fieldset>
        </div>
    </form>

    <div class="wire_area">
        <button class="lead-wire" onclick="location.href='./select.php'">書籍一覧をみる</button>
    </div>
</body>

</html>

<?php

//1. POSTデータ取得
$bookName = $_POST['bookName'];
$bookURL = $_POST['bookURL'];
$bookComment = $_POST['bookComment'];


//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();


//３．データ登録SQL作成

$stmt = $pdo->prepare("INSERT INTO
     gs_bm_table(id, bookName, bookURL, bookComment, date) 
     VALUES(NULL, :bookName, :bookURL, :bookComment, sysdate() ); ");

$stmt->bindValue(':bookName', $bookName, PDO::PARAM_STR);
$stmt->bindValue(':bookURL', $bookURL, PDO::PARAM_STR);
$stmt->bindValue(':bookComment', $bookComment, PDO::PARAM_STR);

$status = $stmt->execute();

if($status === false){
    sql_error($stmt);
}else{
    redirect('complete.php');
}
?>

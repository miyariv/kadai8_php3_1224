<?php

//1. POSTデータ取得
$bookName = $_POST['bookName'];
$bookURL = $_POST['bookURL'];
$bookComment = $_POST['bookComment'];
$id = $_POST['id'];


//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE gs_bm_table SET bookName = :bookName, bookURL = :bookURL, bookComment = :bookComment, date = sysdate() WHERE id = :id;');

$stmt->bindValue(':bookName', $bookName, PDO::PARAM_STR);
$stmt->bindValue(':bookURL', $bookURL, PDO::PARAM_STR);
$stmt->bindValue(':bookComment', $bookComment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
    sql_error($stmt);
}else{
    redirect('select.php');
}
?>

<?php

// DB接続します
require_once('funcs.php');
$pdo = db_conn();


// POSTデータ取得
$id = $_POST['id'];
$book_name = $_POST['book_name'];
$book_url = $_POST['book_url'];
$book_comment = $_POST['book_comment'];

// データ更新SQL作成
$stmt = $pdo->prepare("UPDATE gs_bookmark_table SET book_name = :book_name, book_url = :book_url, book_comment = :book_comment WHERE id = :id");
$stmt->bindValue(':book_name', $book_name, PDO::PARAM_STR);
$stmt->bindValue(':book_url', $book_url, PDO::PARAM_STR);
$stmt->bindValue(':book_comment', $book_comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:" . $error[2]);
} else {
    header('Location: select.php');
    exit;
}

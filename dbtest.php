<?php
$dns = "mysql:host=127.0.0.1; dbname=testdatabase;charset=utf8";
$dns_id = "phpuser";
$dns_pw = "phpuser";

try {
    // MySQLサーバへ接続
    $pdo = new PDO($dns, $dns_id, $dns_pw, array(PDO::ATTR_EMULATE_PREPARES => false));

    // 処理
    $stmt = $pdo->query('select * from OPPAI where size > 85');
    $stmt->execute();
    $rows = $stmt->fetchAll();
    print_r($rows);

} catch(PDOException $e){
    var_dump($e->getMessage());
}
// 切断
$pdo = null;


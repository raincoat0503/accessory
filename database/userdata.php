<?php 
$dsn = 'mysql:host=localhost;dbname=accessory;charset=utf8';
$user = 'raincoat';
$pass = 'makinokaito';

try{
    $dbh = new PDO($dsn,$user,$pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    // echo'接続成功';
    $sql = 'SELECT * FROM user';
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
}catch(PDOException $e){
    echo '接続失敗'.$e->getMessage();
    exit();
}; 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessory</title>
    <link rel="stylesheet" href="../../scss/style.css">
</head>

<body>
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
    
    <!-- header -->
    <?php include('../module/header.php'); ?>

    <!-- maincontent -->
    <div class="user">
    <?php foreach($result as $column); ?>
        <h2 class="user__name"><?php $name = $column['firstname'].' '.$column['lastname'].'さん'; echo($name); ?></h2>
        <div class="user__location">
        <p class="user__location"><?php echo $column['location'] ?></p>
        </div>
        <p><?php echo ('現在'.$column['point'].'ポイント所持しています') ?></p>
    </div>
    <div class="orderlog">
    </div>

    <!-- footer -->
    <?php include('../module/footer.php'); ?>

    <!-- script -->
    <?php include('../script.php'); ?>
    <?php include('../module/font.php'); ?>
</body>

</html>
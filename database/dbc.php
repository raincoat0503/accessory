<?php

//関数一つに一つの機能

//データベース接続
function dbConnect() {
    $dsn = 'mysql:host=localhost;dbname=accessory;charset=utf8';
    $user = 'raincoat';
    $pass = 'makinokaito';

    try {
        $dbh = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    } catch (PDOException $e) {
        echo '接続失敗' . $e->getMessage();
        exit();
    };
    return $dbh;
}
function getAllUser() {
    $dbh =dbConnect();
        $sql = 'SELECT * FROM user';
        $stmt = $dbh->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        $dbh = null;
}

$userData = getAllUser();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>userdata</h2>
    <table>
        <tr>
            <th>no</th>
            <th>mail</th>
            <th>fname</th>
            <th>lname</th>
            <th>location</th>
        </tr>
        <?php foreach ($userData as $column); ?>
        <tr>
            <td><?php echo $column['id'] ?></td>
            <td><?php echo $column['mail'] ?></td>
            <td><?php echo $column['firstname'] ?></td>
            <td><?php echo $column['lastname'] ?></td>
            <td><?php echo $column['location'] ?></td>
        </tr>
    </table>
</body>

</html>
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
    <!-- header -->
    <?php include('../module/header.php'); ?>

    <!-- maincontent -->
    <form>
        <!-- userdata -->
        <label for="fname">NAME:</label><br>
        <input type="text" maxlength="16" placeholder="First name"><input type="text" maxlength="16" placeholder="Last name"><br>
        <label for="fname">EMAIL ADDRESS:</label><br>
        <input type="email"><br>
        <label for="lname">PASSWORD:</label><br>
        <input type="password" maxlength="24"><br>
        <!-- location -->
        <label for="lname">LOCATION:</label><br>
        <input type="password" maxlength="24"><br>
        <label for="lname">CITY:</label><br>
        <input type="password" maxlength="24"><br>
        <!-- button -->
        <input type="submit">
    </form>

    <!-- footer -->
    <?php include('../module/footer.php'); ?>

    <!-- script -->
    <?php include('../script.php'); ?>
    <?php include('../module/font.php'); ?>
</body>

</html>
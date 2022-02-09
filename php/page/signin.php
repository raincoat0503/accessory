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
    <form class="form">
        <!-- userdata -->
        <div class="form__usernamebox">
            <label>NAME:</label><br>
            <input class="form__username form__inputbox" type="text" maxlength="16" placeholder="First name">
            <input class="form__username form__inputbox" type="text" maxlength="16" placeholder="Last name">
        </div>
        <div class="form__emailbox">
            <label>EMAIL ADDRESS:</label><br>
            <input class="form__email form__inputbox" type="email">
        </div>
        <div class="form__passwordbox">
            <label>PASSWORD:</label>
            <input class="form__password form__inputbox" type="password" maxlength="24" autocomplete="on">
        </div>
        <!-- button -->
        <input class="form__submit" type="submit">
    </form>

    <!-- footer -->
    <?php include('../module/footer.php'); ?>

    <!-- script -->
    <?php include('../script.php'); ?>
    <?php include('../module/font.php'); ?>
</body>

</html>
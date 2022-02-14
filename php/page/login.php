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
    <div class="login formbox">
        <form class="form">
            <h2 class="form__title">LOGIN</h2>
            <!-- userdata -->
            <div class="form__box form__emailbox">
                <label>EMAIL ADDRESS:</label>
                <input class="form__email form__inputbox" type="email">
            </div>
            <div class="form__box form__passwordbox">
                <label>PASSWORD:</label>
                <input class="form__password form__inputbox" type="password" maxlength="24" autocomplete="on">
            </div>
            <!-- button -->
            <input class="form__submit" type="submit" value="SUBMIT">
            <p class="form__link">Don't have an account?<br><span><a href="http://localhost:8888/php/page/signin.php">Sign in here</a></span></p>
        </form>
    </div>

    <!-- footer -->
    <?php include('../module/footer.php'); ?>

    <!-- script -->
    <?php include('../script.php'); ?>
    <?php include('../module/font.php'); ?>
</body>

</html>
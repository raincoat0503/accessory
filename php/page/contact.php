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
    <div class="contact formbox">
        <form class="form">
            <h2 class="form__title">CONTACT</h2>
            <!-- userdata -->
            <div class="form__box form__emailbox">
                <label>YOUR EMAIL ADDRESS:</label>
                <input class="form__email form__inputbox" type="email">
            </div>
            <div class="form__box form__passwordbox">
                <label>MASSAGE:</label>
                <textarea class="form__massage form__inputbox" type="text" maxlength="1000" rows=”3″ cols=”50″ wrap=”hard”></textarea>
            </div>
            <!-- button -->
            <input class="form__submit" type="submit" value="SUBMIT">
        </form>
    </div>

    <!-- footer -->
    <?php include('../module/footer.php'); ?>

    <!-- script -->
    <?php include('../script.php'); ?>
    <?php include('../module/font.php'); ?>
</body>

</html>
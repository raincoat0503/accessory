<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessory</title>
    <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
    <!-- header -->
    <?php include('./php/module/header.php'); ?>

    <!-- maincontent -->
    <div class="hero">
        <video class="hero__background" src="../../media/movie/hero-background.mp4" autoplay muted loop></video>
        <div class="hero__content">
            <h2 class="hero__headline">新作登場</h2>
            <h3 class="hero__subline">北欧スタイルを踏襲した腕時計</h3>
            <div class="hero__image"><img src="../../media/img/page/home/white.png" alt=""></div>
            <a class="hero__link js-hero__link" href="#">詳細を見る &#62;</a>
        </div>
    </div>

    <!-- footer -->
    <?php include('./php/module/footer.php'); ?>

    <!-- script -->
    <?php include('./php/script.php'); ?>
    <?php include('./php/module/font.php'); ?>
</body>

</html>
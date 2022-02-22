<?php

/** @var \yii\web\View $this */
/** @var string $content */
use frontend\assets\AppAsset;
use yii\helpers\Url;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= Url::to(['../frontend/web/images/favicon.ico'])?>" type="image/x-icon"/>
    <link rel="icon" href="<?= Url::to(['../frontend/web/images/favicon.ico'])?>" type="image/x-icon"/>
    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= Url::to(['../frontend/web/images/apple-touch-icon.png'])?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Url::to(['../frontend/web/images/favicon-32x32.png'])?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Url::to(['../frontend/web/images/favicon-16x16.png'])?>">
<!--    <link rel="manifest" href="site.webmanifest">-->
<!--    <script>-->
<!--        document.documentElement.classList.remove('no-js');-->
<!--        document.documentElement.classList.add('js');-->
<!--    </script>-->
    <?php $this->registerCsrfMetaTags() ?>
    <title>CURE BEAUTY</title>
    <?php $this->head() ?>
</head>
<body id="top" class="theme-slides">
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

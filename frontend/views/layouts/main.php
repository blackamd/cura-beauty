<?php

/** @var \yii\web\View $this */
/** @var string $content */
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="" type="image/x-icon"/>
    <link rel="icon" href="" type="image/x-icon"/>
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

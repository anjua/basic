<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AdminlteAsset;
use yii\helpers\Html;
use kartik\dialog\Dialog;


AdminlteAsset::register($this);
$asset = AdminlteAsset::register($this);
$baseUrl = $asset->baseUrl;
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
        <head>
            <meta charset="<?= Yii::$app->charset ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?= Html::csrfMetaTags() ?>
            <title><?= Html::encode($this->title) ?></title>
            <subtitle><?= isset($this->subTitle)? Html::encode($this->subTitle):'' ?></subtitle>
            <?php $this->head() ?>
        </head>
        <body class="hold-transition skin-blue fixed sidebar-mini">
            <?php $this->beginBody() ?>

                <div class="wrapper">

                    <?= $this->render('header.php',['baseUrl' => $baseUrl]) ?>
                    <?= $this->render('leftmenu.php',['baseUrl' => $baseUrl]) ?>
                    <?= $this->render('content.php',['content' => $content]) ?>
                    <?= $this->render('footer.php',['baseUrl' => $baseUrl]) ?>
                    <?= $this->render('rightside.php',['baseUrl' => $baseUrl]) ?>
                    <div class="control-sidebar-bg"></div>

                </div>

            <?php $this->endBody() ?>
        </body>
    </html>
<?php $this->endPage() ?>

<?//=
//    Dialog::widget(
//            [
//                'id' => 'delete',
//                'footer' =>
//                    Html::button(
//                        Yii::t('app', 'Delete'),
//                        [
//                            'class' => 'btn btn-danger',
//                            'data-action' => 'confirm',
//                            'data-dismiss' => 'modal',
//                        ]
//                    )
//                    . Html::button(
//                        Yii::t('app', 'Cancel'),
//                        [
//                            'class' => 'btn btn-default',
//                            'data-dismiss' => 'modal',
//                        ]
//                    ),
//                'header' => Yii::t('app', 'Are you sure you want to delete this object?'),
//            ]
//    )
//?>

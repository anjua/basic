<?php
/**
 * Created by PhpStorm.
 * User: anjua
 * Date: 8/27/2017
 * Time: 8:17 AM
 */

use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use app\widgets\Alert;

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            <?= Html::encode($this->title) ?>

        </h1>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </section>

    <br>

    <!-- Main content -->
    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
    <!-- /.content -->
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="container">

    <div class="row">

        <div class="col-md-9">
            <ol class="breadcrumb">
                <li><a href="<?=Yii::$app->homeUrl;?>">首页</a></li>
                <li>文章列表</li>
            </ol>
            <?= \yii\widgets\ListView::widget([
                'id' => 'postList',
                'dataProvider' => $dataProvider,
                'itemView' => '_listitem',
                'layout' => '{items},{pager}',
                'pager' => [
                    'maxButtonCount' => 10,
                    'nextPageLabel' => Yii::t('app','下一页'),
                    'prevPageLabel' => Yii::t('app','上一页'),
                ],
            ]); ?>
        </div>

        <div class="col-md-3">
            右侧内容
        </div>

    </div>

</div>


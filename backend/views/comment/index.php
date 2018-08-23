<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['attribute'=>'id','contentOptions'=>['width'=>'30px']],
            ['attribute'=>'content','value'=>'beginning'],
            [
            'attribute'=>'status',
            'value'=>'status0.name',
            'filter'=>\common\models\Commentstatus::find()->select(['name','id'])->orderBy('position')->indexBy('id')->column(),
            'contentOptions'=>function($model){
                return ($model->status==1)?['class'=>'bg-danger']:[];
            }
            ],
            ['attribute'=>'create_time','format'=>['date','php:Y-m-d H:i']],
            ['attribute'=>'user.username','label'=>'作者','value'=>'user.username'],
            'post.title',
            //'email:email',
            //'url:url',
            //'post_id',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view}{update}{delete}{approve}',
            'buttons' => [
                    'approve'=>function($url,$model,$key){
                        $options = [
                            'title'=>Yii::t('yii','审核'),
                            'aria-label'=>Yii::t('yii','审核'),
                            'data-confirm'=>Yii::t('yii','你确定要通过这条评论吗？'),
                            'data-method'=>'post',
                            'data-pjax'=>'0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-check"></span>',$url,$options);
                    },
            ],
            ],
        ],
    ]); ?>
</div>

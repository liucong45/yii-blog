<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
//var_dump( \common\models\Adminuser::find()->select(['nickname','id'])->indexBy('id')->column());
//exit();
?>

<div class="post-form">

    <?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList(
        \common\models\Poststatus::find()->select(['name','id'])->orderBy('position')->indexBy('id')->column(),
        ['prompt'=>'请选择状态']);
    ?>

    <?= $form->field($model, 'author_id')->dropDownList(
            \common\models\Adminuser::find()->select(['nickname','id'])->indexBy('id')->column(),
            ['prompt'=>'请选择作者']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

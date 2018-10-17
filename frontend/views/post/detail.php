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
                <li><a href="<?=Yii::$app->homeUrl;?>?r=post/index">文章列表</a></li>
                <li class="active"><?=$model->title;?></li>
            </ol>

        </div>

        <div class="col-md-3">
            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>查找文章
                    </li>
                    <li class="list-group-item">
                        <form action="index.php?r=post/index" id="w0" method="get">
                            <div class="form-group">
                                <input type="text" name="PostSearch[title]" class="form-control" id="w0input" placeholder="按标题">
                            </div>
                            <button type="submit" class="btn btn-default">搜索</button>
                        </form>
                    </li>
                </ul>
            </div>

            <div class="tagcloudbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>标签云
                    </li>
                    <li class="list-group-item">搜索框</li>
                </ul>
            </div>

            <div class="commentbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>最新回复
                    </li>
                    <li class="list-group-item">搜索框</li>
                </ul>
            </div>
        </div>

    </div>

</div>


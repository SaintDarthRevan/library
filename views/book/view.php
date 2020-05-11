<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
?>
<div class="book-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'author',
            'genre',
            'year',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

?>
<div class="po-item-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'po_item_no',
            'quantity',
        ],
    ]);?>

</div>

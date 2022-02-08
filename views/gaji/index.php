<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Gaji;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GajiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gaji';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gaji-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Gaji', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_pegawai',
            'gaji_pokok',
            'tunjangan_istri',
            'tunjangan_anak',
            'tunjangan_makan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Gaji $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ]
    ]); ?>


</div>
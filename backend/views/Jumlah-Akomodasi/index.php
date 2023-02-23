<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Dtw;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LaporanKunjunganCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Jumlah Pengunjung';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-kunjungan-index">

	<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3>Rekap Jumlah Pengunjung Akomodasi</h3>
            </div>
        <?php // echo $this->render('_search', ['model' => $searchModel]); 
        $gridColumns = [

                'nama_akomodasi',
                'bulan',
                'Jumlah_wisman',
                'jumlah_wisnus',
                'Total',
        ];

    // Renders a export dropdown menu
        echo ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns,
            'filename' => 'Rekap-DTW-'.date('d-M-Y'),
            'dropdownOptions' => [
                'label' => 'Export',
                'class' => 'btn btn-outline-secondary'
            ]
        ]);
    ?>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Akomodasi</th>
                  <th>Bulan</th>
                  <th>Wistawan Asing</th>
                  <th>Wisatawan Nusantara</th>
                  <th>Total Wisatawan</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($modelA as $model) { ?>
                <tr>
                  <td><?= $model->nama_akomodasi?></td>
                  <td><?= $model->bulan?></td>
                  <td><?= $model->Jumlah_wisman?></td>
                  <td><?= $model->jumlah_wisnus?></td>
                  <td><?= $model->Total?></td>
                </tr>
              	<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3>Rekap Jumlah Pengunjung Destinasi Tempat Wisata</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Akomodasi</th>
                  <th>Bulan</th>
                  <th>Wistawan Asing</th>
                  <th>Wisatawan Nusantara</th>
                  <th>Total Wisatawan</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($modelB as $models) { ?>
                <tr>
                  <td><?= $models->nama_destinasi?></td>
                  <td><?= $models->bulan?></td>
                  <td><?= $models->Jumlah_wisman?></td>
                  <td><?= $models->jumlah_wisnus?></td>
                  <td><?= $models->Total?></td>
                </tr>
              	<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>


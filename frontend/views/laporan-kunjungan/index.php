<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LaporanKunjunganCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-kunjungan-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="content">        
        <div class="container-fluid">
          <div class="row">          
            <div class="col-md-12">
            
              <div class="card">
                <div class="card-header card-header-primary">
                  <table>
                    <tr>
                      <td><h4 class="card-title"><b>Data Laporan Kunjungan</b></h4></td>
                
                      <td class="col-md-1"><?= Html::a('&nbsp Tambah', ['create'], ['class' => 'btn fa fa-plus btn-secondary']) ?></td>
                    </tr>                  
                    
                  </table>
                  <?php
                    if(!Yii::$app->user->identity->nama_dtw == null) { ?>
                      <p class="card-category"><?= Yii::$app->user->identity->nama_dtw; ?> </p>
                    <?php } else { ?>
                      <p class="card-category"><?= Yii::$app->user->identity->nama_akomodasi; ?> </p>
                    <?php } ?>
                    
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Jenis Wisatawan
                        </th>
                        <th>
                          Negara
                        </th>
                        <th>
                          Provinsi
                        </th>
                        <th>
                          Pria
                        </th>
                        <th>
                          Wanita
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                          
                        </th>
                      </thead>
                      <tbody>
                      
                      
                      <?php 
                      /*
                        // $query = "SELECT * FROM laporan_kunjungan INNER JOIN negara
                        // ON laporan_kunjungan.id_laporan = negara.id_negara";    
                        // $sql_rm = mysqli_query($con, $query) or die (mysqli_error($con));
                      foreach($query1 as $negara)
                      { ?>
                        <td>
                            <?= $negara->negara ?>
                        </td>
                      <?php }
                      */
                      
                      foreach($laporan_kunjungan as $laporan) 
                      { 
                        if ( Yii::$app->user->identity->id) {
                          # code...
                        
                        ?>                                                        
                        <tr>                                                        
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $laporan->jenis_wisatawan ?>
                                </td>
                                <td>
                                    <?= $laporan['negara']?>
                                </td>
                                <td>
                                    <?= $laporan['provinsi'] ?>
                                </td>
                                <td>
                                    <?= $laporan->pria ?>
                                </td> 
                                <td>
                                    <?= $laporan->wanita ?>
                                </td>     
                                <td class="text-primary">
                                    <?= $laporan->jumlah ?>
                                </td> 
                                <td>
                                  <a class="btn btn-info btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan%2Fview&id='. $laporan->id_laporan_kunjungan ?>">
                                    <span class="material-icons" alt="detail">visibility</span>
                                  </a>&nbsp 
                                  <a class="btn btn-secondary btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan%2Fupdate&id='. $laporan->id_laporan_kunjungan ?>" type="button">
                                    <span class="material-icons">create</span>
                                  </a>&nbsp 
                                  <a class="btn btn-danger btn-sm" method="post" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan%2Fdelete&id='. $laporan->id_laporan_kunjungan ?>" type="button" >
                                    <span class="material-icons">delete</span>
                                  </a>
                                  <!-- <a class="btn btn-info btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan%2Fview&id='. $laporan->id_laporan_kunjungan ?>" type="button" >detail</a> -->
                                  <!-- <a class="btn btn-secondary btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan%2Fupdate&id='. $laporan->id_laporan_kunjungan ?>" type="button" >edit</a> -->
                                  <!-- <a class="btn btn-danger btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan%2Fdelete&id='. $laporan->id_laporan_kunjungan ?>" type="button" >hapus</a> -->
                                </td>                       
                        </tr>
                        <?php }
                      }  ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>


</div>

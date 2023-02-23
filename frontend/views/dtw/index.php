<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DtwCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dtw';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dtw-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    

    <div class="content">        
        <div class="container-fluid">
          <div class="row">          
            <div class="col-md-12">
            
              <div class="card">
                <div class="card-header card-header-primary">
                <table>
                  <tr>
                    <td><h4 class="card-title"><b>Data Daya Tarik Wisata</b></h4></td>
              
                    <!-- <td class="col-md-1"><?= Html::a('&nbsp Tambah Data', ['create'], ['class' => 'btn fa fa-plus btn-secondary']) ?></td> -->
                  </tr>                  
                  
                </table>
                
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Nama Daya Tarik Wisata
                        </th>
                        <th>
                            Kecamatan
                        </th> 
                        <th>
                            Action
                        </th>                         
                      </thead>
                      <tbody>
                      
                      <?php 
                        
                      foreach($dtw as $dtw) 
                      { ?>                                                        
                        <tr>                                                        
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $dtw->nama_dtw ?>
                                </td>
                                <td>
                                    <?= $dtw->nama_kecamatan?>
                                </td>                                
                                <td>
                                  <a class="btn btn-info btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=dtw%2Fview&id='. $dtw->id_dtw ?>" type="button" >detail</a>
                                  <!-- <a class="btn btn-secondary btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=dtw%2Fupdate&id='. $dtw->id_dtw ?>" type="button" >edit</a>
                                  <a class="btn btn-danger btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=dtw%2Fdelete&id='. $dtw->id_dtw ?>" type="button" >hapus</a> -->
                                </td>                       
                        </tr>
                        <?php } ?>
                        
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

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AkomodasiCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akomodasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akomodasi-index">
    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   

    <div class="content">        
        <div class="container-fluid">
          <div class="row">          
            <div class="col-md-12">
            
              <div class="card">
                <div class="card-header card-header-primary">
                <table>
                  <tr>
                    <td><h4 class="card-title"><b>Data Akomodasi</b></h4></td>
              
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
                          Nama Akomodasi
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
                        
                      foreach($akomodasi as $akomodasi) 
                      { ?>                                                        
                        <tr>                                                        
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $akomodasi->nama_akomodasi ?>
                                </td>
                                <td>
                                    <?= $akomodasi->nama_kecamatan?>
                                </td>                                
                                <td>
                                  <a class="btn btn-info btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=akomodasi%2Fview&id='. $akomodasi->id_akomodasi ?>" type="button" >detail</a>
                                  <!-- <a class="btn btn-secondary btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=akomodasi%2Fupdate&id='. $akomodasi->id_akomodasi ?>" type="button" >edit</a>
                                  <a class="btn btn-danger btn-sm" href="<?= Yii::$app->request->baseUrl. '/index.php?r=akomodasi%2Fdelete&id='. $akomodasi->id_akomodasi ?>" type="button" >hapus</a> -->
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

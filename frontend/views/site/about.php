<?php

use rce\material\widgets\Card;
use Yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = $berita->judul_berita;
?>
<div class="site-about">
    
    <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
            
              <h3 class="card-title"> <?php echo $berita->judul_berita ?> </h3>
              <p class="card-category">
                Dapatkan berita terbaru seputar wisata di Kota Batu
              </p>
            </div>
            
            <div class="card-body">
            
              
              <div class="row">                                
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b><?= $berita->judul_berita ?></b></h5>
                      <br>
                      <p class="card-text" align="justify"><?= $berita->deskripsi?></p>
                      <a href="<?= Yii::$app->request->baseUrl. '/index.php?r=site%2Fabout&id='. $berita->id_berita ?>" class="btn btn-info">Halaman Utama</a>
                    </div>                                                                 
              </div>
            </div>
            
          </div>
        </div>
      </div>

</div>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://cdn.pixabay.com/photo/2017/02/23/13/05/profile-2092113_960_720.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => Yii::$app->homeUrl ],
                    
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                    ['label' => 'Berita', 'icon' => 'pencil-square-o', 'url' => ['/berita'] ],

                    [
                        'label' => 'Data Kunjungan Wisata',
                        'icon' => 'map',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Akomodasi', 'icon' => 'hotel', 'url' => ['/akomodasi'],],
                            ['label' => 'Daya Tarik Wisata', 'icon' => 'tripadvisor', 'url' => ['/dtw'],],
                        ],
                    ],
                    [
                        'label' => 'Data Lokasi',
                        'icon' => 'map-marker',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Negara', 'icon' => 'flag-checkered', 'url' => ['/negara'],],
                            ['label' => 'Provinsi', 'icon' => 'flag', 'url' => ['/provinsi'],],
                        ],
                    ],


                    [
                        'label' => 'Report',
                        'icon' => 'file-text',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Daya Tarik Wisata', 'icon' => 'tripadvisor', 'url' => ['/rekap-dtw'],],
                            ['label' => 'Akomodasi', 'icon' => 'hotel', 'url' => ['/rekap-akomodasi'],
                            ],    
                            ['label' => 'Jumlah Wisatawan', 'icon' => 'line-chart', 'url' => ['/rekap-jumlah-wisatawan'],
                            ],  
                            ['label' => 'Laporan Kunjungan', 'icon' => 'area-chart', 'url' => ['/laporan-kunjungan'],
                            ], 
                        ],
                    ],
                
                    ['label' => 'User', 'icon' => 'users', 'url' => ['/user']],
                ],
            ]
        ) ?>

    </section>

</aside>

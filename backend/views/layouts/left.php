<?php

use mdm\admin\components\MenuHelper;
use yii\bootstrap\Nav;
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <?php if (!Yii::$app->user->isGuest) : ?>
            <div class="user-panel">
                <!--<div class="pull-left image">-->
                    
                    <!--<?php

                                $email = Yii::$app->user->identity->email;

                                if(isset($email)) {
                                     echo \cebe\gravatar\Gravatar::widget([
                                        'email' => $email,
                                        'options' => [
                                            'alt' => 'Aman Rohiman'
                                        ],
                                        'size' => 32
                                    ]); 
                                }
                                else {
                                    echo '<img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>';
                                } 
                    ?>-->

                <!--</div>
                <div class="pull-left info">
                    <p>Hello, <?= @Yii::$app->user->identity->profile->name ?></p>
                    <a href="">
                        <i class="fa fa-circle text-success"></i> Online
                    </a>
                </div>
            </div>
        <?php endif ?>
        <!--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        -->
        <ul class="sidebar-menu">
            <li>
                <a href="<?= Yii::$app->urlManager->baseUrl?>/perizinan/index">
                    <i style="font-size:18px;" class="fa fa-user-plus"></i>
                    <span class="text-info">Daftar Perizinan</span>
                </a>
            </li>
            
            <?php if(Yii::$app->user->can('Administrator')) { ?>
            <li class="treeview">
                <a href="#" class="navbar-link">
                    <i style="font-size:18px;" class="fa fa-users"></i>
                    <span class="text-info">User Management</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <?php
                    $callback = function($menu) {
                                    $data = eval($menu['data']);
                        
                                    return [
                                        'label' => '<i style="font-size:12px;" class="fa fa-check"></i> '.$menu['name'],
                                        'url' => $menu['route'],
                        //                'options' => $data
                        //                'items' => $menu['children']
                                    ];
                                };

                    $items = MenuHelper::getAssignedMenu(Yii::$app->user->id, 8, $callback);
                    
                    echo Nav::widget(
                        [
                            'encodeLabels' => false,
                            'options' => ['class' => 'treeview-menu'],
                            'items' => $items,
//                            'items' => [
//                                [
//                                    'label' => '<i style="font-size:12px;" class="fa fa-check"></i>  Tambah User',
//                                    'url' => Yii::$app->urlManager->createAbsoluteUrl('user/admin/create'),
//                                ],
//                                [
//                                    'label' => '<i style="font-size:12px;" class="fa fa-check"></i>  Setting User',
//                                    'url' => Yii::$app->urlManager->createAbsoluteUrl('user/admin/index')
//                                ]
//                            ],
                        ]
                    );
                    ?>
            </li>

            <li class="treeview">
                <a href="#" class="navbar-link">
                    <i style="font-size:18px;" class="fa fa-dashboard"></i>
                    <span class="text-info">RBAC</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <?php
                    $callback = function($menu) {
                                    $data = eval($menu['data']);
                        
                                    return [
                                        'label' => '<i style="font-size:12px;" class="fa fa-check"></i> '.$menu['name'],
                                        'url' => $menu['route'],
                        //                'options' => $data
                        //                'items' => $menu['children']
                                    ];
                                };

                    $items = MenuHelper::getAssignedMenu(Yii::$app->user->id, 1, $callback);
                    
                    echo Nav::widget(
                        [
                            'encodeLabels' => false,
                            'options' => ['class' => 'treeview-menu'],
                            'items' => $items,
                        ]
                    );
                    ?>
            </li>      

            <li class="treeview">
                <a href="#" class="navbar-link">
                    <i style="font-size:18px;" class="fa fa-suitcase"></i>
                    <span class="text-info">Preference</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <?php                    
                    echo Nav::widget(
                        [
                            'encodeLabels' => false,
                            'options' => ['class' => 'treeview-menu'],
                            'items' => [
                                [
                                    'label' => '<i style="font-size:12px;" class="fa fa-check"></i> Bidang',
                                    'url' =>Yii::$app->urlManager->createAbsoluteUrl('bidang'),
                                ],
                                [
                                    'label' => '<i style="font-size:12px;" class="fa fa-check"></i> Dokumen Izin',
                                    'url' =>Yii::$app->urlManager->createAbsoluteUrl('dokumen-izin'),
                                ],
                                [
                                    'label' => '<i style="font-size:12px;" class="fa fa-check"></i> Dokumen Pendukung',
                                    'url' =>Yii::$app->urlManager->createAbsoluteUrl('dokumen-pendukung'),
                                ],
                                [
                                    'label' => '<i style="font-size:12px;" class="fa fa-check"></i> Pelaksana',
                                    'url' =>Yii::$app->urlManager->createAbsoluteUrl('pelaksana'),
                                ],
                                [
                                    'label' => '<i style="font-size:12px;" class="fa fa-check"></i> KBLI',
                                    'url' =>Yii::$app->urlManager->createAbsoluteUrl('kbli'),
                                ],
                                [
                                    'label' => '<i style="font-size:12px;" class="fa fa-check"></i> Lokasi',
                                    'url' =>Yii::$app->urlManager->createAbsoluteUrl('lokasi'),
                                ],
                            ],
                        ]
                    );
                    ?>
            </li>
            <?php } ?>
        </ul>
    </section>
</aside>
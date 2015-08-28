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

                if (isset($email)) {
                    echo \cebe\gravatar\Gravatar::widget([
                        'email' => $email,
                        'options' => [
                            'alt' => 'Carsten Brandt'
                        ],
                        'size' => 32
                    ]);
                } else {
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
                    <a href="<?= Yii::$app->urlManager->baseUrl ?>/izin">
                        <i style="font-size:18px;" class="fa fa-user-plus"></i>
                        <span class="text-info">Daftar Perizinan</span>
                    </a>
                </li>

                
            </ul>
    </section>
</aside>
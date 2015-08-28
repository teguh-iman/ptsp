<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use dektrium\user\models\User;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);
AppAsset::register($this);
?>

<header class="main-header">
<a href=""><img class="main-header logo" src="<?= Yii::getAlias('@web') ?>/../backend/web/images/logo-dki.png" style="padding-left: 13px;
    margin-left: -11px;background: none;border: none;width: auto;height: 50px;margin: auto;text-align: center;background-color:#444;">
<?= Html::a('PTSP-DKI', Yii::$app->homeUrl, ['class' => 'logo']) ?></a>


    <nav class="navbar navbar-static-top" role="navigation" style="max-height:50px !important">
		
		  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
		
        <div class="navbar-right">

            <ul class="nav navbar-nav">
                <?php
                if (Yii::$app->user->isGuest) {
                    ?>
                    <li class="footer">
                    <?= Html::a('Login', ['/site/login']) ?>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="dropdown user user-menu">
                        <!--
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span><?= @Yii::$app->user->identity->username ?> <i class="caret"></i></span>
                        </a>
                    -->

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          
                          <?php

                                $email = Yii::$app->user->identity->email;

                                if(isset($email)) {
                                     echo \cebe\gravatar\Gravatar::widget([
                                        'email' => $email,
                                        'options' => [
                                            'alt' => 'Carsten Brandt'
                                        ],
                                        'size' => 32
                                    ]); 
                                }
                                else {
                                    echo '<img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>';
                                } ?>

                          <span class="hidden-xs"><?= @Yii::$app->user->identity->username ?></span>
                        </a>

                        <ul class="dropdown-menu" style="max-height: 50ox !import">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <?php

                                $email = Yii::$app->user->identity->email;

                                if(isset($email)) {
                                     echo \cebe\gravatar\Gravatar::widget([
                                        'email' => $email,
                                        'options' => [
                                            'alt' => 'Carsten Brandt'
                                        ],
                                        'size' => 32
                                    ]); 
                                }
                                else {
                                    echo '<img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>';
                                } ?>
                                <p>
                                    <?= @Yii::$app->user->identity->username ?> - Web Developer
                                    <small>Member since <?= Yii::t('user', '{0, date, MMMM dd, YYYY HH:mm}', [Yii::$app->user->identity->created_at]) ?></small>
                                </p>
                            </li>
                            
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
<!--                                    <a href="<?php //  echo Yii::$app->urlManager->createAbsoluteUrl('user/admin/update-profile?id='.Yii::$app->user->id); ?>" class="btn btn-default btn-flat">Profile</a>-->
                                        <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl('user/settings/profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <?=
                                    Html::a(
                                            'Sign out', ['user/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                    )
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </li><?php
                }
                ?>
                <!-- User Account: style can be found in dropdown.less -->

            </ul>
        </div>
    </nav>
</header>

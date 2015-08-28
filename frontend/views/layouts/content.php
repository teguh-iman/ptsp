<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
?>

    <section class="content-header">
        
        <?php
        
            $flag = isset($GLOBALS['page_title']);
            $page_title = $flag ? $GLOBALS['page_title'] : '<h3></h3>';
            echo $page_title;

        ?>

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
      <?= Alert::widget() ?>
      <?= $content ?>
    </section>
<?php
/**
 *
 * @var string $content Return html content.
 */

use denchotsanov\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\widgets\Breadcrumbs;

?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php if (isset($this->blocks['content-header'])): ?>
                        <h1 class="m-0 text-dark"><?= $this->blocks['content-header'] ?></h1>
                    <?php else: ?>
                        <h1 class="m-0 text-dark">
                            <?php
                            if ($this->title !== null) {
                                echo Html::encode($this->title);
                            } else {
                                echo Inflector::camel2words(Inflector::id2camel($this->context->module->id));
                                echo ($this->context->module->id !== Yii::$app->id) ? '<small>Module</small>' : '';
                            } ?>
                        </h1>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <?php echo Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php Alert::widget(); ?>
            <?php echo $content; ?>
        </div>
    </section>
</div>
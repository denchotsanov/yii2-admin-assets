<?php
/**
 * @var $content string
 *
 *'components' => [
 *  'view' => [
 *       'theme' => [
 *           'pathMap' => [
 *               '@app/views' => '@vendor/denchotsanov/yii2-admin-assets/views'
 *           ],
 *       ],
 *   ],
 *  'assetManager' => [
 *      'bundles' => [
 *          'denchotsanov\assets\AdminLteAsset' => [
 *              'skin' => 'skin-black',
 *              'layoutOption'=>'sidebar-mini',
 *          ],
 *      ],
 *  ],
 *]
 *
 */


use denchotsanov\assets\AdminAsset;
use denchotsanov\helpers\ThemeHelper;
use yii\helpers\Html;

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo Html::encode($this->title); ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php $this->head(); ?>
    </head>
    <body class="<?php echo ThemeHelper::bodyClass('hold-transition'); ?>">
    <?php $this->beginBody(); ?>
    <div class="wrapper">
        <?php echo $this->render('_header', ['directoryAsset' => $directoryAsset]); ?>
        <?php echo $this->render('_leftSide', ['directoryAsset' => $directoryAsset]); ?>
        <?php echo $this->render('_content', ['content' => $content]); ?>
        <?php echo $this->render('_footer'); ?>
        <?php echo $this->render('_rightSlide'); ?>
    </div>
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>
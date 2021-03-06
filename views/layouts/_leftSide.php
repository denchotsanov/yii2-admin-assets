<?php
/*
 *
 * @var string $directoryAsset
 */

use denchotsanov\assets\widgets\Menu;
use yii\bootstrap4\Html;

$items = [

];
$menuItems = array_merge(Yii::$app->params['mainMenu'],
    [
        [
            'label' => 'User',
            'icon' => 'fas fa-users',
            'url' => '#',
            'items' => [
                ['label' => 'List', 'icon' => 'fas fa-users', 'url' => ['/user/admin']],
                ['label' => 'Add', 'icon' => 'fas fa-user-plus', 'url' => ['/user/admin/create']],
            ],
            'visable'=>Yii::$app->getUser()->getIdentity()->isAdmin,
        ],
        ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
        [
            'label' => 'Some tools',
            'icon' => 'fas fa-share',
            'url' => '#',
            'items' => [
                ['label' => 'Gii', 'icon' => 'fas fa-file-code', 'url' => ['/gii'],],
                ['label' => 'Debug', 'icon' => 'fas fa-tachometer-alt', 'url' => ['/debug'],]
            ],
        ],
    ]);

$user = Yii::$app->getUser()->getIdentity();
$profile = $user->profile;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <section class="sidebar">
        <a href="#" class="brand-link">
            <img src="<?= $directoryAsset ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light"><?= Yii::$app->name; ?></span>
        </a>
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $profile->getAvatarUrl(20) ?>" class="img-circle elevation-2" alt="User Image"/>
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user->username; ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <?php echo Menu::widget([
                    'encodeLabels' => false,
                    'items' => $menuItems,
                ]
            );

            ?>
        </nav>
    </section>
</aside>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
    <li class="nav-item d-sm-inline-block">
        <?= Html::a(Yii::t('app', 'Home'), ['/dashboard'], ['class' => 'nav-link']) ?>
    </li>
</ul>

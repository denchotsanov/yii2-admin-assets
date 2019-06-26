<?php
/*
 *
 * @var string $directoryAsset
 */

use denchotsanov\widgets\Menu;

$menuItems = array_merge( Yii::$app->params['mainMenu'],
    [
    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
    ['label' => 'Gii', 'icon' => 'fas fa-file-code', 'url' => ['/gii']],
    ['label' => 'Debug', 'icon' => 'fas fa-tachometer-alt', 'url' => ['/debug']],
    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
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

$user = Yii::$app->user->identity;
$avatar = $user->avatarUrl;
$username = $user->username ;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <section class="sidebar">

        <a href="#" class="brand-link">
            <img src="<?= $directoryAsset ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light"><?= Yii::$app->name; ?></span>
        </a>
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $avatar; ?>" class="img-circle elevation-2" alt="User Image"/>
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $username; ?></a>
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

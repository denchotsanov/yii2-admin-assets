<?php
/*
 *
 * @var string $directoryAsset
 */

use denchotsanov\widgets\Menu;

$menuItems = [
    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    [
        'label' => 'Some tools',
        'icon' => 'share',
        'url' => '#',
        'items' => [
            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
            [
                'label' => 'Level One',
                'icon' => 'circle-o',
                'url' => '#',
                'items' => [
                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                    [
                        'label' => 'Level Two',
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                        ],
                    ],
                ],
            ],
        ],
    ],
];

$user = Yii::$app->user->identity;
$avatar = $directoryAsset . '/img/user2-160x160.jpg';
$username = 'Alexander Pierce';
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

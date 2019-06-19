<?php
/*
 *
 * @var string $directoryAsset
 */

use denchotsanov\widgets\Menu;

$menuOptions = ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'];
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
$avatar = $user->getAvatar() ? $user->getAvatar() : $directoryAsset . '/img/user2-160x160.jpg';
$username = $user->getUsername() ? $user->getUsername() : 'Alexander Pierce';
$statusIcon = $user->getUserOnlineIcon() ? $user->getUserOnlineIcon() : 'success';
$statusLabel = $user->getUserOnlineLabel() ? $user->getUserOnlineLabel() : 'Online';
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $avatar; ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo $username; ?></p>
                <a href="#"><i class="fa fa-circle text-<?php echo $statusIcon; ?>"></i> <?php echo $statusLabel; ?></a>
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
        <?php echo Menu::widget([
                'options' => $menuOptions,
                'items' => $menuItems,
            ]
        ); ?>
    </section>
</aside>

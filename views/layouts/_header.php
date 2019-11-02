<?php
/**
 * @var $this \yii\web\View
 */

use yii\helpers\Html;

$sortName = isset(Yii::$app->params['shortName']) ? Yii::$app->params['shortName'] : 'TS';

$user = Yii::$app->getUser()->getIdentity();
$profile = $user->profile;
?>
<!-- Navbar -->
<nav class="main-header navbar fixed-top navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
            <?= Html::a(Yii::t('user', 'Home'), ['/dashboard'], ['class' => 'nav-link']) ?>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="<?= $profile->getAvatarUrl(20) ?>" class="img-avatar"
                     alt="admin@bootstrapmaster.com">
                <span class="d-md-down-none"><?= $user->username ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <?= Html::beginForm(['/user/logout'], 'post')
                . Html::submitButton(
                    Yii::t('app', 'Logout') . '(' . Yii::$app->user->identity->username . ')',
                    ['class' => 'dropdown-item btn btn-link logout']
                )
                . Html::endForm(); ?>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->



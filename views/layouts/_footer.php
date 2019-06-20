<?php

$version = Yii::$app->version;
?>
<footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
        <?php if($version): ?>
        <b>Version</b> <?php echo $version; ?>
        <?php endif; ?>
    </div>
    <strong>Copyright &copy; 2013-<?php echo date('Y'); ?> <a href="http://tsanov.eu">tsanov.eu</a>.</strong> All rights reserved.
</footer>
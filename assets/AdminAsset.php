<?php
/**
 * Created by PhpStorm.
 * User: Dencho Tsanov
 * Date: 20.10.18 16:34
 * File: AdminAsset.php
 *
 * Project: yii2-admin-asset
 *
 */

namespace denchotsanov\assets;

use yii\web\AssetBundle as BaseAdminAsset;

class AdminAsset extends BaseAdminAsset
{
    public $sourcePath = '@vendor/denchotsanov/yii2-admin-assets/src';
    public $css = [

    ];
    public $js = [
        'js/admin.js'
    ];
    public $depends = [
        'denchotsanov\assets\AdminLteAssets',
    ];
}
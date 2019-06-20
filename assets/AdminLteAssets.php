<?php

namespace denchotsanov\assets;

/**
 *  BODY TAG OPTIONS:
 * =================
 * |---------------------------------------------------------|
 * | SKINS         | skin-blue                               |
 * |               | skin-black                              |
 * |               | skin-purple                             |
 * |               | skin-yellow                             |
 * |               | skin-red                                |
 * |               | skin-green                              |
 * |               | "skin-blue-light"                       |
 * |               | "skin-black-light"                      |
 * |               | "skin-red-light"                        |
 * |               | "skin-yellow-light"                     |
 * |               | "skin-purple-light"                     |
 * |               | "skin-green-light"                      |
 * |---------------------------------------------------------|
 * |LAYOUT OPTIONS | fixed                                   |
 * |               | layout-boxed                            |
 * |               | layout-top-nav                          |
 * |               | sidebar-collapse                        |
 * |               | sidebar-mini                            |
 * |---------------------------------------------------------|
 *
 */

use yii\base\Exception;
use yii\web\AssetBundle as BaseAdminLteAsset;

class AdminLteAssets extends BaseAdminLteAsset
{

    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'dist/css/adminlte.min.css',
        'plugins/fontawesome-free/css/all.min.css'
    ];
    public $js = [
        'dist/js/adminlte.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $skin = '_all-skins';
    public $layoutOption = 'sidebar-mini';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }
         //   $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }
        parent::init();
    }
}
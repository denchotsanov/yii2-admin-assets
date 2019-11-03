<?php

namespace denchotsanov\assets\assets;

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
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'dist/css/adminlte.min.css',
        'plugins/fontawesome-free/css/all.min.css',
        'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'plugins/jqvmap/jqvmap.min.css',
        'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'plugins/daterangepicker/daterangepicker.css',
        'plugins/summernote/summernote-bs4.css',
        'plugins/datatable-bs4/css/dataTables.bootstrap4.css'
    ];
    public $js = [
        'dist/js/adminlte.min.js',
        'plugins/toastr/toastr.min.js',
        'plugins/summernote/summernote-bs4.min.js',
        'plugins/datatable-bs4/js/dataTables.bootstrap4.js',
        'plugins/datatables/jquery.dataTable.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];

    public $skin = '';
    public $layoutOption = 'sidebar-mini';

    public $user = null;
    public $name = '';
    public $avatar = '';

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
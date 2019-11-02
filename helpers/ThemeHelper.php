<?php

namespace denchotsanov\assets\helpers;

use denchotsanov\assets\assets\AdminLteAssets;

class ThemeHelper
{
    /**
     * @param $bodyClass string
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public static function bodyClass(string $bodyClass=''){
        /** @var AdminLteAssets $bundle */
        $bundle = \Yii::$app->assetManager->getBundle('denchotsanov\assets\assets\AdminLteAssets');
        return $bodyClass.' '.$bundle->skin.' '.$bundle->layoutOption;
    }
}
<?php

namespace ereminmdev\yii2\magnificpopup;

class MagnificPopupAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/dimsemenov/magnific-popup/dist';

    public $js = [
        YII_DEBUG ? 'jquery.magnific-popup.js' : 'jquery.magnific-popup.min.js',
    ];

    public $css = [
        'magnific-popup.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

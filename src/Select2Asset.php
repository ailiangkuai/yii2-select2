<?php

namespace ailiangkuai\yii2\widgets\select2;


use yii\web\AssetBundle;

class Select2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/ailiangkuai/yii2-select2/src/assets/select2-4.0.4/dist';
    public $js = [
        'js/select2.min.js',
    ];
    public $css = [
        'css/select2.min.css',
        'css/aa.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
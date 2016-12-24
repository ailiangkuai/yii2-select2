<?php

namespace ailiangkuai\yii2\widgets\select2;


use yii\web\AssetBundle;

class Select2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/ailiangkuai/yii2-select2/src/assets';
    public $js = [
        'select2.min.js',
    ];
    public $css = [
        'css/zTreeStyle/zTreeStyle.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
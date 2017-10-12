<?php
namespace ailiangkuai\yii2\widgets\select2;


use yii\helpers\Json;
use yii\widgets\InputWidget;
use yii\helpers\Html;

class Select2Widget extends InputWidget
{
    public $items = [], $options = [], $clientOptions = [];

    public function init()
    {
        parent::init();
        $this->clientOptions = array_merge(['width' => 'resolve', 'dropdownAutoWidth' => true,], $this->clientOptions);
        Select2Asset::register($this->getView());
        $this->getView()->registerJs('$("#' . $this->options['id'] . '").select2(' . Json::encode($this->clientOptions) . ')');
    }

    public function run()
    {

        if ($this->hasModel()) {
            $output = Html::activeDropDownList($this->model, $this->attribute, $this->items, array_merge(['encode' => false], $this->options));
        } else {
            $output = Html::dropDownList($this->name, $this->value, $this->items, array_merge(['encode' => false], $this->options));
        }
        return $output;
    }
}
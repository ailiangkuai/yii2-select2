<?php
namespace ailiangkuai\yii2\widgets\select2;


use yii\widgets\InputWidget;
use yii\helpers\Html;

class Select2Widget extends InputWidget
{
    public $items = [], $options = [];
    public function init()
    {
        parent::init();
        Select2Asset::register($this->getView());
        $this->getView()->registerJs('$("#'.$this->options['id'].'").select2()');
    }

    public function run()
    {

        if ($this->hasModel()) {
            $output = Html::activeDropDownList($this->model, $this->attribute, $this->items, array_merge(['encode' => false, 'class' => 'form-control'], $this->options));
        } else {
            $output = Html::dropDownList($this->name, $this->value, $this->items, array_merge(['encode' => false, 'class' => 'form-control'], $this->options));
        }
        return $output;
    }
}
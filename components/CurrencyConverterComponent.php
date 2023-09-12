<?php

namespace app\components;

use yii\base\Widget;

class CurrencyConverterComponent extends Widget
{
    public function run()
    {
        return $this->render('currency-converter-component');
    }
}
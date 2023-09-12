<?php

/** @var yii\web\View $this */

$this->title = 'Курсы валют на сегодня';
?>

<div class="site-index" id="app" >
    <div class="xxx-top-content__inner xxx-mt-20">
        <div class="xxx-currency-grid xxx-currency-grid--alt-grid">
            <?= \app\components\CurrencyConverterComponent::widget() ?>
        </div>
    </div>
</div>
<?php

namespace app\services;

use app\components\CurrencyDto;
use app\models\Currency;
class CurrencyService
{
    protected Currency $model;
    public function __construct(Currency $model)
    {
        $this->model = $model;
    }

    /**
     * @param CurrencyDto $currencyDto
     * @return void
     */
    public function saveOrUpdateCurrency(CurrencyDto $currencyDto): void
    {
        $currency = $this->findByDateAndNameCode($currencyDto->date_for_parse, $currencyDto->name_code);
        if (!$currency) {
            $currency = new Currency();
        }
        $currency->setAttributes($currencyDto->toArray());
        $currency->save();
    }

    /**
     * @param string $date
     * @param string $code
     * @return Currency|null
     */
    private function findByDateAndNameCode(string $date, string $code): ?Currency
    {
        return $this->model->findOne(['date_for_parse' => $date, 'name_code' => $code]);
    }

    /**
     * @param string $date
     * @return array
     */
    public function getAllCurrency(string $date): array
    {
        return $this->model->findAll(['date_for_parse' => $date]);
    }
}
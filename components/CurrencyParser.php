<?php

namespace app\components;

use app\services\CurrencyService;
use Exception;
use yii\helpers\Json;
use yii\httpclient\Client;

class CurrencyParser
{
    protected CurrencyService $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }
    /**
     * Parse currency data from the specified date.
     *
     * @param string|null $date The date for parsing the currency data. If null, the current date will be used.
     * @return bool
     * @throws Exception
     */
    public function parse(?string $date = null): bool
    {
        try {

            if (is_null($date)) {
                $date = date('d/m/Y');
            }

            $url = $_ENV['SITE_FOR_PARSE_CURRENCY'] . '?date_req=' . $date;
            $response = (new Client())->get($url)->send();
            if ($response->isOk) {
                $currencyData = $this->getCurrencyData($response->getContent());
                $this->dataProcessing($currencyData, $date);
                return true;
            }
            return false;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Get currency data from XML response.
     *
     * @param string $xml The XML content.
     * @return array The currency data.
     */
    private function getCurrencyData(string $xml): array
    {
        $data = simplexml_load_string($xml);
        $json = Json::encode($data);
        return Json::decode($json)['Valute'];
    }

    /**
     * @param array $currencyData
     * @param string $date
     * @return void
     */
    private function dataProcessing(array $currencyData, string $date): void
    {
        foreach ($currencyData as $valute) {
            $currencyDto = new CurrencyDto();
            $currencyDto->name = $valute['Name'];
            $currencyDto->num_code = $valute['NumCode'];
            $currencyDto->name_code = $valute['CharCode'];
            $currencyDto->rate = (float) str_replace(",", ".", $valute['Value']) / $valute['Nominal'];
            $currencyDto->date_for_parse = $date;

            $this->currencyService->saveOrUpdateCurrency($currencyDto);
        }
    }
}
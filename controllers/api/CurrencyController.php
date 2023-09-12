<?php

namespace app\controllers\api;

use app\services\CurrencyService;
use yii\filters\ContentNegotiator;
use yii\rest\Controller;
use yii\web\Response;

class CurrencyController extends Controller
{
    private CurrencyService $currencyService;

    public function __construct($id, $module, CurrencyService $currencyService, $config = [])
    {
        $this->currencyService = $currencyService;
        parent::__construct($id, $module, $config);
    }

    public function behaviors(): array
    {
        return [
            'contentNegotiator' => [
                'class' => ContentNegotiator::class,
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
        ];
    }

    /**
     * Get all currency
     * @return array
     */
    public function actionIndex(): array
    {
        return $this->currencyService->getAllCurrency(date('d/m/Y'));
    }
}
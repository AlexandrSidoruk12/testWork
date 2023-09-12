<?php

namespace app\commands;

use app\components\CurrencyParser;
use yii\console\Controller;
use Yii;
use Exception;

class CurrencyParserCommand extends Controller
{
    /**
     * @throws Exception
     */
    public function actionParseCurrency(?string $date = null)
    {
        $parser = Yii::$container->get(CurrencyParser::class);

        if ($parser->parse($date)) {
            $this->stdout("OK\n");
        } else {
            $this->stderr("Не удалось спарсить данные\n");
        }
    }
}
<?php

namespace tests\functional;

class IndexPageTest
{
    public function _before(\FunctionalTester $I)
    {
        $I->amOnRoute('/');
    }

    public function openContactPage(\FunctionalTester $I)
    {
        $I->see('Курсы валют на сегодня');
        $I->seeElement('.site-index #app');
        $I->seeElement('.site-index .xxx-currency-grid');
        $I->seeElement('.site-index .xxx-currency-grid--alt-grid');
        $I->seeElement('.site-index .xxx-top-content__inner');
        $I->seeElement('.site-index .xxx-mt-20');
        $I->seeElement('.site-index .xxx-currency-grid');
        $I->seeElement('.site-index .xxx-currency-grid--alt-grid');
        $I->seeElement('.site-index .xxx-currency-grid .xxx-input-converter');
        $I->seeElement('.site-index .xxx-currency-grid .xxx-currency-row');
    }
}

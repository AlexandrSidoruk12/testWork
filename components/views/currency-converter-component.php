<div class="xxx-currency-grid__block xxx-currency-grid__block--separately ">
    <div class="xxx-line-h-1 xxx-mb-15"><a href="https://bankiros.ru/converter"
                                           class="xxx-text-bold xxx-fs-18 xxx-g-link xxx-g-link--no-bd">Конвертер
            валют ЦБ РФ</a></div>
    <div class="xxx-tab-list-wrap xxx-tab-list-wrap--pt-0 xxx-tab-list-wrap--only-border-light xxx-mb-15">
        <ul class="xxx-tab__list xxx-tab__list--fix-scrollbar xxx-tab__list--overflow-auto">
            <li class="xxx-tab__item xxx-tab__item--p-b-5 active" data-tab="today"><span class="xxx-fs-14"> Сегодня </span>
            </li>
        </ul>
    </div>
    <div class="xxx-tab__content">
        <div class="xxx-tab__body active" id="today">
            <div class="blk-grid-content blk-grid-content--gap-10 ">

                <div  class="xxx-input-converter "> <input @input="calculateCurrency('RUB')" v-model="currencyValues.RUB" data-input-converter=""
                                                         data-cur-name="RUB" data-cur-multiplier="1"
                                                           onpaste="handlePaste(event)"
                                                           type="tel" inputmode="decimal" pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"

                                                         class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> RUB </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/russia.svg"
                                                                  alt="RUB-icon"></div>
                <div class="xxx-input-converter "><input @input="calculateCurrency('USD')" v-model="currencyValues.USD" data-input-converter=""
                                                         data-cur-name="USD"
                                                         pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                                                         data-cur-multiplier="1" type="tel"
                                                         inputmode="decimal"
                                                         class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> USD </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/united-states-of-america.svg"
                                                                  alt="USD-icon"></div>
                <div class="xxx-input-converter "><input @input="calculateCurrency('EUR')"  v-model="currencyValues.EUR" value="0.9534" data-input-converter=""
                                                         data-cur-name="EUR"
                                                         pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                                                         data-cur-multiplier="0.0095340518194784" type="tel"
                                                         inputmode="decimal"
                                                         class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> EUR </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/european-union.svg"
                                                                  alt="EUR-icon"></div>
                <div class="xxx-input-converter "><input @input="calculateCurrency('CNY')" v-model="currencyValues.CNY" value="7.5112" data-input-converter=""
                                                         data-cur-name="CNY"
                                                         pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                                                         data-cur-multiplier="0.075111728696436" type="tel"
                                                         inputmode="decimal"
                                                         class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> CNY </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/china.svg"
                                                                  alt="CNY-icon"></div>
                <div class="xxx-input-converter "><input @input="calculateCurrency('BYN')" v-model="currencyValues.BYN" value="3.3472" data-input-converter=""
                                                         data-cur-name="BYN"
                                                         pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                                                         data-cur-multiplier="0.03347179499195" type="tel"
                                                         inputmode="decimal"
                                                         class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> BYN </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/belarus.svg"
                                                                  alt="BYN-icon"></div>
                <div class="xxx-input-converter xxx-hidden" data-show-courses="hidden"><input @input="calculateCurrency('GBP')" v-model="currencyValues.GBP" value="0.8185"
                                                                                              data-input-converter=""
                                                                                              pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                                                                                              data-cur-name="GBP"
                                                                                              data-cur-multiplier="0.0081853088439806"
                                                                                              type="tel"
                                                                                              inputmode="decimal"
                                                                                              class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> GBP </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/united-kingdom.svg"
                                                                  alt="GBP-icon"></div>
                <div class="xxx-input-converter xxx-hidden" data-show-courses="hidden"><input
                            pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                            @input="calculateCurrency('KZT')"
                            v-model="currencyValues.KZT"
                        value="474.3270" data-input-converter="" data-cur-name="KZT"
                        data-cur-multiplier="4.7432704849994" type="tel" inputmode="decimal"
                        class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> KZT </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/kazakhstan.svg"
                                                                  alt="KZT-icon"></div>
                <div class="xxx-input-converter xxx-hidden" data-show-courses="hidden"><input
                            @input="calculateCurrency('PLN')"
                            v-model="currencyValues.PLN" value="4.4041"
                            pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                                                                                              data-input-converter=""
                                                                                              data-cur-name="PLN"
                                                                                              data-cur-multiplier="0.044041222584339"
                                                                                              type="tel"
                                                                                              inputmode="decimal"
                                                                                              class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> PLN </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/poland.svg"
                                                                  alt="PLN-icon"></div>
                <div class="xxx-input-converter xxx-hidden" data-show-courses="hidden"><input
                            pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                            @input="calculateCurrency('TRY')"
                            v-model="currencyValues.TRY"
                        value="27.3980" data-input-converter="" data-cur-name="TRY"
                        data-cur-multiplier="0.27398010904408" type="tel" inputmode="decimal"
                        class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> TRY </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/turkey.svg"
                                                                  alt="TRY-icon"></div>
                <div class="xxx-input-converter xxx-hidden" data-show-courses="hidden"><input
                            pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                            @input="calculateCurrency('CHF')"  v-model="currencyValues.CHF" value="0.9098"
                                                                                              data-input-converter=""
                                                                                              data-cur-name="CHF"
                                                                                              data-cur-multiplier="0.0090978648221049"
                                                                                              type="tel"
                                                                                              inputmode="decimal"
                                                                                              class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> CHF </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/switzerland.svg"
                                                                  alt="CHF-icon"></div>
                <div class="xxx-input-converter xxx-hidden" data-show-courses="hidden"><input
                            pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                            @input="calculateCurrency('JPY')"
                            v-model="currencyValues.JPY"
                        value="150.0141" data-input-converter="" data-cur-name="JPY"
                        data-cur-multiplier="1.5001410132552" type="tel" inputmode="decimal"
                        class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> JPY </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/japan.svg"
                                                                  alt="JPY-icon"></div>
                <div class="xxx-input-converter xxx-hidden" data-show-courses="hidden"><input
                            pattern="[0-9]+(\.[0-9]+)?" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 46"
                            @input="calculateCurrency('AED')"
                            v-model="currencyValues.AED" value="3.7509"
                                                                                              data-input-converter=""
                                                                                              data-cur-name="AED"
                                                                                              data-cur-multiplier="0.037508673880835"
                                                                                              type="tel"
                                                                                              inputmode="decimal"
                                                                                              class="xxx-input-converter__input xxx-full-width"><span
                        class="xxx-input-converter__before-text"> AED </span><span
                        class="xxx-input-converter__close" data-input-converter-clear=""><i
                            class="fas fa-times"></i></span><img class="xxx-input-converter__img"
                                                                  src="images/united-arab-emirates.svg"
                                                                  alt="AED-icon"></div>
            </div>
            <div class="xxx-mt-15 xxx-df xxx-df--jsb xxx-df-aic">
                <button @click="showOrHiddenCurrency(!showCurrency)" class="xxx-g-link xxx-ws-nw xxx-mr-10" data-show-courses="btn">{{getNameButtonForHidden()}}</button>
            </div>
        </div>
    </div>
</div>

<script src="js/converter.js"></script>
let app = new Vue({
    el: '#app',
    data: {
        showCurrency: false,
        currencyList: {},
        currencyForConverter: [
            'RUB',
            'USD',
            'EUR',
            'CNY',
            'BYN',
            'GBP',
            'KZT',
            'PLN',
            'TRY',
            'CHF',
            'JPY',
            'AED'
        ],
        hiddenCurrency: [
            'GBP',
            'KZT',
            'PLN',
            'TRY',
            'CHF',
            'JPY',
            'AED'
        ],
        rubValue: 100,
        currencyValues: {
            RUB: 100,
            USD: 0,
            EUR: 0,
            CNY: 0,
            BYN: 0,
            GBP: 0,
            KZT: 0,
            PLN: 0,
            TRY: 0,
            CHF: 0,
            JPY: 0,
            AED: 0
        }
    },
    methods: {
        handlePaste: function(event) {
            const pastedData = event.clipboardData.getData('text');
            const validNumber = /^\d+(\.\d+)?$/.test(pastedData);
            if (!validNumber) {
                event.preventDefault();
            }
        },
        getNameButtonForHidden: function() {
            if (this.showCurrency) {
                return "Скрыть курсы";
            } else {
                return "Показать все курсы";
            }
        },
        showOrHiddenCurrency: function(value) {
            this.showCurrency = value;
            let divs = document.getElementsByClassName('xxx-input-converter');
            for (var i = 0; i < divs.length; i++) {
                let input = divs[i].getElementsByTagName('input')[0];
                if (input && this.hiddenCurrency.includes(input.getAttribute('data-cur-name'))) {
                    if (this.showCurrency) {
                        divs[i].classList.remove('xxx-hidden');
                    } else {
                        divs[i].classList.add('xxx-hidden');
                    }
                }
            }
        },
        findCurrencyByCode: function(code) {
            return this.currencyList.find(currency => currency.name_code === code);
        },
        calculateCurrency: function(code) {

            if (typeof code !== 'string' || !isNaN(code)) {
                return;
            }

            let valueForRub = 0;

            if (code !== 'RUB') {
                let mainCurrency = this.findCurrencyByCode(code);
                valueForRub = (this.currencyValues[code] * mainCurrency.rate).toFixed(4);

            }

            this.currencyForConverter.forEach(currencyCode => {
                if (code !==  currencyCode) {
                    let currency = this.findCurrencyByCode(currencyCode);
                    if (currency) {
                        if (code === 'RUB') {
                            let value = (this.currencyValues['RUB'] / currency.rate).toFixed(4);
                            this.currencyValues[currencyCode] = parseFloat(value);
                        } else {
                            this.currencyValues['RUB'] = valueForRub;
                            let value = (valueForRub / currency.rate).toFixed(4);
                            this.currencyValues[currencyCode] = parseFloat(value);
                        }
                    }
                }
            });
        },
        setCurrency: function() {
            this.currencyForConverter.forEach(currencyCode => {
                let currency = this.findCurrencyByCode(currencyCode);
                if (currency) {
                    let value = (this.rubValue / currency.rate).toFixed(4);
                    this.$set(this.currencyValues, currencyCode, parseFloat(value));
                }
            });
        },
        getCurrency: function() {
            axios.get('/api/currency')
                .then(response => {
                    this.currencyList = response.data;
                    this.setCurrency();
                })
                .catch(error => {
                    console.error(error);
                });
        },
        clearInput: function() {
            this.rubValue = '';
        },
        // Добавьте методы для очистки других полей ввода
    },
    created: function() {
        this.getCurrency();
    },
});



import CartAsyncMethods from "./CartAsyncMethods.js";
import Alert from "./Alert.js";
import StaticFunctions from "./StaticFunctions.js";
import Dadata from "./Dadata.js";
import Sdek from "./Sdek.js";

export default class {

    container = null;
    dadataResponse = [];

    constructor(selector) {
        this.checkout = document.querySelector(selector);
        if (this.checkout) {
            this.checkout.addEventListener('change', (e) => {
                const body = new FormData
                if (e.target.hasAttribute('[data-payment-method-input]') || e.target.closest('[data-payment-method-input]')) {
                    body.append('payment_method', e.target.value)
                    this.updateViewCheckOut(body);
                }
                if (e.target.hasAttribute('[data-shipping-type-input]') || e.target.closest('[data-shipping-type-input]')) {
                    body.append('shipping_method', e.target.value)
                    this.updateViewCheckOut(body);
                }
                if (e.target.hasAttribute('[data-bonuses-switch]') || e.target.closest('[data-bonuses-switch]')) {
                    if (e.target.checked) {
                        body.append('bonuses', e.target.value);
                    } else {
                        body.append('bonuses', '');
                    }
                    this.updateViewCheckOut(body);
                }
                if (e.target.hasAttribute('[data-checkout-agree]') || e.target.closest('[data-checkout-agree]')) {
                    if (e.target.checked) {
                        body.append(e.target.dataset.checkoutAgree, '1');
                    } else {
                        body.append(e.target.dataset.checkoutAgree, '');
                    }
                    this.updateViewCheckOut(body);
                }
            });
            this.checkout.addEventListener('click', (e) => {
                const target = e.target;
                if (target.hasAttribute('[data-product-remove]') || target.closest('[data-product-remove]')) {
                    const btn = target.closest('[data-product-remove]');
                    if (btn) {
                        this.cartId = btn.dataset.productRemove;
                        CartAsyncMethods.remove(this.cartId).then(r => {
                            if (r.success) {
                                this.updateViewMiniCart();
                                Alert.add(r.success);
                                this.updateViewCheckOut();
                                CartAsyncMethods.getQuantityCart().then(r => {
                                    this.updateQuantityIconMiniCart(r.quantity);
                                })
                            }
                        });
                    }
                }
                if (target.hasAttribute('[data-checkout-confirm]') || target.closest('[data-checkout-confirm]')) {

                    const inputs = document.querySelectorAll('[data-checkout-input]');
                    const agree = document.querySelector('[data-checkout-agree]');
                    const body = new FormData;
                    inputs.forEach(input => {
                        body.append(input.dataset.checkoutInput, input.value);
                    });
                    if (agree.checked) {
                        body.append(agree.dataset.checkoutAgree, '1');
                    }
                    this.updateViewCheckOut(body).then(data => {
                        this.validate(body).then(r => {
                            if (r) {
                                console.log(r);
                                let parser = new DOMParser();
                                let doc = parser.parseFromString(r, 'text/html');
                                let item = doc.querySelector('.checkout-content');
                                let cartUl = document.querySelector('.checkout-inner');
                                cartUl.innerHTML = '';
                                cartUl.appendChild(item);
                                // const body = new FormData;
                                // this.updateViewCheckOut(body);
                            } else {
                                fetch('index.php?route=checkout/confirm', {
                                    method: 'POST',
                                    body: body
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            // let parser = new DOMParser();
                                            // let doc = parser.parseFromString(data, 'text/html');
                                            // let item = doc.querySelector('.checkoutConfirm');
                                            // let cartUl = document.querySelector('.checkout-content');
                                            // cartUl.innerHTML = '';
                                            // cartUl.appendChild(item);
                                            let baseUrl = document.location.protocol + '//' + document.location.hostname + '/';
                                            const newUrl = new URL(baseUrl + 'index.php?route=checkout/success');
                                            window.location.href = newUrl.toString();
                                        }
                                    })
                                    .catch(error => console.error('Error:', error));
                            }
                        })
                    });

                    // console.log(r);
                    // if (!r) {
                    //     console.log(r);
                    //     let parser = new DOMParser();
                    //     let doc = parser.parseFromString(r, 'text/html');
                    //     let items = doc.querySelectorAll('.checkout-content');
                    //     let cartUl = document.querySelector('.checkout-inner');
                    // } else {
                    //
                    // }
                    // if (r.fail) {
                    //     this.updateViewCheckOut();
                    // } else {
                    //     console.log('next');
                    // }
                    // });
                }
                if (target.hasAttribute('[data-checkout-cart-consist-btn]') || target.closest('[data-checkout-cart-consist-btn]')) {
                    const target = e.target.closest('[data-checkout-cart-consist-btn]');
                    const parent = target.closest('[data-checkout-cart-consist]');
                    if (parent) {
                        parent.classList.toggle('active');
                    }
                }
                // if (target.hasAttribute('[data-dadata-key]') || target.closest('[data-dadata-key]')) {
                //     const element = target.closest('[data-dadata-key]');
                //     const key = element.dataset.dadataKey;
                //     if (this.dadataResponse[key]) {
                //         this.address = this.dadataResponse[key].data;
                //         console.log(this.address);
                //         this.checkout.querySelectorAll('[data-checkout-dadata-input]').forEach(input => {
                //             const inputType = input.dataset.checkoutDadataInput;
                //             if (inputType == 'zone_id' || inputType == 'zone') {
                //                 const zone = this.getOpencartRegion(this.address['region_iso_code']);
                //                 if (zone) {
                //                     if (inputType == 'zone_id') {
                //                         input.value = zone.id;
                //                     } else if (inputType == 'zone') {
                //                         input.value = zone.name;
                //                     }
                //                 }
                //             } else {
                //                 if (this.address[inputType] && this.address[inputType] != null) {
                //                     input.value = this.address[inputType];
                //                 } else {
                //                     input.value = '';
                //                 }
                //             }
                //         });
                //         this.container.remove();
                //     }
                // }
                if (this.container && !this.container.contains(target)) {
                    this.container.remove();
                }
                if (target.hasAttribute('[data-shipping-type-sdek]') || target.closest('[data-shipping-type-sdek]')) {
                    this.sdek = document.querySelector([data - sdek - info]);
                    if (this.sdek) {
                        this.tariff = this.sdek.dataset.sdekInfoCode;
                        this.tariff_type = this.sdek.dataset.sdekInfoPvztype;
                        if (this.tariff && this.tariff_type) {
                            Sdek.cdekPvzClick(this.tariff, this.tariff_type);
                        }
                    }
                }
            })
            this.checkout.addEventListener('focusout', (e) => {
                const target = e.target;
                if (target.hasAttribute('data-checkout-input')) {
                    let focusOutTimeout;
                    focusOutTimeout = setTimeout(() => {
                        const inputs = document.querySelectorAll('[data-checkout-input]');
                        const body = new FormData;
                        inputs.forEach(input => {
                            body.append(input.dataset.checkoutInput, input.value);
                        });
                        // body.append(target.dataset.checkoutInput, target.value);
                        this.updateViewCheckOut(body);
                    }, 200);

                    this.checkout.addEventListener('focusin', () => {
                        clearTimeout(focusOutTimeout);
                    });

                    this.checkout.addEventListener('input', () => {
                        clearTimeout(focusOutTimeout);
                    });

                    this.checkout.addEventListener('click', (e) => {
                        const target = e.target;
                        if (target.hasAttribute('[data-dadata-key]') || target.closest('[data-dadata-key]')) {
                            clearTimeout(focusOutTimeout);
                        }
                    });
                }
            })
            this.checkout.addEventListener('input', (e) => {
                const target = e.target;
                if (StaticFunctions.checkTarget(target, 'data-checkout-input')) {
                    const input = StaticFunctions.checkTarget(target, 'data-checkout-input');
                    // if (input.dataset.checkoutInput) {
                    //     const inputs = document.querySelectorAll('[data-checkout-dadata-input]');
                    //     let dataInput = {
                    //         'country': 'Россия',
                    //         'city': '',
                    //         'street': '',
                    //         // 'house': '',
                    //         // 'flat': '',
                    //     };
                    //     inputs.forEach(input => {
                    //         const inputType = input.dataset.checkoutDadataInput.trim();
                    //         if (dataInput.hasOwnProperty(inputType)) {
                    //             dataInput[inputType] = input.value;
                    //         }
                    //     });
                    //     let values = Object.values(dataInput);
                    //     let filteredValues = values.filter(value => value !== '');
                    //     let queryString = filteredValues.join(', ');
                    //     let data = {
                    //         query: queryString
                    //     }
                    //     const parentElement = input.parentElement;
                    //     Dadata.getData(data).then(r => {
                    //         this.dadataResponse = r.suggestions;
                    //         let restrictResponse = this.dadataResponse.slice(0, 5);
                    //         this.createSelectElement(restrictResponse, parentElement);
                    //     })
                    //
                    //     // if (input.dataset.checkoutInput == 'city') {
                    //     //     let data = {
                    //     //         query: input.value
                    //     //     }
                    //     //
                    //     //     const parentElement = input.parentElement;
                    //     //     Dadata.getData(data).then(r => {
                    //     //         this.dadataResponse = r.suggestions;
                    //     //         let restrictResponse = this.dadataResponse.slice(0, 5);
                    //     //         this.createSelectElement(restrictResponse, parentElement);
                    //     //     })
                    //     //     this.dadataResponse = [
                    //     //         {
                    //     //             data: {
                    //     //                 postal_code: "610000",
                    //     //                 region_iso_code: "RU-KIR",
                    //     //                 city: "Киров",
                    //     //                 street: "Примерная",
                    //     //                 house: "1",
                    //     //                 flat: "2"
                    //     //             },
                    //     //             unrestricted_value: "Кировская обл",
                    //     //         },
                    //     //         {
                    //     //             data: {
                    //     //                 postal_code: "650000",
                    //     //                 region_iso_code: "RU-ARK",
                    //     //                 city: "Москва",
                    //     //                 street: "Топорная",
                    //     //                 house: "2",
                    //     //                 flat: null
                    //     //             },
                    //     //             unrestricted_value: "610000, Кировская обл, г Киров",
                    //     //         },
                    //     //         {
                    //     //             data: {
                    //     //                 postal_code: "810000",
                    //     //                 region_iso_code: "RU-IVA",
                    //     //                 city: "Вологда",
                    //     //                 street: "Заборная",
                    //     //                 house: null,
                    //     //                 flat: null
                    //     //             },
                    //     //             unrestricted_value: "613040, Кировская обл, г Кирово-Чепецк",
                    //     //         },
                    //     //         {
                    //     //             data: {
                    //     //                 postal_code: "970000",
                    //     //                 region_iso_code: "RU-KIR",
                    //     //                 city: "Пермь",
                    //     //                 street: null,
                    //     //                 house: null,
                    //     //                 flat: null
                    //     //             },
                    //     //             unrestricted_value: "187350, Ленинградская обл, Кировский р-н | 187350, Ленинградская обл, Кировский р-н",
                    //     //         },
                    //     //         {
                    //     //             data: {
                    //     //                 postal_code: "320000",
                    //     //                 region_iso_code: "RU-KIR",
                    //     //                 city: null,
                    //     //                 street: null,
                    //     //                 house: null,
                    //     //                 flat: null
                    //     //             },
                    //     //             unrestricted_value: "Ставропольский край, Кировский р-н",
                    //     //         },
                    //     //         {
                    //     //             unrestricted_value: "Луганская Народная респ, г Кировск",
                    //     //         },
                    //     //     ];
                    //     //     let restrictResponse = this.dadataResponse.slice(0, 5);
                    //     //     this.createSelectElement(restrictResponse, parentElement);
                    // }
                }
            });
        }
    }

    async updateViewCheckOut(body, returnPromise = false) {

        // fetch('index.php?route=checkout/checkout/info', {
        //     method: 'POST',
        //     body: body
        // })
        //     .then(response => response.text())
        //     .then(data => {
        //         let parser = new DOMParser();
        //         let doc = parser.parseFromString(data, 'text/html');
        //         let items = doc.querySelectorAll('.checkout-content');
        //         let cartUl = document.querySelector('.checkout-inner');
        //         cartUl.innerHTML = '';  // Очистим текущие элементы
        //         items.forEach(item => {
        //             cartUl.appendChild(item);
        //         });
        //     })
        //     .catch(error => console.error('Error:', error));

        return new Promise(async resolve => {
            // Запрос
            let result = await fetch('/index.php?route=checkout/checkout/info', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            let parser = new DOMParser();
            let doc = parser.parseFromString(data, 'text/html');
            let items = doc.querySelectorAll('.checkout-content');
            let cartUl = document.querySelector('.checkout-inner');
            cartUl.innerHTML = '';  // Очистим текущие элементы
            items.forEach(item => {
                cartUl.appendChild(item);
            });
            resolve(data);
        })
    }

    async updateViewMiniCart() {
        fetch('index.php?route=common/cart/info')
            .then(response => response.text())
            .then(data => {
                let parser = new DOMParser();
                let doc = parser.parseFromString(data, 'text/html');
                let items = doc.querySelectorAll('.miniCart-dropDawn__inner');
                let cartUl = document.querySelector('.miniCart-dropDawn');
                cartUl.innerHTML = '';  // Очистим текущие элементы
                items.forEach(item => {
                    cartUl.appendChild(item);
                });
            })
            .catch(error => console.error('Error:', error));
    }

    async validate(body) {
        return new Promise(async resolve => {
            // Запрос
            let result = await fetch('/index.php?route=checkout/checkout/validate', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            resolve(data);
        })
    }

    updateQuantityIconMiniCart(quantity) {
        // document.querySelector('#cart-total').textContent = quantity;
        document.querySelectorAll('[data-mini-cart-total]').forEach(el => el.textContent = r.quantity);
    }

    createSelectElement(data, parentElement) {
        parentElement.querySelectorAll('.dadata-container').forEach(s => s.remove());
        this.container = document.createElement('div');
        this.container.classList.add('dadata-container');
        data.forEach((sugesstion, key) => {
            let div = document.createElement('div');
            div.classList.add('dadata-container__item');
            div.setAttribute('data-dadata-key', key);
            div.textContent = sugesstion.unrestricted_value;
            this.container.append(div);
        });
        parentElement.append(this.container);
    }

    getOpencartRegion(isoCode) {
        const regions = {
            "RU-ALT": {'id': 50, 'name': 'Алтайский край'},
            "RU-AMU": {'id': 53, 'name': 'Амурская обл'},
            "RU-ARK": {'id': 48, 'name': 'Архангельская обл'},
            "RU-AST": {'id': 49, 'name': 'Астраханская обл'},
            "RU-BEL": {'id': 51, 'name': 'Белгородская обл'},
            "RU-BRY": {'id': 54, 'name': 'Брянская обл'},
            "RU-VLA": {'id': 118, 'name': 'Владимирская обл'},
            "RU-VGG": {'id': 120, 'name': 'Волгоградская обл'},
            "RU-VLG": {'id': 121, 'name': 'Вологодская обл'},
            "RU-VOR": {'id': 122, 'name': 'Воронежская обл'},
            "RU-YEV": {'id': 52, 'name': 'Еврейская обл'},
            "RU-ZAB": {'id': 58, 'name': 'Забайкальский край'},
            "RU-IVA": {'id': 65, 'name': 'Ивановская обл'},
            "RU-IRK": {'id': 64, 'name': 'Ивановская обл'},
            "RU-KGD": {'id': 67, 'name': 'Калининградская обл'},
            "RU-KLU": {'id': 68, 'name': 'Калужская обл'},
            "RU-KAM": {'id': 96, 'name': 'Камчатский край'},
            "RU-KC": {'id': 57, 'name': 'Кемеровская обл'},
            "RU-KEM": {'id': 70, 'name': 'Кемеровская обл'},
            "RU-KIR": {'id': 123, 'name': 'Кировская обл'},
            "RU-KOS": {'id': 73, 'name': 'Костромская обл'},
            "RU-KDA": {'id': 74, 'name': 'Краснодарский край'},
            "RU-KYA": {'id': 75, 'name': 'Красноярский край'},
            "RU-KGN": {'id': 76, 'name': 'Курганская обл'},
            "RU-KRS": {'id': 77, 'name': 'Курская обл'},
            "RU-LEN": {'id': 59, 'name': 'Ленинградская обл'},
            "RU-LIP": {'id': 79, 'name': 'Липецкая обл'},
            "RU-MAG": {'id': 80, 'name': 'Магаданская обл'},
            "RU-MOW": {'id': 83, 'name': 'Москва'},
            "RU-MOS": {'id': 46, 'name': 'Московская обл'},
            "RU-MUR": {'id': 84, 'name': 'Мурманская обл'},
            "RU-NEN": {'id': 86, 'name': 'Ненецкий АО'},
            "RU-NIZ": {'id': 88, 'name': 'Нижегородская обл'},
            "RU-NGR": {'id': 89, 'name': 'Новгородская обл'},
            "RU-NVS": {'id': 90, 'name': 'Новосибирская обл'},
            "RU-OMS": {'id': 91, 'name': 'Омская обл'},
            "RU-ORE": {'id': 93, 'name': 'Оренбургская обл'},
            "RU-ORL": {'id': 92, 'name': 'Орловская обл'},
            "RU-PNZ": {'id': 94, 'name': 'Пензенская обл'},
            "RU-PER": {'id': 95, 'name': 'Пермский край'},
            "RU-PRI": {'id': 119, 'name': 'Приморский край'},
            "RU-PSK": {'id': 98, 'name': 'Псковская обл'},
            "RU-AD": {'id': 82, 'name': 'Республика Адыгея'},
            "RU-AL": {'id': 62, 'name': 'Республика Алтай'},
            "RU-BA": {'id': 114, 'name': 'Республика Башкортостан'},
            "RU-BU": {'id': 116, 'name': 'Республика Бурятия'},
            "RU-DA": {'id': 81, 'name': 'Республика Дагестан'},
            "RU-IN": {'id': 87, 'name': 'Республика Ингушетия'},
            "RU-KB": {'id': 85, 'name': 'Республика Калмыкия'},
            "RU-KL": {'id': 60, 'name': 'Республика Калужская'},
            "RU-KR": {'id': 97, 'name': 'Республика Карелия'},
            "RU-KO": {'id': 108, 'name': 'Республика Коми'},
            "RU-ME": {'id': 127, 'name': 'Республика Марий Эл'},
            "RU-MO": {'id': 103, 'name': 'Республика Мордовия'},
            "RU-SA": {'id': 124, 'name': 'Республика Саха'},
            "RU-SE": {'id': 117, 'name': 'Республика Северная Осетия'},
            "RU-TA": {'id': 69, 'name': 'Республика Татарстан'},
            "RU-TY": {'id': 78, 'name': 'Республика Тыва'},
            "RU-KK": {'id': 45, 'name': 'Республика Хакасия'},
            "RU-ROS": {'id': 99, 'name': 'Ростовская обл'},
            "RU-RYA": {'id': 100, 'name': 'Рязанская область'},
            "RU-SAM": {'id': 102, 'name': 'Самарская обл'},
            "RU-SPE": {'id': 106, 'name': 'Санкт-Петербург'},
            "RU-SAR": {'id': 104, 'name': 'Саратовская область'},
            "RU-SAK": {'id': 61, 'name': 'Сахалинская обл'},
            "RU-SVE": {'id': 126, 'name': 'Свердловская область'},
            "RU-SMO": {'id': 105, 'name': 'Смоленская обл'},
            "RU-STA": {'id': 107, 'name': 'Ставропольский край'},
            "RU-TAM": {'id': 109, 'name': 'Тамбовская область'},
            "RU-TVE": {'id': 112, 'name': 'Тверская область'},
            "RU-TOM": {'id': 110, 'name': 'Томская область'},
            "RU-TUL": {'id': 111, 'name': 'Тульская область'},
            "RU-TYU": {'id': 113, 'name': 'Тюменская область'},
            "RU-UD": {'id': 66, 'name': 'Удмуртская Республика'},
            "RU-ULY": {'id': 115, 'name': 'Ульяновская область'},
            "RU-KHA": {'id': 71, 'name': 'Хабаровский край'},
            "RU-KHM": {'id': 72, 'name': 'Ханты-Мансийский автономный округ - Югра'},
            "RU-CHE": {'id': 56, 'name': 'Челябинская область'},
            "RU-CE": {'id': 63, 'name': 'Чеченская Республика'},
            "RU-CU": {'id': 55, 'name': 'Чувашская Республика —  Чувашия'},
            "RU-CHU": {'id': 47, 'name': 'Чукотский автономный округ'},
            "RU-YAN": {'id': 101, 'name': 'Ямало-Ненецкий автономный округ'},
            "RU-YAR": {'id': 125, 'name': 'Ярославская область'},
        };

        return regions.hasOwnProperty(isoCode) ? regions[isoCode] : false;
    }
}
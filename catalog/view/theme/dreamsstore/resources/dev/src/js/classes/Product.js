export default class {

    constructor(selector) {
        this.block = document.querySelector(selector)
        if (this.block) {
            this.block.addEventListener('click', (e) => {
                const target = e.target;
                if (target.dataset.productId) {
                    this.calculate_price_handler = this.calculatePrice.bind(this)
                    this.quantity = 1;
                    this.productId = e.target.dataset.productId;
                    this.option_change_handler = this.calculate_price_handler
                    this.options = this.block.querySelectorAll('[data-option-product-id="' + this.productId + '"]');
                    // this.options.forEach(option => {
                    //     const option_inputs = option.querySelectorAll('[data-option-input-product-id="' + this.productId + '"]')
                    //
                    //     if (option_inputs.length) {
                    //         option_inputs.forEach(option_input => option_input.addEventListener('change', this.option_change_handler))
                    //     }
                    // });
                    if (target.dataset.addToCart) {
                        this.add().then(r => {
                            console.log(r)
                        });
                    }
                }
            })
        }
    }

    async add() {
        return new Promise(async resolve => {
            // Начальные параметры
            const body = new FormData()
            body.append('product_id', this.productId)
            body.append('quantity', this.quantity)

            // Опции
            const options = this.getOptions()

            for (let name in options) {
                body.append(name, options[name])
            }

            console.log(options);

            // Запрос
            let result = await fetch('/index.php?route=checkout/cart/add', {
                method: 'POST',
                body: body
            })

            // Результат
            result = await result.json()

            // if (result.success) {
            //     Alert.add('Товар добавлен в корзину покупок')
            //
            //     // window.dispatchEvent(new Event('product_add'))
            //     this.product.dispatchEvent(new Event('product_add'))
            //
            //     resolve(true)
            // }
            //
            // if (result.error) {
            //     if (result.error.option) {
            //         for (let error_key in result.error.option) {
            //             const error = result.error.option[error_key]
            //             Alert.add(error, 'error')
            //         }
            //     }
            // }
            //
            // resolve(false)
        })
    }

    getOptions() {
        let options = {}

        this.options.forEach(option => {
            const type = option.dataset.option
            let option_input = null

            console.log(type);

            switch (type) {
                case 'select':
                case 'text': {
                    option_input = option.querySelector('input')
                    const name = option_input.name
                    const value = option_input.value

                    options[name] = value
                }
                    break
                case 'radio':
                case 'material': {
                    option_input = option.querySelector('input:checked')

                    if (option_input) {
                        const name = option_input.name
                        const value = option_input.value

                        options[name] = value
                    }
                }
                    break
                case 'checkbox': {
                    const option_inputs = option.querySelectorAll('input:checked')
                    console.log(option_inputs)
                    option_inputs.forEach((input, key) => {
                        options[input.name + '[' + key + ']'] = input.value
                    })
                }
                    break
                case 'composit': {
                    const products = option.querySelectorAll('[data-product-composit]')

                    if (products.length) {
                        products.forEach(product => {
                            const product_id = product.dataset.productId
                            const name = 'composit[' + product_id + ']'

                            // Quantity
                            const quantity_name = name + '[quantity]'
                            const quantity = product.querySelector('[data-counter-value]').dataset.counterValue

                            options[quantity_name] = quantity

                            // Options
                            const composit_options = product.querySelectorAll('[data-option-product-id="' + product_id + '"]')

                            composit_options.forEach(composit_option => {
                                const composit_option_type = composit_option.dataset.option

                                switch (composit_option_type) {
                                    case 'select': {
                                        const composit_option_input = composit_option.querySelector('input')
                                        const composit_option_id = composit_option_input.dataset.optionId
                                        const composit_option_name = name + '[option][' + composit_option_id + ']'
                                        const composit_option_value = composit_option_input.value

                                        options[composit_option_name] = composit_option_value
                                    }
                                        break
                                }

                            })

                        })
                    }
                }
                    break
            }
        })

        return options
    }

    async calculatePrice() {
        const body = new FormData
        body.append('product_id', this.productId)

        // Опции
        const options = this.getOptions()

        for (let name in options) {
            body.append(name, options[name])
        }

        // Основание
        const foundation = this.getFoundation()

        if (foundation) {
            body.append('foundation_product_id', foundation)
        }

        let result = await fetch('/index.php?route=product/product/calculatePriceAjax', {
            method: 'POST',
            body: body
        })

        result = await result.json()

        if (result.price && this.price_label) {
            this.price_label.innerHTML = result.price_format
        }

        if (result.special && this.special_label) {
            this.special_label.innerHTML = result.special_format

            this.price_diff_label.innerHTML = result.diff
        }

        if (result.foundations) {
            window.dispatchEvent(new CustomEvent('update_foundations', {
                detail: {
                    foundations: result.foundations
                }
            }))
        }

        if (result.material_groups) {
            window.dispatchEvent(new CustomEvent('update_material_groups', {
                detail: {
                    material_groups: result.material_groups
                }
            }))
        }

        this.product.dispatchEvent(new Event('price_calculated'))
    }
}
import StaticFunctions from "./StaticFunctions.js";

class Filter {
    constructor(selector) {

        this.filter = document.querySelector(selector);
        this.filterModalBtnOpen = document.querySelector('[data-filter-modal-btn]');
        this.filterModalBtnClose = document.querySelector('[data-filter-modal-close]');

        if (this.filter) {
            this.filter.addEventListener('click', (e) => {
                this.ranges = this.filter.querySelectorAll('[data-filter-range]');
                this.checkboxes = this.filter.querySelectorAll('[data-filter-checkbox]');

                const target = e.target;

                if (StaticFunctions.checkTarget(target, 'data-filter-apply')) {
                    this.apply();
                }

                if (StaticFunctions.checkTarget(target, 'data-filter-reset')) {
                    this.reset();
                }
            });
        }

        if (this.filterModalBtnOpen) {
            this.filterModalBtnOpen.addEventListener('click', () => {
                this.filter.classList.add('open');
            })
        }

        if (this.filterModalBtnClose) {
            this.filterModalBtnClose.addEventListener('click', () => {
                if (this.filter.classList.contains('open')) {
                    this.filter.classList.remove('open');
                }
            });
        }
    }

    apply() {
        let params = {};
        const url = new URL(window.location);
        const exsists_params = Object.fromEntries(url.searchParams.entries());

        // Диапозоны
        this.ranges.forEach(range => {
            // Min
            const min = range.querySelector('[data-filter-min]')
            const min_name = min.name
            const min_value = min.value

            if (min_value) {
                const exsist_in_params = Object.keys(exsists_params).find(item => item === min_name)

                if (exsist_in_params) {
                    exsists_params[min_name] = min_value
                } else {
                    params[min_name] = min_value
                }
            } else {
                const exsist_in_params = Object.keys(exsists_params).find(item => item === min_name)

                if (exsist_in_params) {
                    delete exsists_params[min_name]
                }
            }

            // Max
            const max = range.querySelector('[data-filter-max]')
            const max_name = max.name
            const max_value = max.value

            if (max_value) {
                const exsist_in_params = Object.keys(exsists_params).find(item => item === max_name)

                if (exsist_in_params) {
                    exsists_params[max_name] = max_value
                } else {
                    params[max_name] = max_value
                }
            } else {
                const exsist_in_params = Object.keys(exsists_params).find(item => item === max_name)

                if (exsist_in_params) {
                    delete exsists_params[max_name]
                }
            }
        })

        // // Селекты кнопки
        // if (this.selects.length) this.selects.forEach(select_block => {
        //     const input = select_block.querySelector('input')
        //     const name = input.name
        //     const value = input.value
        //
        //     const exsist_in_params = Object.keys(exsists_params).find(item => item === name)
        //
        //     if (exsist_in_params) {
        //         exsists_params[name] = value
        //     } else {
        //         params[name] = value
        //     }
        // })
        //
        // // Радио кнопки
        // if (this.radios.length) this.radios.forEach(radio_block => {
        //     const checked = radio_block.querySelector('input:checked')
        //     const name = checked.name
        //     const value = checked.value
        //
        //     const exsist_in_params = Object.keys(exsists_params).find(item => item === name)
        //
        //     if (exsist_in_params) {
        //         exsists_params[name] = value
        //     } else {
        //         params[name] = value
        //     }
        // })

        // Чекбоксы
        if (this.checkboxes.length) {
            this.checkboxes.forEach(checkbox_block => {
                const checked = checkbox_block.querySelectorAll('input:checked')

                if (checked.length) {
                    const name = checked[0].name
                    let value = []

                    checked.forEach(c => {
                        value.push(c.value)
                    })

                    value = value.join('|')

                    const exsist_in_params = Object.keys(exsists_params).find(item => item === name)

                    if (exsist_in_params) {
                        exsists_params[name] = value
                    } else {
                        params[name] = value
                    }
                } else {
                    const name = checkbox_block.querySelector('input').name
                    const exsist_in_params = Object.keys(exsists_params).find(item => item === name)

                    if (exsist_in_params) {
                        delete exsists_params[name]
                    }
                }
            })
        }

        params = Object.assign(params, exsists_params)
        params = Object.keys(params).map(key => key + '=' + params[key]).join('&');

        const url_origin = url.origin;
        const url_pathname = url.pathname;

        const redirect = `${url_origin}${url_pathname}?${params.toString()}`

        location.href = redirect;
    }

    reset() {
        const inputs = this.filter.querySelectorAll('input')

        console.log(inputs)
        inputs.forEach(input => {
            const type = input.type

            switch (type) {
                case 'text': {
                    input.value = ''
                }
                    break;
                case 'radio':
                case 'checkbox': {
                    input.checked = false
                }
            }
        })

        this.apply()
    }

    static init(selector) {
        new Filter(selector);
    }
}

Filter.init('[data-filter]')

class Colors {

    counter = 0;

    constructor(sort) {
        this.sort = sort
        this.input = this.sort.querySelector('[name=sort]')
        this.input.addEventListener('change', this.change.bind(this))
    }

    change() {

        if (this.counter != 0) {
            let params = {}
            const url = new URL(window.location)
            const exsists_params = Object.fromEntries(url.searchParams.entries())
            const name = this.input.name
            const value = this.input.value
            const exsist_in_params = Object.keys(exsists_params).find(item => item === name)

            if (exsist_in_params) {
                exsists_params[name] = value
            } else {
                params[name] = value
            }

            params = Object.assign(params, exsists_params)
            params = Object.keys(params).map(key => key + '=' + params[key]).join('&');

            const url_origin = url.origin;
            const url_pathname = url.pathname;

            const redirect = `${url_origin}${url_pathname}?${params.toString()}`

            location.href = redirect
        }
        this.counter++;
    }

    static init() {
        const sort = document.querySelector('.colors')

        if (sort) {
            new Colors(sort)
        }
    }
}

Colors.init()


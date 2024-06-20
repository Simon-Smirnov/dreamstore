// import Product from "./Product.js";
// import Wishlist from "./Wishlist.js";
// import Modal from "./Modal.js";

let loadmore = null

class Loadmore {
    constructor(loadmore) {
        this.loadmore = loadmore
        // this.loadmore.disabled = false

        this.active_index = null
        this.item_identy_name = this.loadmore.dataset.itemsIdentyName

        this.list = document.querySelector('[data-items-identy]')
        this.load_handler = this.load.bind(this)
        this.loadmore.addEventListener('click', this.load_handler)
    }

    getUrl() {
        let pagination = document.querySelector('[data-pagination]')

        if (pagination) {
            let items = pagination.querySelectorAll('.pagination__item')

            if (items.length) {
                let target_item = null
                let href = ''

                // if (!this.active_index) {
                items.forEach((item, index) => {
                    if (item.classList.contains('active')) {
                        this.active_index = index
                    }
                })
                // }

                if (this.active_index + 1 <= (items.length - 1)) {
                    this.active_index += 1
                }

                target_item = items[this.active_index]

                if (target_item) {
                    if (target_item.querySelector('a')) {
                        href = target_item.querySelector('a').href
                    }
                }

                return href
            }
        }
    }

    async load() {
        this.loadmore.disabled = true

        let url = this.getUrl()

        if (url) {
            let response = await fetch(url, {
                method: 'GET'
            })

            response = await response.text()

            const parser = new DOMParser();
            const html_object = parser.parseFromString(response, "text/html");

            this.work(html_object)
        }

        this.loadmore.disabled = false
    }

    work(object) {
        let items = object.querySelectorAll('.' + this.item_identy_name)

        console.log(this.list)

        items.forEach(item => {
            this.list.append(item)
        })

        console.log(object.querySelector('[data-loadmore]'))
        if (!object.querySelector('[data-loadmore]')) {
            this.loadmore.remove()
        }

        if (object.querySelector('[data-pagination]')) {
            document.querySelector('[data-pagination]').innerHTML =
                object.querySelector('[data-pagination]').innerHTML
        }

        this.reInit()

        // Wishlist.reInit()
        // Modal.reInit()
    }

    reInit() {
        // this.loadmore.removeEventListener('click', this.load_handler)
        // this.loadmore = null
        //
        // Loadmore.init()
    }

    static init() {
        const loadmore_ = document.querySelector('[data-loadmore]')

        if (loadmore_) {
            loadmore = new Loadmore(loadmore_)
        }
    }
}

Loadmore.init()
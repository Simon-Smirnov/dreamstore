import Slider from "./Slider.js";

export default class {
    constructor(selectorBtn) {
        this.btnsOpen = document.querySelectorAll(selectorBtn);
        this.content = document.querySelector('[data-header-search]');
        if (this.btnsOpen.length > 0) {
            this.btnsOpen.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const body = new FormData()
                    this.getSearchModal(body).then((data) => {
                        this.content.classList.add('open');
                        this.content.innerHTML = data;
                        document.body.style.overflow = 'hidden';
                        Slider.init()
                        this.btnClose = this.content.querySelector('[data-modal-search-close]');
                        if (this.btnClose) {
                            this.btnClose.addEventListener('click', (e) => {
                                e.preventDefault();
                                this.content.classList.remove('open');
                                document.body.style.overflow = 'auto';
                            });
                        }
                    });
                });
            })
        }
        if (this.content) {
            this.content.addEventListener('input', (e) => {
                e.preventDefault();
                let phrase = e.target.value.trim();
                if (phrase != '') {
                    const body = new FormData();
                    body.append('phrase', e.target.value.trim());
                    this.getQuickTips(body).then((data) => {
                        if (data) {
                            console.log(data);
                            let tipsContent = this.content.querySelector('[data-seacrh-modal-tips]');
                            if (tipsContent) {
                                tipsContent.innerHTML = data;
                            }
                        }
                    })
                }
            });
            this.content.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') {
                    let phrase = e.target.value.trim();
                    if (phrase != '') {
                        let baseUrl = document.location.protocol + '//' + document.location.hostname + '/';
                        console.log(baseUrl);
                        const newUrl = new URL(baseUrl + 'index.php?route=product/search');
                        newUrl.searchParams.set('search', phrase);
                        window.location.href = newUrl.toString();
                    }
                }
            });
        }
    }

    async getSearchModal(body) {
        return new Promise(async resolve => {
            // Запрос
            let result = await fetch('/index.php?route=product/search/getSearchModal', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            resolve(data);
        })
    }

    async getQuickTips(body) {
        return new Promise(async resolve => {
            // Запрос
            let result = await fetch('/index.php?route=product/search/quickTips', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            resolve(data);
        })
    }

    async search(body) {
        return new Promise(async resolve => {
            // Запрос
            let result = await fetch('/index.php?route=product/search/quickTips', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            resolve(data);
        })
    }
}
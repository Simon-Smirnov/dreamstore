import Slider from "./Slider.js";

export default class {
    constructor(selectorBtn) {
        this.content = document.querySelector('[data-header-search]');

        document.addEventListener('click', (e) => {
            const target = e.target;
            if (target.hasAttribute(selectorBtn) || target.closest('[' + selectorBtn + ']')) {
                e.preventDefault();
                const body = new FormData()
                this.getSearchModal(body).then((data) => {
                    this.content.classList.add('open');
                    this.content.innerHTML = data;
                    document.body.style.overflowY = 'hidden';
                    Slider.init();
                });
            }
            if ((target.hasAttribute('data-modal-search-close') || target.closest('[data-modal-search-close]')) && this.content.classList.contains('open')) {
                e.preventDefault();
                this.content.classList.remove('open');
                this.content.innerHTML = "";
                document.body.style.overflowY = 'auto';
            }
            if (target.hasAttribute('data-search-modal-input-reset') || target.closest('[data-search-modal-input-reset]')) {
                this.content.querySelector('[data-search-modal-input]').value = '';
            }
            if (this.content && !this.content.contains(target) && this.content.classList.contains('open')) {
                this.content.classList.remove('open');
                this.content.innerHTML = '';
                document.body.style.overflowY = 'auto';
            }
            if (target.hasAttribute('data-search-page-input-reset') || target.closest('[data-search-page-input-reset]')) {
                document.querySelector('[data-search-page-input]').value = '';
            }
            if (target.hasAttribute('search-page-btn') || target.closest('[search-page-btn]')) {
                const input = document.querySelector('[data-search-page-input]');
                const value = input.value;
                let baseUrl = document.location.protocol + '//' + document.location.hostname + '/';
                const newUrl = new URL(baseUrl + 'index.php?route=product/search');
                newUrl.searchParams.set('search', value);
                window.location.href = newUrl.toString();
            }
        })

        if (this.content) {
            this.content.addEventListener('input', (e) => {
                e.preventDefault();
                let phrase = e.target.value.trim();
                if (phrase != '') {
                    const body = new FormData();
                    body.append('phrase', e.target.value.trim());
                    this.getQuickTips(body).then((data) => {
                        if (data) {
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
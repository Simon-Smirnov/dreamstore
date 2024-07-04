export default class {
    constructor(selectorBtn) {
        this.btnOpen = document.querySelector(selectorBtn);
        this.content = document.querySelector('[data-header-search]');
        if (this.btnOpen) {
            this.btnOpen.addEventListener('click', (e) => {
                e.preventDefault();
                const body = new FormData()
                this.getSearchModal(body).then((data) => {
                    this.content.classList.add('open');
                    this.content.innerHTML = data;
                    body.style.overflow = 'hidden';
                });
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
}
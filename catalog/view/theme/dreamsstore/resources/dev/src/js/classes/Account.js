import Alert from "./Alert.js";

export default class {
    constructor(selector) {
        this.selector = selector;
        if (this.selector) {
            this.accountForm = document.querySelector(this.selector);
            this.logoutBtn = document.querySelector('[data-account-logout]');
            if (this.accountForm) {
                console.log(this.accountForm);
                this.accountForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    const form = this.accountForm.querySelector('form');
                    const formData = new FormData(form);
                    this.edit(formData).then(data => {
                        let parser = new DOMParser();
                        let doc = parser.parseFromString(data, 'text/html');
                        let alert = doc.querySelector('[data-account-alert]');
                        if (alert) {
                            Alert.add(alert.value);
                        }
                        let items = doc.querySelectorAll('[data-account-renew]');
                        let cartUl = document.querySelector('[data-account-form]');
                        cartUl.innerHTML = '';  // Очистим текущие элементы
                        items.forEach(item => {
                            cartUl.appendChild(item);
                        });

                    })
                })
            }
            if (this.logoutBtn) {
                this.logoutBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.logout().then(data => {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        }
                    })
                })
            }
        }
    }

    async edit(body) {
        return new Promise(async resolve => {

            console.log(body);

            // Запрос
            let result = await fetch('/index.php?route=account/account/edit', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.text();
            resolve(data);
        })
    }

    async logout() {
        return new Promise(async resolve => {
            // Запрос
            let result = await fetch('/index.php?route=account/account/logout', {
                method: 'POST',
            })
            // Результат
            let data = await result.json();
            resolve(data);
        })
    }
}
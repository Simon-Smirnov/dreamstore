import Modal from "./Modal.js";
import Inputpassword from "./InputPassword.js";

export default class {
    constructor(selector) {
        document.addEventListener('click', (e) => {
            const target = e.target;
            if (target.classList.contains('data-login-btn') || target.closest('[data-login-btn]')) {
                this.content = document.querySelector('[data-login-content]');
                e.preventDefault();
                this.getLoginForm().then(r => {
                    if (r.html) {
                        this.content.innerHTML = r.html;
                        Modal.openTarget('login-modal');
                        new Inputpassword('[data-input-password]');
                        this.content.addEventListener('submit', (e) => {
                            e.preventDefault();
                            const form = this.content.querySelector('form');
                            const formData = new FormData(form);
                            formData.append('back_path', window.location.pathname + window.location.search + window.location.hash)
                            this.fetchWithUrl('account/account/login', formData).then(r =>
                                r.json()).then(data => {
                                if (data.errors) {
                                    for (const errorKey in data.errors) {
                                        if (this.content.querySelector('.error-' + errorKey)) {
                                            this.content.querySelector('.error-' + errorKey).textContent = data.errors[errorKey];
                                        }
                                    }
                                } else if (data.redirect) {
                                    window.location.href = data.redirect;
                                }
                            })
                        });
                    }
                });
            }
        });

    }

    async getLoginForm() {
        return new Promise(async resolve => {
            const body = new FormData;

            // Запрос
            let result = await fetch('/index.php?route=account/account/loginForm', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    async fetchWithUrl(url, body) {
        return new Promise(async resolve => {
            // Запрос
            let result = await fetch('/index.php?route=' + url, {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result;
            resolve(data);
        })
    }
}
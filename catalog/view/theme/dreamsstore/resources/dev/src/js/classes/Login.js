import Modal from "./Modal.js";
import Alert from "./Alert.js";

export default class {
    constructor(selector) {
        document.addEventListener('click', (e) => {
            const target = e.target;
            if (target.classList.contains('data-login-btn') || target.closest('[data-login-btn]')) {
                this.content = document.querySelector('[data-login-content]');
                e.preventDefault();
                this.login();
            }
            if (target.classList.contains('data-change-password-btn') || target.closest('[data-change-password-btn]')) {
                this.content = document.querySelector('[data-login-content]');
                e.preventDefault();
                this.getChangePasswordForm().then(r => {
                    if (r.html) {
                        this.content.innerHTML = r.html;
                        Modal.openTarget('login-modal');
                        this.content.addEventListener('submit', (e) => {
                            e.preventDefault();
                            const form = this.content.querySelector('form');
                            if (form.hasAttribute('data-change-password-form')) {
                                const formData = new FormData(form);
                                this.fetchWithUrl('account/account/forgotten', formData).then(r =>
                                    r.json()).then(data => {
                                    if (data.errors) {
                                        for (const errorKey in data.errors) {
                                            if (this.content.querySelector('.error-' + errorKey)) {
                                                this.content.querySelector('.error-' + errorKey).textContent = data.errors[errorKey];
                                            }
                                        }
                                    } else if (data.success) {
                                        let div = document.createElement('div');
                                        div.innerHTML = data.success;
                                        div.classList.add('login-change__success');
                                        this.content.innerHTML = '';
                                        this.content.appendChild(div);
                                    }
                                })
                            }
                        });
                    }
                });
            }
            if (target.hasAttribute('data-login-register') || target.closest('[data-login-register]')) {
                this.getRegisterForm().then(r => {
                    if (r.html) {
                        this.content.innerHTML = r.html;
                        Modal.openTarget('login-modal');
                        this.content.addEventListener('submit', (e) => {
                            e.preventDefault();
                            const form = this.content.querySelector('form');
                            if (form.hasAttribute('data-register-form')) {
                                const formData = new FormData(form);
                                // formData.append('back_path', window.location.pathname + window.location.search + window.location.hash)
                                this.fetchWithUrl('account/account/register', formData).then(r =>
                                    r.json()).then(data => {
                                    this.content.querySelectorAll('.error').forEach(el => el.textContent = '');
                                    if (data.errors) {
                                        for (const errorKey in data.errors) {
                                            if (this.content.querySelector('.error-' + errorKey)) {
                                                this.content.querySelector('.error-' + errorKey).textContent = data.errors[errorKey];
                                            }
                                        }
                                    } else if (data.success) {
                                        Modal.closeAll()
                                        Alert.add(data.success);
                                    }
                                })
                            }
                        });
                    }
                });
            }
        });
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const loginGetParam = urlParams.get('login');
        if (loginGetParam && loginGetParam === 'true') {
            this.content = document.querySelector('[data-login-content]');
            this.login();
        }
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

    async getChangePasswordForm() {
        return new Promise(async resolve => {
            const body = new FormData;

            // Запрос
            let result = await fetch('/index.php?route=account/account/changePasswordForm', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    async getRegisterForm() {
        return new Promise(async resolve => {
            const body = new FormData;

            // Запрос
            let result = await fetch('/index.php?route=account/account/registerForm', {
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

    login() {
        this.getLoginForm().then(r => {
            if (r.html) {
                this.content.innerHTML = r.html;
                Modal.openTarget('login-modal');
                this.content.addEventListener('submit', (e) => {
                    e.preventDefault();
                    const form = this.content.querySelector('form');
                    if (form.hasAttribute('data-login-form')) {
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
                    }
                });
            }
        });
    }
}
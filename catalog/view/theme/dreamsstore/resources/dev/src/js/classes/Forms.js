import Modal from "./Modal.js";

export default class {

    constructor() {
        document.addEventListener('click', (e) => {
            const target = e.target;
            if (this.checkTarget(target, 'data-forms')) {
                this.getModalForm(target);
                Modal.openTarget('form');
            }

            if (this.checkTarget(target, 'btn-forms-close')) {
                Modal.closeAll();
            }
        })

        setTimeout(() => {
            const firstOrderBtn = document.querySelector('[data-first-order]');
            if (firstOrderBtn) {
                this.getModalForm(firstOrderBtn, true);
                Modal.openTarget('form');
            }
        }, 1000);

        document.addEventListener('submit', (e) => {
            const target = e.target;
            if (this.checkTarget(target, 'data-forms-btn')) {
                e.preventDefault();
                const form = e.target;
                const formData = new FormData(form);
                this.sendForm(formData).then(data => {
                    if (data.error) {
                        form.querySelectorAll('.error').forEach(item => item.textContent = '');
                        for (let key in data.error) {
                            if (form.querySelector('.error-' + key)) {
                                form.querySelector('.error-' + key).textContent = data.error[key];
                            }
                        }
                    } else if (data.success) {
                        let div = document.createElement('div');
                        div.setAttribute('data-forms', 'success');
                        if (form.hasAttribute('data-forms-static')) {
                            this.getStaticForm(div, form);
                        } else {
                            this.getModalForm(div);
                        }
                    }
                });
            }
        })
    }

    getModalForm(target, wide = false) {
        const url = target.dataset.forms;
        const params = {};
        if (target.dataset.formsProduct) {
            params.product = target.dataset.formsProduct;
        }
        this.getForm(url, params).then(data => {
            let parser = new DOMParser();
            let doc = parser.parseFromString(data, 'text/html');
            let modal_content = document.querySelector('.modal-form__content');
            if (wide) {
                modal_content.classList.add('wide');
            } else {
                modal_content.classList.remove('wide');
            }
            let form = doc.querySelector('.inner');
            modal_content.innerHTML = '';
            modal_content.appendChild(form);
        });
    }

    getStaticForm(target, form) {
        const url = target.dataset.forms;
        const params = {};
        if (target.dataset.formsProduct) {
            params.product = target.dataset.formsProduct;
        }
        this.getForm(url, params).then(data => {
            let parser = new DOMParser();
            let doc = parser.parseFromString(data, 'text/html');
            // let modal_content = document.querySelector('.modal-form__content');
            let content = doc.querySelector('.inner');
            form.innerHTML = '';
            form.appendChild(content);
        });
    }

    checkTarget(target, selector) {
        if (target.hasAttribute(selector) || target.closest('[selector]')) {
            return true;
        } else {
            return false;
        }
    }

    async getForm(url, params = false) {
        return new Promise(async resolve => {

            const body = new FormData;
            if (params) {
                for (let key in params) {
                    body.append(key, params[key]);
                }
            }

            // Запрос
            let results = await fetch('/index.php?route=forms/forms/' + url, {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await results.text();
            resolve(data);
        })
    }

    async sendForm(body) {
        return new Promise(async resolve => {

            // Запрос
            let results = await fetch('/index.php?route=mail/form/sendFromForm', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await results.json();
            resolve(data);
        })
    }
}
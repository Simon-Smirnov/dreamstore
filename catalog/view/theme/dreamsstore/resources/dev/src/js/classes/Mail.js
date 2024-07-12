export default class {
    constructor(selector) {
        this.forms = document.querySelectorAll(selector);
        if (this.forms.length > 0) {
            this.forms.forEach(form => {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    const formData = new FormData(form);
                    this.send(formData).then(r => {
                        if (r.success) {
                            console.log(r);
                        }
                    });
                });
            });
        }
    }

    send(form) {
        return new Promise(async resolve => {

            // Запрос
            let result = await fetch('/index.php?route=mail/form/send', {
                method: 'POST',
                body: form
            })

            // Результат
            let data = await result.json()
            resolve(data);
        })
    }
}
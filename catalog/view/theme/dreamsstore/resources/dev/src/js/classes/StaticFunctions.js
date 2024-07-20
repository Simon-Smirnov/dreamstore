export default class StaticFunctions {
    static checkTarget(target, selector) {
        if (target.hasAttribute(selector) || target.closest('[' + selector + ']')) {
            return target.closest('[' + selector + ']');
        } else {
            return false;
        }
    }

    static init() {
        new StaticFunctions();
    }

    static async sendForm(body) {
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

    static async getForm(url, params = false) {
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
}

StaticFunctions.init();
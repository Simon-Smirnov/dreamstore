export default class {

    constructor(id) {
        this.id = id
    }

    async remove() {
        return new Promise(async resolve => {
            // Начальные параметры
            const body = new FormData()
            body.append('key', this.productId)

            // Запрос
            let result = await fetch('/index.php?route=checkout/cart/remove', {
                method: 'POST',
                body: body
            })

            // Результат
            await result.json()
        })
    }
}
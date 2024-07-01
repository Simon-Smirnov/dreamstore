export default class {

    static async add(productId, quantity, options = {}) {
        return new Promise(async resolve => {
            // Начальные параметры
            const body = new FormData()
            body.append('product_id', productId)
            body.append('quantity', quantity)

            for (let name in options) {
                body.append(name, options[name])
            }

            // Запрос
            let result = await fetch('/index.php?route=checkout/cart/add', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    static async remove(cartId) {
        return new Promise(async resolve => {
            // Начальные параметры
            const body = new FormData()
            body.append('key', cartId)

            // Запрос
            let result = await fetch('/index.php?route=checkout/cart/remove', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    static async update(cartId, quantity) {
        return new Promise(async resolve => {
            // Начальные параметры
            const body = new FormData()
            //body.append(this.cartId, this.quantity)
            body.append(`quantity[${cartId}]`, quantity)

            // Запрос
            let result = await fetch('/index.php?route=checkout/cart/edit', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    static async getQuantityCart(cartId, quantity) {
        return new Promise(async resolve => {
            // Начальные параметры
            const body = new FormData()

            // Запрос
            let result = await fetch('/index.php?route=checkout/cart/getQuantity', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json()
            resolve(data);
        })
    }

    // updateQuantityIconMiniCart() {
    //     this.getQuantityCart.then(quantity => {
    //         console.log(quantity);
    //         document.querySelector('#cart-total').textContent = quantity;
    //     })
    // }
}
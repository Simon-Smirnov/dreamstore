import Errors from "./Errors.js";

// import App from "./App.js";

class Checkout_old {
    constructor(checkout) {
        this.parent = checkout

        this.form = this.parent.querySelector('[data-checkout-form]')
        // this.form.addEventListener('submit', this.confirm_hadler)

        // Shipping Type
        this.change_shipping_type_handler = this.changeShippingType.bind(this)
        this.shipping_types = this.parent.querySelectorAll('[data-shipping-type-input]')
        if (this.shipping_types.length) {
            this.shipping_types.forEach(shipping_type =>
                shipping_type.addEventListener('change', this.change_shipping_type_handler)
            )
        }

        // Shipping Method
        this.change_shipping_method_handler = this.changeShippingMethod.bind(this)
        this.shipping_methods = this.parent.querySelectorAll('[data-shipping-method-input]')
        if (this.shipping_methods.length) {
            this.shipping_methods.forEach(shipping_method =>
                shipping_method.addEventListener('change', this.change_shipping_method_handler)
            )
        }

        // Payment Method
        this.change_payment_method_handler = this.changePaymentMethod.bind(this)
        this.payment_methods = this.parent.querySelectorAll('[data-payment-method-input]')
        if (this.payment_methods.length) {
            this.payment_methods.forEach(payment_method =>
                payment_method.addEventListener('change', this.change_payment_method_handler)
            )
        }

        // Text fields
        this.change_text_field_handler = this.changeTextField.bind(this)
        this.text_fields = this.parent.querySelectorAll('[data-text-field]')
        if (this.text_fields.length) {
            this.text_fields.forEach(text_field =>
                text_field.addEventListener('delayed_input', this.change_text_field_handler)
            )
        }

        // Pickup Block
        this.pickup_block = this.parent.querySelector('[data-checkout-pickup]')
        this.address_block = this.parent.querySelector('[data-checkout-address]')
        this.address_notify_block = this.parent.querySelector('[data-checkout-address-notify]')

        // this.checkShippingType()

        // Confirm
        this.confirm_handler = this.confirm.bind(this)
        this.confirm_button = document.querySelector('[data-checkout-confirm]')
        if (this.confirm_button) this.confirm_button.addEventListener('click', this.confirm_handler)
    }

    // Shipping Type
    getShippingType() {
        let value = null

        this.shipping_types.forEach(shipping_type => {
            if (shipping_type.checked) {
                value = shipping_type.value

                return true
            }
        })

        return value
    }

    async changeShippingType() {
        this.shipping_type = this.getShippingType()

        this.checkShippingType()
        this.setShippingMethod()
    }

    checkShippingType() {
        this.shipping_type = this.getShippingType()

        if (this.shipping_type == 'pickup_point') {
            this.showPickup()
            this.hideAddress()
        } else {
            this.hidePickup()
            this.showAddress()
        }
    }

    // Shipping Method
    isPickup() {
        return this.shipping_type.match(/pickup/)
    }

    hidePickup() {
        this.pickup_block.hidden = true

        this.pickup_block.querySelectorAll('input, textarea').forEach(input => input.disabled = true)
    }

    showPickup() {
        this.pickup_block.hidden = false

        this.pickup_block.querySelectorAll('input, textarea').forEach(input => input.disabled = false)
    }

    hideAddress() {
        this.address_block.hidden = true
        this.address_notify_block.hidden = true

        this.address_block.querySelectorAll('input, textarea').forEach(input => input.disabled = true)
    }

    showAddress() {
        this.address_block.hidden = false
        this.address_notify_block.hidden = false

        this.address_block.querySelectorAll('input, textarea').forEach(input => input.disabled = false)
    }

    setShippingMethod() {
        this.shipping_methods.forEach(shipping_method => {
            if (shipping_method.value.match(new RegExp(this.shipping_type))) {
                if (this.isPickup()) {
                    const first_input = this.pickup_block.querySelector('[data-shipping-method-input]')

                    first_input.checked = true
                } else {
                    shipping_method.checked = true
                }
            } else {
                shipping_method.checked = false
            }
        })

        this.changeShippingMethod()
    }

    getShippingMethod() {
        let value = null

        this.shipping_methods.forEach(shipping_method => {
            if (shipping_method.checked) {
                value = shipping_method.value

                return true
            }
        })

        return value
    }

    async changeShippingMethod() {
        this.shipping_type = this.getShippingType()
        this.shipping_method = this.getShippingMethod()

        this.saveShippingMethod()
    }

    async saveShippingMethod() {
        const body = new FormData()
        body.append('shipping_type', this.shipping_type)
        body.append('shipping_method', this.shipping_method)
        body.append('need_checkout', true)

        let response = await fetch('/index.php?route=checkout/checkout/setShippingMethod', {
            method: "POST",
            body: body
        })

        response = await response.json()

        if (response.success) {
            App.updateFragments(response.fragments)
        }
    }

    // Payment
    getPaymentMethod() {
        let value = null

        this.payment_methods.forEach(payment_method => {
            if (payment_method.checked) {
                value = payment_method.value

                return true
            }
        })

        return value
    }

    async changePaymentMethod() {
        this.payment_method = this.getPaymentMethod()

        this.savePaymentMethod()
    }

    savePaymentMethod() {
        const body = new FormData()
        body.append('payment_method', this.payment_method)

        fetch('/index.php?route=checkout/checkout/setPaymentMethod', {
            method: "POST",
            body: body
        })
    }

    // Text Field
    changeTextField() {
        this.saveTextFields()
    }

    saveTextFields() {
        const body = new FormData();

        this.text_fields.forEach(text_field => {
            body.append('fields[' + text_field.name + ']', text_field.value)
        })

        fetch('/index.php?route=checkout/checkout/setTextFields', {
            method: "POST",
            body: body
        })
    }

    // Confirm order
    async confirm(e) {
        e.preventDefault()


        const body = new FormData(this.form)

        let response = await fetch('/index.php?route=checkout/checkout/confirm', {
            method: 'POST',
            body: body
        })

        response = await response.json()

        if (response.success?.redirect) {
            location = response.success.redirect
        } else if (response.errors) {
            Errors.show(response.errors, this.form)
        }
    }

    static init() {
        const checkout_ = document.querySelector('[data-checkout]')

        if (checkout_) {
            new Checkout_old(checkout_)
        }
    }
}

Checkout_old.init()
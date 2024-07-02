export default class {
    constructor(selector) {
        this.elementsPassword = document.querySelectorAll(selector);
        console.log(this.elementsPassword);
        if (this.elementsPassword.length > 0) {
            this.elementsPassword.forEach(element => {
                console.log('ppp');
                const svg = element.querySelector('[data-input-password-svg]');
                const input = element.querySelector('[data-input-password-input]');

                svg.addEventListener('click', () => {
                    input.type = input.type === 'password' ? 'text' : 'password';
                    element.classList.toggle('active');
                })
            })
        }
    }
}
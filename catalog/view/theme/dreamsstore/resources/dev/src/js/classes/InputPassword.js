export default class {
    constructor(selector) {

        document.addEventListener('click', (e) => {
            const target = e.target;
            if (target.hasAttribute('data-input-password-svg') || target.closest('[data-input-password-svg]')) {
                const parent = target.closest('[data-input-password]');
                console.log(parent)
                parent.classList.toggle('active');
                const input = parent.querySelector('[data-input-password-input]');
                input.type = input.type === 'password' ? 'text' : 'password';
            }
        });
    }
}
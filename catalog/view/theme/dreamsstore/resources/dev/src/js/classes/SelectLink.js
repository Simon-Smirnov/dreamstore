export default class {
    constructor(selector) {
        this.selects = document.querySelectorAll(selector);
        if (this.selects.length > 0) {
            this.selects.forEach(select => {
                select.addEventListener('click', (e) => {
                    const target = e.target;
                    if (target.hasAttribute('data-select-link-base') || target.closest('[data-select-link-base]')) {
                        this.parent = target.closest('[data-select-link]');
                        this.parent.classList.toggle('active');
                    }
                });
            });
            document.addEventListener('click', (e) => {
                if (!e.target.closest('[data-select-link]')) {
                    this.selects.forEach(select => {
                        select.classList.remove('active');
                    });
                }
            })
        }
    }
}
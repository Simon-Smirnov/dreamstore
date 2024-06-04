export default class {
    constructor(selector) {
        this.alert = document.querySelector(selector);
        if(this.alert) {
            this.closeBtn = this.alert.querySelector('.close');
            this.closeBtn.addEventListener('click', () => {
                this.removeAlert(); 
            });
        }
    };
    removeAlert() {
        this.alert.remove();
    };
}
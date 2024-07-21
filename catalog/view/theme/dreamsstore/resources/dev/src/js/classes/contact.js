import Modal from "./Modal.js";
import StaticFunctions from "./StaticFunctions.js";

export default class Contact {

    constructor(selector) {
        document.addEventListener('click', e => {
            const target = e.target;
            if (StaticFunctions.checkTarget(target, selector)) {
                console.log('contact');
                const item = StaticFunctions.checkTarget(target, selector);
                const requisites = item.querySelector('[data-contact-requisites-content]');
                const content = document.querySelector('[data-login-content]');
                const copyRequisites = requisites.cloneNode(true);
                content.innerHTML = '';
                content.append(copyRequisites);
                Modal.openTarget('login-modal');
            }
        })
    }

    static init(selector) {
        new Contact(selector);
    }
}

Contact.init('data-contact-requisites');
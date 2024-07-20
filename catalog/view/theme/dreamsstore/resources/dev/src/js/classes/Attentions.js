import StaticFunctions from "./StaticFunctions.js";

export default class Attentions {

    constructor(selector) {
        document.addEventListener('click', e => {
            const target = e.target;
            if (StaticFunctions.checkTarget(target, selector)) {
                const item = StaticFunctions.checkTarget(target, selector);
                const child = item.querySelector('.attention-text-description');
                if (child) {
                    child.remove();
                } else {
                    const item = StaticFunctions.checkTarget(target, selector);
                    const text = item.dataset.attentionText;
                    let span = document.createElement('span');
                    span.classList.add('attention-text-description');
                    span.innerHTML = text;
                    item.append(span);
                }
            }
        })
    }

    static init(selector) {
        new Attentions(selector);
    }
}

Attentions.init('data-attention-text');
import StaticFunctions from "./StaticFunctions.js";

export default class Quiz {

    step = 1;

    constructor(selector) {

        this.block = document.querySelector(selector);

        if (this.block) {
            this.block.addEventListener('click', (e) => {
                const target = e.target;
                if (StaticFunctions.checkTarget(target, 'data-quiz-step-next')) {
                    const item = StaticFunctions.checkTarget(target, 'data-quiz-step-next');
                    this.step = +item.dataset.quizStepNext;
                    if (this.step === 2) {
                        item.querySelector('input').checked = true;
                    }
                    this.turnOffAll();
                    this.activeCurrentStep();
                }
                if (StaticFunctions.checkTarget(target, 'data-quiz-step-prev')) {
                    const item = StaticFunctions.checkTarget(target, 'data-quiz-step-prev');
                    this.turnOffAll();
                    this.step = +item.dataset.quizStepPrev;
                    this.activeCurrentStep();
                }
            })

            this.block.addEventListener('submit', (e) => {
                e.preventDefault();
                const form = e.target;
                const formData = new FormData(form);
                StaticFunctions.sendForm(formData).then(data => {
                    if (data.error) {
                        form.querySelectorAll('.error').forEach(item => item.textContent = '');
                        for (let key in data.error) {
                            if (form.querySelector('.error-' + key)) {
                                form.querySelector('.error-' + key).textContent = data.error[key];
                            }
                        }
                    } else if (data.success) {
                        StaticFunctions.getForm('success').then(data => {
                            let parser = new DOMParser();
                            let doc = parser.parseFromString(data, 'text/html');
                            let modal_content = document.querySelector('.atelier-quiz__body');
                            let form = doc.querySelector('.inner');
                            modal_content.innerHTML = '';
                            modal_content.appendChild(form);
                        })
                    }
                });
            })
        }
    }

    turnOffAll() {
        this.block.querySelectorAll('[data-quiz-step]').forEach(item => {
            item.classList.remove('active');
        });
        this.block.querySelectorAll('[data-quiz-tab]').forEach(item => {
            item.classList.remove('active');
        });
    }

    activeCurrentStep() {
        this.block.querySelector('[data-quiz-tab="' + this.step + '"]').classList.add('active');
        this.block.querySelector('[data-quiz-step="' + this.step + '"]').classList.add('active');
    }

    static init(selector) {

        new Quiz(selector);
    }
}

Quiz.init('[data-quiz-main]');
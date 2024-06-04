export default class {
    successMessage = '<h4 class="form-success">Спасибо.<br>Мы получили информацию и скоро мы свяжемся с Вами!</h4>';
    form = false;

    typesForm = {
        headerZakazatZvonok: {
            metrics: 'zakaz-zvonok',
            crm: 'сайт осн'
        },
        submitApplication: {
            metrics: 'zayavka-vykup',
            crm: 'сайт выкуп'
        },
        submitNerj: {
            metrics: 'zayavka',
            crm: 'сайт нерж'
        },
        consultationEquipmentBuyback: {
            metrics: 'consult-vykup',
            crm: 'сайт выкуп'
        },
        consultationNerj: {
            metrics: 'consult-nerz',
            crm: 'сайт нерж'
        },
        newsubmitApplication: {
            metrics: 'stoimost',
            crm: 'сайт выкуп'
        },
        spec: {
            metrics: 'subscription',
            crm: 'сайт осн'
        },
    }

    constructor(selector) {
        this.divs = [];
        this.name = {
            pattern: /^.{1,16}$/,
            text: "Имя должно быть более 1 символа, но не более 16.",
        };
        this.phone = {
            // pattern: /^.+[0-9]{1,3}\s?[0-9]{10}$/,
            pattern: /^.{1,15}$/,
            text: "Пожалуйста, введите корректный номер телефона в формате +79123456789", 
        };
        this.email = {
            pattern: /^.{1,32}@[\w.-]+\.[a-zA-Z]{2,}$/,
            text: "Некорректный email.",
        };
        this.agree = {
            bool: true,
            text: `Необходимо поставить галочку согласия 
            на обработку персональных данных.`
        };
        this.error = false;
        this.fields = [];
        this.formList = document.querySelectorAll(selector);

        // this.formList.forEach(form => {
        //     let button = form.querySelector('.button');
        //     if(button) {
        //         button.addEventListener('click', (e) => {
        //             e.preventDefault();
        //             this.divs,this.fields = [];
        //             this.error = false;
        //             let nameInput = form.querySelector('.name');
        //             if(nameInput) {
        //                 this.divs.push(nameInput);
        //             }
        //             let phoneInput = form.querySelector('.phone');
        //             if(phoneInput) {
        //                 this.divs.push(phoneInput);
        //             }
        //             let emailInput = form.querySelector('.email');
        //             if(emailInput) {
        //                 this.divs.push(emailInput);
        //             }
        //             let agreeInput = form.querySelector('.agree');
        //             if(agreeInput) {
        //                 this.divs.push(agreeInput);
        //             }
        //             this.clearErrors();
        //             this.validate();
        //             if(!this.error) {
        //                 this.send();
        //             }
        //         });
        //     }
        // });

        // document.body.addEventListener('click', (event) => {
        document.addEventListener('click', (event) => {
            if(event.target.classList.contains('mailForm') || event.target.closest('.mailForm')) {
                if(event.target.classList.contains('mailForm')) {
                    this.form = event.target;
                } else if(event.target.closest('.mailForm')) {
                    this.form = event.target.closest('.mailForm');
                }
                if(event.target.classList.contains('button')) {
                    event.preventDefault();
                    this.divs,this.fields = [];
                    this.error = false;
                    let nameInput = this.form.querySelector('.name');
                    if(nameInput) {
                        this.divs.push(nameInput);
                    }
                    let phoneInput = this.form.querySelector('.phone');
                    if(phoneInput) {
                        this.divs.push(phoneInput);
                    }
                    let emailInput = this.form.querySelector('.email');
                    if(emailInput) {
                        this.divs.push(emailInput);
                    }
                    let agreeInput = this.form.querySelector('.agree');
                    if(agreeInput) {
                        this.divs.push(agreeInput);
                    }
                    let photoInput = this.form.querySelector('.photo');
                    if(photoInput) {
                        this.divs.push(photoInput);
                    }

// let fileInput = this.form.querySelector('#.ile');
// if(fileInput){
//     this.divs.push(fileInput);
// }

                    this.clearErrors();
                    this.validate();
                    if(!this.error) {
                        this.send();
                    }
                }

                // let button = form.querySelector('.button');
                // if(button) {
                //     button.addEventListener('click', (e) => {
                //         e.preventDefault();
                //         this.divs,this.fields = [];
                //         this.error = false;
                //         let nameInput = form.querySelector('.name');
                //         if(nameInput) {
                //             this.divs.push(nameInput);
                //         }
                //         let phoneInput = form.querySelector('.phone');
                //         if(phoneInput) {
                //             this.divs.push(phoneInput);
                //         }
                //         let emailInput = form.querySelector('.email');
                //         if(emailInput) {
                //             this.divs.push(emailInput);
                //         }
                //         let agreeInput = form.querySelector('.agree');
                //         if(agreeInput) {
                //             this.divs.push(agreeInput);
                //         }
                //         this.clearErrors();
                //         this.validate();
                //         if(!this.error) {
                //             this.send();
                //         }
                //     });
                // }
            }
        })
        // this.formList.forEach(form => {
        //     let button = form.querySelector('.button');
        //     if(button) {
        //         button.addEventListener('click', (e) => {
        //             e.preventDefault();
        //             this.divs,this.fields = [];
        //             this.error = false;
        //             let nameInput = form.querySelector('.name');
        //             if(nameInput) {
        //                 this.divs.push(nameInput);
        //             }
        //             let phoneInput = form.querySelector('.phone');
        //             if(phoneInput) {
        //                 this.divs.push(phoneInput);
        //             }
        //             let emailInput = form.querySelector('.email');
        //             if(emailInput) {
        //                 this.divs.push(emailInput);
        //             }
        //             let agreeInput = form.querySelector('.agree');
        //             if(agreeInput) {
        //                 this.divs.push(agreeInput);
        //             }
        //             this.clearErrors();
        //             this.validate();
        //             if(!this.error) {
        //                 this.send();
        //             }
        //         });
        //     }
        // });
    };
    clearErrors() {
        this.divs.forEach(div => {
            let error = div.querySelector('.error');
            error.textContent = "";
        });
    }
    validate() {
        this.divs.forEach(div => {
            let name = div.dataset.valid;
            if(this[name] != undefined) {
                let input = div.querySelector('input.'+name);
                if(input) {
                    if(this[name].pattern) {
                        if(!this[name].pattern.test(input.value)) {
                            div.querySelector('.error').textContent = this[name].text;
                            this.error = true;
                        }
                        this.fields.push(
                            {
                                name: input.name,
                                value: input.value,
                            }
                        );
                    } else if(this[name].bool) {
                        if(!input.checked) {
                            div.querySelector('.error').textContent = this[name].text;
                            this.error = true;
                        }
                    }
                }
            }
        });
    }
    send() {
        // let data = "";
        // let themeName = this.form.querySelector('.themename');
        // let themeNameText = "обратной связи";
        // if(themeName && themeName.value != "") {
        //     themeNameText = themeName.value;
        // }
        // data += 'themeName=' + themeNameText;

        // this.fields.forEach(field => {
        //     data += '&' + field.name + '=' + field.value;
        // });
        // console.log(this.form.dataset);
        // ym(96393628,'reachGoal','zakaz-zvonok');
        // console.log(ym);


        let typeForm = this.form.dataset.page;
        let tag = '';
        if(this.typesForm[typeForm]) {
            let formInfo = this.typesForm[typeForm];
            tag = formInfo.crm;
            this.yandexMetrica(formInfo.metrics);
        }

        /*work*/
        let formData = new FormData();
        let themeName = this.form.querySelector('.themename');
        let themeNameText = "обратной связи";
        if (themeName && themeName.value != "") {
            themeNameText = themeName.value;
        }
        formData.append('themeName', themeNameText);
        this.fields.forEach(field => {
            formData.append(field.name, field.value);
        });

        let fileInput = this.form.querySelector('input.photo');
        if(fileInput) { 
         formData.append('photo', fileInput.files[0]);
        }

        formData.append('tag', tag);

        fetch('index.php?route=mail/form/form', {
            method: 'POST',
            // headers: {
            //     'Content-Type': 'application/x-www-form-urlencoded',
            // },
            body: formData,
        })
        .then(response => response.json())
        .then(json => {
            if(json.errors) {
                console.log(json.errors);
            } else {
                this.form.innerHTML = this.successMessage;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error occurred: ' + error);
        });
        /*work*/
    }

    yandexMetrica(goal) {
        ym(96393628,'reachGoal', goal);
        return true;
    }
}
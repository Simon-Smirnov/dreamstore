export default class {

    files = {};

    constructor(selector) {
        this.form = document.querySelector(selector);
        if (this.form) {
            this.fileBlock = this.form.querySelector('.modal__size-names');
            this.form.addEventListener('submit', (e) => {
                e.preventDefault();
                this.form.querySelectorAll('.error').forEach(error => error.textContent = '');
                const data = new FormData(this.form);
                fetch('index.php?route=information/vacancies/addReply', {
                    method: 'POST',
                    body: data,
                })
                    .then(response => {
                        if (response.ok) {
                            return response.json();
                        }
                        throw new Error('Network response was not ok.');
                    })
                    .then(data => {
                        if (data.errors !== undefined) {
                            for (const errorKey in data.errors) {
                                if (this.form.querySelector('.' + errorKey + '-error')) {
                                    this.form.querySelector('.' + errorKey + '-error').textContent = data.errors[errorKey];
                                }
                            }
                        } else if (data.success !== undefined) {
                            this.form.closest('.vacancy-inner_form-block').innerHTML = '<div class="vacancy-inner_form-block success">' + data.success + '</div>';
                        }
                    })
                    .catch(error => {
                        console.error('There has been a problem with your fetch operation:', error);
                    });
            });
            this.form.addEventListener('change', (e) => {
                const target = e.target;
                if (target.name && target.name === 'file[]') {
                    const files = target.files;
                    if (files.length > 0) {
                        for (let i = 0; i < files.length; i++) {
                            const fileType = files[i].type;
                            const fileName = files[i].name.toLowerCase();

                            const allowedTypes = ['application/pdf', 'application/vnd.oasis.opendocument.text',
                                'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                            const allowedExtensions = ['.pdf', '.odt', '.doc', '.docx'];

                            if (allowedTypes.includes(fileType) && allowedExtensions.some(ext => fileName.endsWith(ext))) {
                                this.files[target.dataset.num] = files[i];
                                target.hidden = true;
                                let input = document.createElement('input');
                                input.classList.add('modal__attach_input');
                                input.name = 'file[]';
                                input.type = 'file';
                                input.dataset.num = +target.dataset.num + 1;
                                target.after(input);
                                this.form.append(target);
                            }

                            // if (fileType.startsWith('image/') && (fileName.endsWith('.jpg') || fileName.endsWith('.jpeg') || fileName.endsWith('.png'))) {
                            //     this.files[target.dataset.num] = files[i];
                            //     target.hidden = true;
                            //     let input = document.createElement('input');
                            //     input.classList.add('modal__attach_input');
                            //     input.name = 'image[]';
                            //     input.type = 'file';
                            //     input.dataset.num = +target.dataset.num + 1;
                            //     target.after(input);
                            //     this.form.append(target);
                            // }
                        }
                    }
                    this.renderFiles(target);
                }
            });
            this.form.addEventListener('click', (e) => {
                const target = e.target;
                if (target.classList.contains('close_image') || target.closest('.close_image')) {
                    let item = target.closest('.close_image');
                    const num = item.dataset.num;
                    // if (document.querySelector('download-image-' + num)) {
                    //     document.querySelector('download-image-' + num).remove();
                    // }
                    delete this.files[num];
                    // if (this.form.querySelector('[name="image[]"] [data-num="' + num + '"]')) {
                    //     this.form.querySelector('[name="image[]"] [data-num="' + num + '"]').remove();
                    // }
                    this.form.querySelectorAll('[name="file[]"]').forEach(input => {
                        if (input.dataset.num == num) {
                            input.remove();
                        }
                    });
                    //this.renderFiles(target);
                    target.closest('.download-file').remove();
                }
            });
        }
    }

    renderFiles(target) {
        this.fileBlock.innerHTML = '';

        for (let fileKey in this.files) {
            const div = document.createElement('div');
            div.classList.add('download-file-' + fileKey);
            div.classList.add('download-file');
            const span = document.createElement('span');
            span.textContent = this.files[fileKey].name;
            span.classList.add('fileName');
            div.appendChild(span);
            const close = document.createElement('div');
            close.classList.add('close_image');
            close.dataset.num = fileKey;
            close.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg"><use xlink:href="/sprite.svg#icon_cross"></use></svg>';
            div.appendChild(close);
            this.fileBlock.appendChild(div);
        }
    }
}
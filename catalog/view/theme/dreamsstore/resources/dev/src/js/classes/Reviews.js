export default class {

    images = {};

    constructor(selector) {
        this.form = document.querySelector(selector);
        if (this.form) {
            this.immageBlock = this.form.querySelector('.modal__size-images');
            console.log(this.immageBlock);
            this.form.addEventListener('submit', (e) => {
                e.preventDefault();
                this.form.querySelectorAll('.error').forEach(error => error.textContent = '');
                const data = new FormData(this.form);
                fetch('index.php?route=information/reviews/add', {
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
                            console.log(data.errors);
                            for (const errorKey in data.errors) {
                                if (this.form.querySelector('.' + errorKey + '-error')) {
                                    this.form.querySelector('.' + errorKey + '-error').textContent = data.errors[errorKey];
                                }
                            }
                        } else if (data.success !== undefined) {
                            this.form.closest('.modal__box').innerHTML = '<div class="modal__success">' + data.success + '</div>';
                        }
                    })
                    .catch(error => {
                        console.error('There has been a problem with your fetch operation:', error);
                    });
            });
            this.form.addEventListener('change', (e) => {
                const target = e.target;
                if (target.name && target.name === 'image[]') {
                    this.immageBlock.innerHTML = '';
                    const files = target.files;
                    if (files.length > 0) {
                        for (let i = 0; i < files.length; i++) {
                            const fileType = files[i].type;
                            const fileName = files[i].name.toLowerCase();
                            if (fileType.startsWith('image/') && (fileName.endsWith('.jpg') || fileName.endsWith('.jpeg') || fileName.endsWith('.png'))) {
                                this.images[target.dataset.num] = files[i];
                                target.hidden = true;
                                let input = document.createElement('input');
                                input.classList.add('modal__attach_input');
                                input.name = 'image[]';
                                input.type = 'file';
                                input.dataset.num = +target.dataset.num + 1;
                                target.after(input);
                                this.form.append(target);
                            }
                        }

                    }

                    for (let imageKey in this.images) {
                        console.log(this.images[imageKey]);

                        const reader = new FileReader();
                        reader.onload = (e) => {
                            const div = document.createElement('div');
                            div.classList.add('download-image-' + imageKey);
                            div.classList.add('download-image');
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.classList.add('thumbnail');
                            div.appendChild(img);
                            this.immageBlock.appendChild(div);
                        }
                        reader.readAsDataURL(this.images[imageKey]);
                    }

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        for (let image in this.images) {
                            console.log(image);

                            // Проверяем, является ли файл изображением
                            // if (file.type.startsWith('image/')) {
                            //     const reader = new FileReader();
                            //
                            //     reader.onload = function (e) {
                            //         const img = document.createElement('img');
                            //         img.src = e.target.result;
                            //         img.classList.add('thumbnail');
                            //         fileList.appendChild(img);
                            //     };
                            //
                            //     reader.readAsDataURL(file);
                            // } else {
                            //     const p = document.createElement('p');
                            //     p.textContent = file.name;
                            //     fileList.appendChild(p);
                            // }
                        }
                    }
                }


                // console.log(e.target);
                // console.log(this.images);
                // console.log(files);

                // let input = document.querySelector('#modal__attach_input');
                // const fileList = document.getElementById('fileList');
                // if (input) {
                //     input.addEventListener('change', (e) => {
                //         console.log(e.target);
                //         console.dir(e.target);
                //         console.log(input.files);
                //
                //         if (file.type.startsWith('image/')) {
                //             console.log(file);
                //             // const reader = new FileReader();
                //         }
                //
                //         const files = input.files;
                //
                //         if (files.length === 0) {
                //             fileList.innerHTML = '<p>Нет прикрепленных файлов</p>';
                //         } else {
                //             // Перебираем файлы и добавляем их в список
                //             for (let i = 0; i < files.length; i++) {
                //                 const file = files[i];
                //
                //                 // Проверяем, является ли файл изображением
                //                 if (file.type.startsWith('image/')) {
                //                     const reader = new FileReader();
                //
                //                     reader.onload = function (e) {
                //                         const img = document.createElement('img');
                //                         img.src = e.target.result;
                //                         img.classList.add('thumbnail');
                //                         fileList.appendChild(img);
                //                     };
                //
                //                     reader.readAsDataURL(file);
                //                 } else {
                //                     const p = document.createElement('p');
                //                     p.textContent = file.name;
                //                     fileList.appendChild(p);
                //                 }
                //             }
                //         }
                //     })
                // }
            });
        }
    }
}
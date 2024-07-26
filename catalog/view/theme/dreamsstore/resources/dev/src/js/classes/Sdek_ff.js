export default class Sdek {

    constructor(selector) {



        ymaps.ready(() => {
            this.sdek = document.querySelector(selector);
            if (this.sdek) {
                this.tariff = this.sdek.dataset.sdekInfoCode;
                this.tariff_type = this.sdek.dataset.sdekInfoPvztype;
                if (this.tariff && this.tariff_type) {
                    this.cdekPvzClick(this.tariff, this.tariff_type);
                }
            }
        })

    }

    cdekPvzClick(tariff, tariff_type) {
        this.getPvzList(tariff_type).then(data => {
            if (data.status) {
                this.pvzlist = data.data;
                this.selectPvz(this.pvzlist[0].pvzCode);
                this.selected_tariff = tariff;
                this.initMap(this.selected_tariff);
            }
        });
    }

    initMap(pvzType) {

        console.log(this.pvzlist);

        if (!this.pvzlist) {
            return false;
        }

        console.log('heeeeeeer');

        this.mapShow(0);
        this.mapShow(1);

        this.mapcenter = [this.pvzlist[0].coordY, this.pvzlist[0].coordX];
        console.log(typeof window.ymaps);
        console.log(window.ymaps);
        console.log(window.ymaps['Map']);


        // this.myMap = new window.ymaps.Map('cdek_map', {
        //     center: this.mapcenter,
        //     zoom: 10,
        //     controls: ['zoomControl', 'fullscreenControl']
        // }, {
        //     searchControlProvider: 'yandex#search'
        // });

        // console.log(ymaps.Map());


        console.log(this.myMap);

        this.iname = 1;
        this.pvzlist.forEach((item, i, arr) => {
            this.description = '';
            this.description = description + item.Address + '<BR>';
            this.description = description + item.Phone + '<BR>';
            this.description = description + item.WorkTime + '<BR>';
            this.myGeoObject = new window.ymaps.GeoObject({
                // Описание геометрии.
                geometry: {
                    type: "Point",
                    coordinates: [item.coordY, item.coordX]
                },
                // Свойства.
                properties: {
                    // Контент метки.
                    iconContent: this.iname,
                    hintContent: this.description
                }
            }, {
                // Опции.
                // Иконка метки будет растягиваться под размер ее содержимого.
                preset: 'islands#blueIcon',
                // Метку можно перемещать.
                draggable: false
            });
            this.iname = this.iname + 1;
            this.myGeoObject.events.add('click', function () {
                selectPvz(item.Code);
            });
            myMap.geoObjects.add(myGeoObject);
        });
        myMap.geoObjects.options.set("openBalloonOnClick", false);
    }

    mapShow(status) {
        const maps = document.querySelectorAll('#cdek_map');
        if (maps.length > 0) {
            var mapBlock_html = '<div class="cdek_map_container" id="cdek_map_contaner" style="dispaly:none">';
            mapBlock_html += '<div class="cdek_map_container_map" id="cdek_map"></div>';
            mapBlock_html += '<div class="cdek_map_container_map_control"><a href="javascript:mapShow(0)" class="control_button">Закрыть</a></div>';
            mapBlock_html += '</div>';
            document.querySelector('body').append(mapBlock_html);
        }

        if (status == 1) {
            if (document.querySelector('#cdek_map_contaner')) {
                document.querySelector('#cdek_map_contaner').style.display = 'block';
            }
        } else {
            if (document.querySelector('#cdek_map_contaner')) {
                document.querySelector('#cdek_map_contaner').style.display = 'none';
                document.querySelector('#cdek_map_contaner').innerHTML = '';
            }
        }
    }

    // selectPvz(pvz_code) {
    //     this.mapShow(0);
    //
    //     var xhr = new XMLHttpRequest();
    //     xhr.open('POST', 'index.php?route=extension/shipping/cdek/selectPvz', false);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    //
    //     xhr.onload = function () {
    //         if (xhr.status >= 200 && xhr.status < 300) {
    //             var json = JSON.parse(xhr.responseText);
    //             if (json.status) {
    //                 document.querySelector('.cdek_selectedPvzInfo').innerHTML = '';
    //                 document.getElementById('cdek_selectedPvzInfo_' + this.selected_tariff).innerHTML = json.data.address;
    //             }
    //         } else {
    //             console.error('selectPvz error', xhr.responseText);
    //         }
    //     };
    //
    //     xhr.onerror = function () {
    //         console.error('selectPvz error', xhr.responseText);
    //     };
    //
    //     var data = 'pvz_code=' + encodeURIComponent(pvz_code) + '&tariff=' + encodeURIComponent(this.selected_tariff);
    //     xhr.send(data);
    // }

    async selectPvz(pvz_code) {
        return new Promise(async resolve => {
            let body = new FormData();
            body.append('pvz_code', encodeURIComponent(pvz_code));
            body.append('tariff', encodeURIComponent(this.selected_tariff));

            let result = await fetch('/index.php?route=extension/shipping/cdek/selectPvz', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    // getPvzList(tariff_type) {
    //     var xhr = new XMLHttpRequest();
    //     xhr.open('POST', 'index.php?route=extension/shipping/cdek/getPvzList', false);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    //
    //     xhr.onload = function () {
    //         if (xhr.status >= 200 && xhr.status < 300) {
    //             var json = JSON.parse(xhr.responseText);
    //             if (json.status) {
    //                 console.log(json.data);
    //                 this.pvzlist = json.data;
    //             } else {
    //                 alertMessage(json.message, false);
    //             }
    //         } else {
    //             console.error('getPvzList error', xhr.responseText);
    //         }
    //     };
    //
    //     xhr.onerror = function () {
    //         console.error('getPvzList error', xhr.responseText);
    //     };
    //
    //     var data = 'tariff_type=' + encodeURIComponent(this.tariff_type);
    //     xhr.send(data);
    // }

    async getPvzList() {
        return new Promise(async resolve => {
            let body = new FormData();
            body.append('tariff_type', encodeURIComponent(this.tariff_type));

            let result = await fetch('/index.php?route=extension/shipping/cdek/getPvzList', {
                method: 'POST',
                body: body
            })

            // Результат
            let data = await result.json();
            resolve(data);
        })
    }

    checkTariffPvz() {
        var status = true;

        $.ajax({
            async: false,
            url: 'index.php?route=extension/shipping/cdek/checkTariffPvz',
            type: 'POST',
            dataType: 'json',
            data: ({
                tariff: $('input[type=radio][name=shipping_method]:checked').val()
            }),
            success: function (json) {
                if (json.status) {
                    status = true;
                } else {
                    alertMessage(json.message, false);
                    status = false;
                }
            },
            error: function (data) {
                console.log('checkTariffPvz error', data);
                status = true;
            }
        });

        return status;
    }

    alertMessage(message, status) {
        if (status) {
            alert(message);
        } else {
            alert(message);
        }
    }

    static init(selector) {
        new Sdek(selector);
    }
}

Sdek.init('[data-sdek-info]');
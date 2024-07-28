export default class Sdek {

    constructor(selector) {
        this.sdek = document.querySelector(selector);
        this.pickuppoint = document.querySelector('[data-checkout-pickuppoint]');
        this.sdekInput = document.querySelector('[data-sdek-need]');
        this.btnChoose = document.querySelector('[data-shipping-type-sdek]');
        if (this.btnChoose && this.btnChoose.checked && this.sdek && this.pickuppoint) {
            this.tariff = this.sdek.dataset.sdekInfoCode;
            this.tariff_type = this.sdek.dataset.sdekInfoPvztype;
            if (this.tariff && this.tariff_type) {
                this.cdekPvzClick(this.tariff, this.tariff_type);
            }
        }
    }

    cdekPvzClick(tariff, tariff_type) {
        this.getPvzList(tariff_type).then(data => {
            if (data.status) {
                this.pvzlist = data.data;
                this.selectPvz(this.pvzlist[0].Code);
                this.selected_tariff = tariff;
                cdekymap.ready(() => {
                    this.initMap(this.selected_tariff);
                });
            }
        });
    }

    initMap(pvzType) {
        if (!this.pvzlist) {
            return false;
        }

        this.mapShow(0);
        this.mapShow(1);

        this.mapcenter = [this.pvzlist[0].coordY, this.pvzlist[0].coordX];

        this.myMap = new cdekymap.Map('cdek_map', {
            center: this.mapcenter,
            zoom: 12,
            controls: ['zoomControl', 'fullscreenControl']
        }, {
            searchControlProvider: 'yandex#search'
        });

        this.iname = 1;
        this.clusterer = new cdekymap.Clusterer({
            preset: 'islands#invertedRedClusterIcons',
            groupByCoordinates: false,
            clusterHideIconOnBalloonOpen: false,
            openBalloonOnClick: false,
            clusterDisableClickZoom: false,
            geoObjectHideIconOnBalloonOpen: false
        });
        this.pvzlist.forEach((item, i, arr) => {
            this.description = '';
            this.description = this.description + item.Address + '<BR>';
            this.description = this.description + item.Phone + '<BR>';
            this.description = this.description + item.WorkTime + '<BR>';


            const myGeoObject = new cdekymap.GeoObject({
                // Описание геометрии.
                geometry: {
                    type: "Point",
                    coordinates: [item.coordY, item.coordX]
                },
                // Свойства.
                properties: {
                    // Контент метки.
                    // iconContent: this.iname,
                    hintContent: this.description,
                    iconLayout: 'default#imageWithContent',
                }
            }, {
                // iconLayout: 'default#imageWithContent',
                // iconImageHref: window.assets + '/assets/images/icons/point.svg',
                // iconImageSize: [20, 20],
                // iconOffset: [0, -40],
                preset: 'islands#blueIcon',
                draggable: false,
            });
            this.iname = this.iname + 1;
            myGeoObject.events.add('click', () => {
                this.selectPvz(item.Code);
                document.querySelector('[data-checkout-address]').value = ' ';
                this.pickuppoint.value = this.pvzlist[i].Address;
                let newEvent = new Event('custom_change', {
                    bubbles: true,
                    cancelable: false
                });
                this.btnChoose.dispatchEvent(newEvent);
            })
            this.clusterer.add(myGeoObject);
            this.myMap.geoObjects.add(this.clusterer);
        });
        this.myMap.geoObjects.options.set("openBalloonOnClick", false);
    }

    mapShow(status) {
        const maps = document.querySelectorAll('#cdek_map');
        // if (maps.length > 0) {
        //     var mapBlock_html = '<div class="cdek_map_container" id="cdek_map_contaner" style="dispaly:none">';
        //     mapBlock_html += '<div class="cdek_map_container_map" id="cdek_map"></div>';
        //     mapBlock_html += '<div class="cdek_map_container_map_control"><a href="javascript:mapShow(0)" class="control_button">Закрыть</a></div>';
        //     mapBlock_html += '</div>';
        //     document.querySelector('body').append(mapBlock_html);
        // }

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

    async selectPvz(pvz_code) {
        console.log(pvz_code);
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

    static init() {
        new Sdek('[data-sdek-info]');
    }
}

Sdek.init();
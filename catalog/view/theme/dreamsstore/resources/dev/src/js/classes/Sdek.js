export default class Sdek {

    constructor(selector) {
        this.sdek = document.querySelector(selector);
        if (this.sdek) {
            console.log(this.sdek);
            this.tariff = this.sdek.dataset.sdekInfoCode;
            this.tariff_type = this.sdek.dataset.sdekInfoPvztype;
            if (this.tariff && this.tariff_type) {
                console.log(this.tariff);
                console.log(this.tariff_type);
                this.cdekPvzClick(this.tariff, this.tariff_type);
            }
        }
    }

    cdekPvzClick(tariff, tariff_type) {
        // var selectedTarif = $('input[type=radio][name=shipping_method]:checked').val();
        //
        // if (selectedTarif != 'cdek.' + tariff) {
        //     var inputVal = 'cdek.' + tariff;
        //     $("input[value='" + inputVal + "']").click();
        //     //return 0;
        // }

        this.getPvzList(tariff_type);

        selected_tariff = tariff;

        cdekymap.ready(initMap(tariff_type));
    }

    initMap(pvzType) {
        if (!pvzlist) {
            return false;
        }

        mapShow(0);
        mapShow(1);

        var mapcenter = [pvzlist[0].coordY, pvzlist[0].coordX];
        myMap = new cdekymap.Map('cdek_map', {
            center: mapcenter,
            zoom: 10,
            controls: ['zoomControl', 'fullscreenControl']
        }, {
            searchControlProvider: 'yandex#search'
        });

        var iname = 1;
        pvzlist.forEach(function (item, i, arr) {
            var description = '';
            var description = description + item.Address + '<BR>';
            var description = description + item.Phone + '<BR>';
            var description = description + item.WorkTime + '<BR>';
            var myGeoObject = new cdekymap.GeoObject({
                // Описание геометрии.
                geometry: {
                    type: "Point",
                    coordinates: [item.coordY, item.coordX]
                },
                // Свойства.
                properties: {
                    // Контент метки.
                    iconContent: iname,
                    hintContent: description
                }
            }, {
                // Опции.
                // Иконка метки будет растягиваться под размер ее содержимого.
                preset: 'islands#blueIcon',
                // Метку можно перемещать.
                draggable: false
            });
            iname = iname + 1;
            myGeoObject.events.add('click', function () {
                selectPvz(item.Code);
            });
            myMap.geoObjects.add(myGeoObject);
        });
        myMap.geoObjects.options.set("openBalloonOnClick", false);
    }

    mapShow(status) {
        if (!$('#cdek_map').length) {
            var mapBlock_html = '<div class="cdek_map_container" id="cdek_map_contaner" style="dispaly:none">';
            mapBlock_html += '<div class="cdek_map_container_map" id="cdek_map"></div>';
            mapBlock_html += '<div class="cdek_map_container_map_control"><a href="javascript:mapShow(0)" class="control_button">Закрыть</a></div>';
            mapBlock_html += '</div>';
            $('body').append(mapBlock_html);
        }

        if (status == 1) {
            $('#cdek_map_contaner').show();
        } else {
            $('#cdek_map_contaner').hide();
            $('#cdek_map').html('');
        }
    }

    selectPvz(pvz_code) {
        mapShow(0);

        $.ajax({
            async: false,
            url: 'index.php?route=extension/shipping/cdek/selectPvz',
            type: 'POST',
            dataType: 'json',
            data: ({
                pvz_code: pvz_code,
                tariff: selected_tariff
            }),
            success: function (json) {
                if (json.status) {
                    $('.cdek_selectedPvzInfo').html('');
                    $('#cdek_selectedPvzInfo_' + selected_tariff).html(json.data.address);
                }
            },
            error: function (data) {
                console.log('selectPvz error', data);
            }
        });
    }

    getPvzList(tariff_type) {
        $.ajax({
            async: false,
            url: 'index.php?route=extension/shipping/cdek/getPvzList',
            type: 'POST',
            dataType: 'json',
            data: ({
                tariff_type: tariff_type
            }),
            success: function (json) {
                if (json.status) {
                    pvzlist = json.data;
                } else {
                    alertMessage(json.message, false);
                }
            },
            error: function (data) {
                console.log('getPvzList error', data);
            }
        });
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
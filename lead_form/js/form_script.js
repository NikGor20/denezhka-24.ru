var partner;
var domine = window.location.host;
var counterType;
var validate;
var tokens = [
    'c716c622847016a21c1a0c17c337a6accde173d7',
    '41025a68c9469b714ec564739895034221b4bbd6',
    '00d3104fc4654b9faa72e9a1872146edeafceb36',
    '4b9a221fbaa3edbaacb3c5d14a32628d2376f04b',
    '30240120b8ac6e780404b0465d201f85e21d4b3c',
    'd9da29d27530363e5efd83c1f7f474bc6ca633da',
    '3cf5543e1074ca1db68b1c4e14a0045908d1083c',
    '665ebd21afab42f01dec8224f9feb3f73c118cf5',
    '54682fef61ae4dca334285e2152ff91cd229f5f5',
    'fdcac41eba2a2f06915d6aa1093b4b30e76914a0',
];
var rand = Math.floor(Math.random() * tokens.length);
var token = tokens[rand];
$(document).ready(function () {
    //Определяем уникальность посещения
    if (localStorage.getItem('partner') != null) {
        counterType = 'visit';
    } else {
        counterType = 'unic';
    }

    partner = setPartner();

    window.addEventListener('popstate', function (e) {

        if (supports_history_api()) {
            document.location.href = 'https://' + domine + '/vitrinaComeback.php?&partner=' + localStorage.getItem('partner') + '&domine=' + domine;
        }
    });

    setTimeout(function () {
        document.location.href = 'https://' + domine + '/vitrinaComeback.php?&partner=' + localStorage.getItem('partner') + '&domine=' + domine;
    }, 900000);


    //Отправляем посещение в срм
    $.get('https://creditmarket-crm.ru/frontend/web/index.php?r=stat/api/update&partner=' + partner + '&domine=' + domine + '&type=' + counterType + '&offerType=recurrent',
            function (data) {

            })
            .fail(function (xhr) {
                console.log(xhr);
            });


    //Устанавливаем домен в инпут для отправки постом
    $('input[name="domine"]').val(domine);

    //Настраиваем первый экран формы и прочую вёрстку
    $(".menu-col-btn").click(function () {
        if ($(".nav-text-ad").css("display") == "block") {

            $(".nav-text-ad").css("display", "none");
        } else {
            $(".nav-text-ad").css("display", "block");
        }
    });


    $(".sogl-img").click(function () {
        $('.sogl-img img').toggle();
    });

    $(".what-stat-block").click(function () {
        $(".active-text").removeClass("active-text");
        $(".active-menu").removeClass("active-menu");
        $(this).parent().addClass("active-menu");
        $($(this).parent().data("to")).addClass("active-text");
    });


    $(".what-block-sm").click(function () {
        if ($(this).find(".what-menu-sm").hasClass("active-menu-sm")) {
            $(".active-text-sm").removeClass("active-text-sm");
            $(".active-menu-sm").removeClass("active-menu-sm");
        } else {
            $(".active-text-sm").removeClass("active-text-sm");
            $(".active-menu-sm").removeClass("active-menu-sm");
            $(this).find(".what-menu-sm").addClass("active-menu-sm");
            $(this).find(".what-text-sm").addClass("active-text-sm");
        }
    });

    $(".form-trans").click(function () {//????
        $($(this).data("from")).css("display", "none");
        $($(this).data("to")).css("display", "block");
    });

    //Сброс класса ошибки при клике на поле
    $('.invalid').on('click', function () {
        $(this).removeClass('invalid');
    });

    //Сброс подсказок при клике на поле
    $('.form-input').on('click', function () {
        $('.formTooltip').remove();
    });



    /*Маски для полей не проверяемых дадатой в js*/
    $('#inputTel').inputmask({"mask": "+7 (999) 999-9999"});
    $('#inputPassport').inputmask({"mask": "9999"});
    $('#inputPassportNum').inputmask({"mask": "999999"});
    $('#inputPassportUnitCode').inputmask({"mask": "999-999"});
    $('#inputDr').inputmask({"mask": "99.99.9999"});
    $('#inputPassportIssuedDate').inputmask({"mask": "99.99.9999"});


    /*Удаление из полей запрещённых символов*/
    $('#inputF').bind("change keyup input click", function () {
        if (this.value.length > 0) {
            this.value = this.value[0].toUpperCase() + this.value.substring(1);
        }

        if (this.value.match(/[^А-Яа-яёй\s]/g)) {
            this.value = this.value.replace(/[^А-Яа-яёй \s]/g, '');
        }
    });
    $('#inputI').bind("change keyup input click", function () {
        if (this.value.length > 0) {
            this.value = this.value[0].toUpperCase() + this.value.substring(1);
        }
        if (this.value.match(/[^А-Яа-яёй\s]/g)) {
            this.value = this.value.replace(/[^А-Яа-яёй \s]/g, '');
        }
    });
    $('#inputO').bind("change keyup input click", function () {
        if (this.value.length > 0) {
            this.value = this.value[0].toUpperCase() + this.value.substring(1);
        }
        if (this.value.match(/[^А-Яа-яёй\s]/g)) {
            this.value = this.value.replace(/[^А-Яа-яёй \s]/g, '');
        }
    });


    $('#inputRegion').bind("change keyup input click", function () {
        if (this.value.length > 0) {
            this.value = this.value[0].toUpperCase() + this.value.substring(1);
        }

        if (this.value.match(/[^А-Яа-яёй\s]/g)) {
            this.value = this.value.replace(/[^А-Яа-яёй \s]/g, '');
        }
    });

    $('#inputLocality').bind("change keyup input click", function () {
        if (this.value.length > 0) {
            this.value = this.value[0].toUpperCase() + this.value.substring(1);
        }

        if (this.value.match(/[^А-Яа-яёй\s]/g)) {
            this.value = this.value.replace(/[^А-Яа-яёй \s]/g, '');
        }
    });


    /*Выделение при клике на кред. организацию*/
    $('#form .vit').on('click', function () {
        $(this).toggleClass('select');
        $(this).find('.PlusMini').toggle();
        $(this).find('.minusMini').toggle();

    });

});

function setPartner() {

    if (localStorage.getItem('partner') != null) {
        localStorage.removeItem('partner');
    }

    var NewPartner = getUrlVars()['partner'];
    if (NewPartner != undefined) {
        localStorage.setItem('partner', NewPartner);
    }

    return localStorage.getItem('partner');
}


/*Функция получает параметры из ссылки*/
function getUrlVars() {

    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

    for (var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

//Переход между экранами формы с валидацией
/**
 * Скрывает блок t и отображает n
 * @param INT t Номер текущего шага
 * @param INT n Номер следующего шага
 * @returns {undefined}
 */
function next(t, n) {

    validate = true;

    if ($('#inputF').val() == "" && t == '1') {

        $('#inputF').addClass('invalid');
        validate = false;
    }
    if ($('#inputI').val() == "" && t == '1') {

        $('#inputI').addClass('invalid');
        validate = false;
    }
    if ($('#inputO').val() == "" && t == '1') {

        $('#inputO').addClass('invalid');
        validate = false;
    }

    if ($('#inputEmail').val() == "" && t == '1') {

        $('#inputEmail').addClass('invalid');
        validate = false;
    }


    if ($('#inputCity').val() == "" && t == '1') {

        $('#inputCity').addClass('invalid');
        validate = false;
    }

    $('#inputEmail').bind("change input click", function () {
        $('#email-help').hide();
        if (this.value.match(/[^A-z0-9@.-\s]/g)) {

            $('#email-help').show();
            this.value = this.value.replace(/[^A-z0-9@.-\s]/g, '');
        }
    });


    if ($('#inputTel').val() == "" && t == '1') {

        $('#inputTel').addClass('invalid');
        validate = false;
    }

    if ($(".sogl-img").find("img").css('display') == 'none' && t == '1') {
        $('.form-sogl').addClass('invalid');
        validate = false;
    }

    if ($('#inputDr').val() == "" && t == '2') {

        $('#inputDr').addClass('invalid');
        validate = false;
    }

    if ($('#inputDrPlace').val() == "" && t == '2') {

        $('#inputDrPlace').addClass('invalid');
        validate = false;
    }
    if ($('#inputPassport').val() == "" && t == '2') {

        $('#inputPassport').addClass('invalid');
        validate = false;
    }

    if ($('#inputPassportNum').val() == "" && t == '2') {

        $('#inputPassportNum').addClass('invalid');
        validate = false;
    }


    if ($('#inputPassportIssuedDate').val() == "" && t == '2') {

        $('#inputPassportIssuedDate').addClass('invalid');
        validate = false;
    }
    if ($('#inputBirthPlace').val() == "" && t == '2') {

        $('#inputBirthPlace').addClass('invalid');
        validate = false;
    }
    if ($('#inputPassportUnitCode').val() == "" && t == '2') {

        $('#inputPassportUnitCode').addClass('invalid');
        validate = false;
    }
    if ($('#inputRegion').val() == "" && t == '2') {

        $('#inputRegion').addClass('invalid');
        validate = false;
    }
    if ($('#inputLocality').val() == "" && t == '2') {

        $('#inputLocality').addClass('invalid');
        validate = false;
    }

    if ($('#inputStreet').val() == "" && t == '2') {

        $('#inputStreet').addClass('invalid');
        validate = false;
    }



    if ($('#inputPassportDate').val() == "" && t == '2') {

        $('#inputPassportDate').addClass('invalid');
        validate = false;
    }
    if ($('#inputPassportCode').val() == "" && t == '2') {

        $('#inputPassportCode').addClass('invalid');
        validate = false;
    }
    if ($('#inputPassportOrg').val() == "" && t == '2') {

        $('#inputPassportOrg').addClass('invalid');
        validate = false;
    }
    if ($('#inputAddress').val() == "" && t == '2') {

        $('#inputAddress').addClass('invalid');
        validate = false;
    }
    if ($('#inputHouse').val() == "" && t == '2') {

        $('#inputHouse').addClass('invalid');
        validate = false;
    }

    if (!validate) {
        return false;
    }

    // поэтапно сохраняем данные из Leadform
    switch (t) {
        case 0:
            formOne();
            break;
        case 1:
            formTwo();
            break;
        case 2:
            formThree();
            break;
    }


    $('#step' + t).hide(300);
    $('#step' + n).show(300);

    $(document).scrollTop(50);

    if (n == 4) {
        startTimer();
        getPaymentToken();
    }


    return true;
}

//Переход между экранами формы назад
/**
 * Скрывает блок t и отображает n
 * @param INT t Номер текущего шага
 * @param INT n Номер следующего шага
 * @returns {undefined}
 */
function back(t, n) {
    $('#step' + t).hide(300);
    $('#step' + n).show(300);
    $(document).scrollTop(40);
}

function startTimer() {
    $('#step3').hide();
    //saveorder();
    $('#step4').show();

    circle = $(".progress-ring__circle")

    r = 70;
    circumference = 2 * Math.PI * r;


    var _Seconds = 60,
            int;
    int = setInterval(function () { // запускаем интервал
        if (_Seconds > 43) {
            _Seconds--; // вычитаем 1
            $('#step4 .timerBlock').html(_Seconds); // выводим получившееся значение в блок
            offset = circumference - _Seconds / 60 * circumference;
            $(".progress-ring__circle").css("strokeDashoffset", offset)
            $(".timer-seconds").html(_Seconds)
        } else {
            clearInterval(int); //очищаем интервал, чтобы он не продолжал работу при _Seconds = 0
            $('#step4').hide();
            $('#step5').show();
        }
    }, 1000);
}

function formOne() {
    $.ajax({
        url: 'https://creditmarket-crm.ru/frontend/web/index.php?r=recurrentsv3/default/new-lead', // надо поменять ссылку на верный модуль (recurrentsv3)
        method: 'get',
        data:
                {//Ползунки (шаг 1)
                    'sum': $('#inputSum').val(),
                    'loan_term': $('#loan_term').val(),
                    'partner': localStorage.getItem('partner'),
                    'domine': window.location.host,
                    'click_id': localStorage.getItem('click_id'),
                    'utm_campaign': localStorage.getItem('utm_campaign')
                },
        success: function (leadId) { // в случае успеха возвращаем ай ди лида и сохраняем в локальном хранилище
            localStorage.setItem('leadId', leadId);
            localStorage.setItem('login', leadId);
            localStorage.setItem('password', leadId);
        },
        error: function (xhr) {
            console.log(xhr);
        }
    });
}

function formTwo() {
    $.ajax({
        url: 'https://creditmarket-crm.ru/frontend/web/index.php?r=recurrentsv3/default/new-lead', // надо поменять ссылку на верный модуль (recurrentsv3)
        method: 'get',
        data:
                {// Первая страница формы (шаг 2)
                    'us_last_name': $('#inputF').val(), //фамилия
                    'us_name': $('#inputI').val(), // имя
                    'us_patronymic': $('#inputO').val(), // отчество
                    'us_phone': $('#inputTel').val(),
                    'us_email': $('#inputEmail').val(),
                    'city': $('#inputCity').val(),
                    'lead_id': localStorage.getItem('leadId')
                },
        error: function (xhr) {
            console.log(xhr);
        },
        success: function (data) {
            console.log(data);
        }
    });
}

function formThree() {
    $.ajax({
        url: 'https://creditmarket-crm.ru/frontend/web/index.php?r=recurrentsv3/default/new-lead', // надо поменять ссылку на верный модуль (recurrentsv3)
        method: 'get',
        data:
                {
                    // Вторая страница формы (шаг 3)
                    'drPlace': $('#inputDrPlace').val(),
                    'dr': $('#inputDr').val(),
                    'us_id': $('#inputPassport').val(), // только серия паспорта
                    'us_id2': $('#inputPassport').val() + ' ' + $('#inputPassportNum').val(), // серия + номер паспорта
                    'passportDate': $('#inputPassportIssuedDate').val(),
                    'passportCode': $('#inputPassportUnitCode').val(),
                    'passportOrg': $('#inputPassportIssuedBy').val(),
                    'birthPlace': $('#inputBirthPlace').val(),
                    'region': $('#inputRegion').val(), //регион
                    'address': $('#inputStreet').val(), // улица
                    'house': $('#inputHouse').val(), // номер дома
                    'apart': $('#inputFlat').val(), // номер квартиры
                    'cr_target': 'auto',
                    'lead_id': localStorage.getItem('leadId')

                            /*  'regist': $('#inputRegion').val() + ' ' + $('#inputLocality').val() + ' '
                             + $('#inputStreet').val() + ' ' + $('#inputHouse').val() + ' ' + $('#inputFlat').val()*/ //адрес регистрации в сборе
                },
        error: function (xhr) {
            console.log(xhr);
        },
        success: function (data) {
            console.log(data);
        }
    });
}

/*Тестовая для v3*/
function getPaymentToken() {

    $('.fio').html($('#inputF').val() + ' ' + $('#inputI').val() + ' ' + $('#inputO').val(), );
    console.log('./scripts/doPay.php?type=getToken&leadId=' + localStorage.getItem('leadId') + '&partner=' + localStorage.getItem('partner') + '&login=' + localStorage.getItem('login') + '&password=' + localStorage.getItem('password'),);

    $.ajax({
        url: './scripts/doPay.php?type=getToken&leadId=' + localStorage.getItem('leadId') + '&partner=' + localStorage.getItem('partner') + '&login=' + localStorage.getItem('login') + '&password=' + localStorage.getItem('password'),
        method: 'get',
        success: function (data) {
            console.log(data);
            $('#step6').append('<iframe src="' + data + '" width="100%" style = "height: 780px;"></iframe>');
            return data;
        },
        error: function (xhr) {
            console.log(xhr);
        }
    });

}


/*Подсказки к полям*/
/*Фамилия*/
$(document).on('input', '#inputF', function () {
    if ($(this).val().length > 2) {
        getPerson($(this), $(this).val(), ["SURNAME"]);
    }
});
/*Имя*/
$(document).on('input', '#inputI', function () {
    if ($(this).val().length > 2) {
        getPerson($(this), $(this).val(), ["NAME"]);
    }
});
/*Отчество*/
$(document).on('input', '#inputO', function () {
    if ($(this).val().length > 2) {
        getPerson($(this), $(this).val(), ["PATRONYMIC"]);
    }
});

/*email*/
$(document).on('input', '#inputEmail', function () {
    if ($(this).val().length > 2) {
        getEmail($(this), $(this).val());
    }
});

/*Телефон в блоке ready*/
/*Адрес*/
$(document).on('input', '#inputAddress', function () {
    if ($(this).val().length > 2) {
        getAddress($(this), $(this).val());
    }
});

$(document).on('input', '#inputCity', function () {
    if ($(this).val().length > 2) {
        getCity($(this), $(this).val());
    }
});
/*Паспорт в блоке ready*/
/*Дата рождения в блоке ready*/
/*Место рождения*/
$(document).on('input', '#inputBirthPlace', function () {
    if ($(this).val().length > 2) {
        getBirthPlace($(this), $(this).val());
    }
});

/*Кем выдан по коду подразделения*/
$(document).on('input', '#inputPassportUnitCode', function () {
    if ($(this).val().length > 2) {
        getPassportUnitCode($(this), $(this).val());
    }
});
/*Дата выдачи паспорта в блоке ready*/

function getPerson(el, query, parts) {

    var url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/fio";

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token " + token
        },
        data: JSON.stringify({query: query, parts: parts}),
        processData: false,

        success: function (msg) {

            var html = '';
            msg.suggestions.forEach((surname) => {
                html += `
                <li class="name_item" onclick = "$('#` + el[0].id + `').val('` + surname.value + `'); setGender('` + surname.data.gender + `');$('.formTooltip').remove();">` + surname.value + `
                </li>
                `;
            });
            $('.formTooltip').remove();
            el.parent().append('<ul class="formTooltip">' + html + '</ul>');
        },
        error: function () {
            console.log('error!');
        }
    });
}

function setGender(gender) {

    if (gender != 'UNKNOWN') {
        $('#inputGender').val(gender.toLowerCase());
    }
}

function getEmail(el, query) {
    var url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/email";

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token " + token
        },
        data: JSON.stringify({query: query}),
        processData: false,

        success: function (msg) {

            var html = '';
            msg.suggestions.forEach((surname) => {
                html += `
                <li class="name_item" onclick = "$('#` + el[0].id + `').val('` + surname.value + `');$('.formTooltip').remove();">` + surname.value + `
                </li>
                `;
            });
            $('.formTooltip').remove();
            el.parent().append('<ul class="formTooltip">' + html + '</ul>');
        },
        error: function () {
            console.log('error!');
        }
    });
}

function getAddress(el, query) {
    var url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address";

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token " + token
        },
        data: JSON.stringify({query: query}),
        processData: false,

        success: function (msg) {

            var html = '';
            msg.suggestions.forEach((surname) => {
                html += `
                <li class="name_item" onclick = "$('#` + el[0].id + `').val('` + surname.value + `');$('.formTooltip').remove();">` + surname.value + `
                </li>
                `;
            });
            $('.formTooltip').remove();
            el.parent().append('<ul class="formTooltip">' + html + '</ul>');
        },
        error: function () {
            console.log('error!');
        }
    });
}

function getBirthPlace(el, query) {
    var url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address";

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token " + token
        },
        data: JSON.stringify({query: query}),
        processData: false,

        success: function (msg) {

            var html = '';
            msg.suggestions.forEach((surname) => {
                if (surname.data.city != null) {
                    html += `
                    <li class="name_item" onclick = "$('#` + el[0].id + `').val('` + surname.data.city + `');$('.formTooltip').remove();">` + surname.data.city + `
                    </li>
                    `;
                }

            });
            $('.formTooltip').remove();
            el.parent().append('<ul class="formTooltip">' + html + '</ul>');
        },
        error: function () {
            console.log('error!');
        }
    });
}

function getPassportUnitCode(el, query) {
    var url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/fms_unit";

    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token " + token
        },
        data: JSON.stringify({query: query}),
        processData: false,

        success: function (msg) {

            var html = '';
            msg.suggestions.forEach((surname) => {
                html += `
                <li class="name_item" onclick = "$('#` + el[0].id + `').val('` + surname.data.code + `');$('.formTooltip').remove();$('#inputPassportIssuedBy').val('` + surname.value + `')">` + surname.value + `
                </li>
                `;
            });
            $('.formTooltip').remove();
            el.parent().append('<ul class="formTooltip">' + html + '</ul>');
        },
        error: function () {
            console.log('error!');
        }
    });
}


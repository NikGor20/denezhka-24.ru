//Определяем уникальность посещения
console.log('--------------');
console.log(localStorage.getItem('partner'));
if (localStorage.getItem('partner') != null) {

    counterType = 'visit';
} else {
    counterType = 'unic';
}
console.log(counterType);

    /*Находит параметр партнёр и привязывает его к браузеру*/
    function setPartnerIndex() {
        console.log('leadForm.js::setPartnerIndex:');

        /*Сбрасываем параметры. На случай кеша и другой гадости*/
        var die = $.now() + 1209600000;
        partner = 'undefined';
        var partnerDie = 'undefined';
        var counter = 'undefined';

        console.log('1::setPartnerIndex:partner:' + partner);

        //Время смерти есть в локальном хранилище - ставим
        if (localStorage.getItem('partnerDie') != null) {
            partnerDie = localStorage.getItem('partnerDie');
        }
    console.log('2::setPartnerIndex:partner:' + partner);
        //Время смерти не установлено или прошло - убиваем всё
        if (partnerDie == 'undefined' || partnerDie == null || partnerDie < $.now()) {
            localStorage.removeItem('partnerDie');
            localStorage.removeItem('partner');
        }
    console.log('3::setPartnerIndex:partner:' + partner);
        //Партнёр есть в локальном хранилище - ставим
        if (localStorage.getItem('partner') != 'null') {
            partner = localStorage.getItem('partner');
        }
    console.log('4::setPartnerIndex:partner:' + partner);
        //Партнёр не установлен и есть в URL - ставим из URL
        if (partner == 'undefined' && getUrlVars()['partner'] != null || partner == null && getUrlVars()['partner'] != null) {

            partner = getUrlVars()['partner'];

            //Ставим новые куки и пишем в локальное хранилище
            localStorage.setItem('partner', partner);
            localStorage.setItem('partnerDie', die);
        }
    console.log('5::setPartnerIndex:partner:' + partner);
        //Партнёра нет нигде - ставим NULL
        if (partner == 'undefined' && getUrlVars()['partner'] == null || partner == null && getUrlVars()['partner'] == null) {
            partner = null;

            //Ставим новые куки и пишем в локальное хранилище
            localStorage.setItem('partner', partner);
            localStorage.setItem('partnerDie', die);
        }
        console.log('6::setPartnerIndex:partner:' + partner);

    }
    function setGuruData(){
        console.log(typeof getUrlVars()['click_id']);
            if(getUrlVars()['click_id'] != undefined){

            localStorage.setItem('click_id', getUrlVars()['click_id']);
        }
            if(getUrlVars()['utm_campaign'] != undefined){

            localStorage.setItem('utm_campaign', getUrlVars()['utm_campaign']);
        }
        if (getUrlVars()['sub'] != undefined) {

            localStorage.setItem('sub', getUrlVars()['sub']);
        }
        if (getUrlVars()['sub2'] != undefined) {

            localStorage.setItem('sub2', getUrlVars()['sub2']);
        }
        if (getUrlVars()['sub3'] != undefined) {

            localStorage.setItem('sub3', getUrlVars()['sub3']);
        }
        if (getUrlVars()['sub4'] != undefined) {

            localStorage.setItem('sub4', getUrlVars()['sub4']);
        }
        if (getUrlVars()['sub5'] != undefined) {

            localStorage.setItem('sub5', getUrlVars()['sub5']);
        }
        if (getUrlVars()['sub6'] != undefined) {

            localStorage.setItem('sub6', getUrlVars()['sub6']);
        }
        if (getUrlVars()['crm_click_id'] != undefined) {

            localStorage.setItem('crm_click_id', getUrlVars()['crm_click_id']);
        }
        console.log('setGuruData:click_id:' + localStorage.getItem('click_id'));
        console.log('setGuruData:utm_campaign:' + localStorage.getItem('utm_campaign'));
        console.log('setGuruData:sub:' + localStorage.getItem('sub'));
        console.log('setGuruData:crm_click_id:' + localStorage.getItem('crm_click_id'));
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

    setPartnerIndex();
    setGuruData();
    $('body');
     console.log('https://creditmarket-crm.ru/frontend/web/index.php?r=stat/api/update&partner=' + localStorage.getItem('partner') + '&domine=' + window.location.host + '&type=' + counterType + '&offerType=recurrent');
    jQuery.get('https://creditmarket-crm.ru/frontend/web/index.php?r=stat/api/update&partner=' + localStorage.getItem('partner') + '&domine=' + window.location.host + '&type=' + counterType + '&offerType=recurrent',
            function (data) {

            })
            .fail(function (xhr) {
                console.log(xhr);
            });


function myFunction() {
  var copyText = document.getElementById('myInput')

  copyText.select()

  document.execCommand('copy')

  alert('Скопировна ссылка: ' + copyText.value)
}

if(document.getElementsByClassName("header-time-change"))
{
	function change_time() {

		let h_time = document.getElementsByClassName("header-time-change");
		let oldDate = new Date();
		let date = new Date(oldDate.getTime() + 7*60000);
		let mins = date.getMinutes();
		let hrs = date.getHours();
		if(mins<=9) {
			mins = '0'+String(mins);
		}

		if(hrs<=9) {
			hrs = '0'+String(hrs);
		}
		for(let i = 0;i<h_time.length;i++)
		{
			h_time[i].innerHTML = `${hrs}:${mins}`;
		}

		// h_time.innerHTML = `${hrs}:${mins}`;

	}
	change_time();
	setInterval(change_time,60000);
}

$(document).ready(function(){
    $('#inputFio').bind("change keyup input click", function () {
        if (this.value.match(/[^А-Яа-яёй\s]/g)) {
            this.value = this.value.replace(/[^А-Яа-яёй \s]/g, '');
        }
    });
});

/**
     * Скрывает блок t и отображает n
     * @param INT t Номер текущего шага
     * @param INT n Номер следующего шага
     * @returns {undefined}
     */
    function nextForm(t,n){

        var validate = true;

        if($('#inputFio').val() == "" && t == '1'){
             console.log('inputFio');
            $('#inputFio').addClass('invalid');
            validate = false;
        }

        /*if($('#inputEmail').val() == "" && t == '1'){
            console.log('inputEmail');
            $('#inputEmail').addClass('invalid');
            validate = false;
        }*/

        if($('#inputTel').val() == "" && t == '1'){
            console.log('inputTel');
            $('#inputTel').addClass('invalid');
            validate = false;
        }
        /*step2*/
        if($('#inputDr').val() == "" && t == '2'){
             console.log('inputDr');
            $('#inputDr').addClass('invalid');
            validate = false;
        }
        if($('#inputDrPlace').val() == "" && t == '2'){
            console.log('inputDrPlace');
            $('#inputDrPlace').addClass('invalid');
            validate = false;
        }
        if($('#inputPassport').val() == "" && t == '2'){
            console.log('inputPassport');
            $('#inputPassport').addClass('invalid');
            validate = false;
        }
        if($('#inputPassportDate').val() == "" && t == '2'){
             console.log('inputPassportDate');
            $('#inputPassportDate').addClass('invalid');
            validate = false;
        }
        if($('#inputPassportCode').val() == "" && t == '2'){
            console.log('inputPassportCode');
            $('#inputPassportCode').addClass('invalid');
            validate = false;
        }
        if($('#inputPassportOrg').val() == "" && t == '2'){
            console.log('inputPassportOrg');
            $('#inputPassportOrg').addClass('invalid');
            validate = false;
        }
        if($('#inputAddress').val() == "" && t == '2'){
             console.log('inputAddress');
            $('#inputAddress').addClass('invalid');
            validate = false;
        }
        if($('#inputHouse').val() == "" && t == '2'){
            console.log('inputHouse');
            $('#inputHouse').addClass('invalid');
            validate = false;
        }

        if(!validate){return false;}

        $('#step' + t).hide(300);
        $('#step' + n).show(300);

        if(n == 3){
            getPaymentTokenForm();
        }

        $('html, body').animate({
            scrollTop: $('#step' + n)
        })

        return true;
    }

    function getPaymentTokenForm(){
        console.log('getPaymentToken:');
        $('.fio').html($('#inputF').val() + ' ' + $('#inputI').val() + ' ' + $('#inputO').val(),);

        $.ajax({
            url: '/scripts/doPay.php?type=unicString',
            method: 'get',
            async: false,
            success: function(unicString) {
                console.log('form.js::unicString:' + unicString);

                partner = setPartner();
                console.log('form.js::partner:' + partner);

                $('input[name="partner"]').val(partner);
                console.log('form.js::input[name="partner"]:' + partner);


                $.ajax({
                    url: 'https://creditmarket-crm.ru/frontend/web/index.php?r=recurrentLead/default/index',
                    method: 'get',
                    data:
                        {
                            'us_last_name':$('#inputF').val(),
                            'us_name':$('#inputI').val(),
                            'us_patronymic':$('#inputO').val(),
                            'us_id':$('#inputPassport').val(),
                            'us_phone':$('#inputTel').val(),
                            'us_email':$('#inputEmail').val(),
                            'cr_target':'auto',
                            'domine':location.hostname,
                            'partner':$('input[name="partner"]').val(),
                            'dr':$('#inputDr').val(),
                            'drPlace':$('#inputDrPlace').val(),
                            'passportDate':$('#inputPassportDate').val(),
                            'passportCode':$('#inputPassportCode').val(),
                            'passportOrg':$('#inputPassportOrg').val(),
                            'address':$('#inputAddress').val(),
                            'house':$('#inputHouse').val(),
                            'apart':$('#inputApart').val()
                        },

                            //$("#form").serialize(),
                    async: false,
                    error: function (xhr) {
                        console.log('error');
                        console.log(xhr);
                        //alert('error');
                        //alert(xhr);
                    },
                    success: function (leadId) {
                        console.log('leadId:' + leadId);


                        $.ajax({
                            url: '/scripts/doPay.php?type=getToken&leadId=' + leadId + '&unicString=' + unicString,
                            method: 'get',
                            success: function(data) {
                                console.log(data);

                                $('#step3').append('<iframe src="'+data+'" width="100%" style = "height: 680px;"></iframe>');
                                return data;
                            },
                            error: function(xhr) {
                                console.log(xhr);
                            }
                        });
                    }
                });

            },
            error: function(xhr) {
                console.log(xhr);
            }
        });



    }


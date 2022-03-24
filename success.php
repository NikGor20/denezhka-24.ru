<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        @font-face
        {
            font-family: Futura Md BT;
            src: url("fonts/FuturaMediumBT.ttf");
        }

        body {
            background-color: #ffffff;
        }
        /* success_block */

        #success_block {
            margin-top: 20px;
        }

        #success_block .success-img {
            background-image: url(./images/img/success.png);
            background-repeat: no-repeat;
            background-position: 100% 50%;
            -webkit-background-size: 70%;
            background-size: 70%;
        }

        #success_block .success-info {
            text-align: center;
        }

        #success_block .success_block-img {
            display: inline-block;
            width: 149px;
            height: 149px;
            margin: 17px auto 50px auto;

            background-image: url(./images/img/ellipse-success.png);
            background-repeat: no-repeat;
            -webkit-background-size: 100% 100%;
            background-size: 100% 100%;
        }

        #success_block a.next {
            display: inline-block;
            padding: 0;

            font-size: inherit;
            line-height: inherit;

            background-color: #00BBE4;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }

        #success_block a.next p {
            position: relative;

            margin: 0;
            padding: 14px 90px 14px 74px;

            font-size: 15px;
            text-transform: uppercase;
        }

        #success_block a.next p:after {
            content: '';

            position: absolute;
            top: 13px;
            right: 50px;

            width: 12px;
            height: 20px;

            background-image: url(../img/arrow-white.svg);
        }

        #success_block a.next:focus {
            outline-style: none;
        }

        @media (max-width: 768px) {
            #success_block .success-img {
                display: none;
            }

            #success_block .success_block-img {
                width: 125px;
                height: 125px;
                padding-bottom: 40px;
            }

            #success_block h1 {
                font-size: 25px;
            }

            #success_block a.next p {
                padding: 14px 40px 14px 20px;
                text-transform: none;
            }

            #success_block a.next p:after {
                top: 30%;
                right: 20px;
            }
        }

        /* tinkoff_block */

        #tinkoff_block {
            margin-top: 20px;
            display: none;
        }

        #tinkoff_block .tinkoff-img {
            background-image: url(./images/img/tin.png);
            background-repeat: no-repeat;
            background-position: 100% 50%;
            -webkit-background-size: 70%;
            background-size: 70%;
        }

        #tinkoff_block .tinkoff-info {
            text-align: center;
        }

        #tinkoff_block .tinkoff_block-img {
            display: inline-block;
            width: 149px;
            height: 149px;
            margin: 17px auto 50px auto;

            background-image: url(./images/img/red_cross.png);
            background-repeat: no-repeat;
            -webkit-background-size: 100% 100%;
            background-size: 100% 100%;
        }

        #tinkoff_block a.vitrina {
            display: inline-block;
            padding: 0;

            font-size: inherit;
            line-height: inherit;

            background-color: rgba(2, 145, 195, 0.22);
            color: #000000;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 15px;
        }

        #tinkoff_block a.vitrina p {
            position: relative;

            margin: 0;
            padding: 14px 90px 14px 74px;

            font-size: 15px;
            text-transform: uppercase;
        }

        #tinkoff_block a.vitrina p:after {
            content: '';

            position: absolute;
            top: 13px;
            right: 50px;

            width: 12px;
            height: 20px;

            background-image: url(../img/arrow-white.svg);
        }

        #tinkoff_block a.vitrina:focus {
            outline-style: none;
        }

        #tinkoff_block .tinkoff_block-img {
            width: 125px;
            height: 125px;
            padding-bottom: 40px;
        }

        #tinkoff_block h1 {
            font-size: 25px;
        }

        #tinkoff_block a.vitrina p {
            text-transform: none;
        }

        #tinkoff_block a.vitrina p:after {
            top: 30%;
            right: 20px;
        }
        #tinkoff_block a.add_card{
            display: inline-block;
            padding: 0;

            font-size: inherit;
            line-height: inherit;

            background-color: #05e482;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;

        }

        #tinkoff_block a.add_card p {
            position: relative;

            margin: 0;
            padding: 14px 90px 14px 74px;

            font-size: 15px;
            text-transform: uppercase;
        }

        #tinkoff_block a.add_card p:after {
            content: '';

            position: absolute;
            top: 13px;
            right: 50px;

            width: 12px;
            height: 20px;

            background-image: url(../img/arrow-white.svg);
        }

        #tinkoff_block a.add_card:focus {
            outline-style: none;
        }


        #tinkoff_block a.add_card p {

            text-transform: none;
        }

        #tinkoff_block a.add_card p:after {
            top: 30%;
            right: 20px;
        }

        @media (max-width: 768px) {
            #tinkoff_block .tinkoff-img {
                display: none;
            }
        }


        /* double_card_block */

        #double_card_block {
            margin-top: 20px;
            display: none;
        }

        #double_card_block .double_card-img {
            background-image: url(./images/img/double-card.png);
            background-repeat: no-repeat;
            background-position: 100% 50%;
            -webkit-background-size: 70%;
            background-size: 70%;
        }

        #double_card_block .double_card-info {
            text-align: center;
        }

        #double_card_block .double_card_block-img {
            display: inline-block;
            width: 149px;
            height: 149px;
            margin: 17px auto 50px auto;

            background-image: url(./images/img/red_cross.png);
            background-repeat: no-repeat;
            -webkit-background-size: 100% 100%;
            background-size: 100% 100%;
        }

        #double_card_block a.vitrina {
            display: inline-block;
            padding: 0;

            font-size: inherit;
            line-height: inherit;

            background-color: rgba(2, 145, 195, 0.22);
            color: #000000;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 15px;
        }

        #double_card_block a.vitrina p {
            position: relative;

            margin: 0;
            padding: 14px 90px 14px 74px;

            font-size: 15px;
            text-transform: uppercase;
        }

        #double_card_block a.vitrina p:after {
            content: '';

            position: absolute;
            top: 13px;
            right: 50px;

            width: 12px;
            height: 20px;

            background-image: url(../img/arrow-white.svg);
        }

        #double_card_block a.vitrina:focus {
            outline-style: none;
        }

        #double_card_block .tinkoff_block-img {
            width: 125px;
            height: 125px;
            padding-bottom: 40px;
        }

        #double_card_block h1 {
            font-size: 25px;
        }

        #double_card_block a.vitrina p {

            text-transform: none;
        }

        #double_card_block a.vitrina p:after {
            top: 30%;
            right: 20px;
        }
        #double_card_block a.add_card{
            display: inline-block;
            padding: 0;

            font-size: inherit;
            line-height: inherit;

            background-color: #05e482;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;

        }

        #double_card_block a.add_card p {
            position: relative;

            margin: 0;
            padding: 14px 90px 14px 74px;

            font-size: 15px;
            text-transform: uppercase;
        }

        #double_card_block a.add_card p:after {
            content: '';

            position: absolute;
            top: 13px;
            right: 50px;

            width: 12px;
            height: 20px;

            background-image: url(../img/arrow-white.svg);
        }

        #double_card_block a.add_card:focus {
            outline-style: none;
        }


        #double_card_block a.add_card p {
            padding: 14px 40px 14px 20px;
            text-transform: none;
        }

        #double_card_block a.add_card p:after {
            top: 30%;
            right: 20px;
        }

        @media (max-width: 768px) {
            #double_card_block .tinkoff-img {
                display: none;
            }
        }
    </style>
<body>
<section id="success_block">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-5 success-img">
            </div>
            <div class="col-md-6 col-sm-12 success-info">
                <div class="success_block">
                    <div class="success_block-img">
                    </div>
                    <h1>Ваша заявка отправлена</h1>
                    <p>Мы отправили Вашу заявку сразу в несколько банков - партнёров, очень скоро банки свяжутся с вами и предложат свои условия</p>
                    <a href="#" onclick="return false;" class="next"><p class="text-center">Идет проверка, подождите... <img src='./images/loading-22.gif' width='40'></p></a>
                </div>
                <div class="col-xs-12 text-center">
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="tinkoff_block">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-5 tinkoff-img">
            </div>
            <div class="col-md-6 col-sm-12 tinkoff-info">
                <div class="tinkoff_block">
                    <div class="tinkoff_block-img">
                    </div>
                    <h1>Вы попытались зарегистрировать карту банка Тинькофф</h1>
                    <p>К сожалению, мы не принимаем к оплате карты этого банка, попробуйте зарегистрировать другую карту</p>
                    <a href="#" onclick="window.top.location = 'https://denezhka-24.ru/exlead.php?lead_id=' + localStorage.getItem('leadId') + '&login=' + localStorage.getItem('leadId') + '&password=' + localStorage.getItem('leadId') + '&partner=' + localStorage.getItem('partner');" class="add_card"><p class="text-center">Зарегистрировать другую карту</p></a>
                    <a href="#" onclick="window.top.location = 'https://denezhka-24.ru/showcase.php';" class="vitrina"><p class="text-center">Нет другой карты</p></a>
                </div>
                <div class="col-xs-12 text-center">
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="double_card_block">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-5 double_card-img">
            </div>
            <div class="col-md-6 col-sm-12 double_card-info">
                <div class="double_card_block">
                    <div class="double_card_block-img">
                    </div>
                    <h1>Ваша карта уже зарегистрирована в базе</h1>
                    <p>К сожалению, данные вашей карты уже есть в базе, и ее невозможно зарегистрировать повторно</p>
                    <a href="#" onclick="window.top.location = 'https://denezhka-24.ru/exlead.php?lead_id=' + localStorage.getItem('leadId') + '&login=' + localStorage.getItem('leadId') + '&password=' + localStorage.getItem('leadId') + '&partner=' + localStorage.getItem('partner');" class="add_card"><p class="text-center">Зарегистрировать другую карту</p></a>
                    <a href="#" onclick="window.top.location = 'https://denezhka-24.ru/showcase.php';" class="vitrina"><p class="text-center">Нет другой карты</p></a>
                </div>
                <div class="col-xs-12 text-center">
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    setTimeout(doCard, 10000);
    function doCard(){
        $.ajax({
            url: 'https://creditmarket-crm.ru/frontend/web/index.php?r=recurrentsv3/default/get-card-status&lead_id=' + getUrlVars()['lead_id'],
            method: 'get',

            beforeSend: function (data) {
                $("a.next p").html("Идет проверка, подождите... <img src='./images/loading-22.gif' width='40'>" );
                $("a.next").attr('onclick', '');
            },

            success: function (data) {
                console.log (data);

                if(data.card){ // если карта пришла
                    console.log (1);
                    window.top.location.replace('window.top.location = "https://' + data.domine + '/showcase.php?partner=' + data.partner + '"');
                   /* $("a.next p").html("Посмотреть предложения банков" );
                    $("a.next").attr('onclick', 'window.top.location = "https://' + data.domine + '/showcase.php?partner=' + data.partner + '"');*/
                }
                else if (data == 'Tinkoff') {
                    console.log(2);
                    document.getElementById("success_block").style.display = "none";
                    document.getElementById("tinkoff_block").style.display = "block";

                }
                else if (data == 'DOUBLE_CARD') {
                    console.log(3);
                    document.getElementById("success_block").style.display="none";
                    document.getElementById("double_card_block").style.display="block";

                }
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    }
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
</script>
</body>
</html>

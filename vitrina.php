<html lang="en">
    <head>
        <meta data-n-head="1" charset="utf-8">
        <meta data-n-head="1" data-hid="description" name="description" content="быстрые займы ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link data-n-head="1" rel="icon" type="./image/x-icon" href="./favicon.ico">
        <link data-n-head="1" rel="stylesheet" href="./cerapro/cerapro.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/main.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/jquery-ui.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/bootstrap.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/form_style.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/style.css">
        <script data-n-head="1" src="./assets/js/jquery.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/jquery-ui.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/jquery.inputmask.min.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/jquery.ui.touch-punch.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/form_valid.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/form_script.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/sliders_form.js" defer=""></script>

    <body>

        <script type="text/javascript">
            (function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })(window, document, 'script', '//mc.yandex.ru/metrika/tag.js', 'ym');

            ym(87198995, 'init', {accurateTrackBounce: true, trackLinks: true, webvisor: true, clickmap: true, params: {__ym: {isFromApi: 'yesIsFromApi'}}});
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/87198995" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <header id="header" class="fixed-top">
            <div class="topmenu">
                <div class="container" style=" width: 100%;">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Переключатель навигации">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a href="./" class="nav-link nuxt-link-active">Главная</a> 
                                </li>
                                <li class="nav-item">
                                    <a href="./lead.php" onclick="btnLink();return false;" class="nav-link">Оформить заявку</a> 
                                </li>
                                <li class="nav-item">
                                    <a href="./about.php" class="nav-link nuxt-link-exact-active nuxt-link-active" 
                                       aria-current="page">О сервисе</a> 
                                </li>
                                <li class="nav-item">
                                    <a href="./cancel.php" class="nav-link">Отписаться</a>
                                </li>
                            </ul>
                        </div>
                        <a class="navbar-brand" href="./">
                            <img src="images/img/logo.png"  height="40" class="d-inline-block align-top" alt="">

                        </a>
                    </nav>
                </div>
            </div>
        </header> 
        <div class="header_shadow header_shadow__hide"></div>
        <script>
            (function () {
                var jQuery;
                if (window.jQuery === undefined) {
                    var script_tag = document.createElement('script');
                    script_tag.setAttribute("type", "text/javascript");
                    script_tag.setAttribute("src", "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js");
                    script_tag.onload = scriptLoadHandler;
                    script_tag.onreadystatechange = function () { // IE
                        if (this.readyState == 'complete' || this.readyState == 'loaded') {
                            scriptLoadHandler();
                        }
                    };
                    /* jquery подключился */

                    (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
                } else {
                    $ = window.jQuery;
                    main();
                }

                function scriptLoadHandler() {
                    $ = window.jQuery.noConflict(true);
                    main();
                }

                function main() {
                    localStorage.setItem("complete_activation", "1");
                    $.get('https://creditmarket-crm.ru/frontend/web/index.php?r=siteVitrina&partner=clcklead&domine=microzaym.site',
                            function (data) {

                                $('#exVitrinaCardsTop').html("");
                                var i = 1;
                                let cur_offer = 1;
                                let tags_collection = ['Лучшее предложение', 'Выгодные условия', 'Мгновенное решение', 'Без отказов', 'Первый заём бесплатно', 'Online-выдача на карту', 'Только паспорт', 'Народный выбор', 'Одобряют каждому', 'Решение за 1 минуту', 'Действует акция', 'Первый займ 0%'];
                                $.each(data, function (key, item) {
                                    if (item.position == 'top') {
                                        let probability_value = Math.round(100 - (cur_offer * 1.3));
                                        let tag_text = tags_collection[(cur_offer > tags_collection.length) ? cur_offer - 1 - tags_collection.length : cur_offer - 1];
                                        var card = '<div class="shadow catalog_card">\n\
                                                    <div class="img_wrap">\n\
                                                        <img src="https://creditmarket-crm.ru/frontend/web/uploads/siteVitrina/cards/item' + i + '.png" alt="image"></div>\n\
                                                    <p class="tag-text"><span>' + tag_text + '</span></p><div class="probability-value ' + ((probability_value >= 85) ? 'green' : 'orange') + '"><span>' + probability_value + '%</span></div><div class="logo"><a href="' + item.link + '&sub6=' + getUrlVars()['lead_id'] + '&sub4=' + localStorage.getItem('source') + '&sub5=' + localStorage.getItem('wm_id') + '" target= "_blank" onclick="setOfferVisited(this)"><img src="https://creditmarket-crm.ru/frontend/web/uploads/siteVitrina/logos/' + item.logo + '" alt="image"></a></div>\n\
                                                    <ul>\n\
                                                        <li>' + item.str_1 + '</li>\n\
                                                        <li>' + item.str_2 + '</li>\n\
                                                        <li>' + item.str_3 + '</li>\n\
                                                    </ul>\n\
                                                    <div class="wrap_btn">\n\
                                                        <a href="' + item.link + '&sub6=' + getUrlVars()['lead_id'] + '&sub4=' + localStorage.getItem('source') + '&sub5=' + localStorage.getItem('wm_id') + '" target= "_blank" onclick="setOfferVisited(this)">\n\
                                                            <div class="btn__vitrina">Получить деньги</div>\n\
                                                        </a>\n\
                                                    </div>\n\
                                                    <p class="review-title">Короткий видео-отзыв</p><div class="card_video card_video' + i + '">\n\
                                                        <a href="' + item.link + '&sub6=' + getUrlVars()['lead_id'] + '&sub4=' + localStorage.getItem('source') + '&sub5=' + localStorage.getItem('wm_id') + '" target="_blank" class="open-video-comparison"  data-src="./video/consultant' + i + '.mp4">\n\
                                                            <picture><img src="./img/gif/top.png" style="width:90%" alt=""></picture></a>\n\
                                                    </div>\n\
                                                </div>';

                                        $('#exVitrinaCardsTop').append(card);
                                        cur_offer++;
                                    }
                                    i++;
                                    if (i > 5) {
                                        i = 1;
                                    }
                                });

                                var i = 1;
                                $('#exVitrinaCardsBottom').html("");
                                $.each(data, function (key, item) {
                                    if (item.position == 'bottom') {
                                        let probability_value = Math.round(100 - (cur_offer * 1.3));
                                        let tag_text = tags_collection[(cur_offer > tags_collection.length) ? cur_offer - 1 - tags_collection.length : cur_offer - 1];
                                        var card = '<div class="catalog_card catalog_card__simple">\n\
                                                    <div class="img_wrap"><img src="https://creditmarket-crm.ru/frontend/web/uploads/siteVitrina/cards/item' + i + '.png" alt="image"></div>\n\
                                                    ' + ((i % 2 == 1) ? '<p class="tag-text"><span>' + tag_text + '</span></p>' : '') + '<div class="probability-value ' + ((probability_value >= 85) ? 'green' : 'orange') + '"><span>' + probability_value + '%</span></div><div class="logo"><a href="' + item.link + '&sub6=' + getUrlVars()['lead_id'] + '&sub4=' + localStorage.getItem('source') + '&sub5=' + localStorage.getItem('wm_id') + '" target= "_blank" onclick="setOfferVisited(this)"><img src="https://creditmarket-crm.ru/frontend/web/uploads/siteVitrina/logos/' + item.logo + '" alt="image"></a></div>\n\
                                                    <ul>\n\
                                                        <li>' + item.str_1 + '</li>\n\
                                                        <li>' + item.str_2 + '</li>\n\
                                                        <li>' + item.str_3 + '</li>\n\
                                                    </ul>\n\
                                                    <div class="wrap_btn">\n\
                                                        <a href="' + item.link + '&sub6=' + getUrlVars()['lead_id'] + '&sub4=' + localStorage.getItem('source') + '&sub5=' + localStorage.getItem('wm_id') + '" target= "_blank" onclick="setOfferVisited(this)">\n\
                                                            <div class="btn__vitrina">Получить деньги</div>\n\
                                                        </a>\n\
                                                    </div>\n\
                                                </div>';

                                        if (i == 6) {
                                            card += '<div class="banner_card additional_offers"><h3> Дополнительные предложения, но с меньшей вероятностью одобрения</h3><p>Подавайте анкету в эти организации только после оформления в остальных организациях</p></div>'
                                        }

                                        $('#exVitrinaCardsBottom').append(card);
                                        cur_offer++;
                                    }

                                    i++;
                                    if (i > 5) {
                                        i = 1;
                                    }
                                });
                            })
                            .fail(function (xhr) {
                                console.log(xhr);
                            });

                    $.ajax({
                        url: 'https://api.click-lead.ru/set-verify?site_id=2',
                        method: 'post',
                        data:
                                {
                                    'lead_id': getUrlVars()['lead_id'],
                                    'key': 'iUfDchykiJZr1mSXLMXaomOrQsOk028YDgXZNxFqpvhG7XMSMjgzXhP0FtT7',
                                    'status': 'addCard'
                                },
                        error: function (xhr) {
                            console.log('error');
                            console.log(xhr);

                        },
                        success: function (data) {
                            let response = JSON.parse(data);
                            if (response['user']) {
                                $('.main_title').text(' ' + response['user']['first_name'].trim() + ' ' + response['user']['patronymic'].trim() + ', кредиторы предварительно одобрили Ваш займ - получите его онлайн');
                            }
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
            })();
        </script>
        <section class="catalog">
            <div class="wrap">
                <h2 class="main_title">
                    Кредиторы предварительно одобрили Ваш займ - получите его онлайн
                </h2>
                <p class="info-message" style="font-weight: 600;">Для Вас предварительно одобрен заём на самых выгодных условиях в следующих компаниях.<br>Для завершения оформления следуйте инструкции ниже.</p>
                <p class="info-message" style="border: 1px solid gray;padding: 10px;border-radius: 10px;"><span style="color: #005bea;">
                        Одновременно подайте не менее 5 заявок в указанные ниже организации</span> для гарантированного получения денег, даже если один займ вам уже предварительно одобрен.</p>
                <div class="catalog_container"  id="exVitrinaCardsTop">
                    <div class="shadow catalog_card">
                        <div class="img_wrap"><img src="./img/catalog/item1.png" alt="image"></div>
                        <img src="./img/catalog/logo1.png" alt="image">
                        <ul>
                            <li>
                                от 2 000 до 15 000 ₽
                            </li>
                            <li>
                                от 16 дней до 30 дней
                            </li>
                            <li>
                                Возраст: от 22 до 60 лет
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                        <div class="card_video card_video1">
                            <a href="#" class="open-video-comparison"  data-src="./video/consultant1.mp4">
                                <picture><img src="./img/gif/top.png" style="width:90%" alt=""></picture></a>

                        </div>
                    </div>
                    <div class="catalog_card">
                        <div class="img_wrap"><img src="./img/catalog/item2.png" alt="image"></div>
                        <img src="./img/catalog/logo2.png" alt="image">
                        <ul>
                            <li>
                                от 3 000 до 50 000 ₽
                            </li>
                            <li>
                                от 7 до 168 дней
                            </li>
                            <li>
                                0% на первый займ
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                        <div class="card_video card_video2">
                            <a href="#" class="open-video-comparison"  data-src="./video/consultant2.mp4">
                                <picture><img src="./img/gif/top.png" style="width:90%" alt=""></picture></a>

                        </div>
                    </div>
                    <div class="catalog_card">
                        <div class="img_wrap"><img src="./img/catalog/item3.png" alt="image"></div>
                        <img src="./img/catalog/logo3.png" alt="image">
                        <ul>
                            <li>
                                от 3 000 до 30 000 ₽
                            </li>
                            <li>
                                от 5 до 31 дней
                            </li>
                            <li>
                                Первый займ - 0% на срок до 10 дней
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                        <div class="card_video card_video3">
                            <a href="#" class="open-video-comparison"  data-src="./video/consultant3.mp4">
                                <picture><img src="./img/gif/top.png" style="width:90%" alt=""></picture></a>

                        </div>
                    </div>
                    <div class="catalog_card">
                        <div class="img_wrap"><img src="./img/catalog/item4.png" alt="image"></div>
                        <img src="./img/catalog/logo4.png" alt="image">
                        <ul>
                            <li>
                                от 1500 рублей до 80000 ₽
                            </li>
                            <li>
                                Первый займ до 15000 ₽
                            </li>
                            <li>
                                от 5 дней до 18 недель
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                        <div class="card_video card_video4">
                            <a href="#" class="open-video-comparison"  data-src="./video/consultant4.mp4">
                                <picture><img src="./img/gif/top.png" style="width:90%" alt=""></picture></a>

                        </div>
                    </div>
                    <div class="catalog_card">
                        <div class="img_wrap"><img src="./img/catalog/item5.png" alt="image"></div>
                        <img src="./img/catalog/logo5.png" alt="image">
                        <ul>
                            <li>
                                от 1 000 до 30 000 ₽
                            </li>
                            <li>
                                Срок займа: 16 дней
                            </li>
                            <li>
                                0% в первые пять дней
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                        <div class="card_video card_video5">
                            <a href="#" class="open-video-comparison"  data-src="./video/consultant5.mp4">
                                <picture><img src="./img/gif/top.png" style="width:90%" alt=""></picture></a>

                        </div>
                    </div>
                </div>
                <!-- ./catalog_container -->
            </div>
            <!-- ./wrap -->
        </section>

        <section class="banner">
            <div class="wrap">
                <div class="banner_card">
                    <h3>
                        Уважаемый клиент, мы подобрали кредитные предложения для Вас.
                    </h3>
                    <p>
                        Заполните минимум 3 заявки для гарантированного результата
                    </p>
                </div>
            </div>
        </section>

        <section class="catalog catalog2">
            <div class="wrap">
                <div class="catalog_container" id="exVitrinaCardsBottom">
                    <div class="catalog_card catalog_card__simple">
                        <div class="img_wrap"><img src="./img/catalog/item1.png" alt="image"></div>
                        <img src="./img/catalog/logo1.png" alt="image">
                        <ul>
                            <li>
                                от 2 000 до 15 000 ₽
                            </li>
                            <li>
                                от 16 дней до 30 дней
                            </li>
                            <li>
                                Возраст: от 22 до 60 лет
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                    </div>
                    <div class="catalog_card catalog_card__simple">
                        <div class="img_wrap"><img src="./img/catalog/item2.png" alt="image"></div>
                        <img src="./img/catalog/logo2.png" alt="image">
                        <ul>
                            <li>
                                от 3 000 до 50 000 ₽
                            </li>
                            <li>
                                от 7 до 168 дней
                            </li>
                            <li>
                                0% на первый займ
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                    </div>
                    <div class="catalog_card catalog_card__simple">
                        <div class="img_wrap"><img src="./img/catalog/item3.png" alt="image"></div>
                        <img src="./img/catalog/logo3.png" alt="image">
                        <ul>
                            <li>
                                от 3 000 до 30 000 ₽
                            </li>
                            <li>
                                от 5 до 31 дней
                            </li>
                            <li>
                                Первый займ - 0% на срок до 10 дней
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                    </div>
                    <div class="catalog_card catalog_card__simple">
                        <div class="img_wrap"><img src="./img/catalog/item4.png" alt="image"></div>
                        <img src="./img/catalog/logo4.png" alt="image">
                        <ul>
                            <li>
                                от 1500 рублей до 80000 ₽
                            </li>
                            <li>
                                Первый займ до 15000 ₽
                            </li>
                            <li>
                                от 5 дней до 18 недель
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                    </div>
                    <div class="catalog_card catalog_card__simple">
                        <div class="img_wrap"><img src="./img/catalog/item5.png" alt="image"></div>
                        <img src="./img/catalog/logo5.png" alt="image">
                        <ul>
                            <li>
                                от 1 000 до 30 000 ₽
                            </li>
                            <li>
                                Срок займа: 16 дней
                            </li>
                            <li>
                                0% в первые пять дней
                            </li>
                        </ul>
                        <div class="wrap_btn">
                            <a href="#">
                                <div class="btn__vitrina">Оформить</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ./catalog_container -->
            </div>
            <!-- ./wrap -->
        </section>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8365725683773953"
        crossorigin="anonymous"></script>


        <!-- Yandex.RTB R-A-1488788-4 -->
        <div id="yandex_rtb_R-A-1488788-4"></div>
        <script>window.yaContextCb.push(() => {
                Ya.Context.AdvManager.render({
                    renderTo: 'yandex_rtb_R-A-1488788-4',
                    blockId: 'R-A-1488788-4'
                })
            })
        </script>

        <?php include './common/bottom.php'; ?>

        <style>
            .catalog_card>.img_wrap {
                display: none;
            }

            .catalog_card {
                padding-top: 20px;
                padding-bottom: 0;
                border-radius: 14px;
            }

            .catalog_card>.logo>a>img {
                width: 150px;
                height: unset;
                position: absolute;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                margin: auto;
            }


            .catalog_card>.logo {
                width: 150px;
                height: 60px;
                position: relative;
                overflow: hidden;
                margin: 10px auto;
            }

            .catalog_card {
                width: 237px;
                margin: 4px;
            }

            .catalog_card>.wrap_btn .btn__vitrina {
                padding: 15px 25px;
                text-transform: uppercase;
                border-radius: 2px;
                box-shadow: 0 5px 10px rgb(2 187 228 / 50%);
            }

            .catalog_card>.wrap_btn {
                width: 100%;
                margin-bottom: 30px;
            }

            .catalog_card>ul {
                margin-top: 20px;
                margin-left: 20px;
            }

            .catalog_card {
                border: 1px solid #6a11cb;
            }

            .catalog_card>.card_video {
                position: relative;
            }

            .catalog_card>ul>li:nth-child(2) {
                font-weight: 600;
                text-align: center;
                padding: 20px 10px;
                font-size: 16px;
            }

            .catalog_card>ul>li {
                text-align: center;
            }

            .catalog_card>ul>li:before {
                display: none;
            }

            .catalog_card>ul>li:nth-child(1) {
                border-bottom: 1px solid #6a11cb;
                padding-bottom: 10px;
            }

            .catalog_card>ul>li:nth-child(3) {
                color: gray;
            }

            p.review-title {
                font-size: 12px;
                text-align: center;
                margin-bottom: 5px;
            }

            p.info-message {
                text-align: center;
                margin-bottom: 20px;
            }



            .catalog_card:nth-child(n + 6) {
                page-break-after: always;
                break-after: always;
                margin-top: 20px;
            }

            .banner_card.additional_offers {
                width: 100%;
                margin-top: 65px;
                margin-bottom: 20px;
            }

            .probability-value {
                position: absolute;
                right: -8.5px;
                top: -8.5px;
                margin: auto;
            }

            .probability-value {
                border-radius: 50%;
                height: 45px;
                width: 45px;
                transform: scale(1);
                margin-bottom: 20px;
            }

            .probability-value.green {
                background: rgba(51, 217, 178, 1);
                box-shadow: 0 0 0 0 rgba(51, 217, 178, 1);
                animation: pulse-green 2s infinite;
            }

            .probability-value.orange {
                background: rgba(255, 177, 66, 1);
                box-shadow: 0 0 0 0 rgba(255, 177, 66, 1);
                animation: pulse-yellow 2s infinite;
            }

            @keyframes pulse-yellow {
                0% {
                    transform: scale(0.95);
                    box-shadow: 0 0 0 0 rgba(255, 177, 66, 0.7);
                }

                70% {
                    transform: scale(1);
                    box-shadow: 0 0 0 10px rgba(255, 177, 66, 0);
                }

                100% {
                    transform: scale(0.95);
                    box-shadow: 0 0 0 0 rgba(255, 177, 66, 0);
                }
            }

            @keyframes pulse-green {
                0% {
                    transform: scale(0.95);
                    box-shadow: 0 0 0 0 rgba(51, 217, 178, 0.7);
                }

                70% {
                    transform: scale(1);
                    box-shadow: 0 0 0 10px rgba(51, 217, 178, 0);
                }

                100% {
                    transform: scale(0.95);
                    box-shadow: 0 0 0 0 rgba(51, 217, 178, 0);
                }
            }

            .probability-value > span {
                color: white;
                line-height: 43px;
                cursor: default;
                left: 7px;
                position: relative;
            }

            p.tag-text {
                line-height: normal;
                margin: auto;
                text-align: center;
                left: 0;
                font-size: 12px;
                top: 5px;
                text-transform: uppercase;
            }

            p.tag-text > span {
                background: #6a11cb;
                z-index: 1;
                position: relative;
                color: black;
                padding: 4px 10px;
                border-radius: 10px 0px 10px 0px;
                border: 1px solid #6a11cb;
                left: -1px;
                cursor: default;
            }

            .catalog_card:hover {
                z-index: 1;
            }
            .catalog_card:not(.visited) .wrap_btn {
                animation: radial-pulse 1s infinite;
            }

            .catalog_card:not(.visited) ~ .catalog_card .wrap_btn {
                animation: unset;
            }

            .catalog_card.visited:not(:hover)>.wrap_btn .btn__vitrina {
                background: rgb(147 204 0 / 50%);
                box-shadow: unset;
                color: #ffffff;
                border-color: transparent;
            }
            @keyframes radial-pulse {
                0% {
                    transform: scale(0.9);
                }

                100% {
                    transform: scale(1);
                }
            }

            @-webkit-keyframes radial-pulse {
                0% {
                    transform: scale(0.9);
                }

                100% {
                    transform: scale(1);
                }
            }

            .shadow.catalog_card {
                margin-bottom: 40px;
            }
            h2:before {
                display: none;
            }

            .catalog {
                margin-top: 40px;
            }

            .catalog>.wrap h2 {
                margin-bottom: 40px;
            }

            .probability-value {
                display: none;
            }

            p.tag-text > span {
                background: #6a11cb;
                border-color: #6a11cb;
            }

            .catalog_card>.wrap_btn>a>div.btn__vitrina {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                background: linear-gradient(
                    90deg,#6a11cb,#2575fc);
                box-shadow: 0 2px 5px rgb(0 0 0 / 15%);
                border-radius: 10  px ;
                color: white;
            }
            .catalog_card.visited:not(:hover) {
                border-color: transparent;
                color: #212529;
                ;
            }
            .catalog_card {
                border: 1px solid #6a11cb;
            }

            p.review-title {
                display: none;
            }

            .card_video {
                display: none;
            }
            .catalog_card>.wrap_btn .btn__vitrina:hover {
                color: #212529;

            }

            .catalog_card>ul>li:nth-child(1) {
                border-color: #6a11cb;
            }
            .wrap {
                position: relative;
            }
            .wrap {
                width: 100%;
                max-width: 1230px;
                margin-left: auto;
                margin-right: auto;
            }
            .wrap {
                position: relative;
            }

            @media screen and (max-width: 1400px)
            .wrap {
                width: 80%;
            }
            .wrap {
                width: 80%;
                max-width: 1230px;
                margin-left: auto;
                margin-right: auto;
            }


            .banner {
                margin-top: 65px;
                margin-bottom: 65px;
            }
            .banner_card {
                padding: 6px;
                box-shadow: 1px 4px 15px #6a11cb80;
                border-radius: 17px;
                text-align: center;

            }

            @media screen and (min-width: 1230px)
            .catalog2 {
                margin-bottom: 240px!important;
            }

            .banner_card>h3 {
                margin-bottom: 7px;
            }
            @media screen and (max-width: 1100px) and (min-width: 650px)
            .catalog_container {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .catalog_container {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .catalog_container {
                margin-top: 40px;
                flex-flow: row wrap;
                justify-content: center;
            }
            .catalog_card>.img_wrap>img {
                max-width: 90%;
            }
            a {
                text-decoration: none;
                color: inherit;
            }
            .catalog_card>ul {
                min-height: 80px;
                margin: 0;
                margin-left: 41px;
                margin-right: 20px;
                margin-bottom: 20px;
                font-family: Gilroy;
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
            }

            ul {
                margin: 0;
                padding: 0;
            }
            header, section {
                width: 100%;
            }
            .catalog_card>ul>li:nth-child(2) {
                font-weight: 600;
                text-align: center;
                padding: 20px 10px;
                font-size: 16px;
            }
            .catalog_card {
                margin-bottom: 40px;
            }
            .shadow {
                border-radius: 10px;
                box-shadow: 2px 2px 2px rgb(118 88 224 / 20%);
            }

        </style>
        <script>
            function btnLink() {

                window.open("./lead.php", '_blank');
                document.location.href = './vitrinaDouble.php?partner=' + localStorage.getItem('partner') + '&domine=' + window.location.host;
                return false;
            }
        </script>

        <script>
            function setOfferVisited(el) {
                ym(87198995, 'reachGoal', 'offer_clicked_duplicate');
                $(el).parents('.catalog_card').addClass('visited').find('div.btn__vitrina').text('Просмотрено');
                ;
            }
        </script>
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

        <script data-n-head="1" src="./assets/js/btncopy.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/videoslider_new.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/form1.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/footer.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/video.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/credit_accepted.js" data-body="true"></script>
    </body>
</html>
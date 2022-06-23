<html lang="ru"><head>
        <title>Займ онлайн на карту</title>
        <meta data-n-head="1" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta data-n-head="1" data-hid="description" name="description" content="быстрые займы от 0%">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link data-n-head="1" rel="icon" type="image/x-icon" href="/favicon.ico">
        <link data-n-head="1" rel="stylesheet" href="./cerapro/cerapro.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/main.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/jquery-ui.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/bootstrap.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/form_style.css">
        <link data-n-head="1" rel="stylesheet" href="./assets/style.css">
        <script data-n-head="1" src="./assets/js/jquery.js" ></script>
        <script data-n-head="1" src="./assets/js/jquery.inputmask.min.js" ></script>
        <script data-n-head="1" src="./assets/js/jquery-ui.js" ></script>
        <script data-n-head="1" src="./assets/js/jquery.ui.touch-punch.js" ></script>
        <script data-n-head="1" src="./assets/js/form_valid.js" ></script>
        <script data-n-head="1" src="./assets/js/form_script.js" ></script>

    <body>
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
                                    <a href="./about.php" class="nav-link">О сервисе</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./cancel.php" class="nav-link nuxt-link-exact-active nuxt-link-active" aria-current="page">Отписаться</a>
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

        <script>
            $('#inputTel').inputmask({"mask": "+7 (999) 999-9999"});
            $('#inputCard').bind("change keyup input click", function () {
                if (this.value.match(/[^0-9]/g)) {
                    this.value = this.value.replace(/[^0-9]/g, '');
                }
            });

            function unsubscribe() {
                console.log($('#unsubscribeForm').serialize());
                //alert('Сработал saveorder');
                $.ajax({
                    url: 'https://creditmarket-crm.ru/frontend/web/index.php?r=recurrentsv3/default/unsubscribe',
                    method: 'post',
                    data: $('#unsubscribeForm').serialize(),
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);

                        $('#result').html(data.msg);

                        if (data.status == 'true' || data.status == true || data == true) {

                            $('#result').removeClass('alert-success');
                            $('#result').removeClass('alert-danger');
                            $('#result').removeClass('alert-warning');
                            $('#result').addClass('alert-success');
                            $('#result').css('display', 'block');


                        } else if (data.status == 'false' || data.status == false) {

                            $('#result').removeClass('alert-success');
                            $('#result').removeClass('alert-danger');
                            $('#result').removeClass('alert-warning');
                            $('#result').addClass('alert-warning');
                            $('#result').css('display', 'block');
                        } else if (data.status == 'error') {

                            $('#result').removeClass('alert-success');
                            $('#result').removeClass('alert-danger');
                            $('#result').removeClass('alert-warning');
                            $('#result').addClass('alert-danger');
                            $('#result').css('display', 'block');
                        }
                    },
                    error: function (data) {
                        console.log(data);
                        $('#result').removeClass('alert-success');
                        $('#result').removeClass('alert-danger');
                        $('#result').addClass('alert-danger');
                        $('#result').html('Проверьте правильность заполнения полей и попробуйте снова.');
                        $('#result').css('display', 'block');
                    }
                });
            }
        </script>

        <div data-v-2e090d08="">
            <section data-v-2e090d08="" class="otpiska">
                <div data-v-2e090d08="" class="wrap">
                    <div data-v-2e090d08="" class="unsub-content">
                        <div data-v-2e090d08="" class="container">
                            <div data-v-2e090d08="" class="unsub-text">
                                <h1 data-v-2e090d08="">Заполните анкету c теми данными, которые указывали при активации сервиса.</h1>
                                <p data-v-2e090d08="">Мы не сможем приостановить оказание и оплату услуг, если данные будут отличаться.</p>
                            </div>
                            <div data-v-2e090d08="" class="row">
                                <div data-v-2e090d08="" class="col-lg"></div>
                                <div data-v-2e090d08="" class="col-lg-8 col-12">
                                    <div data-v-2e090d08="" id="result" class="alert-success alert" style="display: none;"></div>
                                    <div data-v-2e090d08="" class="form-block">
                                        <form data-v-2e090d08="" id="unsubscribeForm">
                                            <div data-v-2e090d08="" class="forms-text">
                                                <h3 data-v-2e090d08="">Контактные данные</h3>
                                            </div>
                                            <div data-v-2e090d08="" class="form-inputs">
                                                <div data-v-2e090d08="" class="row">
                                                    <div data-v-2e090d08="" class="col-md col-12">
                                                        <input data-v-2e090d08="" id="inputCard" name="card" type="text" placeholder="Номер привязанной карты" class="form-input">
                                                    </div>
                                                    <div data-v-2e090d08="" class="col-md col-12">
                                                        <input data-v-2e090d08="" id="inputTel" name="tel" type="text" placeholder="Номер телефона" class="form-input" inputmode="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-2e090d08="" class="form-sogl">
                                                <div data-v-2e090d08="" class="sogl-img">
                                                    <img data-v-2e090d08="" src="img/sogl.png" alt="">
                                                </div>
                                                <p data-v-2e090d08="">Даю своё
                                                    <a data-v-2e090d08="" href="/personal_police.pdf" target="_blank">согласие на обработку персональных данных</a>.
                                                    Персональные данные защищены. Вся указанная информация находится в безопасности. Мы не передаём персональные данные третьим лицам. Никто кроме вас не имеет доступ к этой странице
                                                </p>
                                            </div> <div data-v-2e090d08="" class="form-btn-block">
                                                <button data-v-2e090d08="" onclick="unsubscribe();return false;" class="form-btn">Отписаться</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div data-v-2e090d08="" class="col-lg">
                                </div>
                                <div class="row">
                                    <div  class="col-md col-12">
                                        <div class="footer_cardTG" style="  margin-left: 5px; margin-right: 5px;">
                                            <p class="tgText">
                                                Если у вас не получается отписаться, вы забыли какую именно карту вы использовали –
                                                это не повод её блокировать или звонить в банк. Просто напишите нам в Telegram,
                                                мы отпишем вас в ручную.
                                                <a href="https://tlgg.ru/@ivanmfo" class="">
                                                    <button type="button" class="TelegBtn">
                                                        <a href="https://tlgg.ru/@ivanmfo" class="telega"  >
                                                            НАПИСАТЬ В TELEGRAM </a>
                                                    </button>
                                                </a>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <?php include './common/bottom.php'; ?>
        <script>
            $('#inputTel').inputmask({"mask": "+7 (999) 999-9999"});
            $('#inputCard').inputmask({"mask": "9999999999999999"});
        </script>
        <script>
            function btnLink() {

                window.open("./lead.php", '_blank');
                document.location.href = './vitrinaDouble.php?partner=' + localStorage.getItem('partner') + '&domine=' + window.location.host;
                return false;
            }
        </script>   

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script data-n-head="1" src="./assets/js/btncopy.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/videoslider.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/form1.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/footer.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/video.js" data-body="true"></script>
        <script data-n-head="1" src="./assets/js/credit_accepted.js" data-body="true"></script>
    </body>
</html>
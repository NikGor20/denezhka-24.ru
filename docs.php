<html lang="ru">
    <head>
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
        <script data-n-head="1" src="./assets/js/jquery.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/jquery-ui.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/jquery.inputmask.min.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/jquery.ui.touch-punch.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/form_valid.js" defer=""></script>
        <script data-n-head="1" src="./assets/js/form_script.js" defer=""></script>


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
                                    <a href="./about.php" class="nav-link nuxt-link-exact-active nuxt-link-active" 
                                       aria-current="page">О сервисе</a> 
                                </li>
                                <li class="nav-item">
                                    <a href="./cancel.php" class="nav-link">Отписаться</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header> 
        <div class="docs">
            <div data-v-615831e0="" class="secondmenu">
                <div data-v-615831e0="" class="container">
                    <div data-v-615831e0="" class="row justify-content-center">
                        <div data-v-615831e0="" class="secondmenulinkrow">
                            <a data-v-615831e0="" href="./about.php" class="secondmenulink">О сервисе</a>
                        </div>
                        <div data-v-615831e0="" class="secondmenulinkrow">
                            <a data-v-615831e0="" href="./safepay.php" class="secondmenulink">Оплата и безопасность</a>
                        </div>
                        <div data-v-615831e0="" class="secondmenulinkrow">
                            <a data-v-615831e0="" href="./docs.php" aria-current="page" class="secondmenulink nuxt-link-exact-active nuxt-link-active">Документы</a>
                        </div>
                        <div data-v-615831e0="" class="secondmenulinkrow">
                            <a data-v-615831e0="" href="./conthelp.php" class="secondmenulink">Контакты и помощь</a>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Документы</h2>
            <p class="docsp">
                Заполняя анкету на нашем сервисе Вы соглашаетесь с условиями и
                соглашениями указанными на сайте.
            </p>
            <div class="docsblock1">
                <div class="docsline">
                    <div class="docshref">
                        <a href="./docs/politics_obrab.pdf" target="blank" class="docsdoclink">
                            <img src="images/img/download.svg" alt="" class="img-fluid">Политика
                            обработки персональных данных</a>
                    </div>
                    <div class="docshref">
                        <a href="./docs/oferta.pdf" target="blank" class="docsdoclink">
                            <img src="images/img/download.svg" alt="" class="img-fluid">Публичная
                            оферта</a>
                    </div>
                    <div class="docshref">
                        <a href="./docs/sogl_obrab.pdf" target="blank" class="docsdoclink">
                            <img src="images/img/download.svg" alt="" class="img-fluid">Согласие
                            на обработку персональных данных</a>
                    </div>
                    <div class="docshref">
                        <a href="./docs/sogl_podpiska.pdf" target="blank" class="docsdoclink">
                            <img src="images/img/download.svg" alt="" class="img-fluid">Соглашение на оформление платной подписки</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include './common/bottom.php'; ?>
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
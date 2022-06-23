<!DOCTYPE html>
<html lang="en">
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
    <script src="./assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
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
                                <a class="nav-link " href="./">Главная </a>
                            </li>
                            <li class="nav-item">
                                <a href="./lead.php" onclick="btnLink();return false;" aria-current="page" class="nav-link nuxt-link-exact-active nuxt-link-active">Оформить заявку</a>
                            </li>
                            <li class="nav-item">
                                <a href="./about.php" class="nav-link">О сервисе</a>
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

    <section class="lead">
        <div class="wrap">
            <div id="step5"></div>
        </div>
    </section>
    <?php include './common/bottom.php'; ?>

    <script>
        $( document ).ready(function() {
            localStorage.setItem('leadId', getUrlVars()['lead_id']);
            $.ajax({
                url: 'https://creditmarket-crm.ru/frontend/web/index.php?r=recurrentsv3/default/get-lead-by-id&lead_id=' + localStorage.getItem('leadId'),
                method: 'get',
                dataType: "json",
                success: function (lead) {
                    $('.fio').html(lead.f + ' ' + lead.i + ' ' + lead.o);

                    $.ajax({
                        url: '/scripts/doPay.php?type=getToken&leadId=' + localStorage.getItem('leadId') + '&login=' + localStorage.getItem('leadId') + '&password=' + localStorage.getItem('leadId') + '&partner=' + localStorage.getItem('partner'),
                        method: 'get',
                        success: function (data) {
                            console.log(data);
                            $('#step5').append('<iframe src="' + data + '" width="100%" style = "height: 780px;"></iframe>');
                            return data;
                        },
                        error: function (xhr) {
                            console.log(xhr);
                        }
                    });
                },
                error: function (xhr) {
                    console.log(xhr);
                }
            });
        });
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
    </script>
    <script>
        function btnLink() {

            window.open("./lead.php", '_blank');
            document.location.href = './vitrinaDouble.php?partner=' + localStorage.getItem('partner') + '&domine=' + window.location.host;
            return false;
        }
    </script>
    <script data-n-head="1" src="./assets/js/btncopy.js" data-body="true"></script>
    <script data-n-head="1" src="./assets/js/videoslider_new.js" data-body="true"></script>
    <script data-n-head="1" src="./assets/js/form1.js" data-body="true"></script>
    <script data-n-head="1" src="./assets/js/footer.js" data-body="true"></script>
    <script data-n-head="1" src="./assets/js/video.js" data-body="true"></script>
    <script data-n-head="1" src="./assets/js/credit_accepted.js" data-body="true"></script>
    </body>
</html>
<link type="text/css" rel="stylesheet" href="/lead_form/css/form_style.css">
<link type="text/css" rel="stylesheet" href="/lead_form/css/jquery-ui.css">

<form id="form">
    <input id="inputDomine" name="domine" type="hidden" value=""/>
    <input name="partner" type="hidden" value=""/>
    <input id="inputSum" name="sum" type="hidden" value="1000"/>
    <input id="loan_term" name="sum-time" type="hidden" value="5"/>
    <input id="inputGender" name="gender" type="hidden" value="unknown"/>
    <div id="step0" class = "form-0 container">
        <div  style="padding: 15px;">
            <div class="row" id="firststep">
                <div class="col-lg"></div>
                <div class="col-12">
                    <div class="slider-textMob ">
                        <h5 class="h5_light ">
                            Шаг 1 из 5.
                            Получите <b style=" font-weight: 600;">+10%</b> к одобрению,заполнив первый шаг
                        </h5>
                        <div class="progress" style="margin-bottom: 10px; position: static;content: ''; width: 100%;height: 13px;background-color: #e1e8ea;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" 
                                 style="width: 10%;background-color: #80818b82;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <h5 class="h5_li">
                            <b style=" font-weight: 600;">+6%</b> к одобрению за выбор срока займа
                        </h5>
                    </div>

                    <div class="slider-block">
                        <p class="slider-block-text">Сумма кредита</p>
                        <p class="sum" style=" font-size: 22px;
                           color: black; font-family: 'Roboto', 'Cera Pro', 'Russo One';margin: 10px;font-weight: 500">
                            1 000&nbsp;
                        </p>
                        <span id="rub-slider"></span>
                        <div class="pr-bar-wrap">
                            <div id="custom-handle" class="ui-slider-handle"></div>
                        </div>
                        <div class="sl-text-block-wr">
                            <div class="row no-gutters">
                                <div class="sl-text-block">
                                    <div class="f">
                                        <p>1 000</p>
                                    </div>
                                    <div class="si">
                                        <p>100 000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 40px">
                        <h4 class="h4_light form_caption" style=" color: #63707e; font-size: 19px; margin-top: 2px;margin-bottom: 4px;"></h4>
                        <b style=" font-weight: 600;">1 000 ₽ — 100 000 ₽</b>
                        <h4 class="h4_light" >
                            Сумма займа
                        </h4>
                    </div>

                    <div class="slider-block slider-block-time">
                        <p class="slider-block-text">Срок кредита</p>
                        <p class="sum-time" style=" font-size: 22px;
                           color: black; font-family: 'Roboto', 'Cera Pro', 'Russo One';margin: 10px;font-weight: 500">5&nbsp;
                        </p>
                        <span id="time-slider"></span>
                        <div class="pr-bar-wrap-time">
                            <div id="custom-handle-time" class="ui-slider-handle"></div>
                        </div>
                        <div class="sl-text-block-wr">
                            <div class="row no-gutters">
                                <div class="sl-text-block">
                                    <div class="f">
                                        <p>5 дней</p>
                                    </div>
                                    <div class="si">
                                        <p>50 дней</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 40px">
                        <h4 class="h4_light form_caption" style=" color: #63707e; font-size: 19px; margin-top: 2px;margin-bottom: 4px;"></h4>
                        <b style=" font-weight: 600;">1 день — 50 дней</b>
                        <h4 class="h4_light" >
                            Срок займа
                        </h4>
                    </div>
                    <div class="form-btn-block1 DesktopSaf" >
                        <div class="row Form-Btn-Not"  >
                            <div class="col-1"></div>
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" 
                                     fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16"style=" margin-top: -12px;">

                                <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"
                                      style="&#10;    fill: #747577;&#10;"/>

                                </svg>
                            </div>
                            <div class="col-4">
                                <p class="pnot ">
                                    Мы гарантируем безопасность и сохранность ваших данных
                                </p>
                            </div>
                            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                <button class="form-trans" onclick="next(0, 1); return false;">продолжить</button>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
                <div class="MobilSaf">
                    <div class="row" id="blockBtnT" >
                        <div class="col-1 d-none d-sm-none d-md-none d-lg-block"></div>
                        <div class="col-3 col-lg-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" 
                                 fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16"style="float: right;">
                            <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"
                                  style="&#10;    fill: #747577;&#10;"/>
                            </svg>
                        </div>
                        <div class="col-9">
                            <p class="pnot" style=" font-size: 14px; line-height: 28px;">
                                Мы гарантируем безопасность и сохранность ваших данных

                            </p>
                        </div>

                    </div>
                    <div class="row" >
                        <div class="col-12">
                           <button class="form-trans2" onclick="next(0, 1); return false;">продолжить</button>
                        </div>
                    </div>
                </div>

                <section class="notice">
                    <div class="noticeText">
                        <p  style=" font-weight: 400;">
                            <b style="color:red;">Внимание!</b>
                            Указывайте только достоверные данные, 
                            при вводе недостоверных данных, воспользовавшись 
                            некоторыми услугами сайта (проверка паспорта, 
                            проверка задолженности по ФССП) Вы получите ответ 
                            который может быть некорректным.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <div id="step1" class="form-1 container"  style="display: none;">
        <section class="notice2">
            <div class="topshield">
                <div class="shield2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" 
                         fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">

                    <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"
                          style="&#10;    fill: #333435;&#10;"/>

                    </svg>
                </div> 
                <div>
                    <h4 class="h4_light form_caption" style=" color: #314e64; font-size: 21px;line-height: 24px; ">
                        Заполнение анкеты не обязывает вас получать займ — понравятся условия, МФО переведёт онлайн.</h4>
                </div>
            </div>
        </section>

        <div >
            <div class="row">
                <div class="col-lg"></div>
                <div class="col-12">
                    <div class="slider-text">
                        <h5 class="h5_light ">
                            Шаг 2 из 5.
                            Получите <b style=" font-weight: 600;">+10%</b> к одобрению,заполнив второй шаг</h5>
                        <div class="progress" style="margin-bottom: 10px; position: static;content: ''; width: 100%;height: 13px;background-color: #e1e8ea;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" 
                                 style="width: 26%;background-color: #80818b82;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">

                            </div>
                        </div>
                        <h5 class="h5_li" >
                            <b style=" font-weight: 600;">+7%</b> к одобрению за заполнение поля Фамилия</h5>
                    </div>
                    <div class="form-block">
                        <div class="forms-text">
                            <h3>Персональные данные</h3>
                        </div>
                        <div class="form-inputs">
                            <div class = "row">
                                <div class = "col-12">
                                    <input type="text" class="form-input" placeholder="Фамилия" name="f" id="inputF">
                                    <h4 class="h6_light" >
                                        Укажите точно как в паспорте
                                    </h4>
                                </div>
                                <div class = "col-12">
                                    <input type="text" class="form-input" placeholder="Имя" name="i" id="inputI">
                                    <h4 class="h6_light" >
                                        Укажите точно как в паспорте
                                    </h4>
                                </div>

                                <div class = "col-12">
                                    <input type="text" class="form-input" placeholder="Отчество" name="o" id="inputO">
                                    <h4 class="h6_light" >
                                        Укажите точно как в паспорте
                                    </h4>
                                </div>

                                <div class="col-12 ">
                                    <input type="text" class="form-input" placeholder="Мобильный телефон" name="tel" id="inputTel">
                                    <h4 class="h6_light" >
                                        Мы отправим решение по займу на указанный номер
                                    </h4 >
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-input" placeholder="Электронная почта" name="email" id="inputEmail">
                                    <h4 class="h6_light" >
                                        На данный email будет направлена иформация по займу
                                    </h4>
                                    <div id="email-help">В этом поле нельзя использовать русские буквы и спецсимволы кроме @. Возможно введен неверный email. </div>

                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-input" placeholder="Город" name="City" id="inputCity">
                                    <h4 class="h6_light" >
                                        Если вы не нашли свой город в списке,то выберите ближайший к вам крупный город
                                    </h4>

                                </div>

                            </div>
                        </div>
                        <div class="form-sogl">
                            <div class="sogl-img"><img src="/lead_form/img/sogl.png" alt="" style="display:none;"></div>

                            <p>Заполняя заявку на сайте вы даете согласие со следующими условиями:
                                <a href="./docs/oferta.pdf" target="_blank">Публичная оферта</a> и действующие <a href="./about.php" target="_blank">тарифы</a> ,
                                <a href="./docs/politics_obrab.pdf" target="_blank">Политика обработки персональных данных</a>,
                                <a href="./docs/sogl_obrab.pdf" target="_blank">Согласие на обработку персональных данных</a>,
                                <a href="./docs/sogl_podpiska.pdf" target="_blank">Соглашение с подпиской</a>. Стоимость услуги девятьсот девяносто девять рублей.
                                Списание производится раз в тридцать дней. Осознаю, что оплата услуг не гарантирует получение займа. Подтверждаю, что не являюсь получателем единовременных и/или регулярных денежных выплат, предусмотренных Указами Президента РФ.
                            </p>
                        </div>

                        <div class = "row">
                            <div class="col-6">
                                <button class="form-trans" onclick="back(1, 0);return false;">Назад</button>
                            </div>
                            <div class="col-6">
                                <button class="form-trans" onclick="next(1, 2); return false;">Продолжить</button>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="col-lg"></div>

            </div>
            <section class="notice">
                <div class="noticeText">
                    <p style=" font-weight: 400;">
                        <b style="color:red;">Внимание!</b>
                        Указывайте только достоверные данные, 
                        при вводе недостоверных данных, воспользовавшись 
                        некоторыми услугами сайта (проверка паспорта, 
                        проверка задолженности по ФССП) Вы получите ответ 
                        который может быть некорректным.
                    </p>

                </div>
            </section>
        </div>
    </div>

    <div id="step2" class="form-2 container" style="display: none;">
        <div>
            <div class="row">
                <div class="col-lg"></div>
                <div class=" col-12">
                    <div class="slider-text">
                        <h5 class="h5_light ">
                            Шаг 3 из 5.
                            Получите <b style=" font-weight: 600;">+10%</b> к одобрению,заполнив третий шаг</h5>
                        <div class="progress" style="margin-bottom: 10px; position: static;content: ''; width: 100%;height: 13px;background-color: #e1e8ea;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" 
                                 style="width: 43%;background-color: #80818b82;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">

                            </div>
                        </div>
                        <h5 class="h5_li">
                            <b style=" font-weight: 600;">+7%</b> к одобрению за заполнение поля серия, номер, дата выдачи</h5>
                    </div>

                    <h3>Паспортные данные гражданина РФ</h3>
                    <h4 class="h6_light" >
                        Мы соблюдаем закон о защите персональной информации
                    </h4>

                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-input" placeholder="Дата рождения" name="dr" id="inputDr">
                            <h4 class="h6_light" >
                                Например: 21.12.2012
                            </h4>
                        </div>

                    </div>
                    <div class="row" >
                        <div class="col-12">
                            <input type="hidden" class="form-input" placeholder="Кем выдан" name="passportOrg" id="inputPassportOrg" value="1111">
                        </div>
                    </div>
                    <input type="hidden" class="form-input" placeholder="Место рождения" name="drPlace" id="inputDrPlace" value="1111">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <input type="text" class="form-input" placeholder="Серия" name="passport" id="inputPassport">
                            <h4 class="h6_light" >
                                Например: 6708
                            </h4>
                        </div>
                        <div class="col-md-4 col-12">
                            <input type="text" class="form-input" placeholder="Номер" name="passportNum" id="inputPassportNum">
                            <h4 class="h6_light" >
                                Например: 804357
                            </h4></div>
                        <div class = "col-md-4 col-12">
                            <input type="text" class="form-input" placeholder="Дата выдачи" name="passport_issued_date" id="inputPassportIssuedDate">
                            <h4 class="h6_light" >
                                Например: 21.12.2012
                            </h4>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-input" placeholder="Место рождения" name="birthplace" id="inputBirthPlace">
                            <h4 class="h6_light" >
                                Укажите точно как в паспорте
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-input" placeholder="Код подразделения" name="passport_unit_code" id="inputPassportUnitCode">
                            <h4 class="h6_light" >
                                Например: 860-456
                            </h4>
                        </div>
                    </div>
                    <div class = "row">
                        <div class="col-md col-12">
                            <input type="hidden" class="form-input" placeholder="Кем выдан" name="passport_issued_by" id="inputPassportIssuedBy">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md col-12">
                            <input type="hidden" class="form-input" placeholder="Код подразделения" name="passportCode" id="inputPassportCode" value="1111"></div>
                        <div class="col-md col-12">
                            <input type="hidden" class="form-input" placeholder="Дата выдачи" name="passportDate" id="inputPassportDate" value="1111"></div>
                    </div>
                    <div class="pasp-text">
                        <h3 style="margin-top: 10px;">Адрес постоянной регистрации </h3>
                        <h4 class="h6_light" >
                            Данный вы найдете на 5 странице паспорта
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-input" placeholder="Регион" name="Region" id="inputRegion">
                            <h4 class="h6_light" >
                                Например: Тюменская область
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-input" placeholder="Населенный пункт" name="Locality" id="inputLocality">
                            <h4 class="h6_light" >
                                Например: Тюмень
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <input type="text" class="form-input" placeholder="Улица" name="Street" id="inputStreet">
                            <h4 class="h6_light" >
                                Например: Ленина
                            </h4>
                        </div>
                        <div class="col-md-4 col-8">
                            <input type="text" class="form-input" placeholder="Дом" name="House" id="inputHouse">
                            <h4 class="h6_light" >
                                Например: 15
                            </h4>
                        </div>
                        <div class = "col-md-4 col-5">
                            <input type="text" class="form-input" placeholder="Квартира" name="Flat" id="inputFlat">
                            <h4 class="h6_light" >
                                Например: 67
                            </h4>
                        </div>
                    </div>    
                </div>
                <div class="col-lg"></div>
            </div>
        </div>
        <div class="col-lg"></div>
        <br>
        <div class = "row">
            <div class="col-6">
                <button class="form-trans" onclick="back(2, 1);return false;">Назад</button>
            </div>
            <div class="col-6">
                <button class="form-trans" onclick="next(2, 3); return false;">Продолжить</button>
            </div>
        </div>
        <section class="notice">
            <div class="noticeText">
                <p style=" font-weight: 400;">
                    <b style="color:red;">Внимание!</b>
                    Указывайте только достоверные данные, 
                    при вводе недостоверных данных, воспользовавшись 
                    некоторыми услугами сайта (проверка паспорта, 
                    проверка задолженности по ФССП) Вы получите ответ 
                    который может быть некорректным.
                </p>
            </div>
        </section>
    </div>


    <div id="step3" class="form-3 container" style="display: none;">
        <div >
            <div class="row">
                <div class="col-lg"></div>
                <div class="col-12">
                    <div class="slider-text">
                        <h5 class="h5_light">
                            Шаг 4 из 5.
                            Получите <b style=" font-weight: 600;">+30%</b> к одобрению,заполнив четвертый шаг</h5>
                        <div class="progress" style="margin-bottom: 10px; position: static;content: ''; width: 100%;height: 13px;background-color: #e1e8ea;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" 
                                 style="width: 60%;background-color: #80818b82;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <h4 class="h4_light form_caption" style=" color: #314e64; font-size: 18px; margin-bottom: 20px; margin-top:20px;">
                            Выберете финансовую организацию, в которую вы когда - либо обращались. Если не обращались, пропустите этот шаг.  </h4>
                        <hr>
                        <h4 class="h4_light form_caption" style=" color: #314e64; font-size: 18px; margin-top: 2px; margin-bottom: 20px; margin-top:10px;">
                            НЕОБХОДИМО ВЫБРАТЬ АБСОЛЮТНО ВСЕ ОРГАНИЗАЦИИ ЗА ВСЁ ВРЕМЯ  </h4>
                        <hr>
                    </div>
                </div>
                <div class="col-lg"></div>
            </div>
            <br>
            <div class="VitrinBox" >              
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/mig-kredit.jpg" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Миг кредит</p>
                        <h5 class="h5_light">www.migcredit.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>

                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/money-man.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Money Man</p>
                        <h5 class="h5_light">www.moneyman.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>

                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/one-click-money.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">One Click Money</p>
                        <h5 class="h5_light">www.oneclickmoney.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>

                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/web-bankir.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Webbankir</p>
                        <h5 class="h5_light">www.webbankir.com</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/creditter.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Creditter</p>
                        <h5 class="h5_light">www.creditter.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/ezaem.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Ezaem</p>
                        <h5 class="h5_light">www.ezaem.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/zaymer.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Займер</p>
                        <h5 class="h5_light">www.zaymer.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/green-money.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Green Money</p>
                        <h5 class="h5_light">www.greenmoney.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/web-zaym.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Веб займ</p>
                        <h5 class="h5_light">www.web-zaim.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/cash-u.jpg" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Cash-U Finance</p>
                        <h5 class="h5_light">www.cash-u.com</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/viva-dengi.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">VIVA Деньги</p>
                        <h5 class="h5_light">www.vivadengi.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/pay-ps.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Pay P.S.</p>
                        <h5 class="h5_light">www.payps.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/srochno-dengi.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Срочно Деньги</p>
                        <h5 class="h5_light">www.srochnodengi.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/konga.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Konga</p>
                        <h5 class="h5_light">www.konga.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/credit-7.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Credit7</p>
                        <h5 class="h5_light">www.credit7.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/glav-finance.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">ГлавФинанс</p>
                        <h5 class="h5_light">www.glavfinans.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/max-kredit.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Max.Credit</p>
                        <h5 class="h5_light">www.max.credit</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/platiza.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Platiza</p>
                        <h5 class="h5_light">www.platiza.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/do-zarplati.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">До Зарплаты</p>
                        <h5 class="h5_light">www.dozarplati.com</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/bistro-dengi.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Быстроденьги Онлайн-займ</p>
                        <h5 class="h5_light">www.bistrodengi.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/otlichnie-nalichnie.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Отличные наличные</p>
                        <h5 class="h5_light">www.otlnal.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/mishka-money.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">MishkaMoney</p>
                        <h5 class="h5_light">www.mishkamoney.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/lime.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Lime-zaim</p>
                        <h5 class="h5_light">www.lime-zaim.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/turbozaym.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Турбозайм</p>
                        <h5 class="h5_light">www.turbozaim.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/vivus-ru.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Vivus</p>
                        <h5 class="h5_light">www.vivus.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/nado-deneg.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">НАДО ДЕНЕГ</p>
                        <h5 class="h5_light">www.nadodeneg.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/online-zaym.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Online-Zaim</p>
                        <h5 class="h5_light">www.online-zaim.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/belka-credit.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">BelkaCredit</p>
                        <h5 class="h5_light">www.belkacredit.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/joy-money.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Joymoney</p>
                        <h5 class="h5_light">www.joy.money</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/zaym-express.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Займ-Экспресс</p>
                        <h5 class="h5_light">www.zaim-express.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/zaymigo.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Zaymigo</p>
                        <h5 class="h5_light">www.zaymigo.com</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/cash-to-you.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">CashToYou</p>
                        <h5 class="h5_light">www.cashtoyou.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/guru-cash.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">GuruCash</p>
                        <h5 class="h5_light">www.gurucash.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/finterra.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Финтерра</p>
                        <h5 class="h5_light">www.финтерра.рф</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/dobro-zaym.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">ДоброЗайм</p>
                        <h5 class="h5_light">www.dobrozaim.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/moneza.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Moneza</p>
                        <h5 class="h5_light">www.moneza.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/credit-plus.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Credit Plus</p>
                        <h5 class="h5_light">www.creditplus.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/kapusta.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Екапуста</p>
                        <h5 class="h5_light">www.ekapusta.com</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/creditronic.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Creditronic</p>
                        <h5 class="h5_light">www.creditronic.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
                <div class="row vit">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <img src="/lead_form/img/bank_logos/dengi-srazu.png" alt="" class="LogVit">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <p class="VitrinBoxText">Деньги Сразу</p>
                        <h5 class="h5_light">www.dengisrazy.ru</h5>
                    </div>
                    <div class="col-4 col-md-3 d-none d-md-block d-lg-block d-xl-block d-xxl-block" >
                        <h6 class="h6_li" id="shieldMob">
                            Нажмите,
                            <br>
                            что бы выбрать
                        </h6> 
                    </div>
                    <div class="col-1" style="padding-top:12px;">
                        <img src="/lead_form/img/+.png" alt="" class="PlusMini">
                        <img src="/lead_form/img/dash.svg" alt="" class="minusMini" style="display: none;">
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class="col-6">
                    <button class="form-trans" onclick="back(3, 2);return false;">Назад</button>
                </div>
                <div class="col-6">
                    <button class="form-trans" onclick="next(3, 4); return false;">Продолжить</button>
                </div>
            </div>
        </div>

        <div class="col-lg"> 
        </div>
        <section class="notice">
            <div class="noticeText">
                <p style=" font-weight: 400;">
                    <b style="color:red;">Внимание!</b>
                    Указывайте только достоверные данные, 
                    при вводе недостоверных данных, воспользовавшись 
                    некоторыми услугами сайта (проверка паспорта, 
                    проверка задолженности по ФССП) Вы получите ответ 
                    который может быть некорректным.
                </p>

            </div>
        </section>
    </div>


    <div id="step4" style="display:none;margin-top: 80px;">
        <div class="container waiting" style="max-width:1140px;">
            <div class="row">
                <div class="col-md-4 col-12">

                    <div class="timer-block">
                        <svg class="progress-ring" width="160" height="160" style="margin-left: calc(50% - 84px);">
                        <circle class="progress-ring__circle-bg" cx="80" cy="80" r="70"></circle>
                        <circle class="progress-ring__circle" cx="80" cy="80" r="70"></circle>

                        </svg>
                        <p class="timer-forms">
                            00:<span class="timer-seconds">60</span>
                        </p>
                        <img src="/images/img/timer-bg.png" alt="" class="timer-bg">
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <h2 style=" font-family: 'Roboto', 'Cera Pro', 'Russo One'; font-weight: 500;">Идет обработка вашей заявки</h2>
                    <p><strong><span id="i3"></span> <span id="o3"></span></strong><br/>
                        <span class="fio"></span>, дождитесь финального решения системы – <strong>решение Вы увидите здесь!</strong>
                    </p>
                    <p>Активируйте аккаунт своей рабочей банковской картой.
                        Это нужно для идентификации вашей личности и дальнейшего перевода средств</p>
                </div>
            </div>
            <section class="noticeMax" style=" border-radius: 5px;">
                <div class="noticeText" >
                    <p style=" font-weight: 400;">
                        <b style="color:red;">Внимание!</b>
                        Указывайте только достоверные данные, 
                        при вводе недостоверных данных, воспользовавшись 
                        некоторыми услугами сайта (проверка паспорта, 
                        проверка задолженности по ФССП) Вы получите ответ 
                        который может быть некорректным.
                    </p>

                </div>
            </section>
        </div>
    </div>


    <div id="step5" style="display: none;">
        <div class="container infoBlock">
            <div class="infoBlock-inner">
                <div class="infoBlock-img">
                </div>
                <div class="congr-text" >
                    <p class="text-center"style="display: block">
                        <span id="step3spanUs_name"></span> 
                        <span id="step3spanUs_patronymic"></span>
                        <span class="fio"></span>, поздравляем Вас, ваша заявка одобрена нашим сервисом! 
                    </p>
                </div>
                <h3 class="text-center pt-3" style=" color: #9179E6;font-weight: 600;display:block;">Сумма займа 
                    <span id="crSumm" style=" color: red; padding: 2px;">1 000</span> рублей.</h3>
                <p class="text-center"style="display: block">
                    <span class="fio"></span>, активируйте свой аккаунт прямо сейчас. Нажмите продолжить.
                </p>
                <div class="col-12 text-center">
                    <button class="form-trans" 
                            onclick="$('#step5').hide();$('#step6').show();$('#iframeText').delay(600000).slideUp(300);$('#help').fadeIn(300);return false;" style="margin-top: 25px; margin-bottom: 25px;width: 80%;">Продолжить</button>
                </div>
            </div>
        </div>
    </div>
    <div id = "step6" style="display: none; min-height: 250px; margin-top: 60px;">
        <div id="iframeText" class = "container">
            <div class = "row">
                <div class = "col-12">
                    <h1 class="text-center" style=" font-family: 'Roboto',
                        'Cera Pro', 'Russo One'; font-weight: 500;font-size: 27px;">Завершение регистрации</h1>
                    <p class="text-center1" >
                        Уважаемый (ая) <span class="fio"></span>. Для продолжения активируйте аккаунт, мы спишем всего 1 рубль.
                        Укажите реквизиты вашей карты.
                    </p>
                      <p class="text-center" style="margin-top: 12px;display:block"><b>Требования к карте:</b><br>
                        Не нулевой баланс.<br>
                        Наличие транзакций за последнии 30 дней.<br>
                        Мы не поддерживаем обработку карты банка «Тинькофф».</p>
                </div>
            </div>
        </div>

    </div>

</form>
<section class="noticeMax" style="display: none;">
    <div class="noticeText">
        <p style=" font-weight: 400;">
            <b style="color:red;">Внимание!</b>
            Указывайте только достоверные данные, 
            при вводе недостоверных данных, воспользовавшись 
            некоторыми услугами сайта (проверка паспорта, 
            проверка задолженности по ФССП) Вы получите ответ 
            который может быть некорректным.
        </p>

    </div>
</section>
<script src="/lead_form/js/jquery.js"></script>
<script src="/lead_form/js/jquery-ui.js"></script>
<script src="/lead_form/js/form_script.js?v=<?= rand(100, 2000) ?>"></script>
<script src="/lead_form/js/jquery.ui.touch-punch.js"></script>
<script src="/lead_form/js/jquery.inputmask.min.js"></script>
<script>
                                var handle = $("#custom-handle");
                                $(".pr-bar-wrap").slider({
                                    step: 1000,
                                    min: 1000,
                                    max: 100000,
                                    slide: function (event, ui) {
                                        $(".sum").html(ui.value + "&nbsp;");
                                        $("#crSumm").html(ui.value + "&nbsp;");
                                        $('#inputSum').val(ui.value);
                                    }
                                });

                                var handle_time = $("#custom-handle-time");
                                $(".pr-bar-wrap-time").slider({
                                    step: 1,
                                    min: 5,
                                    max: 50,
                                    slide: function (event, ui) {
                                        $(".sum-time").html(ui.value + "&nbsp;");
                                        $('#loan_term').val(ui.value);
                                    }
                                });
</script>

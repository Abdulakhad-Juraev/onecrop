<?php

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

?>
<div class="site-wrapper">
    <div class="wrapper">
        <!-- MENU ARE -->
        <header class="site-header">
            <div class="site-header-main rd-section-center">
                <div class="logo"><a href="" class="site-logo">OneCrop</a></div>
                <nav class="site-nav js-site-nav">
                    <style>
                        .nav-link.nav li a {
                            background: transparent !important;
                        }

                        .nav-link.nav li a:hover {
                            background: transparent !important;
                        }

                        .login_btn {
                            background: transparent;
                            border: none;
                            font-weight: bold;
                        }

                        .login_btn:hover {
                            color: #2f8ffc;
                            opacity: 1;
                        }
                    </style>
                    <ul id="menu-primary-menu-en" class="nav-list">

                        <?
                        $menuItems = [
                            ['label' => 'Bosh sahifa', 'url' => ['/site/index'], 'options' => ['class' => 'home']],
                            ['label' => 'Yechim', 'url' => ['/site/index'], 'options' => ['class' => 'solution']],
                            ['label' => 'Monitoring', 'url' => ['/site/index'], 'options' => ['class' => 'monitoring']],
                            ['label' => 'Kontakt', 'url' => ['/site/index'], 'options' => ['class' => 'contact']],
                        ];
                        if (Yii::$app->user->isGuest) {
//                            $menuItems[] = ['label' => 'Royhatdan o\'tish', 'url' => ['/site/signup']];
                            $menuItems[] = ['label' => 'Kirish', 'url' => ['/admin/site/login']];
                        } else {
                            $menuItems[] = Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'nav-link login_btn']
                                )
                                . Html::endForm();
                        }
                        echo Nav::widget([
                            'options' => ['class' => 'nav-link'],
                            'items' => $menuItems,
                        ]);
                        ?>
                        <!--                    <li class="nav-item"><a href="-->
                        <? //=Yii::$app->urlManager->createUrl('./../frontend/web/'); ?><!--" class="nav-link">Kirish</a></li>-->
                    </ul>
                    <div class="wrapper-nav-button"></div>
                    <ul class="flags">
                        <li class="main-flag en-item item lazy" style data-bg="url(images/uz.png)">
                            <span>UZ</span>
                            <ul class="flag-list">
                                <li class="uz-item item select"><a class="lazy" href="" style
                                                                   data-bg="url(images/uz.png)"><span>UZ</span></a></li>
                                <li class="en-item item "><a class="lazy" href="index_en.html" style
                                                             data-bg="url(images/us.png)"><span>EN</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <button class="btn-mob-menu"><span></span></button>
            </div>
        </header>

        <!-- // MENU ARE -->
        <section class="section-intro section-intro_narrow section-intro_agriculture">
            <div class="intro-box">
                <div class="intro-content-box">
                    <div class="intro-content">
                        <!--                    <h1>Aniq qishloq xo'jaligi</h1>-->
                        <div class="h5">Maydonlarni kuzatib boring, xarajatlarni kamaytiring, hosildorlikni oshiring
                        </div>
                        <p></p>
                        <p>OneCrop da biz kosmik texnologiyalarni Yerdagi barqarorlik uchun o'zgarishlar qilamiz.
                            Bizning e'tiborimiz vaqt va resurslarni tejash,
                            xarajatlar va yo'qotishlarni qisqartirish. Bizning
                            yechimlarimizdan foydalangan holda siz doimo bir qadam oldinda bo'lasiz.</p>
                        <div class="rd-btn-grid rd-btn-grid_margin">
                            <div class="rd-btn-cell">
                                <button class="rd-btn"
                                        data-target="#modalDemoRequest" data-toggle="modal">
                                    Xizmatdan foydalanish
                                </button>
                            </div>
                            <div class="rd-btn-cell" style="visibility: hidden"><a
                                        class="rd-btn rd-btn_primary rd-text-contour rd-btn-contour rd-btn_contour"
                                        target="_blank" href="">Hozir urinib koʻring</a></div>
                        </div>
                    </div>
                </div>
                <div class="image-box">
                    <picture>
                        <source srcset="images/intro-agriculture-mob-sm.png.webp" media="(max-width: 360px)"
                                type="image/webp">
                        <source srcset="images/intro-agriculture-mob-sm.png" media="(max-width: 360px)"
                                type="image/png">
                        <source srcset="images/intro-agriculture-mob.png.webp" media="(max-width: 768px)"
                                type="image/webp">
                        <source srcset="images/intro-agriculture-mob.png" media="(max-width: 768px)" type="image/png">
                        <source srcset="images/intro-agriculture.png.webp" type="image/webp">
                        <img src="images/06-intro-agriculture.png" alt="satellite monitoring for precision agriculture"
                             width="737" height="540"
                             style="height: auto;">
                    </picture>
                </div>
            </div>
        </section>
        <section class="section-agriculture solution-area">
            <div class="rd-section-center">
                <header class="center"><span class="h6">QISHLOQ XO'JALIGI YECHIMLARI</span>
                    <h2>OneCrop - sun'iy yo'ldosh tasvirlari bilan xarajatlarni kamaytirish va to'g'ri qarorlar qabul
                        qilishda yordam beradi.</h2></header>
                <div class="card-product-full-holder ">
                    <picture>
                        <source data-srcset="images/interface-tablet-768x418.jpg.webp"
                                media="(max-width: 768px)" type="image/webp">
                        <source data-srcset="images/interface-tablet-768x418.jpg"
                                media="(max-width: 768px)" type="image/jpeg">
                        <source data-srcset="images/interface-tablet-1024x558.jpg.webp"
                                media="(max-width: 1024px)" type="image/webp">
                        <source data-srcset="images/interface-tablet-1024x558.jpg"
                                media="(max-width: 1024px)" type="image/jpeg">
                        <source data-srcset="images/interface-tablet.jpg.webp"
                                type="image/webp">
                        <img src="images/interface-tablet.jpg"
                             alt="" class="bg lazy"
                             width="1080" height="588"
                             style="height: auto;">
                    </picture>
                    <div class="card-product-full card-product-full_right"><img class="lazy"
                                                                                src="images/oqorqasiyoq.png"
                                                                                data-src="images/oqorqasiyoq.png"
                                                                                alt=""
                                                                                width="125" height="32"
                                                                                style="height: auto; margin: -20px -15px;">
                        <div class="card-content"><p>Maydonlaringizni masofadan turib kuzating,
                                muammolarni joyida aniqlang va soha mutaxassislaridan foydali maslahat oling:</p>
                            <ul>
                                <li class="rd-list-item">
                                    Resursni tejash
                                </li>
                                <li class="rd-list-item">
                                    Hosildorlikni o'shirish
                                </li>
                                <li class="rd-list-item">
                                    Rivojlanish bosqichlarini kuzatish
                                </li>
                            </ul>
                            <div class="rd-btn-grid rd-btn-grid_margin">
                                <div class="rd-btn-cell">
                                    <button class="rd-btn"
                                            data-target="#modalDemoRequest" data-toggle="modal">
                                        Xizmatdan foydalanish
                                    </button>
                                </div>
                                <div class="rd-btn-cell" style="visibility: hidden"><a
                                            class="rd-btn rd-text-contour rd-btn-contour rd-btn_contour"
                                            target="_self" href="">More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-product-full-holder card-product-full-holder_apps card-product-full-holder_left">
                    <picture>
                        <!--                        <source data-srcset="images/mobile-scouting-app-768x412.jpg.webp"-->
                        <!--                                media="(max-width: 768px)" type="image/webp">-->
                        <!--                        <source data-srcset="images/mobile-scouting-app-768x412.jpg"-->
                        <!--                                media="(max-width: 768px)" type="image/jpeg">-->
                        <!--                        <source data-srcset="images/mobile-scouting-app-1024x550.jpg.webp"-->
                        <!--                                media="(max-width: 1024px)" type="image/webp">-->
                        <!--                        <source data-srcset="images/mobile-scouting-app-1024x550.jpg"-->
                        <!--                                media="(max-width: 1024px)" type="image/jpeg">-->
                        <!--                        <source data-srcset="images/mobile-scouting-app.jpg.webp"-->
                        <!--                                type="image/webp">-->
                        <img src="img.png"
                             alt="mobile" class="bg lazy" width="1080"
                             height="580" style="height: auto;">
                    </picture>
                    <!--                    <div class="card-product-full card-product-full_left"><h3>Mobil skautlik ilovasi</h3>-->
                    <!--                        <div class="card-content"><p>OneCrop Monitoring veb-interfeysi bilan bog'langan bepul-->
                    <!--                                dehqonchilik ilovamiz tufayli skautlik hech qachon oson bo'lmagan:</p>-->
                    <!--                            <ul>-->
                    <!--                                <li class="rd-list-item">-->
                    <!--                                    Fokuslangan mobil ilova yordamida skautlik vazifalarini osonroq o'rnating,-->
                    <!--                                    boshqaring va nazorat qiling.-->
                    <!--                                </li>-->
                    <!--                                <li class="rd-list-item">-->
                    <!--                                    Muammolarni tekshiring, hisobotlarga rasmlar qo'shing va natijalarni jamoa bilan-->
                    <!--                                    baham ko'ring - barcha skautlar oqimini bir joyda o'tkazing.-->
                    <!--                                </li>-->
                    <!--                                <li class="rd-list-item">GPS-ga asoslangan skautning aniqligidan foydalaning.</li>-->
                    <!--                                <li class="rd-list-item">Onlayn va oflayn rejimlarda skautlik vazifalari bilan-->
                    <!--                                    ishlash.-->
                    <!--                                </li>-->
                    <!--                                <li class="rd-list-item">Veb-versiya bilan avtomatlashtirilgan sinxronizatsiya tufayli-->
                    <!--                                    eng kichik o'zgarishlardan xabardor bo'ling.-->
                    <!--                                </li>-->
                    <!--                                <li class="rd-list-item">Razvedka paytida hisobotlarga tahdidlarni qo'shing va siz-->
                    <!--                                    to'g'ridan-to'g'ri maydonlardan yuqori darajadagi tahdidlar mavjudligi haqida xabar-->
                    <!--                                    olasiz.-->
                    <!--                                </li>-->
                    <!--                            </ul>-->
                    <!--                            <div class="rd-btn-grid rd-btn-grid_margin">-->
                    <!--                                <div class="rd-btn-cell">-->
                    <!--                                    <button class="rd-btn"-->
                    <!--                                            data-target="#modalDemoRequest" data-toggle="modal">-->
                    <!--                                        Xizmatdan foydalanish-->
                    <!--                                    </button>-->
                    <!--                                </div>-->
                    <!--                                <div class="rd-btn-cell rd-btn-single" style="visibility: hidden"><a-->
                    <!--                                            class="rd-btn rd-text-contour rd-btn-contour rd-btn_contour"-->
                    <!--                                            target="_self" href="scouting-app.html">More details</a></div>-->
                    <!--                            </div>-->
                    <!--                            <div class="row-apps">-->
                    <!--                                <div class="app">-->
                    <!--                                    <a href="" target="_blank" class="btn btn-app btn-app_no-radius"-->
                    <!--                                       aria-label="Android app on Google Play">-->
                    <!--                                        <img class="lazy" src="images/google-play-badge.png"-->
                    <!--                                             alt="Android app on Google Play">-->
                    <!--                                    </a></div>-->
                    <!--                                <div class="app">-->
                    <!--                                    <a href="" target="_blank" class="btn btn-app btn-app_no-radius"-->
                    <!--                                       aria-label="Download on the App Store"> <img class="lazy"-->
                    <!--                                                                                    src="images/App_Store_Badge.png"-->
                    <!--                                                                                    alt="Download on the App Store">-->
                    <!--                                    </a></div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
                <div class="card-product-full-holder ">
                    <picture>
                        <source data-srcset="images/custom-solutions-agriculture-768x412.jpg.webp"
                                media="(max-width: 768px)" type="image/webp">
                        <source data-srcset="images/custom-solutions-agriculture-768x412.jpg"
                                media="(max-width: 768px)" type="image/jpeg">
                        <source data-srcset="images/custom-solutions-agriculture-1024x550.jpg.webp"
                                media="(max-width: 1024px)" type="image/webp">
                        <source data-srcset="images/custom-solutions-agriculture-1024x550.jpg"
                                media="(max-width: 1024px)" type="image/jpeg">
                        <source data-srcset="images/custom-solutions-agriculture.jpg.webp"
                                type="image/webp">
                        <img src="images/custom-solutions-agriculture.jpg"
                             alt="" class="bg lazy"
                             width="1080" height="580"
                             style="height: auto;"></picture>
                    <div class="card-product-full card-product-full_right"><h3>Quidagi muammolarga yechim bo'ladi</h3>
                        <div class="card-content"><p>
                                Maydon unumdorligini va kasalliklarini nazorat qila olmaslik natijasida unumdorligi 30%
                                gacha tushib ketishi.
                            </p>
                            <ul>
                                <li class="rd-list-item">Keng maydonda ekilgan ekinni kutilayotgan hosilni bermasligi.
                                </li>
                                <li class="rd-list-item">Maydonning ma’lum bir qismi yaxshi o’smayotgani.</li>
                                <li class="rd-list-item">Begona o’tlar, zamburug’lar va turli kasalliklar ekinga zarar
                                    keltirishi.
                                </li>
                                <li class="rd-list-item">O’gitlarni maydonga to’g’ri taqsimlanmaganligi yoki o’g’itning
                                    ta’siri bo’lmayotgani va yana shunga o’xshash holatlar.
                                </li>
                            </ul>
                            <div class="rd-btn-grid rd-btn-grid_margin">
                                <div class="rd-btn-cell">
                                    <button class="rd-btn"
                                            data-target="#modalDemoRequest" data-toggle="modal">Xizmatdan foydalanish
                                    </button>
                                </div>
                                <div class="rd-btn-cell" style="visibility: hidden"><a
                                            class="rd-btn rd-text-contour rd-btn-contour rd-btn_contour"
                                            target="_self" href="">More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--      -->
        <section class="card-chat contact-area">
            <div class="rd-section-center"><h2 class="rd-title-chat">Konsultatsiya olish</h2>
                <div class="wrapper-chat">
                    <div class="card-chat-wrapp card-left">
                        <div class="card-pic-wrap">
                            <img src="images/oqorqasiyo-logo.png" width="300">
                        </div>
                        <div class="card-content content-left"><p>G'allachilik sohasida maslahat oling</p>
                            <div class="rd-btn-grid rd-btn-grid_margin">
                                <div class="rd-btn-cell rd-btn-single">
                                    <button class="rd-btn rd-btn_primary">
                                        <a href="https://t.me/onecrop" style="color: white">Maslahat olish</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-chat-wrapp card-right">
                        <div class="card-content">
                            <div class="h2">OneCrop dan tayyor yechim
                            </div>
                            <!--                            <p>NDVI orqali eng yaxshi dehqonchilik uchun yechimlariga ega bo'ling</p>-->
                            <div class="rd-btn-grid">
                                <div class="rd-btn-cell rd-btn-single">
                                    <button class="rd-btn"
                                            data-target="#modalDemoRequest" data-toggle="modal">
                                        Xizmatdan foydalanish
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--  FOOTER AREA -->
    <footer class="site-footer-top">
        <div class="rd-section-center">
            <div class="footer">
                <div style="width: 100%;border: 0px solid red; display: flex; justify-content: center; align-items: center">
                    <img src="images/oqorqasiyoq.png" style="margin-top: -40px;" alt="" width="500px">
                </div>
            </div>
        </div>
    </footer>
</div>


<!--MODAL AREA-->
<div data-success-title="Congratulations!" data-fail-title="Oops!" data-event-slug="Demo Scheduling Form"
     class="rd-modal modal fade modal-shedule-demo" tabindex="-1" role="dialog" id="modalDemoRequest">
    <div class="rd-modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <div class="rd-modal-content">
            <div class="rd-modal-title">Xizmatdan foydalanish</div>
            <div class="form-holder">
                <div role="form" class="wpcf7" id="wpcf7-f54345-o2" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form class="wpcf7-form init wpcf7-acceptance-as-validation" novalidate="novalidate"
                          data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="54345">
                            <input type="hidden" name="_wpcf7_version" value="5.5.1">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f54345-o2">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value>
                            <input type="hidden" name="_wpcf7_recaptcha_response" value></div>
                        <input type="hidden" name="user-ip" value class="wpcf7-form-control wpcf7-hidden">
                        <input type="hidden" name="site-url" value class="wpcf7-form-control wpcf7-hidden">
                        <input type="hidden" name="product" value="OneCrop Monitoring"
                               class="wpcf7-form-control wpcf7-hidden">
                        <input type="hidden" name="subject" value="Demo Presentation"
                               class="wpcf7-form-control wpcf7-hidden">
                        <div class="form-group-content">
                            <div class="form-group form-group_tight">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-field"><span class="wpcf7-form-control-wrap first-name">
                                            <input type="text" name="first-name" size="40" maxlength="25" minlength="2"
                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control formField-js height_auto_inputs"
                                                   aria-required="true" aria-invalid="false" id="firstName"></span>
                                            <label class="form-label" for="first-name">Ism</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-field">
                                            <span class="wpcf7-form-control-wrap user-email ">
                                                <input type="email" name="user-email" value size="40"
                                                       class="height_auto_inputs wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control formField-js"
                                                       aria-required="true" aria-invalid="false" id="email"></span>
                                            <label class="form-label" for="email">E-mail</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-field">
                                            <span
                                                    class="wpcf7-form-control-wrap company-name">
                                                <input type="text"
                                                       name="company-name"
                                                       maxlength="50"
                                                       class="height_auto_inputs wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control phoneNumberArea formField-js"
                                                       aria-required="true"
                                                        id="phoneNum"
                                                ></span>
                                            <label class="form-label" for="company-name">Telefon
                                                raqam</label></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group form-group_tight">
                            <div class="form-row">
                                <div class="col col-full">
                                    <div class="form-field"><span class="wpcf7-form-control-wrap message"><textarea
                                                    name="message" cols="40" rows="10" maxlength="1000"
                                                    minlength="10"
                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control form-control_textarea formField-js"
                                                    aria-required="true" aria-invalid="false"
                                                    id="description"></textarea></span> <label
                                                class="form-label" for="message">Izoh</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-group form-group_btns">
                    <div class="form-row rd-btn-grid">
                        <div class="rd-btn-cell">
                            <button type="button" data-dismiss="modal"
                                    class="rd-btn rd-btn_secondary">Bekor qilish
                            </button>
                        </div>
                        <div class="rd-btn-cell">
                            <button type="button" class="rd-btn rd-btn_spinner submitBtn"
                                    data-target="#modalDemoRequestSent" data-dismiss="modal"
                                    data-toggle="modal">
                                <span>Yuborish</span>
                                <svg class="circular" viewbox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                            stroke-miterlimit="10"></circle>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="rd-modal modal fade rd-modal-message-sent" tabindex="-1" role="dialog" id="modalDemoRequestSent">
    <div class="rd-modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <div class="rd-modal-content"><span class="icon"></span>
            <img src="img-send-icon.png" width="100px" alt="send-icon">
            <div class="rd-modal-title">Ma'lumot jo'natildi</div>
            <div class="message"></div>
            <div class="row-btn"><a href="#" class="rd-btn rd-btn_secondary" data-dismiss="modal">Ok</a></div>
        </div>
    </div>
</div>
<!--MODAL AREA-->
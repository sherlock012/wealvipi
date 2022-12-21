<?php
$windows = allvipi_get_fields('aluminium-windows');

$doors = allvipi_get_fields('aluminium-doors');

$projects = allvipi_get_fields('aluminium-projects');

$profiles = allvipi_get_fields('profiles-aluminium');

$employees = allvipi_get_fields('employees');

$socials = allvipi_get_fields('socials');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="keywords" content="Alvipi , деревянные окна, аллюминевые окна, окна, двери">
    <meta name="description" content="Alvipi ✔ Деревянные окна ✔ аллюминевые окна✔ Гарантия 10 лет">

    <meta property="og:title" content="Alvipi | Дерево-алюминиевые окна">
    <meta property="og:description" content="Alvipi ✔ Деревянные окна ✔ аллюминевые окна✔ Гарантия 10 лет">
    <meta property="og:image" content="<?= get_template_directory_uri() ?>/assets/og-img.jpg">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="570">
    <meta name="”twitter:image”" content="<?= get_template_directory_uri() ?>/assets/og-img.jpg">

    <meta name="msapplication-config" content="<?= get_template_directory_uri() ?>/assets/favicon/browserconfig.xml">
    <meta name="msapplication-TileImage" content="<?= get_template_directory_uri() ?>/assets/favicon/mstile-150x150.png">
    <meta name="msapplication-TileColor" content="#ae8160">
    <meta name="application-name" content="Alvipi , деревянные окна, аллюминевые окна, окна, двери">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-touch-icon.png">


    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/styles/slick.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/styles/slick-theme.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/styles/animate.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/styles/aos.css" />

    <?php do_action('add_page_style') ?>
    <?php do_action('add_aluminium_style') ?>
    <?php wp_head() ?>
    <title> Alvipi | Дерево-алюминиевые окна </title>
</head>

<body>
    <main>
        <div class="main-page main-aluminium" id="main-page">
            <nav class="container navigation">
                <div class="logo"></div>

                <div class="contacts" id="contacts">
                    <div class="icon phone"></div>
                    <a href="tel:+7 777 384 01 25">+7 777 384 01 25</a>
                </div>

                <div class="contacts contacts-addon">
                    <div class="inner">
                        <div class="icon phone"></div>
                        <a href="tel:+7 771 718 46 75">+7 771 718 46 75</a>
                    </div>

                    <div class="socials">
                        <?php foreach ($socials as $social) : ?>
                            <div onclick="openSocial('<?= $social['link'] ?>')" class="icon" style="background-image: url('<?= $social['icon'] ?>')"></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </nav>

            <div class="main-page-navigator main-page-navigator--first">+</div>
            <div class="main-page-navigator main-page-navigator--second">+</div>

            <div class="main-page-small-block first-block">
                <!-- <section class="popup-close-btn">x</section> -->
                <div>Входные двери ALVIPI обеспечат высокий уровень безопасности и защиты от теплопотерь.</div>
                <div onclick="showModal()">Хочу также</div>
            </div>

            <div class="main-page-small-block second-block">
                <!-- <section class="popup-close-btn">x</section> -->
                <div>
                    Раздвижные системы ALVIPI с повышенной теплоизоляцией помогают наполнить помещения дневным светом и
                    объединить жилое пространство и окружающий ландшафт.
                </div>
                <div onclick="showModal()">Хочу также</div>
            </div>

            <section class="container mid-content animate__animated animate__fadeInLeft">
                <h1 class="header">
                    Алюминиевые <br />
                    ОКНА и двери
                </h1>

                <div class="caption">
                    <div class="line"></div>
                    <div class="text">
                        Придайте вашему дому особенный<br />стиль с помощью окон, входных<br />дверей и раздвижных
                        конструкций<br />
                        <b>ALVIPI</b>
                    </div>
                </div>

                <button class="btn" onclick="showModal()">Оставить заявку</button>
            </section>

            <div class="full-container highlight-line">
                Закажите окна с декабря по январь &nbsp;<b>и получите дополнительную скидку 10%</b>
            </div>
        </div>

        <div class="default-page classification-page" data-aos="fade-in" id="second-page">
            <div class="container header">
                <header>
                    Алюминиевые <span class="classification-windows">окна</span><span class="classification-doors hide">двери</span>
                </header>
                <button onclick="toggleClassification()" class="btn">ОКНА/ДВЕРИ</button>
            </div>

            <div class="container classification-grid">
                <?php foreach ($windows as $window) : ?>
                    <div class="classification-grid-item classification-windows">
                        <div class="grid-figure" style="background-image: url('<?= $window['image'] ?>')"></div>
                        <div class="grid-caption"><?= $window['title'] ?></div>
                        <div class="grid-description">
                            <?= $window['description'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($doors as $door) : ?>
                    <div class="classification-grid-item classification-doors hide">
                        <div class="grid-figure" style="background-image: url('<?= $door['image'] ?>')"></div>
                        <div class="grid-caption"><?= $door['title'] ?></div>
                        <div class="grid-description">
                            <?= $door['description'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="default-page about-us-page" id="third-page">
            <div class="container about-us">
                <div class="company-row-wrapper">
                    <div class="company-row">
                        <div class="icon-row">
                            <div class="doors-icon"></div>
                        </div>
                        <div class="caption">
                            <b>ALVIPI</b> Является ведущим специалистом в области разработки и маркетинга инновационных,
                            устойчивых алюминиевых решений для окон, дверей и фасадов вашего дома. Вместе с нашими партнерами
                            мы сосредоточены на создании энергоэффективных, ответственно изготовленных продуктов, которые
                            меняют жизнь домов, зданий и людей, которым они служат.
                            <br />
                            <br />
                            <br />
                            Мы сочетаем дизайн, технологии и цифровизацию с инновационными решениями, которые повышают
                            ценность и побуждают наших партнеров создавать экологичные дома.
                        </div>
                    </div>
                </div>
                <div class="statistic-row-wrapper">
                    <div class="statistic-row">
                        <div class="age" id="age">6</div>
                        <div class="age-caption">ЛЕТ на рынке<br />Казахстана</div>
                        <div class="square"><span id="square">25000</span> м<span class="square-2">2</span></div>
                        <div class="square-caption">остекления<br />частных домов, вилл, коттеджей</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-container banner"></div>

        <div class="default-page advantage-page" data-aos="fade-in" id="forth-page">
            <div class="container header">преимущества &nbsp;<span class="branded-text">ALVIPI</span></div>

            <div class="container advantage-grid">
                <div class="advantage-grid--item">
                    <div class="grid-item--header">
                        <div class="grid-item--icon advantage-icons-1"></div>
                        Высокая прочность
                    </div>
                    <div class="grid-item--text">
                        Благодаря своей прочности алюминиевые профили используются для изготовления окон больших размеров с
                        тяжелыми стеклопакетами.
                    </div>
                </div>
                <div class="advantage-grid--item">
                    <div class="grid-item--header">
                        <div class="grid-item--icon advantage-icons-2"></div>
                        Энергоэффективность
                    </div>
                    <div class="grid-item--text">
                        В помещении с алюминиевыми окнами в любое время года поддерживается комфортная температура и
                        оптимальный микроклимат. Конструкции не промерзают даже в сильный мороз, позволяя экономить на
                        отоплении
                    </div>
                </div>
                <div class="advantage-grid--item">
                    <div class="grid-item--header">
                        <div class="grid-item--icon advantage-icons-3"></div>
                        Максимум солнечного света
                    </div>
                    <div class="grid-item--text">
                        При изготовлении окон используются алюминиевые профили с минимальной видимой шириной и скрытым
                        креплением заполнения. За счет этого дома с такими окнами смотрятся современно и всегда наполнены
                        естественным светом.
                    </div>
                </div>
                <div class="advantage-grid--item">
                    <div class="grid-item--header">
                        <div class="grid-item--icon advantage-icons-4"></div>
                        Разнообразие видовобработки профилей
                    </div>
                    <div class="grid-item--text">
                        Внутренняя и внешняя части оконных рам могут быть окрашены в любой из цветов по шкале RAL. Возможны
                        также комбинация цветов, анодирование или декорирование профиля
                    </div>
                </div>
                <div class="advantage-grid--item">
                    <div class="grid-item--header">
                        <div class="grid-item--icon advantage-icons-5"></div>
                        Долговечность и экологичность
                    </div>
                    <div class="grid-item--text">
                        Алюминиевые окна подходят для эксплуатации даже в условиях агрессивной внешней среды — они устойчивы к
                        коррозии, ультрафиолету и перепадам температур. Срок их службы от 50 лет.
                    </div>
                </div>
                <div class="advantage-grid--item">
                    <div class="grid-item--header">
                        <div class="grid-item--icon advantage-icons-6"></div>
                        Работа с компанией Alvipi
                    </div>
                    <div class="grid-item--text">
                        <ul>
                            <li>1. Бесплатно (Замер, расчет, логистика, монтаж)</li>
                            <li>2. Поддержание связи 24/7 </li>
                            <li>3. Прозрачный рабочий процесс</li>
                            <li>4. Гарантия 10 лет</li>
                            <li>5. Сервисное обслуживание в течении 3 лет после ввода в эксплуатацию</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- <div class="full-container highlight-line">Корпоративным клиентам</div> -->
        </div>

        <div class="default-page premium-page" data-aos="fade-in">
            <div class="container header">Premium<br />аллюминий</div>
            <div class="container">
                <div class="premium-page-content">
                    <div class="premium-page--description">
                        Теплая изящная древесина обеспечивает домашний уют, а прочный<br />алюминий защищает от дождя, снега и
                        холода. Соединяясь вместе, они<br />создают надежное и стильное окно, которое идеально впишется в<br />
                        выбранный Вами дизайн оформления.
                    </div>
                    <div class="premium-page--picture premium-page--picture-aluminium" id="premium-profile">
                        <div class="premium-page--navigator first-navigator">
                            <span>+</span>
                        </div>
                        <div class="premium-page--navigator second-navigator">
                            <span>+</span>
                        </div>
                        <div class="premium-page--navigator third-navigator">
                            <span>+</span>
                        </div>
                        <div class="premium-page--navigator forth-navigator">
                            <span>+</span>
                        </div>
                    </div>

                    <div class="navigator-popup first-popup">
                        <!-- <section class="popup-close-btn">x</section> -->
                        <div>
                            Почти незаметные, гладкие уплотнители из синтетического каучука (ЭПДМ): лёгкие в уходе, устойчивые
                            к выцветанию и с большим сроком службы (в отличие от силикона, как альтернативы, который желтеет и
                            требует особого ухода во время чистки окна).
                        </div>
                        <div onclick="showModal()">Хочу также</div>
                    </div>
                    <div class="navigator-popup second-popup">
                        <!-- <section class="popup-close-btn">x</section> -->
                        <div>
                            Более энергоэффективный двухкамерный стеклопакет имеет теплоизоляционную вставку собственной
                            разработки, специальное заполнение газом, двухстороннее невидимое покрытие и термически
                            разделенные дистанционные рамки.
                        </div>
                        <div onclick="showModal()">Хочу также</div>
                    </div>
                    <div class="navigator-popup third-popup">
                        <!-- <section class="popup-close-btn">x</section> -->
                        <div>
                            Термически разделённые спейсеры в стеклопакете - это улучшенное энергосбережение, больше комфорта
                            вблизи окна и значительно меньше конденсата в холодные месяцы
                        </div>
                        <div onclick="showModal()">Хочу также</div>
                    </div>
                    <div class="navigator-popup forth-popup">
                        <!-- <section class="popup-close-btn">x</section> -->
                        <div>Очень изящный профиль - меньше рамы, больше стекла, больше света</div>
                        <div onclick="showModal()">Хочу также</div>
                    </div>
                </div>

                <div class="premium-arrows">
                    <button class="arrow premium-prev-arrow">&larr;</button>
                    <div class="premium-arrows-caption"></div>
                    <button class="arrow premium-next-arrow">&rarr;</button>
                </div>

                <div class="mobile-navigator-popup">
                    <!-- <section class="popup-close-btn">x</section> -->
                    <div>
                        Почти незаметные, гладкие уплотнители из синтетического каучука (ЭПДМ): лёгкие в уходе, устойчивые
                        к выцветанию и с большим сроком службы (в отличие от силикона, как альтернативы, который желтеет и
                        требует особого ухода во время чистки окна).
                    </div>
                    <div onclick="showModal()">Хочу также</div>
                </div>
                <div class="mobile-navigator-popup">
                    <!-- <section class="popup-close-btn">x</section> -->
                    <div>
                        Более энергоэффективный двухкамерный стеклопакет имеет теплоизоляционную вставку собственной
                        разработки, специальное заполнение газом, двухстороннее невидимое покрытие и термически
                        разделенные дистанционные рамки.
                    </div>
                    <div onclick="showModal()">Хочу также</div>
                </div>
                <div class="mobile-navigator-popup">
                    <!-- <section class="popup-close-btn">x</section> -->
                    <div>
                        Термически разделённые спейсеры в стеклопакете - это улучшенное энергосбережение, больше комфорта
                        вблизи окна и значительно меньше конденсата в холодные месяцы
                    </div>
                    <div onclick="showModal()">Хочу также</div>
                </div>
                <div class="mobile-navigator-popup">
                    <!-- <section class="popup-close-btn">x</section> -->
                    <div>Очень изящный профиль - меньше рамы, больше стекла, больше света</div>
                    <div onclick="showModal()">Хочу также</div>
                </div>
            </div>
        </div>

        <div class="default-page calculate-page" data-aos="fade-in" id="fifth-page">
            <div class="container header">
                Расчитайте остекление под свой дом
                <div class="underline"></div>
            </div>

            <div class="container content">
                <div class="content-left">
                    <div class="calculate-block">
                        <div class="inner-header">1. Выберите тип продукции</div>
                        <div class="calculate-block-grid">
                            <div id="calculate-doors" class="calculate-block--item calculate-block--item__active">
                                <div class="figure"></div>
                                <div class="item-caption">
                                    Двери
                                    <div class="underline"></div>
                                </div>
                            </div>
                            <div id="calculate-windows" class="calculate-block--item">
                                <div class="figure"></div>
                                <div class="item-caption">
                                    Окна
                                    <div class="underline"></div>
                                </div>
                            </div>
                            <div id="calculate-parallel" class="calculate-block--item">
                                <div class="figure"></div>
                                <div class="item-caption">
                                    Параллельно-сдвижные системы
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calculate-block">
                        <div class="inner-header">2. введите данные и получите расчет</div>
                        <div class="calculate-block--form-grid">
                            <input type="text" id="calculateWidth" placeholder="Ширина, М" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" />
                            <input type="text" id="calculateHeight" placeholder="Высота, М" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" />
                            <input type="text" placeholder="Введите Ваше имя" id="" />
                            <input type="text" placeholder="Введите Ваш телефон" id="" />
                        </div>
                    </div>

                    <div>
                        <button class="btn calculate-btn" id="calculate-btn">Получить консультацию</button>
                    </div>
                </div>
                <div class="content-right">
                    <div class="calculate-figure calculate-doors"></div>
                    <div class="calculate-total">
                        <div class="calculate-total--item">
                            <div class="__total">Итого:</div>
                            <div id="calculate-total-price" class="__price">0</div>
                        </div>
                        <div class="calculate-total--item">
                            <div class="__total">Доставка:</div>
                            <div class="__price">0 KZT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-page leave-request-page">
            <div class="container leave-request">
                <div class="leave-request--right">
                    <div class="header">Оставьте заявку</div>
                    <div class="caption">
                        Получите консультацию наших менеджеров <br />по модельным рядам и продукции компаниии
                    </div>

                    <div class="leave-request--form">
                        <?php echo do_shortcode('[contact-form-7 id="61" title="Оставьте заявку"]'); ?>
                    </div>
                </div>
                <div class="leave-request--left">
                    <figure class="figure"></figure>
                </div>
            </div>
        </div>

        <div class="default-page full-container projects-page" id="sixth-page">
            <div class="projects">
                <div class="container navigation">
                    <button class="arrow nav-prev-arrow">&larr;</button>
                    <button class="arrow nav-next-arrow">&rarr;</button>
                </div>
                <div class="slider-projects">
                    <?php foreach ($projects as $key => $value) : ?>
                        <div class="project" style="background-image: url(' <?= $value['image'] ?>')">
                            <div class="container">
                                <div class="description">
                                    <div name="project-<?= $key ?>" class="caption">
                                        <?= $value['description'] ?>
                                    </div>
                                    <div name="project-hide-<?= $key ?>" class="header"><?= $value['name'] ?></div>
                                    <button name="project-hide-<?= $key ?>" onClick="showProjectDesctiption('<?= $key ?>')" class="btn">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="default-page client-reviews-page" data-aos="fade-in">
            <div class="container header">Наша <br /><span class="branded-text">команда</span></div>

            <div class="container">
                <div class="employees">
                    <?php foreach ($employees as $employee) : ?>
                        <div>
                            <div class="employee-wrapper">
                                <div class="employee-photo" style="background-image: url(<?= $employee['image'] ?>);"></div>
                                <div class="employee-data">
                                    <div class="employee-name"><?= $employee['name'] ?></div>
                                    <div class="employee-position"><?= $employee['position'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="reviews-arrows">
                    <button class="arrow prev-arrow">&larr;</button>
                    <button class="arrow next-arrow">&rarr;</button>
                </div>
            </div>
        </div>

        <div class="default-page contact-us-page" data-aos="fade-in">
            <div class="container">
                <div class="header">свяжитесь с нами</div>
            </div>

            <div class="container contact-us">
                <div class="contact-us--map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.998982347412!2d76.9054398151119!3d43.230480987680544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883692862599e39%3A0x7df68a5dcba5252!2z0LHRg9C7LiDQkdGD0YXQsNGALdCW0LjRgNCw0YMgNjIsINCQ0LvQvNCw0YLRiyAwNTAwMDA!5e0!3m2!1sru!2skz!4v1669569856534!5m2!1sru!2skz" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-us--contacts">
                    <div class="our-address">
                        <div class="our-address-header">наш адрес</div>
                        <div class="our-address-caption">
                            г. Алматы <br />
                            ул. Бухар Жырау<br />
                            офис 62 Б
                        </div>
                    </div>

                    <div class="our-address-socials">
                        <div class="socials">
                            <?php foreach ($socials as $social) : ?>
                                <div onclick="openSocial('<?= $social['link'] ?>')" class="icon" style="background-image: url('<?= $social['icon'] ?>')"></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="call-us">
                        Позвонить нам
                        <div class="send-request-icon"></div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="default-page footer">
            <div class="container">
                <div class="footer--logo">ALVIPI</div>
                Деревянные и алюминиевые<br />окна в Алматы
            </div>

            <div class="container">
                <div class="footer-container">
                    <div class="footer-container--column">
                        <div class="footer-container--header">навигация</div>
                        <div class="footer-container--content">
                            <ul>
                                <li id="toMainPage">Главная</li>
                                <li id="toSecondPage">Продукция</li>
                                <li id="toThirdPage">О компании</li>
                                <li id="toForthPage">Преимущества</li>
                                <li id="toFifthPage">Калькулятор</li>
                                <li id="toSixthPage">Проекты</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-container--column">
                        <div class="footer-container--header">контакты</div>
                        <div class="footer-container--content upper">
                            +7 777 384 01 25 — НОМЕР<br />
                            ТЕЛЕФОНА ДЛЯ МЕССЕНДЖЕРОВ <br /><br /><br />
                            ALVIPI@GMAIL.COM
                        </div>

                        <div class="footer-container--header ind-solutions upper">Индивидуальные решения</div>
                    </div>
                    <div class="footer-container--column">
                        <div class="footer-container--header">ИНН / БИН</div>
                        <div class="footer-container--content">210240027428</div>

                        <div class="footer-container--header jur-address">Юр. Адрес</div>
                        <div class="footer-container--content upper">Г. АЛМАТЫ<br />Ул.Бухар Жырау<br />офис 62 Б</div>
                    </div>
                </div>
            </div>

            <div class="container footer-copyright">
                2023 © Все права защищены
                <div class="socials">
                    <?php foreach ($socials as $social) : ?>
                        <div onclick="openSocial('<?= $social['link'] ?>')" class="icon" style="background-image: url('<?= $social['icon'] ?>')"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </footer>

        <div class="modal" id="modal">
            <div class="modal-content animate__animated animate__fadeInUp">
                <div class="modal-close-btn">x</div>
                <div class="header">ALVIPI</div>
                <div class="header">
                    Получить исчерпывающую консультацию <br />по дерево-алюминиевым окнам
                    <div class="underline"></div>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="62" title="Форма модалка"]') ?>
            </div>
        </div>
    </main>

    <div hidden>
        <div id="profiles">
            <?php foreach ($profiles as $profile) : ?>
                <div data-url="<?= $profile['image'] ?>" data-caption="<?= $profile['name'] ?>"></div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="<?= get_template_directory_uri() ?>/assets/scripts/jquery-3.6.1.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/scripts/slick.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/scripts/jquery.scrollTo.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/scripts/aos.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/scripts/jquery.waypoints.min.js"></script>
    <?php do_action('add_aluminium_scripts') ?>
    <?php wp_footer() ?>
</body>

</html>
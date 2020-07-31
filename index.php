<!Doctype html>
<html lang="ru">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    <meta name="referrer" content="origin" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="faade8a2fe212fc8" />
    <title>Мечта Тур - Главная</title>
    <meta name="description" content="Все начинается с мечты">
    <meta name="keywords" content="Мечта Тур Вологда Мечта тур">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!--<link rel="stylesheet" href="textolite/textolite.css">-->
    <!-- owl carousel CSS -->
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/imagehover.min.css">
    <link rel="stylesheet" href="css/imagehover.css">
    <link href="https://fonts.googleapis.com/css?family=Alice&display=swap" rel="stylesheet">

    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154497526-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-154497526-1');
    </script>



    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(56352964, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/56352964" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body class="index">


    <?php include_once "navbar.php"; ?>
    <!-- Header part end-->
    <!--slide-->
    <div class="loaderArea">
        <div class="loader">

        </div>
    </div>

    <div class="jumbotron-fluid">
        <div class="carousel slide carousel-fade" data-ride="carousel" id="slides">
            <ol class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item main_slide active">
                    <img src="img/vologdaN.jpg" alt="" class="d-block carousel_img" data-interval="1000">
                    <div class="carousel-caption animated slideInUp">
                        <h2 class="h2 animated rotateInDownRight">Наши туры</h2>
                        <h2 class="h2 animated rotateInDownRight">Все начинается с мечты</h2>
                        <button class="btn btn-rounded btn blue-gradient btn-md "><a href="excursions.php">Подробнее</a></button>
                    </div>
                </div>
                <div class="carousel-item main_slide">
                    <img src="img/казань.png" alt="" class="d-block carousel_img" data-interval="1000">
                    <div class="carousel-caption">
                        <h2 class="h2 animated rotateInDownRight">Тур из вашего города</h2>
                        <h2 class="h2 animated rotateInDownRight"></h2>
                        <button class="btn btn-rounded blue-gradient btn-orange btn-md "><a href="excursions.php">Подробнее</a></button>
                    </div>
                </div>
                <div class="carousel-item main_slide">
                    <img src="img/Buses/Np-14-2.JPG" alt="" class="d-block carousel_img" data-interval="1000">
                    <div class="carousel-caption">
                        <h2 class="h2 animated rotateInDownRight">Автопарк</h2>
                        <h3></h3>
                        <button class="btn btn-rounded blue-gradient btn-orange btn-md "><a href="buses.php">Подробнее</a></button>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slides" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slides" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>

        </div>
    </div>
    <!--ХИТЫ ПРОДАЖ-->

    <div class="container-fluid my-3">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-center">
                    <h4 class="h4 text-dark">Хиты Продаж</h4>
                    <h4 class="h4 text-dark">Предлагаем поездки по всей России и зарубеж</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6 mb-3">
                <!-- Card -->
                <div class="card bg-light h-100 shadow">

                    <div class="view overlay zoom">
                        <img class="card-img sea_tours_img w-100 shadow" src="img/hockey1.jpg" alt="Card image cap">
                        <a href="Hockey_i_tri_stolitcy.php">
                            <div class="mask flex-center"></div>
                        </a>
                    </div>

                    <div class="card-body sale d-inline-block">

                        <h5 class="h5 card-title text-dark mb-1">

                            «Хоккей и три столицы: Казань, Йошкар-Ола и
                            Чебоксары»

                            </h4>

                            <a href="Hockey_i_tri_stolitcy.php">Подробнее</a>

                    </div>

                </div>

            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 mb-3">

                <div class="card bg-light h-100 shadow">

                    <div class="view overlay zoom">
                        <img class="card-img  sea_tours_img shadow" src="img/карелия.jpg" alt="Card image cap">
                        <a href="Kareliya.php">
                            <div class="mask flex-center"></div>
                        </a>
                    </div>

                    <div class="card-body sale">
                        <h4 class="h4 card-title text-dark">Необыкновенная Карелия</h4>
                        <a href="Kareliya.php">Подробнее</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 mb-3">
                <!-- Card -->
                <div class="card bg-light h-100 shadow">

                    <div class="view overlay zoom">
                        <img class="card-img sea_tours_img w-100 shadow" src="img/Matrona_.jpg" alt="Card image cap">
                        <a href="Matrona.php">
                            <div class="mask flex-center"></div>
                        </a>
                    </div>

                    <div class="card-body sale d-inline-block">

                        <h4 class="h4 card-title text-dark ">На поклон к cвятой Матроне</h4>

                        <a href="Matrona.php">Подробнее</a>

                    </div>

                </div>

            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 mb-3">

                <div class="card bg-light h-100 shadow">

                    <div class="view overlay zoom">
                        <img class="card-img  sea_tours_img shadow" src="img/sugorie3.jpg" alt="Card image cap">
                        <a href="Piter_festival.php">
                            <div class="mask flex-center"></div>
                        </a>
                    </div>

                    <div class="card-body sale d-inline-block">

                        <h4 class="h4 card-title text-dark">«Чудеса Нового года в Сугорье»</h4>

                        <a href="Sugorie_ng.php">Подробнее</a>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--О НАС-->

    <div class="container-fluid my-4">
        <h4 class="black-text h3 text-center mb-3"><strong>Календарь поездок</strong></h4>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-hover table-sm  bg-light border-dark text-center shadow">
                <thead>
                    <tr>
                        <th scope="col">Даты</th>
                        <th scope="col">Туры</th>
                        <th scope="col">Стоимость</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="border-dark">
                    <tr>
                        <th scope="row">28.12.2019</th>
                        <td><a href="Matrona.php">"На поклон к святой Матроне"</a></td>
                        <td>1800 руб</td>
                    </tr>
                    <tr>
                        <th scope="row">29.12.2019</th>
                        <td><a href="Ivanovo.php">Шоп-тур в текстильные центры г. Иваново "РИО" и "ПРОФИ"</a></td>
                        <td>бесплатно</td>
                    </tr>
                    <tr>
                        <th scope="row">01.01 - 04.01.2020</th>
                        <td><a href="Kazan.php">Экскурсионный тур<br>
                                «Две столицы: Казань и Йошкар-Ола»</a></td>
                        <td>от 7800 руб</td>
                    </tr>
                    <tr>
                        <th scope="row">01.01 - 04.01.2020</th>
                        <td><a href="novogonyaa_skazka_v_Karelii.php">Экскурсионный тур<br>
                                «Новогодняя сказка в Карелии»</a></td>
                        <td>от 7150 руб</td>
                    </tr>
                    <tr>
                        <th scope="row">04.01 - 07.01.2020</th>
                        <td><a href="Hockey_i_tri_stolitcy.php">Событийно - экскурсионный тур<br> «Хоккей и три столицы: Казань, Йошкар-Ола и Чебоксары»</a></td>
                        <td>от 7600 руб</td>
                    </tr>
                    <tr>
                        <th scope="row">04.01.2020</th>
                        <td><a href="Matrona.php">"На поклон к святой Матроне"<br>"Новогодняя Москва" и "Храмы с и монастыри с чудотворными иконами"</a></td>
                        <td>1800 руб</td>
                    </tr>
                    <tr>
                        <th scope="row">04.01 - 07.01.2020</th>
                        <td><a href="Tri_stolitci.php">Экскурсионный тур<br>
                                «Три столицы: Казань, Йошкар-Ола и Чебоксары»</a></td>
                        <td>от 7600 руб</td>
                    </tr>
                    <!--<tr>-->
                    <!--  <th scope="row">06.01 - 07.01.2020</th>-->
                    <!-- <td>Встреча Рождества в Троице-Сергиевой Лавре</td>-->
                    <!--  <td></td>-->
                    <!--</tr>-->
                    <tr>
                        <th scope="row">11.01.2020</th>
                        <td><a href="Matrona.php">"На поклон к святой Матроне"<br>"Новогодняя Москва" и "Храмы с и монастыри с чудотворными иконами"</a></td>
                        <td>1800 руб</td>
                    </tr>
                    <tr>
                        <th scope="row">18.01 - 19.01.2020</th>
                        <td>Крещение Господне и Крещенские купания</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" class="mb-0">24.02 - 01.03.2020</th>
                        <td>Празднуем Широкую Масленицу.<br>"Золовкины встречи" и "Заигрыши"</td>
                        <td></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid text-center card-image h1-responsive main_us mb-3 mt-3" style="background-image: url(img/about-us-1.png);">
    <div class="py-3 px-4">
        <div>
            <h3 class="text-center h2 my-5 pt-4" style="color: #fafff3">О наc</h3>
            <h5 class="h5 pb-3 mx-1" style="color: rgb(248,254,248)">Туристическая компания является частью крупного холдинга с собственным автопарком и зарекомендовала
                себя как надёжная у партнёров и туристов
            </h5>
            <a href="about_us.php" class="btn waves-effect btn-primary btn-md mb-5"><i class="fas fa-clone left"></i>Подробнее</a>
        </div>
    </div>
    </div>

    <!--СЕРВИСЫ-->

    <div class="container-fluid py-3 my-2 Tour_img d-block text-center" style="background-image: url(img/about-us-2.png); background-size: cover">
        <a href="Services.php" class="mt-5 h4" style="color: #fafff3">Туры и услуги</a>
        <h5 class="h5 my-2 text-white mb-5 mt-5">
            Мы предоставляем полный спектр услуг туристического агенства и туроператора по внутреннему туризму
            :<br>большой выбор экскурсионных автобусных туров на собственном транспорте,подбор и бронирование
            туров по всему миру, страхование, аренда транспорта, бронирование санаториев и гостиниц, помощь
            в визовых вопросах и многое другое...</h5>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                <a href="insurance.php"><img src="https://img.icons8.com/dusk/64/000000/guarantee.png" alt=""></a>
                <h5>Страхование</h5>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                <a href="excursions.php"><img src="https://img.icons8.com/dusk/64/000000/conference.png" alt=""></a>
                <h5>Групповые и индивидуальные
                    экскурсионные туры
                </h5>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="sea_tours.php"><img src="https://img.icons8.com/cotton/64/000000/school-bus-2.png" alt=""></a>
                <h5>
                    Автобусные туры на Черноморские курорты
                </h5>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="excursions.php"><img src="https://img.icons8.com/dusk/64/000000/click-and-collect.png" alt=""></a>
                <h5>
                    Бронирование пакетных туров зарубеж
                </h5>
            </div>
        </div>
    </div>





    <!-- НИЖНЯЯ ПАНЕЛЬ-->
    <?php include_once "footer.php"; ?>


    <!-- footer part end-->
    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <script>
        $(window).on('load', function() {
            $preloader = $('.loaderArea'),
                $loader = $preloader.find('.loader');
            $loader.fadeOut();
            $preloader.delay(250).fadeOut('slow');
        });
    </script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/main.js"></script>
    <script src="js/modules/scrolling-navbar.js"></script>



</body>
<!-- Bookform widget -->

</html>
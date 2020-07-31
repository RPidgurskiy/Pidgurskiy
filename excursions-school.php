<!Doctype html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Школьные туры</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/imagehover.min.css">
    <link rel="stylesheet" href="css/imagehover.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="index">
    <!--::header part start::-->
    <?php include_once "navbar.php"; ?>
    <!-- Header part end-->


    <div class="modal fade pb-3 mb-3" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header mb-2">
                    <h4 class="modal-title rounded w-100 font-weight-bold" style="color: #0e477d">Регистрация</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--modal registr-->
                <div class="container">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Войти</button>
                        <button type="submit" class="btn btn-primary mb-4">Регистрация</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid p-5 excursions_card" style="background-image: url(img/modern.jpg);background-size: cover;">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="domovenok_fedya.php"><img src="img/domovenok2.jpg" alt="Новогодний тур  «Кто похитил домовёнка Федю?" class="card-img-bottom img-thumbnail p-0  sea_tours_img"></a>
                            <h5 class="h5 pt-3 text-center"><a href="domovenok_fedya.php">Новогодний тур «Кто похитил домовёнка Федю?»</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="kladovaya_deda_moroza.php"><img src="img/semenkovo.jpg" alt="Кладовая секретов Деда Мороза" class="card-img-bottom img-thumbnail p-0  sea_tours_img"></a>
                            <h5 class="pt-3 h5 text-center"><a href="kladovaya_deda_moroza.php">«Кладовая секретов Деда Мороза»</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="novogodnie_vecherki.php"><img src="img/vecherki.jpg" alt="Новогодние вечёрки" class="p-0 card-img-bottom img-thumbnail  sea_tours_img"></a>
                            <h5 class="pt-3 h5 text-center"><a href="novogodnie_vecherki.php">«Новогодние вечёрки»</a></h5>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid p-5 excursions_card" style="background-image: url(img/modern.jpg);background-size: cover;">
        <h2 class="h2 text-center py-2" style="text-shadow: 0 1px 1px #6ee0a7; color: white">Для детей и школьников</h2>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="Uglich-mishkin.php"><img src="img/Uglich-mishkin.jpg" alt="От Углича до Мышкина" class="card-img-bottom img-thumbnail p-0  sea_tours_img"></a>
                            <h5 class="h5 pt-3 text-center"><a href="Uglich-mishkin.php">Экскурсионно-познавательный тур «От Углича до Мышкина»</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="Baba-yaga.php"><img src="img/Baba-yaga.jpg" alt="Там где сказка станет былью… В гости к Бабе-Яге" class="card-img-bottom img-thumbnail p-0  sea_tours_img"></a>
                            <h5 class="pt-3 h5 text-center"><a href="Baba-yaga.php">Экскурсионно-развлекательный тур
                                    <br> «Там где сказка станет былью… В гости к Бабе-Яге»</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="Darvinskiy.php"><img src="img/Darvinskiy1.jpg" alt="в Дарвиновском музее в Москве" class="p-0 card-img-bottom img-thumbnail  sea_tours_img"></a>
                            <h5 class="pt-4 h5 text-center"><a href="Darvinskiy.php">
                                    Экскурсионно-развлекательный тур
                                    Проведи день
                                    <br> в Дарвиновском музее в Москве!</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <!--        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 pb-2">-->
            <!--            <div class="card bg-dark h-100">-->
            <!--                <div class="card-body">-->
            <!--                    <div class="card-header-pills">-->
            <!--                        <img src="img/Darvinskiy1.jpg" alt="" class="card-img-bottom img-thumbnail p-0">-->
            <!--                        <h5 class="pt-4 h5 text-center"><a href="Darvinskiy_museum.html">-->
            <!--                            Экскурсионно-развлекательный тур-->
            <!--                            Проведи день <br> в Дарвиновском музее в Москве!</a></h5>-->
            <!--                    </div>-->

            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
        </div>
    </div>
    <!--2 part-->
    <div class="container-fluid p-5 excursions_card" style="background-image: url(img/modern.jpg); background-size: cover;">
        <h2 class="h2 text-center py-2" style="text-shadow: 0 1px 1px #6ee0a7; color: white">Экскурсионные туры «Усадьбы Вологодчины»</h2>
        <h6 class="h6 text-center py-2" style="text-shadow: 0 1px 1px #6ee0a7; color: white">
            Мы предлагаем несколько вариантов экскурсионных туров по историко-архитектурным ансамблям провинциальной усадебной культуры – посещение известных имений Вологодчины.
            <br> Преимущество данных экскурсионных программ в сочетании своей непродолжительности по времени и полноценной историко-тематической программы тура.
            <br> Каждая из усадеб имеет свою историю, связанную с известными людьми Вологодчины, и тематическую музейную экспозицию.
            <br> Варианты программ прекрасно подходят к темам уроков по краеведению и истории России, а выбор всегда за Вами.
        </h6>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="Dvoryanskaya_zhizn_Volodgy.php"><img src="img/Dvoryanskayazhizn1.jpg" alt="Дворянская жизнь Вологды и ее окрестностей" class="card-img-bottom img-thumbnail p-0 sea_tours_img"></a>
                            <h5 class="h5 pt-3 text-center"><a href="Dvoryanskaya_zhizn_Volodgy.php">Дворянская жизнь Вологды и ее окрестностей</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="Usadba_dvoryanskogo_roda.php"><img src="img/Usadba1.jpg" alt="Усадьба дворянского рода Брянчаниновых" class="card-img-bottom img-thumbnail p-0  sea_tours_img"></a>
                            <h5 class="h5 pt-3 text-center"><a href="Usadba_dvoryanskogo_roda.php">«Усадьба дворянского рода Брянчаниновых в с. Покровское»</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="Usadba_kotelnikovo.php"><img src="img/kotelnikovo2.jpg" alt="Усадьба Котельниково. Дом-музей инженера-авиаконструктора А.Ф. Можайского" class="card-img-bottom img-thumbnail p-0  sea_tours_img"></a>
                            <h5 class="h5 pt-3 text-center"><a href="Usadba_kotelnikovo.php">«Усадьба Котельниково. Дом-музей инженера-авиаконструктора А.Ф. Можайского»</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="Usadba_spaskoe_kurkino.php"><img src="img/spaskoe_kurkino4.jpg" alt="Усадьба Спасское-Куркино помещиков Резановых-Андреевых" class="p-0 card-img-bottom img-thumbnail  sea_tours_img"></a>
                            <h5 class="pt-4 h5 text-center"><a href="Usadba_spaskoe_kurkino.php">«Усадьба Спасское-Куркино помещиков Резановых-Андреевых»</a></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <div class="card-header-pills">
                            <a href="Gorka_dvoryan.php"><img src="img/galskih2.jpg" alt="Усадьба «Горка» дворян Гальских – величественный барский дом" class="card-img-bottom img-thumbnail p-0 sea_tours_img"></a>
                            <h5 class="pt-4 h5 text-center"><a href="Gorka_dvoryan.php">«Усадьба «Горка» дворян Гальских – величественный барский дом XIX в.»</a></h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid w-75 py-3 text-center">
        <h5 style="color: #0e477d;" class="h5 py-3">Туры по Вологде</h5>
        <div class="row">
            <div class="col-xl-8">
                <h6 style="color: #0e477d">Стоимость пешеходно-автобусного тура:</h6>
                <hr class="w-75 " style="background-color:red;">
                <ul class="list-group">
                    <li class="list-group-item border-primary">при группе 30+2 б/п: 300 руб/чел;</li>
                    <li class="list-group-item border-primary">при группе 25+2 б/п: 350руб/чел;</li>
                    <li class="list-group-item border-primary">при группе 20+2 б/п: 400 руб/чел;</li>
                    <li class="list-group-item border-primary">при группе 20+2 б/п: 400 руб/чел;</li>
                    <li class="list-group-item border-primary">при группе 15+1 б/п: 400 руб/чел;</li>
                    <li class="list-group-item border-primary">другие группы – под запрос.</li>
                </ul>
            </div>

            <div class="col-xl-4">
                <h5 style="color: #0e477d">В стоимость входит:</h5>
                <hr class="w-75 " style="background-color:red;">
                <ul class="list-group">
                    <li class="list-group-item border-primary">экскурсионное обслуживание профессиональным гидом;</li>
                    <li class="list-group-item border-primary">транспортное обслуживание (собственные комфортабельные автобусы).</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-3 mb-1 bg-light text-center">
        <div class="row">
            <div class="col-md-4 col-sm-4 border py-3">
                <h5 class="" style="color: #0e477d">Туристический маршрут: <br>«Вологде, где,где,где»?</h5>
                <hr class="w-75" style="background-color:red;">
                <p class="ex_text">Ознакомление с городом. История города. Почему Вологда так и не стала столицей России.
                    Сможете оценить архитектурный ансамбль Кремля и Софийского Собора, а так же красоту
                    резного палисада, который прославил город Вологду, почему буква «О» в Вологодском говоре?
                    Деревянное зодчество в постройках купеческих и дворянских сооружений. Соборная горка, как
                    главная часть набережной реки Вологды.</p>
            </div>
            <div class="col-md-4 col-sm-4 border py-3">
                <h5 style="color: #0e477d">Туристический маршрут <br>«Вологодские чудеса»</h5>
                <hr class="w-75" style="background-color:red;">
                <p class="ex_text">Стрит–арт объекты, как альтернативное знакомство с городом. Оценим такие памятники как
                    «Нулевой километр», первый электрический фонарь, дерево-копилка, птица-говорун, дверь в ...,
                    скамья «Посидим-поокаем», а так же знаменитой букве «О» и другие не обычные объекты с
                    возможностью фотосессии.</p>
            </div>
            <div class="col-md-4 col-sm-4 border py-3">
                <h5 style="color: #0e477d">Туристический маршрут <br>«Перекрёстки Вологды»</h5>
                <hr class="w-75 " style="background-color:red;">
                <p class="ex_text">Поездки автобусами, ознакомление с улицами в названии которых запечатлена история страны.
                    Принцып и обоснование наименований улиц. Узнаете по каким улицам был проложен первый
                    автобусный маршрут г. Вологды. Школьникам предоставляется возможность ознакомления с
                    районом, где находится их школа.</p>
            </div>

            <div class="col-md-4 col-sm-4 border py-3">
                <h5 style="color: #0e477d">Туристический маршрут <br>«Путь истории»</h5>
                <hr class="w-75" style="background-color:red;">
                <p class="ex_text">Увлекательное автобусное путешествие по городу, истории о людях и событиях, память о которых
                    увековечена памятниками и мемориалами (или увековечена в камне).</p>
            </div>
            <div class="col-md-4 col-sm-4 border py-3">
                <h5 style="color: #0e477d">Туристический маршрут <br>«Легендарный Насон – город», мифы и факты.</h5>
                <hr class="w-75 " style="background-color:red;">
                <p class="ex_text">История Вологды иная версия с её мистическими событиями полными тайн и курьёзов,
                    необычных совпадений, которые так и остались неразгаданными. Байки, фольклор, исторические
                    факты помогут узнать Вологду в неожиданном свете.</p>
            </div>
            <div class="col-md-4 col-sm-4 border py-3">
                <h5 style="color: #0e477d">Туристический маршрут <br>«Вологда и Великая Отечественная Война»</h5>
                <hr class="w-75 " style="background-color:red;">
                <p class="ex_text">Автобусное ознакомленные с одним из тяжёлых периодов в истории страны в отдельно взятом
                    городе, и как вклад земляков принёс Победу – одну на всех... Вечный огонь, обелиск славы,
                    почему Вологда - город-госпиталь и сколько он видел блокадников из Ленинграда.</p>
            </div>
            <div class="col-md-4 col-sm-4 border py-3">
                <h5 style="color: #0e477d">Туристический маршрут <br>«Крылатая Вологда»</h5>
                <hr class="w-75 " style="background-color:red;">
                <p class="ex_text">История вологжан–авиаконструкторов Сергея Ильюшина и лётчика-космонавта Павла Беляева.
                    Памятник ИЛ -28 У. Парк победы и музей под открытым небом военной техники, где увидим
                    МиГ-29 и Ми-8.</p>
            </div>
            <div class="col-md-4 col-sm-4 border py-3">
                <h5 style="color: #0e477d">Туристический маршрут <br>«Вологда и герои»</h5>
                <hr class="w-75" style="background-color:red;">
                <p class="ex_text">Имена людей, их подвиги. Матрос Сергей Преминин. Мемориал памяти воинам-
                    интернациолистам, памятник сотрудникам ОВД, ликвидаторам последственной аварии ЧАЭС.</p>
            </div>
            <div class="col-md-4 col-sm-4 border py-3">
                <h5 style="color: #0e477d">Туристический маршрут <br>«Вологда в поэзии».</h5>
                <hr class="w-75" style="background-color:red;">
                <p class="ex_text">
                    История Вологды и её литературных самородков.
                    Маяковский, Герцен, Гоголь, Горький - поэты и писатели, улицы в честь которых названы в
                    любом городе и Вологда не исключение. Но что Вы знаете о вологодских писателях: Рубцове,
                    Яшине, Астафьеве, Белове?
                    Посетим памятники литераторам и ознакомимся с их творчеством
                </p>
            </div>

        </div>
    </div>


    <!-- footer part start-->
    <?php include_once "footer.php"; ?>

    <!-- footer part end-->
    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/modules/scrolling-navbar.js"></script>

</body>

</html>
<!Doctype html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Экскурсионные туры</title>
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
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
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
                    <h2 class="modal-title " id="exampleModalLabel"></h2>
                    <p style="color: #0c3e72" class=bold>Регистрация</p>
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

    <div class="container-fluid p-3 excursions_card" style="background-image: url(img/modern.jpg); background-size: cover;">
        <!-- Карточка с card-img-top -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="Hockey_i_tri_stolitcy.php"><img class="card-img exc_img" src="img/hockey1.jpg" alt="экскурсионный тур «Хоккей и три столицы: Казань, Йошкар-Ола и
Чебоксары»"></a>
                    <h5 class="h5 text-center py-3"><a href="Hockey_i_tri_stolitcy.php">

                            Событийно - экскурсионный тур «Хоккей и три столицы: Казань, Йошкар-Ола и
                            Чебоксары»

                        </a></h5>
                    <!-- Текстовый контент (над изображением) -->
                </div><!-- Конец карточки -->
            </div> <!-- Карточка с card-img-top -->

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="Matrona.php"><img class="card-img exc_img" src="img/Matrona_.jpg" alt="На поклон к святой Матроне Московской"></a>
                    <h5 class="h5 text-center py-3"><a href="Matrona.php">На поклон к святой Матроне Московской</a></h5>
                    <!-- Текстовый контент (над изображением) -->
                </div><!-- Конец карточки -->
            </div>

            <!-- Карточка с card-img-top -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="novogonyaa_skazka_v_Karelii.php"><img class="card-img exc_img" src="img/ngkareliya2.jpg" alt="Новогодняя сказка в Карелии"></a>
                    <h5 class="h5 text-center py-3"><a href="novogonyaa_skazka_v_Karelii.php">Экскурсионный тур <br>«Новогодняя сказка в Карелии»
                        </a></h5>
                    <!-- Текстовый контент (над изображением) -->
                </div><!-- Конец карточки -->
            </div>
            <!-- Карточка с card-img-top -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="Sugorie_ng.php"><img class="card-img exc_img" src="img/sugorie3.jpg" alt="Чудеса Нового года в Сугорье"></a>
                    <h5 class="h5 text-center py-3"><a href="Sugorie_ng.php">Событийный тур <br>«Чудеса Нового года в Сугорье»
                        </a></h5>
                    <!-- Текстовый контент (над изображением) -->
                </div><!-- Конец карточки -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <!-- Card -->
                <!-- Карточка с card-img-overlay -->
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="Piter_festival.php"><img class="card-img exc_img" src="img/festival.jpg" alt="Фестиваль света в Санкт-Петербурге"></a>
                    <!-- Текстовый контент (над изображением) -->
                    <h5 class="h5 text-center py-3"><a href="Piter_festival.php">Фестиваль света в Санкт-Петербурге</a></h5>
                    <!-- Текстовое содержимое карточки -->
                </div><!-- Конец карточки -->
                <!-- Card -->

            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <!-- Card -->
                <!-- Карточка с card-img-overlay -->
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="Kareliya.php"><img class="card-img exc_img" src="img/карелия.jpg" alt="Необыкновенная Карелия"></a>
                    <!-- Текстовый контент (над изображением) -->
                    <!-- Текстовое содержимое карточки -->
                    <h5 class="h5 text-center py-2"><a href="Kareliya.php">Необыкновенная Карелия.<br> Из глубины веков до наших дней</a></h5>
                </div><!-- Конец карточки -->
                <!-- Card -->

            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <!-- Card -->
                <!-- Карточка с card-img-overlay -->
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="Kazan.php"><img class="card-img exc_img" src="img/казань.jpg" alt="Две столицы: Казань и Йошкар-Ола"></a>
                    <!-- Текстовый контент (над изображением) -->

                    <!-- Текстовое содержимое карточки -->
                    <h5 class="h5 text-center py-2"><a href="Kazan.php">Экскурсионный тур <br>«Две столицы: Казань и Йошкар-Ола»</a></h5>
                </div><!-- Конец карточки -->
                <!-- Card -->

            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <!-- Card -->
                <!-- Карточка с card-img-overlay -->
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="Pskov.php"><img class="card-img exc_img" src="img/pskov.jpg" alt="ПСКОВ – ПУШКИНСКИЕ ГОРЫ"></a>
                    <!-- Текстовый контент (над изображением) -->
                    <!-- Текстовое содержимое карточки -->
                    <h5 class="h5 text-center py-3"><a href="Pskov.php">ПСКОВ – ПУШКИНСКИЕ ГОРЫ</a></h5>
                </div><!-- Конец карточки -->
                <!-- Card -->

            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <!-- Card -->
                <!-- Карточка с card-img-overlay -->
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="NizhniyNovgorod.php"><img class="card-img exc_img" src="img/nizhnij.jpg" alt="Нижний Новгород"></a>
                    <!-- Текстовый контент (над изображением) -->
                    <!-- Текстовое содержимое карточки -->
                    <h5 class="h5 text-center py-3"><a href="NizhniyNovgorod.php">Нижний Новгород</a></h5>
                </div><!-- Конец карточки -->
                <!-- Card -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-2">
                <!-- Card -->
                <!-- Карточка с card-img-overlay -->
                <div class="card bg-dark">
                    <!-- Изображение (фон карточки) -->
                    <a href="Tri_stolitci.php"><img class="card-img exc_img" src="img/tristolitsi1.jpg" alt="Три столицы: Казань, Йошкар-Ола и Чебоксары"></a>
                    <!-- Текстовый контент (над изображением) -->
                    <!-- Текстовое содержимое карточки -->
                    <h5 class="h5 text-center py-3"><a href="Tri_stolitci.php">Экскурсионный тур <br>«Три столицы: Казань, Йошкар-Ола и Чебоксары»</a></h5>
                </div><!-- Конец карточки -->
                <!-- Card -->

            </div>
        </div>

    </div>
    <!-- Card -->


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
    <script src="js/jquery.nice-select.min.js"></script>

    <!-- Bookform widget -->
</body>

</html>
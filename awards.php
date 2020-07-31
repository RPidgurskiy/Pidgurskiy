<!doctype html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>награды и отзывы</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
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
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
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


    <!-- Grid row -->
    <div class="container text-center p-5 w-100">
        <div class="row">
            <div class="col-12">

                <div id="mdb-lightbox-ui">
                    <h3 class="text-center shadow-sm pb-3" style="color:#151d86;">Наши награды</h3>

                    <div class="row">
                        <figure class="col-xl-4 col-md-6 col-sm-3">
                            <a href="img/certificate%201.png" data-size="1600x1067">
                                <img src="img/certificate%201.png" alt="" class="img-thumbnail">
                            </a>
                        </figure>

                        <figure class="col-xl-4 col-md-6 col-sm-3">
                            <a href="img/certificate2.png" data-size="1600x1067">
                                <img src="img/certificate2.png" alt="" class="img-thumbnail" />
                            </a>
                        </figure>

                        <figure class="col-xl-4 col-md-6 col-sm-3">
                            <a href="img/certificate3.png" data-size="1600x1067">
                                <img src="img/certificate3.png" alt="" class="img-thumbnail" />
                            </a>
                        </figure>

                        <figure class="col-xl-4 col-md-6 col-sm-3">
                            <a href="img/certificate4.png" data-size="1600x1067">
                                <img src="img/certificate4.png" alt="" class="img-thumbnail" />
                            </a>
                        </figure>

                        <figure class="col-xl-4 col-md-6 col-sm-3">
                            <a href="img/certificate5.png" data-size="1600x1067">
                                <img src="img/certificate5.png" alt="" class="img-thumbnail" />
                            </a>
                        </figure>
                    </div>
                </div>
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
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>


    <!-- Bookform widget -->
    <script>
        (function(w, d, s, o, f, js, fjs) {
            w['BookformObject'] = o;
            w[o] = w[o] || function() {
                (w[o].q = w[o].q || []).push(arguments)
            };
            js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
            js.id = o;
            js.src = f;
            js.async = 1;
            fjs.parentNode.insertBefore(js, fjs);
        }(window, document, 'script', 'Bookform', 'https://widget.bookform.ru/4426/js'));
        Bookform('floatingButton', {
            id: 4426
        });
    </script><!-- End Bookform widget -->
</body>

</html>
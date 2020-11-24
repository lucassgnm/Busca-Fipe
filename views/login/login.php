<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/buscaicon.ico" />
    <title>Login - BUSCA FIPE</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="assets/css/select2.min.css" rel="stylesheet">
    <!-- Custom styles (optional) -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/common/index.css" rel="stylesheet">
</head>

<body>

    <!-- Start project here-->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark smart-scroll danger-color">
        <a href="./"><img src="assets/images/buscalogo.png" class="img-fluid" alt="Responsive image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link waves-effect waves-light" href="./">Início<span class="sr-only">(current)</span></a>
                </li>
                <?php Session::init(); if (!Session::get("logado")) { ?>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="<?= URL ?>signin">Cadastre-se</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="<?= URL ?>opiniao">Opinião do dono</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informações</a>
                    <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item waves-effect waves-light" href="<?= URL ?>listaopinioes">Melhores avaliados</a>
                        <a class="dropdown-item waves-effect waves-light" href="<?= URL ?>porque">Por que avaliar?</a>
                    </div>
                </li>
            </ul>
            <?php Session::init();
            if (Session::get("logado") == true) { ?>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="#"><?php Session::init();
                                                                echo Session::get("email") ?></a>
                            <a class="dropdown-item" href="<?= URL ?>logout/run">Sair</a>

                        </div>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="login">Fazer login</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </nav>
    <!-- /Navbar -->

    <main>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col offset-md-2 col-md-8 offset-lg-3 col-lg-6" style="margin-top: 50px;">
                    <!--Panel-->
                    <div class="card card-price">
                        <div class="card-header danger-color white-text">
                            Fazer login
                        </div>
                        <div class="card-body">

                            <!-- Email -->
                            <input type="email" id="email" class="form-control mb-4" placeholder="E-mail">

                            <!-- Password -->
                            <input type="password" id="pwd" class="form-control mb-4" placeholder="Senha">
                        </div>
                        <section id="valorsection">
                            <div class="card-footer text-muted danger-color white-text">
                                <div class="row">
                                    <div class="col">
                                        <table class="table">
                                            <tbody>
                                                <div class="buton-options">
                                                    <button type="button" id="btn-login" style="margin:0 auto; display:block;" class="btn btn-rounded btn-amber btn-block"><i class="fas fa-sign-in-alt" aria-hidden="true"></i><span class="icon-button">LOGAR</span></button>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--/.Panel-->
                </div>
            </div>
        </div>
    </main>
    <!-- /Start project here-->
    <!-- Footer -->
    <footer class="page-footer font-small red-default">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> <img src="assets/images/buscalogo.png" class="img-fluid ml-5 mb-1" width="100px" mar alt="Responsive image"></a>
        </div>
        <!-- Copyright -->

    </footer>

    <!-- Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript " src="assets/js/jquery.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="assets/js/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="assets/js/mdb.min.js"></script>
    <!-- Select2 JavaScript -->
    <script type="text/javascript " src="assets/js/select2.min.js"></script>
    <!-- Axios -->
    <script type="text/javascript" src="assets/js/axios.min.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript " src="views/login/login.js"></script>
</body>

</html>
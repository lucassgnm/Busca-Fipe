<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/buscaicon.ico" />
    <title>Porque avaliar? - BUSCA FIPE</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="assets/css/select2.min.css" rel="stylesheet">
    <!-- Custom styles (optional) -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/common/porque.css" rel="stylesheet">
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
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="./">Início<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="<?= URL ?>signin">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="<?= URL ?>opiniao">Opinião do dono</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informações</a>
                    <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item waves-effect waves-light" href="<?= URL ?>listaopinioes">Melhores avaliados</a>
                        <a class="dropdown-item waves-effect waves-light" href="<?= URL ?>porque">Por que avaliar?</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Navbar -->

    <main>
        <div class='container-fluid mx-auto mt-5 col-md-10 mt-100'>
            <div class="header">
                <div class="title">Opiniões Importam</div>
                <p><small class="text-muted" style="font-size: 17px">
                    Somos uma empresa doméstica, globalmente conectada,
                    HUB experimental que se orgulha de sua criatividade
                    e inovação.</u> </small></p>
            </div>
            <div class="row" style="justify-content: center">
                <div class="card col-md-3 mt-100">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile"> <img src="assets/images/pessoas/jose.jpg"> </div>
                            <div class="card-title"> José Barbosa<br /> <small>Mecânico</small> </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> Esse site é maravilhoso, eles conseguem nos trazer informações muito atualizadas! </small> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3 mt-100">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile"> <img src="assets/images/pessoas/elias.jpg"> </div>
                            <div class="card-title"> Elias Nogueira<br /> <small>Estudante</small> </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> É muito bom contribuir com avaliações nesse site, é facil rápido e assim ajudo outras pessoas. </small> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3 mt-100">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile"> <img src="assets/images/pessoas/renata.jpg"> </div>
                            <div class="card-title"> Renata Silva<br /> <small>Diretora de RH</small> </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> É incrivel como os dados estão claros! Eu uso e recomendo. </small> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft">
                <a href="opiniao.html">
                    <div class="btn btn-amber">Avalie você tambem!</div>
                </a>
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
    <script type="text/javascript " src="assets/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="assets/js/mdb.min.js "></script>
    <!-- Select2 JavaScript -->
    <script type="text/javascript " src="assets/js/select2.min.js"></script>
    <!-- Axios -->
    <script type="text/javascript" src="assets/js/axios.min.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript " src="views/porque/porque.js"></script>
</body>

</html>
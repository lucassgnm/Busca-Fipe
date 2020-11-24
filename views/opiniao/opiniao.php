<!DOCTYPE html>
<html lang="en" class="full-height">

<style>
    @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    .rating {
        border: none;
        margin-right: 49px
    }

    .myratings {
        font-size: 85px;
        color: green
    }

    .rating>[id^="star"] {
        display: none
    }

    .rating>label:before {
        margin: 5px;
        font-size: 2.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005"
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute
    }

    .rating>label {
        color: #ddd;
        float: right
    }

    .rating>[id^="star"]:checked~label,
    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
        color: #FFD700
    }

    .rating>[id^="star"]:checked+label:hover,
    .rating>[id^="star"]:checked~label:hover,
    .rating>label:hover~[id^="star"]:checked~label,
    .rating>[id^="star"]:checked~label:hover~label {
        color: #FFED85
    }

    .reset-option {
        display: none
    }

    .reset-button {
        margin: 6px 12px;
        background-color: rgb(255, 255, 255);
        text-transform: uppercase
    }

    .mt-100 {
        margin-top: 100px
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/buscaicon.ico" />
    <title>Opinião do dono - BUSCA FIPE</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="assets/css/select2.min.css" rel="stylesheet">
    <!-- Toastr -->
    <link href="assets/css/toastr.min.css" rel="stylesheet">
    <!-- All Awesome -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles (optional) -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/common/opiniao.css" rel="stylesheet">
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
                    <a class="nav-link waves-effect waves-light" href="./">Início<span class="sr-only">(current)</span></a>
                </li>
                <?php Session::init();
                if (!Session::get("logado")) { ?>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="<?= URL ?>signin">Cadastre-se</a>
                    </li>
                <?php } ?>
                <li class="nav-item active">
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
        <div class="container-fluid px-1 px-md-4 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-11 col-lg-6 col-xl-6">
                    <div class="card card0 border-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card00 m-2 border-0">
                                    <form id="formOpiniao">
                                        <div class="row">
                                            <div class="text-center buton-options">
                                                <h5>Qual tipo de veículo você deseja avaliar?</h5>
                                                <button type="button" id="btn-opt-motos" value="moto" class="btn btn-type btn-rounded btn-amber btn-block"><i class="fas fa-motorcycle" aria-hidden="true"></i><span class="icon-button ml-2">MOTO</span></button>

                                                <button type="button" id="btn-opt-carros" value="carro" class=" btn btn-type btn-rounded btn-amber btn-block"><i class="fas fa-car" aria-hidden="true "></i><span class="icon-button ml-2">CARRO</span></button>

                                                <button type="button" id="btn-opt-caminhoes" value="caminhao" class="btn btn-type btn-rounded btn-amber btn-block"><i class="fas fa-truck-moving" aria-hidden="true"></i><span class="icon-button ml-2">CAMINHÃO</span></button>
                                            </div>
                                        </div>
                                        <div class="row text-center justify-content-center">
                                            <h5>Escolha a marca</h5>
                                        </div>
                                        <div class="row row-select flex-box">
                                            <select class="select-marca index-selects" id="marca" name="marca">
                                                <!-- Select options -->
                                            </select>
                                        </div>
                                        <div class="row text-center justify-content-center">
                                            <h5>Escolha ao modelo</h5>
                                        </div>
                                        <div class="row row-select flex-box">
                                            <select class="select-modelo index-selects" id="modelo" name="modelo">
                                                <!-- Select options -->
                                            </select>
                                        </div>
                                        <div class="row text-center justify-content-center">
                                            <h5>Escolha o ano</h5>
                                        </div>
                                        <div class="row row-select flex-box">
                                            <select class="select-ano index-selects" id="ano" name="ano">
                                                <!-- Select options -->
                                            </select>
                                        </div>
                                        <div class="row justify-content-center mt-5 text-center">
                                            <h5>Avalie os itens abaixo de acordo com suas experiencia</h5>
                                        </div>
                                        <table class="table table-striped justify-content-center text-center">
                                            <thead>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><h3 class="mt-3">Nota geral</h3></th>
                                                    <td>
                                                        <fieldset class="rating"> <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label> <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label> <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label> <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label> <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label> <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label> <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> <input type="radio" class="reset-option" name="rating" value="reset" /> </fieldset>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="form-group mt-5 justify-content-center text-center">
                                            <h5 for="txtPtsPositivos">Pontos positivos</h5>
                                            <textarea class="form-control" id="txtPtsPositivos" name="txtPtsPositivos" rows="3"></textarea>
                                        </div>
                                        <div class="form-group mt-1 justify-content-center text-center">
                                            <h5 for="txtPtsNegativos">Pontos negativos</h5>
                                            <textarea class="form-control" id="txtPtsNegativos" name="txtPtsNegativos" rows="3"></textarea>
                                        </div>
                                        <div class="form-group mt-1 justify-content-center text-center">
                                            <h5 for="txtDefeitosApr">Defeitos apresentados</h5>
                                            <textarea class="form-control" id="txtDefeitosApr" name="txtDefeitosApr" rows="3"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col border border-light ml-4 mr-4 mb-0">
                                                <div class="form-row justify-content-center mb-2 mt-2">
                                                    <button type="button" id="btnEnviaAval" class="btn btn-rounded btn-amber"><i class="fas fa-paper-plane" aria-hidden="true"></i><span class="icon-button ml-2">ENVIAR AVALIAÇÂO</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3" style="background-color: #fff">
                                            <div class="row px-3">
                                                <div class="col justify-content-center text-center">
                                                    <img src="assets/images/buscalogoblackborder.png" class="img-fluid w-100" alt="Responsive image"><br>
                                                    <h6 style="margin-top: 5px">Sempre ao lado dos apaixonados por automóveis</h6>
                                                </div>
                                                <div class="col justify-content-center text-center">
                                                    <img class="img-fluid w-100" src="assets/images/marcas-carros.webp" alt="Responsive image">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script type="text/javascript " src="assets/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="assets/js/mdb.min.js "></script>
    <!-- Select2 JavaScript -->
    <script type="text/javascript " src="assets/js/select2.min.js"></script>
    <!-- Axios -->
    <script type="text/javascript" src="assets/js/axios.min.js"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <!-- Rating -->
    <script type="text/javascript" src="assets/js/addons/rating.min.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript " src="views/opiniao/opiniao.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</body>

</html>
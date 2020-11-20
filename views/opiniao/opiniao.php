<!DOCTYPE html>
<html lang="en" class="full-height">

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
                    <a class="nav-link waves-effect waves-light" href="./">Início<span
                        class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="<?= URL ?>signin">Cadastre-se</a>
                </li>
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
                                    <div class="row">
                                        <div class="text-center buton-options">
                                            <h5>Qual tipo de veículo você deseja avaliar?</h5>
                                            <button type="button" id="btn-opt-motos" class="btn btn-type btn-rounded btn-amber btn-block"><i class="fas fa-motorcycle" aria-hidden="true"></i><span class="icon-button ml-2">MOTO</span></button>

                                            <button type="button" id="btn-opt-carros" class=" btn btn-type btn-rounded btn-amber btn-block"><i class="fas fa-car" aria-hidden="true "></i><span class="icon-button ml-2">CARRO</span></button>

                                            <button type="button" id="btn-opt-caminhoes" class="btn btn-type btn-rounded btn-amber btn-block"><i class="fas fa-truck-moving" aria-hidden="true"></i><span class="icon-button ml-2">CAMINHÃO</span></button>
                                        </div>
                                    </div>
                                    <div class="row text-center justify-content-center">
                                        <h5>Escolha a marca</h5>
                                    </div>
                                    <div class="row row-select flex-box">
                                        <select class="select-marca index-selects" name="state">
                                                    <!-- Select options -->
                                        </select>
                                    </div>
                                    <div class="row text-center justify-content-center">
                                        <h5>Escolha ao modelo</h5>
                                    </div>
                                    <div class="row row-select flex-box">
                                        <select class="select-modelo index-selects" name="state">
                                                <!-- Select options -->
                                        </select>
                                    </div>
                                    <div class="row text-center justify-content-center">
                                        <h5>Escolha o ano</h5>
                                    </div>
                                    <div class="row row-select flex-box">
                                        <select class="select-ano index-selects" name="state">
                                                    <!-- Select options -->
                                        </select>
                                    </div>
                                    <div class="row justify-content-center mt-5 text-center">
                                        <h5>Avalie os itens abaixo de acordo com suas experiencia</h5>
                                    </div>
                                    <table class="table table-striped justify-content-center text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Característica</th>
                                                <th scope="col">Sua nota</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Estilo</th>
                                                <td><span class="rating-faces rateme1"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Acabamento</th>
                                                <td><span class="rating-faces rateme2"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Posição de dirigir</th>
                                                <td><span class="rating-faces rateme3"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Desempenho</th>
                                                <td><span class="rating-faces rateme4"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Motor</th>
                                                <td><span class="rating-faces rateme5"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Câmbio</th>
                                                <td><span class="rating-faces rateme6"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Freios</th>
                                                <td><span class="rating-faces rateme7"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Suspenção</th>
                                                <td><span class="rating-faces rateme8"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Estabilidade</th>
                                                <td><span class="rating-faces rateme9"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Custo-beneício</th>
                                                <td><span class="rating-faces rateme10"></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Recomendação</th>
                                                <td><span class="rating-faces rateme11"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group mt-5 justify-content-center text-center">
                                        <h5 for="exampleFormControlTextarea3">Pontos positivos</h5>
                                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                                    </div>
                                    <div class="form-group mt-1 justify-content-center text-center">
                                        <h5 for="exampleFormControlTextarea3">Pontos negativos</h5>
                                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                                    </div>
                                    <div class="form-group mt-1 justify-content-center text-center">
                                        <h5 for="exampleFormControlTextarea3">Defeitos apresentados</h5>
                                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                                    </div>
                                    <div class="form-group mt-1 justify-content-center text-center">
                                        <h5 for="exampleFormControlTextarea3">Opinião geral</h5>
                                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                                    </div>
                                    <h5 class="text-center mt-1">Seus dados</h5>
                                    <div class="row">
                                        <div class="col border border-light ml-4 mr-4 rounded mb-0">
                                            <div class="form-row">
                                                <div class="col col-12 col-md-6">
                                                    <!-- First name -->
                                                    <div class="md-form">
                                                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                                                        <label for="materialRegisterFormFirstName">Nome</label>
                                                    </div>
                                                </div>
                                                <div class="col col-12 col-md-6">
                                                    <!-- Last name -->
                                                    <div class="md-form">
                                                        <input type="email" id="materialRegisterFormLastName" class="form-control">
                                                        <label for="materialRegisterFormLastName">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row justify-content-center mb-2">
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
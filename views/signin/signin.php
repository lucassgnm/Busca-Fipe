<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/buscaicon.ico" />
    <title>Cadastro - BUSCA FIPE</title>
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
    <link href="assets/css/common/signin.css" rel="stylesheet">
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
                <li class="nav-item active">
                    <a class="nav-link waves-effect waves-light" href="<?= URL ?>signin">Cadastre-se</a>
                </li>
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
        </div>
    </nav>
    <!-- /Navbar -->

    <main>
        <div class="container-fluid px-1 px-md-4 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                    <div class="card card0 border-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card00 m-2 border-0">
                                    <div class="row text-center justify-content-center px-3">
                                        <p class="prev text-danger"><span class="fa fa-long-arrow-left"> Voltar</span></p id="back">
                                        <h3 class="mt-4">Registre-se</h3>
                                    </div>
                                    <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                                        <div class="col-md-6">
                                            <div class="card1">
                                                <ul id="progressbar" class="text-center">
                                                    <li class="active step0"></li>
                                                    <li class="step0"></li>
                                                    <li class="step0"></li>
                                                    <li class="step0"></li>
                                                </ul>
                                                <h6 class="mb-5">Insira seu email</h6>
                                                <h6 class="mb-5">Insira sua senha</h6>
                                                <h6 class="mb-5">Insira seu país</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card2 first-screen show ml-2">
                                                <div class="row text-center px-3 mr-2">
                                                    <div class="mb-2 col-2"> <span class="fab fa-reddit social"></span> </div>
                                                    <div class="mb-2 col-2"> <span class="fab fa-facebook social"></span> </div>
                                                    <div class="mb-2 col-2"> <span class="fab fa-linkedin social"></span> </div>
                                                    <div class="mb-2 col-2"> <span class="fab fa-google-plus social"></span> </div>
                                                    <div class="mb-2 col-2"> <span class="fab fa-twitter social"></span> </div>
                                                    <div class="mb-2 col-2"> <span class="fab fa-dropbox social"></span> </div>
                                                </div>
                                                <div class="row px-3 mt-4">
                                                    <div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control" required> <label class="ml-3 form-control-placeholder" for="email">Email</label> </div>
                                                    <div class="next-button1 text-center mt-1 ml-2" id="btn-email"> <span class="fa fa-arrow-right"></span> </div>
                                                </div>
                                                <div class="row px-3 mt-1 mb-5">
                                                    <div class="custom-control custom-checkbox"> <input checked id="customCheck1" type="checkbox" class="custom-control-input"> <label for="customCheck1" class="custom-control-label">Eu desejo receber emails</label> </div>
                                                </div>
                                            </div>
                                            <div class="card2 ml-2">
                                                <div class="row px-3 mt-3">
                                                    <div class="form-group mt-1 mb-1"> <input type="password" id="pwd" class="form-control" required> <label class="ml-3 form-control-placeholder" for="pwd">Senha</label> </div>
                                                    <div class="next-button2 text-center mt-1 ml-2" id="btn-senha"> <span class="fa fa-arrow-right"></span> </div>
                                                </div>
                                                <div class="row mt-3 mb-5">
                                                    <div class="col-12">
                                                        <p class="mb-1">A senha precisa ter</p>
                                                        <div class="row">
                                                            <div class="col-6"><span class="fa fa-circle text-danger"></span> minúsculas</div>
                                                            <div class="col-6"><span class="fa fa-circle text-danger"></span> números</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6"><span class="fa fa-circle text-danger"></span> maiúsculas</div>
                                                            <div class="col-6"><span class="fa fa-circle text-danger"></span> 8-16 caracteres</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card2 ml-2">
                                                <div class="row px-3 mt-3">
                                                    <p class="mb-0">Selecione seu país</p>
                                                    <div class="form-group mt-3 mb-4">
                                                        <div class="select mb-3"> 
                                                            <select name="account" class="form-control sel-paises">
                                                                
                                                            </select> 
                                                        </div>
                                                    </div>
                                                    <div class="next-button3 text-center mt-3 ml-2"> <span class="fa fa-arrow-right"></span> </div>
                                                </div>
                                            </div>
                                            <div class="card2 ml-2">
                                                <div class="row px-3 mt-2 mb-4 text-center">
                                                    <h2 class="col-12 text-danger"><strong>Pronto!</strong></h2>
                                                    <div class="col-12 text-center"><img class="tick" src="https://i.imgur.com/WDI0da4.gif"></div>
                                                    <h6 class="col-12 mt-2"><i>Aproveite nossas novidades!</i></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row px-3">
                                        <h2 class="text-muted get-bonus mt-4 mb-5">Aproveite.</h2><img class="pic ml-auto mr-3" src="assets/images/marcas-carros.webp">
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
    <!-- Custom JavaScript -->
    <script type="text/javascript " src="views/signin/signin.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</body>

</html>